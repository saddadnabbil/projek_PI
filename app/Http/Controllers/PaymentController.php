<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentNotification;

class PaymentController extends Controller
{
    public function show($service)
    {
        $amounts = [
            'Engagement Event' => 8000000,
            'Family Gathering' => 5000000,
            'Birthday Party' => 5000000
        ];

        $amount = $amounts[$service] ?? 0;
        return view('payment.show', compact('service', 'amount'));
    }

    public function confirm(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'payment_method' => 'required|in:bank_transfer,ewallet',
                'proof' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'service' => 'required|string',
                'amount' => 'required|numeric'
            ]);

            // Simpan bukti pembayaran
            $proofPath = $request->file('proof')->store('payment_proofs', 'public');

            // Simpan data pembayaran
            $payment = Payment::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'],
                'service' => $validated['service'],
                'amount' => $validated['amount'],
                'payment_method' => $validated['payment_method'],
                'proof_image' => $proofPath,
                'status' => 'pending'
            ]);

            // Kirim email ke user
            Mail::to($payment->email)->send(new PaymentNotification($payment));

            // Setelah payment berhasil disimpan
            // Simpan detail pembayaran di session
            session([
                'payment_details' => [
                    'service' => $payment->service,
                    'amount' => $payment->amount
                ]
            ]);

            return redirect()->route('payment.success')
                ->with('success', 'Pembayaran berhasil dikonfirmasi! Tim kami akan segera memproses pesanan Anda.');

        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Payment confirmation error: ' . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan saat konfirmasi pembayaran. Silakan coba lagi.');
        }
    }

    public function success()
    {
        // Hapus pengecekan session yang terlalu ketat
        return view('payment.success');
    }

    public function adminShow($id)
    {
        $payment = Payment::findOrFail($id);
        return view('admin.payments.show', compact('payment'));
    }
}