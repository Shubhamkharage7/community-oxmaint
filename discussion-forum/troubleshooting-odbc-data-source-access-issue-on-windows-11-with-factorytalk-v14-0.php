
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey there, Im experiencing issues with ODBC communication on Windows 11 while using FactoryTalk V14.0. Ive gone through various forum topics related to this problem. Previously, I had my application running on Windows 7 with FactoryTalk V6.10, which is a local application. I have Datalog models set up with">
    <meta name="keywords" content="odbc troubleshooting windows 11, factorytalk v0 odbc issues, windows 11 odbc data source problem, odbc communication error resolution, factorytalk v0">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-odbc-data-source-access-issue-on-windows-11-with-factorytalk-v14-0">
    <title>Troubleshooting ODBC Data Source Access Issue on Windows 11 with FactoryTalk V14.0 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ODBC Data Source Access Issue on Windows 11 with FactoryTalk V14.0 | Oxmaint Community">
    <meta property="og:description" content="Hey there, Im experiencing issues with ODBC communication on Windows 11 while using FactoryTalk V14.0. Ive gone through various forum topics related to this problem. Previously, I had my application running on Windows 7 with FactoryTalk V6.10, which is a local application. I have Datalog models set up with">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-odbc-data-source-access-issue-on-windows-11-with-factorytalk-v14-0">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ODBC Data Source Access Issue on Windows 11 with FactoryTalk V14.0 | Oxmaint Community">
    <meta name="twitter:description" content="Hey there, Im experiencing issues with ODBC communication on Windows 11 while using FactoryTalk V14.0. Ive gone through various forum topics related to this problem. Previously, I had my application running on Windows 7 with FactoryTalk V6.10, which is a local application. I have Datalog models set up with">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-odbc-data-source-access-issue-on-windows-11-with-factorytalk-v14-0"
      },
      "headline": "Troubleshooting ODBC Data Source Access Issue on Windows 11 with FactoryTalk V14.0",
      "description": "Hey there, Im experiencing issues with ODBC communication on Windows 11 while using FactoryTalk V14.0. Ive gone through various forum topics related to this problem. Previously, I had my application running on Windows 7 with FactoryTalk V6.10, which is a local application. I have Datalog models set up with",
      "author": {
        "@type": "Person",
        "name": "bsahraoui"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-23",
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
                <h1 class="text-white">Troubleshooting ODBC Data Source Access Issue on Windows 11 with FactoryTalk V14.0</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bsahraoui</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">121</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">314</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey there, I'm experiencing issues with ODBC communication on Windows 11 while using FactoryTalk V14.0. I've gone through various forum topics related to this problem. Previously, I had my application running on Windows 7 with FactoryTalk V6.10, which is a local application. I have Datalog models set up with an MS Access MDB ODBC, the same as in V6.10. I've tried using both the 32-bit and 64-bit ODBC versions located in the sysWOW64 and sys32 folders respectively, but none of them seem to be working. I keep receiving error messages like - "Warning: The latest Datalog set 'OdbcDB' in model '****' is inaccessible" and "Unable to access ODBC data source (Failed to connect to data source)." I would appreciate any help in resolving this issue. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to utilize ODBC datalogs, a DSN must be created using the odbcad32 tool as mentioned. If the Access driver is being used, a database needs to be created as well. To do this, go to the System DSN tab and click "Add." If the Access driver is not available, Microsoft Office or SQL Server Express may need to be installed. After selecting the Access driver, click "Create" to either create a new data source name (DSN) or select an existing one. The DSN serves as the identifier for factorytalk.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Cheeseface, thank you for your input. I have already followed the steps you provided by selecting the existing access *mdb of the project. However, when I try to log in, I encounter an error stating "unable to access ODBC." This issue is quite perplexing and requires further investigation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bsahraoui</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I resolve ODBC communication issues on Windows 11 with FactoryTalk V14.0?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve ODBC communication issues, ensure that you are using the correct 32-bit or 64-bit ODBC version located in the sysWOW64 or sys32 folders respectively. Verify the configuration settings for the Datalog models and MS Access MDB ODBC connections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What could be the possible reasons for error messages like "Warning: The latest Datalog set 'OdbcDB' in model '' is inaccessible" and "Unable to access ODBC data source (Failed to connect to data source)"?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: These error messages can indicate issues with the configuration settings, compatibility of ODBC versions, or access permissions to the data source. Check the settings, permissions, and compatibility to troubleshoot and resolve these errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: I previously used FactoryTalk V6.10 on Windows 7 without any ODBC issues. Why am I facing problems with ODBC communication on Windows 11 with FactoryTalk V14.0?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The changes in operating systems and software versions may require adjustments in ODBC configurations and compatibility. Ensure that the ODBC settings are correctly configured for FactoryTalk V14.0 on Windows 11 to avoid communication issues.</p>
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
