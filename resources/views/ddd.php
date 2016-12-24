
<div class="container" style="background-color: white;">
        <div class="container-fluid">
            <div class="row main ">
                <section class="col-md-3 card-wrapper profile-card-wrapper">

                    <div class="card profile-card">


                        <div class="row"></div>


                        <span class="profile-pic-container"></span>

                        <div class="profile-pic">
                                                      <span class="profile-pic-container">
                @if(isset(<0uprof->
        <p>      this is testted here.   </p>
                                                              <img alt="{{$uvar->firstname}} {{$uvar->lastname}}" class="media-object img-circle center-block"
                                                                   itemprop="image" src="images/{{$uprof->profilepic}}">
                                                      </span>
@endif
                        </div>


                        <div class="name-and-profession text-center">
                            <span class="profile-pic-container"></span>

                            <h3 itemprop="name"><span class="profile-pic-container"><b>{{$uvar->firstname}} {{$uvar->lastname}}</b></span>
                            </h3>

@if(isset($uprof->profilepic))
                                <h5 class="text-muted" itemprop="jobTitle"><span class="profile-pic-container">{{$uprof->briefdescription}}</span>
                                </h5>
@endif
                        </div>

                        <hr>

@if((Auth::check() == true) && (Auth::user()->name == isset($uprof->username)))
    @if($uprof->username ==Auth::user()->name)
                                <a class="btn btn-success btn-small pull-right" data-toggle="tooltip"
                                   href="/{{$uprof->username}}/editprofile">Edit Profile</a>
@endif
                        @endif

                        <div class="contact-details">
                            <div class="detail">
                                                <span class="icon"><i class=
                                                                      "icon fs-lg icon-location"></i></span><span class="info">
@if(isset($uprof->address))
{{($uprof->address)}}
                                    @endif
                                    ,
                                    @if(isset($uprof->city))
{{($uprof->city)}}
                                    @endif
                                    ,
                                    @if(isset($uprof->country))
{{($uprof->country)}}
                                    @endif

                                            </span>
                            </div>


                            <div class="detail">
                                                <span class="icon"><i class=
                                                                      "icon fs-lg icon-phone"></i></span><span class="info" itemprop=
    "telephone">{{$uvar->phone}}</span>
                            </div>


                            <div class="detail">
                                                <span class="icon"><i class=
                                                                      "icon fs-lg icon-mail"></i></span><span class="info"><a class=
                                                                                                                              "link" href="mailto:{{$uvar->email}}" itemprop=
    "email">{{$uvar->email}}</a></span>
                            </div>
@if(isset($uprof->website) && $uprof->website!= "")
                                <div class="detail">
                                                <span class="icon"><i class=
                                                                      "icon fs-lg icon-link"></i></span><span class="info"><a href=
    "{{$uprof->website}}" target=
    "_blank">{{$uprof->website}}</a></span>
                                </div>
@endif
                            @if(isset($uprof->gitlink) && $uprof->gitlink!= "")
                                <div class="detail">
                                                <span class="icon"><i class=
                                                                      "icon fs-lg icon-link"></i></span><span class="info"><a href=
    "{{$uprof->gitlink}}" target=
    "_blank">{{$uprof->gitlink}}</a></span>
                                </div>
@endif
                            @if (isset($uprof->languages) && $uprof->languages != "")
                                <div class="detail">
                                                <span class="icon" title="Languages I speak"><i class=
                                                                                                "icon fs-lg icon-language"></i></span><span class="info">{{$uprof->languages}}</span>
                                </div>
@endif
                        </div>

                        <hr>

@if (isset($uprof->fblink) && !(($uprof->fblink == "") && ($uprof->twitlink == "") && ($uprof->lilink == "")))

                            <div class="social-links text-center">
                                <div>
@if ($uprof->fblink != "")
                                        <a class="fs-2x social-link link-facebook icon-facebook"
                                           data-original-title="{{$uvar->firstname}} {{$uvar->lastname}} on Facebook" data-toggle="tooltip"
                                           href="{{$uprof->fblink}}" target="_blank" title=
    ""></a>
@endif
                                    @if ($uprof->twitlink != "")
                                        <a class="fs-2x social-link link-twitter icon-twitter"
                                           data-original-title="{{$uvar->firstname}} {{$uvar->lastname}} on Twitter" data-toggle=
    "tooltip" href="{{$uprof->twitlink}}" target="_blank"
                                           title=""></a>
@endif
                                    @if ($uprof->lilink != "")
                                        <a class="fs-2x social-link link-linkedin icon-linkedin"
                                           data-original-title="{{$uvar->firstname}} {{$uvar->lastname}} on LinkedIn" data-toggle=
    "tooltip" href="{{$uprof->lilink}}" target="_blank"
                                           title=""></a>
@endif

                                </div>
                            </div>
@endif
                    </div>
                </section>

                <section class="col-md-9 card-wrapper pull-right">
                    <div class="card background-card" style="min-height: 728px;">
    @if(\Illuminate\Support\Facades\Session::has('message'))
                            <p class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('message')}}</p>
