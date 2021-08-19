<?php

namespace App\Http\Controllers\API\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Gudang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GudangController extends Controller
{
    public function index()
    {
        return Gudang::get();
    }
    public function store(Request $request)
    {
        foreach ($request["kt"] as $key => $value) {
            $data[$key] = $value;
        }
        for ($i = 0; $i < count($data); $i++) {
            $gudang = $request->kt[$i]["gudang"];
            Gudang::create([
                "uuid" => Str::uuid(),
                "gudang" => $gudang,
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
            $gudang = $request->kt[$i]["gudang"];
            Gudang::where("uuid", $id)->update([
                "gudang" => $gudang,

            ]);
        }
    }
    public function destroy($id)
    {
        Gudang::where("uuid", $id)->delete();
    }
    public function deleteall($id)
    {
        $mltId = explode(",", $id);
        Gudang::whereIn("uuid", $mltId)->delete();
        // return $dat;
    }
}
