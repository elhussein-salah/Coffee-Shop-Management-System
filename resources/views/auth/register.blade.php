@extends('layouts.app')

@section('content')
    <section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url({{ asset('assets') }}/images/bg_2.jpg);"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Register</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('theme.index') }}">Home</a></span>
                            <span>Register</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <form action="{{ route('post.register') }}" method="POST" class="billing-form ftco-bg-dark p-3 p-md-5">
                        @csrf
                        <h3 class="mb-4 billing-heading">Register</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Username">name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Username">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <div class="radio">
                                        <button type="submit" name="submit" class="btn btn-primary py-3 px-4">Register</button>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <div class="radio">
                                        <a href="{{ route('login') }}">Already registered?</a>
                                    </div>
                                </div>
                            </div>


                    </form><!-- END -->
                </div> <!-- .col-md-8 -->
            </div>
        </div>
        </div>
    </section> <!-- .section -->
@endsection
