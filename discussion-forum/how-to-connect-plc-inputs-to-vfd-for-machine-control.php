
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently testing the use of a PLC LOGO for controlling some pre-existing controls within a machine. Programmable outputs on my Drive are being utilized to trigger the contacts on the logo, including functions like zero speed, active alarm, and drive ready. Although I have limited experience with">
    <meta name="keywords" content="plc inputs connection to vfd, machine control with plc and vfd, plc logo programming for machine control, drive output connections to plc inputs, troubleshooting plc input recognition issues">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-plc-inputs-to-vfd-for-machine-control">
    <title>How to Connect PLC Inputs to VFD for Machine Control | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect PLC Inputs to VFD for Machine Control | Oxmaint Community">
    <meta property="og:description" content="I am currently testing the use of a PLC LOGO for controlling some pre-existing controls within a machine. Programmable outputs on my Drive are being utilized to trigger the contacts on the logo, including functions like zero speed, active alarm, and drive ready. Although I have limited experience with">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-plc-inputs-to-vfd-for-machine-control">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect PLC Inputs to VFD for Machine Control | Oxmaint Community">
    <meta name="twitter:description" content="I am currently testing the use of a PLC LOGO for controlling some pre-existing controls within a machine. Programmable outputs on my Drive are being utilized to trigger the contacts on the logo, including functions like zero speed, active alarm, and drive ready. Although I have limited experience with">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-plc-inputs-to-vfd-for-machine-control"
      },
      "headline": "How to Connect PLC Inputs to VFD for Machine Control",
      "description": "I am currently testing the use of a PLC LOGO for controlling some pre-existing controls within a machine. Programmable outputs on my Drive are being utilized to trigger the contacts on the logo, including functions like zero speed, active alarm, and drive ready. Although I have limited experience with",
      "author": {
        "@type": "Person",
        "name": "drivebodger"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-04",
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
                <h1 class="text-white">How to Connect PLC Inputs to VFD for Machine Control</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>drivebodger</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">260</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">115</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently testing the use of a PLC LOGO for controlling some pre-existing controls within a machine. Programmable outputs on my Drive are being utilized to trigger the contacts on the logo, including functions like zero speed, active alarm, and drive ready. Although I have limited experience with PLC programming, I have successfully created a program that works well in simulation. However, I am encountering an issue where the PLC is not recognizing inputs from the 24V outputs of the drive when actually in use. How can I establish a connection to receive inputs from an external source like the output from the drive? It seems that the circuits may need to be connected in some way for proper functionality.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you using the 24 vdc model of the LOGO! system? Additionally, are the drive outputs typically open contacts or transistors? Do you happen to have the LOGO! manual on hand for reference?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After trying a different method that initially failed, I successfully linked the 0v of my drive to the 0v of my PLC power supply. The digital outputs of my drive operate at 24v. Is this the proper connection method to ensure functionality?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drivebodger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the LOGO! 24 vdc model and its drive outputs - are they normally open contacts or transistor-based? Seeking guidance from the LOGO! manual for clarification. Currently utilizing digital input and contact output, but encountering issues with linked 0v. Is this setup safe for both devices?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drivebodger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Connecting the common resources offers a consistent point of reference and is the recommended approach to take. This method of connecting the commons is an effective way to streamline processes and foster collaboration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I connect PLC inputs to a VFD for machine control?</h4>
<p class='text-muted'><strong>Answer:</strong> - To connect PLC inputs to a VFD for machine control, you need to establish a proper connection between the output of the drive and the input of the PLC. Make sure the circuits are connected appropriately for the signals to be recognized by the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is the PLC not recognizing inputs from the 24V outputs of the drive?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue of the PLC not recognizing inputs from the 24V outputs of the drive could be due to improper wiring or configuration. Double-check the connections and ensure that the signals are correctly transmitted from the drive to the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot the problem of the PLC not recognizing inputs from the drive during actual use?</h4>
<p class='text-muted'><strong>Answer:</strong> - Start by verifying the wiring connections between the drive and the PLC. Ensure that the signals are being transmitted correctly, and check for any potential issues with configuration settings on both the drive and the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps can I take to establish a reliable connection between the PLC and the VFD for machine control?</h4>
<p class='text-muted'><strong>Answer:</strong> - To establish a reliable connection between the PLC and the VFD, follow the manufacturer's guidelines for wiring and configuration. Test the connection thoroughly and troubleshoot any issues that may arise during the testing phase.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Are there specific programming considerations I should keep in mind when connecting PLC inputs to a VFD?</h4>
<p class='text-muted'><strong>Answer:</strong> - When connecting PLC inputs to a VFD, ensure that the programming in the PLC is set</p>
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
