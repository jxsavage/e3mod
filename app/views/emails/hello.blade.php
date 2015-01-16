<!DOCTYPE html>
<?php
    $input = Input::all();
?>
<head>
    
</head>
<body>
    <p>
        this is a test email from {{$input['first_name']}} {{$input['last_name']}}.
    </p>
</body>


