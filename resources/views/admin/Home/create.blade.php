@extends('admin.layouts.site')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="col-12 text-center mb-2">
                <h1>Yangi Xona qo'shish</h1>
            </div>
            <div class="col-12 text-right mb-2">
                <a class="btn btn-warning btn-sm" href="{{route('rooms.index')}}">Bosh sahifa</a>
            </div>
            <div class="col-12">
                <form class="form" autocomplete="off" action="{{route('rooms.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="name">Xona nomi</label>
                                <input type="text" id="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Xona nomi" name="name" />
                                <p class="text-danger">@error('name') {{$message}} @enderror</p>
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
