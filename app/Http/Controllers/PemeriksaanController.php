<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    /**
    *Display a listing of the resource.
    */

    public function index()
    {
        return view('formkesehatan');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * store a newly 
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'tgl_pemeriksaan' => 'required',
            'tgl_lahir_usia' => 'required',
            'jenis_kelamin' => 'required',

        ]);
            return view('hasil', ['data' => $request]);
    }
}
