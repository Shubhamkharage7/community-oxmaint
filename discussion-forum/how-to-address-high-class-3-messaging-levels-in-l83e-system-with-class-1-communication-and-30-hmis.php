
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My current set-up utilizes an L83E system with mainly class 1 communication, along with approximately 30 HMIs that consist of basic IO buttons. Despite the straightforward nature of the HMIs, I am experiencing high levels of class 3 messaging on the PLC, reaching close to 100%. The customers network">
    <meta name="keywords" content="l83e system, class 1 communication, hmi buttons, high class 3 messaging levels, network congestion, plc issues, network topography, network traffic, loops, troubleshooting, source identification, network issues, communication protocols, network analysis">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-address-high-class-3-messaging-levels-in-l83e-system-with-class-1-communication-and-30-hmis">
    <title>How to Address High Class 3 Messaging Levels in L83E System with Class 1 Communication and 30 HMIs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Address High Class 3 Messaging Levels in L83E System with Class 1 Communication and 30 HMIs | Oxmaint Community">
    <meta property="og:description" content="My current set-up utilizes an L83E system with mainly class 1 communication, along with approximately 30 HMIs that consist of basic IO buttons. Despite the straightforward nature of the HMIs, I am experiencing high levels of class 3 messaging on the PLC, reaching close to 100%. The customers network">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-address-high-class-3-messaging-levels-in-l83e-system-with-class-1-communication-and-30-hmis">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Address High Class 3 Messaging Levels in L83E System with Class 1 Communication and 30 HMIs | Oxmaint Community">
    <meta name="twitter:description" content="My current set-up utilizes an L83E system with mainly class 1 communication, along with approximately 30 HMIs that consist of basic IO buttons. Despite the straightforward nature of the HMIs, I am experiencing high levels of class 3 messaging on the PLC, reaching close to 100%. The customers network">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-address-high-class-3-messaging-levels-in-l83e-system-with-class-1-communication-and-30-hmis"
      },
      "headline": "How to Address High Class 3 Messaging Levels in L83E System with Class 1 Communication and 30 HMIs",
      "description": "My current set-up utilizes an L83E system with mainly class 1 communication, along with approximately 30 HMIs that consist of basic IO buttons. Despite the straightforward nature of the HMIs, I am experiencing high levels of class 3 messaging on the PLC, reaching close to 100%. The customers network",
      "author": {
        "@type": "Person",
        "name": "Mcdeichmann"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-22",
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
                <h1 class="text-white">How to Address High Class 3 Messaging Levels in L83E System with Class 1 Communication and 30 HMIs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Mcdeichmann</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">168</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">232</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>My current set-up utilizes an L83E system with mainly class 1 communication, along with approximately 30 HMI's that consist of basic IO buttons. Despite the straightforward nature of the HMI's, I am experiencing high levels of class 3 messaging on the PLC, reaching close to 100%. The customer's network topography appears to be messy, possibly due to the presence of loops causing such issues. Are there any additional steps I should take to address this issue? Are there any resources available to help identify the source of the network traffic congestion?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Which HMI brand should you choose? All HMI systems utilize class 3 messages to retrieve tag data from the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the brand of the HMI being used is crucial as all HMI systems rely on class 3 messages for retrieving tag data from the PLC. The Panelview interface is commonly used, but excessive bandwidth usage may be unexpected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mcdeichmann</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize network performance and observe load, I recommend starting by disconnecting each HMI from the network individually and monitoring the impact. Then, reconnect them one by one to see if the load increases in a linear manner and to what extent. It's important to also consider the involvement of a SCADA system during this process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Having 30 HMIs can significantly impact performance, especially considering the volume of tags and scan rate. It is crucial to consider the model of the PanelView being used, as older models may struggle with handling a high number of requests effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing high class 3 messaging levels in an L83E system with class 1 communication and 30 HMIs?</h4>
<p class='text-muted'><strong>Answer:</strong> - The high levels of class 3 messaging could be due to network congestion caused by loops in the network topography.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I address the issue of high class 3 messaging in my PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> - To address this issue, you may need to optimize the network topography to eliminate loops and reduce network traffic congestion.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any resources available to help identify the source of network traffic congestion in my system?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can use network monitoring tools to analyze network traffic and identify sources of congestion, such as excessive class 3 messaging in your case.</p>
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
