@extends('layouts.master')

@section('title')
Lukas Pradel
@stop

@section('language-links')
@if (App::getLocale() == "en")
<a href="/?lang=de" id="langtrigger">
    <span class="pull-right icon lang">DE</span>
</a>
@else
<a href="/?lang=en" id="langtrigger">
    <span class="pull-right icon lang">EN</span>
</a>
@endif
@stop

@section('sidebar-nav')
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
@stop

@section('main')
<!-- BEGIN ABOUT SECTION -->
<section id="about" class="cont-sec about-sec">

    <div class="cont-b">

        <div class="container">

            <div class="intro">

                <h1 class="fn">Lukas Pradel</h1>
                <div class="desc">@lang('index.header-job')</div>
                <ul class="social-nav">
                    <li><a href="https://twitter.com/lukaspradel" class="item-2"></a></li>
                    <li><a href="https://plus.google.com/+LukasPradel/" class="item-3"></a></li>
                    <li><a href="https://www.linkedin.com/in/lukaspradel" class="item-5"></a></li>
                    <li><a href="https://www.xing.com/profile/Lukas_Pradel/" class="item-6"></a></li>
                    <li><a href="https://github.com/lpradel/" class="item-8"></a></li>
                    <li><a href="https://www.youtube.com/user/LukasPradel" class="item-10"></a></li>
                </ul>
                <div class="center">
                    <a href="#contacts" class="btn-2 btn-scroll">Hire me</a>
                    <a href="" class="btn-2">Download vcard</a>
                </div>

            </div>

        </div>

    </div>

    <div class="cont-b-2">

        <div class="container">

            <div class="about clearfix">
                <div class="photo">
                    <img width="150" height="200" alt="" src="/images/me.jpg">
                </div>
                <div class="inner">
                    <p class="intro-text">
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
                </div>
            </div>

        </div>

    </div>

</section>
<!-- END ABOUT SECTION -->

<!-- BEGIN RESUME SECTION -->
<section id="resume" class="cont-sec resume-sec">

    <div class="sec-title">

        <div class="container">

            <h2>Resume</h2>

        </div>

    </div>

    <div class="container">

        <div class="cols">

            <div class="col col-1-2">

                <h3>@lang('index.edu-heading')</h3>

                <div class="exp scroll">
                    <div class="date">@lang('index.edu-msc-period')</div>
                    <h4>
                        @lang('index.edu-msc-school')
                        <span>/ @lang('index.edu-msc-title') </span>
                    </h4>
                    <p>
                        @lang('index.edu-msc-desc')
                    </p>
                    <span>@lang('index.edu-msc-notable')</span>
                    <ul class="spaced">
                        <li>@lang('index.edu-msc-notable-1')</li>
                        <li>@lang('index.edu-msc-notable-2')</li>
                        <li>@lang('index.edu-msc-notable-3')</li>
                        <li>@lang('index.edu-msc-notable-4')</li>
                    </ul>
                    <div class="date">@lang('index.edu-bsc-period')</div>
                    <h4>
                        @lang('index.edu-bsc-school')
                        <span>/ @lang('index.edu-bsc-title') </span>
                    </h4>
                    <p>
                        @lang('index.edu-bsc-desc')
                    </p>
                    <span>@lang('index.edu-bsc-notable')</span>
                    <ul class="spaced">
                        <li>@lang('index.edu-bsc-notable-1')</li>
                        <li>@lang('index.edu-bsc-notable-2')</li>
                        <li>@lang('index.edu-bsc-notable-3')</li>
                        <li>@lang('index.edu-bsc-notable-4')</li>
                    </ul>
                </div>

            </div>

            <div class="col col-1-2">

                <h3>@lang('index.emp-heading')</h3>

                <div class="exp scroll">
                    <div class="date">@lang('index.emp-ad-period')</div>
                    <h4>
                        @lang('index.emp-ad-company')
                        <span>/ @lang('index.emp-ad-position')</span>
                    </h4>
                    <p>@lang('index.emp-ad-desc')</p>
                    <div class="date">@lang('index.emp-tud-stud-period')</div>
                    <h4>
                        @lang('index.emp-tud-stud-company')
                        <span>/ @lang('index.emp-tud-stud-position')</span>
                    </h4>
                    <p>@lang('index.emp-tud-stud-desc')</p>
                    <div class="date">@lang('index.emp-due-period')</div>
                    <h4>@lang('index.emp-due-company')
                        <span>/ @lang('index.emp-due-position')</span></h4>
                    <p>@lang('index.emp-due-desc')</p>
                </div>

            </div>

        </div>

    </div>

    <hr>

    <div class="container">

        <div class="cols">

            <div class="col col-1-2">

                <h3>@lang('index.skills-heading')</h3>

                <div class="skills">
                    <h5>@lang('index.skills-prog')</h5>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                Java SE -
                                <span class="val">100%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                Java EE -
                                <span class="val">80%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                C++ -
                                <span class="val">65%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                PHP -
                                <span class="val">60%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                C -
                                <span class="val">45%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                C# -
                                <span class="val">35%</span>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="skills">
                    <h5>@lang('index.skills-frameworks')</h5>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                Struts -
                                <span class="val">95%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                Spring MVC -
                                <span class="val">80%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                JSF -
                                <span class="val">80%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                Wicket -
                                <span class="val">55%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                Laravel -
                                <span class="val">50%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                CodeIgniter -
                                <span class="val">50%</span>
                            </h4>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="progress">
                            <h4>
                                ASP.NET MVC -
                                <span class="val">45%</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-1-2">
                <h3>@lang('index.skills-other')</h3>
                <h5>@lang('index.skills-build-dev')</h5>
                <ul class="tools clearfix">
                    <li>Eclipse</li>
                    <li>Gradle</li>
                    <li>Maven</li>
                    <li>Ant</li>
                    <li>DBVisualizer</li>
                    <li>Visual Studio</li>
                    <li>CMake</li>
                </ul>

                <h5>@lang('index.skills-servers')</h5>
                <ul class="tools clearfix">
                    <li>JBoss</li>
                    <li>Tomcat</li>
                    <li>Apache</li>
                    <li>Nginx</li>
                </ul>

                <h5>@lang('index.skills-testing')</h5>
                <ul class="tools clearfix">
                    <li>JUnit</li>
                    <li>TestNG</li>
                    <li>Mockito</li>
                    <li>PowerMock</li>
                    <li>Selenium</li>
                    <li>GoogleTest</li>
                    <li>CUTE</li>
                </ul>

                <h5>@lang('index.skills-ci')</h5>
                <ul class="tools clearfix">
                    <li>Jenkins</li>
                    <li>Hudson</li>
                    <li>Travis CI</li>
                    <li>Vagrant</li>
                    <li>Puppet</li>
                    <li>Docker</li>
                </ul>

                <h5>@lang('index.skills-web-front')</h5>
                <ul class="tools clearfix">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>jQuery</li>
                </ul>

                <h5>@lang('index.skills-db')</h5>
                <ul class="tools clearfix">
                    <li>DB/2</li>
                    <li>MySQL</li>
                    <li>MariaDB</li>
                </ul>

                <h5>@lang('index.skills-os')</h5>
                <ul class="tools clearfix">
                    <li>Windows</li>
                    <li>UNIX / Linux</li>
                </ul>
            </div>

        </div>

    </div>

