
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey everyone, Ive been working on creating a counter macro in EasyBuilder for monitoring Ethernet IP device disconnections with a PLC. Im looking to track each disconnection event throughout the day and calculate the total number of disconnects. Despite having a tag for disconnections in the PLC, Im struggling">
    <meta name="keywords" content="monitoring ethernet ip device disconnections, easybuilder counter macro, plc disconnection tracking, total disconnects calculation, periodic execution issues, hmi model mt8051ip, plc model cj2m cpu33, monitor disconnection events, ethernet ip">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/monitoring-ethernet-ip-device-disconnections-using-easybuilder-counter-macro">
    <title>Monitoring Ethernet IP device disconnections using EasyBuilder counter macro | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Monitoring Ethernet IP device disconnections using EasyBuilder counter macro | Oxmaint Community">
    <meta property="og:description" content="Hey everyone, Ive been working on creating a counter macro in EasyBuilder for monitoring Ethernet IP device disconnections with a PLC. Im looking to track each disconnection event throughout the day and calculate the total number of disconnects. Despite having a tag for disconnections in the PLC, Im struggling">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/monitoring-ethernet-ip-device-disconnections-using-easybuilder-counter-macro">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Monitoring Ethernet IP device disconnections using EasyBuilder counter macro | Oxmaint Community">
    <meta name="twitter:description" content="Hey everyone, Ive been working on creating a counter macro in EasyBuilder for monitoring Ethernet IP device disconnections with a PLC. Im looking to track each disconnection event throughout the day and calculate the total number of disconnects. Despite having a tag for disconnections in the PLC, Im struggling">
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
        "@id": "https://community.oxmaint.com/discussion-forum/monitoring-ethernet-ip-device-disconnections-using-easybuilder-counter-macro"
      },
      "headline": "Monitoring Ethernet IP device disconnections using EasyBuilder counter macro",
      "description": "Hey everyone, Ive been working on creating a counter macro in EasyBuilder for monitoring Ethernet IP device disconnections with a PLC. Im looking to track each disconnection event throughout the day and calculate the total number of disconnects. Despite having a tag for disconnections in the PLC, Im struggling",
      "author": {
        "@type": "Person",
        "name": "Nafir"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-03",
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
                <h1 class="text-white">Monitoring Ethernet IP device disconnections using EasyBuilder counter macro</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Nafir</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">238</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">96</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey everyone, I've been working on creating a counter macro in EasyBuilder for monitoring Ethernet IP device disconnections with a PLC. I'm looking to track each disconnection event throughout the day and calculate the total number of disconnects. Despite having a tag for disconnections in the PLC, I'm struggling to implement the macro due to issues with periodic execution. Any suggestions or ideas on how to tackle this issue? The HMI model is MT8051iP and the PLC model is CJ2M CPU33.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider utilizing PLC Control for more efficient automation instead of periodic execution. By monitoring the status of a bit in the PLC, you can trigger a macro to execute tasks in either direction, from OFF to ON, ON to OFF, or both. This method allows for more precise control and flexibility in your automation processes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dYoast</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Yoast, consider utilizing PLC control instead of regularly scheduled execution. By utilizing a PLC bit's state, you can activate a macro for execution. The macro can be triggered in various directions - from OFF to ON, ON to OFF, or both ways. Thank you for the insight!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nafir</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I use EasyBuilder to create a counter macro for monitoring Ethernet IP device disconnections with a PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> To monitor Ethernet IP device disconnections with a PLC using EasyBuilder, you can create a counter macro to track each disconnection event and calculate the total number of disconnects. Ensure you have a tag in the PLC to store the disconnection count and set up the macro to increment the count whenever a disconnection event occurs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are some common issues encountered when implementing a counter macro for monitoring Ethernet IP device disconnections with a PLC in EasyBuilder?</h4>
<p class='text-muted'><strong>Answer:</strong> One common issue when implementing a counter macro for monitoring Ethernet IP device disconnections in EasyBuilder is ensuring the macro executes periodically and accurately captures each disconnection event. If you are facing issues with periodic execution, consider checking the timing settings of the macro and adjusting them accordingly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Any suggestions for tackling issues with periodic execution of a counter macro in EasyBuilder for monitoring Ethernet IP device disconnections?</h4>
<p class='text-muted'><strong>Answer:</strong> If you are facing challenges with periodic execution of the counter macro in EasyBuilder for monitoring Ethernet IP device disconnections, consider reviewing the timing settings of the macro to ensure it runs at the desired intervals. Additionally, check for any conflicting tasks or interrupts that may affect the macro's execution.</p>
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
