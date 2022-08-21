@extends('layouts.app')

@section('content')

<h1 class="text-uppercase mb-4">Applications</h1>

<div class="card border-0 shadow mb-4">
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-centered table-nowrap mb-0 rounded">
              <thead class="thead-light">
                  <tr>
                      <th class="border-0 rounded-start">#</th>
                      {{-- <th class="border-0">Telegram</th>
                      <th class="border-0">Instagram</th>
                      <th class="border-0">Youtube</th>
                      <th class="border-0">Facebook</th>
                      <th class="border-0">address1</th>
                      <th class="border-0">address2</th>
                      <th class="border-0">address3</th> --}}
                      <th class="border-0">Email</th>
                      {{-- <th class="border-0">phone_number1</th>
                      <th class="border-0">phone_number2</th>
                      <th class="border-0">phone_number3</th>
                      <th class="border-0">Description</th> --}}
                      <th class="border-0">Video</th>
                      <th class="border-0 rounded-end">Actions</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($infos as $info)
                  <!-- Item -->
                  <tr>
                      <td><a href="#" class="text-primary fw-bold">{{ ($infos ->currentpage()-1) * $infos ->perpage() + $loop->index + 1 }}</a></td>
                      {{-- <td class="fw-bold">{{ $info->telegram }}</td>
                      <td>{{ $info->instagram }}</td>
                      <td>{{ $info->youtube }}</td>
                      <td>{{ $info->facebook }}</td>
                      <td>{{ $info->address1 }}</td>
                      <td>{{ $info->address2 }}</td>
                      <td>{{ $info->address3 }}</td> --}}
                      <td>{{ $info->email ?? '--' }}</td>
                      {{-- <td>{{ $info->phone_number1 }}</td>
                      <td>{{ $info->phone_number2 }}</td>
                      <td>{{ $info->phone_number3 }}</td>
                      <td>{{ $info->desc ?? '--' }}</td> --}}
                      <td>
                         <img src="{{ asset($info->video) }}" alt="" style="max-width: 250px">
                      </td>
                      <td>
                        <div class="actions d-flex flex-column">
                          <form class="" action="{{ route('info.destroy', ['info' => $info->id]) }}" method="post">
                            @csrf
                              @method('delete')
                            <button type="submit" class="text-danger bg-transparent border-0 p-0 m-0 mb-3 fw-bolder delete-btn"><i class="fa-solid fa-trash"></i></button>
                          </form>
                        </div>
                      </td>
                  </tr>
                  <!-- End of Item -->
                  @endforeach
              </tbody>
          </table>
          <div class="mt-4">
            {!! $infos->links() !!}
          </div>
      </div>
  </div>
</div>

@endsection
