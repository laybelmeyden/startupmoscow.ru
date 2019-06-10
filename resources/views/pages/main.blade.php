@extends('layouts.master')

@section('content')

<a href="/mainform" target="_blank">
  <div class="container">
<div class="anime">
  <canvas id="c1"></canvas>
  <p class="pli center" id="ivan">MOSCOW STARTUP FORUM</p> 

</div>
</div>
</a>
  <section class="container sec">
    <div class="row" style="    margin-left: 0;
    margin-left: 0;">
      <div class="col l4 m12 s12 uy ots center">
      <p class="p33 center">Расскажи о своем проекте и найди партнеров, единомышленников, инвесторов</p>
      <div class="col l6 m12 s12 ots">
      <a href="/mainform" class="waves-effect waves-light btn btn2">ДОБАВИТЬ ПРОЕКТ</a>
      </div>
      <div class="col l6 m12 s12 ots">
      <a href="/projects" class="waves-effect waves-light btn btn2">ВСЕ ПРОЕКТЫ</a>
      </div>
      <div class="col l12 m12 s12 ots">
      <a href="#modal1" class="waves-effect waves-light btn btn5 modal-trigger">Я ИНВЕСТОР</a>
      </div>
      </div>
      <!--modal form-->
      <div id="modal1" class="modal">
      <div class="modal-content">
        <section>
  <div class="container">
    <div class="row">
      <div class="col l12 s12 m12 ots center">
        <p class="p23">ВЫ МОЖЕТЕ ПОДДЕРЖАТЬ НАЧИНАЮЩИЕ ПРОЕКТЫ</p>
        <p class="span3">Пожалуйста, напишите нам и мы с Вами свяжемся в ближайщее время!</p>
      </div>
      <form class="col s12" method="POST" action="/donate">
         {{ csrf_field() }}
      <div class="row">
        <div class="input-field col l6 m12 s12">
          <input name="name" id="first_name" type="text" class="validate inp4">
          <label class="lb2" for="first_name">Ваше Имя</label>
        </div>
        <div class="input-field col l6 m12 s12">
        <input name="email" id="first_name" id="email" type="email" class="validate inp4">
        <label class="lb2" for="first_name">Ваш email</label>
        </div>
        <div class="input-field col s12">
          <textarea name="message" id="textarea1" class="materialize-textarea inp4"></textarea>
          <label class="lb2" for="textarea1">Ваше сообщение</label>
        </div>
      </div>
      <div class="col l12 s12 m12 ots right-align">
        <button class="waves-effect waves-light btn btn6">ОТПРАВИТЬ</button>
      </div>
    </form>
    
    </div>
  </div>
</section>
      </div>
      </div>
      <!--end vodal form-->
      <div class="col s12 m12 l4">
        <div class="story">
          <div class="cropimg">
<img src="storage/{{ $rnew['filename'] }}" class="crop responsive-img ">
            </div>
            
            <div class="social">
              <div class="social_links">
              <script type="text/javascript">
                    document.write(VK.Share.button({
                      url: 'http://www.startupmoscow.ru/soloproject{{$rnew->id}}',
                      title: '{{$rnew->name}}',
                      image: 'http://www.startupmoscow.ru/storage/{{ $rnew -> filename }}',
                    },
                    {type: 'custom', text: '<i class="try fa fa-vk" aria-hidden="true"></i>'}));
                    </script>
                    
                    <a href="https://twitter.com/share?url=http://www.startupmoscow.ru/soloproject{{$rnew->id}}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank"><i class="fa try fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.startupmoscow.ru/soloproject{{$rnew->id}}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank" title="Share on Facebook"><i class="fa try fa-facebook" aria-hidden="true"></i>
    </a>
              </div>
            </div>
            <div class="rytd">
              <p class="prik">Случайный проект</p>
            </div>
        </div>
        <div class="whiteblock3">
          <a href="/soloproject{{ $rnew ['id'] }}">
          <p id="id1" class="pn2">{{ $rnew ['fio'] }}</p>
          <p class="pn1 wooop">{{ $rnew ['name'] }}</p>
          </a>
        </div>
      </div>
       <div class="col s12 m12 l4">
    @foreach ($projects as $project)
    <a href="/soloproject{{$project->id}}" class="ary">
      <div class="card horizontal">
      <div class="card-image">
        <div class="rytd1">
              <p class="prik1">Последние проекты</p>
            </div>
        <img src="storage/{{ $project -> filename }}" class="imgry">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p id="id" class="pn2 cracra2">{{ $project->fio }}</p>
          <p class="pn1 cracra">{{$project->name}}</p>
        </div>
  
      </div>
    </div>
    </a>
    @endforeach
  </div>
    </div>
  </section>
  
    
<section class="container">
  <div class="row bacj">
      <div class="col l2 s12 m12 ots">
   <p class="pcar">Последние новости</p>
    </div>
    <div class="col l10 s12 m12 ots">
    <div class="marquee1">
    <div class="marquee1">
      @foreach ($mnews as $mnew)
      <a href="/onenews{{ $mnew->id }}" class="amark">{{$mnew->title}}</a>
      @endforeach
    </div>
    </div>   
    </div>
  </div>
</section> 

<section class="container sec3">
<script type="text/javascript">
baseUrl = "https://widgets.cryptocompare.com/";
var scripts = document.getElementsByTagName("script");
var embedder = scripts[ scripts.length - 1 ];
var cccTheme = {"General":{"enableMarquee":true}};
(function (){
var appName = encodeURIComponent(window.location.hostname);
if(appName==""){appName="local";}
var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
var theUrl = baseUrl+'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=USD,RUB';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>
</section>
<section>
  <div class="container">
    <div class="row jqwrap">
      @foreach ($mnews as $mnew)
            <div class="jqcol">
        <div class="story">
            <img src="/storage/{{  $mnew->img}}" class="crop responsive-img img_thumbnail">
            <div class="social">
              <div class="social_links">
              <script type="text/javascript">
                    document.write(VK.Share.button({
                      url: 'http://www.startupmoscow.ru/onenews{{$mnew->id}}',
                      title: '{{$mnew->title}}',
                      image: 'http://www.startupmoscow.ru/storage/{{ $mnew -> img }}',
                    },
                    {type: 'custom', text: '<i class="fa fa-vk" aria-hidden="true"></i>'}));
                    </script>
              <a href="https://twitter.com/share?url=http://www.startupmoscow.ru/onenews{{$mnew->id}}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank"><i class="fa try fa-twitter" aria-hidden="true"></i></a>
   <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.startupmoscow.ru/onenews{{$mnew->id}}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank" title="Share on Facebook"><i class="fa try fa-facebook" aria-hidden="true"></i>
    </a>
              </div>
            </div>
        </div>
        <div class="whiteblock">
           
          <a href="/onenews{{ $mnew->id }}">
            <p class="pn2">{{$mnew->select}}</p><p class="pn">{{$mnew->title}}</p></a>
        </div>
      </div>
   @endforeach
        </div>
  </div>
</section>


@endsection