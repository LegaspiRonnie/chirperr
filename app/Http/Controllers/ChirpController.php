<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chirp;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ChirpController extends Controller
{
    use AuthorizesRequests;

    public function index() 
    {
        $chirps = Chirp::with('user')
        ->latest()
        ->take(50)
        ->get();

        return view ('home', ['chirps' => $chirps]);
    } 

        public function store(Request $request, Chirp $chirp)
        {
            // $this->authorize('update', $chirp);
            
            $validated = $request->validate([
                'message' => 'required|string|max:255',
            ]);

            auth()->user()->chirps()->create($validated);
            
            
            return redirect('/')->with('success', "Chirp successfully posted");
        }

    public function edit(Chirp $chirp) 
    {
        $this->authorize('update', $chirp);

        return view('chirps.edit', compact(['chirp']));
    }

    public function update(Request $request, Chirp $chirp) 
    {
        $this->authorize('update', $chirp);

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp->update($validated);

        return redirect('/')->with('success', "Chirp Updated successfully");
    }

    public function destroy(Chirp $chirp)
    {
        $this->authorize('update', $chirp);
        $chirp->delete();
        return redirect('/')->with('success', "Chirp Deleted successfully");
    }
}
