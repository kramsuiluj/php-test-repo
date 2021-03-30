<?php 

$messages = ['email' => ''];

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
                    <label for="email">Enter your email: </label>
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

        <!-- End of Username Validation -->
    
    </div>

</body>
</html>