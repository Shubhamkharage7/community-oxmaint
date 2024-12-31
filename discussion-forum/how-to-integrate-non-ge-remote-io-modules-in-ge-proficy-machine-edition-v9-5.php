
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am relatively new to working with PLCs and have limited experience with GE PLCs. I am currently seeking assistance with downloading a pre-written PLC code using GE Proficy Machine Edition v9.5. The system consists of a Versamax Micro Plus Controller - IC200UDR064-EK, a QuickPanel+ HMI - IC755CSS06RDA-CR,">
    <meta name="keywords" content="ge proficy machine edition v5, plc programming, versamax micro plus controller, ic200udr064-ek, quickpanel+ hmi, ic755css06rda-cr, ethernet module, ic200uem001">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-integrate-non-ge-remote-io-modules-in-ge-proficy-machine-edition-v9-5">
    <title>How to Integrate Non-GE Remote IO Modules in GE Proficy Machine Edition v9.5 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Integrate Non-GE Remote IO Modules in GE Proficy Machine Edition v9.5 | Oxmaint Community">
    <meta property="og:description" content="Hello, I am relatively new to working with PLCs and have limited experience with GE PLCs. I am currently seeking assistance with downloading a pre-written PLC code using GE Proficy Machine Edition v9.5. The system consists of a Versamax Micro Plus Controller - IC200UDR064-EK, a QuickPanel+ HMI - IC755CSS06RDA-CR,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-integrate-non-ge-remote-io-modules-in-ge-proficy-machine-edition-v9-5">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Integrate Non-GE Remote IO Modules in GE Proficy Machine Edition v9.5 | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am relatively new to working with PLCs and have limited experience with GE PLCs. I am currently seeking assistance with downloading a pre-written PLC code using GE Proficy Machine Edition v9.5. The system consists of a Versamax Micro Plus Controller - IC200UDR064-EK, a QuickPanel+ HMI - IC755CSS06RDA-CR,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-integrate-non-ge-remote-io-modules-in-ge-proficy-machine-edition-v9-5"
      },
      "headline": "How to Integrate Non-GE Remote IO Modules in GE Proficy Machine Edition v9.5",
      "description": "Hello, I am relatively new to working with PLCs and have limited experience with GE PLCs. I am currently seeking assistance with downloading a pre-written PLC code using GE Proficy Machine Edition v9.5. The system consists of a Versamax Micro Plus Controller - IC200UDR064-EK, a QuickPanel+ HMI - IC755CSS06RDA-CR,",
      "author": {
        "@type": "Person",
        "name": "sp_"
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
                <h1 class="text-white">How to Integrate Non-GE Remote IO Modules in GE Proficy Machine Edition v9.5</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>sp_</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1927</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">119</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am relatively new to working with PLCs and have limited experience with GE PLCs. I am currently seeking assistance with downloading a pre-written PLC code using GE Proficy Machine Edition v9.5. The system consists of a Versamax Micro Plus Controller - IC200UDR064-EK, a QuickPanel+ HMI - IC755CSS06RDA-CR, and an ethernet module - IC200UEM001-DF. Additionally, a Weidmuller remote IO module - UR20-FBC-MOD-TCP-V2 is connected via ethernet to an unmanaged switch. I have successfully set IP addresses for all devices and confirmed connectivity through pinging.

My query pertains to configuring the Weidmuller remote IO module within the GE program. Despite efforts to add the module as a target, I am unable to locate it within the hardware configurations. The option to add a module remains greyed out, and only GE modules are visible when attempting to add a target. Could the solution lie within PLC Access Drivers? Even after setting the IP for the "Device2" as the IP for the remote IO, communication with the PLC remains unsuccessful, evident by a Bus Failure LED on the remote IO.

How can non-GE remote IO modules be integrated into a GE project and configured effectively? Where within the project tree can the remote IO data be accessed, particularly for viewing inputs and outputs related to the IO module?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The PLC model in question was not originally designed to work with remote I/O, so any solution will require a workaround to address this limitation. The Weidmuller remote I/O system utilizes Modbus TCP communication protocol. In order to integrate it with the PLC, the PLC would need to function as a Modbus TCP client, although this feature may not be supported. If it is supported, you would need to program logic using COMREQ instructions, although the speed may not be optimal. The IC200UEM001 'ethernet module' is actually a serial to ethernet converter. If the data from the remote I/O is solely for displaying on the HMI, you could consider having the Quick Panel serve as the Modbus TCP client instead of the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude for your assistance! I have located a device under Modicon TCP/IP within the PLC Access Drivers section, which I suspect to be the remote IO. This device is located under HMI, leading me to believe that the HMI serves as the Modbus TCP client.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sp_</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Certainly! By utilizing the PLC access driver, you can configure the HMI to act as the Modbus TCP client. In the third screenshot you provided, make sure that "Device 2" is set to the IP address of the Weidmuller unit. As I do not have experience with Weidmuller remote I/O, I am unable to advise on how it maps its inputs and outputs to Modbus addresses. It is likely that discrete inputs are assigned 1xxxxx addresses, discrete outputs are assigned 0xxxx addresses, analog inputs are assigned 3xxxx addresses, and analog outputs are assigned 4xxxx addresses.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After troubleshooting, I discovered that "Device2" shares the same IP address as the remote IO, yet I am still experiencing a bus failure. Upon further investigation of the ethernet option module, I learned that the ethernet driver needs to be downloaded using the PumpKIN utility. Could this be the reason for the persistent fault? Additionally, the manual mentions that when the Ethernet option module is loaded with the Modbus image, it cannot communicate with PME (Proficy Machine Edition). What is the significance of this statement?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sp_</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although it is still causing a bus failure, what exactly is causing this fault message to appear? Additionally, the manual mentions that when the Ethernet option module is loaded with the Modbus image, it is unable to communicate with PME software. The VersaMax Micro ethernet option module acts as a serial to ethernet converter and can be configured to work with either ModbusTCP or GE's SRTP protocol, but not both at the same time. PME software relies on SRTP to communicate with the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
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
            <p>The remote IO is displaying a bus failure LED. As I investigate further, I notice that the remote IO is receiving Analog Inputs which play a crucial role in the control program. In this scenario, configuring the ethernet option card to utilize Modbus TCP is necessary for seamless communication with the remote IO module. If the setup is for Modbus, it raises the concern of compatibility with PME. Does this mean that accessing the values from the analog inputs will be affected? Additionally, why is the remote IO listed under the HMI section in the project tree? Is there any connection between the two?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sp_</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is your company willing to share a copy of the project with me? If sharing it on a public platform is not an option, feel free to send me a private message (PM) and I will provide you with my email address. I can review the project and interpret the designer's intentions. At the very least, I can assess if logic was included to enable communication with the remote I/O module. The UDR064 features two serial ports, with one being taken over by the ethernet option module. This allows for communication with the HMI through the ethernet port, while PME can communicate with the other port via RS232. Based on the documentation available, the ports on the UDR064 can only operate as a Modbus server, not a client. Therefore, data from the remote I/O must be transmitted to the PLC through the HMI acting as a Modbus TCP client. This method may not be the most efficient for integrating remote I/O into your control system architecture. It is likely that the Weidmuller unit requires constant communication with a Modbus client to avoid triggering the 'bus failure' LED.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon review of the file, it appears that the HMI is primarily utilized for displaying status information and faults, with no control devices featured on any screens. Surprisingly, the original designer opted for Modbus communication with the PLC instead of the native GE driver. The HMI is configured with an IP address of 192.168.1.100, set to communicate with IP address 192.168.1.101, which is likely the address assigned to the ethernet adapter on CPU port 2. This inference is based on the hardware configuration for the Port 2 ethernet adapter, configured with a station ID of 54 matching the Device 2 communications driver setup in the HMI target.

To establish communication with the Weidmuller unit, you must assign an appropriate IP address and station ID. Setting up a Modbus TCP/IP device driver in the HMI and creating new HMI variables to match the I/O installed on the Weidmuller is essential. However, if you intend to integrate the I/O points from the Weidmuller unit into the PLC ladder logic, expect a delay in performance. The delay could be noticeable between the physical actuation of an input point on the machine and the PLC's reaction to the state change. Furthermore, if an input at the Weidmuller unit is meant to trigger an output, the delay will be even longer. If the Weidmuller is solely being used for input devices displayed on the HMI, the lag time may be acceptable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Steve, thank you for reviewing the information. I greatly value your time and input. After reaching out to Emerson technical support all day, I was able to successfully resolve the issue. The UEM001 ethernet option module has been assigned the IP address 198.168.0.1, the Quickpanel HMI is set to 192.168.0.3, and the UR20 remote IO is at 192.168.0.2. To connect, I downloaded the Modbus TCP driver using the PumpKIN utility onto the ethernet module following the manual's instructions. In order to enable the Modbus TCP Client, I accessed the setup via Telnet protocol on the ethernet module (as you previously mentioned, the PLC functions as the Modbus TCP client). To configure the remote IO in the PME, I ensured that "Device2" was configured with the IP address 192.168.0.2, keeping the Unit ID and Port ID unchanged. It seems they replaced the COMM_REQ instruction with the MODBUS_TCP_RW instruction, requiring me to update the IP address in the logic to match that of the remote IO I had set.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sp_</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I discovered a new feature today: With firmware version 4.0, the VersaMax Micro now supports Modbus TCP client functionality. This update came about after my retirement, serving as a reminder of my advancing age. I'm glad to hear that your issue has been resolved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After an extensive search, I finally located the necessary drivers for the unit. For those seeking these drivers in the future, they can be found at the following link: https://emerson-mas.my.site.com/communities/en_US/Download/IC200UEM001-drivers. Once the driver was successfully installed and configured via telnet, the unit operated seamlessly as a modbus slave on Service Port 502. The IC200UEM001 MODBUS DRIVER made this possible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Josescueva</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I integrate non-GE remote IO modules, such as the Weidmuller UR20-FBC-MOD-TCP-V2, into a GE Proficy Machine Edition v9.5 project?</h4>
<p class='text-muted'><strong>Answer:</strong> - To integrate non-GE remote IO modules into your GE project, you may need to use PLC Access Drivers or specific communication protocols supported by both the GE PLC and the remote IO module. Ensure that the IP addresses are correctly configured and that communication settings are properly set up.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is the option to add a module as a target greyed out in GE Proficy Machine Edition v9.5 when trying to configure a non-GE remote IO module?</h4>
<p class='text-muted'><strong>Answer:</strong> - The option to add a module as a target may be greyed out because the software may not automatically recognize non-GE modules. In such cases, you may need to manually configure the communication settings and possibly use PLC Access Drivers to establish communication with the non-GE remote IO module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I access the remote IO data within the GE Proficy Machine Edition v9.5 project tree?</h4>
<p class='text-muted'><strong>Answer:</strong> - To access the remote IO data within your project tree, you will likely need to create specific data structures or tags that correspond to the inputs and outputs of the remote IO module. These tags can then be referenced in your ladder logic or HMI screens to interact with the remote IO module effectively.</p>
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
