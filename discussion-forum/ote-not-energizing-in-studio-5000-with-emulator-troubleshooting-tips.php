
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently utilizing Studio 5000 along with an emulator. I have created a straightforward program where an XIC Contact should energize an OTE in a single rung. However, for some unknown reason, the XIC is not energizing my OTE. The program is in run mode without any">
    <meta name="keywords" content="ote troubleshooting, studio 5000 emulator, xic contact, energizing issue, run mode error, jsr routine, program configuration, studio 5000 tips, troubleshooting tips, ote not energizing, emulator setup, plc programming, ladder">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/ote-not-energizing-in-studio-5000-with-emulator-troubleshooting-tips">
    <title>OTE not energizing in Studio 5000 with emulator - troubleshooting tips | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="OTE not energizing in Studio 5000 with emulator - troubleshooting tips | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently utilizing Studio 5000 along with an emulator. I have created a straightforward program where an XIC Contact should energize an OTE in a single rung. However, for some unknown reason, the XIC is not energizing my OTE. The program is in run mode without any">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/ote-not-energizing-in-studio-5000-with-emulator-troubleshooting-tips">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="OTE not energizing in Studio 5000 with emulator - troubleshooting tips | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently utilizing Studio 5000 along with an emulator. I have created a straightforward program where an XIC Contact should energize an OTE in a single rung. However, for some unknown reason, the XIC is not energizing my OTE. The program is in run mode without any">
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
        "@id": "https://community.oxmaint.com/discussion-forum/ote-not-energizing-in-studio-5000-with-emulator-troubleshooting-tips"
      },
      "headline": "OTE not energizing in Studio 5000 with emulator - troubleshooting tips",
      "description": "Hello, I am currently utilizing Studio 5000 along with an emulator. I have created a straightforward program where an XIC Contact should energize an OTE in a single rung. However, for some unknown reason, the XIC is not energizing my OTE. The program is in run mode without any",
      "author": {
        "@type": "Person",
        "name": "Gal_Tom"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-03",
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
                <h1 class="text-white">OTE not energizing in Studio 5000 with emulator - troubleshooting tips</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Gal_Tom</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>18 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">626</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">151</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently utilizing Studio 5000 along with an emulator. I have created a straightforward program where an XIC Contact should energize an OTE in a single rung. However, for some unknown reason, the XIC is not energizing my OTE. The program is in run mode without any errors or warnings. I have included the routine in the main routine using JSR. The tags utilized are only within this routine, and are the only ones in the program. Typically, I do not work with emulators, but I have verified that the configuration is correct.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Gal_Tom, could you please include a screenshot? This visual aid will be beneficial in enhancing our understanding. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RAYBRITO</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RAYBRITO requested for Gal_Tom to include a screen capture as it would be beneficial and enhance the experience. This feature could greatly assist users in better understanding the content.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gal_Tom</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is highly probable that the Programmable Logic Controller (PLC) is executing the commands you input, even if they are not aligning with your desired outcome. The PLC operates based on the instructions it receives, disregarding your intentions. To rectify this issue, you must identify the discrepancy between the current operation and your expectations. Begin by performing a simple test to confirm the evaluation of the rung. Create a tag labeled "arealand" and modify the rung with the following code: XIC Conv_ONS_1 BST coil_1 NXB ADD areal 1.0 areal BND. Alternatively, you can use the code: XIC Conv_ONS_1 BST coil_1 NXB XIC coil_1 ADD areal 1.0 areal BND if you doubt the PLC's compliance with your instructions. Share the outcome in this forum, remembering to reset the value of "arealand" to 0.0 in the Integrated Development Environment (IDE) periodically.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Additionally, please provide the entirety of the program, preferably in a PDF format, showcasing every instance where the variable 'Conv_ONS_1' is being utilized.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Gal_Tom mentioned that they are utilizing Studio 5000 with an emulator to program a simple ladder logic. Despite setting up an XIC contact to energize an OTE output on one rung, the desired outcome is not achieved. The program is free of errors or warnings and is running in the correct mode. The routine is called from the main routine using JSR, with tags solely used within this routine. It is uncommon for Gal_Tom to work with an emulator, but configuration settings were verified to be accurate. Upon closer inspection, it appears that there may be additional ladder files and the same bit is used elsewhere as an output, which stays deactivated at the end of the scan cycle. Sharing the .ACD file could provide more clarity, but based on the provided information and screenshot, this could be the likely issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned that the PLC might be executing commands as specified, even if it's not the desired behavior. To resolve the issue, it's crucial to align what you want the PLC to do with what it's actually doing. Start by checking for discrepancies between the two. Begin with a simple test to confirm if the rung is being assessed correctly. Create a REAL tag named "areal" and modify the rung with the provided code snippets. If you're unsure whether the PLC will respond accordingly, try the code and share the outcome. Remember to reset the "areal" value to 0.0 in the IDE periodically. If you still have doubts, feel free to ask for further assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gal_Tom</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>arpus4KM noted that although you mentioned it was a simple rung, the screenshot actually shows it is on rung 7. It is possible that there are multiple ladder files being used, with the same bit being utilized as an output elsewhere and consistently being off at the end of the scan. It may be beneficial to share the .ACD file to further investigate. Experimenting with another program yielded similar results – initially successful when energizing OTEs connected to a real PLC, but still encountering issues with a new program featuring just two tags and one rung. Despite wanting to share the entire .ACD file, current limitations prevent it. Thank you for your response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gal_Tom</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Gal_Tom expressed a desire to share the complete .ACD file but is currently unable to do so. Instead, they suggest printing the program, including the data declarations, to a PDF file and then uploading it. To share a .ACD file, it can be placed in a .ZIP archive file before posting. This way, more individuals will have access to the content in the PDF format compared to the .ACD format.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Gal_Tom expressed gratitude for the reply and mentioned confusion with the code. They mentioned creating a specific tag named "areal" and inquired about the next steps. Despite trying the code on another program, they encountered the same issue as the tags were solely created for this particular check. To address this, they proposed altering rung 7 with the following code suggestion: Code:XIC Conv_ONS_1 BST OTE coil_1 NXB ADD areal 1.0 areal BND. This mnemonic form provides a solution for rung 7. By double-clicking on the 7 at the left, users can locate the code adjustment above the rungs' window. It is recommended to modify the code to: Code:XIC Conv_ONS_1 OTE coil_1. Please note that the OTE was inadvertently omitted in the previous post.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy suggested replacing rung 7 with the following code: XIC Conv_ONS_1 BST OTE coil_1 NXB ADD areal 1.0 areal BND. This mnemonic represents my recommendation for rung 7. By double-clicking on the 7 on the left, you can see the code displayed above the rungs' window as XIC Conv_ONS_1 OTE coil_1. Make sure to change it to the code provided. It's possible that the tag name may already be in use by a oneshot in the program, causing issues. It seems like the program was not created from scratch but rather using existing tags, which could be the source of the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you ever wondered why an ONS tag is being utilized to activate a coil? It is possible that the ONS tag is cycling with every scan, causing this behavior.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee pointed out a potential issue with using an ONS tag to activate a coil, suggesting that the tag may be cycling with each scan. It is important to ensure that the XIC instruction is properly evaluated and that the output rung is true. Monitoring the increment of a specific area can help confirm this and guide the operator to the next troubleshooting steps. Teaching someone how to diagnose and solve issues on their own is more valuable in the long run.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned that while it could be the memory bit influencing the result, it is essential to confirm if the XIC is being evaluated and if the output rung of the XIC is True. This step is crucial in identifying any errors and troubleshooting the issue effectively. By observing the incremental changes in the area, one can verify the process and guide OP towards a solution. The focus should not just be on solving the problem but on equipping OP with the knowledge and tools to analyze issues independently. It is important to consider all aspects of the existing program as a potential cause of errors, such as duplicate destructive with the output coil. Additional information is needed to provide a complete understanding of the situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To simplify, can you try right-clicking on the output and toggling it on? Does it remain on, or does it quickly turn back off without appearing to actually turn on? If the output can be toggled on and it stays on, it indicates that the logic is not getting scanned properly. In this case, you should investigate the JSR to understand what is happening. However, if you are unable to toggle it on and keep it on, then the output is likely being overwritten by logic from another part of your program. This would be a good starting point for troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a more straightforward approach, Operaghost suggested beginning by testing if a toggle setting remains on once activated, indicating that a specific logic may not be scanned. Whether this directly correlates is up for debate, although it could arguably present a more efficient and uncomplicated solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This discussion is reminiscent of a thrilling Sherlock Holmes mystery, full of intrigue and suspense.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rsflipflop256</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the seventh rung in a JSR routine is not being reached, it may be because the routine is ending prematurely. Consider creating a separate subroutine with only one rung to ensure proper execution. There has been previous discussion about a specific CLX instruction in a subroutine always resulting in a RET command, preventing any further scanning within the subroutine.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a previous discussion on controls and automation, a user suggested that if rung 7 on a JSR routine is not being executed, it may be because the routine is ending prematurely. One solution could be to create a separate subroutine with only one rung. It has been noted that a certain CLX instruction in a subroutine always triggers a RET instruction, causing the routine to stop scanning afterward. 

Imagine a fun learning exercise for newcomers in a classroom setting involving a box with buttons, an LED, and a rotation indicator. Students would explore the box, speculate on its controls and programming, and observe the LED blinking and the rotation indicator turning. Eventually, they would discover that inside the box is a hamster wheel operated by a hamster, with buttons that don't actually control anything. The light is illuminated by a sensor connected to a battery and a hall effect sensor and magnet on the hamster wheel. 

This exercise serves as a valuable lesson that assumptions about how things work can be misleading until you take a closer look and understand the mechanisms behind them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my XIC Contact not energizing the OTE in Studio 5000 with an emulator?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: There could be several reasons for this issue, such as incorrect configuration settings, tag scope limitations, or a programming error. Make sure to review your settings and code carefully to identify the root cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot an OTE not energizing in Studio 5000 with an emulator?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by checking your program logic, verifying tag usage and scope, confirming configuration settings, and ensuring there are no errors or warnings in your program. Additionally, you may want to simulate different scenarios to pinpoint the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  I'm new to using emulators in Studio 5000. Are there any specific considerations when troubleshooting OTE energizing issues?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When working with emulators, ensure that your program logic is correctly implemented, all tags are properly scoped within the routine, and that the emulator is configured accurately to mimic the real-world environment. Double-checking these aspects can help in resolving OTE energizing problems.</p>
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
