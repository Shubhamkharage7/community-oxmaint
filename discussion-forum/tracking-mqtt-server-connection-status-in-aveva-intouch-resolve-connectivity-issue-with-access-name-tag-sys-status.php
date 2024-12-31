
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, AVEVA OI system offers drivers like ABCIP and MBTCP with a specific register named $SYS$STATUS, which can be linked to a Discrete tag in Intouch to track the drivers connection status to the PLC. However, attempting to create a similar tag for the MQTT drivers Access Name consistently">
    <meta name="keywords" content="mqtt server connection status, aveva intouch, resolve connectivity issue, access name tag, $sys$status, aveva oi system, abcip driver, mbtcp driver, discrete tag, smc diagnostics, poor quality">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/tracking-mqtt-server-connection-status-in-aveva-intouch-resolve-connectivity-issue-with-access-name-tag-sys-status">
    <title>Tracking MQTT Server Connection Status in Aveva InTouch: Resolve Connectivity Issue with Access Name Tag $SYS$STATUS | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Tracking MQTT Server Connection Status in Aveva InTouch: Resolve Connectivity Issue with Access Name Tag $SYS$STATUS | Oxmaint Community">
    <meta property="og:description" content="Hello, AVEVA OI system offers drivers like ABCIP and MBTCP with a specific register named $SYS$STATUS, which can be linked to a Discrete tag in Intouch to track the drivers connection status to the PLC. However, attempting to create a similar tag for the MQTT drivers Access Name consistently">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/tracking-mqtt-server-connection-status-in-aveva-intouch-resolve-connectivity-issue-with-access-name-tag-sys-status">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tracking MQTT Server Connection Status in Aveva InTouch: Resolve Connectivity Issue with Access Name Tag $SYS$STATUS | Oxmaint Community">
    <meta name="twitter:description" content="Hello, AVEVA OI system offers drivers like ABCIP and MBTCP with a specific register named $SYS$STATUS, which can be linked to a Discrete tag in Intouch to track the drivers connection status to the PLC. However, attempting to create a similar tag for the MQTT drivers Access Name consistently">
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
        "@id": "https://community.oxmaint.com/discussion-forum/tracking-mqtt-server-connection-status-in-aveva-intouch-resolve-connectivity-issue-with-access-name-tag-sys-status"
      },
      "headline": "Tracking MQTT Server Connection Status in Aveva InTouch: Resolve Connectivity Issue with Access Name Tag $SYS$STATUS",
      "description": "Hello, AVEVA OI system offers drivers like ABCIP and MBTCP with a specific register named $SYS$STATUS, which can be linked to a Discrete tag in Intouch to track the drivers connection status to the PLC. However, attempting to create a similar tag for the MQTT drivers Access Name consistently",
      "author": {
        "@type": "Person",
        "name": "ryangriggs"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-20",
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
                <h1 class="text-white">Tracking MQTT Server Connection Status in Aveva InTouch: Resolve Connectivity Issue with Access Name Tag $SYS$STATUS</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ryangriggs</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">482</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">113</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, AVEVA OI system offers drivers like ABCIP and MBTCP with a specific register named $SYS$STATUS, which can be linked to a Discrete tag in Intouch to track the driver's connection status to the PLC. However, attempting to create a similar tag for the MQTT driver's Access Name consistently results in a False value. The SMC diagnostics further indicate that the $SYS$STATUS value has poor Quality, suggesting that it is not accessible from the driver. Despite adding other MQTT tags successfully, this issue persists.

While I have reviewed the driver manuals, there appears to be no mention of monitoring the connection status. The only reference to $SYS is in terms of priority, without specifying the actual $SYS tag names. The driver does monitor the connection, as evidenced by log entries in the SMC when the MQTT server is stopped or restarted.

Is there a method to track the MQTT server connection status within the InTouch application? Any guidance on this matter would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is essential for $sys$status to function consistently at a high quality, irrespective of the broker's status. The status itself should be indicated by the values 0 or 1. Occasionally, the server may mistakenly perceive system items to be inactive. To address this issue, navigate to Global Parameters and follow these steps: disable System Items, save the changes, re-enable System Items, save again, and then reactivate OI MQTT.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ynpmoose</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response @ynpmoosethank. I followed your instructions, but unfortunately, the issue persists. The $sys$status parameter continues to show "bad" quality in the SMC dashboard. Despite all other MQTT tags displaying good quality, the $SYS$STATUS tag consistently reports as bad and stays as False. I tried restarting the OI.MQTT.1 driver, disabling and re-enabling System Items, but to no avail. I am seeking alternative solutions to have it switch to False when the connection to the MQTT server is lost. As a temporary fix, I set up a cron script on my cloud-based Moquitto MQTT server to publish the unix timestamp to the "heartbeat" topic every minute. In addition, I created a runtime script in InTouch to increment a Memory Integer "counter" every second, and an On-Change script to reset the counter whenever the "heartbeat" topic updates. An alarm triggers if the counter exceeds 60 seconds, indicating a lost connection with the MQTT server. Although this workaround is effective, I would prefer to utilize the $SYS$STATUS variable for this purpose. I am also utilizing the IOStatus topic to monitor the MQTT driver status, ensuring it reflects the correct status in case of service interruption or crashes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ryangriggs</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In some of the early versions of Intouch drivers, a common practice was to use the item name "STATUS" instead of "$sys$status." Have you attempted to test this method to see if it is effective?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CMC_1320</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you encounter issues with the $sys$status tag, it's recommended to reach out to AVEVA support for assistance. Your workaround involving timestamps is a valuable solution. The unexpected behavior you are experiencing may require further investigation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ynpmoose</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Can I track the MQTT server connection status in Aveva InTouch using a similar method as with other drivers like ABCIP and MBTCP?</h4>
<p class='text-muted'><strong>Answer:</strong> While drivers like ABCIP and MBTCP allow tracking the connection status using the $SYS$STATUS register, attempting to create a similar tag for the MQTT driver's Access Name may result in a False value and poor Quality indication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why does the MQTT driver in Aveva InTouch show poor Quality for the $SYS$STATUS value, despite successfully adding other MQTT tags?</h4>
<p class='text-muted'><strong>Answer:</strong> The MQTT driver may not provide direct access to the $SYS$STATUS value for monitoring connection status within InTouch, as observed through SMC diagnostics indicating poor Quality for this particular tag.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there specific references or methods in the driver manuals for monitoring MQTT server connection status in Aveva InTouch?</h4>
<p class='text-muted'><strong>Answer:</strong> There may not be explicit references in the driver manuals regarding monitoring the MQTT server connection status using $SYS tags. However, the driver does monitor the connection, which is evident from log entries in the SMC when the MQTT server is stopped or restarted.</p>
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
