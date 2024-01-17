<?php
namespace App\Interfaces\Doctors;

interface DoctorRepositoryInterface
{
  
    //  get all sections
public function index();
public function create();

public function store($request);

public function destroy($request);



}
?>