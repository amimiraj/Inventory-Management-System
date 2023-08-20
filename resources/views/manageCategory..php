@extends('Welcome')
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
                ADD SUPPLIER
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
                    
                    
                    <form class="form-horizontal" action="#">
                        @csrf
                        <div class="tab-pane" id="pills-tab1" style="margin:12% 0% 10% 20%;">

                            <div class="control-group">
                                <label class="control-label">Supplier Name :</label>
                                <div class="controls">
                                 <input type="text" name="category_name" class="span8" id="" placeholder=" Write Supplier Name" required="">                            
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Phone Number :</label>
                                <div class="controls">
                                    <input type="number" name="category_name" class="span8" id="" placeholder=" Write Phone Number" required="">                                            
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


