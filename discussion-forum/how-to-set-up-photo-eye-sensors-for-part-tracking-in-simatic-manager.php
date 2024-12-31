
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I need assistance with achieving this task in SIMATIC Manager. I have a setup with two photo eye sensors (P_1, P_2). When the part is placed horizontally and both sensors detect it, nothing happens. When the part is turned 90 degrees and neither sensor detects it, nothing">
    <meta name="keywords" content="photo eye sensors, part tracking, simatic manager, sensor setup, horizontal part detection, photo eye p_1, photo eye p_2, part orientation, output coil activation, sensor detection, part turned 90 degrees, sensor activation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-set-up-photo-eye-sensors-for-part-tracking-in-simatic-manager">
    <title>How to set up Photo Eye Sensors for Part Tracking in SIMATIC Manager | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to set up Photo Eye Sensors for Part Tracking in SIMATIC Manager | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I need assistance with achieving this task in SIMATIC Manager. I have a setup with two photo eye sensors (P_1, P_2). When the part is placed horizontally and both sensors detect it, nothing happens. When the part is turned 90 degrees and neither sensor detects it, nothing">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-set-up-photo-eye-sensors-for-part-tracking-in-simatic-manager">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to set up Photo Eye Sensors for Part Tracking in SIMATIC Manager | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I need assistance with achieving this task in SIMATIC Manager. I have a setup with two photo eye sensors (P_1, P_2). When the part is placed horizontally and both sensors detect it, nothing happens. When the part is turned 90 degrees and neither sensor detects it, nothing">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-set-up-photo-eye-sensors-for-part-tracking-in-simatic-manager"
      },
      "headline": "How to set up Photo Eye Sensors for Part Tracking in SIMATIC Manager",
      "description": "Hello everyone, I need assistance with achieving this task in SIMATIC Manager. I have a setup with two photo eye sensors (P_1, P_2). When the part is placed horizontally and both sensors detect it, nothing happens. When the part is turned 90 degrees and neither sensor detects it, nothing",
      "author": {
        "@type": "Person",
        "name": "Wakanda"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-01",
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
                <h1 class="text-white">How to set up Photo Eye Sensors for Part Tracking in SIMATIC Manager</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Wakanda</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">271</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">30</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I need assistance with achieving this task in SIMATIC Manager. I have a setup with two photo eye sensors (P_1, P_2). When the part is placed horizontally and both sensors detect it, nothing happens. When the part is turned 90 degrees and neither sensor detects it, nothing happens. However, if one sensor does not detect the part and the other sensor remains on (even when the part is turned 90 degrees), I need the output coil to be activated. Essentially, if P1 is off and after 10ms P2 is still on, or if P2 is off and after 10ms P1 is still on, then the coil should be turned on. I appreciate any assistance with this.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're talking about tracking without explicitly mentioning it in your post, do you mean tracking it for future use or is it used immediately, like when one sensor detects something and the other doesn't? If I'm understanding your post correctly, here is the simplest explanation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the incorrect wording; tracking did not begin initially. Further along the production line, there is a station where a component needs to rotate 90 degrees. This rotating table is equipped with two sensors that must both deactivate during the rotation process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Wakanda</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with Simatic Manager, you are essentially utilizing STEP7 V5.x, also known as "STEP7 classic." In simpler terms, if P1 is deactivated and P2 remains activated after 10ms, or if P2 is deactivated and P1 remains activated after 10ms, the Coil should be activated using IEC timers. This code accurately reflects the instructions for activating the coil without any additional comments on tracking.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In both mine and Jesper's designs, it is crucial to incorporate the rotation feature in the logic to activate the check only when the component is in motion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When P1 is OFF and P2 is still ON after 10ms, there may be ambiguity in the language used. @parky's solution interprets "after 10ms ... still" as the duration for which both P1 has been continuously OFF and P2 has been continuously ON, and vice versa. While there is an edge case where this code may not work, it is likely safe to disregard it. On the other hand, @JesperMP's solution interprets "after 10ms ... still" as the duration for which P1 has been continuously OFF during any single moment (scan cycle) when P2 is ON. Consider the state indicated by "after" and the state(s) indicated by "still." It may be helpful to visualize the scenario with a drawing. Additionally, the 10ms interval is relatively short; what is the typical scan cycle interval over which this logic will be assessed, and what is the longest interval?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy explained that in @JesperMP's solution, the phrase "after 10ms ... still" is interpreted as the duration of time that P1 remains OFF continuously within a single moment (scan cycle) when P2 is ON. This interpretation is based on the formatting of the line with 2 brackets. Drbitboy suggested that creating a visual aid, such as a drawing or timing diagram, may help clarify the situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Taking a cue from the initial logic shared by Parky in the forum, I decided to increase the time delay to 2 seconds. This adjustment has resulted in the desired outcome, providing me with the indication I needed in case one of the photo eyes fails to toggle. I appreciate the assistance from everyone who contributed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Wakanda</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider incorporating a snippet to ensure that the logic functions specifically during the rotation process, preventing any unintended triggers from occurring. This adjustment can enhance the efficiency and accuracy of the cycle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I set up Photo Eye Sensors for Part Tracking in SIMATIC Manager?
- To set up Photo Eye Sensors for Part Tracking in SIMATIC Manager, you can create a logic that activates an output coil when one sensor is off and the other sensor remains on after a specified time delay.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What should I do if both sensors detect the part when it is placed horizontally?</h4>
<p class='text-muted'><strong>Answer:</strong> - If both sensors detect the part when it is placed horizontally, you can set up the logic to ensure that no action is taken in this scenario.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I configure the system to activate the output coil when one sensor does not detect the part and the other sensor remains on, even if the part is turned 90 degrees?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can achieve this by implementing a logic that checks the status of both sensors and activates the output coil if one sensor is off and the other sensor remains on after a specified delay, regardless of the part's orientation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What is the significance of the 10ms delay mentioned in the setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The 10ms delay mentioned in the setup allows for a brief period to elapse after one sensor is off while the other sensor remains on before activating the output coil, ensuring the stability and reliability of the system.</p>
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
