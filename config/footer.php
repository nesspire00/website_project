<nav class="footer-bottom card-footer entire-footer" role="navigation">
    <div class="container container1">
        <div class="row">
            <div class="col-md-4 widget">
                <h4>Address:</h4>
                <article class="widget_content">
                    <p class="footer">Suite 104, 3737 Major Mackenzie Drive West<br> Woodbridge, ON L4H 0A2</p>
                </article>
            </div>
            <div class="col-md-2 widget">
                <h4>Phone: </h4>
                <article class="widget_content">
                    <p class="footer">+1 (416) 896-5525</p>
                </article>
            </div>
            <div class="col-md-3 widget">
                <h4>Social Media:</h4>
                <article class="widget_content footer">
                    <ul>
                        <li><a href="https://www.facebook.com/">
                                <img src=<?php echo $localRoot . "images/social_icons/facebook.png" ?>
                                     alt="Facebook" class="social_icons"> Facebook</a></li>
                        <li><a href="https://www.twitter.com/">
                                <img src=<?php echo $localRoot . "images/social_icons/twitter.png" ?>
                                     alt="Twitter" class="social_icons"> Twitter</a></li>
                        <li><a href="skype:логин?call">
                                <img src=<?php echo $localRoot . "images/social_icons/skype.png" ?>
                                     alt="Skype" class="social_icons"> Skype</a></li>
                        <li><a href="mailto:mary.ventrella123@gmail.com">
                                <img src=<?php echo $localRoot . "images/social_icons/mail.png" ?>
                                     alt="Email" class="social_icons"> Email</a></li>
                    </ul>
                </article>
            </div>
            <div class="col-md-3 widget">
                <h4 class="font-italic help-learn">"Help, Grow, Learn"</h4>
                <article class="widget_content">
                    <ul class="footer">
                        <li><a href=<?php echo $localRoot . "php/about_me.php" ?>>About </a></li>
                        <li><a href=<?php echo $localRoot . "php/contact_me.php" ?>>Contact</a></li>
                        <li><a href="javascript:privacyAlert()">Privacy Policy</a></li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
    <div class="footer-bottom card-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 widget">© 2017 | Mary Ventrella Counselling</div>
            </div>
        </div>
    </div>
</nav>


<!-- Plugging in the scripts for responsive navbar and alertbox -->
<script src=<?php echo $localRoot . "js/privacy_policy.js" ?>></script>
<script src=<?php echo $localRoot . "js/dropdown.js" ?>></script>
<script src=<?php echo $localRoot . "lib/jquery/dist/jquery.min.js" ?>></script>
<script src=<?php echo $localRoot . "lib/bootstrap/js/bootstrap.min.js" ?>></script>

</body>

</html>