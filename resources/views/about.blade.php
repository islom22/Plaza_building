@extends('layouts.web')

@section('content')

<main class="main">
    <section class="page__top">
      <div class="container">
        <h1 class="page__title">О нас</h1>
        <div class="crumbs">
          <a href="{{ route('index') }}" class="last__page"> Главный </a> /
          <p class="this__page">О нас</p>
        </div>
      </div>
    </section>

    <section class="page__content">
      <div class="container">
        <div class="row con__row">
          <div class="col-md-6 col-xs-12">
            <p class="content__txt">
              Уже всем полюбившиеся самые именитые парки, зоны отдыха,
              гостиницы, многоэтажные дома, успевшие стать
              достопримечательностями нашего города говорят о профессионализме
              нашей работы. Мы сотрудничаем с мировыми и государственными,
              частными и специальными компаниями по строительству, созданию
              уникальных проектов и реставрации.
            </p>
          </div>
          <div class="col-md-6 col-xs-12">
            <p class="content__txt">
              Мы ответственно относимся к проекту, работаем над каждой
              деталью, продумываем концепции и работаем не покладая рук.
              Довольные клиенты - Наша гордость.
            </p>
          </div>
        </div>
      </div>
      <div class="about__page-img">
        <img src="./img/about-page.jpg" alt="" class="about__page-pic" />
      </div>
    </section>

    <section class="page__nums">
      <div class="container">
        <div class="row num-row">
          <div class="col-md-3 col-sm-6 num__item rot">
            <div class="flexer">
              <p class="plus">+</p>
              <p id="num" class="big__num">7</p>
            </div>
            <div class="num__txt">лет на рынке</div>
          </div>
          <div class="col-md-3 col-sm-6 num__item rot-rev">
            <div class="flexer">
              <p class="plus">+</p>
              <p id="num" class="big__num">80</p>
            </div>
            <div class="num__txt">завершенных проектов</div>
          </div>
          <div class="col-md-3 col-xs-6 num__item cir">
            <div class="flexer">
              <p class="plus">+</p>
              <p id="num" class="big__num">50</p>
            </div>
            <div class="num__txt">технического оборудования</div>
          </div>
          <div class="col-md-3 col-xs-6 num__item cir">
            <div class="flexer">
              <p class="plus">+</p>
              <p id="num" class="big__num">200</p>
            </div>
            <div class="num__txt">квалифицированных сотрудников</div>
          </div>
        </div>
      </div>
    </section>

    <section class="banner">
      <div class="container">
        <p class="big__txt">
          Если хотите узнать о Нашем величии взгляните на построенные нами
          сооружения.
        </p>
        <p class="big__author">Сахибкиран (Амир Темур)</p>
      </div>
    </section>
  </main>

@endsection
