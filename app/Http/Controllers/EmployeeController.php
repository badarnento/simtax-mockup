<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Services\BaseDataTableService;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index');
    }

    
    public function getListing(Request $request, BaseDataTableService $datatableService)
    {
        $query = Employee::select(['id', 'name', 'email', 'phone', 'position', 'department', 'salary', 'hire_date']);

        return response()->json(
            $datatableService->getData($request, $query, function ($employee, $number) {
                $formattedAmount = 'Rp ' . number_format($employee->salary, 2, ',', '.');
                return [
                    'id'         => $employee->id,
                    'no'         => $number,
                    'name'       => $employee->name,
                    'email'      => $employee->email,
                    'phone'      => $employee->phone,
                    'position'   => $employee->position,
                    'department' => $employee->department,
                    'salary'     => $formattedAmount,
                    'hire_date'  => Carbon::parse($employee->hire_date)->format('d-m-Y'),
                ];
            }, Employee::$searchableColumns)
        );
    }
}
