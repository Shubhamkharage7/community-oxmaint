
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have implemented datalogging on an S7-1211 PLC. Despite its basic features, the 1MB memory capacity seemed sufficient. Each log consists of 222 bytes and records an array of 21 UInt tags along with a timestamp during logging sessions. Surprisingly, after only 5 logs, a message indicating insufficient space">
    <meta name="keywords" content="siemens s7-1200 plc, troubleshooting data logging, memory capacity, data log size, insufficient space message, diagnostics page, web server, memory consumption, mmc, memory depletion, s7-1211 plc, uint">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-data-logging-memory-usage-on-siemens-s7-1200-plc">
    <title>Troubleshooting Data Logging Memory Usage on Siemens S7-1200 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Data Logging Memory Usage on Siemens S7-1200 PLC | Oxmaint Community">
    <meta property="og:description" content="I have implemented datalogging on an S7-1211 PLC. Despite its basic features, the 1MB memory capacity seemed sufficient. Each log consists of 222 bytes and records an array of 21 UInt tags along with a timestamp during logging sessions. Surprisingly, after only 5 logs, a message indicating insufficient space">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-data-logging-memory-usage-on-siemens-s7-1200-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Data Logging Memory Usage on Siemens S7-1200 PLC | Oxmaint Community">
    <meta name="twitter:description" content="I have implemented datalogging on an S7-1211 PLC. Despite its basic features, the 1MB memory capacity seemed sufficient. Each log consists of 222 bytes and records an array of 21 UInt tags along with a timestamp during logging sessions. Surprisingly, after only 5 logs, a message indicating insufficient space">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-data-logging-memory-usage-on-siemens-s7-1200-plc"
      },
      "headline": "Troubleshooting Data Logging Memory Usage on Siemens S7-1200 PLC",
      "description": "I have implemented datalogging on an S7-1211 PLC. Despite its basic features, the 1MB memory capacity seemed sufficient. Each log consists of 222 bytes and records an array of 21 UInt tags along with a timestamp during logging sessions. Surprisingly, after only 5 logs, a message indicating insufficient space",
      "author": {
        "@type": "Person",
        "name": "Puddle"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-15",
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
                <h1 class="text-white">Troubleshooting Data Logging Memory Usage on Siemens S7-1200 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">760</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">424</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have implemented datalogging on an S7-1211 PLC. Despite its basic features, the 1MB memory capacity seemed sufficient. Each log consists of 222 bytes and records an array of 21 UInt tags along with a timestamp during logging sessions. Surprisingly, after only 5 logs, a message indicating insufficient space appeared. The diagnostics page on the web server reveals that each log actually consumes 132.11KB. This discrepancy raises the question: am I overlooking something? Even with an MMC, it appears that the memory is depleting faster than anticipated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you checked the value of your DataLogCreate.Status and memory usage to troubleshoot any issues? The DataLogCreate.Status value may provide insights into the problem at hand. Additionally, monitoring memory usage can also help identify any potential issues. For more information, visit the link: https://www.plctalk.net/qanda/showthread.php?t=137603</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The error code 80B3 is indicating insufficient storage on the device, as the memory usage is already at 93.2%. Upon downloading a csv file, it should only take up 222B of space, but deleting the datalog frees up 132KB. It is surprising that larger logs have been stored on the PLC without a memory card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mas01 inquired if the provided link could help with their query regarding PLC data logging. After setting up the PLC to log at 720 logs every 2 minutes for a maximum of 24 hours, they noticed that the data size was larger than expected. This led them to adjust the log settings to optimize memory usage. However, upon further investigation, they discovered that the data was saved in a CSV file format, with each entry consisting of 217 characters. This sheds light on the discrepancy in data size compared to the expected log size. The challenge now lies in accurately determining the amount of data being utilized.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why is the memory usage on my Siemens S7-1200 PLC depleting faster than expected during data logging?
- The discrepancy in memory usage could be due to factors such as additional overhead, data formatting, or system variables that contribute to the increased consumption of memory during logging sessions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is the specified 1MB memory capacity on the S7-1211 PLC sufficient for data logging?</h4>
<p class='text-muted'><strong>Answer:</strong> - While the 1MB memory capacity may seem sufficient based on the data size per log, factors like actual memory consumption per log and other system variables can affect the available memory for logging purposes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I optimize memory usage during data logging on the Siemens S7-1200 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To optimize memory usage, consider reducing the size of each log entry, limiting the number of logs stored, reviewing the data formatting and storage method, or implementing periodic memory management practices to ensure efficient data logging operations.</p>
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
