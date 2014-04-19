<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
@if (App::getLocale() == "en")
<html lang="en-US"><!--<![endif]-->
@else
<html lang="de-DE"><!--<![endif]-->
@endif
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="UTF-8">
    <title>Lukas Pradel | lpradel</title>
    <meta name="description" content="Lukas Pradel">
    <meta name="author" content="Lukas Pradel">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
    ================================================== -->
    <link rel='shortcut icon' href='./images/favicon.ico?v=5'>
    <!--
    <link rel='apple-touch-icon' href='./images/apple-touch-icon.png'>
    <link rel='apple-touch-icon' sizes='72x72' href='./images/apple-touch-icon-72x72.png'>
    <link rel='apple-touch-icon' sizes='114x114' href='./images/apple-touch-icon-114x114.png'>
    -->

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" id="o-responsive-css" href="./css/o-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" id="themestyle-css" href="./css/style.css" type="text/css" media="all">
    <link rel="stylesheet"  id="prettyPhoto-css" href="./css/prettyPhoto.css" media="screen">
    <link rel="stylesheet" id="photoswipe-css" href="./css/photoswipe.css" type="text/css" media="all">
    <link rel="stylesheet" id="glyphicons-css" href="./css/glyphicons.css" type="text/css" media="all">
    <link rel="stylesheet" id="icomoon-css" href="./css/icomoon.css" type="text/css" media="all">

    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900,300italic,400italic,900italic' rel='stylesheet' type='text/css'>


</head>

<body class="fullwidth boxed " data-device="" data-maxcols="">
<div id="top"></div>


<header>
<div id="header">
    <div class="container wrap text-center">
        <span class="">Lukas Pradel |</span>
        <span class="">Software Engineer</span>
    </div>
    @if (App::getLocale() == "en")
    <a href="/?lang=de" id="langtrigger">
        <span class="pull-right icon lang">DE</span>
    @else
    <a href="/?lang=en" id="langtrigger">
        <span class="pull-right icon lang">EN</span>
    @endif
        <!--<img src="./images/flag-DE.png" class="pull-right icon" width="23" style="padding-top: 12px; padding-right: 50px;" />-->

    </a>

    <a href="#sidr" id="menutrigger" class="pull-right btn icon transparent"><span class="glyphicons justify"><i></i></span></a><span class="clear"></span>
</div><!-- /#header -->
</header>

<nav>
<div id="sidr" class="hidden">
    <h3>Navigation</h3><a href="#" class="navclose"><span class="glyphicons remove_2"><i></i></span></a>
    <ul>
        <li><a href="#home" ><span class="glyphicons home"><i></i></span>Home</a></li>
        <li><a href="#about" ><span class="glyphicons user"><i></i></span>About Me</a></li>
        <li><a href="#personalinfo"><span class="glyphicons nameplate"><i></i></span>Personal Information</a></li>
        <li><a href="#education"><span class="glyphicons certificate"><i></i></span>Education</a></li>
        <li><a href="#employment"><span class="glyphicons share_alt"><i></i></span>Employment</a></li>
        <li><a href="#services"><span class="glyphicons ok_2"><i></i></span>What I Do</a></li>
        <li><a href="#skills"><span class="glyphicons cogwheels"><i></i></span>Skills</a></li>
        <li><a href="#social"><span class="glyphicons heart"><i></i></span>Social Media</a></li>
        <li><a href="#contact"><span class="glyphicons envelope"><i></i></span>Contact me</a></li>
        <li><a href="#download"><span class="glyphicons paperclip"><i></i></span>Download my Resume</a></li>
    </ul>
</div>
</nav>

<main>
<div id="home" class="sugar-container">

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center" id="animation">

                <div id="ccimage" class="img-circle"><img src="./images/me.jpg" alt=""></div>
                <p id="hello" class=" ">@lang('index.header-hello')</p>
                <h1 id="ccname" class=" ">Lukas PRADEL</h1>
                <p id="iam" class=" ">@lang('index.header-i-am')</p>
                <h2 id="ccfunction" class=" ">@lang('index.header-job')</h2>

            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#home -->


