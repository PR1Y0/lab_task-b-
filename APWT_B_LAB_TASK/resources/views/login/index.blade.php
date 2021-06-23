<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    
    <form method="POST">
    <!-- @csrf -->
    <center>
    <table>
        <tr>
            <td>Email Address</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>

        <tr>
                <td></td>
                <td><input type="submit" value="submit"></td>
        </tr>
    </table>
    </center>
    </form>
    {{session('msg')}}
</body>
</html>