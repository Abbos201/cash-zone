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
                <h1>{{$room->name}}ning ma'lumotlarini o'zgartirish</h1>
            </div>
            <div class="col-12 text-right mb-2">
                <a class="btn btn-warning btn-sm" href="{{route('rooms.index')}}">Bosh sahifa</a>
            </div>
            <div class="col-12">
                <form class="form" autocomplete="off" action="{{route('rooms.update',$room->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="name">Xona nomi</label>
                                <input type="text" id="name" class="form-control" value="{{$room->name}}" placeholder="Xona nomi" name="name" />
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
