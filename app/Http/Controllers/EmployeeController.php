<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $employees = Employee::paginate(20);

        return response()->json([
            'employees' => $employees
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
//        return $request->email;
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string',
        ]);
//        return $request->only(['name', 'email']);
//        $this->validate($request, [
//            'name' => 'required|string',
//            'email' => 'required|string|email|max:255|unique:users'
//        ]);
        $employee = Employee::create($request->only(['name', 'email']));

        return response()->json([
            'employee' => $employee
        ],201);
    }

    /**
     * Display the specified resource.
     * @param Employee $employee
     * @return JsonResponse
     */
    public function show(Employee $employee)
    {
        return response()->json([
            'employee' => $employee
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     * @return Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Employee $employee
     * @return Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Employee $employee
     * @return Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
