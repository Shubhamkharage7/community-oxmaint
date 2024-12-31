
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I manage a network consisting of 17 1734-AENTs, but one AENT consistently experiences communication issues. The AENTModule Status shows green, with Network Activity rapidly flashing green, Network Status and Point Bus Status both flashing red, and I/O Module Status showing green while Network Status flashes red. Despite trying various">
    <meta name="keywords" content="troubleshooting network communication issues, 1734-aent module, network activity flashing green, network status flashing red, point bus status flashing red, i/o module status green, ethernet cable replacement, adjusting rpi to 250ms, cable">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-network-communication-issues-with-1734-aent-module">
    <title>Troubleshooting Network Communication Issues with 1734-AENT Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Network Communication Issues with 1734-AENT Module | Oxmaint Community">
    <meta property="og:description" content="I manage a network consisting of 17 1734-AENTs, but one AENT consistently experiences communication issues. The AENTModule Status shows green, with Network Activity rapidly flashing green, Network Status and Point Bus Status both flashing red, and I/O Module Status showing green while Network Status flashes red. Despite trying various">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-network-communication-issues-with-1734-aent-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Network Communication Issues with 1734-AENT Module | Oxmaint Community">
    <meta name="twitter:description" content="I manage a network consisting of 17 1734-AENTs, but one AENT consistently experiences communication issues. The AENTModule Status shows green, with Network Activity rapidly flashing green, Network Status and Point Bus Status both flashing red, and I/O Module Status showing green while Network Status flashes red. Despite trying various">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-network-communication-issues-with-1734-aent-module"
      },
      "headline": "Troubleshooting Network Communication Issues with 1734-AENT Module",
      "description": "I manage a network consisting of 17 1734-AENTs, but one AENT consistently experiences communication issues. The AENTModule Status shows green, with Network Activity rapidly flashing green, Network Status and Point Bus Status both flashing red, and I/O Module Status showing green while Network Status flashes red. Despite trying various",
      "author": {
        "@type": "Person",
        "name": "Drew Ethridge"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-20",
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
                <h1 class="text-white">Troubleshooting Network Communication Issues with 1734-AENT Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Drew Ethridge</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>17 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5539</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">222</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I manage a network consisting of 17 1734-AENTs, but one AENT consistently experiences communication issues. The AENTModule Status shows green, with Network Activity rapidly flashing green, Network Status and Point Bus Status both flashing red, and I/O Module Status showing green while Network Status flashes red. Despite trying various solutions such as replacing the ethernet cable, adjusting the RPI to 250ms, ensuring the cable is isolated in a conduit away from AC sources, and even swapping modules, the problem persists. Restarting the AENT temporarily resolves the issue, ruling out an IP conflict due to the inability to ping the node when it goes offline. Before resorting to Wireshark for further investigation, I am seeking additional suggestions on troubleshooting steps. Additionally, I am looking for recommended resources such as videos or blogs to guide me through using Wireshark to troubleshoot an AB network, as I am a novice in this area.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is a power surge the culprit? Are you able to switch out the power supply responsible for the module in question?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tdoa</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When adding a new adapter in Logix, the default scan time is set to 20ms, which can be too aggressive for networks with unmanaged switches or lower speeds. It is recommended to adjust the scan time to 50-100ms for better performance. In cases of high-speed activities, setting up Quality of Service (QOS) to prioritize the unit is essential.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JaxGTO</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you reviewed the statistics for the PLC Ethernet module web page? What baud rate is configured on your AENT? It is recommended to keep it at Auto Negotiate unless there is a specific reason to change it, such as for DLR functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What are the different types of modules and how many are typically found in a chassis?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Troubleshooting I/O Timeout on 1734-AENT Module - Resolve with Power Cycle

When the Network Status and Point Bus Status LEDs on your 1734-AENT module are both flashing red, it indicates a timeout in the I/O connections from the controller. To mimic this issue, simply disconnect the PLC from the network. If pinging the node is unsuccessful when it goes down, it is unlikely due to an IP conflict.

In the event of an IP conflict, the Network Status LED on the 1734-AENT module would remain solid red. However, if it's a temporary I/O timeout caused by noise or loss of connectivity to the ControlLogix, the IP stack should still be functional for PING, HTTP, and RSLinx.

Consider the physical setup between the ControlLogix and the troubled 1734-AENT module. Verify if the malfunctioning device is the only one connected to the switch used for network connectivity. When diagnosing with PING after a failure, note the switch you are connected to and the physical path to the 1734-AENT module.

If power cycling the AENT module resolves the issue, determine if only the module itself is being cycled or if the entire enclosure is affected. It's important to ascertain if the connected switch also undergoes a power cycle.

Observing the Network Activity light flashing may indicate a good physical connection, but the inability to communicate through PING, TCPING, HTTP, or RSLinx suggests a blockage or unavailability of access to the Ethernet port from the network.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
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
            <p>Apologies for the delayed response as I had to wait for another issue to troubleshoot. Thank you tdoa for recommending the power supply change, although it did not resolve the problem. I will check the statistics pages as suggested by dmroeder. There are two modules in place - one IB4 in the first slot and one OB4 in the second slot, as mentioned by JeremyM. Ken Roach pointed out that unplugging the cable can simulate the Network and Point Bus status lights.

I appreciate the advice on identifying an "solid red" IP conflict. After the failure occurs, I am unable to ping, access the webpage, or locate the AENT in RSLink. Even after attempting to connect directly, there is no response. Cycling power only affects the AENT, as there is no local switch in the panel. Unfortunately, I do not have detailed network information as the system spans multiple buildings and I am restricted to the corporate network.

I plan to connect a switch with a mirrored port and utilize wireshark to capture events surrounding the fault. It is my goal to troubleshoot and resolve the issue promptly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Drew Ethridge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The 1734-AENT appeared to have shut down the port, as there was no response when directly connected to it. However, the Network Status LED indicated activity, suggesting that it was transmitting and receiving data. It is possible that the IP stack in the 1734-AENT is crashing, even though it is typically stable being a headless Windows CE device. To troubleshoot this issue, capturing the failure with Wireshark connected to a mirrored port is recommended.

In a past experience, a "DHCP enforcer" utility was used to resolve issues with static IP devices by compelling them to enable DHCP and renew their IP addresses. A change in the IP address could explain the Network Status LED activity without being able to establish a connection to the device through PING, HTTP, or RSLinx.

To determine the IP address assignment method being used, whether it is DHCP, Static IP, or thumbwheel (192.168.1.xxx), a Wireshark capture would be the most effective tool. During a "shutdown" mode, a direct connection would show DHCP requests or ARP packets. It is recommended to use a USB/Ethernet dongle for capturing packets, ensuring that the computer does not interfere with the network traffic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Having encountered a similar issue with the 1734-AENT modules, I wanted to share my solution. Within our corporate network, we utilize a V-lan for our automation equipment. I faced a situation where two 1734-AENT's were repeatedly failing, necessitating a power cycle to resolve the issue. Upon replacing them with 1734-AENTR modules, the problem persisted, prompting further investigation. Leaving a single port on the PLC configured, a colleague in the IT department mentioned experiencing a similar issue with T&A fingerprint scanners. The resolution for them was disabling POE on the affected ports. Implementing the same solution on the port housing the two 1734-AENT modules effectively resolved the problem. This experience may provide insight for others encountering a similar issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Karldj</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like IT issues are a common occurrence. Thank you for sharing this helpful information!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you encountered issues with a 1769 AENTR connected to two point IOs via a bus expansion cable? The last station consistently freezes, halting production until power is cycled. What could potentially be causing this recurring problem? Share your insights and experiences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kemeesnazzy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This station is known for its constant freezing issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kemeesnazzy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To effectively monitor connection faults in each module within a PLC program, you can track which specific module is causing issues on a particular rack. One approach is to set up traps that instantly detect any connection faults in the modules, latching a bit until manually toggled. This helps identify and address problematic modules efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gimborden</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response regarding the IO hardware configuration in Logix5000. Is it possible for the system to identify a specific module experiencing issues with a caution sign? Additionally, I would like to know how to set up a trap for this purpose.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kemeesnazzy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If a module is not communicating, it will display a yellow triangle indicator. Navigate through the iO tree to locate the module. Occasionally, there may be a delay in the tree refreshing while you are scrolling and expanding it. To set up traps, simply create a DINT tag and utilize an XIC connection fault status to OTL DINT.x, with x varying for each individual module. This method allows you to set traps for up to 32 modules.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I find this information very useful. Could you please direct me to a reliable source where I can download the Esd file for 1769-AENTR? I need to update them as they are currently displaying a yellow question mark.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kemeesnazzy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize this AOI for initial detection by providing the module's name from your IO tree. The AOI can be found at https://github.com/JeremyMedders/LogixLibraries/blob/main/src/System/Sys_Module_AOI.L5X. Streamline your detection process with this convenient tool.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You have the ability to track the connection status of every individual module. This feature allows you to stay informed and manage your modules efficiently. Keep an eye on the connectivity status of each module to ensure smooth operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gimborden</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my 1734-AENT module experiencing communication issues despite trying various troubleshooting steps?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: There could be various reasons for persistent communication issues, including hardware faults, network configuration errors, or interference. Further investigation using tools like Wireshark may help uncover the root cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot network communication issues with a 1734-AENT module effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: In addition to the steps you have already taken, such as cable replacement and adjusting RPI, utilizing network diagnostic tools like Wireshark can provide detailed insights into network traffic and potential issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there recommended resources for using Wireshark to troubleshoot an Allen-Bradley network for beginners?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: To learn how to use Wireshark effectively for troubleshooting an Allen-Bradley network, you can refer to online videos, blogs, or tutorials that provide step-by-step guidance on capturing and analyzing network traffic specific to your setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Why does restarting the 1734-AENT module temporarily resolve the communication issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Temporary resolution by restarting the AENT module could indicate a potential software glitch, transient network issue, or internal module reset that clears the communication problem temporarily. Further investigation is recommended to identify the underlying cause.</p>
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
