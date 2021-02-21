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
    <span class="text-button">
      <i class="fa fa-download icon-button" aria-hidden="true"></i>
      RESUME
    </span>
  </div>

  <footer class="sticky-footer">
    <?php get_header(); ?>
  </footer>
</main>