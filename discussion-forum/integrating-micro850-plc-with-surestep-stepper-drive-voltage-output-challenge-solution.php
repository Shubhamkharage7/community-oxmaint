
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am currently working on integrating a Micro850 PLC to control a SureStep Stepper drive (DM805-AI) from Automationdirect. I am facing a challenge with the voltage output from the Micro850, as it is 24VDC while the Pulse input to the drive requires sourcing (0V to pulse high).">
    <meta name="keywords" content="micro850 plc, surestep stepper drive, voltage output challenge, dm805-ai, automationdirect, pulse input, sourcing, solid-state relays, 100khz, pnp to npn converter, phoenix, 15khz limit">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/integrating-micro850-plc-with-surestep-stepper-drive-voltage-output-challenge-solution">
    <title>Integrating Micro850 PLC with SureStep Stepper Drive: Voltage Output Challenge Solution | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Integrating Micro850 PLC with SureStep Stepper Drive: Voltage Output Challenge Solution | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am currently working on integrating a Micro850 PLC to control a SureStep Stepper drive (DM805-AI) from Automationdirect. I am facing a challenge with the voltage output from the Micro850, as it is 24VDC while the Pulse input to the drive requires sourcing (0V to pulse high).">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/integrating-micro850-plc-with-surestep-stepper-drive-voltage-output-challenge-solution">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Integrating Micro850 PLC with SureStep Stepper Drive: Voltage Output Challenge Solution | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am currently working on integrating a Micro850 PLC to control a SureStep Stepper drive (DM805-AI) from Automationdirect. I am facing a challenge with the voltage output from the Micro850, as it is 24VDC while the Pulse input to the drive requires sourcing (0V to pulse high).">
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
        "@id": "https://community.oxmaint.com/discussion-forum/integrating-micro850-plc-with-surestep-stepper-drive-voltage-output-challenge-solution"
      },
      "headline": "Integrating Micro850 PLC with SureStep Stepper Drive: Voltage Output Challenge Solution",
      "description": "Hello everyone! I am currently working on integrating a Micro850 PLC to control a SureStep Stepper drive (DM805-AI) from Automationdirect. I am facing a challenge with the voltage output from the Micro850, as it is 24VDC while the Pulse input to the drive requires sourcing (0V to pulse high).",
      "author": {
        "@type": "Person",
        "name": "testsubject"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-18",
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
                <h1 class="text-white">Integrating Micro850 PLC with SureStep Stepper Drive: Voltage Output Challenge Solution</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">288</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">305</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am currently working on integrating a Micro850 PLC to control a SureStep Stepper drive (DM805-AI) from Automationdirect. I am facing a challenge with the voltage output from the Micro850, as it is 24VDC while the Pulse input to the drive requires sourcing (0V to pulse high). I have come across several solid-state relays capable of cycling at 100kHz, but the only PNP to NPN converter I found from Phoenix is limited to 15kHz. Have any of you encountered a similar issue and if so, what solution did you implement? Your insights are greatly appreciated!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Continental I.O.-ODC-R0-060 Interface Module: Features and Functions</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the premature post. Before proceeding, be sure to research the part number to confirm its compatibility. I have utilized numerous times in the past with no complications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the recommendation. Upon further reflection, I recalled using these components 15 years ago in a previous position. Regrettably, they have since been discontinued. Even after reaching out to Power IO, the manufacturer of the original part, I discovered that they too have stopped producing them. The substitute available now is bulkier and only has a frequency rating of up to 20kHz.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After a moment of reflection, I came to the realization that I would be open to exploring other opportunities if they exist.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for spare parts in Chicago? I may have some available to share, but I need to know what you'll do in exchange.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for reaching out. I had a productive conversation with tech support last night and we identified that we were mistakenly using the wrong drive for our application. Thankfully, we have now resolved the issue by opting for the DM860E, a drive that fully accommodates both PNP and NPN outputs. Additionally, it only requires an inline resistor to support a 24V output from the PLC. This adjustment has ensured smooth operation for us. Located on the far southside of Frankfort.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm pleased that everything fell into place. I am located near O'Hare International Airport.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
    </div>
    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
</div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1.  What is the voltage output challenge faced when integrating a Micro850 PLC with a SureStep Stepper drive?</h4>
<p class='text-muted'><strong>Answer:</strong> The voltage output from the Micro850 PLC is 24VDC, while the Pulse input to the SureStep Stepper drive requires sourcing (0V to pulse high).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What specific issue arises due to the voltage difference between the Micro850 PLC output and the Pulse input requirement of the SureStep Stepper drive?</h4>
<p class='text-muted'><strong>Answer:</strong> The Pulse input of the SureStep Stepper drive requires sourcing (0V to pulse high) while the Micro850 PLC output is 24VDC, creating a compatibility challenge.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What solutions have been explored to address the voltage output challenge between the Micro850 PLC and the SureStep Stepper drive?</h4>
<p class='text-muted'><strong>Answer:</strong> Solid-state relays capable of cycling at 100kHz were considered, but the only PNP to NPN converter found from Phoenix is limited to 15kHz.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Have other professionals encountered a similar issue when integrating a Micro850 PLC with a SureStep Stepper drive and how did they resolve it?</h4>
<p class='text-muted'><strong>Answer:</strong> Professionals have shared their experiences and solutions for addressing the voltage output challenge between the Micro850 PLC and the SureStep Stepper drive in this discussion thread.</p>
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
