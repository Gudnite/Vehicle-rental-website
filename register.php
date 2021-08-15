
<html>
    <head>
        <title>Registration page</title>
         <link rel="stylesheet" href="style3.css">
    </head>
    <body>
        <div class="form-box-register">
            <h1>Register Here</h1>
            
            <form action="reg.php" method="POST">
            <div class="input-box">
            <input type="text" name="first" placeholder="First Name" >
            </div>
            <div class="input-box">
            <input type="text" name="last" placeholder="Last Name" >
            </div>
             <div class="input-box">
            <input type="text" name="email" placeholder="E-mail">
            </div>
            <div class="input-box">
            <input type="text" name="user" placeholder="User Name">
            </div>
             <div class="input-box">
            <input type="password" name="password" placeholder="Password" >
            </div>
            <div class="input-box">
            <input type="text" name="telephone" placeholder="Telephone" >
            </div>
            <button type="submit" name="submit" class="register-btn">REGISTER</button>
            </form>
            <p class="para-log">Already a member??
            <a href="login.php">Login</a>
            </p>
                
            
        </div>
        
        
    </body>
</html>