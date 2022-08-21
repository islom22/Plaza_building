@extends('layouts.web')

@section('content')

<main class="main">
    <section class="page__top">
      <div class="container">
        <h1 class="page__title">Услуги</h1>
        <div class="crumbs">
          <a href="{{ route('index') }}" class="last__page"> Главный </a> /
          <p class="this__page">Услуги</p>
        </div>
      </div>
    </section>

    <section class="serv__page-content">
      <div class="container">
        <div class="adv__items">
          <div class="adv__item"  >
            <div class="adv__img blue-after">
              <img src="{{ asset('./img/logo/class.png') }}" class="adv__pic" alt="" />
            </div>
            <p class="adv__txt">Профессиональное выполнение работ</p>
          </div>
          <div class="adv__item" >
            <div class="adv__img red-after">
              <img src="{{ asset('./img/logo/clock.png') }}" class="adv__pic" alt="" />
            </div>
            <p class="adv__txt">Короткие сроки не влияющие на качество</p>
          </div>
          <div class="adv__item" >
            <div class="adv__img green-after">
              <img src="{{ asset('./img/logo/group-green.png') }}" class="adv__pic" alt="" />
            </div>
            <p class="adv__txt">
              Над вашим проектом будут работать квалифицированные
              международные специалисты в сфере строительства
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="page__banners">
      <div class="container">
        @foreach($services as $service)
            <div class="page__banner">
                <a href="#">
                    <div class="banner__img">
                    {{-- <img src="./img/delete/chae.jpg" alt="" class="banner__pic" /> --}}
                    <img src="{{ asset($service->img) }}" alt="" class="banner__pic" >
                    </div>
                    <div class="banner__content">
                    <p class="banner__txt">
                        {{ $service->title['en'] }}
                        {{-- Комплексное строительство --}}
                    </p>
                    </div>
                </a>
            </div>
         @endforeach   
        {{-- <div class="page__banner">
          <a href="#">
            <div class="banner__img">
              <img src="./img/banner2.png" alt="" class="banner__pic" />
            </div>
            <div class="banner__content">
              <p class="banner__txt">Разработку архитектуры и дизайна</p>
            </div>
          </a>
        </div>
        <div class="page__banner">
          <a href="#">
            <div class="banner__img">
              <img src="./img/banner3.png" alt="" class="banner__pic" />
            </div>
            <div class="banner__content">
              <p class="banner__txt">Реставрацию</p>
            </div>
          </a>
        </div> --}}
      </div>
    </div>
  </main>

@endsection
