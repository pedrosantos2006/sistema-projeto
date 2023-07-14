<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema da Papelaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body>


    <header class="bg- primary text-black text-center py-3" style="background-color: #F27979;">
        Gerenciamento da Papelaria
    </header>

    <main class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block mb-3 abrir-tabela" data-tabela="funcionarios">Funcionários</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block mb-3 abrir-tabela" data-tabela="clientes">Clientes</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block mb-3 abrir-tabela" data-tabela="produtos">Produtos</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block mb-3 abrir-tabela" data-tabela="suporte">Suporte</a>
            </div>
        </div>
    </main>

    <div id="tabela-funcionarios" class="mt-4 tabela" style="display: none;">
        <h2>Gerenciamento dos Funcionários</h2>
        <?php include "includes/funcionarios.php"; ?>
    </div>

    <div id="tabela-clientes" class="mt-4 tabela" style="display: none;">
        <h2>Gerenciamento dos Clientes</h2>
        <!-- adiconar tabela -->
    </div>

    <div id="tabela-produtos" class="mt-4 tabela" style="display: none;">
        <h2>Gerenciamento de Produtos</h2>
        <!-- adiconar tabela -->
    </div>

    <div id="tabela-suporte" class="mt-4 tabela" style="display:none;">
        <h2>Gerenciamento do Suporte</h2>
        <!-- adicionar tabela -->
    </div>

    <script>
        $('.abrir-tabela').on('click', function() {
            var tabela = $(this).data('tabela');
            $('.tabela').hide();
            $('#tabela-' + tabela).fadeIn();
        });
    </script>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>&copy; Todos os direitos reservados</p> <!-- texto temporario, nao esqueca de mudar -->
    </footer>
</body>

</html>