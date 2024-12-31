
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, everyone! Today, I am dealing with a specific issue regarding Modbus ProSoft for the first time. The customers setup is confusing, but we have to work with it. Typically, in a complete Modbus setup with a Schneider PLC and a Magelis/Harmony screen, I follow a certain process for">
    <meta name="keywords" content="modbus prosoft, rockwell plcs, command strategies, modbus setup, schneider plc, magelis harmony, plc commands, modbus communication, data arrays, read commands, write commands, modbus scans, hmi scada">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/best-practices-for-modbus-prosoft-with-rockwell-plcs-command-strategies-and-solutions">
    <title>Best Practices for Modbus ProSoft with Rockwell PLCs: Command Strategies and Solutions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Best Practices for Modbus ProSoft with Rockwell PLCs: Command Strategies and Solutions | Oxmaint Community">
    <meta property="og:description" content="Greetings, everyone! Today, I am dealing with a specific issue regarding Modbus ProSoft for the first time. The customers setup is confusing, but we have to work with it. Typically, in a complete Modbus setup with a Schneider PLC and a Magelis/Harmony screen, I follow a certain process for">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/best-practices-for-modbus-prosoft-with-rockwell-plcs-command-strategies-and-solutions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Practices for Modbus ProSoft with Rockwell PLCs: Command Strategies and Solutions | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, everyone! Today, I am dealing with a specific issue regarding Modbus ProSoft for the first time. The customers setup is confusing, but we have to work with it. Typically, in a complete Modbus setup with a Schneider PLC and a Magelis/Harmony screen, I follow a certain process for">
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
        "@id": "https://community.oxmaint.com/discussion-forum/best-practices-for-modbus-prosoft-with-rockwell-plcs-command-strategies-and-solutions"
      },
      "headline": "Best Practices for Modbus ProSoft with Rockwell PLCs: Command Strategies and Solutions",
      "description": "Greetings, everyone! Today, I am dealing with a specific issue regarding Modbus ProSoft for the first time. The customers setup is confusing, but we have to work with it. Typically, in a complete Modbus setup with a Schneider PLC and a Magelis/Harmony screen, I follow a certain process for",
      "author": {
        "@type": "Person",
        "name": "dalporto"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-27",
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
                <h1 class="text-white">Best Practices for Modbus ProSoft with Rockwell PLCs: Command Strategies and Solutions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">542</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">55</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, everyone! Today, I am dealing with a specific issue regarding Modbus ProSoft for the first time. The customer's setup is confusing, but we have to work with it. Typically, in a complete Modbus setup with a Schneider PLC and a Magelis/Harmony screen, I follow a certain process for commands. On the screen, I set _CMD with %MXXXX to 1. The PLC then receives this command, pulses the "usable output" of the CMD block for 3 seconds (while %MXXXX is high), and then sets %MXXXX back to 0 after the 3 seconds, indicating that the screen is ready for the next command. This process ensures that the command is not lost between Modbus scans and prevents it from being latched in the PLC if communication with the HMI/SCADA is lost.

Now, when it comes to the Modbus ProSoft on a 1756 rack, there are separate data arrays for Read and Write commands. One array is for Read commands (Read commands and SP from screen), while the other is for Write commands (Write statuses to the screen). I am unsure if what I want to achieve can be done with this setup. If not, I would appreciate guidance on best practices for commands in such a setup. 

Currently, I am facing an issue where changing a "read" value from the screen in the PLC is not reflecting on the screen due to communication limitations. I am exploring options to resolve this issue, such as manipulating the read/write arrays over the same register. If this proves to be complex, I am considering alternative methods for achieving the desired outcome. Any suggestions or insights on pulsing from InTouch would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>InTouch tags offer the flexibility of being both read and write enabled, allowing InTouch to activate a PLC bit and the PLC to reset it. Additionally, InTouch allows for the utilization of momentary bits for enhanced control.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee pointed out that InTouch tags are capable of both reading and writing, allowing InTouch to activate a PLC bit and the PLC to reset it as well. It is also possible to create momentary bits in InTouch. However, there seems to be an issue with Prosoft as it features two different INT register arrays: 0-999 for reading from the HMI and 1000-1999 for writing to the HMI. This causes a problem where the command read from the HMI remains at a value of 1 in the internal Prosoft database even after attempting to reset it to zero, resulting in the HMI value staying high. Despite attempts to overlap the registers to troubleshoot the issue, there are doubts about its effectiveness.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dalporto mentioned a challenge with the Prosoft system, which features two INT register arrays: 0-999 for reading from the Human-Machine Interface (HMI) and 1000-1999 for writing to the HMI. The issue arises when a command is read from the HMI and set back to zero, but remains at 1 in the internal Prosoft database. This causes the HMI value to stay high, even though it appears as 0 in the Programmable Logic Controller (PLC). 

One potential solution is to overlap the registers to see the outcome. Additionally, setting up momentary Push Buttons (PBs) in Intouch or using On mouse down script to write a value of 1 and On mouse up to write a value of 0 on the same action can create the desired "pulse" effect. Another option is to use the PLC to read the status of an Input bit and then set an output bit back to the HMI. In the HMI, a condition script can be implemented to reset the input bit when the output bit is 1. This approach can help resolve the issue and ensure smooth communication between the PLC and HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee suggested utilizing the PLC to monitor an input bit's status and send the corresponding signal to the HMI. By implementing a condition script in the HMI, the input bit can be reset when the output bit is activated. This solution serves as a backup plan, with considerations for a separate button to clear all commands in case of communication failure leading to unresponsive commands. Despite challenges in overlapping read/write registers for command execution, addressing the issue of switching between 3 control authorities (Local-Station-Remote) without disruption remains a top priority. Seeking assistance from Prosoft for a possible solution, a Teams meeting has been scheduled for further discussion on achieving seamless control transitions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To achieve your goal, consider using conditional scripts with ControlLogix and InTouch. Trigger a button to set HMI2PLC, with a conditional script for PLC2HMI that resets HMI2PLC to 0 when the button is pressed. Are you unable to use ABCIP or DACIP in this version?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>dalporto mentioned a concern with the Prosoft system, which has two separate INT register arrays: one for reading (0-999) and one for writing (1000-1999). The issue arises when trying to reset a value from 1 back to 0, as it remains at 1 in the Prosoft database, causing the HMI value to stay high. One solution could involve overlapping the registers to see if that resolves the issue. Another option may involve using a second client for the PLC to write clears upon detecting the rising edge of the bits, although this may not be the most elegant solution. This issue was encountered approximately 12 years ago when working with these cards, and while a solution was eventually found, it was not without its challenges.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mad4x4</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the feedback. In response to 5618's question about using ControlLogix with InTouch and ABCIP or DACIP, I can confirm that we are indeed using ABCIP with ControlLogix and it is functioning properly, similar to "normal" Modbus. However, we are facing challenges with control authority within the station. While the InTouch screen is located inside the station (Local), we are receiving remote commands from a SCADA system via an RTAC in Modbus.

Given the circumstances, we have decided to fully adopt Modbus in the station to avoid handling multiple sets of commands. Despite our efforts, we are still encountering issues with the remote commands, prompting us to focus on standardizing the new concept solely in Modbus. Initially, we proposed a Modbus-based PLC in the bid process, but encountered a complication with the MCC operating in DeviceNet, where most commands are directed. Integrating DeviceNet commands into Modbus required an additional third-party device, which we were hesitant to trust.

Furthermore, we are faced with the challenge of maintaining setpoints between screens when transitioning control authority, as the remote SCADA and RTAC are beyond our control. We are hopeful that ProSoft may offer a solution to address these challenges. In summary, the situation feels akin to being Dr. Frankenstein, piecing together incompatible components.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently had a discussion with ProSoft and discovered that there are different registers in play. To ensure self-resetting, I plan to pulse the commands for 2 seconds in InTouch and will also incorporate Apply buttons for the setpoints. Unfortunately, I am unable to track the PV between screens using a single tag as a base setpoint when the mode is turned off. I am curious if there is a method to verify if a setpoint or value has been inputted into a box, even if it is the same value, in order to create a tag that can block or release the Apply/Execute button. This precaution is to prevent operators from mistakenly using an old setpoint from several months ago. I successfully implemented a similar measure in Vijeo Designer to safeguard against overly hasty operators. Your insights would be greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How does the command process differ when using Modbus ProSoft with Rockwell PLCs compared to a setup with a Schneider PLC and Magelis/Harmony screen?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Modbus ProSoft setup on a 1756 rack involves separate data arrays for Read and Write commands, which may require different command strategies compared to a setup with a Schneider PLC and a Magelis/Harmony screen.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I ensure that commands are not lost between Modbus scans when using Modbus ProSoft with Rockwell PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In a Modbus ProSoft setup on a 1756 rack, it may be necessary to consider strategies such as manipulating the read/write arrays over the same register to prevent commands from being lost between Modbus scans.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: What should I do if changing a "read" value from the screen in the PLC is not reflecting on the screen when using Modbus ProSoft with Rockwell PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are facing communication limitations where changes in values are not reflecting on the screen, consider exploring alternative methods or adjusting command strategies, such as pulsing from InTouch, to achieve the desired outcome.</p>
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
