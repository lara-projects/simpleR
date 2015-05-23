<nav class="navbar navbar-inverse navbar-fixed-top navbar-admin" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url("/admin") }}"><span>{{ env("SITE_NAME", "SimpleR") }}</span> | Admin Paneli</a>

            <div class="">
                @section("hnav")
                    <a href="" class="btn btn-sm btn-danger">Silinecek</a>
                    <a href="" class="btn btn-sm btn-default">Ana Header'dan</a>
                    <a href="" class="btn btn-sm btn-default">Charts'a git</a>
                @show
            </div>

            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
    <!-- /.container-fluid -->
</nav>