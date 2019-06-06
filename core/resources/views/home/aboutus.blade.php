@extends('layouts.home')

@section('title', 'About Us')

@section('content')

    <!--Main Content Wrap Start-->
        <section>
            <div class="container">
                <div class="row about-sec">
                    <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">
                        <div class="col-sm-9 col-xl-4 p-b-30 m-lr-auto">
                            <h3>{{ $about->name }}</h3>
                            <hr>
                            <p>{!! $about->description  !!}</p>
                        </div>
                        <span class="col-sm-1 m-lr-auto vl"></span>
                        <div class="col-sm-2 col-xl-4 p-b-30 m-lr-auto">
                            <img src="../images/about/sec1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="container">
                <div class="row about-sec2">
                    <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">
                        <div class="col-sm-3 col-xl-4 p-b-30 m-lr-auto">
                            <img src="../images/about/sec1.jpg" alt="">
                        </div>
                        <div class="col-sm-9 col-xl-4 p-b-30 m-lr-auto">
                            <div class="vl2"></div>
                            <h3>What is Raaye Insights?</h3>
                            <p>
                                Raaye provides consumer insights for the on-demand economy.  We connect businesses and consumers in real-time to deliver insights ‘on-demand’ to companies of all sizes and provide consumers with the ability to shape the products they use. We’re powered by the perfect fusion of technology, expertise, and community—Our automated consumer insights platform, RaayeInsights™ underpins everything we do. Clients can access the platform directly, leverage Raaye’s managed services, or create fully-customized digital consumer insights programs via our engineered services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row about-sec3">
                    <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">
                        <div class="col-sm-3 col-xl-4 p-b-30 m-lr-auto">
                            <img src="../images/about/sec1.jpg" alt="">
                        </div>
                        <div class="col-sm-9 col-xl-4 p-b-30 m-lr-auto">
                            <div class="vl2"></div>
                            <h3>How does Raaye use the data we collect? </h3>
                            <p>
                                When you register, we ask for personal information such as your name and address to better match you with the appropriate market research projects. This information is also so that we may send your reward to the appropriate recipient address.
                                Other personal information that you may be asked to provide to us is solely for the purpose of building and operating a worldwide proprietary database of panelists, in order to conduct market research studies on that basis. Raaye only provides information to clients in an anonymized and aggregated form for use in market research.
                                <br/>
                                Raaye does not use Direct Marketing and will never share your data with telemarketers or ad agencies for promotion and targeting purposes.
                                If you have questions about your data, please email us via the Contact Us form.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row about-sec4">
                    <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">
                        <div class="col-sm-3 col-xl-4 p-b-30 m-lr-auto">
                            <img src="../images/about/sec1.jpg" alt="">
                        </div>
                        <div class="col-sm-9 col-xl-4 p-b-30 m-lr-auto">
                            <div class="vl2"></div>
                            <h3>What is a survey?</h3>
                            Surveys are created by our clients who are mostly market research agencies and brands.
                            <br/>
                            Most of the time our surveys will last between 15 and 20 minutes.
                            <br/>
                            Each survey will start with a few questions that will make sure you are part of the targeted demographic group needed for the study. Sometimes, determining whether someone qualifies for a survey takes just a few questions, other times it may take more.When you do not qualify for a survey, your responses cannot be used in the final research findings, and therefore are never transferred to our clients.
                            You can access surveys on Raaye or via an invitation sent to your inbox. Don't forget that by filling in your profile surveys on Raaye you will have a greater chance of being selected for specific surveys.
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row about-sec6">
                    <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">
                        <div class="col-sm-9 col-xl-4 p-b-30 m-lr-auto">
                            <div class="vl3"></div>
                            <h3>What are Topics, Polls, Thumbs it, and Battles?</h3>
                            <p>
                                Want to start a discussion in the community? Create a topic to start an open ended forum with other members. It’s that simple! Ask anything and everything, and wait for the community’s responses to come pouring in.
                                <br/>
                                Create a Poll to ask a question with multiple pre-formed answers, from which other members can make one or several selections. As members answer the Poll, statistics and the infographic will update in real time. This is a great way to get quick answers on your pressing questions.
                                <br/>
                                Can’t decide between two options? Create a Battle to compare two different things and let the community make their choice. Or, if you’re on the fence about something, create a Thumb It and let other members give the subject their thumbs up or thumbs down.
                            </p>
                        </div>
                        <div class="col-sm-2 col-xl-4 p-b-30 m-lr-auto">
                            <img src="../images/about/sec1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row about-sec6">
                    <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">
                        <div class="col-sm-9 col-xl-4 p-b-30 m-lr-auto">
                            <div class="vl3"></div>
                            <h3>What are the rewards?</h3>
                            <p>
                                Rewards are what Raaye offers for your time spent giving your opinion. You receive rewards in the form of points which can be redeemed for all kinds of cool stuff, from sweepstakes tickets for great new gadgets or getaways, gift cards for a large selection of stores including Amazon, or even cold hard cash! You also get points for simple things like signing up, filling out your profile surveys and creating quality content. But once your balance starts growing it's up to you what rewards you get and when you cash them in.
                            </p>
                        </div>
                        <div class="col-sm-2 col-xl-4 p-b-30 m-lr-auto">
                            <img src="../images/about/sec1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>
        <!--About Us Wrap End-->


        <!--Our Client Wrap Start-->
        <section>
            <div class="container">
                <!--Main Heading Wrap Start-->
                <div class="gt_hdg_1">
                    <h3></h3>
                <hr>
                </div>
                <!--Main Heading Wrap End-->
                <!--Brand List Wrap Start-->
                <div class="gt_brand_carousel owl-carouse">
                    @foreach($partner as $p)
                        <div class="item">
                            <div class="gt_brand_outer_wrap">
                                <a href="#"><img src="{{ asset('extra-images') }}/{{ $p->image }}" alt="{{ $p->name }}"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--Our Client Wrap End-->
    </div>

@endsection