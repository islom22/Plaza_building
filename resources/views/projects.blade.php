@extends('layouts.web')

@section('content')
 
<main class="main">
    <section class="page__top">
      <div class="container">
        <h1 class="page__title">Проекты</h1>
        <div class="crumbs">
          <a href="{{ route('index') }}" class="last__page"> Главный </a> /
          <p class="this__page">Проекты</p>
        </div>
      </div>
    </section>

    <section class="projekt page__projekt"> 
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 p-0">
            <div class="projetk__grid">
              {{-- @foreach($projects as $project)
              <div
                class="projekt__item">
                <a href="#" class="link">
                  <div class="projekt__pic">
                    @foreach($project->projectimage as $iteam)
                      <img src="{{asset($iteam->image)}}" alt="Image" name="images[]" width="100%">
                    @endforeach
                  </div>
                  <div class="projekt__content">
                    <p>{{ $project->desc['en'] ?? '--' }}</p>
                  </div>
                </a>
              </div>
              @endforeach --}}
              
              @foreach($projects as $project)
              <div class="projekt__item" >
                  <a href="{{ route('projects_show', ['id' => $project->id]) }}" class="link">
                      <div class="projekt__pic">
                        @if ($project->projectimage)
                          {{-- @foreach($images as $iteam) --}}
                           <img src="{{asset($project->projectimage[0]->image)}}" alt="Image" class="projekt__img" name="image" >
                        @endif
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
          </div>
        </div>
      </div>
    </section>
  </main>


  
@endsection
