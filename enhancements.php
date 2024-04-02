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
    <link rel="stylesheet" href="styles/enhancements.css">
    <link rel="stylesheet" href="styles/responsive.css" />
    <link rel="stylesheet" href="styles/typewriter.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <main>

        <!-- Navigation bar -->
        <?php include_once 'header.php'; ?>

        <!-- Banner -->
        <div id="banner" class="col12 s-col12 col">
            <img src="images/banner.jpg" alt="banner" class="col12 s-col12 col" />

            <div class="wrapper" id="slogan">
                <div class="typing-demo">Website Enhancements.</div>
                <a href="apply.html" class="button" id="APPLY" target="_blank">Apply now</a>
            </div>
        </div>

        <!-- Recycled codes for consistency  -->
        <!-- starting from here is enhancements.html -->

        <!-- Enhancements -->
        <section class="col12 s-col12 col" id="job-details">

            <h1>Enhancements</h1>

            <div class="job-detail">
                <h2 class="job-detail-h2">Animations using pure css</h2>
                <h3>Typewriter effects</h3>
                <ul class="job-detail-ul">
                    <li><strong>Why:</strong> <br>
                        &emsp; - The typewriter effect adds a <strong><em>dynamic</em></strong> and
                        <strong><em>engaging</em></strong> element to the text content on the webpage. <br>
                        &emsp; - <strong><em>A hook</em></strong> to capture the user attention because it's the
                        <strong><em>first thing</em></strong> that the user see when enter the website -> increase the
                        chance that the user will spend more time in our website. <br>
                        &emsp; - It mimics the appearance of text being typed out in real-time, creating a sense of
                        interactivity and drawing attention to the text.
                    </li>
                    <li><strong>Where:</strong> <br>
                        &emsp; - At the start of our website! "Find your true self", to help creating a
                        <strong><em>sense of importance and influence</em></strong>
                        on the users and further emphasize our slogan to urge them on a journey of <strong><em>
                                self-discovery</em></strong> advance personal growth. <br>
                        &emsp; - It encourages <strong><em>introspection</em></strong> and the pursuit of
                        <strong><em>authenticity</em></strong>, suggesting that by delving into one's true essence, they
                        can lead a more <strong><em>fulfilling and meaningful life</em></strong> . It is also used as a
                        highlight at some other certain point at our website.
                    </li>
                    <li><strong>How:</strong> <br>
                        &emsp; - We followed and modified this demo code <a href="https://codepen.io/denic/pen/GRoOxbM"
                            target="_blank">typing-demo</a></li>
                </ul>

                <h3>Button hover effects + Link hover effects</h3>
                <ul class="job-detail-ul">
                    <li><strong>Why:</strong> <br>
                        &emsp; - Make the website more <strong><em>interactive and engaging</em></strong> <br>
                        &emsp; - It's just a very cool animation that suit well with the overall
                        <strong><em>aesthetic</em></strong> of the page <br>
                        &emsp; - Implied that an element is a button or something <strong><em>clickable</em></strong>
                        <br>
                        &emsp; - Easy to use and <strong><em>integrate</em></strong><br>
                    <li><strong>Where:</strong> <br>
                        &emsp; - At the place where we want to notified that something is clickabe, like
                        <strong><em>links and buttons.</em></strong><br> <br>
                    <li><strong>Reference</strong> <br>
                        &emsp; - We followed and modified this demo code <a
                            href="https://codepen.io/Christaelrod/pen/oNgGKLY" target="_blank">hover shadow effect</a>
                    </li>

                </ul>
                </ul>
            </div>
            <div class="job-detail">
                <h2 class="job-detail-h2">Responsive Design</h2>
                <ul class="job-detail-ul">
                    <li><strong>Enhanced User Experience:</strong>Responsive design provides a consistent and
                        user-friendly experience across all devices. Users can access our website from any device
                        without encountering usability issues or content distortion.</li>
                    <li><strong>Improved SEO Performance:</strong>Search engines like Google prioritize mobile-friendly
                        websites in their search results, thus we implemented responsive design so that we can improve
                        our website's visibility and rankings in search engine results pages (SERPs).</li>
                    <li><strong>Increased Accessibility:</strong> We promote inclusivity by making our website
                        accessible to users with disabilities who may use assistive technologies or unconventional
                        browsing devices.</li>
                    <li><strong>Where:</strong> To all of our websites! For example, the <a
                            href="index.html#grid_view">Trending Companies</a> section of our main page. For tablets or
                        higher screen width devices, it would show 4 rows, each contains 2 box-shaped interactable
                        squares you can click on. But on smaller width devices such as mobiles, it would show 8
                        screen-width rectangles instead!</li>
                    <li><strong>How:</strong> By using <span id="purple">@media</span> <span id="blue">(max/min
                            screen-width: preferred screen width (in px))</span> command. We have applied it to
                        virtually almost everywhere in our website, from headings, navs, different sections, to even
                        lists and footers,... All to improve aforementioned statistics.</li>
                    <li><strong>Reference:</strong> The responsive.css file code was referenced directly from<a
                            href="https://www.w3schools.com/css/css_rwd_grid.asp">W3Schools</a>. We borrowed some of it
                        but made sure to understood it thoroughly and cite it here.</li>


                </ul>
            </div>




            <br><br>
            <p id="large-text"><Strong>Starting here is the enhancements of Assignment 2:</Strong></p>
            <br><br>


            <div class="job-detail">
                <h2>Dataset Normalisation</h2>
                <h3>Enhancing database structure to improve Integrity</h3>
                <ul class="job-detail-ul">
                    <li><strong>Where: </strong>The normalization process takes place within the database, specifically
                        the <b>eoi</b> and the <b>job_description</b> tables.</li>
                    <li><strong>How: </strong>By establishing a primary-foreign key links between the two tables using:
                        "<span class="blue">FOREIGN KEY</span> (job_reference_number) <span
                            class="blue">REFERENCES</span> job_description (job_ref_number)" inside the <b>eoi</b>
                        table.</li>
                    <li><strong>Why: </strong>Normalizing the dataset ensures data integrity by eliminating data
                        anomalies through the <i>job_ref_number</i> inside the <b>job_description</b> table, so when
                        user chooses a different job reference number different to our system, that eoi form will not be
                        accepted. It also reduces redundancy, thereby improving storage efficiency. Normalization helps
                        us facilitates scalability and adaptability to changing requirements.</li><br>



                </ul>
            </div>



            <div class="job-detail">
                <h2>Create a registration page and a log out url</h2>
                <h3>Enhance the security of the website</h3>
                <ul class="job-detail-ul">
                    <li><strong>Where: </strong>in the login.php and in the logout.php</li>
                    <li><strong>What: </strong>It's a way for user to authenicate and logout of the website</li>
                    <li><strong>Why: </strong>Because an authentication system is needed so that only authenicated
                        user
                        can modified the database</li>
                    <li><strong>How: </strong>We created a User table, use only for look up and authentication, and
                        use
                        session for authorization
                        <br> &emsp;- In login, we get the user email and password, compare it to the database
                        <br> &emsp;- If the record exists, we put the user info into the session, if not, we simply
                        show
                        the invalid message
                        <br> &emsp;- To logout, we simply destroy the session
                    </li>
                </ul>

            </div>

            <div class="job-detail">
                <h2>Create a conjunction table between table skills and eoi</h2>
                <h3>Allow M-N relationship</h3>
                <ul class="job-detail-ul">
                    <li><strong>Where: </strong>in the database, eoiControl.php, processEOI, apply.php</li>
                    <li><strong>What: </strong> A conjunction table between eoi and skills</li>
                    <li><strong>Why: </strong>We need a way to represent M-N relationship, it's also make the site
                        more
                        scalable, since the skills value is not hardcoded</li>
                    <li><strong>How: </strong>We create a conjunction table which has the primary key of eoi and
                        skills
                        <br> &emsp;- In the apply form, we edit it so that it will use a loop to show the available
                        skills
                        <br> &emsp;- When the user submit the form, we insert the value into the eoi table and if
                        the
                        insertion is successful, we are going to insert the value into the eoi_skill table
                        <br> &emsp;- In the manager.php, we going to query the eoi table and use the eoi id to
                        create a
                        JOIN query, which will look up the skills table and show the information
                    </li>
                </ul>
            </div>


        </section>
    </main>
    <!-- Footer -->
    <?php include_once 'footer.inc'; ?>


</body>

</html>
