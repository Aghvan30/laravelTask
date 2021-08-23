@extends('dashboards.admin.layouts.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        @if (Session::has('danger'))
                            <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                        @endif

                        <h1>{{__('messages.add_model')}}</h1>

                        <form action="{{url('admin/add_model')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="models" class="control-label">{{__('messages.model')}}</label>
                                <input type="text" class="form-control  @error('models') is-invalid @enderror" name="models" placeholder="{{__('messages.model')}}" value="{{old('models')}}">
                                @error('models')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="brand" class="control-label">{{__('messages.brand')}}</label>
                                <select  name='brand_id' class="form-control">
                                    <option value="">{{__('messages.brand')}}</option>
                                    @if(!empty($brands))
                                        @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


