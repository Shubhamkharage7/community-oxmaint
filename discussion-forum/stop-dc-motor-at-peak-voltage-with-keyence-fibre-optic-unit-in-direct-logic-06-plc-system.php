
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently facing a unique challenge while working with a customers Direct Logic 06 PLC system. The customers setup includes a DC motor running at 10 RPM, connected to a shaft with a notch. A Keyence fibre optic unit is positioned to detect when light passes">
    <meta name="keywords" content="dc motor, keyence fibre optic unit, direct logic 06 plc system, stop motor, peak voltage, rpm, shaft notch, light detection, analog signal, peak voltage output, preset number, external factors, light values, dirt, rotation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/stop-dc-motor-at-peak-voltage-with-keyence-fibre-optic-unit-in-direct-logic-06-plc-system">
    <title>Stop DC Motor at Peak Voltage with Keyence Fibre Optic Unit in Direct Logic 06 PLC System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Stop DC Motor at Peak Voltage with Keyence Fibre Optic Unit in Direct Logic 06 PLC System | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently facing a unique challenge while working with a customers Direct Logic 06 PLC system. The customers setup includes a DC motor running at 10 RPM, connected to a shaft with a notch. A Keyence fibre optic unit is positioned to detect when light passes">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/stop-dc-motor-at-peak-voltage-with-keyence-fibre-optic-unit-in-direct-logic-06-plc-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Stop DC Motor at Peak Voltage with Keyence Fibre Optic Unit in Direct Logic 06 PLC System | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently facing a unique challenge while working with a customers Direct Logic 06 PLC system. The customers setup includes a DC motor running at 10 RPM, connected to a shaft with a notch. A Keyence fibre optic unit is positioned to detect when light passes">
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
        "@id": "https://community.oxmaint.com/discussion-forum/stop-dc-motor-at-peak-voltage-with-keyence-fibre-optic-unit-in-direct-logic-06-plc-system"
      },
      "headline": "Stop DC Motor at Peak Voltage with Keyence Fibre Optic Unit in Direct Logic 06 PLC System",
      "description": "Hello everyone, I am currently facing a unique challenge while working with a customers Direct Logic 06 PLC system. The customers setup includes a DC motor running at 10 RPM, connected to a shaft with a notch. A Keyence fibre optic unit is positioned to detect when light passes",
      "author": {
        "@type": "Person",
        "name": "bill hanson"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-07",
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
                <h1 class="text-white">Stop DC Motor at Peak Voltage with Keyence Fibre Optic Unit in Direct Logic 06 PLC System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bill hanson</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">235</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">327</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently facing a unique challenge while working with a customer's Direct Logic 06 PLC system. The customer's setup includes a DC motor running at 10 RPM, connected to a shaft with a notch. A Keyence fibre optic unit is positioned to detect when light passes through the notch as the shaft rotates. The Keyence unit outputs an analog signal based on the amount of light passing through the notch. The goal is to stop the motor when the Keyence unit reaches its peak voltage output.

The customer prefers to use the "peak" voltage rather than a preset number, as external factors such as light values or dirt may cause variations in the set value. Therefore, the motor should be stopped when the Keyence unit reaches the highest voltage for that specific rotation. Your assistance in solving this challenge would be greatly appreciated. Thank you, Bill.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The concept of "peak voltage" refers to a specific time period during which multiple voltage samples are taken across various motor positions. The ultimate peak voltage value cannot be determined until the final sample is collected. If the final sample does not represent the peak voltage, it indicates that the motor has surpassed the peak voltage position and needs to rotate in the opposite direction. But is the motor capable of doing so? How are motor positions managed and what role does inertia play in this process? Additionally, noise interference can make this task more challenging. Perhaps it is feasible to outline a strategy for approaching peak voltage and forecasting the next peak voltage position, but having control over the motor position in both directions would likely offer more advantages.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I use a Keyence fibre optic unit in a Direct Logic 06 PLC system to stop a DC motor at peak voltage?</h4>
<p class='text-muted'><strong>Answer:</strong> To stop the DC motor at peak voltage detected by the Keyence fibre optic unit, you can program the PLC to monitor the analog signal output by the Keyence unit and stop the motor once the signal reaches its highest voltage for that specific rotation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why is it important to stop the DC motor at the peak voltage detected by the Keyence unit instead of using a preset number?</h4>
<p class='text-muted'><strong>Answer:</strong> Stopping the motor at the peak voltage detected by the Keyence unit allows for greater precision and adaptability in response to external factors like varying light values or dirt that may affect the signal output. This approach ensures that the motor is stopped at the optimal point for each rotation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I account for variations in the peak voltage due to external factors like light values or dirt when setting up the system?</h4>
<p class='text-muted'><strong>Answer:</strong> By monitoring the analog signal output by the Keyence fibre optic unit in real-time and dynamically adjusting the stopping point based on the peak voltage detected for each rotation, you can account for variations caused by external factors and ensure accurate motor control.</p>
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
