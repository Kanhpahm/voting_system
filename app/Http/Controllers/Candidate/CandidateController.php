<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PositionUser;

class CandidateController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
          $logged_in_user_id = Auth::user()->id;
          $nominee_status = PositionUser::where('user_id',$logged_in_user_id) -> first();
          $nominee_status = $nominee_status->Status;
       return view('candidate.dashboard',compact('nominee_status'));
      }
      public function compaign()
      {
        $logged_in_user_id = Auth::user()->id;
          $nominee_status = PositionUser::where('user_id',$logged_in_user_id) -> first();
          $nominee_status = $nominee_status->Status;
          return view('candidate.compaign',compact('nominee_status'));
      }
}
