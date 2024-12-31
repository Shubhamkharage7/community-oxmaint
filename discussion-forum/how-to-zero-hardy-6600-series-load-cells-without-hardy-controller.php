
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I currently have a set of three tanks equipped with Hardy 6600 series load cells. While two of the tanks are functioning well within calibration tolerances, the third tank is showing a negative value in both gross and net weight readings. Despite the value increasing as weight is">
    <meta name="keywords" content="hardy 6600 series load cells, zero hardy load cells, zeroing load cell values, hardy load cell calibration, hardy load cell troubleshooting, hardy load cell taring, hardy load cell hmi issue, zeroing load cells without controller">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-zero-hardy-6600-series-load-cells-without-hardy-controller">
    <title>How to Zero Hardy 6600 Series Load Cells Without Hardy Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Zero Hardy 6600 Series Load Cells Without Hardy Controller | Oxmaint Community">
    <meta property="og:description" content="Hello, I currently have a set of three tanks equipped with Hardy 6600 series load cells. While two of the tanks are functioning well within calibration tolerances, the third tank is showing a negative value in both gross and net weight readings. Despite the value increasing as weight is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-zero-hardy-6600-series-load-cells-without-hardy-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Zero Hardy 6600 Series Load Cells Without Hardy Controller | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I currently have a set of three tanks equipped with Hardy 6600 series load cells. While two of the tanks are functioning well within calibration tolerances, the third tank is showing a negative value in both gross and net weight readings. Despite the value increasing as weight is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-zero-hardy-6600-series-load-cells-without-hardy-controller"
      },
      "headline": "How to Zero Hardy 6600 Series Load Cells Without Hardy Controller",
      "description": "Hello, I currently have a set of three tanks equipped with Hardy 6600 series load cells. While two of the tanks are functioning well within calibration tolerances, the third tank is showing a negative value in both gross and net weight readings. Despite the value increasing as weight is",
      "author": {
        "@type": "Person",
        "name": "Ryan_Flowers"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-21",
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
                <h1 class="text-white">How to Zero Hardy 6600 Series Load Cells Without Hardy Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Ryan_Flowers</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">270</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">14</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I currently have a set of three tanks equipped with Hardy 6600 series load cells. While two of the tanks are functioning well within calibration tolerances, the third tank is showing a negative value in both gross and net weight readings. Despite the value increasing as weight is applied, the program is unable to process this and displays zero on the HMI. Previous experience with these load cells and their controllers has allowed for zeroing, taring, and calibration adjustments. However, the lack of a controller between the load cells and analog input card presents a challenge in zeroing the values. Is there a method to zero these readings without a Hardy controller present? The HMI and PLC logic do not seem to offer a solution. Any insights or guidance on resolving this issue would be greatly appreciated. Attached are photos for reference. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I previously utilized a setup similar to that, consisting of 4 weigh stations equipped with 4 load cells each. Below, you can access instructions on how to calibrate each station. I have included two examples for your reference, but for more detailed guidance, visit hardysolutions.com for access to all manuals and additional examples.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Please view the attached document. I have a collection of manuals available. Feel free to contact me via private message to receive all of the manuals.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your help. I successfully set up the HI6600 Weight Processor Modular Sensor System by following the Quick Start guide and HI6600 User Guide Book to configure my TCP/IPv4 settings for the correct network and node. I was able to access and adjust the settings and operations through a web browser, eliminating the need for a Hardy interface. It's convenient to be able to perform these tasks without additional equipment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ryan_Flowers</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I zero Hardy 6600 series load cells without a Hardy controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - To zero Hardy 6600 series load cells without a Hardy controller, you can try using external devices or manual methods for zeroing the readings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be causing a negative value in gross and net weight readings on one of the tanks equipped with Hardy 6600 series load cells?</h4>
<p class='text-muted'><strong>Answer:</strong> - A negative value in weight readings could be due to calibration issues, sensor malfunctions, or improper connections. Troubleshooting these factors may help resolve the discrepancy.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I address the issue of the program displaying zero on the HMI despite the weight increasing on the tank with the problematic load cells?</h4>
<p class='text-muted'><strong>Answer:</strong> - You may need to explore alternative methods for zeroing or recalibrating the load cells, such as using manual adjustments or seeking technical support from Hardy or a relevant expert in the field.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What options are available if the HMI and PLC logic do not provide a solution for zeroing the values of the Hardy 6600 series load cells?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the HMI and PLC logic do not offer a solution, consider reaching out to Hardy customer support for guidance on alternative methods or tools that can be used to zero the load cells without a controller.</p>
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
