<!-- SIDEBAR -->
<aside class="site-sidebar scrollbar-enabled clearfix">
    <!-- Sidebar Menu -->
    <nav class="sidebar-nav">
        <ul class="nav in side-menu">
            <li>
                <a href="{{URL::to('/dashboard')}}" class="ripple">
                    <i class="list-icon material-icons">network_check</i> <span class="hide-menu">Dashboard</span>
                </a>
            </li>
            @if(Session::get('access_level') == 0)
            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">person</i> <span class="hide-menu">Admin</span></a>
                <ul class="list-unstyled sub-menu">
                    {{--<li><a href="{{route('admins.create')}}">Add Admin</a></li>--}}
                    <li><a href="{{route('add-admin')}}">Add Admin</a></li>
                    <li><a href="{{route('manage-admin')}}">Manage Admin</a></li>
                </ul>
            </li>
            @endif

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">camera</i> <span class="hide-menu">Slider</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{route('add-slider')}}">Add Slider</a></li>
                    <li><a href="{{route('manage-slider')}}">Manage Slider</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">pages</i> <span class="hide-menu">Pages</span></a>
                <ul class="list-unstyled sub-menu">
                    @if(Session::get('access_level') == 0)
                    <li><a href="{{route('add-pages')}}">Add Pages</a></li>
                    @endif
                    <li><a href="{{route('manage-pages')}}">Manage Pages</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('site-info')}}" class="ripple">
                    <i class="list-icon material-icons">extension</i> <span class="hide-menu">Site Information</span>
                </a>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">assessment</i> <span class="hide-menu">Projects</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{route('projects.create')}}">Add Projects</a></li>
                    <li><a href="{{route('projects.index')}}">Manage Projects</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">event</i> <span class="hide-menu">Events</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{route('events.create')}}">Add Events</a></li>
                    <li><a href="{{route('events.index')}}">Manage Events</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">chrome_reader_mode</i> <span class="hide-menu">News</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{route('news.create')}}">Add News</a></li>
                    <li><a href="{{route('news.index')}}">Manage News</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">assignment</i> <span class="hide-menu">Notice</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{route('notice.create')}}">Add Notice</a></li>
                    <li><a href="{{route('notice.index')}}">Manage Notice</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">camera_roll</i> <span class="hide-menu">Photo Gallery</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{route('photo-gallery.create')}}">Add Photo Gallery</a></li>
                    <li><a href="{{route('photo-gallery.index')}}">Manage Photo Gallery</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">face</i> <span class="hide-menu">Members</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{route('member.create')}}">Add Member</a></li>
                    <li><a href="{{route('member.index')}}">Manage Member</a></li>
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" class="ripple"><i class="list-icon material-icons">loyalty</i> <span class="hide-menu">Our Concerns</span></a>
                <ul class="list-unstyled sub-menu">
                    <li><a href="{{route('our-concerns.create')}}">Add Concern</a></li>
                    <li><a href="{{route('our-concerns.index')}}">Manage Concern</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('volunteer.index')}}" class="ripple">
                    <i class="list-icon material-icons">people</i> <span class="hide-menu">Volunteers</span>
                </a>
            </li>

            <li>
                <a href="{{route('donation.index')}}" class="ripple">
                    <i class="list-icon material-icons">attach_money</i> <span class="hide-menu">Donations</span>
                </a>
            </li>

        </ul>
        <!-- /.side-menu -->
    </nav>
    <!-- /.sidebar-nav -->
</aside>
