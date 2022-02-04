<?php 
    include('header2.php')
?>

<div class="contact">
    <div class="contact-inner">
        <h3>Contact</h3>
        <div class="navigation">
            <a href="index.php">Home <i class="fas fa-chevron-right"></i> <a href="contact.php"> Contact</a></a>
        </div>
        <p>Please fill out all fields *</p>
        <form class="form">
            <div class="grid-col2">
                <div class="left-col">
                    <label for="name">*Name:</label>
                    <input type="text" for="name" id="name" name="name" data-validate-field="name" placeholder="Name">
                    <label for="lname">*Last name:</label>
                    <input type="text" for="lname" id="lname" data-validate-field="name" placeholder="Last name">
                    <label for="email">*Email:</label>
                    <input type="email" for="email" id="email" data-validate-field="email" name="email" placeholder="Email">
                    <label for="pnum">*Phone number:</label>
                    <input type="text" for="pnum" id="pnum" data-validate-field="phone" placeholder="Phone number">
                </div>
                <div class="right-col">
                    <div class="textarea">
                        <label for="mess">*Your message:</label>
                        <textarea name="mess" id="mess" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <a href="#" class="style2 send">Send your query</a>
        </form>
    </div>
</div>

<div class="modal">
    <div class="modal-box">
        <div class="modal-body">
            <h4>Thank you!</h4>
            <p>We received your query and we will answer as soon as possible. <br>Thank you for your patience</p>
            <a href="contact.php" class="style2"> Return</a>
        </div>
        <img class="closeBtn" src="img/guitars/close.svg" alt="">
    </div>
</div>
<script src="js/main.js"></script>
<script src="js/just-validate.min.js"></script>

<?php 
    include('footer.php')
?>