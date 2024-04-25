@extends('admin.layouts.site')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <div class="col-12 text-center mb-2">
                <h1>{{ $team->name }}ning ma'lumotlarini o'zgartirish</h1>
            </div>
            <div class="col-12 text-right mb-2">
                <a class="btn btn-warning btn-sm" href="{{ route('teams.index') }}">Bosh sahifa</a>
            </div>
            <div class="col-12">
                <form class="form" autocomplete="off" action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" id="image" class="form-control-file" name="image" accept="image/png, image/jpeg">
                                @if ($team->image)
                                    <img src="{{ asset('storage/' . $team->image) }}" alt="Team Image" style="max-width: 200px; margin-top: 10px;">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="name">Teams nomi</label>
                                <input type="text" id="name" class="form-control" value="{{ $team->name }}" placeholder="Teams nomi" name="name" />
                            </div>
                            <div class="form-group">
                                <label for="work">Work</label>
                                <input type="text" id="work" class="form-control" value="{{ $team->work }}" placeholder="Work" name="work" />
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success mr-1">O'zgartirish</button>
                            <button type="reset" class="btn btn-outline-secondary">Tozalash</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
