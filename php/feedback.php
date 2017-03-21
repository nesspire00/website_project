<?php
$title = 'Feedback';

include_once('../config/navbar.php');
?>

<main class="poster jumbotron">
    <h1 class="text col-lg-12">Tell us what you are thinking about our service!</h1>
</main>

<div class="row jumbotron form" style="margin-bottom: 0px; padding-right: 1em;margin-right: 0px;">
    <aside class="col-sm-12 col-md-12 col-lg-7">
    <!-- start form -->
    <form method="post">
        <fieldset>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required />
            <br />
            <label for="contact_info">Contact information:</label>
            <input type="text" name="contact_info" id="contact_info" placeholder="Enter your contact info" class="form-control" required />
            <br />
            <br />
            <label for="feedback">Feedback:</label>
            <textarea name="feedback" id="feedback" class="form-control"></textarea>
            <br/>
            <button type="button" class="btn btn-success">Submit</button>
        </fieldset>
    </form>
    </aside>
    <!-- end form -->
    <img src="../images/feedback.jpg" alt="Feedback" class="feedback col-md-5 col-lg-5">
</div>

<?php include_once('../config/footer.php'); ?>