@endif
                        <h4 class="text-uppercase">Background</h4>

                        <hr>


                        <div class="background-details">
                            <div class="detail" id="about">
                                <div class="icon">
                                    <i class="fs-lg icon-board"></i><span class="mobile-title">About</span>
                                </div>


                                <div class="info">
                                    <h4 class="title text-uppercase">About</h4>


                                    <div class="card card-nested">
                                        <div class="content mop-wrapper" itemprop="description">
    @if(isset($uprof->about))
                                                <p>{{$uprof->about}}</p>
@endif
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="detail" id="work-experience">
                                <div class="icon">
                                    <i class="fs-lg icon-office"></i><span class="mobile-title">Work
                                                    Experience</span>
                                </div>


                                <div class="info">
@if(isset($Message))
                                        <h4>{{$Message}}</h4>
@endif
                                    <h4 class="title text-uppercase">Work Experience</h4><a href="">
                                        <a href="" id="addExperience" class="glyphicon glyphicon-plus" data-toggle="modal"
                                           data-target="#myModal">ADD</a>

@if(isset($experienceData))
    @foreach($experienceData as $experience)

                                                <ul class="list-unstyled clear-margin">
                                                    <li class="card card-nested">
                                                        <div class="content">
                                                            <p class="clear-margin relative">
                                                                <strong>CTO/Co-founder</strong>,&nbsp;<a
                                                                        href="http://www.mindgigs.com"
                                                                        target="_blank">{{$experience->company}}</a></p>


                                                            <p class="text-muted">
                                                                <small><span
                                                                            class="space-right">{{$experience->from}}</span><span><i
                                                                                class="icon-clock mr-5"></i>{{$experience->to}}</span>
                                                                </small>
                                                            </p>


                                                            <div class="mop-wrapper space-bottom">

                                                                <p>{{$experience->description}}<br>
                                                                </p>
                                                            </div>
                                                            <!--Testing Ajax Edit Id -->

                                                            <a id="editExperience" data-id="{{$experience->id}}"
                                                               class="glyphicon glyphicon-pencil" data-toggle="modal"
                                                               data-target="#myModal">Edit</a>
                                                            <a href="deleteexperience/{{$experience->id}}"
                                                               data-id="{{$experience->id}}" class="glyphicon glyphicon-remove">Delete</a>

                                                        </div>
                                                    </li>


                                                </ul>
