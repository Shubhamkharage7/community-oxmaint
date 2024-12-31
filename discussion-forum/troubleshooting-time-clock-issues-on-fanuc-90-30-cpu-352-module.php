
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We have acquired an IC693CPU352 module, but are experiencing issues with its internal time clock. Despite being able to initially set the time and date, it does not progress and remains static. Our program that relies on this internal clock is not functioning as a result. Are there any">
    <meta name="keywords" content="fanuc 90-30 cpu 352 time clock troubleshooting, ic693cpu352 module time clock issues, fanuc 90-30 cpu 352 internal clock not progressing, troubleshooting fan">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-time-clock-issues-on-fanuc-90-30-cpu-352-module">
    <title>Troubleshooting Time Clock Issues on Fanuc 90-30 CPU 352 Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Time Clock Issues on Fanuc 90-30 CPU 352 Module | Oxmaint Community">
    <meta property="og:description" content="We have acquired an IC693CPU352 module, but are experiencing issues with its internal time clock. Despite being able to initially set the time and date, it does not progress and remains static. Our program that relies on this internal clock is not functioning as a result. Are there any">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-time-clock-issues-on-fanuc-90-30-cpu-352-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Time Clock Issues on Fanuc 90-30 CPU 352 Module | Oxmaint Community">
    <meta name="twitter:description" content="We have acquired an IC693CPU352 module, but are experiencing issues with its internal time clock. Despite being able to initially set the time and date, it does not progress and remains static. Our program that relies on this internal clock is not functioning as a result. Are there any">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-time-clock-issues-on-fanuc-90-30-cpu-352-module"
      },
      "headline": "Troubleshooting Time Clock Issues on Fanuc 90-30 CPU 352 Module",
      "description": "We have acquired an IC693CPU352 module, but are experiencing issues with its internal time clock. Despite being able to initially set the time and date, it does not progress and remains static. Our program that relies on this internal clock is not functioning as a result. Are there any",
      "author": {
        "@type": "Person",
        "name": "Arknsparc"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-03",
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
                <h1 class="text-white">Troubleshooting Time Clock Issues on Fanuc 90-30 CPU 352 Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Arknsparc</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">335</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">50</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>We have acquired an IC693CPU352 module, but are experiencing issues with its internal time clock. Despite being able to initially set the time and date, it does not progress and remains static. Our program that relies on this internal clock is not functioning as a result. Are there any settings, internal battery checks, or configuration adjustments that can be made to troubleshoot this problem effectively?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The CPU module's data sheet refers to it as a "battery-backed clock", leaving uncertainty about whether it is powered by a separate battery or shares the battery with the RAM memory. If the clock is not keeping time even when the CPU is powered, a potential issue could be a failed RTC clock chip. An unlikely troubleshooting option would be to check the SVC_REQ function that manages the clock operations. This function is used for both setting and reading the clock, with the value in the first %R register of the parameter block determining the operation (read or write). If this parameter was accidentally changed, it could explain the continuous writing to the clock observed in the ladder logic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When examining the CPU module's data sheet, it refers to the clock as "battery-backed", raising the question of whether it has a dedicated battery for the clock or if it shares with the RAM memory. If the clock fails to keep time despite the CPU being powered, it could be indicative of a malfunction in the RTC clock chip. A potential troubleshooting step could involve checking the SVC_REQ function that interacts with the clock. This function handles both setting and reading the clock, with the first %R register determining the action (read or write). An accidental change in this parameter could result in continuous writing to the clock. After consulting with an experienced PLC specialist, it seems that the programming aligns with expectations. However, if the issue persists, physically inspecting the CPU for a battery may be necessary. Thank you for your insights and assistance in addressing this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Arknsparc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to the RAM memory's battery backup, it typically relies on the power supply module's battery. The CPU module features a connection for a battery, allowing you to disconnect the CPU from the baseplate without losing the connection to the battery. Upon inspection of my CPU351, similar to your CPU352, I did not find a component resembling a labeled battery. Instead, there is a large capacitor (labeled C11) that can sustain RAM for approximately thirty minutes. It should be noted that this is different from a laptop motherboard's battery that maintains RTC memory.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I find it interesting that the battery connection on the CPU is located behind the front cover, which can only be accessed by removing the module. Thanks to your insight, I now know that it's a capacitor and not a strange-looking battery. This whole situation started when we had to replace the power supply due to a faulty comm link, resulting in the loss of configuration. Our initial upload before installing the new power supply failed to download properly, causing us to suspect that the CPU was faulty due to 300+ conflicting address errors. It turned out that our recent upload was the issue. We had to contact our vendor for their version of our configuration, which is now working, except for the clock function. After discussing with you, I plan to test the original CPU, which had a functioning clock and no confirmed issues. Ultimately, I hope to determine the operational status of the original CPU and possibly return the recently purchased CPU module with the faulty clock.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Arknsparc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The battery connection on the CPU serves as a convenient feature that allows for easy backup storage of a CPU module without the need for installation in a rack with a power supply. This feature also enables users to effortlessly transport a CPU module with programmed data to another machine for evaluation. Additionally, it provides the flexibility to experiment with different programs on different CPUs, allowing users to easily revert back to their original setup after testing new configurations. This convenient feature enhances the overall usability and versatility of the CPU module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I troubleshoot time clock issues on a Fanuc 90-30 CPU 352 module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot time clock issues on a Fanuc 90-30 CPU 352 module, you can check the internal battery, review the settings related to the clock, and make any necessary configuration adjustments.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why does the time and date on my IC693CPU352 module not progress and remain static?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The time and date on your IC693CPU352 module may not progress due to issues with the internal clock settings, internal battery, or configuration adjustments. It is recommended to check these factors to resolve the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take to ensure that my program relying on the internal clock functions properly?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To ensure that your program relying on the internal clock functions properly, it is important to address the time clock issues by checking the internal battery, adjusting settings, and making any necessary configuration changes on the Fanuc 90-30 CPU 352 module.</p>
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
