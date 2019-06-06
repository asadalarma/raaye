@extends('layouts.home')

@section('title', 'User Survey')

@section('content')


        <!--Sub Banner Wrap Start -->
<div class="gt_sub_banner_bg default_width">
    <div class="container">
        <div class="gt_sub_banner_hdg  default_width">
            <h3>My Survey</h3>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">My Survey</a></li>
            </ul>
        </div>
    </div>
</div>
<!--Sub Banner Wrap End -->

<!--Main Content Wrap Start-->
<div class="gt_main_content_wrap">
    <!--About Us Wrap Start-->
    <section class="gt_about_bg">
        <div class="container">
            <div class="row">


                <table class="table-border table-bordered table-hover table-responsive text-center"
                       style="font-size: 24px;">
                    <thead>
                    <tr style="font-weight: bold;">
                        <td>Survey Name</td>
                        <td> Date </td>
                        <td> Points </td>
                    </tr>
                    </thead>
                    <tbody>

                      @foreach($answers as $exam)

                        <tr>
                            <td style="text-align: left!important;">{{ $exam->question->question }}</td>
                            <td>{{ date('d-F-Y h:i A',strtotime($exam->created_at))  }} </td>
                            <td>{{ $exam->question->subCategory->price }} Points</td>
                        </tr>

                      @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <!--About Us Wrap End-->

</div>
<!--Main Content Wrap End-->


@endsection
