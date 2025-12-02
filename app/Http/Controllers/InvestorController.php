<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InvestorController extends Controller
{
    public function index()
    {
        $investors = Investor::all();
        return view('investor.index', compact('investors'));
    }

    public function create()
    {
        return view('investor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'investor_id' => 'required|unique:investors,investor_id',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $investor = Investor::create([
            'investor_id' => $request->investor_id,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $response = Http::post('https://exam.cardinalalpha.com/api/investor', [
            'id' => $investor->investor_id,
            'name' => $investor->name,
            'email' => $investor->email,
        ]);

        if ($response->failed()) {
            return back()->with('error', 'Failed to push investor to API.');
        }

        return redirect()->route('investor.index')->with('success', 'Investor created and pushed to API.');
    }

    // Show form to edit existing investor
    public function edit($id)
    {
        $investor = Investor::findOrFail($id);
        return view('investor.edit', compact('investor'));
    }

    // Update investor locally and push to API
    public function update(Request $request, $id)
    {
        $investor = Investor::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // Update locally
        $investor->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Push updated data to API
        $apiUrl = "https://exam.cardinalalpha.com/api/investor/{$investor->investor_id}";
        $response = Http::put($apiUrl, [
            'id' => $investor->investor_id,
            'name' => $investor->name,
            'email' => $investor->email,
        ]);

        if ($response->failed()) {
            return back()->with('error', 'Failed to update investor on API.');
        }

        return redirect()->route('investor.index')->with('success', 'Investor updated and pushed to API.');
    }

    // public function pullInvestors()
    // {
    //     $url = "https://api.com/investors";
    //     $response = Http::get($url);

    //     if (!$response->successful()) {
    //         return back()->with('error', 'Failed to pull investors');
    //     }

    //     foreach ($response->json() as $item) {
    //         Investor::updateOrCreate(
    //             ['investor_id' => $item['id']],
    //             [
    //                 'name'  => $item['name'] ?? null,
    //                 'email' => $item['email'] ?? null
    //             ]
    //         );
    //     }

    //     return back()->with('success', 'Investor data synced!');
    // }

    public function pullInvestors()
    {
        $path = public_path('test_data/investors.json');
        $data = json_decode(file_get_contents($path), true);

        foreach ($data as $item) {
            Investor::updateOrCreate(
                ['investor_id' => $item['id']],
                [
                    'name'  => $item['name'] ?? null,
                    'email' => $item['email'] ?? null
                ]
            );
        }

        return back()->with('success', 'Investor data synced!');
    }
}

?>
