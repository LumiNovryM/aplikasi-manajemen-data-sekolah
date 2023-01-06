<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ExtracurricularController extends Controller
{
    # Index Data
    public function index()
    {
        $title = "Extracurricular";
        $eskul = Extracurricular::with('students')->get();
        return view('extracurricular',[
            "eskullist" => $eskul,
            "title" => $title
        ]);
    }

    # Detail Data
    public function show($id)
    {
        $eskul = Extracurricular::with('students')->findOrFail($id);
        return view('extracurricular-detail',[
            "eskul" => $eskul,
            "title" => "Extracurriculars"
        ]);
    }

    # Create Data
    public function create()
    {
        return view('extracurricular-add',[
            "title" => "Extracurriculars"
        ]);
    }

    # Create Action 
    public function store(Request $request)
    {
        Extracurricular::create($request->all());
        return redirect('/extracurricular');
    }

    # Update Data 
    public function edit($id)
    {
        $eskul = Extracurricular::findOrFail($id);
        return view('extracurricular-edit',[
            "eskul" => $eskul,
            "title" => "Extracurriculars"
        ]);
    }

    # Update Data Action 
    public function update(Request $request, $id)
    {
        $eskul = Extracurricular::findOrFail($id);
        $eskul->update($request->all());
        return redirect('/extracurricular');
    }
}