<div id="about" class="cream-container parallax" data-speed="1" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons user"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2>@lang('index.aboutme-heading')</h2>

                <p class="intro big">
                    @lang('index.aboutme-main-1')
                    <a href="http://www.cs.tu-dortmund.de/nps/en/Home/index.html">@lang('index.aboutme-main-tud')</a>
                    @lang('index.aboutme-main-2')
                    @lang('index.aboutme-main-3')
                    <a href="http://ls2-www.informatik.uni-dortmund.de/">@lang('index.aboutme-main-ls2')</a>
                    @lang('index.aboutme-main-4')
                    @lang('index.aboutme-main-5')
                    <a href="http://www.adesso.de/en/">@lang('index.aboutme-main-ad')</a>
                    @lang('index.aboutme-main-6')
                    <br/>
                    <br/>
                    @lang('index.aboutme-main-7')
                    <a href="http://dotabuff.com/players/91417049">Dota 2</a>.
                </p>


            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#about -->



<div id="personalinfo" class="coffee-container parallax" data-speed="2" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons nameplate"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2>@lang('index.personal-heading')</h2>

                <dl class="row">
                    <dt class="col dim1half text-right padright">@lang('index.personal-dob')</dt>
                    <dd class="col dim1half text-left padleft">@lang('index.personal-dob-val')</dd>

                    <dt class="col dim1half text-right padright">@lang('index.personal-adr')</dt>
                    <dd class="col dim1half text-left padleft">
                        @lang('index.personal-adr-val-1')<br/>
                        @lang('index.personal-adr-val-2')<br/>
                        @lang('index.personal-adr-val-3')
                    </dd>

                    <dt class="col dim1half text-right padright">@lang('index.personal-email')</dt>
                    <dd class="col dim1half text-left padleft">@lang('index.personal-email-val')</dd>

                    <dt class="col dim1half text-right padright">@lang('index.personal-phone')</dt>
                    <dd class="col dim1half text-left padleft">@lang('index.personal-phone-val')</dd>

                    <dt class="col dim1half text-right padright">@lang('index.personal-web')</dt>
                    <dd class="col dim1half text-left padleft"><a href="#">@lang('index.personal-web-val')</a></dd>
                </dl>

            </div><!-- /.col -->

        </div><!-- /.row  -->



    </div><!-- /.container -->

</div><!-- /#personalinfo -->






