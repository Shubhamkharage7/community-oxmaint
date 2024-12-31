
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am faced with the challenge of connecting a RS232 Modbus RTU slave, which only has Tx, Rx, and GND signals, to a Modbus RTU master. I have found that the RS232 to RS485 converters available require the complete set of RS232 signals to work properly. However, after">
    <meta name="keywords" content="rs232 to rs485 conversion, modbus rtu communication, tx, rx, gnd signals, rs232 modbus rtu slave, rs232 to rs485 converter, serial boards, windows pc, modbus rtumbpoll, pcie">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/successful-rs232-to-rs485-conversion-with-3-signals-tx-rx-gnd">
    <title>Successful RS232 to RS485 Conversion with 3 Signals: Tx, Rx, GND | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Successful RS232 to RS485 Conversion with 3 Signals: Tx, Rx, GND | Oxmaint Community">
    <meta property="og:description" content="Hello, I am faced with the challenge of connecting a RS232 Modbus RTU slave, which only has Tx, Rx, and GND signals, to a Modbus RTU master. I have found that the RS232 to RS485 converters available require the complete set of RS232 signals to work properly. However, after">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/successful-rs232-to-rs485-conversion-with-3-signals-tx-rx-gnd">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Successful RS232 to RS485 Conversion with 3 Signals: Tx, Rx, GND | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am faced with the challenge of connecting a RS232 Modbus RTU slave, which only has Tx, Rx, and GND signals, to a Modbus RTU master. I have found that the RS232 to RS485 converters available require the complete set of RS232 signals to work properly. However, after">
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
        "@id": "https://community.oxmaint.com/discussion-forum/successful-rs232-to-rs485-conversion-with-3-signals-tx-rx-gnd"
      },
      "headline": "Successful RS232 to RS485 Conversion with 3 Signals: Tx, Rx, GND",
      "description": "Hello, I am faced with the challenge of connecting a RS232 Modbus RTU slave, which only has Tx, Rx, and GND signals, to a Modbus RTU master. I have found that the RS232 to RS485 converters available require the complete set of RS232 signals to work properly. However, after",
      "author": {
        "@type": "Person",
        "name": "AlfredoQuintero"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-21",
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
                <h1 class="text-white">Successful RS232 to RS485 Conversion with 3 Signals: Tx, Rx, GND</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">393</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">204</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am faced with the challenge of connecting a RS232 Modbus RTU slave, which only has Tx, Rx, and GND signals, to a Modbus RTU master. I have found that the RS232 to RS485 converters available require the complete set of RS232 signals to work properly. However, after numerous attempts and hours of experimentation, I accidentally stumbled upon a wiring setup that successfully connected the devices.

To confirm this unexpected success, I tested the setup with two different serial boards on a Windows PC (a PCIe board and a USB board) and achieved the same positive results. The configuration looked like this:

Windows PC -> Modbus RTUMBPOLL (RS232C) -> PCIe or USB to RS485 Converter -> Slave

The wiring setup I used was as follows:

- Pin 1 (A+) connected to GND
- Pin 2 (B-) connected to Rx
- Pin 5 (GND) connected to Tx

This configuration worked effectively, although I am unsure of the specific reasons why. Before recommending this solution to the customer, I would like to understand the underlying principles that make it successful. I appreciate any advice or insights you can provide on this matter. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully solved the issue with the help of DSD TECH's innovative product. DSD TECH is revolutionizing the way we connect to the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It has been over ten years since I last connected a Modbus RTU slave to a Master using an RS-232 port. I believe that a USB/RS-232 converter with an FTDI chipset should work with just Tx, Rx, and GND connections, but I am unable to confirm as I have only worked with RS-485 in recent years. Nevertheless, I am pleased to hear that you were able to find a solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Dan, I hope you are well. I would like to share some interesting information with you and potentially others. This particular refinery has a large number of Rosemount FF transmitters, specifically for pressure and temperature readings. They are using an older Azbil DCS that only supports RS232C, so they have added an RS232 to RS485 media converter as the devices are located far from the control system. The converter is linked to a Rosemount 3420 unit, which acts as a gateway by converting FF data to Modbus RTU for the Azbil system.

However, the Rosemount 3420 has been discontinued, and the client is looking to replace it with FG-200 without needing to make changes to the Azbil DCS. This transition will require a converter that is externally powered, and I plan to provide a more robust industrial-grade solution. While I source the necessary equipment for the client, I will use my current setup to configure the FG-200 and complete the necessary mapping.

Feel free to take a look at the setup in my lab, which may be a bit chaotic at the moment. Wishing you a wonderful weekend ahead.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
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
<h4 class='text-dark'>FAQ: 1. What signals are required for RS232 to RS485 conversion?</h4>
<p class='text-muted'><strong>Answer:</strong> - Typically, RS232 to RS485 converters require signals such as Tx, Rx, GND, RTS, and CTS for proper functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can RS232 devices with only Tx, Rx, and GND signals be successfully converted to RS485?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to convert RS232 devices with only Tx, Rx, and GND signals to RS485 with a specific wiring setup, as described in the thread content.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What was the successful wiring setup for connecting a RS232 Modbus RTU slave to a Modbus RTU master via RS485?</h4>
<p class='text-muted'><strong>Answer:</strong> - The successful wiring setup included connecting A+ (Pin 1) to GND, B- (Pin 2) to Rx, and GND (Pin 5) to Tx.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Why did the unconventional wiring setup work for the RS232 to RS485 conversion?</h4>
<p class='text-muted'><strong>Answer:</strong> - The specific reasons behind the success of the unconventional wiring setup may involve signal polarity, voltage levels, or communication protocol compatibility. Further analysis may be needed to fully understand the underlying principles.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can one replicate the successful RS232 to RS485 conversion setup using a Windows PC and serial boards?</h4>
<p class='text-muted'><strong>Answer:</strong> - To replicate the successful setup, one can use a Windows PC, a Modbus RTUMBPOLL (RS232C), a PCIe or USB to RS485 converter, and follow the wiring configuration mentioned in the thread content</p>
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
