@extends('mainLayout')
@section('main-content')

    <style>




    </style>
    <script>

        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });

        function openNav() {
            document.getElementById("mySidenav").style.width = "99%";
            document.getElementById("products-footer1").style.display = "none"
            document.getElementById("products-footer2").style.display = "block"
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("products-footer1").style.display = "block"
            document.getElementById("products-footer2").style.display = "none"
        }

        function valueChanged() {
//            for desktop size

            $('#rangeCalories').on('input', function () {
                $('#maxCalories').val($('#rangeCalories').val());
            });
            $('#rangeCarb').on('input', function () {
                $('#maxCarb').val($('#rangeCarb').val());
            });
            $('#rangeProten').on('input', function () {
                $('#maxProten').val($('#rangeProten').val());
            });
            $('#rangeFat').on('input', function () {
                $('#maxFat').val($('#rangeFat').val());
            });

//            for mobile size

            $('#rangeCalories1').on('input', function () {
                $('#maxCalories1').val($('#rangeCalories1').val());
            });
            $('#rangeCarb1').on('input', function () {
                $('#maxCarb1').val($('#rangeCarb1').val());
            });
            $('#rangeProten1').on('input', function () {
                $('#maxProten1').val($('#rangeProten1').val());
            });
            $('#rangeFat1').on('input', function () {
                $('#maxFat1').val($('#rangeFat1').val());
            });






        }
        $(window).load(function () {
            valueChanged()
        });

        var flag = true;
        //This function appends the login/register/logout in the top navbar to the dropdown list
        function checksize() {

            if ($(window).width() < 992 && flag) {
                $("#productsSidebar").appendTo("#mySidenav");
            } else if ($(window).width() >= 992) {
                $("#productsSidebar").appendTo("#view-productsSidebar");

            }
        }
        $(window).resize(checksize);
        $(document).ready(function () {
            checksize();

        });




    </script>

    <!-- Start main-content -->
    <div class="main-content">

        <section class="">
            <div class="container mt-30 mb-30 p-30">
                <div class="section-content">
                    <div class="row">
                        <div id="view-productsSidebar" class="col-sm-12 col-md-3">
                            <div id="productsSidebar" class="sidebar sidebar-right mt-sm-30 {{--hidden-xs hidden-sm--}}">
                                <ul id="myTab" class="nav nav-tabs boot-tabs">
                                    <li style="width: 50%" class="active"><a href="#home" data-toggle="tab">تصفية
                                            النتائج</a></li>
                                    <li style="width: 50%"><a href="#profile" data-toggle="tab">تصفية متقدمة</a></li>
                                </ul>
                                {{--start the reguler filter--}}
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        {{--search box--}}
                                        <div class="widget">
                                            <h5 class="widget-title line-bottom">بحث المنتجات</h5>
                                            <div class="search-form">
                                                <form action="/search_home" method="get" role="search">
                                                    {{ csrf_field() }}
                                                    <div class="input-group">
                                                        <input type="text" placeholder="أدخل اسم المنتج"
                                                               class="form-control search-input" name="search-value">
                                                        <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <form action="/update_records" method="get">


                                        {{--calories filter--}}
                                        <div class="widget">
                                            <h5 class="widget-title line-bottom">السعرات الحرارية</h5>
                                            <div id="calories">
                                                <div style="margin-top: 1em" value="0">

                                                    <input id="rangeCalories" name="rangeCalories"  min="0"; start="2000";
                                                           style="width:100%;" type="range"
                                                           max="2000"
                                                           value="2000" onchange="valueChanged()"/>
                                                    <div class="clearfix">
                                                        <input id="maxCalories" name="maxCalories"  value='2000' class="pull-left"
                                                               style="width:50%;text-align: center;" type="number"
                                                               placeholder="max">
                                                        <input id="minCalories" name="minCalories"   value="0" class="pull-right"
                                                               style="width:50%;text-align: center;" type="number"
                                                               placeholder="min">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="widget">
                                            <h5 class="widget-title line-bottom">الكربوهيدرات</h5>
                                            <div id="carb">
                                                <div style="margin-top: 1em" value="0">
                                                    <input id="rangeCarb" name="rangeCarb" style="width:100%;" type="range" min="0" start="2000"
                                                           max="2000"
                                                           value="2000" onchange="valueChanged()"/>
                                                    <div class="clearfix">
                                                        <input id="maxCarb" name="maxCarb" value='2000' class="pull-left"
                                                               style="width:50%;text-align: center;" type="number"
                                                               placeholder="max">
                                                        <input id="minCarb" name="minCarb" value="0" class="pull-right"
                                                               style="width:50%;text-align: center;" type="number"
                                                               placeholder="min">
                                                    </div>
                                                </div>



                                            </div>
                                        </div>


                                        <div class="widget">
                                            <h5 class="widget-title line-bottom">البروتين</h5>
                                            <div id="calories">

                                                <div style="margin-top: 1em" value="0">
                                                    <input id="rangeProten" name="rangeProten" style="width:100%;" type="range" min="0"
                                                           max="2000"
                                                           value="2000" onchange="valueChanged()"/>
                                                    <div class="clearfix">
                                                        <input id="maxProten" name="minProten" value='2000' class="pull-left"
                                                               style="width:50%;text-align: center;" type="number"
                                                               placeholder="max">
                                                        <input id="minProten"  name="maxProten" value="0" class="pull-right"
                                                               style="width:50%;text-align: center;" type="number"
                                                               placeholder="min">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="widget">
                                            <h5 class="widget-title line-bottom">الدهون</h5>
                                            <div id="calories">
                                                <div style="margin-top: 1em" value="0">
                                                    <input id="rangeFat" name="rangeFat" style="width:100%;" type="range" min="0"
                                                           max="2000"
                                                           value="2000" onchange="valueChanged()"/>
                                                    <div class="clearfix">
                                                        <input id="maxFat" name="minFat" value='2000' class="pull-left"
                                                               style="width:50%;text-align: center;" type="number"
                                                               placeholder="max">
                                                        <input id="minFat" name="maxFat" value="0" class="pull-right"
                                                               style="width:50%;text-align: center;" type="number"
                                                               placeholder="min">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <button type="submit" style="width: 100%">أظهر نتائج التصفية
                                            </button>
                                            <input type="text"  style="display: block" value="{{$value}}" name="search-value">
                                            <meta name="csrf-token" content="{{ csrf_token() }}" />
                                        </form>

                                    </div>

                                    {{--start the advance filter--}}
                                    <div class="tab-pane fade" id="profile">
                                        <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin
                                            coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next
                                            level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                            photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts
                                            ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore
                                            aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna
                                            velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson
                                            8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson
                                            biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui
                                            sapiente accusamus tattooed echo park.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-9">
                            <div class="row multi-row-clearfix">
                                <div class="products">



                                    @unless($products->isEmpty())
                                        @foreach($products as $product)
                                    <div class="col-sm-6 col-md-4 col-lg-4 mb-30" style="z-index: 0" id="single-product">

                                        <div class="product">
                                            <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="product-details text-center">
                                                <a href="#"><h5 class="product-title">{{$product->name}}</h5></a>
                                                <div class="star-rating" title="Rated 5.00 out of 5"><span style="width: 100%;">5.00</span></div>
                                                <div class="price"><del><span class="amount">$364.00</span></del><ins><span class="amount">$344.00</span></ins></div>
                                                <div class="btn-add-to-cart-wrapper">
                                                    <a class="btn btn-default btn-xs btn-add-to-cart" href="#">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                         @endforeach
                                    @endunless

                                    <div class="col-md-12">
                                        <nav>
                                            <ul class="pagination theme-colored">
                                                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li><a href="#">...</a></li>
                                                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="mySidenav" class="sidenav hidden-md hidden-lg" style="margin-top: 57px">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        </div>

        <ul class="ul-footer hidden-md hidden-lg" style="display: block" id="products-footer1">
            <li class="li-footer" style="width:31%;margin: .5% 1% .5% 1%; background-color: #72a230; text-align: center;color:#ffffff;"><a href="#about">ترتيب</a></li>
            <li class="li-footer" style="width:31%;margin: .5% 1% .5% 1%; background-color: #72a230; text-align: center;color:#ffffff;" onclick="openNav()"><a>مصفيات</a></li>
            <li class="li-footer" style="width:31%;margin: .5% 1% .5% 1%; background-color: #72a230; text-align: center;color:#ffffff;margin-bottom:5px"><a href="#about">اذهب للأعلى</a></li>
        </ul>

        <ul class="ul-footer hidden-md hidden-lg" style="display: none" id="products-footer2">
            <li class="li-footer" style="width:46%;margin: .5% 1% .5% 1%; background-color: #72a230; text-align: center;color:#ffffff;"><a href="#about">أظهر النتائج</a></li>
            <li class="li-footer" style="width:46%;margin: .5% 1% .5% 1%; background-color: #72a230; text-align: center;color:#ffffff;"><a href="#about">فرع المصفيات</a></li>
        </ul>
    </div>
    <!-- end main-content -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>




    @endsection