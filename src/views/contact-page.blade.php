<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us any time</h1>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" id="">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" id="" rows="3" placeholder="Message Here"></textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>
