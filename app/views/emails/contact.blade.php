<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Contact Form Message</h2>

<div>
    A user from your website lukaspradel.TLD has sent you a message via the contact form.
</div>

<div>
    <ul>
        <li><emph>Name</emph>: {{$name}}</li>
        <li><emph>E-Mail:</emph> {{$email}}</li>
        <li><emph>Subject</emph>: {{$subject}}</li>
        <li>
            Message:<br/>
            <p>
                {{$msg}}
            </p>
        </li>
    </ul>
</div>
</body>
</html>