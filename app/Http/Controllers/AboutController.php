<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Request;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $about = About::where('user_id', '=', Auth::user()->id)->first();
        if ($about === null) {
            return redirect('about/create');
        } else {
            return view('about.show', compact('about'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $about = new About();
        $about->about = Request::input('about');
        $about->user_id = Auth::user()->id;
        $about->save();
        return redirect('about');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit()
    {
        $about = About::where('user_id', '=', Auth::user()->id)->firstOrFail();
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update()
    {
        $about = About::where('user_id', '=', Auth::user()->id)
            ->firstOrFail();
        $about->about = Request::input('about');
        $about->save();
        return redirect('about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
