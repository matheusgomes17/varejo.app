<div id="top">
</div>
<header class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">
            <a title="@yield('title')" class="navbar-brand home" href="/" data-animate-hover="bounce">
                <h1>
                    <img src="{{ asset('assets/img/logo.png') }}" alt="@yield('title')" class="hidden-xs"></span>
                    <img src="{{ asset('assets/img/logo.png') }}" alt="@yield('title')" class="visible-xs"><span class="sr-only">@yield('title')</span>
                </h1>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Alternar de navegação</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Ativar pesquisa</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <div class="navbar-collapse collapse" id="navigation">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="/">Home</a></li>
                <li class="dropdown yamm-fw"><a href="/sobre">Sobre</a></li>
                <li><a href="/fale-conosco">Fale Conosco</a></li>
            </ul>
        </div>
        <div class="navbar-buttons">
            <form class="navbar-form" role="search" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
                <meta itemprop="url" content="" />
                <meta itemprop="target" content="" />
                <div class="input-group">
                    <input type="text" class="form-control" itemprop="query-input" placeholder="Faça a sua pesquisa...">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</header>