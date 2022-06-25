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
                            <div class="form-row d-flex">
                                <div class="form-group col-md-6">
                                    <label for="cepImovel">CEP</label>
                                    <input type="number" name="cepImovel" class="form-control" id="cepImovel" placeholder="20.20-20" required />
                                </div>
                                <div class="form-group col-md-6 ps-1">
                                    <label for="ruaImovel">Rua</label>
                                    <input type="text" name="ruaImovel" class="form-control" id="ruaImovel" placeholder="Rua dos Bobos" required />
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-6">
                                    <label for="numeroImovel">Número</label>
                                    <input type="number" name="numeroImovel" class="form-control" id="numeroImovel" placeholder="nº 0" required />
                                </div>
                                <div class="form-group col-md-6 ps-1">
                                    <label for="compImovel">Complemento</label>
                                    <input type="text" name="compImovel" class="form-control" id="compImovel" placeholder="2° Andar" />
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-4">
                                    <label for="cidadeImovel">Cidade</label>
                                    <input type="text" name="cidadeImovel" class="form-control" id="cidadeImovel" placeholder="Salvador" required />
                                    <!-- <select name="cidadeImovel" class="form-control">
                                        <option value="0" selected>-</option>
                                        <option value="1">Salvador</option>
                                        <option value="2">Recife</option>
                                        <option value="3">Natal</option>
                                    </select> -->
                                </div>
                                <div class="form-group col-md-4 ps-1">
                                    <label for="estadoImovel">Estado</label>
                                    <input type="text" name="estadoImovel" class="form-control" id="estadoImovel" placeholder="Bahia" required />
                                    <!-- <select name="estadoImovel" class="form-control">
                                        <option value="0" selected>-</option>
                                        <option value="1">Bahia</option>
                                        <option value="2">Pernambuco</option>
                                        <option value="3">Rio Grande do Norte</option>
                                    </select> -->
                                </div>
                                <div class="form-group col-md-4 ps-1">
                                    <label for="paisImovel">País</label>
                                    <!-- <input type="text" name="paisImovel" class="form-control" id="paisImovel" placeholder="Brasil" required /> -->
                                    <select name="paisImovel" class="form-control">
                                        <option value="0" selected>-</option>
                                        <option value="1" name='paisImovel'>Brasil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-4">
                                    <label for="tipoResidencia">Tipo de Residência</label>
                                    <!-- <input type="text" name="tipoResidencia" class="form-control" id="tipoResidencia" placeholder="Fazenda" required /> -->

                                    <select id="tipoResidencia" name="tipoResidencia" class="form-control">
                                        <option value="0" selected>Categoria</option>
                                        <option value="1" name="tipoResidencia">Casa</option>
                                        <option value="1" name="tipoResidencia">Fazenda</option>
                                        <option value="1" name="tipoResidencia">Quarto</option>
                                        <option value="1" name="tipoResidencia">Apartamento</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 ps-1">
                                    <label for="capacidadeImovel">Capacidade Máxima</label>
                                    <input type="number" name="capacidadeImovel" class="form-control" id="capacidadeImovel" placeholder="5" />
                                </div>
                                <div class="form-group col-md-4 ps-1">
                                    <label for="diariaImovel">Preço Diaria</label>
                                    <input type="number" name="diariaImovel" class="form-control" id="diariaImovel" placeholder="R$ 500,00 " required />
                                </div>
                            </div>
                            <div class="form-row mt-3 mb-3">
                                <div class="form-group">
                                    <label for="adicionais">Adicionais</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="form-check-input ms-1" id="cozinha" name="cozinha" value="1" />
                                        <label class="custom-control-label" for="cozinha">Cozinha</label>
                                        <input type="checkbox" class="form-check-input" id="jacuzzi" name="jacuzzi" value="1"/>
                                        <label class="custom-control-label" for="jacuzzi">Jacuzzi</label>
                                        <input type="checkbox" class="form-check-input" id="refrigerador" name="refrigerador" value="1"/>
                                        <label class="custom-control-label" for="refrigerador">Refrigerador</label>
                                        <input type="checkbox" class="form-check-input" id="wifi" name="wifi" value="1"/>
                                        <label class="custom-control-label" for="wifi">Wifi</label><br />
                                        <input type="checkbox" class="form-check-input ms-1" id="ar" name="ar" value="1"/>
                                        <label class="custom-control-label" for="ar">Ar-Condicionado</label>
                                        <!-- <input type="checkbox" class="form-check-input" id="garagem" name="garagem" value="1"/>
                                        <label class="custom-control-label tamanho-label" for="garagem">Garagem</label> -->
                                        <input type="checkbox" class="form-check-input" id="alarme" name="alarme" value="1"/>
                                        <label class="custom-control-label tamanho-label" for="alarme">Alarme de Incêndio</label><br />
                                        <!-- <input type="checkbox" name="camera" class="form-check-input ms-1" id="camera" value="1"/>
                                        <label class="custom-control-label tamanho-label" for="camera">Câmera de Segurança</label> -->
                                        <input type="checkbox" name="detector" class="form-check-input" id="detector" value="1"/>
                                        <label class="custom-control-label tamanho-label" for="detector">Detector de Fumaça</label>
                                        <!-- <select multiple name="adicionaisImovel">
                                            <option value="0" selected>Adicionais</option>
                                            <option value="1">Cozinha</option>
                                            <option value="1">Jacuzzi</option>
                                            <option value="1">Refrigerador</option>
                                            <option value="1">Wifi</option>
                                            <option value="1">Ar-Condicionado</option>
                                            <option value="1">Alarme de Incêndio</option>
                                            <option value="1">Detector de Fumaça</option>
                                        </select> -->
                                    </div>
                                </div>
                            </div>
                            <div class="form-row d-flex">
                                <div class="form-group col-md-4 ps-1 me-3">
                                    <label for="imagemImovel">Imagem</label>
                                    <input type="file" id="imagemImovel" name="imagemImovel" accept="image/png, image/jpeg" />
                                </div>
                            </div>
                            <div class="form-group col-md-2 mt-1">
                                <label for="descricaoImovel">Descrição</label>
                                <textarea id="descricaoImovel" name="descricaoImovel" rows="5" cols="70"></textarea>
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
