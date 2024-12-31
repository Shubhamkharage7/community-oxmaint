
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Before diving in, I must mention that I have some experience with the Horner XL4 system. I have successfully implemented the BACnet IP and MS/TP protocols from Horner by configuring an XL4 for BACnet IP and conducting a successful test on our LAN. By simply setting up an IP/Subnet/Gateway">
    <meta name="keywords" content="bacnet ms/tp, horner xl4, testing, troubleshooting, guide, configuration, protocol, lan, ip/subnet/gateway, yabe program, functionality, challenge, mj2 serial port, test, operation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-bacnet-ms-tp-on-horner-xl4-testing-and-troubleshooting-guide">
    <title>Setting up BACnet MS/TP on Horner XL4: Testing and Troubleshooting Guide | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting up BACnet MS/TP on Horner XL4: Testing and Troubleshooting Guide | Oxmaint Community">
    <meta property="og:description" content="Before diving in, I must mention that I have some experience with the Horner XL4 system. I have successfully implemented the BACnet IP and MS/TP protocols from Horner by configuring an XL4 for BACnet IP and conducting a successful test on our LAN. By simply setting up an IP/Subnet/Gateway">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-bacnet-ms-tp-on-horner-xl4-testing-and-troubleshooting-guide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting up BACnet MS/TP on Horner XL4: Testing and Troubleshooting Guide | Oxmaint Community">
    <meta name="twitter:description" content="Before diving in, I must mention that I have some experience with the Horner XL4 system. I have successfully implemented the BACnet IP and MS/TP protocols from Horner by configuring an XL4 for BACnet IP and conducting a successful test on our LAN. By simply setting up an IP/Subnet/Gateway">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-bacnet-ms-tp-on-horner-xl4-testing-and-troubleshooting-guide"
      },
      "headline": "Setting up BACnet MS/TP on Horner XL4: Testing and Troubleshooting Guide",
      "description": "Before diving in, I must mention that I have some experience with the Horner XL4 system. I have successfully implemented the BACnet IP and MS/TP protocols from Horner by configuring an XL4 for BACnet IP and conducting a successful test on our LAN. By simply setting up an IP/Subnet/Gateway",
      "author": {
        "@type": "Person",
        "name": "jrobinson"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-23",
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
                <h1 class="text-white">Setting up BACnet MS/TP on Horner XL4: Testing and Troubleshooting Guide</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jrobinson</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1643</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">45</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Before diving in, I must mention that I have some experience with the Horner XL4 system. I have successfully implemented the BACnet IP and MS/TP protocols from Horner by configuring an XL4 for BACnet IP and conducting a successful test on our LAN. By simply setting up an IP/Subnet/Gateway address and using the "Yabe" program, I was able to verify the functionality. However, I am facing a challenge with the MS/TP protocol. Although I have configured it for the MJ2 serial port on the XL4, I am unsure how to perform a test to confirm its operation. My understanding of BACnet is somewhat limited, and I have been making efforts to gain more knowledge on the subject. Is there anyone who could provide guidance on setting up a test for an XL4 with a BACnet MS/TP connection to a PC without the need for expensive equipment? I do have a basic COM port available on my PC. Any advice would be appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Learn about BACnet with this informative overview video by RealTime Automation. Explore the differences between BACnet MS-TP Master and Slave on this HVAC forum thread. Enhance your understanding with software tools like those available at CSIMN and Yet Another BACnet Explorer on SourceForge. These resources will provide valuable insights and support for your BACnet projects. Happy learning!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gclshortt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jrobinson mentioned that they are familiar with the Horner XL4 and successfully configured it for BACnet IP connectivity by downloading the protocols and assigning it an IP address. However, they are unsure about testing the MS/TP protocol on the XL4. Their overall knowledge of BACnet is limited and they are seeking advice on how to test the XL4 with a BACnet MS/TP connection to a PC without investing in unnecessary equipment. They have a basic COM port on their PC and would appreciate any tips or suggestions. Can anyone help? Additionally, they would like to know how jrobinson set up and tested the XL4 with YABE, as they are encountering difficulties with it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>VmsSouza</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I test the BACnet MS/TP protocol on a Horner XL4 system?</h4>
<p class='text-muted'><strong>Answer:</strong> - To test the BACnet MS/TP protocol on a Horner XL4 system, you can use a basic COM port available on your PC. Configure the XL4 for MS/TP on the MJ2 serial port, and then establish a connection between the XL4 and the PC using the COM port.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can I test the BACnet MS/TP connection without expensive equipment?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can test the BACnet MS/TP connection without the need for expensive equipment by utilizing a basic COM port available on your PC. This setup allows you to perform testing and troubleshooting without significant additional costs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps should I follow to confirm the operation of the BACnet MS/TP protocol on the Horner XL4?</h4>
<p class='text-muted'><strong>Answer:</strong> - To confirm the operation of the BACnet MS/TP protocol on the Horner XL4, ensure that the XL4 is configured for MS/TP on the MJ2 serial port. Establish a connection between the XL4 and your PC using the COM port, and then use appropriate software tools to monitor and verify the communication between the devices.</p>
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
