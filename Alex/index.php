<?php
    if(($_SERVER["REQUEST_METHOD"]) == 'POST')
    {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $subject = strval($_POST["subject"]);
        $msg = strval($_POST["message"]);

        $headers = "FROM : ". $email . "\r\n";
        $my_email = "a_aumayr@outlook.com";
        
        if(mail($my_email, $subject, $msg, $headers))
        {
            echo "Your email is sccessfuly sent";
        }
        else
        {
            echo "Your email could't send! Try later again. ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Form - Send an Email</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-3 mb-3">Contact us</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputSubject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="exampleInputSubject" name="subject">
            </div>
            <div class="mb-3">
                <label for="exampleInputMessage" class="form-label">Message</label>
                <textarea  class="form-control" id="exampleInputMessage" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>