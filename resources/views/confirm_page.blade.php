@extends('welcome')
@section('master-content')

<?php
$total = 0;
$totalPurchase = 0;

foreach ($order_view as $value) {
    $total = $total + $value->subtotal;
    $totalPurchase=$totalPurchase+$value->total_purchase_price;
}
?>

<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="container-fluid">
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
                CONFIRM PAGE
            </h3>
            <ul class="breadcrumb">

            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->


    <!-- BEGIN PAGE CONTENT-->
    <div class="container-fluid">
        <div class="span12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="widget blue">

                <div class="widget-body form">
                    <!-- BEGIN FORM-->
                    <form style="margin-left: 500px; margin-bottom:8px;" action="{{url('/confirm-order')}}" role="form"
                        method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-md-6">
                            <input type="text" name="customer_phone_number" class="span12" id="customer_phone_number"
                                placeholder="Customer Phone Number" required="">
                        </div>

                        <input type="hidden" name="customer_id" value="{{$order_view[0]->customer_id}}">
                        <input type="hidden" name="iteams" value="{{count($order_view)}}">
                        <input type="hidden" name="total" value="{{$total}}">
                        <input type="hidden" name="total_purchase_price" value="{{$totalPurchase}}">


                        <div class="form-group col-md-6">
                            <select id="product_quantity" name="payment_type" class="span12">
                                <option value="cash" selected>Cash</option>
                                <option value="bkash">Bkash</option>
                                <option value="bkash">Nogod</option>

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" style="margin-left: 19px">Confirm Order</button>

                    </form>

                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
    <!-- END PAGE CONTENT-->
    <!-- ===================================================================================================>


    <!-- <div class="Space_" style="height: 1px; width:100%; background-color:#666666; margin-top:10px;"></div> -->

    <div class="container-fluid">
        <div class="span12">
            <!-- BEGIN BASIC PORTLET-->
            <div class="widget WHITE">

                <div class="widget-body">
                    <table class="table table-striped table-bordered table-advance table-hover">
                        <thead>
                            <tr>
                                <th scope="col">serial</th>
                                <th scope="col">Iteam</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Sub-Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order_view as $value)
                            <tr>
                                <th>{{$value->order_id}}</th>
                                <td>{{$value->product_name}}</td>
                                <td>{{$value->sale_price}}</td>
                                <td>{{$value->product_quantity}}</td>
                                <td>{{$value->subtotal}}</td>
                            </tr>
                            @endforeach
                        </tbody>


                        <tbody>
                            <tr style=" color:green; font-size:large;">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><b>Total :</b></td>
                                <td> {{$total}}</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END BASIC PORTLET-->
        </div>
    </div>


    @endsection