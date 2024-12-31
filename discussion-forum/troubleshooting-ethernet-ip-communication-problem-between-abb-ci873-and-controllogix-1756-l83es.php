
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently experiencing a strange issue with Ethernet IP communication between an ABB CI873 (EthernetIP Module) and a 1756-L83ES. The setup consists of the ABB CI873 connected to a Stratix 5700 switch, which then connects to a 1756-EN2TR with a 1756-L83Es in Slot 0 of the backplane. The">
    <meta name="keywords" content="abb ci873, controllogix 1756-l83es, ethernet ip communication, troubleshooting, stratix 5700 switch, 1756-en2tr, master configuration, produced tags, class 3 explicit msg, connection timeout error">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ethernet-ip-communication-problem-between-abb-ci873-and-controllogix-1756-l83es">
    <title>Troubleshooting Ethernet IP Communication Problem between ABB CI873 and ControlLogix 1756-L83ES | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Ethernet IP Communication Problem between ABB CI873 and ControlLogix 1756-L83ES | Oxmaint Community">
    <meta property="og:description" content="I am currently experiencing a strange issue with Ethernet IP communication between an ABB CI873 (EthernetIP Module) and a 1756-L83ES. The setup consists of the ABB CI873 connected to a Stratix 5700 switch, which then connects to a 1756-EN2TR with a 1756-L83Es in Slot 0 of the backplane. The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ethernet-ip-communication-problem-between-abb-ci873-and-controllogix-1756-l83es">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Ethernet IP Communication Problem between ABB CI873 and ControlLogix 1756-L83ES | Oxmaint Community">
    <meta name="twitter:description" content="I am currently experiencing a strange issue with Ethernet IP communication between an ABB CI873 (EthernetIP Module) and a 1756-L83ES. The setup consists of the ABB CI873 connected to a Stratix 5700 switch, which then connects to a 1756-EN2TR with a 1756-L83Es in Slot 0 of the backplane. The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ethernet-ip-communication-problem-between-abb-ci873-and-controllogix-1756-l83es"
      },
      "headline": "Troubleshooting Ethernet IP Communication Problem between ABB CI873 and ControlLogix 1756-L83ES",
      "description": "I am currently experiencing a strange issue with Ethernet IP communication between an ABB CI873 (EthernetIP Module) and a 1756-L83ES. The setup consists of the ABB CI873 connected to a Stratix 5700 switch, which then connects to a 1756-EN2TR with a 1756-L83Es in Slot 0 of the backplane. The",
      "author": {
        "@type": "Person",
        "name": "Jmeadows7676"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-29",
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
                <h1 class="text-white">Troubleshooting Ethernet IP Communication Problem between ABB CI873 and ControlLogix 1756-L83ES</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jmeadows7676</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1233</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">14</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently experiencing a strange issue with Ethernet IP communication between an ABB CI873 (EthernetIP Module) and a 1756-L83ES. The setup consists of the ABB CI873 connected to a Stratix 5700 switch, which then connects to a 1756-EN2TR with a 1756-L83Es in Slot 0 of the backplane. The ABB CI873 is configured as a Master, receiving information from the CLX via Produced Tags and sending data to the CLX via Class 3 explicit MSG.

The Stratix 5700 switch has a basic configuration with just an IP address, Name, and smartports on the Automation Device for both ports used. Despite this, the CI873 encounters a Connection timeout error on the Class 1 Produced Command every 2 minutes before functioning normally for another 2 minutes. The system initially worked flawlessly when directly connected from the ABB Module to the EN2TR card (bypassing the switch). However, when reintroduced to the switch, the issue resurfaced at the same interval.

After resetting the switch to its default settings, the system ran smoothly when connected. Any attempt to reconfigure the switch resulted in the recurring problem. Can anyone provide insight into what might be causing this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Fascinating! Today, I discovered that CI873 is the specific part number assigned to the interface module connecting an ABB xA distributed control system with EtherNet/IP networks and Rockwell Automation controllers. Do you happen to know the Required Packet Interval (RPI) that CI873 needs for the Produced Tags from the ControlLogix? Is there an option to establish this connection using Unicast or Multicast? While the Smart Port configuration could be a possible culprit, it may not be the definitive cause. It's possible that the lack of two-way traffic for Produced/Consumed data is causing the port to be removed from the multicast domain every two minutes.

One interesting feature of the "Automation Device" SmartPort is its limitation to one MAC ID per port, preventing downstream switch connections. Could CI873 potentially utilize a second or virtual MAC ID, or are redundant CI873 units being used on the link? Consider configuring a mirror port and utilizing Wireshark to identify which device is ceasing communication and if any connection termination messages are being transmitted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach inquired about the RPI setting for Produced Tags from the ControlLogix CI873 and whether it supports Unicast or Multicast connections. Unfortunately, the CI873 only supports Unicast connections. He also wondered if the CI873 utilizes a second MAC ID or if a redundant pair of units is being used, but this does not seem to be the case as both units are isolated on different switches and encountering the same issue.

To troubleshoot further, Ken suggested setting up a mirror port and using Wireshark to identify any communication disruptions or termination messages. However, he was unable to download Wireshark due to a lack of internet access and typically relies on Frontline NetDecoder, which he left behind in Alabama while testing in Milwaukee.

Ken noted that the issue arose once an IP address was assigned, despite experimenting with different settings like leaving smart ports at none or disabling CIP. He suspected a potential connection to the creation of a Management VLAN during configuration, pointing out that removing the IP address from VLAN 1 resolved the problem. He was planning to replicate the scenario in his lab and provide NetDecoder files for further analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmeadows7676</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach expressed his curiosity after discovering that the CI873 serves as the interface module connecting an ABB xA distributed control system with EtherNet/IP networks and Rockwell Automation controllers. He inquired about the RPI specified for Produced Tags from the ControlLogix and whether the connection can be established via Unicast or Multicast. While the Smart Port configuration appears to be a potential issue, there may be other factors at play, such as the absence of two-way traffic leading to the removal of the port from the multicast domain every two minutes. Notably, the "Automation Device" SmartPort only accommodates a single MAC ID, prohibiting downstream switch connection for access sharing. It prompts the question of whether the CI873 utilizes a second or virtual MAC ID, or if redundant CI873 units are employed in the link. The suggestion to configure a mirror port for Wireshark analysis to identify communication disruptions and potential connection termination messages was also proposed. Ken was successful in setting up a functioning system and replicating the issue with a Stratix 5400, offering access to either Wireshark or Frontline NetDecoder for further investigation. If interested, assistance in troubleshooting the matter can be provided. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmeadows7676</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After some investigation, I found that un-checking the default setting for IGMP Querier resolved the communication issue. Further research revealed that IGMP Snooping functions by directing Multicast/Broadcast messages to specific ports rather than broadcasting them everywhere. This adjustment successfully resolved the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmeadows7676</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the follow-up! In a network with a single managed switch, the combination of IGMP Snooping and Querier features helps to control and limit multicast traffic to specific ports within the multicast domain. While not as crucial as before, as most devices now use Unicast for EtherNet/IP cyclic I/O connections, it's still worth monitoring. You can check the connection type in Studio 5000 or use Wireshark to observe multicast traffic between Logix and ABB-CI873 during data exchange. If you suspect issues with IGMP Querier settings, it could be due to multiple Queriers on the network causing election conflicts. Regularly monitor and adjust these settings to prevent reconfigurations and disruptions. Though not an expert, I have enough knowledge to troubleshoot these issues effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach expressed gratitude for the follow-up! In a network with a single managed switch, the IGMP Snooping and Querier features work together to manage multicast traffic, restricting it to only the relevant ports. However, with the prevalence of devices using Unicast over Multicast for EtherNet/IP cyclic I/O connections, the importance of these features has decreased. To analyze how Logix and the ABB-CI873 exchange cyclic data, you can check the connection type in Studio 5000 or monitor multicast traffic using Wireshark. If you experience issues, it's possible that multiple IGMP Queriers on the network may not be configured correctly, leading to unexpected reconfigurations. While not an expert, Ken Roach has some insights on the topic. If you examine the Wireshark files with IGMP Querier on and off, you'll likely gain a better understanding. Unfortunately, the files may be too large to attach directly. It appears that the ABB Module only supports Multicast traffic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmeadows7676</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am eager to review those files! If you prefer not to share them publicly online, please send me a Private Message containing a link to Dropbox, OneDrive, or Google Drive. This week, I am focusing on resolving Stratix-related issues. I may even create a new forum thread to discuss this challenge, as I have a knack for problem-solving through asking questions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I need assistance with setting up the ABB CI873 interface to communicate with a Control Logix L73 PLC through an EN2TXT module. The EN2TXT module functions as a slave and I am looking to configure the CI873 address mapping to retrieve data from the L73 PLC. My colleague is responsible for the CI873 setup as I focus on the EN2T module. Any guidance on this matter would be greatly valued.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gobinath</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello members, I am looking for guidance on how to connect an AB 1769-L32 (Ethernet/IP server) to an ABB CI873 (Ethernet/IP client) using CIP. I would greatly appreciate it if Jmeadows7676 could provide an example of how this can be achieved, as it seems you have experience in this field. Thank you in advance for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DayV</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why am I experiencing Ethernet IP communication issues between ABB CI873 and ControlLogix 1756-L83ES?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue might be related to a Connection timeout error on the Class 1 Produced Command occurring every 2 minutes before functioning normally. This problem resurfaces when connected via a Stratix 5700 switch, despite working fine when directly connected.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the current setup for the Ethernet IP communication between ABB CI873 and ControlLogix 1756-L83ES?</h4>
<p class='text-muted'><strong>Answer:</strong> - The setup involves the ABB CI873 connected to a Stratix 5700 switch, which then connects to a 1756-EN2TR with a 1756-L83ES in Slot 0. The ABB CI873 acts as a Master, receiving information via Produced Tags and sending data via Class 3 explicit MSG.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why does the issue with Ethernet IP communication persist after reconfiguring the Stratix 5700 switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - Despite resetting the switch to default settings resulting in smooth operation, any attempt to reconfigure the switch leads to the recurring problem. This suggests that the switch configuration might be causing the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I troubleshoot the recurring Connection timeout error on the Class 1 Produced Command in the Ethernet IP communication setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting steps may involve checking the switch configuration, verifying network settings, examining cable connections, and ensuring compatibility between devices</p>
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
