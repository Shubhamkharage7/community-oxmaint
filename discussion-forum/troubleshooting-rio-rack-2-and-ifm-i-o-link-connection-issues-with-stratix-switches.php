
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I encountered an issue with a RIO rack 2 and IFM I/O Link dropping connection on my network. The problem was traced back to the setup involving a Stratix 2000, Stratix 5400, and Stratix 5700 switches. The RIO 2 and I/O Link were originally connected to the Stratix">
    <meta name="keywords" content="rio rack 2 troubleshooting, ifm i/o link connection issues, stratix switches problems, resolving dropping connection in network, smartport settings for automation devices, vlan id configuration for">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-rio-rack-2-and-ifm-i-o-link-connection-issues-with-stratix-switches">
    <title>Troubleshooting RIO Rack 2 and IFM I/O Link Connection Issues with Stratix Switches | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting RIO Rack 2 and IFM I/O Link Connection Issues with Stratix Switches | Oxmaint Community">
    <meta property="og:description" content="Hello, I encountered an issue with a RIO rack 2 and IFM I/O Link dropping connection on my network. The problem was traced back to the setup involving a Stratix 2000, Stratix 5400, and Stratix 5700 switches. The RIO 2 and I/O Link were originally connected to the Stratix">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-rio-rack-2-and-ifm-i-o-link-connection-issues-with-stratix-switches">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting RIO Rack 2 and IFM I/O Link Connection Issues with Stratix Switches | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I encountered an issue with a RIO rack 2 and IFM I/O Link dropping connection on my network. The problem was traced back to the setup involving a Stratix 2000, Stratix 5400, and Stratix 5700 switches. The RIO 2 and I/O Link were originally connected to the Stratix">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-rio-rack-2-and-ifm-i-o-link-connection-issues-with-stratix-switches"
      },
      "headline": "Troubleshooting RIO Rack 2 and IFM I/O Link Connection Issues with Stratix Switches",
      "description": "Hello, I encountered an issue with a RIO rack 2 and IFM I/O Link dropping connection on my network. The problem was traced back to the setup involving a Stratix 2000, Stratix 5400, and Stratix 5700 switches. The RIO 2 and I/O Link were originally connected to the Stratix",
      "author": {
        "@type": "Person",
        "name": "KFerrese"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-21",
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
                <h1 class="text-white">Troubleshooting RIO Rack 2 and IFM I/O Link Connection Issues with Stratix Switches</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>KFerrese</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">349</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">486</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I encountered an issue with a RIO rack 2 and IFM I/O Link dropping connection on my network. The problem was traced back to the setup involving a Stratix 2000, Stratix 5400, and Stratix 5700 switches. The RIO 2 and I/O Link were originally connected to the Stratix 2000, which was then connected to the unconfigured Stratix 5400, and finally to the configured Stratix 5700.

To resolve the dropping connection problem, I bypassed the Stratix 2000 and directly connected the RIO and I/O Link to the Stratix 5400. I then configured the Stratix 5400 by setting all smartport settings to automation device, except for the port connected to the Stratix 5700 which was set as Switch for Automation.

Upon checking the smartport configuration of the Stratix 5700, I noticed that everything was set to automation device except for the ports connected to the Stratix 5400 and our network switch. When I connected directly to the LAN, the connection dropout issue disappeared, but I was unable to see beyond the Stratix 5400 from my company network after the configuration changes.

I suspect that the VLAN ID settings may be causing the issue as currently, both switches are set to VLAN1. As I am not an expert in networking, I am unsure about which configuration settings to adjust. I have been consulting resources but have not made much progress yet. Any assistance would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If the 5400 is working correctly but you are unable to view its IP address, what exactly do you mean by that? Are you experiencing issues with pinging it or accessing its web page?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>harryting</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello harryting, Thank you for responding. I wanted to clarify that I was able to remotely access this machine through our company network before making any adjustments. However, on Friday, I encountered difficulties connecting beyond the Stratix5400 after completing the configuration. I faced the same issue this morning, but now I am able to connect successfully. The only change I made was configuring the HMI port as a PC for automation, assuming it was a Windows-based device. After switching the setting to Automation Device, I can now successfully ping all my devices on the Stratix 5400 switch. I underestimated the impact of one incorrect setting on the entire system, but it seems to have been the culprit. Everything is now working smoothly. Hopefully, it remains that way.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KFerrese</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the update on the thread. The reason behind its current functionality is still unclear to me. After a brief review of the manual, I believe you may have meant 'Desktop for Automation' instead. The main distinction between the two seems to be that Desktop has Portfast enabled and Device prioritizes CIP traffic QOS. By the way, many of these terms are explained in detail during CCNA study sessions, which I find beneficial in today's tech-driven world.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>harryting</span></li>
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
<h4 class='text-dark'>FAQ: What was the initial setup that caused the dropping connection issue with the RIO Rack 2 and IFM I/O Link?</h4>
<p class='text-muted'><strong>Answer:</strong> The RIO 2 and I/O Link were originally connected to the Stratix 2000, which was then connected to the unconfigured Stratix 5400, and finally to the configured Stratix 5700.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How was the dropping connection problem resolved in the network setup involving the Stratix switches?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue was resolved by bypassing the Stratix 2000 and directly connecting the RIO and I/O Link to the Stratix 5400. The smartport settings on the Stratix 5400 were configured accordingly, setting all smartport settings to automation device except for the port connected to the Stratix 5700.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What was noticed in the smartport configuration of the Stratix 5700 during troubleshooting?</h4>
<p class='text-muted'><strong>Answer:</strong> In the smartport configuration of the Stratix 5700, everything was set to automation device except for the ports connected to the Stratix 5400 and the company network switch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What potential issue related to VLAN ID settings was suspected to be causing problems in the network setup?</h4>
<p class='text-muted'><strong>Answer:</strong> The user suspected that the VLAN ID settings may be causing the issue as both switches were set to VLAN1. Adjusting VLAN configuration settings was under consideration to address the connectivity problems beyond the Stratix 5400.</p>
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
