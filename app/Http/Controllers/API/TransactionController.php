<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function get(Request $request, $id)
    {
        // menggambil detail transaction dengan produknya
        $product = Transaction::with(['details.product'])->find($id);

        if ($product)
            return ResponseFormatter::success($product, 'Data transaksi berasil diambil');
        else
            return ResponseFormatter::error(null, 'Data transaksi tidak ada', 404);
    }
}
