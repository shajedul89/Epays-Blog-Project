<nav class="navbar navbar-area navbar-expand-lg has-topbar nav-style-01 index-04">
    <div class="container nav-container custom-header-container">
        <div class="responsive-mobile-menu">
            <div class="logo-wrapper">
                <a href="index.html" class="logo">
                    <img src="{{ URL::to('') }}/img/logo/Logo-04.png" alt="logo">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
            <ul class="navbar-nav index-04">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>


                {{-- <li class="menu-item-has-children">
                    <a href="#">pages</a>
                    <ul class="sub-menu">
                        <li><a href="about-author.html">About author</a></li>
                        <li><a href="search.html">search</a></li>
                        <li><a href="error-404.html">error</a></li>
                    </ul>
                </li> --}}

            </ul>
        </div>
        <div class="nav-right-content index-04">
            <ul>
                <li class="account">
                    <a href="#" id="search_icon">
                        <span class="text">search post</span>
                        <i class="las la-search icon"></i>
                    </a>
                    <!-- search popup start -->
                    <div class="search-popup" id="search_popup">
                        <div class="search-popup-inner">
                            <form action="{{ route('blog.search') }}">
                                @csrf
                                <span class="search-popup-close-btn" id="search-popup-close-btn">×</span>
                                <div class="form-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search...">
                                </div>
                                <button class="search-btn" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- search popup end -->
                </li>
            </ul>
        </div>
    </div>
</nav>

