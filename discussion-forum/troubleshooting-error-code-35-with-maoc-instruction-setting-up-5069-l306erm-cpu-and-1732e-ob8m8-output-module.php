
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on setting up a 5069-L306ERM CPU with a 1732E-OB8M8 output module to generate cam signals using the MAOC command. I am utilizing a 842E encoder in this process. Initially, I created a virtual axis in my workshop and synchronized it with the encoder">
    <meta name="keywords" content="maoc instruction, error code 35, 5069-l306erm cpu, 1732e-ob8m8 output module, troubleshooting, setting up, cam signals, 842e encoder, virtual axis, synchronized">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-error-code-35-with-maoc-instruction-setting-up-5069-l306erm-cpu-and-1732e-ob8m8-output-module">
    <title>Troubleshooting Error Code 35 with MAOC Instruction - Setting up 5069-L306ERM CPU and 1732E-OB8M8 Output Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Error Code 35 with MAOC Instruction - Setting up 5069-L306ERM CPU and 1732E-OB8M8 Output Module | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on setting up a 5069-L306ERM CPU with a 1732E-OB8M8 output module to generate cam signals using the MAOC command. I am utilizing a 842E encoder in this process. Initially, I created a virtual axis in my workshop and synchronized it with the encoder">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-error-code-35-with-maoc-instruction-setting-up-5069-l306erm-cpu-and-1732e-ob8m8-output-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Error Code 35 with MAOC Instruction - Setting up 5069-L306ERM CPU and 1732E-OB8M8 Output Module | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on setting up a 5069-L306ERM CPU with a 1732E-OB8M8 output module to generate cam signals using the MAOC command. I am utilizing a 842E encoder in this process. Initially, I created a virtual axis in my workshop and synchronized it with the encoder">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-error-code-35-with-maoc-instruction-setting-up-5069-l306erm-cpu-and-1732e-ob8m8-output-module"
      },
      "headline": "Troubleshooting Error Code 35 with MAOC Instruction - Setting up 5069-L306ERM CPU and 1732E-OB8M8 Output Module",
      "description": "Hello everyone, I am currently working on setting up a 5069-L306ERM CPU with a 1732E-OB8M8 output module to generate cam signals using the MAOC command. I am utilizing a 842E encoder in this process. Initially, I created a virtual axis in my workshop and synchronized it with the encoder",
      "author": {
        "@type": "Person",
        "name": "ibora"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-16",
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
                <h1 class="text-white">Troubleshooting Error Code 35 with MAOC Instruction - Setting up 5069-L306ERM CPU and 1732E-OB8M8 Output Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ibora</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1423</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">31</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on setting up a 5069-L306ERM CPU with a 1732E-OB8M8 output module to generate cam signals using the MAOC command. I am utilizing a 842E encoder in this process. Initially, I created a virtual axis in my workshop and synchronized it with the encoder axis. Subsequently, I configured the MAOC command and generated all necessary cams for two outputs. However, when transitioning the system to the machine in the field, I encountered an issue after changing the "execution target" parameter from 0 to 2 (also in axis parameter) - error code 35. Despite reverting back to the original parameters, the error persists. Error code 35 signifies that the specified execution target surpasses the number of Output Cam targets configured for the axis. Any insights on resolving this issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize performance, consider setting the execution target to 1 (options are 2, 0, and 1). Choosing 2 would result in 3 different outputs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. However, setting the parameter to 0 resulted in the production of two outputs from the cams.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ibora</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To achieve a MAOC target of 2, you must adjust the total Output Cam Execution Targets to 3 in the Axis Properties of your Virtual Axis setting. This adjustment will help optimize performance and reach your desired output goals.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MattHatter</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is error code 35 in the context of setting up a 5069-L306ERM CPU with a 1732E-OB8M8 output module using the MAOC instruction?</h4>
<p class='text-muted'><strong>Answer:</strong> - Error code 35 indicates that the specified execution target exceeds the number of Output Cam targets configured for the axis.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot error code 35 when encountering it during the transition of the system to the field after changing parameters?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot error code 35, try reverting back to the original parameters. If the error persists, ensure that the number of Output Cam targets configured for the axis matches the specified execution target.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps should be taken to resolve error code 35 related to the MAOC command when setting up cam signals with a 5069-L306ERM CPU and a 1732E-OB8M8 output module?</h4>
<p class='text-muted'><strong>Answer:</strong> - To resolve error code 35, make sure that the execution target parameter does not exceed the number of Output Cam targets configured for the axis. Check the configuration of cams for two outputs and ensure they align correctly with the axis setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a common mistake that leads to error code 35 in the context of utilizing the MAOC command with a 5069-L306ERM CPU and a 1732E-OB8M8 output module?</h4>
<p class='text-muted'><strong>Answer:</strong> - One common mistake leading to error code 35 is setting the execution target parameter</p>
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
