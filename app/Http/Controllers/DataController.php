<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function contact(Request $request){

        DB::table('contact')->insert([  
            'email' => $request->input('email'),
            'name'=> $request->input('name'),
            'phone'=> $request->input('phone'),
            'judul' => $request->input('judul'),
            'pesan'=> $request->input('pesan')
        ]);

        return redirect('contact')->with('successContact','Data Added'); 
    }

    public function article(Request $request){

        DB::table('article')->insert([  
            'namewriter' => $request->input('namewriter'),
            'emailwriter'=> $request->input('emailwriter'),
            'datepublikasi'=> $request->input('datepublikasi'),
            'titlearticle' => $request->input('titlearticle'),
            'location'=> $request->input('location'),
            'category'=> $request->input('category'),
            'article'=> $request->input('article')
        ]);

        return redirect('add')->with('successArticle','Data Added'); 
    }
}
