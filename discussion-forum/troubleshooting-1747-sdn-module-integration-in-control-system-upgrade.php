
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="During the process of upgrading our control system, we are transitioning from a SLC500 system with IO cards and a 1747-SDN module to a 1747-AENTR module communicating with motors. In the conversion, we plan to utilize the new remote rack to interface with the existing IO. However, I am">
    <meta name="keywords" content="control system upgrade troubleshooting, 1747-sdn module integration issues, slc500 to 1747-aentr module transition, remote rack interface for io integration, 1747-sd">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-1747-sdn-module-integration-in-control-system-upgrade">
    <title>Troubleshooting 1747-SDN Module Integration in Control System Upgrade | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 1747-SDN Module Integration in Control System Upgrade | Oxmaint Community">
    <meta property="og:description" content="During the process of upgrading our control system, we are transitioning from a SLC500 system with IO cards and a 1747-SDN module to a 1747-AENTR module communicating with motors. In the conversion, we plan to utilize the new remote rack to interface with the existing IO. However, I am">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-1747-sdn-module-integration-in-control-system-upgrade">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 1747-SDN Module Integration in Control System Upgrade | Oxmaint Community">
    <meta name="twitter:description" content="During the process of upgrading our control system, we are transitioning from a SLC500 system with IO cards and a 1747-SDN module to a 1747-AENTR module communicating with motors. In the conversion, we plan to utilize the new remote rack to interface with the existing IO. However, I am">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-1747-sdn-module-integration-in-control-system-upgrade"
      },
      "headline": "Troubleshooting 1747-SDN Module Integration in Control System Upgrade",
      "description": "During the process of upgrading our control system, we are transitioning from a SLC500 system with IO cards and a 1747-SDN module to a 1747-AENTR module communicating with motors. In the conversion, we plan to utilize the new remote rack to interface with the existing IO. However, I am",
      "author": {
        "@type": "Person",
        "name": "jakeparsons03"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">Troubleshooting 1747-SDN Module Integration in Control System Upgrade</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jakeparsons03</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">802</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">159</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>During the process of upgrading our control system, we are transitioning from a SLC500 system with IO cards and a 1747-SDN module to a 1747-AENTR module communicating with motors. In the conversion, we plan to utilize the "new" remote rack to interface with the existing IO. However, I am facing difficulties integrating the 1747-SDN Module into the CPLX program through the 1747-AENTR Chassis. While other IO modules convert smoothly, this particular module is posing a challenge. I suspect that the issue may lie with EDS files and I am currently investigating this. Additionally, I am questioning the compatibility of the 1747-SDN card with the new controllers, as the absence of a standard EDS file for this module is unusual.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>According to the user manual for the 1747-AENTR module, it does not support the 1769-SDN module. This information can be found in Rockwell Automation Publication 1747-UM076D-EN-E, dated January 2019 on page 22.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mike__T</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your cooperation!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jakeparsons03</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A 1747-SDN module communicates with a small group of motors. For easy integration of motor control and protection devices into your system, consider using a Hilscher NetTapNT100-RE-DN. While the old Rockwell 1788-EN2DN would have been a simpler option, it was discontinued in 2016.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach recommends using the Hilscher NetTapNT100-RE-DN for integrating motor control or protection devices into your new system. While the old Rockwell 1788-EN2DN would have been easier to integrate, it was discontinued in 2016. In fact, Ken is currently deploying 67 Hilscher gateways and finds that they work great for his system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>BeepBob enthusiastically shared, "I'm currently implementing 67 Hilscher gateways and they are performing exceptionally well!" Similarly, another user chimed in, "I've been utilizing the Nt-151-RE-REs and once you get the hang of the configuration software, they function smoothly."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the challenges faced when integrating the 1747-SDN module into the control system upgrade?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The integration of the 1747-SDN module into the control system upgrade seems to be posing difficulties, particularly when transitioning to the 1747-AENTR module. The issue might be related to the EDS files or compatibility with the new controllers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How are other IO modules transitioning during the control system upgrade?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Other IO modules are reportedly converting smoothly during the control system upgrade, except for the 1747-SDN module. It seems to be the main challenge in the integration process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is the absence of a standard EDS file for the 1747-SDN module a common issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The absence of a standard EDS file for the 1747-SDN module could be considered unusual, and it might be contributing to the integration difficulties. Further investigation into the EDS files is currently ongoing to address this issue.</p>
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
