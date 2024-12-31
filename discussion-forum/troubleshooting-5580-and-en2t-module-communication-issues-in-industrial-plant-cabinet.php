
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am facing an issue at my workplace, a large industrial plant with numerous control cabinets. One of these cabinets, housing one 5580 (1756-L83E), two 1756-L73, and seven 1756-EN2T modules in a 16-slot rack, is experiencing thousands of minor faults per second. The root cause of the repetitive (T:04">
    <meta name="keywords" content="troubleshooting, 5580, en2t module, communication issues, industrial plant, control cabinets, 1756-l83e, 1756-l73, 1756-en2t, 16-slot rack, fault identification">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-5580-and-en2t-module-communication-issues-in-industrial-plant-cabinet">
    <title>Troubleshooting 5580 and EN2T Module Communication Issues in Industrial Plant Cabinet | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 5580 and EN2T Module Communication Issues in Industrial Plant Cabinet | Oxmaint Community">
    <meta property="og:description" content="I am facing an issue at my workplace, a large industrial plant with numerous control cabinets. One of these cabinets, housing one 5580 (1756-L83E), two 1756-L73, and seven 1756-EN2T modules in a 16-slot rack, is experiencing thousands of minor faults per second. The root cause of the repetitive (T:04">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-5580-and-en2t-module-communication-issues-in-industrial-plant-cabinet">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 5580 and EN2T Module Communication Issues in Industrial Plant Cabinet | Oxmaint Community">
    <meta name="twitter:description" content="I am facing an issue at my workplace, a large industrial plant with numerous control cabinets. One of these cabinets, housing one 5580 (1756-L83E), two 1756-L73, and seven 1756-EN2T modules in a 16-slot rack, is experiencing thousands of minor faults per second. The root cause of the repetitive (T:04">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-5580-and-en2t-module-communication-issues-in-industrial-plant-cabinet"
      },
      "headline": "Troubleshooting 5580 and EN2T Module Communication Issues in Industrial Plant Cabinet",
      "description": "I am facing an issue at my workplace, a large industrial plant with numerous control cabinets. One of these cabinets, housing one 5580 (1756-L83E), two 1756-L73, and seven 1756-EN2T modules in a 16-slot rack, is experiencing thousands of minor faults per second. The root cause of the repetitive (T:04",
      "author": {
        "@type": "Person",
        "name": "danno4200"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-23",
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
                <h1 class="text-white">Troubleshooting 5580 and EN2T Module Communication Issues in Industrial Plant Cabinet</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>danno4200</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">299</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">428</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am facing an issue at my workplace, a large industrial plant with numerous control cabinets. One of these cabinets, housing one 5580 (1756-L83E), two 1756-L73, and seven 1756-EN2T modules in a 16-slot rack, is experiencing thousands of minor faults per second. The root cause of the repetitive (T:04 C:51) fault has been identified as data being pushed into an oversized array index.

I am investigating whether these faults could be leading to the primary EN2T module, which connects to a cloud service, experiencing random communication losses. This has resulted in significant downtime occurring around five times in the last five months, with each incident lasting from an hour to a few hours.

Although I understand the logic changes made six months ago may have triggered the array index overflow, I am exploring the possibility of the continuous faults contributing to the network issues. Despite plans to rectify the logic, there is a suggestion to replace the EN2T module, which I will postpone until after addressing the logic to determine the root cause of the communication disruptions.

IT inspections have confirmed that the network infrastructure is in good condition, with no issues detected in the cables, switches, or other devices. This leads me to consider whether the ongoing faults, combined with the controller's heavy processing workload, could be attributing to the network problems.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Minor Fault T04:C51 - Program Fault: LEN value exceeds DATA limit may not be the root cause of your communication issues. It's possible that the controller is transitioning to a FAULT routine and resetting, or the array-related instruction is not writing the expected data. Unless you're experiencing watchdog errors, high execution times, or low memory, these two issues may not be connected. While the local wiring tested by IT appears to be in good condition, their diagnostics may have stopped at the cabinet door or the Internet router. If this machine were in my possession, I would consider installing a Raspberry Pi (or OnLogic / Kunbus version) near the switch to run a Node-Red instance for continuous communication with the cloud service through PING, TCP keepalive, or login, as well as polling the ControlLogix for tag values. Monitoring successes and failures is key in troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Encountering errors related to string manipulation, such as exceeding the string size or referencing non-existent elements, is common when using functions like MID, Insert, and Delete. I have observed this issue in older Modbus TCP AOIs, but it does not occur in newer versions of the software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I hadn't realized that the integration of this large automation system with the "cloud provider" could involve Modbus/TCP communication protocol.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the insightful responses. There are four prominent networking systems, each linked to a separate EN2T through an SST Profibus ETH module. I will delve deeper into this shortly, but I am grateful for the valuable feedback received thus far. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danno4200</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are encountering issues with Modbus TCP AOI, you may want to refer to technote BF28611 (Access Levels: TechConnect). While this information may not be relevant to your specific situation, the root of the problem is likely related to string handling.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, I am aware of the issue at hand. The problem lies in pushing strings of different lengths into an array that was originally designed for shorter strings. I need to adjust the array data type and size accordingly. It seems that a user-defined data type was meant to be used but was not properly implemented. I am investigating whether these smaller faults could be the cause of the random communication issues, rather than issues with the network switch, EN2T, or cables. Thank you for your response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danno4200</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the repetitive (T:04 C:51) fault in the control cabinet?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The root cause of the repetitive (T:04 C:51) fault has been identified as data being pushed into an oversized array index, likely triggered by logic changes made six months ago.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How often are the communication losses occurring with the primary EN2T module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The primary EN2T module has experienced random communication losses leading to significant downtime occurring around five times in the last five months, with each incident lasting from an hour to a few hours.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Have IT inspections revealed any issues with the network infrastructure?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: IT inspections have confirmed that the network infrastructure is in good condition, with no issues detected in the cables, switches, or other devices.</p>
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
