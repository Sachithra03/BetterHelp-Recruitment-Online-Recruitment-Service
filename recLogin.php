<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="styles/login.css">
    </head>
        <body>
            <div class="login-container">
                <h1>Login</h1>
                <form method="post" action="rec.inc.login.php">

                    
                    <h3>Email:
                        <input type="email" id="email" name="Email" required><br/><br/>
                   
                    Password:</h3>
                        <input type="password" id="password" name="Password" required><br/><br/><br/>
                    
                    <button type="submit" class="login-btn">Login</button><br/><br/>
                    
                </form>
                <p>Don’t have a BetterHelp account yet?  <a href="recruiterReg.php" > Sign Up Now</a></p>
            </div>
        </body>
</html>
