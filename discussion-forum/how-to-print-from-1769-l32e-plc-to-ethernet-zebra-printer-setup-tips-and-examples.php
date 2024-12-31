
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I need suggestions on how to print from a 1769-L32E PLC to an Ethernet-connected Zebra Printer. Any insights, examples, or code snippets you can provide would be highly valued. Share your setup tips to help me streamline this process effectively. Thank you!">
    <meta name="keywords" content="1769-l32e plc, ethernet zebra printer, printing setup, print from plc to zebra printer, setup tips, examples, code snippets, streamline printing process, printing automation, plc to printer communication, ethernet connectivity, troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-print-from-1769-l32e-plc-to-ethernet-zebra-printer-setup-tips-and-examples">
    <title>How to Print from 1769-L32E PLC to Ethernet Zebra Printer: Setup Tips and Examples | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Print from 1769-L32E PLC to Ethernet Zebra Printer: Setup Tips and Examples | Oxmaint Community">
    <meta property="og:description" content="I need suggestions on how to print from a 1769-L32E PLC to an Ethernet-connected Zebra Printer. Any insights, examples, or code snippets you can provide would be highly valued. Share your setup tips to help me streamline this process effectively. Thank you!">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-print-from-1769-l32e-plc-to-ethernet-zebra-printer-setup-tips-and-examples">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Print from 1769-L32E PLC to Ethernet Zebra Printer: Setup Tips and Examples | Oxmaint Community">
    <meta name="twitter:description" content="I need suggestions on how to print from a 1769-L32E PLC to an Ethernet-connected Zebra Printer. Any insights, examples, or code snippets you can provide would be highly valued. Share your setup tips to help me streamline this process effectively. Thank you!">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-print-from-1769-l32e-plc-to-ethernet-zebra-printer-setup-tips-and-examples"
      },
      "headline": "How to Print from 1769-L32E PLC to Ethernet Zebra Printer: Setup Tips and Examples",
      "description": "I need suggestions on how to print from a 1769-L32E PLC to an Ethernet-connected Zebra Printer. Any insights, examples, or code snippets you can provide would be highly valued. Share your setup tips to help me streamline this process effectively. Thank you!",
      "author": {
        "@type": "Person",
        "name": "plc_va"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-13",
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
                <h1 class="text-white">How to Print from 1769-L32E PLC to Ethernet Zebra Printer: Setup Tips and Examples</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>plc_va</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>22 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">22018</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">112</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I need suggestions on how to print from a 1769-L32E PLC to an Ethernet-connected Zebra Printer. Any insights, examples, or code snippets you can provide would be highly valued. Share your setup tips to help me streamline this process effectively. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Many individuals may not be acquainted with this particular printer. Could you provide a link to the manual? Additionally, I'm curious if it supports Ethernet CIP. Thanks, Stu.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sthompson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for a reliable desktop printer under $500? The Zebra G-Series GK420T is a great option that we have found to be dependable. While we are open to other printer options, this model has served us well in the past. Check out the detailed specs and manuals for the Zebra G-Series GK420T on their official website.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plc_va</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Wondering if this information is useful? Here is an example of how to send commands using VB/C# TCP/IP. In this code snippet, we are setting the IP address to "10.3.14.42" and the port to 9100. The ZPL command included in the code is: "^XA^FO50,50^A0N50,50^FDHello, World!^FS^XZ". This code snippet demonstrates how to send commands via TCP/IP using VB/C#.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plc_va</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Zebra printer interfacing is a common topic that often arises, yet it seems we lack samples in our archives. Zebra printers utilize their own protocol, whether through serial or TCP/IP. Unlike Modbus or CIP, they do not follow an industrial application protocol. The 1769-L30ER model can send generic string data over Ethernet using the Socket Object, whereas the 1769-L32E would require a converter or interface. A good starting point would be to test the Zebra printer's response to bytes sent over TCP/IP using a terminal program like RealTerm, before moving on to messaging with the Socket Object in the 1769-L30ER model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For now, let's switch back to RS-232 communication at a baud rate of 9600, no parity, 1 stop bit. We have successfully utilized these types of printers with Micrologix and CompactLogix systems for many years. The printer is equipped with Ethernet connectivity for PC-based applications with a required driver installation. Additionally, it features an old-fashioned D-Sub 9 RS-232 port for direct connection. If you're looking for a cost-effective solution, utilize a port on your CompactLogix and utilize ASCII string output to communicate with the printer. Alternatively, if Ethernet is a must, consider implementing an RTA ASCII Gateway to convert Ethernet data from the CompactLogix into ASCII for the printer. The PLC programming strings typically include commands such as "^XA" to start a label, "~SD20" to adjust print darkness, "^FO110,50" to set the field origin, "^ADN" to select font type, "^FDYour Text Here" for field data, and "^XZ" to end the label. Zebra provides comprehensive resources on ZPL and EPL ASCII commands for creating labels with barcodes and text. Though it may be a slow start, once you successfully print your first label, the following projects will progress smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Plastic</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>We have been utilizing the RTA black boxes to great effect for our plastic products. However, we are exploring the possibility of connecting directly via Ethernet to avoid the expense of $800 for RTA. Ken, is it possible to specify a port number on the socket object?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plc_va</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have come across a helpful document to get started with the L30ER PLC. You can find the document here: http://literature.rockwellautomation.com/idc/groups/literature/documents/at/enet-at002_-en-p.pdf. I will provide an update with some sample code once I have successfully implemented it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plc_va</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a potential project on the horizon that requires printing to a Zebra printer for batching information. Have you successfully set this up using Ethernet? I am exploring my options for achieving this.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jkerekes</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you need assistance with successfully printing on a zebra printer over Ethernet using PLC, feel free to contact me at [email protected]. I have successfully implemented it on a Micrologix 1400 and am currently working on getting it to work on the Compactlogix. Please keep in mind that this process consumes a significant amount of memory.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ljimenez</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The L32E model does not support TCP socket communications, but you can easily convert serial to Ethernet using a device server like the Antaira STE-601C. This device is user-friendly and performs well. For printing, any standard printer compatible with Raw Telnet and Port 9100 protocol will suffice. It's worth noting that newer AB processors have phased out serial ports in ControlLogix and CompactLogix processors, but they do support Ethernet TCP socket printing. If you have a serial kiosk printer, you can convert Ethernet to serial without the need for an ASCII card. Another advantage of the latest processors is the ability to connect multiple printers to a single processor. To improve message output speed, it's advisable to set a delay of around 100ms per line.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DaDaDadeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey there! Have you attempted to send data from an L71-ControlLogix PLC to a Domino printer M-Series using a socket message? Let me know your experiences!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>apolionman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you need to enhance your ethernet printer port by converting it into EIP, reach out to Zebra for a firmware upgrade. Be sure to refer to Zebra's application notes for guidance. Feel free to message me with your email address as I have all the necessary information for the conversion process, with the exception of the firmware. For more information, check out this thread on PLC Talk: http://www.plctalk.net/qanda/showthread.php?t=111789&highlight=zebra.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Opt for the L81E over the L71 model as the latter lacks an Ethernet connection by default. To enable TCP Socket communication, an Ethernet communication card such as the 1756-EN2** or 1756-EWEB modules is required, adding to the system's overall cost. In contrast, the L81E, similar to the latest CompactLogix controllers (L30ER, L33ER, etc.), comes equipped with a built-in Ethernet com port and TCP socket communication capabilities. This eliminates the need for a separate communication card in many instances, making it a preferable choice over the L71.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DaDaDadeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you attempted transmitting data from an L71-Controllogix PLC to a Domino printer M-Series using socket messaging? We successfully completed this task around 4-5 years ago. Feel free to message me, and I will happily send you the routine for your reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>travispedley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We frequently perform printing to Zebra printers via TCP Socket and Siemens printers with a CP card installed. The ZPL build strings remain the same whether printing over RS232 or TCP/IP, it simply requires a different code snippet to send them to the printer over the network. This capability allows for seamless printing from various devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>travispedley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to printing to Zebra printers over TCP Socket, we have found that it works smoothly without any issues. Are you referring to using Ethernet/IP with unique firmware? Or are you suggesting a direct connection from CompactLogix/ControlLogix to Zebra printers with an RTA Gateway?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When transferring data from Compactlogix/Contrologix to Zebra printers, it is important to ensure compatibility between the Ethernet Module and the devices. Older modules like ENBT, EWEB, and EN2T may not support socket interface, so it is crucial to check the PN of your Ethernet Module before proceeding with the connection. Avoid complications by establishing a direct connection from the processor/Ethernet Module to the printer, instead of using special firmware or an RTA Gateway. This streamlined approach ensures seamless data transfer without any compatibility issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>travispedley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Travispedley inquired about the Ethernet Module being used, specifying PN options such as ENBT, EWEB, EN2T, among others. Older modules may not support socket interface. In my case, I am considering a CompactLogix. Have you utilized version >v20 with Zebra LinkOS AOP, or have you defined a generic Ethernet module with an I/O Assembly instance in your setup?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings, Amigo! I require assistance linking a Zebra ZT410 printer with a PLC (CompactLogix/ControlLogix). Can you provide guidance on this process? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>addis</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>travispedley shared: Our printing process to Zebra printers over TCP Socket runs smoothly on a regular basis. We have also successfully implemented the same process with Siemens printers, which are just as efficient when equipped with a CP card. The ZPL build strings remain consistent whether sent over RS232 or TCP/IP, with just some minor adjustments in the code required. Hi Travis, could you please provide more information on the setup with Siemens printers?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cesar22</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>travispedley mentioned that they had conducted a routine 4-5 years ago. For more information on the routine, feel free to message them for details. I have already reached out to them and hope to receive assistance. Thanks!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>snickermars</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although this thread may seem inactive, if you are seeking additional information not mentioned above, I have some insights to share. Utilizing an HMI Macro from Weiktek, I successfully extracted necessary data from an 1769-L32E to print and send to a printer. Despite some minor issues with multiple prints being sent too quickly, causing the printer to miss a few, the solution ultimately proved effective. Unsure if factorytalk HMIs support TCP/IP communication, it is worth exploring based on the HMI in use. For label setup and code retrieval, visit the Labelary Online ZPL Viewer website for easy editing and previewing of ZPL labels. Check them out at labelary.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jape</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I print from a 1769-L32E PLC to an Ethernet Zebra Printer?
   - To print from a 1769-L32E PLC to an Ethernet Zebra Printer, you can use specific communication protocols and code snippets to establish a connection between the two devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can you provide examples or code snippets for printing from a PLC to an Ethernet Zebra Printer?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, by utilizing programming languages like ladder logic or structured text, you can create the necessary logic to send print commands from the PLC to the Zebra Printer over Ethernet.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What setup tips can help streamline the process of printing from a PLC to an Ethernet Zebra Printer?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some setup tips include configuring the IP addresses of both devices, ensuring proper network communication, and implementing error handling mechanisms to troubleshoot any issues that may arise during the printing process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific considerations to keep in mind when setting up printing from a PLC to an Ethernet Zebra Printer?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is important to verify the compatibility of the communication protocols supported by both the PLC and the Zebra Printer, as well as ensuring that the network settings are correctly configured to establish a stable connection for printing.</p>
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
