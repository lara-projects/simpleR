<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
    </form>
    <ul class="nav menu">
        <li {{ (Request::is('admin') ? 'class=active' : '') }}><a href="{{ url('admin') }}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>
        </li>
        <li {{ (Request::is('admin/widgets') ? 'class=active' : '') }}><a href="{{ url('admin/widgets') }}"><span class="glyphicon glyphicon-th"></span> Widgets</a></li>
        <li {{ (Request::is('admin/charts') ? 'class=active' : '') }}><a href="{{ url('admin/charts') }}"><span class="glyphicon glyphicon-stats"></span> Charts</a></li>
        <li {{ (Request::is('admin/tables') ? 'class=active' : '') }}><a href="{{ url('admin/tables') }}"><span class="glyphicon glyphicon-list-alt"></span> Tables</a></li>
        <li {{ (Request::is('admin/forms') ? 'class=active' : '') }}><a href="{{ url('admin/forms') }}"><span class="glyphicon glyphicon-pencil"></span> Forms</a></li>
        <li {{ (Request::is('admin/panels') ? 'class=active' : '') }}><a href="{{ url('admin/panels') }}"><span class="glyphicon glyphicon-info-sign"></span> Alerts &amp; Panels</a></li>
        <li class="parent ">
            <a href="#">
                <span class="glyphicon glyphicon-list"></span> Dropdown <span data-toggle="collapse" href="#sub-item-1"
                                                                              class="icon pull-right"><em
                            class="glyphicon glyphicon-s glyphicon-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="#">
                        <span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
                    </a>
                </li>
            </ul>
        </li>
        <li role="presentation" class="divider"></li>
        <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>
    </ul>
</div>
<!--/.sidebar-->