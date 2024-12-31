
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As we upgrade an old system running Steeplechase and Citect with Devicenet to Wago, I am looking for assistance with determining the IO addressing. Although I have past experience with Steeplechase, I am unfamiliar with Devicenet. I am wondering if the Devicenet Master device contains the necessary information. According">
    <meta name="keywords" content="upgrading system, steeplechase to wago, devicenet, io addressing, wago system upgrade, citect and devicenet, devicenet master device, io addressing assistance, steeplechase tag">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/upgrading-system-from-steeplechase-to-wago-with-devicenet-assisting-with-io-addressing">
    <title>Upgrading System from Steeplechase to Wago with Devicenet: Assisting with IO Addressing | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Upgrading System from Steeplechase to Wago with Devicenet: Assisting with IO Addressing | Oxmaint Community">
    <meta property="og:description" content="As we upgrade an old system running Steeplechase and Citect with Devicenet to Wago, I am looking for assistance with determining the IO addressing. Although I have past experience with Steeplechase, I am unfamiliar with Devicenet. I am wondering if the Devicenet Master device contains the necessary information. According">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/upgrading-system-from-steeplechase-to-wago-with-devicenet-assisting-with-io-addressing">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Upgrading System from Steeplechase to Wago with Devicenet: Assisting with IO Addressing | Oxmaint Community">
    <meta name="twitter:description" content="As we upgrade an old system running Steeplechase and Citect with Devicenet to Wago, I am looking for assistance with determining the IO addressing. Although I have past experience with Steeplechase, I am unfamiliar with Devicenet. I am wondering if the Devicenet Master device contains the necessary information. According">
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
        "@id": "https://community.oxmaint.com/discussion-forum/upgrading-system-from-steeplechase-to-wago-with-devicenet-assisting-with-io-addressing"
      },
      "headline": "Upgrading System from Steeplechase to Wago with Devicenet: Assisting with IO Addressing",
      "description": "As we upgrade an old system running Steeplechase and Citect with Devicenet to Wago, I am looking for assistance with determining the IO addressing. Although I have past experience with Steeplechase, I am unfamiliar with Devicenet. I am wondering if the Devicenet Master device contains the necessary information. According",
      "author": {
        "@type": "Person",
        "name": "tmorgan"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-18",
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
                <h1 class="text-white">Upgrading System from Steeplechase to Wago with Devicenet: Assisting with IO Addressing</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tmorgan</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">230</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">297</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>As we upgrade an old system running Steeplechase and Citect with Devicenet to Wago, I am looking for assistance with determining the IO addressing. Although I have past experience with Steeplechase, I am unfamiliar with Devicenet. I am wondering if the Devicenet Master device contains the necessary information. According to my Steeplechase Handbook, only tag names are used in Steeplechase. Any guidance on this matter would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the DeviceNet master required to be on the device running Steeplechase software? My experience with Steeplechase involves mapping data from DeviceNet nodes to tag names. On a different note, I recall a training session on Cutler Hammer's version of Steeplechase where the first exercise was creating a flowchart for a start/stop pushbutton seal and latch circuit. I pointed out the irony of using Steeplechase for a task better suited for ladder logic, especially since the flowchart solution appeared messy. The instructor criticized my perspective as having a negative attitude.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve, I may have been mistaken in my terminology. There is a DeviceNet device located near the computer that I initially thought was capable of certain functions, but it could actually be a scanner device. I will be visiting the site next week to access the PC and investigate the devices present. Unfortunately, the previous integrator did not provide any drawings, so we need to locate the addressing information as this facility has numerous IO spread across multiple nodes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tmorgan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize communication between Steeplechase and a DeviceNet master, a mapping table within the Steeplechase application is necessary. This table will link specific inputs or outputs from a DeviceNet node to corresponding tagnames in Steeplechase, whether Steeplechase is the DeviceNet master or simply communicates with one. This mapping ensures seamless integration and efficient operation of the connected devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Steve!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tmorgan</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Q: How can I determine IO addressing when upgrading from a system running Steeplechase and Citect with Devicenet to Wago?
    When transitioning from Steeplechase and Citect with Devicenet to Wago, you may need to refer to the Devicenet Master device for necessary information on IO addressing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is IO addressing handled differently in Devicenet compared to Steeplechase?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, in Devicenet, the IO addressing may differ from Steeplechase where only tag names are used. Understanding the structure and setup of Devicenet can help in determining the IO addressing for the upgrade.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can I rely on my past experience with Steeplechase for IO addressing in the new Wago system?</h4>
<p class='text-muted'><strong>Answer:</strong> While past experience with Steeplechase can be helpful, familiarity with Devicenet and the specifics of the Wago system will be crucial in determining the correct IO addressing during the upgrade process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I ensure a smooth transition to Wago with Devicenet when it comes to IO addressing?</h4>
<p class='text-muted'><strong>Answer:</strong> Seeking guidance from resources such as the Devicenet Master device, manuals, and possibly consulting with experts can assist in understanding and setting up the IO addressing effectively during the system upgrade.</p>
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
