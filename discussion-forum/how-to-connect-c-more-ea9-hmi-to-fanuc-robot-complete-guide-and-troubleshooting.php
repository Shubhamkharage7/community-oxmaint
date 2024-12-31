
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have extensively researched the process of connecting an Automation Direct C-More EA9 series HMI to a FANUC robot, but so far, I have not been successful. Some sources suggest that it can be done, while others believe it is impossible. The FANUC robot has the R-553 HMI option,">
    <meta name="keywords" content="c-more ea9 hmi, fanuc robot, connecting hmi to fanuc, r-553 hmi option, ge 90/30 plc, kepware, plc communication timeout, srtp ethernet driver, fan">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-c-more-ea9-hmi-to-fanuc-robot-complete-guide-and-troubleshooting">
    <title>How to Connect C-More EA9 HMI to FANUC Robot: Complete Guide and Troubleshooting | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect C-More EA9 HMI to FANUC Robot: Complete Guide and Troubleshooting | Oxmaint Community">
    <meta property="og:description" content="I have extensively researched the process of connecting an Automation Direct C-More EA9 series HMI to a FANUC robot, but so far, I have not been successful. Some sources suggest that it can be done, while others believe it is impossible. The FANUC robot has the R-553 HMI option,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-c-more-ea9-hmi-to-fanuc-robot-complete-guide-and-troubleshooting">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect C-More EA9 HMI to FANUC Robot: Complete Guide and Troubleshooting | Oxmaint Community">
    <meta name="twitter:description" content="I have extensively researched the process of connecting an Automation Direct C-More EA9 series HMI to a FANUC robot, but so far, I have not been successful. Some sources suggest that it can be done, while others believe it is impossible. The FANUC robot has the R-553 HMI option,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-c-more-ea9-hmi-to-fanuc-robot-complete-guide-and-troubleshooting"
      },
      "headline": "How to Connect C-More EA9 HMI to FANUC Robot: Complete Guide and Troubleshooting",
      "description": "I have extensively researched the process of connecting an Automation Direct C-More EA9 series HMI to a FANUC robot, but so far, I have not been successful. Some sources suggest that it can be done, while others believe it is impossible. The FANUC robot has the R-553 HMI option,",
      "author": {
        "@type": "Person",
        "name": "Robot_Guy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-12",
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
                <h1 class="text-white">How to Connect C-More EA9 HMI to FANUC Robot: Complete Guide and Troubleshooting</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Robot_Guy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3420</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">205</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have extensively researched the process of connecting an Automation Direct C-More EA9 series HMI to a FANUC robot, but so far, I have not been successful. Some sources suggest that it can be done, while others believe it is impossible. The FANUC robot has the R-553 HMI option, which emulates a GE 90/30 PLC. I have confirmed that the robot controller option is working properly and that the robot registers are correctly mapped using Kepware on my computer. The HMI is set up to utilize the GE 90/30 SRTP Ethernet driver, which FANUC claims to be compatible with. However, I am encountering a PLC-001 PLC Communication Timeout on the HMI. Can anyone provide guidance on establishing communication between these two devices? I have encountered enough clues to suggest that they are attempting to communicate, but I may be overlooking something or they may truly be incompatible. Your insights are appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you required to configure the robot's HMI option? The C-More SRTP driver requires %I addresses for inputs, %Q addresses for outputs, %M addresses for internal discretes, and %R addresses for 16-bit data registers. Since these addresses are not native to the robot, it is likely that the HMI option maps robot addresses to SRTP addresses.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully completed memory mapping on the robot and confirmed my ability to access different I/O types and registers using Kepware server software on my computer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robot_Guy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It may be time to contact AD tech support for assistance. My experience with C-More and a GE driver is limited to using an EA-7 with serial communications (SNPX protocol). The ethernet driver (SRTP protocol) for GE was introduced with the EA-9 series. I do not have practical experience with it. Could the issue be related to a port number? The robot typically defaults to using port 18245 according to this document. What port is the C-More attempting to use? Check out this link for more information on General Electric's SRTP protocol: https://doc.ipesoft.com/display/D2D...RTP+protocol#GeneralElectricSRTPprotocol-R30i.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While both FANUC and AD tech support have been cooperative, neither have been able to offer a solution, often deflecting blame onto one another. Despite confirming the correct port settings, this troubleshooting process has spanned several weeks. Recently, I achieved a breakthrough by establishing communication between the HMI and a modbus driver. The memory mapping for the robot with Modbus seems disorganized, but it appears to function adequately for my current requirements, though it falls short of being ideal.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robot_Guy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robot_Guy expressed frustration with the lack of solutions provided by FANUC and AD tech support, as they have been pointing fingers at each other. Despite this, progress has been made in establishing communication between the HMI and robot using a modbus driver. Although memory mapping with Modbus for the robot is not ideal, it seems to be sufficient for the tasks at hand. The goal is to display pendant information, including alarms, on the HMI screen. The setup involves an R-30iB Mini Plus (CRX-10iA) robot connected to an A.B. CompactLogix PLC via ethernet. The HMI panel is configured to communicate with the PLC using the "GE Ethernet SRTP (90/30 Rx3i)" protocol and with the robot using standard SNPX. Despite SNPX typically being used for direct connections with robots via RS-232/485, the setup is being tested. The IP address of the robot is entered in the Panel Manager of the HMI, and ASCII strings are used in registers for communication. The robot can successfully ping the HMI panel, but further testing is needed to determine the optimal IP port settings for communication. The focus is on establishing a reliable connection to display pendant information on the HMI screen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>QuebecoisSti</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for my delayed response; it appears my previous attempt to post did not go through initially. I have successfully resolved the communication issues between the HMI and robot by configuring the settings for the GE Ethernet SRTP (90/30) protocol. However, I encountered some challenges with SNPX connections on the robot controller despite adjusting the settings.

After weeks of troubleshooting, I discovered a solution detailed below. The HMI utilizes the Modicon Modbus TCP/IP Ethernet driver, which effectively establishes communication. The configuration of the HMI includes specifying the PLC IP, port, slave, byte order, word order, character order, registers per message, coils per message, write functions, retries, timeout, and poll time.

The connection between the HMI and robot is direct via an ethernet cable, although using a switch also proved to be effective at one point. Setting up SNPX assignment variables in the robot controller was the most challenging aspect, requiring reference to the HMI/SNPX user manual from FANUC. Mapping Digital I/O to flags and manipulating these flags for read/write operations proved to be essential for successful communication.

For future setups involving a CompactLogix PLC, I recommend establishing the connection as Robot -> PLC -> HMI to streamline the communication process. However, in unique cases where a PLC is not involved, such as this scenario, special attention to SNPX assignments is crucial for seamless communication between the HMI and robot controller.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robot_Guy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robot_Guy apologized for the delayed response and explained that he encountered initial confusion with communication methods such as RS232/485, Ethernet, etc. He eventually managed to get it working by using the GE Ethernet SRTP (90/30) protocol to ping the HMI from the robot. However, he faced challenges with SNPX connections on the robot controller despite adjusting the settings.

After weeks of trying different approaches, he finally found a solution. He shared that he was using the Modicon Modbus TCP/IP Ethernet driver on the HMI and provided detailed configuration settings for the PLC IP, port, slave, byte order, word order, character order, registers per message, and more.

He mentioned connecting the HMI directly to the robot via an ethernet cable and also noted successful results with a switch at one point. The trickiest part, according to him, was setting up the SNPX assignment variables on the robot controller, requiring the HMI/SNPX user manual from FANUC.

For those using a CompactLogix PLC, he suggested going from Robot -> PLC -> HMI. He emphasized the importance of mapping Digital I/O to flags and recommended starting with simple data transfer before advancing to SNPX assignments.

The post concluded with gratitude for the detailed solution provided by Robot_Guy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>controlsgirl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon revisiting the discussions within this thread, it appears that the main issue may have revolved around determining authority. Typically, the HMI functions as the primary requester in communications, while the PLC serves as the provider. This dynamic involves the HMI requesting information from the PLC in order to update its display pages. The mention of the "R-553 HMI option" for the robot indicates a potential shift in roles, with the robot assuming the responsibilities of the HMI. This could lead to conflicts, especially when utilizing the GE SRTP protocol that allows for only one SRTP client at a time. By selecting the Modbus TCP driver on the C-More interface, it becomes the Modbus client. Consequently, when configuring the robot for Modbus TCP communications, Robot_Guy likely configured it as the Modbus server.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I connect a C-More EA9 HMI to a FANUC robot with R-553 HMI option?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To connect a C-More EA9 HMI to a FANUC robot with the R-553 HMI option, ensure that the HMI is set up to utilize the GE 90/30 SRTP Ethernet driver, which FANUC claims to be compatible with. Verify that the robot registers are correctly mapped using Kepware on your computer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be the reason for encountering a PLC-001 PLC Communication Timeout on the HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The PLC-001 PLC Communication Timeout on the HMI could be due to incorrect settings, incompatible communication protocols, or misconfigured parameters. Double-check the settings and ensure that the communication parameters match between the HMI and the FANUC robot.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How do I troubleshoot communication issues between the C-More EA9 HMI and FANUC robot?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When troubleshooting communication issues between the C-More EA9 HMI and FANUC robot, check the network settings, communication protocols, cable connections, and ensure that both devices are configured correctly. Verify the compatibility of the communication drivers being used.</p>
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
