
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am utilizing a legacy method to transfer a recipe to the PLC. The recipes I am working with are quite extensive, consisting of 6 tables, each with 16 segments and 3 variables per segment. Users can navigate through the tables to access the entire recipe, with each table">
    <meta name="keywords" content="legacy recipe downloading, factorytalk view se, troubleshooting, plc recipe transfer, recipe tables, variable segments, recipe navigation, download button, table download, legacy format, recipepro, recipe storage, visibility issue, table visibility, download reliability">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-legacy-recipe-downloading-problem-in-factorytalk-view-se">
    <title>Troubleshooting Legacy Recipe Downloading Problem in FactoryTalk View SE | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Legacy Recipe Downloading Problem in FactoryTalk View SE | Oxmaint Community">
    <meta property="og:description" content="I am utilizing a legacy method to transfer a recipe to the PLC. The recipes I am working with are quite extensive, consisting of 6 tables, each with 16 segments and 3 variables per segment. Users can navigate through the tables to access the entire recipe, with each table">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-legacy-recipe-downloading-problem-in-factorytalk-view-se">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Legacy Recipe Downloading Problem in FactoryTalk View SE | Oxmaint Community">
    <meta name="twitter:description" content="I am utilizing a legacy method to transfer a recipe to the PLC. The recipes I am working with are quite extensive, consisting of 6 tables, each with 16 segments and 3 variables per segment. Users can navigate through the tables to access the entire recipe, with each table">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-legacy-recipe-downloading-problem-in-factorytalk-view-se"
      },
      "headline": "Troubleshooting Legacy Recipe Downloading Problem in FactoryTalk View SE",
      "description": "I am utilizing a legacy method to transfer a recipe to the PLC. The recipes I am working with are quite extensive, consisting of 6 tables, each with 16 segments and 3 variables per segment. Users can navigate through the tables to access the entire recipe, with each table",
      "author": {
        "@type": "Person",
        "name": "BCMaint"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-17",
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
                <h1 class="text-white">Troubleshooting Legacy Recipe Downloading Problem in FactoryTalk View SE</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BCMaint</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">254</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">7</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am utilizing a legacy method to transfer a recipe to the PLC. The recipes I am working with are quite extensive, consisting of 6 tables, each with 16 segments and 3 variables per segment. Users can navigate through the tables to access the entire recipe, with each table only being visible when selected. However, I am encountering an issue where only the currently visible table is being downloaded, rather than all 288 variables. I attempted to address this by having the download button cycle through each table and download after each change, but I am uncertain about the reliability of this approach. While it seems to be functioning correctly, any failure in downloading a table could potentially cause significant issues in the recipe. I also explored the option of moving the table to the forefront when the condition is met, as opposed to relying on visibility, but have not found a feasible solution. Any assistance on this matter would be greatly appreciated. Although Recipepro is available, our users are accustomed to the legacy format in which our recipes are already stored.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Copy your variables to a designated "dummy recipe" location for easy bulk download. Perform error checks on this dummy recipe, either on the HMI or PLC, to validate its accuracy before transferring it to your active recipe. The specific HMI and PLC being utilized has not been specified.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Incandenza</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Incandenza suggested a useful method for managing variables by copying them to a separate "dummy recipe" location that can be easily downloaded all at once. Performing error checking on this dummy recipe, either on the HMI or PLC side, can ensure the recipe is error-free before setting it as the active recipe. The specific HMI and PLC being used, in this case, is FactoryTalk View SE with CompactLogix 5380. It is important to note that mentioning the specific model and software being used can help provide more detailed and tailored troubleshooting solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BCMaint</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: Why am I only able to download the currently visible table when transferring a recipe to the PLC using a legacy method?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This issue may arise due to the method's limitation in handling the transfer of all 288 variables at once. Consider alternative approaches like cycling through each table for downloading or exploring other solutions to ensure all variables are transferred accurately.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Is it reliable to have the download button cycle through each table and download after each change to address the issue of incomplete variable transfer?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While the cycling method may seem to work correctly, any failure in downloading a table could lead to significant issues in the recipe. It is essential to ensure the reliability of the transfer process to prevent data loss or errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Have you considered moving the table to the forefront when the condition is met instead of relying solely on visibility for downloading all variables?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Exploring the option of moving the table to the forefront when needed could offer a more robust solution than relying on visibility alone. Experiment with different methods to find a feasible approach that ensures the successful transfer of all variables in the recipe.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: Why are users hesitant to switch to Recipepro despite its availability?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Users may be accustomed to the legacy format in which recipes are stored, leading to a reluctance to transition to a new system like Recipepro. It is essential to consider user familiarity and preferences when implementing</p>
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
