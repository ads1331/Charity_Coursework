<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); // Загрузка представления contact.blade.php из корня views
    }

    public function send(Request $request)
    {
        // Валидация полей формы
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Отправка сообщения на email администратора
        Mail::to('princefordota@gmail.com')->send(new ContactMail($request->all()));

        return redirect()->route('contact.index')->with('success', 'Ваше сообщение отправлено!');
    }
}
