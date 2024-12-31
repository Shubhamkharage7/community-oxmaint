
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Since 1999, we have utilized MP2 6.0 w/SQL on our local network. While I inherited the setup of most of MP2, I took the initiative to configure Messenger to automatically email Weblink users about deleted work requests with comments. To ensure Messenger runs continuously, I installed it on another">
    <meta name="keywords" content="mp2 messenger email troubleshooting, microsoft outlook email prompt, mp2 messenger weblink integration, messenger email notification setup, troubleshooting microsoft outlook email issue, mp2 messenger configuration">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-mp2-messenger-email-prompt-in-microsoft-outlook">
    <title>Troubleshooting MP2 Messenger Email Prompt in Microsoft Outlook | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting MP2 Messenger Email Prompt in Microsoft Outlook | Oxmaint Community">
    <meta property="og:description" content="Since 1999, we have utilized MP2 6.0 w/SQL on our local network. While I inherited the setup of most of MP2, I took the initiative to configure Messenger to automatically email Weblink users about deleted work requests with comments. To ensure Messenger runs continuously, I installed it on another">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-mp2-messenger-email-prompt-in-microsoft-outlook">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting MP2 Messenger Email Prompt in Microsoft Outlook | Oxmaint Community">
    <meta name="twitter:description" content="Since 1999, we have utilized MP2 6.0 w/SQL on our local network. While I inherited the setup of most of MP2, I took the initiative to configure Messenger to automatically email Weblink users about deleted work requests with comments. To ensure Messenger runs continuously, I installed it on another">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-mp2-messenger-email-prompt-in-microsoft-outlook"
      },
      "headline": "Troubleshooting MP2 Messenger Email Prompt in Microsoft Outlook",
      "description": "Since 1999, we have utilized MP2 6.0 w/SQL on our local network. While I inherited the setup of most of MP2, I took the initiative to configure Messenger to automatically email Weblink users about deleted work requests with comments. To ensure Messenger runs continuously, I installed it on another",
      "author": {
        "@type": "Person",
        "name": "Don Smith"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-11",
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
                <h1 class="text-white">Troubleshooting MP2 Messenger Email Prompt in Microsoft Outlook</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Don Smith</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1743</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">285</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Since 1999, we have utilized MP2 6.0 w/SQL on our local network. While I inherited the setup of most of MP2, I took the initiative to configure Messenger to automatically email Weblink users about deleted work requests with comments. To ensure Messenger runs continuously, I installed it on another PC to operate in the background 24/7. However, after upgrading the hosting PC, I encounter a prompt from Microsoft Outlook every time a work request is deleted, asking for permission to send the email. The IT professional who previously resolved this issue cannot recall the solution, and Datastream no longer offers support for MP2. Our Exchange Server is version 5.5, service pack 4. I am unsure if this issue relates to MP2 or an Exchange setting. Any guidance on this matter would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Since 1999, I have been utilizing MP2 6.0 with SQL on a local network. I inherited the setup for MP2, and also configured Messenger to automatically send emails to Weblink users for work requests. It seems like there may be an issue with the local machine - could this be due to XP? If it is, you may need to adjust the security settings on the machine to enable email sending and stop the pop-up box. If the issue is on the exchange server, it might require a more intricate solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jasmine Howard</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I receiving a Microsoft Outlook prompt when deleting work requests in MP2 Messenger?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The prompt from Microsoft Outlook could be due to a configuration or compatibility issue between MP2 Messenger and Outlook after upgrading the hosting PC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve the issue of Outlook prompting for permission to send emails when using MP2 Messenger?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot this issue, you may need to review the settings in both MP2 Messenger and Outlook, ensuring they are configured to work seamlessly together.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is the prompt in Microsoft Outlook related to an Exchange Server setting or an MP2 Messenger issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The prompt may be caused by a setting in either Exchange Server version 5.5 or a compatibility issue with MP2 Messenger. Further investigation and testing may be required to pinpoint the exact cause of the problem.</p>
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
