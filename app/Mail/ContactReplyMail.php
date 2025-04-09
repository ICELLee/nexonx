<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\UploadedFile;

class ContactReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $messageBody;
    public ?array $attachedFiles;

    public function __construct(string $messageBody, ?array $attachedFiles = [])
    {
        $this->messageBody = $messageBody;
        $this->attachedFiles = $attachedFiles;
    }

    public function build()
    {
        $email = $this->subject('Antwort auf deine Kontaktanfrage')
            ->view('emails.contact-reply')
            ->with([
                'body' => $this->messageBody,
            ]);

        if ($this->attachedFiles) {
            foreach ($this->attachedFiles as $file) {
                $email->attach($file->getRealPath(), [
                    'as' => $file->getClientOriginalName(),
                    'mime' => $file->getMimeType(),
                ]);
            }
        }

        return $email;
    }
}
