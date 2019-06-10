@extends('layouts.master')

@section('content') 
<section class="container">
    <div class="row">
        <div class="col l12 s12 m12 ots center">
        <p class="p22">КОНТАКТЫ</p>
        </div>
    </div>
  </section>  
  <section>
    <div class="container center">
      <div class="row">
        <div class="col l6 m12 s12">
          <p class="p10">Контактный телефон: <span class="span1">+7 (921) 128-01-00</span></p>
          <p class="p10">Почта: <span class="span1">info@ropp.ru</span></p>
        </div>
        <div class="col l6 m12 s12">
          <p class="p10">Перспективные проекты</p>
          <p class="span1">Мы всегда рады новым партнерам, идеям и проектам! Пишите, звоните — и мы с радостью окажем любую возможную поддержку!</p>
        </div>
      </div>
    </div>
  </section>
<section class="container">
    <div class="row">
        <div class="col l12 s12 m12">
          <div class="map-responsive">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.028086147194!2d37.6070183159301!3d55.7406409805501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54baa4260cbdf%3A0xf1d6b63adb439a88!2sDigital+October!5e0!3m2!1sru!2sru!4v1512068711389" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
    </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col l12 s12 m12 ots center">
        <p class="p22">Остались вопросы?</p>
        <p class="span1">Пожалуйста, внимательно и максимально полно укажите всю информацию, и мы ответим Вам максимально быстро!</p>
      </div>
      <form class="col s12" method="POST" action="/sendcontact">
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