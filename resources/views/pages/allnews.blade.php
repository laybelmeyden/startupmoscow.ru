@extends('layouts.master')
<script>
  
</script>
@section('content')
        <div class="container">
            <div class="row">
            @if(!empty($mnews) && $mnews->count())
              @foreach ($mnews as $mnew)
                <div class="col l4 m12 s12">
        <div class="story str">
            <img src="/storage/{{  $mnew->img}}" class="crop responsive-img img_thumbnail">
            <div class="social_links" style="    top: -41px;
    right: 0; position:absolute;">
              <script type="text/javascript">
                    document.write(VK.Share.button({
                      url: 'http://www.startupmoscow.ru/onenews{{$mnew->id}}',
                      title: '{{$mnew->title}}',
                      image: 'http://www.startupmoscow.ru/storage/{{ $mnew -> img }}',
                    },
                    {type: 'custom', text: '<i class="fa fa-vk" aria-hidden="true"></i>'}));
                    </script>
              <a href="https://twitter.com/share?url=http://www.startupmoscow.ru{{$mnew->id}}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank"><i class="fa try fa-twitter" aria-hidden="true"></i></a>
   
   <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.startupmoscow.ru{{$mnew->id}}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank" title="Share on Facebook"><i class="fa try fa-facebook" aria-hidden="true"></i>
    </a>
              </div>
        </div>
        <div class="whiteblock white2">
          <a href="/onenews{{ $mnew->id }}"><p class="pn">{{$mnew->title}}</p></a>
        </div>
                </div>
            @endforeach
            @else
		    
		        There are no data.
		    
		@endif
            </div>
            <div class="center"> <?php echo $mnews->render(); ?></div>
        </div>


@endsection