
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I own a 1756-L83E PLC along with a PowerFlex 755 VFD. While working on a project, I noticed that the VFDs clock status shows it as not synchronized to the master clock, leading to the date and time resetting when the drive is powered off. I am curious about">
    <meta name="keywords" content="powerflex 755 vfd synchronization, plc clock synchronization, date and time accuracy in vfd, sync powerflex 755 with plc clock, setting vfd date and time, powerflex">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-sync-powerflex-755-vfd-with-plc-clock-for-date-and-time-accuracy">
    <title>How to Sync PowerFlex 755 VFD with PLC Clock for Date and Time Accuracy | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Sync PowerFlex 755 VFD with PLC Clock for Date and Time Accuracy | Oxmaint Community">
    <meta property="og:description" content="I own a 1756-L83E PLC along with a PowerFlex 755 VFD. While working on a project, I noticed that the VFDs clock status shows it as not synchronized to the master clock, leading to the date and time resetting when the drive is powered off. I am curious about">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-sync-powerflex-755-vfd-with-plc-clock-for-date-and-time-accuracy">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Sync PowerFlex 755 VFD with PLC Clock for Date and Time Accuracy | Oxmaint Community">
    <meta name="twitter:description" content="I own a 1756-L83E PLC along with a PowerFlex 755 VFD. While working on a project, I noticed that the VFDs clock status shows it as not synchronized to the master clock, leading to the date and time resetting when the drive is powered off. I am curious about">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-sync-powerflex-755-vfd-with-plc-clock-for-date-and-time-accuracy"
      },
      "headline": "How to Sync PowerFlex 755 VFD with PLC Clock for Date and Time Accuracy",
      "description": "I own a 1756-L83E PLC along with a PowerFlex 755 VFD. While working on a project, I noticed that the VFDs clock status shows it as not synchronized to the master clock, leading to the date and time resetting when the drive is powered off. I am curious about",
      "author": {
        "@type": "Person",
        "name": "Lovell"
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
                <h1 class="text-white">How to Sync PowerFlex 755 VFD with PLC Clock for Date and Time Accuracy</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Lovell</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2060</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">92</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I own a 1756-L83E PLC along with a PowerFlex 755 VFD. While working on a project, I noticed that the VFD's clock status shows it as not synchronized to the master clock, leading to the date and time resetting when the drive is powered off. I am curious about how to sync the VFD to the PLC, but I haven't found an option to enable this feature. Currently, the only options I have are to set the date and time from the workstation or to change it manually. It's frustrating to see all my VFDs revert to the default date of 1970 after a power reset.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Lovell has noted that all of his Variable Frequency Drives (VFDs) start performing a disco dance routine after a power reset in 1970. For more information on Unix time, visit https://en.wikipedia.org/wiki/Unix_time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure that the PF755 maintains the correct date and time after a power cycle, it is necessary to add a CR1220 battery to the primary circuit board. This will help the device retain its settings and avoid any date/time discrepancies during power interruptions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's frustrating that even though the drive is connected via Ethernet, it's not possible to update data on the VFD's date/time tags or utilize tools like the Logix 5000 time sync.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tonydmm2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a disappointing turn of events, tonydmm2 expressed frustration over the inability to write data to VFD's date/time tags despite using an Ethernet drive. The Logix 5000 time sync tool should logically work for this purpose, but it seems ineffective. Fortunately, there is a solution available for this issue. You have the option to write the date/time by following Tech Note QA16340.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently observed that the PLC functions as the time master, but the drives are not synchronized with it. Which specific time master are they trying to sync with?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I sync the clock of a PowerFlex 755 VFD with a 1756-L83E PLC for date and time accuracy?</h4>
<p class='text-muted'><strong>Answer:</strong> - To sync the clock of the PowerFlex 755 VFD with a PLC, you may need to use a synchronization feature or establish communication between the devices to update the date and time automatically.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why does the clock status of my PowerFlex 755 VFD show it as not synchronized to the master clock?</h4>
<p class='text-muted'><strong>Answer:</strong> - The clock status may show as not synchronized if the VFD is not configured to receive clock updates from the PLC or if there are communication issues between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a way to prevent the date and time from resetting on the VFD when powered off?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can prevent the date and time from resetting on the VFD by ensuring that it is synchronized with the PLC's clock or by using a backup power source to maintain the clock settings during power cycles.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I enable automatic clock synchronization between the PLC and VFD to avoid manual adjustments?</h4>
<p class='text-muted'><strong>Answer:</strong> - Check the user manuals of both the PLC and VFD to see if there are specific settings or instructions on enabling automatic clock synchronization between the devices. You may also consider using a time sync protocol such as SNTP or NTP for accurate timekeeping.</p>
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
