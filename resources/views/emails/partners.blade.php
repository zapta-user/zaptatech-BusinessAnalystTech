<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Partner Email</title>
</head>

<body>
    @if ($role == 'user')
        <h3>Hi {{ $data?->name }},</h3>
        <p>Your request to become a partner of Sync4Tech as {{ $data->type }} has been received.</p>
        <p>Regards,</p>
        <p>Sync4Tech Team</p>
    @else
        <h3>Hi admin,</h3>
        <p>A new partner request has been received from <b>{{ $data->name }}</b>
            Please review the request and take appropriate action.</p>
        <p>Details are as follows:</p>
        <p><b>Type:</b>{{ $data->type }}</p>
        @if ($data->type == 'company')
            <p><b>Company name: </b>{{ $data?->company_name }}</p>
        @endif
        <p><b>Name:</b> {{ $data?->name }}</p>
        <p><b>Phone no:</b> {{ $data?->phone_no }}</p>
        <p><b>Email:</b> {{ $data?->email }}</p>
        <p><b>Domains:</b> {{ $data?->domainNames() }}</p>
        <p><b>Service:</b> {{ optional($data?->serviceName)?->name }}</p>
        <p>Regards,</p>
        <p>Sync4Tech Team</p>
    @endif
</body>

</html>
