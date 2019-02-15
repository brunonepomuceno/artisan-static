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
        <section class="container">
            <h2>Portarias</h2>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Portaria</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEstado">Data da publicação</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCEP">Assunto</label>
                    <input type="text" class="form-control">
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
