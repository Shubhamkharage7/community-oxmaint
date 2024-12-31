
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I need assistance with Modbus integration on a Micro 820 PLC for a level sensor supporting Modbus RTU. This is my first time working with Modbus and Im having trouble setting up a msg instruction on the Micro 820. Im unsure about the target node and the manual isnt">
    <meta name="keywords" content="modbus integration, micro 820 plc, level sensor, modbus rtu, msg instruction, target node, modbus confusion, rs-485 connection, serial port, 2080-serialisol, modbus setup, register map, sensor">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/need-help-setting-up-modbus-integration-on-micro-820-plc-for-level-sensor-confused-about-target-node-and-msg-instruction">
    <title>Need Help Setting Up Modbus Integration on Micro 820 PLC for Level Sensor - Confused About Target Node and Msg Instruction | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Need Help Setting Up Modbus Integration on Micro 820 PLC for Level Sensor - Confused About Target Node and Msg Instruction | Oxmaint Community">
    <meta property="og:description" content="I need assistance with Modbus integration on a Micro 820 PLC for a level sensor supporting Modbus RTU. This is my first time working with Modbus and Im having trouble setting up a msg instruction on the Micro 820. Im unsure about the target node and the manual isnt">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/need-help-setting-up-modbus-integration-on-micro-820-plc-for-level-sensor-confused-about-target-node-and-msg-instruction">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Need Help Setting Up Modbus Integration on Micro 820 PLC for Level Sensor - Confused About Target Node and Msg Instruction | Oxmaint Community">
    <meta name="twitter:description" content="I need assistance with Modbus integration on a Micro 820 PLC for a level sensor supporting Modbus RTU. This is my first time working with Modbus and Im having trouble setting up a msg instruction on the Micro 820. Im unsure about the target node and the manual isnt">
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
        "@id": "https://community.oxmaint.com/discussion-forum/need-help-setting-up-modbus-integration-on-micro-820-plc-for-level-sensor-confused-about-target-node-and-msg-instruction"
      },
      "headline": "Need Help Setting Up Modbus Integration on Micro 820 PLC for Level Sensor - Confused About Target Node and Msg Instruction",
      "description": "I need assistance with Modbus integration on a Micro 820 PLC for a level sensor supporting Modbus RTU. This is my first time working with Modbus and Im having trouble setting up a msg instruction on the Micro 820. Im unsure about the target node and the manual isnt",
      "author": {
        "@type": "Person",
        "name": "Good Electric 307"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">Need Help Setting Up Modbus Integration on Micro 820 PLC for Level Sensor - Confused About Target Node and Msg Instruction</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Good Electric 307</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">325</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">118</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I need assistance with Modbus integration on a Micro 820 PLC for a level sensor supporting Modbus RTU. This is my first time working with Modbus and I'm having trouble setting up a msg instruction on the Micro 820. I'm unsure about the target node and the manual isn't clear to me. Despite watching videos and reading forums, I'm still confused. I've learned that I can connect Rs-485 directly to the embedded serial port on the Micro 820, but I've also read about plug-in modules like the 2080-serialisol. Can someone guide me on this process from the beginning? I have a register map and a manual for the sensor. Any help would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you utilizing the MSG_MODBUS instruction in your programming? In this context, "Target Node" typically refers to the "Server (Slave) Address," as RS-485 allows for multiple Modbus Slaves and one Modbus Master to operate on the same communication lines. The acceptable range for the Target Node is 1-247; it is important for the level sensor to have a method for setting or reading its address. The TargetCfg parameter's .Node attribute will be utilized in the MSG_MODBUS instruction.

For troubleshooting purposes, it is recommended to have a PC equipped with an RS-485 serial port (such as a USB dongle) and utilize Modbus Slave and Modbus Master software to independently debug each segment of the communication process: the Slave software for emulating the level sensor and the Master software for emulating the Micro820 PLC. Once both components are functioning correctly, you can proceed to connect the Micro820 PLC to the level sensor. Look for software that displays the protocol bytes in hexadecimal format, as this can be beneficial for troubleshooting any potential issues that may arise during the communication process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy suggested using the MSG_MODBUS instruction and clarifying that "Target Node" typically refers to the "Server (Slave) Address" in RS-485 systems supporting multiple Modbus Slaves and one Modbus Master. The Target Node range is typically 1-247 and the level sensor should have an option to set or read its address. The .Node attribute of the TargetCfg parameter in the MSG_MODBUS instruction should correspond to this. To diagnose issues, it is recommended to use a PC with an RS-485 serial port (such as a USB dongle) and Modbus Slave/Master software to debug communication independently. Simulating the level sensor with Slave software and the Micro820 with Master software can help ensure both sides are working before connecting them. It is also advised to find software displaying protocol bytes in hexadecimal for troubleshooting purposes. Thank you for the advice; I will further investigate why the level sensor (Slave) with a unit ID is not communicating with my MSG instruction and download relevant software for troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Good Electric 307</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are numerous methods for wire labeling in RS-485 systems, making it a versatile and forgiving process. If you are unsure about achieving effective communication, simply swapping the wires can often resolve the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After receiving your response, I will investigate the issue further. The level sensor (Slave) is not responding to my msg instruction despite having a unit ID. I will utilize software such as shortbus modscanner to troubleshoot this issue. Previously, I successfully used this software with a modbus RTU project involving a Directlogic rack plc and multiple Siemens burner controllers. It is important to ensure all configurations such as stop bits, baud rate, and parity match on both ends of the communication chain. Additionally, checking for address offsets in the protocol is recommended to resolve any connectivity issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate everyone's assistance with this topic. Utilizing a modbus simulator has been instrumental in resolving multiple issues. I have successfully established communication between a sensor and a Micro Logix 1400. However, when attempting to connect the sensor to a Micro 820 PLC, I encounter error 55 (The message timed out in the local processor. A link layer timeout.) in the msg instruction. Despite ensuring that baud rate, parity, and other settings are consistent, I am unable to pinpoint the issue. Your insights on troubleshooting this matter would be greatly valued.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Good Electric 307</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you exchanged the RS-485 communication lines?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy inquired if the RS-485 wires were swapped, but it appears that this did not have any impact on the situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Good Electric 307</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is Modbus integration and how does it work with a Micro 820 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Modbus integration involves using the Modbus protocol to communicate with external devices, such as a level sensor, connected to a PLC like the Micro 820. It allows for data exchange between the PLC and the sensor using a standardized communication protocol.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How do I set up a msg instruction for Modbus communication on a Micro 820 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Setting up a msg instruction for Modbus communication on a Micro 820 PLC involves specifying the target node, which is the address of the device you want to communicate with. This address is typically defined in the register map provided by the sensor manufacturer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the significance of the target node in Modbus communication on a Micro 820 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The target node in Modbus communication on a Micro 820 PLC represents the address of the specific device you are trying to communicate with over the Modbus network. It is essential to correctly configure the target node to establish successful communication with the device.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can I connect Rs-485 directly to the embedded serial port on the Micro 820 for Modbus communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can connect Rs-485 directly to the embedded serial port on the Micro 820 for Modbus communication. This allows for direct communication between the PLC and the Modbus-enabled device without the need for additional hardware modules.</p>
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
