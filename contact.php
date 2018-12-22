 <?php require "php/header.php";?>
 <?php require "php/footer.php";?>
 <?php require "contactus.php";?>
		<style>
	body{background-image:url(images/hotel5.jpg)}
	</style> 
	
<div class="contactus">  
  <form id="contact" action="" method="post">
    <h3>Contact us </h3>
   
    <fieldset>
      <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="mail" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" name="number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" name="site" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." name="message" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit">Submit</button>
    
  </form>
</div>

