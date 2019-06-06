@extends('layouts.home')

@section('title', 'Survey category')

@section('content')
    <div class="cont-col-siz">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-xs-12">
                    <div class="row main-nav">
                        <div class="col-sm-12 col-xs-12">
                            <!--<ul class="taks ">
                                <li class="tak-link" data-tab="tak-1"><b><i class="fas fa-poll fa-lg"></i>&nbsp;
                                        Poll</b></li>
                                <li class="tak-link" data-tab="tak-2"><b><i class="far fa-comments fa-lg"></i>&nbsp;Topic</b>
                                </li>
                                <li class="tak-link" data-tab="tak-3"><b><i class="far fa-thumbs-up fa-lg"></i>&nbsp;Thumb
                                        It</b></li>
                                <li class="tak-link" data-tab="tak-4"><b><i
                                                class="fas fa-prescription-bottle fa-lg"></i>&nbsp;Battle</b></li>
                            </ul>-->
                            <div id="tak-1" class="tab-content">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="row main-form">
                                        <form name="formCreate" id="formCreate" method="post" action="#">
                                            <div class="row form-row">
                                                <div class="col-md-12">
                                                    <input name="msg" id="msg" type="text" class="form-control"
                                                           placeholder="Write an Anwer" value="">
                                                </div>
                                            </div>
                                            <div class="row form-row">
                                                <div class="col-md-12">
                                                    <input name="msg" id="msg" type="text" class="form-control"
                                                           placeholder="Write an Anwer" value="">
                                                </div>
                                            </div>
                                            <div class="row form-row">
                                                <div class="col-md-12">
                                                    <input name="img" id="img" type="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button class="btn btn-success btn-cons" type="submit"><i
                                                            class="fa fa-save"></i>Create
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="tak-2" class="tab-content">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="row main-form">
                                        <form name="formCreate" id="formCreate" method="post" action="#">
                                            <div class="row form-row">
                                                <div class="col-md-12">
                                                    <input name="img" id="img" type="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-row">
                                                <div class="col-md-12">
                                                    <textarea name="message" id="message" rows="8" class="form-control"
                                                              placeholder="Your own Opinions"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button class="btn btn-success btn-cons" type="submit"><i
                                                            class="fa fa-save"></i>Create
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="tak-3" class="tab-content">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="row main-form">
                                        <form name="formCreate" id="formCreate" method="post" action="#">
                                            <div class="row form-row">
                                                <div class="col-md-12">
                                                    <option value="">Image Upload</option>
                                                    <input name="img" id="img" type="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button class="btn btn-success btn-cons" type="submit"><i
                                                            class="fa fa-save"></i>Create
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="tak-4" class="tab-content">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="row main-form">
                                        <form name="formCreate" id="formCreate" method="post" action="#">
                                            <div class="row form-row">
                                                <div class="col-md-12">
                                                    <option value="">Image Upload</option>
                                                    <input name="img" id="img" type="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-row">
                                                <div class="col-md-12">
                                                    <option value="">Multiple Image Upload</option>
                                                    <input name="multifile[]" id="multifile" type="file" multiple
                                                           class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-row">
                                                <div class="col-md-12">
                                                    <option value="">Video Upload</option>
                                                    <input name="video" id="video" type="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button class="btn btn-success btn-cons" type="submit"><i
                                                            class="fa fa-save"></i>Create
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <ul class="tabs">
                        <li class="tab-link current" data-tab="tab-1"><b>Recent</b></li>
                        <li class="tab-link" data-tab="tab-2"><b>Popular</b></li>
                        <li class="tab-link" data-tab="tab-3"><b>Recommended</b></li>
                    </ul>
                    <div id="tab-1" class="tab-content current">
                        <div class="col-sm-12 col-xs-12">
                            @foreach($questions as $q)
                                <div class="showContent row">
                                    <div class="col-sm-8">
                                        <div class="surveys">
                                            <span>{{$q->updated_at}}</span>
                                            <p>{{$q->question}}</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 showContent-img">
                                        @if(empty($q->video) && empty($q->images))
                                            <img src="https://dummyimage.com/250x150/aaaab3/ffffff" alt="">
                                        @endif
                                        @if(!empty($q->video))
                                            <video width="100%" height="auto" controls>
                                                <source src="/core/public/videos/{{$q->video}}" type="video/mp4">
                                            </video>
                                        @endif
                                        <?php
                                        $images = json_decode($q->images);
                                        ?>
                                        @if(!empty($q->images))
                                            @foreach($images as $i)
                                                <img src="/core/public/images/<?= $i ?>" alt="" width="100%" height="auto">
                                            @endforeach
                                        @endif
                                        <a data-toggle="collapse" href="#collapseExample{{$q->id}}" role="button"
                                           aria-expanded="false" aria-controls="collapseExample">Vote</a>
                                            <span>
                                             {{count($q->answers)}} opinions
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="collapse" id="collapseExample{{$q->id}}">
                                        <div class="question_options">
                                            {!! Form::open(['url' => 'submitSurvey', 'class' => 'submit_survey']) !!}
                                                @if(!empty($q->first_option))
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="answer" value="first">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            {{$q->first_option}}
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(!empty($q->second_option))
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="answer" value="second">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            {{$q->second_option}}
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(!empty($q->third_option))
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="answer" value="third">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            {{$q->third_option}}
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(!empty($q->fourth_option))
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="answer" value="fourth">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            {{$q->fourth_option}}
                                                        </label>
                                                    </div>
                                                @endif
                                                @if(!empty($q->fifth_option))
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="answer" value="fifth">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            {{$q->fifth_option}}
                                                        </label>
                                                    </div>
                                                @endif
                                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                                    <input type="hidden" name="question_id" value="{{$q->id}}">
                                                <button type="submit" class="btn btn-primary">Vote</button>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-2" class="tab-content">
                        <div class="col-sm-12 col-xs-12">

                        </div>
                    </div>
                    <div id="tab-3" class="tab-content">
                        <div class="col-sm-12 col-xs-12">

                        </div>
                    </div>
                </div>
                <!-- Sidebar Section -->
                <div class="col-sm-3 col-xs-12">
                    <div class="row sidebar-sec-1">
                        <div class="col-sm-4 col-xs-12">
                            <div class="row sidebar-sec-img">
                                <!--<img src="../images/1.png" alt="">-->
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-12">
                            <div class="row items-1">
                                <h3><b></b></h3>
                                <div class="col-sm-5 col-xs-12">
                                    <div class="row items-sec-1">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-xs-12">
                                    <div class="row items-sec-2">
                                        <!--<p><i class="fas fa-gift"></i><br> Rewards</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <div class="row">
                                <!--<div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                                         aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                        20% Complete (info)
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <!--<div class="col-sm-12 col-xs-12">
                            <div class="row items-2">
                                <ul>
                                    <li><b> Fill in your <a href="">Region</a> »</b></li>
                                    <li><b> Fill in your <a href="">Are you the primary grocery shopper for your
                                                household?</a> »</b></li>
                                    <li><b> Verify your email - <a href="">Resend</a> »</b></li>
                                    <hr>
                                </ul>
                            </div>
                        </div>-->
                        <div class="col-sm-12 col-xs-12">
                            <div class="row items-3">
                                <h4>Invite a Friend ?</h4><i class="far fa-map-marker-question"></i>
                                <p>https://pk.toluna.com/referral/jameel&nbsp;&nbsp;</p>
                                <span>Share on <a href=""><i class="fab fa-facebook-square fa-2x"></i></a>&nbsp;&nbsp;<a
                                            href=""><i class="fab fa-twitter-square fa-2x"></i></a></span><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="row sidebar-sec-2">
                                <h5>LATEST NEWS</h5>
                                <hr>
                                <p><b>Did you know we have a Facebook page?</b></p>
                                &nbsp;&nbsp;
                                <p>♣ Follow us on Facebook to continue engaging with your community and participate in
                                    special contests!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()