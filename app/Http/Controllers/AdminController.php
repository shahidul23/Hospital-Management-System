<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use Notification;
use App\Notifications\SendEmailNotification;


class AdminController extends Controller
{
    public function addview()
    {
    	return view('admin.add_doctor');
    }

    public function uploaddoctor(Request $request)
    {
         
         $doctor = new doctor;

         $image = $request->file;
         $imagename=time().'.'.$image->getClientoriginalExtension();
         $request->file->move('doctorname',$imagename);
         $doctor->image= $imagename;
         $doctor->name=$request->name;
         $doctor->phone=$request->phone;
         $doctor->speciality=$request->speciality;
         $doctor->room=$request->room;
         $doctor->save();

         return redirect()->back()->with('message','Doctor Added Successfully');
    }

    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function approve($id)
    {
        $data=appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }
    public function canceld($id)
    {
        $data=appointment::find($id);
        $data->status = 'Canceled';
        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor',compact('data'));
    }
    public function deletedoctor($id)
    {
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
  public function updatedoctor($id)
  {
    $data=doctor::find($id);

    return view('admin.update_doctor',compact('data'));
  }

  public function editdoctor(Request $request , $id)
  {
    $doctor= doctor::find($id);
    $doctor->name=$request->name;
    $doctor->phone=$request->phone;
    $doctor->speciality=$request->speciality;
    $doctor->room=$request->room;
    $image=$request->file;
if($image)
{
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('doctorname',$imagename);
    $doctor->image=$imagename;
}
    $doctor->save();
    return redirect()->back()->with('message','Doctor Detaile Updated Successfully');

  }
  public function mailview($id)
  {
    $data=appointment::find($id);

    return view('admin.mailview',compact('data'));

  }
  public function sendemail(Request $request , $id)
  {
    $data=appointment::find($id);
    $detailes =[
      'greeting' => $request->greeting,
      'body' => $request->body,
      'actiontext' => $request->actiontext,
      'actionurl' => $request->actionurl,
      'mailend' => $request->mailend

    ];

    Notification::send($data,new SendEmailNotification($detailes));
    return redirect()->back()->with('message','Email Send is Successfully');
  }
}
