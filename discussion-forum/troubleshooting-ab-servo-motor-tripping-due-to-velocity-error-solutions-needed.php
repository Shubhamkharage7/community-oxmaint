
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am facing an issue with my servo motor and Im puzzled as to why it is not functioning properly. Even without a gearbox or any load attached to the motor, it trips out due to excessive velocity error when a jog command is sent to it.">
    <meta name="keywords" content="ab servo motor, troubleshooting, velocity error, motor tripping, solutions, gearbox, load, jog command, torque reference, feedback test, mam command, maj command, fault, wiring, knowledge base, troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ab-servo-motor-tripping-due-to-velocity-error-solutions-needed">
    <title>Troubleshooting AB Servo Motor Tripping Due to Velocity Error: Solutions Needed | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting AB Servo Motor Tripping Due to Velocity Error: Solutions Needed | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am facing an issue with my servo motor and Im puzzled as to why it is not functioning properly. Even without a gearbox or any load attached to the motor, it trips out due to excessive velocity error when a jog command is sent to it.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ab-servo-motor-tripping-due-to-velocity-error-solutions-needed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting AB Servo Motor Tripping Due to Velocity Error: Solutions Needed | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am facing an issue with my servo motor and Im puzzled as to why it is not functioning properly. Even without a gearbox or any load attached to the motor, it trips out due to excessive velocity error when a jog command is sent to it.">
    <meta name="twitter:image" content="https://community.oxmaint.com/assets/img/favicon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6M0T9NLP4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-Y6M0T9NLP4');
    </script>

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ab-servo-motor-tripping-due-to-velocity-error-solutions-needed"
      },
      "headline": "Troubleshooting AB Servo Motor Tripping Due to Velocity Error: Solutions Needed",
      "description": "Hello everyone, I am facing an issue with my servo motor and Im puzzled as to why it is not functioning properly. Even without a gearbox or any load attached to the motor, it trips out due to excessive velocity error when a jog command is sent to it.",
      "author": {
        "@type": "Person",
        "name": "tetcie"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-04",
      "image": "https://community.oxmaint.com/assets/img/favicon.png"
    }
    </script>

<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" defer></script>
<link rel="stylesheet" href="./../assets/css/home.css"/>
</head>
<body>
    <div class="content-wrapper bg-gray">
        <?php include "../include/header.php" ?>
        <!-- /header -->
        <div class="container my-5">
            

            <div class="bg-primary card p-4 mb-4">
                <h1 class="text-white">Troubleshooting AB Servo Motor Tripping Due to Velocity Error: Solutions Needed</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tetcie</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5221</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">271</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone,
