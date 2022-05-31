<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{route('home')}}">
            <img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="{{route('users')}}">
                        <i class="fas fa-hand-paper"></i>Funcionários</a>
                </li>
                <li>
                    <a href="{{route('customers')}}">
                        <i class="far fa-check-square"></i>Clientes</a>
                </li>
                <li>
                    <a href="{{route('services')}}">
                        <i class="fas fa-handshake"></i>Serviços</a>
                </li>
                <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Categorias</a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Produtos</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Clientes</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Agenda</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
