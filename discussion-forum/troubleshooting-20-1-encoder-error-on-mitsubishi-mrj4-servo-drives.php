
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently in the process of upgrading my machinery by replacing MRJ2 (Mitsubishi) series servo drives with MRJ4 servo drives for two axes. I have utilized the conversion kit provided by Mitsubishi, but upon powering up, I am encountering an 20.1 error on both drives, indicating">
    <meta name="keywords" content="mrj4 servo drives, mitsubishi servo drives, encoder error troubleshooting, mrj2 to mrj4 upgrade, mitsubishi encoder wiring, servo drive conversion kit, troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-20-1-encoder-error-on-mitsubishi-mrj4-servo-drives">
    <title>Troubleshooting 20.1 Encoder Error on Mitsubishi MRJ4 Servo Drives | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 20.1 Encoder Error on Mitsubishi MRJ4 Servo Drives | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently in the process of upgrading my machinery by replacing MRJ2 (Mitsubishi) series servo drives with MRJ4 servo drives for two axes. I have utilized the conversion kit provided by Mitsubishi, but upon powering up, I am encountering an 20.1 error on both drives, indicating">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-20-1-encoder-error-on-mitsubishi-mrj4-servo-drives">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 20.1 Encoder Error on Mitsubishi MRJ4 Servo Drives | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently in the process of upgrading my machinery by replacing MRJ2 (Mitsubishi) series servo drives with MRJ4 servo drives for two axes. I have utilized the conversion kit provided by Mitsubishi, but upon powering up, I am encountering an 20.1 error on both drives, indicating">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-20-1-encoder-error-on-mitsubishi-mrj4-servo-drives"
      },
      "headline": "Troubleshooting 20.1 Encoder Error on Mitsubishi MRJ4 Servo Drives",
      "description": "Hello everyone, I am currently in the process of upgrading my machinery by replacing MRJ2 (Mitsubishi) series servo drives with MRJ4 servo drives for two axes. I have utilized the conversion kit provided by Mitsubishi, but upon powering up, I am encountering an 20.1 error on both drives, indicating",
      "author": {
        "@type": "Person",
        "name": "rejoe.koshy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-22",
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
                <h1 class="text-white">Troubleshooting 20.1 Encoder Error on Mitsubishi MRJ4 Servo Drives</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rejoe.koshy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">207</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">410</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently in the process of upgrading my machinery by replacing MRJ2 (Mitsubishi) series servo drives with MRJ4 servo drives for two axes. I have utilized the conversion kit provided by Mitsubishi, but upon powering up, I am encountering an "20.1" error on both drives, indicating an encoder error as per the user manual. Despite my attempts to troubleshoot by inspecting the encoder wiring and adjusting parameters like "PC04" (transitioning from a two-wire to four-wire encoder), the issue persists.

Upon further inspection, I noticed that the "PG" and "N" points at the encoder terminals lack the expected 5V power supply required to activate the encoder. This leads me to believe that the drives may be defective, causing the lack of 5V generation for the encoder. It raises confusion as to why both brand-new drives are experiencing the same issue.

I am currently at a standstill and seeking assistance. Are there specific parameters that need adjusting to activate the 5V supply at these terminals? Your help is greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The MRJ2 and MRJ4 models offer varying resolutions, therefore requiring individual configuration settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to properly configure the MRJ2 and MRJ4, it's important to note that they have different resolutions. This will require some adjustments to be made. Can you please provide guidance on the specific parameters that need to be checked? Also, what should be done in case the 5V is missing? Your insights are greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rejoe.koshy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The "Transition from MELSERVO-J2-Super/J2M Series to J4 Series Handbook" (L(NA)03093-D) from Mitsubishi is a comprehensive guide with 654 pages that thoroughly documents the transition process. The handbook includes a detailed flowchart outlining the replacement procedures, making it easy to follow and implement. Don't hesitate to consult this valuable resource for a smooth transition to the J4 Series.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
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
<h4 class='text-dark'>FAQ: 1. What does the "20.1" error code on Mitsubishi MRJ4 servo drives indicate?</h4>
<p class='text-muted'><strong>Answer:</strong> - The "20.1" error code indicates an encoder error, as specified in the user manual.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot an encoder error on Mitsubishi MRJ4 servo drives?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can start by inspecting the encoder wiring and adjusting relevant parameters, such as transitioning from a two-wire to four-wire encoder (e.g., adjusting "PC04").</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why might the "PG" and "N" points at the encoder terminals lack the expected 5V power supply on Mitsubishi MRJ4 servo drives?</h4>
<p class='text-muted'><strong>Answer:</strong> - This issue could be due to potential defects in the drives, causing the lack of 5V generation for the encoder.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Why are both brand-new Mitsubishi MRJ4 drives experiencing the same encoder error issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - If both brand-new drives are showing the same problem, it could indicate a common issue related to the drives themselves rather than installation or configuration errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Are there specific parameters that need adjusting to activate the 5V supply at the encoder terminals on Mitsubishi MRJ4 servo drives?</h4>
<p class='text-muted'><strong>Answer:</strong> - While adjusting parameters like "PC04" can be helpful, if the issue persists, it may require further troubleshooting or contacting Mitsubishi technical support for guidance.</p>
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
