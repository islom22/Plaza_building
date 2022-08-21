@extends('layouts.app')

@section('content')

    <h1 class="text-uppercase mb-4">Objects</h1>

    <a href="{{ route('objects.create') }}" class="btn btn-success mb-3 text-white">Add object</a>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Title</th>
                        <th class="border-0">Subtitle</th>
                        <th class="border-0">Description</th>
                        <th class="border-0">Video</th>
                        <th class="border-0 rounded-end">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($objects as $object)
                        <!-- Item -->
                        <tr>
                            <td><a href="#" class="text-primary fw-bold">{{ ($objects ->currentpage()-1) * $objects ->perpage() + $loop->index + 1 }}</a></td>
                            <td class="fw-bold">{{ $object->title['en'] ?? '--' }}</td>
                            <td class="fw-bold">{{ $object->subtitle['en'] ?? '--' }}</td>
                            <td class="fw-bold">{{ $object->desc['en'] ?? '--' }}</td>
                            <td>
                                {{-- <img src="{{ asset($object->video) }}" alt="" style="max-width: 250px"> --}}
                               
                               
                                {{-- <video width="320" height="240" autoplay muted>
                                    <source src="{{ asset('uploads/objects') }}" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                  Your browser does not support the video tag.
                                  </video> --}}
                                    <div class="home__bottom">
                                        <video autoplay loop muted src="{{ asset($object->video) }}" class="home__video" id="video"></video>
                                    </div>
                            </td>
                            <td>
                                <div class="actions d-flex">
                                    <form class="" action="{{ route('objects.destroy', ['object' => $object]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-danger bg-transparent border-0 p-0 m-0 mb-3 fw-bolder"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <a href="{{ route('objects.edit', ['object' => $object]) }}" class="text-info fw-bolder ms-3"><i class="fa-solid fa-pen"></i></a>
                                </div>
                            </td>
                        </tr>
                        <!-- End of Item -->
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {!! $objects->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection