
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am currently utilizing an A.B CompactLogix system to establish communication with two Fanuc robots through Ethernet. In addition, the programmable logic controller (PLC) is also connected to an Automation Direct HMI display. Recently, I noticed some lagging issues with the HMI during cycle timer operations. Despite replacing">
    <meta name="keywords" content="ethernet communication, fanuc robots, plc systems, lagging issues, compactlogix system, automation direct hmi, cycle timer operations, ethernet switch box, remote i/o block, ladder logic, live demonstrations, communication slowdown, prevent lag, ethernet">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-prevent-lagging-issues-in-ethernet-communication-for-fanuc-robots-and-plc-systems">
    <title>How to Prevent Lagging Issues in Ethernet Communication for Fanuc Robots and PLC Systems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Prevent Lagging Issues in Ethernet Communication for Fanuc Robots and PLC Systems | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am currently utilizing an A.B CompactLogix system to establish communication with two Fanuc robots through Ethernet. In addition, the programmable logic controller (PLC) is also connected to an Automation Direct HMI display. Recently, I noticed some lagging issues with the HMI during cycle timer operations. Despite replacing">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-prevent-lagging-issues-in-ethernet-communication-for-fanuc-robots-and-plc-systems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Prevent Lagging Issues in Ethernet Communication for Fanuc Robots and PLC Systems | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am currently utilizing an A.B CompactLogix system to establish communication with two Fanuc robots through Ethernet. In addition, the programmable logic controller (PLC) is also connected to an Automation Direct HMI display. Recently, I noticed some lagging issues with the HMI during cycle timer operations. Despite replacing">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-prevent-lagging-issues-in-ethernet-communication-for-fanuc-robots-and-plc-systems"
      },
      "headline": "How to Prevent Lagging Issues in Ethernet Communication for Fanuc Robots and PLC Systems",
      "description": "Greetings, I am currently utilizing an A.B CompactLogix system to establish communication with two Fanuc robots through Ethernet. In addition, the programmable logic controller (PLC) is also connected to an Automation Direct HMI display. Recently, I noticed some lagging issues with the HMI during cycle timer operations. Despite replacing",
      "author": {
        "@type": "Person",
        "name": "alive15"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-24",
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
                <h1 class="text-white">How to Prevent Lagging Issues in Ethernet Communication for Fanuc Robots and PLC Systems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>alive15</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">725</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">445</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am currently utilizing an A.B CompactLogix system to establish communication with two Fanuc robots through Ethernet. In addition, the programmable logic controller (PLC) is also connected to an Automation Direct HMI display. Recently, I noticed some lagging issues with the HMI during cycle timer operations. Despite replacing the Ethernet switch box with a new one from a different manufacturer, the problem resurfaced after about 6 months. I suspect that the lagging is related to the Ethernet box, as the issue seemed to be resolved temporarily after the initial replacement. 

I intend to integrate a PC to provide live demonstrations of the ladder logic and also incorporate a remote I/O block. However, I am concerned that adding these components may further slow down communication and potentially cause lag, particularly between the robots and PLC. Any insights or suggestions on how to prevent this lag issue would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're experiencing lag, it's unlikely to be caused by the switch. A basic Moxa should be able to handle the small amount of traffic generated by all devices mentioned. It's important to check devices with buffers or logs to ensure memory isn't being depleted. Start by examining the robots for any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>james13</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you currently utilizing multicast T->O settings? If multicast functionality is unnecessary, consider switching to unicast transmission instead, especially if your switch is unmanaged. Without IGMP snooping capabilities, the HMI may become bogged down processing excess network traffic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is this switch managed? If not, we utilize an unmanaged Ntron switch that continuously polls the port and retrieves data during every scan, regardless of necessity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you looking for a high-speed unmanaged switch option that outperforms others on the market? Consider checking out McMaster's range of unmanaged switches for superior data transmission speeds.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alive15</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello alive15, I don't believe that swapping out the unmanaged switch will resolve your issue, but I want to double-check. Your posts lack sufficient details for me to confirm my suspicions, but since you mentioned using an unmanaged switch, the probability of the issue aligning with my thoughts increases. In EtherNet/IP IO and implicit messaging communication, many devices are set to default "multicast" T->O configuration. This means that the IO data from the adapter device is transmitted to a multicast IP address instead of the scanner's IP address. With a managed switch, the ports are remembered and only forwarded to the necessary ones, reducing unnecessary traffic. It appears that your HMI might be inundated with multicast traffic it doesn't need.

If my assumption is accurate, there are both hard and soft solutions:
Hard solution: Invest in a managed switch.
Soft solution: Alter the IO connections in the scanner to T->O "unicast" to ensure that the unmanaged switch only forwards the IO data to the scanner and not the HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Are programming skills necessary when utilizing a managed switch, or does the switch automatically store port configurations as mentioned? The concept of using a managed switch may appear straightforward, but understanding its functionalities and capabilities is crucial for optimization.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alive15</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance network performance, it is essential to activate the Internet Group Management Protocol (IGMP) snooping functionality and ensure that the port connected to your HMI device is exempted from the group. You can refer to the IGMP snooping Wikipedia page for more details.

If you are experiencing connectivity issues, it is advisable to conduct a Wireshark capture on a spare switch port before installing a new switch. By analyzing the captured data, you can identify any multicast traffic that may be causing the problem. If needed, you can seek assistance in interpreting the data to troubleshoot effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe the intermittent delays could be attributed to an issue with the Human Machine Interface (HMI) rather than the network. This is particularly plausible if there are no observable performance issues with the robots or other interconnected devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have uploaded the Wireshark file for a 3-minute capture on Easyupload.io. From the analysis, I can see that all the traffic is coming from the two robots with IP addresses 192.168.0.10 and 192.168.0.20. The PLC is assigned the IP address 192.168.0.1, the HMI is on 192.168.0.2, and my laptop is on 192.168.0.57. It is puzzling that I do not see any traffic between the PLC and HMI and the robots. How are they communicating without any data exchange? At the 75-second mark, I also pinged the PLC. Check out the attached snapshot for more details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alive15</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>alive15 expressed confusion over the absence of PLC or HMI traffic in the network, raising questions about how the robots communicate without data exchange. As Alfredo pointed out, the trace only displays multicast traffic, which is broadcast to all devices, including the PC. In contrast, PLC/HMI communication is likely unicast and can only be observed by installing a tap between the two devices. This ensures accurate monitoring of the targeted traffic flow.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Identifying the correct setup is crucial. After a brief analysis, I have observed that there are at least two devices configured with T-> O multicast connection. The trace you provided displays around 200 milliseconds and approximately 24 frames, with the multicast traffic averaging about 80 packets per second. It is uncertain whether this may have a negative impact on the HMI system. To assess the HMI traffic, we require a trace with a tap.

Have you consulted with the control engineer overseeing the PLC program? Transitioning from multicast to unicast could reduce the traffic directed towards the HMI. The robots utilized are Fanuc, and they are likely compatible with unicast communication. Converting the setting is a minor adjustment and won't compromise the performance of the PLC. Multicast is generally only necessary when a redundant scanner is in place, which is typically not the case for most applications.

If you can provide the trace with a tap, the filter specified below can help isolate the HMI traffic for your examination. However, keep in mind that the filter will not display HMI traffic. (insert filter code)

Remember, getting the configuration right is essential for optimal system performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Further clarification is needed on the above statement. It appears that the multicast traffic is not as severe as initially thought. If the Round-trip Time (RTT) was reduced to 1 millisecond, the number of packets per second would increase significantly. It seems that the statement made in post #9 could be accurate. Therefore, simply connecting a managed switch may not completely resolve the issue.

Despite this, utilizing a managed switch does offer certain benefits. For example, the ability to utilize port mirroring eliminates the need for an Ethernet tap when conducting Wireshark captures. By mirroring the port used for the Human Machine Interface (HMI), you can easily capture the trace data. While analyzing the traffic to and from the HMI would be valuable, based on the current information, there does not appear to be a network issue present.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're experiencing network issues, don't blame multicast or your switch right away. Try using temperature stickers to monitor heat levels of your devices. It's unlikely that three 100-mbit devices would overload a switch. And don't forget to check ethernet error counters for any issues at layer 1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my experience, I have noticed that certain consumer-grade unmanaged switches may encounter what is commonly referred to as "bit-rot." This issue could potentially be attributed to memory leaks in the switch firmware. However, considering the affordability and abundance of memory, these leaks tend to arise under rare circumstances, leading to gradual performance degradation over weeks or months. A simple power cycle typically resolves the issue. One potential solution could be upgrading the firmware to a more reliable option, such as the one provided by the open-source OpenWrt project. Alternatively, investing in a higher quality switch may also alleviate the problem. It is uncertain whether this issue is related to the current thread, but this is simply my perspective on the matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the coming days, I was able to pinpoint the cause of the lag - it was software-related, not a hardware issue. By adjusting a setting in the Automation Direct software, the problem was resolved and the system started functioning properly again. It has been running smoothly for approximately a week now, and only time will tell how long this solution will last.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alive15</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that there may be an HMI issue at hand. However, I have had great success using Hirschmann Spider unmanaged switches in my network setup. These switches are cost-effective and have proven to effectively handle a setup consisting of 2 robots, a PLC, a HMI, and at least 3 additional nodes without any network issues. It is important to consider the amount of data being transmitted through the network as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bill4807</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing lagging issues in Ethernet communication for Fanuc robots and PLC systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - The lagging issues could potentially be related to the Ethernet switch box used in the communication setup. Despite replacing it, the problem resurfaced after a period of time.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I prevent lagging problems in Ethernet communication setups involving Fanuc robots and PLC systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - To prevent lagging issues, you may need to investigate the compatibility and performance of the Ethernet switch box being used. Additionally, optimizing the network configuration and considering network traffic management can help improve communication efficiency.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Will adding components like a PC for live demonstrations of ladder logic or a remote I/O block impact communication speed between the robots and PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Introducing additional components like a PC or a remote I/O block could potentially impact communication speed. It is advisable to carefully assess the network bandwidth and performance requirements to ensure smooth communication without introducing lag.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are some suggestions for enhancing communication performance and avoiding lag between Fanuc robots and PLC systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some suggestions for enhancing communication performance include monitoring network traffic, ensuring proper network infrastructure, optimizing communication protocols, and periodically checking for any potential sources of latency or lag in the system.</p>
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
