
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am looking to upgrade three standalone PLCs to allow for remote access by changing their IP addresses. These PLCs communicate through an Ethernet cable to a main PLC, which can also be accessed remotely. The main PLC has two Ethernet modules - one for remote access and the">
    <meta name="keywords" content="standalone plcs, remote access, change ip addresses, main plc connection, ethernet communication, ethernet modules, remote access setup, ip address modification, remote access guidance, upgrading plcs, network configuration, ip address change impact, plc remote troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/upgrading-standalone-plcs-for-remote-access-how-to-change-ip-addresses-without-disrupting-connection-to-main-plc">
    <title>Upgrading Standalone PLCs for Remote Access: How to Change IP Addresses Without Disrupting Connection to Main PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Upgrading Standalone PLCs for Remote Access: How to Change IP Addresses Without Disrupting Connection to Main PLC | Oxmaint Community">
    <meta property="og:description" content="I am looking to upgrade three standalone PLCs to allow for remote access by changing their IP addresses. These PLCs communicate through an Ethernet cable to a main PLC, which can also be accessed remotely. The main PLC has two Ethernet modules - one for remote access and the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/upgrading-standalone-plcs-for-remote-access-how-to-change-ip-addresses-without-disrupting-connection-to-main-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Upgrading Standalone PLCs for Remote Access: How to Change IP Addresses Without Disrupting Connection to Main PLC | Oxmaint Community">
    <meta name="twitter:description" content="I am looking to upgrade three standalone PLCs to allow for remote access by changing their IP addresses. These PLCs communicate through an Ethernet cable to a main PLC, which can also be accessed remotely. The main PLC has two Ethernet modules - one for remote access and the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/upgrading-standalone-plcs-for-remote-access-how-to-change-ip-addresses-without-disrupting-connection-to-main-plc"
      },
      "headline": "Upgrading Standalone PLCs for Remote Access: How to Change IP Addresses Without Disrupting Connection to Main PLC",
      "description": "I am looking to upgrade three standalone PLCs to allow for remote access by changing their IP addresses. These PLCs communicate through an Ethernet cable to a main PLC, which can also be accessed remotely. The main PLC has two Ethernet modules - one for remote access and the",
      "author": {
        "@type": "Person",
        "name": "alennamo"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-06",
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
                <h1 class="text-white">Upgrading Standalone PLCs for Remote Access: How to Change IP Addresses Without Disrupting Connection to Main PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>alennamo</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">138</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">288</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am looking to upgrade three standalone PLCs to allow for remote access by changing their IP addresses. These PLCs communicate through an Ethernet cable to a main PLC, which can also be accessed remotely. The main PLC has two Ethernet modules - one for remote access and the other connected to the three standalone PLCs with different IP addresses that cannot be accessed remotely. Will changing the IP addresses of the standalone PLCs affect the connection with the main PLC? Can you provide guidance on how to successfully complete this process? Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Determining the make and model of your device is crucial to understanding the importance of the connection and how it is utilized. Changing the IP address may disrupt the connection, especially if devices are communicating via TCP/IP. It's important to consider other networked devices like HMIs, VFDs, or TCP/IP remote IO in order to maintain connectivity. For controllogix platforms, setting up RSLinx allows for tunneling through the main controller to access local network controllers without altering the IP address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KenWiegers</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Will changing the IP addresses of the standalone PLCs affect the connection with the main PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Changing the IP addresses of the standalone PLCs should not affect the connection with the main PLC as long as the new IP addresses are correctly configured in the main PLC's Ethernet modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I successfully change the IP addresses of the standalone PLCs for remote access without disrupting the connection to the main PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To successfully change the IP addresses of the standalone PLCs, ensure that you update the IP configurations in the main PLC's Ethernet modules to reflect the new IP addresses of the standalone PLCs. This will help maintain connectivity between the main PLC and the standalone PLCs during the upgrade process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps should I follow to upgrade standalone PLCs for remote access while changing their IP addresses?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The steps to upgrade standalone PLCs for remote access while changing their IP addresses involve configuring the new IP addresses on the standalone PLCs, updating the IP settings in the main PLC's Ethernet modules, and testing the connectivity to ensure a smooth transition without disrupting the connection to the main PLC.</p>
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
