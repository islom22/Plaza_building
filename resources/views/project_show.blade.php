@extends('layouts.web')

@section('content')
 
<main class="main">
    <section class="page__top">
      <div class="container">
        <h1 class="page__title">Проекты</h1>
        <div class="crumbs">
          <a href="{{ route('index') }}" class="last__page"> Главный </a> /
          <a href="{{ route('projects') }}" class="last__page"> Проекты </a> /
          <p class="this__page">
            2-года исторического строительства в мире It- Узбекистана
          </p>
        </div>
      </div>
    </section>
    {{-- @dd($projects) --}}
<section id="test_section" class="video__block">
    {{-- @foreach($projects as $projects) --}}
    <div class="container-fluid">
        <div class="row">
             
            <div class="col-md-12">
                {{-- <video
              src="https://plazabuilding.uz/upload/projects/KT1iAeaEGGHouoEZoioPFlGLaAoUXKZ7G914tugb.mp4"
              autoplay
              loop
              class="inner__video" width="100%"
            ></video> --}}
            <video  src="{{ asset($projects->video) }}" class="inner__video" id="video" width="100%"  autoplay muted loop></video> 
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="text__title">
                    <h1>{{ $projects->title['en'] }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <span>{{ $projects->subtitle['en'] }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="test__carousel">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="swiper-wrapper">
                            {{-- <img src="https://www.imgacademy.com/themes/custom/imgacademy/images/helpbox-contact.jpg" class="d-block w-100" alt=""> --}}
                            @foreach($projects->projectimage as $iteam)
                            <div class="carousel-item active">
                            
                              <div class="swiper-slide pageSlide">
                                <img src="{{asset($iteam->image)}}" alt="Image" name="images[]" class="d-block w-100" alt="">
                              </div> 
                                  
                             </div>                                           
                            @endforeach   
                          </div>  
                          
                          {{-- <div class="carousel-item">
                            <img src="https://www.imgacademy.com/themes/custom/imgacademy/images/helpbox-contact.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://www.imgacademy.com/themes/custom/imgacademy/images/helpbox-contact.jpg" class="d-block w-100" alt="...">
                          </div> --}}
                        {{-- </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                        </div> --}}
                        <div class="green__btns">
                            <div
                              class="swiper-button-prev green__btn projekt-prev{{ $projects->id }} slide__btn"
                            ></div>
                            <div
                              class="swiper-button-next green__btn projekt-next{{ $projects->id }} slide__btn"
                            ></div>
                          </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endforeach --}}
</section>
</main>

@endsection
@section('scripts')

<script type="text/javascript">
//   @foreach($projects as $project)
    new Swiper(".projektSwiper{{ $projects->id }}", {
      navigation: {
        nextEl: ".projekt-next{{ $projects->id }}",
        prevEl: ".projekt-prev{{ $projects->id }}",
      },
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      autoplay: {
        delay: 5000,
      },
      speed: 800,
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 1.4,
        },
      },
    });
//   @endforeach
</script>
@endsection


