<?php

namespace App\Http\Controllers;

use DB;


class LinkPage
{
    //button home
    public function getHome()
    {
        $data['result'] = DB::table('home')->get();
        $data['ket'] = DB::table('ketslide')->get();
        return view('user.welcome',$data);
    }

    //button companyprofile
    public function getCompanyprofile()
    {
        $data['result'] = DB::table('companyprofile')->get();
        $data['slideshow'] = DB::table('slide')->get();
        return view('user.companyprofile',$data);
    }


    //button gallery
    public function getGallery()
    {
        $data['result'] = DB::table('gallery')->get();
        return view('user.gallery',$data);
    }

    //button contact person
    public function getContact()
    {
        $data['result'] = DB::table('contact')->get();
        $data['ket'] = DB::table('ketslide')->get();
        return view('user.contactperson',$data);
    }

    //button our client
    public function GetOurclient()
    {
        $data['result'] = DB::table('ourclient')->get();
        return view('user.ourclient',$data);
    }

    //button login
    public function login()
    {
        $login = login::all();
        return view('auth.login', compact('login'));
    }

    //button register
    public function admin()
    {
        $admin = admin::all();
        return view('admin', compact('admin'));
    }
}