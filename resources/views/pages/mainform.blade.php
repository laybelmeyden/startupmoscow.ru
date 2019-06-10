@extends('layouts.master')

@section('content')

<section>
  <div class="container">
    <div class="row">
      <div class="col l12 s12 m12 ots center">
        <p class="p22">Данные разработчика(ов) проекта</p>
        <p class="span1">Пожалуйста, внимательно и максимально полно укажите всю информацию! <br> Все поля обязательны к заполнению.</p>
      </div>
      <form class="col s12" method="POST" action="/sendto">
         {{ csrf_field() }}
      <div class="row">
        <div class="input-field col l12 m12 s12">
          <input id="first_name" type="text" name="nazv" class="validate inp3" required>
          <label class="lb1" for="first_name">Название проекта <span class="redu">*</span></label>
        </div>
        <div class="input-field col l12 m12 s12">
          <input name="fio"  id="first_name" type="text" class="validate inp3" required>
          <label class="lb1" for="first_name">ФИО главного разработчика или несколько разработчиков <span class="redu">*</span></label>
        </div>
        <div class="input-field col l12 m12 s12">
          <input name="uch"  id="first_name" type="text" class="validate inp3">
          <label class="lb1" for="first_name">Наименование учебного заведения, если проект реализуется в нем</label>
        </div>
        <div class="input-field col l6 m12 s12">
          <input name="kol"  id="first_name" type="text" class="validate inp3">
          <label class="lb1" for="first_name">Количество членов команды</label>
        </div>
        <div class="col l4 s12 m12">
        <input name="obr"  type="checkbox" class="filled-in" id="style" name="style" />
        <label for="style">Наличие готового образца</label>
        </div>
        <div class="col l4 s12 m12">
        <input name="ur"  type="checkbox" class="filled-in" id="style1" name="style1" />
        <label for="style1">Наличие юридического лица</label>
        </div>
        <div class="col l4 s12 m12">
        <input name="pat"  type="checkbox" class="filled-in" id="style2" name="style2" />
        <label for="style2">Наличие патента</label>
        </div>
        <div class="input-field col s12">
          <textarea name="pass" id="textarea1" class="materialize-textarea validate inp3" required></textarea>
          <label class="lb1" for="first_name">Паспортные данные <span class="redu">*</span></label>
        </div>
        <div class="input-field col l12 m12 s12">
          <input name="razm"  id="first_name" type="text" class="validate inp3" required>
          <label class="lb1" for="first_name">Размер предполагаемой доли в будущей компании передаваемой инвестору <span class="redu">*</span></label>
        </div>
        <div class="input-field col l6 m12 s12">
          <input name="tel"  id="first_name" type="text" class="validate inp3" required>
          <label class="lb1" for="first_name">Ваш телефон <span class="redu">*</span></label>
        </div>
        <div class="input-field col l6 m12 s12">
          <input name="adr"  id="first_name" type="text" class="validate inp3" required>
          <label class="lb1" for="first_name">Ваш адрес <span class="redu">*</span></label>
        </div>
        <div class="input-field col l6 m12 s12">
          <input name="email" id="first_name" type="email" class="validate inp3" required>
          <label class="lb1" for="first_name">Ваш email <span class="redu">*</span></label>
        </div>
        <div class="input-field col l6 m12 s12">
          <input name="inn" id="first_name" type="text" class="validate inp3">
          <label class="lb1" for="first_name">ИНН/КПП компании (если есть)</label>
        </div>
        <div class="input-field col l6 m12 s12">
          <input name="ogrn" id="first_name" type="text" class="validate inp3">
          <label class="lb1" for="first_name">ОГРН (если есть)</label>
        </div>
        <div class="col l12 s12 m12">
        <input  class="filled-in" id="style4" type='checkbox' name='del_v[]' onclick="check()" />
        <label for="style4">Ознакомился и <a href="/oferta">принимаю условия публичной оферты</a>, а также соглашаюсь с обработкой <a href="/pers">персональных данных</a></label>
        </div>
      </div>
      <div class="col l12 s12 m12 ots right-align">
        <button class="waves-effect waves-light btn btn7" type='submit' id="delButton" disabled >ОТПРАВИТЬ</button>
      </div>
    </form>
    
    </div>
  </div>
  </section>


@endsection