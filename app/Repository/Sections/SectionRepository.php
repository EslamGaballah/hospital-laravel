<?php

namespace App\Repository\Sections;   

use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Section;

class SectionRepository implements SectionRepositoryInterface 
{     
   
    public function index()
    {
        $sections = Section::all();
        return view('Dashboard.Sections.index', compact('sections'));
    }

    public function store($request)
    {
        Section::create([
            'name' => $request->input('name'),
        ]);
        session()->flash('add');
        return redirect()->route('sections.index');
    }
    public function update($request)
    {
        $section = Section::findOrFail($request->id);
        $section->update([
            'name' => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('sections.index');
    }

    public function destroy($request)
    {
         Section::findOrFail($request->id)->delete();
        
        session()->flash('delete');
        return redirect()->route('sections.index');
    }

    public function show($id)
    {
        // $xx = Doctor::where('section_id', $id)->get();
        $doctors = Section::findOrFail($id)->doctors;        

        // foreach ($doctors as $doctor) {

        //     return $doctor->name;
        // }

        $doctors = Section::findOrFail($id)->doctors;
        $section = Section::findOrFail($id);
        return view('Dashboard.Sections.show_doctors', compact('doctors', 'section'));
    }

}


?>