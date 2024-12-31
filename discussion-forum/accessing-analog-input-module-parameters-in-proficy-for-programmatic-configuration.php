
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently working on a project that involves scaling %AI to -10.0 to 10.0 VDC. The input data is stored as a 16-bit Integer and cannot be changed to a REAL format. My goal is to explore the possibility of utilizing the module scaling parameters in the">
    <meta name="keywords" content="analog input module, proficy, programmatic configuration, scaling parameters, ai_int blocks, hardware configuration, ic695alg616, cpu ic695cpe305, cpu firmware, channel configuration, high-scale engineering units, raw input">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/accessing-analog-input-module-parameters-in-proficy-for-programmatic-configuration">
    <title>Accessing Analog Input Module Parameters in Proficy for Programmatic Configuration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Accessing Analog Input Module Parameters in Proficy for Programmatic Configuration | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently working on a project that involves scaling %AI to -10.0 to 10.0 VDC. The input data is stored as a 16-bit Integer and cannot be changed to a REAL format. My goal is to explore the possibility of utilizing the module scaling parameters in the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/accessing-analog-input-module-parameters-in-proficy-for-programmatic-configuration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Accessing Analog Input Module Parameters in Proficy for Programmatic Configuration | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently working on a project that involves scaling %AI to -10.0 to 10.0 VDC. The input data is stored as a 16-bit Integer and cannot be changed to a REAL format. My goal is to explore the possibility of utilizing the module scaling parameters in the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/accessing-analog-input-module-parameters-in-proficy-for-programmatic-configuration"
      },
      "headline": "Accessing Analog Input Module Parameters in Proficy for Programmatic Configuration",
      "description": "Hello, I am currently working on a project that involves scaling %AI to -10.0 to 10.0 VDC. The input data is stored as a 16-bit Integer and cannot be changed to a REAL format. My goal is to explore the possibility of utilizing the module scaling parameters in the",
      "author": {
        "@type": "Person",
        "name": "Athena209"
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
                <h1 class="text-white">Accessing Analog Input Module Parameters in Proficy for Programmatic Configuration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Athena209</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">155</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">256</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently working on a project that involves scaling %AI to -10.0 to 10.0 VDC. The input data is stored as a 16-bit Integer and cannot be changed to a REAL format. My goal is to explore the possibility of utilizing the module scaling parameters in the hardware configuration of an analog module using AI_INT blocks. Here are some details about my setup:

Project Scope: Brown Field, focusing on software modifications only (no hardware changes for RX3i)
Proficy Version: V9.5 Build 7677
CPU: IC695CPE305
CPU firmware: 10.05
AI Module: IC695ALG616

I am interested in accessing the configuration parameters of an analog input module. For instance, by referring to the memory space name IC695ALG616_Rack1Slot2 in the CPE where the hardware configuration data is stored, I aim to perform the following:

// pseudo code
// move module parameter for high-scale engineering units to high scale for the RAW input to AI_INT
MOVE(IN := IC695ALG616_Rack1Slot2.Channel3.HighScaleEngUnits, OUT => AI_INT_Channel3.SL[3]);
// replicate for the low-value scaling of RAW
// end pseudo code

I am curious if the hardware configuration module parameters, such as IC695ALG616_Rack1Slot2.Channel3.HighScaleEngUnits, are accessible in the program. If so, please provide guidance on any necessary setup or configuration to access them. Additionally, clarify where this information may be stored. 

Any suggestions on alternative methods are appreciated. It would be valuable to understand this process for potential future utilization. I have extensively reviewed several GFK manuals but have only found diagnostic and status data, lacking the specific parameters of interest. Should there be a manual that I may have overlooked, please share your insights.

Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unable to locate the module's scaling parameters within the logic system. To resolve this, keep the high and low engineering units consistent with the high and low raw data values in the hardware configuration. Subsequently, establish a logic program to properly scale the signal.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider implementing scaling in the module configuration using Proficy ME (Machine Edition). The ALG616 module is capable of supporting this feature. Since you are already configuring the module to set the input range for the channel to -10/+10, it would be beneficial to also set the engineering units for scaling purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appeared to me that the original poster was looking for a way to adjust the hardware configuration scale parameters within the program. In my opinion, if you need to programmatically alter the scale parameters, it's best to avoid doing so within the hardware configuration and instead handle it in the logic of the program. This approach allows for more flexibility and control over the scaling process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Steve Bailey, it seems like the original poster (OP) is looking to adjust the hardware configuration scale parameters within the program. In my opinion, if you want to programmatically modify the scale parameters, it's best not to do the scaling in hardware configuration but rather in the logic. Using the Scale Block in ME within the logic can make it easier to adjust and avoids the need to stop the CPU to load new module configuration when implementing scaling in the channel configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I access the configuration parameters of an analog input module in Proficy for programmatic configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> - To access the hardware configuration module parameters in Proficy, you can refer to the memory space name where the data is stored. For example, in the provided scenario, IC695ALG616_Rack1Slot2.Channel3.HighScaleEngUnits is used to move the module parameter for high-scale engineering units to high scale for the RAW input to AI_INT.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Are the hardware configuration module parameters such as IC695ALG616_Rack1Slot2.Channel3.HighScaleEngUnits accessible in the program?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the hardware configuration module parameters are accessible in the program. You can use them to configure scaling for analog input modules in your project.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What setup or configuration is required to access the hardware configuration module parameters in Proficy?</h4>
<p class='text-muted'><strong>Answer:</strong> - To access the hardware configuration module parameters, you can use the memory space name where the data is stored, as demonstrated in the provided pseudo code. Ensure proper referencing and data types for accurate configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Where are the hardware configuration module parameters stored in Proficy?</h4>
<p class='text-muted'><strong>Answer:</strong> - The hardware configuration module parameters are stored in the memory space name associated with the specific module. In the provided scenario, IC695ALG616_Rack1Slot2 is referenced for accessing configuration data for the analog input module.</p>
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
