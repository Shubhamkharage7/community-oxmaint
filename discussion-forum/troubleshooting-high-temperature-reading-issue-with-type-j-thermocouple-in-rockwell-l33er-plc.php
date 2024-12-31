
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently experiencing an issue with a Thermocouple (T/C) that is providing my PLC with a temperature reading approximately 15 degrees Fahrenheit higher than expected. To troubleshoot, I utilized the T/C that was included with our multimeter and immersed it in the water being measured, resulting">
    <meta name="keywords" content="troubleshooting, high temperature reading, type j thermocouple, rockwell l33er plc, temperature discrepancy, thermocouple calibration, plc temperature sensor, omega type j thermocouple, xtd temp transmitter, analog">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-high-temperature-reading-issue-with-type-j-thermocouple-in-rockwell-l33er-plc">
    <title>Troubleshooting High Temperature Reading Issue with Type J Thermocouple in Rockwell L33ER PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting High Temperature Reading Issue with Type J Thermocouple in Rockwell L33ER PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently experiencing an issue with a Thermocouple (T/C) that is providing my PLC with a temperature reading approximately 15 degrees Fahrenheit higher than expected. To troubleshoot, I utilized the T/C that was included with our multimeter and immersed it in the water being measured, resulting">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-high-temperature-reading-issue-with-type-j-thermocouple-in-rockwell-l33er-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting High Temperature Reading Issue with Type J Thermocouple in Rockwell L33ER PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently experiencing an issue with a Thermocouple (T/C) that is providing my PLC with a temperature reading approximately 15 degrees Fahrenheit higher than expected. To troubleshoot, I utilized the T/C that was included with our multimeter and immersed it in the water being measured, resulting">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-high-temperature-reading-issue-with-type-j-thermocouple-in-rockwell-l33er-plc"
      },
      "headline": "Troubleshooting High Temperature Reading Issue with Type J Thermocouple in Rockwell L33ER PLC",
      "description": "Hello everyone, I am currently experiencing an issue with a Thermocouple (T/C) that is providing my PLC with a temperature reading approximately 15 degrees Fahrenheit higher than expected. To troubleshoot, I utilized the T/C that was included with our multimeter and immersed it in the water being measured, resulting",
      "author": {
        "@type": "Person",
        "name": "voos.charley"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-28",
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
                <h1 class="text-white">Troubleshooting High Temperature Reading Issue with Type J Thermocouple in Rockwell L33ER PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>voos.charley</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">600</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">21</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently experiencing an issue with a Thermocouple (T/C) that is providing my PLC with a temperature reading approximately 15 degrees Fahrenheit higher than expected. To troubleshoot, I utilized the T/C that was included with our multimeter and immersed it in the water being measured, resulting in a reading of 84 degrees Fahrenheit. However, the problematic T/C indicated a temperature of around 99 degrees Fahrenheit.

My setup consists of a Rockwell L33ER PLC coupled with a Type J T/C from Omega (CF-090-J-4-60-1). The T/C is connected to an XTD Series Temp Transmitter from Automation Direct, which transmits a 4-20 mA signal to an analog input card in the PLC rack. I have already verified the scaling within the PLC and checked the polarity of the T/C extension wire used for connecting to the temp transmitter. Additionally, I attempted to test with a different T/C, but the results were inconclusive. 

I am aware that this issue may have a simple solution, but I am struggling to pinpoint the root cause. Any advice on how to continue troubleshooting would be highly appreciated. Thank you for your help.

Best regards, Charley</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One common issue that may cause a false high temperature reading is when the output range of the transmitter (4-20mA) differs from the input range of the PLC AI. Another potential reason for inaccurate temperature readings could be a mislabeled thermocouple, such as mistaking a Type E for a Type J (which produce different mV outputs). Exposure to high temperatures can also cause thermocouples to drift and produce inaccurate readings. Additionally, calibration errors or malfunctions in the PLC AI or transmitter could also be to blame. Be sure to consider these possibilities when troubleshooting temperature discrepancies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to the specifications, the cold junction compensation for this model is carried out through software programming. It's important to verify if the settings are aligned with the ambient temperature of the installation location.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are wondering about the temperature range you need to measure, consider using a RTD for a more precise fit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is likely that the wire connecting the TC and the Omega – JF090-J-4-60-1 thermocouple is made of copper. This can result in an offset in the actual temperature readings. The offset will fluctuate depending on the temperature at each junction. It is important that all components involved in the thermocouple termination, including the terminal block and wire, are made of the same metal type to avoid inaccuracies in temperature measurement.

Cold junction compensation is essential and should be measured at the terminal block to ensure accurate temperature readings. Each thermocouple is constructed with different metals, so using the correct materials is crucial. Many instances have been observed where using copper wire instead of thermocouple wire resulted in faulty oven controls, leading to poor quality products for months. Avoid this simple mistake to prevent production issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>GaryS suggested that the wire connecting the TC and the Omega –JF090-J-4-60-1 is most likely copper. This assumption could lead to errors in polarity depending on the transition cold junction temperature. If the transition temperature is higher than the cold junction at the analog input, a "low" error will be reported, and vice versa for a "high" error.

For example, if the hot junction is at 300°F and the correct wiring is in place, the reported temperature should be 300°F. However, if copper wire is used, creating an additional cold junction at the transition, errors can occur. If the transition cold junction temperature is higher or lower than the transmitter's cold junction temperature, incorrect readings will result.

In the case of a higher transition cold junction temperature, a false low reported value will be produced. Conversely, a lower transition cold junction temperature will result in a false high reported temperature. It is crucial to ensure proper wiring to avoid inaccuracies in temperature readings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Using the wrong extension cable or one with reverse polarity can cause issues, as there are various global standards and confusion around wire color coding. In some cases, the red wire may even be considered the negative one. When it comes to pricier thermocouples like type S or B with platinum components, the wire itself is not platinum but is made of metals that produce a comparable thermoelectric voltage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate the valuable comments and suggestions provided. Our apologies for the delay in response, as we were addressing the issue and its aftermath. Finally, we have a moment to share the recap of the solution and address the questions raised, making this thread a useful resource for anyone facing T/C issues in the future. 

After conducting extensive troubleshooting and testing various theories, we relocated the temperature transmitter within the enclosure, away from any potential interference. This adjustment significantly improved the measurement accuracy, with the discrepancy slowly correcting over a few minutes. It appears that proximity to a safety contactor with a 24V coil may have been causing interference, leading to the error buildup over time.

Regarding the 4-20mA output range of the transmitter, it was verified to align with the PLC AI range, ruling out calibration issues. Additionally, the cold junction compensation was confirmed to be software-based and appropriately configured for the ambient temperature. The specific model used, XTD-0300F-J, is non-programmable, offering simplicity at a lower cost, suitable for applications requiring moderate accuracy, such as measuring water temperature within a specific range.

In response to queries about using RTDs instead of thermocouples, the application primarily involves monitoring water temperature within the 70-100°F range. Further research will be conducted to evaluate the suitability of RTDs for this scenario.

While investigating potential discrepancies, we ensured consistency in metal types for all connections, ruling out issues related to wire materials and junctions. Although the possibility of using the wrong wire or experiencing a polarity reversal was considered, thorough checks confirmed the correct setup.

We appreciate the detailed insights shared regarding the impact of using incorrect wires on temperature readings and the complexities involved. Such information enhances our understanding of thermocouple operations and helps address future challenges effectively.

Thank you once again for the valuable input provided. This thread serves as a valuable resource for handling similar issues in the future, solidifying our knowledge and troubleshooting capabilities when dealing with temperature control concerns.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>voos.charley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Back in the day, Transmation stood out in the temperature transmitter industry for their superior radio frequency interference rejection capabilities. This feature was especially evident when using walkie talkies near the transmitter, causing the 4-20mA output to fluctuate. It's likely that basic, fixed-range transmitters lack the advanced RF traps found in higher-end models. Nowadays, RF interference is even more prevalent with the use of VFDs and wireless technologies like bluetooth and ISM bands.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the discrepancy in temperature readings between the two Thermocouples (T/Cs)?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Several factors could contribute to this issue, such as calibration errors, wiring problems, or environmental conditions affecting the T/C performance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I verify if the Type J Thermocouple from Omega is functioning correctly?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can perform a calibration check by comparing the readings from the T/C with a known temperature source, like ice water or boiling water, to verify its accuracy.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there specific troubleshooting steps recommended for resolving temperature reading discrepancies in a Rockwell L33ER PLC setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, you can start by checking the T/C wiring, ensuring proper grounding, verifying the scaling in the PLC, and examining the signal transmission integrity from the Temp Transmitter to the analog input card.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are some common issues that could cause a Thermocouple to provide inaccurate temperature readings in an industrial setting?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Common issues include signal interference, loose connections, faulty wiring, improper grounding, or issues with the calibration of the T/C or related components.</p>
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
