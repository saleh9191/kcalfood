@extends('mainLayout')
@section('main-content')

    <style>
        .form-group {
            margin:0;
            padding:20px ;

        }

        .form-control {
            padding: 0px 10px 0 20px;
            margin-top: 10px;
            color: #333;
            font-size: 28px;
            font-weight: 500;
            border: 3px solid #555;
            -webkit-box-shadow: none;
            box-shadow: none;
            min-height:60px;
            height: auto;
            border-left: none;
            border-radius: 0px 50px  50px 0px !important;
        }
        .form-control :focus {
            -webkit-box-shadow: none;
            box-shadow: none;
            border-color: transparent;

        }

        #searchbtn
        { border:0;
            padding: 0px 10px;
            margin-top: 10px;
            color: #fff;
            background:#888;
            font-size: 27px;
            font-weight: 500;
            border: 3px solid #555;
            -webkit-box-shadow: none;
            box-shadow: none;
            min-height:60px;
            height: auto;
            border-radius: 50px 0px 0px 50px !important;
        }
    </style>

    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header parallax layer-overlay" data-bg-img="">
            <div class="container pt-100 pb-50">
                <!-- Section Content -->

                <div class="container">
                    <h1 class=text-center>١٣٤٠ منتج مع معلوماتها الغذائية</h1><br><hr>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                            @if(isset($message))
                                <p>{{ $message }}</p>
                            @endif
                            <form action="/search_home" method="get" role="search">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input class="form-control" placeholder="أدخل اسم المنتج ..." name="search-value" id="ed-srch-term" type="text">
                                    <div class="input-group-btn">
                                        <button type="submit" id="searchbtn">
                                            بحث</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-content pt-100">

                </div>
            </div>

        </section>
        <!-- section:  -->
        <section id="whychoose" data-bg-img="images/pattern/p8.png">
            <div class="container-fluid p-0">
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 p-0 mb-xs-30">
                            <div class="img-icon-box text-center divider mt-sm-0" data-bg-img="http://placehold.it/460x250">
                                <div class="img-icon-details pt-50">
                                    <i class="flaticon-nutrition-vegetables-hand-drawn-basket font-72"></i>
                                    <h4 class="title text-uppercase font-weight-400"><a class="text-white" href="#">الحليب ومشتقاته</a></h4>
                                    <div class="img-icon-content pl-40 pr-40">
                                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi sapiente ex debitis quis dolorum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 p-0 mb-xs-30">
                            <div class="img-icon-box text-center divider mt-sm-0" data-bg-img="http://placehold.it/460x250">
                                <div class="img-icon-details pt-50">
                                    <i class="flaticon-nutrition-food-plate-hand-drawn-lunch font-72"></i>
                                    <h4 class="title text-uppercase font-weight-400"><a class="text-white" href="#">الدواجن واللحوم</a></h4>
                                    <div class="img-icon-content pl-40 pr-40">
                                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi sapiente ex debitis quis dolorum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 p-0 mb-xs-30">
                            <div class="img-icon-box text-center divider mt-sm-0" data-bg-img="http://placehold.it/460x250">
                                <div class="img-icon-details pt-50">
                                    <i class="flaticon-nutrition-grape-bunch font-72"></i>
                                    <h4 class="title text-uppercase font-weight-400"><a class="text-white" href="#">المشروبات بأنواعها</a></h4>
                                    <div class="img-icon-content pl-40 pr-40">
                                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi sapiente ex debitis quis dolorum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 p-0 mb-xs-30">
                            <div class="img-icon-box text-center divider mt-sm-0 " data-bg-img="http://placehold.it/460x250">
                                <div class="img-icon-details pt-50">
                                    <i class="flaticon-gym-female-gymnast-measuring-her-waist font-72"></i>
                                    <h4 class="title text-uppercase font-weight-400"><a class="text-white" href="#">القمحيات والمعجنات</a></h4>
                                    <div class="img-icon-content pl-40 pr-40">
                                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi sapiente ex debitis quis dolorum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section:  -->
        <section id="whychoose" data-bg-img="images/pattern/p8.png">
            <div class="container-fluid p-0">
                <div class="section-content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 p-0 mb-xs-30">
                            <div class="img-icon-box text-center divider mt-sm-0" data-bg-img="http://placehold.it/460x250">
                                <div class="img-icon-details pt-50">
                                    <i class="flaticon-nutrition-vegetables-hand-drawn-basket font-72"></i>
                                    <h4 class="title text-uppercase font-weight-400"><a class="text-white" href="#">المطاعم السريعة</a></h4>
                                    <div class="img-icon-content pl-40 pr-40">
                                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi sapiente ex debitis quis dolorum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 p-0 mb-xs-30">
                            <div class="img-icon-box text-center divider mt-sm-0" data-bg-img="http://placehold.it/460x250">
                                <div class="img-icon-details pt-50">
                                    <i class="flaticon-nutrition-food-plate-hand-drawn-lunch font-72"></i>
                                    <h4 class="title text-uppercase font-weight-400"><a class="text-white" href="#">الحمية الغذائية</a></h4>
                                    <div class="img-icon-content pl-40 pr-40">
                                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi sapiente ex debitis quis dolorum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 p-0 mb-xs-30">
                            <div class="img-icon-box text-center divider mt-sm-0" data-bg-img="http://placehold.it/460x250">
                                <div class="img-icon-details pt-50">
                                    <i class="flaticon-nutrition-grape-bunch font-72"></i>
                                    <h4 class="title text-uppercase font-weight-400"><a class="text-white" href="#">الخضار والفواكة</a></h4>
                                    <div class="img-icon-content pl-40 pr-40">
                                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi sapiente ex debitis quis dolorum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3 p-0 mb-xs-30">
                            <div class="img-icon-box text-center divider mt-sm-0 " data-bg-img="http://placehold.it/460x250">
                                <div class="img-icon-details pt-50">
                                    <i class="flaticon-gym-female-gymnast-measuring-her-waist font-72"></i>
                                    <h4 class="title text-uppercase font-weight-400"><a class="text-white" href="#">الحلويات والمكسرات</a></h4>
                                    <div class="img-icon-content pl-40 pr-40">
                                        <p class="text-gray-lighter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est modi, saepe hic esse maxime quasi sapiente ex debitis quis dolorum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>






@endsection