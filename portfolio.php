<?php
$pageTitle = "Portfolio";
include_once('includes/header.php');
?>
<div class="breadcrumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-end">
            <div class="col-12">
                <div class="breadcumb--con">
                    <h2 class="title">Portfolio</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-bg-curve">
        <img src="./img/core-img/curve-5.png" alt="">
    </div>
</div>
<section class="uza-portfolio-area section-padding-80">
    <div class="portfolio-menu text-center mb-80">
        <button class="btn active" data-filter="*">All Portfolio</button>
        <button class="btn" data-filter=".ux-ui-design">UX/UI Design</button>
        <button class="btn" data-filter=".market-analytics">MIS Design</button>
    </div>
    <div class="container-fluid">
        <div class="row uza-portfolio">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/32.png" alt="">
                    <div class="overlay-effect">
                        <h4>VICC</h4>
                        <p><a href="www.vicc.co"><b>www.vicc.co</b><br> </a></p>
                    </div>

                    <div class="view-more-btn">
                        <a href="https://www.vicc.co" target="https://www.vicc.co"><i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/33.png" alt="">

                    <div class="overlay-effect">
                        <h4>Imtiaz Trading</h4>
                        <p><a href="https://www.imtiaztrading.com"
                                target="https://www.imtiaztrading.com"><b>www.imtiaztrading.com</b> </a></p>
                    </div>

                    <div class="view-more-btn">
                        <a href="https://www.imtiaztrading.com" target="https://www.imtiaztrading.com"><i
                                class="arrow_right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item market-analytics">
                <div class="single-portfolio-slide">
                    <img src="./img/bg-img/34.png" alt="">

                    <div class="overlay-effect">
                        <h4>Human Capital MIS</h4>
                        <p></p>
                    </div> 
                    

                    <div class="view-more-btn">
                        <a href="hcmis.php"><i class="arrow_right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="uza-newsletter-area">
    <div class="container">
        <div class="border-line"></div>
    </div>
</section>
<?php
include_once('includes/footer.php');
?>