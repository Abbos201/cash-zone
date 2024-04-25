@extends('admin.layouts.site')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body row justify-content-center">
            <div class="col-12 text-center mb-2">
                <h1>{{$room->name}} haqida batafsil ma'lumot</h1>
            </div>
            <div class="col-12 text-right mb-2">
                <a class="btn btn-success btn-sm" href="{{route('rooms.index')}}">Bosh sahifaga qaytish</a>
            </div>
            <div class="col-8">
                <table class="table table-bordered ">
                    <tr>
                        <th>ID</th>
                        <td>{{$room->id}}</td>
                    </tr>
                    <tr>
                        <th>Xona nomi</th>
                        <td>{{$room->name}}</td>
                    </tr>
                        <th>Qo'shilgan vaqti</th>
                        <td>{{$room->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Yangilangan vaqti</th>
                        <td>{{$room->updated_at}}</td>
                    </tr>
                </table>
            </div>

            <div class="col-12 mt-3">
                <h4>Guruh</h4>
            </div>
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Guruh nomi</th>
                            <th>Fan</th>
                            <th>Dars kunlari</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($groups as $group)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$group->name}}</td>
                            <td>{{$group->subject->name}}</td>
                            <td>{{$group->day}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>

@endsection
