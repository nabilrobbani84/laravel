<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForminputController extends Controller
{
    /**
    *Display a listing of the resource.
    */

    public function index()
    {
        return view('forminput');
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
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill_html' => 'required',
            'skill_css' => 'required',
            'skill_python' => 'required',
            'skill_php' => 'required',
            'skill_javascript' => 'required',
            'skill_mysql' => 'required',
        ]);
            return view('hasilinput', ['data' => $request]);
    }
}


    