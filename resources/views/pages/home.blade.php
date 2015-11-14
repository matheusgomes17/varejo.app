@extends('layout.default')

@section('title', 'Varejão das Ofertas')

@section('content')
<main id="all">
	<div id="content">
	    <div class="container">
	        <aside class="col-md-3">
	            <div class="panel panel-default sidebar-menu">
	                <header class="panel-heading">
	                    <h1 class="panel-title">Categorias</h1>
	                </header>
	                <footer class="panel-body">
	                    <ul class="nav nav-pills nav-stacked category-menu">
	                        @for ($c = 1; $c <= 15; $c++)
	                            <li id="dropdown">
	                                <a data-toggle="collapse" href="#nome-da-url{{ $c }}">
	                                    <h2>Nome da Categoria</h2>
	                                </a>
	                                <ul id="nome-da-url<?= $c; ?>" class="collapse">
	                                    <?php for ($p=1; $p <= 6 ; $p++) echo "<li><a href=\"#\">Nome do Produto</a></li>" ?>
	                                </ul>
	                            </li>
                            @endfor
	                    </ul>
	                </footer>
	            </div>

	            <!-- *** MENUS END *** -->
	        </aside>

	        <section class="col-md-9">

	            <header>
	                <h1 class="no">Veja os produtos mais baratos que você nunca viu na web!</h1>
	            </header>
	            <!-- title do section -->

	            <div id="main-slider">
	                <?php for ($s=1; $s <= 4 ; $s++) { ?>
	                    <div class="item">
	                        <img class="img-responsive" src="http://placehold.it/1600x900&text=Slide" alt="">
	                    </div>
	                <?php } ?>
	            </div>
	            <!-- /#main-slider -->

	            <div class="row products">

	            @for ($i=1; $i <= 12 ; $i++) 
	                <article class="col-md-3 col-sm-6" itemscope itemtype="https://schema.org/Product">
	                    <div class="product">
	                        <div class="flip-container">
	                            <div class="flipper">
	                                <div class="front">
	                                    <a href="/produto">
	                                        <img itemprop="image" src="http://placehold.it/253x337" alt="" title="" class="img-responsive">
	                                    </a>
	                                </div>
	                                <div class="back">
	                                    <a href="/produto">
	                                        <img src="http://placehold.it/253x337" alt="" title="" class="img-responsive">
	                                    </a>
	                                </div>
	                            </div>
	                        </div>
	                        <a href="/produto" class="invisible">
	                            <img src="http://placehold.it/253x337" alt="" class="img-responsive">
	                        </a>
	                        <div class="text">
	                            <header><h1><a itemprop="url" title="Título do Produto" href="/produto"><span itemprop="name">Título do Produto</span></a></h1></header>
	                            <footer>
	                                <p class="price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
	                                    <meta itemprop="price" content="143.00"/>
	                                    <meta itemprop="priceCurrency" content="BRL"/>
	                                    <del>R$280</del> $143.00
	                                </p>
	                                <p class="buttons">
	                                    <a href="/produto" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Ver detalhes</a>
	                                </p>
	                            </footer>
	                        </div>
	                        <!-- /.text -->

	                        <div class="ribbon new">
	                            <div class="theribbon">NOVO</div>
	                            <div class="ribbon-background"></div>
	                        </div>
	                        <!-- /.ribbon -->

	                        <div class="ribbon sale">
	                            <div class="theribbon">VENDA</div>
	                            <div class="ribbon-background"></div>
	                        </div>
	                        <!-- /.ribbon -->
	                    </div>
	                    <!-- /.product -->
	                </article>
                @endfor
	            </div>
	            <!-- /.products -->

	            <nav class="pages">
	                <header>
	                    <h1 class="no">Veja mais produtos em varejo!</h1>
	                </header>

	                <ul class="pagination">
	                    <li><a href="#">&laquo;</a>
	                    </li>
	                    <li class="active"><a href="#">1</a>
	                    </li>
	                    <li><a href="#">2</a>
	                    </li>
	                    <li><a href="#">3</a>
	                    </li>
	                    <li><a href="#">4</a>
	                    </li>
	                    <li><a href="#">5</a>
	                    </li>
	                    <li><a href="#">&raquo;</a>
	                    </li>
	                </ul>
	            </nav>
	        </section>
	        <!-- /.col-md-9 -->
	    </div>
	    <!-- /.container -->
	</div>
	<!-- /#content -->
</main>
@stop