<div id="education" class="cream-container parallax" data-speed="4" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons certificate"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2>@lang('index.edu-heading')</h2>

                <div class="position2 row">
                    <div class="col dim1third text-right padright">
                        <div class="date-detail">from 2012 to present day</div>
                        <h3>Technische Universit&auml;t Dortmund</h3>
                        <p><strong>Dortmund, Germany</strong></p>
                    </div>
                    <div class="col dim2thirds text-left padleft post-content">
                        <h4>Master of Science</h4>
                        <p>
                            I'm currently in my second year of Master's studies. I intend to wrap it up in spring 2015.
                            My Master's thesis will probably be about efficient algorithms for clustering problems.
                        </p>
                        <ul>
                            <li>Notable courses:
                                <ul>
                                    <li>Randomized algorithms</li>
                                    <li>Graph algorithms</li>
                                    <li>Seminar on algorithm engineering</li>
                                    <li>Seminar on selected topics of theoretical computer science</li>
                                </ul>
                            </li>
                            <li>Current average grade: 1.9</li>
                        </ul>
                        <div class="more">
                            <a class="btn" href="https://www.tu-dortmund.de/uni/International/index.html">University website</a>
                            <a class="btn" href="https://github.com/lpradel/ImplMWM">Project: Implicit maximum weight matchings</a>
                        </div>
                    </div>
                </div>

                <div class="position2 row">
                    <div class="col dim1third text-right padright">
                        <div class="date-detail">from 2009 to 2012</div>
                        <h3>Technische Universit&auml;t Dortmund</h3>
                        <p><strong>Dortmund, Germany</strong></p>
                    </div>
                    <div class="col dim2thirds text-left padleft post-content">
                        <h4>Bachelor of Science</h4>
                        <p>
                            I finished my Bachelor's degree in computer science in the standard period of study with a minor in economic sciences.
                            The focus of my studies were theoretical computer science and the design and analysis of efficient algorithms.
                            In my bachelor thesis I developed &quot;Symbolic Algorithms for weighted matchings&quot;.
                        </p>
                        <ul>
                            <li>Notable courses:
                                <ul>
                                    <li>Data structures, algorithms and programming I + II</li>
                                    <li>Calculus, algebra, probability calculus and statistics</li>
                                    <li>Introduction to theoretical computer science</li>
                                    <li>Seminar on algorithmic geometry</li>
                                </ul>
                            </li>
                            <li>Bachelor thesis grade: 1.1</li>
                            <li>Overall average grade: 2.0</li>
                        </ul>
                        <div class="more">
                            <a class="btn" href="https://www.tu-dortmund.de/uni/International/index.html">University website</a>
                            <a class="btn" href="https://github.com/lpradel/Go">Project: Go</a>
                            <a class="btn" href="https://github.com/lpradel/Schatzsuche">Project: Treasure hunt</a>
                        </div>
                    </div>
                </div>

                <div class="position2 row last">
                    <div class="col dim1third text-right padright">
                        <div class="date-detail">from 2001 to 2009</div>
                        <h3>Geschwister-Scholl-Gymnasium</h3>
                        <p><strong>Unna, Germany</strong></p>
                    </div>
                    <div class="col dim2thirds text-left padleft post-content">
                        <h4>Abitur</h4>
                        <p>I went to secondary school in my hometown skipping eight grade.</p>
                        <ul>
                            <li>Intensive courses: maths and physics</li>
                            <li>Numerus clausus: 1.4</li>
                            <li>Foreign languages:
                                <ul>
                                    <li>English</li>
                                    <li>French</li>
                                    <li>Latin (Latinum 2011)</li>
                                    <li>Traditional Greek (Graecum 2013)</li>
                                </ul>
                            </li>
                        </ul>
                        <div class="more">
                            <a class="btn" href="http://www.gsg-unna.de/">School website</a>
                        </div>
                    </div>
                </div>


            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#education -->






<div id="employment" class="coffee-container parallax" data-speed="8" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons share_alt"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2>Employment</h2>

                <p class="intro">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>


                <div class="date-detail">from 2011 to present day</div>
                <div class="position">
                    <h3>Company</h3>
                    <h4>Senior UX Designer </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt diam ac lectus tristique scelerisque. Quisque vitae libero sit amet turpis faucibus auctor eget vitae tortor. Aenean metus erat, ultricies non mattis quis, molestie ac massa. Sed sollicitudin erat ac dui viverra a posuere eros adipiscing. Phasellus nisi lectus, imperdiet sed hendrerit ac, dictum quis sem. Phasellus vel nisi non massa elementum porta. Aliquam erat volutpat.</p>
                    <div class="more">
                        <a class="btn" href="#">See Projects</a> <a class="btn" href="#">Company website</a>
                    </div>
                </div>

                <div class="date-detail">from 2011 to present day</div>
                <div class="position">
                    <h3>Company</h3>
                    <h4>Senior UX Designer </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt diam ac lectus tristique scelerisque. Quisque vitae libero sit amet turpis faucibus auctor eget vitae tortor. Aenean metus erat, ultricies non mattis quis, molestie ac massa. Sed sollicitudin erat ac dui viverra a posuere eros adipiscing. Phasellus nisi lectus, imperdiet sed hendrerit ac, dictum quis sem. Phasellus vel nisi non massa elementum porta. Aliquam erat volutpat.</p>
                    <div class="more">
                        <a class="btn" href="#">See Projects</a> <a class="btn" href="#">Company website</a>
                    </div>
                </div>


                <div class="date-detail">from 2011 to present day</div>
                <div class="position last">
                    <h3>Company</h3>
                    <h4>Senior UX Designer </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt diam ac lectus tristique scelerisque. Quisque vitae libero sit amet turpis faucibus auctor eget vitae tortor. Aenean metus erat, ultricies non mattis quis, molestie ac massa. Sed sollicitudin erat ac dui viverra a posuere eros adipiscing. Phasellus nisi lectus, imperdiet sed hendrerit ac, dictum quis sem. Phasellus vel nisi non massa elementum porta. Aliquam erat volutpat.</p>
                    <div class="more">
                        <a class="btn" href="#">See Projects</a> <a class="btn" href="#">Company website</a>
                    </div>
                </div>



            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#employment -->







