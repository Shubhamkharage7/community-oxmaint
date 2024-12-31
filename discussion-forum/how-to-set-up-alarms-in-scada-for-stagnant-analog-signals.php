
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am working with a compact Logix PLC and my current project involves setting up alarms in our SCADA system for when an analog signal becomes stagnant. Typically, the analog signal should be trending upward, but if it goes out of range and stops moving, I need to">
    <meta name="keywords" content="scada system alarms, analog signal alarms, plc alarm triggers, stagnant signal detection, logix plc alarms, alarms for stagnant analog signals, scada alarm">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-set-up-alarms-in-scada-for-stagnant-analog-signals">
    <title>How to Set Up Alarms in SCADA for Stagnant Analog Signals | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Set Up Alarms in SCADA for Stagnant Analog Signals | Oxmaint Community">
    <meta property="og:description" content="Hello, I am working with a compact Logix PLC and my current project involves setting up alarms in our SCADA system for when an analog signal becomes stagnant. Typically, the analog signal should be trending upward, but if it goes out of range and stops moving, I need to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-set-up-alarms-in-scada-for-stagnant-analog-signals">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Set Up Alarms in SCADA for Stagnant Analog Signals | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am working with a compact Logix PLC and my current project involves setting up alarms in our SCADA system for when an analog signal becomes stagnant. Typically, the analog signal should be trending upward, but if it goes out of range and stops moving, I need to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-set-up-alarms-in-scada-for-stagnant-analog-signals"
      },
      "headline": "How to Set Up Alarms in SCADA for Stagnant Analog Signals",
      "description": "Hello, I am working with a compact Logix PLC and my current project involves setting up alarms in our SCADA system for when an analog signal becomes stagnant. Typically, the analog signal should be trending upward, but if it goes out of range and stops moving, I need to",
      "author": {
        "@type": "Person",
        "name": "Ones_Zeros"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-29",
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
                <h1 class="text-white">How to Set Up Alarms in SCADA for Stagnant Analog Signals</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Ones_Zeros</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">394</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">38</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am working with a compact Logix PLC and my current project involves setting up alarms in our SCADA system for when an analog signal becomes stagnant. Typically, the analog signal should be trending upward, but if it goes out of range and stops moving, I need to configure a trigger in the PLC to send an output. This output will then be transmitted to our SCADA system as an alarm, indicating that there is an issue with the input that needs attention. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The user Ones_Zeros inquired about setting up alarms in a compact Logix PLC to monitor when an analog signal stops moving. Typically, the analog signal trends upward and if it reaches a certain level or stops moving, how can one configure the PLC to trigger an output? This data can then be fed into a SCADA system to alert of any issues with the input. Additionally, a stagnant analog signal could also indicate a potential leak.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ones_Zeros</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ones_Zeros inquired about setting up alarms in a compact Logix PLC to alert the SCADA system when an analog signal stops moving. The goal is to trigger an output in the PLC when the analog signal deviates from its normal upward trend. To achieve this, you can compare the current analog input value with a stored value, initiate a timer if they are equal, and generate an alarm when the timer expires. It's also important to periodically update the stored value with the current analog input to enable continuous monitoring. Consider incorporating deadbands to account for any drift in the analog input. This process will help identify any issues with the input and prompt timely action.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure critical system reliability, I suggest setting up redundant sensors connected to separate analog input modules in the PLC. Establish a tolerance between the two sensor readings. If the difference exceeds this tolerance, an alarm will be triggered to signify a potential sensor or module failure. This method has proven successful for many of my clients.

Create two tags named OLDINPUT_1 and OLDINPUT_2 to store the sensor readings. Compare the new sensor values to the saved values at set intervals. If the new values are not greater than the saved values, trigger an alarm. If both new values are greater, update the OLDINPUT tags. Repeat this process regularly.

Always set up and trigger alarms within the PLC, and display them on the HMI interface. It's also advisable to log these alarms for reference and analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for an Anti-Stall Timer? Set up a timer based on your alarm time setting. Monitor the analog values during each scan to check for any discrepancies with the last recorded value. If the values are not equal, the timer will reset. Make sure to account for variations in the analog signal by setting a tolerance or deadband range. If the timer reaches completion, an alarm condition will be triggered. Don't forget to update the last recorded analog value each scan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Attention "Beer_and_popcorn" Bros! You are invited to apply your algorithms to the blue curve. I propose the following algorithm: 
At the beginning, the ancillary variable is calculated as the measured value minus the noise amplitude (peak to peak). 
During each scan, if the ancillary variable is less than the measured value, the ancillary variable is adjusted by adding the slope factor (per scan time); otherwise, an alarm is triggered. 
If the difference between the measured value and the ancillary variable is less than the noise amplitude, the ancillary variable is set to the measured value minus the noise amplitude. 
The distribution mode is determined to be half of the slope factor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you all for the valuable feedback, I really appreciate it! Your input is truly appreciated and helps me improve.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ones_Zeros</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I set up alarms in SCADA for stagnant analog signals in a Logix PLC?
- To set up alarms for stagnant analog signals in a Logix PLC, you need to configure a trigger in the PLC to send an output when the analog signal becomes stagnant. This output will be transmitted to the SCADA system as an alarm, indicating an issue with the input.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the purpose of setting up alarms for stagnant analog signals in SCADA?</h4>
<p class='text-muted'><strong>Answer:</strong> - Setting up alarms for stagnant analog signals in SCADA helps in detecting when an analog signal stops moving or goes out of range, indicating a potential issue that requires attention. This proactive approach enables timely intervention to prevent or address problems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can you provide guidance on configuring triggers in a Logix PLC to detect stagnant analog signals?</h4>
<p class='text-muted'><strong>Answer:</strong> - Configuring triggers in a Logix PLC to detect stagnant analog signals involves setting up logic that monitors the trend of the analog signal. When the signal becomes stagnant or goes out of range, the trigger activates to send an output, which is then communicated to the SCADA system as an alarm.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I ensure the reliability and effectiveness of alarms for stagnant analog signals in SCADA?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure the reliability and effectiveness of alarms for stagnant analog signals in SCADA, it is important to regularly monitor and test the alarm configuration. Additionally, setting appropriate thresholds and response mechanisms in both the PLC and SCADA system can enhance the accuracy and responsiveness of the alarms.</p>
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
