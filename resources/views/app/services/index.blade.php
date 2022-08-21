@extends('layouts.app')

@section('content')

    <h1 class="text-uppercase mb-4">Services</h1>

    <a href="{{ route('services.create') }}" class="btn btn-success mb-3 text-white">Add</a>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Title</th>
                        <th class="border-0">Image</th>
                        <th class="border-0 rounded-end">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($services as $service)
                        <!-- Item -->
                        <tr>
                            <td><a href="#" class="text-primary fw-bold">{{ ($services ->currentpage()-1) * $services ->perpage() + $loop->index + 1 }}</a></td>
                            <td class="fw-bold">{{ $service->title['en'] }}</td>
                            <td>
                                @isset($service->img)
                                <img src="{{ asset($service->img) }}" alt="" style="max-width: 250px">
                                @else
                                --
                                @endisset
                            </td>
                            <td>
                                <div class="actions d-flex">
                                    <form class="" action="{{ route('services.destroy', ['service' => $service]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-danger bg-transparent border-0 p-0 m-0 mb-3 fw-bolder"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <a href="{{ route('services.edit', ['service' => $service]) }}" class="text-info fw-bolder ms-3"><i class="fa-solid fa-pen"></i></a>
                                    <!-- <a href="{{ route('services.show', ['service' => $service]) }}" class="text-dark fw-bolder ms-3"><i class="fa-solid fa-eye"></i></a> -->
                                </div>
                            </td>
                        </tr>
                        <!-- End of Item -->
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {!! $services->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
