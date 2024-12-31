
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I own a Siemens S7-1200 PLC and want to access its tags using my Allen-Bradley ControlLogix PLC. These two controllers operate on different communication protocols, Ethernet/IP and Profinet. Is there a way to achieve this? Can I configure the OPC server to enable communication between the two controllers? Any">
    <meta name="keywords" content="siemens s7-1200 plc, allen-bradley controllogix plc, profinet, ethernet/ip, opc server configuration, tag access, plc communication protocols, siemens to allen-bradley communication, connecting siemens and allen-brad">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/connecting-siemens-profinet-plc-to-allen-bradley-ethernet-ip-plc-for-tag-access">
    <title>Connecting Siemens Profinet PLC to Allen-Bradley Ethernet/IP PLC for Tag Access | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Connecting Siemens Profinet PLC to Allen-Bradley Ethernet/IP PLC for Tag Access | Oxmaint Community">
    <meta property="og:description" content="I own a Siemens S7-1200 PLC and want to access its tags using my Allen-Bradley ControlLogix PLC. These two controllers operate on different communication protocols, Ethernet/IP and Profinet. Is there a way to achieve this? Can I configure the OPC server to enable communication between the two controllers? Any">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/connecting-siemens-profinet-plc-to-allen-bradley-ethernet-ip-plc-for-tag-access">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Connecting Siemens Profinet PLC to Allen-Bradley Ethernet/IP PLC for Tag Access | Oxmaint Community">
    <meta name="twitter:description" content="I own a Siemens S7-1200 PLC and want to access its tags using my Allen-Bradley ControlLogix PLC. These two controllers operate on different communication protocols, Ethernet/IP and Profinet. Is there a way to achieve this? Can I configure the OPC server to enable communication between the two controllers? Any">
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
        "@id": "https://community.oxmaint.com/discussion-forum/connecting-siemens-profinet-plc-to-allen-bradley-ethernet-ip-plc-for-tag-access"
      },
      "headline": "Connecting Siemens Profinet PLC to Allen-Bradley Ethernet/IP PLC for Tag Access",
      "description": "I own a Siemens S7-1200 PLC and want to access its tags using my Allen-Bradley ControlLogix PLC. These two controllers operate on different communication protocols, Ethernet/IP and Profinet. Is there a way to achieve this? Can I configure the OPC server to enable communication between the two controllers? Any",
      "author": {
        "@type": "Person",
        "name": "ahmeduqat"
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
                <h1 class="text-white">Connecting Siemens Profinet PLC to Allen-Bradley Ethernet/IP PLC for Tag Access</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ahmeduqat</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">612</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">399</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I own a Siemens S7-1200 PLC and want to access its tags using my Allen-Bradley ControlLogix PLC. These two controllers operate on different communication protocols, Ethernet/IP and Profinet. Is there a way to achieve this? Can I configure the OPC server to enable communication between the two controllers? Any guidance on how to make this connection work would be appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Siemens offers a comprehensive library of resources for SIOS support, available at industry.siemens.com. This valuable repository provides information and assistance for a wide range of Siemens products and services.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>simjon71</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider using Modbus TCP as an option for communication. Siemens offers sample programs for CIP communication, but Modbus TCP may be a simpler choice. Best of luck in your endeavors!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our recent integration of eXware 703 as a gateway has facilitated seamless communication between Siemens PLCs on Profinet and Omron PLCs on EtherCAT. Additionally, the eXware 703 is capable of retrieving data from third-party OPC servers and transmitting it to the Omron PLC. It also has the ability to communicate using Ethernet/IP. This IoT Gateway for Industrial Digitization by EXOR ensures a smooth flow of data from the SOM level, through the gateway, field devices, and up to SCADA and Master level HMI systems, comprehensively addressing current and future needs in industrial automation. Learn more at www.exorint.com.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manglemender</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The most straightforward way to connect an S7-1200 to a ControlLogix system is through a link provided by @simjon71. Alternatively, OPC UA integration is possible. With TIA V16, the S7-1200 can function as an OPC UA server while the ControlLogix can act as an OPC UA client. However, it is important to note that the performance may be limited, making it suitable for handling only a few tags at a moderate frequency. In addition, the S7-1200 supports Modbus TCP, serving as both a client and server. For more information on utilizing Modbus TCP with the S7-1200, refer to this link: https://cache.industry.siemens.com/dl/files/340/102020340/att_118119/v6/net_modbus_tcp_s7-1500_s7-1200_en.pdf</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Implementing Modbus communication on a 1200 is straightforward. I have completed several projects involving Wago 750-88x and Click PLCs. Follow the link shared by Jesper to get started. The efficiency of data retrieval depends on the volume of data you require. Dealing with the Rockwell side of Modbus can be challenging. I have included screenshots featuring a 1200 and a Click PLC. To simplify the process, I suggest using a Gateway.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>According to JesperMP, one of the most 'direct' ways to integrate an S7-1200 in a ControlLogix is through a link provided by @simjon71. Another option is using OPC UA, which is now possible as of TIA V16. The S7-1200 can act as an OPC UA server, while the ControlLogix can function as an OPC UA client. However, the performance of this setup may be limited, suitable for only a few tags at a lower frequency. Alternatively, the S7-1200 supports Modbus TCP and can act as both a client and server. To learn more about integrating the S7-1200 with Modbus TCP, refer to this resource: https://cache.industry.siemens.com/dl/files/340/102020340/att_118119/v6/net_modbus_tcp_s7-1500_s7-1200_en.pdf.

If you are considering using the OPC option, you may encounter protocol differences between Allen Bradley and the S1200. Despite having Rslinx and the ability to add topics in DDE/OPC, you may not be able to see the S1200. If this is the case, limitations due to protocol differences may be causing the issue. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ahmeduqat</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ahmeduqat inquired about how to utilize the OPC option with Rslinx. Despite being able to add topics in DDE/OPC, he is unable to see the S1200 due to protocol differences with Allen Bradley. Siemens primarily uses OPC UA, not OPC. It seems that DDE may not be compatible with OPC UA, possibly being exclusive to Rslinx. This concept is not commonly associated with Siemens systems. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@ahmeduquat, it seems you are utilizing OPC DA with RSLinx as the OPC DA Server. OPC DA is not directly housed in the PLC, making it more complicated to establish a controller-to-controller connection using this protocol. To facilitate communication between two OPC DA Servers like RSLinx and Simatic Net, you can employ middleware like OPC Datahub. This process is more intricate compared to alternative methods. If you are considering using OPC UA instead, I can provide a resource on how to configure it for Siemens devices. As for configuring it on the AB side, you may need assistance from someone else. Transitioning to OPC UA will present unique challenges different from your existing setup with RSLinx and OPC DA.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can I connect a Siemens Profinet PLC to an Allen-Bradley Ethernet/IP PLC for tag access?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to establish communication between a Siemens Profinet PLC and an Allen-Bradley Ethernet/IP PLC for accessing tags, even though they operate on different protocols.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is configuring an OPC server a viable option to enable communication between the two controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, configuring an OPC server is a common method to facilitate communication between controllers using different protocols like Profinet and Ethernet/IP.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps can I follow to make the connection between Siemens S7-1200 PLC and Allen-Bradley ControlLogix PLC work?</h4>
<p class='text-muted'><strong>Answer:</strong> - To establish communication between the Siemens S7-1200 PLC and Allen-Bradley ControlLogix PLC, you may need to utilize an OPC server and configure it appropriately to ensure seamless tag access between the two controllers.</p>
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
