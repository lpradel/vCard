<?php

class Contact extends Eloquent {

    public static function sendContactFormMail($name, $email, $subject, $msg) {

        $toEmail = 'lukas.pradel@gmx.de';
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
            $message->to('lukas.pradel@gmx.de', 'Lukas');
            $message->from('lukas.pradel@gmx.de', 'Lukas');
            $message->subject('Contact Form Message from lukaspradel.TLD');
        });
    }

}