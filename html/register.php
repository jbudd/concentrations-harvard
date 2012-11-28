<?php

    // configuration
    require("../includes/config.php"); 

    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate inputs
        if (empty($_POST["concentration"]))
        {
            apologize("You must provide a concentration.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide a password.");
        }
        else if (empty($_POST["password_confirm"]) || $_POST["password"] != $_POST["password_confirm"])
        {
            apologize("Those passwords did not match.");
        }
        else if (empty($_POST["email"]))
        {
            apologize("You must provide an email.");
        }
        else if (empty($_POST["email_confirm"]) || $_POST["email"] != $_POST["email_confirm"])
        {
            apologize("Those emails did not match.");
        }

        // try to register user
        $results = query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.0000)",
            $_POST["username"], crypt($_POST["password"])
        );
        if ($results === false)
        {
            apologize("That username appears to be taken.");
        }

        // get new user's ID
        $rows = query("SELECT LAST_INSERT_ID() AS id");
        if ($rows === false)
        {
            apologize("Can't find your ID.");
        }
        $id = $rows[0]["id"];

        // log user in
        $_SESSION["id"] = $id;

        // redirect to portfolio
        redirect("/");
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

?>
