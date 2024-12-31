
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently troubleshooting an issue with my ALMD alarm system, which is driven by a Controllogix PLC. The alarm message is set with a priority of 300 in my FTView application and functions correctly. When the ALMD is triggered, the alarm message displays as expected. However, after acknowledging">
    <meta name="keywords" content="controllogix plc, almd alarm system, ftview application, troubleshooting, phantom alarms, hmi, alarm message, priority, alarm server, timing issue, historic alarms, unexpected status message, alarm trigger, in alarm status, alarm setup">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-plc-almd-alarm-system-phantom-alarms-in-ftview-application">
    <title>Troubleshooting Controllogix PLC ALMD Alarm System Phantom Alarms in FTView Application | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Controllogix PLC ALMD Alarm System Phantom Alarms in FTView Application | Oxmaint Community">
    <meta property="og:description" content="I am currently troubleshooting an issue with my ALMD alarm system, which is driven by a Controllogix PLC. The alarm message is set with a priority of 300 in my FTView application and functions correctly. When the ALMD is triggered, the alarm message displays as expected. However, after acknowledging">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-plc-almd-alarm-system-phantom-alarms-in-ftview-application">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Controllogix PLC ALMD Alarm System Phantom Alarms in FTView Application | Oxmaint Community">
    <meta name="twitter:description" content="I am currently troubleshooting an issue with my ALMD alarm system, which is driven by a Controllogix PLC. The alarm message is set with a priority of 300 in my FTView application and functions correctly. When the ALMD is triggered, the alarm message displays as expected. However, after acknowledging">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-plc-almd-alarm-system-phantom-alarms-in-ftview-application"
      },
      "headline": "Troubleshooting Controllogix PLC ALMD Alarm System Phantom Alarms in FTView Application",
      "description": "I am currently troubleshooting an issue with my ALMD alarm system, which is driven by a Controllogix PLC. The alarm message is set with a priority of 300 in my FTView application and functions correctly. When the ALMD is triggered, the alarm message displays as expected. However, after acknowledging",
      "author": {
        "@type": "Person",
        "name": "AlastairMcMurray"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-03",
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
                <h1 class="text-white">Troubleshooting Controllogix PLC ALMD Alarm System Phantom Alarms in FTView Application</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AlastairMcMurray</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">111</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">222</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently troubleshooting an issue with my ALMD alarm system, which is driven by a Controllogix PLC. The alarm message is set with a priority of 300 in my FTView application and functions correctly. When the ALMD is triggered, the alarm message displays as expected. However, after acknowledging the alarm on the HMI, an additional 'in alarm' status message with a priority of 100 appears in the historic alarms page. This unexpected message references the alarm server and is not part of the original ALMD setup. I am puzzled by this occurrence and suspect it may be related to a timing issue. While not consistent, this unexpected status message only appears sporadically and not with every ALMD trigger.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It's been some time, but is there a feature in the historian logger that allows for the activation or deactivation of events? It seems that you are currently logging both system events and alarms in the historian.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AlastairMcMurray voiced his confusion regarding a ControlLogix PLC driving ALMD. Despite setting the message with a priority of 300 for driving and alarm-style messages in the FTView app, everything works smoothly. However, the issue arises in the historical alarms page. Alongside the expected alarm messages, there is an unexpected status priority 100 message indicating alarm acknowledgment and a reference to the alarm server. Alastair wonders where this extra message is coming from, speculating it may be a timing issue. This occurrence is intermittent and does not happen with every ALMD call. In hindsight, Alastair acknowledges that the correct term to use is Severity, not Priority.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlastairMcMurray</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is an additional 'in alarm' status message with a priority of 100 appearing in the historic alarms page after acknowledging the ALMD alarm on the HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The unexpected 'in alarm' status message could be related to a timing issue within the Controllogix PLC or FTView application. It may be triggered sporadically and not consistently with every ALMD alarm.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the issue of phantom alarms in my Controllogix PLC ALMD alarm system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot the phantom alarms, you can check the alarm configuration settings in both the Controllogix PLC and FTView application to ensure they are correctly configured. Additionally, reviewing the alarm server settings and checking for any timing discrepancies may help identify the source of the unexpected status messages.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a specific reason why the unexpected 'in alarm' status message references the alarm server and is not part of the original ALMD setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The unexpected status message referencing the alarm server could indicate a potential communication or configuration issue between the Controllogix PLC, FTView application, and the alarm server. Reviewing the integration and setup of these components may help resolve the discrepancy.</p>
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
