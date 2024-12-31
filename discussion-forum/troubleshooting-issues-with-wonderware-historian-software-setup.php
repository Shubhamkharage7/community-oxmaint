
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A while back, I received training from WonderWare on setting up the Historian software. However, I have retained very little of that knowledge, and have not successfully completed a setup on my own. Despite no errors in the configurator and all indicators showing green, I encountered issues when trying">
    <meta name="keywords" content="wonderware historian, historian software setup, troubleshooting issues, wonderware training, idas tags, configurator errors, view trends problem, import tags issue, timeout errors, cursor loading hang-ups, viewer launch difficulty, google troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-wonderware-historian-software-setup">
    <title>Troubleshooting Issues with WonderWare Historian Software Setup | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Issues with WonderWare Historian Software Setup | Oxmaint Community">
    <meta property="og:description" content="A while back, I received training from WonderWare on setting up the Historian software. However, I have retained very little of that knowledge, and have not successfully completed a setup on my own. Despite no errors in the configurator and all indicators showing green, I encountered issues when trying">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-wonderware-historian-software-setup">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Issues with WonderWare Historian Software Setup | Oxmaint Community">
    <meta name="twitter:description" content="A while back, I received training from WonderWare on setting up the Historian software. However, I have retained very little of that knowledge, and have not successfully completed a setup on my own. Despite no errors in the configurator and all indicators showing green, I encountered issues when trying">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-wonderware-historian-software-setup"
      },
      "headline": "Troubleshooting Issues with WonderWare Historian Software Setup",
      "description": "A while back, I received training from WonderWare on setting up the Historian software. However, I have retained very little of that knowledge, and have not successfully completed a setup on my own. Despite no errors in the configurator and all indicators showing green, I encountered issues when trying",
      "author": {
        "@type": "Person",
        "name": "dalporto"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-10",
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
                <h1 class="text-white">Troubleshooting Issues with WonderWare Historian Software Setup</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">117</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">208</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>A while back, I received training from WonderWare on setting up the Historian software. However, I have retained very little of that knowledge, and have not successfully completed a setup on my own. Despite no errors in the configurator and all indicators showing green, I encountered issues when trying to view trends and import tags in IDAS. I have experienced timeouts, cursor loading hang-ups, and difficulty in launching the viewer. I have tried troubleshooting with Google to no avail. Any guidance on resolving these issues would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After reinstalling Patch 04, the Historian is up and running. I have a couple more queries regarding its functionality. Firstly, when I restart the viewer in a standalone installation using Modbus, the existing alarms are timestamped with the viewer start time. Is there a way to link the alarm page to an SQL database for accurate timestamps? Secondly, is it necessary for the Viewer to be active for the Historian to record data? This seems illogical, but I am noticing gaps in the logs already. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The audience continues to grapple with...</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In InTouch 2014 standalone, WindowViewer must be active on the alarm logging PC/server in order to record alarms to the SQL database. This is because alarms are created individually for each client.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1.  I am facing issues with setting up WonderWare Historian software, despite no errors in the configurator. What could be the possible reasons for encountering problems while viewing trends and importing tags in IDAS?</h4>
<p class='text-muted'><strong>Answer:</strong> Issues like timeouts, cursor loading hang-ups, and difficulty in launching the viewer in WonderWare Historian software could arise due to various reasons such as network connectivity issues, misconfigured settings, or compatibility problems with other software components.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I have received training on WonderWare Historian software setup in the past but have forgotten most of it. How can I refresh my knowledge and troubleshoot the issues I am facing independently?</h4>
<p class='text-muted'><strong>Answer:</strong> If you have forgotten the training on WonderWare Historian software setup, you can refer to the documentation provided by WonderWare, attend refresher training sessions, or seek help from online resources and forums dedicated to WonderWare products.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Despite troubleshooting with Google, I have been unable to resolve the issues I am facing with WonderWare Historian software setup. What other resources or steps can I explore to address these problems effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> Apart from using Google for troubleshooting, you can reach out to WonderWare's customer support for assistance, consult the user community forums for WonderWare products, or consider hiring a professional consultant with expertise in WonderWare software to help you resolve the setup issues.</p>
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
