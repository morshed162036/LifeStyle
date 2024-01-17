<?php

namespace App\Http\Controllers\server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyDetails;
use Illuminate\Support\Facades\File;
use Image;
class CompanyDetailsController extends Controller
{
    public function index()
    {
        $details = CompanyDetails::get()->first();
        return view('server.company-details.index')->with(compact('details'));
    }
    public function edit(string $id){
        $details = CompanyDetails::findorFail($id);
        return view('server.company-details.edit')->with(compact('details'));
    }
    public function update(Request $request, string $id)
    {
        $details = CompanyDetails::findorFail($id);
        $details->phone = $request->phone;
        $details->email = $request->email;
        $details->support_hour = $request->support_hour;
        $details->facebook = $request->facebook;
        $details->youtube = $request->youtube;
        $details->instagram = $request->instagram;
        $details->fb_order = $request->fb_order;
        $details->youtube_order = $request->youtube_order;
        $details->insta_order = $request->insta_order;


        if($request->hasFile('logo')){
            $exists = 'images/company/'.$details->logo;
            if(File::exists($exists))
            {
                File::delete($exists);
            }
            $image_temp = $request->file('logo');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
//                $imagePath = 'images/company/'.$imageName;
//                Image::make($image_temp)->resize(526,119)->save($imagePath);
                $imagePath = 'images/company/';
                $image_temp->move(public_path($imagePath),$imageName);
                $details->logo = $imageName;
            }
        }
        if($request->hasFile('favicon')){
            $exists = 'images/company/'.$details->favicon;
            if(File::exists($exists))
            {
                File::delete($exists);
            }
            $image_temp = $request->file('favicon');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
//                $imagePath = 'images/company/'.$imageName;
//                Image::make($image_temp)->resize(100,50)->save($imagePath);
                $imagePath = 'images/company/';
                $image_temp->move(public_path($imagePath),$imageName);
                $details->favicon = $imageName;
            }
        }
        if($request->hasFile('size_guide')){
            $exists = 'images/company/'.$details->size_guide;
            if(File::exists($exists))
            {
                File::delete($exists);
            }
            $image_temp = $request->file('size_guide');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
//                $imagePath = 'images/company/'.$imageName;
//                Image::make($image_temp)->resize(2389,3117)->save($imagePath);
                $imagePath = 'images/company/';
                $image_temp->move(public_path($imagePath),$imageName);
                $details->size_guide = $imageName;
            }
        }
        $details->update();
        return redirect()->route('company-details.index')->with('success','Company Details Update Successfully!!');
    }
}
