<?php get_header(); ?>

<!-- A responsive hero section -->

<section id="hero">

  <!-- <div class="bg" style="background-image: url(<?php bloginfo('template_directory'); ?>/img/bg.jpg"></div> -->

  <video autoplay loop>
    <source src="<?php bloginfo('template_directory'); ?>/vid/bg.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="grad"></div>

  <div class="container">

    <img src="<?php bloginfo('template_directory'); ?>/img/tv.png"/>
    <hr>
    <h2><?php bloginfo("description"); ?></h2>
    <div class="buttons">

      <a class="button" href="#watch"><span>Learn more</span></a>

      <a class="button watch" href="#"><span>Watch on Youtube</span><i class="fa fa-play"></i></a>

    </div>

  </div>
</section>

<!-- An embedded Youtube video in the "Watch" section -->

<section id="watch">
  <div class="container">

    <h3>Watch</h3>
    <p>Marfa lo-fi wayfarers, chia hammock whatever skateboard gentrify everyday carry deep v street art put a bird on it occupy mustache forage.</p>

    <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/1lAobSkstCc" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="buttons">

      <a class="button watch" href="#"><span>Watch on Youtube</span><i class="fa fa-play"></i></a>

    </div>

  </div>
</section>

<!-- The team gallery -->

<section id="team">
  <div class="container">

    <h3>Meet the team</h3>
    <p>Description goes here</p>

  </div>
</section>

<!-- A mailing list subscribe CTA -->

<section id="subscribe">
  <div class="container">

    <h3>Get on the list</h3>
    <p>Description goes here</p>

  </div>
</section>

<!-- Service triplet boxes linking to email. -->

<section id="services">
  <div class="container">

    <h3>We cover events</h3>
    <p>We accept hires from other student groups and University organisations. We’ll work with you to cover events, promote your activities and more. All income is reinvested back into Smoke TV.</p>

    <div class="services">
      <div class="service">
        <h4>Live broadcasts</h4>
        <p>We’ll add value to your events by livestreaming them in HD.</p>
        <img src="<?php bloginfo('template_directory'); ?>/img/1.png"/>
        <a class="button" href="#">Contact</a>
        <a class="cover" href="#"></a>
      </div>
      <div class="service">
        <h4>Promos</h4>
        <p>We’ll work with you to create a trailer for an event or campaign.</p>
        <img src="<?php bloginfo('template_directory'); ?>/img/2.png"/>
        <a class="button" href="#">Contact</a>
        <a class="cover" href="#"></a>
      </div>
      <div class="service">
        <h4>Highlights</h4>
        <p>We’ll come along to your events and film short highlights.</p>
        <img src="<?php bloginfo('template_directory'); ?>/img/3.png"/>
        <a class="button" href="#">Contact</a>
        <a class="cover" href="#"></a>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
