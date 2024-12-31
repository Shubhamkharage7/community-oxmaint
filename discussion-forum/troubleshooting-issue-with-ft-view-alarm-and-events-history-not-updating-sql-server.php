
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently using FT View version 12 to receive alarms from my PLC system. Initially, everything was working smoothly and the Alarm and Event History server was populating correctly. However, there seems to be an issue now. While my FT application and the separate WIN-911 system are">
    <meta name="keywords" content="ft view version 12, plc system alarms, alarm and event history server, troubleshooting issues, sql server integration, data not updating, ft application errors, win-911 system, active alarms detection, alarm writing errors, sql server reading issues, alarm">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-ft-view-alarm-and-events-history-not-updating-sql-server">
    <title>Troubleshooting Issue with FT View Alarm and Events History not Updating SQL Server | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Issue with FT View Alarm and Events History not Updating SQL Server | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently using FT View version 12 to receive alarms from my PLC system. Initially, everything was working smoothly and the Alarm and Event History server was populating correctly. However, there seems to be an issue now. While my FT application and the separate WIN-911 system are">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-ft-view-alarm-and-events-history-not-updating-sql-server">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Issue with FT View Alarm and Events History not Updating SQL Server | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently using FT View version 12 to receive alarms from my PLC system. Initially, everything was working smoothly and the Alarm and Event History server was populating correctly. However, there seems to be an issue now. While my FT application and the separate WIN-911 system are">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issue-with-ft-view-alarm-and-events-history-not-updating-sql-server"
      },
      "headline": "Troubleshooting Issue with FT View Alarm and Events History not Updating SQL Server",
      "description": "Hello, I am currently using FT View version 12 to receive alarms from my PLC system. Initially, everything was working smoothly and the Alarm and Event History server was populating correctly. However, there seems to be an issue now. While my FT application and the separate WIN-911 system are",
      "author": {
        "@type": "Person",
        "name": "Sym_Boots"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-09",
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
                <h1 class="text-white">Troubleshooting Issue with FT View Alarm and Events History not Updating SQL Server</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Sym_Boots</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4030</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">408</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently using FT View version 12 to receive alarms from my PLC system. Initially, everything was working smoothly and the Alarm and Event History server was populating correctly. However, there seems to be an issue now. While my FT application and the separate WIN-911 system are both detecting active alarms, the Alarm and Event History server is not updating with the new data. I am unsure if the problem lies with FT View not writing the alarms properly or if the SQL server is not reading them in. I have made sure that the Alarm and Event History feature is still enabled in the FT application. Can anyone offer insight on what might be causing this issue or provide guidance on troubleshooting it effectively?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am facing the same problem, have you discovered a solution for it yet?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mony9909</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An update on the issue at hand: Upon monitoring the SQL service activity on my alarm and event server, it was identified that no insert queries were being written to the SQL database. Following a re-build of the server, it is now functioning flawlessly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mony9909</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User mony9909 provided an update on the issue at hand. Upon monitoring the SQL service activity on their alarm & event server, there were no insert queries being written to the SQL database. Following a rebuild of the server, the issue has been resolved and everything is now functioning correctly. Can you please provide a step-by-step guide or share a screenshot on how to do this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>[email protected]</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the Alarm and Event History server in FT View not updating with the new data despite active alarms being detected?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to FT View not writing the alarms properly or the SQL server not reading them in. Further troubleshooting may be required to pinpoint the exact cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the problem of FT View Alarm and Event History not updating in SQL Server?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To effectively troubleshoot this issue, you can start by verifying if the Alarm and Event History feature is still enabled in the FT application. Additionally, checking the communication between FT View, the PLC system, and the SQL server for any potential errors or misconfigurations could help identify the root cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can be taken to ensure that the FT View Alarm and Event History server populates correctly?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is important to ensure that all components, including FT View, the PLC system, and the SQL server, are properly configured and communicating seamlessly. Checking for any recent updates or changes that might have affected the system's functionality could also be beneficial in resolving the issue.</p>
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
