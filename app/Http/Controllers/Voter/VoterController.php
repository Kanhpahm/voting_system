<?php

namespace App\Http\Controllers\Voter;


use App\Http\Controllers\Controller;
use App\Models\Position;
use App\Models\Department;
use App\Models\PositionUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoterController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        return view('voter.dashboard');
      }

      public function store(Request $request) {
          if(isset($request['apply']))
          {
            $Nominee = new PositionUser();
            $Nominee->user_id = Auth::user()->id;
            $Nominee->position_id = $request['position_id'];
            // by default when voter apply for any position, its unapproved, until admin approves him/her
            $Nominee->Status = 0;
            $Nominee->votes = 0;
          }
           $user = User::findOrFail(Auth::user()->id);
         if($user->role == "voter"){
            $user->role = "candidate";
            $user->save();
        }
            $Nominee->save();
            $message = "Successfully applied as candidate";
            return redirect()->route('candidate.dashboard')->with('success',"Successfully applied as Candidate");
        //    return view('candidate.dashboard',compact('message'));
      }

      public function apply() {
        $positions = Position::all();
        $departments = Department::all();
          return view('voter.apply',compact('departments','positions'));
      }

}
