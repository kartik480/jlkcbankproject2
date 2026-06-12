<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private function paymentLink(): string
    {
        return config('services.instamojo.payment_link', 'https://imjo.in/ZaXqyz');
    }

    public function showForm()
    {
        return view('pay');
    }

    public function initiate(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:15',
            'amount'  => 'required|numeric|min:1',
            'purpose' => 'required|string|max:255',
        ]);

        $url = $this->paymentLink() . '?' . http_build_query([
            'data_name'   => $validated['name'],
            'data_email'  => $validated['email'],
            'data_phone'  => $validated['phone'],
            'data_amount' => number_format((float) $validated['amount'], 2, '.', ''),
            'data_note'   => $validated['purpose'],
        ]);

        return redirect()->away($url);
    }

    public function callback(Request $request)
    {
        $status = $request->query('payment_status');

        if ($status === 'Credit') {
            return view('pay-success', ['payment' => $request->query()]);
        }

        return view('pay-failed');
    }
}
