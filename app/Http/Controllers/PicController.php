<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Auth;

use App\Http\Controllers\Controller;

use Request;
use App\Pic;

class PicController extends Controller
{
    public function index()
    {
        $pics = Pic::all();
        return view('pic.index', compact('pics'));
    }

    public function add($filename)
    {
        return view('pic.add', compact('filename'));
    }

    public function handleAdd()
    {
        $pic = new Pic();
        $pic->filename = Request::input('filename');
        $pic->desc = Request::input('desc');
        $pic->user_id = Auth::user()->id;
        $pic->save();
        return redirect('pic');
    }

    public function edit($fileid)
    {
        $pic = Pic::where('id', '=', $fileid)->firstOrFail();
        return view('pic.edit', compact('pic'));
    }

    public function handleEdit()
    {
        $pic = Pic::where('id', '=', Request::input('fileid'))->firstOrFail();
        $pic->desc = Request::input('desc');
        $pic->save();
        return redirect('pic');
    }
}
