<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Menampilkan halaman kontak
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Menyimpan pesan kontak dan mengirim email
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        try {
            // Simpan ke database
            $contact = Contact::create($validatedData);

            // Kirim email
            Mail::to('mabiyu25@gmail.com')->send(new ContactFormMail($validatedData));

            return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
        } catch (\Exception $e) {
            Log::error('Error sending contact form: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Maaf, terjadi kesalahan. Silakan coba lagi.');
        }
    }
}