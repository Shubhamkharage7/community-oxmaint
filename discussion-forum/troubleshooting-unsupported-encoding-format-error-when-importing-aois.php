
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have limited experience with servos and servo drives. Currently, we are implementing Kinetix 5100 servo drives for a new project. I am in the process of setting up the system to begin testing. I encountered issues with the AOI/AOP from Rockwell. Despite successfully adding the User-Defined">
    <meta name="keywords" content="troubleshooting, unsupported encoding format, importing aois, servos, servo drives, kinetix 5100, rockwell, user-defined data types, compactlogix 5370, logix designer, aoi">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-unsupported-encoding-format-error-when-importing-aois">
    <title>Troubleshooting Unsupported Encoding Format Error When Importing AOIs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Unsupported Encoding Format Error When Importing AOIs | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have limited experience with servos and servo drives. Currently, we are implementing Kinetix 5100 servo drives for a new project. I am in the process of setting up the system to begin testing. I encountered issues with the AOI/AOP from Rockwell. Despite successfully adding the User-Defined">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-unsupported-encoding-format-error-when-importing-aois">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Unsupported Encoding Format Error When Importing AOIs | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have limited experience with servos and servo drives. Currently, we are implementing Kinetix 5100 servo drives for a new project. I am in the process of setting up the system to begin testing. I encountered issues with the AOI/AOP from Rockwell. Despite successfully adding the User-Defined">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-unsupported-encoding-format-error-when-importing-aois"
      },
      "headline": "Troubleshooting Unsupported Encoding Format Error When Importing AOIs",
      "description": "Hello everyone, I have limited experience with servos and servo drives. Currently, we are implementing Kinetix 5100 servo drives for a new project. I am in the process of setting up the system to begin testing. I encountered issues with the AOI/AOP from Rockwell. Despite successfully adding the User-Defined",
      "author": {
        "@type": "Person",
        "name": "J. Feldman"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-22",
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
                <h1 class="text-white">Troubleshooting Unsupported Encoding Format Error When Importing AOIs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>J. Feldman</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">350</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">456</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have limited experience with servos and servo drives. Currently, we are implementing Kinetix 5100 servo drives for a new project. I am in the process of setting up the system to begin testing. I encountered issues with the AOI/AOP from Rockwell. Despite successfully adding the User-Defined data types from the AOI file, I encountered an error ("Unsupported Encoding Format") when trying to import an AOI. Any insights on what might be causing this issue? Details of the system are as follows: PLC - CompactLogix 5370 (1769-L18ER-BB1B), rev. 24.13, Controls Software - Logix Designer ver. 24.02, Drive - Kinetix 5100 Servo Drives, AOI - Ver. 2.01.01, AOP - Ver. 2.01.17, Drive Software - KNX5100C ver. 4.0. Any assistance would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is possible that I am mistaken, but I do not believe that controller is equipped for motion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Scottryan03</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am of the opinion that it ought to be, as Rockwell/AB has stated that it is.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>J. Feldman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I need to review some details before proceeding with the update.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Check out page 4 of the document from Rockwell Automation to learn more about the motion capabilities of the 1769-L18ERM-BB1B.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>P_control</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This company does not belong to the M brand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When attempting to start a new project using the PLC specified as an Allen Bradley L18ERM, I encountered a recurring issue while importing Add-On Instructions (AOIs) and noticed that the Kinetix 5100 module was not appearing in the list of available modules.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>J. Feldman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is highly unlikely that the CPU supports it, as Logix typically filters out incompatible modules. You may want to consider using a 1756-L85 as an alternative option.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I attempted using a 1756-L71, a commonly used model in our facility. The error message persisted, and the Kinetix 5100 was still not appearing as an available option.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>J. Feldman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you attempted importing it with the project configured for a newer PLC firmware version? This thread could provide valuable insights. It is worth noting that the current AOP version is 4.001. Update: Upon testing, it was discovered that Kinetix 5100 modules are not visible for addition in v24, but are in v34. It seems that they may not be supported in firmware versions below a certain threshold.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce suggested trying to import the project with a newer PLC firmware version, as discussed in this relevant post. It seems that the current AOP version is 4.001. Upon testing, it was found that Kinetix 5100 modules are not available in version 24 but are in version 34, indicating potential lack of support for older firmware versions. I came across this post while searching for a solution. My version is already post-v20, meeting the requirements mentioned. Although I started with the latest AOP version 4.001, I encountered issues and had to revert to the latest available AOI file and its corresponding AOP. It is possible that my Logix Designer version is outdated and in need of an update.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>J. Feldman</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. Question: What could be causing the "Unsupported Encoding Format" error when trying to import an AOI in the described setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "Unsupported Encoding Format" error when importing an AOI could be due to compatibility issues between the versions of the AOI/AOP, the PLC, and the software being used.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I resolve the issue of encountering an "Unsupported Encoding Format" error while importing an AOI/AOP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve the error, ensure that the versions of the AOI, AOP, PLC, and drive software are compatible with each other. Updating the software versions to align with the recommended versions by the manufacturers might help resolve the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Is there specific documentation or guidelines available for troubleshooting the "Unsupported Encoding Format" error related to importing AOIs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can refer to the official documentation provided by Rockwell Automation for troubleshooting specific errors like the "Unsupported Encoding Format." Additionally, reaching out to Rockwell Automation's technical support for assistance with resolving this particular error could be beneficial.</p>
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
