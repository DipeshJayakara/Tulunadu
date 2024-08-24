<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Tulu Sahitya</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="mainpage.css">
   
</head>
<body>
<?php
        
        include('D:\xampp_original\htdocs\tulunadu\contact.php'); // Check the correct path
    ?>
    <div>
        <div class="container_contact_header">
            <h1>Contact Us</h1>
        </div>
        <section class="header">
            <!-- Navigation code goes here -->
        </section>
        <section>
            <article>
                <div class="container_contact">
                <form id="contactForm" action="contact.php" method="post">
                  <label for="field1">Name:</label>
                  <input type="text" id="name" name="field1" required>

                  <label for="field2">Email:</label>
                  <input type="email" id="email" name="field2" required>

                  <label for="field3">Message:</label>
                  <textarea id="message" name="field3" required></textarea>

                  <button type="submit">Submit</button>
              </form>

                </div>
            </article>
        </section>
    </div>

    <div class="footer_bottom">
       <div class="footer-content">
                            <div class="footer-item">
                              <h3>Contact Us</h3>
                              <p>Email: info@example.com</p>
                              <p>Phone: 123-456-7890</p>
                            </div>
                            <div class="footer-item">
                                <h3>Links</h3>
                                <ul>
                                  <li><a href="#">Home</a></li>
                                  <li><a href="#">Explore</a></li>
                                  <li><a href="#">About Us</a></li>
                                  <li><a href="#">Contact</a></li>
                                </ul>
                              </div>
                            <div class="footer-item">
                                <h3>Social Media</h3>
                                <ul>
                                  <li><a href="#">Facebook</a></li>
                                  <li><a href="#">Twitter</a></li>
                                  <li><a href="#">Instagram</a></li>
                                </ul>
                              </div>
                        </div>
                        <div class="footer-bottom">
                            <p>&copy; 2023 Culture Website</p>
                          </div>
    </div>

    <script src="script.js"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // You can add your own logic to handle form submission here
            alert('Form submitted!'); // For demonstration purposes, showing an alert
        });
    </script>
</body>
</html>
