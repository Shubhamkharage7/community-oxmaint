
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently experiencing difficulties in establishing communication with my CP1H PLC using the CP1W-C1F11 series option board, which utilizes USB to RS485. I have successfully tested communication across the USB RS485 converter by connecting two converter units and confirming communication using an SScom terminal emulator. I have">
    <meta name="keywords" content="omron cp1h troubleshooting, usb to rs485 communication issues, cp1w-c1f11 option board problems, sscom terminal emulator setup, omron plc communication errors, cx">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-omron-cp1h-using-usb-to-rs485-and-advanced-hmi">
    <title>Troubleshooting Communication Issues with Omron CP1H Using USB to RS485 and Advanced HMI | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issues with Omron CP1H Using USB to RS485 and Advanced HMI | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently experiencing difficulties in establishing communication with my CP1H PLC using the CP1W-C1F11 series option board, which utilizes USB to RS485. I have successfully tested communication across the USB RS485 converter by connecting two converter units and confirming communication using an SScom terminal emulator. I have">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-omron-cp1h-using-usb-to-rs485-and-advanced-hmi">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issues with Omron CP1H Using USB to RS485 and Advanced HMI | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently experiencing difficulties in establishing communication with my CP1H PLC using the CP1W-C1F11 series option board, which utilizes USB to RS485. I have successfully tested communication across the USB RS485 converter by connecting two converter units and confirming communication using an SScom terminal emulator. I have">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-omron-cp1h-using-usb-to-rs485-and-advanced-hmi"
      },
      "headline": "Troubleshooting Communication Issues with Omron CP1H Using USB to RS485 and Advanced HMI",
      "description": "Hello, I am currently experiencing difficulties in establishing communication with my CP1H PLC using the CP1W-C1F11 series option board, which utilizes USB to RS485. I have successfully tested communication across the USB RS485 converter by connecting two converter units and confirming communication using an SScom terminal emulator. I have",
      "author": {
        "@type": "Person",
        "name": "Jack Van"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-05",
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
                <h1 class="text-white">Troubleshooting Communication Issues with Omron CP1H Using USB to RS485 and Advanced HMI</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jack Van</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">346</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">169</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently experiencing difficulties in establishing communication with my CP1H PLC using the CP1W-C1F11 series option board, which utilizes USB to RS485. I have successfully tested communication across the USB RS485 converter by connecting two converter units and confirming communication using an SScom terminal emulator. I have carefully adjusted the dip switches on both the option board and the CPU (with switch number 4 in the off position) to ensure correct settings. The series port one (left-hand side) has been configured in CX One with the appropriate baud rates. 

While setting up the PLC in CX One and switching to sysmac and adjusting the driver settings, I have encountered an issue where com port 4 (used on my laptop) automatically appears, but I am unable to establish communication even in auto online mode. The amber light on the option board consistently illuminates every time the PLC switches between different protocol options. Additionally, I have observed that when launching AHMI, the amber light on the option board synchronizes with the transmission light on the USB to RS485 converter.

I have already verified that the RS485 is using a two-wire system and have checked that the wires are correctly connected. I have some doubts about the functionality of the series option board and am seeking suggestions on how to test it. One method I am considering is sending a signal created in ladder logic back to the laptop and verifying it using the terminal emulator. Any alternative methods or advice to troubleshoot this issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon reviewing the manual, it is specified that communication will be carried out via Host Link. This suggests that establishing a connection to CX Programmer should be feasible and is worth trying as the first step. Utilizing the terminal emulator, as you intend to do, seems like the right approach. When configuring the connection with CX Programmer, navigate to CIF11 settings in CX Programmer under PLC Settings > Serial Port (1 or 2). Adjust your laptop's com settings in the Change PLC dialog by selecting Network Type as SYSMAC WAY. It is crucial to ensure the serial parameters match and that the Host Link Unit Numbers align. Although they typically default to "0", it is essential to verify, especially when using RS485 where multiple Host Link devices are possible. For ladder programming, utilize the TXD(236) and RXD(235) instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello IO-Rack, I appreciate your help in navigating through my current situation. Your assistance has certainly enhanced my comprehension of the system. From what I understand, switching cpu dipswitch four to the off position enables no-protocol type communications, utilizing TXD(236) and RXD(235). For the sysmac method and host link, the dip switch should be set to on/auto, directing data to the serial communications path on the series option board. I attempted to connect my laptop's comms port to the sscom v5.13.1 terminal emulator, which worked fine during loopback testing but not when connected to the PLC's single port. I introduced easy modbus logic to the PLC, alongside Qmodmaster, and although I could establish a connection with the PLC, I encountered issues identifying the slave and exchanging data. As a mechanical engineer exploring PLCs with basic skills, I am considering trying a different series option board, as the Chinese import I used may not be of good quality. It's worth noting that switching dipswitch four back to on caused the comms light on the option board to cease responding to incoming signals. It remained inactive in the on position.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jack Van</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>From what I recall, Host Link operates on a full duplex protocol and is not compatible with RS485. In this case, utilizing RS422 is necessary. The CP1W-CIF11 offers support for both RS422 and RS485. RS485 is commonly chosen for Modbus Master and Compoway/F protocols. In our experience, we have consistently utilized HostLink with either RS232C or RS422 connections.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>svn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>SVN explained that Host Link operates as a full duplex protocol and is not compatible with RS485. It seems that you are correct, and I apologize for the lack of information. If your adapter supports RS422, you may still be able to create a temporary wiring solution to confirm the connection with CX Programmer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your feedback. I used CP1h with easy Modbus master ladder logic connected to my laptop via USB to RS485. While we successfully received data from the PLC using Qmod master, we encountered difficulties in sending data back. This issue has led me to consider the compatibility of the RS422 interface, particularly with the CP1W-CIF11 option board. There is also the CP1W-CIF12 option board which may be more suitable for RS485 communication. It has been suggested that RS422 can transmit data to RS485 but cannot receive it in return. This has raised questions about the possibility of data loss when transmitting signals from RS485 to the PLC. The versatility of the CP1W-CIF11 in supporting two protocols without a dip switch mechanism is also a cause for confusion. I am now leaning towards acquiring the CIF12 option board, despite its higher cost. Additionally, there are concerns regarding the setup of the PLC in Modbus master mode and the Advanced HMI in slave mode, without any specified IP address. This confusion may be attributed to the use of Modbus RTU or a missing configuration setting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jack Van</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Jack Van mentioned that there is a misconception that RS 422 can only send data to RS485 but cannot receive it. The key difference lies in the fact that RS422 allows for multiple devices to communicate with each other, while RS485 functions as a master device communicating with its slave devices. RS422 uses 4 wires, while RS485 uses 2 wires, but they both operate on the same protocol. Testing your connection with CX Programmer using Host Link may prove to be more of a hassle than it's worth.

Another point of confusion arises when running the PLC in Modbus master mode and the Advanced HMI in slave mode without entering an IP address. This is because Modbus RTU is a serial connection protocol that does not require an IP address. In contrast, Modbus TCP requires an Ethernet connection.

For those unfamiliar with ModBus, Omron offers a function block that simplifies the process. However, a quick search may provide more guidance, as all Omron C series PLCs should be compatible. If your goal is to communicate between the PLC and HMI without complications, using RS232C and Host Link protocol would be a more straightforward option.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The CP1W-CIF11 module does not feature signal isolation on the RS485/422A side, allowing for a cable length of up to 50 meters. In contrast, the CP1W-CIF12 module offers signal isolation and supports cable lengths of up to 500 meters. Both modules are equipped with DIP switches on the rear side. For more information, refer to section 2-1-3 of the CP1H Operation Manual (W450). Explore the options for signal isolation and cable length in your PLC system setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>svn</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I troubleshoot communication issues with my Omron CP1H PLC using USB to RS485?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot communication problems, ensure that the dip switches on both the option board and the CPU are correctly set, verify the baud rates in CX One, and confirm the RS485 wiring is correct. Consider testing communication by creating a signal in ladder logic and verifying it using a terminal emulator.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why does the amber light on the CP1W-C1F11 series option board illuminate when switching between different protocol options?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The amber light on the option board may indicate activity related to communication protocol changes. In this case, the light synchronizing with the transmission light on the USB to RS485 converter suggests communication attempts.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How do I address the issue of the com port 4 automatically appearing on my laptop but failing to establish communication with the CP1H PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Ensure that the driver settings in CX One are correctly adjusted for the sysmac platform. If com port 4 is detected but communication fails, double-check the settings and consider troubleshooting steps such as verifying hardware connections and testing communication with a terminal emulator.</p>
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
