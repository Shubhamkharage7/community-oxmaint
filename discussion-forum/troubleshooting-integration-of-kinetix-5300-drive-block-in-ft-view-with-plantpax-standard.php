
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently working on integrating a Kinetix 5300 drive into my project using the PlantPAx standard in my configuration which includes FT View 11.00 and Logix Designer V34.01. I have utilized the AOI block raC_Dvc_K5300 along with its associated faceplate (raC-3_03-SE) raC_Dvc_K5300-Faceplate. Although I have installed the">
    <meta name="keywords" content="kinetix 5300 drive integration, ft view 00 configuration, plantpax standard, logix designer v01, aoi block rac_dvc_k">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-integration-of-kinetix-5300-drive-block-in-ft-view-with-plantpax-standard">
    <title>Troubleshooting Integration of Kinetix 5300 Drive Block in FT View with PlantPAX Standard | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Integration of Kinetix 5300 Drive Block in FT View with PlantPAX Standard | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently working on integrating a Kinetix 5300 drive into my project using the PlantPAx standard in my configuration which includes FT View 11.00 and Logix Designer V34.01. I have utilized the AOI block raC_Dvc_K5300 along with its associated faceplate (raC-3_03-SE) raC_Dvc_K5300-Faceplate. Although I have installed the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-integration-of-kinetix-5300-drive-block-in-ft-view-with-plantpax-standard">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Integration of Kinetix 5300 Drive Block in FT View with PlantPAX Standard | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently working on integrating a Kinetix 5300 drive into my project using the PlantPAx standard in my configuration which includes FT View 11.00 and Logix Designer V34.01. I have utilized the AOI block raC_Dvc_K5300 along with its associated faceplate (raC-3_03-SE) raC_Dvc_K5300-Faceplate. Although I have installed the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-integration-of-kinetix-5300-drive-block-in-ft-view-with-plantpax-standard"
      },
      "headline": "Troubleshooting Integration of Kinetix 5300 Drive Block in FT View with PlantPAX Standard",
      "description": "Hello, I am currently working on integrating a Kinetix 5300 drive into my project using the PlantPAx standard in my configuration which includes FT View 11.00 and Logix Designer V34.01. I have utilized the AOI block raC_Dvc_K5300 along with its associated faceplate (raC-3_03-SE) raC_Dvc_K5300-Faceplate. Although I have installed the",
      "author": {
        "@type": "Person",
        "name": "JLE_1"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-27",
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
                <h1 class="text-white">Troubleshooting Integration of Kinetix 5300 Drive Block in FT View with PlantPAX Standard</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JLE_1</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">179</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">22</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently working on integrating a Kinetix 5300 drive into my project using the PlantPAx standard in my configuration which includes FT View 11.00 and Logix Designer V34.01. I have utilized the AOI block "raC_Dvc_K5300" along with its associated faceplate "(raC-3_03-SE) raC_Dvc_K5300-Faceplate". Although I have installed the block and declared its I/O variables on the PLC side, I am encountering errors when trying to display the faceplate in runtime on FT View. 

Upon reviewing the faceplate properties, I noticed that a parameter "#2" is being used. In an attempt to resolve the issue, I created a parameter code sheet where I input the "#2" as follows: #2={/DATA_AREA::[PLC]raC_Dvc_K5300}. However, even after adding this code, I continue to receive a stream of errors such as 'The Item is no longer available' and 'Expression contains a tag that has an error value'. It seems that the problem may lie in the type of data being entered in parameter "#2" as I have tried entering various data types used by the block without success.

I am seeking guidance on how to successfully implement this faceplate or any documentation that could assist me in resolving this issue. Your assistance is greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The DVC faceplates are typically accessed by starting from a more generic object, such as the PMTR faceplate, using the universal button found in the Toolbox's Common Objects global object display. It is unclear why errors are occurring in your setup, as the button and DVC displays indicate that the #2 parameter should point to the entire DVC object, specifically the raC_Dvc_K5300 UDT tag. It is important to use the tag name and not the AOI name. Are they the same in your situation?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing errors when trying to display the faceplate for the Kinetix 5300 drive in FT View?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Errors when displaying the faceplate could be due to issues with parameter configuration, data types, or incorrect setup of the block and associated variables.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve errors related to the parameter "2" in the faceplate for the Kinetix 5300 drive?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address errors related to parameter "2", ensure that the parameter code sheet is correctly configured with the appropriate data from the PLC side and that the data types match the requirements of the block.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any specific troubleshooting steps or documentation available to help with integrating the Kinetix 5300 drive block in FT View using the PlantPAx standard?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting steps may involve verifying the setup of the AOI block and faceplate, checking data types and parameter configurations, and consulting relevant documentation or support resources for guidance on resolving integration issues.</p>
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
