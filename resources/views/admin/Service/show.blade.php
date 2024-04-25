@extends('admin.layouts.site')
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body row justify-content-center">
            <div class="col-12 text-center mb-2">
                <h1>{{ $team->name }} haqida batafsil ma'lumot</h1>
            </div>
            <div class="col-12 text-right mb-2">
                <a class="btn btn-success btn-sm" href="{{ route('teams.index') }}">Bosh sahifaga qaytish</a>
            </div>
            <div class="col-8">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $team->id }}</td>
                    </tr>
                    <tr>
                        <th>Teams nomi</th>
                        <td>{{ $team->name }}</td>
                    </tr>
                    <tr>
                        <th>Work</th>
                        <td>{{ $team->work }}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>
                            @if ($team->image)
                            <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }} Image" width="100">
                            @else
                            No Image
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Qo'shilgan vaqti</th>
                        <td>{{ $team->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Yangilangan vaqti</th>
                        <td>{{ $team->updated_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
