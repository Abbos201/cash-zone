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
                <h1>Xonalar ro'yxati</h1>
            </div>
            <div class="col-12 text-right mb-2">
                <a class="btn btn-success btn-sm" href="{{route('rooms.create')}}">Qo'shish</a>
            </div>
            @include('admin.layouts.message')
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Xona nomi</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$room->name}}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{route('rooms.show', $room->id)}}">Show</a></td>
                            <td><a class="btn btn-warning btn-sm" href="{{route('rooms.edit', $room->id)}}">Edit</a></td>
                            <td>
                                <form action="{{route('rooms.destroy', $room->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('O\'chirishni tasdiqlang!')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="paginate mt-3" style="color: red;">{{ $rooms->links() }}</div>
            </div>
        </div>
    </div>
</div>

@endsection
