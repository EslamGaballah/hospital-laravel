<?php
namespace App\Interfaces\Sections;

interface SectionRepositoryInterface
{
  
    //  get all sections
public function index();

public function store($request);

public function destroy($request);



}
?>