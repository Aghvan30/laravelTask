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

                        <h1>{{__('messages.add_brand')}}</h1>


                        <form action="{{url('admin/add_brand')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="brand" class="control-label">{{__('messages.brand')}}</label>
                                <input type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" placeholder="{{__('messages.brand')}}" value="{{old('brand')}}">
                                @error('brand')
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

