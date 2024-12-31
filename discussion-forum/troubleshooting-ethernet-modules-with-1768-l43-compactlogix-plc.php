
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I have encountered a unique situation with a 1768-L43 PLC, equipped with input and output cards, along with a 1768-M04SE Sercos module that controls three Ultra 3000 drives. The system also includes an AB HMI connected via ethernet to a dumb switch. Recently, I introduced an Aventics valve">
    <meta name="keywords" content="troubleshooting ethernet modules, 1768-l43 compactlogix plc, 1768-m04se sercos module, ultra 3000 drives, ab hmi, ethernet ip communication module, aventics valve assembly, 176">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ethernet-modules-with-1768-l43-compactlogix-plc">
    <title>Troubleshooting Ethernet Modules with 1768-L43 CompactLogix PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Ethernet Modules with 1768-L43 CompactLogix PLC | Oxmaint Community">
    <meta property="og:description" content="Hello, I have encountered a unique situation with a 1768-L43 PLC, equipped with input and output cards, along with a 1768-M04SE Sercos module that controls three Ultra 3000 drives. The system also includes an AB HMI connected via ethernet to a dumb switch. Recently, I introduced an Aventics valve">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ethernet-modules-with-1768-l43-compactlogix-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Ethernet Modules with 1768-L43 CompactLogix PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I have encountered a unique situation with a 1768-L43 PLC, equipped with input and output cards, along with a 1768-M04SE Sercos module that controls three Ultra 3000 drives. The system also includes an AB HMI connected via ethernet to a dumb switch. Recently, I introduced an Aventics valve">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ethernet-modules-with-1768-l43-compactlogix-plc"
      },
      "headline": "Troubleshooting Ethernet Modules with 1768-L43 CompactLogix PLC",
      "description": "Hello, I have encountered a unique situation with a 1768-L43 PLC, equipped with input and output cards, along with a 1768-M04SE Sercos module that controls three Ultra 3000 drives. The system also includes an AB HMI connected via ethernet to a dumb switch. Recently, I introduced an Aventics valve",
      "author": {
        "@type": "Person",
        "name": "bob1371"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Troubleshooting Ethernet Modules with 1768-L43 CompactLogix PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bob1371</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">222</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">233</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I have encountered a unique situation with a 1768-L43 PLC, equipped with input and output cards, along with a 1768-M04SE Sercos module that controls three Ultra 3000 drives. The system also includes an AB HMI connected via ethernet to a dumb switch. Recently, I introduced an Aventics valve assembly with an Ethernet IP communication module. However, when attempting to add the generic ethernet module to the program, I realized that the option was not available. I believe that I may need to incorporate a 1768-ENBT module first, and then add the generic module under it. Can someone confirm if this assumption is correct, or if there is a simpler solution I am overlooking? Please refer to the attached images for further clarification. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you mention that the PLC module is linked to a basic switch and communicating through Ethernet, what method is currently utilized to establish this connection? Due to the absence of a built-in RJ45 port, is it possible for the 1768-L43 to facilitate this type of communication?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Etter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper functioning, it is necessary to incorporate the ENBT into the 1768 bus. The 1768 bus allows for the installation of up to 2 modules. It is worth noting that the SERCOS module occupies slot 2, leaving slot 1 empty. It is possible that there is already an ENBT in slot 1 of the 1768 bus (given that L43 lacks an Ethernet port), even though it may not be properly configured in the system. Placing the SERCOS module next to the controller in slot 2 may not be ideal for its performance. Would you be able to provide a photo of the chassis for further assessment?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You're absolutely right, Steve & dmroeder. While initially mistaken due to poor lighting in the panel, I discovered that there is indeed an Ethernet card situated to the left of the PLC module. However, it seems this card was never integrated into the project tree.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bob1371</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the help, everyone! I have successfully incorporated the new component into the project and implemented a universal adapter for the valve assembly. Everything is now functioning as intended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bob1371</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the option to add a generic Ethernet module not available in the program for my 1768-L43 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The generic Ethernet module may not be available because you need to first incorporate a 1768-ENBT module before adding the generic module under it.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I integrate an Aventics valve assembly with an Ethernet IP communication module into my existing setup with a 1768-L43 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To integrate the Aventics valve assembly with the Ethernet IP communication module, you may need to add a 1768-ENBT module and then proceed to add the generic Ethernet module for the valve assembly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can I directly add the Aventics valve assembly's Ethernet IP communication module to the program without the 1768-ENBT module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It seems that you may need to incorporate the 1768-ENBT module first before adding the generic Ethernet module for the Aventics valve assembly. This step could be necessary for proper integration and communication within the system.</p>
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
