<?php

namespace App\Http\Controllers\API\Master;

use App\Http\Controllers\Controller;
use App\Models\Master\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        return Kategori::get();
    }
    public function store(Request $request)
    {
        foreach ($request["kt"] as $key => $value) {
            $data[$key] = $value;
        }
        for ($i = 0; $i < count($data); $i++) {
            $kategori = $request->kt[$i]["kategori"];
            Kategori::create([
                "uuid" => Str::uuid(),
                "kategori" => $kategori,
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
            $kategori = $request->kt[$i]["kategori"];
            Kategori::where("uuid", $id)->update([
                "kategori" => $kategori,

            ]);
        }
    }
    public function destroy($id)
    {
        Kategori::where("uuid", $id)->delete();
    }
    public function deleteall($id)
    {
        $mltId = explode(",", $id);
        Kategori::whereIn("uuid", $mltId)->delete();
        // return $dat;
    }
}
