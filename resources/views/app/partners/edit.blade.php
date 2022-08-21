@extends('layouts.app')

@section('content')

    <h1 class="text-uppercase mt-5">partners</h1>

    <div class="headcrumbs d-flex mb-3">
        <a href="{{ route('partner.index') }}" class="d-flex text-uppercase me-2" style="opacity:25%">partners</a> >> <a class="d-flex text-uppercase ms-2">edit</a>
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

    <form action="{{ route('partner.update', ['partner' => $partner->id]) }}" method="post" enctype='multipart/form-data'>
        @csrf
        @method('put')
        <div class="row">
            <div class="col-6 mb-4">
                <div class="card border-0 shadow components-section">
                    <div class="card-body">
                        <div class="my-4">
                            <label for="link">Link</label>
                            <input class="form-control" placeholder="Enter your description..." id="link" rows="4" name="link" value="{{ old('link', $partner->link) }}" />
                        </div>
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" name="img">
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
