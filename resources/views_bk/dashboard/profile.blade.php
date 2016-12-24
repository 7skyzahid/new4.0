@extends('layouts.app')
@section('content')
@if(!empty($uprof))
    <div id="titlebar" class="resume" style="background-color: white">
        <div class="container" >
            <div class="ten columns">
                <div class="resume-titlebar">
                    @if(isset($uprof->profilepic))
                    <img src="images/{{$uprof->profilepic}}" alt="">
                    @endif
                    <div class="resumes-list-content">
                        <h4>
                            @if(isset($uprof))
                            {{($uprof->username)}}<span>Developer</span></h4>
                        <span class="icons"><i class="fa fa-map-marker"></i>
                        @if(isset($uprof->country))
                            {{$uprof->country}}
                            @endif
                        </span>
                        <span class="icons"><i class="fa fa-money"></i>
                            @if(isset($uprof->hourlyrate))
                                {{$uprof->hourlyrate}}
                            @endif / hour</span>
                        <span class="icons"><a href="#"><i class="fa fa-link"></i> Website</a></span>
                        <span class="icons"><a href="mailto:john.doe@example.com"><i class="fa fa-envelope"></i> john.doe@example.com</a></span>
                        @if(isset($skills))
                        <div class="skills">

                            <span>{{$skills->title}}</span>

                        </div>
                        @endif
                        
                         @if(!empty($uprof->languages))
                        <div class="skills">
                         
                            <span>{{$uprof->languages}}</span>

                        </div>
                        @endif
                        
                        <div class="clearfix"></div>
                        @endif
                        
                    </div>
                </div>
            </div>

            <div class="six columns">
                <div class="two-buttons">

                    <a href="#small-dialog" class="popup-with-zoom-anim button"><i class="fa fa-envelope"></i> Send Message</a>

                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
                        <div class="small-dialog-headline">
                            @if(isset($uprof->username))
                            <h2>Send Message to

                                {{$uprof->username}}

                            </h2>
                            @endif
                        </div>

                        <div class="small-dialog-content">
                            <form action="sendmail" method="post" >

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <input type="hidden" name="username"  value="{{$uprof->username}}"/>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                               <strong>{{ $errors->first('username') }}</strong>
                             </span>
                                @endif
                                <input type="text" name="fullname" placeholder="Full Name" value=""/>
                                @if ($errors->has('fullname'))
                                    <span class="help-block">
                               <strong>{{ $errors->first('fullname') }}</strong>
                             </span>
                                @endif
                                <input type="email" name="emailaddress" placeholder="Your Email Address" value=""/>
                                @if ($errors->has('emailaddress'))
                                    <span class="help-block">
                               <strong>{{ $errors->first('emailaddress') }}</strong>
                             </span>
                                @endif
                                <input type="text" name="subject" placeholder="Subject" value=""/>
                                @if ($errors->has('subject'))
                                    <span class="help-block">
                               <strong>{{ $errors->first('subject') }}</strong>
                             </span>
                                @endif
                                <textarea placeholder="Message" name="message"></textarea>
                                <button class="send">Send To {{$uprof->username}}</button>
                            </form>
                        </div>

                    </div>
                    <a href="#" class="button dark"><i class="fa fa-star"></i> Bookmark This Resume</a>
                </div>
            </div>

        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container" style="background-color: white">
        <!-- Recent Jobs -->
         @if(\Illuminate\Support\Facades\Session::has('message'))
            <p class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('message')}}</p>
    @endif
        <div class="eight columns">
            <div class="padding-right">

                <h3 class="margin-bottom-15">About Me</h3>

                <p class="margin-reset">
                @if(isset($uprof->about))
                    {{$uprof->about}}
                    @endif
                </p>

                <br>
                <h3 class="margin-bottom-15">Experience</h3>
                <div class="margin-reset">
                    @if(isset($experienceData))
                       @foreach($experienceData as $experience)
                            <small class="date"> {{($experience->created_at)}}</small><br>
                            <strong>{{($experience->position)}}</strong><br>
                <div class="skills">

                    <span>{{$experience->company}}</span><br><br>

                </div>
                            <p>{{($experience->description)}}</p>
                        @endforeach
                    @endif
                </div>

                <br>
                <ul>
                    <li>
                        @if(isset($portfilioData))
                            @foreach($portfilioData as $port)
                        <a href="job-page.html"></a>
                            <img src="images/{{$port->image}}" height="150" width="150" alt="">
                            <div class="job-list-content">
                                <h4><span class="part-time">Part-Time</span></h4>
                                <div class="job-icons">
                                    <span><i class="fa fa-briefcase"></i> {{$port->title}}</span>
                                    <span><i class="fa fa-map-marker"></i> London</span>
                                    <span><i class="fa fa-money"></i> $50 / hour</span>
                                </div>
                                <p>{{$port->description}}</p>
                            </div>
                            @endforeach
                        @endif
                    </li>
                </ul>

            </div>
        </div>


        <!-- Widgets -->
        <div class="eight columns">

            <h3 class="margin-bottom-20">Education</h3>

            <!-- Resume Table -->
            <dl class="resume-table">
                @if(isset($educationData))
                @foreach($educationData as $experience)
                <dt>

                    <small class="date"> {{($experience->created_at)}}</small>
                    <strong>{{($experience->institute)}}</strong>
                        <div class="skills">

                            <span>{{$experience->degree}}</span><br><br>

                        </div>

                </dt>
                <dd>
                    <p>{{($experience->description)}}</p>
                </dd>
                    @endforeach
                        @endif
            </dl>


        </div>
        
        
        
        
        <!-- Certificate-->
        <div class="eight columns">

            <h3 class="margin-bottom-20">certificates</h3>

            <!-- Resume Table -->
            <dl class="resume-table">
                @if(isset($certificateData))
                @foreach($certificateData as $certificate)
                <dt>

                    <small class="date"> {{($certificate->created_at)}}</small>
                    <strong>{{($certificate->title)}}</strong>
                        <div class="skills">

                            <span>{{$certificate->provider}}</span><br><br>

                        </div>

                </dt>
                <dd>
                    <p>{{($certificate->description)}}</p>
                </dd>
                    @endforeach
                        @endif
            </dl>


        </div>

    </div>
    @else
    <h1>Sorry No Profile Found</h1>
    @endif

@stop