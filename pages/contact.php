<?php include('../components/header.php'); ?>

<section id="contact" class="section-margin">
    <h2 class="font-subheader">Contact me</h2>
    <form action="../components/contact-form.php" method="POST">
        <input type="text" name="name" id="name" placeholder="Your name" required><br>
        <input type="text" name="email" id="email" placeholder="Your email" required><br>
        <textarea name="message" id="message" placeholder="Your message"></textarea><br>
        <button type="submit">Send</button>

        <?php if (isset($_SESSION['errors'])) :?>
        <div class="error-messages">
            <?php foreach ($_SESSION['errors'] as $error) :?>
                <p><?php echo $error;?></p>
            <?php endforeach;?>
        </div>
        <?php unset($_SESSION['errors']);?>
        <?php endif;?>
        <?php if (isset($_GET['success'])) :?>
        <div class="success-message">
            <p class="font-body">Thank you for your message! We'll get back to you soon.</p>
        </div>
    <?php endif;?>
    </form>
</section>

<?php
    unset($_SESSION['errors']);
    session_write_close();
?>
<?php include('../components/footer.php');?>