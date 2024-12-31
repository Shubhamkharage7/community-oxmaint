
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have successfully set up a project using TIA Portal WinCC Runtime Advanced on a PC station and activated its SmartServer for smart clients to connect. TIA is installed on the same computer, where the Runtime Advanced server also operates. However, I am confused about the IP address configuration">
    <meta name="keywords" content="optimizing ip address setup, wincc advanced pc station, tia portal, runtime advanced server, smartserver, smart clients, ip address configuration, network adapter, connection issue, configured ip address, hmi panel, connection process, pc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-ip-address-setup-for-wincc-advanced-pc-station-in-tia-portal">
    <title>Optimizing IP Address Setup for WinCC Advanced PC Station in TIA Portal | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing IP Address Setup for WinCC Advanced PC Station in TIA Portal | Oxmaint Community">
    <meta property="og:description" content="I have successfully set up a project using TIA Portal WinCC Runtime Advanced on a PC station and activated its SmartServer for smart clients to connect. TIA is installed on the same computer, where the Runtime Advanced server also operates. However, I am confused about the IP address configuration">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-ip-address-setup-for-wincc-advanced-pc-station-in-tia-portal">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing IP Address Setup for WinCC Advanced PC Station in TIA Portal | Oxmaint Community">
    <meta name="twitter:description" content="I have successfully set up a project using TIA Portal WinCC Runtime Advanced on a PC station and activated its SmartServer for smart clients to connect. TIA is installed on the same computer, where the Runtime Advanced server also operates. However, I am confused about the IP address configuration">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-ip-address-setup-for-wincc-advanced-pc-station-in-tia-portal"
      },
      "headline": "Optimizing IP Address Setup for WinCC Advanced PC Station in TIA Portal",
      "description": "I have successfully set up a project using TIA Portal WinCC Runtime Advanced on a PC station and activated its SmartServer for smart clients to connect. TIA is installed on the same computer, where the Runtime Advanced server also operates. However, I am confused about the IP address configuration",
      "author": {
        "@type": "Person",
        "name": "aamirawan91"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-23",
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
                <h1 class="text-white">Optimizing IP Address Setup for WinCC Advanced PC Station in TIA Portal</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">598</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">433</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have successfully set up a project using TIA Portal WinCC Runtime Advanced on a PC station and activated its SmartServer for smart clients to connect. TIA is installed on the same computer, where the Runtime Advanced server also operates. However, I am confused about the IP address configuration for the PC station in the project. Should it match the IP address of my computer's network adapter?

Interestingly, upon testing different IP addresses in TIA Portal for the WinCC Advanced PC station, I found that smart clients could still connect using my computer's IP address. However, when they tried to connect using the PC station's configured IP address in TIA, they were unable to establish a connection. This observation leads me to question the relevance of the IP address set for the PC station in TIA. Does it truly play a significant role, or am I missing something?

To clarify, the IP address of the WinCC Advanced PC station set in TIA is 192.168.10.10, while my computer's network adapter uses the IP address 192.168.10.5. Interestingly, smart clients connect using my computer's IP address (192.168.10.5) instead of the one configured in TIA.

This situation prompts me to ponder the purpose of configuring the IP address in TIA for the PC station. While I understand its significance for an HMI panel, I am uncertain of its relevance when dealing with a PC station running on the same computer. How does this configuration impact the connection process for smart clients?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is not necessary for the IP address on the PC running WinCC Runtime to be identical to the one configured in the TIA project. However, the runtime PC must have an IP address that allows it to communicate with the PLC. If the IP address does not match the project settings, you have the option to manually specify the IP address when transferring the runtime to the PC. This ensures seamless communication between the devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: Should the IP address of the WinCC Advanced PC station in TIA Portal match the IP address of the computer's network adapter?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While it is a common practice to align the IP addresses, based on the scenario described, it may not be necessary for the PC station to match the network adapter's IP address for smart clients to connect successfully.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Why can smart clients connect using the computer's IP address but not the PC station's configured IP address in TIA Portal?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The ability for smart clients to connect using the computer's IP address instead of the PC station's configured IP address raises questions about the significance of the IP address set for the PC station in TIA Portal and its impact on the connection process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: What is the purpose of configuring the IP address for the WinCC Advanced PC station in TIA Portal when it's running on the same computer?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Understanding the relevance of configuring the IP address for the PC station in TIA Portal, especially when it operates on the same computer as the TIA installation, is crucial to optimizing the connection process for smart clients and ensuring seamless communication within the system.</p>
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
