
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I recently replaced a remote using the a1734-AENTR series C. After configuring the IP address and number of slots, it seemed like the issues were resolved as I can successfully ping it on the network. However, I am still unable to control the elements of the remote">
    <meta name="keywords" content="troubleshooting, 1734-aentr, remote control, green flashing network status error, firmware difference, downgrade firmware, ip address configuration, network communication error, supervisory system, remote control elements, version 012">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-1734-aentr-remote-control-green-flashing-network-status-error">
    <title>Troubleshooting 1734-AENTR Remote Control: Green Flashing Network Status Error | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 1734-AENTR Remote Control: Green Flashing Network Status Error | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I recently replaced a remote using the a1734-AENTR series C. After configuring the IP address and number of slots, it seemed like the issues were resolved as I can successfully ping it on the network. However, I am still unable to control the elements of the remote">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-1734-aentr-remote-control-green-flashing-network-status-error">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 1734-AENTR Remote Control: Green Flashing Network Status Error | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I recently replaced a remote using the a1734-AENTR series C. After configuring the IP address and number of slots, it seemed like the issues were resolved as I can successfully ping it on the network. However, I am still unable to control the elements of the remote">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-1734-aentr-remote-control-green-flashing-network-status-error"
      },
      "headline": "Troubleshooting 1734-AENTR Remote Control: Green Flashing Network Status Error",
      "description": "Hello everyone! I recently replaced a remote using the a1734-AENTR series C. After configuring the IP address and number of slots, it seemed like the issues were resolved as I can successfully ping it on the network. However, I am still unable to control the elements of the remote",
      "author": {
        "@type": "Person",
        "name": "edrHeihel"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-16",
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
                <h1 class="text-white">Troubleshooting 1734-AENTR Remote Control: Green Flashing Network Status Error</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1058</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">70</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I recently replaced a remote using the a1734-AENTR series C. After configuring the IP address and number of slots, it seemed like the issues were resolved as I can successfully ping it on the network. However, I am still unable to control the elements of the remote through the supervisory system. Additionally, the Network Status LED only flashes green. I suspect that the communication error may be due to the firmware difference between the old version (6.012) and the new version (7.01) installed. Is it possible to downgrade the firmware from 7.01 to 6.012? Thank you for your help!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When using this remote for the PLC, be aware that the module may have precise keying options. If revisions are altered while precise keying is enabled, the behavior will mirror this process. To adjust this, you can switch the keying to a compatible setting in the module properties.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After confirming the migration of the project to Studio 5000 Designer version 32, I attempted to add a 1734-AENTR C series module for testing purposes. However, I noticed that it is not listed as an option, with only series A and B available. I am currently investigating ways to update the catalog as I have already verified compatibility of the products on the Rockwell website.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, I am encountering difficulties accessing the module properties within Studio 5000 as a yellow question mark is displayed in place of the module icon. I plan to integrate this C series into Studio 5000, which may be impacted by a firmware mismatch. The original module had firmware version 6.01, while the new module is running on version 7.01. I will attempt to resolve this issue by utilizing ControlFlash Plus to downgrade the firmware from 7.01 to 6.01.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While downgrading may appear to be a quick fix, the optimal solution for long-term success is to visit Rockwell's product compatibility and download center. By downloading the add-on profiles and EDS for a 1734-AENTR Series C v7.01, you can ensure seamless integration and maximize performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As per edrHeihel's statement, there seems to be an issue with accessing module properties in Studio 5000, indicated by a yellow question mark replacing the module icon. To address this, I plan on integrating the C series into my Studio 5000 software. It is possible that the discrepancy lies in the firmware versions, with the replaced module at 6.01 and the new one at 7.01. To resolve this, I will attempt to use ControlFlash Plus to downgrade the firmware from 7.01 to 6.01, although caution should be taken when flashing across different series. It is advisable to follow the previous suggestion and download the latest AENTR profile for a smoother integration process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully downloaded the Add On Profile (AOP) and Electronic Data Sheet (EDS) for the 1734-AENTR series C. However, the project's firmware is version 6.01 while the hardware firmware is version 7.01. Despite having the AOP and EDS, I am unable to establish communication with the remote device. On a positive note, I am now able to access the hardware through Studio 5000 and view its settings and diagnostics. Unfortunately, I keep encountering a connection timeout error in the hardware status, leading to unsuccessful connection attempts. The most likely cause for this issue seems to be the firmware discrepancy. I have thoroughly checked and addressed all other potential issues. Considering the device's integration within a large network for the company's Machine Room system (which regulates cold and air supply throughout the plant), I am hesitant to upgrade the firmware on other components and risk network disruption. Therefore, I am considering downgrading the firmware on the new hardware to ensure seamless operation within the existing network infrastructure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper functionality, it is essential to delete the module and then create a new one with the correct series and firmware revision. This process guarantees that the module operates correctly and efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To successfully transfer the AENTR offline project to the PLC, make sure to adjust the project version from 6 to 7 before initiating the download process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After downloading firmware 6.012 from the Rockwell website and utilizing Control Flash Plus to downgrade the remote head firmware, I encountered an issue where the Network Status LED kept blinking and the remote failed to connect to the PLC. Upon further investigation, I discovered that the PLC was configured with a gateway address while the remote was not. Both devices have a subnet mask of 255.255.0.0, but only the PLC has a gateway address assigned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I am excited to share that I successfully downgraded the remote using Control Flash Plus. Despite this, I encountered connection issues and the Network Status kept blinking. After researching online, I came across a helpful video from a colleague who suggested adjusting the RPI parameter. In his case, he increased it from 30ms to 750ms to resolve similar issues. Upon checking my module, I discovered that my RPI was set at 20ms. Following the video's guidance, I increased this parameter and the problem was fixed! Once communication was back to normal, I regained control through the supervisory system. I want to express my gratitude for your support and patience throughout this process. If you have any further questions, feel free to reach out. Thank you and see you later!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Explanation: The RPI, or RequestedPacketInterval, determines how quickly the PLC will request data from the device. If the device previously operated at a faster RPI, there may still be underlying issues that adjusting the RPI has covered up. While a 750ms RPI may seem lengthy, it could still function effectively for your specific use case.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Joseph_e2's comment, the RPI (Requested Packet Interval) determines the speed at which a PLC requests data from a device. If the module previously operated at a faster RPI, changing it may have covered up underlying issues. While a 750ms RPI may seem lengthy, it could function well for your specific situation. This value was used by a colleague in a video demonstration, prompting me to test it as well. However, I typically set it to a maximum of 80ms and will assess this parameter across other network components.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Setting an RPI of 750ms for an AENTR is never recommended. Optimal RPI values typically range from 5 to 20ms to effectively address issues. Simply masking the problem with a higher RPI does not provide a solution. Anyone suggesting an RPI of 750ms on an IO module may lack expertise in this area.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee emphasized the significance of setting the RPI for an AENTR below 20ms to effectively address any network issues. Running it at 750ms only masks the problem without solving it. It is essential to diagnose the network for anomalies that may be causing the issue rather than assuming it is hardware-related. Thank you for the guidance and feedback provided!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon arrival, the maintenance team informed me that they had replaced the remote due to communication issues. While I was able to get the new remote working, upon further reflection, it seems as though the replacement may have been unnecessary. It is possible that a network problem was the root cause of the remote malfunction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent forum discussion, robertmee emphasized the importance of not having an RPI (Request Packet Interval) for an AENTR (Ethernet Adapter) set at 750ms. He recommended running them at a faster rate, between 5 to 20ms, to avoid masking underlying issues. Setting an RPI too high can lead to unresolved problems within the network. It was discovered that other anomalies were occurring on the network that night, specifically isolated to one arm of the network. After inspecting the cables and changing the router port, the issue was resolved. Reverting the RPI back to 20ms improved the network's performance, with no further reports of problems since. Monitoring has been ongoing to ensure continued stability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the Network Status LED on my 1734-AENTR remote flashing green?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The green flashing Network Status LED indicates a network communication issue. It's important to troubleshoot this to ensure proper functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I replaced a remote using the 1734-AENTR series C, configured the IP address and number of slots, but still can't control elements through the supervisory system. What could be the issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you can ping the remote successfully but can't control elements, there might be a communication error. Check for firmware differences between the old and new versions, as this could be a potential cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can I downgrade the firmware on my 1734-AENTR remote from version 7.01 to 6.012?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Depending on the specific model and compatibility, it may be possible to downgrade the firmware. However, it's essential to follow manufacturer guidelines and ensure compatibility to avoid any potential issues.</p>
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
