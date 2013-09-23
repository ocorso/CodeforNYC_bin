<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
			    <!-- Carousel - but not using at the moment
    ================================================== -->
    <div class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php bloginfo('template_directory'); ?>/images/carousel/c1.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>We Are #BetaNYC</h1>
              <p class="lead">
                Come join developers, designers, data geeks, leaders, and idea-makers who volunteer to help NYC's
                government and civic orgs adopt open web technologies.
              </p>
              <a class="btn btn-large btn-primary" 
                href="http://www.meetup.com/betanyc" target="_blank">Stop By Our Meetups</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img src="<?php bloginfo('template_directory'); ?>/images/captain.png">
          <h2>Come To Our Meetups</h2>
          <p>A casual <a title="#BetaNYC Meetup" href="http://meetup.com/betaNYC/">meetup</a>, usually weekly.</p>
          <p><a class="btn" href="#meetup">View details &raquo;</a></p>
        </div><!-- /.span4 -->
       
        <div class="span4">
          <img src="<?php bloginfo('template_directory'); ?>/images/community.png">
          <h2>Join Online Discussions</h2>
          <p><a href="http://groups.google.com/a/codeforamerica.org/group/brigade/">
            An open conversation online</a> about what we're doing now and what's next.</p>
          <p><a class="btn" href="#groups">View details &raquo;</a></p>
        </div><!-- /.span4 -->
       
        <div class="span4">
          <img src="<?php bloginfo('template_directory'); ?>/images/cfa_logo_greyscale.png">
          <h2>See Our Inspiration</h2>
          <p><a href="http://codeforamerica.org/">Code for America</a> is the organization that helped inspire 
            many of us that we can change our City. 
          </p>
          <p><a class="btn" href="#cfa">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

 <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="<?php bloginfo('template_directory'); ?>/images/i-heart-ny.jpg">
        <h2 class="featurette-heading">Join #betaNYC, <span class="muted">a Code for America Brigade.</span></h2>
        <h3>We are:</h3>
        <p class="lead">
          <ul class="lead">
              <li>the largest civic technology gathering in silicon alley </li>
              <li>the most fun civic coder startup anywhere</li>
              <li>a place where an open government community is thriving</li>
              <li><a href="http://groups.google.com/a/codeforamerica.org/group/brigade/?hl=en">List of Future Ideas!</a> Submit your Own Ideas, or Pick One To Help With</li>
          </ul>
        </p>
      </div>

  <hr class="featurette-divider">

      <div class="featurette">
        <a href="http://brigade.codeforamerica.org/">
          <img name="cfa" id="cfa" class="featurette-image pull-right" src="<?php bloginfo('template_directory'); ?>/images/cfa_brigade_logo.png">
        </a>
        <h2 class="featurette-heading">Want To Help Your City? <span class="muted">Good, we could use your help.</span></h2>
        <p class="lead">We are a <a href="http://brigade.codeforamerica.org/">Code for America Brigade</a>, 
          which means we're volunteers that contribute 
          our talents toward improving the way our local governments and community organizations use the web. 
          Brigade is about action and you're here because you are someone who takes action. 
          <a href="http://brigade.codeforamerica.org/pages/activities">See what kind of things brigades do</a>, or watch the 
            <a href="http://codeforamerica.org/2012/03/08/jennifer-pahlka-at-ted-video/">
              inspirational TED talk given by Jennifer Pahlka, the founder of Code for America.</a></p>
      </div>
      
      <hr class="featurette-divider">

      <div class="featurette">
        <a href="http://meetup.com/betaNYC/ ">
          <img name="meetup" id="meetup" class="featurette-image pull-left" src="<?php bloginfo('template_directory'); ?>/images/meetup.jpg">
          </a>
        <h2 class="featurette-heading">We Meet Often. <span class="muted">Come Join Us.</span></h2>
        <p class="lead">View our <a title="#BetaNYC Meetup" href="http://meetup.com/betaNYC/">
          Meetups site</a> for our next location and time. We try to meet every few Wednesdays where we hack (develop) our projects,  
          or brainstorm on current issues and activities around New York City. It's actually a lot of fun, with great people and usually food/drink.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <a href="http://groups.google.com/a/codeforamerica.org/group/brigade/?hl=en">
          <img name="groups" id="groups" class="featurette-image pull-right" src="<?php bloginfo('template_directory'); ?>/images/google_groups.png">
        </a>
        <h2 class="featurette-heading">We Discuss Things Online. <span class="muted">Join and Introduce Yourself.</span></h2>
        <p class="lead">
          Can't make it to a meetup?  No problem. We collaborate on projects, ask for help, and post wins 
          to our <a href="http://groups.google.com/a/codeforamerica.org/group/brigade/?hl=en">Code for America Brigade GoogleGroup</a> where you can get new posts in email and reply. We welcome anyone to sign-up... you might just see something you're interested in helping with. Email <a href="mailto:brigade@codeforamerica.org" title="The CfA Brigade">here</a> to join.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img name="contact" id="contact" class="featurette-image pull-right" src="">
        <h2 class="featurette-heading">Want Even More Info? <span class="muted">Contact Us.</span></h2>
        <p class="lead">Our Brigade Captains are Noel Hidalgo (<a href="mailto:noel@codeforamerica.org">noel@codeforamerica.org</a> or <a href="https://twitter.com/noneck">@noneck</a>) and Owen Corso (<a href="mailto:owen@ored.net">owen@ored.net</a> or <a href="https://twitter.com/ocorso">@ocorso</a>) and we'd love to hear from you!</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

<?php get_footer(); ?>