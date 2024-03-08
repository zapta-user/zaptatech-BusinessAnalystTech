<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cheduled Call Appointment</title>
</head>

<body>


    <h3>Dear Admin,</h3>
    <p>I hope this email finds you well. This is to inform you that a call appointment has been scheduled with you.</p>

    <p>Here are the details for the call appointment:</p>
    <p><b>Date: </b>{{ $date ?? '' }}</p>
    <p><b>Time Slot:</b> {{ $slot ?? '' }}</p>
    <p><b>Duration:</b> {{ $duration ?? '' }}</p><br>
    <h3> Participant Details:</h3>
    <p><b>Name:</b> {{ $name ?? '' }}</p>
    <p><b>Email:</b> {{ $email ?? '' }}</p>
    <p><b>Phone Number:</b> {{ $phone ?? '' }}</p>
    <p><b>Message:</b> {{ $description ?? '' }}</p><br>
    <b>Please confirm receipt of this email and if the proposed date and time work for you. If there are any
        conflicts or
        adjustments needed, kindly let us know as soon as possible so we can make necessary arrangements.</b>

</body>

</html>
