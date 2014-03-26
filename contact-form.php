    <!-- Contact Form -->
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">

                    <?php 
                        include "lib/remove-injections.php";
                        if($_GET['sent'] === 1){
                            echo "<script>$('form').hide();</script>
                            <h4>Email Sent!</h4>";
                        }
                    ?>

                    <script src="js/botboot.js"></script>
                    <form class="contact" method="post" action="send-mail.php" parsley-validate>
                        <label for="name" class="contact_label">Name</label>
                        <br>
                        <input name="name" type="text" class="input_field" required><br>

                        <label for="email" class="contact_label">Email</label>
                        <br>
                        <input name="email" type="email" class="input_field" parsley-trigger="blur" parsley-focus="first" required><br>

                        <label for="phone" class="contact_label">Phone</label>
                        <br>
                        <input name="phone" type="tel" class="input_field" parsley-trigger="change"><br>

                        <label for="message" class="contact_label">Message</label>
                        <br>
                        <textarea name="message" class="input_field_message" parsley-trigger="keyup" parsley-rangelength="[20,200]" parsley-focus="last" required></textarea><br>

                        <script>DrawBotBoot();</script><br>

                        <input name="submit" type="submit" value="submit" class="btn btn-lg btn-default cta">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Contact Form -->