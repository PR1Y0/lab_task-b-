<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
        <center> 
        <h1>Registration_Form</h1>
        <form action="" method="POST">
        @csrf
            <div>
            <label>full name</label>
            <input type="text" name="full_name" id="">
            </div>
            
            <div>
            <label>user name</label>
            <input type="text" name="user_name" id="">
            </div>
            
            <div>
            <label>email</label>
            <input type="text" name="email" id="">
            </div>

            <div>
            <label>password</label>
            <input type="text" name="password" id="">
            </div>
            
            <div>
            <label>confirm password</label>
            <input type="text" name="password_confirm" id="">
            </div>
            
            <div>
            <label>phone number</label>
            <input type="number" name="phone" id="">
            </div>
            
            <div>
            <label>city</label>
            <input type="text" name="city" id="">
            </div>
            
            <div>
            <label>country</label>
            <input type="text" name="country" id="">
            </div>
            
            <div>
            <label>Company</label>
            <input type="text" name="company_name" id="">
            </div>
            
            <div><input type="submit" placeholder="Sign up"></div>
    </center>       
    </form>
</body>
</html>