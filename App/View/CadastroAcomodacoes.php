<?php

$title = "Cadastro de Acomodação";
$style = "styleAcom.php";
require 'page.php';
?>

<body class="bg-dark text-white">
    <section>
        <div class="container-fluid">
            <div class="">
                <nav>
                    <div class="ps-5 pt-4">
                        <a href="UserPage"><img src="logo.png" alt="logo" /></a>
                    </div>
                </nav>
            </div>
            <h1 class="d-flex mt-3 mb-0 justify-content-center">
                Cadastre seu Imóvel
            </h1>
            <div class="mt-2">
                <section class="d-flex  justify-content-center">
                    <div class="w-50">
                        <form name="cadastroImovel" method="post" action="IMOVELPAGE" class="form-div" enctype="multipart/form-data">
                            <div class="form-row d-flex">
                                <div class="form-group col-md-12">
                                    <label for="nomeCartao">Nome do Cartão</label>
                                    <input type="text" name="nomeCartao" class="form-control" id="nomeCartao" placeholder="titular do cartão" required />
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-6">
                                    <label for="numeroCartao">Numero do Cartão</label>
                                    <input type="number" name="numeroCartao" class="form-control" id="numeroCartao" placeholder="1234.5555.664.789" required />
                                </div>
                                <div class="form-group col-md-3 ps-1">
                                    <label for="validadeCartao">Validade</label>
                                    <input type="date" name="validadeCartao" class="form-control" id="validadeCartao" required />
                                </div>
                                <div class="form-group col-md-3 ps-1">
                                    <label for="cvvCartao">CVV</label>
                                    <input type="number" name="cvvCartao" class="form-control" id="cvvCartao" placeholder="192" required />
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-success" name="cadastroImovel">
                                    Cadastrar Imóvel
                                </button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>
</body>

</html>



