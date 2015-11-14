@extends('layout.default')

@section('title', 'Varejão das Ofertas')

@section('content')
<main id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Fale Conosco</li>
                    </ul>
                </div>

                <section class="col-md-12">

                    <div class="box" id="contact">
                        <header>
                            <h1>Fale Conosco</h1>

                            <p class="lead">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobrev</p>
                            <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobrev</p>
                        </header>
                        <hr>

                        <div class="row">
                            <article class="col-sm-4">
                                <header>
                                    <h1><i class="fa fa-map-marker"></i> Endereço</h1>
                                </header>
                                <p>Nome da rua, numero
                                    <br>Bairro
                                    <br>CEP
                                    <br>Cidade
                                    <br>
                                    <strong>País</strong>
                                </p>
                            </article>
                            <!-- /.col-sm-4 -->
                            <article class="col-sm-4">
                                <header>
                                    <h1><i class="fa fa-phone"></i> Central de Atendimento</h1>
                                </header>
                                <p class="text-muted">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI.</p>
                                <p><strong>+55 (16) 99178-1234</strong><br>
                                <strong>+55 (16) 99205-7360</strong></p>
                                
                            </article>
                            <!-- /.col-sm-4 -->
                            <article class="col-sm-4">
                                <header>
                                    <h1><i class="fa fa-envelope"></i> Suporte Eletrônico</h1>
                                </header>
                                <p class="text-muted">Por favor, sinta-se livre para escrever um e-mail para nós.</p>
                                <ul>
                                    <li><strong><a href="mailto:">email@email.com</a></strong></li>
                                </ul>
                            </article>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

                        <hr>

                        <section>
                            <header>
                                <h1>Formulário de Contato</h1>
                            </header>
                            <form>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="contact">Tipo de Contato</label>
                                            <select class="form-control" id="contact">
                                                <option value="" disabled selected="selected">Selecione um tipo de contato</option>
                                                <option value="anuncie">Anúncie</option>
                                                <option value="contato">Contato</option>
                                                <option value="sugestoes">Sugestões</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Razão/Nome</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Telefone</label>
                                            <input type="text" class="form-control" id="phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Mensagem</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar Mensagem</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>

                        </section>

                    </div>

                </section>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
    </main>
@stop