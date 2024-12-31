
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! Currently, I am setting up a PowerFlex 753 drive that is linked to a PLC Micro 850 using Ethernet IP. I have successfully managed to oversee the operation command and frequency from the PLC. However, I am facing an issue where the drive needs to retain the frequency">
    <meta name="keywords" content="powerflex 753 drive, plc micro 850, ethernet ip communication, powerflex 753 frequency control, plc communication solutions, powerflex 753 command retention, powerflex">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/maintaining-frequency-and-command-on-powerflex-753-when-communication-with-plc-is-lost-solutions-and-insights">
    <title>Maintaining Frequency and Command on PowerFlex 753 when Communication with PLC is Lost: Solutions and Insights | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Maintaining Frequency and Command on PowerFlex 753 when Communication with PLC is Lost: Solutions and Insights | Oxmaint Community">
    <meta property="og:description" content="Greetings! Currently, I am setting up a PowerFlex 753 drive that is linked to a PLC Micro 850 using Ethernet IP. I have successfully managed to oversee the operation command and frequency from the PLC. However, I am facing an issue where the drive needs to retain the frequency">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/maintaining-frequency-and-command-on-powerflex-753-when-communication-with-plc-is-lost-solutions-and-insights">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Maintaining Frequency and Command on PowerFlex 753 when Communication with PLC is Lost: Solutions and Insights | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! Currently, I am setting up a PowerFlex 753 drive that is linked to a PLC Micro 850 using Ethernet IP. I have successfully managed to oversee the operation command and frequency from the PLC. However, I am facing an issue where the drive needs to retain the frequency">
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
        "@id": "https://community.oxmaint.com/discussion-forum/maintaining-frequency-and-command-on-powerflex-753-when-communication-with-plc-is-lost-solutions-and-insights"
      },
      "headline": "Maintaining Frequency and Command on PowerFlex 753 when Communication with PLC is Lost: Solutions and Insights",
      "description": "Greetings! Currently, I am setting up a PowerFlex 753 drive that is linked to a PLC Micro 850 using Ethernet IP. I have successfully managed to oversee the operation command and frequency from the PLC. However, I am facing an issue where the drive needs to retain the frequency",
      "author": {
        "@type": "Person",
        "name": "CarlosPM"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-21",
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
                <h1 class="text-white">Maintaining Frequency and Command on PowerFlex 753 when Communication with PLC is Lost: Solutions and Insights</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>CarlosPM</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">132</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">195</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! Currently, I am setting up a PowerFlex 753 drive that is linked to a PLC Micro 850 using Ethernet IP. I have successfully managed to oversee the operation command and frequency from the PLC. However, I am facing an issue where the drive needs to retain the frequency and command status if communication is lost between the PLC and the drive. After consulting the 20-750-ENETR manual, I attempted to adjust parameter P33 to a value of 3 as suggested. Unfortunately, this modification did not yield the desired results. Do you have any insights or suggestions on additional steps I may need to take?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is crucial for the customer to have a way to safely halt the drive to avoid potential legal issues. Make sure to also set Idle Fault to 3 in any case.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, robertmee expressed concerns about the need for customers to have an external means of stopping drives to avoid potential lawsuits. It's important to note that simply assuming a stopped state is safe may not always be accurate, especially in industries like cooling water pumps, reactor agitators, and offshore drilling pumps. While a hardwired stopping method is essential, some sectors prioritize keeping equipment running until destruction to protect lives and the environment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In certain scenarios, the safest option may be to keep equipment running, such as cooling water pumps, reactor agitators, and some offshore drilling pumps. However, it is crucial to have a secondary stopping method in place in case the primary control is lost. While some industries prioritize keeping equipment operational to prevent safety risks, it is essential to always have a backup plan for emergencies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I maintain frequency and command on PowerFlex 753 when communication with the PLC is lost?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To maintain frequency and command on PowerFlex 753 when communication is lost, you can adjust parameter P33 to a specific value as suggested in the 20-750-ENETR manual. However, if this does not work, further troubleshooting may be required.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What parameter should be adjusted on PowerFlex 753 to retain frequency and command status if communication with the PLC is lost?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Parameter P33 on the PowerFlex 753 drive can be adjusted to help retain frequency and command status in case of lost communication with the PLC. Refer to the manual for specific instructions on adjusting this parameter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  I tried adjusting parameter P33 on PowerFlex 753 as per the manual, but it didn't work. What should I do next?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If adjusting parameter P33 as suggested in the manual did not yield the desired results, consider seeking additional insights or suggestions from experts in the field or contacting technical support for further assistance.</p>
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
