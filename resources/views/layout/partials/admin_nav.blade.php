<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{asset('#')}}" Z><i class="lnr lnr-home"></i>
                        <span>CSC</span></a></li>


                <li><a href="{{asset('#')}}" class=""><i class="lnr
                            lnr-code"></i> <span>Utilizadores</span></a>
                    <ul class="nav">
                        <li>
                            <a href="{{route('eventos.create')}}">Adicionar Utilizador </a>
                        </li>
                    </ul>



                </li>



                <li><a href="{{asset('#l')}}" class=""><i class="lnr
                            lnr-chart-bars"></i> <span>Charts</span></a></li>
                <li><a href="{{asset('panels.html')}}" class=""><i class="lnr
                            lnr-cog"></i>
                        <span>Panels</span></a></li>
                <li><a href="{{asset('notifications.html')}}" class=""><i
                            class="lnr
                            lnr-alarm"></i> <span>Notifications</span></a></li>
                <li>
                    <a href="#" data-toggle="collapse" class="collapsed">
                        <i class="lnr lnr-file-empty"></i>
                        <span>Eventos</span>
                        <i class="icon-submenu lnr lnr-chevron-left"></i>
                        <i class="fal fa-angle-down"></i>
                    </a>
                    <ul class="nav">
                        <li>
                            <a href="{{route('eventos.create')}}">Adicionar
                                Evento</a>
                        </li>
                        <li>
                            <a href="{{route('eventos.index')}}"> Lista de
                                eventos </a></li>
                    </ul>
                </li>



                <li><a href="{{asset('tables.html')}}" class=""><i class="lnr
                            lnr-dice"></i>
                        <span>Tables</span></a></li>
                <li><a href="{{asset('typography.html')}}" class=""><i
                            class="lnr
                            lnr-text-format"></i> <span>Typography</span></a></li>
                <li><a href="{{asset('icons.html')}}" class=""><i class="lnr
                            lnr-linearicons"></i> <span>Icons</span></a></li>
            </ul>
        </nav>
    </div>
</div>
