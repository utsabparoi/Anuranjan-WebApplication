<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Member;

use DB;
use Illuminate\Support\Facades\Input;
use RealRashid\SweetAlert\Facades\Alert;
use Session;
use Image;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = member::all();
        return view('admin.member.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return view('admin.member.create', ['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $member_model = new Member();
        $member_model->name = $request->member_name;
        $member_model->email = $request->member_email;
        $member_model->contact_number = $request->contact_number;
        $member_model->dob = $request->member_birthdate;
        $member_model->occupation = $request->member_occupation;
        $member_model->aggrement = $request->member_aggrement;

        if($request->member_image){
            // $member_image = time().'.'.$request->member_image->extension();  
            // $request->member_image->move(public_path('uploads/member'), $member_image);
            // $member_model->member_image = $member_image;

            $member_photo   = $request->file('member_image');
            $filename         = time().'_'.$member_photo->getClientOriginalName();
            //echo $filename; exit();
            $member_photo->move(public_path('uploads/member').'/original/',$filename);
            
            $image_resize = Image::make(public_path('uploads/member').'/original/'.$filename);
            $image_resize->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image_resize->save(public_path('uploads/member').'/thumbnail/'.$filename);
            $member_model->member_photo = $filename;

        } else {
            $member_model->member_photo = null;    
        }
        
        //exit();

        $member_model->save();

        if ($request->hidden_field == 1) {
            return Redirect::to('/admin/member/create');
        }
        else{
            return Redirect::to('/');
        }
        
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
        $data['single_info'] = DB::table('Members')->where('id', $id)->first();
        //dd($data['single_info']);
       
        return view('admin.member.edit', ['data'=>$data]);
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
        $input = $request->all();

        $member = Member::find($id);
        $member->name = $input['name'];
        $member->email = $input['email'];
        $member->contact_number = $input['contact_number'];
        $member->dob = $input['dob'];
        $member->occupation = $input['occupation'];
        $member->aggrement = $input['aggrement'];
        $member->member_photo = $input['member_photo'];

        // $member_model = new Member();
        // $member_model->name = $request->member_name;
        // $member_model->email = $request->member_email;
        // $member_model->contact_number = $request->contact_number;
        // $member_model->dob = $request->member_birthdate;
        // $member_model->occupation = $request->member_occupation;
        // $member_model->aggrement = $request->member_aggrement;

        // if($request->member_image){
        //     // $member_image = time().'.'.$request->member_image->extension();  
        //     // $request->member_image->move(public_path('uploads/member'), $member_image);
        //     // $member_model->member_image = $member_image;

        //     $member_photo   = $request->file('member_image');
        //     $filename         = time().'_'.$member_photo->getClientOriginalName();
        //     //echo $filename; exit();
        //     $member_photo->move(public_path('uploads/member').'/original/',$filename);
            
        //     $image_resize = Image::make(public_path('uploads/member').'/original/'.$filename);
        //     $image_resize->resize(200, null, function ($constraint) {
        //         $constraint->aspectRatio();
        //     });
        //     $image_resize->save(public_path('uploads/member').'/thumbnail/'.$filename);
        //     $member_model->member_photo = $filename;

        // } else {
        //     $member_model->member_photo = null;    
        // }
        // //$member_model->parent_id = $request->parent_id;
        // DB::table('members')->where('id', $id)
        // ->update([
        //     'name' =>$request['name'], 'email' =>$request['email'], 'contact_number' =>$request['contact_number'], 'dob' =>$request['dob'], 'occupation' =>$request['occupation'], 'aggrement' =>$request['aggrement'], 'member_photo' =>$request['member_photo']
        // ]); 
        $member->save();
        Session::flash('success-message', 'Successfully Performed !');        
        return Redirect::to('admin.member.edit');
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
