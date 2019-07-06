<?php

namespace App\Http\Controllers;

use App\category;
use App\comment;
use Illuminate\Http\Request;
use App\complainbox;


class complainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catagorydata = category::all();
        $catagorycount = category::all()->count();

        return view('complainbox.complainform',compact('catagorydata'))->with('count',$catagorycount);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function comment(Request $request)
    {


        $comment = new comment([
        'user' => $request->get('userid'),
        'comp_id'=> $request->get('complainid'),
        'comp_comments'=> $request->get('comment'),
    ]);
        $comment->save();
        return redirect()->route('complain.show',[$request->get('complainid')]);

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
            'user_id' => $request->get('user_id'),
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
        $commentdata = comment::all()->where('comp_id','=',$id);
        return view('complainbox.complain',compact('showdata'))->with('comments',$commentdata);
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
    public function catagory_create(Request $request)
    {
        $categroy = new category([
            'comp_category' => $request->get('category'),
        ]);
        $categroy->save();
        return redirect()->route('category.create')->with('success','Category crated successfully');

    }
}
