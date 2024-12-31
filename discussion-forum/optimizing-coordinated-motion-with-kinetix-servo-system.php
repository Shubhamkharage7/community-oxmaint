
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am in the process of setting up a Servo system which includes an L18ERM-BB1B Controller, two Kinetix 5500 Servo drives (2198-H008-ERS and 2198-H015-ERS), one MPAR linear actuator Servo, and one VPL rotary Servo. While I cannot disclose the specific details of the process, I can provide an">
    <meta name="keywords" content="optimizing coordinated motion, kinetix servo system, l18erm-bb1b controller, kinetix 5500 servo drives, mpar linear actuator servo, vpl rotary servo, rotary serv">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-coordinated-motion-with-kinetix-servo-system">
    <title>Optimizing Coordinated Motion with Kinetix Servo System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing Coordinated Motion with Kinetix Servo System | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am in the process of setting up a Servo system which includes an L18ERM-BB1B Controller, two Kinetix 5500 Servo drives (2198-H008-ERS and 2198-H015-ERS), one MPAR linear actuator Servo, and one VPL rotary Servo. While I cannot disclose the specific details of the process, I can provide an">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-coordinated-motion-with-kinetix-servo-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing Coordinated Motion with Kinetix Servo System | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am in the process of setting up a Servo system which includes an L18ERM-BB1B Controller, two Kinetix 5500 Servo drives (2198-H008-ERS and 2198-H015-ERS), one MPAR linear actuator Servo, and one VPL rotary Servo. While I cannot disclose the specific details of the process, I can provide an">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-coordinated-motion-with-kinetix-servo-system"
      },
      "headline": "Optimizing Coordinated Motion with Kinetix Servo System",
      "description": "Greetings, I am in the process of setting up a Servo system which includes an L18ERM-BB1B Controller, two Kinetix 5500 Servo drives (2198-H008-ERS and 2198-H015-ERS), one MPAR linear actuator Servo, and one VPL rotary Servo. While I cannot disclose the specific details of the process, I can provide an",
      "author": {
        "@type": "Person",
        "name": "smeagle356"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-06",
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
                <h1 class="text-white">Optimizing Coordinated Motion with Kinetix Servo System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>smeagle356</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">103</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">194</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am in the process of setting up a Servo system which includes an L18ERM-BB1B Controller, two Kinetix 5500 Servo drives (2198-H008-ERS and 2198-H015-ERS), one MPAR linear actuator Servo, and one VPL rotary Servo. While I cannot disclose the specific details of the process, I can provide an overview of the type of motion I aim to achieve.

The rotary Servo will be responsible for moving a fixed amount (e.g. 10 degrees) to advance one "slot" on the outer diameter of the wheel it is connected to (consisting of 36 slots). On the other hand, the linear Servo will be used to push an object into the slot before retracting it.

Ideally, the sequence would involve the rotary Servo rotating, the pusher pushing, and then repeating the process swiftly. However, in order to optimize efficiency, the coordination between the two Servos is crucial. The rotary should rotate swiftly while the pusher is not in a collision zone, pausing momentarily when necessary.

In this setup, the rotary's movement should ideally be continuous to minimize time wastage, although it must still align with the pusher's actions. The design includes a conical tip on the pusher, allowing for overlap in movement between the pusher and the rotary without causing any collisions.

While considering the use of a MACP, limitations in the cam profile may necessitate the creation of a virtual master for proper synchronization. Any suggestions or guidance on how to achieve this coordination effectively would be greatly valued.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The MAPC instruction pertains to reciprocating followers on a rotary axis, making it a feasible task. In this process, the rotary axis acts as the master while the linear axis serves as the slave.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As I contemplate the issue at hand, the concept of the rotary being the master while dealing with the cam profile is quite complex to me. When considering that a full rotation on the rotary is from 0 to 360 degrees, with each of the 24 slots representing 15 degrees, it poses a challenge. Setting up the cam profile such that at position 0, the pusher is fully extended within the slot has its complications. Repeating this setup around the rotary would lead to a collision, as the pusher would intersect the slot while the rotary is still revealing it. 

Exploring the idea of utilizing half-steps (75 points), it becomes evident that the pusher must pause and only proceed after the rotary aligns with the center of a slot (150 points). However, with a standard cam profile, the rotary would already be transitioning to the next slot at this point. This dilemma has led me to seek assistance as I struggle through the complexities of applying cam profiles effectively. It seems that my issue stems from a lack of understanding of the intricacies involved, particularly in relation to executing specific motions. While the motion is vaguely mentioned in the continuous execution mode description, practical examples are lacking. Admitting my ignorance on the subject matter, I am seeking guidance to overcome this obstacle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>smeagle356</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Experiment with two virtual axes and observe their movements. Track the trends of both positions. To incorporate mathematical calculations like velocity, acceleration, and deceleration, consider using an MAOC with your rotary axis and setting specific parameters for the triggering of movements. Additionally, you have the option to include speed compensation in the parameters to adjust for changes in speed as the rotary axis extends or retracts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently discovered the MAOC platform and am eager to explore its capabilities further. After setting up virtual axes, I realized I haven't been successful in configuring them effectively. MAOC seems to offer the solution I've been searching for, so I will investigate it further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>smeagle356</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
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
<h4 class='text-dark'>FAQ: 1.  What components are included in the Servo system being set up?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Servo system includes an L18ERM-BB1B Controller, two Kinetix 5500 Servo drives (2198-H008-ERS and 2198-H015-ERS), one MPAR linear actuator Servo, and one VPL rotary Servo.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What type of motion is aimed to be achieved with the Servo system setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The rotary Servo will be moving a fixed amount to advance one "slot" on the outer diameter of a wheel, while the linear Servo will be used to push an object into the slot before retracting it.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How important is the coordination between the rotary and linear Servos in the setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The coordination between the two Servos is crucial to optimize efficiency. The rotary should rotate swiftly while the pusher is not in a collision zone, pausing momentarily when necessary.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can the rotary Servo's movement be optimized for efficiency?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The rotary's movement should ideally be continuous to minimize time wastage, while still aligning with the pusher's actions. Overlap in movement between the pusher and the rotary is enabled by the design of a conical tip on the pusher.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  How can proper synchronization be achieved when using a MACP in the setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer</p>
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
