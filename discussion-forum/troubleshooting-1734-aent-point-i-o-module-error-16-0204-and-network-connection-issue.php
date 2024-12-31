
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am encountering an issue with a 1734-AENT Ser A 3.005 point I/O module that is not establishing a connection with a 1768-ENBT ethernet module. The green LED on the network status is flashing, indicating a potential CIP connection problem as per the manual. I have configured">
    <meta name="keywords" content="1734-aent, 1768-enbt, point i/o module error, 16#0204, network connection issue, cip connection problem, rslinx configuration, ethernet module, ip address configuration, firmware update, plc trou">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-1734-aent-point-i-o-module-error-16-0204-and-network-connection-issue">
    <title>Troubleshooting 1734-AENT POINT I/O Module Error 16#0204 and Network Connection Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 1734-AENT POINT I/O Module Error 16#0204 and Network Connection Issue | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am encountering an issue with a 1734-AENT Ser A 3.005 point I/O module that is not establishing a connection with a 1768-ENBT ethernet module. The green LED on the network status is flashing, indicating a potential CIP connection problem as per the manual. I have configured">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-1734-aent-point-i-o-module-error-16-0204-and-network-connection-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 1734-AENT POINT I/O Module Error 16#0204 and Network Connection Issue | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am encountering an issue with a 1734-AENT Ser A 3.005 point I/O module that is not establishing a connection with a 1768-ENBT ethernet module. The green LED on the network status is flashing, indicating a potential CIP connection problem as per the manual. I have configured">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-1734-aent-point-i-o-module-error-16-0204-and-network-connection-issue"
      },
      "headline": "Troubleshooting 1734-AENT POINT I/O Module Error 16#0204 and Network Connection Issue",
      "description": "Hello everyone, I am encountering an issue with a 1734-AENT Ser A 3.005 point I/O module that is not establishing a connection with a 1768-ENBT ethernet module. The green LED on the network status is flashing, indicating a potential CIP connection problem as per the manual. I have configured",
      "author": {
        "@type": "Person",
        "name": "PID.Aut"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-02",
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
                <h1 class="text-white">Troubleshooting 1734-AENT POINT I/O Module Error 16#0204 and Network Connection Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PID.Aut</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">513</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">423</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am encountering an issue with a 1734-AENT Ser A 3.005 point I/O module that is not establishing a connection with a 1768-ENBT ethernet module. The green LED on the network status is flashing, indicating a potential CIP connection problem as per the manual. I have configured the "Chassis configuration" in Rslinx and attempted configuring the IP address both physically and through BOOTP/DHCP software. Despite successful pings from CMD, parameters are not displaying on the Internet page, as noted in the manual for this series. In RSlogix500, I have adjusted settings like "Compatible Keying" and "Disable Keting" without resolution. The program displays error 16#0204, typically attributed to Ethernet wiring or power supply issues. I have tried changing both power supply and Ethernet wiring, including direct and crossed connections, with no success. Additionally, a firmware update to version 3.012 on the I/O point did not resolve the issue. Could this indicate a faulty module or is there an error on my part? Any assistance would be greatly appreciated. Notably, the PLC being used is a 1768-L43S Rev.19.11, with two ethernet modules (192.168.1.1 and 192.168.1.200) Rev.4, and the assigned IP address for the Point I/O is 192.168.1.139.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It may seem like a trivial question, but are the addressing thumbwheels properly set to 999? Past issues have arisen when installers mistakenly thought they had correctly set the thumbwheels, but they were not securely clicked into place. I have always adjusted the chassis configuration in the Logix5000 program by going online and specifying the chassis size. I was unaware that this could also be done through RSLinx.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>beethoven_ii</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum discussion, user beethoven_ii raised a concern regarding addressing thumbwheels not being properly set to 999. This can result in installation issues when electricians fail to click the thumbwheels into the correct position. Typically, chassis configuration in the Logix5000 program is adjusted online by setting the chassis size. However, there may be a possibility to configure it through RSLinx as well.

I have attempted to address the thumbwheel settings by resetting them first to 888 to clear any previous configurations, then adjusting them to 999. Despite trying to configure them through BOOTP/DHCP software, I have not had success. Additionally, I have experimented with changing the IP directly from the thumbwheels, noting that only the last part of the network changes in this process (e.g. 192.168.1.xxx).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PID.Aut</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After setting the IP address on the 1734-aent, it is crucial to adjust the chassis size as well. Failure to do so will result in the offline chassis size not being synced with the module. Make sure to configure the chassis size accordingly for proper functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance the performance of your 1734-AENT module, I suggest isolating it on a separate network from your automation system. Make sure to verify connectivity by pinging it, accessing the embedded web page via a browser, and checking the diagnostic page in RSLinx Classic. Additionally, consider power cycling the module to confirm proper retention of its IP address. Error code 0204 is typically a timeout issue, often caused by Ethernet network disconnections between the controller and the device. Ensure to inspect all network links and switches for potential faults. For compatibility, the 1734-AENT Series A firmware 3.012 should work seamlessly with a CompactLogix 1768 controller running v19 firmware and Rev4 firmware in the 1768-ENBT modules. Keep in mind that older firmware versions may trigger a 16#0203 error instead of 16#0204. When troubleshooting, it's essential to start with fundamentals like PING, HTTP, TCP Port 44818 connectivity using PowerShell TNC, and RSLinx Classic network browsing. If all these checks pass, proceed with troubleshooting the controller and firmware.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee mentioned the importance of setting the chassis size in the 1734-aent module after configuring the IP address. It is crucial to do this step separately as the offline chassis size does not automatically copy to the module. Make sure to assign the IP address first and then adjust the chassis size accordingly to ensure proper configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PID.Aut</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting the 1734-AENT, it is recommended to isolate it on a separate network from your automation system. Ensure that you can successfully PING it, access the embedded web page in a browser, and navigate it in RSLinx Classic to access the diagnostic web page. Additionally, power cycle the device multiple times to confirm that it is maintaining its IP address accurately. Error 0204 typically indicates a timeout issue, often caused by compatibility or configuration conflicts, or a physical disconnection in the Ethernet network between the controller and the device. Verify all network connections and switches for any issues.

For compatibility, the 1734-AENT Series A firmware 3.012 should work with a CompactLogix 1768 controller running v19 firmware and Rev4 firmware in the 1768-ENBT modules. Older firmware versions may result in a 16#0203 error instead of a 16#0204 error.

Start troubleshooting by checking PING, HTTP, using PowerShell TNC to test TCP Port 44818 connectivity, and examining the network in RSLinx Classic. If these tests pass, proceed to diagnose the controller and firmware.

After conducting these initial tests and confirming successful PING and TCP port checks, it is perplexing that despite proper configuration and connectivity, there is no communication between the RSlogix5000 software and the Ethernet module. Ensure that the chassis size matches the configuration in RSlinx to rule out any discrepancies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PID.Aut</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Make sure to check if the firmware for the 1768-ENBT is up-to-date, ideally version 4.005. If not, consider updating it to ensure smooth performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PID.Aut stated that they have conducted various tests, including checking PING and TCP ports, without any errors. Despite being able to configure everything without issues and having a PING, there is no connection to the Ethernet module from the RSlogix5000 software. They found it odd and puzzling. They made sure to verify that the chassis size in RSlinx matches the configuration in RSlogix. To confirm a connection, check if the chassis size in Studio matches the numbers in the module properties tab. If they match, proceed to the module info tab to see what it reports.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing error 160204 on the 1734-AENT POINT I/O module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Error 160204 on the 1734-AENT POINT I/O module is typically attributed to Ethernet wiring or power supply issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot a network connection issue between the 1734-AENT and the 1768-ENBT ethernet module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot the network connection issue, ensure proper configuration of the "Chassis configuration" in Rslinx, correct IP address setup using BOOTP/DHCP software, and check for successful pings from CMD. Additionally, verify Ethernet wiring, power supply, and firmware updates.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can be taken if the green LED on the network status of the 1734-AENT module is flashing, indicating a CIP connection problem?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the green LED on the network status is flashing, indicating a potential CIP connection problem, check the network configuration settings, Ethernet wiring, power supply, and firmware updates. Adjust settings like "Compatible Keying" and "Disable Keting" in RSlogix500 as necessary.</p>
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
