
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, could someone assist me in troubleshooting the issue of receiving only zero 0 values when reading registers in the DXM Configuration Software for Banner node and Banner gateway? I have properly set up both the gateway and node, successfully establishing a connection and configuring all settings in the">
    <meta name="keywords" content="banner engineering, dxm configuration software, troubleshooting zero values, banner node, banner gateway, register reading issue, connection setup problem, dxm software configuration, green lights but zero values, discrepancy resolution, troubleshooting guidance, node values display, register values issue">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-zero-values-issue-in-banner-engineering-dxm-configuration-software">
    <title>Troubleshooting Zero Values Issue in Banner Engineering DXM Configuration Software | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Zero Values Issue in Banner Engineering DXM Configuration Software | Oxmaint Community">
    <meta property="og:description" content="Hello, could someone assist me in troubleshooting the issue of receiving only zero 0 values when reading registers in the DXM Configuration Software for Banner node and Banner gateway? I have properly set up both the gateway and node, successfully establishing a connection and configuring all settings in the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-zero-values-issue-in-banner-engineering-dxm-configuration-software">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Zero Values Issue in Banner Engineering DXM Configuration Software | Oxmaint Community">
    <meta name="twitter:description" content="Hello, could someone assist me in troubleshooting the issue of receiving only zero 0 values when reading registers in the DXM Configuration Software for Banner node and Banner gateway? I have properly set up both the gateway and node, successfully establishing a connection and configuring all settings in the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-zero-values-issue-in-banner-engineering-dxm-configuration-software"
      },
      "headline": "Troubleshooting Zero Values Issue in Banner Engineering DXM Configuration Software",
      "description": "Hello, could someone assist me in troubleshooting the issue of receiving only zero 0 values when reading registers in the DXM Configuration Software for Banner node and Banner gateway? I have properly set up both the gateway and node, successfully establishing a connection and configuring all settings in the",
      "author": {
        "@type": "Person",
        "name": "Tomatsu"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-19",
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
                <h1 class="text-white">Troubleshooting Zero Values Issue in Banner Engineering DXM Configuration Software</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Tomatsu</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">84</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">152</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, could someone assist me in troubleshooting the issue of receiving only zero "0" values when reading registers in the DXM Configuration Software for Banner node and Banner gateway? I have properly set up both the gateway and node, successfully establishing a connection and configuring all settings in the DXM software as directed. The node displays green lights and values, but the DXM Configuration software consistently shows only zero values. Can someone provide guidance on resolving this discrepancy?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're dealing with Modbus and not Ethernet/IP, I recently replaced an old DX80 Modbus gateway with a DXM700-B1R1. The old gateway required a Wye cable adapter for power and RS-485 connection, which my company no longer had. The new DXM700 comes with a default XML file that automatically maps node radio data to standard Modbus registers, making it easy to set up as a Modbus Slave without any additional software. 

I recently encountered a similar binding issue when setting up the node radios. Looking at your current problem with Modbus addresses starting at (4)0001 for the I/O, I had success reading analog values from node #1 (an RTD node radio) at (4)0019. It seems that Banner's Modbus map starts at (4)0017 for the lowest numbered node #1.

Are you trying to read the gateway's I/O points or a node's I/O points? Have you considered custom mapping registers in the Gateway to access (4)0001? Banner's Modbus indexing formula suggests that node 1 uses (4)0017 through (4)0032, with I/O 3 [AI #1 for node 1] at (4)0019.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I only receiving zero values when reading registers in the DXM Configuration Software for Banner node and Banner gateway?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue of receiving zero values could be due to various factors such as incorrect configuration settings, communication errors, or compatibility issues. It is essential to troubleshoot each step carefully to identify the root cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the discrepancy between the node displaying values and the DXM Configuration software showing zero values?</h4>
<p class='text-muted'><strong>Answer:</strong> To troubleshoot the discrepancy, ensure that the gateway and node are properly set up, the connection is established correctly, and all configurations in the DXM software are accurately configured. Check for any errors in communication protocols or software compatibility.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps should I take to resolve the issue of zero values in the DXM Configuration Software despite the node showing green lights and values?</h4>
<p class='text-muted'><strong>Answer:</strong> Start by double-checking the configurations in the DXM software, verifying the communication settings between the gateway and node, and ensuring that the software is compatible with the hardware. If the issue persists, consider resetting the configurations and reconfiguring the setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any common troubleshooting tips for addressing zero values in the DXM Configuration Software for Banner Engineering devices?</h4>
<p class='text-muted'><strong>Answer:</strong> Common troubleshooting tips include checking for firmware updates, ensuring proper power supply to the devices, verifying network configurations, and confirming that the software is correctly interpreting the data from</p>
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
