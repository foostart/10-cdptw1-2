<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>

        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/scripst.js" type="text/javascript"></script>
    </head>
    <body>


        <div class="type-20">
            <div class="container">
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="mySlides">
                            <div class="numbertext">1 / 6</div>
                            <img src="images/1.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 6</div>
                            <img src="images/2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 6</div>
                            <img src="images/3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 6</div>
                            <img src="images/4.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">5 / 6</div>
                            <img src="images/5.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <div class="numbertext">6 / 6</div>
                            <img src="images/5.jpg" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
                <div class="row">
                    <div class=" col-md-4  col-xs-4">
                        <h3 class="apple"> APPLE IPHONE 6S PLUS </h3>
                        <div class="duongvien"></div>
                        <h6><a hreh="#">Generic Box, Unlocked, 64GB, Gold Edition</a></h6>
                        <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                            <div class=' carousel-outer'>
                                <!-- ME ART TAB SILDER -->
                                <div class='carousel-inner '>
                                    <div class='item active'>
                                        <img src="images/1.jpg" onclick="openModal();
                                                currentSlide(1)" class="hover-shadow img-responsive">

                                    </div>
                                    <div class='item'  id="zoom_05">
                                        <img src="images/2.jpg" onclick="openModal();
                                                currentSlide(2)" class="hover-shadow img-responsive">

                                    </div>
                                    <div class='item'>
                                        <img src="images/3.jpg" onclick="openModal();
                                                currentSlide(3)" class="hover-shadow img-responsive">

                                    </div>

                                    <div class='item'>
                                        <img src="images/4.jpg" onclick="openModal();
                                                currentSlide(4)" class="hover-shadow img-responsive">

                                    </div>
                                    <div class='item'>
                                        <img src="images/5.jpg" onclick="openModal();
                                                currentSlide(5)" class="hover-shadow img-responsive">
                                    </div>
                                    <div class='item'><a class='left carousel-control' href='#carousel-custom' data-slide='prev'>

                                        </a>
                                        <a class='right carousel-control' href='#carousel-custom' data-slide='next'>

                                        </a>
                                        <img src="images/6.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow img-responsive">

                                    </div>
                                </div>
                                <!-- SAG SOL -->
                                <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                    <span class='glyphicon fa fa-angle-left'></span>
                                </a>
                                <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                    <span class='glyphicon fa fa-angle-right'></span>
                                </a>
                            </div>
                            <!-- THUMB -->
                            <ol class='carousel-indicators mCustomScrollbar meartlab'>
                                <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src='images/11.jpg' alt='' class="img-responsive" /></li>
                                <li data-target='#carousel-custom' data-slide-to='1'><img src='images/22.jpg' alt='' class="img-responsive" /></li>
                                <li data-target='#carousel-custom' data-slide-to='2'><img src='images/33.jpg' alt=''  class="img-responsive"/></li>
                                <li data-target='#carousel-custom' data-slide-to='3'><img src='images/44.jpg' alt='' class="img-responsive" /></li>
                                <li data-target='#carousel-custom' data-slide-to='4'><img src='images/55.jpg' alt=''  class="img-responsive"/></li>
                                <li data-target='#carousel-custom' data-slide-to='5'><img src='images/66.jpg' alt='' class="img-responsive" /></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/srcripst.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>