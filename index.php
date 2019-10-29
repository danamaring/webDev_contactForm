<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Contact Form</title>
</head>
<body>
    <h1>This is PHP contact project</h1>

    <section>
      <h2 class="hidden">Contact form</h2>

      <form class="contact_form" method="post" action="data/contact.php">
        <label for="name">Name:</label>
        <input name="name" type="text" required id="name" size="30">

        <label for="lastName">Email:</label>
        <input name="email" type="text" required id="lastName" size="30">

        <label for="subject">Subject line:</label>
        <input name="subject" type="text" required id="subject" size="30">

        <label for="message">Message:</label>
        <textarea name="message" id="message" required cols="50" rows="8"></textarea>

        <button id="submit">SUBMIT</button>
      </form>
    </section>
    
</body>
</html>





