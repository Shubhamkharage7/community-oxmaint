
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our SattCon PLC features a single circuit board with an LCD display and membrane keypad, connected to I/O modules SD32D and XACV-B via a ribbon cable. Unfortunately, the model or part number is not visible on the unit, making it difficult to identify. As we attempt to address a">
    <meta name="keywords" content="sattcon plc, connectivity issues, troubleshooting, identifying model numbers, resolving communication errors, ribbon cable, i/o modules, sd32d, xacv-b, faulty output, dox10, plc type 05">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issues-with-sattcon-plc-identifying-model-numbers-and-resolving-communication-errors">
    <title>Troubleshooting Connectivity Issues with SattCon PLC: Identifying Model Numbers and Resolving Communication Errors | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Connectivity Issues with SattCon PLC: Identifying Model Numbers and Resolving Communication Errors | Oxmaint Community">
    <meta property="og:description" content="Our SattCon PLC features a single circuit board with an LCD display and membrane keypad, connected to I/O modules SD32D and XACV-B via a ribbon cable. Unfortunately, the model or part number is not visible on the unit, making it difficult to identify. As we attempt to address a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issues-with-sattcon-plc-identifying-model-numbers-and-resolving-communication-errors">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Connectivity Issues with SattCon PLC: Identifying Model Numbers and Resolving Communication Errors | Oxmaint Community">
    <meta name="twitter:description" content="Our SattCon PLC features a single circuit board with an LCD display and membrane keypad, connected to I/O modules SD32D and XACV-B via a ribbon cable. Unfortunately, the model or part number is not visible on the unit, making it difficult to identify. As we attempt to address a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issues-with-sattcon-plc-identifying-model-numbers-and-resolving-communication-errors"
      },
      "headline": "Troubleshooting Connectivity Issues with SattCon PLC: Identifying Model Numbers and Resolving Communication Errors",
      "description": "Our SattCon PLC features a single circuit board with an LCD display and membrane keypad, connected to I/O modules SD32D and XACV-B via a ribbon cable. Unfortunately, the model or part number is not visible on the unit, making it difficult to identify. As we attempt to address a",
      "author": {
        "@type": "Person",
        "name": "vset"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-29",
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
                <h1 class="text-white">Troubleshooting Connectivity Issues with SattCon PLC: Identifying Model Numbers and Resolving Communication Errors</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>vset</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>24 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">57722</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">212</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Our SattCon PLC features a single circuit board with an LCD display and membrane keypad, connected to I/O modules SD32D and XACV-B via a ribbon cable. Unfortunately, the model or part number is not visible on the unit, making it difficult to identify. As we attempt to address a faulty output on the PLC, we have encountered challenges with going online using DOX10 (v 2.1-1). Despite creating a new project and selecting the PLC type as 05, we have faced issues with connecting to the device. Various error messages, such as "unknown PLC type connected," have hindered our progress.

We have tried adjusting baud rates and exploring different PLC types within the SC05 family, but have only had success with SC05-45 and SC05-45EREG models. Despite our efforts, we continue to encounter errors during data transmission, often leading to timeout or invalid data messages. We suspect a potential issue with the DOX10 installation, particularly due to missing disks related to Sattcon35.

Furthermore, we are unsure if the library setting (labeled as 115 under project settings) is contributing to our connectivity issues. Attempts to manually enter different library files have been unsuccessful. Additionally, we have not made any changes to config.sys or autoexec.bat files, but we acknowledge that missing entries could potentially be causing the problem.

Our troubleshooting efforts have spanned across various operating systems, including XP SP3, Windows 95, and a Virtual PC session with Windows 98. Despite using a computer with a native onboard serial port, we have still faced difficulties establishing a stable connection with the PLC.

Any assistance in resolving these issues and successfully retrieving the program from the PLC, as well as adjusting the output address, would be greatly appreciated. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If your controller doesn't support DOX10, consider downloading and trying DOX5 software instead. I successfully used DOX5 on a Windows 95 computer through a DOS emulator. Make sure to verify compatibility before downloading any software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kiwi sparky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for responding. Unfortunately, Sattcon is no longer in operation and ABB does not provide support for their DOX5 product. Even in Sweden, there is no one available who is knowledgeable about it. This makes it extremely difficult to purchase DOX5 or DOX10 anywhere. Any suggestions on where to find Dox5 would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>vset</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Back in 1998, I participated in a "Sattcon 05" programmable logic controller (PLC) training course utilizing DOX5. The training was conducted by Alfa Laval Automation, UK, the supplier of our plate heat exchangers. If you need assistance, they might be able to help. If not, I have a former colleague who may still have the necessary equipment. Feel free to message me if you're still in a bind, and I will reach out to him. From what I remember, the training was very old-school, solely DOS-based with no Windows interface.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ned_Flanders</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I will be back in the office on Monday (UK time). Please send me a private message so I can assist you with DOX5. DOX5 operates in real DOS mode (similar to Windows 95) with modifications to the config.sys settings. If the PLC loses battery backup, it defaults to unusual communication settings. I have successfully backed up and restored a CU05-25CPU, but I am unsure of which CPU you have. Your HMI resembles a Sattcon OP45. Best regards, Rob.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>usedplcs</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you own a SattCon OP45 with the text displayed in Danish? This prompts the question: is the machine originally from Denmark? Fortunately, the OP45 can be programmed using DOX10. I will search for my manual to assist with programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JERA</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The SattCon OP45 Jera machine is a Danish-made device. I am currently using version 2.1-1 of Dox10. Should I specify SC05 as the PLC type and 45 as the PLC version? This is what I selected, but I encountered timeout and other errors when trying to receive data from the PLC, as mentioned in my previous post. Do you have any suggestions on what I should do differently? Additionally, in the project data section, should the library be identified as library/lib_115? Your insights would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>vset</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you require assistance with Sattcon, I have a knowledgeable Sattcon expert based in Sweden. Feel free to reach out for his contact information for any issues with your Sattcon system. Simply message me if you would like his details. His expertise in Sattcon is unparalleled and invaluable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Senby</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings, friends! Can anyone direct me to where I can find Dox05 or Dox10 Gamal?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gamalyones</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For inquiries about SattCon and DOX, reach out to this company via their website at http://www.abb.com/product/se/9AAC115821.aspx?country=SE. Feel free to contact them for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Senby</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for choosing Senbyi to enhance your canine's health and well-being.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gamalyones</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am looking for a free software that can convert DOX5 files to DOX10 or Control Builder ABB-compatible formats.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sanchez</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for where to buy Dox05 or Dox10 from Gamalyones? Feel free to contact me for purchasing options. I have copies of both with manuals available. Email me at [email protected] if you need Dox10 or Dox5.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SattconABB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Seeking assistance with a SATTCON 05 slimlime PLC issue where the RUN/STOP LED is lit up and the PWR/BATTLOW indicator is flashing after a power reset. Even after changing the battery, the RUN/STOP LED remains on, indicating a program stoppage. Unfortunately, without access to software or the ability to go online, restarting the program seems impossible. Any suggestions on how to resolve this issue and get the PLC back in running mode would be greatly appreciated. You can reach me at [email protected] Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steeny</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A step-by-step guide on how to backup and restore a SATTCon 05 OP45 using SBUP05. Learn how to easily and efficiently protect and recover your data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kronth</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Learn how to easily download the DOX10 software online</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kronth</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>SatCon 05 Troubleshooting: Need Help Restarting? If you're looking to reboot your SatCon 05, the manual instructs you to press the CPU card button for 10 seconds. But where exactly is that button located? Fredrik is seeking assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>El-Kungen</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Fredrik, which version of the SattCon05 are you using? If you have a model with a built-in keyboard, follow these steps: Press 0 + ENTER to access the command level. In the command level, press 1 + PROG to start a program (0 + PROG to stop a program). When the PLC is running, press QUIT to return to the basic level. Hope this helps! JERA.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JERA</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello experts, has anyone faced a similar issue before? The ABB SattCon S200 30/20 controller is unable to start and is currently in debug (pROBE) mode. When attempting to initiate the user program while in any working position, an error message is displayed: "PLC is in debug mode (pROBE), on-line communication not possible". However, switching the controller to position 5, meant for system program downloads, triggers diagnostics which pass successfully. Following diagnostics, the controller begins to download pSOS, with a message indicating the system's configuration, TFTP server, and network interface. 

My query is about how to establish a connection with the TFTP server for downloading the system program (pSOS). What tools or steps are necessary for this process?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>3BEPb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am facing an issue with my ABB op45 scs45r system. My old machine is equipped with an ABB SCS45R PLC control system that has recently stopped functioning. Upon powering on, an "program stop" alarm lamp lights up at the back of the op45. The LCD display in front shows "RAM OK_", indicating that no other tasks can be performed. If you have any insights or solutions, please share.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>yusl</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, we are encountering an issue transferring a program from Dox5 to Op45. Can you assist us with this problem? We are facing difficulties with an old machine that utilizes the ABB SCS45R PLC control system. Recently, it suddenly stopped running and when powered on, it displays a "Program Stop" alarm on the OP45. The LCD screen shows "RAM OK_" and no other functions are working. Please help us troubleshoot this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cenkkilic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you kindly provide me with the programming manual for Dox 10? Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>miklos2peter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the latest updates on CNC mill and lathe control software in this informative forum thread on CNCZone. Click on the link to learn more: https://www.cnczone.com/forums/general-cnc-mill-lathe-control-software-nc-/39799-software.html</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JERA</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Good morning, can a SattCon OP45 control panel be replaced with a SattTop OP panel? I have the program ready to load into the new panel. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Eduardo Llamazares</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Kronth inquired about the process of backing up and restoring SattCon 05 OP45 using SBUP05 step by step. Additionally, the individual asked for details on utilizing SattCon OP45 for a CIP unit, specifically regarding the registers responsible for lay, acid, and flush water timers. Thank you for any assistance provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>issam wafir</span></li>
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
<h4 class='text-dark'>FAQ: 1. FAQ: How can I identify the model number of my SattCon PLC if it is not visible on the unit?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the model number is not visible on the unit, you can try checking the documentation or contacting the manufacturer for assistance in identifying the model number of your SattCon PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: What could be causing the "unknown PLC type connected" error message when trying to connect to the SattCon PLC using DOX10?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "unknown PLC type connected" error message could be due to compatibility issues or incorrect settings. Ensure that you have selected the correct PLC type and consider checking the baud rates and other settings for proper communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: How can I address errors during data transmission and resolve timeout or invalid data messages when working with the SattCon PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address errors during data transmission, ensure that you have selected the appropriate PLC type, adjusted baud rates, and checked for any issues with the DOX10 installation. Troubleshooting connectivity problems thoroughly can help in resolving timeout or invalid data messages.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. FAQ: Could the library setting labeled as 115 under project settings be contributing to connectivity issues with the SattCon PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The library setting labeled as 115 under project settings might impact connectivity. Ensure that the correct library files are selected or consider troubleshooting further by manually entering different library files to resolve any potential issues affecting connectivity.</p>
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
