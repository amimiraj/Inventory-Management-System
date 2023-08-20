@extends('welcome')
@section('master-content')


<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">



        <div class="span12">
            <!-- BEGIN THEME CUSTOMIZER-->
            <div id="theme-change" class="hidden-phone">
                <i class="icon-cogs"></i>
                <span class="settings">
                    <span class="text">Theme Color:</span>
                    <span class="colors">
                        <span class="color-default" data-style="default"></span>
                        <span class="color-green" data-style="green"></span>
                        <span class="color-gray" data-style="gray"></span>
                        <span class="color-purple" data-style="purple"></span>
                        <span class="color-red" data-style="red"></span>
                    </span>
                </span>
            </div>
            <!-- END THEME CUSTOMIZER-->
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->


           


            <h3 class="page-title">
                Dashboard 
            </h3>
            <ul class="breadcrumb">  
            </ul>


            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <!--BEGIN METRO STATES-->
        <div class="metro-nav">
            <div class="metro-nav-block nav-block-orange">
                <a data-original-title="" href="#">
                    <i class="icon-user"></i>
                    <div class="info">{{ Auth::user()->name }}</div>
                </a>
            </div>
            <div class="metro-nav-block nav-block-blue">
                <a data-original-title="" href="#">
                    <div style="font-size: large; margin-top:10px;"><b>TODAY'S SALE</b></div>  
                    <div class="info">{{$todaySale}}</div>
                </a>
            </div>
            <div class="metro-nav-block nav-block-red">
                <a data-original-title="" href="#">
                    <div style="font-size: large; margin-top:10px;"><b>THIS MONTHS'S SALE</b></div>  
                    <div class="info">{{$thisMonthSale}}</div>
                </a>
            </div>
            <div class="metro-nav-block nav-block-blue double">
                <a data-original-title="" href="#">
                    <div style="font-size: large; margin-top:10px;"><b>TODAY'S PROFIT</b></div>  
                    <div class="info">{{$todayProfit}}</div>               
                </a>
            </div>
            <div class="metro-nav-block nav-block-red">
                <a data-original-title="" href="#">
                    <div style="font-size: large; margin-top:10px;"><b>THIS MONTH'S PROFIT</b></div>  
                    <div class="info">{{$thisMonthProfit}}</div>
                   
                </a>
            </div>
        </div>
        <div class="metro-nav">
            <div class="metro-nav-block nav-block-blue">
                <a data-original-title="" href="{{url('/purchase')}}">
                    <i class="icon-shopping-cart"></i>
                    <div class="info">PURCHASE</div>
                </a>
            </div>
            <div class="metro-nav-block nav-block-green double">
                <a data-original-title="" href="{{url('/stock')}}">
                    <i class="icon-tasks"></i>
                    <div class="info">STOCK</div>
                </a>
            </div>
            <div class="metro-nav-block nav-block-orange">
                <a data-original-title="" href="{{url('/report')}}">
                    <i class="icon-th-list"></i>
                    <div class="info">REPORT</div>

                </a>
            </div>
            <div class="metro-nav-block nav-block-purple">
                <a data-original-title="" href="{{url('/sale')}}">
                    <i class="icon-tags"></i>
                    <div class="info">SALE</div>
                </a>
            </div>
            <div class="metro-nav-block nav-block-grey ">
                <a data-original-title="" href="#">
                    <i class="icon-envelope"></i>
                    <div class="info">MESSAGE</div>
                </a>
            </div>
        </div>
        <div class="space10"></div>
        <!--END METRO STATES-->
    </div>
      
</div>
<!-- END PAGE CONTAINER-->

@endsection