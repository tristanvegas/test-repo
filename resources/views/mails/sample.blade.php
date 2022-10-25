<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="container border rounded">
            <h1 class="text-center">Thank You</h1>
            <p>Hi {{ $name }}, thanks for reaching out to us.</p>
            <ul>
                <li>Project Name: {{ $project }}</li>
                <li>Project Description: {{ $description }}</li>
            </ul>
        </div>
    </div>
</body>
</html>
