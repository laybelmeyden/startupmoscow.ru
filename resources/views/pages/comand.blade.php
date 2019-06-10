@extends('layouts.master')

@section('content') 
<section class="container">
    <div class="row">
        <div class="col l12 s12 m12 ots center">
        <p class="p22">НАША КОМАНДА</p>
        <div class="crt"></div>
        </div>
        @foreach ($com as $c)
        <div class="col l4 s12 m12">
        <div class="card">
            <div class="card-image">
              <img class="img_thumbnail" src="storage/{{$c->photo}}">
            </div>
            <div class="card-content con1">
             {!! $c->title !!}
              </a>
            </div>
          </div>
        </div>
        @endforeach
        

    </div>
  </section>  
  
  @endsection