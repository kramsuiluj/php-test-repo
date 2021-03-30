<?php 

$patterns = [
    'username' => "/^[\w_?]{5,20}$/",
    'contact' => "/^([\d]{11})|([+63\d]{13})$/"
];  

$messages = ['email' => '', 'username' => '', 'contact' => ''];

// Email Validation
if (isset($_POST['validate-email'])) {

    if (empty($_POST['email'])) {

        $messages['email'] = 'Please enter an email.';

    } else {

        $email = htmlspecialchars($_POST['email']);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $messages['email'] = 'Great the email you entered is valid!';

        } else {

            $messages['email'] = 'Sorry the email you entered is invalid. Please try again!';

        }

    }

}
// End of Email Validation

// Username Validation
if (isset($_POST['validate-username'])) {

    if (empty($_POST['username'])) {

        $messages['username'] = 'Please enter a username.';

    } else {

        $username = htmlspecialchars($_POST['username']);

        if (preg_match($patterns['username'], $username)) {

            $messages['username'] = "Great the username you entered is valid!";

        } else {

            $messages['username'] = 'Sorry the username you entered is invalid. Please try again!';

        }

    }

}
// End of Username Validation

// Contact Number Validation
if (isset($_POST['validate-contact'])) {

    if (empty($_POST['contact'])) {

        $messages['contact'] = 'Please enter a contact number.';

    } else {

        $contact = htmlspecialchars($_POST['contact']);

        if (preg_match($patterns['contact'], $contact)) {

            $messages['contact'] = 'Great the contact number you entered is valid!';

        } else {

            $messages['contact'] = 'Sorry the contact number you entered is invalid. Please try again!';

        }

    }

}
// End of Contact Number Validation

?>


<!-- --------------------------------------------------------------------------------------------------------------------------- -->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Repo</title>
</head>
<body>
    
    <div>
    
        <!-- Email Validation -->
        <section>
        
            <form action="index.php" method="POST" id="email-form">
            
                <section>
                    <label for="email">Enter an email: </label>
                    <input type="text" name="email" id="email">
                </section>

                <section>
                    <br>
                    <button form="email-form" name="validate-email">VALIDATE</button>
                </section>
            
            </form>
        
        </section>

        <?php if (!empty($messages['email'])) { ?>
            <p>
                <?php echo $messages['email']; ?>
            </p>
        <?php } ?>
        <!-- End of Email Validation -->

        <hr>

        <!-- Username Validation -->
        <section>
        
            <form action="index.php" method="POST" id="username-form">
            
                <section>
                    <label for="username">Enter a username: </label>
                    <input type="text" name="username" id="username">
                </section>

                <section>
                    <br>
                    <button form="username-form" name="validate-username">VALIDATE</button>
                </section>
            
            </form>            

        </section>

        <?php if (!empty($messages['username'])) { ?>
            <p>
                <?php echo $messages['username']; ?>
            </p>
        <?php } ?>
        <!-- End of Username Validation -->

        <hr>

        <!-- Contact Number Validation -->
        <section>
        
            <form action="index.php" method="POST" id="contact-form">
            
                <section>
                    <label for="contact">Enter a contact number: </label>
                    <input type="text" name="contact" id="contact">
                </section>

                <section>
                    <br>
                    <button form="contact-form" name="validate-contact">VALIDATE</button>
                </section>
            
            </form>

        </section>

        <?php if (!empty($messages['contact'])) { ?>
            <p>
                <?php echo $messages['contact']; ?>
            </p>
        <?php } ?>
        <!-- End of Contact Number Validation -->
    
    </div>

</body>
</html>