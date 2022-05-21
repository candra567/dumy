<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        nav{
            width: 100%;
            padding: 10px;
            background-color: brown;
            color: white;
            display: flex;
            justify-content: space-around;
        }
        h2{
            margin-right: 50%;
        }
        a{
            text-decoration: none;
            color: black;
        }
        div{
            margin: 10px auto ;
            width: 60%;

        }
        div table {
            border-collapse: collapse;
            width: 100%;
        }
        td,th{
            padding: 10px
        }
    </style>
</head>
<body>
    <nav>
        <h2>Admin</h2>
        <a href="">Logout</a>
    </nav>
    <div>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>