<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $presence = Presence::latest()->paginate(5);

        return view('home.index', compact('presence'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'divisi' => 'required',
            'jam' => 'required',
            'ket' => 'required',
        ]);

        

        Presence::create($request->all());

        

        return redirect('/')->with('success','Data siswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($presences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =Presence ::where('id', '=', $id)->firstOrFail();
        return view('home.edit', compact('data'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'divisi' => 'required',
            'jam' => 'required',
            'ket' => 'required',
        ]);
        // dd($request->all());
        Presence::where('id', '=', $id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'rombel' => $request->rombel,
            'divisi' => $request->divisi,
            'jam' => $request->jam,
            'ket' => $request->ket,
        ]);

        return redirect()->route('home')->with('success','Data siswa berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Presence::where('id', '=', $id)->delete();

        return redirect()->back()->with('success','Data siswa berhasil dihapus');
    }
}
