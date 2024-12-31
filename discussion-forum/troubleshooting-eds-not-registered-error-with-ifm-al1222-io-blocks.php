
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am dealing with a pre-existing project featuring IFM AL1222 IO blocks that are displaying an EDS not registered error. Despite successfully downloading the EDS using Rockwells hardware installation tool, the project still shows the error and I am unable to see any IFM modules when adding a new">
    <meta name="keywords" content="eds not registered, ifm al1222 io blocks, troubleshooting error, rockwell hardware installation tool, ifm module not showing, adding new module issue, eds tool as administrator, rs project, rslinx classic, pre-existing project">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-eds-not-registered-error-with-ifm-al1222-io-blocks">
    <title>Troubleshooting EDS not registered error with IFM AL1222 IO blocks | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting EDS not registered error with IFM AL1222 IO blocks | Oxmaint Community">
    <meta property="og:description" content="I am dealing with a pre-existing project featuring IFM AL1222 IO blocks that are displaying an EDS not registered error. Despite successfully downloading the EDS using Rockwells hardware installation tool, the project still shows the error and I am unable to see any IFM modules when adding a new">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-eds-not-registered-error-with-ifm-al1222-io-blocks">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting EDS not registered error with IFM AL1222 IO blocks | Oxmaint Community">
    <meta name="twitter:description" content="I am dealing with a pre-existing project featuring IFM AL1222 IO blocks that are displaying an EDS not registered error. Despite successfully downloading the EDS using Rockwells hardware installation tool, the project still shows the error and I am unable to see any IFM modules when adding a new">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-eds-not-registered-error-with-ifm-al1222-io-blocks"
      },
      "headline": "Troubleshooting EDS not registered error with IFM AL1222 IO blocks",
      "description": "I am dealing with a pre-existing project featuring IFM AL1222 IO blocks that are displaying an EDS not registered error. Despite successfully downloading the EDS using Rockwells hardware installation tool, the project still shows the error and I am unable to see any IFM modules when adding a new",
      "author": {
        "@type": "Person",
        "name": "jcastroiv"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-23",
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
                <h1 class="text-white">Troubleshooting EDS not registered error with IFM AL1222 IO blocks</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jcastroiv</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">322</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">53</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am dealing with a pre-existing project featuring IFM AL1222 IO blocks that are displaying an "EDS not registered" error. Despite successfully downloading the EDS using Rockwell's hardware installation tool, the project still shows the error and I am unable to see any IFM modules when adding a new module. I have tried opening the EDS tool as an administrator and closing out all RS Project and RSLinx Classic before using the tool, but the issue persists.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Additional information would be useful: Which version of RSlogix / Studio are you using? Have you installed the latest monthly patch from the Rockwell Automation website? Have you checked the device properties in RSlinx? The AL1222 functions as an IO-Link Master; have you downloaded the Ethernet/IP setup ZIP file from the IFM website? You may have already completed some of these steps.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Today, I encountered the same problem but found a solution in a forum thread. By shutting down all Rockwell Software and running the EDS Hardware Installation Tool as an Administrator, I was able to resolve the issue. Following these steps, I successfully identified all the newly added IFM EDS modules in my project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mdecker</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Today, I encountered a similar issue but was able to resolve it by following a solution shared in a forum post. By closing all Rockwell Software and running the EDS Hardware Installation Tool as an Administrator, I successfully managed to detect all the newly added IFM EDS modules in my project. This workaround proved to be effective in solving the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mdecker</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working on my project, I encountered IFM AL1222 IO blocks with the issue of EDS not being registered. Despite using Rockwell's EDS hardware installation tool and successfully downloading it, the problem persisted in the project. I attempted various solutions such as running the EDS tool as an admin and closing out all RS projects and RSLinx Classic before searching for the module, but the issue remained. This has hindered my ability to add new IFM modules to the project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sd1991</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance your hardware installation process, run the installation wizard outside of the studio environment. This will give you the ability to manage and manipulate the installed eds files. It is common to encounter duplicates for a specific module, so be prepared for that. If you experience any issues, consider deleting all files from the ifm series, then redownload and reinstall to resolve the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sd1991</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Get your hands on the comprehensive IO Link starter kit by IFM. Simply register the complete package and follow the installation instructions closely. Choose between setting up the devices as SINT or INT (INT is recommended for optimal performance). The starter kit includes essential AOIs for beginners and detailed manuals. Take note of the memory maps provided in the manuals for efficient usage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RetiQlum2</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I resolve the "EDS not registered" error with IFM AL1222 IO blocks in my project?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Ensure that you have downloaded the EDS using Rockwell's hardware installation tool and try reopening the EDS tool as an administrator. Close out all RS Project and RSLinx Classic before using the tool to see if that resolves the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why am I unable to see any IFM modules when adding a new module despite downloading the EDS successfully?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "EDS not registered" error may be causing this issue. Make sure the EDS is properly registered and try troubleshooting the error by following the steps mentioned in the thread content.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a specific process to follow when working with IFM AL1222 IO blocks to avoid the "EDS not registered" error?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, ensure that you download the EDS using Rockwell's hardware installation tool, open the EDS tool as an administrator, and close out all RS Project and RSLinx Classic before using the tool. These steps can help in troubleshooting and resolving the error.</p>
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
