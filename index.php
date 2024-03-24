<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Job Hunter</title>
    <meta name="description" content="job, career" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Halellujah" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/responsive.css" />
    <link rel="stylesheet" href="styles/typewriter.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <body>
    <main>
      
      <?php include 'header.inc'; ?>

      <!-- Banner -->
      <div id="banner" class="col12 s-col12 col">
        <img src="images/banner.jpg" alt="banner" class="col12 s-col12 col" />

        <div class="wrapper" id="slogan">
          <div class="typing-demo">Find your true self.</div>
          <a href="apply.html" class="button" id="APPLY" target="_blank"
            >Apply now</a
          >
        </div>
      </div>

      <section class="col12 s-col12 col" id="greeting">
        <h1 class="typing-demo col2 s-col2 col">Greeting:</h1>

        <div>
          <p>
            <strong>Are you passionate about shaping the future?</strong>

            <br />
            We are seeking sharp minds to join our dynamic and innovative team
            at Job Hunter, a leader in the IT industry.
          </p>

          <p>
            We are driven by a team of passionate individuals who believe in
            using data, technology, and creativity to solve real-world
            challenges and make a positive impact.
          </p>

          <p>
            If you're a talented Economic Analyst or Software Engineer who
            thrives in a dynamic environment and is eager to make a difference,
            we want to hear from you!
          </p>

          <p>
            Please visit <a href="https://youtu.be/jjxh6ULrajo">this youtube video</a> to learn more about
            these opportunities and submit your application.
          </p>
        </div>
      </section>

      <hr />

      <!-- Job category -->
      <section class="col12 s-col12 col" id="categories">
        <div class="col12 s-col12 col">
          <h1 id="main-header" class="typing-demo col2 s-col2 col">
            Collaborated with..
          </h1>
          <a href="#" class="typing-demo col10 s-col10 col"
            >More companies -></a
          >
        </div>
        <div class="col12 s-col12 col cate" id="grid_view">
          <button class="button hover box col2 s-col2">
            Microsoft <br />
            <img
              src="images/svg/microsoft-svgrepo-com.svg"
              alt="logo image of Microsoft"
              class="svg"
            />
          </button>
          <!-- Yes, there's too many classes, we know, it's for show, and for the responsive design too  -->
          <button class="button hover box col2 s-col2">
            Oracle <br />
            <img
              src="images/svg/oracle-svgrepo-com.svg"
              alt="logo image of Oracle"
              class="svg"
            />
          </button>

          <button class="button hover box col2 s-col2">
            Lenovo <br />
            <img
              src="images/svg/brand-youtube-svgrepo-com.svg"
              alt="logo image of Youtube"
              class="svg"
            />
          </button>
          <!--  Because these are buttons, and we can't use Js, so they're next to useless. =// -->
          <button class="button hover box col2 s-col2">
            Amazon <br />
            <img
              src="images/svg/amazon-round-svgrepo-com.svg"
              alt="logo image of Amazon"
              class="svg"
            />
          </button>
          <button class="button hover box col2 s-col2">
            Github <br />
            <img
              src="images/svg/brand-github-svgrepo-com.svg"
              alt="logo image of Github"
              class="svg"
            />
          </button>
          <!-- Original idea was to link to other popular IT business company pages, but somehow it messes up the original code too much => idea scrapped. -->
          <button class="button hover box col2 s-col2">
            Adobe <br />
            <img
              src="images/svg/adobe-svgrepo-com.svg"
              alt="logo image of Adobe"
              class="svg"
            />
          </button>
          <button class="button hover box col2 s-col2">
            Apple <br />
            <img
              src="images/svg/apple-173-svgrepo-com.svg"
              alt=""
              class="svg"
            />
          </button>
          <button class="button hover box col2 s-col2">
            Tesla <br />
            <img src="images/svg/tesla-svgrepo-com.svg" alt="" class="svg" />
          </button>
        </div>
      </section>
    </main>
    <!-- Footer -->

    <footer class="footer">
      <div class="footer-container">
        <div class="footer-row">
          <div class="footer-co">
            <h4 id="website">Website</h4>
            <ul>
              <li><a href="about.html">about us</a></li>
              <li><a href="about.html">our services</a></li>
              <li><a href="about.html">job policy</a></li>
            </ul>
          </div>
          <div class="footer-co">
            <h4 id="help">help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">refunds</a></li>
              <li><a href="apply.html">Job status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
          <div class="footer-co">
            <h4 id="member">Memberships</h4>
            <ul>
              <li><a href="#">free trial</a></li>
              <li><a href="#">basic option</a></li>
              <li><a href="#">long-term plan</a></li>
              <li><a href="#">premium access</a></li>
            </ul>
          </div>
          <div class="footer-co">
            <h4 id="follow">follow us</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/" target="_blank">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Visit our Facebook page</span>
              </a>
              <a href="https://twitter.com/?lang=en" target="_blank"
                ><i class="fab fa-twitter" aria-hidden="true"></i
                ><span class="sr-only">Visit our Twitter page</span></a
              >
              <a href="https://www.instagram.com/" target="_blank"
                ><i class="fab fa-instagram" aria-hidden="true"></i
                ><span class="sr-only">Visit our Instagram page</span></a
              >
              <a href="https://www.linkedin.com/" target="_blank"
                ><i class="fab fa-linkedin-in" aria-hidden="true"></i
                ><span class="sr-only">Visit our Linkedin page</span></a
              >
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
