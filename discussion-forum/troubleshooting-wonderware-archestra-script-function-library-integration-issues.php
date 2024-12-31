
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am attempting to utilize a Script Function Library in Archestra. I utilized Visual Studio to create a C# DLL that I will be importing into Archestra. After importing my DLL files (as shown in capture1 and 2), I proceeded to create an object using the name of">
    <meta name="keywords" content="wonderware archestra troubleshooting, script function library integration, visual studio c# dll, archestra object creation, archestra server function, userdefinedobject deployment error">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-archestra-script-function-library-integration-issues">
    <title>Troubleshooting WonderWare Archestra Script Function Library Integration Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting WonderWare Archestra Script Function Library Integration Issues | Oxmaint Community">
    <meta property="og:description" content="Hello, I am attempting to utilize a Script Function Library in Archestra. I utilized Visual Studio to create a C# DLL that I will be importing into Archestra. After importing my DLL files (as shown in capture1 and 2), I proceeded to create an object using the name of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-archestra-script-function-library-integration-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting WonderWare Archestra Script Function Library Integration Issues | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am attempting to utilize a Script Function Library in Archestra. I utilized Visual Studio to create a C# DLL that I will be importing into Archestra. After importing my DLL files (as shown in capture1 and 2), I proceeded to create an object using the name of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-archestra-script-function-library-integration-issues"
      },
      "headline": "Troubleshooting WonderWare Archestra Script Function Library Integration Issues",
      "description": "Hello, I am attempting to utilize a Script Function Library in Archestra. I utilized Visual Studio to create a C# DLL that I will be importing into Archestra. After importing my DLL files (as shown in capture1 and 2), I proceeded to create an object using the name of",
      "author": {
        "@type": "Person",
        "name": "etiennedada"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-02",
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
                <h1 class="text-white">Troubleshooting WonderWare Archestra Script Function Library Integration Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>etiennedada</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2781</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">318</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am attempting to utilize a Script Function Library in Archestra. I utilized Visual Studio to create a C# DLL that I will be importing into Archestra. After importing my DLL files (as shown in capture1 and 2), I proceeded to create an object using the name of my DLL class. Archestra suggested the function "Server" (as seen in capture3). However, upon deploying my UserDefinedObject with this script, an error log message appeared in the SCM stating "Method not found" (capture4). Can anyone provide insights on this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have any suggestions or thoughts on this matter? Let me know what ideas you have in mind.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>etiennedada</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Atiennedada, have you had any success in this area? I am currently in the process of gathering extensive information for utilizing a JSON deserialization tool. Best regards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>slashgnr6971</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I utilize a Script Function Library in WonderWare Archestra?
- To utilize a Script Function Library in Archestra, you can create a C DLL using Visual Studio and import it into Archestra. Make sure to follow the correct steps for importing the DLL files and creating objects.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why am I getting a "Method not found" error message in WonderWare Archestra?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are encountering a "Method not found" error message in Archestra when deploying your UserDefinedObject with a script, it could indicate an issue with the function being called or the method not being properly defined in your DLL. Double-check the function names and their definitions to resolve this issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot integration issues with Script Function Libraries in Archestra?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot integration issues with Script Function Libraries in Archestra, ensure that your DLL files are correctly imported, the functions are properly defined, and there are no syntax errors in your script. Reviewing error logs and seeking insights from the Archestra community can also help identify and resolve any issues.</p>
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
