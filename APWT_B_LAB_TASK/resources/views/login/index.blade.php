<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    
    <form method="POST">
    @csrf
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

    <div><a href="/register">Do_Registration</a></div>

    </center>
    </form>
    
    {{session('msg')}}

    

    <!-- @if(Session::has('msg'))
            <div class="alert alert-danger">
                {{Session::get('msg')}}
            </div>
    @endif         -->

    
</body>
</html>