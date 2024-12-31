
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Are you looking for tips on integrating these meters with Ethernet/IP? The input table seems accurate, but Im struggling to reset the totalizers using the code. The manual suggests setting the Control_Totalizer_1 word to 32490 for a Reset and Stop function, but it doesnt seem to be working. I">
    <meta name="keywords" content="reset totalizers, eandh proline promass 300, ethernet/ip integration, meter totalizer reset, control_totalizer_1 word, reset & stop function, error code 32490, troubleshooting totalizer reset, eand">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-reset-totalizers-on-eandh-proline-promass-300-using-ethernet-ip">
    <title>How to Reset Totalizers on EandH Proline Promass 300 Using Ethernet/IP | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Reset Totalizers on EandH Proline Promass 300 Using Ethernet/IP | Oxmaint Community">
    <meta property="og:description" content="Are you looking for tips on integrating these meters with Ethernet/IP? The input table seems accurate, but Im struggling to reset the totalizers using the code. The manual suggests setting the Control_Totalizer_1 word to 32490 for a Reset and Stop function, but it doesnt seem to be working. I">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-reset-totalizers-on-eandh-proline-promass-300-using-ethernet-ip">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Reset Totalizers on EandH Proline Promass 300 Using Ethernet/IP | Oxmaint Community">
    <meta name="twitter:description" content="Are you looking for tips on integrating these meters with Ethernet/IP? The input table seems accurate, but Im struggling to reset the totalizers using the code. The manual suggests setting the Control_Totalizer_1 word to 32490 for a Reset and Stop function, but it doesnt seem to be working. I">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-reset-totalizers-on-eandh-proline-promass-300-using-ethernet-ip"
      },
      "headline": "How to Reset Totalizers on EandH Proline Promass 300 Using Ethernet/IP",
      "description": "Are you looking for tips on integrating these meters with Ethernet/IP? The input table seems accurate, but Im struggling to reset the totalizers using the code. The manual suggests setting the Control_Totalizer_1 word to 32490 for a Reset and Stop function, but it doesnt seem to be working. I",
      "author": {
        "@type": "Person",
        "name": "phuz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-27",
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
                <h1 class="text-white">How to Reset Totalizers on EandH Proline Promass 300 Using Ethernet/IP</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>phuz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">6275</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">31</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Are you looking for tips on integrating these meters with Ethernet/IP? The input table seems accurate, but I'm struggling to reset the totalizers using the code. The manual suggests setting the Control_Totalizer_1 word to "32490" for a Reset & Stop function, but it doesn't seem to be working. I reached out to E&H for assistance, but it seems like their tech support team is unsure about this process. They provided me with a Word document detailing how to reset the totalizers from the meter's display.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for my tardiness. For those who are still unsure, adjust the setting of <Meter_Name>:O1.Totalizer_1_Control_Totalizer_1 to the specified action outlined in the guide. After configuring this setting, ensure to activate <Meter_Name>:O1.TIC_Control_1_Activation to execute the command successfully.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chikus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate the update. Clear explanations of task-based functions are highly valuable to the community and can help improve user experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am still struggling to make it work. Can anyone suggest what I might be overlooking?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bluesparky0791</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have received a response from customer support stating that a hyphen must be placed before the number 32490. This is crucial for proper validation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bluesparky0791</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Was the method successful in achieving the desired outcome?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mcastarey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently tested a solution that effectively resolved the issue. When the value of "-32490" in FlowMeter:O1.Totalizer_1_Control_Totalizer_1 is triggered by FlowMeter:O1.TIC_Control_1_Activation going high, the totalizer is cleared and halted. To resume totalizing, it is crucial to reset FlowMeter:O1.Totalizer_1_Control_Totalizer_1 to 0 before reissuing the command. Alternatively, you can send the command "198" for a Reset and Add function. The process involves setting FlowMeter:O1.Totalizer_1_Control_Totalizer_1 to 198, then activating and deactivating FlowMeter:O1.TIC_Control_1_Activation to clear the totalizer and start fresh from 0. Another approach is to follow up the "-32490" command with "-32226" to restart the totalizer, requiring fewer steps to complete the task.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plasma_burn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I haven't visited this website in so long, but today I had the exact same question and found the perfect answer here. Grateful for the help!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OZEE</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I reset the totalizers on EandH Proline Promass 300 using Ethernet/IP?
- To reset the totalizers on EandH Proline Promass 300 using Ethernet/IP, you can set the Control_Totalizer_1 word to "32490" for a Reset & Stop function. However, some users have reported issues with this method not working as expected. Alternatively, you can refer to the Word document provided by E&H detailing how to reset the totalizers from the meter's display.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What should I do if the manual instructions for resetting totalizers on EandH Proline Promass 300 are not working?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the manual instructions for resetting totalizers on EandH Proline Promass 300, such as setting the Control_Totalizer_1 word to "32490", are not working for you, you can reach out to E&H for assistance. While their tech support team may be unsure about the process, they might provide additional guidance or troubleshooting steps to help you reset the totalizers successfully.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I integrate EandH Proline Promass 300 meters with Ethernet/IP?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are looking for tips on integrating EandH Proline Promass 300 meters with Ethernet/IP, you can refer to the input table for accurate information. Additionally, you can explore online resources, forums, or seek assistance from E&H's technical support team for guidance on integrating these meters</p>
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
