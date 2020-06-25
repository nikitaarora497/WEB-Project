<html>
<head>
<link rel="stylesheet" href="feed.css">
</head>
<body>
<div class="container">  
  <form id="contact" action="createnew.php" method="post">
    <h3>Feedback Form</h3>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name = "fname" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name = "email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" name = "mobile" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" name = "message" required></textarea>
    </fieldset>
    <fieldset>
      <button name="feed" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
</body>
</html>