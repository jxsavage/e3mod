<!DOCTYPE html>
<?php
    $input = Input::all();
?>
<head>
    <title>Contact Request</title>
</head>
<body>
    <p>
        You have received a contact request from {{$input['first_name']}} {{$input['last_name']}}.
    </p>
    <p>
        Phone Number: {{$input['phone_number']}}
    </p>
    <p>
        E-Mail: {{$input['email']}}
    </p>
    <p>
        Subject: {{$input['subject']}}
    </p>
    <p>
        Message: {{$input['message']}}
    </p>
</body>


