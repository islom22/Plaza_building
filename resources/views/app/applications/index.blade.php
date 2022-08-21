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
                      <th class="border-0">Name</th>
                      <th class="border-0">Phone number</th>
                      <th class="border-0">Email</th>
                      <th class="border-0">Message</th>
                      <th class="border-0">Date</th>
                      <th class="border-0 rounded-end">Actions</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($applications as $application)
                  <!-- Item -->
                  <tr>
                      <td><a href="#" class="text-primary fw-bold">{{ ($applications ->currentpage()-1) * $applications ->perpage() + $loop->index + 1 }}</a></td>
                      <td class="fw-bold">{{ $application->name }}</td>
                      <td>{{ $application->phone_number }}</td>
                      <td>{{ $application->email ?? '--' }}</td>
                      <td>{{ $application->message ?? '--' }}</td>
                      <td>{{ date('d.m.Y H:i', strtotime($application->created_at)) }}</td>
                      <td>
                        <div class="actions d-flex flex-column">
                          <form class="" action="{{ route('application.destroy', ['application' => $application->id]) }}" method="post">
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
            {!! $applications->links() !!}
          </div>
      </div>
  </div>
</div>

@endsection
