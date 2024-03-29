<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSingleServiceRequest;
use Illuminate\Http\Request;
use App\Interfaces\Services\SingleServiceRepositoryInterface;

class SingleServiceController extends Controller
{
  
    private $SingleService;

    public function __construct(SingleServiceRepositoryInterface $SingleService)
    {
        $this->SingleService = $SingleService;
    }
    public function index()
    {
      
       return $this->SingleService->index();

    }
    
    public function create()
    {
        //
    }

    public function store(StoreSingleServiceRequest $request)
    {
       return $this->SingleService->store($request);
        
    }

       public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
    }

    public function update(StoreSingleServiceRequest  $request)
    {
        return $this->SingleService->update($request);
    }

    public function destroy(Request $request)
    {
        return $this->SingleService->destroy($request);

    }
}
