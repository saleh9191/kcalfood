@extends('mainLayout')
@section('content')
    <!-- SubHeader -->
    <section class="parallax-window" data-parallax="scroll" data-image-src="http://placehold.it/1400x520" data-natural-width="1400" data-natural-height="520">
        <div id="sub_header">
            <div class="container" id="sub_content">
                <div class="row">
                    <div class="col-md-12">
                        <h1>أكثر من <span class="number">50000</span> وصفة.</h1>
                        <h3>نحن نعرف كيفية جعل حياتك رائع.</h3>
                        <form method="post" action="#">
                            <div id="custom-search-input">
                                <div class="input-group">
                                    <input type="text" class=" search-query" placeholder="كلمة البحث...">
                                    <span class="input-group-btn">
                                            <input type="submit" class="btn_search" value="submit">
                                        </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div>
    </section>
    <!-- End SubHeader -->

    <div class="container margin_60">
        <div class="main_title">
            <h2 class="nomargin_top">الأعلي مراجعة</h2>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
            <hr class="divider">
        </div><!-- End main_title -->
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="recipes-review">
                    <div class="recipes-img">
                        <img src="http://placehold.it/350x220" alt="" />
                        <div class="favorite active"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></div>
                    </div>
                    <div class="recipes-content">
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                        <div class="ratings">
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                            <span>134</span>
                        </div>
                        <div class="col-details">
                            <ul class="details">
                                <li>
                                    <img src="http://placehold.it/48x48" class="img-profile" alt="">
                                </li>
                                <li>
                                    <h4>حسام حامد</h4>
                                    <ul class="favorites">
                                        <li><i class="fa fa-heart"></i></li>
                                        <li><span>235</span></li>
                                    </ul>
                                    <ul class="comments">
                                        <li><i class="fa fa-comments"></i></li>
                                        <li><span>36</span></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="review-final-score">
                                <h3>9.9</h3>
                                <h4>نتيجة المراجعة</h4>
                            </div>
                        </div>
                    </div>
                    <div class="review-box review-percentage">
                        <h2 class="review-box-header">عنوان المراجعة</h2>
                        <div class="review-item">
                            <h5>نص المراجعة - 10</h5><span style="width: 100%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9.1</h5><span style="width: 91%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9.4</h5><span style="width: 94%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9</h5><span style="width: 90%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9.6</h5><span style="width: 96%;"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="recipes-review">
                    <div class="recipes-img">
                        <img src="http://placehold.it/350x220" alt="" />
                        <div class="favorite active"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></div>
                    </div>
                    <div class="recipes-content">
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                        <div class="ratings">
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                            <span>134</span>
                        </div>
                        <div class="col-details">
                            <ul class="details">
                                <li>
                                    <img src="http://placehold.it/48x48" class="img-profile" alt="">
                                </li>
                                <li>
                                    <h4>حسام حامد</h4>
                                    <ul class="favorites">
                                        <li><i class="fa fa-heart"></i></li>
                                        <li><span>235</span></li>
                                    </ul>
                                    <ul class="comments">
                                        <li><i class="fa fa-comments"></i></li>
                                        <li><span>36</span></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="review-final-score">
                                <h3>9.9</h3>
                                <h4>نتيجة المراجعة</h4>
                            </div>
                        </div>
                    </div>
                    <div class="review-box review-percentage">
                        <h2 class="review-box-header">عنوان المراجعة</h2>
                        <div class="review-item">
                            <h5>نص المراجعة - 10</h5><span style="width: 100%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9.1</h5><span style="width: 91%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9.4</h5><span style="width: 94%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9</h5><span style="width: 90%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9.6</h5><span style="width: 96%;"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="recipes-review">
                    <div class="recipes-img">
                        <img src="http://placehold.it/350x220" alt="" />
                        <div class="favorite"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></div>
                    </div>
                    <div class="recipes-content">
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                        <div class="ratings">
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                            <span>134</span>
                        </div>
                        <div class="col-details">
                            <ul class="details">
                                <li>
                                    <img src="http://placehold.it/48x48" class="img-profile" alt="">
                                </li>
                                <li>
                                    <h4>حسام حامد</h4>
                                    <ul class="favorites">
                                        <li><i class="fa fa-heart"></i></li>
                                        <li><span>235</span></li>
                                    </ul>
                                    <ul class="comments">
                                        <li><i class="fa fa-comments"></i></li>
                                        <li><span>36</span></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="review-final-score">
                                <h3>9.9</h3>
                                <h4>نتيجة المراجعة</h4>
                            </div>
                        </div>
                    </div>
                    <div class="review-box review-percentage">
                        <h2 class="review-box-header">عنوان المراجعة</h2>
                        <div class="review-item">
                            <h5>نص المراجعة - 10</h5><span style="width: 100%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9.1</h5><span style="width: 91%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9.4</h5><span style="width: 94%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9</h5><span style="width: 90%;"></span>
                        </div>
                        <div class="review-item">
                            <h5>نص المراجعة - 9.6</h5><span style="width: 96%;"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="recipes-review">
                    <div class="recipes-img">
                        <img src="http://placehold.it/350x220" alt="" />
                        <div class="favorite"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></div>
                    </div>
                    <div class="recipes-content">
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                        <div class="ratings">
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                            <span>134</span>
                        </div>
                        <div class="col-details">
                            <ul class="details">
                                <li>
                                    <img src="http://placehold.it/48x48" class="img-profile" alt="">
                                </li>
                                <li>
                                    <h4>حسام حامد</h4>
                                    <ul class="favorites">
                                        <li><i class="fa fa-heart"></i></li>
                                        <li><span>235</span></li>
                                    </ul>
                                    <ul class="comments">
                                        <li><i class="fa fa-comments"></i></li>
                                        <li><span>36</span></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="review-final-score">
                                <h3>9.9</h3>
                                <h4>نتيجة المراجعة</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="recipes-review">
                    <div class="recipes-img">
                        <img src="http://placehold.it/350x220" alt="" />
                        <div class="favorite"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></div>
                    </div>
                    <div class="recipes-content">
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                        <div class="ratings">
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                            <span>134</span>
                        </div>
                        <div class="col-details">
                            <ul class="details">
                                <li>
                                    <img src="http://placehold.it/48x48" class="img-profile" alt="">
                                </li>
                                <li>
                                    <h4>حسام حامد</h4>
                                    <ul class="favorites">
                                        <li><i class="fa fa-heart"></i></li>
                                        <li><span>235</span></li>
                                    </ul>
                                    <ul class="comments">
                                        <li><i class="fa fa-comments"></i></li>
                                        <li><span>36</span></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="review-final-score">
                                <h3>9.9</h3>
                                <h4>نتيجة المراجعة</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="recipes-review">
                    <div class="recipes-img">
                        <img src="http://placehold.it/350x220" alt="" />
                        <div class="favorite"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></div>
                    </div>
                    <div class="recipes-content">
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                        <div class="ratings">
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                            <span>134</span>
                        </div>
                        <div class="col-details">
                            <ul class="details">
                                <li>
                                    <img src="http://placehold.it/48x48" class="img-profile" alt="">
                                </li>
                                <li>
                                    <h4>حسام حامد</h4>
                                    <ul class="favorites">
                                        <li><i class="fa fa-heart"></i></li>
                                        <li><span>235</span></li>
                                    </ul>
                                    <ul class="comments">
                                        <li><i class="fa fa-comments"></i></li>
                                        <li><span>36</span></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="review-final-score">
                                <h3>9.9</h3>
                                <h4>نتيجة المراجعة</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End container -->

    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2 class="nomargin_top">مرحبا، بك في موقع وصفات الطعام</h2>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                <hr class="divider">
            </div><!-- End main_title -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="box-icon">
                        <div><i class="ic icon-recipes"></i></div>
                        <h3>الوصفات</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                        <a href="#" class="button-radius">تصفح المزيد من الوصفات</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="box-icon">
                        <div><i class="ic icon-videos"></i></div>
                        <h3>الفيديو</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                        <a href="#" class="button-radius">تصفح المزيد من الفيديو</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="box-icon">
                        <div><i class="ic icon-books"></i></div>
                        <h3>الكتب</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                        <a href="#" class="button-radius">تصفح المزيد من الكتب</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="box-icon">
                        <div><i class="ic icon-post"></i></div>
                        <h3>المدونة</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                        <a href="#" class="button-radius">تصفح المزيد من التدوينات</a>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End white_bg -->

    <div class="container margin_60">
        <div class="main_title">
            <h2 class="nomargin_top">قائمة طعام اليوم</h2>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
            <hr class="divider">
        </div><!-- End main_title -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="menu-item">
                    <div class="menu-img"><img src="http://placehold.it/270x200" alt="" /></div>
                    <div class="menu-content">
                        <ul class="stars">
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        </ul><!-- End stars -->
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                        <a href="#" class="button-more">أكمل القراءة &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="menu-item">
                    <div class="menu-img"><img src="http://placehold.it/270x200" alt="" /></div>
                    <div class="menu-content">
                        <ul class="stars">
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        </ul><!-- End stars -->
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                        <a href="#" class="button-more">أكمل القراءة &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="menu-item">
                    <div class="menu-img"><img src="http://placehold.it/270x200" alt="" /></div>
                    <div class="menu-content">
                        <ul class="stars">
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        </ul><!-- End stars -->
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                        <a href="#" class="button-more">أكمل القراءة &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="menu-item">
                    <div class="menu-img"><img src="http://placehold.it/270x200" alt="" /></div>
                    <div class="menu-content">
                        <ul class="stars">
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        </ul><!-- End stars -->
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                        <a href="#" class="button-more">أكمل القراءة &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="menu-item">
                    <div class="menu-img"><img src="http://placehold.it/270x200" alt="" /></div>
                    <div class="menu-content">
                        <ul class="stars">
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        </ul><!-- End stars -->
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                        <a href="#" class="button-more">أكمل القراءة &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="menu-item">
                    <div class="menu-img"><img src="http://placehold.it/270x200" alt="" /></div>
                    <div class="menu-content">
                        <ul class="stars">
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        </ul><!-- End stars -->
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                        <a href="#" class="button-more">أكمل القراءة &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="menu-item">
                    <div class="menu-img"><img src="http://placehold.it/270x200" alt="" /></div>
                    <div class="menu-content">
                        <ul class="stars">
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        </ul><!-- End stars -->
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                        <a href="#" class="button-more">أكمل القراءة &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="menu-item">
                    <div class="menu-img"><img src="http://placehold.it/270x200" alt="" /></div>
                    <div class="menu-content">
                        <ul class="stars">
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        </ul><!-- End stars -->
                        <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                        <a href="#" class="button-more">أكمل القراءة &raquo;</a>
                    </div>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2 class="nomargin_top">الوصفات</h2>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                <hr class="divider">
            </div><!-- End main_title -->
            <div class="row">
                <div class="col-md-6">
                    <div class="col-recipe">
                        <div class="photo">
                            <img src="http://placehold.it/400x400" alt="">
                            <span class="image-fader"><span class="hover-icon"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></span></span>
                        </div>
                        <div class="excerpt">
                            <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                        </div><!-- End excerpt -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-recipe">
                        <div class="photo">
                            <img src="http://placehold.it/400x400" alt="">
                            <span class="image-fader"><span class="hover-icon"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></span></span>
                        </div>
                        <div class="excerpt">
                            <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                        </div><!-- End excerpt -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-recipe">
                        <div class="photo">
                            <img src="http://placehold.it/400x400" alt="">
                            <span class="image-fader"><span class="hover-icon"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></span></span>
                        </div>
                        <div class="excerpt">
                            <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                        </div><!-- End excerpt -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-recipe">
                        <div class="photo">
                            <img src="http://placehold.it/400x400" alt="">
                            <span class="image-fader"><span class="hover-icon"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></span></span>
                        </div>
                        <div class="excerpt">
                            <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                        </div><!-- End excerpt -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-recipe">
                        <div class="photo">
                            <img src="http://placehold.it/400x400" alt="">
                            <span class="image-fader"><span class="hover-icon"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></span></span>
                        </div>
                        <div class="excerpt">
                            <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                        </div><!-- End excerpt -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-recipe">
                        <div class="photo">
                            <img src="http://placehold.it/400x400" alt="">
                            <span class="image-fader"><span class="hover-icon"><a href="javascript:void(0);"><i class="fa fa-heart"></i></a></span></span>
                        </div>
                        <div class="excerpt">
                            <h3><a href="#">هذا النص هو مثال لنص يمكن أن يستبدل</a></h3>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                        </div><!-- End excerpt -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-center">
                        <a class="button-browse-more" href="#">تصفح المزيد من الوصفات</a>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End white_bg -->

    <div class="container margin_60">
        <div class="main_title">
            <h2 class="nomargin_top">الفيديو</h2>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
            <hr class="divider">
        </div><!-- End main_title -->
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="col-video">
                    <div class="photo">
                        <img src="http://placehold.it/450x300" alt="">
                        <span class="image-fader">
                                <span class="hover-icon">
                                    <a href="javascript:void(0);"><i class="fa fa-play"></i></a>
                                </span>
                            </span>
                        <span class="video-time">3:00</span>
                    </div>
                    <h3>طريقة عمل كبدة بدبس الرمان</h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End wideo_box -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="col-video">
                    <div class="photo">
                        <img src="http://placehold.it/450x300" alt="">
                        <span class="image-fader">
                                <span class="hover-icon">
                                    <a href="javascript:void(0);"><i class="fa fa-play"></i></a>
                                </span>
                            </span>
                        <span class="video-time">5:20</span>
                    </div>
                    <h3>طريقة عمل كبدة بدبس الرمان</h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End wideo_box -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="col-video">
                    <div class="photo">
                        <img src="http://placehold.it/450x300" alt="">
                        <span class="image-fader">
                                <span class="hover-icon">
                                    <a href="javascript:void(0);"><i class="fa fa-play"></i></a>
                                </span>
                            </span>
                        <span class="video-time">8:26</span>
                    </div>
                    <h3>طريقة عمل كبدة بدبس الرمان</h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End wideo_box -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="col-video">
                    <div class="photo">
                        <img src="http://placehold.it/450x300" alt="">
                        <span class="image-fader">
                                <span class="hover-icon">
                                    <a href="javascript:void(0);"><i class="fa fa-play"></i></a>
                                </span>
                            </span>
                        <span class="video-time">8:26</span>
                    </div>
                    <h3>طريقة عمل كبدة بدبس الرمان</h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End wideo_box -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="col-video">
                    <div class="photo">
                        <img src="http://placehold.it/450x300" alt="">
                        <span class="image-fader">
                                <span class="hover-icon">
                                    <a href="javascript:void(0);"><i class="fa fa-play"></i></a>
                                </span>
                            </span>
                        <span class="video-time">8:26</span>
                    </div>
                    <h3>طريقة عمل كبدة بدبس الرمان</h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End wideo_box -->
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="col-video">
                    <div class="photo">
                        <img src="http://placehold.it/450x300" alt="">
                        <span class="image-fader">
                                <span class="hover-icon">
                                    <a href="javascript:void(0);"><i class="fa fa-play"></i></a>
                                </span>
                            </span>
                        <span class="video-time">8:26</span>
                    </div>
                    <h3>طريقة عمل كبدة بدبس الرمان</h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End wideo_box -->
            </div>
            <div class="col-md-12">
                <div class="text-center">
                    <a class="button-browse-more" href="#">تصفح المزيد من الفيديو</a>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->

    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2 class="nomargin_top">المدونة</h2>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                <hr class="divider">
            </div><!-- End main_title -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <ul class="recent-posts">
                        <li>
                            <div class="photo">
                                <img src="http://placehold.it/400x400" alt="">
                                <span class="image-fader"><span class="hover-icon"><a href="blog-single.html"><i class="fa fa-plus"></i></a></span></span>
                            </div>
                            <div class="inner">
                                <h3>هذا النص هو مثال لنص يمكن أن يستبدل</h3>
                                <ul class="stars">
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                </ul><!-- End stars -->
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                <a href="blog-single.html" class="button-more">أكمل القراءة &raquo;</a>
                            </div><!-- End inner -->
                        </li><!-- End item -->
                        <li>
                            <div class="photo">
                                <img src="http://placehold.it/400x400" alt="">
                                <span class="image-fader"><span class="hover-icon"><a href="blog-single.html"><i class="fa fa-plus"></i></a></span></span>
                            </div>
                            <div class="inner">
                                <h3>هذا النص هو مثال لنص يمكن أن يستبدل</h3>
                                <ul class="stars">
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                </ul><!-- End stars -->
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                <a href="blog-single.html" class="button-more">أكمل القراءة &raquo;</a>
                            </div><!-- End inner -->
                        </li><!-- End item -->
                        <li>
                            <div class="photo">
                                <img src="http://placehold.it/400x400" alt="">
                                <span class="image-fader"><span class="hover-icon"><a href="blog-single.html"><i class="fa fa-plus"></i></a></span></span>
                            </div>
                            <div class="inner">
                                <h3>هذا النص هو مثال لنص يمكن أن يستبدل</h3>
                                <ul class="stars">
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                </ul><!-- End stars -->
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                <a href="blog-single.html" class="button-more">أكمل القراءة &raquo;</a>
                            </div><!-- End inner -->
                        </li><!-- End item -->
                    </ul><!-- End recent-posts -->
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <ul class="recent-posts">
                        <li>
                            <div class="photo">
                                <img src="http://placehold.it/400x400" alt="">
                                <span class="image-fader"><span class="hover-icon"><a href="blog-single.html"><i class="fa fa-plus"></i></a></span></span>
                            </div>
                            <div class="inner">
                                <h3>هذا النص هو مثال لنص يمكن أن يستبدل</h3>
                                <ul class="stars">
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                </ul><!-- End stars -->
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                <a href="blog-single.html" class="button-more">أكمل القراءة &raquo;</a>
                            </div><!-- End inner -->
                        </li><!-- End item -->
                        <li>
                            <div class="photo">
                                <img src="http://placehold.it/400x400" alt="">
                                <span class="image-fader"><span class="hover-icon"><a href="blog-single.html"><i class="fa fa-plus"></i></a></span></span>
                            </div>
                            <div class="inner">
                                <h3>هذا النص هو مثال لنص يمكن أن يستبدل</h3>
                                <ul class="stars">
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                </ul><!-- End stars -->
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                <a href="blog-single.html" class="button-more">أكمل القراءة &raquo;</a>
                            </div><!-- End inner -->
                        </li><!-- End item -->
                        <li>
                            <div class="photo">
                                <img src="http://placehold.it/400x400" alt="">
                                <span class="image-fader"><span class="hover-icon"><a href="blog-single.html"><i class="fa fa-plus"></i></a></span></span>
                            </div>
                            <div class="inner">
                                <h3>هذا النص هو مثال لنص يمكن أن يستبدل</h3>
                                <ul class="stars">
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                </ul><!-- End stars -->
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.</p>
                                <a href="blog-single.html" class="button-more">أكمل القراءة &raquo;</a>
                            </div><!-- End inner -->
                        </li><!-- End item -->
                    </ul><!-- End recent-posts -->
                </div>
                <div class="col-md-12">
                    <div class="text-center">
                        <a class="button-browse-more" href="#">تصفح المزيد من التدوينات</a>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End white_bg -->

    <div class="container margin_60">
        <div class="main_title">
            <h2 class="nomargin_top">الكتب</h2>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
            <hr class="divider">
        </div><!-- End main_title -->
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="col-book">
                    <div class="photo">
                        <img src="http://placehold.it/350x450" alt="">
                    </div>
                    <h3><a href="">عنوان الكتاب</a></h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End col-book -->
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="col-book">
                    <div class="photo">
                        <img src="http://placehold.it/350x450" alt="">
                    </div>
                    <h3><a href="">عنوان الكتاب</a></h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End col-book -->
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="col-book">
                    <div class="photo">
                        <img src="http://placehold.it/350x450" alt="">
                    </div>
                    <h3><a href="">عنوان الكتاب</a></h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End col-book -->
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="col-book">
                    <div class="photo">
                        <img src="http://placehold.it/350x450" alt="">
                    </div>
                    <h3><a href="">عنوان الكتاب</a></h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End col-book -->
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="col-book">
                    <div class="photo">
                        <img src="http://placehold.it/350x450" alt="">
                    </div>
                    <h3><a href="">عنوان الكتاب</a></h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End col-book -->
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="col-book">
                    <div class="photo">
                        <img src="http://placehold.it/350x450" alt="">
                    </div>
                    <h3><a href="">عنوان الكتاب</a></h3>
                    <ul class="stars">
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                        <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                    </ul><!-- End stars -->
                </div><!-- End col-book -->
            </div>
            <div class="col-md-12">
                <div class="text-center">
                    <a class="button-browse-more" href="#">تصفح المزيد من الكتب</a>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->

    <div class="white_bg">
        <div class="container margin_60">
            <div class="main_title">
                <h2 class="nomargin_top">افضل الطهاة</h2>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                <hr class="divider">
            </div><!-- End main_title -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-chef">
                        <div class="photo">
                            <img src="http://placehold.it/350x450" alt="">
                        </div>
                        <div class="chef-overlay">
                            <h3><a href="#">اسم الطاهي</a></h3>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                        </div><!-- End chef-overlay -->
                    </div><!-- End col-chef -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-chef">
                        <div class="photo">
                            <img src="http://placehold.it/350x450" alt="">
                        </div>
                        <div class="chef-overlay">
                            <h3><a href="#">اسم الطاهي</a></h3>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                        </div><!-- End chef-overlay -->
                    </div><!-- End col-chef -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-chef">
                        <div class="photo">
                            <img src="http://placehold.it/350x450" alt="">
                        </div>
                        <div class="chef-overlay">
                            <h3><a href="#">اسم الطاهي</a></h3>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                        </div><!-- End chef-overlay -->
                    </div><!-- End col-chef -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="col-chef">
                        <div class="photo">
                            <img src="http://placehold.it/350x450" alt="">
                        </div>
                        <div class="chef-overlay">
                            <h3><a href="#">اسم الطاهي</a></h3>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                            <ul class="stars">
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                                <li><a href="#" class="icon"><i class="fa fa-star"></i></a></li>
                            </ul><!-- End stars -->
                        </div><!-- End chef-overlay -->
                    </div><!-- End col-chef -->
                </div>
                <div class="col-md-12">
                    <div class="text-center">
                        <a class="button-browse-more" href="#">تصفح المزيد من الطهاة</a>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End white_bg -->

    <div class="container margin_60">
        <div class="main_title">
            <h2 class="nomargin_top">المنتديات</h2>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
            <hr class="divider">
        </div><!-- End main_title -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="col-community">
                    <div class="thumb">
                        <i class="ic icon-community"></i>
                    </div>
                    <div class="inner">
                        <h3><a href="">تدريبات الطهاة</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                    </div>
                </div><!-- End col-community -->
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="col-community">
                    <div class="thumb">
                        <i class="ic icon-community"></i>
                    </div>
                    <div class="inner">
                        <h3><a href="">وصفات ماكولات الاطفال</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                    </div>
                </div><!-- End col-community -->
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="col-community">
                    <div class="thumb">
                        <i class="ic icon-community"></i>
                    </div>
                    <div class="inner">
                        <h3><a href="">الوصفات السريعة</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                    </div>
                </div><!-- End col-community -->
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="col-community">
                    <div class="thumb">
                        <i class="ic icon-community"></i>
                    </div>
                    <div class="inner">
                        <h3><a href="">نصائح و تقارير</a></h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة</p>
                    </div>
                </div><!-- End col-community -->
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <!-- mobile app -->
    <div class="white_bg">
        <div class="container get-apps">
            <div class="row">
                <div class="col-sm-8 col-md-8">
                    <h3>الحصول على تطبيقات الجوال!</h3>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى</p>
                    <div class="apps-image">
                        <a href="#">
                            <img src="images/ios.png" alt="">
                        </a>
                        <a href="#">
                            <img src="images/android.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 apps-cover">
                    <img src="images/apps.png" alt="">
                </div>
            </div>
        </div>
    </div><!-- End mobile app -->
    <!-- newslatter -->
    <div class="newslatter">
        <div class="container">
            <p>اطلع علي كل جديد دائما معنا. اشترك في النشرة الإخبارية</p>
            <div class="subcribe">
                <input type="text" class="form-control" placeholder="أدخل البريد الإلكتروني الخاص بك">
                <a class="fa fa-paper-plane" href="javascript:void(0);"></a>
            </div>
        </div>
    </div><!-- End newslatter -->



    @endsection