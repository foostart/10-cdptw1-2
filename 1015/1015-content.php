<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1015">
    <div class="container">
        <div class="menu-2">
            <nav class="navbar navbar-default">
                <div class="nav-menu-2">
                    <!-- BRAND -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" id="opennav">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <img width="100px" height="80px" src="images/logo1.png" class="img-responsive" alt="Flatsome">
                    </div>

                    <!-- COLLAPSIBLE NAVBAR -->
                    <div class="collapse navbar-collapse" id="alignment-example">

                        <!-- Links -->
                        <ul class="nav navbar-nav">
                            <!-- <li><a href="#"><i class="fas fa-search"></i></a></li> -->
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">ABOUt</a></li>
                            <li><a href="#">MENU</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGE <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li><a href="#">CONTACT</a></li>
                        </ul>

                        <div class="navbar-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Cart / $0,00</a></li>
                                <li><a class="cart-custom" href="#">
                                        <span>
                                            <strong>0</strong>
                                        </span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="mySidenav" class="sidenav">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUt</a></li>
                <li><a href="#">MENU</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">BLOG</a>
                    <a href="#" class="right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGE</a>
                        <a href="#" class="right-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                        </ul>
                </li>
              
                <li><a href="#">CONTACT</a></li>

            </ul>
        </div>
        <div class="close-side"></div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi porro optio inventore iusto quidem! Numquam deleniti placeat, vitae pariatur in sint iure adipisci facere odit omnis officia corporis consequatur minima?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias sed architecto amet voluptatem culpa natus quis vero modi inventore aperiam voluptatibus iusto blanditiis labore error dolorem, quia tenetur fugiat adipisci!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique minus iusto, natus in officiis autem iure architecto accusamus, recusandae omnis quas optio corporis harum reiciendis labore temporibus? Inventore, iusto temporibus.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quas non ipsa sequi aliquam nemo ea? Recusandae odit atque sunt eligendi, fugiat accusantium delectus rem unde, assumenda reiciendis exercitationem omnis?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem porro perferendis sequi consequuntur nemo commodi alias repellat minima a. Eius temporibus ex dolor saepe qui ab dolore obcaecati ut incidunt.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam facilis animi, tempore tenetur alias eos quas rerum asperiores ducimus aspernatur ea quae neque sunt impedit minima repellendus libero quam fugiat.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat cupiditate quas dolores inventore totam laboriosam ipsum? Sunt, laboriosam consequatur. Deserunt cupiditate aperiam distinctio dolor numquam commodi, illum facere aliquam ipsum?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quisquam alias ad quos impedit blanditiis suscipit, deleniti, eveniet earum animi molestias velit corrupti tempore laudantium voluptatibus! Vitae harum quod voluptatum.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel animi optio dolores labore asperiores facere in mollitia amet aliquam. Harum tempora distinctio animi voluptatibus? Repudiandae, illo? Autem praesentium nemo error!
        </p>
    </div>
</div>