
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Has anyone successfully integrated Lenze servomotors with Siemens S120 drives? Any tips or recommendations for configuring resolver and servo parameters? Specifically, we are working with Siemens CU310-2 PN 6SL3040-1LA01-0AA0 and Siemens PM240-2 6SL3210-1PE31-1AL0 drives. The Lenze motors in question are the MDFQARS112-22 with resolver IDNR00397002 and the GFQBT112-24 with">
    <meta name="keywords" content="lenze servomotors, siemens s120 drives, resolver configuration, servo parameter setup, lenze mdfqars112-22, lenze gfqbt112-24, resolver idnr00397002, siemens cu310-">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/integration-of-lenze-servomotors-with-siemens-s120-drives-tips-for-resolver-and-servo-parameter-configuration">
    <title>Integration of Lenze servomotors with Siemens S120 drives: Tips for Resolver and Servo Parameter Configuration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Integration of Lenze servomotors with Siemens S120 drives: Tips for Resolver and Servo Parameter Configuration | Oxmaint Community">
    <meta property="og:description" content="Has anyone successfully integrated Lenze servomotors with Siemens S120 drives? Any tips or recommendations for configuring resolver and servo parameters? Specifically, we are working with Siemens CU310-2 PN 6SL3040-1LA01-0AA0 and Siemens PM240-2 6SL3210-1PE31-1AL0 drives. The Lenze motors in question are the MDFQARS112-22 with resolver IDNR00397002 and the GFQBT112-24 with">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/integration-of-lenze-servomotors-with-siemens-s120-drives-tips-for-resolver-and-servo-parameter-configuration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Integration of Lenze servomotors with Siemens S120 drives: Tips for Resolver and Servo Parameter Configuration | Oxmaint Community">
    <meta name="twitter:description" content="Has anyone successfully integrated Lenze servomotors with Siemens S120 drives? Any tips or recommendations for configuring resolver and servo parameters? Specifically, we are working with Siemens CU310-2 PN 6SL3040-1LA01-0AA0 and Siemens PM240-2 6SL3210-1PE31-1AL0 drives. The Lenze motors in question are the MDFQARS112-22 with resolver IDNR00397002 and the GFQBT112-24 with">
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
        "@id": "https://community.oxmaint.com/discussion-forum/integration-of-lenze-servomotors-with-siemens-s120-drives-tips-for-resolver-and-servo-parameter-configuration"
      },
      "headline": "Integration of Lenze servomotors with Siemens S120 drives: Tips for Resolver and Servo Parameter Configuration",
      "description": "Has anyone successfully integrated Lenze servomotors with Siemens S120 drives? Any tips or recommendations for configuring resolver and servo parameters? Specifically, we are working with Siemens CU310-2 PN 6SL3040-1LA01-0AA0 and Siemens PM240-2 6SL3210-1PE31-1AL0 drives. The Lenze motors in question are the MDFQARS112-22 with resolver IDNR00397002 and the GFQBT112-24 with",
      "author": {
        "@type": "Person",
        "name": "Kataeb"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-05",
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
                <h1 class="text-white">Integration of Lenze servomotors with Siemens S120 drives: Tips for Resolver and Servo Parameter Configuration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">455</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">230</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Has anyone successfully integrated Lenze servomotors with Siemens S120 drives? Any tips or recommendations for configuring resolver and servo parameters? Specifically, we are working with Siemens CU310-2 PN 6SL3040-1LA01-0AA0 and Siemens PM240-2 6SL3210-1PE31-1AL0 drives. The Lenze motors in question are the MDFQARS112-22 with resolver IDNR00397002 and the GFQBT112-24 with resolver IDNR00397002. These resolvers are either installed on or inside the motor.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you please provide the specifications for those two motors? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After conducting a quick search, I was unable to locate the specifications for the motor or resolver I needed. In the past, I have successfully used the Siemens S120 to control obsolete resolver-based servos. To determine the specs for the motor, I required the Siemens SMC20 module (6SL3055-0AA00-5AA3) to input the necessary information into the S120.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>baref00t25</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure accuracy, please verify the servomotor data on the Lenze website at www.lenze.com. The MDFQA asynchronous servo motors can be found at https://www.lenze-com.ru/content/files/MCA-MCS-MQA-MDxKS-MDFQA__Servo%20motors__v3-0__EN.pdf, where you can access the operating instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering Lenze motors, they can be likened to Siemens 1PH7/8 motors. Operating these motors should not pose any issues, especially since your motor is asynchronous. To ensure compatibility, make sure to obtain the right SMC for the encoder.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to set up a resolver, it is necessary to use an SMC10 module instead of an SMC20.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Can Lenze servomotors be successfully integrated with Siemens S120 drives?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to integrate Lenze servomotors with Siemens S120 drives.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are some tips for configuring resolver and servo parameters when integrating Lenze servomotors with Siemens S120 drives?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When configuring resolver and servo parameters for Lenze servomotors with Siemens S120 drives, it is recommended to pay attention to the specific models and resolver IDs. Ensure compatibility and proper setup for seamless integration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Which Lenze servomotor models are mentioned in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Lenze servomotor models mentioned are the MDFQARS112-22 and the GFQBT112-24.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are the resolver IDs for the Lenze servomotors in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The resolver ID for both Lenze motors mentioned is IDNR00397002.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  Where are the resolvers located in the Lenze servomotors?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The resolvers in question are either installed on or inside the Lenze servomotors mentioned in the discussion thread.</p>
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
