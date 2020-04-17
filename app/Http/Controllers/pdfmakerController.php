<?php

namespace App\Http\Controllers;

use File;
use ZipArchive;
use Illuminate\Http\Request;
use App\Pdf;
use PDFS;

class pdfmakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Pdf::all();

        return view('showpdf', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pdfform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Pdf([
            'full_name' => $request->get('full_name'),
            'street_address' => $request->get('street_address'),
            'city' => $request->get('city'),
            'zip_code' => $request->get('zip_code')
          ]);
    
          $user->save();
          return redirect()->back();
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

    public function downloadPDF($id){
        $user = Pdf::find($id);
  
        $pdf = PDFS::loadView('pdf', compact('user'));
        return $pdf->download('invoice.pdf');
  
      }

      public function downloadZip($id)
    {
        $headers = ["Content-Type"=>"application/zip"];
        $fileName = $id.".zip"; // name of zip
        Zipper::make(public_path('/uploads/'.$id.'.zip')) //file path for zip file
                ->add(public_path()."/uploads/".$id.'/')->close(); //files to be zipped

        return response()
        ->download(public_path('/uploads/'.$fileName),$fileName, $headers);
    }




}
