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

        return redirect(route('index'));
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

    public function edit(Request $request, $id)
    {
        
        $content = Content::findOrFail($id);

        
        return view('contents.edit', compact('content'));
            // $content = Content::find($request->id);
    
            // return view('contents.edit',['content'=>$content]);
    }

    public function update(Request $request)
    {
        // $content = Content::find($request->id);
        // $content->content = $request->content;
        // $content->save();

        // $content = Content::find($request->id);
        // $form = $request->all();
        // unset($form['_token']);
        // $content->fill($form)->save();

        // return redirect('/index');

        $content_get_query = Content::select('*');
        $content_info = $content_get_query->find($request['id']);
        $content_info->content = $request['content'];
        $content_info->save();
        return redirect(route('index'));
    }
}
