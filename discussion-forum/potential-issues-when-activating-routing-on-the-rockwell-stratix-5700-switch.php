
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="If we activate routing on the Rockwell Stratix 5700 switch as shown in the following link, will it present any potential issues? This includes considerations for axis motion control, point-to-point communication (PTP), and scheduling output modules. Learn more about Stratix 5700 VLAN routing here.">
    <meta name="keywords" content="rockwell stratix 5700 switch, routing activation issues, vlan routing, axis motion control, point-to-point communication, ptp considerations, output module scheduling, stratix 5700 problems, rockwell switch routing challenges, stratix 570">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/potential-issues-when-activating-routing-on-the-rockwell-stratix-5700-switch">
    <title>Potential Issues when Activating Routing on the Rockwell Stratix 5700 Switch | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Potential Issues when Activating Routing on the Rockwell Stratix 5700 Switch | Oxmaint Community">
    <meta property="og:description" content="If we activate routing on the Rockwell Stratix 5700 switch as shown in the following link, will it present any potential issues? This includes considerations for axis motion control, point-to-point communication (PTP), and scheduling output modules. Learn more about Stratix 5700 VLAN routing here.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/potential-issues-when-activating-routing-on-the-rockwell-stratix-5700-switch">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Potential Issues when Activating Routing on the Rockwell Stratix 5700 Switch | Oxmaint Community">
    <meta name="twitter:description" content="If we activate routing on the Rockwell Stratix 5700 switch as shown in the following link, will it present any potential issues? This includes considerations for axis motion control, point-to-point communication (PTP), and scheduling output modules. Learn more about Stratix 5700 VLAN routing here.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/potential-issues-when-activating-routing-on-the-rockwell-stratix-5700-switch"
      },
      "headline": "Potential Issues when Activating Routing on the Rockwell Stratix 5700 Switch",
      "description": "If we activate routing on the Rockwell Stratix 5700 switch as shown in the following link, will it present any potential issues? This includes considerations for axis motion control, point-to-point communication (PTP), and scheduling output modules. Learn more about Stratix 5700 VLAN routing here.",
      "author": {
        "@type": "Person",
        "name": "Kataeb"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-12",
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
                <h1 class="text-white">Potential Issues when Activating Routing on the Rockwell Stratix 5700 Switch</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">339</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">173</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>If we activate routing on the Rockwell Stratix 5700 switch as shown in the following link, will it present any potential issues? This includes considerations for axis motion control, point-to-point communication (PTP), and scheduling output modules. Learn more about Stratix 5700 VLAN routing here.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you utilizing multiple VLANs within your network infrastructure? If not, consider configuring your uplink port as a trunk and maintaining all other ports on the default VLAN1. Is this switch responsible for managing multiple individual devices?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mitch.</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This setup enables the connection of multiple Kinetix CIP axes to a motion controller and a safety PLC, alongside an HMI, PowerFlex drives, scheduled output modules, and remote I/O devices all on a single machine with one VLAN. The issue at hand is that the laptop is on a separate IP range, similar to the office's network.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it permissible to set your laptop's IP address to align with the network of the device? It is recommended to enable inter-VLAN routing on a higher-level network switch in your office rather than on the Stratix switch within the machine. This method helps decrease the chance of unrelated traffic flowing through the Stratix and leading to a network bottleneck. Segregating the office network from the machine network is considered a best practice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mitch.</span></li>
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
<h4 class='text-dark'>FAQ: 1. What potential issues should be considered when activating routing on the Rockwell Stratix 5700 switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - Activating routing on the Rockwell Stratix 5700 switch may introduce potential issues related to axis motion control, point-to-point communication (PTP), and scheduling output modules. It is important to assess these factors before implementing routing on the switch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can routing on the Rockwell Stratix 5700 switch impact axis motion control?</h4>
<p class='text-muted'><strong>Answer:</strong> - Enabling routing on the Rockwell Stratix 5700 switch can affect axis motion control by potentially introducing latency or disruptions in communication. It is essential to evaluate the impact on motion control systems before proceeding with routing configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What considerations are important for maintaining reliable point-to-point communication (PTP) when activating routing on the Rockwell Stratix 5700 switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - When activating routing on the Rockwell Stratix 5700 switch, it is crucial to ensure that point-to-point communication (PTP) remains reliable. Factors such as network segmentation, quality of service (QoS), and routing configurations should be carefully reviewed to prevent any disruptions in PTP communications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there specific concerns regarding scheduling output modules when enabling routing on the Rockwell Stratix 5700 switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - Enabling routing on the Rockwell Stratix 5700 switch may impact the scheduling of output modules, potentially leading to delays or conflicts in data transmission</p>
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
