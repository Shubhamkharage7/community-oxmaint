
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am attempting to establish a connection between a PLC (Matsuhita Nais FP1 C40) and FPWIN Pro software using a USB 8550 programming cable. I have successfully installed the driver for the cable (CH340 COM3). However, when I launch FPWIN Pro 7 and attempt to create a project">
    <meta name="keywords" content="plc troubleshooting, fp1 c40 connection issues, fpwin pro software, usb 8550 programming cable, ch340 com3 driver, online mode error, comment memory does not exist, fpwin gr, basic procedure error, non-supported error">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-fp1-c40-connection-issues-with-fpwin-pro-software">
    <title>Troubleshooting PLC FP1 C40 Connection Issues with FPWIN Pro Software | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PLC FP1 C40 Connection Issues with FPWIN Pro Software | Oxmaint Community">
    <meta property="og:description" content="Hello, I am attempting to establish a connection between a PLC (Matsuhita Nais FP1 C40) and FPWIN Pro software using a USB 8550 programming cable. I have successfully installed the driver for the cable (CH340 COM3). However, when I launch FPWIN Pro 7 and attempt to create a project">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-fp1-c40-connection-issues-with-fpwin-pro-software">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PLC FP1 C40 Connection Issues with FPWIN Pro Software | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am attempting to establish a connection between a PLC (Matsuhita Nais FP1 C40) and FPWIN Pro software using a USB 8550 programming cable. I have successfully installed the driver for the cable (CH340 COM3). However, when I launch FPWIN Pro 7 and attempt to create a project">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-plc-fp1-c40-connection-issues-with-fpwin-pro-software"
      },
      "headline": "Troubleshooting PLC FP1 C40 Connection Issues with FPWIN Pro Software",
      "description": "Hello, I am attempting to establish a connection between a PLC (Matsuhita Nais FP1 C40) and FPWIN Pro software using a USB 8550 programming cable. I have successfully installed the driver for the cable (CH340 COM3). However, when I launch FPWIN Pro 7 and attempt to create a project",
      "author": {
        "@type": "Person",
        "name": "Bartlebi"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-30",
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
                <h1 class="text-white">Troubleshooting PLC FP1 C40 Connection Issues with FPWIN Pro Software</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Bartlebi</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4109</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">261</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am attempting to establish a connection between a PLC (Matsuhita Nais FP1 C40) and FPWIN Pro software using a USB 8550 programming cable. I have successfully installed the driver for the cable (CH340 COM3). However, when I launch FPWIN Pro 7 and attempt to create a project from the PLC, I encounter an issue. The PLC initially shows as being in programming mode, but after a few moments, an error message appears. The error message, translated from German, reads: "An error occurred in online mode: Comment memory does not exist." Additionally, when using FPWIN GR to download from the PLC to my computer, I receive the error message "42 From PLC: Basic procedure error - Non-supported error." It then indicates that the upload from the PLC was completed successfully. Can anyone provide guidance on how to troubleshoot these issues? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>While I am not familiar with this particular PLC, it appears to have some similarities to Mitsubishi's system. When attempting to upload, you may encounter difficulties if you are trying to access comments that are not present within the PLC. In Mitsubishi systems, there are tick boxes in the dialog box for reading/writing or verifying with the PLC. In the attached image, you can see that the comments and symbols are not selected. I cannot speak to how your software handles this issue, but I recommend focusing on reading the program and parameters only.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your assistance, however, there are no customizable options in FPWIN Pro for checking. I am only able to initiate the download process. The settings that can be adjusted are limited to the interface settings such as baud rate and bits.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bartlebi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The image showcases the interface settings. Explore the various settings available in the picture.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bartlebi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One way to upload program information is by navigating from the Menu Bar to "Project" -> "New" -> "PLC" in order to transfer the entire project from the PLC to Control FPWIN Pro7. Another option is to upload program code and PLC configuration by selecting "Online" -> "Upload program code and PLC configuration" from the Menu Bar. If a project does not already exist, only the Mnemonic code will be displayed. The program code can be corrected in cases where the original program cannot be used for specific reasons. However, once uploaded from the PLC, all documentation details of the program, such as variable names, will be lost. If you are experiencing this issue, it may be the problem you are facing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon attempting to download a program from the PLC as per your instructions, I encountered an issue where I could not view the program. An error message displayed on the image reads: "The program at block address '582' in the FPWIN GR network could not be created."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bartlebi</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems likely that this program was developed using an FBD approach. I encountered similar challenges when attempting to upload a program from a Mitsubishi FX PLC. The program appeared to have unconnected ladder symbols when uploaded in the older ladder IDE, although the code still functioned properly. Have you considered analyzing the program using mnemonics, also known as STL? In Mitsubishi PLCs, you can easily switch between ladder logic and STL, which resembles assembly language. Refer to page 4-16 of the manual for instructions on how to view program code. It is uncertain whether the program will re-compile, but similar to Mitsubishi PLCs, understanding the STL may be crucial for interpreting ladder logic connections. In my experience, I made modifications to the STL code and successfully downloaded it to achieve the desired outcome. For more information, you can access the manual at https://www.panasonic-electric-works.com/cps/rde/xbcr/pew_eu_en/mn_fpwinpro7_guide_pidsx_en.pdf</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I attempted to follow your advice, but unfortunately, the outcome is not satisfactory. While I can see some code, it is quite confusing to me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bartlebi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I do not have any prior experience with that platform, but based on what you have shared, it seems like the program may not de-compile correctly. Are you working with a functioning system and attempting to upload an existing program? Without the original source code, you may encounter difficulties. The code appears to have numerous NOP's, indicating possible online modifications. This may require additional space to download small changes without affecting the entire program. The manual suggests eventually downloading the entire program to prevent memory fragmentation. Only correct the program code if the source program cannot be used for specific reasons. In this scenario, the program will be shown on the screen in mnemonic format rather than as IL, LD, and FBD information in FPWIN Pro7. Uploading from the PLC will result in the loss of documentation information, such as variable names. Familiarity with basic program code instructions enables correction of an uploaded program. However, correcting a complex program is more challenging than a small program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Troubleshooting a Scissor Lift PLC Error: How to Download and Review Program in FPWIN Pro

If you're encountering an error in the PLC of a scissor lift, one way to address it is by downloading the program to your computer using FPWIN Pro. By reviewing the program, you can pinpoint where the error is occurring and how to fix it. Be sure to download the program without altering the mnemonic format (STL) for accurate analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bartlebi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To troubleshoot the error, it is recommended to check online for possible solutions. It appears that the code may have been affected by memory corruption or a low battery issue, leading to the error. Without a backup of the original file, the options are limited. It is advisable to contact the original supplier for a copy or consider a complete rewrite, which may require advanced coding skills.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your assistance, but I would prefer not to rely on needing the original code. I will make an effort to gather more information on my own. Thank you for your support!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bartlebi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After thoroughly searching the manual, I was unable to locate any information regarding PLC Errors. However, if a fault light is illuminated, it usually indicates that there is a method to access the PLC diagnostics, as is the case with most PLCs. Typically, this can be done by going online to review the PLC diagnostics, which will provide a detailed list of errors such as low battery, division by zero, and program checksum. If the error is related to the program checksum or similar issues, it is likely that the code has been compromised.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When attempting to locate the issue, I discover an error message during the self-diagnostic process. The error code 1 indicates a syntax error with the details provided by 'Self diagnosis'. Upon pressing the self diagnostics button, I encounter "Error 1 Syntax error in step 4".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bartlebi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the program may be corrupted, as it is only displaying the first error in step 4. This suggests that the damage could be irreversible. Upon reviewing the code provided, it seems to be missing actual addresses and is stuck in a loop. We recommend scrolling through the program to look for legitimate addresses rather than just NOP's and OR/ instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have reached out to the machine's support team for assistance. They have informed me that the program on the PLC has been deleted. I have shipped the PLC to them, and they will install a new operational program before returning it to me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bartlebi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, how did you resolve the issue with your scissor lift? I am experiencing the same problem and suspect that the program may have been lost. Can you please provide details about the machine and whether you were able to retrieve the program after fixing the controller? I would greatly appreciate any information you can share. Feel free to email me at [email protected] Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>QBAelectric</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I troubleshoot the error message "An error occurred in online mode: Comment memory does not exist" when trying to connect the Matsuhita Nais FP1 C40 PLC with FPWIN Pro software?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This error may indicate a problem with the comment memory on the PLC. Try checking the settings related to comment memory in the FPWIN Pro software and ensure that they are configured correctly. Additionally, verify that the programming cable and PLC are properly connected and that the drivers are installed correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What steps should I take to address the "42 From PLC: Basic procedure error - Non-supported error" message when using FPWIN GR to download from the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This error could be related to an unsupported procedure or function in the communication process between the PLC and the software. Make sure that the communication settings in FPWIN GR match the requirements of the Matsuhita Nais FP1 C40 PLC. You may also want to check the data transfer protocols and settings to ensure compatibility.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  I am encountering connection issues between my Matsuhita Nais FP1 C40 PLC and FPWIN Pro software. How can I ensure a successful connection and project creation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To establish a successful connection, first, confirm that the USB 8550 programming cable is properly connected and that the drivers are correctly installed (e.g., CH340 COM3). Check that the PLC is in programming</p>
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
