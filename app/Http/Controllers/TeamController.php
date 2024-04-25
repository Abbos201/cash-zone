<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.Team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.   
     */
    public function create()
    {
        return view('admin.Team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'mimes:png,jpg',
            'name' => 'required',
            'work' => 'required',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store("Team", 'public');
        }

        Team::create([
            'image' => $path,
            'name' => $request->name,
            'work' => $request->work,
        ]);

        return redirect()->route('teams.index')->with('success', "Yangi team qo'shildi");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = Team::findOrFail($id);
        return view('admin.Team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::findOrFail($id);
        return view('admin.Team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'image' => 'mimes:png,jpg',
            'name' => 'required',
            'work' => 'required',
        ]);

        $path = $team->image;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store("Team", 'public');
        }

        $team->update([
            'image' => $path,
            'name' => $request->name,
            'work' => $request->work,
        ]);

        return redirect()->route('teams.index')->with('success', "Team ma'lumotlari yangilandi");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('teams.index')->with('success', "Team o'chirildi");
    }
}
