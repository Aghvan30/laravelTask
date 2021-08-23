@extends('dashboards.admin.layouts.main')

@section('content')



    <div class="container bootdey">
        <div class="col-md-12">
            <section class="panel">
                @if(!empty($views))
                    @foreach($views as $view)
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="pro-img-details">
                            <img src="{{asset('upload/car/'.$view->image)}}"style="width: 500px;height: 450px" alt="">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h4 class="pro-d-title">
                            <a href="#" class="">
                                {{$view->brands->name}}
                            </a>
                        </h4>
                    </div>
                    <div class="col-md-6">
                        <h4 class="pro-d-title">
                            <a href="#" class="">
                                {{$view->models->name}}
                            </a>
                        </h4>
                    </div>
                </div>
                    @endforeach
                @endif
            </section>
        </div>
    </div>
@endsection
