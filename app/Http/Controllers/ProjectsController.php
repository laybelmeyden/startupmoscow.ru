<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use Illuminate\Http\Request;
use Image;
use App\Product;
use App\ProductsPhoto;

class ProjectsController extends Controller
    {
    
    
     public function uploadForm(){
        return view('pages.form');
    }
    
     public function uploadSubmit(UploadRequest $request)
    {
        $product = Product::create($request->all());
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos','public');
                
                
            ProductsPhoto::create([
                'product_id' => $product->id,
                'filename' => $filename ,
                'class_add' =>$product->class_add,
                'name' =>$product->name,
                'fio' =>$product->fio,
                'opis' =>$product->opis,
                'stad' =>$product->stad,
                'concur' =>$product->concur,
                'potr' =>$product->potr,
                'preim' =>$product->preim,
                'sphere' =>$product->sphere,
                'otl' =>$product->otl,

            ]);
             $data= array(
                      
                'product_id' => request('id'),
                 'a_file'=>$filename,

                'class_add' =>request('class_add'),
                'name' =>request('name'),
                'fio' =>request('fio'),
                'opis' =>request('opis'),
                'stad' =>request('stad'),
                'concur' =>request('concur'),
                'potr' =>request('potr'),
                'preim' =>request('preim'),
                'sphere' =>request('sphere'),
                'otl' =>request('otl'),
                      
                      
                      );
    // return $data;
    \Mail::send('email.project', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN');
        $message1->from('www@e.ru');
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
             

     });
                  

        }
       
        return redirect('/projects');
    }
    public function projects(){
        $projects = ProductsPhoto::latest()
        ->get();
        return view('pages.catalog',compact('projects'));
    }
    
    public function projectsolo (ProductsPhoto $solo){

        return view('pages.soloproject',compact('solo','seo_title','seo_description','seo_keywords','image'));
    }
    
   
}
