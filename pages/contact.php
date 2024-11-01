<?php include('../components/header.php');?>

    <section id="contact">
        <h2>Contact me</h2>
        <form action="../components/contact-form.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Your name" required><br>
            <input type="text" name="email" id="email" placeholder="Your email" required><br>
            <textarea name="message" id="message" placeholder="Your message"></textarea><br>
            <button type="submit">Send</button>
        </form>
    </section>

<?php include('../components/footer.php');?>

