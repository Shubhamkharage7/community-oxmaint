
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, We have encountered some issues with our PF 525 Inverters (25B-D024N114) 460V 11KW that are driving two 4KW motors (fans) with a Full Load Current (FLC) of 6.15A at 400V. Each motor has its own overload unit connected after the inverter output. One parameter that has been">
    <meta name="keywords" content="power flex 525 inverters, troubleshooting, current limit settings, pf 525 inverters, inverter issues, full load current, torque mode, parameter settings, motor overload, a484, a485, rockwell">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-current-limit-settings-on-power-flex-525-inverters">
    <title>Troubleshooting Current Limit Settings on Power Flex 525 Inverters | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Current Limit Settings on Power Flex 525 Inverters | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, We have encountered some issues with our PF 525 Inverters (25B-D024N114) 460V 11KW that are driving two 4KW motors (fans) with a Full Load Current (FLC) of 6.15A at 400V. Each motor has its own overload unit connected after the inverter output. One parameter that has been">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-current-limit-settings-on-power-flex-525-inverters">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Current Limit Settings on Power Flex 525 Inverters | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, We have encountered some issues with our PF 525 Inverters (25B-D024N114) 460V 11KW that are driving two 4KW motors (fans) with a Full Load Current (FLC) of 6.15A at 400V. Each motor has its own overload unit connected after the inverter output. One parameter that has been">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-current-limit-settings-on-power-flex-525-inverters"
      },
      "headline": "Troubleshooting Current Limit Settings on Power Flex 525 Inverters",
      "description": "Hello everyone, We have encountered some issues with our PF 525 Inverters (25B-D024N114) 460V 11KW that are driving two 4KW motors (fans) with a Full Load Current (FLC) of 6.15A at 400V. Each motor has its own overload unit connected after the inverter output. One parameter that has been",
      "author": {
        "@type": "Person",
        "name": "ian.smith7"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-11",
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
                <h1 class="text-white">Troubleshooting Current Limit Settings on Power Flex 525 Inverters</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ian.smith7</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">169</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">397</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone,

We have encountered some issues with our PF 525 Inverters (25B-D024N114) 460V 11KW that are driving two 4KW motors (fans) with a Full Load Current (FLC) of 6.15A at 400V. Each motor has its own overload unit connected after the inverter output. 

One parameter that has been misconfigured is P39 Torque Mode, which should be set at 0 (V/HZ) instead of the current setting of 1 (SVC). Additionally, there are some puzzling parameter settings:
- Motor NP OL Current P33 = 17A (default 24A)
- Motor NP FLA P34 = 16A (default 18.5A)
- Current Limit 1 A484 = 25.5A (default 36A)
- Current Limit 2 A485 = 18.7A (default 26.4A)

According to Rockwell literature and discussions on forums, it seems that P33 and P34 should remain at their default settings. The relationship between A484 and A485 in relation to P33 is unclear, especially considering that A485 does not exist in a PF520 inverter.

Unfortunately, information on A484 and A485 is scarce on the Rockwell website, with only the PF520 manual providing minimal details. Any insights or explanations on these settings would be greatly appreciated.

Thank you,
Ian</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>An overload current in a drive operates similarly to a standard starter's overload. When the current exceeds the overload current, the drive will build up thermal capacity according to the trip curve before tripping at over 100% thermal capacity. On the other hand, a current limit restricts the output current to prevent exceeding a set limit. Setting the limit too low, combined with load characteristics, can cause the drive to struggle to ramp up and accelerate further, potentially leading to issues. By implementing a current limit 2 option, users can switch between different current limits using digital inputs, such as option 26 "Current Lmt2", controlled by a toggle switch or PLC digital output. By default, the active current limit is current limit 1. This setup helps prevent overload faults by keeping the current below or at the set limit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, ian.smith7 raised concerns about the parameter settings for PF 525 Inverters driving two 4KW motors. The motors have overload units after the inverter output, with a FLC of 6.15A at 400V. The issue lies in parameter settings such as P33 and P34, which should not be left at default values. 

Specifically, P33 should reflect the Motors Nameplate FLA, while P34 should be calculated as the Motors Nameplate FLA multiplied by the Service Factor (typically 1.15). Moreover, questions were raised about the purpose and function of A484 and A485 in relation to P33, as well as the absence of A485 in PF520 models.

Despite efforts to find information on these settings on the Rockwell website, ian.smith7 has not been successful. Any insights or guidance on optimizing these parameters would be greatly appreciated. Thank you for your help. - Ian.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Imscar, thank you for your informative response. Rob, I appreciate your insight as well. I'm curious, why is it necessary to set P33 & P34 to match the motor nameplate value? In a scenario where two motors are connected through external overload trip units, should the values be multiplied by x1 or x2? If the answer is x1, what is the reason for this? Thank you, Ian.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ian.smith7</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ian Smith7 inquired about why P33 & P34 should be set to the motor nameplate value. Specifically, he asked if when two motors are connected through external overload trips units, should the value be x1 or x2. The answer is, if the motors have reliable separate overloads external to the VFD, you can set the motor OL current to a high number greater than the sum of the two motors' nameplate FLAs. This ensures the appropriate protection for the motors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>lmscar12 mentioned that if the motors are equipped with reliable separate overloads outside of the Variable Frequency Drive (VFD), the motor overload current can be set to a higher number than the combined Full Load Amps (FLAs) of the two motors. This is why P33 & P34 are left at default settings, allowing A484 & A485 to safeguard the VSD from overcurrent.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ian.smith7</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, user ian.smith7 expressed gratitude towards user Imscar for providing a helpful response regarding setting P33 and P34 to the motor nameplate value. Ian sought clarification on whether the values should be multiplied by x1 or x2 when two motors are connected with external overload trip units. The suggestion was to use x2 as long as the separate overload units are correctly sized.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
    </div>
    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
</div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1. What is the recommended Torque Mode setting for the Power Flex 525 Inverters?</h4>
<p class='text-muted'><strong>Answer:</strong> - The recommended Torque Mode setting for the Power Flex 525 Inverters should be 0 (V/HZ) instead of 1 (SVC).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Should the Motor NP OL Current (P33) and Motor NP FLA (P34) parameters be kept at their default settings?</h4>
<p class='text-muted'><strong>Answer:</strong> - According to Rockwell literature and forum discussions, it is recommended to keep P33 and P34 at their default settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the significance of Current Limit 1 (A484) and Current Limit 2 (A485) settings in relation to the Power Flex 525 Inverters?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Current Limit 1 (A484) and Current Limit 2 (A485) settings determine the current limits for the inverters. A484 is set at 25.5A (default 36A) and A485 at 18.7A (default 26.4A).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Why is there confusion regarding the relationship between A484, A485, and P33 in the Power Flex 525 Inverters?</h4>
<p class='text-muted'><strong>Answer:</strong> - The relationship between A484, A485, and P33 may be unclear due to limited information available on these settings from the Rockwell website. Additionally, it is noted that A485 does not exist in a PF520 inverter.</p>
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