@endforeach
                                    @endif
                                </div>
                            </div>


                            <div class="detail" id="skills">
                            </div>
                            <div class="icon">
                                <i class="fs-lg icon-tools"></i><span class="mobile-title">Skills</span>

                                <div class="info">
                                    <h4 class="title text-uppercase">Skills</h4>
                                    <a href="" id="addExperience" class="glyphicon glyphicon-plus" data-toggle="modal"
                                       data-target="#skillsModal">ADD</a>
                                    <div class="content">
                                        <ul class="list-unstyled clear-margin">
                                            <li class="card card-nested card-skills">
                                                <div class="skill-level" data-original-title="Master"
                                                     data-placement="left" data-toggle="tooltip" title="">
                                                    <div class="skill-progress master">
                                                    </div>
                                                </div>
                                                <div class="skill-info">
                                                    <div class="space-top labels">
@if(isset($skills->title))
    @foreach (explode(', ', $skills->title) as $interest)
                                                                <span class="label label-keyword">{{$interest}}</span>
@endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="detail" id="education">
                                <div class="icon">
                                    <i class="fs-lg icon-graduation-cap"></i><span class=
                                                                                   "mobile-title">Education</span>
                                </div>


                                <div class="info">
                                    <h4 class="title text-uppercase">Education</h4>
                                    <a href="" id="addExperience" class="glyphicon glyphicon-plus" data-toggle="modal"
                                       data-target="#educationModel">ADD Education</a>
@if(isset($educationData))
    @foreach($educationData as $education)
                                            <div class="content">
                                                <ul class="list-unstyled clear-margin">
                                                    <li class="card card-nested">
                                                        <div class="content">
                                                            <p class="clear-margin relative"><strong>{{$education->degree}},
                                                                    {{$education->studylevel}}
                                                                    ,&nbsp;</strong>{{$education->institute}}</p>


                                                            <p class="text-muted">
                                                                <small>{{$education->from}} - {{$education->to}}</small>
                                                            </p>
                                                            <p>{{$education->description}}</p>
                                                            <i>3.5</i>
                                                            <small>(in the below mentioned core subjects)</small>

                                                            <div class="space-top labels">
                                                                <span class="label label-keyword">CS110 - Fundamentals of Computer Programming</span>
                                                                <span class="label label-keyword">CS212 - Object Oriented Programming</span>
                                                                <span class="label label-keyword">SE210 - Software Design and Architecture </span>
                                                                <span class="label label-keyword">CS344 - Web Engineering</span>
                                                                <span class="label label-keyword">CS330 - Operating Systems</span>
                                                                <span class="label label-keyword">CS213 - Advanced Programming </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <a id="editeducation" data-id="{{$education->id}}"
                                                       class="glyphicon glyphicon-pencil" data-toggle="modal"
                                                       data-target="#educationModel">Edit</a>
                                                    <a href="deleteeducation/{{$education->id}}" data-id="{{$education->id}}"
                                                       class="glyphicon glyphicon-remove">Delete</a>
                                                </ul>

                                            </div>
@endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="detail" id="education">
                                <div class="icon">
                                    <i class="fs-lg icon-graduation-cap"></i><span class=
                                                                                   "mobile-title">Portfilio</span>
                                </div>

                                <div class="info">

                                    <h4 class="title text-uppercase">Portfilio</h4>
                                    <a href="" id="addExperience" class="glyphicon glyphicon-plus" data-toggle="modal"
                                       data-target="#portfilioModal">ADD Portfilio</a>
