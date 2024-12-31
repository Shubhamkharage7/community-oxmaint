
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am in the process of setting up NAD using the step-by-step guide provided by InTouch on how to set up NAD for Modern InTouch Applications. However, I am facing an issue where it takes over 8 hours for the client to open in WindowViewer, even though">
    <meta name="keywords" content="windowviewer performance, wonderware 2014 nad setup, intouch nad configuration, intouch application setup, intouch nad performance, windowviewer slow opening, intouch tech note it104, improving intouch performance, windowviewer">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/improving-windowviewer-performance-for-wonderware-2014-nad-setup">
    <title>Improving WindowViewer Performance for Wonderware 2014 NAD Setup | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Improving WindowViewer Performance for Wonderware 2014 NAD Setup | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am in the process of setting up NAD using the step-by-step guide provided by InTouch on how to set up NAD for Modern InTouch Applications. However, I am facing an issue where it takes over 8 hours for the client to open in WindowViewer, even though">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/improving-windowviewer-performance-for-wonderware-2014-nad-setup">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Improving WindowViewer Performance for Wonderware 2014 NAD Setup | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am in the process of setting up NAD using the step-by-step guide provided by InTouch on how to set up NAD for Modern InTouch Applications. However, I am facing an issue where it takes over 8 hours for the client to open in WindowViewer, even though">
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
        "@id": "https://community.oxmaint.com/discussion-forum/improving-windowviewer-performance-for-wonderware-2014-nad-setup"
      },
      "headline": "Improving WindowViewer Performance for Wonderware 2014 NAD Setup",
      "description": "Hello everyone, I am in the process of setting up NAD using the step-by-step guide provided by InTouch on how to set up NAD for Modern InTouch Applications. However, I am facing an issue where it takes over 8 hours for the client to open in WindowViewer, even though",
      "author": {
        "@type": "Person",
        "name": "NewPLCuser2024"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-30",
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
                <h1 class="text-white">Improving WindowViewer Performance for Wonderware 2014 NAD Setup</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">206</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">30</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am in the process of setting up NAD using the step-by-step guide provided by InTouch on how to set up NAD for Modern InTouch Applications. However, I am facing an issue where it takes over 8 hours for the client to open in WindowViewer, even though none of the IO has been configured yet. It seems to be running slow, despite having a local copy on the computer. Can anyone suggest any solutions to improve the performance of WindowViewer? I also attempted to follow the tech note from InTouch (TN IT104) on improving InTouch NAD performance, but I am hesitant as I have multiple win.ini files and don't want to disrupt the current setup. Thank you for any help or suggestions!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What type of network are you using? In my experience, 8 hours is an unusually long time for network processes. It's a good idea to check the System Management Console log for any error messages. Ensure a strong connection with an ethernet cable tester and use switches instead of hubs. Also, remember not to enable NAD on the development server itself; it should only be enabled on clients.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While using SCADA, the SMC may display a "disconnected" error message, even though it eventually connects successfully. The NAD feature is enabled only on the client but doesn't open properly. It's unlikely to be a network issue since another NAD computer is functioning without any problems. The configuration of the network drive may be the issue, as the application manager only shows "X:" instead of the complete path name.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NewPLCuser2024</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're experiencing network issues, it may be specific to a particular client. Check your port lights to ensure they are green, not amber, and test the network cable connecting the client to the switch. Avoid using hubs in the network route from client to server. Update the application path in the Application Manager to use the full path for each user's network drive, as it is a best practice. While this may not be the cause of the current issue, it can help improve network performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why is my WindowViewer client taking over 8 hours to open even without any configured IO?
   - The slow performance of WindowViewer could be due to various factors such as system resources, network issues, or configuration settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I improve the performance of WindowViewer for Wonderware 2014 NAD setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can try following the tech note from InTouch (TN IT104) on improving InTouch NAD performance or explore other solutions suggested by the community or technical support.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it safe to make changes suggested in the tech note TN IT104 to improve InTouch NAD performance?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is recommended to carefully review the tech note instructions and consider the potential impact on your current setup before making any changes to improve performance. Backing up your configuration is also advisable.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What should I do if I have multiple win.ini files and I am hesitant to disrupt the current setup while following the tech note?</h4>
<p class='text-muted'><strong>Answer:</strong> - In case of multiple win.ini files, it is essential to identify the correct file to make the necessary modifications for improving WindowViewer performance. Consulting with technical support or experienced users can provide guidance in handling such situations.</p>
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
