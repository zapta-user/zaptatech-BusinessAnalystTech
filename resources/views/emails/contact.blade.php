<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if ($role == 'admin')
        <h2>Hy admin,</h2>
        <p>A new message has been submitted via the Contact Us form on the website. Please review the details below:</p>
        <p><b>Name:</b>{{ $contact?->name }} </p>
        <p><b>Email:</b>{{ $contact?->email }} </p>
        <p><b>Phone no:</b>{{ $contact?->phone_no }} </p>
        <p><b>Message:</b>{{ $contact?->message }} </p><br>
        <p>Thank you</p>
        <p>Sync4Tech Support Team</p>
    @else
        <p>Hello {{ $contact?->name }},</p>
        <p>Thank you for reaching out to us! We have received your message through the Contact Us form. Our team will
            review it and get back to you as soon as possible.</p>
        <p>Regards,</p>
        <p>Sync4Tech Support Team</p>
    @endif

</body>

</html>
