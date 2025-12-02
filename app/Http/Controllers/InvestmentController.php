<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InvestmentController extends Controller
{
    public function index()
    {
        $investments = Investment::all();
        return view('investment.index', compact('investments'));
    }

    // public function pullInvestments()
    // {
    //     $url = "https://api.com/investments";
    //     $response = Http::get($url);

    //     if (!$response->successful()) {
    //         return back()->with('error', 'Failed to pull investments');
    //     }

    //     foreach ($response->json() as $item) {
    //         Investment::updateOrCreate(
    //             ['investment_id' => $item['id']],
    //             [
    //                 'investor_id' => $item['investor_id'],
    //                 'fund_id'     => $item['fund_id'],
    //                 'amount'      => $item['amount'] ?? 0
    //             ]
    //         );
    //     }

    //     return back()->with('success', 'Investment data synced!');
    // }

    public function pullInvestments()
    {
        $path = public_path('test_data/investments.json');
        $data = json_decode(file_get_contents($path), true);

        foreach ($data as $item) {
            Investment::updateOrCreate(
                ['investment_id' => $item['id']],
                [
                    'investor_id' => $item['investor_id'],
                    'fund_id'     => $item['fund_id'],
                    'amount'      => $item['amount'] ?? 0
                ]
            );
        }

        return back()->with('success', 'Investment data synced!');
    }
}

?>
