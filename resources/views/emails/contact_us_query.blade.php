<!DOCTYPE html>
<html>
<head>
    <title>New Contact Us Query</title>
</head>
<body>
    <h1>New Contact Us Query</h1>
    <p><strong>Name:</strong> {{ $queryData['name'] }}</p>
    <p><strong>Email:</strong> {{ $queryData['email'] }}</p>
    <p><strong>Mobile:</strong> {{ $queryData['mobile'] }}</p>
    <p><strong>Subject:</strong> {{ $queryData['subject'] }}</p>
    <p><strong>Message:</strong> {{ $queryData['message'] }}</p>
</body>
</html>
