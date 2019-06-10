@extends('layouts.master')

@section('content')
 <section>
    <div class="container">
        <div class="row">
          <div class="col l12 s12 m12 center">
            <div class="back4">
            <img src="storage/{{ $solo->img }}" class="responsive-img img2 img_thumbnail">
            </div>
          </div>
          <div class="col l7 m12 s12">
            <p class="p13">
            <!--<span class="span2"></span>-->
            {!! $solo->body !!}</p>
               
          </div>
          <div class="col l5 m12 s12">
            <div class="back5 right">
            <p class="p11">{{ $solo->date }}</p>  
            <p class="p12">{{ $solo->title }}</p>
            </div>
          </div>
        </div>
     </div>
    </section>
    
    @endsection