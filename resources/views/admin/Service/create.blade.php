@extends('admin.layouts.site')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <div class="col-12 text-center mb-2">
                <h1>Yangi teams qo'shish</h1>
            </div>
            <div class="col-12 text-right mb-2">
                <a class="btn btn-warning btn-sm" href="{{ route('teams.index') }}">Bosh sahifa</a>
            </div>
            <div class="col-12">
                <form class="form" autocomplete="off" action="{{ route('teams.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror"
                                    placeholder="name" />
                                <p class="text-danger">@error('image') {{ $message }} @enderror</p>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Name" />
                                <p class="text-danger">@error('name') {{ $message }} @enderror</p>
                            </div>

                            <div class="form-group">
                                <label for="work">Work</label>
                                <input type="text" id="work" name="work" value="{{ old('work') }}"
                                    class="form-control @error('work') is-invalid @enderror" placeholder="Work" />
                                <p class="text-danger">@error('work') {{ $message }} @enderror</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success mr-1">Qo'shish</button>
                            <button type="reset" class="btn btn-outline-secondary">Tozalash</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
