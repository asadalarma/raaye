@extends('layouts.layout')

@section('title', 'Edit Withdraw')

@section('content')

    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="{{ route('dashboard') }}">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <a href="#">Manage Withdraw Method</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Edit Method</span>
                </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title">
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(Session::has('success'))
                    <div class="alert alert-info">
                        <strong>Success : </strong>{{ Session::get('success') }}
                    </div>
                @endif
                @if(count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                        <strong>Error: </strong>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 style="font-weight: bold;"><i class="fa fa-pencil-square"></i> Edit Method

                            <a href="{{ route('method-show') }}" class="btn btn-success btn-md btn-md pull-right"><i
                                        class="fa fa-desktop"></i> View All Method</a>
                        </h3>
                    </div>
                    <div class="panel-body">


                        {!! Form::model($method,['route'=>['method-update',$method->id],'method'=>'PUT']) !!}


                        <div class="row">
                            <div class="form-group">
                                <label class="col-md-4 control-label"><strong class="pull-right">Method Name
                                        : </strong></label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control input-lg" name="name" value="{{ $method->name }}"
                                           placeholder="Withdraw Method Name" required>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="form-group">
                                <label class="col-md-4 control-label"><strong class="pull-right">Minimum Withdraw Rate
                                        : </strong></label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control input-lg" name="rate" value="{{ $method->rate }}"
                                           placeholder="Minimum Withdraw Rate" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 col-md-offset-4  margin-top-20">
                                <button type="submit" class="btn btn-primary btn-lg btn-block"><i
                                            class="fa fa-paper-plane" aria-hidden="true"></i> Update Withdraw Method
                                </button>
                            </div>
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->


@endsection