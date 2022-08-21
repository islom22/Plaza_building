@extends('layouts.app')

@section('content')

    <h1 class="text-uppercase mb-4">partners</h1>

    <a href="{{ route('partner.create') }}" class="btn btn-success mb-3 text-white">Add partner</a>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Link</th>
                        <th class="border-0">Image</th>
                        <th class="border-0 rounded-end">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($partners as $partner)
                        <!-- Item -->
                        <tr>
                            <td><a href="#" class="text-primary fw-bold">{{ ($partners ->currentpage()-1) * $partners ->perpage() + $loop->index + 1 }}</a></td>
                            <td>{{ $partner->link ?? '--' }}</td>
                            <td>
                                <img src="{{ asset($partner->img) }}" alt="" style="max-width: 250px">
                            </td>
                            <td>
                                <div class="actions d-flex">
                                    <form class="" action="{{ route('partner.destroy', ['partner' => $partner->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-danger bg-transparent border-0 p-0 m-0 mb-3 fw-bolder"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <a href="{{ route('partner.edit', ['partner' => $partner->id]) }}" class="text-info fw-bolder ms-3"><i class="fa-solid fa-pen"></i></a>
                                </div>
                            </td>
                        </tr>
                        <!-- End of Item -->
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {!! $partners->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
