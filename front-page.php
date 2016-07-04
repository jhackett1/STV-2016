<?php get_header(); ?>

<!-- An embedded Youtube video in the "Watch" section -->

<section id="watch">

  <div id="slice"></div>


  <div class="container">

    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png"/>


    <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/1lAobSkstCc" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="buttons">
      <div>
        <hr>
        <p>We are the <strong>University of Westminster’s student-run TV station</strong>. We bring together twenty thousand students across four campuses, and <strong>anyone</strong> can get involved.</p>
      </div>
      <a class="button watch" href="https://www.youtube.com/user/WestminsterSmokeTV" target="blank"><span>More on Youtube</span><i class="fa fa-play"></i></a>
    </div>
  </div>
</section>

<!-- The team gallery -->

<section id="team">
  <div id="grad"></div>
  <div class="container">
    <h3>What's going on?</h3>
    <hr>
    <p class="desc">Take a look at our current projects...</p>

      <script>
          $(document).ready(function(){

              $('.social-feed-container').socialfeed({

                  facebook: {
                      accounts: ['@smoketv'],
                      limit: 5,
                      access_token: '150849908413827|a20e87978f1ac491a0c4a721c961b68c'
                  },

                  instagram: {
                      accounts: ['smoketvcrew'],
                      limit: 2,
                      client_id: '8350ffadd7eb487893a3698307ea67cb',
                      access_token: ''
                  },

                  twitter:{
                      accounts: ['@wminsmoketv'],                      //Array: Specify a list of accounts from which to pull tweets
                      limit: 5,                                   //Integer: max number of tweets to load
                      consumer_key: 'DeiNAbk35FM7HtuHI7rwUvgCh',          //String: consumer key. make sure to have your app read-only
                      consumer_secret: 'QlD2zJn0IzAfoIqIzZ1kNheeJir4atuLnWCZHPtVvT0pzljdjW',//String: consumer secret key. make sure to have your app read-only
                   },

                  // GENERAL SETTINGS
                  length:400,                                      //Integer: For posts with text longer than this length, show an ellipsis.
                  show_media:true,
                  date_format: "s",
                  template: "<?php echo get_template_directory_uri(); ?>/bower_components/social-feed/template.html",
                  callback: function() {                          //Function: This is a callback function which is evoked when all the posts are collected and displayed
                      console.log("All posts collected!");
                  }

              });
          });
          console.log("testing");
      </script>

      <div class="social-feed-container" style="max-width: 600px; margin: 20px auto"></div>
      <div class="buttons">
        <a class="button watch" href="https://www.youtube.com/user/WestminsterSmokeTV" target="blank"><span>Watch on Youtube</span><i class="fa fa-play"></i></a>
      </div>
  </div>
</section>

<!-- A mailing list subscribe CTA -->

<section id="subscribe">
  <div class="container">



    <h3 class="animated fadeInUp">How to <span>make films</span> and influence people</h3>
    <hr>
    <p>Want to get involved with Smoke TV? Get on our mailing list and join the Facebook group. No experience is needed and full training is provided.</p>

    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup">
    <form action="//media.us13.list-manage.com/subscribe/post?u=bae3fdf7dc6f735f144847240&amp;id=ffaab9e48d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
    	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email" required>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bae3fdf7dc6f735f144847240_ffaab9e48d" tabindex="-1" value=""></div>
        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
    </form>
    </div>
    <!--End mc_embed_signup-->

  </div>
</section>

<!-- Service triplet boxes linking to email. -->

<section id="services">
    <div id="slice"></div>

  <div class="container">

    <h3>We cover events</h3>
    <hr>
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

  <div class="pagination">
    <a href="#watch"><i class="fa fa-caret-up"></i> Back to top</a>
  </div>

</section>

<?php get_footer(); ?>
