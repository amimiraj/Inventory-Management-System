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
                ADD PURCHASE
            </h3>
            <ul class="breadcrumb">            
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!------------------------------------------------------------------------------------------------------------------->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <div class="span12">
            <div class="widget box green">

                <div class="widget-body">


                    <form class="form-horizontal" action="{{url('/savePurchase')}}" method="post">
                        @csrf
                        <div class="tab-pane" id="pills-tab1" style="margin:12% 0% 10% 20%;">

                            <div class="control-group">
                                <label class="control-label">Product Name :</label>
                                <div class="controls">
                                    <select class="span8 chzn-select" name="product_name" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Not Selected">Select Product</option>
                                        @foreach($product as $value)           
                                        <option value="{{$value->product_name}}">{{$value->product_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Brand Name :</label>
                                <div class="controls">
                                    <select class="span8 chzn-select" name="brand_name" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="">Select Brand</option>
                                        @foreach($brand as $value)
                                        <option value="{{$value->brand_name}}">{{$value->brand_name}}</option>
                                        @endforeach                              
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Supplier Number :</label>
                                <div class="controls">
                                    <select class="span8 chzn-select" name="supplier_name" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="">Select Supplier</option>
                                        @foreach($supplier as $value)
                                        <option value="{{$value->supplier_name}}">{{$value->supplier_name}}</option>
                                        @endforeach                          
                                    </select>
                                </div>

                            </div>

                            <div class="control-group">
                                <label class="control-label">Quantity Number :</label>
                                <div class="controls">
                                    <input type="number" name="product_quantity" class="span8" id="" placeholder=" Quantity " required="">                                            
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Purchase Price :</label>
                                <div class="controls">
                                    <input type="number" name="purchase_price" class="span8" id="" placeholder="Purchase Price" required="">                                            
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Sale Price :</label>
                                <div class="controls">
                                    <input type="number" name="sale_price" class="span8" id="" placeholder=" Sale Price " required="">                                            
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary" style="margin-left:65%; margin-bottom:8px;">SUBMIT</button>
                        </div>                                                    
                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->

</div>
<!-- END PAGE CONTAINER-->



@endsection


