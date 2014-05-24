@extends('layouts.master')

@section('title')
Lukas Pradel
@stop

@section('language-links')
@if (App::getLocale() == "en")
<div id="polyglotLanguageSwitcher">
    <form action="#">
        <select id="polyglot-language-options">
            <option id="en" value="en" selected>English</option>
            <option id="de" value="de">German</option>
        </select>
    </form>
</div>
@else
<div id="polyglotLanguageSwitcher">
    <form action="#">
        <select id="polyglot-language-options">
            <option id="en" value="en">Englisch</option>
            <option id="de" value="de" selected>Deutsch</option>
        </select>
    </form>
</div>
@endif
@stop

@section('menu')
<ul>
    <li class="current"><a href="#about">@lang('index.menu-aboutme')</a></li>
    <li><a href="#resume">@lang('index.menu-cv')</a></li>
    <li><a href="#skills">@lang('index.menu-skills')</a></li>
    <li><a href="#contacts">@lang('index.menu-contact')</a></li>
</ul>
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
                    <a href="/public/download/cv.lukas.pradel.en.pdf" class="btn-2">@lang('index.aboutme-cv-en')</a>
                    <a href="/public/download/cv.lukas.pradel.de.pdf" class="btn-2">@lang('index.aboutme-cv-de')</a>
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
                        @lang('index.aboutme-main-9')
                        <a href="http://dotabuff.com/players/91417049">Dota 2</a>.
                        <br/>
                        <br/>
                        @lang('index.aboutme-main-7')
                        <a href="https://github.com/lpradel/">github</a>.
                        @lang('index.aboutme-main-8')
                        <a href="http://osrc.dfm.io/lpradel/">Open Source Report Card</a>.
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

            <h2>@lang('index.menu-cv')</h2>

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

    <div class="container" id="skills">

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

    <div class="cont-b-3">

        <div class="container">

            <div class="cols">

                <div class="col col-1-2">

                    <h3 style="color: #72B5E5;">@lang('index.contact-desc')</h3>

                    <!-- BEGIN CONTACT FORM -->
                    <form class="feedback-form" method="post" action="contact">
                        <div class="inp-b">
                            <input type="text" placeholder="@lang('index.contact-name')" name="form-name" class="required">
                        </div>
                        <div class="inp-b">
                            <input type="text" placeholder="@lang('index.contact-email')" name="form-email" class="required">
                        </div>
                        <div class="inp-b">
                            <input type="text" placeholder="@lang('index.contact-subject')" name="form-subject">
                        </div>
                        <div class="inp-b">
                            <textarea placeholder="@lang('index.contact-msg')" name="form-message" class="required"></textarea>
                        </div>
                        <div class="inp-b">
                            <input type="submit" value="@lang('index.contact-submit')" class="btn">
                        </div>
                    </form>
                    <!-- END CONTACT FORM -->

                </div>

                <div class="col col-1-2">

                    <h3 style="color: #72B5E5; text-align: center;">@lang('index.personal-heading')</h3>

                    <!-- BEGIN PERSONAL INFO -->
                    <div class="personal">
                        <dl class="row">
                            <dt class="column dim1half text-right padright">@lang('index.personal-dob')</dt>
                            <dd class="column dim1half text-left padleft">@lang('index.personal-dob-val')</dd>

                            <dt class="column dim1half text-right padright">@lang('index.personal-adr')</dt>
                            <dd class="column dim1half text-left padleft">
                                @lang('index.personal-adr-val-1')<br/>
                                @lang('index.personal-adr-val-2')<br/>
                                @lang('index.personal-adr-val-3')
                            </dd>

                            <dt class="column dim1half text-right padright">@lang('index.personal-email')</dt>
                            <dd class="column dim1half text-left padleft"><a href="http://www.google.com/recaptcha/mailhide/d?k=01h-OD9C75BfXnkoGnpom4HA==&amp;c=4IVZVNPuQv6ivAMBnpCo3qyiEOpYw8_bDeL5MexiuT0=" onclick="window.open('http://www.google.com/recaptcha/mailhide/d?k\07501h-OD9C75BfXnkoGnpom4HA\75\75\46c\0754IVZVNPuQv6ivAMBnpCo3qyiEOpYw8_bDeL5MexiuT0\075', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=500,height=300'); return false;" title="Reveal this e-mail address">l...</a>@googlemail.com</dd>

                            <dt class="column dim1half text-right padright">@lang('index.personal-phone')</dt>
                            <dd class="column dim1half text-left padleft">@lang('index.personal-phone-val')</dd>

                            <dt class="column dim1half text-right padright">@lang('index.personal-web')</dt>
                            <dd class="column dim1half text-left padleft"><a href="http://lukaspradel.com">@lang('index.personal-web-val')</a></dd>
                        </dl>
                    </div>
                    <!-- END PERSONAL INFO -->

                </div>

            </div>

        </div>

    </div>

</section>
<!-- END CONTACTS SECTION -->
@stop