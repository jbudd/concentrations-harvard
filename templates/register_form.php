
<script>
/*
function confirm()
{
    if (concentration == "")
    {
        alert("Please enter a concentration");
    }
    else if (email == "");
    {
        alert("Please enter your email address");
    }
    else if (email_confirm == "");
    {
        alert("Please confirm your email");
    }
     else if (email_confirm != email)
    {
        alert("Emails do not match");
    }
     else if (password == "")
    {
        alert("Please enter a password");
    }
     else if (password_confirm == "")
    {
        alert("Please confirm your password");
    }
     else if (password_confirm != password)
    {
        alert("Passwords do not match");
    }
    
}
*/
</script> 

<form action="register.php" method="post">
    <fieldset>
        <div class="control-group">
            <input autofocus name ="concentration" placeholder="Concentration" type="text"/>
        </div>
        <div class="control-group">
            <input name="email" placeholder="Email" type="text"/>
        </div> 
        <div class="control-group">
            <input name="email_confirm" placeholder="Re-type email" type="text"/>
        </div>
         <div class="control-group">
            <input name="password" placeholder="Password" type="password"/>
        </div>
         <div class="control-group">
            <input name="password_confirm" placeholder="Re-type password" type="password"/>
        </div>
        <div class="control-group">
            <button type="submit" class="btn">Register</button>
        </div>
    </fieldset>
</form>
<div>
    or <a href="login.php">login</a> if you already have an account
</div>
