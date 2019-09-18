<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
 <div class="stype-16">
    <div class="container">
            <div class="produt1">
                <div class="price_filter-2">
                    <span class="menu-item">
                        FLTER MY PRICE
                    </span>
                    <div  class="duongvien"></div>
                </div>

            <div class="filte">
                <button class="button">Filter</button>
                <div class="clear">
                <div class="price_lable">
                    Price:
                    <span class="from">£451</span> -
                       <span class="clear">£875</span>
                </div>
                </div>
                <div class="images">
        		   <img src="<?php echo $url_path ?>/images/1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>