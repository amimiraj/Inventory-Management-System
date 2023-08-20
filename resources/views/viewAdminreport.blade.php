@extends('adminWelcome')
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
              ADMIN REPORT 
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
            <div class="widget info">

                <div class="widget-body">
                    <table class="table table-striped table-bordered table-advance table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Serial</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Iteams</th>
                                <th scope="col">Payment Type</th>
                                <th scope="col">Total Payment</th>
                                <th scope="col">Date</th>
                                <th scope="col">View Iteams</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($report as $value)
                            <tr class="oneline">
                                <th scope="row">{{$value->sale_id}}</th>
                                <th scope="row">{{$value->customer_Phone}}</th>
                                <td>{{$value->iteams}}</td>
                                <td>{{$value->payment_type}}</td>
                                <td>{{$value->total}}</td>
                                <td>{{$value->created_at}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">

                                        <form method="post" action="{{url('/view_iteams_AdminReport')}}">
                                            @csrf
                                            <input type="hidden" name="userId" value="{{$userId}}">
                                            <input type="hidden" name="customer_id" value="{{$value->customer_id}}">
                                            <button type="submit" class="btn btn-outline-info">view</button>
                                        </form>

                                    </div>

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