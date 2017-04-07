<?php
$title = 'Contact me';

include_once('../config/navbar.php');
?>
    <div class="container1 container_contact">
        <section class="contact_info jumbotron"
                 style="margin-bottom: 0px; padding-right: 5em; margin-right: 0px; padding-bottom: 5px;">
            <div class="row">
                <div class="contact_details col-sm-12 col-md-12 col-lg-7">
                    <h2>You can find us here:</h2>
                    <br/>
                    <p class="italic">Phone</p>
                    416-896-5525
                    <br>
                    <p class="italic">E-mail:</p>
                    mary.ventrella123@gmail.com
                    <p class="italic">Address</p>
                    Medical Walk in Clinic
                    <br/> 3737 Major Mackenzie Dr. W
                    <br/> Suite 104
                    <br/> Woodbridge, ON L4H0A2
                    <br/>
                    <!--MAP-->
                </div>

                <div class="map col-sm-12 col-md-12 col-lg-5">
                    <iframe style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB07gGVQ30H74qW9bWd_CFGoKj3UxF2I28&q=3737+Major+Mackenzie+Dr.+Suite+104+Woodbridge,On.+L4H0A2">
                    </iframe>
                </div>

            </div>
        </section>

        <div class="row jumbotron form" style="margin-bottom: 0px; padding-right: 1em;margin-right: 0px;">
            <main class="col-sm-12 col-md-12 col-lg-7">
                <!-- contact form -->
                <form method="post">
                    <fieldset>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name"
                               required/>
                        <br/>
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email"
                               required/>
                        <br/>
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter your phone"
                               required/>
                        <br/>
                        <label>Availability: </label>
                        <br/> &nbsp;

                        <input type="radio" id="available_morning" name="availibility"/>
                        <label for="available_morning">Mornings</label>
                        <br/> &nbsp;

                        <input type="radio" id="available_day" name="availibility"/>
                        <label for="available_day">Daytime</label>
                        <br/> &nbsp;

                        <input type="radio" id="available_evening" name="availibility"/>
                        <label for="available_evening">Evenings</label>
                        <br/>
                        <br/>
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" class="form-control"></textarea>
                        <br/>
                        <button type="button" class="btn btn-success">Submit</button>
                    </fieldset>
                </form>
            </main>

            <aside class="page_contact col-md-5 col-lg-5">
                <img src="../images/phone.jpg" alt="Call us"/>
            </aside>
        </div>
    </div>


<?php include_once('../config/footer.php'); ?>