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
                <h1>team ro'yxati</h1>
            </div>
            <div class="col-12 text-right mb-2">
                <a class="btn btn-success btn-sm" href="{{ route('teams.create') }}">Qo'shish</a>
            </div>
            @include('admin.layouts.message')
            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>№</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Work</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($team->image)
                                <img src="{{ asset('storage/' . $team->image) }}" alt="Team Image" width="100">
                                @else
                                No Image
                                @endif
                            </td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->work }}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{ route('teams.show', $team->id) }}">Show</a></td>
                            <td><a class="btn btn-warning btn-sm" href="{{ route('teams.edit', $team->id) }}">Edit</a></td>
                            <td>
                                <form action="{{ route('teams.destroy', $team->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('O\'chirishni tasdiqlang!')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
