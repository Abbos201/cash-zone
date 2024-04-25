@extends('admin.layouts.site')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

            <!-- Basic Vertical form layout section start -->
            <section id="basic-vertical-layouts">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Profil ma'lumotlarini o'zgartirish</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('profile.update', $user->id)}}" class="form form-vertical" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Ismi</label>
                                                <input type="text" id="first-name-vertical" min="3" max="255" class="form-control" value="{{$user->name}}" name="name" placeholder="First Name" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="email-id-vertical">Email</label>
                                                <input type="email" id="email-id-vertical" class="form-control" value="{{$user->email}}" name="email" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="password-vertical">Parol</label>
                                                <input type="password" id="password-vertical" min="8" max="12" class="form-control" name="password" placeholder="********" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="c-password-vertical">Parolni takrorlang</label>
                                                <input type="password" id="c-password-vertical" min="8" max="12" class="form-control" name="c_password" placeholder="********" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mr-1">Yangilash</button>
                                            <button type="reset" class="btn btn-outline-secondary">Tozalash</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Vertical form layout section end -->
        </div>
    </div>
</div>

@endsection
