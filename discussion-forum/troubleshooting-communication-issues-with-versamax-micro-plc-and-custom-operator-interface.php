
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am facing challenges with establishing communication between a VersaMax Micro PLC and a custom Operator Interface through Port 1, which has an RJ45 Connector. Despite setting the default communication parameters to 19200BPS, Odd Parity, 1 Stop Bit, and 8 Data Bits, I am unable to make my Microcontroller">
    <meta name="keywords" content="versamax micro plc, troubleshooting communication issues, custom operator interface, port 1 rj45 connector, communication parameters, 19200bps, odd parity, 1 stop bit, 8 data bits, microcontroller based h">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-versamax-micro-plc-and-custom-operator-interface">
    <title>Troubleshooting Communication Issues with VersaMax Micro PLC and Custom Operator Interface | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issues with VersaMax Micro PLC and Custom Operator Interface | Oxmaint Community">
    <meta property="og:description" content="I am facing challenges with establishing communication between a VersaMax Micro PLC and a custom Operator Interface through Port 1, which has an RJ45 Connector. Despite setting the default communication parameters to 19200BPS, Odd Parity, 1 Stop Bit, and 8 Data Bits, I am unable to make my Microcontroller">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-versamax-micro-plc-and-custom-operator-interface">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issues with VersaMax Micro PLC and Custom Operator Interface | Oxmaint Community">
    <meta name="twitter:description" content="I am facing challenges with establishing communication between a VersaMax Micro PLC and a custom Operator Interface through Port 1, which has an RJ45 Connector. Despite setting the default communication parameters to 19200BPS, Odd Parity, 1 Stop Bit, and 8 Data Bits, I am unable to make my Microcontroller">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-versamax-micro-plc-and-custom-operator-interface"
      },
      "headline": "Troubleshooting Communication Issues with VersaMax Micro PLC and Custom Operator Interface",
      "description": "I am facing challenges with establishing communication between a VersaMax Micro PLC and a custom Operator Interface through Port 1, which has an RJ45 Connector. Despite setting the default communication parameters to 19200BPS, Odd Parity, 1 Stop Bit, and 8 Data Bits, I am unable to make my Microcontroller",
      "author": {
        "@type": "Person",
        "name": "mani.sarathy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-15",
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
                <h1 class="text-white">Troubleshooting Communication Issues with VersaMax Micro PLC and Custom Operator Interface</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mani.sarathy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">7707</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">143</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am facing challenges with establishing communication between a VersaMax Micro PLC and a custom Operator Interface through Port 1, which has an RJ45 Connector. Despite setting the default communication parameters to 19200BPS, Odd Parity, 1 Stop Bit, and 8 Data Bits, I am unable to make my Microcontroller Based HMI/OI interact with the PLC using SNP and SNPX Protocols.

To initiate communication, I follow specific steps. Firstly, I send a Long Break signal by holding the TxD Line in the SPACE state for 50ms (equivalent to three character times at 19200BPS). Then, I wait for T4 duration (100ms) before transmitting the Attach Message (for SNP) and X-Attach Message (for SNPX) with the PLC CPU ID set to NULL for Point-to-Point Communication.

Subsequently, I wait for T1 time (10ms) and check for an Attach Response (or X-Attach Response). Regrettably, I have not received any response from the PLC. As per the SNP Communications User's Manual, no response is expected in case of an error in the Attach Message. For other messages, an error message or NAK is usually received, allowing identification of the issue.

I have included the SNP and SNPX message streams sent for the Attach and X-Attach Messages for reference. I seek assistance in troubleshooting this matter promptly. Your guidance in pinpointing my errors would be greatly appreciated. Thank you for your prompt assistance.

Best regards,
P.Mani.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I cross-checked the checksum for the X-Attach message and it matched yours. Have you verified the cable connections from your HMI to the RJ-11 connector? It's common to misalign the pin numbers. Is it possible that your microcontroller is flipping the high and low bytes, causing 1B to be transmitted as B1? I recommend linking your HMI to a computer with a terminal emulator like PROCOMM or Hyperterminal to monitor the actual transmission data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Mr. Bailey, I want to express my gratitude for your timely reply. I tested my program using Hyperterminal right after encountering the issue. Communication at 19200BPS with Hyperterminal was successful, indicating that my program is functioning correctly. The bytes sent from my microcontroller to the PC are not swapped, as confirmed through Hyperterminal. Despite using the TestComm PC utility from the GE Fanuc website to communicate with the PLC, I am still unable to establish a connection with my microcontroller. It is puzzling where the error lies. I remain hopeful for a resolution to this issue soon, as I am eager to have this application up and running by the end of the month.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mani.sarathy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing issues with data transmission between your microcontroller and TestComm utility through Hyperterminal, it is important to check for consistency in characters and checksums. Additionally, consider if your microcontroller is adding CR/LF characters at the end of the data string. It is also wise to inspect the TxD line using a scope to ensure the signal is being transmitted at the correct voltage levels. Compare the output waveform of your microcontroller to that of the computer running the TestComm utility to identify any discrepancies that may indicate a hardware issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Continued PLC-HMI Communication Issue

Thank you once again for your prompt response. 

1) The TestComm utility is indeed transmitting the same checksum as I have calculated. This can be observed in the utility window, which displays the characters being transmitted to the PLC on the PC screen.

