 <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="active">
                        <a href="{{route('home')}}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a>
                    </li>

    @if ((Auth::user()->user_role == 'admin'))



                    <li class="submenu">
                        <a href="#"> <i class="fas fa-list-ul"></i><span> Posts</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{ route('post.index') }}"> <i class="fas fa-caret-right"></i> All Post</a></li>
                            <li><a href="{{ route('postCategory.index') }}"> <i class="fas fa-caret-right"></i> Categories</a></li>
                             <li><a href="{{ route('postTag.index') }}"> <i class="fas fa-caret-right"></i> Tags</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fas fa-user"></i> <span> Users</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ route('user.index')}}"> <i class="fas fa-caret-right"></i> All Users</a></li>


                        </ul>
                    </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-cog"></i> <span> Settings</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ url('/settings') }}"> <i class="fas fa-caret-right"></i>Contacts</a></li>
                            <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i>Social Icons</a></li>

                        </ul>
                    </li>
     @endif

     @if ((Auth::user()->user_role == 'editor'))
     <li class="submenu">
        <a href="#"> <i class="fas fa-list-ul"></i><span> Posts</span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
            <li><a href="{{ route('post.index') }}"> <i class="fas fa-caret-right"></i> All Post</a></li>
            <li><a href="{{ route('postCategory.index') }}"> <i class="fas fa-caret-right"></i> Categories</a></li>
             <li><a href="{{ route('postTag.index') }}"> <i class="fas fa-caret-right"></i> Tags</a></li>

        </ul>
    </li>

     @endif


     @if ((Auth::user()->user_role == 'commentor'))

     <li class="submenu">
        <a href="#"><i class="fas fa-cog"></i> <span> Settings</span> <span class="menu-arrow"></span></a>
        <ul style="display: none;">
           <li><a href="{{ url('/settings') }}"> <i class="fas fa-caret-right"></i>Contacts</a></li>
            <li><a href="invoice-report.html"> <i class="fas fa-caret-right"></i>Social Icons</a></li>

        </ul>
    </li>

     @endif



                   {{--  <li class="menu-title">
                        <span>Pages</span>
                    </li>
                    <li>
                        <a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="login.html"> Login </a></li>
                            <li><a href="register.html"> Register </a></li>
                            <li><a href="forgot-password.html"> Forgot Password </a></li>
                            <li><a href="lock-screen.html"> Lock Screen </a></li>
                        </ul>
                    </li> --}}



                </ul>
            </div>
        </div>
    </div>
