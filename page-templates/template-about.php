<?php
/**
 * Template Name: Template: About
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<main class="about-container">
  <div class="title-container">
    <h1 class="page-title">ABOUT</h1>
  </div>
  <div class="avatar-container">
    <div class="avatar-img"></div>
  </div>
  <div class="bio"></div>
  <div class="background"></div>
  <div class="skills"></div>
  <div class="resume-dl">
    <div class="text-button">RESUME</div>
  </div>

  <footer class="sticky-footer">
    <?php get_header(); ?>
  </footer>
</main>