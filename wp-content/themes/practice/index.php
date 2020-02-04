<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="info">
  <h1 class="exampleHead">Album example</h1>
  <h3 class="exampleMain">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</h3>
  <div class="buttons">
    <button type="button" class="btn btn-primary" id="barbtn">Main call to action</button>
    <button type="button" class="btn btn-secondary" id="barbtn">Secondary action</button>
  </div>
 </div>
 
 <div class="card-deck">
  <div class="card">
    <?php 
    
     if ( have_posts() ) : 
      while ( have_posts() ) : the_post(); 
      if ( has_post_thumbnail() ) {
         the_post_thumbnail("medium");
       }
    ?>
    <div class="card-body">
      <h5 class="card-title"><?php the_title(); ?></h5>
      <p class="card-text"><?php the_content(); ?></p>
      <div class="btn-group" role="group" aria-label="Basic example">
       <a href="<?php the_permalink(); ?>" class="postbtn">View</a>
        <a href="https://tyxandevelopment.com/rosina/wp-admin/post.php?post=20&action=edit" class="postbtn">Edit</a>
        <p class="card-text"><small class="text-muted">9 mins</small></p>
        </div>
    </div>
  </div>
   <?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="info">
  <h1 class="exampleHead">Album example</h1>
  <h3 class="exampleMain">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</h3>
  <div class="buttons">
    <button type="button" class="btn btn-primary" id="barbtn">Main call to action</button>
    <button type="button" class="btn btn-secondary" id="barbtn">Secondary action</button>
  </div>
 </div>
 
 <div class="card-deck">
   <?php 
     if ( have_posts() ) : 
      while ( have_posts() ) : the_post(); 
    ?>
  <div class="card mb-4">
    <div class="card-body">
      <?php the_post_thumbnail("medium"); ?>
      <h5 class="card-title"><?php the_title(); ?></h5>
      <p class="card-text"><?php the_content(); ?></p>
      <div class="btn-group" role="group" aria-label="Basic example">
       <a href="<?php the_permalink(); ?>" class="postbtn">View</a>
        <a href="https://tyxandevelopment.com/rosina/wp-admin/post.php?post=<?php the_post_id ?>&action=edit" class="postbtn">Edit</a>
        <p class="card-text"><small class="text-muted">9 mins</small></p>
        </div>
    </div>

  </div>
   
   <?php endwhile; 
     endif; 
   ?>
      
  
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

   <?php endwhile; 
     endif; 
   ?>
      
  
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
