<!doctype html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Imobiliaria AJAX - Demonstração de Pesquisa AJAX</title>
    <link rel="icon" href="" sizes="32x32">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />


</head>

<body>

    <header>
    </header>

    <main>
        <div class="container center">
            <h2>Cadastre Seu Imóvel</h2>
        </div>
        <div class="row">
            <div class="col m6">
                <form class="container fomulario" method="POST" action="backend/cadastro.php"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12 m5">
                            <input id="cidade" name="cidade" type="text" class="validate" required>
                            <label for="cidade">Cidade</label>
                        </div>
                        <div class="input-field col s12 m3">
                            <input id="estado" name="estado" type="text" class="validate" required>
                            <label for="estado">Estado</label>
                        </div>
                        <div class="input-field col s12 m4">
                            <input id="valor" name="valor" type="text" class="validate" required>
                            <label for="valor">Valor do Imóvel</label>
                        </div>
                        <div class="input-field col s12 m4">
                            <input id="garagem" name="garagem" type="number" class="validate" required>
                            <label for="garagem">Vagas na garagem</label>
                        </div>
                        <div class="input-field col s12 m4">
                            <input id="banheiro" name="banheiro" type="text" class="validate" required>
                            <label for="banheiro">Número de banheiro</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="quarto" name="quarto" type="text" class="validate">
                            <label for="quarto">Número de quartos</label>
                        </div>
                        <div class="file-field input-field col s12">
                            <div class="btn">
                                <span>Adicione fotos</span>
                                <input type="file" id="fotodir" name="fotodir[]" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text"
                                    placeholder="Selecione uma ou mais imagens">
                            </div>
                        </div>
                    </div>
                    <div class="center">
                        <button class="waves-effect waves-light btn" type="submit">Anunciar Imóvel</button>
                    </div>
                </form>
            </div>
            <div class="col m6">
                <div class="row">
                    <div class="col s1 m3"></div>
                    <div class="input-field col s10 m6 input-pesquisa">
                        <input id="cidadesearch" type="text" class="validate" onkeyup="pesquisacidade()">
                        <label class="active" id="labelcidade" for="cidadesearch">Digite a cidade ou valor que deseje</label>
                    </div>
                </div>
                <div id="container">
                    <div class="row">
                        <div id="cardsimoveis"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        function pesquisacidade() {
            $('#cardsimoveis').load('backend/cardsimoveis.php?cidade=' + $('#cidadesearch')
                .val());
        }
    </script>
    <script>
        $(document).ready(
            function () {
                $('#cardsimoveis').load('backend/cardsimoveispadrao.php');
            });
    </script>
</body>

</html>