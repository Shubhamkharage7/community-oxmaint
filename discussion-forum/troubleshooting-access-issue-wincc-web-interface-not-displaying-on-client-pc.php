
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have created HMI screens in WinCC and successfully configured the WinCC web server. I can access the web interface from the same computer using Internet Explorer without any issues. However, when attempting to access the web interface from a client PC, I am unable to view the screens,">
    <meta name="keywords" content="wincc web interface troubleshooting, wincc web interface access issue, wincc web server configuration, wincc web interface not displaying on client pc, simatic shell remote communication, wincc viewer">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-access-issue-wincc-web-interface-not-displaying-on-client-pc">
    <title>Troubleshooting Access Issue: WinCC Web Interface Not Displaying on Client PC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Access Issue: WinCC Web Interface Not Displaying on Client PC | Oxmaint Community">
    <meta property="og:description" content="I have created HMI screens in WinCC and successfully configured the WinCC web server. I can access the web interface from the same computer using Internet Explorer without any issues. However, when attempting to access the web interface from a client PC, I am unable to view the screens,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-access-issue-wincc-web-interface-not-displaying-on-client-pc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Access Issue: WinCC Web Interface Not Displaying on Client PC | Oxmaint Community">
    <meta name="twitter:description" content="I have created HMI screens in WinCC and successfully configured the WinCC web server. I can access the web interface from the same computer using Internet Explorer without any issues. However, when attempting to access the web interface from a client PC, I am unable to view the screens,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-access-issue-wincc-web-interface-not-displaying-on-client-pc"
      },
      "headline": "Troubleshooting Access Issue: WinCC Web Interface Not Displaying on Client PC",
      "description": "I have created HMI screens in WinCC and successfully configured the WinCC web server. I can access the web interface from the same computer using Internet Explorer without any issues. However, when attempting to access the web interface from a client PC, I am unable to view the screens,",
      "author": {
        "@type": "Person",
        "name": "Haroon Aziz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-29",
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
                <h1 class="text-white">Troubleshooting Access Issue: WinCC Web Interface Not Displaying on Client PC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Haroon Aziz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">109</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">381</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have created HMI screens in WinCC and successfully configured the WinCC web server. I can access the web interface from the same computer using Internet Explorer without any issues. However, when attempting to access the web interface from a client PC, I am unable to view the screens, despite receiving a successful server status on the client PC. I have enabled remote communication in the Simatic shell and set port 80 as specified in the web configurator. Additionally, I have entered the server address in WinCC Viewer RT on the client computer. The error message I am encountering is attached below. If there are any steps I may be missing, your input would be greatly appreciated. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Could someone assist me in resolving my problem?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Haroon Aziz</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I unable to view HMI screens in WinCC web interface on a client PC despite successful server status?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to configuration settings on the client PC or network settings. Check if remote communication is properly enabled in the Simatic shell, the correct port (e.g., port 80) is set in the web configurator, and the server address is correctly entered in WinCC Viewer RT on the client computer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot WinCC web interface access issues from a client PC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Ensure that the client PC is properly configured to communicate with the WinCC server. Check network settings, firewall configurations, and ensure that the necessary ports are open for communication. Verify that the server address is correctly entered in the client software and that there are no connectivity issues between the client PC and the server.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take if I encounter an error message when trying to access WinCC web interface from a client PC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Review the error message for specific details that may indicate the cause of the issue. Check the configuration settings on both the server and client side, including network settings, port configurations, and software settings. Ensure that all necessary steps for remote access are correctly configured and troubleshoot any potential connectivity issues.</p>
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
