
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am currently working on reading values from a Loadcell using a 2080-TC card. Although the 2080-TC is commonly used as a thermocouple card, it can also read millivolts which is the signal I require. By setting the TC as type K and referring to the Type">
    <meta name="keywords" content="loadcell values, 2080-tc card, micro850 plc, reading millivolts, thermocouple card, type k thermocouple, type k thermocouple reference table, connected components workbench software, large pulley system">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-read-0-20mv-loadcell-values-with-2080-tc-card-on-micro850-plc">
    <title>How to Read 0-20mV Loadcell Values with 2080-TC Card on Micro850 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Read 0-20mV Loadcell Values with 2080-TC Card on Micro850 PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am currently working on reading values from a Loadcell using a 2080-TC card. Although the 2080-TC is commonly used as a thermocouple card, it can also read millivolts which is the signal I require. By setting the TC as type K and referring to the Type">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-read-0-20mv-loadcell-values-with-2080-tc-card-on-micro850-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Read 0-20mV Loadcell Values with 2080-TC Card on Micro850 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am currently working on reading values from a Loadcell using a 2080-TC card. Although the 2080-TC is commonly used as a thermocouple card, it can also read millivolts which is the signal I require. By setting the TC as type K and referring to the Type">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-read-0-20mv-loadcell-values-with-2080-tc-card-on-micro850-plc"
      },
      "headline": "How to Read 0-20mV Loadcell Values with 2080-TC Card on Micro850 PLC",
      "description": "Hello everyone! I am currently working on reading values from a Loadcell using a 2080-TC card. Although the 2080-TC is commonly used as a thermocouple card, it can also read millivolts which is the signal I require. By setting the TC as type K and referring to the Type",
      "author": {
        "@type": "Person",
        "name": "chikhim"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-04",
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
                <h1 class="text-white">How to Read 0-20mV Loadcell Values with 2080-TC Card on Micro850 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>chikhim</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">391</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">438</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am currently working on reading values from a Loadcell using a 2080-TC card. Although the 2080-TC is commonly used as a thermocouple card, it can also read millivolts which is the signal I require. By setting the TC as type K and referring to the Type K Thermocouple Reference Table, along with the formula: Connected Components Workbench software Data Count = (Temp (°C) + 270.0)*10, I have determined the counts needed for input (2700 for 0 mV and 7550 for 20 mV).

The system I am working on resembles a large pulley. When the load is stable, the PLC reads a consistent value. However, when the pulley is in motion, the input value fluctuates from low to high continuously. Does anyone have any insights into what could be causing this issue?

In addition, I have successfully implemented a similar setup using a Siemens PLC 1214 with AI1 x TC (6ES7 231-5QA30-0XB0). I also utilized an 0-20 mV calibrator to verify the channel, obtaining readings of 2700 counts at 0 mV and 7750 counts at 20 mV.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the frequency of mechanical variations in bearing stick/slip behavior and can it be correlated to mechanical factors?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey inquired about the frequency of variations and its potential correlation to mechanical factors such as stick/slip in the bearing. The frequency changes every second, unrelated to any mechanical aspects. Initially set at 16.7 Hz for data update rate, it was later adjusted to 10 Hz, but still experienced fluctuations every second.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chikhim</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to display a chart showing the fluctuation in value over a specific period, while the load stays consistent?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey inquired about generating a graph displaying the value over time with a consistent load. The load measured approximately 6900 lb (1.5mV from the load cell with a gain of 4300 Lb per mV). Instead of using graph software, I captured a video showcasing the load values as the pulley moved. Through a previous test using the same Loadcell connected to a Siemens PLC with a TC card, I determined that the load remained around 69xx weight while the pulley was in motion. The graph shows 23 seconds of fluctuating values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chikhim</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I will test the 2080sc-IF4u spectrum card to determine if it meets my requirements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chikhim</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>The load cell generates a linear millivolt signal, which is then interpreted by the thermocouple input as a type J or K thermocouple and linearized. However, the results may not always meet your expectations. If there are any mistakes in this process, feel free to correct me. - James.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you experienced signal oscillation when calibrating systems?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeffKiper</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1.  How can I read 0-20mV Loadcell values with a 2080-TC card on a Micro850 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To read 0-20mV Loadcell values with a 2080-TC card on a Micro850 PLC, you can set the TC as type K and refer to the Type K Thermocouple Reference Table. Utilize the formula: Connected Components Workbench software Data Count = (Temp (°C) + 270.0)10 to determine the counts needed for input (2700 for 0 mV and 7550 for 20 mV).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why does the input value fluctuate when the pulley is in motion even though the load is stable?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The fluctuation of the input value while the pulley is in motion could be caused by various factors such as vibrations, mechanical movement affecting the loadcell, or electrical interference. It is essential to check for any external influences affecting the loadcell readings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can I use a 2080-TC card for reading millivolts even though it is commonly used as a thermocouple card?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, the 2080-TC card can be used to read millivolts in addition to its primary function as a thermocouple card. By setting the TC as type K and following the necessary calculations, you can accurately read millivolt values with this card</p>
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
