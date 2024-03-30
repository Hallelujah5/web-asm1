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
    <link rel="stylesheet" href="styles/apply.css" />
    <link rel="stylesheet" href="styles/responsive.css" />
    <link rel="stylesheet" href="styles/typewriter.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <body>
    <main>
    
    <!-- Navigation bar -->
    <?php include 'header.php'; ?>
    <?php include 'workControl.php'; ?>

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

      <!-- Recycling starter codes from index.html for consistency  -->
      <!-- starting from here is apply.html -->
      <h1>Application Form</h1>
      <br>
    <fieldset>
      <legend><strong><h2>Job Application Form</h2></strong></legend>
      <form
        action="processEOI.php"
        method="post" id="apply"
        novalidate="novalidate"
        enctype="multipart/form-data"
      >
        <p>
          <label for="Name"><b>Given Name</b></label>
          <input
            type="text"
            name="Name"
            id="Name"
            maxlength="15"
            size="20"
            required
            pattern="[A-Za-z ]+"
            placeholder="Enter first name..."
          />
          <span class="required">*</span> <br /><br />
          
          <label for="Family"><b>Family Name</b></label>
          <input
            type="text"
            name="Family"
            id="Family"
            maxlength="15"
            size="19"
            required
            pattern="[A-Za-z]+"
            placeholder="Enter family name..."
          /><span class="required">*</span>
        </p>
        <p>
          <label for="birthdate"><b>Date of Birth</b></label>
          <input type="date" name="birthdate" id="birthdate" /><span
            class="required"
            >*</span
          >
        </p>

        <p>
          <b>Job Preference</b><span class="required">*</span>
          <select name="JobPref" id="JobPref">
            <option value="">Select your Job..</option>
            <option value="econo">Economic Analyst</option>
            <option value="softw">Software Engineer</option>
          </select>
        </p>

        <!-- <label for="ReferenceNum"><b>Job Reference No.</b></label>
        <input type="text" name="ReferenceNum" id="ReferenceNum" maxlength="7" size="35" required="required" pattern="[0-9]+"><span class="required">*</span> -->

        <fieldset>
          <legend>Gender<span class="required">*</span></legend>
          <p>
            <input type="radio" id="Male" name="gender" value="0" required />
            <label for="Male">Male</label>

            <input type="radio" id="Female" name="gender" value="1" />
            <label for="Female">Female</label>

          </p>
        </fieldset>

        <p>
          <label for="Street"><b>Street Address</b></label>
          <input
            type="text"
            name="Street"
            id="Street"
            maxlength="15"
            size="30"
            required="required"
            pattern="[A-Za-z]+"
            placeholder="Enter street name..."
          /><span class="required">*</span>
        </p>

        <p>
          <label for="Suburb"><b>Suburb/town</b></label>
          <input
            type="text"
            name="Suburb"
            id="Suburb"
            maxlength="15"
            size="30"
            required="required"
            pattern="[A-Za-z]+"
            placeholder="Enter Suburb/town name..."
          /><span class="required">*</span>
        </p>

        <p>
          <b>State</b><span class="required">*</span>
          <select name="State" id="State">
            <option value="">Select your state</option>
            <option value="VIC">VIC</option>
            <option value="NSW">NSW</option>
            <option value="QLD">QLD</option>
            <option value="NT">NT</option>
            <option value="WA">WA</option>
            <option value="SA">SA</option>
            <option value="TAS">TAS</option>
            <option value="ACT">ACT</option>
          </select>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <label for="postcode"><b>Postcode</b></label>
          <input
            type="text"
            name="postcode"
            id="postcode"
            maxlength="4"
            size="20"
            required="required"
            pattern="[0-9]+"
            placeholder="Four digits only..."
          /><span class="required">*</span>
        </p>

        <label for="email"><b>Email address</b></label>
        <input
          type="email"
          name="email"
          id="email"
          size="20"
          required="required"
          pattern="[A-Za-z0-9@.]+"
          placeholder="Enter email address..."
        /><span class="required">*</span>

        <br />
        <p>
          <label for="phone"><b>Phone Number</b></label>
          <input
            type="text"
            name="phone"
            id="phone"
            maxlength="12"
            size="19"
            required="required"
            pattern="[0-9 ]{8,12}"
          /><span class="required">*</span>
          <br />
        </p>
        <fieldset>
          <legend>Skill list<span class="required">*</span></legend>
          <p>

            <?php 
              $skills = getAllSkills();
              while ($skill = mysqli_fetch_array($skills)) {
                echo '<label for="' . $skill['skill_name'] . '">' . $skill['skill_name'] . '</label>';
                echo '<input type="checkbox" id="' . $skill['skill_name'] . '" name="skill[]" value="' . $skill['id'] . '" />&nbsp; &nbsp;'; 
              }
            ?>
            

          </p>
        </fieldset>
        <label for="other">Please list your other skills below:</label><br />
        <textarea
          name="other"
          id="other"
          rows="7"
          cols="40"
          placeholder="Write your other skills here..."
        ></textarea
        ><br />

        <label for="cv"><strong>Apply your CV here</strong></label> <br>

        <input type="file" id="cv" name="cv" accept=".pdf"> <br>
        <input type="submit" value="Apply" />

      </form>
    </fieldset>

  </body>

      <!-- Footer -->
      <?php include_once 'footer.inc'; ?>

</html>
