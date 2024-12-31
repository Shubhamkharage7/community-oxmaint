
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am looking to read three 4-20mA signals from a DCS (ABB) using a remote 6-channel analog input module with an RS485 Modbus port. When I connect the signals individually, I am able to read the raw count values in my AI module. However, when all three signals">
    <meta name="keywords" content="abb dcs, 4-20ma signals, analog input module, rs485 modbus port, connect multiple signals, remote analog input module, raw count values, ai module, connect signals simultaneously, single analog input module, reading signals, trou">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-multiple-4-20ma-signals-from-abb-dcs-using-analog-input-module-with-rs485-modbus-port">
    <title>How to Connect Multiple 4-20mA Signals from ABB DCS using Analog Input Module with RS485 Modbus Port | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect Multiple 4-20mA Signals from ABB DCS using Analog Input Module with RS485 Modbus Port | Oxmaint Community">
    <meta property="og:description" content="Hello, I am looking to read three 4-20mA signals from a DCS (ABB) using a remote 6-channel analog input module with an RS485 Modbus port. When I connect the signals individually, I am able to read the raw count values in my AI module. However, when all three signals">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-multiple-4-20ma-signals-from-abb-dcs-using-analog-input-module-with-rs485-modbus-port">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect Multiple 4-20mA Signals from ABB DCS using Analog Input Module with RS485 Modbus Port | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am looking to read three 4-20mA signals from a DCS (ABB) using a remote 6-channel analog input module with an RS485 Modbus port. When I connect the signals individually, I am able to read the raw count values in my AI module. However, when all three signals">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-multiple-4-20ma-signals-from-abb-dcs-using-analog-input-module-with-rs485-modbus-port"
      },
      "headline": "How to Connect Multiple 4-20mA Signals from ABB DCS using Analog Input Module with RS485 Modbus Port",
      "description": "Hello, I am looking to read three 4-20mA signals from a DCS (ABB) using a remote 6-channel analog input module with an RS485 Modbus port. When I connect the signals individually, I am able to read the raw count values in my AI module. However, when all three signals",
      "author": {
        "@type": "Person",
        "name": "sat"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-01",
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
                <h1 class="text-white">How to Connect Multiple 4-20mA Signals from ABB DCS using Analog Input Module with RS485 Modbus Port</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>sat</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">635</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">395</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am looking to read three 4-20mA signals from a DCS (ABB) using a remote 6-channel analog input module with an RS485 Modbus port. When I connect the signals individually, I am able to read the raw count values in my AI module. However, when all three signals are connected simultaneously, none of the signals work in the module. Is there a different method to connect all three signals in a single analog input module? Thank you for any assistance you can provide.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that you require isolation transmitters to ensure optimal signal quality and prevent interference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Encountering a common mode ground loop issue is a classic scenario in industrial settings. The AI circuits in the AI module may have a ground reference at a different potential compared to the DCS AO ground reference. While connecting a single AO signal may not exceed the AI module's common mode limitation, connecting all three signals can lead to an exceedance. In rare instances, resolving the problem may involve floating the DC (-) of the power supply feeding the AI module. Surprisingly, in one instance, establishing a ground connection between the AI and AO units proved beneficial. Typically, purchasing 4-20mA isolator modules is the recommended solution for such issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I unable to read three 4-20mA signals simultaneously from the DCS using a remote analog input module with an RS485 Modbus port?</h4>
<p class='text-muted'><strong>Answer:</strong> -  The issue might be related to wiring or signal interference when connecting multiple signals at once. It is important to ensure proper wiring connections and consider signal isolation techniques to prevent interference.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is there a recommended method to connect multiple 4-20mA signals to a single analog input module with RS485 Modbus communication?</h4>
<p class='text-muted'><strong>Answer:</strong> -  One common approach is to use signal isolators or signal splitters to isolate and condition each 4-20mA signal before connecting them to the analog input module. This helps in maintaining signal integrity and prevents cross-talk between the signals.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot the issue of none of the signals working when all three are connected simultaneously to the analog input module?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Start by checking the wiring connections for any shorts or incorrect terminations. Verify the power supply requirements for the analog input module and ensure that it can handle the combined current draw of all three signals. Additionally, consider checking the configuration settings of the analog input module to ensure it supports multiple simultaneous inputs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any considerations I should keep in mind when connecting multiple 4-20mA signals to a single analog input module for Modbus communication?</h4>
<p class='text-muted'><strong>Answer:</strong> -  It is</p>
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
