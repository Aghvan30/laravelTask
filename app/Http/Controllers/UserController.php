<?php

namespace App\Http\Controllers;

use App\Models\Attributes;
use App\Models\AttributeVelue;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\Cars;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        try {
            $cars = Cars::orderBy('created_at', 'desc')->paginate(3);;
            $brands = Brand::get();
            $models = CarModel::get();

            return view('dashboards.user.index', ['cars' => $cars, 'brands' => $brands, 'models' => $models]);
        } catch (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }


    }

    public function main()
    {
        return view('user.dashboard');
    }


    public function brands($id)
    {

        try {
            $brands = Brand::get();
            $cars = Cars::where(['brand_id' => $id])->paginate(3);
            $models = CarModel::get();
            return view('dashboards.user.brand', ['brands' => $brands, 'cars' => $cars, 'models' => $models]);
        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }

    public function models($id)
    {
        try {
            $brands = Brand::get();
            $cars = Cars::where(['cars_model_id' => $id])->paginate(3);
            $models = CarModel::get();
            return view('dashboards.user.models', ['brands' => $brands, 'cars' => $cars, 'models' => $models]);

        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }
}
