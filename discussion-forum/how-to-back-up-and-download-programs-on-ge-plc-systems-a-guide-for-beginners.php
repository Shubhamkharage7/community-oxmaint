
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, as a newcomer to GE, I am seeking guidance from experienced GE PLC programmers. I have a few simple questions regarding uploading and downloading programs on GE PLC systems. Specifically, I am wondering if the current parameter values are automatically uploaded when backing up a program? Additionally,">
    <meta name="keywords" content="ge plc systems, backup programs, download programs, plc programmers, parameter values, uploading programs, downloading programs, initial values, force values, ge plc program, backing up programs, program backup, program download, ge automation, plc programming">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-back-up-and-download-programs-on-ge-plc-systems-a-guide-for-beginners">
    <title>How to Back Up and Download Programs on GE PLC Systems: A Guide for Beginners | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Back Up and Download Programs on GE PLC Systems: A Guide for Beginners | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, as a newcomer to GE, I am seeking guidance from experienced GE PLC programmers. I have a few simple questions regarding uploading and downloading programs on GE PLC systems. Specifically, I am wondering if the current parameter values are automatically uploaded when backing up a program? Additionally,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-back-up-and-download-programs-on-ge-plc-systems-a-guide-for-beginners">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Back Up and Download Programs on GE PLC Systems: A Guide for Beginners | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, as a newcomer to GE, I am seeking guidance from experienced GE PLC programmers. I have a few simple questions regarding uploading and downloading programs on GE PLC systems. Specifically, I am wondering if the current parameter values are automatically uploaded when backing up a program? Additionally,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-back-up-and-download-programs-on-ge-plc-systems-a-guide-for-beginners"
      },
      "headline": "How to Back Up and Download Programs on GE PLC Systems: A Guide for Beginners",
      "description": "Hello everyone, as a newcomer to GE, I am seeking guidance from experienced GE PLC programmers. I have a few simple questions regarding uploading and downloading programs on GE PLC systems. Specifically, I am wondering if the current parameter values are automatically uploaded when backing up a program? Additionally,",
      "author": {
        "@type": "Person",
        "name": "paramesium"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-08",
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
                <h1 class="text-white">How to Back Up and Download Programs on GE PLC Systems: A Guide for Beginners</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>paramesium</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5795</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">118</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, as a newcomer to GE, I am seeking guidance from experienced GE PLC programmers. I have a few simple questions regarding uploading and downloading programs on GE PLC systems. Specifically, I am wondering if the current parameter values are automatically uploaded when backing up a program? Additionally, when downloading a GE PLC program, I am prompted to select either initial or force values. Can someone explain what exactly "Initial value" refers to in this context? Thank you in advance for your help. Best regards, Loo.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>New to GE and seeking advice from a GE PLC programmer, I have some basic queries. When uploading a program on a GE PLC for backup purposes, will the current parameter values be automatically uploaded? To ensure this, make sure to check the option for "parameter values" in the Download Dialog Box. For downloading the GE PLC program, you may encounter a prompt regarding initial/force values. What exactly does "Initial value" signify in this context? It refers to a variable parameter that sets your Variables (Addresses) to values provided by the programmer during the download process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello RussB, I have a question regarding the Download Dialog Box in PLC programming. When I upload data, does it become the initial value, or are the initial value and uploaded value distinct concepts? My primary concern is, after uploading and editing data offline, do I need to select "download initial value" to retain the previous parameters? I am still trying to grasp the workings of this PLC system, so I greatly appreciate your guidance. Thank you! Best regards, Loo.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>paramesium</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named paramesium inquired, "Hello RussB, I would like to confirm if selecting the data in the Download Dialog Box for data upload will set it as my initial value." If you are unsure about this concept, the following resources may provide clarity on "initial values" in GE-IP PLC/PAC systems: 
- KB15228: A guide on incorporating initial values into the PME Project from the PLC
- KB15195: Tips on managing initial values and initial force states in GE IP Controllers
- KB7618: Instructions on retaining an initial value post shutdown.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By selecting the option to upload Initial/Forced Values during target upload from the PLC, users can update the Initial Value and Initial Force State fields of PME project variables with the Current Values and Current Force State from PLC variables. This process ensures that the Current Value becomes the Initial Value and the Current Force State becomes the Initial Force State. This feature is extremely helpful and provides the information needed. Thank you for clarifying!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>paramesium</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you please provide screenshots of the pages? I am unable to access them in my country even when using a VPN.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James6</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The links have expired as GE divested its PLC business to Emerson in the past decade.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1. Do the current parameter values get uploaded when backing up a program on GE PLC systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, when backing up a program on GE PLC systems, the current parameter values are automatically uploaded along with the program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What does "Initial value" mean when selecting it during the download of a GE PLC program?</h4>
<p class='text-muted'><strong>Answer:</strong> - In the context of downloading a GE PLC program, selecting "Initial value" means that the program will be downloaded with the initial values set in the program. It does not take into account any changes made to the values during runtime.</p>
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
