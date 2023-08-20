

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
                BRAND LIST
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
                                <th >BRAND NAME</th>
                                <th>COUNTRY</th>
                                <th>ACTION</th>                         
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brand as $value)
                            <tr>
                                <td>{{$value->brand_name}}</td>                              
                                <td>{{$value->brand_country}}</td>                 
                                <td>
                                    <form method="post" action="{{url('/editBrand')}}" style="float:left; margin:0px 2px 0px 0px;">
                                        @csrf      
                                        <input type="hidden" name="brand_id" value="{{$value->brand_id}}">
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                    </form>
                                    <form method="post" action="{{url('/deleteBrand')}}" style="margin:0px 0px 0px 0px;">
                                        @csrf      
                                        <input type="hidden" name="brand_id" value="{{$value->brand_id}}">
                                        <button type="submit" class="btn btn-danger"><i class="icon-trash "></i></button>
                                    </form>
                                </td>
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