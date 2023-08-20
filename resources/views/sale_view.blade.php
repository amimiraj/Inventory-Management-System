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
                SALE
            </h3>
            <ul class="breadcrumb">

            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->


    <div style="color:red; font-size:15px;  margin-left:40%"> <?php echo $message; ?> </div>

    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="widget blue">

                <div class="widget-body form">
                    <!-- BEGIN FORM-->
                    <form action="{{url('/addMore')}}" role="form" method="post" class="form-horizontal">
                    @csrf
                        <div class="control-group ">
                            <label class="control-label" for="inputSuccess">Product Code</label>
                            <div class="controls">
                                <input name="product_code" type="text" class="span12" required=""/>                                      
                            </div>
                        </div>

                        <div class="control-group ">
                            <label class="control-label" for="inputError">Quantity</label>
                            <div class="controls">
                                <input name="product_quantity" type="number" class="span12" required="" />
                            </div>
                        </div>


                        <div class="form-actions">
                        <button type="submit" class="btn btn-inverse">ADD</button>
                        </div>
                    </form>
                  
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
    <!-- END PAGE CONTENT--> 
<!-- =================================================================================================== -->


<?php
    $total = 0;
    // $totalPurchase = 0;

    foreach ($order_view as $value) {
        $total = $total + $value->subtotal;
        // $totalPurchase=$totalPurchase+$value->total_purchase_price;

    }
?>



    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN BASIC PORTLET-->
            <div class="widget blue">

                <div class="widget-body">
                    <table class="table table-striped table-bordered table-advance table-hover">
                        <thead>
                            <tr>
                                <th>serial</th>
                                <th>Iteam</th>            
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sub-Total</th>
                                <th>Action</th>                       
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order_view as $value)
                            <tr style=" color:green;">
                                <td >{{$value->order_id}}</td>
                                <td >{{$value->product_name}}</td>
                                <td>{{$value->sale_price}}</td>
                                <td>{{$value->product_quantity}}</td>
                                <td>{{$value->subtotal}}</td>                       
                                <td>
                                    <form method="post" action="{{url('/delete-order')}}" style="margin:0px 0px 0px 0px;" >
                                    @csrf      
                                        <input type="hidden" name="order_id" value="{{$value->order_id}}">
                                        <button type="submit" class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </form>                          
                                </td>
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
                            <tr>
                                                                                                                       
                                 <td>                                                        
                                 <a href="{{url('/confirm-page')}}">    <button  class="btn btn-success" >CONFIRM PURCHASE</button> </a>                                     
                                 </td>
                                 <td></td>                              
                                 <td></td>     
                                 <td></td>        
                                 <td></td>   
                                 <td></td>      
                            </tr>                                                                               
                        </tbody>                                     
                    </table>
                </div>
            </div>
            <!-- END BASIC PORTLET-->
        </div>
    </div>












</div>
<!-- END PAGE CONTAINER-->






@endsection