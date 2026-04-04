<?php

namespace App\Http\Controllers;

use App\Models\Help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function index() {
        return view('help.index');
    }

    public function helpGuide() {
        return view('help.question-guide');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Help $help)
    {
        //
    }

    public function edit(Help $help)
    {
        //
    }

    public function update(Request $request, Help $help)
    {
        //
    }

    public function destroy(Help $help)
    {
        //
    }
}
