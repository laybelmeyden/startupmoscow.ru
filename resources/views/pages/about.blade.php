@extends('layouts.master')

@section('content') 
<section class="container">
    <div class="row">
        <div class="col l12 s12 m12 ots back2">
            <div class="col l1 s1 m1 center">
            <i class="fa fa-4x fa-lightbulb-o giy" aria-hidden="true"></i>
            </div>
            <div class="col l11 s11 m11">
                <p class="p4 o1"><b>Перспективные Проекты</b> – портал для предпринимателей, изобретателей, разработчиков, инженеров и инвесторов.</p>
                <p class="p4">Здесь Вы можете почерпнуть полезную информацию для вашего стартапа. Узнать, как и где привлечь инвестиции. Приобрести дополнительные навыки. Найти партнеров, специалистов, друзей.</p>
                <p class="p4"><b>Перспективные Проекты</b> представляет вашему вниманию полезную информацию, а так же интеллектуальный развлекательный контент: блоги, ток-шоу, образовательные трансляции.</p>
                <p class="p4 o2">Важный элемент портала — ежегодный форум c выступлениями признанных спикеров отрасли, создателей и руководителей технологических проектов добившихся успеха, руководителей венчурных институтов – это и дополнительная возможность презентовать свой проект, а инвесторам найти выгодные стартапы для инвестиций.</p>
            </div>
        </div>
    </div>
  </section>
  
    <section class="container">
    <div class="row">
      <div class="col l12 s12 m12 ots">
        <div class="col l12 s12 m12 ots center">
        <p class="p22">ТРИ ШАГА К УСПЕХУ</p>
        <div class="crt"></div>
        </div>
        <div class="featured">
							<div class="col l4 m12 s12">
									<span class="feature-icon"><span class="icon fa fa-check"></span></span>
									<header>
										<p class="p7">ДОБАВЬТЕ СВОЙ ПРОЕКТ</p>
									</header>
									<p class="p8">Через простую форму добавьте свой проект для того, чтобы он попал в нашу базу и стал доступен широкому кругу инвесторов</p>
							</div>
							<div class="col l4 m12 s12">
									<span class="feature-icon"><span class="icon fa fa-check"></span></span>
									<header>
										<p class="p7">ПРИВЛЕКИТЕ ИНВЕСТИЦИИ</p>
									</header>
									<p class="p8">Мы делаем все, чтобы инвесторы и фонды (от частных до государственных) своевременно получали информацию обо всех проектах из нашей базы</p>
							</div>
							<div class="col l4 m12 s12">
									<span class="feature-icon"><span class="icon fa fa-check"></span></span>
									<header>
										<p class="p7">ПОЛУЧИТЕ ГРАНТ</p>
									</header>
									<p class="p8">В конце года экспертная комиссия отберет лучшие проекты для закрытой презентации, а самый лучший сможет претендовать на грант от «Перспективных проектов»</p>
							</div>
				</div>
				</div>
    </div>
    </section>
    
    <section class="container">
    <div class="row">
        <div class="col l12 s12 m12 ots back3">
        <div class="col l12 s12 m12 ots center">
        <img src="assets/img/atom.png" class="giy1"></img>  
        </div>
        <div class="col l12 s12 m12 ots center">
          <p class="p5"><b>УЗНАЙ, ЧТО СДЕЛАЛИ ДРУГИЕ</b></p>
          <div class="crt1"></div>
          <p class="p6">Каждый день мы ищем новых героев, готовых рассказать о своих достижениях. Мы ездим по всей стране, чтобы познакомиться с самыми интересными инновациями, которые хотят получить «билет в жизнь»</p>
        </div>
        <div class="col l12 s12 m12 ots center">
         <a href="/projects" class="waves-effect waves-light btn btn3">ВСЕ ПРОЕКТЫ</a>
        </div>
        </div>
    </div>
    </section>
    
    <section>
    <div class="container">
      <div class="row">
        <div class="col l12 s12 m12 ots center">
        <p class="p22">НАШИ ПАРТНЕРЫ</p>
        <div class="crt"></div>
    </div>  
    <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="assets/img/etalab_рцпп-150x150.png"></a>
    <a class="carousel-item" href="#two!"><img src="assets/img/7с-1-150x150.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="assets/img/11-150x150.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="assets/img/fsb.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="assets/img/invest-150x150.jpg"></a>
    <a class="carousel-item" href="#five!"><img src="assets/img/logo-for-site-150x150.png"></a>
    <a class="carousel-item" href="#five!"><img src="assets/img/logo-main-copy-1.jpg"></a>
    </div>
    </div>
    </div>
    </section>
    
    @endsection