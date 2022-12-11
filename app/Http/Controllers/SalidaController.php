<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SalidaController extends Controller
{
    public function index()
    {
        $listaprod = Producto::all();
        return view('salidas.salida', array('listaprod'=>$listaprod));
    }
    public function guardar(Request $r)
    {
        DB::transaction(function ()use($r) {
            $v = new Venta();
            $v-> fecha= Carbon::now();
            $v->save();
            $ids=$r->id;
            $cants=$r->cant;
            $precios= $r->precio;
            for ($i=0; $i < count($ids); $i++){
                $p = Producto::find($ids[$i]);
                $p->stock-=$cants[$i];
                $p->save();
                $v->productos()->attach($ids[$i],['cantidad'=>$cants[$i], 'precio'=>$precios[$i]]);
            }
        });
    }
}
