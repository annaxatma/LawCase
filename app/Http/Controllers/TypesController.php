<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Types;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Crime Types";
        $types = types::paginate(6);
        Paginator::useBootstrap();

        return view('crimeType', compact('title', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addType');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = Str::upper(Str::substr($request->offence, 0, 3));

        types::create([
            'code' => $code,
            'category' => $request->category,
            'offence' => $request->offence,
            'definition' => $request->definition,
            'sentence' => $request->sentence
            //yg bagian kiri itu sesuai kolom di db, kalau dikanan harus sesuai dengan form
        ]);
        return redirect(route('Types.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = types::where('code', $id)->first();

        return view('viewType', compact('types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = types::findOrFail($id);

        return view('editType', compact('types'));
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
        $code = Str::upper(Str::substr($request->offence, 0, 3));

        $types = types::findOrFail($id);
        $types->update([
            'code' => $code,
            'category' => $request->category,
            'offence' => $request->offence,
            'definition' => $request->definition,
            'sentence' => $request->sentence
        ]);

        return redirect(route('Types.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $types = types::findOrFail($id);
        $types->delete();
        return redirect(route('Types.index'));
    }
}
