
<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

<footer id="footer">
    
    <section class="section padding-bottom-off">

        <div class="container">

            <div class="row">

                <div class="col-xs-12">
                    <hgroup class="slogan align-center opacity">
                        <h1><span>Proudly</span> Forked In <span>Africa</span></h1>
                    </hgroup>       
                </div>

            </div><!--/ .row-->

        </div><!--/ .container-->

    </section><!--/ .section-->


    <section class="section parallax parallax-bg-4">

        <div class="full-bg-image"></div>

        <div class="container" id="contact">

            <div class="row">

               
                <div class="col-md-6">

                    <div class="widget widget_text opacity">
                        <div id="africa" style="width: 100%; height: 500px"></div>
                    </div><!--/ .widget-->

                    <div class="widget widget_contacts opacity">

                        <ul class="contact-details">
                            <li>3rd floor, Bishop Magua Centre</li>
                            <li>Ngong Road,</li>
                            <li>Nairobi City.</li>
                            <li>Kenya.</li>
                        </ul><!--/ .contact-details-->

                    </div><!--/ .widget-->

                </div>

                <div class="col-md-6 opacity">
                    <h2>CONTACT US / REQUEST A QUOTE</h2>
                    <form action="{{ route('enquiry.store') }}"  method="post" class="contact-form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <!-- <input type="hidden" name="ip_address" value="{{ Request::ip() }}" /> -->
                        <p class="input-block">
                            <input type="text" name="name" id="name" placeholder="Name *" required="required" value="{{ Request::old('name') }}" />
                        </p>

                        <p class="input-block">
                            <input type="email" name="email" id="email" placeholder="Email *" required="required" value="{{ Request::old('email') }}" />
                        </p>

                        <p class="input-block">
                            <input type="number" name="phone" id="phone" placeholder="Phone *" required="required" value="{{ Request::old('phone') }}" />
                        </p>

                        <p class="input-block">
                            <textarea name="body" id="body" placeholder="Message *" required="required" rows="15">{{ Request::old('body') }}</textarea>   
                        </p>

                        <p class="input-block">
                            <button class="button turquoise submit" type="submit" id="submit"><i class="icon-paper-plane-2"></i></button>
                        </p>

                    </form><!--/ .contact-form-->   

                </div>


            </div><!--/ .row-->

        </div><!--/ .container-->

    </section><!--/ .section--> 

    <div class="logo-in-footer">

        <div class="container">

            <div class="row">
                <div class="col-xs-12">
                    <h1><a href="{{ route('frontend.home') }}">Horizon Softwares</a></h1>
                </div>
            </div><!--/ .row-->

        </div><!--/ .container-->

    </div><!--/ .logo-in-footer-->

    <div class="bottom-footer clearfix">

        <div class="copyright">
            <div class="xhide">
                <a href="{{ route('blog.create') }}">Write</a> &#8226; 
                <a href="{{ route('frontend.home') }}#contact">Contact Us</a> &#8226; 

                @if(Auth::check())
                    @if(Request::url() == route('frontend.user.profile.update', Auth::getUser()->username))
                        <a href="{{ route('logout') }}">Log Out</a> &#8226; 
                    @else
                        <a href="{{ route('frontend.user.profile.update', Auth::getUser()->username) }}">My Profile</a> &#8226; 
                    @endif

                    @if(Auth::user()->name !== '')
                        <a href="{{ route('admin.dashboard') }}">Admin</a> &#8226; 
                    @endif
                @else
                    <a href="#signin" data-toggle="modal">Log In</a> &#8226; 
                @endif
            </div>
            <a href="{{ route('frontend.home') }}">Horizon Softwares</a> © 2014-2016. All rights reserved.
        </div><!--/ .cppyright-->
        
        <ul class="social-icons">
            <li class="twitter"><a target="_blank" href="https://twitter.com/h_softwares"><i class="icon-twitter"></i>Twitter</a></li>
            <li class="facebook"><a target="_blank" href="https://www.facebook.com/horizonsoftwareske"><i class="icon-facebook"></i>Facebook</a></li>
            <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/company/horizon-softwares"><i class="icon-linkedin"></i>LinkedIn</a></li>
            <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCUQG1j0UaGfkaTdiwKYdYQA"><i class="icon-youtube"></i>Youtube</a></li>
        </ul><!--/ .social-icons-->

    </div><!--/ .bottom-footer-->   

</footer><!--/ #footer-->


<!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->
