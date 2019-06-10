 <!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ $titl or 'Перспективные проекты' }}</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="{{ $meta or 'Перспективные проекты' }}"/>
  <META NAME="keywords" CONTENT="{{ $keywords or 'Перспективные проекты' }}">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/ropp_fav.png" type="image/x-icon">
    
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $title or 'Перспективные проекты' }}" />
  <meta property="og:description" content="{{ $meta or 'Перспективные проекты' }}" />
  <meta property="og:image" href="storage/{{ $img or 'pages/ropp_logo_site.png' }}" content="storage/{{ $img or 'pages/Logo.png' }}"  />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="Перспективные проекты" />


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="assets/css/materialize/css/materialize.min.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="assets/css/main.css"  media="screen,projection"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript" src="https://vk.com/js/api/share.js?93" charset="windows-1251"></script>



</head>
<body>
  

    <!-- Блок, который будет отображаться над страницей -->
<div id="before-load">
<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_one"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_four"></div>
<div class="object" id="object_five"></div>
<div class="object" id="object_six"></div>
<div class="object" id="object_seven"></div>
<div class="object" id="object_eight"></div>
<div class="object" id="object_big"></div>
</div>
</div>
 
</div>
</div>

@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>