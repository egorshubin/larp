<?php

namespace App\Http\Controllers;

use App\Models\Duck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DuckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('duckcreate', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Duck::create(['color' => $request->get('color')]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return view('duck', [
            'duck' => Duck::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Duck $duck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        DB::table('ducks')
            ->where('id', $id)
            ->update(['color' => $request->get('color')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        DB::table('ducks')
            ->where('id', $id)
            ->delete();
    }
}