2) My microcontroller does not send a CR/LF character after each character or sequence of characters. I have verified this through my experience with MODEM interface projects where I utilize AT commands. Unless I include the ASCII code 0Dh (Hex) for "Enter" in the message string, the microcontroller does not add it.

3) I will follow your suggestion, Mr. Bailey, and check the TxD line signal on the Oscilloscope, which I have not tried before. I have successfully interfaced with MODEMs without encountering any Tx/RX signal issues. Thank you for the advice.

4) I utilize either SNPX or SNP protocols to communicate with the PLC. I have attempted communication using both SNP and SNPX Protocols.

5) Thank you for informing me that VersaMax supports Break Free SNP/SNPX operation. As a newcomer to PLCs, I was unaware of this capability.

6) I will keep you updated on my progress with the GE Fanuc PLC and if I am able to get the HMI functioning properly. Any additional tips, suggestions, or solutions you can provide would be greatly appreciated. Thank you, Mani Parthasarathy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mani.sarathy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The potential issue may lie in maintaining accurate voltage levels, as mentioned by Steve. Have you considered employing a driver/receiver to serve as an RS-232 interface connecting the PLC and microcontroller? In my setup, I utilize a Maxim 233 for interfacing between the microcontroller and a Micrologix 1200.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ROBO</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>HMI-PLC Communication Issues - Troubleshooting Process

I spent the entire day yesterday working on the PLC-HMI Project, trying to troubleshoot the communication problem. After checking the voltage levels with a CRO and ensuring the transceivers (MAX232 or SP232) were functioning properly, I turned to a serial port monitoring utility, PortMon, to monitor the Com Port activity while the TestComm utility was communicating with the PLC via port1. However, I did not observe any additional transactions before or after each message sequence.

Upon further investigation, I discovered that the PC was only receiving a few characters in the SNPX message. This issue was evident when using Hyperteminal, where only certain characters were displayed. The problem did not occur when transmitting other characters, such as AT commands. Despite successfully transmitting characters at 19200BPS with 9 data bits (8 data bits + 1 parity), the missing characters from the PLC resulted in a lack of response.

I encountered the same problem when attempting to communicate with the PC and PLC at 19.2KBPS, using two other microcontrollers. I am seeking suggestions or solutions to address this issue and improve communication between the PLC and the microcontroller.

Thank you,
Mani Parthasarathy</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mani.sarathy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper connectivity, make sure to review your cable pin assignment. For the PLC connector, consider using the following cable configuration: Connect CTS and RTS terminals. Match GND to GND, Tx to Rx, and Rx to Tx when connecting the RJ45 to the Operator Interface.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>labingtone</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Steve, I'm encountering an issue with my GE Versamax micro PLC. When I try to go online on Port 1, the OK LED turns off. There is no response on Port 2. I have tested the cable and settings on a different Versamax micro PLC and they are functioning correctly. Regards, John.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BlackBoxRobotics</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the default communication parameters for establishing communication between a VersaMax Micro PLC and a custom Operator Interface?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The default communication parameters are typically set to 19200BPS, Odd Parity, 1 Stop Bit, and 8 Data Bits when connecting a VersaMax Micro PLC and a custom Operator Interface through Port 1 with an RJ45 Connector.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What specific steps are involved in initiating communication between the VersaMax Micro PLC and the custom Operator Interface?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The steps involve sending a Long Break signal, waiting for a duration, transmitting the Attach Message (for SNP) and X-Attach Message (for SNPX) with the PLC CPU ID set to NULL, waiting for a specific time, and checking for an Attach Response (or X-Attach Response).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What should be done if no response is received from the PLC after sending the Attach and X-Attach Messages?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If no response is received, it can be due to an error in the Attach Message. According to the SNP Communications User's Manual, no response is expected in case of an error in the Attach Message. For other messages, an error message or NAK is usually received.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I troubleshoot communication issues between the VersaMax Micro PLC and the custom Operator Interface?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting communication issues may involve reviewing the message streams, verifying</p>
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
