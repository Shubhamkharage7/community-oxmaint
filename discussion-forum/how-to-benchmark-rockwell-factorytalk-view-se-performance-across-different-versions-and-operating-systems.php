
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey there! Im currently exploring ways to benchmark the performance of Rockwell FactoryTalk View SE software across different versions and operating systems. After setting up this software in various environments for clients in British Columbia, the question that often arises is whether newer versions offer improved speed. Im curious">
    <meta name="keywords" content="rockwell factorytalk view se, benchmark performance, operating systems, hmi display, software versions, speed comparison, performance assessment, british columbia clients, hmi environments, tag values, vba scripting, pop-up loading, disk writing, tag retrieval">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-benchmark-rockwell-factorytalk-view-se-performance-across-different-versions-and-operating-systems">
    <title>How to Benchmark Rockwell FactoryTalk View SE Performance Across Different Versions and Operating Systems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Benchmark Rockwell FactoryTalk View SE Performance Across Different Versions and Operating Systems | Oxmaint Community">
    <meta property="og:description" content="Hey there! Im currently exploring ways to benchmark the performance of Rockwell FactoryTalk View SE software across different versions and operating systems. After setting up this software in various environments for clients in British Columbia, the question that often arises is whether newer versions offer improved speed. Im curious">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-benchmark-rockwell-factorytalk-view-se-performance-across-different-versions-and-operating-systems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Benchmark Rockwell FactoryTalk View SE Performance Across Different Versions and Operating Systems | Oxmaint Community">
    <meta name="twitter:description" content="Hey there! Im currently exploring ways to benchmark the performance of Rockwell FactoryTalk View SE software across different versions and operating systems. After setting up this software in various environments for clients in British Columbia, the question that often arises is whether newer versions offer improved speed. Im curious">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-benchmark-rockwell-factorytalk-view-se-performance-across-different-versions-and-operating-systems"
      },
      "headline": "How to Benchmark Rockwell FactoryTalk View SE Performance Across Different Versions and Operating Systems",
      "description": "Hey there! Im currently exploring ways to benchmark the performance of Rockwell FactoryTalk View SE software across different versions and operating systems. After setting up this software in various environments for clients in British Columbia, the question that often arises is whether newer versions offer improved speed. Im curious",
      "author": {
        "@type": "Person",
        "name": "Leo S"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-18",
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
                <h1 class="text-white">How to Benchmark Rockwell FactoryTalk View SE Performance Across Different Versions and Operating Systems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Leo S</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">419</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">138</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey there! I'm currently exploring ways to benchmark the performance of Rockwell FactoryTalk View SE software across different versions and operating systems. After setting up this software in various environments for clients in British Columbia, the question that often arises is whether newer versions offer improved speed.

I'm curious if anyone has suggestions on how to create an HMI display that can consistently assess the performance of an HMI across various versions and operating systems. My current concept involves creating an HMI display that loads 30 pop-ups, aborts them, writes text files to the disk using VBA on each page, and retrieves complex derived tag values while a stopwatch runs in a docked menu bar.

Have you ever attempted anything similar to this? I would greatly appreciate hearing about your experiences or any ideas for constructing a tool like this. Your insights would be invaluable. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have recently created a GFX file to monitor CPU and Disk Write Speed due to limited options available. My plan is to expand this file to include Disk Read Speed, various gauges, and performance metrics. This tool can be valuable when diagnosing and troubleshooting performance issues for system integrators. The file was developed in FTView 13 SE and the disk write speed test involves creating a text file on the c:\ drive, so ensure that View has the necessary permissions to write to that location.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Leo S</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The tool has been recently updated to launch and close 100 displays, providing a measurement of time difference. For detailed installation instructions, refer to the .zip file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Leo S</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I benchmark the performance of Rockwell FactoryTalk View SE across different versions and operating systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - One way to benchmark the performance is by creating an HMI display that loads pop-ups, writes text files, retrieves tag values, and runs a stopwatch to assess speed across versions and operating systems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Do newer versions of Rockwell FactoryTalk View SE offer improved performance?</h4>
<p class='text-muted'><strong>Answer:</strong> - The question of whether newer versions offer improved speed is a common concern when setting up the software in different environments. Benchmarking performance can help determine if there are performance improvements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Has anyone attempted creating a tool to assess Rockwell FactoryTalk View SE performance like described in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you have attempted to create a tool to assess performance by loading pop-ups, writing text files, retrieving tag values, and running a stopwatch, we would love to hear about your experiences and insights on constructing such a tool.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are some key considerations when benchmarking Rockwell FactoryTalk View SE performance?</h4>
<p class='text-muted'><strong>Answer:</strong> - Key considerations when benchmarking performance include the number of tasks performed, the complexity of operations, and the consistency of the testing methodology across different versions and operating systems.</p>
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
