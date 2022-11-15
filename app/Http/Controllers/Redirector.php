<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Redirector extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {

            $role = Auth::user()->role;
            switch ($role) {
                case 'admin':
                return redirect('/admin_dashboard');
                break;
            case 'voter':
                return redirect('/voter_dashboard');
                break;
            default:
                return redirect('/candidate_dashboard');
                break;
          }


    }
}
