
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Many incremental encoders feature a zero track that generates a pulse with each rotation. When configuring the encoder in most controllers, setting the zero track prompts the controller to verify the encoders pulse count. For example, with a 1024 pulse encoder, the controller will ensure that after 1024 pulses">
    <meta name="keywords" content="incremental encoders zero track functionality, verify encoder pulse count, encoder miscount detection, zero track activation in controllers, encoder accuracy measurement, emc interference in encoder systems, zero track">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-use-and-verify-zero-track-functionality-in-incremental-encoders">
    <title>How to Use and Verify Zero Track Functionality in Incremental Encoders | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Use and Verify Zero Track Functionality in Incremental Encoders | Oxmaint Community">
    <meta property="og:description" content="Many incremental encoders feature a zero track that generates a pulse with each rotation. When configuring the encoder in most controllers, setting the zero track prompts the controller to verify the encoders pulse count. For example, with a 1024 pulse encoder, the controller will ensure that after 1024 pulses">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-use-and-verify-zero-track-functionality-in-incremental-encoders">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Use and Verify Zero Track Functionality in Incremental Encoders | Oxmaint Community">
    <meta name="twitter:description" content="Many incremental encoders feature a zero track that generates a pulse with each rotation. When configuring the encoder in most controllers, setting the zero track prompts the controller to verify the encoders pulse count. For example, with a 1024 pulse encoder, the controller will ensure that after 1024 pulses">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-use-and-verify-zero-track-functionality-in-incremental-encoders"
      },
      "headline": "How to Use and Verify Zero Track Functionality in Incremental Encoders",
      "description": "Many incremental encoders feature a zero track that generates a pulse with each rotation. When configuring the encoder in most controllers, setting the zero track prompts the controller to verify the encoders pulse count. For example, with a 1024 pulse encoder, the controller will ensure that after 1024 pulses",
      "author": {
        "@type": "Person",
        "name": "Plc_User"
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
                <h1 class="text-white">How to Use and Verify Zero Track Functionality in Incremental Encoders</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Plc_User</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4421</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">117</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Many incremental encoders feature a zero track that generates a pulse with each rotation. When configuring the encoder in most controllers, setting the zero track prompts the controller to verify the encoder's pulse count. For example, with a 1024 pulse encoder, the controller will ensure that after 1024 pulses following the zero track, a new zero track is detected. Failure to detect this pattern may trigger an alarm indicating a miscount. 

I am currently using an encoder for length measurement on a machine, but I am uncertain about its accuracy. The controller does not have the zero track activated, so I am considering enabling it to check for any miscounts by the encoder, especially in relation to potential EMC interference. Can activating the zero track and receiving no encoder errors confirm that the counting process is accurate? 

I am particularly interested in hearing about others' experiences with utilizing the 'zero track' feature. My system involves a Siemens S120 with encoders connected to SMC 30, although similar setups could apply to any drive system.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the encoder integrated with a motor or is it installed as a separate component?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The encoder in question is part of an SMC30 encodermodule connected to a Simotion D410, rather than being integrated into the motor itself. While the encoder is not directly utilized for driving purposes, it serves as a length measurement tool for the Simotion D410 CPU. Additionally, users can configure the SMC30 to include a zero track if needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Plc_User</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the comments, Plc_User mentioned concerns about potential alarms being triggered if a pulse is missing in the system. While I don't have much experience with Siemens S120 and Simotion, I have yet to come across such a diagnostic capability in my work with controllers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sergei Troizky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you verifying the encoder counts to ensure accuracy with the measured length?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a flying shear application, there is uncertainty about the encoder counts matching the actual length of the cut pieces. The controller displays correct cut lengths, but when measured, the pieces show varying tolerances of millimeters. Despite thorough checks, including tracing the machine's operation, incorrect counting remains a possible source of discrepancy to investigate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Plc_User</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the optimal count per millimeter for encoders with marker pulses like MasterDrive and S120? In my experience, I have never encountered a fault caused by incorrect pulses within 1 revolution, although it may be detected but not reported. To test this, enable the marker pulse and adjust the encoder configuration to double the actual pulse count. This will result in the controller receiving only half of the expected pulses in one revolution, allowing for prompt identification of any missing pulse faults.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If this is the same software application as previously used, there should not be any missed counts, considering that the frequency of occurrence is not very high. It is important to determine whether the lengths of cuts are either longer or shorter than they are intended to be. Lengthy cuts may be the result of a slipping master encoder, while a combination of factors may indicate a lack of precision in control. The encoder decoder typically registers 4 phases per line, with the phases needing to be in correct sequence to avoid immediate error generation when they occur out of order. While connecting the Z input should not be necessary, it also does not cause harm to do so. It is advisable to inspect the power supply for any dropouts and the encoder lines for noise, although noise usually results in extra counts or a fault. In most cases, mechanical issues are the root cause of problems rather than electronic malfunctions. Are you able to create a motion profile graph at a millisecond level or faster? This will allow for a closer monitoring of any changes in counts and abnormal encoder behavior.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>How to troubleshoot the issue of no pulse from encoder alarms</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Brook</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the purpose of the zero track feature in incremental encoders?</h4>
<p class='text-muted'><strong>Answer:</strong> - The zero track feature generates a pulse with each rotation, allowing controllers to verify the encoder's pulse count accuracy.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How does setting the zero track help in detecting miscounts in incremental encoders?</h4>
<p class='text-muted'><strong>Answer:</strong> - By setting the zero track, controllers can ensure that the correct number of pulses occur after the zero track signal, helping to identify miscounts.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can activating the zero track feature and not receiving any encoder errors confirm the accuracy of the counting process?</h4>
<p class='text-muted'><strong>Answer:</strong> - Activating the zero track and not encountering any errors can indicate that the counting process is accurate, especially in detecting miscounts due to potential interference.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are some benefits of utilizing the zero track feature in incremental encoders?</h4>
<p class='text-muted'><strong>Answer:</strong> - Using the zero track feature can help improve accuracy in pulse counting, detect miscounts, and address potential EMC interference issues, enhancing the reliability of length measurements on machines.</p>
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
