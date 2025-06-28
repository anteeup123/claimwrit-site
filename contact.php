<?php 
$pageTitle = "Contact ClaimWrit";
$currentPage = 'contact';
include 'includes/header.php'; 
?>

<main class="section">
  <h1>Contact Our Team</h1>
  
  <div class="contact-methods">
    <div class="contact-card">
      <h3><i class="fas fa-envelope"></i> Email Us</h3>
      <p>
        <a href="mailto:info@claimwrit.com">info@claimwrit.com</a><br>
        Typically respond within 24 hours
      </p>
    </div>

    <div class="contact-card">
      <h3><i class="fas fa-phone"></i> Call Us</h3>
      <p>
        <a href="tel:9544081937">(954) 408-1937</a><br>
        Mon-Fri, 9AM-5PM EST
      </p>
    </div>

    <div class="contact-card">
      <h3><i class="fas fa-map-marker-alt"></i> Visit Us</h3>
      <address>
        123 Legal Services Way<br>
        Fort Lauderdale, FL 33301
      </address>
    </div>
  </div>

  <div class="contact-divider">
    <span>OR</span>
  </div>

  <form class="contact-form" action="process-contact.php" method="POST">
    <h3>Send a Message</h3>
    
    <div class="form-row">
      <div class="form-group">
        <label for="name">Full Name*</label>
        <input type="text" id="name" name="name" required>
      </div>
      
      <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" id="email" name="email" required>
      </div>
    </div>

    <div class="form-group">
      <label for="subject">Subject</label>
      <select id="subject" name="subject">
        <option value="General Inquiry">General Inquiry</option>
        <option value="Service Questions">Service Questions</option>
        <option value="Technical Support">Technical Support</option>
      </select>
    </div>

    <div class="form-group">
      <label for="message">Message*</label>
      <textarea id="message" name="message" rows="6" required></textarea>
    </div>

    <button type="submit" class="btn-submit">
      <i class="fas fa-paper-plane"></i> Send Message
    </button>
  </form>
</main>

<?php include 'includes/footer.php'; ?>