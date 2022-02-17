<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function all(Request $request)
    {
        $id         = $request->input('id');
        $limit      = $request->input('limit', 6);
        $foodId     = $request->input('foodId');
        $status     = $request->input('status');

        if($id)
        {
            $transaction = Transaction::with(['food', 'user'])->find($id);

            if($transaction)
            {
                return ResponseFormatter::success(
                    $transaction,
                    'Transaction data has found'
                );
            } else
            {
                return ResponseFormatter::error(
                    null,
                    'Data Transaction not available',
                    404
                );
            }
        }

        $transaction = Transaction::with(['food', 'user'])
                                    ->where('user_id', Auth::user()->id);

        if($foodId)
        {
            $transaction->where('name', $foodId);
        }

        if($status)
        {
            $transaction->where('status', $status);
        }



        return ResponseFormatter::success(
            $transaction->paginate($limit),
            'Data transaction has found'
        );
    }

    public function update(Request $request, $id)
    {
        try {
            $transaction = Transaction::findOrFail($id);

            if($request->input('quantity')){
                $transaction->quantity = $request->input('quantity');
                $transaction->save();
            }

            if($request->input('total')){
                $transaction->total = $request->input('total');
                $transaction->save();
            }
            if($request->input('status')){
                $transaction->status = $request->input('status');
                $transaction->save();
            }
            if($request->input('paymentUrl')){
                $transaction->payment_url = $request->input('paymentUrl');
                $transaction->save();
            }

            return ResponseFormatter::success(
                $transaction,
                'Updated transaction is success'
            );
        } catch (Exception $error)
        {
            return ResponseFormatter::error(
                null,
                $error,
                500
            );
        }
    }
}
