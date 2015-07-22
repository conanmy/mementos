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
}
