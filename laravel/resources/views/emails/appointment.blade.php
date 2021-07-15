<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
</head>

<body>

    <h1>Appointment Request Form</h1>

    <p>Dear Colleague,</p>

    <p>An appointment has been requested. Please follow up with a confirmation</p>

    <h2>Details</h2>

    <p>From: {{ $name }} </p>
    <p>Email: {{ $email }} </p>
    <p>Phone: {{ $phone }} </p>
    <p>Message: {{ $comment }} </p>
    <p>Service: {{ $service }} </p>
    <p>Date: {{ $desired_date }} </p>
    <p>Time: {{ $desired_time }} </p>

</body>

<footer>
    <h3>Augmented Heart Logo</h3>
</footer>

</html>
