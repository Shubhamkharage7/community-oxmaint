
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I am new to this community and new to PLCs in general. We are currently facing an issue with a servo drive that controls the movement of a cross travel beam. The problem arises when the servo motor abruptly stops in certain situations. It accelerates and decelerates">
    <meta name="keywords" content="plc system troubleshooting, servo motor issues, kinetix 5500 troubleshooting, sudden servo motor stops, resolving servo motor stops, plc emergency stop troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-resolve-sudden-servo-motor-stops-in-plc-system-kinetix-5500">
    <title>How to Resolve Sudden Servo Motor Stops in PLC System (Kinetix 5500) | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Resolve Sudden Servo Motor Stops in PLC System (Kinetix 5500) | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I am new to this community and new to PLCs in general. We are currently facing an issue with a servo drive that controls the movement of a cross travel beam. The problem arises when the servo motor abruptly stops in certain situations. It accelerates and decelerates">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-resolve-sudden-servo-motor-stops-in-plc-system-kinetix-5500">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Resolve Sudden Servo Motor Stops in PLC System (Kinetix 5500) | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I am new to this community and new to PLCs in general. We are currently facing an issue with a servo drive that controls the movement of a cross travel beam. The problem arises when the servo motor abruptly stops in certain situations. It accelerates and decelerates">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-resolve-sudden-servo-motor-stops-in-plc-system-kinetix-5500"
      },
      "headline": "How to Resolve Sudden Servo Motor Stops in PLC System (Kinetix 5500)",
      "description": "Greetings everyone, I am new to this community and new to PLCs in general. We are currently facing an issue with a servo drive that controls the movement of a cross travel beam. The problem arises when the servo motor abruptly stops in certain situations. It accelerates and decelerates",
      "author": {
        "@type": "Person",
        "name": "walterj27"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-10",
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
                <h1 class="text-white">How to Resolve Sudden Servo Motor Stops in PLC System (Kinetix 5500)</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>walterj27</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">501</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">102</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone, I am new to this community and new to PLC's in general. We are currently facing an issue with a servo drive that controls the movement of a cross travel beam. The problem arises when the servo motor abruptly stops in certain situations. It accelerates and decelerates smoothly in automatic mode, but stops suddenly when in jog mode or when the emergency stop button is activated or safety gates are opened mid-travel. Is there a way to resolve this issue and have the motor stop gradually in these scenarios? Any assistance on this matter would be greatly valued. Thank you, Walt.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering how to halt the jog command, it is important to ensure that the stop command in the program includes decceleration rates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to stop the jog command effectively, it is important to consider the deceleration rates included in the stop command of the program. I will investigate this further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>walterj27</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When looking for instructions related to Motion Automation System (MAS), there is an option to adjust the Deceleration (Decel). By selecting "NO", the system will use the Decel value from the previous motion command (such as MAJ or MAM). Choosing "YES" means the system will utilize the deceleration specified in the MAS. It is important to note that the Decel can be measured in units per second squared, percentage, or time, so it is crucial to understand the units in order to determine whether the value should be increased or decreased.

The way Emergency Stop (EStop) is handled depends on the specific configuration. If CIP Safety is used, it will vary depending on the drive being used (ERS3 or ERS4, for example) which have controlled motion stops like SS1. Alternatively, if a hardwired Safe Torque Off (STO) is used, there will be fewer options available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why does the servo motor abruptly stop in jog mode or when safety measures are activated during mid-travel?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The sudden stops in jog mode or when safety features are triggered mid-travel could be due to the servo drive's current configuration not allowing for gradual deceleration in those specific scenarios.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I address the issue of the servo motor suddenly stopping and enable gradual deceleration?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve the problem of sudden stops, you may need to adjust the settings of the servo drive, such as configuring the deceleration profile or adjusting the emergency stop behavior to enable smoother deceleration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a specific parameter or setting in the PLC system, like the Kinetix 5500, that can help achieve gradual motor stops in different operating modes?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, in the Kinetix 5500 PLC system, you can typically modify parameters related to acceleration, deceleration, and emergency stop behavior to ensure the servo motor stops gradually in various scenarios. Consulting the system's documentation or contacting technical support for guidance on parameter adjustments would be beneficial.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
