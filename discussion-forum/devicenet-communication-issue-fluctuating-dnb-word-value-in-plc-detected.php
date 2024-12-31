
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Issue: An anomaly was detected in the Programmable Logic Controller (PLC) where the value of the DNB word (Local:X:I.Data[x]) fluctuates rapidly and unpredictably when explicit messages are triggered alongside implicit communication (IO message). Method: The erratic behavior occurs when explicit messages are sent via devicenet using tools like RSLinx">
    <meta name="keywords" content="devicenet communication issue, plc dnb word value fluctuation, programmable logic controller anomaly, implicit communication in plc, devicenet explicit messages, rslogix devicenet communication">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/devicenet-communication-issue-fluctuating-dnb-word-value-in-plc-detected">
    <title>Devicenet Communication Issue: Fluctuating DNB Word Value in PLC Detected | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Devicenet Communication Issue: Fluctuating DNB Word Value in PLC Detected | Oxmaint Community">
    <meta property="og:description" content="Issue: An anomaly was detected in the Programmable Logic Controller (PLC) where the value of the DNB word (Local:X:I.Data[x]) fluctuates rapidly and unpredictably when explicit messages are triggered alongside implicit communication (IO message). Method: The erratic behavior occurs when explicit messages are sent via devicenet using tools like RSLinx">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/devicenet-communication-issue-fluctuating-dnb-word-value-in-plc-detected">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Devicenet Communication Issue: Fluctuating DNB Word Value in PLC Detected | Oxmaint Community">
    <meta name="twitter:description" content="Issue: An anomaly was detected in the Programmable Logic Controller (PLC) where the value of the DNB word (Local:X:I.Data[x]) fluctuates rapidly and unpredictably when explicit messages are triggered alongside implicit communication (IO message). Method: The erratic behavior occurs when explicit messages are sent via devicenet using tools like RSLinx">
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
        "@id": "https://community.oxmaint.com/discussion-forum/devicenet-communication-issue-fluctuating-dnb-word-value-in-plc-detected"
      },
      "headline": "Devicenet Communication Issue: Fluctuating DNB Word Value in PLC Detected",
      "description": "Issue: An anomaly was detected in the Programmable Logic Controller (PLC) where the value of the DNB word (Local:X:I.Data[x]) fluctuates rapidly and unpredictably when explicit messages are triggered alongside implicit communication (IO message). Method: The erratic behavior occurs when explicit messages are sent via devicenet using tools like RSLinx",
      "author": {
        "@type": "Person",
        "name": "maurob"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-24",
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
                <h1 class="text-white">Devicenet Communication Issue: Fluctuating DNB Word Value in PLC Detected</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>maurob</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">364</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">480</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Issue: An anomaly was detected in the Programmable Logic Controller (PLC) where the value of the DNB word (Local:X:I.Data[x]) fluctuates rapidly and unpredictably when explicit messages are triggered alongside implicit communication (IO message). Method: The erratic behavior occurs when explicit messages are sent via devicenet using tools like RSLinx or RSLogix. Monitoring the Local:X:I.Data[x] word through RSLogix trend reveals the fluctuation. An example scenario involves an unchanged IO value when the device is idle, but the value fluctuates briefly before returning to normal at random intervals. This issue persists until explicit messages cease, resulting in a stable IO value. Details: The problematic machine comprises seven PLCs with multiple networks and devices. Testing on three PLCs showed the issue in at least one network. The problem consistently arises with Siemens Micro Master 440 Inverter and TR Electronic Encoder devices configured in DNB as polled. Various communication adjustments failed to resolve the issue, prompting the need for further investigation and potential alternative solutions.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear @Ken Roach, I would greatly appreciate your assistance. Thank you in advance for your help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>maurob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears there may be an address conflict occurring, with two instances attempting to write to the same address. If this issue arises specifically when triggering MSG instructions, it is important to closely examine the defined addresses and lengths for potential errors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee suggests that the issue may be an address conflict, where two instances are attempting to write to the same address. If the problem occurs only when triggering MSG instructions, it is important to check the addresses and lengths carefully. Thank you for the support. This could potentially explain the error message from RSLogix. However, the issue also occurs when browsing in RSLinx. What could be causing this problem in that scenario?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>maurob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the benefits of browsing RSLinx before and after editing your explicit messages. Explore the advantages of using RSLinx for message clarification and optimization.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>maurob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Over the years, you have shown interest in my posts regarding DeviceNet troubleshooting. Many of these posts are from twenty years ago, when I was an expert in troubleshooting multi-vendor compatibility, compliance, and reliability issues related to this popular technology. However, I no longer work for Rockwell Automation, the ODVA, or any vendors whose products you may be using.

Your system is unique as it consists of both third-party devices and DeviceNet safety products, which operate differently from standard cyclic data exchange and I/O tag mapping. It is possible for the DNB to inaccurately handle explicit message responses, potentially placing the data in the wrong location within the system.

Troubleshooting this issue may require a protocol analyzer to examine the data on the network and identify any disruptions. Additionally, testing the system by sending explicit messages through alternative devices on the network can help pinpoint where the problem lies - whether it's with the slave devices, the DNB, or the data routing process.

Be sure to gather firmware revisions for both the ControlLogix and 1756-DNB modules, and consider utilizing other tools and resources at your disposal. This comprehensive approach will help in diagnosing and resolving the issues you are facing with your DeviceNet system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello and thank you, Ken, for your response. I want to be upfront and say that my initial intention was not to simply give "likes" for attention, but subconsciously I must have been seeking help. While browsing the forum for devicenet reports, I found around 30 results relevant to my case, with many being your posts. I truly appreciate your numerous contributions to this forum, as they have been extremely valuable.

Regarding the information you requested, 6 PLCs are experiencing issues with Siemens MM440 drives across multiple networks. Here are the details:
- PLC CPU model: 1756-L62S with firmware 20.18 on all 6 PLCs;
- Scanner models: 1756 DNB/E with firmware 12.5 (on 5 networks) and 1756 DNB/D with firmware 11.3 (on 4 networks);
- Unfortunately, we do not have a protocol analyzer and are unlikely to invest in one. I also looked into the wiresahark dissector, but it seems additional hardware is needed.

I have tried using NetAlert devicenetmeter, but no errors were indicated when the problem occurred. Apart from the provided information, I do not have much else to offer. I believe the issue may lie in the devices' firmware, but I lack the resources to further investigate.

I am intrigued by your suggested method but require clarification on how to isolate the scanner as the source of the message. Could you provide guidance on this? 

Following today's tests (23082024), I discovered that configuring polled IO assemblies beyond the default (8/8) results in error 72. Even with adjusted communication values, the intermittent error persists. Could this be a limitation of the device's firmware?

I will continue testing with the limited resources available to me. Any assistance would be greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>maurob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Eating disorders (EDs) are serious mental health conditions that affect millions of people worldwide. If left untreated, eds can have devastating consequences on individuals' physical and emotional well-being. It is important to seek professional help if you or someone you know is struggling with eds.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>maurob</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is causing the fluctuating DNB word value in the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The fluctuating DNB word value in the PLC is caused by the combination of explicit messages being triggered alongside implicit communication (IO message) via devicenet.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I monitor the fluctuation of the DNB word value in the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can monitor the fluctuation of the DNB word value in the PLC by using tools like RSLinx or RSLogix to observe the Local:X:I.Data[x] word and track its behavior over time.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Which devices are specifically affected by this communication issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The problematic machine comprises seven PLCs with multiple networks and devices, where the issue consistently arises with Siemens Micro Master 440 Inverter and TR Electronic Encoder devices configured in DNB as polled.</p>
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
