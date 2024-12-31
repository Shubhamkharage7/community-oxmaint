
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, has anyone attempted to establish communication between a Schneider PM800 and a ML1400 PLC using rs485? I am encountering a problem where the local processor is receiving a message timeout. The wiring setup involves connecting terminal 20 (+) of the PM800 to channel 0 labeled B on">
    <meta name="keywords" content="rs485 communication, micrologix 1400 plc, schneider pm800 powermeter, troubleshooting communication, message timeout, wiring setup, terminal 20, terminal 19, terminal 18, baud rate 9600, no parity, read input">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-rs485-communication-between-micrologix-1400-plc-and-schneider-pm800-powermeter">
    <title>Troubleshooting RS485 Communication Between MicroLogix 1400 PLC and Schneider PM800 Powermeter | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting RS485 Communication Between MicroLogix 1400 PLC and Schneider PM800 Powermeter | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, has anyone attempted to establish communication between a Schneider PM800 and a ML1400 PLC using rs485? I am encountering a problem where the local processor is receiving a message timeout. The wiring setup involves connecting terminal 20 (+) of the PM800 to channel 0 labeled B on">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-rs485-communication-between-micrologix-1400-plc-and-schneider-pm800-powermeter">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting RS485 Communication Between MicroLogix 1400 PLC and Schneider PM800 Powermeter | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, has anyone attempted to establish communication between a Schneider PM800 and a ML1400 PLC using rs485? I am encountering a problem where the local processor is receiving a message timeout. The wiring setup involves connecting terminal 20 (+) of the PM800 to channel 0 labeled B on">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-rs485-communication-between-micrologix-1400-plc-and-schneider-pm800-powermeter"
      },
      "headline": "Troubleshooting RS485 Communication Between MicroLogix 1400 PLC and Schneider PM800 Powermeter",
      "description": "Hello everyone, has anyone attempted to establish communication between a Schneider PM800 and a ML1400 PLC using rs485? I am encountering a problem where the local processor is receiving a message timeout. The wiring setup involves connecting terminal 20 (+) of the PM800 to channel 0 labeled B on",
      "author": {
        "@type": "Person",
        "name": "MiLo28"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">Troubleshooting RS485 Communication Between MicroLogix 1400 PLC and Schneider PM800 Powermeter</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MiLo28</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">287</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">186</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, has anyone attempted to establish communication between a Schneider PM800 and a ML1400 PLC using rs485? I am encountering a problem where the local processor is receiving a message timeout. The wiring setup involves connecting terminal 20 (+) of the PM800 to channel 0 labeled B on an adapter, and terminal 19 (-) to Label A. Additionally, terminal 18 of the PM800 (possibly com) is connected to Com on the ML1400 adapter. In the PM800 settings, the address is set to node 4mbrtubr with a baud rate of 9600 and no parity. I have attached a configuration snippet for the PLC. Currently, I am trying to read a single piece of data and my message setup is as follows: MB Cmd - read input register 3xxxx, size 1, data table n111:0, MB Data address: 1123, and Slave node: 4. This is my first time working with rs485 communication.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>MiLo28 asked if anyone has tried connecting a Schneider PM800 to a ML1400 via rs485. They are experiencing a message timeout issue in the local processor. The wiring setup includes terminal 20 (+) in PM800 connected to Channel 0 B, terminal 19 (-) in PM800 connected to Label A, and terminal 18 (COM) in PM800 connected to COM in the ML1400 adapter. PM800 settings include address node 4mbrtubr, baud rate 9600, and parity none. The message being sent is to read input register 3xxxx with a data size of 1. After troubleshooting, the issue was found to be related to the wiring and has been resolved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MiLo28</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. What could be causing a message timeout when trying to establish communication between a Schneider PM800 and a MicroLogix 1400 PLC using RS485?
- Answer: A message timeout could be caused by issues such as incorrect wiring connections, incorrect settings in the PM800 or PLC, mismatched baud rates, or communication protocol errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How should the wiring setup be configured between the PM800 and ML1400 PLC for RS485 communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: The wiring setup should involve connecting terminal 20 (+) of the PM800 to channel 0 B on the adapter, terminal 19 (-) to Label A, and terminal 18 of the PM800 to Com on the ML1400 adapter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What settings should be configured in the PM800 for successful RS485 communication with the ML1400 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: In the PM800 settings, ensure the address is set correctly (e.g., node 4), baud rate is set to 9600, and no parity is selected. Verify that these settings match the configuration in the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How should the message setup be configured in the PLC for reading data from the PM800 over RS485?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Configure the message setup in the PLC to specify the correct Modbus command (e.g., read input register), data table address, data size, data address, and slave node address to match the PM800 settings.</p>
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
