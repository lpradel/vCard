<?php

class Contact extends Eloquent {

    public static function sendContactFormMail($name, $email, $subject, $msg) {

        $toEmail = Config::get('mail.username');;
        $toName = 'Lukas';

        $data = array(
            'name'      => $name,
            'subject'   => $subject,
            'email'     => $email,
            'msg'       => $msg
        );

        Log::info("Sending email from contact form by user with name \"" . $name . "\" and subject \"" . $subject . "\".");

        Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $email, $name, $subject)
        {
            $message->to($toEmail, 'Lukas');
            $message->from($toEmail, 'Lukas');
            $message->subject('Contact Form Message from lukaspradel.com');
        });
    }

}