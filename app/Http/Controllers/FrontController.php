<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    //
    public function getIndex(){
        $data['categories'] = DB::table('categories')->get();
        $data['result'] = DB::table('artikel')
            ->join('categories','categories.id','=','categories_id')
            ->join('cms_users','cms_users.id','=','cms_users_id')
            ->select('artikel.*','categories.name as name_categories','cms_users.name as name_author')
            ->orderby('artikel.id','desc')
            ->take(5)
            ->get();

        return view('blog.index',$data);
    }

    public function getArticle($slug){
        $row = DB::table('artikel')
            ->join('categories','categories.id','=','categories_id')
            ->join('cms_users','cms_users.id','=','cms_users_id')
            ->select('artikel.*','categories.name as name_categories','cms_users.name as name_author')
            ->where('artikel.slug',$slug)
            ->first();
        $data['row'] = $row;
        $data['page_title'] = $row->title.'|AJP Website';
        $data['page_description'] = str_limit(strip_tags($row->content),155);
        $data['blog_name'] = $this->blog_name;
        $data['categories'] = DB::table('categories')->get();

        return view('blog.show',$data);
    }

    public function getCategory($id,$slug){
        $row = DB::table('categories')->where('id',$id)->first();
        $data['result'] = DB::table('artikel')
            ->join('categories','categories.id','=','categories_id')
            ->join('cms_users','cms_users.id','=','cms_users_id')
            ->select('artikel.*','categories.name as name_categories','cms_users.name as name_author')
            ->orderby('artikel.id','desc')
            ->where('artikel.categories_id',$id)
            ->paginate(5);

        $data['row'] = $row;
        $data['page_title'] = $row->name.'|Category |AJP Website';
        $data['page_description'] = $data['page_title'];
        $data['blog_name'] = $this->blog_name;
        $data['categories'] = DB::table('categories')->get();
        $data['header_title'] = 'Category: '.$row->name;

        return view('blog.list',$data);
    }

    public function getSearch(Request $req){

        if($req->get('q')=='') return redirect('/');

        $row = DB::table('categories')->where('id',$id)->first();
        $data['result'] = DB::table('artikel')
            ->join('categories','categories.id','=','categories_id')
            ->join('cms_users','cms_users.id','=','cms_users_id')
            ->select('artikel.*','categories.name as name_categories','cms_users.name as name_author')
            ->where('artikel.title','like','%'.$req->get('q').'%')
            ->paginate(5);

        $data['page_title'] = 'Search.'.$req->get('q').'|Category |AJP Website';
        $data['page_description'] = $data['page_title'];
        $data['blog_name'] = $this->blog_name;
        $data['categories'] = DB::table('categories')->get();
        $data['header_title'] = 'Search: '.$req->get('q');

        return view('blog.list',$data);
    }
}
