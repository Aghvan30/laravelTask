<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModelRequest;
use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        try {
            $brands = Brand::get();
            return view('dashboards.admin.model.add_model', ['brands' => $brands]);

        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }

    public function addModel(ModelRequest $request)
    {
        try {
            $request->validated();
            $model = new CarModel();
            $model->name = $request['models'];
            $model->brand_id = $request['brand_id'];
            $model->save();
            return redirect()->back()->with('success', __('messages.success'));
        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }
}
