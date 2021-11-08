<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;
use App\Models\Types;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Case Files";
        $files = files::paginate(6);
        Paginator::useBootstrap();
        $types = types::all();

        return view('caseFile', compact('title', 'files', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = types::all();
        return view('addFile', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'case_name' =>'required'
        ]);

        files::create([
            'case_name' => $request->case_name,
            'defendant' => $request->defendant,
            'offence' => $request->offence,
            'prosecutor' => $request->prosecutor,
            'status' => $request->status
            //yg bagian kiri itu sesuai kolom di db, kalau dikanan harus sesuai dengan form
        ]);
        return redirect(route('Files.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $files = files::where('case_name', $id)->first();

        return view('viewFile', compact('files'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $files = files::findOrFail($id);
        $types = types::all();

        return view('editFile', compact('files', 'types'));
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
        $files = files::findOrFail($id);
        $files->update([
            'case_name' => $request->case_name,
            'offence' => $request->offence,
            'defendant' => $request->defendant,
            'prosecutor' => $request->prosecutor,
            'status' => $request->status
        ]);

        return redirect(route('Files.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $files = files::findOrFail($id);
        $files->delete();
        return redirect(route('Files.index'));
    }
}
