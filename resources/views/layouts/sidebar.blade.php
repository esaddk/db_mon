<div class="default-sidebar">
    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll">
        <!-- Begin Main Navigation -->
        <ul class="list-unstyled">
            {{-- <li class="active"><a href="#dropdown-db" aria-expanded="true" data-toggle="collapse"><i class="la la-columns"></i><span>Dashboard</span></a>
                <ul id="dropdown-db" class="collapse list-unstyled show pt-0">
                    <li><a class="active" href="db-default.html">Default</a></li>
                    <li><a href="db-clean.html">Clean</a></li>
                    <li><a href="db-compact.html">Compact</a></li>
                    <li><a href="db-modern.html">Modern</a></li>
                    <li><a href="db-social.html">Social</a></li>
                    <li><a href="db-smarthome.html">Smarthome</a></li>
                    <li><a href="db-all.html">All</a></li>
                </ul>
            </li> --}}
            {{-- <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Applications</span></a>
                <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                    <li><a href="app-calendar.html">Calendar</a></li>
                    <li><a href="app-chat.html">Chat</a></li>
                    <li><a href="app-mail.html">Mail</a></li>
                    <li><a href="app-contact.html">Contact</a></li>
                </ul>
            </li> --}}
            <li class="active"><a href="{{ route('home') }}"><i class="la la-columns"></i><span>Dashboard</span></a>
            </li>
            <li><a href="components-widgets.html"><i class="la la-database"></i><span>Database</span></a></li>
            <li><a href="{{ route('rdbms') }}"><i class="la la-server"></i><span>RDBMS</span></a></li>
            <li><a href="{{ route('application') }}"><i class="la la-desktop"></i><span>Application</span></a></li>
            <li><a href="{{ route('availbility') }}"><i class="la la-check-circle"></i><span>DB Availbility</span></a>
            </li>
            <li><a href="{{ route('users.index') }}"><i class="la la-user"></i><span>User</span></a></li>
        </ul>
        <span class="heading">Monitoring</span>
        <ul class="list-unstyled">
            <li><a href="components-widgets.html"><i class="la la-laptop"></i><span>Table</span></a></li>
            <li><a href="components-widgets.html"><i class="la la-laptop"></i><span>Index</span></a></li>
            <li><a href="components-widgets.html"><i class="la la-laptop"></i><span>Tablespace</span></a></li>
        </ul>
    </nav>
    <!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->