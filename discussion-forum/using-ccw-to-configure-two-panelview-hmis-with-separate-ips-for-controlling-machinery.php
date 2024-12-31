
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, Im looking for some guidance on using my MicroLogix PLC and PanelView HMI (2711R-T7T) configured in CCW. Is it possible to download the same CCW HMI project to two terminals with separate IPs and have them both control the same machinery? Thanks for your help!">
    <meta name="keywords" content="seo-friendly keywords for the article could include:, , ccw configuration, panelview hmi, micrologix plc, separate ips, control machinery, ccw hmi project, dual">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/using-ccw-to-configure-two-panelview-hmis-with-separate-ips-for-controlling-machinery">
    <title>Using CCW to Configure Two PanelView HMIs with Separate IPs for Controlling Machinery | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Using CCW to Configure Two PanelView HMIs with Separate IPs for Controlling Machinery | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, Im looking for some guidance on using my MicroLogix PLC and PanelView HMI (2711R-T7T) configured in CCW. Is it possible to download the same CCW HMI project to two terminals with separate IPs and have them both control the same machinery? Thanks for your help!">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/using-ccw-to-configure-two-panelview-hmis-with-separate-ips-for-controlling-machinery">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Using CCW to Configure Two PanelView HMIs with Separate IPs for Controlling Machinery | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, Im looking for some guidance on using my MicroLogix PLC and PanelView HMI (2711R-T7T) configured in CCW. Is it possible to download the same CCW HMI project to two terminals with separate IPs and have them both control the same machinery? Thanks for your help!">
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
        "@id": "https://community.oxmaint.com/discussion-forum/using-ccw-to-configure-two-panelview-hmis-with-separate-ips-for-controlling-machinery"
      },
      "headline": "Using CCW to Configure Two PanelView HMIs with Separate IPs for Controlling Machinery",
      "description": "Hello everyone, Im looking for some guidance on using my MicroLogix PLC and PanelView HMI (2711R-T7T) configured in CCW. Is it possible to download the same CCW HMI project to two terminals with separate IPs and have them both control the same machinery? Thanks for your help!",
      "author": {
        "@type": "Person",
        "name": "Coopdegrace84"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-10",
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
                <h1 class="text-white">Using CCW to Configure Two PanelView HMIs with Separate IPs for Controlling Machinery</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Coopdegrace84</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">178</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">102</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I'm looking for some guidance on using my MicroLogix PLC and PanelView HMI (2711R-T7T) configured in CCW. Is it possible to download the same CCW HMI project to two terminals with separate IPs and have them both control the same machinery? Thanks for your help!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Our advanced system features a panel view for touch screen operation located outside a hazardous area, along with a remote unit housed in a NM7 enclosure within the hazardous area, both connected to a single PLC. It is crucial to ensure that all IP addresses are unique to prevent any conflicts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>forqnc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Whether it's setting up one PLC with two HMIs or two PLCs with one HMI, I am well-versed in all configurations. It is crucial to ensure that your "Tags" are properly configured for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Can I use CCW to configure two PanelView HMIs with separate IPs to control machinery from a single project?
   - Yes, it is possible to download the same CCW HMI project to two terminals with separate IPs and have them both control the same machinery.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I set up separate IPs for PanelView HMIs in CCW?</h4>
<p class='text-muted'><strong>Answer:</strong> - In CCW, you can configure the network settings for each PanelView HMI to assign them separate IPs for controlling the machinery.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Will the MicroLogix PLC work with multiple PanelView HMIs with different IPs for controlling machinery?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the MicroLogix PLC can communicate with multiple PanelView HMIs with different IPs to control the machinery in sync.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific considerations or steps to follow when setting up multiple PanelView HMIs with separate IPs in CCW?</h4>
<p class='text-muted'><strong>Answer:</strong> - When configuring multiple PanelView HMIs with separate IPs in CCW, ensure that the network settings and communication setup are correctly configured to avoid any conflicts and ensure seamless control of the machinery.</p>
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
