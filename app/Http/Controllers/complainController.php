<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\complainbox;

class complainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('complainbox.complainform');
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
        //

        $complainbox = new complainbox([
            'category_id' => $request->get('catagory_id'),
            'comp_title' => $request->get('title'),
            'comp_details' => $request->get('details'),
            'img_path' => 'none',
            'judge_status' => '0'
        ]);
        $complainbox->save();
        return redirect()->route('complain.index')->with('success','Complain Submitted Successuflly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $showdata = complainbox::all()->where('id','=',$id);
        //return redirect()->view('complainbox.complains', compact('showdata'));
        return view('complainbox.complains',compact('showdata'));
    }

    /**
     * Show the form for editing the specified resource./
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
