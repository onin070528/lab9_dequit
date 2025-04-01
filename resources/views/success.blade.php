<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        max-width: 600px;
    }

    .success-message {
        background-color: #28a745;
        color: white;
        padding: 15px;
        border-radius: 5px;
        text-align: center;
    }

    .data-list {
        list-style-type: none;
        padding: 0;
    }

    .data-list li {
        margin: 10px 0;
        font-size: 1.1em;
    }
    </style>
</head>

<body>

    <div class="container py-5 border border-2 ">
            <h1>Welcome to homepage</h1>
        <h3 class="mt-4">Submitted Data:</h3>
        <ul class="data-list">
            <li><strong>Name:</strong> {{ $data['name'] }}</li>
            <li><strong>Email:</strong> {{ $data['email'] }}</li>
        </ul>

        <div class="d-flex justify-content-center">
            <a href="/register" class="btn btn-secondary mt-4">Back to Registration</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>