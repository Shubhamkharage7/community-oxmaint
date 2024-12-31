
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on establishing communication between ControlLogix PLCs and Delta V DCS through EtherNet/IP. A VIM2 card has been set up to support EtherNet/IP devices. According to Mynahs knowledge base, the VIM2 is capable of Class 1 (I/O) connections with ControlLogix PLCs, using the 1756-ENBT">
    <meta name="keywords" content="allen bradley controllogix, delta v dcs, ethernet/ip communication, vim2 card, mynah knowledge base, 1756-enbt, simplex vim architecture, plc communication errors, troubleshooting, simultaneous connection, plant maintenance">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-between-allen-bradley-controllogix-plcs-and-delta-v-dcs-via-ethernet-ip">
    <title>Troubleshooting Communication between Allen Bradley ControlLogix PLCs and Delta V DCS via EtherNet/IP | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication between Allen Bradley ControlLogix PLCs and Delta V DCS via EtherNet/IP | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on establishing communication between ControlLogix PLCs and Delta V DCS through EtherNet/IP. A VIM2 card has been set up to support EtherNet/IP devices. According to Mynahs knowledge base, the VIM2 is capable of Class 1 (I/O) connections with ControlLogix PLCs, using the 1756-ENBT">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-between-allen-bradley-controllogix-plcs-and-delta-v-dcs-via-ethernet-ip">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication between Allen Bradley ControlLogix PLCs and Delta V DCS via EtherNet/IP | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on establishing communication between ControlLogix PLCs and Delta V DCS through EtherNet/IP. A VIM2 card has been set up to support EtherNet/IP devices. According to Mynahs knowledge base, the VIM2 is capable of Class 1 (I/O) connections with ControlLogix PLCs, using the 1756-ENBT">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-between-allen-bradley-controllogix-plcs-and-delta-v-dcs-via-ethernet-ip"
      },
      "headline": "Troubleshooting Communication between Allen Bradley ControlLogix PLCs and Delta V DCS via EtherNet/IP",
      "description": "Hello everyone, I am currently working on establishing communication between ControlLogix PLCs and Delta V DCS through EtherNet/IP. A VIM2 card has been set up to support EtherNet/IP devices. According to Mynahs knowledge base, the VIM2 is capable of Class 1 (I/O) connections with ControlLogix PLCs, using the 1756-ENBT",
      "author": {
        "@type": "Person",
        "name": "Aqib"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-05",
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
                <h1 class="text-white">Troubleshooting Communication between Allen Bradley ControlLogix PLCs and Delta V DCS via EtherNet/IP</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Aqib</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">699</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">375</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on establishing communication between ControlLogix PLCs and Delta V DCS through EtherNet/IP. A VIM2 card has been set up to support EtherNet/IP devices. According to Mynah's knowledge base, the VIM2 is capable of Class 1 (I/O) connections with ControlLogix PLCs, using the 1756-ENBT format. Each ENBT corresponds to a VIM dataset, specifically designed for simplex VIM architecture.

I have successfully configured 3 PLCs with the DCS, although they were never simultaneously connected due to plant maintenance. Upon restart and simultaneous connection of all 3 PLCs, communication errors with the DCS occurred. Troubleshooting revealed seamless communication with the DCS when only one ControlLogix PLC is connected, but issues arise when multiple PLCs are connected simultaneously. Troubleshooting efforts are ongoing, and communication is restored only when all but one PLC is connected, and the cable is reinserted.

I have verified the network for duplicate IP addresses but found none. Is there something I may be overlooking? My experience with the Delta V DCS is limited. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you currently employed by Emerson or are you the end user of their systems? Emerson's support contracts can be costly and comprehensive; do you have one in place? In my past experience, I found that a Mynah VIM set to default update rates could overload the communication capacity of a 1756-ENBT with Class 3 tag reads and writes. The "inter-scan delay" feature of the Mynah did not function properly, causing constant requests and limiting control. However, it has been 15 years since I last worked with them, so improvements may have been made by now. How are the Class 1 connections configured exactly? Do the Mynah VIM2's appear as Generic Modules in the ControlLogix I/O tree, or as I/O modules with a 1756-ENBT acting as an adapter? Are you using traditional 1756-ENBTs or newer models like the 1756-EN2T or -EN3T? 

If you have three PLCs attempting to establish connections with a DCS as an "adapter"/"target", does the VIM2 differentiate them based on the source IP address or through other means like the CIP Slot Number? Monitor the I/O connection status in Studio 5000 and check for any error codes using GSV instructions. If possible, set up a mirror port on a managed switch and use Wireshark to capture data, as this could provide valuable insights.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I experiencing communication errors between multiple ControlLogix PLCs and Delta V DCS via EtherNet/IP when connected simultaneously?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to network configurations, data traffic conflicts, or potential limitations in the setup that may affect communication stability. Troubleshooting efforts should focus on identifying and resolving these potential causes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I ensure seamless communication between ControlLogix PLCs and Delta V DCS via EtherNet/IP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To ensure smooth communication, it is important to verify network settings, check for any data transmission conflicts, and confirm that the configurations of both the PLCs and the DCS are compatible and correctly set up for EtherNet/IP communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps should be taken to troubleshoot EtherNet/IP communication issues between multiple ControlLogix PLCs and Delta V DCS?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting steps may involve checking for IP address conflicts, reviewing network configurations, testing communication stability with individual PLC connections, and investigating any potential hardware or software limitations that could impact simultaneous connections between multiple devices.</p>
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
