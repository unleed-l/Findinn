<?php
    $style = "acomodacoesStyle.php";
    $title = "Minhas Acomodacoes";
    require "page.php";
    session_start();
?>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="UserPage"><img src='<?php echo 'App/View/assets/logo.png';?>'
                    alt="logo" /></a>
            <h5 class="text-white"><?php var_dump($_SESSION['idTipoImovel']);?></h5>
        </div>
    </nav>

    <!-- Section Cards-->
    <section class="mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 ps-2 pe-2">

            <?php
                
                require_once "App/Model/ConexaoBD.php";

                $conn = ConexaoBD::Conexao();

                
                $sql = $conn->prepare("SELECT * FROM acomodacao
                INNER JOIN usuario ON usuario.id_usuario = acomodacao.id_usuario
                where usuario.id_usuario = :idUsuario");
                $sql->bindParam('idUsuario',$_SESSION['id']);

                $sql->execute();

                // $sql2 = $conn->prepare("SELECT * FROM findinn.tipo_acomodacao WHERE id_tipo_acomodacao = :idTipoAcomodacao");
                // $sql2->bindParam('idTipoAcomodacao',$_SESSION['idTipoImovel']);

                // $sql2->execute();

                // $dados2 = $sql2->fetch(PDO::FETCH_ASSOC);

                    
                    if($sql->rowCount() >0){
                        while($dados = $sql->fetch(PDO::FETCH_ASSOC)){ 
                            echo "<div class='col'>
                            <div class='card h-100'><img src='{$dados['imagem_principal']}' class='card-img-top' />
                                <div class='card-body'>
                                    <h6 class='card-title'>Proprietario: {$dados['nome']}</h6>
                                    <p class='card-text'>{$dados['descricao']}</p>
                                </div>
                                <div class='card-footer'>
                                    <p class='text-muted'><strong class='text-dark'>A partir de {$dados['valor_diaria']}</strong></p>
                                </div>
                            </div>
                        </div>";
                        }

                    }
                    
                
            ?>



        </div>
    </section>
    <?php require "footer.php";?>
</body>

</html>