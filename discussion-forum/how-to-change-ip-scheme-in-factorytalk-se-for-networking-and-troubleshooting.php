
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Looking for guidance on changing the IP scheme of a FactoryTalk SE program for networking purposes. The original setup had PLCs on a shared network (192.168.254.xxx), but now I need to segment the network due to connectivity changes. For instance, equipment at one location should be moved to 192.168.225.xxx.">
    <meta name="keywords" content="factorytalk se ip scheme change, factorytalk se networking troubleshooting, factorytalk se ip address segmentation, factorytalk se network mask adjustment, factorytalk studio plc ip address update, factorytalk se">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-change-ip-scheme-in-factorytalk-se-for-networking-and-troubleshooting">
    <title>How to Change IP Scheme in FactoryTalk SE for Networking and Troubleshooting | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Change IP Scheme in FactoryTalk SE for Networking and Troubleshooting | Oxmaint Community">
    <meta property="og:description" content="Looking for guidance on changing the IP scheme of a FactoryTalk SE program for networking purposes. The original setup had PLCs on a shared network (192.168.254.xxx), but now I need to segment the network due to connectivity changes. For instance, equipment at one location should be moved to 192.168.225.xxx.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-change-ip-scheme-in-factorytalk-se-for-networking-and-troubleshooting">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Change IP Scheme in FactoryTalk SE for Networking and Troubleshooting | Oxmaint Community">
    <meta name="twitter:description" content="Looking for guidance on changing the IP scheme of a FactoryTalk SE program for networking purposes. The original setup had PLCs on a shared network (192.168.254.xxx), but now I need to segment the network due to connectivity changes. For instance, equipment at one location should be moved to 192.168.225.xxx.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-change-ip-scheme-in-factorytalk-se-for-networking-and-troubleshooting"
      },
      "headline": "How to Change IP Scheme in FactoryTalk SE for Networking and Troubleshooting",
      "description": "Looking for guidance on changing the IP scheme of a FactoryTalk SE program for networking purposes. The original setup had PLCs on a shared network (192.168.254.xxx), but now I need to segment the network due to connectivity changes. For instance, equipment at one location should be moved to 192.168.225.xxx.",
      "author": {
        "@type": "Person",
        "name": "mburtis"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-12",
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
                <h1 class="text-white">How to Change IP Scheme in FactoryTalk SE for Networking and Troubleshooting</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mburtis</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">222</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">65</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Looking for guidance on changing the IP scheme of a FactoryTalk SE program for networking purposes. The original setup had PLCs on a shared network (192.168.254.xxx), but now I need to segment the network due to connectivity changes. For instance, equipment at one location should be moved to 192.168.225.xxx. Despite some unsuccessful attempts today, I temporarily adjusted the network masks to 255.255.224.0 to maintain communication while making the switch. After changing the PLC's IP address and updating the network in rslinx enterprise within FactoryTalk Studio, the system still failed to reconnect. Am I on the right path? Planning to give it another go tomorrow.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Today, significant progress was achieved by reconfiguring the PLC IP addresses and reconnecting the RSLinx. After rebooting, everything started functioning correctly. However, there is a persistent issue with the FactoryTalk directory. The system consists of a client computer running FTview and a "server" computer with a virtual machine hosting the FactoryTalk project. Changing the IP on the virtual machine disrupts the connection to the FT directory on the client. Despite attempts to specify the location, the issue persists. Any advice on resolving this issue would be appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mburtis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is essential to utilize the Ethernet (ETH) driver for inter-subnet routing. ETHIP applies to scenarios where all devices are on the same broadcast domain.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I change the IP scheme in FactoryTalk SE for networking purposes?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To change the IP scheme in FactoryTalk SE, you need to adjust the IP addresses of the PLCs and update the network settings in RSLinx Enterprise within FactoryTalk Studio.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What should I do if my FactoryTalk SE system fails to reconnect after changing the PLC's IP address and network settings?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If your FactoryTalk SE system fails to reconnect after making IP and network changes, double-check the IP addresses, subnet masks, and ensure that all settings are correctly configured.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is adjusting the network masks to maintain communication while changing the IP scheme a recommended practice in FactoryTalk SE?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Temporarily adjusting network masks to maintain communication during IP scheme changes can be a helpful troubleshooting step, but it's important to ensure all devices are properly configured for the final IP scheme.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I troubleshoot connectivity issues in FactoryTalk SE after changing the IP scheme?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you encounter connectivity issues in FactoryTalk SE after changing the IP scheme, verify the IP configurations of all devices, check network connectivity, and ensure that all changes are accurately reflected in both the PLCs and FactoryTalk Studio settings.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
