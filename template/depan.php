<?php
    echo"
        <!DOCTYPE html>
        <html>
            <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>$judul</title>
            <!-- CSS | Bootstrap -->
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'/>
            <link rel='stylesheet' href='./assets/css/login.css'>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
            <!-- Fonts -->
            <link rel='preconnect' href='https://fonts.googleapis.com'>
            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
            <link href='https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;600&display=swap' rel='stylesheet'>
            </head>
            <body>
                $konten
                <script>
                    function myFunction() {
                        var x = document.getElementById('inputPassword');
                        if (x.type === 'password') {
                            x.type = 'text';
                        } else {
                            x.type = 'password';
                        }
                    }
                </script>
            </body>
        </html>
    ";
?>