<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{asset('index.html')}}" Z><i class="lnr lnr-home"></i>
                        <span>Dashboard</span></a></li>

                <li><a href="{{route('eventos.index')}}"><i class="lnr lnr-home"></i>
                        <span>Lista de eventos</span></a></li>
                <li><a href="{{route('eventos.create')}}"><i class="lnr lnr-home"></i>
                        <span>Adicionar eventos</span></a></li>



                <li><a href="{{asset('elements.html')}}" class=""><i class="lnr
                            lnr-code"></i> <span>Elements</span></a></li>
                <li><a href="{{asset('charts.html')}}" class=""><i class="lnr
                            lnr-chart-bars"></i> <span>Charts</span></a></li>
                <li><a href="{{asset('panels.html')}}" class=""><i class="lnr lnr-cog"></i>
                        <span>Panels</span></a></li>
                <li><a href="{{asset('notifications.html')}}" class=""><i class="lnr
                            lnr-alarm"></i> <span>Notifications</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i
                            class="lnr lnr-file-empty"></i> <span>Pages</span> <i
                            class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse">
                        <ul class="nav">
                            <li><a href="{{asset('page-profile.html')}}" class="">Profile</a></li>
                            <li><a href="{{asset('page-login.html')}}" class="">Login</a></li>
                            <li><a href="{{asset('page-lockscreen.html')}}" class="">Lockscreen</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{asset('tables.html')}}" class=""><i class="lnr lnr-dice"></i>
                        <span>Tables</span></a></li>
                <li><a href="{{asset('typography.html')}}" class=""><i class="lnr
                            lnr-text-format"></i> <span>Typography</span></a></li>
                <li><a href="{{asset('icons.html')}}" class=""><i class="lnr
                            lnr-linearicons"></i> <span>Icons</span></a></li>
            </ul>
        </nav>
    </div>
</div>