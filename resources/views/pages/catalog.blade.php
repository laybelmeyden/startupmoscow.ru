 @extends('layouts.master')

@section('content')   
         <section class="projects_section">
             <div class="container">
                 <div class="row">
                     
                     <div class="tags">
                          <div class="chip all active">
                            Все
                          </div>
                          <div class="chip iT" id="it">
                            iT
                          </div>
                          <div class="chip adap" id="adap">
                            Аддитивные технологии
                          </div>
                          <div class="chip med" id="med">
                            Медицина
                          </div>
                          <div class="chip neiro" id="neiro">
                            Нейроинтерфейсы
                          </div>
                          <div class="chip obr" id="obr">
                            Образование
                          </div>
                          <div class="chip robo" id="robo">
                            Робототехника
                          </div>
                          <div class="chip stroit" id="stroit">
                            Строительство
                          </div>
                          <div class="chip um" id="um">
                            Умные решения
                          </div>
                          <div class="chip finteh" id="finteh">
                            Финтех
                          </div>
                          <div class="chip eco" id="eco">
                            Экология
                          </div>
                          <div class="chip energ" id="energ">
                            Энергетика
                          </div>
                          <div class="chip other" id="other">
                            Другое
                          </div>
                         
                         
                     </div>
                 </div>
                 <div class="row projects">
                     @foreach ($projects as $project)
                     <div class="col s12 m6 l4 {{ $project->class_add }} project">
                           <div class="card">
                            <div class="card-image waves-effect waves-block waves-light cropimg">
                              <img class="activator crop " src="storage/{{ $project -> filename }}">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator card_z">{{$project->name}}</span>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title card_z1"><i class="fa fa-window-close right" aria-hidden="true"></i></span>
                              <span class="card-title card_z1">{{$project->name}}</span>
                              <p class="p21">{{$project->opis}}</p>
                              <p><a href="/soloproject{{$project->id}}" class="btn btn6">Посмотреть проект</a></p>

                    <script type="text/javascript">
                    document.write(VK.Share.button({
                      url: 'http://www.startupmoscow.ru/soloproject{{$project->id}}',
                      title: '{{$project->name}}',
                      image: 'http://www.startupmoscow.ru/storage/{{ $project -> filename }}',
                    },
                    {type: 'custom', text: '<i class="try fa fa-vk" aria-hidden="true"></i>'}));
                    </script>
                    
                    <a href="https://twitter.com/share?url=http://www.startupmoscow.ru/soloproject{{$project->id}}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank"><i class="fa try fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.startupmoscow.ru/soloproject{{$project->id}}"
   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
   target="_blank" title="Share on Facebook"><i class="fa try fa-facebook" aria-hidden="true"></i>
    </a>
                            </div>
                          </div>
                     </div>
                     @endforeach
          
                 </div>
  
             </div>
         </section>
         
    @endsection