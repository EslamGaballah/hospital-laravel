<?php
namespace App\Interfaces\Sections;

interface SectionRepositoryInterface
{
  
    //  get all sections
public function index();

public function store($request);
public function update($request);

public function destroy($request);

public function show($id);



}
?>