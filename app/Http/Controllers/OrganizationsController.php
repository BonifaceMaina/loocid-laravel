<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizationRequest;
use App\Photo;
use App\Organization;
//use App\User;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//
        return view('organization.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organization = new Organization();
        return view('organization.create', ['organization' => $organization ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrganizationRequest $request)
    {
       //return $request->all();

        //get all inputs from user
        $input = $request->all();

        //image processing
        if ($file = $request->file('photo_id')){

            //get the name of the file. Append timestamp on it
            $nameoffile = time() . $file->getClientOriginalName();

            //move the uploaded file to the image directory
            $file->move('images', $nameoffile);

            //Store file path in photo db and assign it an id
            $photo = Photo::create(['image_path'=>$nameoffile]);

            //retrieve id from stored photo path to assign it to user
            $input['photo_id'] = $photo->id;
        }

        Organization::create($input);

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organization = Organization::findOrFail($id);

        return view('organization.show', compact('organization'));
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
