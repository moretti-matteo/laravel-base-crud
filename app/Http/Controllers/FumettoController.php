<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fumetto;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = Fumetto::all();

        return view('fumetti.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumetti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:80',
            'type' => 'required|max:50',
            'thumb' => 'nullable|max:255',
            'price' => 'required|numeric|max:999.99',
            'description' => 'required|max:2000',
            'series' => 'required|max:255'
        ]);
        $data = $request->all();
        $fumetto = new Fumetto();
        

        $fumetto->fill($data);
        // $fumetto->title = $data['title'];
        // $fumetto->description = $data['description'];
        // $fumetto->thumb = $data['thumb'];
        // $fumetto->price = $data['price'];
        // $fumetto->sale_date = $data['sale_date'];
        // $fumetto->type = $data['type'];
        // $fumetto->series = $data['series'];

        $fumetto->save();

        return redirect()->route('fumetti.show', $fumetto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fumetto = Fumetto::find($id);
        return view('fumetti.show', compact('fumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fumetto = Fumetto::find($id);
        return view('fumetti.edit', compact('fumetto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $fumetto = Fumetto::find($id);
        $fumetto->update($data);

        return redirect()->route('fumetti.show', $fumetto->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fumetto = Fumetto::find($id);

        $fumetto->delete();

        return redirect()->route('fumetti.index');
    }
}
