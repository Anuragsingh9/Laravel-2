<?php

namespace App\Http\Controllers;
use App\Newblog;
use Illuminate\Http\Request;
use Storage;
use File;

class fileuploadController extends Controller
{
    public function index(){
        return view('fileupload');
    }


    public function create(Request $request)
    {
        
       

            $uploads = $request->file('image');
            if($request->hasFile('image')){
                foreach ($uploads as $upload) {
            $extension = $upload->getClientOriginalExtension();
            Storage::disk('public')->put($upload->getFilename().'.'.$extension,  File::get($upload));
            $requestData['mime'] = $upload->getClientMimeType();
            $requestData['original_filename'] = $upload->getClientOriginalName();
            $requestData['filename'] = $upload->getFilename().'.'.$extension;
                
        
            Newblog::create($requestData);
                }
            // $count=count($no);
            return redirect()->back()->with('add', 'Profile created!');

            }

 }

            public function show(Request $request)
                
            { 
                $image = Newblog::get();
                return view('showimg' , compact('image'));
            }




            public function update(Request $request)
                
            {

                $update = Newblog::where('id','=', $request->id)->first();
                return view('imgupdate' , compact('update'));
                
                //  $update = Newblog::get();

                // return view('imgupdate' , compact('update'));
            }



            public function imgupdate(Request $request)
            {
                
               
        
                    $updateimg = $request->file('image');
                    // if($request->hasFile('image')){
                    //     foreach ($uploads as $upload) {
                    $extension = $updateimg->getClientOriginalExtension();
                    Storage::disk('public')->put($updateimg->getFilename().'.'.$extension,  File::get($updateimg));
                    $requestData['mime'] = $updateimg->getClientMimeType();
                    $requestData['original_filename'] = $updateimg->getClientOriginalName();
                    $requestData['filename'] = $updateimg->getFilename().'.'.$extension;
                        
                
                    Newblog::where('id','=',$request->id)->update($requestData);
                    // $count=count($no);
                    return redirect()->back()->with('add', 'Profile updated!');
        
                    
        
         }

                    public function download(Request $request){
                        //PDF file is stored under project/public/download/info.pdf
                        $name=$request->filename;
                        $file= public_path(). '/uploads/'.$name;

                        $headers = [
                        'Content-Type' => 'application/pdf',
                        ];
                    return response()->download($file,  $name, $headers);
                    }



                    


}
