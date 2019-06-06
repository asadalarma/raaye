@extends('layouts.home')

@section('title', 'User Login')

@section('content')
    <section id="content" class="reg-body">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div id="msform">
                    {!! Form::open(['route'=>'user_login','method'=>'POST']) !!}
                    {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-12">
							<div class="login-social">
							<div class="log-fb">
                                <a href="{{Facebook::getRedirectLoginHelper()->getLoginUrl(url('facebook/callback'), ['email'])}}"><i class="fa fa-facebook"></i> Login with Facebook</a>
								</div>
								{{--<div class="log-gg">--}}
                                {{--<a href="{{url('glogin')}}"><i class="fa fa-google"></i> Login with Google</a>--}}
								{{--</div>--}}
								</div>
                                @if(Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Success ..! </strong> {{ Session::get('success') }}
                                    </div>
                                @elseif(Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Error ..! </strong> {{ Session::get('error') }}
                                    </div>
                                @endif
                                <!--  ==================================SESSION MESSAGES==================================  -->
                                @if (session()->has('message'))
                                    <div class="alert alert-{!! session()->get('type')  !!} alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        {!! session()->get('message')  !!}
                                    </div>
                                @endif
                                <!--  ==================================SESSION MESSAGES==================================  -->
                                <!--  ==================================VALIDATION ERRORS=================================  -->
                                @if($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            {!!  $error !!}
                                        </div>
                                    @endforeach
                                @endif
                                <!--  ==================================SESSION MESSAGES==================================  -->
                            </div>
                        </div>

                        <div class="inline-frm login-frm">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label hide">Email Address</label>
                                <div class="col-sm-12">
                                    <i class="fa fa-envelope icon"></i>
                                    <input type="text" id="email" name="email" placeholder="Email" required=""
                                           class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label hide">Password</label>
                                <div class="col-sm-12">
                                    <i class="fa fa-key icon"></i>
                                    <input type="password" id="password" name="password" placeholder="Password" class="form-conrol" />
                                </div>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="log-btn" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                            </div>
                        </div>
                    {!! Form::close() !!}

                        <div id="working"></div>
                        <div id="error"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
