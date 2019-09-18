
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
    <div class="stype-15">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="Aple-6 pull-left">SHOP</h3>
                </div>
                <div class="col-md-5">
                <div class="b-breadcrumbs pull-right">
                    <ul class="list-unstyled">
                       <li><a  href="#"> HOME <i class="fa fa-chevron-right">  </i></a></li>
                 
               
                        <li><a style="text-decoration: none; " href="#">SHOP</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
