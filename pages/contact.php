<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php include('../components/header.php');?>

    <main>
        <section id="contact">
            <h2>Contact me</h2>
            <form action="../components/contact-form.php" method="POST">
                <input type="text" name="name" id="name" placeholder="Your name" required><br>
                <input type="text" name="email" id="email" placeholder="Your email" required><br>
                <textarea name="message" id="message" placeholder="Your message"></textarea><br>
                <button type="submit">Send</button>
            </form>
        </section>
    </main>

    <?php include('../components/footer.php');?>
    <script src="assets/js/main.js"></script>
</body>
</html>



