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
    <link rel="stylesheet" href="styles/responsive.css" />
    <link rel="stylesheet" href="styles/typewriter.css" />
    <link rel="stylesheet" href="styles/about.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <main>

        <!-- Navigation bar -->
        <?php include 'header.php'; ?>

        <!-- Banner -->
        <div id="banner" class="col12 s-col12 col">
            <img src="images/banner.jpg" alt="banner of the web" class="col12 s-col12 col" />

            <div class="wrapper" id="slogan">
                <div class="typing-demo">About our business.</div>
                <a href="apply.html" class="button" id="APPLY" target="_blank">Apply now</a>
            </div>
        </div>

        <!-- Recycling starter codes from index.html for consistency  -->
        <!-- starting from here is about.html -->

        <section class="container">
            <!-- Contains the whole About part-->
            <h2 class="ABOUT-TITLE">ABOUT</h2>
            <div class="container-about">
                <!-- This is a flexbox, dividing the text and the statistics-->
                <div class="About-text">
                    <!-- The first part: text-->
                    <h2 class="About-title">The Beginning</h2>
                    <!-- The title -->

                    <p class="About-des">
                        In 2010, <b>Job Hunter</b> was created with a simple yet profound
                        vision: to revolutionize the way individuals navigate the world of
                        employment and career advancement in the ever-evolving landscape
                        of Information Technology. Founded by a group of passionate
                        professionals with diverse backgrounds in technology, recruitment,
                        and human resources, our mission was clear: to empower job seekers
                        with the tools, resources, and opportunities needed to thrive in
                        the digital age.
                    </p>

                    <p class="About-des">
                        From the outset, our commitment to excellence and innovation has
                        been unwavering. We recognized the rapidly changing dynamics of
                        the IT industry and the increasing demand for specialized talent
                        across various domains. With this insight, we set out to bridge
                        the gap between employers and candidates, facilitating meaningful
                        connections that drive mutual success.
                    </p>

                    <p class="About-des">
                        Over the years, we have grown and adapted to meet the evolving
                        needs of both job seekers and employers alike. Through strategic
                        partnerships, cutting-edge technology, and a deep understanding of
                        industry trends, we have cultivated a reputation for delivering
                        unparalleled value and service.
                    </p>
                </div>
                <div class="About-Statistics">
                    <!--Second part: Statistics -->
                    <p class="text-stat">Total Users</p>
                    <h3>
                        <span class="number-stat">71,500</span><span class="grayish">+ users</span>
                    </h3>

                    <p class="text-stat">Website Total Clicks</p>
                    <h3>
                        <span class="number-stat">13,700,000</span><span class="grayish">+ clicks</span>
                    </h3>

                    <p class="text-stat">Website Total On-time</p>
                    <h3>
                        <span class="number-stat">135,000</span><span class="grayish">+ hours</span>
                    </h3>

                    <p class="text-stat">Total Jobs hired</p>
                    <h3>
                        <span class="number-stat">17,900</span><span class="grayish">+ Jobs hired</span>
                    </h3>
                </div>
            </div>
        </section>

        <section id="faqs" class="container">
            <h2 class="About-title">FAQs</h2>
            <div class="container-faqs">
                <ol>
                    <li>

                        <div class="question">
                            Are the job listings on your website
                            <span class="underline">updated</span> regularly?
                        </div>

                        <span class="answer">
                            Yes, we strive to keep our job listings updated with the latest
                            opportunities available in the market. Our team continuously
                            monitors and adds new job postings to ensure you have access to
                            the most current information.</span>
                    </li>

                    <li>
                        <div class="question">
                            Can I apply for jobs
                            <span class="underline">directly</span> through your website?
                        </div>
                        <span class="answer">
                            Yes, many of the job listings on our website allow you to apply
                            directly through our platform. Simply click on the job listing
                            you're interested in, and you'll find instructions on how to
                            apply.</span>
                    </li>

                    <li>
                        <div class="question">
                            How can I receive
                            <span class="underline">notifications</span> about new job
                            listings?
                        </div>
                        <span class="answer">You can subscribe to our newsletter or set up job alerts to
                            receive notifications about new job listings that match your
                            preferences. Simply sign up for an account on our website and
                            customize your notification settings.</span>
                    </li>

                    <li>
                        <div class="question">
                            Are there resources available for
                            <span class="underline">improving</span> my resume or interview
                            skills?
                        </div>
                        <span class="answer">Yes, we provide resources and tips for improving your resume,
                            writing effective cover letters, preparing for interviews, and
                            advancing your career. You can access these resources in the
                            "Career Resources" or "Help Center" section of our
                            website.</span>
                    </li>

                    <li>
                        <div class="question">
                            Is your website <span class="underline">free</span> to use for
                            job seekers?
                        </div>
                        <span class="answer">Yes, our website is completely free for job seekers to use. You
                            can search for jobs, apply for positions, and access our
                            resources without any cost.</span>
                    </li>

                    <li>
                        <div class="question">
                            Can I <span class="underline">upload</span> my resume to your
                            platform?
                        </div>
                        <span>Yes, you can upload your resume to your profile after creating
                            an account. Simply navigate to your profile settings, and there
                            should be an option to upload or update your resume. Having your
                            resume on our platform allows employers to easily view your
                            qualifications when considering you for job opportunities.</span>
                    </li>
                    <li>
                        <div class="question">
                            Are there any open <span class="underline">positions</span> in
                            your team?
                        </div>
                        <span>Yes, as the business is growing and thriving everyday, we also
                            need more people to further improve and maintain it. If you are
                            an experienced
                            <span class="underline">Economic Analyst</span> or a
                            <span class="underline">Software Engineer</span>, please reach
                            out and contact us by the email below, as we have a job offer
                            you cannot resist! and yes we do accept internships as
                            well!</span>
                    </li>

                    <li>
                        <div class="question">
                            How do I <span class="underline">contact</span> your support
                            team if I have further questions?
                        </div>
                        <!--Email link-->
                        <span class="answer">You can reach out to our support team through the contact form
                            on our website or via email at
                            <a href="mailto:tdmhale5@gmail.com">tdmhale5@gmail.com</a>.
                            We're here to assist you with any questions or concerns you may
                            have.</span>
                    </li>
                </ol>
            </div>
        </section>

        <section id="Contributors" class="container">
            <h2 class="About-title">Contributors</h2>
            <div class="container-contri">
                <p>
                    This project wouldn't be able to thrive without the help of 2 other
                    important members:
                    <span class="names">Minh Viet</span> (middle)&nbsp;&nbsp; and
                    &nbsp;&nbsp;<span class="names">Bao Lam</span> (left).
                </p>
                <br />
                <dl id="def" class="container-def">
                    <ul>
                        <li id="bold">Group Name:</li>
                        <li>CodeCrafters</li>
                        <hr />

                        <li id="bold">Group ID:</li>
                        <li>cos10026.2 - g7</li>
                        <hr />

                        <li id="bold">Tutor's Name:</li>
                        <li>Van Cong Nguyen</li>
                        <hr />

                        <li id="bold">Course:</li>
                        <li>COS10026</li>
                    </ul>
                </dl>
            </div>
            <figure>
                <img src="images/groupphoto.jpg" alt="Group photo" />
            </figure>

            <!-- Timetable -->
            <table>
                <caption>
                    <b>Timetable</b>
                </caption>
                <thead>
                    <tr>
                        <th>Weekday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Friday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>COS10005</td>
                        <td>8AM - 11AM</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>TNE10006</td>
                        <td></td>
                        <td>8AM - 12AM</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>COS10026</td>
                        <td></td>
                        <td></td>
                        <td>1PM - 5PM</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <!-- Footer -->
    <?php include_once 'footer.inc'; ?>

</body>

</html>
