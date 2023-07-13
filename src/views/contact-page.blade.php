<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-6">
            <div class="card border-0 shadow py-4 px-2">
                <div class="card-title">
                    <h1 class="ms-3">Send Message</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="text" name="name" placeholder="Name" id="">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" id="" rows="3" placeholder="Message Here"></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-secondary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
