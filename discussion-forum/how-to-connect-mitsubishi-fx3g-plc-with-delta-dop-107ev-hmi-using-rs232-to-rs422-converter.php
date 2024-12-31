
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am looking to establish communication between a Delta HMI DOP-107EV and a Mitsubishi FX3G PLC. The issue lies in the fact that the Delta HMI only has RS485 and RS232 ports, while the FX3G has RS422. Can a RS232 to RS422 converter be utilized to facilitate this communication?">
    <meta name="keywords" content="mitsubishi fx3g plc, delta dop-107ev hmi, rs232 to rs422 converter, rs485 to rs232 communication, dopsoft communication settings, establish communication, hmi port compatibility, serial communication protocol, rs422">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-mitsubishi-fx3g-plc-with-delta-dop-107ev-hmi-using-rs232-to-rs422-converter">
    <title>How to Connect Mitsubishi FX3G PLC with Delta DOP-107EV HMI using RS232 to RS422 Converter | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect Mitsubishi FX3G PLC with Delta DOP-107EV HMI using RS232 to RS422 Converter | Oxmaint Community">
    <meta property="og:description" content="I am looking to establish communication between a Delta HMI DOP-107EV and a Mitsubishi FX3G PLC. The issue lies in the fact that the Delta HMI only has RS485 and RS232 ports, while the FX3G has RS422. Can a RS232 to RS422 converter be utilized to facilitate this communication?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-mitsubishi-fx3g-plc-with-delta-dop-107ev-hmi-using-rs232-to-rs422-converter">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect Mitsubishi FX3G PLC with Delta DOP-107EV HMI using RS232 to RS422 Converter | Oxmaint Community">
    <meta name="twitter:description" content="I am looking to establish communication between a Delta HMI DOP-107EV and a Mitsubishi FX3G PLC. The issue lies in the fact that the Delta HMI only has RS485 and RS232 ports, while the FX3G has RS422. Can a RS232 to RS422 converter be utilized to facilitate this communication?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-mitsubishi-fx3g-plc-with-delta-dop-107ev-hmi-using-rs232-to-rs422-converter"
      },
      "headline": "How to Connect Mitsubishi FX3G PLC with Delta DOP-107EV HMI using RS232 to RS422 Converter",
      "description": "I am looking to establish communication between a Delta HMI DOP-107EV and a Mitsubishi FX3G PLC. The issue lies in the fact that the Delta HMI only has RS485 and RS232 ports, while the FX3G has RS422. Can a RS232 to RS422 converter be utilized to facilitate this communication?",
      "author": {
        "@type": "Person",
        "name": "EESSKKAA"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-28",
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
                <h1 class="text-white">How to Connect Mitsubishi FX3G PLC with Delta DOP-107EV HMI using RS232 to RS422 Converter</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>EESSKKAA</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">153</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">403</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am looking to establish communication between a Delta HMI DOP-107EV and a Mitsubishi FX3G PLC. The issue lies in the fact that the Delta HMI only has RS485 and RS232 ports, while the FX3G has RS422. Can a RS232 to RS422 converter be utilized to facilitate this communication? If so, what adjustments need to be made to the communication settings in DopSoft for this setup?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you haven't had the chance to try it with a Delta HMI, consider using the SC09 232/422 cable typically used for programming. This should be effective, although be aware that when the PLC is re-booted or powered up, the programming port will revert to the default settings of 9600 baud rate, Even.7, 1. Some HMIs have the capability to switch the PLC to alternative formats like Beijers, but not many. It is recommended to stick with the default baud rate, or alternatively, consider obtaining a 232 BD add-on board that can be configured to the default programming protocol.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This programmable logic controller (PLC) features front-facing modules at an affordable price point. With the FX3G-232-BD, you can easily access RS232 directly from the PLC, while the FC3G-485-BD offers RS485 connectivity. These modules provide cost-effective solutions for integrating communication protocols into your automation system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Automation Solutions</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, thank you for the response. Currently, I have successfully set up communication between my PC and PLC using a USB to RS422 cable. The DOPSoft simulation is functioning well. Next, I plan to test the setup with a real DOP HMI 107EV using an RS232 TO RS422 cable. If the connection does not work with the RS232 TO RS422 cable, I will consider using modules for communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>EESSKKAA</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I appreciate the response. Currently, the setup is functioning using a USB to RS422 cable connecting the PC to the PLC. The DopSoft simulation has been initiated and is performing well. Next, I plan to test it using an actual Dop HMI 107EV with an RS232 to RS422 cable. If the RS232 to RS422 cable does not yield the desired results, I will consider using modules.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>EESSKKAA</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Can I connect a Mitsubishi FX3G PLC with a Delta DOP-107EV HMI using a RS232 to RS422 converter?
- Yes, you can use a RS232 to RS422 converter to establish communication between the Delta HMI DOP-107EV and the Mitsubishi FX3G PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What communication ports does the Delta HMI DOP-107EV have?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Delta HMI DOP-107EV has RS485 and RS232 ports.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What type of communication port does the Mitsubishi FX3G PLC have?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Mitsubishi FX3G PLC has a RS422 port.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What adjustments are needed in DopSoft for the RS232 to RS422 converter setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - Specific adjustments may vary, but typically you will need to configure the communication settings in DopSoft to match the protocol and baud rate of the converter.</p>
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
