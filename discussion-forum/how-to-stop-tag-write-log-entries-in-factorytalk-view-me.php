
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I utilize the Global Connections feature to transfer the time data from my PanelView Plus to my ControlLogix, with the Seconds value serving as a watchdog to verify the PV+ functionality and operation of its FactoryTalk View ME application. An unintended consequence is that the FactoryTalk Diagnostics log is">
    <meta name="keywords" content="tag write log, factorytalk view me, global connections, panelview plus, controllogix, seconds value, watchdog, pv+ functionality, factorytalk diagnostics log, diagnostic information, disable tag write log, specific tag, diagnostic list">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-stop-tag-write-log-entries-in-factorytalk-view-me">
    <title>How to Stop Tag Write Log Entries in FactoryTalk View ME? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Stop Tag Write Log Entries in FactoryTalk View ME? | Oxmaint Community">
    <meta property="og:description" content="I utilize the Global Connections feature to transfer the time data from my PanelView Plus to my ControlLogix, with the Seconds value serving as a watchdog to verify the PV+ functionality and operation of its FactoryTalk View ME application. An unintended consequence is that the FactoryTalk Diagnostics log is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-stop-tag-write-log-entries-in-factorytalk-view-me">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Stop Tag Write Log Entries in FactoryTalk View ME? | Oxmaint Community">
    <meta name="twitter:description" content="I utilize the Global Connections feature to transfer the time data from my PanelView Plus to my ControlLogix, with the Seconds value serving as a watchdog to verify the PV+ functionality and operation of its FactoryTalk View ME application. An unintended consequence is that the FactoryTalk Diagnostics log is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-stop-tag-write-log-entries-in-factorytalk-view-me"
      },
      "headline": "How to Stop Tag Write Log Entries in FactoryTalk View ME?",
      "description": "I utilize the Global Connections feature to transfer the time data from my PanelView Plus to my ControlLogix, with the Seconds value serving as a watchdog to verify the PV+ functionality and operation of its FactoryTalk View ME application. An unintended consequence is that the FactoryTalk Diagnostics log is",
      "author": {
        "@type": "Person",
        "name": "Ken Roach"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-14",
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
                <h1 class="text-white">How to Stop Tag Write Log Entries in FactoryTalk View ME?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2582</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">451</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I utilize the Global Connections feature to transfer the time data from my PanelView Plus to my ControlLogix, with the Seconds value serving as a watchdog to verify the PV+ functionality and operation of its FactoryTalk View ME application. An unintended consequence is that the FactoryTalk Diagnostics log is being inundated with the Tag Write entry every second, making it difficult to view other important diagnostic information. Is there a way to disable the Tag Write log function, perhaps for a specific tag only? So far, I have only found checkboxes in the Diagnostic List Setup to enable "log messages to printer" for various occurrences. Even after unchecking these options, the FactoryTalk Diagnostics log continues to record the Write event for my "HMI_Watchdog_Seconds" tag, under the "Information" category.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach shared his experience using the Global Connections feature to transfer time data from his PanelView Plus to his ControlLogix PLC. By utilizing the Seconds value as a watchdog, he ensures that the PV+ is operational and running its FactoryTalk View ME application. However, a drawback is the frequent appearance of the Tag Write in the FactoryTalk Diagnostics log, overshadowing other important diagnostic information.

Is there a way to disable the Tag Write diagnostic log function or restrict it to specific tags only? Despite attempting to modify the Diagnostic List Setup checkboxes to suppress certain log messages, the issue persists with the logging of events related to the "HMI_Watchdog_Seconds" tag. This continuous logging not only affects diagnostic functions but also impacts the Audit Trail by filling it up unnecessarily.

I encountered a similar issue and reached out to Rockwell for assistance, but the problem remained unresolved. Adjusting the settings did not yield the desired outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>celichi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I raised the issue with Rockwell years ago, but it fell on deaf ears.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Phrog30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for sharing your insights and providing the screenshot. It seems like there have been improvements in the granularity of FTView ME 12 compared to the version I am currently using, v11. I am considering implementing regular List Identity commands via MSG instructions to the PV+ to ensure it is connected and running its communication drivers, even if the runtime visualization application is not operational.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing the same issue, I have found a solution that can help. Editing your project won't solve the issue - you need to access the terminal setup. Navigate to Terminal Settings > Diagnostic Setup > Message Routine > FTView Diagnostic List. Uncheck Operator Info, Engineer Info, and Developer Info. Return to the main menu, Run Application, and your issue should be resolved. This process will also eliminate the display of any other Information category messages in the Diagnostic List. However, for effective debugging and troubleshooting, it's crucial to focus on Warning and Error messages. These will still be visible after making these adjustments. I hope this guide proves to be useful to you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sarcen</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I stop Tag Write log entries in FactoryTalk View ME?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can disable the Tag Write log function by adjusting the Diagnostic List Setup settings. However, specific steps may vary depending on your setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a way to disable Tag Write log entries for a specific tag only?</h4>
<p class='text-muted'><strong>Answer:</strong> - While the Diagnostic List Setup enables you to control logging for various occurrences, disabling Tag Write entries for a specific tag may require a different approach.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why does the FactoryTalk Diagnostics log continue to record Tag Write events despite unchecking log message options?</h4>
<p class='text-muted'><strong>Answer:</strong> - If unchecked options in the Diagnostic List Setup are not preventing Tag Write events from being logged, there may be a specific configuration or workaround needed to address this issue effectively.</p>
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
