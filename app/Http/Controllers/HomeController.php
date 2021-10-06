<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\LatestNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype== '0')
            {
                $docters= Doctor::all();

                return view('user.index',compact('docters'));
            }
            else
            { 
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('/home');
        } 
        else
        {
        $docters= Doctor::all();
        $newz = LatestNews::all();
        return view('user.index',compact('docters','newz'));
        }
    }
    public function appointment(Request $request)
    {
        $data = new Appointment();
        $data-> name = $request-> name ;
        $data-> number = $request-> number ;
        $data-> email = $request-> email ;
        $data-> status = 'in progress' ;
        $data-> message = $request-> message ;
        $data-> docter = $request-> docter ;
        $data->save();
        session()->flash('message','Appointment is created . wait for reply');
        return redirect()->back();
    }
    public function myappointment()
    {   $apoints = Appointment::all();
        return view('user.myappointment',compact('apoints'));
    }
    public function cancel_apoint($id)
    {
        $data = Appointment::find($id);
        $data->delete();
        session()->flash('messgae','apont deleted Successfully');
        return redirect()->back();
    }
}
