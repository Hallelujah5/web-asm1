<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Job Hunter</title>
  <meta name="description" content="job, career" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Minh Viet" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/jobs.css" />
  <link rel="stylesheet" href="styles/responsive.css" />
  <link rel="stylesheet" href="styles/typewriter.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
  <main>
  
  <!-- Navigation -->
  <?php include 'header.inc'; ?>
      
<!-- Banner for jobs -->
  <!-- Banner -->
  <div id="banner" class="col12 s-col12 col">
    <img src="images/job-banner.jpg" alt="banner" class="col12 s-col12 col" />

    <div class="wrapper">
      <label for="" class="typing-demo">Looking for jobs ?
      </label> 
      <a href="apply.html" class="button" id="APPLY" target="_blank"
      >Apply now</a
    >
    </div>
  </div>


    
    <section class="col12 s-col12 col" id="categories">
      <div class="col12 s-col12 col" id="div-potential-jobs">
        <h1 id="main-header" class="typing-demo col2 s-col2 col">
          Potential jobs
        </h1>
      </div>
      <div class="" id="grid_view" >
        <div class="button hover job-category col5 s-col5 col-">
          <strong class="job-name">Economic Analyst</strong> <br>
          <img  src="images/svg/economic-investment-svgrepo-com.svg" alt="abstract image for the Economic Analyst job" class="svg svg-width" >
          <h3>Job description</h3>
          <p>Research, collect, and analyze data to assess economic trends and develop forecasts.</p>
        </div>
        <div class="button hover job-category col5 s-col5 col-">
          <strong class="job-name">Software Engineer</strong> <br>
          <img  src="images/svg/computer-code-solid-svgrepo-com.svg" alt="abstract image for the Software Engineer job" class="svg svg-width">
          <h3>Job description</h3>  
          <p>The masterminds behind the digital tools and applications that shape our lives. </p>
        </div> 
      </div>
    </section>


    <!-- Job insight -->

    <section class="col12 s-col12 col" id="job-details">
      <h1>In-depth Job Insights</h1>

      <div class="job-detail">
        <h2 class="job-detail-h2">Economic Analyst</h2>
        <ul class="job-detail-ul">
          <li><strong>Industry:</strong> Finance & Economics</li>
          <li><strong>Role:</strong> Analyze economic scenarios and model economic forecasts.</li>
          <li><strong>Skills Required:</strong> Strong analytical skills, proficiency in statistical software, and understanding of economic trends.</li>
          <li><strong>Education:</strong> Minimum of a Bachelor's degree in Economics, Finance, or a related field.</li>
          <li><strong>Salary Range:</strong> $60,000 - $120,000 annually, depending on experience and location.</li>
          <li><strong>Job Outlook:</strong> Expected to grow by 8% from 2020 to 2030.</li>
          <li><strong>Work Environment:</strong> Primarily office-based with opportunities for remote work.</li>
          <li><strong>Key Responsibilities:</strong> Conducting research, preparing reports, and presenting economic forecasts.</li>
          <li><strong>Advancement Opportunities:</strong> Potential to advance to senior analyst positions or specialize in a particular field of economics.</li>
          <a class="button hover">Apply now</a>
        </ul>
      </div>
      <div class="job-detail">
        <h2 class="job-detail-h2">Software Engineer</h2>
        <ul class="job-detail-ul">
          <li><strong>Industry:</strong> Technology & Software Development</li>
          <li><strong>Role:</strong> Design, develop, and maintain software applications.</li>
          <li><strong>Skills Required:</strong> Proficiency in programming languages (e.g., Java, Python, C++), problem-solving, and software development methodologies.</li>
          <li><strong>Education:</strong> Minimum of a Bachelor's degree in Computer Science, Software Engineering, or a related field.</li>
          <li><strong>Salary Range:</strong> $70,000 - $150,000 annually, depending on experience and location.</li>
          <li><strong>Job Outlook:</strong> Expected to grow by 22% from 2020 to 2030.</li>
          <li><strong>Work Environment:</strong> Flexible, with options for in-office, hybrid, or fully remote work.</li>
          <li><strong>Key Responsibilities:</strong> Writing clean, scalable code, collaborating with teams, and troubleshooting software issues.</li>
          <li><strong>Advancement Opportunities:</strong> Opportunities to move into lead developer, architect, or managerial roles.</li>
          <a class="button hover">Apply now</a>
        </ul>
      </div>
    </section>

  </section>

    <!-- Footer -->
    <?php include_once 'footer.inc'; ?>

</body>

</html>