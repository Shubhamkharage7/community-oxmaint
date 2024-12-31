
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am new to using Intouch and System Platform software, but I have experience in PLC programming and SCADA systems. I have successfully created a custom graphics library in System Platform, which functions well when simulated through WindowMaker. I have added these graphics to an instance of">
    <meta name="keywords" content="troubleshooting graphic not available error, intouch system platform graphics, plc programming scada systems, custom graphics library system platform, windowmaker simulation intouch, intouchviewapp error resolution">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-graphic-not-available-error-in-intouch-system-platform">
    <title>Troubleshooting Graphic Not Available Error in Intouch System Platform | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Graphic Not Available Error in Intouch System Platform | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am new to using Intouch and System Platform software, but I have experience in PLC programming and SCADA systems. I have successfully created a custom graphics library in System Platform, which functions well when simulated through WindowMaker. I have added these graphics to an instance of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-graphic-not-available-error-in-intouch-system-platform">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Graphic Not Available Error in Intouch System Platform | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am new to using Intouch and System Platform software, but I have experience in PLC programming and SCADA systems. I have successfully created a custom graphics library in System Platform, which functions well when simulated through WindowMaker. I have added these graphics to an instance of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-graphic-not-available-error-in-intouch-system-platform"
      },
      "headline": "Troubleshooting Graphic Not Available Error in Intouch System Platform",
      "description": "Hello everyone! I am new to using Intouch and System Platform software, but I have experience in PLC programming and SCADA systems. I have successfully created a custom graphics library in System Platform, which functions well when simulated through WindowMaker. I have added these graphics to an instance of",
      "author": {
        "@type": "Person",
        "name": "roberryber"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-18",
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
                <h1 class="text-white">Troubleshooting Graphic Not Available Error in Intouch System Platform</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>roberryber</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1105</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">73</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am new to using Intouch and System Platform software, but I have experience in PLC programming and SCADA systems. I have successfully created a custom graphics library in System Platform, which functions well when simulated through WindowMaker. I have added these graphics to an instance of IntouchViewApp and published my application. However, when attempting to launch the app, I receive an error message stating "Graphic not available." Upon further inspection in the 'ArchestraSymbol' folder, I noticed that many of my graphics are missing (.vedef files). Can anyone advise on what I may be doing incorrectly?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Occasionally, issues can arise when graphics are not properly checked in during the development process. To troubleshoot, begin by ensuring that all files are closed in the IDE. Next, delete the published application, republish it, adjust its location in the application manager, and attempt to launch it again. This process can help resolve any errors related to graphic implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lostcontrol</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lostcontrol mentioned that occasionally, graphic issues may arise when they are not properly checked during the publishing process. To troubleshoot this, first ensure that all programs in the IDE are closed, then delete the published application. Afterward, republish the application, reposition it in the application manager, and try again. It is important to validate and create new graphics, starting with a simple square, to see if changes take effect upon publishing. It seems that only the oldest graphics are showing in the folder, indicating a possible issue with the .vedef files. Deleting unnecessary graphic toolsets like the Industrial Graphic Library may help streamline the project. However, after publishing, these graphics may disappear from the ArchestraSymbols folder. Make sure to click on the "Associate Galaxy Graphics" option and ensure that "Include all galaxy graphics with this application" is selected. If issues persist, consider reaching out for further assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>roberryber</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To resolve the issue, the steps taken included undeploying the InTouchViewApp instance and View Engine on the node, deleting the contents of the default local working directory (C:\ProgramData\Archestra\ManagedApp) for a deployed IntouchViewApp, removing the PbRefCache.bin file from the location C:\ProgramData\Archestra\Cache, and redeploying the View Engine and InTouchViewApp instance. These actions were necessary to rectify the issue and ensure proper functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>witecloud</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I encountering a "Graphic not available" error in my Intouch System Platform application?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "Graphic not available" error in Intouch System Platform can occur if the associated .vedef files for your graphics are missing in the 'ArchestraSymbol' folder. This typically indicates an issue with the graphic files or their location.</p>
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
