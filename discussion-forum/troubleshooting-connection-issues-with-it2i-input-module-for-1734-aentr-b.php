
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are experiencing issues with the connection between the IT2I thermocouple card and the RTD temperature sensor card when connected through a Point IO AENTR. The Point IO itself connects seamlessly, but the cards keep attempting to connect and then faulting out. We have tested each card individually, adjusting">
    <meta name="keywords" content="it2i input module, 1734-aentr/b, troubleshooting connection issues, point io aentr, rtd temperature sensor card, thermocouple card, chassis size adjustment, web server visibility, studio serial number detection">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-connection-issues-with-it2i-input-module-for-1734-aentr-b">
    <title>Troubleshooting Connection Issues with IT2I Input Module for 1734-AENTR/B | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Connection Issues with IT2I Input Module for 1734-AENTR/B | Oxmaint Community">
    <meta property="og:description" content="We are experiencing issues with the connection between the IT2I thermocouple card and the RTD temperature sensor card when connected through a Point IO AENTR. The Point IO itself connects seamlessly, but the cards keep attempting to connect and then faulting out. We have tested each card individually, adjusting">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-connection-issues-with-it2i-input-module-for-1734-aentr-b">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Connection Issues with IT2I Input Module for 1734-AENTR/B | Oxmaint Community">
    <meta name="twitter:description" content="We are experiencing issues with the connection between the IT2I thermocouple card and the RTD temperature sensor card when connected through a Point IO AENTR. The Point IO itself connects seamlessly, but the cards keep attempting to connect and then faulting out. We have tested each card individually, adjusting">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-connection-issues-with-it2i-input-module-for-1734-aentr-b"
      },
      "headline": "Troubleshooting Connection Issues with IT2I Input Module for 1734-AENTR/B",
      "description": "We are experiencing issues with the connection between the IT2I thermocouple card and the RTD temperature sensor card when connected through a Point IO AENTR. The Point IO itself connects seamlessly, but the cards keep attempting to connect and then faulting out. We have tested each card individually, adjusting",
      "author": {
        "@type": "Person",
        "name": "Glazedgater"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Troubleshooting Connection Issues with IT2I Input Module for 1734-AENTR/B</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Glazedgater</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">665</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">160</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>We are experiencing issues with the connection between the IT2I thermocouple card and the RTD temperature sensor card when connected through a Point IO AENTR. The Point IO itself connects seamlessly, but the cards keep attempting to connect and then faulting out. We have tested each card individually, adjusting the chassis size each time. 
On the web server, the IO module is visible and in Studio, the serial number is detected. 
We have tried various firmware revisions, different Point IO bases, IT2I cards, thermocouples, and installed new add-on profiles. 
It is important to ensure the correct chassis size is configured in the web server and PLC as the module is visible in RS linx. 
Our hardware/software setup includes Studio 5000 V32, AENTR/B Point IO V5.019, IT2I card with IT2I base V 3.014, standard dumb switch, L72 PLC, and ENBT Ethernet card. 
Could this issue be resolved by implementing a DLR, given that it is a 2-port Point IO system?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the AENTR included in the dimensions of your chassis size?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquired Cheeseface, "Does the chassis size account for the AENTR module?" Upon expanding, it was confirmed that a 2-slot chassis accommodates the AENTR module along with a plus card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Glazedgater</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Glazedgater mentioned that a aentr plus card was used to create a 2 slot chassis. Currently, only one card is connected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Glazedgater</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you ensured that the ethernet port settings are configured properly? Check if one side is set to a specific speed like 10/100, while the other is set to auto-negotiate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Error 16#0203 indicates a communication issue between the controller and IO module. This error occurs when the controller is unable to receive data from the module or may have lost the data transmission. To resolve this issue, it is recommended to verify the ENBT version (preferably version 6.006) and review the media counters on both devices for any discrepancies. This step can help in identifying and troubleshooting the communication problem between the controller and IO module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to your initial inquiry, it is not necessary for an AENTR to have DLR for functioning. While connected to the studio online, ensure you are adjusting the chassis size in the last tab on the right in the Aentr module properties. This should be done on the far-right tab, not on the general tab when in offline mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface recommended checking the ethernet port settings to ensure that both sides are set to auto-negotiate rather than forcing one to 10/100. Thank you for clarifying that both ports are set to auto negotiate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Glazedgater</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When encountering Error 16#0203, it indicates a communication issue between the controller and IO module - they may have agreed to communicate, but data is either not being received or has been lost. To troubleshoot, first check the ENBT revision (recommended version 6.006) and then review the media counters on both devices. The current version in use is V3.003, so upgrading to see if the issue persists is worth considering.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Glazedgater</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee clarified that an AENTR does not require DLR to function. Make sure to navigate to the last tab on the right of the Aentr module properties while online with Studio to set the chassis size correctly. It is important to use the far right tab specifically when online, not the general tab when offline. Yip confirmed that the settings were adjusted on the web server as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Glazedgater</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Glazedgater mentioned gratitude for the information. The version currently in use is V3.003, but there is potential for an upgrade. It is important to note that 3.003 may not support the unicast option chosen. It is recommended to try using 6.006 instead. If necessary, temporarily unchecking the Unicast box for testing purposes is an option, but ultimately upgrading the ENBT firmware is the solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have noticed that many peculiar issues can be resolved by updating the firmware of the ENBT. If possible, try swapping in a spare unit to see if that resolves the issue. This troubleshooting step often yields positive results and can help eliminate any odd behaviors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am thrilled to announce that after updating the firmware, everything is now working perfectly. I am grateful for this seamless resolution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Glazedgater</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the connection issues between the IT2I thermocouple card and the RTD temperature sensor card in the Point IO AENTR setup?</h4>
<p class='text-muted'><strong>Answer:</strong> The issues could be related to firmware revisions, chassis size configuration, hardware compatibility, or add-on profiles. It is important to ensure proper settings and compatibility between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot connection faults between the IT2I cards and the Point IO AENTR system?</h4>
<p class='text-muted'><strong>Answer:</strong> You can troubleshoot by testing each card individually, adjusting the chassis size, checking firmware revisions, trying different Point IO bases, and ensuring correct configuration in the web server and PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is implementing a DLR (Device Level Ring) a possible solution for resolving the connection issues in a 2-port Point IO system?</h4>
<p class='text-muted'><strong>Answer:</strong> Implementing a DLR might help improve the network reliability and fault tolerance in the Point IO system, but it's essential to address the root cause of the connection faults first before considering additional network configurations.</p>
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