<div id="services" class="cream-container parallax" data-speed="12" data-offsetY="-150" >

    <div class="icon-container"><div><span class="glyphicons ok_2"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2>What I Do</h2>

                <p class="intro">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>


                <div class="row services">

                    <div class="col dim1third">

                        <img src="./images/iconserv1.png" alt="" >
                        <h3>Service 1</h3>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh</p>

                    </div>

                    <div class="col dim1third">

                        <img src="./images/iconserv2.png" alt="" >
                        <h3>Service 2</h3>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh</p>

                    </div>

                    <div class="col dim1third">

                        <img src="./images/iconserv3.png" alt="" >
                        <h3>Service 3</h3>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh</p>

                    </div>

                    <span class="clear"></span><span class="spacer"></span>

                    <div class="col dim1third">

                        <img src="./images/iconserv4.png" alt="" >
                        <h3>Service 4</h3>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh</p>

                    </div>

                    <div class="col dim1third">

                        <img src="./images/iconserv5.png" alt="" >
                        <h3>Service 5</h3>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh</p>

                    </div>

                    <div class="col dim1third">

                        <img src="./images/iconserv6.png" alt="" >
                        <h3>Service 6</h3>
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh</p>

                    </div>


                </div><!-- /.row  -->


            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#services -->





<div id="skills" class="coffee-container parallax" data-speed="16" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons cogwheels"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center skills">

                <h2>Skills</h2>

                <p class="intro">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

                <h3>Stars Rating</h3>
                <dl class="row skills">
                    <dt class="col dim1half text-right padright">Print</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">Web</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">User Interface</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                    </dd>

                </dl><br/>

                <h3>Heart Rating</h3>
                <dl class="row">
                    <dt class="col dim1half text-right padright">php</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart_empty"><i></i></span>
                        <span class="glyphicons heart_empty"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">javaScript</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart_empty"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">HTML</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart"><i></i></span>
                        <span class="glyphicons heart"><i></i></span>
                    </dd>

                </dl><br/>

                <h3>List of Skills</h3>
                <dl class="row">
                    <dt class="col dim1half text-right padright">Programming Languages</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="btn">HTML5</span>
                        <span class="btn">CSS3</span>
                        <span class="btn">javaScript</span>
                        <span class="btn">jQuery</span>
                        <span class="btn">php5</span>
                    </dd>

                    <dt class="col dim1half text-right padright">CMS</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="btn">WordPress</span>
                        <span class="btn">Drupal</span>
                        <span class="btn">Joomla</span>
                    </dd>

                </dl>


            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#skills -->



<div id="social" class="cream-container parallax" data-speed="24" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons heart"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2>Social Media</h2>

                <p class="intro">
                    If you would like to get in touch with me, feel free to use one of the social networks linked here.
                    You can also find my <a class="smooth-scroll" href="#personalinfo">personal information</a> above or you can get in touch with me
                    by submitting the <a class="smooth-scroll" href="#contact">contact form</a> below. I'm looking forward to hearing from you!
                </p>

                <div class="more">
                    <a href="https://plus.google.com/+LukasPradel/" class="btn transparent"><span class="icomoon icomoon-googleplus3"></span><span class="icomoon-label"> Google Plus</span></a>
                    <a href="skype:bahama-teddy?userinfo" class="btn transparent"><span class="icomoon icomoon-skype"></span><span class="icomoon-label"> Skype</span></a>
                    <a href="http://steamcommunity.com/id/boonzsteam/" class="btn transparent"><span class="icomoon icomoon-steam2"></span><span class="icomoon-label"> Steam</span></a>
                    <a href="https://www.xing.com/profile/Lukas_Pradel/" class="btn transparent"><span class="icomoon icomoon-xing"></span><span class="icomoon-label"> XING</span></a>
                    <a href="https://github.com/lpradel/" class="btn transparent"><span class="icomoon icomoon-github3"></span><span class="icomoon-label"> github</span></a>
                    <a href="mailto:&#108;&#117;&#107;&#097;&#115;&#046;&#112;&#114;&#097;&#100;&#101;&#108;&#064;&#103;&#111;&#111;&#103;&#108;&#101;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;" class="btn transparent"><span class="icomoon icomoon-mail3"></span><span class="icomoon-label"> E-Mail</span></a>
                </div>


            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#social -->




