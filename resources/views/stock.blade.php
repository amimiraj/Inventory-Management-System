

@extends('welcome')
@section('master-content')


<!-- BEGIN PAGE CONTAINER-->
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
                STOCK
            </h3>
            <ul class="breadcrumb">     
                <li>                  
                </li>
                <li class="pull-right search-wrap">
                    <form action="" class="hidden-phone">
                        <div class="input-append search-input-area">
                            <input class="" id="appendedInputButton" type="text">
                            <button class="btn" type="button"><i class="icon-search"></i> </button>
                        </div>
                    </form>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>




    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN BASIC PORTLET-->
            <div class="widget orange">

                <div class="widget-body">
                    <table class="table table-striped table-bordered table-advance table-hover">
                        <thead>
                            <tr>
                                <th> Product Code</th>
                                <th >Product NAME</th>
                                <th >Brand NAME</th>
                                <th >Supplier NAME</th>
                                <th>Product Quantity</th>
                                <th>Purchase Price</th>
                                <th>Sale Price</th> 
                                <th>Email Status</th>                                                   
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($purchase as $value)
                            <tr>
                                <td>{{$value->purchase_id}}</td>                                            
                                <td>{{$value->product_name}}</td>                                            
                                <td>{{$value->brand_name}}</td>                                            
                                <td>{{$value->supplier_name}}</td>                                            
                                <td>{{$value->product_quantity}}</td>                                                                                                                                            
                                <td>{{$value->purchase_price}}</td>                                                                       
                                <td>{{$value->sale_price}}</td>   
                                <td>{{$value->email_status}}</td>                                                                      
                            </tr>  
                            @endforeach                                                                         
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END BASIC PORTLET-->
        </div>
    </div>
</div>


@endsection