
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently attempting to establish Modbus communication using the CB1241 RS485 Communication Board with a Siemens S71200 PLC. The CPU I am utilizing is the 1215C. Despite successfully configuring the hardware and writing a program for Modbus communication, I am facing an issue where the RxD">
    <meta name="keywords" content="cb1241 rs485 board, s7-1200 1215c plc, modbus communication, rxd led, txd led, communication board, data transmission, data reception, plc configuration, tia portal, mb_comm_load">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-cb1241-rs485-board-led-issues-with-s7-1200-1215c-plc">
    <title>Troubleshooting CB1241 RS485 Board LED Issues with S7-1200 1215C PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting CB1241 RS485 Board LED Issues with S7-1200 1215C PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently attempting to establish Modbus communication using the CB1241 RS485 Communication Board with a Siemens S71200 PLC. The CPU I am utilizing is the 1215C. Despite successfully configuring the hardware and writing a program for Modbus communication, I am facing an issue where the RxD">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-cb1241-rs485-board-led-issues-with-s7-1200-1215c-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting CB1241 RS485 Board LED Issues with S7-1200 1215C PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently attempting to establish Modbus communication using the CB1241 RS485 Communication Board with a Siemens S71200 PLC. The CPU I am utilizing is the 1215C. Despite successfully configuring the hardware and writing a program for Modbus communication, I am facing an issue where the RxD">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-cb1241-rs485-board-led-issues-with-s7-1200-1215c-plc"
      },
      "headline": "Troubleshooting CB1241 RS485 Board LED Issues with S7-1200 1215C PLC",
      "description": "Hello everyone, I am currently attempting to establish Modbus communication using the CB1241 RS485 Communication Board with a Siemens S71200 PLC. The CPU I am utilizing is the 1215C. Despite successfully configuring the hardware and writing a program for Modbus communication, I am facing an issue where the RxD",
      "author": {
        "@type": "Person",
        "name": "integration"
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
                <h1 class="text-white">Troubleshooting CB1241 RS485 Board LED Issues with S7-1200 1215C PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>integration</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">626</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">234</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, 

I am currently attempting to establish Modbus communication using the CB1241 RS485 Communication Board with a Siemens S71200 PLC. The CPU I am utilizing is the 1215C. Despite successfully configuring the hardware and writing a program for Modbus communication, I am facing an issue where the RxD and TxD LED indicators on the communication board are not illuminating.

Upon checking my configuration, I have confirmed that the PLC has recognized the module when I connect online through TIA Portal. However, data transmission and reception are not occurring as the LEDs on the board remain inactive. The functions "MB_COMM_LOAD" and "MB_MASTER" in my program show no errors and have a 16#0000 Status.

I am seeking suggestions on potential issues or errors that may be causing this problem. Any insights on this matter would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I am currently working on setting up Modbus communications using the CB1241 RS485 Communication Board with a Siemens S71200 PLC equipped with a 1215C CPU. Despite successfully configuring the hardware and programming the MODBUS communication, I am facing an issue where the LED indicators for RxD and TxD on the communication board are not illuminating.

While checking my configuration and verifying module recognition through TIA Portal when online, it seems that the PLC is not transmitting or receiving data as intended. The functions "MB_COMM_LOAD" and "MB_MASTER" in my program show no errors and a 16#0000 status. Are there any suggestions on what could be causing this issue or where the problem lies?

I've come across information online suggesting that the board on the 1215C CPU might become non-functional if the CB1241 module was inserted while the PLC was powered, and I am considering if this could be a factor. My current software version is TIA Portal V17.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>integration</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When data is being transmitted or received through the communication port, these LED lights will illuminate.  Which specific device is the board communicating with during this process?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tarik1978 inquired about the LED indicators on the board, which only light up when data is being sent or received through the communication port. The board is currently connected to a Vaisala WXT536 Weather Station. How can I ensure that data is properly transmitted and received through the port with the correct settings in place?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>integration</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To troubleshoot communication issues with WXT536 weather stations, begin by verifying the default address which is 1. Swap the RS485 wires to ensure proper connections. Check the termination resistors for any issues. Additionally, make sure that the firmware version of WXT536 is 3.85 or higher for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper functionality, verify that the MODE parameter in the instance data of "Modbus_Comm_Load" is configured for half duplex RS485 communication (set to 4). Additionally, confirm that the "optimized block access" feature is turned off in data block DB14.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>The %DB10.DBX0.0 remains true for just one scan, so you must establish another bit depending on the completion of communication load.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why are the RxD and TxD LED indicators on the CB1241 RS485 Communication Board not illuminating despite successful hardware configuration and program setup for Modbus communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue could be related to a potential error in the configuration or program setup that is preventing data transmission and reception. Further troubleshooting may be required to identify the specific cause of the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the lack of data transmission and reception indicated by inactive LEDs on the communication board, even though the PLC has recognized the module in TIA Portal?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can start by checking for any errors or issues in the configuration settings for the Modbus communication and ensuring that the "MB_COMM_LOAD" and "MB_MASTER" functions in your program are functioning correctly. Verifying the wiring connections and communication parameters can also help in troubleshooting the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could be the significance of the "160000 Status" shown by the "MB_COMM_LOAD" and "MB_MASTER" functions in the program when experiencing LED issues on the CB1241 RS485 Communication Board?</h4>
<p class='text-muted'><strong>Answer:</strong> - The "160000 Status" displayed by these functions may indicate that the communication setup is correct but data transmission or reception is not occurring as expected. Additional troubleshooting steps may be needed to pinpoint the exact cause of the problem and resolve it effectively.</p>
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
