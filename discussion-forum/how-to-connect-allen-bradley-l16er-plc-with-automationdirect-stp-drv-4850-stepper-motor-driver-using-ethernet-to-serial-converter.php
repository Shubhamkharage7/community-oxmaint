
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I’m a senior college student carrying out a key engineering project involving an Allen-Bradley L16ER PLC. My current challenge lies in establishing communication between the PLC and an AutomationDirect STP-DRV-4850 stepper motor driver. The PLC solely supports ethernet connectivity, whereas the stepper driver operates via RS232 or 485">
    <meta name="keywords" content="allen-bradley l16er plc, automationdirect stp-drv-4850 stepper motor driver, ethernet to serial converter, usr-tcp232-306, rslinx classic lite, communication setup, plc connectivity, stepper">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-allen-bradley-l16er-plc-with-automationdirect-stp-drv-4850-stepper-motor-driver-using-ethernet-to-serial-converter">
    <title>How to Connect Allen-Bradley L16ER PLC with AutomationDirect STP-DRV-4850 Stepper Motor Driver Using Ethernet to Serial Converter | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect Allen-Bradley L16ER PLC with AutomationDirect STP-DRV-4850 Stepper Motor Driver Using Ethernet to Serial Converter | Oxmaint Community">
    <meta property="og:description" content="Greetings, I’m a senior college student carrying out a key engineering project involving an Allen-Bradley L16ER PLC. My current challenge lies in establishing communication between the PLC and an AutomationDirect STP-DRV-4850 stepper motor driver. The PLC solely supports ethernet connectivity, whereas the stepper driver operates via RS232 or 485">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-allen-bradley-l16er-plc-with-automationdirect-stp-drv-4850-stepper-motor-driver-using-ethernet-to-serial-converter">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect Allen-Bradley L16ER PLC with AutomationDirect STP-DRV-4850 Stepper Motor Driver Using Ethernet to Serial Converter | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I’m a senior college student carrying out a key engineering project involving an Allen-Bradley L16ER PLC. My current challenge lies in establishing communication between the PLC and an AutomationDirect STP-DRV-4850 stepper motor driver. The PLC solely supports ethernet connectivity, whereas the stepper driver operates via RS232 or 485">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-allen-bradley-l16er-plc-with-automationdirect-stp-drv-4850-stepper-motor-driver-using-ethernet-to-serial-converter"
      },
      "headline": "How to Connect Allen-Bradley L16ER PLC with AutomationDirect STP-DRV-4850 Stepper Motor Driver Using Ethernet to Serial Converter",
      "description": "Greetings, I’m a senior college student carrying out a key engineering project involving an Allen-Bradley L16ER PLC. My current challenge lies in establishing communication between the PLC and an AutomationDirect STP-DRV-4850 stepper motor driver. The PLC solely supports ethernet connectivity, whereas the stepper driver operates via RS232 or 485",
      "author": {
        "@type": "Person",
        "name": "mecstudent"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">How to Connect Allen-Bradley L16ER PLC with AutomationDirect STP-DRV-4850 Stepper Motor Driver Using Ethernet to Serial Converter</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mecstudent</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">434</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">94</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, 

I’m a senior college student carrying out a key engineering project involving an Allen-Bradley L16ER PLC. My current challenge lies in establishing communication between the PLC and an AutomationDirect STP-DRV-4850 stepper motor driver. The PLC solely supports ethernet connectivity, whereas the stepper driver operates via RS232 or 485 serial protocols. To bridge this gap, I acquired a USR-TCP232-306 ethernet to serial converter. However, RSLinx Classic Lite fails to recognize the converter, displaying a yellow question mark instead. 

If anyone can offer guidance on making the converter operational or suggest an alternative method for facilitating communication between the PLC and stepper driver, your input would be highly appreciated. It’s worth noting that I’m operating on a tight budget, ruling out the purchase of the official Allen-Bradley serial expansion card. 

Thank you in advance for your assistance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The STP-DRV-4850's port protocols (SCL, ASCII) may pose a challenge. To enable communication between the two, consider using a protocol converter that can bridge ethernet and serial connections, such as the RTA 435NBX. This ASCII to Allen-Bradley PLC converter from RTA Automation is ideal for integrating barcode readers, weigh scales, and displays. To establish communication with the converter, RSLinx is not required. Instead, you will need to utilize raw sockets for communication, ensuring your controller supports this feature. If needed, seek guidance on AB Generic string communication through platforms like PLC Talk. For controlling the PLC, connect the necessary command signals based on your specific application requirements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Working with a limited budget for hardware can be a challenge, but the inclusion of labor in the training budget may help balance things out. Before diving in, it's important to clearly define the problem at hand. As the saying goes, "a problem well stated is a problem half solved", and this rings true for many obstacles we face.
Are you looking to control the motor controller with "step and direction" pulses? Or perhaps you intend to provide a target position via serial communication, along with a command to initiate the movement? Another option could be sending a direction and speed, followed by Start and Stop commands.
The USR-TCP232-306 is a reasonably priced and well-industrialized TCP/IP to Serial server. Identifying its likely OEM was a task in itself, leading to the discovery of a Chinese industrial electronics provider known as PUSR. This device does not come with firmware that supports the Rockwell "EtherNet/IP" protocol and object model, but it does offer some Modbus serial-to-TCP conversion capabilities. However, it lacks compatibility with ControlLogix ASCII interfaces like the 1734-232ASC or products from Digi, Red Lion, Hilscher, HMS, RTA, or Spectrum Controls.
Engaging in "Open Socket" communications with the CompactLogix system can be complex, especially for beginners. As an expert, I tend to opt for specialized devices when possible instead of delving into this method. Nevertheless, for your situation, it could be the feasible solution that aligns with your budget and hardware. To start off, determine the volume of data to be transferred, its communication protocol or format, and whether it needs to be bidirectional or simply one-way.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When controlling a stepper motor with a small PLC like the CompactLogix L16, the typical method is using step-and-direction. However, the built-in I/O of the L16 is not configured for high-speed pulse series control, unlike some other small PLCs such as the MicroLogix 1100/1400 and Micro 820/850/870. While the L16 is a great controller for basic CompactLogix applications, it may not be the best choice for fast I/O operations.

For more advanced stepper motor control, AMCI offers specialized stepper control modules designed for the 1734 POINT I/O platform used by the L16/L18 for expansion I/O. If you're considering using the 1734-232ASC or -485ASC modules, keep in mind that they are optimized for sending ASCII string data with termination characters like carriage returns.

If you decide to utilize the Ethernet/Serial converter, you will need to transmit data over Ethernet using the "open sockets" technique. To troubleshoot any issues, tools like Wireshark and RealTerm can be helpful for analyzing data from both ends.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The manual states that the stepper motor drive is compatible with both RS232 and RS485 protocols. The communication protocol (SCL) is structured as a text string followed by a carriage return (CR). Therefore, it is recommended to use 1734-232ASC (RS232) or 1735-485 (RS332 & RS485) for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Tarik, for bringing up that point! I am currently exploring A-D stepper controllers and their communication protocols for a new project on my desk. I have been provided with a surplus 1769-L36ERM and 1769-ASCII and tasked with integrating them to control a group of existing Parker Compax3 servos via RS485 serial connection. This particular project has been at the forefront of my thoughts lately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Tarik1978 noted that the stepper motor drive in question accommodates both RS232 and RS485 protocols, with the communication protocol (SCL) being a string of text followed by a carriage return (CR). Hence, the recommended options for this setup are the 1734-232ASC (RS232) or 1735-485 (RS232 & RS485) models. Please note that there was a typo in mentioning the 1734-485 model (RS422-RS485).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I establish communication between an Allen-Bradley L16ER PLC and an AutomationDirect STP-DRV-4850 stepper motor driver when the PLC only supports ethernet connectivity and the stepper driver operates via RS232 or 485 serial protocols?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can bridge this gap by using an ethernet to serial converter, such as the USR-TCP232-306. However, ensure compatibility and troubleshoot any recognition issues with software like RSLinx Classic Lite.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What should I do if RSLinx Classic Lite fails to recognize the ethernet to serial converter, displaying a yellow question mark instead?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you encounter this issue, try checking the configuration settings of the converter, ensuring proper network connectivity, and verifying compatibility with the software and hardware components.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there alternative methods for facilitating communication between the Allen-Bradley PLC and the stepper motor driver if purchasing the official Allen-Bradley serial expansion card is not feasible due to budget constraints?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, besides using an ethernet to serial converter, you can explore other cost-effective options like third-party serial communication modules or adapters that support the required protocols for communication between the PLC and stepper driver.</p>
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
