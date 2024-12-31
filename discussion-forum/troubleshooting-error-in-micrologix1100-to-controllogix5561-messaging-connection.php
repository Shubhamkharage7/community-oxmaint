
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A setup is being attempted on a MicroLogix1100 to read a DINT value in a ControlLogix5561. The direction has been successfully set up for a read message in the ControlLogix program, executing every 5 seconds. However, the result of the message is an error. The error description indicates an">
    <meta name="keywords" content="micrologix1100, controllogix5561, messaging connection, troubleshooting error, dint value, comms module, cip device, error code, plc 3, 5, slc mapping, file number 10">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-error-in-micrologix1100-to-controllogix5561-messaging-connection">
    <title>Troubleshooting Error in MicroLogix1100 to ControlLogix5561 Messaging Connection | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Error in MicroLogix1100 to ControlLogix5561 Messaging Connection | Oxmaint Community">
    <meta property="og:description" content="A setup is being attempted on a MicroLogix1100 to read a DINT value in a ControlLogix5561. The direction has been successfully set up for a read message in the ControlLogix program, executing every 5 seconds. However, the result of the message is an error. The error description indicates an">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-error-in-micrologix1100-to-controllogix5561-messaging-connection">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Error in MicroLogix1100 to ControlLogix5561 Messaging Connection | Oxmaint Community">
    <meta name="twitter:description" content="A setup is being attempted on a MicroLogix1100 to read a DINT value in a ControlLogix5561. The direction has been successfully set up for a read message in the ControlLogix program, executing every 5 seconds. However, the result of the message is an error. The error description indicates an">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-error-in-micrologix1100-to-controllogix5561-messaging-connection"
      },
      "headline": "Troubleshooting Error in MicroLogix1100 to ControlLogix5561 Messaging Connection",
      "description": "A setup is being attempted on a MicroLogix1100 to read a DINT value in a ControlLogix5561. The direction has been successfully set up for a read message in the ControlLogix program, executing every 5 seconds. However, the result of the message is an error. The error description indicates an",
      "author": {
        "@type": "Person",
        "name": "AP25"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-25",
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
                <h1 class="text-white">Troubleshooting Error in MicroLogix1100 to ControlLogix5561 Messaging Connection</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AP25</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">375</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">324</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>A setup is being attempted on a MicroLogix1100 to read a DINT value in a ControlLogix5561. The direction has been successfully set up for a read message in the ControlLogix program, executing every 5 seconds. However, the result of the message is an error. The error description indicates an issue with the Comms module or CIP device, showing an error code in the upper byte of MGx:y.22. In the ControlLogix program, the PLC 3,5 / SLC Mapping has been configured with File Number "10" and Name "MyDINT", a DINT[2] data type. The message instruction in the MicroLogix has been set up with specific parameters. When checking the web interface for the ControlLogix processor and enabling the message instruction from the MicroLogix, the Message Connection shows up with the Originator as the MicroLogix processor and Target as the ControlLogix processor, with an "Active" connection State. Despite this, updating the value of "MyDINT[0]" does not reflect in the L10 Data File of the MicroLogix controller. Any assistance on this issue would be highly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To simplify the connection, consider using 16-bit Integer (N) datatypes. Set the ControlLogix tag as an INT[4] array and define the "This Controller" data table as Integer, Address N10:0, with a length of 4. The Target Device data table should be set at address N10:0.

Although the MicroLogix 1100 has limited 32-bit integer support, you may be able to utilize a local data table defined as "L" data type. However, the PLC-5 Read/Write communications protocol may not support this data table type code. Experiment with SLC-500 Typed Read/Write, where the word "Typed" designates the B, N, F, etc data table types for binary, integer, and floating-point.

Ensure the multi-hop section in the MicroLogix includes the destination IP and the Slot number of the ControlLogix. By default, it may enter 0 for the slot number, which is standard for 1756 ControlLogix and fixed for CompactLogix systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The problem I encountered was with the multi-hop setup as I forgot to include the path to slot 0. I was looking at an example that utilized the built-in Ethernet port of an L81, while I have a 1756-ENBT module in slot 1. Thank you for your assistance with this issue!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AP25</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the error in the messaging connection between MicroLogix1100 and ControlLogix5561?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error in the messaging connection could be due to issues with the Comms module or CIP device, as indicated by the error code in the upper byte of MGx:y.22.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the error in the message connection between MicroLogix1100 and ControlLogix5561?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot the error, ensure that the setup for the read message in the ControlLogix program and the parameters in the MicroLogix message instruction are correctly configured. Review the PLC 3,5 / SLC Mapping configuration and check for any discrepancies that may be causing the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why is the value of "MyDINT[0]" not reflecting in the L10 Data File of the MicroLogix controller despite the message connection being active?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to incorrect mapping of the DINT value or data type mismatch between the ControlLogix and MicroLogix controllers. Verify that the File Number and Name configurations match between the controllers and ensure the data types are consistent.</p>
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
