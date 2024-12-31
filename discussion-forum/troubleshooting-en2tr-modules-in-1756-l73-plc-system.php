
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Good morning, I am currently working with a system involving a 1756 L73 PLC and Supervisor on EN2TR modules. While most functions are running smoothly, there is an issue with the EN2TR modules. The primary PLC (EN2TR (1)) is set to be the active supervisor with a precedence level">
    <meta name="keywords" content="1756 l73 plc troubleshooting, en2tr module issues, 1756 l73 plc supervisor problems, en2tr module redundancy, troubleshooting en2tr modules, plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-en2tr-modules-in-1756-l73-plc-system">
    <title>Troubleshooting EN2TR Modules in 1756 L73 PLC System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting EN2TR Modules in 1756 L73 PLC System | Oxmaint Community">
    <meta property="og:description" content="Good morning, I am currently working with a system involving a 1756 L73 PLC and Supervisor on EN2TR modules. While most functions are running smoothly, there is an issue with the EN2TR modules. The primary PLC (EN2TR (1)) is set to be the active supervisor with a precedence level">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-en2tr-modules-in-1756-l73-plc-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting EN2TR Modules in 1756 L73 PLC System | Oxmaint Community">
    <meta name="twitter:description" content="Good morning, I am currently working with a system involving a 1756 L73 PLC and Supervisor on EN2TR modules. While most functions are running smoothly, there is an issue with the EN2TR modules. The primary PLC (EN2TR (1)) is set to be the active supervisor with a precedence level">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-en2tr-modules-in-1756-l73-plc-system"
      },
      "headline": "Troubleshooting EN2TR Modules in 1756 L73 PLC System",
      "description": "Good morning, I am currently working with a system involving a 1756 L73 PLC and Supervisor on EN2TR modules. While most functions are running smoothly, there is an issue with the EN2TR modules. The primary PLC (EN2TR (1)) is set to be the active supervisor with a precedence level",
      "author": {
        "@type": "Person",
        "name": "desa"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-09",
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
                <h1 class="text-white">Troubleshooting EN2TR Modules in 1756 L73 PLC System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>desa</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">751</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">141</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Good morning, I am currently working with a system involving a 1756 L73 PLC and Supervisor on EN2TR modules. While most functions are running smoothly, there is an issue with the EN2TR modules. The primary PLC (EN2TR (1)) is set to be the active supervisor with a precedence level of 20, but this setting is also being applied to the secondary PLC (EN2TR (2)). Resetting EN2TR (2) causes the primary PLC (EN2TR (1)) to take over as the primary supervisor, but full redundancy cannot be achieved until EN2TR (2) has the same IP address as EN2TR (1). Once the IP addresses match, EN2TR (2) becomes the primary supervisor. How can I ensure that EN2TR (1) remains the master supervisor in the system? Thank you in advance for any assistance provided.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are having trouble with language, let me explain clearly: You are using a ControlLogix Redundancy system with DLR connections to both chassis. Initially, both EN2TRs have the same IP address, but during the Sync process, the secondary address increments by 1. Your goal is to always have the DLR supervisor on the Primary chassis. 

If the statements above are accurate, it is important to note that DLR operates differently. Both the Primary and Secondary EN2TR modules need to have the same DLR Supervisor precedence. If there are no other DLR supervisors, then the module with the smaller MAC address will become the Active supervisor. If you prefer a different setup, you will need to designate another DLR device as a supervisor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Contr_Conn's query, it seems that there may be some confusion regarding the ControlLogix Redundancy system with DLR setup. Both EN2TR modules initially have the same IP address, but during the Sync process, the secondary address increments by 1. The goal is to always have the DLR supervisor on the Primary chassis.

However, it is important to note that for DLR to function properly, both Primary and Secondary EN2TR modules must have the same DLR Supervisor precedence. If there are no other DLR supervisors present, the module with the smaller MAC address will become the Active supervisor. If this setup is not desired, another DLR device needs to be designated as a supervisor.

Upon swapping the EN2TR modules, the status "Active" is displayed on the EN2TR in the main PLC. You can see this configuration in the image below, where the left EN2TR is installed in the main PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>desa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As previously mentioned, the MAC address ending in CB:0D is lower than CC:15, which means the module with the higher MAC address becomes the DLR supervisor. It is important to note that both redundancy chassis are identical. When performing a switchover, the new primary chassis (formerly the secondary) will not automatically become the DLR supervisor unless you power off the former primary rack. The same issue arises if both chassis are powered on simultaneously – the primary chassis cannot be determined, whereas the DLR supervisor module is known. To address this issue, consider having a DLR supervisor located outside of the redundancy chassis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Contr_Conn explained that the MAC address with the ending CB:0D is lower than CC:15, making the second module the DLR supervisor. It's important to note that both redundancy chassis are identical. When initiating a switchover, the new primary chassis will not automatically become the DLR supervisor unless you power off the former primary rack. The same applies if both chassis are powered on simultaneously - the primary chassis is uncertain. To avoid this issue, consider having a DLR supervisor separate from the redundancy chassis. Thank you for the clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>desa</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I resolve the issue of EN2TR modules in a 1756 L73 PLC system where the primary PLC (EN2TR (1)) is taking over as the primary supervisor instead of remaining as the master supervisor?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To ensure EN2TR (1) remains the master supervisor in the system, you need to make sure that both EN2TR modules have unique IP addresses. Once EN2TR (2) has a different IP address from EN2TR (1), full redundancy can be achieved with EN2TR (1) as the primary supervisor.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why is the setting for the primary PLC (EN2TR (1)) being applied to the secondary PLC (EN2TR (2)) in a 1756 L73 PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue of the setting for the primary PLC being applied to the secondary PLC could be due to both EN2TR modules having the same IP address. To address this, ensure that EN2TR (1) and EN2TR (2) have unique IP addresses to prevent conflicts in the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I configure the EN2TR modules in a 1756 L73 PLC system to maintain full redundancy and ensure the correct supervisor hierarchy?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To configure the EN2TR modules for full redundancy and maintain the correct supervisor hierarchy, make sure that EN2TR (1) is set as</p>
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
