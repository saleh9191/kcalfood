@extends('mainLayout')
@section('content')

    <style>

        @media screen and (max-height: 992px) {
            #productsSide {
                display: none
            }

            #productsFooter {
                display: block;
            }
        }

        @media (min-width: 992px) {
            #productsSide {
                display: block
            }

            #productsFooter {
                display: none;
            }
        }




    </style>






    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="http://placehold.it/1400x300"
             data-natural-width="1400" data-natural-height="300">
        <div id="sub_header">
            <div class="container" id="sub_content">
                <div class="row">
                    <div class="col-md-12">
                        <h1>الفواكه</h1>
                        <h3>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</h3>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div>
    </section>
    <!-- End SubHeader -->

    <div class="white_bg">
        <div class="container margin_60">
            <div class="row">
                <div id="productsSide">
                    <aside class="col-md-3 sidebar sticky-sidebar">
                        <div class="theiaStickySidebar">
                            <div class="widget widget-filter">
                                <div class="widget-title">
                                    <i class="fa fa-filter"></i>بحث
                                </div>
                                <input type="search">
                            </div>
                            <div class="widget widget-filter">
                                <div class="widget-title">
                                    <i class="fa fa-filter"></i> تصفية المنتجات
                                </div>
                                <div class="products-filter">
                                    <input id="range_slider"/>
                                </div>
                            </div><!-- End widget Filter -->
                        </div>
                    </aside>
                </div>
                <!-- End sidebar -->
                <div class="col-md-9">

                    <div class="row" style="padding-bottom:10px">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">توت العُليق</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$45.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_cart_alt"></i> أضف إلى السلة</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">مشمش الخوخ</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$52.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="fa fa-eye"></i> عرض التفاصيل</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">رمان</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$64.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_cart_alt"></i> أضف إلى السلة</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">توت اسود</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$40.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_adjust-horiz"></i> حدد الخيارات</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">الكيوى</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$37.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_cart_alt"></i> أضف إلى السلة</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">فراولة</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$30.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_adjust-horiz"></i> حدد الخيارات</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">اناناس</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$43.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_cart_alt"></i> أضف إلى السلة</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">موز ناضج</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$22.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_adjust-horiz"></i> حدد الخيارات</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">عنب الثور</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$32.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_cart_alt"></i> أضف إلى السلة</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">مشمش الخوخ</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$28.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_adjust-horiz"></i> حدد الخيارات</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">توت</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$27.00</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_cart_alt"></i> أضف إلى السلة</a>
                            </div>
                        </div>
                        <!-- END product-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                                <a href="single-product.html">
                                    <div class="product-image">
                                        <img src="http://placehold.it/250x230" alt=""/>
                                    </div>
                                </a>
                                <a href="single-product.html">
                                    <h3 class="product-title">زبيب</h3>
                                </a>
                                <div class="product-ratings">
                                    <ul class="stars">
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                        <li class="active"><a href="#" class="icon"><i class="fa fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <span class="product-amount">$31.50</span>
                                </div>
                                <a href="javascript:void(0);" class="button add-to-cart-button"><i
                                            class="icon_adjust-horiz"></i> حدد الخيارات</a>
                            </div>
                        </div>

                    </div>

                    <!-- END product-item -->
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <nav class="navigation pagination">
                            <div class="nav-links">
                                <a class="prev page-numbers">Previous</a>
                                <span class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="page-numbers" href="#">4</a>
                                <a class="page-numbers" href="#">5</a>
                                <a class="next page-numbers" href="#">Next</a>
                            </div>
                        </nav><!-- END pagination -->
                    </div>
                </div>
            </div>

        </div>
        <div id="productsFooter"class="navbar navbar-inverse navbar-fixed-bottom" style="border-color: #fff">
            <div class="container">
                <div class="navbar-collapse collapse" id="footer-body" style="max-height: 100%;background-color: #7daf74;">
                    <ul class="nav navbar-nav">
                        <div class="widget widget-filter">
                            <div class="widget-title">
                                <i class="fa fa-filter"></i> تصفية المنتجات
                            </div>
                            <div class="products-filter">
                                <input id="range_slider"/>
                            </div>
                        </div><!-- End widget Filter -->
                        <div class="widget widget-filter">
                            <div class="widget-title">
                                <i class="fa fa-filter"></i> تصفية المنتجات
                            </div>
                            <div class="products-filter">
                                <input id="range_slider"/>
                            </div>
                        </div><!-- End widget Filter -->
                        <div class="widget widget-filter" style="">
                            <div class="widget-title">
                                <i class="fa fa-filter"></i> تصفية المنتجات
                            </div>
                            <div class="products-filter">
                                <input id="range_slider"/>
                            </div>
                        </div><!-- End widget Filter -->
                    </ul>
                </div>
                <nav class="navbar-header" style="background-color:#ffffff;">
                        <button style="width:32%;margin: .5% 1% .5% 1%; background-color: #6c9e62; text-align: center;color:#ffffff;"
                            class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">مصفيات
                        </button>
                        <button style="width:32%;margin: .5% 0 .5% 0; background-color: #6c9e62;text-align: center;color:#ffffff;"
                            class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">رتب
                        </button>
                        <button style="width:32%;margin: .5% 1% .5% 1%;background-color: #6c9e62;text-align: center;color:#ffffff;"
                            class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">اذهب للأعلى
                        </button>

                    <button style="display: none;width:45%;margin: .5% 1% .5% 1%; background-color: #6c9e62; text-align: center;color:#ffffff;"
                            class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">فرع المصفيات
                    </button>
                    <button style="display: none;width:45%;margin: .5% 1% .5% 1%; background-color: #6c9e62; text-align: center;color:#ffffff;"
                            class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">أظهر النتائج
                    </button>
                </nav>

            </div>
        </div>

    </div>
    </div>







    <div class="container margin_60">
        <div class="row footer-shop">
            <div class="col-md-3">
                <i class="fa fa-truck"></i>
                <h4>شحن لجميع أنحاء العالم</h4>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-credit-card"></i>
                <h4>الدفع الآمن</h4>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-thumbs-up"></i>
                <h4>تسوق بثقة</h4>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>
            </div>
            <div class="col-md-3">
                <i class="fa fa-life-ring"></i>
                <h4>24/7 مركز المساعدة</h4>
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة.</p>
            </div>
        </div>
    </div>

    <div class="white_bg">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h4>دفع آمن</h4>
                    <p>
                        <img src="images/payment.png" alt="">
                        <br/>
                        قبول جميع انواع بطاقات الائتمان
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <h4>100% دفع آمن</h4>
                    <p>
                        <img src="images/quality.png" alt="">
                    </p>
                </div>
                <div class="col-md-4 text-center">
                    <h4>طريقة الشحن</h4>
                    <p>
                        <img src="images/shipping.png" alt="">
                    </p>
                </div>
            </div>
        </div>
    </div>






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