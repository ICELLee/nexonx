<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $data = $request->validated();

        // Speichern in der Datenbank
        Contact::create($data);

        // Admin-Mail
        Mail::send('emails.contact', [
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'formMessage' => $data['message'],
        ], function ($message) use ($data) {
            $message->to('support@nexonx.de')
                ->subject('New Contact Message: ' . $data['subject']);
        });

        // Bestätigungs-Mail an den Nutzer
        Mail::send('emails.contact_confirmation', [
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'formMessage' => $data['message'],
        ], function ($message) use ($data) {
            $message->to($data['email'])
                ->subject(__('We received your message'));
        });

        return back()->with('success', __('Your message has been sent successfully!'));
    }
}

