
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello PLC Talk Community! Can anyone provide insight on the 1756-DNB Diagnostic Counters and their significance? These counters can be accessed through RSLinx, as shown in the attached photos, which display diagnostic error counts and the process of clearing the counters. I am on a quest to enhance my">
    <meta name="keywords" content="1756-dnb bus-off errors, troubleshooting 1756-dnb errors, 1756-dnb diagnostic counters, rslinx diagnostic error counts, clearing 175">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-1756-dnb-bus-off-errors-insights-and-solutions">
    <title>Troubleshooting 1756-DNB Bus-Off Errors: Insights and Solutions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 1756-DNB Bus-Off Errors: Insights and Solutions | Oxmaint Community">
    <meta property="og:description" content="Hello PLC Talk Community! Can anyone provide insight on the 1756-DNB Diagnostic Counters and their significance? These counters can be accessed through RSLinx, as shown in the attached photos, which display diagnostic error counts and the process of clearing the counters. I am on a quest to enhance my">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-1756-dnb-bus-off-errors-insights-and-solutions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 1756-DNB Bus-Off Errors: Insights and Solutions | Oxmaint Community">
    <meta name="twitter:description" content="Hello PLC Talk Community! Can anyone provide insight on the 1756-DNB Diagnostic Counters and their significance? These counters can be accessed through RSLinx, as shown in the attached photos, which display diagnostic error counts and the process of clearing the counters. I am on a quest to enhance my">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-1756-dnb-bus-off-errors-insights-and-solutions"
      },
      "headline": "Troubleshooting 1756-DNB Bus-Off Errors: Insights and Solutions",
      "description": "Hello PLC Talk Community! Can anyone provide insight on the 1756-DNB Diagnostic Counters and their significance? These counters can be accessed through RSLinx, as shown in the attached photos, which display diagnostic error counts and the process of clearing the counters. I am on a quest to enhance my",
      "author": {
        "@type": "Person",
        "name": "Jaco van Niekerk"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-20",
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
                <h1 class="text-white">Troubleshooting 1756-DNB Bus-Off Errors: Insights and Solutions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jaco van Niekerk</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">968</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">113</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello PLC Talk Community! Can anyone provide insight on the 1756-DNB Diagnostic Counters and their significance? These counters can be accessed through RSLinx, as shown in the attached photos, which display diagnostic error counts and the process of clearing the counters. I am on a quest to enhance my troubleshooting skills for Bus-Off errors and understand their root causes. Despite reviewing Rockwell's DNB Manual and Knowledge Base, I am still struggling to pinpoint the exact origin of these errors, which can be quite challenging. Recently, I encountered a Network Status Error on a faulty DNet Comms Module, RDNA-01, which led to a Bus-Off error on the DNB Scanner. Although it was a guess, replacing an ABB ACS800 VSD seemed to resolve the issue, as the DNB Scanner has been running smoothly for about 7 hours now. However, I am still unsure of how and why the RDNA-01 DNet Comms Module could trigger a Bus-Off error on the DNB Scanner. I have also observed Bus-Off errors caused by Allen Bradley DNet Comms Modules in Power Flex VSDs, particularly when multiple devices are removed from the Devicenet Network during an MCC Power Failure. What could be causing these Bus-Off errors in such scenarios? Your insights are greatly appreciated. Thank you. - Jaco van Niekerk</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Jaco. CAN bus errors, which DeviceNet is based on, can stem from two main causes. The first cause, which I don't believe is the issue in your case, is when a device in the segment has a different baud rate than the scanner and other nodes. This mismatch can lead to CAN bus errors, potentially triggering the scanner to enter a bus off condition if the scanner's counter exceeds 256. This can require manual intervention or an automatic restart. When setting up a DeviceNet network or changing devices, this discrepancy may occur.

However, if you've had a machine running smoothly for years and suddenly encounter these issues, the root cause is likely related to faulty hardware. This could be due to poor termination, loose DeviceNet connectors, or a short circuit. To troubleshoot, try disconnecting nodes one by one to pinpoint the source of the error. Additionally, check for any sealed micro M12 field-attachable connectors that may be causing signal shorts.

It's also possible that the cable length exceeds ODVA specifications or the cumulative length of stubs surpasses the recommended values, though these issues would typically manifest earlier. The ODVA website offers a helpful publication on wiring and troubleshooting DeviceNet networks.

Ultimately, if all else fails, it may be necessary to replace a damaged device causing the errors.Disconnecting this device should stop the error generation. Good luck in resolving the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Alfredo,

Thank you for your detailed response. Unfortunately, I do not have a NetMeter or any diagnostic tool to help pinpoint the issue. If you could recommend a NetMeter for purchase, it would greatly simplify the process. In the meantime, I will continue to manually disconnect devices during planned shutdowns.

I started a new job about 7 months ago, and the bus-off issues are currently my main challenge. There is limited information about past incidents, with most people simply saying "it never used to be like this". Replacing the ABB ACS800 VSD Comms Module, RDNA-01, seems to have temporarily resolve the bus-off errors.

The DNet Network's Scanner is showing continuous error counters when viewed through RSLinx. I will need to systematically disconnect each device to identify the culprit, especially during situations where multiple devices are lost like during a power failure in the MCC to Allen Bradley Power Flex VSDs. Additionally, I will be checking the baud rates.

Thank you for your understanding.

Best regards,
Jaco.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jaco van Niekerk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Jaco, it's great to hear from you. The ABB ACS800's RDNA-01 has given us a helpful clue. Unfortunately, the NetMeter by Molex has been discontinued. You may want to try your luck finding it on eBay. Alternatively, GEMAC offers a tool called CANbus Tester 2 that can help identify MAC IDs of communicating nodes in real-time. This tool can plot the waveform of each MAC ID, providing valuable insights that would be challenging to decipher with just an oscilloscope. By analyzing the waveform, you can determine which nodes in the segment have good or bad communication signals, which can indicate potential issues like loose screws or damaged cables. While the CANbus Tester 2 is a bit pricey at over EUR 5K, there may be a more cost-effective solution for isolating specific nodes in the DeviceNet segment. Using two CAN to fiber-optics repeaters can help electrically isolate problematic nodes, allowing the PLC program's scan list to communicate effectively. This method can help identify the faulty node by observing a decrease in CAN errors when using the repeaters. Good luck with resolving the issue with your DeviceNet segment! If you'd like to explore the fiber optics repeaters option further, check out the link provided for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Alfredo, I am interested in exploring the Canbus Tester 2 as it could greatly assist in identifying MAC Addresses or identifying noise sources on the bus. This tool would save time compared to analyzing the network with an oscilloscope. The use of CAN Repeaters is an effective way to isolate the good and bad parts of the segment electrically. Wishing you all the best for 2024 and the upcoming New Year. Thank you and kind regards, Jaco.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jaco van Niekerk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Alfredo,

I am happy to report that the Bus-Off error problem with the ABB ACS800's RDNA-01 communications module has been successfully resolved for over 5 months now. This issue no longer persists, and the D-NET Error Count on RSLINX is no longer increasing.

Last week, I encountered and fixed a BUS-OFF Error on another 1756-DNB Module linked to Allen Bradley PowerFlex VSDs. Upon inspection with the Electrician in the MCC, we discovered a duplicate address causing the error. After addressing this issue, the BUS-OFF Error disappeared and the Error Counters have remained stable.

In my experience over the past 11 months in my current position, I have learned that BUS-OFF Errors can be attributed to faulty device (VSD) communications modules and duplicate addressing.

Best Regards,
Jaco</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jaco van Niekerk</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that you have become the go-to expert for DeviceNet within your company, Javi. Hopefully, your manager will recognize your expertise and consider providing a significant bonus at the close of the year. One possible reason for an increase in bus error count due to a DUP MAC ID is if the baud rate is set to auto detect. In auto detection mode, if there is no assigned connection, the device will attempt to determine the baud rate on its own. If the device uses a different baud rate than the scanner, errors can occur. To resolve this issue, setting a fixed baud rate using switches is recommended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the typo in Jaco's name.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the 1756-DNB Diagnostic Counters and how can they help in troubleshooting Bus-Off errors?</h4>
<p class='text-muted'><strong>Answer:</strong> - The 1756-DNB Diagnostic Counters provide error counts and can be accessed through RSLinx. They are useful in identifying issues and monitoring the health of the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are some common root causes of Bus-Off errors in Devicenet networks?</h4>
<p class='text-muted'><strong>Answer:</strong> - Bus-Off errors in Devicenet networks can be caused by issues such as faulty DNet Comms Modules, power failures in MCCs, or the removal of multiple devices from the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can Bus-Off errors triggered by specific devices like ABB ACS800 VSDs or Allen Bradley DNet Comms Modules be resolved?</h4>
<p class='text-muted'><strong>Answer:</strong> - Resolving Bus-Off errors triggered by specific devices may involve replacing the faulty device or conducting a thorough troubleshooting process to identify and address the root cause of the errors.</p>
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
