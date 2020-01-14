<div class="default-sidebar">
        <!-- Begin Side Navbar -->
        <nav class="side-navbar box-scroll sidebar-scroll">
                <!-- Begin Main Navigation -->
                <ul class="list-unstyled">
                        <li class="{{ request()->is('home*') ? 'active' : '' }}"><a href="{{ route('home') }}"><i
                                                class="la la-columns"></i><span>Dashboard</span></a>
                        </li>
                        <li class="{{ request()->is('database*') ? 'active' : '' }}"><a
                                        href="{{ route('database') }}"><i
                                                class="la la-database"></i><span>Database</span></a></li>
                        <li class="{{ request()->is('rdbms*') ? 'active' : '' }}"><a href=" {{ route('rdbms') }}"><i
                                                class="la la-server"></i><span>RDBMS</span></a></li>
                        <li class="{{ request()->is('application*') ? 'active' : '' }}"><a
                                        href=" {{ route('application') }}"><i
                                                class="la la-desktop"></i><span>Application</span></a></li>
                        <li class="{{ request()->is('availbility*') ? 'active' : '' }}"><a
                                        href=" {{ route('availbility') }}"><i class="la la-check-circle"></i><span>DB
                                                Availbility</span></a>
                        <li class="{{ request()->is('task*') ? 'active' : '' }}"><a href=" {{ route('task') }}"><i
                                                class="la la-desktop"></i><span>DBA Weekly Task</span></a></li>
                        </li>
                        @role('admin')
                        <li class="{{ request()->is('users*') ? 'active' : '' }}"><a
                                        href="{{ route('users.index') }}"><i
                                                class="la la-user"></i><span>User</span></a></li>
                        @endrole
                        <li class="{{ request()->is('report*') ? 'active' : '' }}"><a href="#dropdown-app"
                                        aria-expanded="{{ request()->is('report*') ? 'true' : '' }}"
                                        data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Report</span></a>

                                <ul id="dropdown-app"
                                        class="collapse list-unstyled pt-0 {{ request()->is('report*') ? 'show' : '' }}">
                                        <li><a class="{{ request()->is('report_crucial*') ? 'active' : '' }}"
                                                        href="{{ route('report_crucial') }}">Mapping Crucial
                                                        Database</a></li>
                                        {{-- Database group by env application  --}}
                                        <li><a class="{{ request()->is('report_task*') ? 'active' : '' }}"
                                                        href="{{ route('report_task') }}">DBA Monthly Report</a></li>
                                        {{-- kegiatan summary bulanan DBA Unutk report ke manajemen --}}
                                        <li><a class="{{ request()->is('report_availbility*') ? 'active' : '' }}"
                                                        href="{{ route('report_availbility') }}">DB Availbility</a></li>
                                        {{-- % tase dari dari database group by server --}}
                                        <li><a class="{{ request()->is('report_db_size*') ? 'active' : '' }}"
                                                        href="{{ route('report_db_size') }}">Database Size</a>
                                        </li>
                                        {{-- order database size group by rdbms type --}}
                                        <li><a class="{{ request()->is('report_mysql_object*') ? 'active' : '' }}"
                                                        href="{{ route('report_mysql_object') }}">MySQL Object</a></li>
                                        {{-- ordering mysql object size --}}
                                        <li><a class="{{ request()->is('report_oracle_object*') ? 'active' : '' }}"
                                                        href="{{ route('report_oracle_object') }}">Oracle Object</a>
                                        </li>
                                        {{-- ordering oracle object size --}}
                                        <li><a class="{{ request()->is('report_postgre_object*') ? 'active' : '' }}"
                                                        href="{{ route('report_postgre_object') }}">PostgreSQL
                                                        Object</a></li>
                                        {{-- ordering PostgreSQL object size --}}
                                </ul>
                        </li>
                </ul>
        </nav>
        <!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->