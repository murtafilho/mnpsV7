<aside class="main-sidebar" id="sidebar-wrapper" style="background-color: #1D232F">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg" class="img-circle"
                     alt="User Image"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>AFISBH MNPS GEN 1.0</p>
                @else
                    <p>{{ Auth::user()->name}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->

        <!-- Sidebar Menu -->

        <ul class="sidebar-menu">
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->


    </section>

    <
    <!-- /.sidebar -->
    <img src="http://afisbh.com.br/images/logo-afisbh.jpg" width="100%" style="position: absolute;bottom: 20px;width: 100%;padding: 10px">
</aside>