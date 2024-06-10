<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{

    protected $employee;
    public function __construct(){

        $this->employee = new Employee();
        
    }

    public function index()
    {
        $response['employees'] = $this->employee->all();
        return view('pages.index')->with($response);
    }
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
        $this->employee->create($request->all());
        return redirect()->back();

    }
    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
