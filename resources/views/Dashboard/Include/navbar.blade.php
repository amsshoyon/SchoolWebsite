<header class="navbar navbar-inverse navbar-fixed-top">
    <div class="top-nav">
          
        <ul  class="nav navbar-nav pull-right">
               
            <li class="top-nav-list"><a href="/" target="_blank">Visit Page</a></li>

        </ul>
    </div>

</header>

   <div class="page-wrapper chiller-theme toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div id="toggle-sidebar">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="sidebar-header" style="margin-top: 50px;">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="/images/profile.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">
                            <strong>UserName</strong>
                        </span>
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="/Admin">
                                <i class="fa fa-calendar"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-database"></i>
                                <span>Page Components</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="/Dashboard/Slider">Slider Images</a></li>
                                    <li><a href="/Dashboard/Location">My Location</a></li>
                                    <li><a href="/Dashboard/Skills">Skills</a></li>
                                    <li><a href="/Dashboard/Experiences">Experiences</a></li>
                                    <li><a href="/Dashboard/Education">Education</a></li>
                                    <li><a href="/Dashboard/Portfolio">Protfolio</a></li>
                                    <li><a href="/Dashboard/Catagory">Catagory</a></li>
                                    <li><a href="/Dashboard/Social">Social Links</a></li>
                                    <li><a href="/Dashboard/CV_upload">Upload CV</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                <span>Settings</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="/Dashboard/EditProfile">Edit Profile</a></li>
                                    <li><a href="/Dashboard/EditEmail">Change Email</a></li>
                                    <li><a href="/Dashboard/EditPassword">Change Password</a></li>
                                </ul>
                            </div>
                        </li>
                       
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-database"></i>
                                <span>Messages</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="/Dashboard/Write">Write Message</a></li>
                                    <li><a href="/Dashboard/Inbox">Inbox</a></li>
                                    <li><a href="/Dashboard/SentMessages">Sent Messages</a></li>
                                    <li><a href="/Dashboard/Draft">Drafts</a></li>
                                    <li><a href="/Dashboard/Trash">Trash</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span>Examples</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <a href="#">             <!-- Notifications  -->
                    <i class="fa fa-bell"></i> 
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <a href="#">              <!-- Messages  -->
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </nav>


<script type="text/javascript">
jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if ($(this).parent().hasClass("active")) {
            $(".sidebar-dropdown").removeClass("active");
            $(this).parent().removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this).next(".sidebar-submenu").slideDown(200);
            $(this).parent().addClass("active");
        }

    });

    $("#toggle-sidebar").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });
   
   
});
</script>