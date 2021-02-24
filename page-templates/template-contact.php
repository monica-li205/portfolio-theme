<?php
/**
 * Template Name: Template: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<main class="contact-container">
  <div class="title-container">
    <h1 class="page-title">CONTACT</h1>
  </div>
  <form class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="39" title="Inquiries"]'); ?>
  </form>
  <footer class="sticky-footer">
    <?php get_header(); ?>
  </footer>
</main>