
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I encountered an interesting issue. I have a 1756-L85EP PLC and a 1756-EN2TR PLC in the same setup. The client requested a setup similar to a Ferrari and a three-lane highway. Initially, we set up and tested using the CPU Ethernet port. Both PLCs are identical, with">
    <meta name="keywords" content="1756-en2tr, 1756-l85ep, plc, connectivity issue, troubleshooting, ethernet, cpu, setup, network extender, ip configuration, connection problem, studio 5000, yellow flag error, error code">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-between-1756-en2tr-and-cpu-ethernet-plcs-in-same-setup">
    <title>Troubleshooting Connectivity Issue Between 1756-EN2TR and CPU Ethernet PLCs in Same Setup | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Connectivity Issue Between 1756-EN2TR and CPU Ethernet PLCs in Same Setup | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I encountered an interesting issue. I have a 1756-L85EP PLC and a 1756-EN2TR PLC in the same setup. The client requested a setup similar to a Ferrari and a three-lane highway. Initially, we set up and tested using the CPU Ethernet port. Both PLCs are identical, with">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-between-1756-en2tr-and-cpu-ethernet-plcs-in-same-setup">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Connectivity Issue Between 1756-EN2TR and CPU Ethernet PLCs in Same Setup | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I encountered an interesting issue. I have a 1756-L85EP PLC and a 1756-EN2TR PLC in the same setup. The client requested a setup similar to a Ferrari and a three-lane highway. Initially, we set up and tested using the CPU Ethernet port. Both PLCs are identical, with">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-between-1756-en2tr-and-cpu-ethernet-plcs-in-same-setup"
      },
      "headline": "Troubleshooting Connectivity Issue Between 1756-EN2TR and CPU Ethernet PLCs in Same Setup",
      "description": "Hello everyone, I encountered an interesting issue. I have a 1756-L85EP PLC and a 1756-EN2TR PLC in the same setup. The client requested a setup similar to a Ferrari and a three-lane highway. Initially, we set up and tested using the CPU Ethernet port. Both PLCs are identical, with",
      "author": {
        "@type": "Person",
        "name": "scotty69"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-22",
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
                <h1 class="text-white">Troubleshooting Connectivity Issue Between 1756-EN2TR and CPU Ethernet PLCs in Same Setup</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>scotty69</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">320</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">96</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I encountered an interesting issue. I have a 1756-L85EP PLC and a 1756-EN2TR PLC in the same setup. The client requested a setup similar to a Ferrari and a three-lane highway. Initially, we set up and tested using the CPU Ethernet port. Both PLCs are identical, with PLC #1 running the main application and PLC #2 acting as a slave application (Network extender).

When we configured the EN2TR card and assigned an IP, PLC #2 successfully connected to PLC #1 using the EN2TR IP. However, disconnecting the Ethernet port of either PLC resulted in a dropped connection between the two PLCs. We are unsure if this issue is related to the application or a function we may have overlooked on the EN2TR card.

Both PLCs' Ethernets are connected to the same switch, which is then connected to the company LAN. The active IPs on the EN2TR cards are pingable, while the CPU IPs are not. The applications are using the EN2TR IPs as intended.

Even with the PLC Ethernets disconnected, Studio 5000 can still detect both PLCs, but both EN2TRs are showing a yellow flag with the error code 16#0204 indicating a connection request timeout.

Thank you for any assistance,
Scott.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the En2TRs were placed incorrectly under the alternate L83 backplane levels, rather than at the root level. Please provide a visual representation of your IO tree for each PLC. This will help in understanding the configuration and troubleshooting any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is there a dropped connection between the 1756-L85EP PLC and 1756-EN2TR PLC when either Ethernet port is disconnected?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The dropped connection could be related to the configuration of the EN2TR card or a potential oversight in the setup. Further troubleshooting may be required to identify the exact cause of the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the connection issue between the two PLCs in the same setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by checking the configuration settings of the EN2TR card, ensuring proper IP assignments, verifying network connectivity, and investigating any error codes or warnings displayed by the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What does the yellow flag and error code 160204 on the EN2TR cards indicate in this scenario?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The yellow flag and error code 160204 (connection request timeout) suggest that there may be a communication problem between the PLCs or a delay in establishing the connection. Further investigation and adjustments may be needed to resolve this issue.</p>
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
