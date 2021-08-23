@extends('dashboards.admin.layouts.main')

@section('content')

    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">{{ __('messages.car') }}</div>
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('danger'))
                        <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                    @endif
                    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
                    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
                    <div class="card-body">
                        <div border="1" class="table-responsive">
                            <a href="{{url('admin/cars')}}"
                               class="btn btn-primary">{{__('messages.add_car')}}</a>
                            <table class="table table-striped table-bordered" id="dt">

                                <thead class="text-primary">
                                <tr>
                                    <th>ID</th>

                                    <th>{{__('messages.brand')}}</th>
                                    <th>{{__('messages.model')}}</th>
                                    <th>{{__('messages.images')}}</th>
                                    <th>{{__('messages.view')}}</th>
                                    <th>{{__('messages.edit')}}</th>
                                    <th>{{__('messages.delete')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                     @if(!empty($cars))
                                         @foreach($cars as $car)


                                        <tr>
                                            <td>{{$car->id}}</td>



                                            <td>{{$car->brands->name}}</td>

                                            <td>{{$car->models->name}}</td>
                                            <td>
                                                <img src="{{asset('upload/car/'.$car->image)}}" style="width: 100px;height: 100px;">
                                            </td>

                                            <td>
                                                <a href="{{url('admin/view/'.$car->id)}}"
                                                   class="btn btn-primary">{{__('messages.view')}}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('admin/edit_car/'.$car->id)}}"
                                                   class="btn btn-success">{{__('messages.edit')}}</a>
                                            </td>

                                            <td>
                                                <form action="{{url('/admin/delete-car/'.$car->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">{{__('messages.delete')}}</button>
                                                </form>
                                            </td>

                                        </tr>


                                         @endforeach
                                     @endif
                                </tbody>
                                <tfoot class="text-primary">
                                <tr>
                                    <th>ID</th>

                                    <th>{{__('messages.brand')}}</th>
                                    <th>{{__('messages.model')}}</th>
                                    <th>{{__('messages.images')}}</th>
                                    <th>{{__('messages.view')}}</th>
                                    <th>{{__('messages.edit')}}</th>
                                    <th>{{__('messages.delete')}}</th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

