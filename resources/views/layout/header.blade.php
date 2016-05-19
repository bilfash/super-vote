<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>PayIt!</span></a>
        </div>
        <div class="clearfix"></div>

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="{{URL::to('welcome')}}"><i class="fa fa-plus-circle"></i> New Invoice </a></li>
                    <li><a href="{{URL::to('history')}}"><i class="fa fa-history"></i> Riwayat Invoice </a></li>
                </ul>
            </div>

            <div class="menu_section">
                <h3>Akses Tabel</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-list"></i> Type <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li><a href="{{URL::to('type/create')}}">Insert</a>
                        </li>
                        <li><a href="{{URL::to('type')}}">Manage</a>
                        </li>
                    </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

    </div>
</div>

<!-- top navigation -->
<div class="top_nav">

    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="{{URL::to('logout')}}" aria-expanded="false">
                        {{Auth::user()->name}}&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                    </a>
                </li>

            </ul>
            </li>

            </ul>
        </nav>
    </div>

</div>
<!-- /top navigation -->