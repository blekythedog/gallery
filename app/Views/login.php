<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('../css/bootstrap.min.css') ?>" ) <img src="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <title></title>

    <style type="text/css">
        .bg {
            background-image: linear-gradient(to bottom right, #A18CD1, #FBC2EB);
            width: 100%;
            height: 500px;
            object-fit: cover;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            position: relative;
        }


        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
        }

        .background {

            background-image: linear-gradient(to bottom right, #9796F0, #FBC7D4);
            width: 100%;
            height: 770px;
            object-fit: cover;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            position: relative;
        }


        form {
            margin-top: 100px;
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
        }
    </style>
</head>

<body class="bg">
    <center class="box">
        <div class="container"></div>
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <div class="col-md-4">
            <form class="font" action="<?= base_url('home/proses_login') ?>" method="post">
                <h3>Login Here</h3>
                <div class="md-3 mt-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" placeholder="Username" id="username" name="username" class="form-control">
                </div>
                <div class="md-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" placeholder="Password" id="password" name="password" class="form-control">
                </div>
                <div>
                    <button type="submit" class="button">Log In</button>
                </div>


            </form>
        </div>
    </center>
</body>

</html>