@if(isset($portfilioData))
    @foreach($portfilioData as $port)
                                            <div class="content">
                                                <ul class="list-unstyled clear-margin">
                                                    <li class="card card-nested">
                                                        <div class="content">
                                                            <p class="clear-margin relative"><strong>,
                                                                    {{$port->title}}
                                                                    ,&nbsp;</strong>text</p>


                                                            <p class="text-muted">
                                                                <small>from - to</small>
                                                            </p>
                                                            <p>{{$port->description}}</p>
                                                            <i>3.5</i>
                                                            <small>(in the below mentioned core subjects)</small>

                                                            <div class="space-top labels">
                                                                <span class="label label-keyword">CS110 - Fundamentals of Computer Programming</span>
                                                                <span class="label label-keyword">CS212 - Object Oriented Programming</span>
                                                                <span class="label label-keyword">SE210 - Software Design and Architecture </span>
                                                                <span class="label label-keyword">CS344 - Web Engineering</span>
                                                                <span class="label label-keyword">CS330 - Operating Systems</span>
                                                                <span class="label label-keyword">CS213 - Advanced Programming </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <a id="editportfilio" data-id="{{$port->id}}"
                                                       class="glyphicon glyphicon-pencil" data-toggle="modal"
                                                       data-target="#portfilioModal">Edit</a>
                                                    <a href="deleteportfilio/{{$port->id}}" data-id="{{$port->id}}"
                                                       class="glyphicon glyphicon-remove">Delete</a>
                                                </ul>

                                            </div>
@endforeach
                                    @endif

                                </div>
                            </div>
                            <div class="detail" id="volunteer-work">
                                <div class="icon">
                                    <i class="fs-lg icon-child"></i><span class="mobile-title">Volunteer
                                                    Work</span>
                                </div>


                                <div class="info">

                                    <h4 class="title text-uppercase">Certificate</h4>
                                    <a href="" id="addcertifiacte" class="glyphicon glyphicon-plus" data-toggle="modal"
                                       data-target="#nextModal">ADD Certificate</a>
@if(isset($certificateData))
    @foreach($certificateData as $certificate)
                                            <div class="content">
                                                <ul class="list-unstyled clear-margin">
                                                    <li class="card card-nested">
                                                        <div class="content">
                                                            <p class="clear-margin relative"><strong>{{$certificate->title}}
                                                                    ,</strong>
                                                                <a href="http://www.twincon.com.pk/"
                                                                   target="_blank">Provider</a>
                                                            </p>


                                                            <p class="text-muted">
                                                                <small>{{$certificate->created_at}}</small>
                                                            </p>


                                                            <div class="mop-wrapper">
                                                                <p>{{$certificate->description}} </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <a id="editcertificate" data-id="{{$certificate->id}}"
                                                       class="glyphicon glyphicon-pencil" data-toggle="modal"
                                                       data-target="#nextModal">Edit</a>
                                                    <a href="deletecertificate/{{$certificate->id}}"
                                                       data-id="{{$certificate->id}}"
                                                       class="glyphicon glyphicon-remove">Delete</a>
                                                </ul>
                                            </div>
@endforeach
                                    @endif

                                </div>
                            </div>

                            <div class="detail" id="interests">
                                <div class="icon">
                                    <i class="fs-lg icon-language"></i><span class=
                                                                             "mobile-title">Interests</span>
                                </div>


                                <div class="info">
                                    <h4 class="title text-uppercase">Languages</h4>


                                    <div class="content">
                                        <ul class="list-unstyled clear-margin">
                                            <li class="card card-nested">
                                                <span class="label label-keyword">English</span>
                                                <span class="label label-keyword">Japanese</span><span
                                                        class="label label-keyword">German</span><span class=""></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="detail" id="interests">
                                <div class="icon">
                                    <i class="fs-lg icon-heart"></i><span class=
                                                                          "mobile-title">Interests</span>
                                </div>


                                <div class="info">
                                    <h4 class="title text-uppercase">Interests</h4>


                                    <div class="content">
                                        <ul class="list-unstyled clear-margin">
                                            <li class="card card-nested">
                                                <span class="label label-keyword">People</span>
                                                <span class="label label-keyword">Dota 2</span>
                                                <span class="label label-keyword">Dota 2 Community</span>
                                                <span class= "label label-keyword">Reddit</span>
                                                <span class= "label label-keyword">Politics</span>
                                                <span class= "label label-keyword">Science</span>
                                                <span class= "label label-keyword">Travel</span>
                                                <span class="label label-keyword">Nature</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
