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
              <a href="{{ route('index') }}">
                <img
                  class="brand__pic blue-brand"
                  src="{{ asset('img/logo/brand.svg') }}"
                  alt=""
                />
                <img
                  class="brand__pic white-brand"
                  src="{{ asset('img/logo/brand-white.svg') }}"
                  alt=""
                />
              </a>
            </div>
            <div class="col-8 links">
              <ul class="nav__links" id="navLinks">
                <li class="nav__link"><a href="{{ route('about') }}">О нас</a></li>
                <li class="nav__link"><a href="{{ route('services') }}">Услуги</a></li>
                <li class="nav__link"><a href="{{ route('projects') }}">Проекты</a></li>
                <li class="nav__link"><a href="{{ route('info') }}">Контакты</a></li>
              </ul>
            </div>
            <div class="num col-2">
              <img src="{{ asset('img/logo/phone.svg') }}" class="nav__logo" alt="" />
              <a class="mecha" href="tel:+998977776666">+998 97 777 66 66</a>
            </div>
            <div class="collapse" id="collapse">
              <div class="collapser"></div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    
    @yield('content')
        

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
                  <img src="{{ asset('./img/logo/facebook.svg') }}" alt="" />
                </a>
                <a href="#" class="soc">
                  <img src="{{ asset('./img/logo/instagram.svg') }}" alt="" />
                </a>
                <a href="#" class="soc">
                  <img src="{{ asset('./img/logo/telegram.svg') }}" alt="" />
                </a>
                <a href="#" class="soc">
                  <img src="{{ asset('./img/logo/youtube.svg') }}" alt="" />
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
    <script src="https://unpkg.com/@popperjs/popper.min.js.map" ></script>
    <script src="http://127.0.0.1:8000/app/sweetalert2.all.min.css" ></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('app') }}" ></script>
    <script src="{{ asset('app/volt.js') }}" ></script>
    <script src="{{ asset('app/volt0.js') }}" ></script>
    <script src="{{ asset('app/volt.css') }}" ></script>
    <script src="{{ asset('app/sweetalert2.min.css') }}" ></script>
    <script src="{{ asset('app/sweetalert2.all.min.css') }}" ></script>
    <script src="{{ asset('app/script.js') }}" ></script>
    <script src="{{ asset('app/notyf.min.js') }}" ></script>
    <script src="{{ asset('app/notyf.min.css') }}" ></script>
    <script src="{{ asset('app/BsMultiSelect.min.css') }}" ></script>
    <script src="{{ asset('app/BsMultiSelect.min.js') }}" ></script>
    
    @yield('scripts')
  </body>
</html>
