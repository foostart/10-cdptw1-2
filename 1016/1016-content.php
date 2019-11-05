<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="stype-16">
    <div class="container">
        <div class="col-md-9 content">
            <h1>siêu ưu đãi cho siêu phẩm galaxy s9</h1>
            <div class="pay">
                <h3>Gía: 19.990.000</h3>
                <h2>15.990.000đ</h2>
            </div>
            <div class="bor"></div>
            <p>Nhập mã voucher để được giảm ngay<span class="price" for="#"> 4.000.000đ</span></p>
            <div class="btn">
                <button>s9giam4tr</button>
            </div>
            <br>
            <div class="end">
                <label for="#">*Thời hạn chương trình từ 10.10 đến 31.10.2018</label>
                <label for="#">*Chỉ áp dụng tại Cửa hàng trực tuyến Samsung (www.shop.samsung.com/vn), không áp dụng cùng với các chương trình khuyến mãi khác.</label>
            </div>
        </div>
        <div class="col-md-3 picture">
            <img src="images/2.png" alt="responsive" class="img-responsive">
        </div>
    </div>
</div>