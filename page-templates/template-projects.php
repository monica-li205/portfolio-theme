<?php
/**
 * Template Name: Template: Projects
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<main class="projects-container">
  <div class="title-container">
    <h1 class="page-title">PROJECTS</h1>
  </div>
  <div class="img01"></div>
  <div class="img02"></div>
  <div class="img03"></div>
  <div class="img04"></div>
  <div class="img05"></div>
  <a href="https://github.com/monica-li205"
      class="github-container" target="_blank" rel="noopener">
      <span class="text-button">
      <i class="fa fa-github icon-button" aria-hidden="true"></i>
      GITHUB
    </span>
  </a>
  <footer class="sticky-footer">
    <?php get_header(); ?>
  </footer>
</main>