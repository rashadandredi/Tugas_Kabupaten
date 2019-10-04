<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\modelKab;
use Validator;

class kab extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = modelKab::all();

      return view('Kab', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kab_create');
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
          'code' => 'required',
          'description' => 'required',
        ]);

        $data = new modelKab();
        $data->code = $request->code;
        $data->description = $request->description;
        $data->save();

              return redirect()->route('kab.index')->with('alert_message', 'Berhasil menambah data!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = modelKab::where('id', $id)->get();
      return view('kab_edit', compact('data'));
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
      $this->validate($request, [
        'code' => 'required',
        'description' => 'required',
      ]);

      $data = modelKab::where('id', $id)->first();
      $data->code = $request->code;
      $data->description = $request->description;
      $data->save();

            return redirect()->route('kab.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = modelKab::where('id', $id)->first();
      $data->delete();

      return redirect()->route('kab.index')->with('alert_message', 'Berhasil menghapus data!');
    }
}
