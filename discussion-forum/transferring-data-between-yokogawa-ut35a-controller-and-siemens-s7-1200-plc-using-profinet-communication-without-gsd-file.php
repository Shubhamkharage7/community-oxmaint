
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Is it possible to transfer data between a Yokogawa UT35A controller and a Siemens S7 1200 PLC using ProfiNet communication without the need for a GSD file?">
    <meta name="keywords" content="yokogawa ut35a, siemens s7 1200 plc, profinet communication, gsd file, data transfer, controller communication, automation integration, industrial networking, yokogawa-siemens communication, protocol compatibility, data exchange">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/transferring-data-between-yokogawa-ut35a-controller-and-siemens-s7-1200-plc-using-profinet-communication-without-gsd-file">
    <title>Transferring Data Between Yokogawa UT35A Controller and Siemens S7 1200 PLC Using Profinet Communication Without GSD File | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Transferring Data Between Yokogawa UT35A Controller and Siemens S7 1200 PLC Using Profinet Communication Without GSD File | Oxmaint Community">
    <meta property="og:description" content="Is it possible to transfer data between a Yokogawa UT35A controller and a Siemens S7 1200 PLC using ProfiNet communication without the need for a GSD file?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/transferring-data-between-yokogawa-ut35a-controller-and-siemens-s7-1200-plc-using-profinet-communication-without-gsd-file">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Transferring Data Between Yokogawa UT35A Controller and Siemens S7 1200 PLC Using Profinet Communication Without GSD File | Oxmaint Community">
    <meta name="twitter:description" content="Is it possible to transfer data between a Yokogawa UT35A controller and a Siemens S7 1200 PLC using ProfiNet communication without the need for a GSD file?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/transferring-data-between-yokogawa-ut35a-controller-and-siemens-s7-1200-plc-using-profinet-communication-without-gsd-file"
      },
      "headline": "Transferring Data Between Yokogawa UT35A Controller and Siemens S7 1200 PLC Using Profinet Communication Without GSD File",
      "description": "Is it possible to transfer data between a Yokogawa UT35A controller and a Siemens S7 1200 PLC using ProfiNet communication without the need for a GSD file?",
      "author": {
        "@type": "Person",
        "name": "georgevjoel"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-15",
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
                <h1 class="text-white">Transferring Data Between Yokogawa UT35A Controller and Siemens S7 1200 PLC Using Profinet Communication Without GSD File</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>georgevjoel</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">590</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">398</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Is it possible to transfer data between a Yokogawa UT35A controller and a Siemens S7 1200 PLC using ProfiNet communication without the need for a GSD file?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to add devices not listed in the hardware catalogue of the TIA portal, a GSD file is required. It is important to confirm if the device is compatible with Profinet as it is not clearly specified and only mentions Ethernet and Profibus. The device also supports RS-485, Ethernet, PROFIBUS-DP, CC-Link, and DeviceNet. According to the user manual on page 1-8, the Ethernet port can be utilized for Modbus TCP without requiring any additional hardware. However, for Profibus and Modbus RTU, communication modules would be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Can data be transferred between a Yokogawa UT35A controller and a Siemens S7 1200 PLC using Profinet communication without a GSD file?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to transfer data between these devices using Profinet communication without the need for a GSD file.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are the steps or considerations to establish communication between a Yokogawa UT35A controller and a Siemens S7 1200 PLC via Profinet without a GSD file?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The steps may involve configuring the Profinet parameters on both devices, ensuring compatibility with the Profinet protocol, setting up the communication settings, and establishing data exchange mechanisms.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any limitations or challenges when transferring data between the Yokogawa UT35A controller and Siemens S7 1200 PLC without using a GSD file?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While it is feasible to transfer data without a GSD file, some challenges may include potential compatibility issues, configuration complexities, and the need for thorough understanding of Profinet communication protocols.</p>
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
