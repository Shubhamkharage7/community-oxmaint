
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! We are interested in consolidating multiple HMI displays into one efficient system. To achieve this, we successfully exported the displays from the HMIs and imported them into the new HMI. However, we are currently encountering a challenge with the alarms. It seems that exporting the alarm tags only">
    <meta name="keywords" content="hmi, alarm configurations, panelview plus, merge alarms, consolidating displays, alarm tags, alarm configuration export, xml file, id replacement, integrating alarms, efficient system, hmi displays, exporting alarms, alarm">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/consolidating-hmi-alarm-configurations-how-to-successfully-merge-panelview-plus-alarms">
    <title>Consolidating HMI Alarm Configurations: How to Successfully Merge Panelview Plus Alarms | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Consolidating HMI Alarm Configurations: How to Successfully Merge Panelview Plus Alarms | Oxmaint Community">
    <meta property="og:description" content="Greetings! We are interested in consolidating multiple HMI displays into one efficient system. To achieve this, we successfully exported the displays from the HMIs and imported them into the new HMI. However, we are currently encountering a challenge with the alarms. It seems that exporting the alarm tags only">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/consolidating-hmi-alarm-configurations-how-to-successfully-merge-panelview-plus-alarms">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Consolidating HMI Alarm Configurations: How to Successfully Merge Panelview Plus Alarms | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! We are interested in consolidating multiple HMI displays into one efficient system. To achieve this, we successfully exported the displays from the HMIs and imported them into the new HMI. However, we are currently encountering a challenge with the alarms. It seems that exporting the alarm tags only">
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
        "@id": "https://community.oxmaint.com/discussion-forum/consolidating-hmi-alarm-configurations-how-to-successfully-merge-panelview-plus-alarms"
      },
      "headline": "Consolidating HMI Alarm Configurations: How to Successfully Merge Panelview Plus Alarms",
      "description": "Greetings! We are interested in consolidating multiple HMI displays into one efficient system. To achieve this, we successfully exported the displays from the HMIs and imported them into the new HMI. However, we are currently encountering a challenge with the alarms. It seems that exporting the alarm tags only",
      "author": {
        "@type": "Person",
        "name": "celso3093"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-17",
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
                <h1 class="text-white">Consolidating HMI Alarm Configurations: How to Successfully Merge Panelview Plus Alarms</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>celso3093</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">183</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">297</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! We are interested in consolidating multiple HMI displays into one efficient system. To achieve this, we successfully exported the displays from the HMIs and imported them into the new HMI. However, we are currently encountering a challenge with the alarms. It seems that exporting the alarm tags only allows for the export of the entire Alarm configuration, preventing us from integrating alarms from different HMIs. 

One potential solution I am considering is exporting the alarm configuration from one HMI, making necessary edits to the XML file to replace the IDs, and then integrating it into the alarm configuration of the new HMI. Would this be the most effective approach? Your input is greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To start, set up triggers for new messages on the initial tab. Next, navigate to the tab containing all messages and transfer them to an Excel sheet. Highlight the first row, then scroll down to the last row and copy using CTRL+C. When editing in Excel, be mindful to preserve the final columns for formatting and numerical data. When pasting back, ensure you select cells (not entire rows) and use the insert paste option. Double-check for any unnecessary blank rows at the end. Utilize message triggers to effectively filter displays by ensuring the correct triggers and tags are in place for both new and old messages.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jholm90</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I consolidate HMI alarm configurations when merging Panelview Plus alarms?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One approach could be exporting the alarm configuration from one HMI, editing the XML file to replace the IDs, and integrating it into the new HMI's alarm configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What challenges are commonly faced when consolidating multiple HMI displays into one system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One challenge can be integrating alarm configurations from different HMIs due to limitations in exporting alarm tags only as the entire configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a recommended method for successfully merging alarm configurations from various HMIs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Exporting the alarm configuration from one HMI, adjusting the XML file to replace IDs, and then integrating it into the new HMI's alarm configuration could be an effective approach.</p>
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
