@extends('layouts.master')

@section('content')
<section class="container">
    <div class="row">
        <div class="col l12 s12 m12 ots center">
        <p class="p22">ИНВЕСТОРЫ</p>
        <div class="crt"></div>
        <p class="p9">Ниже представлен список наиболее уважаемых, известных и надежных фондов и организаций, специализирующихся на инвестировании и финансовой поддержке перспективных проектов в нашей стране.</p>
        </div>
    </div>
  </section>
  
    <section class="container">
    <div class="row">
        @foreach ($inv as $i)
        <div class="col l3 s6 m6">
            <a href="{{$i->href}}"><img src="storage/{{ $i->img}}" class="responsive-img in1"></a>
        </div>
        @endforeach
       
    </div>
  </section>
  
  @endsection