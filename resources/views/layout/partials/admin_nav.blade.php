<div id="sidebar-nav" class="sidebar">
    <img src="{{asset('img/logos/logo-simbolo2.png')}}" alt="Centro Social de
        Carnide logo" class="w-25"> <span class="site-description">Centro Social
        de
        Carnide</span>
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li>
                    <a href="{{asset('#')}}">
                        <span>CSC</span>
                    </a>
                </li>

                <li><a href="#"><span> Utilizadores</span></a>
                    <ul class="nav">
                        <li>
                            <a href="#"><span>Adicionar Utilizador</span> </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"> <span>Cotas </span></a>
                </li>

                <li>
                    <a href="{{route('eventos.index')}}"><span> Eventos</span>
                    </a>

                    <ul class="nav">
                        <li>
                            <a href="{{route('eventos.create')}}"><span>Adicionar
                                    Evento</span></a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</div>
