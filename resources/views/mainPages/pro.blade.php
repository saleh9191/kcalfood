@extends('mainLayout')
@section('main-content')



    <script src={{asset('js/searchAJAX.js')}}></script>
    <div class="container" style="min-height: 500px">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" role="form" method="POST" action="/searchDo">
                    <div class="input-group" id="adv-search">
                        <input type="text" name="search" class="form-control" placeholder="Search" id="search"/>
                        <div class="input-group-btn">
                            <div class="btn-group" role="group">
                                <div class="dropdown">
                                    <select name="type" style="height:34px" class="btn-sm" id="type">
                                        <option value="physicians">Physician</option>
                                        <option value="hospitals">Hospital</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                </form>
                <br>
                <div class="row">
                    <div style="display: inline-block">
                        <div id="result" style="padding: 30px">
                            <h1 style="font-size: 100px;color: #9d9d9d">Type your search query</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection