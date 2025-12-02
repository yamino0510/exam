<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index()
    {
        $csvPath = public_path('sample_data.csv');

        if (!file_exists($csvPath)) {
            return view('graph.index')->with([
                'dates'         => [],
                'equity'        => [],
                'annualReturn'  => 0,
                'sharpeRatio'   => 0,
                'maxDrawdown'   => 0,
                'calmarRatio'   => 0,
            ]);
        }

        $rows = array_map('str_getcsv', file($csvPath));
        $header = array_shift($rows);

        $dates = [];
        $equity = [];
        $pnl = [];

        foreach ($rows as $row) {
            $dates[] = $row[0];
            $pnl[] = (float)$row[1];
            $equity[] = (float)$row[3];
        }

        //4a. Annual Return = mean of daily PnL x 365
        $meanPnl = count($pnl) ? array_sum($pnl) / count($pnl) : 0;
        $annualReturn = $meanPnl * 365 * 100;

        //4b. Sharpe Ratio = (mean of pnl / standard deviation of pnl) * square root of 365
        $sdPnl = $this->stdDev($pnl);
        $sharpeRatio = $sdPnl == 0 ? 0 : ($meanPnl / $sdPnl) * sqrt(365);

        //4c. Maximum Drawdown maximum drawdown = Max of DD
        $maxDrawdown = $this->maxDrawdown($equity);

        //4d. Calmar Ratio = Annual Return / |Max Drawdown|
        $calmarRatio = $maxDrawdown == 0 ? 0 : ($annualReturn / abs($maxDrawdown));

        return view('graph.index', [
            'dates'         => $dates,
            'equity'        => $equity,
            'annualReturn'  => round($annualReturn, 4),
            'sharpeRatio'   => round($sharpeRatio, 4),
            'maxDrawdown'   => round($maxDrawdown, 4),
            'calmarRatio'   => round($calmarRatio, 4),
        ]);
    }

    //Standard deviation
    private function stdDev($arr)
    {
        if (count($arr) <= 1) return 0;
        $mean = array_sum($arr) / count($arr);
        $variance = array_sum(array_map(fn($x) => pow($x - $mean, 2), $arr)) / (count($arr) - 1);
        return sqrt($variance);
    }

    //Maximum Drawdown in percentage
    private function maxDrawdown($equity)
    {
        $peak = $equity[0];
        $maxDD = 0;

        foreach ($equity as $v) {
            if ($v > $peak) $peak = $v;
            $dd = ($v - $peak) / $peak;
            if ($dd < $maxDD) $maxDD = $dd;
        }

        return $maxDD * 100;
    }
}

?>
