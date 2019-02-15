<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <header class="container">
        <h1> Dentran Roraima </h1>
        <hr>
    </header>

    <article>
    <section class="bg-white text-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="pb-3 mb-4 border-bottom">
                            Portarias
                        </h1>

                        <div>
                            
                            <!-- Tabela -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Portaria</th>
                                            <th>Data da publicação</th>
                                            <th>Assunto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="<%=request.getContextPath()%>/artigo-completo.jsp?id=3359" class="text-dark hover-underline-animation-list">611/2018 e 911/2018</a></td>
                                            <td>26/11/2018</td>
                                            <td>Registro de Contratos</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
                        <nav class="blog-pagination">
                            <a class="btn bg-secondary text-white" href="artigo-lista.jsp">Mais portarias</a>
                            <a class="text-secondary disabled float-right voltar-para-topo" href="#topo">Voltar para o topo <i class="fas fa-arrow-up"></i></a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <footer class="container">
        <small>
            <a href="https://www.searchtecnologia.com.br/index.jsp" target="_blank" class="">Search Tecnologia © 2019</a>
        </small>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
