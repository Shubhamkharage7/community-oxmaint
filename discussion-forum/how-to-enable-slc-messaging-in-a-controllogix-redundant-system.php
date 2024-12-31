
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently configuring a redundant ControlLogix system that needs to communicate with a remote SLC PLC. However, Rockwell has stated that SLC messaging is not supported with the redundant ControlLogix setup. Is there a solution for this issue so that the program code can receive the necessary value">
    <meta name="keywords" content="slc messaging, controllogix redundant system, rockwell, remote slc plc, program code, redundant setup, communication issue, configuration, remote site, solution, value transfer, plc communication, troubleshooting, system compatibility, redundant configuration, data exchange">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-enable-slc-messaging-in-a-controllogix-redundant-system">
    <title>How to enable SLC messaging in a ControlLogix redundant system? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to enable SLC messaging in a ControlLogix redundant system? | Oxmaint Community">
    <meta property="og:description" content="I am currently configuring a redundant ControlLogix system that needs to communicate with a remote SLC PLC. However, Rockwell has stated that SLC messaging is not supported with the redundant ControlLogix setup. Is there a solution for this issue so that the program code can receive the necessary value">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-enable-slc-messaging-in-a-controllogix-redundant-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to enable SLC messaging in a ControlLogix redundant system? | Oxmaint Community">
    <meta name="twitter:description" content="I am currently configuring a redundant ControlLogix system that needs to communicate with a remote SLC PLC. However, Rockwell has stated that SLC messaging is not supported with the redundant ControlLogix setup. Is there a solution for this issue so that the program code can receive the necessary value">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-enable-slc-messaging-in-a-controllogix-redundant-system"
      },
      "headline": "How to enable SLC messaging in a ControlLogix redundant system?",
      "description": "I am currently configuring a redundant ControlLogix system that needs to communicate with a remote SLC PLC. However, Rockwell has stated that SLC messaging is not supported with the redundant ControlLogix setup. Is there a solution for this issue so that the program code can receive the necessary value",
      "author": {
        "@type": "Person",
        "name": "Alfredbeni"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-23",
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
                <h1 class="text-white">How to enable SLC messaging in a ControlLogix redundant system?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Alfredbeni</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">316</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">267</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently configuring a redundant ControlLogix system that needs to communicate with a remote SLC PLC. However, Rockwell has stated that SLC messaging is not supported with the redundant ControlLogix setup. Is there a solution for this issue so that the program code can receive the necessary value from the remote site? Any assistance would be greatly valued.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The redundancy feature in Logix 5580 (L8xE) does not allow for SLC messaging. In order to access this data and transfer it to Redundancy, it is recommended to utilize a different PLC. This PLC can either operate independently or be located within the 1756 IO chassis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize a bridge controller for communication between a redundant PLC and an SLC (System Level Controller). The PLC sends messages to the bridge controller through EIP, which can then communicate with the SLC (specifically a 505 model) using the native PCCC protocol. If using an older SLC 504, communication can also be established using DH+. Please note that "Conn" is a quicker typist.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently facing a similar issue with my SLC5/05, which is actually a third-party device and not a true SLC. It appears that creating a "Generic CIP" message could be the solution to moving forward. While I have found ample information on using Modbus for this task, there is a lack of resources on implementing "Generic CIP" messaging for SLCs. My remote device does support Modbus, and I am utilizing an L306 as a bridge. Does anyone have experience with using Generic CIP for SLCs?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Macbeth</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Learn about the SLC typed message formats detailed in document 1756-PM020, with a specific reference to page 79 containing information on SLC read A2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can SLC messaging be enabled in a redundant ControlLogix system for communication with a remote SLC PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, Rockwell has stated that SLC messaging is not supported with the redundant ControlLogix setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a solution to enable communication between a redundant ControlLogix system and a remote SLC PLC for data exchange?</h4>
<p class='text-muted'><strong>Answer:</strong> - One possible solution could be to explore alternative communication methods or protocols that are supported by both systems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can the program code in a redundant ControlLogix system receive the necessary value from a remote site if SLC messaging is not supported?</h4>
<p class='text-muted'><strong>Answer:</strong> - Consider implementing a workaround or intermediary system to facilitate the exchange of data between the ControlLogix system and the remote SLC PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any alternatives or best practices recommended for achieving communication between a redundant ControlLogix system and a remote SLC PLC without using SLC messaging?</h4>
<p class='text-muted'><strong>Answer:</strong> - It may be beneficial to consult Rockwell's technical support or documentation for guidance on alternative communication solutions or workarounds in this scenario.</p>
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
