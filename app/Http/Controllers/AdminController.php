<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\Cars;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        try {

            $cars = Cars::get();

            return view('dashboards.admin.index', ['cars' => $cars]);


        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }

    }


    public function cars()
    {
        try {
            $brands['data'] = Brand::orderby("name", "asc")
                ->select('id', 'name')
                ->get();
            return view('dashboards.admin.add_cars', ['brands' => $brands]);


        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }


    public function models($model_valueid = 0)
    {

        try {


            $models['data'] = CarModel::orderby("name", "asc")
                ->select('id', 'name')
                ->where('brand_id', $model_valueid)
                ->get();

            return response()->json($models);

        } catch (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }


    }

    public function addCars(CarRequest $request)
    {
       try{

       $request->validated();

            $cars = new Cars();

            $cars->brand_id = $request['brand'];
            $cars->cars_model_id = $request['model'];
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('upload/car', $fileName);
                $cars->image = $fileName;
            }
            $cars->save();
            return redirect('/admin/dashboard')->with('success', __('messages.success'));;
       } catch
       (\Throwable $e) {
           (report($e));
           return redirect()->back()->with('danger', __('messages.error'));
       }

    }

    public function editCar($id)
    {

        try {
            $edits = Cars::find($id);

            $brands['data'] = Brand::orderby("name", "asc")
                ->select('id', 'name')
                ->get();

            return view('dashboards.admin.edit_car', ['edits' => $edits, 'brands' => $brands]);

        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }


    public function updateCars(CarRequest $request, $id)
    {

        try {
            $request->validated();
            $update = Cars::find($id);
            $update->brand_id = $request['brand'];
            $update->cars_model_id = $request['model'];
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('upload/car', $fileName);
                $update->image = $fileName;
            }
            $update->save();
            return redirect('/admin/dashboard')->with('success', __('messages.update'));

        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }

    public function viewCar($id)
    {

        try {
            $views = Cars::where(['id' => $id])->get();
            //dd($view);

            return view('dashboards.admin.view_cars', ['views' => $views]);

        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }


    public function deleteCar($id)
    {

        try {
            $car = Cars::where(['id' => $id])->first();
            $image_path = 'upload/car/';
            // dd($image_path);
            if (file_exists($image_path . $car->image)) {
                unlink($image_path . $car->image);
            }
            Cars::where(['id' => $id])->delete();

            return redirect()->back()->with('danger', __('messages.danger'));

        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }

    public function logout(Request $request)
    {
        try{
        Auth::logout();
        return redirect('/login');


        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }


}
