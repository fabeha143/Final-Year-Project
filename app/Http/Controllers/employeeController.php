<?php

namespace App\Http\Controllers;

use App\Models\employee_role;
use App\Models\employees;
use App\Models\employee_roles;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = employees::all();
        return view('AdminPanel/employee/employee',['employee' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = employee_role::select('id','role_name')->get();
        $employee_role = array();
        foreach( $items as $item )
        {
            $employee_role[$item->id] = $item->role_name;
            
        }
        return view('AdminPanel/employee/add_employee',compact('employee_role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
       
        employees::create([
            'emp_fname' => $request->Fname,
            // 'emp_lname' => $request->lname,
            // 'emp_email' => $request->email,
            // 'emp_gender' => $request->gender,
            // 'emp_joining_date' => $request->joining_date,
            // 'emp_phone' => $request->phone,
            // 'emp_address' => $request->address,
            // 'emp_username' => $request->username,
            // 'emp_password' => $request->password,
            // 'emp_confirmpassword' => $request->password_confirmation,
            // 'emp_role ' => $request->emp_role,
            // 'remember_token ' => 'skjd'
        ]);
        $validated = $request->validate([
            'emp_fname' => 'required|max:25',
            // 'emp_lname' => 'required|max:25',
            // 'emp_email' => 'required|unique',
            // 'emp_gender' => 'required|',
            // 'emp_joining_date' => 'required',
            // 'emp_phone' => 'required|max:11',
            // 'emp_address' => 'required',
            // 'emp_username' => 'required|max:25|unique',
            // 'emp_password' => 'required|min:8|confirmed',
            // 'emp_confirmpassword' => 'required|min:8|confirmed',
            // 'emp_role' => 'required',
            
           
        ]);
        return redirect(route('employee.index'))->with(['success' => 'Page Added!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
