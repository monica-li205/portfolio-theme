<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<main class="home-container">
  <div class="title-container">
    <h1 class="animate__animated animate__fadeindown page-title">MONICA LI</h1>
  </div>
  <div class="page-description">
    <p class="animate__animated animate__fadeinleft home-description">
      Full-stack web developer with an enthusiasm for front-end development and design.
      <br>
      Passionate about aesthetically pleasing web design and intuitive user interfaces.
    </p>
  </div>
  <div class="sm-links">
    <table>
      <tr>
        <td>
          <a href="https://github.com/monica-li205" target="_blank" rel="noopener">
            <div id="link-github" class="link-container">
              <div class="icon-container">
                <i class="fa fa-github-alt icon-button" aria-hidden="true"></i>
              </div>
              <p class="animate__animated animate__fadeinleft">GITHUB</p>
            </div>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <a href="https://www.linkedin.com/in/monica-li-035151203/" target="_blank" rel="noopener">
            <div id="link-linkedin" class="link-container">
              <div class="icon-container">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </div>
              <p class="animate__animated animate__fadeinleft">LINKEDIN</p>
            </div>
          </a>
        </td>
      </tr>
      <tr>
        <td>
          <a href="https://www.instagram.com/monili_draws/" target="_blank" rel="noopener">
            <div id="link-instagram" class="link-container">
              <div class="icon-container">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </div>
              <p class="animate__animated animate__fadeinleft">INSTAGRAM</p>
            </div>
          </a>
        </td>
      </tr>

    </table>
  </div>
  <div class="img1">
    <img src="https://ml-portfolio.s3-us-west-2.amazonaws.com/meowtivate.png" alt="img1">
    <p class="img-caption">meowtivate</p>
  </div>
  <div class="img2">
    <img src="https://ml-portfolio.s3-us-west-2.amazonaws.com/scheduler.png" alt="img2">
    <p class="img-caption">inPINity</p>
  </div>
  <div class="img3">
    <img src="https://ml-portfolio.s3-us-west-2.amazonaws.com/tweeter-crop.png" alt="img2">
    <p class="img-caption">scheduler</p>
  </div>
  <div class="img4">
    <img src="https://ml-portfolio.s3-us-west-2.amazonaws.com/tweeter.png" alt="img4">
    <p class="img-caption">tweeter</p>
  </div>
  <div class="bottom-nav-buttons">
    <a href="/wordpress/about" class="nav-button">
      <i class="fa fa-user icon-button" aria-hidden="true"></i>
      <h2>about</h2>
    </a>
    <a href="/wordpress/contact" class="nav-button">
      <i class="fa fa-envelope icon-button" aria-hidden="true"></i>
      <h2>contact</h2>
    </a>
  </div>
  </div>
  <div class="top-nav-buttons">
    <a href="/wordpress/projects" class="nav-button">
      <i class="fa fa-folder-open icon-button" aria-hidden="true"></i>
      <h2>projects</h2>
    </a>
    <a href="https://www.canva.com/design/DAEVBjKqOr8/kUITg8ss9Tf2TOtpIR2KAw/view?utm_content=DAEVBjKqOr8&utm_campaign=designshare&utm_medium=link&utm_source=sharebutton"
      class="nav-button" target="_blank" rel="noopener">
      <i class="fa fa-download icon-button" aria-hidden="true"></i>
      <h2>resume</h2>
    </a>
  </div>
  <footer class="sticky-footer">
    <?php get_header(); ?>
  </footer>
</main>