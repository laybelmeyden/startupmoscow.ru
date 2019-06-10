<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\MainNews;
use App\ProductsPhoto;
use App\Command;
use App\Video;
use App\Photo;
use App\Invest;
use App\Seo;
class MainController extends Controller
{
    public function index(){
        
        $mnews = MainNews::latest()->take(10)->get();
        $rnew = ProductsPhoto::inRandomOrder()->first();
        $projects = ProductsPhoto::latest()->limit(2)->get();

        return view('pages.main',compact('projects', 'soloproject', 'mnews','usd','eur','gbp','rnew', 'aud', 'dkk', 'kzt', 'cad', 'nok', 'xdr', 'sgd', 'uah', 'sek', 'chf', 'jpy'));
    }
    
    
    public function mainform(){
        return view('pages.mainform');
    }
    
    public function oferta(){
        return view('pages.oferta');
    }
    
    public function pers(){
        return view('pages.pers');
    }
    
    public function cur(){
        return view('pages.cur');
    }
    
    
    public function soloproject(){
        return view('pages.soloproject');
    }
    
    public function about(){
        return view('pages.about');
    }
    
    public function comand(){
        $com = Command::latest()->get();
        return view('pages.comand',compact('com'));
    }
    
    public function contact(){
        return view('pages.contact');
    }
    
    public function invest(){
        $inv=Invest::latest()->get();
        return view('pages.invest',compact('inv'));
    }
    
    public function allnews(){
        $mnews = MainNews::latest()->paginate(12);
        
        return view('pages.allnews', compact('mnews'));
    }

    
    public function media(){
        $vid = Video::latest()->get();
        $phot = Photo::latest()->get();
        return view('pages.media',compact('vid','phot'));
    }
    
    public function onenews(MainNews $solo ){
        
    isset($solo->seo_title) ? $titl = $solo->seo_title : $titl = "Переспективные проекты";
      isset($solo->image) ? $img = $solo->image: $img = 'storage/{{ $mnew->image }}'; 
        
        return view('pages.onenews', compact('solo', 'titl', 'meta', 'img', 'keywords'));
    }
    
    
    
}
