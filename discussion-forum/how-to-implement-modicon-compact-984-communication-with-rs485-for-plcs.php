
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am seeking advice regarding the implementation of Modicon Compact 984 communication through RS485. Currently, three Modicon PLCs are operating on an extrusion machine using a Modbus Plus network. Upon examining the ladder logic, it appears that there is a lack of MB+ commands, indicating a potential for">
    <meta name="keywords" content="modicon compact 984, rs485 communication, plcs, modbus plus network, modbus tcp, ladder logic, mb+ commands, outdated hardware, 416nhm30032, system upgrades, wonderware, daserver, mb">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-implement-modicon-compact-984-communication-with-rs485-for-plcs">
    <title>How to Implement Modicon Compact 984 Communication with RS485 for PLCs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Implement Modicon Compact 984 Communication with RS485 for PLCs | Oxmaint Community">
    <meta property="og:description" content="Hello, I am seeking advice regarding the implementation of Modicon Compact 984 communication through RS485. Currently, three Modicon PLCs are operating on an extrusion machine using a Modbus Plus network. Upon examining the ladder logic, it appears that there is a lack of MB+ commands, indicating a potential for">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-implement-modicon-compact-984-communication-with-rs485-for-plcs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Implement Modicon Compact 984 Communication with RS485 for PLCs | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am seeking advice regarding the implementation of Modicon Compact 984 communication through RS485. Currently, three Modicon PLCs are operating on an extrusion machine using a Modbus Plus network. Upon examining the ladder logic, it appears that there is a lack of MB+ commands, indicating a potential for">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-implement-modicon-compact-984-communication-with-rs485-for-plcs"
      },
      "headline": "How to Implement Modicon Compact 984 Communication with RS485 for PLCs",
      "description": "Hello, I am seeking advice regarding the implementation of Modicon Compact 984 communication through RS485. Currently, three Modicon PLCs are operating on an extrusion machine using a Modbus Plus network. Upon examining the ladder logic, it appears that there is a lack of MB+ commands, indicating a potential for",
      "author": {
        "@type": "Person",
        "name": "r6lpq8twg52"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-30",
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
                <h1 class="text-white">How to Implement Modicon Compact 984 Communication with RS485 for PLCs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>r6lpq8twg52</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">522</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">240</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am seeking advice regarding the implementation of Modicon Compact 984 communication through RS485. Currently, three Modicon PLCs are operating on an extrusion machine using a Modbus Plus network. Upon examining the ladder logic, it appears that there is a lack of MB+ commands, indicating a potential for implementing Modbus TCP. The goal is to move away from outdated hardware (such as 416NHM30032 and similar models) and establish a system that allows for future upgrades.

The current setup includes a computer running Wonderware and a DAServer, along with a gateway translating from MBTCP to MBRTU. This gateway connects to a PLC via RS232, requiring three gateways per machine on seven machines. It is believed that having one gateway per machine communicating through RS485 to three RS485/RS232 converters and then to the PLCs is a more cost-effective solution. 

The RS232/RS485 conversion was unsuccessful when attempting to communicate with the PLCs (Modicon Compact 984-141 and -145). Any insights on this issue would be greatly appreciated. The RS232 to RS485 converter Uotek UT-2201, cable pinout AS W952 012, and USB to RS485 converter Startech ICUSB422 have all performed as expected in other setups.

Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you considering switching from Modbus+ to Modbus RTU? According to the Modbus Plus Intro guide by Schneider (https://www.bh-automation.com/Download/Resources/ModBus-Plus-Planning-And-Installation-Guide.pdf), utilizing a BM85 gateway is necessary for RTU to connect to the Modbus+ network. If your devices are compatible with Modbus+ but also support Modbus RTU, there are a few things to consider:

1. Avoid using in-line RS-232-485 converters that rely on port power, as the RS-232 port may not supply sufficient power for reliable operation. Using an external power supply, such as a wallwart DC power supply, is recommended to ensure proper functionality.

2. When transitioning from one adapter cable to another, ensure that the converter is receiving adequate power. Additionally, verify if the RS-485 to USB converter being used is the same one that was previously working. Make sure that Putty is running a Modbus RTU script and that the setup is functioning correctly. Cheaper USB/485 adapters may have timing issues with Modbus RTU scripts, so it is advisable to use adapters with the FTDI chipset for reliable performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate you responding. The goal of the protocols is to establish a network using MBRTU and MBTCP between the SCADA computer and PLCs, regardless of the MB+ component. The plan is to gradually remove MB+ in phases. Currently, a BM85 multiplexer is being used, but its functionality can be bypassed with further advancements. Although this is not a major issue at the moment, it is worth mentioning in case there are flaws in the proposed system architecture.

Even though it is not visible in the images provided, a power source connected to the RS232/485 converter meets the specified requirement of 5v.

During testing, the same RS232/RS485 converter was consistently used and the tests were repeated to ensure the device's functionality. One test involved the computer connecting to a G/W via MBTCP and transmitting RS485 MBRTU, then passing through the 232/485 converter, followed by a 232 to USB converter before receiving data from a Modbus slave simulator.

It's good to know that some devices are compatible while others are not. The UT-2201 datasheet raises concerns as it indicates that the device manages data direction but disregards handshaking.

Do you have any recommendations for a specific RS232/485 device that has been successful with a Modicon PLC or other devices? This would be greatly helpful to test with our current setup. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>r6lpq8twg52</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that you are familiar with how converters interact with Modbus. While I have a strong background in general Modbus applications, I lack experience specifically with Modicons and therefore cannot provide any further insight.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your support and assistance in analyzing critical issues. It seems that there is a need to eliminate outdated machines through looting. There are RS232/RS422 converters available in the facility that can connect with the BM85 on the MBRTU side. Once authorization is given, the next step will be to test communication using RS422. The current state of the machines is suboptimal. Hopefully, there will be positive updates soon (within three weeks or more).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>r6lpq8twg52</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Update: We have successfully established communication between the Modicon 984-141 PLC and the computer using an ethernet gateway and an RS232 to 485 converter. Special thanks to @danw for highlighting the limitations of port-powered converters. The SCADA software can now effectively communicate with the PLC by sending Modbus TCP/IP commands and receiving data. The PLC is equipped with only RS232 ports (Modbus RTU or ASCII), but -145s are available for MB+. It can now retrieve register values without any issues. Although we currently only have one converter on hand, preventing a multi-PLC test, we are grateful for the progress made. Thank you once again.Best Regards,</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>r6lpq8twg52</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Update: Experimented with a new RS232 to 485 converter, which successfully achieved bidirectional communication in both port-powered and supply-powered modes. The device used was the STM485 by SINTECHI. The initial lack of experience led to starting this thread, but it turns out the configuration was correct, and the new converter resolved the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>r6lpq8twg52</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the goal of implementing Modicon Compact 984 communication through RS485?</h4>
<p class='text-muted'><strong>Answer:</strong> The goal is to move away from outdated hardware and establish a system that allows for future upgrades.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What is the current setup for communication with Modicon PLCs in the discussed scenario?</h4>
<p class='text-muted'><strong>Answer:</strong> The current setup includes a computer running Wonderware and a DAServer, along with a gateway translating from MBTCP to MBRTU. This gateway connects to a PLC via RS232, requiring three gateways per machine on seven machines.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why is there a consideration for implementing Modbus TCP in the setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Examination of the ladder logic revealed a lack of MB+ commands, indicating a potential for implementing Modbus TCP for communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What alternative solution is suggested for a more cost-effective setup with RS485 communication?</h4>
<p class='text-muted'><strong>Answer:</strong> It is suggested to have one gateway per machine communicating through RS485 to three RS485/RS232 converters and then to the PLCs, which is believed to be a more cost-effective solution.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  What were the challenges faced during the RS232/RS485 conversion when attempting to communicate with the PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> The RS232/RS485 conversion was unsuccessful when attempting to communicate with the PLCs (Modicon Compact 984-141 and -145), despite using converters like the Uotek UT-2201 and cable pinout</p>
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
