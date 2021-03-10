<?php require APPROOT . '/views/subscription/subscriptionTop.php'; ?>

<div class="content">
    <div class="headings">
        <h1 class="heading">Subscribe to newsletter</h1>
        <p class="subheading">Subscribe to our newsletter and get 10% discount on pineaple glasses.</p>
    </div>

    <!-- Newsletter subscription form  -->
    <div class="form-container">
        <form action="<?php echo URLROOT; ?>/subscriptions/add" name="emailForm" class="form" method="POST" oninput="formValidation()">
            <div class="email">

                <input class="email-input-field" type="text" id="email" name="email" placeholder="Type your email adress here..." value="<?php echo $data['email']; ?>">
                <input class="submit-button" id="submit" type="submit" value="">

            </div>
            <span class="error" id="error"><?php echo $data['error']; ?></span>
            <div class="checkboxInput">
                <input type="checkbox" id="tosCheckbox" name="tosCheckbox" <?php if (isset($_POST['tosCheckbox'])) {
                                                                                echo 'Checked';
                                                                            }; ?>>
                <span class="checkbox-text">I agree to <a class="tos" href="#"><u>terms of service</u></a></span>
            </div>
        </form>
    </div>

    <script src="<?php echo URLROOT; ?>/js/script-newsletter.js"></script>
    <?php require APPROOT . '/views/subscription/subscriptionBottom.php'; ?>