
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my current project, I am tasked with creating a visualization screen using WinCC TIA Portal v16, which will be accessible through LAN within the company. Any computer connected to this network should be able to view the screens by simply entering the IP address in the address bar">
    <meta name="keywords" content="wincc visualization, lan access, wincc tia portal v16, visualization screen, tp700 comfort panel, tia portal v16, wincc basic/comfort">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-access-wincc-visualization-from-any-computer-on-lan">
    <title>How to Access WinCC Visualization from Any Computer on LAN | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Access WinCC Visualization from Any Computer on LAN | Oxmaint Community">
    <meta property="og:description" content="In my current project, I am tasked with creating a visualization screen using WinCC TIA Portal v16, which will be accessible through LAN within the company. Any computer connected to this network should be able to view the screens by simply entering the IP address in the address bar">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-access-wincc-visualization-from-any-computer-on-lan">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Access WinCC Visualization from Any Computer on LAN | Oxmaint Community">
    <meta name="twitter:description" content="In my current project, I am tasked with creating a visualization screen using WinCC TIA Portal v16, which will be accessible through LAN within the company. Any computer connected to this network should be able to view the screens by simply entering the IP address in the address bar">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-access-wincc-visualization-from-any-computer-on-lan"
      },
      "headline": "How to Access WinCC Visualization from Any Computer on LAN",
      "description": "In my current project, I am tasked with creating a visualization screen using WinCC TIA Portal v16, which will be accessible through LAN within the company. Any computer connected to this network should be able to view the screens by simply entering the IP address in the address bar",
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
      "datePublished": "2024-08-03",
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
                <h1 class="text-white">How to Access WinCC Visualization from Any Computer on LAN</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1207</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">172</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my current project, I am tasked with creating a visualization screen using WinCC TIA Portal v16, which will be accessible through LAN within the company. Any computer connected to this network should be able to view the screens by simply entering the IP address in the address bar of a web browser such as Chrome or Firefox.

For visualization, I have the following hardware and software: 1. TP700 Comfort Panel 2. TIA Portal v16 with WinCC Basic/Comfort/Advanced/Unified.

After researching, I have identified the following options: 1. Create and download the project in TP700 Comfort Panel, utilizing its smart server. However, Chrome and Firefox may not be compatible for this purpose. 2. Repeat the previous step, but use smartclient.exe, requiring installation of sm@rtclient on each computer in the plant that needs HMI access. This may not be practical. 3. Create a WinCC Unified PC project on a computer instead of using an HMI panel, allowing easy access to the runtime screens through Chrome or Firefox.

Option 3 appears to be the most feasible, although it would mean sacrificing the use of an HMI panel and installing TIA Portal v16 in at least one PC, which would act as a server at the plant.

I am open to feedback on these options and am wondering if there are any alternative solutions considering the available hardware and software. Additionally, I am curious if the server (PC or HMI) and clients need to be in the same subnet/network for access, or if remote access via WAN is possible.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion by user aamirawan91, several options were explored for accessing and managing projects on TP700 comfort panels. One suggestion was to create and download the project, then utilize the smart server for access, although it was noted that Chrome and Firefox may not be compatible for this purpose. Another alternative mentioned was to use smartclient.exe, but this would require installing sm@rtclient on each computer in the plant, which may not be practical. Alternatively, creating a WinCC Unified PC project on a computer was considered, allowing easy access to runtime screens with Chrome or Firefox. 

When it comes to remote access, it was questioned whether the server and clients needed to be on the same subnet or network. Options 1 and 2 were deemed to be functional but cumbersome, as they essentially mirror the screens on the physical device, limiting simultaneous interactions. Smartclient, whether accessed through an activeX control in IE or a dedicated app, offers more flexibility and can be any VNC client that supports the required settings.

Option 3 was seen as the most viable, with Unified V19 being recommended over V16 due to improvements in performance and functionality. It was noted that a runtime license is required for the PC-based HMI, with additional licenses needed for multiple remote clients. Remote access does not necessarily require the same subnet, as long as standard networking components like routers, NAT, and VPN are in place.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, MK42 pointed out that Options 1 & 2 may work but are cumbersome. These options involve mirroring screens on physical devices, essentially resulting in direct screen sharing. This setup limits remote users to seeing the same screen and allows only one person to click at a time. Additionally, conflicts may arise if the Human-Machine Interface (HMI) is not dedicated specifically for remote access. Smartclient can function as either an ActiveX control in Internet Explorer (deprecated) or as a dedicated app. It's worth noting that the Smartclient app from Siemens is not obligatory; any VNC client supporting the required settings can be used. Option 3, although seemingly the most practical, has its challenges. Unified V16, the initial release, is considered quite raw in comparison to Unified V19, which boasts significant improvements. It's highly recommended to upgrade to the latest version for a smoother experience. For PLC/Comfort HMI, V16 is adequate. A runtime license based on the tag count is necessary for PC-based HMI, with one free remote client included. Additional licenses are required for multiple simultaneous users. Regarding the bonus question, these options do not need to be on the same subnet as long as standard networking elements (routers, NAT, VPN, etc.) are in place. MK42 emphasized the complexity of tasks like remote access with Siemens systems, despite having a fondness for the brand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion with aamirawan91, they mentioned their love for Siemens systems but also pointed out the complexity of tasks like remote access. This is especially true for older systems that lack modern remote access capabilities. However, the newer Unified system offers more streamlined remote access as everything is accessible through HTML pages. The only downside is the cost associated with upgrading to a Unified panel or a PC based runtime for remote access.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the options for accessing WinCC visualization from any computer on LAN?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The options include utilizing the smart server on the TP700 Comfort Panel, using smartclient.exe with sm@rtclient installation on each computer, or creating a WinCC Unified PC project on a computer acting as a server.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Which option is considered the most feasible for accessing WinCC visualization through LAN?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Option 3, creating a WinCC Unified PC project on a computer acting as a server, is deemed the most feasible solution, despite sacrificing the use of an HMI panel.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Do the server (PC or HMI) and clients need to be on the same subnet/network for access?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, typically the server and clients need to be in the same subnet/network for access within the LAN environment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is remote access to WinCC visualization via WAN possible?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Remote access via WAN is a possibility, but it may require additional configurations and considerations to ensure security and proper functionality.</p>
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
