<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plaza Building</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link
      rel="shortcut icon"
      href="{{ asset('img/logo/favicon.ico') }}"
      type="image/x-icon"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
  />
  <!-- Link Swiper's CSS -->
  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper/swiper-bundle.min.css"
 
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"
    />
</head>

<body>
    <header>
        <nav class="nav" id="nav">
            <div class="nav__container container">
                <div class="nav__row row">
                    <div class="col-2 nav__brand">
                        <a href="index.html">
                            <img class="brand__pic blue-brand" src="./img/logo/brand.svg" alt="" />
                            <img class="brand__pic white-brand" src="./img/logo/brand-white.svg" alt="" />
                        </a>
                    </div>
                    <div class="col-8 links">
                        <ul class="nav__links" id="navLinks">
                            <li class="nav__link"><a href="{{ route('about') }}">О нас</a></li>
                            <li class="nav__link"><a href="{{ route('services') }}">Услуги</a></li>
                            <li class="nav__link"><a href="{{ route('projects') }}">Проекты</a></li>
                            <li class="nav__link"><a href="{{ route('info') }}">Контакты</a></li>
                            <div class="langs">
                                <a href="#" class="current__lang">
                                    Ru <i class="bx bx-chevron-down"></i>
                                </a>
                                <div class="hidden__lang">
                                    <a href="#" class="next__lang"> Eng </a>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <div class="num col-2">
                        <img src="./img/logo/phone.svg" class="nav__logo" alt="" />
                        <a class="mecha" href="tel:+998977776666">+998 97 777 66 66</a>
                    </div>
                    <div class="collapse" id="collapse">
                        <div class="collapser"></div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home">
            <div class="container">
                <div class="home__row row">
                    <div class="col-lg-8 col-xs-12 home__left">
                        <h2 class="home__title-1" data-aos="fade-up">Мы строим</h2>
                        <h2 class="home__title-2" data-aos="fade-up">будущее…</h2>
                        <p class="home__sub" data-aos="fade-up">
                            Проектирование и реализация объектов различного назначения
                        </p>
                    </div>
                  
                </div>
                <div class="home__bottom">
                    <video autoplay loop muted src="./video/home.mp4" class="home__video" id="video"></video>
                </div>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="row about__top">
                    <div class="col-sm-1 col-xs-12">
                        <p class="lil__title">О нас</p>
                    </div>
                    <div class="col-sm-11 col-xs-12">
                        <h2 class="title about__title">
                            Мы создаём места, <br />
                            хочется остаться
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1 col-xs-12"></div>
                    <div class="col-md-5 col-xs-12 about__right">
                        <p class="about__txt">
                            Уже всем полюбившиеся самые именитые парки, зоны отдыха,
                            гостиницы, многоэтажные дома, успевшие стать
                            достопримечательностями нашего города говорят о профессионализме
                            нашей работы. Мы сотрудничаем с мировыми и государственными,
                            частными и специальными компаниями по строительству, созданию
                            уникальных проектов и реставрации.
                        </p>
                       
                    </div>
                    <div class="col-md-6 col-xs-12 heart">
                        <p class="about__word">
                            Если хотите узнать о Нашем величии взгляните на построенные нами
                            сооружения.
                        </p>
                        <p class="about__author">Сахибкиран (Амир Темур)</p>
                        <div class="grid">
                            <div class="item rot" data-aos="fade-right" data-aos-duration="700">
                                <div class="flexer">
                                    <p class="plus">+</p>
                                    <p id="num" class="big__num">7</p>
                                </div>
                                <div class="num__txt">лет на рынке</div>
                            </div>
                            <div class="item rot-rev" data-aos="fade-down" data-aos-duration="700">
                                <div class="flexer">
                                    <p class="plus">+</p>
                                    <p class="big__num">80</p>
                                </div>
                                <div class="num__txt">завершенных проектов</div>
                            </div>
                            <div class="item cir cir-l" data-aos="fade-up" data-aos-duration="700">
                                <div class="flexer">
                                    <p class="plus">+</p>
                                    <p class="big__num">200</p>
                                </div>
                                <div class="num__txt">квалифицированных сотрудников</div>
                            </div>
                            <div class="item cir cir-r" data-aos="fade-left" data-aos-duration="700">
                                <div class="flexer">
                                    <p class="plus">+</p>
                                    <p class="big__num">50</p>
                                </div>
                                <div class="num__txt">технического оборудования</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 about-pic">
                        <img src="./img/object2.jpg" alt="" class="about-img" />
                    </div>
                </div>
            </div>
        </section>

        <section class="facts">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-xs-12">
                        <p class="lil__title">Факты</p>
                    </div>
                    <div class="col-sm-11 col-xs-12">
                        <h2 class="title mb-1">Преимуществa</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1 col-xs-12"></div>
                    <div class="fax__items col-sm-11 col-xs-12">
                        <div class="fax__item item-f" data-aos="fade-down-left" data-aos-duration="700">
                            <div class="item__logo">
                                <img src="./img/logo/group.png" alt="" />
                            </div>
                            <div class="item__content">
                                <p class="fax__lil-title">Управляющие проектами</p>
                                <p class="fax__lil-txt">
                                    имеют зарубежное квалифицированное образование
                                </p>
                            </div>
                        </div>
                        <div class="fax__item item-s item-alt" data-aos="fade-left" data-aos-duration="700">
                            <div class="item__logo">
                                <img src="./img/logo/alone.png" alt="" />
                            </div>
                            <div class="item__content">
                                <p class="fax__lil-title">Все строители</p>
                                <p class="fax__lil-txt">прошли профессиональную подготовку</p>
                            </div>
                        </div>
                        <div class="fax__item item-t" data-aos="fade-up-right" data-aos-duration="700">
                            <div class="item__logo">
                                <img src="./img/logo/give.png" alt="" />
                            </div>
                            <div class="item__content">
                                <p class="fax__lil-title">Мы обеспечим</p>
                                <p class="fax__lil-txt">
                                    Долговечность и прочность Ваших сооружений
                                </p>
                            </div>
                        </div>
                        <div class="fax__item item-fo" data-aos="fade-up" data-aos-duration="700">
                            <div class="item__logo">
                                <img src="./img/logo/box.png" alt="" />
                            </div>
                            <div class="item__content">
                                <p class="fax__lil-title">Импортное сырье</p>
                                <p class="fax__lil-txt">
                                    В работе мы используем только импортное сырье,
                                    соответствующее мировым стандартам
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-xs-12">
                        <p class="lil__title">Услуги</p>
                    </div>
                    <div class="col-sm-11 col-xs-12 p-0">
                        <h2 class="title pad__title" style="margin-bottom: 32px">
                            Нам вы можете поручить
                        </h2>
                    </div>
                </div>
                <div class="container">
                    <div class="row p-0">
                        <div class="col-sm-1 col-xs-12"></div>
                        <div class="col-sm-11 col-xs-12 d-flex row heavy">
                            <div class="swiper servicesSwiper">
                                <div class="swiper-wrapper">
                                    @foreach($services as $service)    
                                        <div class="swiper-slide serv__slide">
                                            <div class="serv__img">
                                                {{-- <img src="./img/slide1.jpg" alt="" /> --}}
                                                <img src="{{ asset($service->img) }}" alt="" style="max-width: 250px height:100px">
                                            </div>
                                            <div class="serv__txt">
                                                {{-- <p>Комплексное строительство</p> --}}
                                                {{ $service->title['en'] }}
                                            </div>
                                        </div>
                                    @endforeach    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projekt">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-xs-12">
                        <p class="lil__title">Проекты</p>
                    </div>
                    <div class="col-sm-11 col-xs-12">
                        <h2 class="title" style="margin-bottom: 32px">
                            МЫ ПРОЕКТИРУЕМ, <br />
                            СТРОИМ И ОФОРМЛЯЕМ
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1 col-xs-12 p-0"></div>
                    <div class="col-sm-11 col-xs-12 p-0">
                        <div class="projetk__grid">
                          @foreach($projects as $project)
                            <div class="projekt__item" data-aos="fade-up" data-aos-duration="700">
                                <a href="{{ route('projects_show', ['id' => $project->id]) }}" class="link">
                                    <div class="projekt__pic">
                                        
                                        {{-- @foreach($images as $iteam) --}}
                                         <img src="{{asset($project->projectimage[0]->image)}}" alt="Image" class="projekt__img" name="image" >

                                        {{-- @endforeach --}}
                                        {{-- <img src="./img/projekt1.jpg" alt="" class="projekt__img" /> --}}
                                    </div>
                                    <div class="projekt__content">
                                        <p>{{ $project->desc['en'] ?? '--' }}</p>
                                    </div>
                                </a>
                            </div>
                          @endforeach
            
                        </div>
                        <div class="projekt__btn d-flex justify-content-center">
                            <a href="{{ route('projects') }}" class="mecha anime--btn home__btn line-link round-btn about__btn">
                                Подробнее <img src="./img/logo/up-right.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="advantages">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-xs-12">
                        <p class="lil__title">Факты</p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h2 class="title" style="margin-bottom: 32px">Преимуществa</h2>
                    </div>
                    <div class="col-lg-5 col-xs-12">
                        <p class="adv__sup">
                            Мы предлагаем инновационные решения для Вас! Сотрудничая с Нами
                            вы гарантированно получаете
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-xs-12"></div>
                    <div class="col-md-11 col-xs-12">
                        <div class="adv__items">
                            <div class="adv__item" data-aos="fade-up" data-aos-duration="700">
                                <div class="adv__img blue-after">
                                    <img src="./img/logo/class.png" class="adv__pic" alt="" />
                                </div>
                                <p class="adv__txt">Профессиональное выполнение работ</p>
                            </div>
                            <div class="adv__item" data-aos="fade-up" data-aos-duration="900">
                                <div class="adv__img red-after">
                                    <img src="./img/logo/clock.png" class="adv__pic" alt="" />
                                </div>
                                <p class="adv__txt">Короткие сроки не влияющие на качество</p>
                            </div>
                            <div class="adv__item" data-aos="fade-up" data-aos-duration="1100">
                                <div class="adv__img green-after">
                                    <img src="./img/logo/group-green.png" class="adv__pic" alt="" />
                                </div>
                                <p class="adv__txt">
                                    Над вашим проектом будут работать квалифицированные
                                    международные специалисты в сфере строительства
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="partners">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-xs-12">
                        <p class="lil__title">Партнеры</p>
                    </div>
                    <div class="col-sm-11 col-xs-12">
                        <h2 class="title" style="margin-bottom: 32px">Нам доверяют</h2>
                    </div>
                </div>
            </div>
            <div class="swiper partnersSwiper">
                <div class="swiper-wrapper">
                    @foreach ($partners as $partner)
                        <div class="swiper-slide partners__slide">
                            <div class="part__pic">
                                <img src="{{ asset($partner->img) }}" class="partners__logo" alt="" />
                            </div>
                        </div>
                    @endforeach
                </div>
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

    <footer class="footer">
        <div class="container">
          <div class="row">
            @foreach($infos as $info)
            <div class="col-md-3 col-xs-12">
              <div class="footer__brand">
                <a href="index.html" class="link">
                  <img src="./img/logo/brand.svg" alt="" />
                </a>
              </div>
              <div class="footer__socs">
                <p class="soc__title">Мы в социальных сетях</p>
                <div class="socs">
                  <a href="#" class="soc">
                    <img src="./img/logo/facebook.svg" alt="" />
                  </a>
                  <a href="#" class="soc">
                    <img src="./img/logo/instagram.svg" alt="" />
                  </a>
                  <a href="#" class="soc">
                    <img src="./img/logo/telegram.svg" alt="" />
                  </a>
                  <a href="#" class="soc">
                    <img src="./img/logo/youtube.svg" alt="" />
                  </a>
                </div>
              </div>
              <div class="footer__info">
                <p>Copyright © 2022 <br />Plaza Building</p>
                <p>Все права защищены.</p>
              </div>
            </div>
            <div class="col-md-2 col-xs-6 links__wrapper">
              <div class="footer__links">
                <p class="foot__liltitle mb-3">Меню</p>
                <ul>
                  <li>
                    <a href="{{ route('about') }}" class="foot__link">О нас</a>
                  </li>
                  <li>
                    <a href="{{ route('services') }}" class="foot__link">Услуги</a>
                  </li>
                  <li>
                    <a href="{{ route('projects') }}" class="foot__link">Этапы</a>
                  </li>
                  <li>
                    <a href="{{ route('info') }}" class="foot__link">Контакты</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 col-xs-6 add__wrapper">
              <div class="foot__address">
                <p class="foot__liltitle mb-3">Адрес</p>
                <div class="add__item">
                  <div class="topp">
                    <img src="./img/logo/map.svg" alt="" />
                    <p class="foot__liltitle">USA:</p>
                  </div>
                  <p class="add__txt">
                    {{ $info->address1 }}
                  </p>
                </div>
                <div class="add__item">
                  <div class="topp">
                    <img src="./img/logo/map.svg" alt="" />
                    <p class="foot__liltitle">UK:</p>
                  </div>
                  <p class="add__txt">{{ $info->address2 }}</p>
                </div>
                <div class="add__item">
                  <div class="topp">
                    <img src="./img/logo/map.svg" alt="" />
                    <p class="foot__liltitle">Turkey:</p>
                  </div>
                  <p class="add__txt">{{ $info->address3 }}</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-xs-12">
              <p class="foot__liltitle mb-3">Контакты</p>
              <div class="con__item">
                <img src="./img/logo/call_black.svg" alt="" />
                <a href="tel:+19402940150" class="con__txt">{{ $info->phone_number2 }}</a>
              </div>
              <div class="con__item">
                <img src="./img/logo/call_black.svg" alt="" />
                <a href="tel:+19402940150" class="con__txt">{{ $info->phone_number3 }}</a>
              </div>
              <div class="con__item">
                <img src="./img/logo/map.svg" alt="" />
                <p class="con__txt">i{{ $info->email }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.3/gsap.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/imask"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>

</html>
