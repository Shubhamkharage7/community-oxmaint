
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our team is currently setting up a backup CPU for Q02CPU. However, after replacing the backup CPU, we noticed a lack of data from the intelligence module (Q68ADV) buffer memory, leading to the emergence of several alarms. Can anyone offer insights on the possible reasons for this issue? The">
    <meta name="keywords" content="q02cpu, q68adv, buffer memory, backup cpu, missing data, troubleshooting, alarms, standby cpu, intelligence module, data loss, technical issue, cpu replacement, data recovery, module buffer, troubleshoot problem">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-problem-with-q02cpu-and-q68adv-missing-data-from-buffer-memory">
    <title>Troubleshooting Problem with Q02CPU and Q68ADV: Missing Data from Buffer Memory | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Problem with Q02CPU and Q68ADV: Missing Data from Buffer Memory | Oxmaint Community">
    <meta property="og:description" content="Our team is currently setting up a backup CPU for Q02CPU. However, after replacing the backup CPU, we noticed a lack of data from the intelligence module (Q68ADV) buffer memory, leading to the emergence of several alarms. Can anyone offer insights on the possible reasons for this issue? The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-problem-with-q02cpu-and-q68adv-missing-data-from-buffer-memory">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Problem with Q02CPU and Q68ADV: Missing Data from Buffer Memory | Oxmaint Community">
    <meta name="twitter:description" content="Our team is currently setting up a backup CPU for Q02CPU. However, after replacing the backup CPU, we noticed a lack of data from the intelligence module (Q68ADV) buffer memory, leading to the emergence of several alarms. Can anyone offer insights on the possible reasons for this issue? The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-problem-with-q02cpu-and-q68adv-missing-data-from-buffer-memory"
      },
      "headline": "Troubleshooting Problem with Q02CPU and Q68ADV: Missing Data from Buffer Memory",
      "description": "Our team is currently setting up a backup CPU for Q02CPU. However, after replacing the backup CPU, we noticed a lack of data from the intelligence module (Q68ADV) buffer memory, leading to the emergence of several alarms. Can anyone offer insights on the possible reasons for this issue? The",
      "author": {
        "@type": "Person",
        "name": "Sundar4163"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-03",
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
                <h1 class="text-white">Troubleshooting Problem with Q02CPU and Q68ADV: Missing Data from Buffer Memory</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Sundar4163</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">216</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">39</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Our team is currently setting up a backup CPU for Q02CPU. However, after replacing the backup CPU, we noticed a lack of data from the intelligence module (Q68ADV) buffer memory, leading to the emergence of several alarms. Can anyone offer insights on the possible reasons for this issue? The attached photo displays the data from the buffer memory of the functioning CPU, whereas the spare (standby) CPU is missing this crucial information.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up the backup for your PLC, it's important to determine whether you have the original PLC backup on hand or if you have uploaded the existing PLC configuration. Have you verified the module configuration by uploading the PLC parameters from the existing PLC or by downloading all the information to the new PLC? Additionally, consider the auto refresh settings, which can be controlled either through the setup options or by PLC code. Utilizing intelligent cards can be done in two ways, either by adjusting the settings for auto refresh in the setup or through PLC programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky inquired about the backup PLC process, asking if the original PLC backup was used or if an upload was taken from the existing PLC. Additionally, they suggested checking the module configuration by uploading PLC parameters from the existing PLC or downloading all information to the new PLC. It was also mentioned that there are two ways to use intelligent cards, either through settings for auto refresh in the setup or through PLC code implementation. In this case, a backup was created from the existing PLC for both the program and parameters, which were then uploaded to the new spare CPU. Efforts to format the PLC were made, and IO configuration was verified without any mismatches. However, there was no information found on the auto refresh settings page.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sundar4163</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Sundar4163 mentioned that they performed a backup of the existing PLC "Program+Parameter" and uploaded it to a new spare CPU. They also tried to format the PLC and verified the IO configuration with no mismatches found. However, there is no information in the auto-refresh page. Can anyone provide guidance on auto refresh page settings? Essentially, the D register (D1500) that receives information from the intelligence module Q68ADV is not capturing the field instrument value. The focus is on identifying the root cause of this issue for resolution. Fortunately, the existing CPU is functioning properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sundar4163</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The TO instruction transmits configuration data to the module, where "X" bits are read by the program to determine the module's status. The FROM function retrieves data from the module. It appears that the "X" inputs are used for conditional jumps within the program. I recommend verifying if the "FROM" instruction is being executed or bypassed. Based on the code provided, it seems that automatic refresh mode is not being utilized. Without the complete program for testing, it is difficult to pinpoint the issue. There is a possibility that the module is in config mode, resulting in the bypassing of the read function.

For more information, refer to the manual: [link to manual].

If you intend to use automatic refresh mode, avoid calling the FROM function as data should automatically populate from the configured registers. Note that the auto refresh register setting is shown below, while the min/max registers and error registers are not displayed. If these are left blank, the min/max values will remain as per the card defaults. It seems that they are not being used in this scenario.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that the TO instruction is used to transmit configuration data to the module, which contains "X" bits that the program reads to determine the module's status. Conversely, the FROM function retrieves data from the module. It appears that in the program, the "X" inputs are utilized for conditional jumps around the read function. It would be advisable to verify if the "FROM" instruction is being executed or skipped. Based on the provided code, it seems that automatic refresh is not being utilized, making it unnecessary to set it. Without access to the complete program for testing, it is difficult to pinpoint the problem. However, there is a possibility that the module is in config mode, leading to the bypassing of the read function. For more information, refer to the manual: [link]. Unfortunately, due to file format restrictions, the program file cannot be attached here, but it can be sent via email. In the meantime, could you provide more details on the config mode? Your assistance is greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sundar4163</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting the "X" contacts in monitor mode, it's important to check if it's stuck in configuration mode. Unfortunately, without access to an analog card, I am unable to test the program you posted. The TO instruction typically transmits configuration data such as channel settings (0-10v/4-20mA). Alternatively, you can use U0X/xx for direct access to the card buffer memories to send and receive data. While the manual may reference U0x functions, it essentially serves the same purpose as TO/FROM instructions. Based on the information provided, it seems that error bits are not being utilized; instead, they are merely setting the card's analog format and reading raw analog values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is there missing data from the buffer memory of the Q68ADV intelligence module after replacing the backup CPU for Q02CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> - The missing data from the buffer memory can be attributed to potential configuration discrepancies, communication issues between the CPUs, or improper synchronization between the primary and backup CPUs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the issue of missing data in the buffer memory when using a backup CPU for Q02CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> - To address this issue, you can start by verifying the settings and configurations of both the primary and backup CPUs, ensuring proper communication and synchronization protocols are in place, checking for any hardware faults, and examining the data transfer processes between the CPUs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps should be taken to resolve alarms triggered by the missing data from the Q68ADV buffer memory when utilizing a backup CPU?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can begin by conducting a thorough analysis of the alarm logs to identify the specific alarms triggered by the missing data. Subsequently, review the system configurations, perform diagnostic tests on the CPUs, and troubleshoot any communication or synchronization issues to rectify the problem and prevent further alarms.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any known compatibility issues between the Q02CPU and Q68ADV intelligence module that could lead to data loss in the buffer memory during CPU replacement?</h4>
<p class='text-muted'><strong>Answer:</strong> - While there are no inherent compatibility issues between the Q02CPU and Q68ADV module, data loss in the buffer memory can occur due to misconfigurations</p>
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
