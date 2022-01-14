<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Volunteer;

use DB;
use Illuminate\Support\Facades\Input;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use Image;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = volunteer::all();
        return view('admin.volunteer.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $volunteer_model = new Volunteer();
        $volunteer_model->name = $request->volunteer_name;
        $volunteer_model->address = $request->volunteer_address;
        $volunteer_model->contact_number = $request->contact_number;
        $volunteer_model->email = $request->volunteer_email;
        $volunteer_model->occupation = $request->volunteer_occupation;

        if($request->volunteer_image){
            // $volunteer_image = time().'.'.$request->volunteer_image->extension();  
            // $request->volunteer_image->move(public_path('uploads/volunteer'), $volunteer_image);
            // $volunteer_model->volunteer_image = $volunteer_image;

            $volunteer_photo   = $request->file('volunteer_image');
            $filename         = time().'_'.$volunteer_photo->getClientOriginalName();
            //echo $filename; exit();
            $volunteer_photo->move(public_path('uploads/volunteer').'/original/',$filename);
            
            $image_resize = Image::make(public_path('uploads/volunteer').'/original/'.$filename);
            $image_resize->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/volunteer').'/thumbnail/'.$filename);
            $volunteer_model->volunteer_photo = $filename;

        } else {
            $volunteer_model->volunteer_photo = null;    
        }
        
        //exit();

        $volunteer_model->save();
        return Redirect::to('/');
        // if ($request->hidden_field == 1) {
        //     return Redirect::to('/admin/volunteer/create');
        // }
        // else{
        //     return Redirect::to('/');
        // }
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
