<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use Image;

class NewsController extends Controller
{
    
    public function index(){

        $news = News::orderBy('id', 'desc')->paginate(5);
        return view('admin.news.index', compact('news'));
        
    }
    
        public function create (){
            return view('admin.news.create');
        
        }

        public function store(Request $request){
            $news = $request->all();
            $request->validate([
                'title' => 'required|max:200',
                'desc' => 'required|max:500',
                'photo' => 'required|image|max:2048',
   
            ]);
   
            $path = $request->file('photo')->store('public/news');
          
            $news = new News();
            $news->title = $request->title;
            $news->desc = $request->desc;
            $news->photo = $request->photo;
            
   
            $news->save();
   
            return redirect('/admin/news')->with('status','News was created ');
   
       }
   
   
       public function show($id) {
           $news = News::find($id); 
      
         return view('admin.news.show', compact('news'));   
      }  
       
       public function edit($id){
           $news = News::find($id);
           return view('admin.news.edit', compact('news'));
   
       }
   
   
       public function update(Request $request, $id){
           $request->validate([
               'title' => 'required|max:200',
               'desc' => 'required|max:500',
               'photo' => 'required|image|max:2048',
   
   
           ]);
           $news = News::find($id);
           $news->title = $request->title;
           $news->desc = $request->desc;
           $news->photo = $request->photo;
   
   
           $news->save();
   
           return redirect('/admin/news')->with('status','News was updated ');
       }
   
   public function destroy($id){
       $news = News::find($id);
       $news->delete();
       return redirect('/admin/news')->with('status','News was deleted ');
   
   }

}
