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
            $datatableService->getData($request, $query, function ($user, $number) {
                $formattedAmount = 'Rp ' . number_format($user->salary, 2, ',', '.');
                return [
                    'id'         => $user->id,
                    'no'         => $number,
                    'name'       => $user->name,
                    'email'      => $user->email,
                    'phone'      => $user->phone,
                    'position'   => $user->position,
                    'department' => $user->department,
                    'salary'     => $formattedAmount,
                    'hire_date'  => Carbon::parse($user->hire_date)->format('d-m-Y'),
                ];
            }, Employee::$searchableColumns)
        );
    }
}
