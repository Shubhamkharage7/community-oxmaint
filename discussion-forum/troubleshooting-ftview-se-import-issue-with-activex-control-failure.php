
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am encountering an issue with the alarm view in FTView 8.20, with the exact same version on both the developer and customer PCs. When using an old project as a starting point, it opens successfully when imported to either PC. However, after backing up and restoring this">
    <meta name="keywords" content="ftview se, troubleshooting, import issue, activex control, alarm view, factorytalk, error messages, file version, cab file, rsview activex control, backup and restore, application, customer pc, display issue, alarm summary">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ftview-se-import-issue-with-activex-control-failure">
    <title>Troubleshooting FTView SE Import Issue with ActiveX Control Failure | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting FTView SE Import Issue with ActiveX Control Failure | Oxmaint Community">
    <meta property="og:description" content="Hello, I am encountering an issue with the alarm view in FTView 8.20, with the exact same version on both the developer and customer PCs. When using an old project as a starting point, it opens successfully when imported to either PC. However, after backing up and restoring this">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ftview-se-import-issue-with-activex-control-failure">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting FTView SE Import Issue with ActiveX Control Failure | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am encountering an issue with the alarm view in FTView 8.20, with the exact same version on both the developer and customer PCs. When using an old project as a starting point, it opens successfully when imported to either PC. However, after backing up and restoring this">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ftview-se-import-issue-with-activex-control-failure"
      },
      "headline": "Troubleshooting FTView SE Import Issue with ActiveX Control Failure",
      "description": "Hello, I am encountering an issue with the alarm view in FTView 8.20, with the exact same version on both the developer and customer PCs. When using an old project as a starting point, it opens successfully when imported to either PC. However, after backing up and restoring this",
      "author": {
        "@type": "Person",
        "name": "spaderkung"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-28",
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
                <h1 class="text-white">Troubleshooting FTView SE Import Issue with ActiveX Control Failure</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>spaderkung</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4024</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">1</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello,

I am encountering an issue with the alarm view in FTView 8.20, with the exact same version on both the developer and customer PCs. When using an old project as a starting point, it opens successfully when imported to either PC. However, after backing up and restoring this application on the customer PC, the display with the alarm summary view, utilizing a built-in template, fails to open. Two error messages are displayed: "FactoryTalk Alarm and Event Summary: Newer file version of ActiveX control required" and "CAB file missing on the server: localhost/RSViewActiveXControlSetup/FTAlarmSummaryocx.cab." The application has not been modified yet, only backed up and restored. Restoring the "old" project allows the display to work again, but not after my backup process.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The issue lies in the discrepancy between the versions of FactoryTalk Alarms and Events on my development computer (2.81) and the customer's PC (2.80). Unfortunately, the customer PC does not allow for an upgrade as it shows "product already installed" in the install box. Despite uninstalling FTView on my PC, remnants of the software remain along with Studio5000. I am concerned that solely uninstalling Alarms and Events from Windows may cause further complications due to other components also being at version 2.81.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>spaderkung</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for a solution to fix this error? Any ideas on how to rectify it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rjoshi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Transferring Cab/Dll/OCX files and re-registering them on a different computer is typically necessary. There is a possibility of updating to a newer version on the new PC and linking it to the updated Active X through the developer window. This method was commonly used in RSView32, but its compatibility with FTSE is uncertain.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I encountering the error message "FactoryTalk Alarm and Event Summary: Newer file version of ActiveX control required" when trying to open the alarm summary view in FTView SE?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This error message indicates that a newer version of the ActiveX control is required to open the alarm summary view. It may be related to the backup and restore process on the customer PC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What does the error message "CAB file missing on the server: localhost/RSViewActiveXControlSetup/FTAlarmSummaryocx.cab" mean in FTView SE?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This error suggests that the CAB file required for the ActiveX control setup is missing on the server. It could be causing issues with displaying the alarm summary view.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I resolve the issue of the alarm summary view failing to open in FTView SE after a backup and restore process?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One possible solution could be to ensure that the required ActiveX control files are properly installed on the customer PC during the backup and restore process. Checking for any file version discrepancies and ensuring all necessary files are copied over correctly might help resolve the issue.</p>
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
