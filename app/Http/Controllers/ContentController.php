<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\content;

class ContentController extends Controller
{
    //
    public function input()
    {
        return view('contents.input');
    }

    public function save(Request $request)
    {
        $input_content = new Content();
        $input_content->content = $request['content'];
        $input_content->save();

        return redirect(route('input'));
    }

    public function index() {
        $contents = Content::all();

        return view('contents.index',['contents'=>$contents]);
    }

    public function show(Request $request, $id)
    {
        $content = Content::findOrFail($id);

        return view('contents.show',['content'=>$content]);
    }
}
