@extends('layouts.app')

@section('content')

<div class="shop-box-inner">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                <div class="product-categori">


                    <div class="filter-sidebar-left">
                        <div class="title-left">
                            <h3>{{__('messages.car')}}</h3>
                        </div>
                        <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">{{__('messages.brand')}}<small class="text-muted"></small>
                                </a>
                                <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                    <div class="list-group">
                                        @if(!empty($brands))
                                            @foreach($brands as $brand)
                                        <a href="{{url('user/brands/'.$brand->id)}}" class="list-group-item list-group-item-action active"> {{$brand->name}}<small class="text-muted"></small></a>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                            <div class="list-group-collapse sub-men">
                                <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">{{__('messages.model')}}<small class="text-muted"></small>
                                </a>
                                <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                    <div class="list-group">
                                        @if(!empty($models))
                                            @foreach($models as $model)
                                        <a href="{{url('user/models/'.$model->id)}}" class="list-group-item list-group-item-action active">{{$model->name}}<small class="text-muted"></small></a>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                <div class="right-product-box">
                    <div class="row product-categorie-box">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                <div class="row">
                                    @if(!empty($cars))
                                        @foreach($cars as $car)
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">

                                                </div>
                                                <img src="{{asset('upload/car/'.$car->image)}}" class="img-fluid" alt="Image">
                                                <div class="mask-icon">

                                                </div>
                                            </div>
                                            <div class="why-text">
                                                <h4>{{$car->brands->name}}</h4>
                                                <h5>{{$car->models->name}}</h5>

                                            </div>
                                        </div>
                                    </div>

                                        @endforeach
                                    @endif

                            </div>

                        </div>

                    </div>

                </div>
            </div>
                <div class="d-flex justify-content-center">
                {{$cars->links()}}
                </div>
        </div>
    </div>
</div>

@endsection
