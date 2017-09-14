<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset = "utf-8">
        <title> {{ $title ?? 'Iniciando com Laravel' }}</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">Laravel</a>
            </div>
        </div>
        <main>
            <section class="container">
                {{ $slot }}
            </section>
        </main>
        <script src="/js/app.js"></script>
    </body>
</html>