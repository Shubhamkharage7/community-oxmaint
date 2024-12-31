
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently facing an issue with the logic in a 90-30 PLC (364 CPU). Despite having three Machine Edition backups with different names, all showing Config=NE and logic=NE on Connect, I have tried uploading the logic without any errors. However, the issue still persists as Config=NE and logic=NE.">
    <meta name="keywords" content="troubleshooting 90-30 plc logic issue, 364 cpu configuration problem solutions, resolving config=ne and logic=ne error on 90-30 plc, me 2 backup compatibility">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-logic-and-configuration-upload-issue-on-90-30-plc-364-cpu">
    <title>Troubleshooting Logic and Configuration Upload Issue on 90-30 PLC (364 CPU) | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Logic and Configuration Upload Issue on 90-30 PLC (364 CPU) | Oxmaint Community">
    <meta property="og:description" content="I am currently facing an issue with the logic in a 90-30 PLC (364 CPU). Despite having three Machine Edition backups with different names, all showing Config=NE and logic=NE on Connect, I have tried uploading the logic without any errors. However, the issue still persists as Config=NE and logic=NE.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-logic-and-configuration-upload-issue-on-90-30-plc-364-cpu">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Logic and Configuration Upload Issue on 90-30 PLC (364 CPU) | Oxmaint Community">
    <meta name="twitter:description" content="I am currently facing an issue with the logic in a 90-30 PLC (364 CPU). Despite having three Machine Edition backups with different names, all showing Config=NE and logic=NE on Connect, I have tried uploading the logic without any errors. However, the issue still persists as Config=NE and logic=NE.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-logic-and-configuration-upload-issue-on-90-30-plc-364-cpu"
      },
      "headline": "Troubleshooting Logic and Configuration Upload Issue on 90-30 PLC (364 CPU)",
      "description": "I am currently facing an issue with the logic in a 90-30 PLC (364 CPU). Despite having three Machine Edition backups with different names, all showing Config=NE and logic=NE on Connect, I have tried uploading the logic without any errors. However, the issue still persists as Config=NE and logic=NE.",
      "author": {
        "@type": "Person",
        "name": "NetNathan"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-15",
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
                <h1 class="text-white">Troubleshooting Logic and Configuration Upload Issue on 90-30 PLC (364 CPU)</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">230</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">56</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently facing an issue with the logic in a 90-30 PLC (364 CPU). Despite having three Machine Edition backups with different names, all showing Config=NE and logic=NE on Connect, I have tried uploading the logic without any errors. However, the issue still persists as Config=NE and logic=NE. I have checked the validation, which appears to be clean. I may need to consider stopping the CPU to resolve the Config error, but the logic issue is still puzzling me. I am running ME 10.2, and it seems that the older backups were from a previous version of ME. It may be necessary to download the Config in order to clear the error, but the logic problem continues to be a concern. Are there any other suggestions or ideas on how to address this issue effectively?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In case the PLC program was developed using a different version of the programming software than the one installed on the connected PC, it will be necessary to download in order to synchronize logic or configuration settings. Before proceeding with the download, you can generate a comparison report in the programming software to ensure that both versions match. This report will highlight any discrepancies between the version on the PC and the one in the PLC, providing peace of mind before making any changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I agree with you on that, but I'm just puzzled as to why it didn't display "Logic equals" as expected. Can you help me understand why?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I experiencing Config=NE and logic=NE issues on my 90-30 PLC despite having multiple backups?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Config=NE and logic=NE errors on a 90-30 PLC could be due to discrepancies in the software version used for backups and the current version in use. It is recommended to ensure compatibility between the backups and the current Machine Edition version.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve the Config=NE error on my 90-30 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve the Config=NE error, you may need to consider stopping the CPU and then attempting to upload the configuration again. This process can help in clearing the error related to configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take to address the logic issue on my 90-30 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If uploading the logic without errors did not resolve the logic=NE problem on the 90-30 PLC, you may need to download the Config to clear the error. Additionally, ensure that the validation is clean and consider checking for any potential issues in the logic programming.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any other suggestions for troubleshooting the logic and configuration upload issue on a 90-30 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is advisable to verify the compatibility of backups with the current Machine Edition version, ensure a clean validation, and review the logic programming for any potential issues. Seeking assistance from technical support or referring to the user manual for troubleshooting guidance may</p>
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
