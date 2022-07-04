@section('nav')
<nav>
    <div class="main-wrapper">
        <div class="flex-container">
            <a class="logotipo" href="{{route('site.home')}}">
                <img src="{{asset('images/Asset 1.svg')}}">
            </a>
            <ul class="navigation__itens" id="menu">
                <li>
                    <a href="{{route('site.home')}}">Página principal
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('site.products')}}">Produtos
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('site.blog')}}">Blog
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('site.about')}}">Sobre
                        <span class="border-effect"></span>
                    </a>
                </li>
                <li>
                    <a href="{{route('site.contact')}}">Contato
                        <span class="border-effect"></span>
                    </a>
                </li>
            </ul>
            <!-- Hamburger menu -->
            <div id="toggle">
                <div class="span" id="one"></div>
                <div class="span" id="two"></div>
                <div class="span" id="three"></div>
            </div>
        </div>
    </div>
</nav>

<!-- Hamburger menu list -->
<div id="resize">
    <ul id="menu">
        <li><a class="title-medium" href="{{route('site.home')}}">Página principal</a></li>
        <li><a class="title-medium" href="{{route('site.products')}}">Produtos</a></li>
        <li><a class="title-medium" href="{{route('site.blog')}}">Blog</a></li>
        <li><a class="title-medium" href="{{route('site.about')}}">Sobre</a></li>
        <li><a class="title-medium" href="{{route('site.contact')}}">Contato</a></li>
    </ul>
</div>

@endsection
