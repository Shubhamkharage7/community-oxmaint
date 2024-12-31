
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on a project utilizing an S7-1200 and TIA Portal V17 for stepper motor control of an SMD23E2 motor. I have been implementing a library of function blocks and tags from AMCIs website. The website provides a variety of resources for integrated stepper motor">
    <meta name="keywords" content="tia portal v17, s7-1200, stepper motor control, smd23e2 motor, amci library, function blocks, tags, integrated stepper motor controller drives, automation projects, home command, relative move command, jog">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-compile-error-in-tia-portal-v17-with-s7-1200-for-stepper-motor-control">
    <title>Troubleshooting Compile Error in TIA Portal V17 with S7-1200 for Stepper Motor Control | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Compile Error in TIA Portal V17 with S7-1200 for Stepper Motor Control | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on a project utilizing an S7-1200 and TIA Portal V17 for stepper motor control of an SMD23E2 motor. I have been implementing a library of function blocks and tags from AMCIs website. The website provides a variety of resources for integrated stepper motor">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-compile-error-in-tia-portal-v17-with-s7-1200-for-stepper-motor-control">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Compile Error in TIA Portal V17 with S7-1200 for Stepper Motor Control | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on a project utilizing an S7-1200 and TIA Portal V17 for stepper motor control of an SMD23E2 motor. I have been implementing a library of function blocks and tags from AMCIs website. The website provides a variety of resources for integrated stepper motor">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-compile-error-in-tia-portal-v17-with-s7-1200-for-stepper-motor-control"
      },
      "headline": "Troubleshooting Compile Error in TIA Portal V17 with S7-1200 for Stepper Motor Control",
      "description": "Hello everyone, I am currently working on a project utilizing an S7-1200 and TIA Portal V17 for stepper motor control of an SMD23E2 motor. I have been implementing a library of function blocks and tags from AMCIs website. The website provides a variety of resources for integrated stepper motor",
      "author": {
        "@type": "Person",
        "name": "marko18"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-15",
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
                <h1 class="text-white">Troubleshooting Compile Error in TIA Portal V17 with S7-1200 for Stepper Motor Control</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>marko18</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">6989</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">415</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on a project utilizing an S7-1200 and TIA Portal V17 for stepper motor control of an SMD23E2 motor. I have been implementing a library of function blocks and tags from AMCI's website. The website provides a variety of resources for integrated stepper motor controller drives that are commonly used in automation projects.

As of now, I have developed a basic program with functionalities such as home, relative move, and jog commands. However, when attempting to compile the program for uploading, I encountered an error message stating "Block ____ that is accessed has not been compiled." Unfortunately, no further information was provided to explain the issue.

I noticed that the sample projects available from AMCI are tailored for an S7-1500, specifically the 1516-3 CPU. Could this be a possible compatibility issue with the CPU? This is the only explanation I can come up with at the moment.

For reference, a screenshot of the error message is included below. Any insights or guidance on resolving this issue would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To compile specific PLC_1 modules in your project, simply right-click on it in the Project Tree and select the [Compile ...] option. Choose from "only changes", "rebuild all", or "rebuild all blocks" to compile the desired modules. Keep in mind that if you've asked the compiler to only compile the OB1 block, it may not recognize the data blocks (such as AMCI_...) referenced in OB1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy shared a helpful tip: To compile your PLC program in TIA Portal, simply right-click on PLC_1 in the Project Tree on the left, select [Compile ...], and choose one of the available [Software ...] options such as "only changes," "rebuild all," or "rebuild all blocks." It's important to note that when compiling, the compiler needs to have information about all the data blocks (e.g. AMCI_...) used by the OB1 block you want to compile. 

The compile button in the toolbar is context sensitive, meaning it will only compile the highlighted object (or the last active object). For instance, if Main [OB1] is highlighted in the Project Tree like in your screenshot, the compiler will only compile that specific block. Pay attention to the wording of your compile results to ensure everything was compiled correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RVaughan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you encounter the error mentioned, it could be due to errors in your database. One possible reason is leaving a "STRUCT" blank, intending to return later to fill it in. When attempting to Compile -> Software (rebuild all), this error may arise, ultimately directing you to the problematic block in the database.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CraigTRD</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to compile your PLC program, right-click on PLC_1 in the Project Tree and select the option to [Compile ...]. You can choose from one of the [Software ...] options such as "only changes," "rebuild all," or "rebuild all blocks." It's important to note that if you're focusing on compiling just the OB1 block, the compiler may not recognize the data blocks (AMCI_...) linked to OB1. Remember to expand your project for successful compilation. Thank you for your guidance, drbitboy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TafriSPS</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be the possible cause of the compile error message "Block ____ that is accessed has not been compiled" in TIA Portal V17 when working with an S7-1200 for stepper motor control?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error message might indicate that a required block has not been compiled, possibly due to missing or incomplete function blocks or tags in the project. It is essential to ensure all necessary components are properly integrated and compiled.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot a compile error in TIA Portal V17 when using AMCI's resources for stepper motor control with an S7-1200?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Verify the compatibility of the provided resources from AMCI with the S7-1200 CPU model being used. Ensure that the function blocks and tags are correctly implemented and compiled for the specific hardware configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is the compatibility issue with the CPU, specifically using an S7-1200 instead of the S7-1500 referenced in the sample projects from AMCI, a likely reason for encountering compile errors?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Incompatibility between the sample projects designed for S7-1500 and the S7-1200 CPU could potentially lead to compile errors. It is recommended to adapt the code and configurations accordingly to suit the hardware being utilized.</p>
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
