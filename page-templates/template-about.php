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
    <h1 class="animate__animated animate__fadeindown page-title">ABOUT</h1>
  </div>
  <div class="avatar-container">
    <div class="avatar-img">
      <img src="https://ml-portfolio.s3-us-west-2.amazonaws.com/avatar.jpg" alt="avatar">
    </div>
  </div>
  <div class="animate__animated animate__fadeinleft bio">
    <h2>ABOUT</h2>
    <p>Hello! My name is Monica and I am a full stack web developer based in Vancouver, BC. I am passionate about the
      visuals and motion design of a website!</p>
  </div>
  <div class="animate__animated animate__fadeinleft background">
    <h2>BACKGROUND</h2>
    <p>I come from a medical/dental background. I worked as a clinical assistant in a sleep therapy centre and as a
      dental hygienist for 3 years before making the switch to web dev in October 2020.</p>
  </div>
  <div class="animate__animated animate__fadeinleft skills">
    <h2>SKILLS</h2>
    <p>FRAMEWORKS, LIBRARIES, AND ENVIRONMENTS: NodeJS, ReactJS, Rails, Ajax, Express, EJS, Jquery, Bootstrap, SCSS,
      React Native, ActiveRecord, Material UI
    </p>
    <p>
      SYSTEMS, CMS AND DATABASES: SQL, Git, ElephantSQL, MongoDB
    </p>
    <p>
      LANGUAGES: Javascript, Ruby, Jquery, HTML, CSS
    </p>
    <p>
      Currently Learning: PHP, Wordpress, SVG animations
    </p>
  </div>
  <div class="animate__animated animate__fadein resume-dl">
    <span class="text-button">
      <i class="fa fa-download icon-button" aria-hidden="true"></i>
      RESUME
    </span>
  </div>
  <footer class="sticky-footer">
    <?php get_header(); ?>
  </footer>
</main>