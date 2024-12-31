
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Are you interested in transferring an analog input from a pressure sensor on a SLC 5/05 to a Click PLC via ethernet on your plant network? Any assistance or suggestions would be greatly appreciated. This tank level sensor is currently connected to the SLC 5/05, and we aim to">
    <meta name="keywords" content="transferring analog input, slc 5/05, click plc, ethernet transfer, pressure sensor, plant network, tank level sensor, data utilization, sensor integration, sensor connectivity, analog input conversion, plc configuration, ethernet communication, sensor">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/transferring-analog-input-from-slc-5-05-to-click-plc-via-ethernet-assistance-needed">
    <title>Transferring Analog Input from SLC 5/05 to Click PLC via Ethernet: Assistance Needed | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Transferring Analog Input from SLC 5/05 to Click PLC via Ethernet: Assistance Needed | Oxmaint Community">
    <meta property="og:description" content="Are you interested in transferring an analog input from a pressure sensor on a SLC 5/05 to a Click PLC via ethernet on your plant network? Any assistance or suggestions would be greatly appreciated. This tank level sensor is currently connected to the SLC 5/05, and we aim to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/transferring-analog-input-from-slc-5-05-to-click-plc-via-ethernet-assistance-needed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Transferring Analog Input from SLC 5/05 to Click PLC via Ethernet: Assistance Needed | Oxmaint Community">
    <meta name="twitter:description" content="Are you interested in transferring an analog input from a pressure sensor on a SLC 5/05 to a Click PLC via ethernet on your plant network? Any assistance or suggestions would be greatly appreciated. This tank level sensor is currently connected to the SLC 5/05, and we aim to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/transferring-analog-input-from-slc-5-05-to-click-plc-via-ethernet-assistance-needed"
      },
      "headline": "Transferring Analog Input from SLC 5/05 to Click PLC via Ethernet: Assistance Needed",
      "description": "Are you interested in transferring an analog input from a pressure sensor on a SLC 5/05 to a Click PLC via ethernet on your plant network? Any assistance or suggestions would be greatly appreciated. This tank level sensor is currently connected to the SLC 5/05, and we aim to",
      "author": {
        "@type": "Person",
        "name": "Endless_Opportunity"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-09",
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
                <h1 class="text-white">Transferring Analog Input from SLC 5/05 to Click PLC via Ethernet: Assistance Needed</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Endless_Opportunity</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">114</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">391</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Are you interested in transferring an analog input from a pressure sensor on a SLC 5/05 to a Click PLC via ethernet on your plant network? Any assistance or suggestions would be greatly appreciated. This tank level sensor is currently connected to the SLC 5/05, and we aim to utilize this data on the Click PLC without the need for an additional sensor installation. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Click PLC offers support for Modbus TCP and can also function as an Ethernet IP Adapter. While I have not personally tested Ethernet/IP explicit messaging between the two, it may be feasible depending on the firmware in the SLC. It is worth noting that this example utilizes a Micrologix 1400 for Ethernet/IP explicit messaging, which could potentially be adapted for the SLC EEM instruction if supported by your SLC. 

Are there any Micrologix 1400 devices on the network? The Micrologix 1400 supports Modbus TCP on its Ethernet channel, making it possible to poll the SLC and transfer data to the Click PLC with minimal effort. For further discussions and assistance, you can visit the Automation Direct community forums at community.automationdirect.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC from the Community Automation Direct forum mentioned that the Click PLC has the capability to support Modbus TCP and can also function as an Ethernet IP Adapter. While explicit messaging via Ethernet/IP between the two devices has not been personally tested, it may be feasible depending on the firmware version of the SLC. It is worth noting that a similar setup using a Micrologix 1400 for Ethernet/IP explicit messaging could potentially be adapted for the SLC EEM instruction.

If you have a Micrologix 1400 on the network, it can support Modbus TCP on its Ethernet channel and interact with the SLC, allowing for data exchange with the Click PLC. However, it is advised to avoid relying solely on Micro 1400 units, as they occasionally experience power outages.

As a controls technician looking to expand their knowledge and experience, experimenting with MSG instructions for the first time can be a valuable learning opportunity. If your current SLC 5/05 RSLogix 500 project already utilizes MSG instructions with other Allen Bradley processors, there is a possibility that the unit can establish communication with the Click PLC.

Feel free to seek guidance and advice from the forum community to help verify and troubleshoot any potential communication issues between the SLC and Click PLC. Your willingness to explore new technologies and techniques in your field is commendable, and the community is here to support your growth and development.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Endless_Opportunity</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To verify compatibility with FRN 13, consider adding an EEM instruction and ensure it functions properly. This will require a consecutive block of 58 unused N registers. The MSG instruction in the 1400 differs from the SLC, but the underlying principles should be transferable to the EEM instruction. While the 1400 uses MG data files, the SLC utilizes N registers for MSG instructions, and the EEM is a distinct message instruction in the SLC. The Service Code, Class, Instance, and Attribute details from the A/D forum example can be applied to the EEM instruction. Additionally, configure the IP address of the Click on the Multi-Hop tab as needed. Ensure that the Ethernet IP adapter setup for the Click mirrors the example provided for proper implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe I am on the right track as I included integers in my calculation. However, I encountered an error with a multihop address. Please refer to the details below.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Endless_Opportunity</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An error message indicates that the processor does not support the EEM instruction, but your software processor is currently set to FRN 3-9 while a previous screenshot displayed FRN 13. To resolve this issue, consider selecting the appropriate SLC 5/05 processor with FRN 10 or later in the Controller Properties menu. This adjustment should eliminate the error message and allow you to input the necessary details for class, instance, and attribute in the EEM setup dialog.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>OkiePC pointed out that the error is related to the lack of support for the EEM instruction by the processor. Although the software processor selection is set to FRN 3-9, the earlier screenshot displayed FRN 13. To resolve this issue, it is recommended to update the processor Controller Properties to the appropriate SLC 5/05 processor with FRN 10 or later. Additionally, ensure to include the necessary details for class, instance, and attribute in the EEM setup dialog to avoid the error. Upon further research, it was found that for a VFD, the values used were 100, 1, and 21 for class, instance, and attribute respectively. Do you think these values would be suitable for my instance as well?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Endless_Opportunity</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Endless_Opportunity commented that understanding the changes needed makes sense and they will make the necessary adjustment. Upon researching the terms class, instance, and attribute in connection to a VFD, the values found were 100, 1, and 21. Would those values work for their instance? For more information, refer to the thread previously mentioned. The Service Code is represented in hexadecimal as E, EClass as 4, Instance as 65, and Attribute as 3.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I transfer analog input from a pressure sensor on a SLC 5/05 to a Click PLC via Ethernet?
- You can achieve this by setting up communication between the SLC 5/05 and Click PLC over the plant network using appropriate protocols and configurations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to utilize data from a tank level sensor connected to the SLC 5/05 on the Click PLC without installing an additional sensor?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to make use of the existing tank level sensor data from the SLC 5/05 on the Click PLC by establishing communication and data transfer between the two systems.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What assistance or suggestions can be provided for transferring analog input between the SLC 5/05 and Click PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can seek assistance in configuring the communication settings, selecting suitable protocols, and ensuring compatibility between the SLC 5/05 and Click PLC to facilitate the transfer of analog input data.</p>
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
