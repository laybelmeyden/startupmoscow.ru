@extends('layouts.master')

@section('content')

<section>
  <div class="container">
    <div class="row">
      <div class="col l12 s12 m12 ots center">
      </div>
    <form action="/send" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        
      <div class="row">
        <div class="input-field col l6 m12 s12">
          <input  type="text" class="validate inp3" name="nazv" required>
          <label class="lb1" for="first_name">Название проекта</label>
        </div>
        <div class="input-field col l6 m12 s12">
    <select name="class_add" required>
      <option value="" disabled selected>Выберите Вашу рубрику</option>
      <option value="it-pr">IT</option>
      <option value="adap-pr">Адаптивные технологии</option>
      <option value="med-pr">Медицина</option>
      <option value="neiro-obr">Нейроинтерфейсы</option>
      <option value="obr-pr">Образование</option>
      <option value="robo-pr">Робототехника</option>
      <option value="stroit-pr">Строительство</option>
      <option value="um-pr">Умные решения</option>
      <option value="finteh-pr">Финтех</option>
      <option value="eco-pr">Экология</option>
      <option value="other-pr">Другое</option>
    </select>
        </div>
    <div class="file-field input-field col l12 s12 m12">
      <div class="btn btn4">
        <span>ИЗОБРАЖЕНИЕ ПРОЕКТА</span>
        <input type="file" name="photos[]" required>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Загрузить можно только один файл!">
      </div>
    </div>
        <div class="input-field col l12 m12 s12">
          <input  type="text" class="validate inp3" name="fio">
          <label class="lb1">ФИО главного разработчика или несколько разработчиков</label>
        </div>
        <div class="input-field col l12 m12 s12">
          <textarea class="materialize-textarea inp3" name="opis"></textarea>
          <label class="lb1">Краткое описание проекта</label>
        </div>
        <div class="input-field col l6 m12 s12">
          <input  type="text" class="validate inp3" name="stad">
          <label class="lb1">Стадия проекта</label>
        </div>
        <div class="input-field col l6 m12 s12">
          <input  type="text" class="validate inp3" name="concur">
          <label class="lb1">Наличия конкурентов</label>
        </div>
        <div class="input-field col l12 m12 s12">
          <input  type="text" class="validate inp3" name="potr">
          <label class="lb1">Предполагаемые потребности в инвестициях (сумма в рублях)</label>
        </div>
        <div class="input-field col l6 m12 s12">
          <input  type="text" class="validate inp3" name="preim">
          <label class="lb1">Преимущества</label>
        </div>
        <div class="input-field col l6 m12 s12">
          <input  type="text" class="validate inp3" name="sphere">
          <label class="lb1">Возможные сферы применения</label>
        </div>
        <div class="input-field col l12 m12 s12">
          <input type="text" class="validate inp3" name="otl">
          <label class="lb1">Отличия от конкурентов</label>
        </div>
      </div>
      <div class="col l12 s12 m12 ots right-align">
        <button class="waves-effect waves-light btn btn2" type="submit" value="Upload">ОПУБЛИКОВАТЬ</button>
      </div>
    </form>
    
    </div>
  </div>
</section>


@endsection