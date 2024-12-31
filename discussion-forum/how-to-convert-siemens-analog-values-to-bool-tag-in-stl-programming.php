
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am new to the Siemens family and just starting to learn STL programming. I have been experimenting for the past two days and have successfully scaled a block in STL. Now, I am facing a challenge with a scaling block for a tank level sensor that">
    <meta name="keywords" content="siemens stl programming, analog values, bool tag, stl scaling block, tank level sensor, pump control, start and stop commands, boolean conversion, real to boolean, float to boolean, engineering limits, raw data calculation, sensor setpoints, motor">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-convert-siemens-analog-values-to-bool-tag-in-stl-programming">
    <title>How to Convert Siemens Analog Values to Bool Tag in STL Programming | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Convert Siemens Analog Values to Bool Tag in STL Programming | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am new to the Siemens family and just starting to learn STL programming. I have been experimenting for the past two days and have successfully scaled a block in STL. Now, I am facing a challenge with a scaling block for a tank level sensor that">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-convert-siemens-analog-values-to-bool-tag-in-stl-programming">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Convert Siemens Analog Values to Bool Tag in STL Programming | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am new to the Siemens family and just starting to learn STL programming. I have been experimenting for the past two days and have successfully scaled a block in STL. Now, I am facing a challenge with a scaling block for a tank level sensor that">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-convert-siemens-analog-values-to-bool-tag-in-stl-programming"
      },
      "headline": "How to Convert Siemens Analog Values to Bool Tag in STL Programming",
      "description": "Hello everyone, I am new to the Siemens family and just starting to learn STL programming. I have been experimenting for the past two days and have successfully scaled a block in STL. Now, I am facing a challenge with a scaling block for a tank level sensor that",
      "author": {
        "@type": "Person",
        "name": "Toks89"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-06",
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
                <h1 class="text-white">How to Convert Siemens Analog Values to Bool Tag in STL Programming</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Toks89</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">236</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">81</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am new to the Siemens family and just starting to learn STL programming. I have been experimenting for the past two days and have successfully scaled a block in STL. Now, I am facing a challenge with a scaling block for a tank level sensor that controls the start and stop of a pump (for learning purposes). 

My task is to compare the current level value with predefined low and high setpoints, and then activate a boolean tag to either start or stop the pump command. However, I am struggling with converting the real/float values from the scale block to a true or false value for controlling the motor.

Any advice or insight on this issue would be greatly appreciated. Below is my current code for reference:

// Eng Range Calculation
"L High Engineering Limits"
"L Low Engineering Limits"
-RT "Engineering Range"

// Raw Data Calculation
"L Raw Data High Limit"
"L Raw Data Low Limit"
-RT "Raw Data Range"

// Raw Data per Unit Calculation
//"Raw Data Range"
//"Engineering Range"
/RT "Raw Data per unit"

// Scaling Formula
"Analog Input" ITDT "AI INT DINT"
"L AI INT DINT"
DTRT "AI DINT Real"
"L AI DINT Real"
"L Raw Data Low Limit"
-RT "AI SUB"
"L AI SUB"
"Raw Data per unit" /RT "AI ADD"

// Adding Results with Low Eng Unit
"L AI ADD"
"Low Engineering Limits" +RT "Output Scale"</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It has been a while since I worked on S7, but in S5, the process is straightforward. Use the "Output Scale" function to load the actual level at 10.0 and the low level at the same time. If the level is greater than or equal to the low level threshold, the "Low Level" flag will be activated. Instead of reloading the level, consider using TAK to exchange values in the accumulators. Set the high level threshold at 100.0. While the syntax for comparing floats may differ between S5 and S7, it was G in S5 and likely R in S7.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Toks89, the task at hand involves comparing the current level value with predetermined high and low level setpoints, and then activating a boolean tag to either start or stop the pump command. This entails writing logic code, for which I recommend using LAD or FBD instead of STL. Programming in LAD or FBD is not only easier but also simpler to troubleshoot. It's worth noting that while STL is still available in S7-1500 for compatibility reasons, it is considered a deprecated language in the realm of S7 programming. Regardless of the PLC model you are using, opting for LAD or FBD for general logic coding is advised for improved efficiency and ease of maintenance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP highlighted the diminishing relevance of STL in the context of learning S7 programming. This observation certainly resonates with those in the field. While Latin may have its place for some, it's not the foundation on which beginners should build their programming knowledge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I convert Siemens analog values to a boolean tag in STL programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - To convert analog values to a boolean tag in STL programming, you need to compare the current level value with predefined low and high setpoints and then activate a boolean tag based on the comparison result. This process involves using conditional statements to determine whether to start or stop the pump command.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the process for scaling a tank level sensor in Siemens STL programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - Scaling a tank level sensor in Siemens STL programming involves comparing the current analog input values with the predefined engineering range limits and raw data limits. By applying the appropriate scaling formula and logic, you can convert the analog values to a format that can be used to control the pump motor.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I implement a control logic in STL programming to activate the pump based on tank level readings?</h4>
<p class='text-muted'><strong>Answer:</strong> - To implement a control logic in STL programming for activating the pump based on tank level readings, you need to compare the current tank level values with the low and high setpoints. Based on this comparison, you can set a boolean tag to either start or stop the pump command. This logic ensures that the pump operation is controlled effectively based on the sensor readings.</p>
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
