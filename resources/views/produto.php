<?php
    require_once 'header.php';
?>
    <main id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Cervejas Nacionais</a></li>
                        <li>Cerveja Skol lata 350ml</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** MENUS ***
 _________________________________________________________ -->
                    <aside class="panel panel-default sidebar-menu" id="prosim">

                        <header class="panel-heading">
                            <h1 class="panel-title">Produtos Similares</h1>
                        </header>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li class="active">
                                    <a href="#">Alimentos e Bebidas <span class="badge pull-right">123</span></a>
                                    <ul>
                                        <li><a href="#">Águas</a></li>
                                        <li><a href="#">Carnes</a></li>
                                        <li><a href="#">Cervejas Importadas</a></li>
                                        <li><a href="#">Cervejas Nacionais</a></li>
                                        <li><a href="#">Isotônicos</a></li>
                                        <li><a href="#">Ítens de cesta básica</a></li>
                                        <li><a href="#">Outros destilados</a></li>
                                        <li><a href="#">Refrigerante</a></li>
                                        <li><a href="#">Sucos</a></li>
                                        <li><a href="#">Vinhos</a></li>
                                        <li><a href="#">Whiskies</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </aside>

                    <!-- *** MENUS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="http://placehold.it/620x410&text=Publicidade" alt="" class="img-responsive">
                        </a>
                    </div>

                    <div class="banner">
                        <a href="#">
                            <img src="http://placehold.it/620x410&text=Publicidade" alt="" class="img-responsive">
                        </a>
                    </div>

                    <div class="banner">
                        <a href="#">
                            <img src="http://placehold.it/620x410&text=Publicidade" alt="" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <section itemscope itemtype="https://schema.org/Product">
                        <header>
                            <h1 class="no">Cerveja Skol lata 350ml - <span itemprop="category">Cervejas Nacionais</span></h1>
                        </header>
                        <article class="row" id="productMain">
                            <div class="col-sm-6">
                                <div id="mainImage">
                                    <img itemprop="image" src="http://placehold.it/450x678" alt="" title="" class="img-responsive">
                                </div>
                                <div class="ribbon sale">
                                    <div class="theribbon">VENDA</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                                <div class="ribbon new">
                                    <div class="theribbon">NOVO</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <div class="col-sm-6">
                                <div class="box">
                                    <header>
                                        <h1 itemprop="name" class="text-center">Cerveja Skol lata 350ml</h1>
                                        <p class="goToDescription"><a href="#details" class="scroll-to">Vá até os detalhes do produto</a></p>
                                    </header>
                                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                        <meta itemprop="price" content="1.50"/>
                                        <meta itemprop="priceCurrency" content="BRL"/>
                                        <p class="price">R$1.50</p>
                                    </div>
                                    <div itemprop="description">
                                        <div class="alert alert-success" role="alert">
                                        <p>Oferta válida de <strong>01/09/2015</strong> a <strong>31/12/2015</strong> * </p>
                                        </div>
                                        <small>(*) ou enquanto durarem os estoques.</small>
                                    </div>
                                </div>

                                <footer class="row" id="thumbs">
                                <?php
                                    for ($i=1; $i <= 3 ; $i++) { 
                                ?>
                                    <div class="col-xs-4">
                                        <a href="http://placehold.it/450x678" class="thumb">
                                            <img itemprop="image" src="http://placehold.it/450x678" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                <?php
                                    }
                                ?>
                                </footer>
                            </div>

                        </article>

                        <article class="box" id="details">
                            <header>
                                <h1>Detalhes do produto</h1>
                                <p>Endereço:</p>
                            </header>
                            <address>
                                <ul>
                                    <li><strong>Nome da Empresa</strong></li>
                                    <li>Rua José Rao, 98</li>
                                    <li>Jardim Eldorado</li>
                                    <li>Sertãozinho / SP</li>
                                    <li>CEP: 14169-185</li>
                                    <li>(16) 39479466</li>
                                    <li>(16) 991781234</li>
                                </ul>
                            </address>
                            <hr>
                            <footer class="social">
                                <p class="h4">Compartilhe com seus amigos!</p>
                                <p>
                                    <a itemprop="url" href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a itemprop="url" href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a itemprop="url" href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                </p>
                            </footer>
                        </article>
                    </section>

                    <nav class="row same-height-row">
                        <header class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h1 class="h3">Você pode também gostar desses produtos</h1>
                            </div>
                        </header>
                    <?php
                        for ($i=1; $i <= 3 ; $i++) { 
                    ?>
                        <article class="col-md-3 col-sm-6" itemscope itemtype="https://schema.org/Product">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a itemprop="url" href="#">
                                                <img itemprop="image" src="http://placehold.it/450x600" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="http://placehold.it/450x600" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="http://placehold.it/450x600" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <header>
                                        <h1 itemprop="name">Cervejas Nacionais</h1>
                                    </header>
                                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                        <meta itemprop="price" content="1.50"/>
                                        <meta itemprop="priceCurrency" content="BRL"/>
                                    </div>
                                    <p itemprop="description" class="price">R$1.50</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </article>
                    <?php
                        }
                    ?>
                    </nav>

                    <nav class="row same-height-row">
                        <header class="col-md-3 col-sm-6">
                            <div class="box same-height">
                                <h1 class="h3">Produtos vistos recentemente</h3>
                            </div>
                        </header>
                    <?php
                        for ($i=1; $i <= 3 ; $i++) { 
                    ?>
                        <article class="col-md-3 col-sm-6" itemscope itemtype="https://schema.org/Product">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a itemprop="url" href="#">
                                                <img itemprop="image" src="http://placehold.it/450x600" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="http://placehold.it/450x600" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="http://placehold.it/450x600" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <header>
                                        <h1 itemprop="name">Cervejas Nacionais</h1>
                                    </header>
                                    <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                                        <meta itemprop="price" content="1.50"/>
                                        <meta itemprop="priceCurrency" content="BRL"/>
                                    </div>
                                    <p itemprop="description" class="price">R$1.50</p>
                                </div>
                            </div>
                            <!-- /.product -->
                        </article>
                    <?php
                        }
                    ?>
                    </nav>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
    </main>
<?php
    require_once 'footer.php';