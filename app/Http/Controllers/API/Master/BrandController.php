<?php

namespace App\Http\Controllers\API\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        return Brand::get();
    }
    public function store(Request $request)
    {
        foreach ($request["kt"] as $key => $value) {
            $data[$key] = $value;
        }
        for ($i = 0; $i < count($data); $i++) {
            $brand = $request->kt[$i]["brand"];
            Brand::create([
                "uuid" => Str::uuid(),
                "brand" => $brand,
            ]);
        }
    }
    public function update(Request $request, $id)
    {
        // return dd($request->all());
        foreach ($request["kt"] as $key => $value) {
            $data[$key] = $value;
        }
        for ($i = 0; $i < count($data); $i++) {
            $brand = $request->kt[$i]["brand"];
            Brand::where("uuid", $id)->update([
                "brand" => $brand,

            ]);
        }
    }
    public function destroy($id)
    {
        Brand::where("uuid", $id)->delete();
    }
    public function deleteall($id)
    {
        $mltId = explode(",", $id);
        Brand::whereIn("uuid", $mltId)->delete();
        // return $dat;
    }
}
