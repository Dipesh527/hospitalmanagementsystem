<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\LatestNews;
use App\Notifications\SendMailNotification;
use Illuminate\Cache\RedisStore;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use PhpParser\Comment\Doc;

class AdminController extends Controller
{
    public function docters_view()
    {
        return view('admin.backend.doctor');
    }
    public function docters_add(Request $request)
    {
        $docter = new Doctor();
        $image= $request->image ;
        $imagename = time().'.'. $image->getClientOriginalExtension();
        $request->image->move('docter_image',$imagename);
        $docter->image= $imagename;
        $docter->phone = $request->phone ;
        $docter->room = $request->room ;
        $docter->name = $request->name ;
        $docter->speaciality = $request->speciality;
        $docter->save();
        session()->flash('message','Docter is created successfully');
        return redirect()->back();
    }
    public function show_apointment()
    {   
        $apoints = Appointment::all();
        return view('admin.backend.showdocter',compact('apoints'));
    }
    public function approved($id)
    {
        $data = Appointment::find($id);
        $data->status = "Appropeved";
        $data->save();
        return redirect()->back();
    }
    public function canceled($id)
    {
        $data = Appointment::find($id);
        $data->status= 'Canceled';
        $data->save();
        return redirect()->back();
    }
    public function alldocters()
    {
        $docters = Doctor::all();
        return view('admin.backend.alldocters',compact('docters'));
    }
    public function deletedocters($id)
    {
        $data= Doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatedocters( Request $request , $id)
    {
        $docter = Doctor::find($id);
        return view('admin.backend.updatedocters',compact('docter'));
    }
    public function updateDocter( Request $request, $id)
    {
        $docter = Doctor::find($id);
        $docter->name = $request->name ;
        $docter->phone = $request->phone ;
        $docter->room = $request->room ;
        $docter->speaciality = $request->speaciality;




        $image= $request->image ;


        if($image)
        {

            $imagename = time().'.'. $image->getClientOriginalExtension();
            $request->image->move('docter_image',$imagename);
            $docter->image= $imagename;
        }
       
        $docter->save();
        session()->flash('message','Docter is updated successfully');
        return redirect('alldocters');
    }
    public function sendmail($id)
    {
        $data = Appointment::find($id);
        return view('admin.backend.sendmail',compact('data'));
    }
    public function mailsend(Request $request, $id)
    {
        $data = Appointment::find($id);
        $details=
        [
            'greeting' => $request -> greeting ,
            'body' => $request -> body ,
            'actiontext' => $request -> actiontext ,
            'actionurl' => $request -> actionurl ,
            'endpart' => $request -> endpart ,
        ]; 
        
        $data->notify(new SendMailNotification($details));
           
        return redirect()->back();
                    
       
    }
    public function latestnews()
    {
        $newz = LatestNews::all();
        return view('admin.backend.latestnews',compact('newz'));
    }

    public function addlatestnews(Request $request)
    {
        $news = new LatestNews();
         
        $image = $request->image;
        $imagename = time().'.'. $image->getClientOriginalExtension();
        $request->image->move('latestnews_image',$imagename);
        $news-> image = $imagename;
        $news->  header = $request -> header ; 
        $news->  category = $request -> category ; 
        $news->  body = $request -> body ; 
        $news->  publisher = $request -> publisher ;
        $news->save();
        return redirect()->back();
    }
}
