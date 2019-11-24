<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\Http\Requests\ListingRequestValidate;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
       return $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index()
    {
        $list=Listing::orderBy('created_at','desc')->get();
        return view('listing',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlisting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ListingRequestValidate $request)
    {
        $list=array();
        $list=$request->all();
        $list['user_id']=auth()->user()->id;
        Listing::create($list);
        return redirect('dashboard')->with('success','create list success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list=Listing::find($id);
        return view('showlisting',compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list=Listing::find($id);
        return view('edit',compact('list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ListingRequestValidate $request, $id)
    {
        $listing=array();
        $listing=$request->all();
        $list=Listing::find($id);
        $listing['user_id']=auth()->user()->id;
        $list->update($listing);

       return redirect(route('listing.edit',$id))->with('success','edit listing success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list=Listing::find($id);
        $list->delete();

        return redirect(url('dashboard'))->with('success', 'listing removed succes');
    }
}
