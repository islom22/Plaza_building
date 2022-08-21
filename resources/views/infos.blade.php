@extends('layouts.web')

@section('content')

  
<main class="main">
    <section class="page__top">
      <div class="container">
        <h1 class="page__title">Контакты</h1>
        <div class="crumbs">
          <a href="{{ route('index') }}" class="last__page"> Главный </a> /
          <p class="this__page">Контакты</p>
        </div>
      </div>
    </section>

    <section class="map">
      <div class="map__wrapper">
        <iframe
          class="map__body"
          src="{{ asset('https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2994.059356153969!2d69.32009879905495!3d41.3727951143911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0KLQvtGI0LrQtdC90YIg0YjQsNGF0YDQuCwg0K7QvdGD0YHQvtCx0L7QtCDRgtGD0LzQsNC90LgsIOKAqDE5LdC60LIuINCi0KXQkNCZ!5e0!3m2!1sru!2s!4v1651062746521!5m2!1sru!2s') }}"
          width="100%"
          height="660"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        @foreach($infos as $info)
            <div class="container">
                <div class="map__info">
                    <div class="info__item">
                    <p class="info__lil-title">Адрес:</p>
                    <p class="info__txt">
                        {{ $info->address1 }}, {{ $info->address2 }}, {{ $info->address3 }},
                    </p>
                    </div>
                    <div class="info__item">
                    <p class="info__lil-title">Эл. адрес:</p>
                    <p class="info__txt"> {{ $info->email }}</p>
                    </div>
                    <div class="info__item">
                    <p class="info__lil-title">Телефон:</p>
                    <p class="info__txt"> {{ $info->phone_number1 }}</p>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </section>

    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-1 col-xs-12">
            <p class="lil__title">Контакты</p>
          </div>
          <div class="col-sm-11 col-xs-12">
            <h2 class="title con__title" style="margin-bottom: 48px">
              Контакты для связи
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-1 col-xs-12"></div>
          <div class="col-md-11 col-xs-12">
            <div class="form__wrapper">
                <form action="{{ route('application.store') }}" method="post"
                enctype='multipart/form-data'>
                <div class="row">
                    <div class="form__left col-md-8 col-xs-12">
                        <p class="form__txt">
                            Оставьте заявку и мы свяжемся с вами в ближайшее время
                        </p>
                        @csrf
                        <div class="form__flexer">
                            <input type="text" name="name" id="name" placeholder="Имя"
                                class="con__input half__input" required />
                            <input type="email" name="email" id="email" placeholder="Эл. адрес"
                                class="con__input half__input" required />
                        </div>
                        <input type="text" name="message" id="message" placeholder="Сообщение"
                            class="con__input full__input" />
                            {{-- <button type="submit">aa</button> --}}
                    </div>
                    <div class="form__right col-md-4 col-xs-12">
                        <div class="">
                            <button type="submit"
                                class="mecha anime--btn home__btn line-btn line-link about__btn">
                                Отправить заявку
                                <img src="./img/logo/up-right.png" alt="" />
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


@endsection
