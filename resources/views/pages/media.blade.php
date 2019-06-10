@extends('layouts.master')

@section('content')
<section>
    <div class="container">
        <div class="row">
        <div class="col l6 m12 s12 center">
          <p class="p22">НАШИ МЕДИА ПРОЕКТЫ</p>
        <ul class="collapsible" data-collapsible="accordion">
        @foreach ($vid as $v)
        <li>
          <div class="collapsible-header p14">{{$v->title}}</div>
          <div class="collapsible-body">
            <div>
                {!!$v->video!!}
            </div>
    
          </div>
        </li>
        @endforeach
    
      </ul>
        </div>
        <div class="col l6 m12 s12 center">
          <p class="p22">НАШИ ФОТОГРАФИИ</p>
        <ul class="collapsible" data-collapsible="accordion">
        @foreach ($phot as $p)
        <li>
          <div class="collapsible-header p14">{{$p->title}}</div>
          <div class="collapsible-body">
            <div>
                {!!$p->photo!!}
            </div>
    
          </div>
        </li>
        @endforeach
    
      </ul>
        </div>
        </div>
     </div>
</section>
    @endsection