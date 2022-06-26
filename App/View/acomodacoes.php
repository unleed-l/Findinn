<?php
$style = "acomodacoesStyle.php";
$title = "Acomodações";
require "page.php";

session_start();

require_once "App/Model/ConexaoBD.php";

$conn = ConexaoBD::Conexao();
?>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="UserPage"><img src='<?php echo 'App/View/assets/logo.png';?>' alt="logo" /></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-align">
                    <form class="d-flex" role="search" method="post" action="">
                        <li class="nav-item text-white">
                            <label for="localizacao">Localização</label>

                            <input class="form-control me-2" type="search" name="localizacao" placeholder="Salvador..." aria-label="Procurar" />
                        </li>
                        <li class="nav-item text-white ps-2">
                            <label for="dataInicial">Data de Início</label>

                            <input class="form-control me-2" type="date" name="dataInicio" placeholder="" aria-label="Data" />
                        </li>
                        <li class="nav-item dropdown text-white ps-2">
                            <label for="dataFinal">Data Final</label>

                            <input class="form-control me-2" type="date" name="dataFinal" placeholder="" aria-label="Data" />
                        </li>
                        <li class="ps-2 pt-4">
                            <input class="btn btn-success" type="submit" name="procurar" value="Procurar" aria-label="Procurar" />
                        </li>
                    </form>

                    <?php

                        $pesquisarCidade = $_POST['pesquisarCidade'];


                    
                    
                    ?>

            
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section Cards-->
    <section class="mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 ps-2 pe-2">
            <?php
                    
                    
                    $sql = $conn->prepare('SELECT * FROM acomodacao INNER JOIN cidade ON acomodacao.id_cidade = cidade.id_cidade ORDER BY id_acomodacao ASC');

                    $sql->execute();

                    
                    //tipo acomodacao

                    $sql2 = $conn->prepare('SELECT tipo FROM tipo_acomodacao INNER JOIN acomodacao ON tipo_acomodacao.id_tipo_acomodacao = acomodacao.id_tipo_acomodacao ORDER BY id_acomodacao ASC');

                    $sql2->execute();

                    //cidade               

                    if ($sql->rowCount() >0 && $sql2->rowCount() >0 ){
                        while($dados = $sql->fetch(PDO::FETCH_ASSOC && $dados2 = $sql2->fetch(PDO::FETCH_ASSOC))){ 
                            echo "<div class='col'><div class='card h-100'><a href='acomodacaoDetalhes'><img src='{$dados['imagem_principal']}' class='card-img-top'/><div class='card-body'><h5 class='card-title'>{$dados2['tipo']}</h5><p class='card-text'>{$dados['descricao']}</p></div><div class='card-footer'><p class='text-muted'><strong class='text-dark'>A partir de {$dados['valor_diaria']}</strong>/{$dados['nome']}</p></div></a></div></div>";
                        }
                    }
                ?>
        
        </div>
    </section>
    <?php require "footer.php"; ?>
</body>

</html>