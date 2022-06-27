
<?php
$style = "acomodacoesStyle.php";
$title = "FINDINN - ACOMODAÇÕES";
require "page.php";

session_start();


?>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src='<?php echo 'App/View/assets/logo.png';?>' alt="logo" /></a>
        </div>
    </nav>

    <!-- Section Cards-->
    <section class="mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 ps-2 pe-2">
        <?php
            require_once "App/Model/ConexaoBD.php";

                $conn = ConexaoBD::Conexao();
               
               $sql = $conn->prepare("SELECT * FROM acomodacao INNER JOIN cidade ON acomodacao.id_cidade = cidade.id_cidade WHERE id_acomodacao =:idReserva ORDER BY id_acomodacao ASC");

               $sql->bindParam('idReserva',$_SESSION['idReserva']);
               $sql->execute();

            //    $sql3 = $conn->prepare("SELECT * FROM acomodacao INNER JOIN adicional_acomodacao ON acomodacao.id_adicional_acomodacao = adicional_acomodacao.id_adicional_acomodacao WHERE id_acomodacao =:id_reserva ORDER BY id_acomodacao ASC ");
            //    $sql->bindParam('id_reserva',$_SESSION['idReserva']);
            //    $sql->execute();

               $sql2 = $conn->prepare('SELECT tipo FROM tipo_acomodacao INNER JOIN acomodacao ON tipo_acomodacao.id_tipo_acomodacao = acomodacao.id_tipo_acomodacao ORDER BY id_acomodacao ASC');

               $sql2->execute();

                $sql3 = $conn->prepare("SELECT * FROM acomodacao INNER JOIN adicional_acomodacao ON acomodacao.id_adicional_acomodacao = adicional_acomodacao.id_adicional_acomodacao WHERE id_acomodacao =:id_reserva ORDER BY id_acomodacao ASC ");
                $sql3->bindParam('id_reserva',$_SESSION['idReserva']);
                $sql3->execute();

                $sql4 = $conn->prepare("SELECT id_acomodacao, usuario.nome FROM acomodacao INNER JOIN usuario ON acomodacao.id_usuario = usuario.id_usuario WHERE id_acomodacao =:id_reserva ORDER BY id_acomodacao ASC ");
                $sql4->bindParam('id_reserva',$_SESSION['idReserva']);
                $sql4->execute();
               //cidade
                         
                $dados4 = $sql4->fetch(PDO::FETCH_ASSOC);
               if ($sql->rowCount() >0){
                   while($dados = $sql->fetch(PDO::FETCH_ASSOC && $dados2 = $sql2->fetch(PDO::FETCH_ASSOC && $dados3 = $sql3->fetch(PDO::FETCH_ASSOC)))){
                    
                    $caracteristicas =' ';
                    if ($dados3['cozinha'] == 1) {
                        $caracteristicas .= '- Cozinha<br/> ';
                    }
                    if ($dados['jacuzzi'] == 1) {
                        $caracteristicas .= '- Jacuzzi<br/> ';
                    }
                    if ($dados3['refrigerador'] == 1) {
                        $caracteristicas .= '- Refrigerador<br/> ';
                    }
                    if ($dados3['detector'] == 1) {
                        $caracteristicas .= '- Detector<br/> ';
                    }
                    if ($dados3['wifi'] == 1) {
                        $caracteristicas .= '- Wifi<br/> ';
                    }
                    if ($dados3['ar'] == 1) {
                        $caracteristicas .= '- Ar-Condicionado<br/> ';
                    }
                    if ($dados3['alarme'] == 1) {
                        $caracteristicas .= '- Alarme<br/> ';
                    }
                    
                    extract($dados3);   
                    echo "<div class='col'><div class='card h-100'><img src='{$dados['imagem_principal']}' class='card-img-top'/><div class='card-body'><h5 class='card-title'>{$dados2['tipo']}</h5><p class='card-text'></p></div><div class='card-footer'><p class='text-muted'><strong class='text-dark'>A partir de {$dados['valor_diaria']}/pessoa</strong></p><div class='d-flex justify-content-center'>
                       </div></div></div></div>";
                       echo "<div class='col'>
                        
                        <div class='card h-100'>
                       <h2>Especificações</h2><br />
                   
                       <h5>{$dados['nome']}</h5><br/>

                       <h5>Adicionais:<br/> {$caracteristicas}</h5><br/>
                       

                       <article><strong>Sobre: {$dados['descricao']}</strong></article><br/>

                       <p><strong>Valor da Diaria: {$dados['valor_diaria']} Reais</strong></p>
                       <p><strong>Proprietário: {$dados4['nome']}</strong></p>

                       <form
                        method='post'
                        name='Reservado'
                        action='ImovelReservado'
                        enctype='multipart/form'
                    >
                        <div class='form-row d-flex'>
                            <div class='form-group col-md-12'>
                                <label for='nomeCartao'>Nome do Cartão</label>
                                <input
                                    type='text'
                                    name='nomeCartao'
                                    class='form-control'
                                    id='nomeCartao'
                                    placeholder='titular do cartão'
                                    required
                                />
                            </div>
                        </div>
                        <div class='form-row d-flex'>
                            <div class='form-group col-md-6'>
                                <label for='numeroCartao'>Numero do Cartão</label>
                                <input
                                    type='number'
                                    name='numeroCartao'
                                    class='form-control'
                                    id='numeroCartao'
                                    placeholder='1234.5555.664.789'
                                    required
                                />
                            </div>
                            <div class='form-group col-md-3 ps-1'>
                                <label for='validadeCartao'>Validade</label>
                                <input
                                    type='date'
                                    name='validadeCartao'
                                    class='form-control'
                                    id='validadeCartao'
                                    required
                                />
                            </div>
                            <div class='form-group col-md-3 ps-1'>
                                <label for='cvvCartao'>CVV</label>
                                <input
                                    type='number'
                                    name='cvvCartao'
                                    class='form-control'
                                    id='cvvCartao'
                                    placeholder='192'
                                    required
                                />
                            </div>
                        </div>
                        <div class='col-md-3 ps-1'>
                            <input type='date' name='PeriodoInicial' class='form-control' />
                            <input type='date' name='PeriodoFinal' class='form-control' />
                        </div>
                        <div class='justify-content-center d-flex'>
                            <input
                                type='submit'
                                class='btn btn-success'
                                value='Reservar'
                                width='50%'
                            />
                        </div>
                    </form>
                       
                       
                        </div>
                        
                        </div>"; 
                   }  
               }
            
               
           ?>
            
        </div>
    </section>
    <?php require 'footer.php'; ?>
</body>

</html>
