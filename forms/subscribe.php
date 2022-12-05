<!-- EMAIL SUBSCRIPTION FORM -->
<?php
    $userEmail = ""; //first we leave email field blank
    if (isset($_POST['subscribe'])) { //if subscribe btn clicked
      $userEmail = $_POST['email']; //getting user entered email
      if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) { //validating user email
        $subject = "Thanks for Subscribing to Lincoln Parish Music";
        $message = "Thanks for subscribing!. We will send you latest music news and updates, monthly.";
        $sender = "From: talboxrodeo@gmail.com";
        //php function to send mail
        if (mail($userEmail, $subject, $message, $sender)) {
          ?>
           <!-- show sucess message once email send successfully -->
          <div class="alert success-alert">
            <?php echo "Thanks for Subscribing!" ?>
          </div>
          <?php
          $userEmail = "";
        } else {
          ?>
          <!-- show error message if somehow mail can't be sent -->
          <div class="alert error-alert">
          <?php echo "Failed while sending your mail!" ?>
          </div>
          <?php
        }
      } else {
        ?>
        <!-- show error message if user entered email is not valid -->
        <div class="alert error-alert">
          <?php echo "$userEmail is not a valid email address!" ?>
        </div>
        <?php
      }
    }
    ?>
