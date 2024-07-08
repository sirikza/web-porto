<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Selamat Datang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>

<body>
    <div class="bg-danger">
        <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" style="background-color: #ffffff;">
            <div class="container">
                <a class="navbar-brand fw-bold fs-3" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" href="index.html">Login Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse fs-5" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/web-porto-rikza/index.php">Home Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1 class="text-center text-danger mt-4">LOGIN</h1>
            <div id="message">
            </div>
            <div class="container px-4">
                <form class="row g-1" id="sample_form">
                    <div class="col-md-12">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="user_id" class="form-control" id="user_id">
                    </div>
                    <div class="col-12 mt-2">
                        <button type="submit" class="btn btn-dark" id="action_button">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {

            $('#sample_form').on('submit', function(event) {
                event.preventDefault();

                var formData = {
                    'user_id': $('#user_id').val()
                }
                $.ajax({
                    url: "http://localhost/web-porto-rikza/si-admin/api/auth/login.php",
                    method: "POST",
                    data: JSON.stringify(formData),
                    success: function(data) {
                        $('#action_button').attr('disabled', false);
                        window.location.href = 'http://localhost/web-porto-rikza/si-admin/views/skills/';

                    },
                    error: function(err) {
                        console.log(err);
                        $('#message').html('<div class="alert alert-danger">' + err.responseJSON + '</div>');
                    }
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>