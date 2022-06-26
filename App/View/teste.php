<?php
                require_once "App/Model/ConexaoBD.php";

                $conn = ConexaoBD::Conexao();

                
                $sql = $conn->prepare('SELECT * FROM findinn.acomodacao WHERE id_usuario = :idUsuario');
                $sql->bindParam('idUsuario',$_SESSION['id']);

                $sql->execute();

                $sql2 = $conn->prepare('SELECT * FROM findinn.tipo_acomodacao WHERE id_tipo_acomodacao = :idTipoAcomodacao');
                $sql2->bindParam('idTipoAcomodacao',$_SESSION['idTipoImovel']);

                $sql2->execute();

                $dados2 = $sql2->fetch(PDO::FETCH_ASSOC);

                if ($sql->rowCount() >0){
                    while($dados = $sql->fetch(PDO::FETCH_ASSOC)){
                        $dadosImg = dirname(__FILE__). "App/View/assets/".$dados['imagem_principal'].""; 
                        echo "<div class='col'><div class='card h-100'><a href='acomodacaoDetalhes'><img src='{$dadosImg}' width=' class='card-img-top'/><div class='card-body'><h5 class='card-title'>{$dados2['descricao']}</h5><p class='card-text'>{$dados['descricao']}</p></div><div class='card-footer'><p class='text-muted'><strong class='text-dark'>A partir de {$dados['valor_diaria']}</strong></p></div></a></div></div>";
                    }
                }
            ?>
	
