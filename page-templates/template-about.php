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
    <div class="avatar-img">
      <img src="https://ml-portfolio.s3-us-west-2.amazonaws.com/avatar.jpg" alt="avatar">
    </div>
  </div>
  <div class="bio">
    <h2>WHO AM I?</h2>
    <p>i am a cat meow</p>
  </div>
  <div class="background">
    <h2>BACKGROUND</h2>
    <p>i am an ex-dental hygienist</p>
  </div>
  <div class="skills">
    <h2>SKILLS</h2>
    <p>not many</p>
  </div>
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