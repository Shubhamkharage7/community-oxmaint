
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am seeking guidance on extracting data from equipment with RS-232 communication to a 1756-L73 ControlLogix 5570 Controller. I am exploring the use of an RS232 to POE Ethernet adapter from Waveshare for this purpose. The specific equipment I am working with is an ADR-50D Universal Closure">
    <meta name="keywords" content="rs-232 data extraction, adr-50d dud detectors, controllogix 5570 controller, rs232 to poe ethernet adapter, waveshare rs232 adapter, 6">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-extract-rs-232-data-for-adr-50d-dud-detectors-with-controllogix-5570-controller">
    <title>How to Extract RS-232 Data for ADR-50D Dud Detectors with ControlLogix 5570 Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Extract RS-232 Data for ADR-50D Dud Detectors with ControlLogix 5570 Controller | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am seeking guidance on extracting data from equipment with RS-232 communication to a 1756-L73 ControlLogix 5570 Controller. I am exploring the use of an RS232 to POE Ethernet adapter from Waveshare for this purpose. The specific equipment I am working with is an ADR-50D Universal Closure">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-extract-rs-232-data-for-adr-50d-dud-detectors-with-controllogix-5570-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Extract RS-232 Data for ADR-50D Dud Detectors with ControlLogix 5570 Controller | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am seeking guidance on extracting data from equipment with RS-232 communication to a 1756-L73 ControlLogix 5570 Controller. I am exploring the use of an RS232 to POE Ethernet adapter from Waveshare for this purpose. The specific equipment I am working with is an ADR-50D Universal Closure">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-extract-rs-232-data-for-adr-50d-dud-detectors-with-controllogix-5570-controller"
      },
      "headline": "How to Extract RS-232 Data for ADR-50D Dud Detectors with ControlLogix 5570 Controller",
      "description": "Hello everyone, I am seeking guidance on extracting data from equipment with RS-232 communication to a 1756-L73 ControlLogix 5570 Controller. I am exploring the use of an RS232 to POE Ethernet adapter from Waveshare for this purpose. The specific equipment I am working with is an ADR-50D Universal Closure",
      "author": {
        "@type": "Person",
        "name": "byoko"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-12",
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
                <h1 class="text-white">How to Extract RS-232 Data for ADR-50D Dud Detectors with ControlLogix 5570 Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>byoko</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">503</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">249</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am seeking guidance on extracting data from equipment with RS-232 communication to a 1756-L73 ControlLogix 5570 Controller. I am exploring the use of an RS232 to POE Ethernet adapter from Waveshare for this purpose. The specific equipment I am working with is an ADR-50D Universal Closure Monitor, commonly referred to as dud detectors in the canning industry.

This equipment utilizes simplex communication, where it only transmits data without receiving any. While reviewing the communication setup outlined in the equipment manual (see IMG 1), it appears that a non-standard protocol is being used. Will this require formatting adjustments on the receiving end?

I have also included a screenshot of the web configuration page for the converter I am using (see IMG 2). Here, the serial settings can be configured to match the equipment and set up the IP address. I am unsure about the appropriate selection in the Work Mode dropdown (highlighted in blue in IMG 2), which includes options like TCP Server, TCP Client, UDP, and UDP Group. I am uncertain which option is suitable for my setup and whether this converter is compatible with my objectives.

Is it possible to retrieve the serial information to my controller with the converter's known IP address and the expected data packet format? I am seeking confirmation if I am on the right track or if an alternative approach should be considered. Please let me know if further clarification or additional details are needed.

Thank you for your assistance in advance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like a common occurrence for overseas developers to include a misspelled word in every interaction. This device appears to be a serial server that requires a software component on a computer to access. TacticalSoftware offers a solution that I personally utilize, but there are other options available as well. To integrate a PLC with this device, a custom Socket message may be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have been relying on ProSoft devices for a long time, but I have not had the chance to try out the EtherNet/IP to ASCII gateway from ProSoft Technology, Inc. This communication gateway enables fast and efficient data exchange between EtherNet/IP-enabled PACs and ASCII devices like weigh scales and barcode readers. The EtherNet/IP protocol driver supports explicit messaging, while the gateway can be configured as both a client and a server. This device is compatible with ControlLogix processors and ensures seamless integration for your industrial automation needs. -Alan</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asenior</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the RTA Ascii gateways460ETC - a straightforward method for linking ASCII devices with an Allen Bradley PLC. Easily connect your ASCII devices directly to the data table of your Allen-Bradley PLC with this innovative solution. Visit rtautomation.com to learn more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Increase your search engine rankings with RTA gateway devices! Give a thumbs up for RTA gateways to enhance your network connectivity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KuulKuum</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Opt for a different gateway instead of the waveshare device to simplify the process. The waveshare device only supports TCP/IP or ModbusTCP protocols, requiring socket programming in the Logix or downloading AOIs for programming. Consider using a "Serial to EtherNet/IP" gateway for a more efficient solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface brings up an excellent point that is worth considering. In addition to that, another viable option to explore is the AOI (Add-On Instruction) for Rockwell Automation products. To access it, simply go to the Rockwell Automation website and search for 'Modbus TCP', then select 'Sample Code'. This can be a useful tool for enhancing your automation processes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asenior</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Get over +100 RTA 435NBX- 99 at an unbeatable price.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
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
<h4 class='text-dark'>FAQ: 1. Does the ADR-50D Dud Detector equipment use a non-standard protocol for communication over RS-232?</h4>
<p class='text-muted'><strong>Answer:</strong> - The equipment manual indicates the use of a potentially non-standard protocol. Adjustments may be necessary on the receiving end to interpret and process the data correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Which Work Mode option should be selected on the RS232 to POE Ethernet adapter for interfacing with the ControlLogix 5570 Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - The options provided in the Work Mode dropdown menu, such as TCP Server, TCP Client, UDP, and UDP Group, need to be understood to determine the suitable choice for the RS-232 communication setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can the RS-232 data be successfully extracted to the ControlLogix 5570 Controller using the converter's IP address and the expected data packet format?</h4>
<p class='text-muted'><strong>Answer:</strong> - Confirming if the chosen converter and setup will allow for the transfer of serial information to the controller or if an alternative approach may be more appropriate is crucial for successful data extraction.</p>
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
