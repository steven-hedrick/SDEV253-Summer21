<?php
        // Function used to check email syntax
    function validate_email($email)
           {
               // Validate the syntax
           if (eregi($regexp, $email)) return 1;
                  else return 0;
                }

             // Has the form been submitted?
          if (isset($_POST['submit']))
               {
                  echo "Hi ".$_POST['firstlast']."!<br />";
           if (validate_email($_POST['email']))
                  echo "The address ".$_POST['email']." is valid!";
              else
                  echo "The address <strong>".$_POST['email']."</strong> is invalid!";
               }
    ?>

      <form action="subscribe.php" method="post">
              <p>
                  FirstName LastName:<br />
                 <input type="text" name="firstlast" size="20" maxlength="40" value="" />
             </p>
             
              <p>
                   Email Address:<br />
                  <input type="text" name="email" size="20" maxlength="40" value="" />
              </p>

             <input type="submit" name = "submit" value="Go!" />
      </form>