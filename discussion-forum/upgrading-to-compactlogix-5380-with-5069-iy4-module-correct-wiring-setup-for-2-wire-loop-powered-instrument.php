
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am in the process of upgrading from a MicroLogix 1100 to a CompactLogix 5380, incorporating a 5069-IY4 module. I will be utilizing a two-wire loop-powered instrument and want to confirm the correct wiring setup. The 4-20mA signal will be connected to IN 0+, but do I also">
    <meta name="keywords" content="compactlogix 5380 upgrade, 5069-iy4 module wiring setup, two-wire loop-powered instrument, correct wiring for 4-20ma signal, compactlogix 538">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/upgrading-to-compactlogix-5380-with-5069-iy4-module-correct-wiring-setup-for-2-wire-loop-powered-instrument">
    <title>Upgrading to CompactLogix 5380 with 5069-IY4 Module: Correct Wiring Setup for 2-Wire Loop-Powered Instrument | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Upgrading to CompactLogix 5380 with 5069-IY4 Module: Correct Wiring Setup for 2-Wire Loop-Powered Instrument | Oxmaint Community">
    <meta property="og:description" content="Hello, I am in the process of upgrading from a MicroLogix 1100 to a CompactLogix 5380, incorporating a 5069-IY4 module. I will be utilizing a two-wire loop-powered instrument and want to confirm the correct wiring setup. The 4-20mA signal will be connected to IN 0+, but do I also">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/upgrading-to-compactlogix-5380-with-5069-iy4-module-correct-wiring-setup-for-2-wire-loop-powered-instrument">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Upgrading to CompactLogix 5380 with 5069-IY4 Module: Correct Wiring Setup for 2-Wire Loop-Powered Instrument | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am in the process of upgrading from a MicroLogix 1100 to a CompactLogix 5380, incorporating a 5069-IY4 module. I will be utilizing a two-wire loop-powered instrument and want to confirm the correct wiring setup. The 4-20mA signal will be connected to IN 0+, but do I also">
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
        "@id": "https://community.oxmaint.com/discussion-forum/upgrading-to-compactlogix-5380-with-5069-iy4-module-correct-wiring-setup-for-2-wire-loop-powered-instrument"
      },
      "headline": "Upgrading to CompactLogix 5380 with 5069-IY4 Module: Correct Wiring Setup for 2-Wire Loop-Powered Instrument",
      "description": "Hello, I am in the process of upgrading from a MicroLogix 1100 to a CompactLogix 5380, incorporating a 5069-IY4 module. I will be utilizing a two-wire loop-powered instrument and want to confirm the correct wiring setup. The 4-20mA signal will be connected to IN 0+, but do I also",
      "author": {
        "@type": "Person",
        "name": "Kilowatt76"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">Upgrading to CompactLogix 5380 with 5069-IY4 Module: Correct Wiring Setup for 2-Wire Loop-Powered Instrument</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Kilowatt76</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">340</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">390</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am in the process of upgrading from a MicroLogix 1100 to a CompactLogix 5380, incorporating a 5069-IY4 module. I will be utilizing a two-wire loop-powered instrument and want to confirm the correct wiring setup. The 4-20mA signal will be connected to IN 0+, but do I also need to connect anything to the RTD-/COM terminal? I assume the other terminals are for RTD devices. Any guidance on this matter would be greatly appreciated. Thank you! Sincerely, Kilowatt76</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When transitioning from a MicroLogix 1100 to a CompactLogix 5380 and utilizing a 5069-IY4 module for a two-wire loop-powered instrument, it is important to ensure the correct wiring. The 4-20mA signal should be wired to the IN 0+ terminal. Are there any additional connections needed to the RTD-/COM terminal? It is likely that the other terminals are for RTD devices. Refer to the manual for specific examples. For loop powered instruments, the 24vdc+ should be wired to the sensor +input, the + input should be wired to the sensor -input, and the - input should be jumpered to the module RTD/COM. Additionally, the 24vdc - should be wired to the module RTD/COM. If you need further assistance, don't hesitate to ask. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was unaware of this particular card. It seems to offer a great deal of versatility and flexibility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned that there are examples in the manual for loop powered systems. In these systems, the 24vdc+ should be wired to the sensor's positive input, and the negative input should be connected to the sensor's - input, while also jumping to the module's RTD/COM. The 24vdc- should be wired to the module's RTD/COM. Do you think this setup matches the one depicted in the attached file?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kilowatt76</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Kilowatt76 confirmed their approval of the attached file. Click to view the document.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What is the correct wiring setup for connecting a two-wire loop-powered instrument to a CompactLogix 5380 with a 5069-IY4 module?
   - The 4-20mA signal from the instrument should be connected to the IN 0+ terminal. No connection is needed for the RTD-/COM terminal.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Do I need to connect anything to the RTD-/COM terminal on the 5069-IY4 module when using a two-wire loop-powered instrument?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, the RTD-/COM terminal is not used when connecting a two-wire loop-powered instrument. It is primarily for RTD devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the other terminals on the 5069-IY4 module used for?</h4>
<p class='text-muted'><strong>Answer:</strong> - The other terminals on the 5069-IY4 module are primarily for RTD devices. They are not utilized when connecting a two-wire loop-powered instrument.</p>
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
