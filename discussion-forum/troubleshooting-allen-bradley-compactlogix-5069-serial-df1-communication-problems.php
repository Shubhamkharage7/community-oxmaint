
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I recently upgraded a customers Allen Bradley PLC system from an SLC5/05 to a Compactlogix, utilizing the 5069-serial card for maintaining df1 serial communication through mds orbit radios. This new setup includes a polling master communicating with over 20 remote sites using df1 over unlicensed mds orbit radio">
    <meta name="keywords" content="allen bradley compactlogix troubleshooting, 5069-serial df1 communication issues, allen bradley plc upgrade problems, df1 serial communication troubleshooting, compactlogix 5069-serial card setup">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-compactlogix-5069-serial-df1-communication-problems">
    <title>Troubleshooting Allen Bradley Compactlogix 5069-Serial DF1 Communication Problems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Allen Bradley Compactlogix 5069-Serial DF1 Communication Problems | Oxmaint Community">
    <meta property="og:description" content="Hello, I recently upgraded a customers Allen Bradley PLC system from an SLC5/05 to a Compactlogix, utilizing the 5069-serial card for maintaining df1 serial communication through mds orbit radios. This new setup includes a polling master communicating with over 20 remote sites using df1 over unlicensed mds orbit radio">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-compactlogix-5069-serial-df1-communication-problems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Allen Bradley Compactlogix 5069-Serial DF1 Communication Problems | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I recently upgraded a customers Allen Bradley PLC system from an SLC5/05 to a Compactlogix, utilizing the 5069-serial card for maintaining df1 serial communication through mds orbit radios. This new setup includes a polling master communicating with over 20 remote sites using df1 over unlicensed mds orbit radio">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-compactlogix-5069-serial-df1-communication-problems"
      },
      "headline": "Troubleshooting Allen Bradley Compactlogix 5069-Serial DF1 Communication Problems",
      "description": "Hello, I recently upgraded a customers Allen Bradley PLC system from an SLC5/05 to a Compactlogix, utilizing the 5069-serial card for maintaining df1 serial communication through mds orbit radios. This new setup includes a polling master communicating with over 20 remote sites using df1 over unlicensed mds orbit radio",
      "author": {
        "@type": "Person",
        "name": "heatfireash"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-01",
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
                <h1 class="text-white">Troubleshooting Allen Bradley Compactlogix 5069-Serial DF1 Communication Problems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>heatfireash</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">300</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">255</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I recently upgraded a customer's Allen Bradley PLC system from an SLC5/05 to a Compactlogix, utilizing the 5069-serial card for maintaining df1 serial communication through mds orbit radios. This new setup includes a polling master communicating with over 20 remote sites using df1 over unlicensed mds orbit radio frequencies. However, I have encountered communication issues since the upgrade. The polling routine was transferred from logix500 to studio5000, with only minor alterations such as using the previous MSG .EN bit to trigger the next message instead of using CLR statements as before. It seems that the new serial card may have different timing requirements causing the noticeable decline in performance. I have included images of the communication port setup, revealing discrepancies in the available options. Has anyone encountered a similar situation and found a solution? Any advice or suggestions would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing the .EN bit in the trigger for the next message may not provide clear benefits. I was cautioned against enabling Duplicate detection due to inefficiencies. Monitoring the serial traffic and understanding the timing involved is crucial in identifying issues. The MDS Orbits are capable of capturing traffic as it passes through, providing valuable insights into the situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The .en bits may not have been essential, but the polling routine processes messages one at a time. Duplicate detection is enabled at the master and all remote sites by default, and I have not changed it. If this is the issue, I am surprised it has not had a greater impact on the SLC. I am unfamiliar with sniffing serial traffic. Would setting up a system on the network to capture and review it be helpful?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>heatfireash</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One way to troubleshoot connectivity issues is by performing a port capture on both the serial and LNRadio ports. By analyzing the captured data, you can check if the device is continually attempting to reconnect. This method can help in diagnosing persistent connection problems effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I distinctly remember the timeouts on the gateway I used were not flexible, but rather definitive. For example, if you set a 5-second timeout, the gateway would wait the full 5 seconds before processing the packet, regardless of when it was received. This can significantly slow down your operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing communication issues after upgrading from an SLC5/05 to a Compactlogix with a 5069-serial card?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The new serial card may have different timing requirements, causing a decline in performance. Minor alterations in the polling routine, such as changing how messages are triggered, could also contribute to the issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can discrepancies in communication port setup options impact the performance of df1 serial communication through mds orbit radios?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Differences in available options on the communication port setup could potentially affect the configuration needed for proper communication, leading to issues in maintaining connectivity with over 20 remote sites.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Has anyone encountered similar communication problems when using df1 over unlicensed mds orbit radio frequencies with Allen Bradley PLC systems?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Other users who have worked with similar setups may have encountered and resolved similar issues related to serial communication and timing requirements when transitioning to newer hardware and software platforms like Studio5000.</p>
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
