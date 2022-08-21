@extends('layouts.app')

@section('content')

    <h1 class="text-uppercase mb-4">Project</h1>

    <a href="{{ route('projects.create') }}" class="btn btn-success mb-3 text-white">Add project</a>

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
                        <th class="border-0">Image</th>
                        <th class="border-0 rounded-end">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                        <!-- Item -->
                        <tr>
                            <td><a href="#" class="text-primary fw-bold">{{ ($projects ->currentpage()-1) * $projects ->perpage() + $loop->index + 1 }}</a></td>
                            <td class="fw-bold">{{ $project->title['en'] ?? '--' }}</td>
                            <td class="fw-bold">{{ $project->subtitle['en'] ?? '--' }}</td>
                            <td class="fw-bold">{{ $project->desc['en'] ?? '--' }}</td>
                            <td>
                                {{-- <div class="home__bottom">
                                    <video autoplay loop muted src="{{ asset($project->video) }}" class="home__video" id="video" width="50%"></video>
                                </div> --}}
                            </td>
                            <td>
                                @foreach($project->projectimage as $iteam)
                                  <img src="{{asset($iteam->image)}}" alt="Image" name="images[]" width="70px" height="70px">
                                @endforeach
                            </td>
                            <td>
                                <div class="actions d-flex">
                                    <form class="" action="{{ route('projects.destroy', ['project' => $project]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-danger bg-transparent border-0 p-0 m-0 mb-3 fw-bolder"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <a href="{{ route('projects.edit', ['project' => $project]) }}" class="text-info fw-bolder ms-3"><i class="fa-solid fa-pen"></i></a>
                                </div>
                            </td>
                        </tr>
                        <!-- End of Item -->
                    @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    {!! $projects->links() !!}
                </div>
            </div>
        </div>
    </div>

@endsection