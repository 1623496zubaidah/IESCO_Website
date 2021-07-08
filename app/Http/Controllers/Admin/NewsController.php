<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use Image;

class NewsController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:project-list|scholarship-create|project-edit|project-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:project-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:project-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:project-delete', ['only' => ['destroy']]);
    }
    public function index()
    {

        $news = News::orderBy('id', 'desc')->paginate(5);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $news = $request->all();
        $request->validate([
            'title' => 'required|max:200',
            'desc' => 'required|max:500',
            'photo' => 'required|image|max:2048',

        ]);

        if ($request->hasFile('photo')) {
            ///Get file name with Extensiom
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            ///get just a filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            ///Save the image
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //upload the image to file
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'nonewsimage.jpg';
        }

        $news = new News();
        $news->title = $request->title;
        $news->desc = $request->desc;
        $news->photo = $fileNameToStore;


        $news->save();

        return redirect('/admin/news')->with('success', 'News was created ');
    }


    public function show($id)
    {
        $news = News::find($id);

        return view('admin.news.show', compact('news'));
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:200',
            'desc' => 'required|max:500',
        ]);
        $news = News::find($id);

        if ($request->hasFile('photo')) {
            ///Get file name with Extensiom
            $filenameWithExt = $request->file('photo')->getClientOriginalName();

            ///get just a filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            ///Save the image
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;

            //upload the image to file
            $path = $request->file('photo')->storeAs('public/photos', $fileNameToStore);
            $news->photo = $fileNameToStore;
        }
        $news->title = $request->title;
        $news->desc = $request->desc;



        $news->save();

        return redirect('/admin/news')->with('success', 'News was updated ');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('/admin/news')->with('success', 'News was deleted ');
    }
}
