
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am facing difficulties in controlling an Eaton M-Max Variable Frequency Drive (VFD) using Modbus RTU from a Siemens S7 PLC. I am uncertain about the correct configuration of the Communication Load. The Master Database consistently appears busy and I only see a flashing TX light on the RS485">
    <meta name="keywords" content="eaton m-max vfd, siemens s7 plc, modbus rtu, control, communication load, master database, rs485, siemens module, variable frequency drive, modbus rtu configuration, eaton vfd control, siemens s7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-control-eaton-m-max-vfd-with-siemens-s7-plc-using-modbus-rtu">
    <title>How to Control Eaton M-Max VFD with Siemens S7 PLC using Modbus RTU | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Control Eaton M-Max VFD with Siemens S7 PLC using Modbus RTU | Oxmaint Community">
    <meta property="og:description" content="I am facing difficulties in controlling an Eaton M-Max Variable Frequency Drive (VFD) using Modbus RTU from a Siemens S7 PLC. I am uncertain about the correct configuration of the Communication Load. The Master Database consistently appears busy and I only see a flashing TX light on the RS485">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-control-eaton-m-max-vfd-with-siemens-s7-plc-using-modbus-rtu">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Control Eaton M-Max VFD with Siemens S7 PLC using Modbus RTU | Oxmaint Community">
    <meta name="twitter:description" content="I am facing difficulties in controlling an Eaton M-Max Variable Frequency Drive (VFD) using Modbus RTU from a Siemens S7 PLC. I am uncertain about the correct configuration of the Communication Load. The Master Database consistently appears busy and I only see a flashing TX light on the RS485">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-control-eaton-m-max-vfd-with-siemens-s7-plc-using-modbus-rtu"
      },
      "headline": "How to Control Eaton M-Max VFD with Siemens S7 PLC using Modbus RTU",
      "description": "I am facing difficulties in controlling an Eaton M-Max Variable Frequency Drive (VFD) using Modbus RTU from a Siemens S7 PLC. I am uncertain about the correct configuration of the Communication Load. The Master Database consistently appears busy and I only see a flashing TX light on the RS485",
      "author": {
        "@type": "Person",
        "name": "philip sweeney"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-21",
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
                <h1 class="text-white">How to Control Eaton M-Max VFD with Siemens S7 PLC using Modbus RTU</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>philip sweeney</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">337</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">414</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am facing difficulties in controlling an Eaton M-Max Variable Frequency Drive (VFD) using Modbus RTU from a Siemens S7 PLC. I am uncertain about the correct configuration of the Communication Load. The Master Database consistently appears busy and I only see a flashing TX light on the RS485 Siemens module. If anyone can identify my mistake or provide some guidance, it would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting parameters in your PLC system, it is important to consider the MB_COM_LOAD block, which may be classified as a legacy block. To determine compatibility, verify if your PLC firmware matches the MB_com_load version (indicated by a blinking tx light during initialization). Additionally, check the "mode" parameter in the DB6 static area – if it is set to the default value of 0, the card will be initialized to RS232. Ensure that your modbus slave number is correctly set to 10 for the VFD. The DB4.in/out area, where VFD data is stored, should be a minimum length of 3 words. If the address 42001 has a length of 3 words, it is acceptable. Begin by checking the mode parameter and confirm if Siemens PtP is configured as RS232 or RS485 (note: the MB_COM_LOAD block will override any hardware settings).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Lare, thank you for responding. I am currently utilizing a S7 1214 AC/DC/RLY with Firmware 2.2. Could you please provide guidance on how to verify the "mode" parameter on DB6? I am unable to locate it. The slave number 10 is accurate, and I have configured it the same way in the VFD. DB4 contains the VFD information. How can I check the word length? I have attempted to locate it in the assignment list without success.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>philip sweeney</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you considering setting the mode parameter of the Cm1241 module to half duplex (RS485) 2-wire?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>philip sweeney</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When accessing the properties of the CM module in the network view, you will encounter four operating mode options under RS422/RS485 interface > Port configuration. For RS485 2-wire communication, select the bottom option.
I have successfully utilized these blocks in a previous project on a 1200, where both available options proved to be effective with the CM module. 
If the Tx light is illuminated, it indicates that the communication load has been successful and the master device is attempting to execute commands. To troubleshoot, consider swapping the A and B pins used for communication. Additionally, monitor the status of the master block for any errors, as this information can assist in diagnosing issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my understanding, the MB_COM_load block overrides any hardware settings that have been configured. To make adjustments, you need to modify the "%DB6.Mode" address in the static area of the instance data blocks before initializing the MB_COM_load block. I have previously discussed, "What does the 'mode' parameter in the DB6 static area refer to?" The static tags in the instance DB/MB_COM_LOAD include the parameter "MODE" which denotes the operating mode. Valid operating modes include:
- 0 = Full duplex (RS232)
- 1 = Full duplex (RS422) four-wire mode (point-to-point)
- 2 = Full duplex (RS422) four-wire mode (multipoint master, CM PtP (ET 200SP))
- 3 = Full duplex (RS422) four-wire mode (multipoint slave, CM PtP (ET 200SP))
- 4 = Half duplex (RS485) two-wire mode</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thanks to the help of Lare and Puddle, the issue has been resolved and it is now working perfectly. The problem was likely with the 9 serial pin cable, which has since been replaced with a new one.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>philip sweeney</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I control an Eaton M-Max VFD with a Siemens S7 PLC using Modbus RTU?
- To control an Eaton M-Max VFD with a Siemens S7 PLC using Modbus RTU, ensure correct configuration of the Communication Load and proper setup of the Master Database.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why does the Master Database appear busy when trying to control the VFD?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Master Database may appear busy due to incorrect configuration settings or communication issues between the Siemens S7 PLC and the Eaton M-Max VFD. Check the settings and connections for any errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What does a flashing TX light on the RS485 Siemens module indicate?</h4>
<p class='text-muted'><strong>Answer:</strong> - A flashing TX light on the RS485 Siemens module typically indicates transmission (TX) activity. If the light is continuously flashing without successful communication with the VFD, there may be a configuration or compatibility issue that needs to be resolved.</p>
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
