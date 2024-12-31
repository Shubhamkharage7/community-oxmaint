
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In the context of Siemens systems, have you ever wondered how to identify communication issues between an HMI and PLC? Despite expecting error notifications, the HMI might not always display them automatically. Specifically, if youre working with WinCC flexible 2008 Advanced and possibly utilizing an MP377 touch HMI, understanding">
    <meta name="keywords" content="hmi plc communication issues, wincc flexible 2008 advanced, mp377 touch hmi, siemens systems, communication failures, detect errors, error notifications, troubleshooting communication problems, identifying connectivity issues, hmi not displaying errors, communication troubleshooting guide">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/identifying-communication-issues-between-hmi-and-plc-in-wincc-flexible">
    <title>Identifying Communication Issues between HMI and PLC in WinCC Flexible | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Identifying Communication Issues between HMI and PLC in WinCC Flexible | Oxmaint Community">
    <meta property="og:description" content="In the context of Siemens systems, have you ever wondered how to identify communication issues between an HMI and PLC? Despite expecting error notifications, the HMI might not always display them automatically. Specifically, if youre working with WinCC flexible 2008 Advanced and possibly utilizing an MP377 touch HMI, understanding">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/identifying-communication-issues-between-hmi-and-plc-in-wincc-flexible">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Identifying Communication Issues between HMI and PLC in WinCC Flexible | Oxmaint Community">
    <meta name="twitter:description" content="In the context of Siemens systems, have you ever wondered how to identify communication issues between an HMI and PLC? Despite expecting error notifications, the HMI might not always display them automatically. Specifically, if youre working with WinCC flexible 2008 Advanced and possibly utilizing an MP377 touch HMI, understanding">
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
        "@id": "https://community.oxmaint.com/discussion-forum/identifying-communication-issues-between-hmi-and-plc-in-wincc-flexible"
      },
      "headline": "Identifying Communication Issues between HMI and PLC in WinCC Flexible",
      "description": "In the context of Siemens systems, have you ever wondered how to identify communication issues between an HMI and PLC? Despite expecting error notifications, the HMI might not always display them automatically. Specifically, if youre working with WinCC flexible 2008 Advanced and possibly utilizing an MP377 touch HMI, understanding",
      "author": {
        "@type": "Person",
        "name": "Pete.S."
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Identifying Communication Issues between HMI and PLC in WinCC Flexible</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Pete.S.</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4386</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">359</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In the context of Siemens systems, have you ever wondered how to identify communication issues between an HMI and PLC? Despite expecting error notifications, the HMI might not always display them automatically. Specifically, if you're working with WinCC flexible 2008 Advanced and possibly utilizing an MP377 touch HMI, understanding how to detect communication failures is crucial. Can you help, Pete?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When it loses connection to the PLC or encounters other faults, a System Error is generated. These errors can be viewed on the alarm display, but the default setting only shows them briefly (about 3 seconds). To easily track past alarms, I utilize an alarm buffer or history screen. Additionally, it is possible to automate responses to specific events by triggering functions and scripts. For example, when a connection error occurs, you can set an internal bit for COMM ERROR and link it to an animation. This allows for efficient monitoring and management of system messages.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unlock the potential of your control panel with Siemens' life bit feature. Learn how to maximize the connection between your panel and control with this helpful guide from Siemens Support. Explore the benefits and functionality of life bit. Start optimizing your control panel today.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Diameter157</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the assistance! It would be most practical to use a life bit in this scenario, as it will automatically indicate when the PLC is running. By the way, is there a method to monitor the PLC status from the HMI, such as STOP or RUN, as well as SF, BF, and other relevant indicators?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pete.S.</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Pete.S. expressed appreciation to the team for their assistance. In this scenario, utilizing a life bit would be the logical choice as it can automatically detect the running status of the PLC. Additionally, is there a method to retrieve the PLC's status, such as STOP or RUN, from the HMI, along with SF and BF indications? The functionality of the life bit typically communicates the connection status of the HMI to the PLC, but it may also work in the reverse direction. The specifics regarding the Run/Stop functionality are uncertain, possibly requiring coordination within the designated bit area.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking to monitor the LED status SFC51 on a Siemens PLC, you can refer to this link: https://cache.industry.siemens.com/...att_114705/v1/23330722_getting_led_status.pdf. Alternatively, you can set a substitute value for the output when the PLC is in a stopped state. Simply program your logic to keep the output at 0 under normal conditions, and switch to a value of 1 when the PLC is in a stop mode. This guide assumes you are using a 300 series CPU with Siemens Simatic Manager Step 7 version 5.5.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Diameter157</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I utilize system events 140000 and 140001 to monitor connection status, allowing for easy and flawless detection of established and interrupted connections. To access these system events, navigate toOptions -> Settings -> Workbench -> Project View Settings, and selectShow all items. From there, you can locate theSystem EventsunderAlarm Managementin the project tree. By leveraging these events, I can effectively manage an internal bit "online_ok" to display connection status through animated text. This method is especially helpful for managing multiple connections efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Diameter157 suggested using the LED status SFC51 in your logic for Siemens SIMATIC PLCs. You can refer to the manual at https://cache.industry.siemens.com/...att_114705/v1/23330722_getting_led_status.pdf for more information. Another option is to use a substitute value for the output, ensuring it remains at 0 except when the PLC is in stop mode, where it switches to 1. Keep in mind that this advice is based on a 300 series CPU with SIMATIC Manager Step 7 V5.5. It is worth noting that SFC51 may not display the STOP status while the PLC is in that state, as it may stop executing the instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the valuable information, I will be conducting tests after further research on the data you shared.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pete.S.</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP shared a useful tip on using system events 140000 and 140001 to detect connection status in a flawless manner. To access these system events, navigate to Options, then Settings, followed by Workbench, and finally Project View Settings. Make sure to select Show all items to find the System Events under Alarm Management in the project tree. These events can be utilized to control an internal bit named "online_ok" for animating a status text indicating the connection status. For those dealing with multiple connections, there is a straightforward solution available as well.

Hello there! You mentioned having a simple method for handling multiple connections (one panel connecting to multiple PLCs). Could you please provide more details about this method? In my scenario, I have a TP1200 panel connecting to two CU320 control units (Sinamics S120), and I am unsure how to visually represent the status of both connections. Any assistance on this matter would be highly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ruki</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Ruki, are you currently using 2 S120 VFDs directly connected to the TP1200, bypassing the need for a PLC? This setup may pose some challenges that I have not personally encountered before. However, if you are able to establish a lifebit or continuously incrementing counter from each VFD, you can implement the following solution: Create internal tags for "connection_1_ok" and "connection_2_ok". When system event 140001 occurs, set both tags to 0. Then, for VFD 1, use the OnChange event and Setbit function to update "connection_1_ok", and do the same for VFD 2 with "connection_2_ok". This setup allows for monitoring of both VFDs' statuses. If one VFD goes offline, both "connection_1_ok" and "connection_2_ok" will deactivate, signaling an issue, and then reactivate when the online VFD is back online.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I currently have two S120 VFDs directly connected to the TP1200 HMI without a PLC, and the setup is functioning well. However, I am unable to obtain a live data feed or a continuously updating counter from each VFD. Within the alarm view on the panel, I am receiving two distinct messages (400000 and 400001) from both connections, each with its own unique IP address. It is possible that a script could be written to address this issue, but I do not possess the necessary skills for this task.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ruki</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is not possible to differentiate between two connections with events 400000 and 400001 if they function similarly to events 140000 and 140001.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective method could be to showcase system diagnostics on your HMI screen. By accessing the Controls folder, you can easily drag and drop a System Diagnostics View onto a suitable screen. This will provide you with the same diagnostics as you would see in TIA when online. It's important to note that there may be variations in how this works with a directly connected VFD compared to a PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Certainly! Thank you for the advice. I will make an effort to implement it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ruki</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum discussion, JesperMP raised a question about connecting two S120 VFDs directly to a TP1200 without a PLC. While uncertain if this setup would function, a workaround was suggested. By establishing internal tags for "connection_1_ok" and "connection_2_ok" and implementing specific events and functions, it is possible to monitor the status of the VFDs and handle potential offline situations effectively. Moreover, accessing parameters as DB#[ParamNo].DB[XBWD][ParamOffset] can be achieved by configuring the panel to recognize the drive as a 300 PLC. Although documentation on this topic may be scarce and product support may vary, there are indications that these methods may now be supported in Unified.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When configuring a 300 PLC drive on a panel, you can access parameters using the format DB#[ParamNo].DB[XBWD][ParamOffset]. However, finding documentation can be challenging as support for different product families may change over time. Despite this, it seems that Unified now supports this feature. It has been a long-standing feature in panels and is also supported by Unified and DCC with S120, along with G drives. You can find more information on SIOS support on Siemens' industry website.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I identify communication issues between an HMI and PLC in WinCC Flexible?
- To identify communication issues between an HMI and PLC in WinCC Flexible, you can monitor for error notifications. However, in some cases, the HMI might not display them automatically. It is crucial to understand how to detect communication failures, especially when working with WinCC flexible 2008 Advanced and using an MP377 touch HMI.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What should I do if my HMI does not display error notifications for communication issues with the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - If your HMI is not displaying error notifications for communication issues with the PLC, you can troubleshoot the connection manually by checking the settings, cables, and configurations between the HMI and PLC. It is important to ensure proper communication setup to avoid disruptions in data exchange.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there specific tools or methods recommended for troubleshooting communication problems between an HMI and PLC in Siemens systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - When troubleshooting communication problems between an HMI and PLC in Siemens systems, tools like diagnostic software or monitoring programs can be helpful in identifying issues. Additionally, checking the network settings, communication protocols, and hardware connections can pinpoint the source of the problem and facilitate resolution.</p>
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
