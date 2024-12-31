
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Within a 5380 series controller, I have implemented logic to track the duration of events by capturing the start and end times and calculating the elapsed time. I use a GSV instruction triggered by a one-shot to retrieve the date and time from the PLCs Real-Time Clock (RTC). By">
    <meta name="keywords" content="plc real-time clock, rtc accuracy, timer accumulated value, duration calculation, gsv instruction, microseconds value, elapsed time calculation, dint data type, rounding issue, seconds value, timer .acc value, plc logic">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/comparing-cl-5380-real-time-clock-rtc-with-timer-accumulated-value-accuracy-concerns">
    <title>Comparing CL 5380 Real-Time Clock (RTC) with Timer Accumulated Value: Accuracy Concerns | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Comparing CL 5380 Real-Time Clock (RTC) with Timer Accumulated Value: Accuracy Concerns | Oxmaint Community">
    <meta property="og:description" content="Within a 5380 series controller, I have implemented logic to track the duration of events by capturing the start and end times and calculating the elapsed time. I use a GSV instruction triggered by a one-shot to retrieve the date and time from the PLCs Real-Time Clock (RTC). By">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/comparing-cl-5380-real-time-clock-rtc-with-timer-accumulated-value-accuracy-concerns">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Comparing CL 5380 Real-Time Clock (RTC) with Timer Accumulated Value: Accuracy Concerns | Oxmaint Community">
    <meta name="twitter:description" content="Within a 5380 series controller, I have implemented logic to track the duration of events by capturing the start and end times and calculating the elapsed time. I use a GSV instruction triggered by a one-shot to retrieve the date and time from the PLCs Real-Time Clock (RTC). By">
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
        "@id": "https://community.oxmaint.com/discussion-forum/comparing-cl-5380-real-time-clock-rtc-with-timer-accumulated-value-accuracy-concerns"
      },
      "headline": "Comparing CL 5380 Real-Time Clock (RTC) with Timer Accumulated Value: Accuracy Concerns",
      "description": "Within a 5380 series controller, I have implemented logic to track the duration of events by capturing the start and end times and calculating the elapsed time. I use a GSV instruction triggered by a one-shot to retrieve the date and time from the PLCs Real-Time Clock (RTC). By",
      "author": {
        "@type": "Person",
        "name": "JZerb"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-24",
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
                <h1 class="text-white">Comparing CL 5380 Real-Time Clock (RTC) with Timer Accumulated Value: Accuracy Concerns</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JZerb</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">186</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">241</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Within a 5380 series controller, I have implemented logic to track the duration of events by capturing the start and end times and calculating the elapsed time. I use a GSV instruction triggered by a one-shot to retrieve the date and time from the PLC's Real-Time Clock (RTC). By dividing the timer's accumulated value by 1000, I convert the duration into seconds for display. However, I am facing an issue where the division by 1000 rounds down the value, for example, 22999 rounds down to 22 when using a DINT data type as the destination for the DIV instruction.

My concern lies with the accuracy of the PLC's RTC and the GSV instruction. Will the seconds value read from the RTC be rounded as well? I suspect the seconds value is derived from the microseconds value of the RTC, causing discrepancies in the calculated elapsed time compared to the timer's .ACC value. Despite GSV occasionally displaying the correct elapsed time, there are instances where a one-second discrepancy occurs, aligning with the rounding of the timer's .ACC DINT value.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When performing integer division in ControlLogix, keep in mind that it truncates rather than rounding down. This means that the remainder is not included in the result, only the quotient. If you need to find the remainder, you can use the Modulo (MOD) command or include a REAL tag in your arguments.

For those using a 5380 series controller, the firmware should support math operations on LINT datatypes. This allows you to calculate elapsed microseconds by getting the CurrentValue of WallClockTime at the start and end of an event and subtracting the end value from the start value. No need for an RTO in this scenario.

The Seconds value of Wall Clock Time is not rounded; it increases by 1 when the Microseconds value increases by 1,000,000.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your feedback, Ken. I considered comparing the two GSV instructions as you suggested, but there may be interruptions during the process. Simply calculating the start and finish times and performing math on them could lead to inaccuracies due to potential pauses in the process. I want to avoid any issues that may arise from rounding values, such as when dividing 22999 by 1000 resulting in 22 with a remainder of 999 potentially being rounded up to 23. It is crucial that the WallClockTimes accurately depict the start and finish times of the process in relation to the RTO. While testing the code, I have observed that the WallClockTimes are precise, but the calculated elapsed time has occasionally been off by a second. Knowing that the seconds value will only increment when the microseconds value reaches 1,000,000 provides clarity and reassurance in the accuracy of the calculations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JZerb</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Is there a way to prevent the rounding down issue when converting the timer's accumulated value to seconds using the DIV instruction in a 5380 series controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One approach could be to use a different data type or method for the division operation to avoid rounding down the value.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How accurate is the Real-Time Clock (RTC) in a 5380 series controller when retrieving date and time information using the GSV instruction?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The accuracy of the RTC depends on the specific model and manufacturer of the PLC. It is advisable to consult the PLC's documentation for information on the RTC's accuracy specifications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Could discrepancies in calculated elapsed time between the RTC's seconds value and the timer's accumulated value be caused by the RTC's microseconds value being used for time calculation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is possible that discrepancies in elapsed time calculations could arise from differences in the resolution or precision of the timer's accumulated value and the RTC's time representation. Further investigation into the timing mechanisms and data handling may be needed to address this issue.</p>
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
