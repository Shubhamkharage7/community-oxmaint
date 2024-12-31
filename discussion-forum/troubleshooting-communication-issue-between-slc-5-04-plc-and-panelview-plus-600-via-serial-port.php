
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am in need of assistance with my setup involving a SLC 5/04 PLC connected to a PanelView Plus 600 via a DF-1 protocol over a serial 232 port. Even though the PanelView Plus resets and displays a message indicating that its DF-1 driver has automatically configured">
    <meta name="keywords" content="slc 5/04 plc, panelview plus 600, df-1 protocol, serial 232 port, communication issue, troubleshooting, serial communication problem, slc channel 0 settings, df-1 driver configuration, panelview plus reset">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-between-slc-5-04-plc-and-panelview-plus-600-via-serial-port">
    <title>Troubleshooting Communication Issue between SLC 5/04 PLC and PanelView Plus 600 via Serial Port | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issue between SLC 5/04 PLC and PanelView Plus 600 via Serial Port | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am in need of assistance with my setup involving a SLC 5/04 PLC connected to a PanelView Plus 600 via a DF-1 protocol over a serial 232 port. Even though the PanelView Plus resets and displays a message indicating that its DF-1 driver has automatically configured">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-between-slc-5-04-plc-and-panelview-plus-600-via-serial-port">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issue between SLC 5/04 PLC and PanelView Plus 600 via Serial Port | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am in need of assistance with my setup involving a SLC 5/04 PLC connected to a PanelView Plus 600 via a DF-1 protocol over a serial 232 port. Even though the PanelView Plus resets and displays a message indicating that its DF-1 driver has automatically configured">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-between-slc-5-04-plc-and-panelview-plus-600-via-serial-port"
      },
      "headline": "Troubleshooting Communication Issue between SLC 5/04 PLC and PanelView Plus 600 via Serial Port",
      "description": "Hello everyone, I am in need of assistance with my setup involving a SLC 5/04 PLC connected to a PanelView Plus 600 via a DF-1 protocol over a serial 232 port. Even though the PanelView Plus resets and displays a message indicating that its DF-1 driver has automatically configured",
      "author": {
        "@type": "Person",
        "name": "simmo231"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-13",
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
                <h1 class="text-white">Troubleshooting Communication Issue between SLC 5/04 PLC and PanelView Plus 600 via Serial Port</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>simmo231</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">12083</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">67</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am in need of assistance with my setup involving a SLC 5/04 PLC connected to a PanelView Plus 600 via a DF-1 protocol over a serial 232 port. Even though the PanelView Plus resets and displays a message indicating that its DF-1 driver has automatically configured and started, I am unable to establish communication between the two units. I have ensured that I am using the correct cable, set the PanelView Plus to auto configure, and experimented with various settings for the SLC channel 0 without success. I am struggling to establish proper communication between the PanelView Plus and the SLC PLC via the serial port. Any guidance or assistance would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you encountering issues with a system that was once functional but now seems to have stopped working, or are you setting up a new system for the first time? I recommend sticking to the default settings on the PanelView Plus and SLC-5/0x controller, rather than using the AutoConfigure feature on the PV+. Make sure both sides are set to DF1 Full Duplex 19200 baud, with CRC error checking, 8 data bits/No parity/1 stop bit. If the SLC-5/04 is unresponsive to the PanelView Plus, you may receive timeout error messages on the PV+ indicating failed requests to the controller. What symptoms are you observing on the PV+ display?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you know the precise Model Number of your PanelView Plus device? Have you confirmed that the SLC Port is configured for DF1 instead of DH485? Let's double-check to ensure everything is correctly set up for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sthompson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When configuring communication settings between a PVP600 and a 1747-L532B 5/03 over serial, it is important to ensure the following parameters are set: PLC-CH0DF1 Full Duplex, 19200 baud rate, No Parity, Source ID - 1, No Handshaking, and BCC Error Detection. For Panelview Plus Serial Comms on Com Port 1, ensure the device is set to SLC or MicroLogix with Station Number 0192001, 1 Stop Bit, and BCC Error Checking. It is recommended to manually set up the communications rather than using auto configure to avoid potential issues. Additionally, testing the project by directly connecting to the PLC with a laptop via RSLinx can help verify settings. Checking the PLC status in the communications tab of FactoryTalk View Studio can also confirm the health of the PLC connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>marcwand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your responses everyone. Marcwand, your settings closely resemble mine. Sthompson, I currently have the 600 touch model with only an RS232 port, and the SLC is definitely set to DF-1. Ken, this is a new system for me, my first time working with the "plus" panel views. When I reboot the PV with cables disconnected, it shows a message stating it is unable to configure DF-1 port 1. Once I connect the cable, it retries and confirms that the DF-1 is configured and the driver is active. However, despite this indication, I do not see any communication lights or data transfer occurring. I suspect that perhaps my SLC tags are not correctly addressed in the tag database, even though the tags were set for me when I converted a PanelBuilder 32 program to RSView (example: {SLC}B3:0/2).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>simmo231</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Simmo, are you able to connect to the PLC online using a serial connection on your laptop? By setting up the communications in the design tab, you can easily browse the PLC tags directly from the programming software. To do this, configure RSLinx Enterprise by creating a browsing shortcut, setting up a communication path (serial), configuring the device (SLC), and assigning the communication path and device to your shortcut. Make sure to apply these changes. Once set up, you can browse online to assign tags to status indicators. Test the panelview screen by clicking the play button in RSView to see live status changes on your laptop. 

After verifying PLC communications, open the RSLinx Enterprise communication setup and click on "copy from design to runtime" to compile the communication path with the runtime project. Ensure that the setup has been transferred successfully to the runtime tab. When downloading to the panelview, select the option to replace communications to load the setup into the panelview along with the project. Check the panelview communication setup by reviewing the RSLinx Enterprise section in the panelview configuration. The paths and shortcuts should mirror the setup on your laptop.

If you are unable to connect to the PLC online, you can manually set up communications in the runtime tab of RSLinx Enterprise. Make sure to check the box to replace communications when downloading to the panelview. If this all seems a bit basic, it's because this is your first panelview plus, and I'm working from memory here. Hopefully, this info helps you out. Good luck!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>marcwand</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Great job, Marco! You really excelled in your work.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pannic79</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for getting the job done for me, I truly appreciate your help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>simmo231</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Awesome, I'm happy to assist!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>marcwand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach mentioned whether the system had worked previously but stopped, or if it was being set up for the first time. He suggests using the default settings on PanelView Plus and the SLC-5/0x controller instead of using the AutoConfigure feature on PV+. Set both sides to DF1 Full Duplex 19200 baud rate, CRC error checking, 8 data bits/No parity/1 stop bit. If the SLC-5/04 doesn't respond to the PanelView Plus, error messages will indicate timeouts in the requests to the controller. What symptoms are you experiencing on the PV+ terminal? How do you configure the screen for DH+?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AdrianCap</span></li>
            </ul>
        </div>
        
    </div>
    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
</div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1. Why am I unable to establish communication between my SLC 5/04 PLC and PanelView Plus 600 via serial port despite proper configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is possible that there could be issues with the cable connection, settings mismatch between the devices, or incorrect configuration of the communication protocol. Troubleshooting these areas can help resolve the communication problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What steps should I take to troubleshoot communication issues between the PanelView Plus and SLC PLC over the serial port?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot communication problems, ensure the cable connection is secure, verify the settings of both devices are correctly configured for DF-1 protocol over serial 232 port, and check for any errors in the SLC channel 0 settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I verify if the DF-1 driver on the PanelView Plus 600 is correctly configured and started?</h4>
<p class='text-muted'><strong>Answer:</strong> - Check the PanelView Plus display for any error messages related to the DF-1 driver configuration. Ensure that the PanelView Plus is set to auto-configure for the DF-1 protocol and that the driver has successfully started without any errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are some common reasons for communication issues between a SLC 5/04 PLC and PanelView Plus 600 over a serial port?</h4>
<p class='text-muted'><strong>Answer:</strong> - Common reasons for communication problems could include incorrect cable connection, mismatched settings for the DF-1 protocol, incorrect baud rates or data bits configuration, or issues with the SLC</p>
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
