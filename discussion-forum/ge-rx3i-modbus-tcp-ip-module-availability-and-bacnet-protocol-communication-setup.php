
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Do you know if there is a Modbus TCP/IP module available for GE products? Additionally, Im interested in how to set up communication between an RX3i system and Bacnet protocol. Thank you.">
    <meta name="keywords" content="ge rx3i modbus tcp/ip module, ge products modbus tcp/ip compatibility, ge rx3i bacnet protocol communication setup, ge rx3i system bacnet protocol integration, ge rx">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/ge-rx3i-modbus-tcp-ip-module-availability-and-bacnet-protocol-communication-setup">
    <title>GE RX3i Modbus TCP/IP Module Availability and Bacnet Protocol Communication Setup | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="GE RX3i Modbus TCP/IP Module Availability and Bacnet Protocol Communication Setup | Oxmaint Community">
    <meta property="og:description" content="Do you know if there is a Modbus TCP/IP module available for GE products? Additionally, Im interested in how to set up communication between an RX3i system and Bacnet protocol. Thank you.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/ge-rx3i-modbus-tcp-ip-module-availability-and-bacnet-protocol-communication-setup">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GE RX3i Modbus TCP/IP Module Availability and Bacnet Protocol Communication Setup | Oxmaint Community">
    <meta name="twitter:description" content="Do you know if there is a Modbus TCP/IP module available for GE products? Additionally, Im interested in how to set up communication between an RX3i system and Bacnet protocol. Thank you.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/ge-rx3i-modbus-tcp-ip-module-availability-and-bacnet-protocol-communication-setup"
      },
      "headline": "GE RX3i Modbus TCP/IP Module Availability and Bacnet Protocol Communication Setup",
      "description": "Do you know if there is a Modbus TCP/IP module available for GE products? Additionally, Im interested in how to set up communication between an RX3i system and Bacnet protocol. Thank you.",
      "author": {
        "@type": "Person",
        "name": "asterof"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-27",
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
                <h1 class="text-white">GE RX3i Modbus TCP/IP Module Availability and Bacnet Protocol Communication Setup</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>asterof</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">17931</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">107</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Do you know if there is a Modbus TCP/IP module available for GE products? Additionally, I'm interested in how to set up communication between an RX3i system and Bacnet protocol. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The IC695ETM001 module has the capability to support Modbus TCP in both client and server modes. While there is no direct BACNET interface available, the Red Lion G3 series of HMI devices can support BACNET and act as a bridge between systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I originally believed that the IC695ETM001 module was specifically designed for Ethernet connectivity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asterof</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This device features an Ethernet module that operates using the Modbus TCP protocol, a popular Ethernet communication standard.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Modbus TCP/IP operates on Ethernet infrastructure, as explained by Steve Bailey. This protocol involves wrapping a modbus packet within a standard Ethernet protocol packet. A dedicated encoder is required to encapsulate the data, while a TCP/IP decoder is needed to extract the information. Attempting to send a modbus packet to a conventional Ethernet device will not yield the desired outcome.

A crucial question to consider is whether modbus TCP/IP packets can coexist with standard Ethernet packets on the same network without causing disruptions. Typically, the module processes PLC data, generates a modbus packet, encases it in an Ethernet packet, and transmits it accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asterof</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You initially asked about locating a module for the Rx3i that can communicate using Modbus TCP/IP. After some research, I found a suitable module. Although you expressed some skepticism, I am confident that the IC695ETM001 is capable of handling the complex double wrapped packets associated with Modbus TCP/IP. The module's specifications, as listed in the GFA-406F catalog on page 65 under the "Protocol Support" section, confirm that it supports Modbus TCP as both a client and a server. This means that the module can both encapsulate and transmit packets, as well as receive and extract packets.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One important consideration is whether the module requires configuration for Modbus TCP/IP. If so, it will only support Modbus TCP/IP, meaning an additional module set for Ethernet would be needed for Standard Ethernet communication. This leads to the question of whether two modules are necessary for the setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asterof</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to enable Modbus TCP/IP on the port, it must be properly configured. Once configured, it should be dedicated solely to Modbus TCP/IP. It may be feasible to adjust the port configuration using commands within ladder logic, although this is uncertain. To explore the possibility, refer to the module manual for information on "COMREQ" functions. However, even if adjustments are possible, the port will need to cease Modbus TCP/IP communication when utilizing "Standard Ethernet Comm". The simplest solution would likely involve adding a second ETM001. The additional physical port on the module functions as an unmanaged switch. It is important to note that only one IP address can be assigned to the module. For more details, refer to the manual with publication number GFK-2224F.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Make sure to obtain the manual Steve pointed out. This module has the capability to support a minimum of 4 different protocols simultaneously, including TCP/IP (commonly used by web publishers), SRTP (used in Proficy ME), EGD, and Modbus TCP. Properly configuring the module eliminates the need for COMM_REQs. It's important to note that certain Ethernet modules or ports from GEIP and other brands can only handle one protocol at a time, unlike the VersaMax Micro. These are essentially Ethernet to Serial adapters and lack the versatility of true serial ports. Additional Ethernet modules are only necessary if network segregation is required, such as isolating a SCADA from the I/O network. For more information, refer to document GFK-2224.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Two ladder block functions are provided for performing Modbus TCP read/write operations using the comreq commands. These functions are in XML format, so make sure to change the file extension from .txt to .xml before importing them into the logic/program blocks of the Proficy Machine Edition software. It is important to note that the comreq command requires a sysid and a task to function properly. For detailed instructions on setting up the Modbus TCP communication, refer to the document at http://geplc.com/downloads/Labs/GFS-384 M10 Modbus TCP.pdf. When using PACSystems CPU with an embedded Ethernet interface, the TASK parameter should be set to 65536 (0x10000) to address the CPU’s Ethernet daughterboard. For a comprehensive guide, please refer to the full manual at https://digitalsupport.ge.com/communications-User-Manual-GFK-2224D-DO2008-enUS.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tearoscarlet</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Please note that this discussion thread is from seven years ago! 

In Scenario 1, where the RX3i functions as the Server (Slave), simply enable Modbus in the 3i CPU and set the Modbus Address Space Mapping Type to Standard Modbus Mapping on the Settings Tab. The Master device will then poll the 3i for the specified MB addresses. Refer to the GFK document to determine which % memory data type corresponds to each Modbus address. It is recommended to bundle the registers you require into a continuous memory area for efficient reading. This is a straightforward process from the perspective of GE and is how I have set up multiple RX3i machines to communicate with a client.

In Scenario 2, the roles are reversed with the 3i acting as the Client (Master) and the other device as the Server (Slave). In this case, the 3i will be responsible for writing to the server, requiring comm_reqs to be initiated and executed. You will need to set up 2 comm_reqs: the first to establish an MBTCP channel with the server's IP address, and the second to actually write the data once the channel is open.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mbartoli</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although this thread may be old, the information shared by tearoscarlet regarding TCP read and write for Modbus is still relevant and useful. The process for setting up a Modbus Server is straightforward, but the client implementation can be a bit challenging. It seems to be a holdover from older systems, but using Unity Pro I/O Scanning is a more user-friendly option. However, if you need to extract data from a Modbus TCP device like a meter, tearoscarlet's source code can be a helpful starting point. Adjust and test the code until it functions properly, which is not too difficult. Make sure to have the correct SYSID for your card or CPU position. For multiple meters, it is recommended to utilize multiple channels for a more efficient process: open, read, close, and repeat.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gcurrent</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, this setup remains highly relevant today. I continue to utilize it in conjunction with power meters that were upgraded to the RX3i model a few years ago. The configuration includes the RX3i CPE305, with the SYSID reflecting the onboard Ethernet port. This setup employs a timer and cyclically polls each meter every 2 to 3 seconds in an up counter manner. In case of any errors, the channel is closed, reopened, and the process restarts. Additionally, at the end of the last day of each month, during the final hour, the meters' registers are cleared to initiate a new cycle. While this setup does not store information beyond a monthly basis, I have other applications that maintain data for each month throughout the year. Simply renaming to XML and importing blocks can facilitate this process. While not without flaws, this setup performs effectively. Best regards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sjohnson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tearoscarlet mentioned a method for conducting Modbus TCP read/write operations using ladder block functions in the Proficy machine addition program. These functions are in XML format, so simply change the file extension from txt to xml and import them into the logic/program blocks. Make sure to include the sysid and task parameters in the comreq command. For PACSystems CPU with embedded Ethernet interface, set the TASK parameter to 65536 (0x10000). For detailed instructions, refer to the manual provided at http://geplc.com/downloads/Labs/GFS-384 M10 Modbus TCP.pdf. To access the attachments mentioned, visit https://digitalsupport.ge.com/commu...munications-User-Manual-GFK-2224D-DO2008-enUS.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>EAndersontxfl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are numerous ways to program the RX3i and 9030 PLCs. One straightforward example is performing open and close channel operations on the 9030, as well as read and write functions on the RX3i. Explore the various methods available for programming these PLCs to optimize their performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sjohnson</span></li>
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
<h4 class='text-dark'>FAQ: 1. Is there a Modbus TCP/IP module available for GE products?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, there is a Modbus TCP/IP module available for GE products, such as the GE RX3i system. It allows for communication using the Modbus TCP/IP protocol.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I set up communication between a GE RX3i system and Bacnet protocol?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set up communication between a GE RX3i system and the Bacnet protocol, you will need to configure the appropriate communication settings on both systems. This may involve setting up the necessary protocols and addressing schemes to establish a connection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific steps or considerations to keep in mind when configuring Bacnet protocol communication with a GE RX3i system?</h4>
<p class='text-muted'><strong>Answer:</strong> - When configuring Bacnet protocol communication with a GE RX3i system, it is important to ensure that both systems support the Bacnet protocol and that the communication parameters, such as device addresses and network settings, are properly configured to enable successful data exchange.</p>
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
