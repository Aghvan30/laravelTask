@extends('dashboards.admin.layouts.main')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Dashboard') }}</div>

                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('danger'))
                    <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                @endif

                <h1>{{__('messages.add_car')}}</h1>


                <form action="{{url('admin/add-cars')}}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group">
                        <label for="brand" class="control-label">{{__('messages.brand')}}</label>
                        <select name='brand' id="brand" class="form-control">

                            <option value="">{{__('messages.brand')}}</option>
                            @if(!empty($brands['data']))
                                @foreach($brands['data'] as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="model" class="control-label">{{__('messages.model')}}</label>
                        <select class="form-control" name="model" id="model">
                            <option value="0">{{__('messages.model')}}</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image" class="control-label">{{__('messages.images')}}</label>
                        <input type="file" name='image' class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>


@endsection