I am facing an issue with my servo motor and I'm puzzled as to why it is not functioning properly. Even without a gearbox or any load attached to the motor, it trips out due to excessive velocity error when a jog command is sent to it. The torque reference spikes up significantly, exceeding the limit and causing the motor to halt, leading to a velocity error and eventual fault. What confuses me is that during the motor and feedback test, it runs smoothly but faults when MAM/MAJ commands are sent. Can anyone shed light on why this is happening? I have gone through the knowledge base and checked all the wiring, ensuring it is correctly connected to the drive. Has anyone encountered this issue before and can suggest a solution for the sudden increase in torque reference? Any other troubleshooting tips I should consider? Could it be as simple as a faulty motor that needs replacing?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you able to provide a screenshot of your MAM/MAJ settings (expanded)? Based on my limited experience, I would suggest focusing on tuning up within the MAM/MAJ parameters. My first step would be to delete the existing axis and create a new one with default parameters. Simply input the motor's catalog number, utilize the motion direct command to move it at a very slow speed, and avoid making changes to any other parameters. This simple process can help optimize your MAM/MAJ settings effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my experience, Siemens servos can be prone to issues when the gain or other parameters are set too high for a no-load situation compared to when a load is applied. This discrepancy in settings can result in malfunctions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Maxkling</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder asked for a screenshot of the MAM/MAJ parameters. In my limited experience, tuning is crucial in the MAM/MAJ settings. A good starting point would be to delete the axis, create a new one with default parameters, input the motor catalog number, use a motion direct command to move it at a slow speed. Avoid changing any other parameters at this stage. I have tried using an MAJ of 5 units per second in the motion direct command, with default settings for the rest of the MAJ. I plan on tuning it further once I confirm that it is functioning properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tetcie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Maxkling explained that he has encountered issues with Siemens servos in the past due to parameters being set too high for when a load is not applied. This problem persists even with the gearbox attached and in mesh with the rack. Interestingly, another machine on site using the same motor and gearbox with identical parameters functions without any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tetcie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you know what type of drive/motor platform your system is using? It's important to note that during a feedback test, the system does not utilize the feedback for control purposes. Any issues with the feedback will not impact the motor during the test, but they will affect the motor during regular operation. It seems like there may be a mismatch between the feedback and motor rotation. After conducting a feedback test, does the system indicate a successful test completion?Keith</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>kamenges inquired about the drive/motor platform being used. It is important to note that during a feedback test, the system is not utilizing the feedback for control. Any anomalies with the feedback won't impact the motor during the test, but may affect its performance during normal operation. It seems like there may be a feedback to motor rotation mismatch occurring. When conducting a feedback test, ensure that it passes successfully. I am using an AB VPL servo motor paired with a Kinetix 5500. Although the feedback tests are passing, I am still puzzled by the issue. Is there a specific aspect of the feedback that I should investigate? As someone who has only worked on a few motion control systems, I still have a lot to learn in this area.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tetcie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are dealing with a VPL motor and it successfully passes the feedback test, there may not be much you can do in terms of wiring adjustments. If the feedback wiring was incorrect (only two wires connected), the motor would not communicate at all. It seems like you have already checked the power wires for the motor and have them connected correctly (U-U, V-V, W-W). Another aspect to consider is the polarity settings for the system. During a feedback test, the system always evaluates the results in a positive context, including positive motion, positive feedback, and positive motor rotation. It does not consider the current settings of these three elements. With AB servomotors, it is important to ensure that both the motor and feedback polarity selections are set to positive, and to use the motion polarity selection to determine the direction of forward movement. Changing either the motor or feedback polarity to negative is likely to create a feedback conflict with a VPL motor.Keith</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have confirmed that the polarity settings for both the motor and motion are currently set to normal. Despite experimenting with the polarity during troubleshooting, reverting back to the default settings after deleting the motion group and starting anew has not yielded successful results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tetcie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I wanted to provide a quick update. I decided to purchase a new motor and it is working flawlessly. It is still unclear why the previous motor was malfunctioning, with our Rockwell supplier suggesting a possible feedback issue. Nonetheless, I am pleased to report that the project is now progressing smoothly. Thank you to everyone for your input and suggestions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tetcie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yesterday, I experienced the opposite of what was reported by the OP. The incident involved a Studio V24 and a Kinetix 5500 V2.005 with a 2.2 Kw VPL motor. A fault (S55) occurred immediately when the motor was connected to the load. However, the motor ran perfectly when disconnected from the load. Despite checking the cable and wiring, the issue persisted. Commanded vs actual velocity was compared while connected to the load, showing zero actual velocity. Monitoring actual position revealed no change. When directly commanding motion, the motor could be easily stalled with just one finger. Replacing the Kinetix module resolved the issue. It was a unique failure that I have never encountered before. I will provide an update after conducting some bench testing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DeezBald</span></li>
            </ul>
        </div>
        
                        </div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 outer-container">
        <!-- Related Topics -->
    <?php include "./related-topic.php" ?>
    </div>
            </div>
             <!-- cta button -->
        <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1.  Why is my servo motor tripping due to velocity error even without a gearbox or load attached?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The excessive velocity error causing the servo motor to trip could be due to issues with torque references, motor control commands, or feedback loop tuning.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why does the servo motor run smoothly during motor and feedback tests but faults when jog commands are sent?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This discrepancy could indicate a problem with the motor control commands (MAM/MAJ) being sent to the servo motor, potentially leading to sudden torque spikes and velocity errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot a servo motor tripping out due to excessive torque reference?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting steps may include checking the wiring connections, verifying control parameters, adjusting feedback loop tuning, ensuring the motor and drive compatibility, and investigating potential mechanical issues causing the torque spikes.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <script src="like-view-counter.js"></script>
    </div>
<script>
document.addEventListener("DOMContentLoaded", () => {
    function initializeToggleFunctionality() {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");
        const noRepliesMessage = document.querySelector(".no-replies-message");

        if (!toggleLink || !moreRepliesContent || !noRepliesMessage) {
            console.error("Required elements not found. Ensure the correct class names are used.");
            console.log({
                toggleLink,
                moreRepliesContent,
                noRepliesMessage,
            });
            return;
        }

        const hasReplies = Array.from(moreRepliesContent.children).some(
            (child) => child.nodeType === Node.ELEMENT_NODE
        );

        if (hasReplies) {
            noRepliesMessage.style.display = "none";
        } else {
            noRepliesMessage.style.display = "block";
            toggleLink.style.display = "none";
            return;
        }

        toggleLink.addEventListener("click", (event) => {
            event.preventDefault();
            const isHidden = getComputedStyle(moreRepliesContent).display === "none";
            moreRepliesContent.style.display = isHidden ? "block" : "none";
            toggleLink.textContent = isHidden ? "Hide More Replies" : "More Replies →";
        });
    }

    initializeToggleFunctionality();

    const observer = new MutationObserver(() => {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");

        if (toggleLink && moreRepliesContent) {
            initializeToggleFunctionality();
            observer.disconnect();
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
});
</script>
</body>
</html>
