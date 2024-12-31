
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am currently endeavoring to regulate a SEW EURODRIVE motor through its variable frequency drive (VFD) utilizing Modbus RS485 communication. Employing a Siemens S7-1200 PLC, I have set up the MB_MASTER block in TIA Portal for VFD communication. My objective is to transmit directives for forward, reverse, and">
    <meta name="keywords" content="sew eurodrive motor, modbus rs485, siemens s7-1200 plc, mb_master block, tia portal, vfd communication, forward reverse halt directives, mb_addr, mode, data_addr, data_len, movil">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/configuring-sew-eurodrive-motor-with-modbus-rs485-on-siemens-s7-1200-plc">
    <title>Configuring SEW EURODRIVE Motor with Modbus RS485 on Siemens S7-1200 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Configuring SEW EURODRIVE Motor with Modbus RS485 on Siemens S7-1200 PLC | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am currently endeavoring to regulate a SEW EURODRIVE motor through its variable frequency drive (VFD) utilizing Modbus RS485 communication. Employing a Siemens S7-1200 PLC, I have set up the MB_MASTER block in TIA Portal for VFD communication. My objective is to transmit directives for forward, reverse, and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/configuring-sew-eurodrive-motor-with-modbus-rs485-on-siemens-s7-1200-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Configuring SEW EURODRIVE Motor with Modbus RS485 on Siemens S7-1200 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am currently endeavoring to regulate a SEW EURODRIVE motor through its variable frequency drive (VFD) utilizing Modbus RS485 communication. Employing a Siemens S7-1200 PLC, I have set up the MB_MASTER block in TIA Portal for VFD communication. My objective is to transmit directives for forward, reverse, and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/configuring-sew-eurodrive-motor-with-modbus-rs485-on-siemens-s7-1200-plc"
      },
      "headline": "Configuring SEW EURODRIVE Motor with Modbus RS485 on Siemens S7-1200 PLC",
      "description": "Greetings, I am currently endeavoring to regulate a SEW EURODRIVE motor through its variable frequency drive (VFD) utilizing Modbus RS485 communication. Employing a Siemens S7-1200 PLC, I have set up the MB_MASTER block in TIA Portal for VFD communication. My objective is to transmit directives for forward, reverse, and",
      "author": {
        "@type": "Person",
        "name": "karlsmith"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-21",
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
                <h1 class="text-white">Configuring SEW EURODRIVE Motor with Modbus RS485 on Siemens S7-1200 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>karlsmith</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">167</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">174</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am currently endeavoring to regulate a SEW EURODRIVE motor through its variable frequency drive (VFD) utilizing Modbus RS485 communication. Employing a Siemens S7-1200 PLC, I have set up the MB_MASTER block in TIA Portal for VFD communication. My objective is to transmit directives for forward, reverse, and halt to the VFD. Nevertheless, I am encountering challenges in pinpointing the accurate addresses for these actions in the MB_MASTER block. Specifically, I am seeking information on the following: MB_ADDR, MODE, DATA_ADDR, and DATA_LEN for the VFD.

I have referred to the "MOVILINK Protocol_Modbus RS485" documentation (https://x0.at/pYY7.pdf), but I am grappling with determining the suitable addresses for these actions and whether they are bits or HEX registers. Additionally, I have included screenshots of my ladder diagrams to provide a better understanding of the current configuration.

Have you had any experience in configuring and overseeing SEW EURODRIVE motors via Modbus RS485 using Siemens PLCs? Any advice or perspectives on this matter would be highly valued. Thank you in advance for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for the appropriate links for your drive? Check out these resources:

- https://download.sew-eurodrive.com/download/html/31550207/en-EN/7686354699.html
- https://download.sew-eurodrive.com/download/html/31550207/en-EN/3516226571.html

Make sure to take note of important information regarding the MODE, DATA_ADDR, and DATA_LEN settings when working with Modbus protocol. While Modbus is a straightforward protocol at its core, the user interface can vary significantly among different vendors.

Let's concentrate on accessing Modbus Holding 16-bit registers for now. There are two common methods to read or write a Holding register:

1. Specify whether you are reading or writing and add a "4" prefix to the address to indicate it pertains to the Slave device's Holding register memory area.
2. Use the specific Modbus function code for reading or writing Holding registers: 03 for reading, 16 for writing multiple registers, and 06 for writing single registers.

For Siemens S7-1200 users, the choice between reading and writing, as well as the selection of addresses, is available. By setting the mode to 0 for reading and 1 for writing, and adding a "4" to the 1-based address of the desired Holding register, users can access the Slave device's Holding register memory area.

The DATA_LEN represents the number of 16-bit Holding registers to be manipulated. Siemens refers to this as the "station address of the Modbus slave" or "Modbus RTU station address." It is crucial in a multi-drop network like RS-485 to assign a unique station address to each Slave device for proper communication. Remember, the valid range for this address is between 1 and 247.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy recommended checking out these important links for your drive: SEW Eurodrive Downloads (Link 1) and SEW Eurodrive Downloads (Link 2). Pay attention to the instructions regarding adjusting the address by subtracting 1 from it. Keep in mind the parameters MODE, DATA_ADDR, and DATA_LEN when working with Modbus, a versatile protocol used across various Modbus Masters platforms.

Focus specifically on Modbus Holding 16-bit registers. When reading or writing a Holding register, there are two common conventions to follow: indicate whether it is a read or write operation by adding a "4" prefix to the address, or specify the Modbus function code for either operation. For Siemens S7-1200, you have the flexibility to choose between read and write modes, and the addressing options available.

When interpreting hexadecimal values in the context of Modbus communication, such as C000hex and 4000hex representing percentages for left and right rotation, it is essential to understand how these values are applied in motor control commands.

To integrate these values into the MB_MASTER block in TIA Portal for motor control, follow the manufacturer's guidelines outlined in the documentation. Refer to page 4 of the provided document for specific details on assigning values for motor rotation control.

Thank you for your thorough explanation and guidance. Your insights have been immensely valuable as I navigate testing with the SEW motor controller.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>karlsmith</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of Modbus communication, the interpretation of hex values such as C000hex representing -100% and 4000hex representing +100% might seem puzzling at first glance. However, a deeper analysis reveals that 4000h translates to 16384 in decimal, while C000h equates to -16384 in Signed integer (Signed Short) format. In essence, these hex values denote a 15-bit data value with both positive and negative signs for drive functions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When converting hexadecimal values to decimal, Lare noted that 4000h translates to 16384 while C000h equals -16384 in a Signed Short format, indicating a 15-bit data value with a positive or negative sign for drive. The focus now shifts to identifying the appropriate addresses to input into DATA_ADDR for various functions like right rotation, left rotation, or halting operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>karlsmith</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@karlsmith I believe you may be mistaken (auf dem Holzweg sein/tu fais fausse route): can the RS-485 on the SEW drive actually support the Modbus protocol? Check out this discussion from 2015 for more information: Movimot and CompactLogix1769-L3x.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
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
<h4 class='text-dark'>FAQ: 1. What is the MB_MASTER block in TIA Portal for VFD communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - The MB_MASTER block in TIA Portal is used for setting up Modbus communication with devices like variable frequency drives (VFDs) in Siemens PLCs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I determine the accurate addresses for forward, reverse, and halt actions in the MB_MASTER block for SEW EURODRIVE motor control?</h4>
<p class='text-muted'><strong>Answer:</strong> - To determine the addresses for these actions, you can refer to the documentation provided by SEW EURODRIVE, specifically the "MOVILINK Protocol_Modbus RS485" documentation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are the addresses for forward, reverse, and halt actions in the MB_MASTER block bits or HEX registers?</h4>
<p class='text-muted'><strong>Answer:</strong> - The addresses for these actions can be either bits or HEX registers, depending on the configuration specified in the documentation for the SEW EURODRIVE motor and VFD.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Have you had experience in configuring SEW EURODRIVE motors via Modbus RS485 using Siemens PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - It would be beneficial to seek advice and perspectives from individuals who have experience in configuring and overseeing SEW EURODRIVE motors via Modbus RS485 using Siemens PLCs to address any specific challenges or questions you may have.</p>
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
