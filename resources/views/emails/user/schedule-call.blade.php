<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scheduled Call Appointment</title>
</head>

<body>


    <h3>Dear {{ $name ?? '' }},</h3>
    <p>I hope this email finds you well. I'm writing to confirm our scheduled call appointment.</p>

    <p>Here are the details for the call appointment:</p>
    <p><b>Date: </b>{{ $date ?? '' }}</p>
    <p><b>Time Slot:</b> {{ $slot ?? '' }}</p>
    <p><b>Duration:</b> {{ $duration ?? '' }}</p><br>

    <b>Please ensure that you're available at the specified date and time. If there are any conflicts or adjustments
        needed, please let me know as soon as possible so we can make necessary arrangements.</b><br>
    <p>Regards,</p>
    <p>Sync4Tech Team</p>



</body>

</html>
