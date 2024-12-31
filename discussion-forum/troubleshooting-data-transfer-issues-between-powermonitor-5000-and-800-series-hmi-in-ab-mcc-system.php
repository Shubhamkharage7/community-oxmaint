
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Does the Powermonitor 5000 transfer data directly to its display or does it need a PLC to act as a middleman? I am currently observing my first Powermonitor 5000 in a new installation, and it seems to be attempting to collect data from certain integer addresses, but encountering errors.">
    <meta name="keywords" content="powermonitor 5000, 800 series hmi, ab mcc system, data transfer issues, troubleshooting, powermonitor display errors, plc connection, integer addresses, powermonitor functionality, hmi data display, powermonitor manual review, data collection problems">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-data-transfer-issues-between-powermonitor-5000-and-800-series-hmi-in-ab-mcc-system">
    <title>Troubleshooting data transfer issues between Powermonitor 5000 and 800 series HMI in AB MCC system | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting data transfer issues between Powermonitor 5000 and 800 series HMI in AB MCC system | Oxmaint Community">
    <meta property="og:description" content="Does the Powermonitor 5000 transfer data directly to its display or does it need a PLC to act as a middleman? I am currently observing my first Powermonitor 5000 in a new installation, and it seems to be attempting to collect data from certain integer addresses, but encountering errors.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-data-transfer-issues-between-powermonitor-5000-and-800-series-hmi-in-ab-mcc-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting data transfer issues between Powermonitor 5000 and 800 series HMI in AB MCC system | Oxmaint Community">
    <meta name="twitter:description" content="Does the Powermonitor 5000 transfer data directly to its display or does it need a PLC to act as a middleman? I am currently observing my first Powermonitor 5000 in a new installation, and it seems to be attempting to collect data from certain integer addresses, but encountering errors.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-data-transfer-issues-between-powermonitor-5000-and-800-series-hmi-in-ab-mcc-system"
      },
      "headline": "Troubleshooting data transfer issues between Powermonitor 5000 and 800 series HMI in AB MCC system",
      "description": "Does the Powermonitor 5000 transfer data directly to its display or does it need a PLC to act as a middleman? I am currently observing my first Powermonitor 5000 in a new installation, and it seems to be attempting to collect data from certain integer addresses, but encountering errors.",
      "author": {
        "@type": "Person",
        "name": "TheWaterboy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-01",
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
                <h1 class="text-white">Troubleshooting data transfer issues between Powermonitor 5000 and 800 series HMI in AB MCC system</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>21 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">487</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">314</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Does the Powermonitor 5000 transfer data directly to its display or does it need a PLC to act as a middleman? I am currently observing my first Powermonitor 5000 in a new installation, and it seems to be attempting to collect data from certain integer addresses, but encountering errors. The display is an 800 series HMI within an AB MCC system. While I would expect the Powermonitor and HMI to function independently, the display is only showing stars instead of data. I plan to review the manual later, but I am curious if the Powermonitor should be operational on its own or if a PLC connection is necessary.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There is no requirement for a PLC to act as a middleman. In order to make it function properly, it is advisable to refer to the user manual for instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After fixing the IP addresses, everything functioned correctly as anticipated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's great to hear that you've got it working! The PowerMonitor 5000 does an excellent job at mimicking an A-B device in terms of CIP Assemblies and Data Table emulation. I haven't come across the PanelView 800-based MCC installations, but they seem interesting. I have a system with eight PM3000's that are a decade old and have had to deal with frequent storms and power surges, resulting in a yearly replacement of one unit (as well as various VFDs). I've developed cheat sheets for setting them up and transitioning my code from the old ControlNet interface to the new one.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The PM5000 display is essentially a rebranded 4” PanelView 800 model equipped with pre-made apps suitable for one, two, or three monitors. The HMI tags are configured to point to floating points, such as F53:3, which are detailed in the comprehensive Fabulous Manual. Depending on your specific requirements, you may utilize features like MSGs to retrieve data from various elements such as F53:3, F54:3, and F55:8 when working with our building management PLC.

One standout feature of the display is its ability to capture waveforms, allowing users to remotely access and download event data using a web browser. It is crucial to note that only one CSV file should be downloaded at a time due to the generation process from compressed internal storage. Additionally, an Excel sheet has been created to visualize waveform data extracted from the CSV files, although certain details are proprietary.

For effective waveform logging, it is recommended to periodically clear out old files by sending a value of 15 to F47:1. This can be accomplished through a PLC MSG or by integrating a button on the display interface. Furthermore, waveform files can be accessed via FTP, but they are designed for use with the FactoryTalk EnergyMetrix waveform viewer, which may not be available as a standalone component.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe I have a better understanding now. By entering the correct IP address, I am able to see numerical data. Additionally, I have noticed that there is an Add-On Profile (AOP) available for this, which likely records the F registers mentioned earlier into a Logix PLC. The fact that there are three versions of the application initially confused me, but your explanation clarifies things. I am unable to access the display using a web browser; it may be due to IT blocking that specific port. As for editing the screens, would FTVME be the appropriate tool to use?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I noticed that the PV800 firmware is currently at version 6, but the latest version is V8. Version 6 is not even listed! This may be the reason why I am not getting any responses from the browser. If I update the firmware on either the PV5K or the PV800, will it clear the contents?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure optimal performance and compatibility with the PM5000 PV, it is recommended to utilize CCW.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lynx777</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Oh no, I believe someone mentioned that to me as well. I appreciate the heads up.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After mentioning the AOP, I decided to investigate further by accessing the program. I integrated it into the IO tree, leading to redundancy with the MSGs. The configuration of the monitor can be done through Studio 5000, but I initially set it up locally using the USB interface. Upon review, it seems that most of the MSG data is already being read implicitly, essentially duplicating the PanelView's functionality. Despite quickly setting up the monitors, I am now motivated to revisit and potentially eliminate the MSGs if the AOP covers everything I need.

One standout feature has been the waveform capture, facilitated through the built-in web server rather than PLC interaction. This visualization of downtime-causing blips is paving the way for a future sag correction system to optimize energy efficiency and reduce peak energy usage. Although the control setup is not complete yet, I am aiming towards cutting energy costs ultimately.

Regarding the CCW development for the PV800 applications, the PM5000 units are no different except for the label and pre-loaded basic applications. Despite having two PMs and displays, they have not been utilized effectively. In the future, I may repurpose the displays as regular PV800s and they do not necessarily have to be mounted on the monitor.

After uploading and saving the applications, I observed that the displays are running firmware version 7.011 and have had no communication issues. It is unlikely that a PV800 would respond to a browser unless FTP is enabled, which I have not tested yet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>5618 stated that the waveform capture feature has been extremely beneficial, despite not being very interactive with PLCs as it functions as a built-in web server. However, it seems that the web server capability was removed in the 800 series after the v3 Firmware update (the current version being v8), if this is true, it would be unfortunate news for users.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unsure if a web server is included in the PV800. I am familiar with the PV Compact, which allows for development through an on-board web server, although I have not personally used it. The PowerMonitor 5000, on the other hand, does come equipped with a built-in web server. This is where we access waveform CSVs for download. When I initially received the monitor, it contained two large waveform files from factory testing that were too big for Excel to open. Unfortunately, I was unable to view their contents before deleting them. In the image I shared, the capture trigger was identified as a disturbance on L3 at the 200 mark. While we capture numerous events that are uneventful and do not result in downtime, there are a few significant ones each week. This particular event was one of the more notable ones, leading to some downtime.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Oh, I see now where that information originated from. I will investigate further. Thank you for clarifying.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you considering purchasing the latest M5, M6, or M8 models? Explore our range of high-performance vehicles today!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I overlooked the three different versions available for purchase. The lowest-priced M5 model does not have the capability for waveform capture, while the M6 and M8 models do. A capture can be initiated whenever needed. Only the M8 model is equipped with transient detection, suggesting that the M6 may not automatically capture anomalies. However, all three models share the same hardware and can be upgraded in the field by purchasing a flash specific to the unit's serial number.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken's post sparked my interest regarding the integration of a 3000 power monitor into a SCADA system back in 2003. At the time, we had an RSV32 SCADA connected to 4 SLC505's and 12 3000 power monitors. I contemplated transferring the system to another SCADA platform but was unsure if I could find a compatible driver for the 3000. To my surprise, I discovered that the 3000 data map could be easily read with the SLC driver, with all variables remaining consistent, such as F and N designations. This seamless integration process highlights the importance of compatibility and interoperability in SCADA systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working on a project involving a data collector for three different variants, one important aspect to consider is the waveform capture functionality. The M8 is the only variant listed with transient detection, indicating that the M6 may not automatically capture anomalies. However, all variants share the same hardware and can be field-upgraded with a purchased flash specific to the serial number of the unit.

As part of this project, I have mapped most of the N/F files to CIP assemblies and created corresponding structs layouts. Waveform retrieval is a relatively straightforward process, though I have yet to test it on the M6/M8 variants. I am also evaluating memory usage and the effectiveness of tools like FTSE or Ignition in retrieving and displaying windows of data from a concentrator PLC on demand. While there may be other ways to approach this task, utilizing the PLC offers advantages in terms of alarming and configurator interface functionalities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently realized that my M5 does not have waveform capture capabilities. It seems I need to update my equipment to access this feature. I will research the cost of the update, as it could be a valuable investment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By performing the upgrade, I can provide support in waveform development, tackling a fascinating challenge alongside you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Paying $6500 for the upgrade may be a tough pill to swallow. However, a new issue has arisen: the display defaults back to stars after a power failure from the generator. While the configuration remains intact, achieving a proper reading seems to be a challenge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Oh my goodness, I suppose that idea got upgraded... or maybe even obsolete.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that there is a setting in the PM5k that allows you to choose between self-resetting the device after a power interruption or requiring a second power interruption to resume communications. While the reasoning behind this option is unclear, it is still available for use. Currently, I am attempting to install the AOP (which is exclusively found in the 4.010 FW download) after updating to firmware version 4.023. However, I am facing difficulties as the installer does not allow me to install an earlier version.frustrating!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Does the Powermonitor 5000 connect directly to the display or does it require a PLC in between?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Powermonitor 5000 typically communicates directly with the display, such as the 800 series HMI, without the need for a PLC intermediary.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why is the Powermonitor 5000 encountering errors when trying to collect data from integer addresses for the 800 series HMI in an AB MCC system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Errors during data collection could be due to incorrect configuration settings, communication issues, or misalignment of data formats between the Powermonitor 5000 and the HMI. Troubleshooting these aspects may resolve the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Should the Powermonitor 5000 be operational on its own or does it require a connection to a PLC for functioning within the AB MCC system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Powermonitor 5000 is designed to operate independently and does not necessarily need a PLC connection to function within an MCC system. However, proper configuration and communication setup are essential for seamless data transfer to the HMI.</p>
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
