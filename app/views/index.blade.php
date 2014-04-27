<?php
if (App::getLocale() == "en") {
    $lang = "en-US";
} else {
    $lang = "de-DE";
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="<?=$lang?>"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="<?=$lang?>"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="<?=$lang?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="<?=$lang?>"><!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="UTF-8">
    <title>Lukas Pradel</title>
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
    </a>

    <a href="#sidr" id="menutrigger" class="pull-right btn icon transparent"><span class="glyphicons justify"><i></i></span></a><span class="clear"></span>
</div><!-- /#header -->
</header>

<nav>
<div id="sidr" class="hidden">
    <h3>Navigation</h3><a href="#" class="navclose"><span class="glyphicons remove_2"><i></i></span></a>
    <ul>
        <li><a href="#home" ><span class="glyphicons home"><i></i></span>@lang('index.menu-home')</a></li>
        <li><a href="#about" ><span class="glyphicons user"><i></i></span>@lang('index.menu-aboutme')</a></li>
        <li><a href="#personalinfo"><span class="glyphicons nameplate"><i></i></span>@lang('index.menu-personal')</a></li>
        <li><a href="#education"><span class="glyphicons certificate"><i></i></span>@lang('index.menu-edu')</a></li>
        <li><a href="#employment"><span class="glyphicons share_alt"><i></i></span>@lang('index.menu-emp')</a></li>
        <li><a href="#code"><span class="glyphicons briefcase"><i></i></span>@lang('index.menu-code')</a></li>
        <li><a href="#skills"><span class="glyphicons cogwheels"><i></i></span>@lang('index.menu-skills')</a></li>
        <li><a href="#social"><span class="glyphicons heart"><i></i></span>@lang('index.menu-social')</a></li>
        <li><a href="#contact"><span class="glyphicons envelope"><i></i></span>@lang('index.menu-contact')</a></li>
        <li><a href="#download"><span class="glyphicons paperclip"><i></i></span>@lang('index.menu-cv')</a></li>
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
                        <div class="date-detail">@lang('index.edu-msc-period')</div>
                        <h3>@lang('index.edu-msc-school')</h3>
                        <p><strong>@lang('index.edu-msc-city')</strong></p>
                    </div>
                    <div class="col dim2thirds text-left padleft post-content">
                        <h4>@lang('index.edu-msc-title')</h4>
                        <p>
                            @lang('index.edu-msc-desc')
                        </p>
                        <ul>
                            <li>@lang('index.edu-msc-notable')
                                <ul>
                                    <li>@lang('index.edu-msc-notable-1')</li>
                                    <li>@lang('index.edu-msc-notable-2')</li>
                                    <li>@lang('index.edu-msc-notable-3')</li>
                                    <li>@lang('index.edu-msc-notable-4')</li>
                                </ul>
                            </li>
                            <li>@lang('index.edu-msc-gpa')</li>
                        </ul>
                        <div class="more">
                            <a class="btn" href="https://www.tu-dortmund.de/uni/International/index.html">@lang('index.edu-msc-school-web')</a>
                            <a class="btn" href="https://github.com/lpradel/ImplMWM">@lang('index.edu-msc-project-1')</a>
                        </div>
                    </div>
                </div>

                <div class="position2 row">
                    <div class="col dim1third text-right padright">
                        <div class="date-detail">@lang('index.edu-bsc-period')</div>
                        <h3>@lang('index.edu-bsc-school')</h3>
                        <p><strong>@lang('index.edu-bsc-city')</strong></p>
                    </div>
                    <div class="col dim2thirds text-left padleft post-content">
                        <h4>@lang('index.edu-bsc-title')</h4>
                        <p>
                            @lang('index.edu-bsc-desc')
                        </p>
                        <ul>
                            <li>@lang('index.edu-bsc-notable')
                                <ul>
                                    <li>@lang('index.edu-bsc-notable-1')</li>
                                    <li>@lang('index.edu-bsc-notable-2')</li>
                                    <li>@lang('index.edu-bsc-notable-3')</li>
                                    <li>@lang('index.edu-bsc-notable-4')</li>
                                </ul>
                            </li>
                            <li>@lang('index.edu-bsc-thesis-grade')</li>
                            <li>@lang('index.edu-bsc-gpa')</li>
                        </ul>
                        <div class="more">
                            <a class="btn" href="https://www.tu-dortmund.de/uni/International/index.html">@lang('index.edu-bsc-school-web')</a>
                            <a class="btn" href="https://github.com/lpradel/Go">@lang('index.edu-bsc-project-1')</a>
                            <a class="btn" href="https://github.com/lpradel/Schatzsuche">@lang('index.edu-bsc-project-2')</a>
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

                <h2>@lang('index.emp-heading')</h2>

                <p class="intro">
                    @lang('index.emp-desc')
                </p>


                <div class="date-detail">@lang('index.emp-ad-period')</div>
                <div class="position">
                    <h3>@lang('index.emp-ad-company')</h3>
                    <h4>@lang('index.emp-ad-position')</h4>
                    <p>
                        @lang('index.emp-ad-desc')
                    </p>
                    <div class="more">
                        <a class="btn" href="https://adesso.de/en/index.jsp">@lang('index.emp-ad-web')</a>
                    </div>
                </div>

                <div class="date-detail">@lang('index.emp-tud-stud-period')</div>
                <div class="position">
                    <h3>@lang('index.emp-tud-stud-company')</h3>
                    <h4>@lang('index.emp-tud-stud-position')</h4>
                    <p>
                        @lang('index.emp-tud-stud-desc')
                    </p>
                    <div class="more">
                        <a class="btn" href="http://ls2-www.cs.uni-dortmund.de/">@lang('index.emp-tud-stud-web')</a>
                    </div>
                </div>


                <div class="date-detail">@lang('index.emp-due-period')</div>
                <div class="position last">
                    <h3>@lang('index.emp-due-company')</h3>
                    <h4>@lang('index.emp-due-position')</h4>
                    <p>
                        @lang('index.emp-due-desc')
                    </p>
                    <div class="more">
                        <a class="btn" href="https://www.uni-due.de/en/">@lang('index.emp-due-web')</a>
                    </div>
                </div>



            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#employment -->


<div id="code" class="cream-container parallax" data-speed="22" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons briefcase"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2>@lang('index.code-heading')</h2>

                <p class="intro">
                    @lang('index.code-desc-1')
                    <a href="https://github.com/lpradel/"><span class="icomoon icomoon-github3"></span><span> github</span></a>
                    @lang('index.code-desc-2')
                    <a href="http://osrc.dfm.io/lpradel">Open Source Report Card</a>.
                </p>


            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#portfolio -->



<div id="skills" class="coffee-container parallax" data-speed="16" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons cogwheels"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center skills">

                <h2>@lang('index.skills-heading')</h2>

                <p class="intro">
                    @lang('index.skills-desc')
                </p>

                <h3>@lang('index.skills-prog')</h3>
                <dl class="row skills">
                    <dt class="col dim1half text-right padright">Java (SE)</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">Java (EE)</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">C++</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">PHP</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">C</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">C#</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                </dl><br/>

                <h3>@lang('index.skills-frameworks')</h3>
                <dl class="row skills">
                    <dt class="col dim1half text-right padright">Struts</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">Spring MVC</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">JSF</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">Wicket</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">Laravel</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">CodeIgniter</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>

                    <dt class="col dim1half text-right padright">ASP.NET MVC</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons star"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                        <span class="glyphicons dislikes"><i></i></span>
                    </dd>
                </dl><br/>

                <h3>@lang('index.skills-other')</h3>
                <dl class="row">
                    <dt class="col dim1half text-right padright">@lang('index.skills-build-dev')</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="btn">Eclipse</span>
                        <span class="btn">Gradle</span>
                        <span class="btn">Maven</span>
                        <span class="btn">Ant</span>
                        <span class="btn">DBVisualizer</span>
                        <span class="btn">Visual Studio</span>
                        <span class="btn">CMake</span>
                    </dd>

                    <dt class="col dim1half text-right padright">@lang('index.skills-servers')</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="btn">JBoss</span>
                        <span class="btn">Jakarta Tomcat</span>
                        <span class="btn">Apache</span>
                        <span class="btn">Nginx</span>
                    </dd>

                    <dt class="col dim1half text-right padright">@lang('index.skills-testing')</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="btn">JUnit</span>
                        <span class="btn">TestNG</span>
                        <span class="btn">Mockito</span>
                        <span class="btn">PowerMock</span>
                        <span class="btn">Selenium</span>
                        <span class="btn">GoogleTest</span>
                        <span class="btn">CUTE</span>
                    </dd>

                    <dt class="col dim1half text-right padright">@lang('index.skills-ci')</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="btn">Jenkins</span>
                        <span class="btn">Hudson</span>
                        <span class="btn">Travis CI</span>
                        <span class="btn">Vagrant</span>
                        <span class="btn">Puppet</span>
                    </dd>

                    <dt class="col dim1half text-right padright">@lang('index.skills-web-front')</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="btn">HTML</span>
                        <span class="btn">CSS</span>
                        <span class="btn">javaScript</span>
                        <span class="btn">jQuery</span>
                    </dd>

                    <dt class="col dim1half text-right padright">@lang('index.skills-db')</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="btn">DB/2</span>
                        <span class="btn">MySQL</span>
                        <span class="btn">MariaDB</span>
                    </dd>

                    <dt class="col dim1half text-right padright">@lang('index.skills-os')</dt>
                    <dd class="col dim1half text-left padleft">
                        <span class="btn">Windows</span>
                        <span class="btn">Unix/Linux</span>
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

                <h2>@lang('index.social-heading')</h2>

                <p class="intro">
                    @lang('index.social-desc-1')
                    <a class="smooth-scroll" href="#personalinfo">@lang('index.social-desc-personal')</a>
                    @lang('index.social-desc-2')
                    <a class="smooth-scroll" href="#contact">@lang('index.social-desc-contact')</a>
                    @lang('index.social-desc-3')
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

                <h2>@lang('index.contact-heading')</h2>

                <p class="intro">
                    @lang('index.contact-desc')
                </p>

                <form id="contact-form" method="post" action="#contact-form" class="text-left" data-form-action="./email.php">

                    <div class="email-confirmation hidden"><span class="glyphicons ok_2"><i></i></span> @lang('index.contact-success')</div>
                    <div class="email-error hidden"><span class="glyphicons remove_2"><i></i></span> @lang('index.contact-error')</div>

                    <input type="hidden" name="emailto" value="lukas.pradel@gmx.net">
                    <input type="hidden" name="websitename" value="localhost">

                    <p>
                        <label for="form-name">@lang('index.contact-name')</label>
                        <input type="text" class="mandatory" placeholder="@lang('index.contact-name-ph')" id="form-name" name="form-name" value="">
                        <span class="error-message hidden"><span class="glyphicons ban"><i></i></span> @lang('index.contact-name-error')</span>
                    </p>
                    <p>
                        <label for="form-email">@lang('index.contact-email')</label>
                        <input type="text" class="mandatory" placeholder="@lang('index.contact-email-ph')" id="form-email" name="form-email" value="">
                        <span class="error-message hidden"><span class="glyphicons ban"><i></i></span> @lang('index.contact-email-error')</span>
                    </p>
                    <p>
                        <label for="form-subject">@lang('index.contact-subject')</label>
                        <input type="text" placeholder="@lang('index.contact-subject-ph')" id="form-subject" name="form-subject" value="">
                    </p>
                    <p>
                        <label for="form-message">@lang('index.contact-msg')</label>
                        <textarea rows="6" class="mandatory" placeholder="@lang('index.contact-msg-ph')" id="form-message" name="form-message" ></textarea>
                        <span class="error-message hidden"><span class="glyphicons ban"><i></i></span> @lang('index.contact-msg-error')</span>
                    </p>
                    <span class="clear"></span>
                    <p>
                        <button type="submit" class="btn btn-primary" name="form-submit">@lang('index.contact-submit')</button>
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

                <h2>@lang('index.cv-heading')</h2>

                <p class="intro">
                    @lang('index.cv-desc')
                </p>

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