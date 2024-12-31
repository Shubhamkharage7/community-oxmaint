
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my facility, I have a ring network controlled by a Logix5000 L72 v20 PLC that manages the HVAC system. This network includes 2 PLC chassis equipped with 1756-EN2TR and 17 1794-AENTR Flex IO modules, as well as 24 1783-ETAPs. The main EN2TR is currently running on version 5.08.">
    <meta name="keywords" content="allen bradley plc, hvac system, ring break detection, logix5000 l72 v20, 1756-en2tr, 1794-aentr, 1783-etap, ethernet network, ring fault supervisor mode">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-monitor-and-detect-ring-breaks-in-an-allen-bradley-plc-controlled-hvac-system">
    <title>How to Monitor and Detect Ring Breaks in an Allen Bradley PLC-controlled HVAC System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Monitor and Detect Ring Breaks in an Allen Bradley PLC-controlled HVAC System | Oxmaint Community">
    <meta property="og:description" content="In my facility, I have a ring network controlled by a Logix5000 L72 v20 PLC that manages the HVAC system. This network includes 2 PLC chassis equipped with 1756-EN2TR and 17 1794-AENTR Flex IO modules, as well as 24 1783-ETAPs. The main EN2TR is currently running on version 5.08.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-monitor-and-detect-ring-breaks-in-an-allen-bradley-plc-controlled-hvac-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Monitor and Detect Ring Breaks in an Allen Bradley PLC-controlled HVAC System | Oxmaint Community">
    <meta name="twitter:description" content="In my facility, I have a ring network controlled by a Logix5000 L72 v20 PLC that manages the HVAC system. This network includes 2 PLC chassis equipped with 1756-EN2TR and 17 1794-AENTR Flex IO modules, as well as 24 1783-ETAPs. The main EN2TR is currently running on version 5.08.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-monitor-and-detect-ring-breaks-in-an-allen-bradley-plc-controlled-hvac-system"
      },
      "headline": "How to Monitor and Detect Ring Breaks in an Allen Bradley PLC-controlled HVAC System",
      "description": "In my facility, I have a ring network controlled by a Logix5000 L72 v20 PLC that manages the HVAC system. This network includes 2 PLC chassis equipped with 1756-EN2TR and 17 1794-AENTR Flex IO modules, as well as 24 1783-ETAPs. The main EN2TR is currently running on version 5.08.",
      "author": {
        "@type": "Person",
        "name": "HunterM93"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-16",
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
                <h1 class="text-white">How to Monitor and Detect Ring Breaks in an Allen Bradley PLC-controlled HVAC System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>HunterM93</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">131</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">317</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my facility, I have a ring network controlled by a Logix5000 L72 v20 PLC that manages the HVAC system. This network includes 2 PLC chassis equipped with 1756-EN2TR and 17 1794-AENTR Flex IO modules, as well as 24 1783-ETAPs. The main EN2TR is currently running on version 5.08. Is there a way to detect the location of a ring break or fault in the network from the PLC? When checking the network through the master ethernet card properties, it only indicates a Ring Fault with Supervisor mode enabled. While I am monitoring the connection to each device, it only shows when communication is lost, requiring 2 breaks in the ring to be identified. I am looking for a method to monitor each individual connection to easily pinpoint a single break, display it on an HMI for quick identification, and resolve the issue without the need to physically inspect each device.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If a fault occurs in a ring network, the Ring Supervisor in RSlinx will display the IP and MAC addresses of the broken node under the Network tab. This feature is useful for quickly identifying and troubleshooting network issues within a ring topology.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Monitoring network devices programmatically is made easy with AB's faceplate for panelviews, which includes an AOI providing necessary examples. By utilizing a MSG instruction to each device on the ring, you can access a variety of diagnostics and graphics that indicate the type of device and ring master. According to EIP standards, all qualified devices will respond to CIP Message instructions in a similar manner, allowing for programmable monitoring. For more information on port monitoring, remote interface status, and other features, refer to the documentation provided at https://literature.rockwellautomation.com/idc/groups/literature/documents/um/1756-um004_-en-p.pdf. Alternatively, download the DLR networks faceplate from AB to simplify the monitoring process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When there is a fault in the ring, RSlinx will display the IP and MAC addresses of the break in the Network tab of the ring supervisor. After troubleshooting, I discovered the issue was caused by having some Ethernet taps configured as ring supervisors instead of the en2tr card in the primary PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>HunterM93</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Idiotsecant mentioned the ability to monitor devices programmatically by using a faceplate created by AB for PanelViews. This faceplate includes an AOI with examples and graphics for different devices, including a crown for the ring master. By using MSG instructions to each device on the ring, you can effectively monitor EIP-qualified devices and DLR participants. The document linked provides further information on port monitoring, remote interface status, and more starting from page 43. Consider downloading the faceplate for DLR networks to simplify the monitoring process. In my experience, I have implemented logic in all my PLCs with rings to monitor ring health and automatically reset a ring fault when connections are restored. If you're interested, I can provide more details on the MSG instruction tomorrow.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned having logic in all of his programmable logic controllers (PLCs) that includes rings for monitoring ring health and automatically resetting a ring fault when the connection is restored. This is achieved through two Message Instructions. If you're interested, I can provide more details on the MSG instruction tomorrow. I found the Allen Bradley Ethernet/IP DLR Operating Manual through Idiotsecantlink and am currently setting it up, along with monitoring the loop.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>HunterM93</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>HunterM93 recently discovered the reason behind the issue of certain ethernet taps being designated as ring supervisors instead of just the en2tr card in the primary PLC. Upon further investigation, it was found that the Supervisor Precedence setting on the main ethernet card was set to 0. By making the necessary adjustment, the card is now functioning as the primary master and displaying updated stats.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>HunterM93</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>HunterM93 discovered that the Supervisor Precedence setting on the main ethernet card was set to 0, so he made the necessary change to designate it as the primary master. As a result, the card now displays stats. However, if you prefer real-time monitoring using PLC logic and the ability to alert someone with an alarm, simply sitting in front of the module properties won't suffice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. How can I detect ring breaks in an Allen Bradley PLC-controlled HVAC system network?</h4>
<p class='text-muted'><strong>Answer:</strong> To detect ring breaks in your network, you can utilize the Supervisor mode on the master ethernet card properties. However, this method may only indicate a Ring Fault without specifying the exact location of the break. Consider implementing a monitoring system that can track individual connections to quickly pinpoint single breaks for easier identification and resolution.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What components are involved in monitoring a ring network in an Allen Bradley PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> In a ring network controlled by an Allen Bradley PLC, components such as the Logix5000 L72 v20 PLC, 1756-EN2TR, 1794-AENTR Flex IO modules, and 1783-ETAPs are typically utilized. These components work together to manage the HVAC system and monitor network connections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I upgrade the version of the main EN2TR in my Allen Bradley PLC network?</h4>
<p class='text-muted'><strong>Answer:</strong> To upgrade the version of the main EN2TR in your Allen Bradley PLC network, you would typically need to follow the specific upgrade procedures provided by Allen Bradley for that particular device. Ensure you have the necessary firmware files and follow the instructions carefully to avoid any issues during the upgrade process.</p>
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
