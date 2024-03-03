<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SalesRepositoryInterface;

class SalesController extends Controller
{
    private SalesRepositoryInterface $salesRepository;

    public function __construct(SalesRepositoryInterface $salesRepository)
    {
        // Dependency injection
        $this->salesRepository = $salesRepository;
    }
    public function index()
    {
        $sales = $this->salesRepository->all();
        return response()->json($sales);
    }

    public function store(Request $request)
    {
        $sales = $this->salesRepository->create($request->all());
        return response()->json($sales);
    }

    public function show($id)
    {
        $sales = $this->salesRepository->find($id); 
        return response()->json($sales);
    }

    public function update(Request $request, $id)
    {
        $sales = $this->salesRepository->update($id, $request->all());
        return $sales;
    }

    public function destroy($id)
    {
        $this->salesRepository->delete($id);
    }
}