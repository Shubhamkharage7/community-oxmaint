
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I recently integrated two 1783-NATR devices into a pair of our machines. Both machines are equipped with 1769-L24ER-QFC1B CompactLogix controllers, and while one functions flawlessly, the other is experiencing a recurring issue. Upon power cycling, the PLC in the problematic machine resets its gateway IP to 0.0.0.0. Consequently,">
    <meta name="keywords" content="compactlogix controller troubleshooting, ip gateway reset issue resolution, 1783-natr device integration problems, 1769-l24er-qfc1b controller gateway ip reset, plc gateway ip">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ip-gateway-reset-issue-on-compactlogix-controller">
    <title>Troubleshooting IP Gateway Reset Issue on CompactLogix Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting IP Gateway Reset Issue on CompactLogix Controller | Oxmaint Community">
    <meta property="og:description" content="Hello, I recently integrated two 1783-NATR devices into a pair of our machines. Both machines are equipped with 1769-L24ER-QFC1B CompactLogix controllers, and while one functions flawlessly, the other is experiencing a recurring issue. Upon power cycling, the PLC in the problematic machine resets its gateway IP to 0.0.0.0. Consequently,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ip-gateway-reset-issue-on-compactlogix-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting IP Gateway Reset Issue on CompactLogix Controller | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I recently integrated two 1783-NATR devices into a pair of our machines. Both machines are equipped with 1769-L24ER-QFC1B CompactLogix controllers, and while one functions flawlessly, the other is experiencing a recurring issue. Upon power cycling, the PLC in the problematic machine resets its gateway IP to 0.0.0.0. Consequently,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ip-gateway-reset-issue-on-compactlogix-controller"
      },
      "headline": "Troubleshooting IP Gateway Reset Issue on CompactLogix Controller",
      "description": "Hello, I recently integrated two 1783-NATR devices into a pair of our machines. Both machines are equipped with 1769-L24ER-QFC1B CompactLogix controllers, and while one functions flawlessly, the other is experiencing a recurring issue. Upon power cycling, the PLC in the problematic machine resets its gateway IP to 0.0.0.0. Consequently,",
      "author": {
        "@type": "Person",
        "name": "squiggz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-02",
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
                <h1 class="text-white">Troubleshooting IP Gateway Reset Issue on CompactLogix Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>squiggz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">471</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">341</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I recently integrated two 1783-NATR devices into a pair of our machines. Both machines are equipped with 1769-L24ER-QFC1B CompactLogix controllers, and while one functions flawlessly, the other is experiencing a recurring issue. Upon power cycling, the PLC in the problematic machine resets its gateway IP to 0.0.0.0. Consequently, I find myself manually adjusting the gateway IP each time this occurs, which is happening frequently enough to be a concern. Strangely, the other machine does not encounter this issue. Could this be a peculiar hardware glitch, or is there a solution that can address this issue proactively? Any guidance on this matter would be greatly valued. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is your BOOTP/DHCP feature turned off?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>FilthyTech</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It has been a considerable amount of time since I last engaged in more complex tasks beyond basic edits and problem-solving. However, this issue seems vaguely familiar. Does your Programmable Logic Controller (PLC) contain an SD card? If it does, an unconventional solution that worked for me in a similar situation was to first adjust the communication settings and then back up the data on the SD card. It may sound illogical, but this method resolved a similar issue I encountered years ago while starting up a project. Hopefully, implementing this workaround will prove beneficial for you as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>imtiredboss</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you provide the IP setup for the PLC as well as the NAT configuration for public and private IP addresses used?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aawilliams85</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User imtiredboss suggested a possible solution to the issue of fixing communication settings and performing a backup on a PLC with an SD card. Despite the unusual approach, it successfully resolved a similar problem in the past. Upon reviewing the controller properties, it appears there may be an SD card present. Further investigation will be conducted tomorrow. Thank you for the advice!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>squiggz</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why does my CompactLogix controller reset its gateway IP to 0.0.0.0 upon power cycling?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue of the gateway IP resetting to 0.0.0.0 could be due to a hardware glitch or a configuration setting that needs adjustment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I prevent my CompactLogix controller from resetting its gateway IP address?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address the recurring issue of the gateway IP resetting, you may need to investigate the configuration settings, firmware updates, or potential hardware issues affecting the specific machine.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a proactive solution to the gateway IP reset issue on the CompactLogix controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting steps could include checking the network configuration, verifying the integrity of the NATR devices, and ensuring compatibility and proper setup of the equipment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Why is the gateway IP reset issue only occurring on one CompactLogix controller and not the other?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancy in behavior between the two machines could indicate a specific configuration or hardware difference that is causing the gateway IP reset problem on one machine. Identifying and addressing this discrepancy is key to resolving the issue.</p>
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
