<?php 
// Template Name: Contact Page
get_header(); 
?>

<div class="contact-page">
    <section class="contact-section">
        <h2 class="section-title">Contact Us</h2>
        <p class="section-subtitle">We'd love to hear from you</p>

        <div class="contact-wrapper">
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>

            <div class="contact-info">
                <h3>Contact Info</h3>
                <p>Email: info@example.com</p>
                <p>Phone: +123 456 789</p>
                <p>Address: 123 Street, City</p>
            </div>
        </div>
    </section>
</div>


<?php get_footer(); ?>
