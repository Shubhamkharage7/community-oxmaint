
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey there! I am working on setting up alarms for my HC900 PLC and CS15 HMI. My aim is to ensure that users acknowledge alarms before proceeding with their tasks. I am utilizing the HC900 alarm groups because they are pre-configured in the HMI when importing tags. However, I">
    <meta name="keywords" content="hc900 plc, cs15 hmi, alarm group setup, user acknowledgement, troubleshooting, alarms configuration, user feedback, hc900 alarm groups, cs15 hmi alarms, alarm display issue, plc alarms, user">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-hc900-and-cs15-hmi-alarm-group-setup-for-user-acknowledgement">
    <title>Troubleshooting HC900 and CS15 HMI Alarm Group Setup for User Acknowledgement | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting HC900 and CS15 HMI Alarm Group Setup for User Acknowledgement | Oxmaint Community">
    <meta property="og:description" content="Hey there! I am working on setting up alarms for my HC900 PLC and CS15 HMI. My aim is to ensure that users acknowledge alarms before proceeding with their tasks. I am utilizing the HC900 alarm groups because they are pre-configured in the HMI when importing tags. However, I">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-hc900-and-cs15-hmi-alarm-group-setup-for-user-acknowledgement">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting HC900 and CS15 HMI Alarm Group Setup for User Acknowledgement | Oxmaint Community">
    <meta name="twitter:description" content="Hey there! I am working on setting up alarms for my HC900 PLC and CS15 HMI. My aim is to ensure that users acknowledge alarms before proceeding with their tasks. I am utilizing the HC900 alarm groups because they are pre-configured in the HMI when importing tags. However, I">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-hc900-and-cs15-hmi-alarm-group-setup-for-user-acknowledgement"
      },
      "headline": "Troubleshooting HC900 and CS15 HMI Alarm Group Setup for User Acknowledgement",
      "description": "Hey there! I am working on setting up alarms for my HC900 PLC and CS15 HMI. My aim is to ensure that users acknowledge alarms before proceeding with their tasks. I am utilizing the HC900 alarm groups because they are pre-configured in the HMI when importing tags. However, I",
      "author": {
        "@type": "Person",
        "name": "Goodknight436"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-08",
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
                <h1 class="text-white">Troubleshooting HC900 and CS15 HMI Alarm Group Setup for User Acknowledgement</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Goodknight436</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2416</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">170</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey there! I am working on setting up alarms for my HC900 PLC and CS15 HMI. My aim is to ensure that users acknowledge alarms before proceeding with their tasks. I am utilizing the HC900 alarm groups because they are pre-configured in the HMI when importing tags. However, I encountered a problem where only the first alarm in each group is displayed on the alarm groups page, and none of the other alarms I set up in the HC900 are shown. Despite searching through the manual and online resources, I couldn't find any additional information on this issue. 

Do I need to take additional steps to make these alarm groups function correctly? Or is there an alternative method to require user feedback before restarting the process? Unfortunately, I am unable to experiment with these options at the moment since the HMI and PLC are still in transit. Any advice on this matter would be greatly appreciated. Thank you in advance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are there any slides in this informative training presentation that can assist you? Explore the slides to find valuable resources to enhance your knowledge and skills.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hi Dan, I noticed a difference between my setup and what I've read - I don't have acknowledge and unacknowledged tags, so I'll give that a try. Is it feasible to use the Integrated Station Alarms method to transmit a signal from the HMI back to the PLC when an alarm is detected? I wish I had discovered this earlier as it would have been immensely beneficial. While I am new to programming Honeywell controllers, my experience with Allen Bradley controllers helped me understand most of the slides on my own prior to receiving them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Goodknight436</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have tried adding tags to all inputs and outputs of the function blocks, but I am still not seeing any results. I even went back to the default display configuration and encountered the same issue. I am open to any suggestions or solutions to help me with this problem. Please see the attached example for reference. Check out the attached Presentation1.pdf for more details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Goodknight436</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Need assistance with hc 900? Can you lend a helping hand?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>yamotorola</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why are only the first alarm in each group displayed on the alarm groups page for HC900 and CS15 HMI setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - This issue could be due to a configuration error or limitation in how the alarms are being imported or set up. It is recommended to review the setup process and ensure all alarms are properly configured within the HC900 PLC and CS15 HMI.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Are there additional steps required to make HC900 alarm groups function correctly for user acknowledgment?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, there might be additional configuration steps needed to ensure that all alarms within the groups are displayed and require user acknowledgment. Reviewing the setup instructions, manuals, or seeking support from the manufacturer can help address this issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there an alternative method to require user feedback before restarting processes without full access to the HMI and PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - While the direct solution may require access to the devices, you can explore general best practices for alarm handling and user acknowledgment in industrial automation to prepare for the setup. Understanding the concepts and principles can help troubleshoot more effectively once you have access to the equipment.</p>
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
