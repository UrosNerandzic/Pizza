<?php
include './partials/contact-post.php';
?>

<?php 
    include './partials/menu.php';
    $contactMap = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11318.167161915662!2d20.401398768671488!3d44.83089868349649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65757fb66f99%3A0x627e7ccd2003ea06!2z0JHRg9C70LXQstCw0YAg0JzQuNGF0LDRmNC70LAg0J_Rg9C_0LjQvdCwIDE4MSwg0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1592227106143!5m2!1ssr!2srs"; 
    include './partials/social.php';
?>

<?php
include './partials/header.php';
?>

<main>
  <div class="container">

    <?php
                if(isset($formErrors)){
                    if(empty($formErrors)){
                    ?>
    <div class="success-wrapper">
      <?php echo 'Your message has been sent successfully.Thank you for writing to us!' ?>
    </div>
    <?php
                }
            }
            ?>

    <section class="contact-section">
      <aside class="form-wrapper">
        <form method="post" action="" class="contact-form">
          <div class="form-group">
            <label for='name'>Your Name*</label>
            <input type="text" name="name" id='name' value="" class="form-control" />
            <div class="error-wrapper">
              <?php
                                if (isset($formErrors['required']) && in_array('Name not provided.', $formErrors['required'])) {
                                     echo 'Name not provided.';
                                } elseif (isset($formErrors['required']) && in_array('Name is required.', $formErrors['required'])) {
                                     echo 'Name is required.';
                                }
                                ?>
            </div>
          </div>

          <div class="form-group">
            <label for="email">Your Email*</label>
            <input type="email" name="email" id="email" value="" class="form-control" />
            <div class="error-wrapper">
              <?php
                                if (isset($formErrors['required']) && in_array('Email not provided.', $formErrors['required'])) {
                                        echo 'Email not provided.';
                                } elseif (isset($formErrors['email']) && in_array('Email is required', $formErrors['email'])) {
                                        echo 'Email is required.';
                                } elseif (isset($formErrors['email']) && in_array('Please provide a valid Email address', $formErrors['email'])) {
                                        echo 'Please provide a valid Email address.';
                                   }
                                ?>
            </div>
          </div>

          <div class="form-group">
            <label for="message">Your Message*</label>
            <textarea name="message" id='message' value='' class="form-control" rows="7"></textarea>
            <div class="error-wrapper">
              <?php
                                if (isset($formErrors['required']) && in_array('Message not provided.', $formErrors['required'])) {
                                        echo 'Message not provided.';
                                } elseif (isset($formErrors['required']) && in_array('Message is required.', $formErrors['required'])) {
                                        echo 'Message is required.';
                                }
                                ?>

            </div>
          </div>

          <div class="form-group">
            <button type="submit" name="send" value="contact" class="btn">Send Message</button>
          </div>
        </form>
      </aside>
      <div class="contact-map">
        <iframe src="<?php echo $contactMap ?>"></iframe>
      </div>
    </section>
  </div>
</main>

<?php
        include './partials/footer.php';
    ?>