</section>
<!-- END RESUME SECTION -->

<!-- BEGIN CONTACTS SECTION -->
<section id="contacts" class="cont-sec contacts-sec">

    <div class="sec-title">

        <div class="container">

            <h2>@lang('index.contact-heading')</h2>

        </div>

    </div>

    <!-- BEGIN CONTACTS -->
    <div class="contacts">
        <div id="map" class="map"></div>
        <div class="inner">
            @lang('index.personal-adr'): <span class="adr">
                        <span class="country-name">@lang('index.personal-adr-val-3')</span>,
                        <span class="locality">@lang('index.personal-adr-val-2')</span>,
                        <span class="street-address">@lang('index.personal-adr-val-1')</span>
                    </span><br>
            Email: <span class="email">mail@yoursite.com</span><br>
            Phone: <span class="tel"> 123-45-67</span><br>
        </div>
    </div>
    <!-- END CONTACTS -->

    <div class="cont-b-3">

        <div class="container">

            <div class="cols">

                <div class="col col-1-2">

                    <h3>@lang('index.contact-heading')</h3>

                    <!-- BEGIN CONTACT FORM -->
                    <form class="feedback-form" method="post" action="send.php">
                        <div class="inp-b">
                            <input type="text" placeholder="Name" name="name" class="required">
                        </div>
                        <div class="inp-b">
                            <input type="text" placeholder="Mail" name="email" class="required">
                        </div>
                        <div class="inp-b">
                            <textarea placeholder="Message" name="message" class="required"></textarea>
                        </div>
                        <div class="inp-b">
                            <input type="submit" value="Send" class="btn">
                        </div>
                    </form>
                    <!-- END CONTACT FORM -->

                </div>

                <div class="col col-1-2">

                    <h3>Tweets</h3>

                    <!-- BEGIN TWEETS -->
                    <div class="tweet">

                        <a class="twitter-timeline"  href="https://twitter.com/lukaspradel" data-widget-id="345502025829724160" data-theme="dark" data-link-color="#72B5E5" data-chrome="noheader nofooter noborders transparent" data-tweet-limit="3">Tweets by @lukaspradel</a>

                    </div>
                    <!-- END TWEETS -->

                </div>

            </div>

        </div>

    </div>

</section>
<!-- END CONTACTS SECTION -->


<div id="contact" class="coffee-container parallax" data-speed="32" data-offsetY="-150">

    <div class="icon-container"><div><span class="glyphicons envelope"><i></i></span></div></div>

    <div class="container wrap">

        <div class="row">

            <div class="col dimfull text-center">

                <h2>@lang('index.contact-heading')</h2>

                <p class="intro">
                    @lang('index.contact-desc')
                </p>

                <form id="contact-form" method="post" action="#contact-form" class="text-left" data-form-action="contact">

                    <div class="email-confirmation hidden"><span class="glyphicons ok_2"><i></i></span> @lang('index.contact-success')</div>
                    <div class="email-error hidden"><span class="glyphicons remove_2"><i></i></span> @lang('index.contact-error')</div>

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

                <a href="/public/download/cv.pdf" class="btn">Download</a>


            </div><!-- /.col -->

        </div><!-- /.row  -->

    </div><!-- /.container -->

</div><!-- /#download -->
@stop