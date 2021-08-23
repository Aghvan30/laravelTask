<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('dashboards.admin.brand.add-brand');
    }


    public function addBrand(BrandRequest $request)
    {
        try {
            $request->validated();

            $brand = new Brand();
            $brand->name = $request['brand'];
            $brand->save();
            return redirect()->back()->with('success', __('messages.success'));

        } catch
        (\Throwable $e) {
            (report($e));
            return redirect()->back()->with('danger', __('messages.error'));
        }
    }
}
