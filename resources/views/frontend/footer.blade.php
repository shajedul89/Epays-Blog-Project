@php
    $st=json_decode($settings->social);
@endphp

<footer class="footer-area index-04">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="footer-widget">
                        <div class="content">
                            <h4 class="title">Email</h4>
                            <p class="email">{{$settings->email}} </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="footer-widget">
                        <div class="logo-wrapper bodr">
                            <a href="index.html" class="logo">
                                <img src="{{ URL::to('') }}/img/logo/Logo-04.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="footer-widget">
                        <div class="content">
                            <h4 class="title">Follow me</h4>
                            <ul class="social-link-list">
                                <li class="list-item">
                                    <a href="{{$st->facebook }}" target="_blank">
                                        <i class="lab la-facebook-f icon-s"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <i class="lab la-instagram icon-s"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <i class="lab la-linkedin-in icon-s"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="#">
                                        <i class="lab la-pinterest-p icon-s"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-inner">
                            <p class="copyright">All copyright © 2021 Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
