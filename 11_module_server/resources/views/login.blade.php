<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form{
            width: 40%;
            padding: 10px;
        }
        form h3{
            text-align: center;
            margin: 10px auto;
        }
        form input,button{
            width: 100%;
            display: block;
            padding: 10px;
            margin: 10px auto;
        }
        form button{
            background-color: blue;
            border:none ;
            color: white;
        }
    </style>
</head>
<body>
    <form action="/login" method="post">
        @csrf
        @if (!empty(session()->get('logingagal')))
            <p style="text-align:center;color:red;"><?=session()->get('logingagal')?></p>
        @endif
        <h3>LOGIN</h3>
        <input type="email" name="email_users" placeholder="Email" required value=")">
        <input type="password" name="password_users" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>