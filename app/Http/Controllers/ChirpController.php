<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index() 
    {
        $chirps = Chirp::with('user')
        ->latest()
        ->take(50)
        ->get();

        return view ('home', ['chirps' => $chirps]);
    } 

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        Chirp::create([
            'message' => $validated['message'],
            // 'user_id' => null,
        ]);

        return redirect('/')->with('success', "Chirp successfully posted");
    }

    public function edit(Chirp $chirp) 
    {
        return view('chirps.edit', compact(['chirp']));
    }

    public function update(Request $request, Chirp $chirp) 
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp->update($validated);

        return redirect('/')->with('success', "Chirp Updated successfully");
    }

    public function destroy(Chirp $chirp)
    {
        $chirp->delete();
        return redirect('/')->with('success', "Chirp Deleted successfully");
    }
}
