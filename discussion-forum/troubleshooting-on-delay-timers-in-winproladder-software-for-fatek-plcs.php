
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have been utilizing Winproladder software for programming FATEK FBs PLCs. In PLC programming, Timers play a crucial role in activating output coils or contacts. However, I have noticed an anomaly with FATEK PLCs - their on delay timers continue running even after the activation of output">
    <meta name="keywords" content="troubleshooting, delay timers, winproladder software, fatek plcs, programming, fbs plc, on delay timers, output coils, contact activation, inefficiency, stop timer, power cut, plc timers, anomaly, running">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-on-delay-timers-in-winproladder-software-for-fatek-plcs">
    <title>Troubleshooting On Delay Timers in Winproladder Software for FATEK PLCs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting On Delay Timers in Winproladder Software for FATEK PLCs | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have been utilizing Winproladder software for programming FATEK FBs PLCs. In PLC programming, Timers play a crucial role in activating output coils or contacts. However, I have noticed an anomaly with FATEK PLCs - their on delay timers continue running even after the activation of output">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-on-delay-timers-in-winproladder-software-for-fatek-plcs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting On Delay Timers in Winproladder Software for FATEK PLCs | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have been utilizing Winproladder software for programming FATEK FBs PLCs. In PLC programming, Timers play a crucial role in activating output coils or contacts. However, I have noticed an anomaly with FATEK PLCs - their on delay timers continue running even after the activation of output">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-on-delay-timers-in-winproladder-software-for-fatek-plcs"
      },
      "headline": "Troubleshooting On Delay Timers in Winproladder Software for FATEK PLCs",
      "description": "Hello everyone, I have been utilizing Winproladder software for programming FATEK FBs PLCs. In PLC programming, Timers play a crucial role in activating output coils or contacts. However, I have noticed an anomaly with FATEK PLCs - their on delay timers continue running even after the activation of output",
      "author": {
        "@type": "Person",
        "name": "Faizan_Automata"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-04",
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
                <h1 class="text-white">Troubleshooting On Delay Timers in Winproladder Software for FATEK PLCs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Faizan_Automata</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">952</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">406</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have been utilizing Winproladder software for programming FATEK FBs PLCs. In PLC programming, Timers play a crucial role in activating output coils or contacts. However, I have noticed an anomaly with FATEK PLCs - their on delay timers continue running even after the activation of output coils. This leads to inefficiency as the timers keep running unnecessarily. Is there a way to stop the timer once the coil or contact has been activated, or should it run until power is cut? Additionally, I am curious to know if other PLC timers function in a similar manner. Your insights on this matter would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're unsure about your logic setup, could you share a screenshot of the issue you're referring to? Typically, "stopping" the timer involves resetting it, and this can be accomplished by either changing the input to the timer to False or utilizing a RESET instruction on the timer's data object.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy inquired about the logic arrangement and requested a screenshot for clarification. When it comes to "stopping" the timer, it typically involves resetting it either by making the input False or using a RESET instruction on the timer's data object. Is it acceptable to let the timer continue running even after its intended usage in the program?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Faizan_Automata</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Faizan_Automata inquired about the possibility of leaving a timer running even after its initial usage in a program. The answer is yes, it is acceptable to allow the timer to expire with its value maintained at 1 instead of resetting it to 0, as long as the coil needs to remain activated. This approach simplifies the process as the timer output can directly drive the coil with a delayed value of 1, eliminating the need for an additional "seal-in" or "latch" circuit to keep the coil activated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Activate the M1957/M1973 functions to automatically stop the timer once the set time is reached.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AB2005</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why do FATEK PLCs have on delay timers that continue running after the activation of output coils?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This anomaly in FATEK PLCs where on delay timers continue running even after the activation of output coils can lead to inefficiencies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is there a way to stop the timer in FATEK PLCs once the coil or contact has been activated?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address the issue of on delay timers in FATEK PLCs continuing to run unnecessarily, it's important to understand how the timers are programmed and if there are specific functions or settings to control their behavior.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Do other PLC timers function in a similar manner to FATEK PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It would be interesting to explore if other PLC brands have similar behaviors with their timers or if this anomaly is specific to FATEK PLCs. Comparing timer functionalities across different PLC brands could provide insights into industry standards and best practices.</p>
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
