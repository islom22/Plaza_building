@extends('layouts.app')

@section('content')

    <h1 class="text-uppercase mt-5">Project</h1>

    <div class="headcrumbs d-flex mb-3">
        <a href="{{ route('projects.index') }}" class="d-flex text-uppercase me-2" style="opacity:25%">Project</a> >> <a class="d-flex text-uppercase ms-2">Edit</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', ['project' => $project]) }}" method="post" enctype='multipart/form-data'>
        @csrf
        @method('put')
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow components-section">
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs border-bottom mb-3" id="nav-tab" role="tablist">
                                @foreach($languages as $language)
                                    <button class="nav-link border-bottom" id="{{ $language->lang }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $language->lang }}" type="button" role="tab" aria-controls="{{ $language->lang }}" aria-selected="true">{{ $language->lang }}</button>
                                @endforeach
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @foreach($languages as $language)
                                <div class="tab-pane fade" id="{{ $language->lang }}" role="tabpanel" aria-labelledby="{{ $language->lang }}-tab">
                                    <div class="row mb-4">
                                        <div class="col-lg-6 col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-4">
                                                <label for="desc">Title</label>
                                                <input type="text" class="form-control" id="title" name="title[{{ $language->small }}]" placeholder="title" value="{{ old('title.'.$language->small) ? old('title.'.$language->small) : $project->title[$language->small] }}">
                                            </div>
                                            <div class="mb-4">
                                                <label for="desc">Subtitle</label>
                                                <input type="text" class="form-control" id="subtitle" name="subtitle[{{ $language->small }}]" placeholder="subtitle" value="{{ old('subtitle.'.$language->small) ? old('subtitle.'.$language->small) : $project->subtitle[$language->small] }}">
                                            </div>
                                            <div class="mb-4">
                                                <label for="desc">Desctiption</label>
                                                <input type="text" class="form-control" id="desc" name="desc[{{ $language->small }}]" placeholder="desc" value="{{ old('desc.'.$language->small) ? old('desc.'.$language->small) : $project->desc[$language->small] }}">
                                            </div>
                                            <!-- End of Form -->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-6 col-sm-6">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Video</label>
                                    <input class="form-control" type="file" name="video">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success px-5 text-white" type="submit" style="padding:12px">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
