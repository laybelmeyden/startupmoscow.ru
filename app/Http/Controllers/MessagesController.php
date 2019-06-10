<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function send(Request $request){
           $data= array(
      'nazv' => request('nazv'),
      'email' => request('email'),
      'fio' => request('fio'),
      'uch' => request('uch'),
      'pass' => request('pass'),
      'kol' => request('kol'),
      'obr' => request('obr'),
      'ur' => request('ur'),
      'pat' => request('pat'),
      'razm' => request('razm'),
      'adr' => request('adr'),
      'inn' => request('inn'),
      'ogrn' => request('ogrn'),
      );
    // return $data;
    \Mail::send('email.mainform', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN');
        $message1->from($data['email'], $data['nazv']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     session()->flash('message', 'Success!');
     return redirect('/upload');
    }
    
    
    
    
     public function contact(Request $request){
           $data= array(
      'name' => request('name'),
      'email' => request('email'),
      'message2' => request('message'),
      
      );
    // return $data;
    \Mail::send('email.contact', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN');
        $message1->from($data['email'], $data['name']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     return redirect('/contact');
    }
    public function donate(Request $request){
           $data= array(
      'name' => request('name'),
      'email' => request('email'),
      'message2' => request('message'),
      
      );
    // return $data;
    \Mail::send('email.contact', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN');
        $message1->from($data['email'], $data['name']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     return redirect('/contact');
    }
    public function soloproject(Request $request){
           $data= array(
      'name' => request('name'),
      'email' => request('email'),
      'message2' => request('message'),
      
      );
    // return $data;
    \Mail::send('email.contact', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN');
        $message1->from($data['email'], $data['name']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
         
         return back();


    }
}
