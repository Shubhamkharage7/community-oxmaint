
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experiencing an Invalid value for the port ID error when using the MB_MASTER function in Siemens TIA V19? After creating and uploading a device to your PC, setting up the MB_MASTER and MB_COMM in Main [OB1], you may still encounter this issue. The Simatic S7-1200 CPU 1212C DC/DC/Rly with">
    <meta name="keywords" content="modbus error 8180, siemens s7-1200 troubleshooting, tia v19 modbus error fix, invalid value for the port id error, siemens s7-1200 mb_master">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-error-8180-on-siemens-s7-1200-1212c-in-tia-v19">
    <title>Troubleshooting Modbus Error 8180 on Siemens S7-1200 (1212C) in TIA V19 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus Error 8180 on Siemens S7-1200 (1212C) in TIA V19 | Oxmaint Community">
    <meta property="og:description" content="Experiencing an Invalid value for the port ID error when using the MB_MASTER function in Siemens TIA V19? After creating and uploading a device to your PC, setting up the MB_MASTER and MB_COMM in Main [OB1], you may still encounter this issue. The Simatic S7-1200 CPU 1212C DC/DC/Rly with">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-error-8180-on-siemens-s7-1200-1212c-in-tia-v19">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus Error 8180 on Siemens S7-1200 (1212C) in TIA V19 | Oxmaint Community">
    <meta name="twitter:description" content="Experiencing an Invalid value for the port ID error when using the MB_MASTER function in Siemens TIA V19? After creating and uploading a device to your PC, setting up the MB_MASTER and MB_COMM in Main [OB1], you may still encounter this issue. The Simatic S7-1200 CPU 1212C DC/DC/Rly with">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-error-8180-on-siemens-s7-1200-1212c-in-tia-v19"
      },
      "headline": "Troubleshooting Modbus Error 8180 on Siemens S7-1200 (1212C) in TIA V19",
      "description": "Experiencing an Invalid value for the port ID error when using the MB_MASTER function in Siemens TIA V19? After creating and uploading a device to your PC, setting up the MB_MASTER and MB_COMM in Main [OB1], you may still encounter this issue. The Simatic S7-1200 CPU 1212C DC/DC/Rly with",
      "author": {
        "@type": "Person",
        "name": "xGuys"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-16",
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
                <h1 class="text-white">Troubleshooting Modbus Error 8180 on Siemens S7-1200 (1212C) in TIA V19</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>xGuys</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">634</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">168</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Experiencing an "Invalid value for the port ID" error when using the MB_MASTER function in Siemens TIA V19? After creating and uploading a device to your PC, setting up the MB_MASTER and MB_COMM in Main [OB1], you may still encounter this issue. The Simatic S7-1200 CPU 1212C DC/DC/Rly with a CB 1241 (RS485) appears to be involved in the problem. Despite the PLC indicating the port, the error persists. If you're puzzled by this error, read on for possible solutions.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're seeking a reliable solution for integrating Modbus data into your project, consider trying out the Integration Objects OPC Server for Modbus. This specialized server is designed to efficiently read and present Modbus data through an OPC server, streamlining communication and configuration processes. To learn more and explore this integration tool, visit the Integration Objects OPC Server for Modbus. It could be the perfect solution you've been searching for.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>k_w</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>k_w recommended trying out the Integration Objects OPC Server for Modbus to enhance data collection and integration in your project. This specialized tool enables seamless communication with Modbus devices and streamlines data presentation through an OPC server. By utilizing this tool, you can streamline Modbus communication and configuration within your project. If you're seeking effective integration solutions, consider exploring the capabilities of the Integration Objects OPC Server for Modbus. In my testing, I have experimented with the "Modbus Special Utility" and OPC, with successful communication between my PC and Modbus devices. However, I have encountered issues with PLC communication through the module to the Modbus setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>xGuys</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you know where to find information on whether 8180 is considered an invalid port ID? In my research, I have come across conflicting information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>L DAR2P 0.0 questioned the validity of port id 8180. Upon researching within TIA inform system, it seems there may be confusion between the old v14 RTU and the default MODBUS protocol. Is this the correct approach? I have been advised to use MODBUS in online resources and videos. See the image of the main screen below for reference. Additionally, a screenshot of the real-time error is provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>xGuys</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was researching RTU when I came across misleading information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you monitoring DB2 and ensuring the correct port number is set in S_PORT? I had to manually input this information, as I am currently using PLCSIM for testing purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When monitoring DB2, it's important to ensure the correct port number is specified in the S_PORT configuration. I had to manually input this information while using PLCSIM for testing purposes. It appears to be working fine. Take a look at the screenshot captured using Lightshot included below.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>xGuys</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Some experts have indicated that this may be the case. A screenshot was taken using Lightshotprnt.sc. Make sure that MB_COM_LOAD pin on MB_DB uses the same database as the one used for IDB on MB_MASTER blocks. In your situation, use DB6 for both. Avoid using DB2 for MB_COM_LOAD and DB6 for the master database.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using MB_COM_LOAD pin on MB_MASTER blocks, ensure that the database (DB) used matches the one designated for IDB, such as DB6 in your case. Avoid using different databases, such as DB2 for MB_COM_LOAD and DB6 for master. Thank you, @Lare, for your invaluable assistance in resolving errors. However, a new issue has arisen regarding reading the holding hex address 5013 on a motor. Various configurations have been attempted in TIA software, including converting the address to 420499 or 420500. Despite efforts to store incoming data in an array, no successful data retrieval has been achieved. Assistance is needed to identify the underlying issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>xGuys</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings xGuys! I noticed that you may have mistakenly entered the unit ID from the Modbus slave instead of the master. It's possible that the master is using address 1, so you could try testing with a different address for the Modbus slave. Check out the resources on Solis PLC for more information on this topic. Learn how to set up Modbus RTU communication in Siemens TIA Portal in our comprehensive tutorial, covering configurations for both master and slave devices. Visit www.solisplc.com for more details. Best regards, Henny.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Henny</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, fellow enthusiasts! At "mb_addr," remember to input the unit ID from the modbus slave, not the master. It's possible that using the wrong address could be causing issues. If the master has address 1, try testing the modbus slave with a different address. Check out the helpful link on solis plc for more information.

This tutorial will guide you on configuring Modbus RTU communication in Siemens TIA Portal for both master and slave roles. For detailed steps and insights, visit www.solisplc.com.

Unfortunately, my attempts to use a different slave address have not been successful. I also tried the storage method mentioned in the provided guide, followed by attempting to access the registry data. Attached is a snippet from the documentation along with an overview of my hardware setup.

Our setup involves the PLC connected to two modbus slaves, with Slaveid 1 and Slaveid 2. The RS485 indicator blinks at the TxD during each poll cycle, indicating communication activity.

I hope this information helps someone navigate through similar challenges in their setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>xGuys</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>xGuys mentioned: @Lare, you're a lifesaver, thank you! The previous error is fixed, but I've encountered a new issue related to reading a motor's holding hex address 5013. I've tried using CAS Modbus Scanner at 20499 and Modbus Special Utility at 5013 (length 1) on my PC. However, in TIA, despite numerous configuration attempts, I can't retrieve any data. It seems I need to convert the address to 420499 or 420500, but adding a '4' yields an error. I've included my attempt to extract data from both 420499 and 420500 without any errors in the attachment 72426.

I've also tried different ways to store the incoming data, currently using an array of 0...3USint as shown in attachment 72427. Yet, I still can't retrieve any data. Where am I going wrong?

Upon further inspection, it appears that the modbus address should be 420499 with a length of 2 integers, and mode 0. This means reading 4 bytes starting from 420499, an extended range address. The Siemens MB_master block needs to be set for extended range addressing, located in MB_master's block instance block (in code DB6/Static area). By default, Siemens MB_master block is set for normal range modbus, so the PLC may not recognize address 420499, resulting in errors. Normal range modbus addresses words within 40001-49999 (0-9999). Extended addressing covers addresses above 9999 as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your wiring is correct, do you encounter modbus errors when disconnecting wires or powering down the slaves? You mentioned successfully reading holding register 5013h with a modbus software tool. In order to read this address with the Siemens 1200 PLC, you should use the decimal value 20499 for the hexadecimal register value. Learn how to set up and utilize Modbus sensors with a Siemens 1200 PLC in this informative mini-series. The video focuses on configuring and retrieving data from a basic temperature and humidity sensor. If the link provided doesn't work, simply search on YouTube for "Setting Up And Using Modbus Sensors (With Siemens 1200 PLC)". Best of luck! Regards, Henny.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Henny</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During a quick inspection, it was discovered that the Modbus address is 420499 with a length of 2 integers and mode set to 0. This means that it should be read in words/bytes of 4 starting from 420499, which falls under the extended range address category due to its 6-digit format. To enable extended range addressing on the Siemens MB_master block, adjustments need to be made within the MB_master's block instance block in the code (specifically in DB6/Static area). By default, Siemens MB_master block is set to false for extended range addressing, causing issues with recognizing addresses above 9999. To rectify this, the setting was changed to true, but the issue still persists unfortunately. It is worth noting that normal range Modbus addressing covers words 40001-49999 (0-9999), while extended addressing allows access to addresses both below and above 9999. For successful communication with the slave, it is crucial to ensure that the addressing settings align with the requirements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>xGuys</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When disconnecting wires or powering down the slaves, do you also encounter Modbus errors, assuming correct wiring? You mentioned being able to read holding register 5013h with a Modbus software tool, but when attempting to read that address with the Siemens 1200, you need to use 20499 as the "data_addr" in decimal form for the hexadecimal register value.

Learn how to set up and utilize Modbus sensors with a Siemens 1200 PLC in this introductory video focusing on a basic temperature and humidity sensor. If the provided link does not work, search on YouTube for "Setting Up And Using Modbus Sensors (With Siemens 1200 PLC)" to access the video.

It seems that unplugging the wires to the slave does not cause any errors or changes, suggesting a potential communication issue between the "CB 1241" and the slave. I have reviewed the video and attempted to reorganize the data input cables to troubleshoot. The only other changes I make involve configuring the port with the correct baud rate used for connecting to the Modbus from the PC.

Attached is my TIA project for reference and assistance if needed: PoleProjectCPU - Google Drive. Good luck troubleshooting the communication issue!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>xGuys</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In our project, after disconnecting the wires to the slave device, no changes or errors occurred. It appears that the problem lies in the communication between our "CB 1241" device and the slave. I have reviewed the video and attempted to reorganize the data input cables to troubleshoot the issue. The only other adjustments I make involve configuring the port to the correct baud rate when connecting to the Modbus from a PC.

I have attached my TIA project for reference. Upon examining your project, I noticed a few configuration errors related to the use of outdated MB_COM_LOAD and MB_master blocks with a much newer PLC firmware version. This mismatch can often result in the MB_master not functioning properly. It seems that these blocks may have been copied from an older Siemens example project instead of being sourced from the TIA19 library.

The legacy MB_COM_LOAD block in your project is version 2.1, while the latest block in TIA V19 is version 5.0. Similarly, the MB_MASTER blocks in your project are version 2.2, whereas the TIA portal's library features version 6.0. 

The outdated blocks rely on parameters from hardware configuration and the MB_COM_LOAD block, whereas the newer versions only use input pins and static area parameters defined within the PLC program. It is recommended to update the MB_COM_LOAD and MB_MASTER blocks to the latest TIA19 versions to ensure compatibility with your current PLC firmware version.

Furthermore, you will need to set the wiring type (static area mode parameter) to 2-wire RS485 (mode 4?), specify the baud speed (is 115200 correct?), parity settings, and update the instance blocks in the project accordingly. Drag and drop the newest MB_COM_BLOCKS from the communication library on the right to the project tree on the left side for a smooth transition.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What does the "Invalid value for the port ID" error mean in Siemens TIA V19?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "Invalid value for the port ID" error typically occurs when using the MB_MASTER function in Siemens TIA V19 and may involve the Simatic S7-1200 CPU 1212C DC/DC/Rly with a CB 1241 (RS485) module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the Modbus Error 8180 on Siemens S7-1200 (1212C) in TIA V19?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot the Modbus Error 8180, ensure that you have correctly set up the MB_MASTER and MB_COMM functions in the Main [OB1] of your program. Additionally, verify the configuration of the device uploaded to your PC and the port settings on the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Despite indicating the port on the PLC, why does the "Invalid value for the port ID" error persist?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error may persist due to incorrect configuration settings or parameters related to the port ID, communication setup, or device configuration. It is essential to review these settings and ensure they align with the requirements of the Modbus communication protocol.</p>
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
