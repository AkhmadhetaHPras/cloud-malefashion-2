<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function getstock($id)
    {
        $stock = Variant::find($id);
        return response()->json([
            'stock' => $stock->stock,
        ]);
    }
}
