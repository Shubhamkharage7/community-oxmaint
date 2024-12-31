
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Good morning! I am currently working on a project in TIA Portal and I am facing an issue with uploading it from the PLC. In the project tree, I have noticed an orange exclamation mark on the PLC tags folder. However, upon expanding the folder, I am unable to">
    <meta name="keywords" content="siemens tia portal, troubleshooting plc tags, missing plc tags, uploading from plc, project tree, orange exclamation mark, online/offline comparison, online project, plc tags folder, resolving issue, plc tag differences, t">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-missing-plc-tags-in-siemens-tia-portal-while-uploading-from-plc">
    <title>Troubleshooting Missing PLC Tags in Siemens TIA Portal while Uploading from PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Missing PLC Tags in Siemens TIA Portal while Uploading from PLC | Oxmaint Community">
    <meta property="og:description" content="Good morning! I am currently working on a project in TIA Portal and I am facing an issue with uploading it from the PLC. In the project tree, I have noticed an orange exclamation mark on the PLC tags folder. However, upon expanding the folder, I am unable to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-missing-plc-tags-in-siemens-tia-portal-while-uploading-from-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Missing PLC Tags in Siemens TIA Portal while Uploading from PLC | Oxmaint Community">
    <meta name="twitter:description" content="Good morning! I am currently working on a project in TIA Portal and I am facing an issue with uploading it from the PLC. In the project tree, I have noticed an orange exclamation mark on the PLC tags folder. However, upon expanding the folder, I am unable to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-missing-plc-tags-in-siemens-tia-portal-while-uploading-from-plc"
      },
      "headline": "Troubleshooting Missing PLC Tags in Siemens TIA Portal while Uploading from PLC",
      "description": "Good morning! I am currently working on a project in TIA Portal and I am facing an issue with uploading it from the PLC. In the project tree, I have noticed an orange exclamation mark on the PLC tags folder. However, upon expanding the folder, I am unable to",
      "author": {
        "@type": "Person",
        "name": "elons_nephew"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-18",
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
                <h1 class="text-white">Troubleshooting Missing PLC Tags in Siemens TIA Portal while Uploading from PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>elons_nephew</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">350</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">282</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Good morning! I am currently working on a project in TIA Portal and I am facing an issue with uploading it from the PLC. In the project tree, I have noticed an orange exclamation mark on the PLC tags folder. However, upon expanding the folder, I am unable to identify the specific differences. When conducting an online/offline comparison, it indicates that the entire PLC Tags folder is missing from the online project. Any insights or suggestions on resolving this issue would be highly valued.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It's unclear what could be causing the issue, but it's likely minor as all program blocks are showing up as green. If certain tags were impacting the program blocks, they would be highlighted in orange. Ultimately, it's important to verify if the offline project aligns with the online PLC, and it appears that it does. This comparison helps ensure that the program is functioning correctly and efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What version of TIA Portal is recommended? I encountered a similar issue in TIA 13 where blocks displayed a green equal state, but there were problems with PLC tags. The root of the problem was that the PLC upload did not capture all symbol name addresses, and the offline project contained %MW tags. When inspecting the blocks, I noticed unknown addresses with ??? marks. I have not experienced the same issue in TIA 15 and newer versions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare inquired about the TIA Portal version causing issues with PLC tags displaying errors despite blocks showing a green equal state. The problem stemmed from incomplete symbol name addresses during PLC upload, resulting in %MW tags in the offline project. Notably, there were unknown addresses marked with "???" on the affected blocks in TIA 13, but such issues have not recurred in TIA 15 versions. As for my TIA 14 setup, I encounter discrepancies between online and offline projects even after uploading and obtaining a green circle for all FBs. When attempting to download changes to the PLC, I am prompted about inconsistencies between projects. I have shared a photo illustrating these challenges for better clarity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>elons_nephew</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What does an orange exclamation mark on the PLC tags folder in TIA Portal indicate?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The orange exclamation mark typically signifies that there are inconsistencies or issues within the PLC tags folder, such as missing or mismatched tags.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I identify the specific differences within the PLC tags folder in TIA Portal?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can expand the PLC tags folder to compare the online and offline versions, or conduct an online/offline comparison to pinpoint any missing or mismatched tags.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why is the entire PLC Tags folder missing from the online project when uploading from the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This issue could be due to synchronization problems between the offline project and the PLC, resulting in the PLC Tags folder not being updated or transferred correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are some suggestions for resolving the issue of missing PLC tags in TIA Portal during upload?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can try re-uploading the project from the PLC, checking for any synchronization errors, ensuring proper project settings, and verifying tag consistency between the offline and online versions.</p>
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
