<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-21">
            <div class="container">
                <!--HERDER-->
                <div class="row">
                    <div class="col-md-9">  
                        <div class="thanhdoc"></div>
                        <div class="clearfix"></div>
                        <!--NAV-->
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">DESCRIPTION</a></li>
                            <li><a data-toggle="tab" href="#menu1">REVIEWS(2)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <p>The iPhone 6S features a resolution of 1334 x 750 pixels on its great-looking 4.7 inch screen, and the high performance A9 mobile phone processor chip means that multi-tasking is smooth, easy and increadibly fast with outstanding energy performance too. Play 3D games to your heart’s content thanks to this new image signal processor with quality that’s worthy of a fully-fledged games console, and then enjoy the benefits of advanced video and photo functionalities too. The iPhone 6S is based on a 64 bit architecture and also operates iOS 9 resources so that your user-experience is streamlined and highly intuitive. Now you can enjoy not just the traditional Message and Photo apps but also Health apps, a QuickType keyboard and also family Share features and iCloud Drive.</p>
                                <br>
                                <p>Processor: A9 chip with 64 bit architecture Integrated M9 movement co-processor</p>
                                <br>
                                <p>Screen type: Retina HD display with 3D Touch 1400:1 contrast ratio (standard) 500 cd/m2 max brightness (standard) Full sRGB standard Dual-domain pixels for wider viewing angles Fingerprint-resistant oleophobic coating on front</p>
                                <br>
                                <p>Screen size: 4.7 inch (diagonal) – Resolution of 1 334 x 750 pixels at 326 ppi</p>
                                <br>
                                <p>Rear sensor: 12-megapixel iSight camera with 1.22µ pixels/Live Photos/Autofocus with Focus Pixels/True Tone Flash, Panoramic up to 63 megapixels/Auto HDR photo</p>
                                <br>
                                <p>Battery life: Talk time up to 14 hours in 3G Standby, up to 10 days (250 hours) Internet browsing: up to 10 hours in 3G, up to 10</p>
                                <br>
                                <p>Don’t forget that as an iPhone 6S user you also get access to the revolutionary App Store that has over 1.3 million apps in 155 countries.</p>
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="cmt">
                                    <div class="col-md-12 ">
                                        <div class="row">
                                            <div class="cmttext ">
                                                <div class="col-md-2 hinh">
                                                    <div class="hinhnguoi">
                                                        <img src="<?php echo $url_path ?>/images/matnguoi.jpeg" alt="">
                                                    </div>
                                                </div> 
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <div class="admin">
                                                            <strong class="amin">amin</strong>
                                                            -
                                                            <span  class="time">December 4, 2015</span>
                                                            <div class="fa1">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                            <p class="esum">Proin est elentesque risus magna vulputate vitae sodales uam morbi non sem lacus porta mollis. Nunc condime ntum metus eud In molestie sed consect etu Lorem ipsum dolor sit amet conse adipisicing elit sed do incididunt ut labore et dolore magna.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="gach"></div>
                                        </div>
                                        <div class="row">
                                            <div class="cmttext ">
                                                <div class="col-md-2 hinh">
                                                    <div class="hinhnguoi">
                                                        <img src="<?php echo $url_path ?>/images/matnguoi.jpeg" alt="">
                                                    </div>
                                                </div> 
                                                <div class="col-md-10">
                                                    <div class="row">
                                                        <div class="admin">
                                                            <strong class="amin">amin</strong>
                                                            -
                                                            <span class="time">December 4, 2015</span>
                                                            <div class="fa1">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </div>
                                                            <p class="esum">Proin est elentesque risus magna vulputate vitae sodales uam morbi non sem lacus porta mollis. Nunc condime ntum metus eud In molestie sed consect etu Lorem ipsum dolor sit amet conse adipisicing elit sed do incididunt ut labore et dolore magna.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="gach"></div>
                                        </div>

                                    </div>  
                                </div>

                                <div class="clear" style="clear: both"></div>
                                <div class="add">
                                    <h3>ADD A REVIEW</h3>
                                </div>
                                <form>
                                    <p class="text">
                                        <span>Your email address will not be published.Required fields are marked</span>
                                        <span class="required">*</span>
                                    </p>
                                    <p>
                                        <label class="rating">YOUR RATING</label>
                                    </p>
                                    <div class="stars">
                                        <span class="star1">
                                            <i class=" fa fa-star-o " aria-hidden="true"></i>

                                        </span>
                                        <span class="star1" style="    padding-left: 7px;">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" style="margin-left:-3px;"></i>
                                        </span>
                                        <span class="star1" style="    padding-left: 7px;">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" style="margin-left:-3px;"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" style="margin-left:-3px;"></i>
                                        </span>
                                        <span class="star4" style="    padding-left: 7px;">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" style="margin-left:-3px;"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" style="margin-left:-3px;"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" style="margin-left:-3px;"></i>
                                        </span>
                                        <span class="star1" style="    padding-left: 7px;">
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" style="margin-left:-3px;"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" style="margin-left:-3px;"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" style="margin-left:-3px;"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" style="margin-left:-3px;"></i>
                                        </span>
                                    </div>
                                    <label class="cmt">YOUR REVIEW 
                                        <span class="required">*</span> 
                                    </label>    

                                    <div class="txt">
                                        <textarea id="comment" name="comment" ></textarea>                   
                                    </div>
                                    <p>
                                        <label>NAME
                                            <span class="required">*</span>
                                        </label>
                                        <label class="name">
                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                                        </label>
                                    </p>
                                    <label class="email">EMAIL 
                                        <span class="required">*</span> 
                                    </label>
                                    <div class="txt1">  
                                        <input  id="authors" name="author" type="text" value="" size="30" aria-required="true" required="">
                                    </div>
                                    <div class="dp">
                                        <button type="submit" class="dangnhap">SUBMIT</button>
                                    </div>
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
