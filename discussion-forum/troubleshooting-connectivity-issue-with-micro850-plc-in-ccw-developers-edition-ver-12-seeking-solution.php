
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I currently have CCW ver.12, the developers edition. Upon trying to connect to a 2080-L50E-24QBB PLC (Micro850 with Ethernet/IP), I encountered an issue where the PLC was not showing up in the available controllers list within the software. In my search for a solution, I discovered a newer version,">
    <meta name="keywords" content="troubleshooting connectivity, micro850 plc, ccw developers edition, version 12, 2080-l50e-24qbb, ethernet/ip, available controllers list, rockwell automation portal, distributor assistance, implicit messaging, dave">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-with-micro850-plc-in-ccw-developers-edition-ver-12-seeking-solution">
    <title>Troubleshooting Connectivity Issue with Micro850 PLC in CCW Developers Edition ver.12 - Seeking Solution | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Connectivity Issue with Micro850 PLC in CCW Developers Edition ver.12 - Seeking Solution | Oxmaint Community">
    <meta property="og:description" content="I currently have CCW ver.12, the developers edition. Upon trying to connect to a 2080-L50E-24QBB PLC (Micro850 with Ethernet/IP), I encountered an issue where the PLC was not showing up in the available controllers list within the software. In my search for a solution, I discovered a newer version,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-with-micro850-plc-in-ccw-developers-edition-ver-12-seeking-solution">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Connectivity Issue with Micro850 PLC in CCW Developers Edition ver.12 - Seeking Solution | Oxmaint Community">
    <meta name="twitter:description" content="I currently have CCW ver.12, the developers edition. Upon trying to connect to a 2080-L50E-24QBB PLC (Micro850 with Ethernet/IP), I encountered an issue where the PLC was not showing up in the available controllers list within the software. In my search for a solution, I discovered a newer version,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-with-micro850-plc-in-ccw-developers-edition-ver-12-seeking-solution"
      },
      "headline": "Troubleshooting Connectivity Issue with Micro850 PLC in CCW Developers Edition ver.12 - Seeking Solution",
      "description": "I currently have CCW ver.12, the developers edition. Upon trying to connect to a 2080-L50E-24QBB PLC (Micro850 with Ethernet/IP), I encountered an issue where the PLC was not showing up in the available controllers list within the software. In my search for a solution, I discovered a newer version,",
      "author": {
        "@type": "Person",
        "name": "Usually_Confused"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-23",
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
                <h1 class="text-white">Troubleshooting Connectivity Issue with Micro850 PLC in CCW Developers Edition ver.12 - Seeking Solution</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Usually_Confused</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">430</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">348</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I currently have CCW ver.12, the developers' edition. Upon trying to connect to a 2080-L50E-24QBB PLC (Micro850 with Ethernet/IP), I encountered an issue where the PLC was not showing up in the available controllers list within the software. In my search for a solution, I discovered a newer version, version 22. However, when I attempted to download it from the Rockwell Automation portal, only the original version 12 was available. I have reached out to my distributor for assistance, but while I await their response, I am also seeking help here in case others have faced a similar problem. My main reason for needing the 2080-L50E model is its implicit messaging feature with Ethernet/IP, so changing to a different PLC model is not an option for me. Any assistance or advice would be greatly appreciated. Thank you, Dave.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that you purchased a perpetual license for V12 but have not been paying an annual fee for support, which is typically around $100 per year. If you decide to upgrade to the current version by renewing your license, you may be required to pay for the previous years' support. It might be more cost-effective to purchase a new license if you need the developer edition and assess whether the support is necessary. Alternatively, you could use the free edition. If you require user-defined structures, you could consider starting the project on V12 Developer Edition on one computer and then transferring it to the newer version on another computer. While the software may still present challenges, it is more user-friendly than before.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There is no need to pay past dues to get up to date, however, purchasing a new v22 license for around $400.00 will be necessary. Additionally, to ensure continuity, an annual fee will need to be paid.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The CCW Standard Edition is a complimentary tool that appears to have insights on the 2080-L50E-24QBB module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Like Brian, I also utilize the free version of the software with my L50Es. Thus far, I have not found it necessary to upgrade to the paid version.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my Micro850 PLC not showing up in the available controllers list in CCW ver.12?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to compatibility or communication settings. Ensure that the software and PLC are compatible and configured correctly for Ethernet/IP communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I obtain CCW version 22 to possibly resolve my connectivity issue with the Micro850 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If version 22 is not available for download on the Rockwell Automation portal, contacting your distributor or Rockwell Automation directly for assistance in obtaining the newer version may be necessary.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it possible to utilize implicit messaging with Ethernet/IP on the 2080-L50E-24QBB model without changing to a different PLC model?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, the 2080-L50E model supports implicit messaging with Ethernet/IP. Troubleshooting the connectivity issue to ensure proper configuration is key to utilizing this feature effectively.</p>
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