<div id="contact" class="coffee-container parallax" data-speed="32" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons envelope"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2>Contact me</h2>

                <p class="intro">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

                <form id="contact-form" method="post" action="#contact-form" class="text-left" data-form-action="./email.php">

                    <div class="email-confirmation hidden"><span class="glyphicons ok_2"><i></i></span> Email Success</div>
                    <div class="email-error hidden"><span class="glyphicons remove_2"><i></i></span> Email Error</div>

                    <input type="hidden" name="emailto" value="contact@ocholabs.com">
                    <input type="hidden" name="websitename" value="VCARD2">

                    <p>
                        <label for="form-name">Name</label>
                        <input type="text" class="mandatory" placeholder="Your name" id="form-name" name="form-name" value="">
                        <span class="error-message hidden"><span class="glyphicons ban"><i></i></span> Missing Name</span>
                    </p>
                    <p>
                        <label for="form-email">Email</label>
                        <input type="text" class="mandatory" placeholder="Your email" id="form-email" name="form-email" value="">
                        <span class="error-message hidden"><span class="glyphicons ban"><i></i></span> Missing or invalid Email</span>
                    </p>
                    <p>
                        <label for="form-subject">Subject</label>
                        <input type="text" placeholder="Email Subject" id="form-subject" name="form-subject" value="">
                    </p>
                    <p>
                        <label for="form-message">Message</label>
                        <textarea rows="6" class="mandatory" placeholder="Your message" id="form-message" name="form-message" ></textarea>
                        <span class="error-message hidden"><span class="glyphicons ban"><i></i></span> Missing Mail Message</span>
                    </p>
                    <span class="clear"></span>
                    <p>
                        <button type="submit" class="btn btn-primary" name="form-submit">Submit</button>
                    </p>

                </form>


            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#contact -->




<div id="download" class="cream-container parallax" data-speed="18" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons paperclip"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2>Download my Resume</h2>

                <p class="intro">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh</p>

                <a href="#" class="btn">Download</a>


            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#download -->
</main>





<footer>
<div id="copyright">

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <p>&copy; 2014 <em>Lukas Pradel</em> | Built with <a href="http://laravel.com/">Laravel/4.1.25</a> | Hosted at <a href="http://digitalocean.com/">DigitalOcean</a> | Powered by <a href="http://nginx.org/">nginx/1.5.13</a></p>


            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#copyright -->
</footer>




<a style="display: none;" href="#" id="scrolltop" title="Top"><span class="glyphicons up_arrow"><i></i></span></a>


<!-- End Document
================================================== -->

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type='text/javascript' src='./js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='./js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='./js/jquery.elastislide.js'></script>
<script type='text/javascript' src="./js/jquery.prettyPhoto.js"></script>
<script type='text/javascript' src='./js/klass.min.js'></script>
<script type='text/javascript' src='./js/code.photoswipe.jquery-3.0.4.min.js'></script>
<script type='text/javascript' src='./js/jquery.jtwt.min.js'></script>
<script type='text/javascript' src='./js/jquery.sidr.min.js'></script>
<script type='text/javascript' src='./js/responsiveslides.min.js'></script>

<script type='text/javascript' src='./js/scripts.js'></script>


</body>

</html>