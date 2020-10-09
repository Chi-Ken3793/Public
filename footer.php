<?php

if ( !empty( $_POST[ 'first_name' ] ) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['message']) ) {
    $message = 'New message from' . ' ' . $_POST[ 'first_name' ] . ' ' . $_POST[ 'last_name' ] . '
Email: ' . $_POST[ 'email' ] . '

' . $_POST[ 'message' ];
    mail( /*to:*/ 'contact@codexnull.com', /*subject:*/ 'New message from website', /*message:*/ $message );
}
?>
<div class="navbottom pt-2">
    <div class="container text-center pt-4 pb-3">
        <h4 class="footer-text">Contact me!</h4>
        <form method="POST">
                <div class="row pt-3">
                    <div class="col-12 col-md-6 pb-3 input-right">
                        <input type="text" name="first_name" maxlength="30" value="" size="51" aria-required="true" aria-invalid="false" placeholder="Your first name (Required)" />
                    </div>
                    <div class="col-12 col-md-6 pb-3 input-left">
                        <input type="text" name="last_name" maxlength="30" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your last name (Required)" />
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-12">
                        <input name="email" type="email" class="input-style" maxlength="50" placeholder="Your Email (Required)" value="" size="40" aria-invalid="false" aria-required="true" />
                        </div>
                </div>
                        <div class="row">
                            <div class="col-12 pb-3">
                                <textarea name="message" maxlength="500" aria-invalid="false" placeholder="Your message..."></textarea>
                            </div>
                        </div>
                <div class="col-12 pb-4">
                    <input type="submit" value="Send Message" class="btn-primary no-indent col-8" />
                </div>
            </form>
        <p class="footer-text">&copy;2019-2020</p>
    </div>
</div>