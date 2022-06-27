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
            <a class="navbar-brand" href="home"><img src='<?php echo 'App/View/assets/logo.png';?>' alt="logo" /></a>

            
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
                            echo "<div class='col'><div class='card h-100'><img src='{$dados['imagem_principal']}' class='card-img-top'/><div class='card-body'><h5 class='card-title'>{$dados2['tipo']}</h5><p class='card-text'>{$dados['descricao']}</p></div><div class='card-footer'><p class='text-muted'><strong class='text-dark'>A partir de {$dados['valor_diaria']}</strong></p><div class='d-flex justify-content-center'>
                            </div></div></div></div>";
                           
                        }
                    }    
                ?>
        
        </div>
    </section>
    <?php require "footer.php"; ?>
</body>

</html>