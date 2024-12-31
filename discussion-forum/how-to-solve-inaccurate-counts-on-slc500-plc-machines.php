
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings to all! At my company, we utilize SLC500-based PLC machines to manufacture parts. Each time a part is produced, a counter increments and stores the count as an Integer. This allows us to view the count on the HMI and transmit it to Ignition Gateway for monitoring. The">
    <meta name="keywords" content="slc500 plc machines, plc machine part manufacturing, plc counter accuracy, hmi count monitoring, ignition gateway integration, integer count tracking, plc tracking product issues">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-solve-inaccurate-counts-on-slc500-plc-machines">
    <title>How to Solve Inaccurate Counts on SLC500 PLC Machines | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Solve Inaccurate Counts on SLC500 PLC Machines | Oxmaint Community">
    <meta property="og:description" content="Greetings to all! At my company, we utilize SLC500-based PLC machines to manufacture parts. Each time a part is produced, a counter increments and stores the count as an Integer. This allows us to view the count on the HMI and transmit it to Ignition Gateway for monitoring. The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-solve-inaccurate-counts-on-slc500-plc-machines">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Solve Inaccurate Counts on SLC500 PLC Machines | Oxmaint Community">
    <meta name="twitter:description" content="Greetings to all! At my company, we utilize SLC500-based PLC machines to manufacture parts. Each time a part is produced, a counter increments and stores the count as an Integer. This allows us to view the count on the HMI and transmit it to Ignition Gateway for monitoring. The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-solve-inaccurate-counts-on-slc500-plc-machines"
      },
      "headline": "How to Solve Inaccurate Counts on SLC500 PLC Machines",
      "description": "Greetings to all! At my company, we utilize SLC500-based PLC machines to manufacture parts. Each time a part is produced, a counter increments and stores the count as an Integer. This allows us to view the count on the HMI and transmit it to Ignition Gateway for monitoring. The",
      "author": {
        "@type": "Person",
        "name": "zachary.wilson"
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
                <h1 class="text-white">How to Solve Inaccurate Counts on SLC500 PLC Machines</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>zachary.wilson</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">492</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">248</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings to all! At my company, we utilize SLC500-based PLC machines to manufacture parts. Each time a part is produced, a counter increments and stores the count as an Integer. This allows us to view the count on the HMI and transmit it to Ignition Gateway for monitoring. The counts are consistently accurate to the actual production output.

However, there is an issue with another tracking product we use. Instead of simply reading the Integer (the same one displayed on the HMI and Ignition), this product detects changes in the Integer and counts them. This unconventional method sometimes results in inaccurate counts, with occasional instances of unusually high numbers like 65537, 2592, or 2675, disrupting the tally.

Despite my efforts to suggest reading the number directly instead of performing their own counting, the other team remains steadfast in their approach. I believe the issue lies on their end, but convincing them has proven challenging. Any insights on why these irregularities may be occurring from the PLC perspective? Your input is greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the speed at which the integer updates in the PLC, and what is the polling frequency for the ignition system or other methods used to retrieve data? Additionally, does the counter reset or roll over, and how is this accounted for in the system?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello robertmee, thank you for responding. The number updates approximately every 1.3 seconds (due to a press with a maximum speed of 45 spm). We monitor when the number decreases below its starting point. While I am unsure of their polling frequency, it appears to be capturing the data accurately. The team can only see the number, not the actual counter. At the start of each shift, the counter is reset to zero, which also resets the number. They have timestamps for the counts they receive, which do not coincide with the reset times. The counter has a maximum limit of 32767, but we are nowhere near that, usually reaching a maximum of 10000 in a shift, which is rare. I have attached a screenshot for reference – it should display all 1s. They have confirmed they are referencing N7:3, so I am unsure about the reference to c:c016.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>zachary.wilson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>With a value of 65537, the opposing party is utilizing 32-bit integers in their computations, whereas the PLC is working with 16-bit integers. The PLC is transferring the counter's .ACC value to N7:3. Is it possible that the other party's OPC is accessing both N7:3 and N7:4? If this is the case, does your team ever input data into N7:4?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The number 65537 exceeds the limit of a 16-bit number, with an unsigned int maxing out at 65535. This means that the maximum value for a signed integer, like the counter, is 32767. It appears that the system is actually retrieving 32 bits, specifically from N7:3 and possibly N7:4. Occasionally, both the first bit of N7:3 and N7:4 are high when data is retrieved. It is advisable to check if your program is interacting with N7:4 as well. Look into this issue promptly to ensure smooth operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As per the points raised by these individuals, it is important to note that 65537 is not a feasible value for a 16-bit Single Level Cell (SLC).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>65536 is represented by two 16-bit values of 1 placed consecutively (16#0001_0001). The question of "when" is often more important than "what" in this context.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am curious to know which third-party software is being utilized for this purpose. Is Ignition being used as the OPC server, or is a software similar to Kepware being utilized instead?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, thank you for your responses. I am puzzled as to why they are seeing the N7:4, as it does not seem to be the issue. I do not believe that would explain the values in the 2000 range; it could be related to the 63000 one instead. I have implemented a B bit that pulses for the same duration as the counter would count up, in an attempt to troubleshoot the issue. Unfortunately, we are still unsure of the root cause. I am utilizing the Ignition Gateway for tracking and counting parts, as well as maintaining a history for reference purposes, such as analyzing trends in pump pressure and temperature within the plant. Additionally, we utilize it to manage a database of badge numbers that have access permission to specific HMI pages. Any updates to this database are automatically synchronized with the PLC, streamlining the process of access control management across multiple machines. Another team within our organization is utilizing Hydra for inventory tracking, cost evaluations, and other related tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>zachary.wilson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I just wanted to provide a final update on this issue. After a call with them, I clarified the length they were seeking based on feedback received here. It turns out they were actually looking for a longer length, specifically related to N7:4 HMI screen calls. By toggling a few settings, we were able to address the issue causing their numbers to fluctuate. Instead of simply reading the number I provided, they were subtracting it from the previous number and adding it to their new total for some reason. After making a change on their end to only look for a word instead of a long length, the fluctuations ceased. Thank you for your patience, as this has been a persistent issue for quite some time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>zachary.wilson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate you for submitting the resolution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. Why are we experiencing inaccurate counts on our SLC500 PLC machines with another tracking product?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue of inaccurate counts may arise from the tracking product's method of detecting changes in the Integer count rather than reading the count directly. This unconventional counting approach can lead to discrepancies and inaccuracies in the tally.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are some examples of the inaccurate counts observed on the PLC machines?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some examples of inaccurate counts mentioned in the discussion include unusually high numbers like 65537, 2592, or 2675, which disrupt the accurate tally of production output.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can we address the issue of inaccurate counts caused by the tracking product's method?</h4>
<p class='text-muted'><strong>Answer:</strong> - To address the issue, it may be beneficial to communicate with the team responsible for the tracking product and suggest reading the Integer count directly instead of relying on detecting changes. Collaborative efforts to align counting methods can help ensure accurate tallying of production output.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What insights can we gain from the PLC perspective regarding the irregular count occurrences?</h4>
<p class='text-muted'><strong>Answer:</strong> - From the PLC perspective, the irregular count occurrences may be attributed to the discrepancy between directly reading the Integer count and detecting changes in the count. Understanding the differences in counting methods and their impact on tally accuracy can provide insights into resolving the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can we convince the other team to consider reading the Integer count directly for accurate tracking?</h4>
<p class='text-muted'><strong>Answer:</strong> - Convincing the other team to consider reading</p>
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
