<?php
$style = 'style.php';
$title = "UserPage";
require "page.php";
session_start();
?>

<body>
    <div class="container-fluid" style="height: 50vh">
        <?php
        require "cabecalho-on.php";
        ?>

        <section class="section section-top section-full">
            <!-- Cover -->
            <div class="bg-cover"></div>

            <!-- Overlay -->
            <div class="bg-overlay"></div>

            <!-- Triangles -->
            <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
            <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

            <!-- Content -->
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 col-lg-7"></div>
                </div>
                <!-- / .row -->
            </div>
            <!-- / .container -->
        </section>
    </div>
    <div class="container-fluid container">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://verticemt.com.br/wp-content/uploads/2020/10/UCAtrativo_Ib1e20a58-91a8-41f2-baed-366a21fca6c4.jpg"
                        alt="Los Angeles" class="d-block" style="width: 100%" />
                </div>
                <div class="carousel-item">
                    <img src="https://s3.imoview.com.br/visao/Imoveis/23669/cardeal-elias-fausto-rural-sitio-cardeal-13-01-2017_17-40-33-0.jpg"
                        alt="Chicago" class="d-block" style="width: 100%" />
                </div>
                <div class="carousel-item">
                    <img src="https://news.airbnb.com/wp-content/uploads/sites/4/2019/06/PJM020719Q202_Luxe_WanakaNZ_LivingRoom_0264-LightOn_R1.jpg?fit=2500%2C1666"
                        alt="Nicaragua" class="d-block" style="width: 100%" />
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
    <!-- Seção 4 Cards Rating-->
    <div class="container-fluid container py-3 mt-4">
        <h2 class="h3 text-white">Inspirações para suas próximas viagens</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card mb-3 border-2">
                    <img src="https://casa.abril.com.br/wp-content/uploads/2016/11/as-patricinhas-de-beverly-hills-it-s-filmed-there.jpeg?resize=630,359"
                        class="card-img-top rounded" alt="..." />
                    <div class="card-body pl-0">
                        <h5 class="card-title text-warning">
                            &#9733; &#9733; &#9733; &#9733; &#9733;
                        </h5>
                        <p class="card-text">
                            My mom and I stayed in the Silver Cloud during our
                            time in Napa and absolutely loved it, and would've
                            loved to stay longer. It's in a sweet, ...
                        </p>
                        <div class="">
                            <div class="d-flex">

                                <div class="d-flex flex-column">
                                    <h5 class="mt-0 mb-1 TextNames mt-2">
                                        Bianca
                                    </h5>
                                    <p class="TextNames">São Paulo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 border-2">
                    <img src="https://casa.abril.com.br/wp-content/uploads/2016/11/crepusculo-azure-magazine.jpeg?resize=630,365"
                        class="card-img-top rounded" alt="..." />
                    <div class="card-body pl-0">
                        <h5 class="card-title text-warning">
                            &#9733; &#9733; &#9733; &#9733; &#9733;
                        </h5>
                        <p class="card-text">
                            Great place to stay. Very clean, affordable, and
                            good location.
                        </p>
                        <div class="">
                            <div class="d-flex">

                                <div class="d-flex flex-column">
                                    <h5 class="mt-0 mb-1 TextNames mt-2">
                                        Yuri
                                    </h5>
                                    <p class="TextNames">Salvador</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 border-2">
                    <img src="https://casa.abril.com.br/wp-content/uploads/2016/11/curtindo-a-vida-adoidado.jpeg?resize=630,506"
                        class="card-img-top rounded" alt="..." />
                    <div class="card-body pl-0">
                        <h5 class="card-title text-warning">
                            &#9733; &#9733; &#9733; &#9733; &#9733;
                        </h5>
                        <p class="card-text">
                            Kathryn is delightful and so is her home. Would love
                            to come back. Thank you for everything!
                        </p>
                        <div class="">
                            <div class="d-flex">

                                <div class="d-flex flex-column">
                                    <h5 class="mt-0 mb-1 TextNames mt-2">
                                        Thiago
                                    </h5>
                                    <p class="TextNames">Salvador</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require "footer.php"; ?>
</body>

</html>