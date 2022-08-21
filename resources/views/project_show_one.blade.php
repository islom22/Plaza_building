@extends('layouts.web')

@section('content')
 
<main class="main">
    <section class="page__top">
      <div class="container">
        <h1 class="page__title">Объекты</h1>
        <div class="crumbs">
          <a href="#" class="last__page"> Главный </a> /
          <a href="#" class="last__page"> Объекты </a> /
          <p class="this__page">
            2-года исторического строительства в мире It- Узбекистана
          </p>
        </div>
      </div>
    </section>

    <div class="flex__wrap">
        @foreach($projects as $project)
      <section class="video__block">
        <div class="container">
            
              <video autoplay loop muted src="{{ asset($project->video) }}" class="inner__video" id="video" width="70px" height="70px" autoplay loop></video>
            
          {{-- <video src="./video/home.mp4" autoplay loop class="inner__video"></video> --}}
        </div>
      </section>

      <section class="inner__slider" style="position: relative">
        <div class="container">
          <div class="swiper objectSwiper long-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                @foreach($project->projectimage as $iteam)
                  <img src="{{asset($iteam->image)}}" alt="Image" name="images[]" class="object__img" width="70px" height="70px">
                @endforeach

                
                {{-- <img src="./img/object1.jpg" alt="" class="object__img" /> --}}
              </div>
              {{-- <div class="swiper-slide">
                <img src="./img/object2.jpg" alt="" class="object__img" />
              </div>
              <div class="swiper-slide">
                <img src="./img/delete/hotspur.jpg" alt="" class="object__img" />
              </div>
              <div class="swiper-slide">
                <img src="./img/delete/marineford.jpg" alt="" class="object__img" />
              </div> --}}
            </div>
          </div>
          <div class="btns">
            <div class="swiper-button-prev">
              <img class="arrow" src="./img/logo/prev.svg" alt="" />
            </div>
            <div class="swiper-button-next">
              <img class="arrow" src="./img/logo/next.svg" alt="" />
            </div>
          </div>
        </div>
      </section>

      <section class="inner__content">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-xs-12">
              <h2 class="inner__page-title">
                {{ $project->title['en'] }}
              </h2>
              <p>
               {{ $project->subtitle['en'] }}
              </p>
            </div>
          </div>
        </div>
      </section>
      @endforeach
    </div>
  </main>


@endsection
