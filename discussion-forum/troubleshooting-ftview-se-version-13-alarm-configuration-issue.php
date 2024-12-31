
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I am reaching out for the first time with a technical issue that has been causing me quite a bit of frustration. I have a set up with two FTView SE Local Stations, each running on a separate PC. The working station is running on version 11">
    <meta name="keywords" content="ftview se, version 13, alarm configuration, troubleshooting, ftae, fault limit exceeded, bad quality, configuration error, ftview studio, hmi, plc, alarms, diagnostics, live data test client, windows">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ftview-se-version-13-alarm-configuration-issue">
    <title>Troubleshooting FTView SE Version 13 Alarm Configuration Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FTView SE Version 13 Alarm Configuration Issue | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I am reaching out for the first time with a technical issue that has been causing me quite a bit of frustration. I have a set up with two FTView SE Local Stations, each running on a separate PC. The working station is running on version 11">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ftview-se-version-13-alarm-configuration-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FTView SE Version 13 Alarm Configuration Issue | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I am reaching out for the first time with a technical issue that has been causing me quite a bit of frustration. I have a set up with two FTView SE Local Stations, each running on a separate PC. The working station is running on version 11">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ftview-se-version-13-alarm-configuration-issue"
      },
      "headline": "Troubleshooting FTView SE Version 13 Alarm Configuration Issue",
      "description": "Greetings everyone, I am reaching out for the first time with a technical issue that has been causing me quite a bit of frustration. I have a set up with two FTView SE Local Stations, each running on a separate PC. The working station is running on version 11",
      "author": {
        "@type": "Person",
        "name": "pgrimm92"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">Troubleshooting FTView SE Version 13 Alarm Configuration Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>pgrimm92</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">195</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">483</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone,

I am reaching out for the first time with a technical issue that has been causing me quite a bit of frustration. I have a set up with two FTView SE Local Stations, each running on a separate PC. The working station is running on version 11 on a Windows 10 PC, while the other station, which is experiencing issues, is running on version 13 on a Windows 11 PC. The version 13 project was created from the version 11 project.

The problem I am encountering is with the FTAE on the version 13 Client. Only one alarm is showing up, while the rest are not appearing. In the Alarm Faults window, all FTAE tags are showing as Bad Quality - Configuration Error. This issue is causing the Fault Limit Exceeded error.

I have tried re-exporting and re-importing the alarms from the version 11 project into the version 13 project, but the problem persists. I have also compared the version 11 and version 13 FTView Studio projects, but have not been able to identify any differences that could be causing the issue.

Despite these challenges, everything else on the version 13 HMI is functioning properly. The alarms update correctly on the version 11 HMI, indicating that the problem is specific to the version 13 HMI.

I have conducted a Live Data Test Client on the version 13 PC and manually mapped some alarms that were not displaying, and they showed good quality. This suggests that the connection between the HMI PC and the two CLX PLCs is not the issue.

I would greatly appreciate any assistance in resolving this issue. I have included images of the errors from FTView Diagnostics and Alarm Faults in the FTView SE Client for reference. Thank you for any help you can provide.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To export the tag alarm and event server to a CSV file, remove it from the project and then recreate it using the same name by importing the CSV. It is important to note that when copying projects, the database may become corrupted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee recommended exporting the tag alarm and event server to a CSV file, deleting it from the project, then recreating it with the same name by importing the CSV. It's not uncommon for the database to get corrupted when copying projects. I attempted exporting to .xml within FTView Studio and selecting the "delete and restore" option upon importing, but the error messages persisted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pgrimm92</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have gone to great lengths to address the issues with my FTAE database in FTView SE v13, even going so far as to delete it and start anew. Despite these efforts, the same issues persist. Could there be a compatibility issue between exporting FTAE in v11 and importing into v13? Everything else in my v13 project is functioning properly, leading me to believe it may not be a DCOM-related problem as I have encountered in the past. With nearly 1000 alarms, the thought of recreating the entire FTAE DB is daunting. I will test creating a few new alarms and triggering them to see if they display properly. If successful, it may indicate that recreating the FTAE DB is the solution, albeit at the cost of valuable time. Tomorrow, I plan on contacting Rockwell Tech Connect in hopes of connecting with someone who has experience with this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pgrimm92</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why are only some alarms showing up in the FTAE on the FTView SE version 13 Client?</h4>
<p class='text-muted'><strong>Answer:</strong> The alarms are showing as Bad Quality - Configuration Error in the Alarm Faults window, which is causing the issue. This might be due to a configuration error within the project.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the issue of missing alarms in the FTView SE version 13 Client?</h4>
<p class='text-muted'><strong>Answer:</strong> You can try re-exporting and re-importing the alarms from the version 11 project into the version 13 project. Additionally, conducting a Live Data Test Client and manually mapping alarms can help identify potential configuration errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is the connection between the HMI PC and the CLX PLCs causing the issue with alarm display in FTView SE version 13?</h4>
<p class='text-muted'><strong>Answer:</strong> The Live Data Test Client results suggest that the connection is not the issue. The problem seems to be specific to the version 13 HMI configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I resolve the Fault Limit Exceeded error caused by the missing alarms in FTView SE version 13?</h4>
<p class='text-muted'><strong>Answer:</strong> Resolving the configuration errors causing the alarms to show as Bad Quality in the Alarm Faults window should help eliminate the Fault Limit Exceeded error. Conducting thorough checks and comparisons between the version 11 and version 13 projects can help identify and rect</p>
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
