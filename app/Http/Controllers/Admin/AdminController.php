<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\PositionUser;
use App\Models\Position;
use App\Models\User;

class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function departments()
  {
    $departments = Department::all();
    return view('admin.departments', compact('departments'));
  }
  public function index()
  {
    return view('admin.dashboard');
  }
  public function positions()
  {
    return view('admin.positions');
  }
  public function nominees()
  {
    //   $nominees = PositionUser::all();
    // $nominees = Position::with('users')->get()->unique('id');
    $nominees = User::with('positions')
      ->get()
      ->where('position_user.Status', 1)
      ->unique('id');
    return view('admin.nominees.index', compact('nominees'));
  }
  public function store(Request $request)
  {
    $Department = new Department();
    $Department->name = $request['deptname'];
    $Department->save();
    return redirect('/admin_departments');
  }
  public function edit($id)
  {
    $department = Department::findOrFail($id);
    return view('admin.edit_department', compact('department'));
  }
  public function update($id)
  {
    $department_name = Department::findOrFail($id);
    $department_name->name = request('deptname');
    $department_name->save();
    return redirect('/admin_departments');
  }
  public function destroy($id)
  {
    Department::findOrFail($id)->delete();
    return redirect('/admin_departments');
  }
  public function decline($id)
  {
    $user = User::findOrFail($id);
    $user->role = "voter";
    $user->save();
    $positionUser = PositionUser::where('user_id', $id);
    $positionUser->delete();
    return redirect('/admin_nominees');
  }
  public function approve($id)
  {
    $positionUser = PositionUser::where('user_id', $id)->first();
    $positionUser->Status = true;
    $positionUser->save();
    return redirect('/admin_nominees');
  }
}
