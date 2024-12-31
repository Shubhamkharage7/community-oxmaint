
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am facing an issue with 7 Allen Bradley 1756-IT6 thermocouple input cards, all using J type thermocouple inputs along with cold junction sensors. One of the cards is providing accurate readings, while the other 6 cards are consistently showing a 110-degree variance. Uncertain whether the cards are faulty">
    <meta name="keywords" content="allen bradley 1756-it6, thermocouple input cards, inconsistent readings, calibration error, j type thermocouple, cold junction sensors, faulty cards, calibration instructions, error message, module not found, invalid path">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-1756-it6-thermocouple-input-cards-with-inconsistent-readings-and-calibration-error">
    <title>Troubleshooting Allen Bradley 1756-IT6 Thermocouple Input Cards with Inconsistent Readings and Calibration Error | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Allen Bradley 1756-IT6 Thermocouple Input Cards with Inconsistent Readings and Calibration Error | Oxmaint Community">
    <meta property="og:description" content="I am facing an issue with 7 Allen Bradley 1756-IT6 thermocouple input cards, all using J type thermocouple inputs along with cold junction sensors. One of the cards is providing accurate readings, while the other 6 cards are consistently showing a 110-degree variance. Uncertain whether the cards are faulty">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-1756-it6-thermocouple-input-cards-with-inconsistent-readings-and-calibration-error">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Allen Bradley 1756-IT6 Thermocouple Input Cards with Inconsistent Readings and Calibration Error | Oxmaint Community">
    <meta name="twitter:description" content="I am facing an issue with 7 Allen Bradley 1756-IT6 thermocouple input cards, all using J type thermocouple inputs along with cold junction sensors. One of the cards is providing accurate readings, while the other 6 cards are consistently showing a 110-degree variance. Uncertain whether the cards are faulty">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-1756-it6-thermocouple-input-cards-with-inconsistent-readings-and-calibration-error"
      },
      "headline": "Troubleshooting Allen Bradley 1756-IT6 Thermocouple Input Cards with Inconsistent Readings and Calibration Error",
      "description": "I am facing an issue with 7 Allen Bradley 1756-IT6 thermocouple input cards, all using J type thermocouple inputs along with cold junction sensors. One of the cards is providing accurate readings, while the other 6 cards are consistently showing a 110-degree variance. Uncertain whether the cards are faulty",
      "author": {
        "@type": "Person",
        "name": "jtorres2"
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
                <h1 class="text-white">Troubleshooting Allen Bradley 1756-IT6 Thermocouple Input Cards with Inconsistent Readings and Calibration Error</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jtorres2</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4431</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">224</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am facing an issue with 7 Allen Bradley 1756-IT6 thermocouple input cards, all using J type thermocouple inputs along with cold junction sensors. One of the cards is providing accurate readings, while the other 6 cards are consistently showing a 110-degree variance. Uncertain whether the cards are faulty or require calibration, I attempted to calibrate them as per the manual instructions. However, I encountered an error message stating "The module cannot be found. The path specified was invalid," hindering the calibration process. Despite ensuring proper settings for major and minor revisions, I am unable to resolve the issue. Notably, all cards function correctly with milivolt inputs instead of thermocouples, adding to my confusion. Your assistance is greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the forum! It appears that the issue you are facing pertains to configuration settings. Can you please provide a photo showcasing how you have set up your cards? This will help us better understand and assist you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you replace a "Bad" card with a "Good" card, the accuracy of the "Good" readings may still be reliable. If not, there may be a configuration problem or a wiring issue with the "Bad" cards. You have the option to hot-swap (if safe for your operations) using Logix.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rdrast</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your assistance. My current setup includes the power supply, the 1756-l55 processor in slot 0, and the 1756-it6i/a in slot 1. My goal is to test all the inputs on the card. Despite setting the properties under configuration the same for both good and bad cards, and using the same testing program and wiring connector for all cards, the issue does not seem to be related to configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jtorres2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The image shows the card in slot 9, but I experimented with various slots. I tested different configurations for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jtorres2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Calibrating at 110 degrees involves more than just a simple adjustment. It is essential to thoroughly inspect the wiring to ensure correct polarity throughout the entire system, not just at the card. For a helpful guide on thermocouple color codes, visit Omega's website: http://www.omega.com/techref/thermcolorcodes.html.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mickey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have ruled out the thermocouple wiring as the issue, as the functioning unit is working perfectly. However, I am still facing challenges in calibrating the units.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jtorres2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you connect TC extension wires directly to the TC Card input wiring arm, or are there additional junctions in between? When troubleshooting 'Bad' cards, remove all wiring and connect them individually to test if the channels are still malfunctioning. Consider connecting one T/C at a time directly to the 'Bad' modules. Check the readings of the CJC devices for temperatures (Module:Slot:I.CJData).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rdrast</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jtorres2 mentioned that they have one reliable card providing accurate readings, while six other cards are not performing well and are consistently off by 110 degrees. It is important to clarify how temperature measurements are being observed, as the configuration in the picture may be confusing. Engineering values should not be the same as millivolt values; if they are, a conversion table for mV to degrees should be used. Engineering values should represent the minimum and maximum values in degrees Fahrenheit for the type J thermocouple, allowing for temperature monitoring through rslogix or a SCADA system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When measuring temperature, it's important to ensure that your engineering values are accurate and not the same as your millivolt values. If they are the same, you will need to use a conversion table to accurately convert from millivolts to degrees. Your engineering values should represent the minimum and maximum temperature values in degrees Fahrenheit for your type J thermocouple. This will allow you to effectively monitor temperature using software such as rslogix or a SCADA system. The default values provided should be sufficient, but it's always a good idea to double-check. Check out the image below for further clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mickey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently utilizing the standard settings for the j type thermocouple.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jtorres2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Has this issue been resolved? I am experiencing the same problem with a card at my facility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dbowers</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why are my Allen Bradley 1756-IT6 thermocouple input cards showing inconsistent readings?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Inconsistent readings on multiple cards could indicate a calibration issue or potential faults within the cards themselves.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve the calibration error message "The module cannot be found. The path specified was invalid" while trying to calibrate the Allen Bradley 1756-IT6 cards?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error message during calibration may point to incorrect settings or potential issues with the calibration process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why do the Allen Bradley 1756-IT6 cards work correctly with milivolt inputs but not with thermocouples?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Correct functionality with milivolt inputs but not with thermocouples could indicate specific issues related to the thermocouple inputs or their calibration settings.</p>
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
