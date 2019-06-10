@extends('layouts.master')

@section('content') 

    <section>
    <div class="container">
        <div class="row">
          <div class="col l12 s12 m12 center">
            <div class="back4">
            <img src="storage/{{ $solo->filename }}" class="responsive-img img2"></img>
            </div>
          </div>
          <div class="col l7 m12 s12">
            <p class="p13"><b>Краткое описание проекта:</b> {{$solo->opis}}</p>
            <p class="p13"><b>Преимущества:</b> {{$solo->preim}}</p>
            <p class="p13"><b>Возможные сферы применения:</b> {{$solo->sphere}}</p>
            <p class="p13"><b>Отличия конкурентов:</b> {{$solo->otl}}</p>
            </div>
          <div class="col l5 m12 s12">
            <div class="back5 right">
            <p class="p12"><b>Название проекта:</b> {{$solo->name}}</p> 
            <p class="p12"><b>ФИО главного разработчика\команды:</b> {{$solo->fio}}</p>
            <p class="p11"><b>Стадия проекта:</b> {{$solo->stad}}</p> 
            <p class="p11"><b>Наличие конкурентов:</b> {{$solo->concur}}</p> 
            <p class="p11"><b>Предпологаемая инвестиция(руб):</b> {{$solo->potr}}</p>
            </div>
          </div>
        </div>
         <div class="row">
      <div class="col l12 s12 m12 ots center">
        <p class="p22">Остались вопросы по проекту {{$solo->name}}?</p>
        <p class="span1">Пожалуйста, внимательно и максимально полно укажите всю информацию, и мы ответим Вам максимально быстро!</p>
      </div>
      <form class="col s12" method="POST" action="/soloprojectform">
        {{ csrf_field() }}
      <div class="row">
        <div class="input-field col l6 m12 s12">
          <input name="name" id="first_name" type="text" class="validate inp3">
          <label class="lb1" for="first_name">Ваше Имя</label>
        </div>
        <div class="input-field col l6 m12 s12">
        <input name="email" id="first_name" id="email" type="email" class="validate inp3">
        <label class="lb1" for="first_name">Ваш email</label>
        </div>
        <div class="input-field col s12">
          <textarea name="message" id="textarea1" class="materialize-textarea inp3"></textarea>
          <label class="lb1" for="textarea1">Ваше сообщение</label>
        </div>
      </div>
      <div class="col l12 s12 m12 ots right-align">
        <button class="waves-effect waves-light btn btn7">ОТПРАВИТЬ</button>
      </div>
    </form>
    
    </div>
     </div>
    </section>
    @endsection