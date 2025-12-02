<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FundController extends Controller
{
    public function index()
    {
        $funds = Fund::all();
        return view('fund.index', compact('funds'));
    }

    // public function pullFunds()
    // {
    //     $url = "https://api.com/funds";
    //     $response = Http::get($url);

    //     if (!$response->successful()) {
    //         return back()->with('error', 'Failed to pull funds');
    //     }

    //     foreach ($response->json() as $item) {
    //         Fund::updateOrCreate(
    //             ['fund_id' => $item['id']],
    //             [
    //                 'fund_name' => $item['name'] ?? null,
    //                 'category'  => $item['category'] ?? null
    //             ]
    //         );
    //     }

    //     return back()->with('success', 'Fund data synced!');
    // }

    public function pullFunds()
    {
        $path = public_path('test_data/funds.json');
        $data = json_decode(file_get_contents($path), true);

        foreach ($data as $item) {
            Fund::updateOrCreate(
                ['fund_id' => $item['id']],
                [
                    'fund_name' => $item['name'] ?? null,
                    'category'  => $item['category'] ?? null
                ]
            );
        }

        return back()->with('success', 'Fund data synced!');
    }
}

?>
