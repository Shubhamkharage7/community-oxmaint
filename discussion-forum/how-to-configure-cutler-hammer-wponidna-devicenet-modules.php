
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello! We are currently in the process of planning a cut-over for a MCC Advantage Starter DeviceNet Module, specifically focusing on segregating some IOs on a new PLC. While I am fairly certain that the modules in question are Cutler Hammer WPONIDNA modules, they were likely installed around 20">
    <meta name="keywords" content="cutler hammer wponidna, devicenet modules, mcc advantage starter, ios, new plc, eaton c441 devicenet modules, node address configuration, end of line resistance, daisy chain, software configuration, address settings, module installation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-configure-cutler-hammer-wponidna-devicenet-modules">
    <title>How to Configure Cutler Hammer WPONIDNA DeviceNet Modules | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Configure Cutler Hammer WPONIDNA DeviceNet Modules | Oxmaint Community">
    <meta property="og:description" content="Hello! We are currently in the process of planning a cut-over for a MCC Advantage Starter DeviceNet Module, specifically focusing on segregating some IOs on a new PLC. While I am fairly certain that the modules in question are Cutler Hammer WPONIDNA modules, they were likely installed around 20">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-configure-cutler-hammer-wponidna-devicenet-modules">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Configure Cutler Hammer WPONIDNA DeviceNet Modules | Oxmaint Community">
    <meta name="twitter:description" content="Hello! We are currently in the process of planning a cut-over for a MCC Advantage Starter DeviceNet Module, specifically focusing on segregating some IOs on a new PLC. While I am fairly certain that the modules in question are Cutler Hammer WPONIDNA modules, they were likely installed around 20">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-configure-cutler-hammer-wponidna-devicenet-modules"
      },
      "headline": "How to Configure Cutler Hammer WPONIDNA DeviceNet Modules",
      "description": "Hello! We are currently in the process of planning a cut-over for a MCC Advantage Starter DeviceNet Module, specifically focusing on segregating some IOs on a new PLC. While I am fairly certain that the modules in question are Cutler Hammer WPONIDNA modules, they were likely installed around 20",
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
      "datePublished": "2024-08-16",
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
                <h1 class="text-white">How to Configure Cutler Hammer WPONIDNA DeviceNet Modules</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>18 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2663</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">230</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello! We are currently in the process of planning a cut-over for a MCC Advantage Starter DeviceNet Module, specifically focusing on segregating some IOs on a new PLC. While I am fairly certain that the modules in question are Cutler Hammer WPONIDNA modules, they were likely installed around 20 years ago. Unfortunately, the MCC is already powered and the drawings are not up to date, making it difficult to confirm at this time. I was able to find a picture of the module, but the manual has long been replaced by Eaton C441 DeviceNet Modules.

Based on the pictures I have seen, it appears that you cannot set the Node address using switches. Do I need a specific software to configure the addresses? If so, what software should I use? Additionally, I am curious about the required end of line resistance for closing the daisy chain. Any insights on this would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>While I cannot provide information specifically on these modules, it is important to note that the DeviceNet specification mandates the use of a 121Ω termination resistor at both ends of the trunk cable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you. Understandable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about setting Node addresses with switches based on images seen, dalporto questioned the need for software to configure addresses and what software would be necessary. Reflecting on past experience with CH DeviceNet systems in the '90s, they recalled using a software package and PCM-CIA card to directly connect to the DN network for configuration, as switches couldn't be used for this purpose. To potentially assist with this query, a document from Eaton might provide helpful information. You can access the document here: https://www.eaton.com/ecm/groups/public/@pub/@electrical/documents/content/985139392063.pdf</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the WPONIDNA was unpacked at Node 63, it followed the typical device setup process. However, the DeviceNet Object, which includes MAC ID and Data Rate, can only be adjusted through the network using configuration tools such as C-H Net View or RSNetworx for DeviceNet's node commissioning tool. Typically, C-H and A-B networked MCC's were configured by connecting and verifying each device one by one, setting the DNet Object, and power cycling to confirm successful configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude to everyone involved in this project. I am eagerly awaiting the customer to send me the .dnt configuration file for RSNetwork so I can learn more about the setup and appearance, as this is unfamiliar territory for me. I initially believed that every starter required a Node number similar to IO Flex drops, but connecting them sequentially now seems like a logical approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When configuring the WPONIDNA at Node 63, it is essential to ensure that each cell is correctly identified with the correct Node number. While some devices like the MetalClad may have Spare nodes designated as Node 63, each other node should have a unique identifier. It is crucial to determine whether modifications to the Node numbers need to be made in the RXNetwork configuration or directly on the module itself. This device is scanned via a 1756-DNB on a L7 backplane, so setting up the correct configuration is vital. To avoid extensive downtime with the MCC, it is recommended to have all necessary resources and information readily available in advance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am thrilled to have come across your insightful article.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RobertMichalski</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A few years back, I had the opportunity to collaborate with the CH Dnet WPONIDNA team and gathered some useful information. If you're interested, please send me your email through PM and I'll be happy to share it with you. Looking forward to connecting, Joe.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jgunnels</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have received the .dnt files from the customer, with a particular interest in the one shown in the screen shot at the bottom. While some details in the descriptions may hint at what I am working with, the focus is on non-sensitive information. The task at hand involves segregating nodes 20 to 28 from one PLC to another PLC / 1756-DNB. Despite the seemingly straightforward process, I am left with numerous questions. 

From the recently provided "new" DWG, it is evident that most of the starters are WPONIDNA DeviceNet modules. However, determining the order in which they are connected remains a challenge. The project involves reprogramming from 2 X L7X to 3 X L8X and integrating some of the MCC components into the new 3rd PLC. 

Starting with Node 20, identified as the Penstock Dewatering Pump in the RSNetworx config, I am looking at specific locations within the PLC. While I have a concept of the IO Flexs, I seek clarity on the static nature of WPONIDNA addresses and their structure. 

Concerns arise regarding the association between the .dnt files and the actual PLC program. Are they distinct entities, or is there a correlation between the two? The assigned nodes appear to be fixed, prompting the question of implications if the position within the chain is altered. 

Queries surface regarding the configuration of node numbers using RSNetWorx and the relationship between nodes and serial numbers. In preparation for the cut-over outage, ensuring the retention of registered nodes is vital, given the transition to a new .dnt configuration. 

Furthermore, warnings indicating device redefinition and registration issues raise concerns about potential challenges. Exploring the role of EDS files linked to the Cutler-Hammer DeviceNet Starters devices is essential for seamless functionality. 

In the midst of these complexities, guidance on identifying critical aspects, navigating the process, and addressing any overlooked elements would be invaluable for a successful on-site implementation. While my familiarity lies more with Unity Pro, Citect, or Vijeo Designer, I am open to assisting with any queries within the Rockwell domain as I enhance my expertise in this area. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Some common issues I encountered with the CH DeviceNet MCCs involved communication delays and lag in response time. The motor starters utilized a 9600 baud rate serial bus technology, with the clip-on DeviceNet modules serving as gateways to the older serial network. Removing power from one or more starters, such as for a safety interlock, exacerbated the situation as the DN PONI module could only report its node number and not further details without its own DC voltage. This resulted in the DN Scanner continually polling to identify these undefined nodes. Even under normal operating conditions, there was still significant lag in the system, rendering the starters unsuitable for reliable brief jog operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that a 24VDC connection is passed from one device to another in a series. A connector links the starter/overload relay to the PONI module, but it's unclear which one powers the other at a communication level. If the starter DC fails, the PONI module may still receive power as long as the chain connected to the 1756-DNB remains operational. However, if the chain goes down, all PONI modules will be affected, resulting in device unavailability. Essentially, if one starter in the chain malfunctions, it could potentially impact the entire chain due to the DeviceNet node being tied to the starter rather than the DeviceNet module. Is this understanding accurate?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dalporto explained that in the system, 24VDC is passed from one device to another through connectors. There is a connection between the starter/overload relay and the PONI module, but it is unclear which device powers the other on a communication level. It is believed that even if the starter DC is offline, the PONI module would still receive power if the connection from the 1756-DNB remains active. However, if the connection is lost, all PONI modules would be affected, leading to device unavailability. This suggests that if one starter in the chain fails, it could cause delays in other parts of the chain, as the DeviceNet node would be tied to the starter rather than the DeviceNet module. 

A similar situation occurred when using a Horner Electric DN Scanner with a GE Fanuc 90-30 PLC. It could be beneficial to consider replacing the outdated PONI modules with AB DeviceNet interfaces.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Bit_Bucket_07 recommended considering replacing outdated PONI modules with AB DeviceNet interfaces for improved efficiency. 

During the bidding process for the project, the specifications were unclear then and remain unclear now, presenting a challenge. We proposed two options: Rockwell, similar to the existing setup, and Schneider, in line with our preferences. The plan involved replacing at least 3 IO Flex drops with M580 CRA or PRA drops. Despite anticipated expenses for engineering, drawings, and construction, the cost of Rockwell hardware alone is significantly higher than that of SE hardware.

An issue arose with the screens, particularly with one local InTouch screen utilizing an unfamiliar Ethernet IP setup. Additionally, a remote control communication through Modbus over a GE Fanuc as a Gateway added complexity.

The unexpected discovery of the PONI modules three months post-approval complicated matters. Discussions with Schneider led to a solution involving a third-party layer for communication with DeviceNet on a Schneider system, ultimately leading us to dismiss option 2.

In hindsight, it may have been more straightforward to follow through with the original recommendation of replacing PONIs with new Ethernet IP modules. Apologies for the lengthy message - sometimes a detailed overview helps clarify thoughts. Can PONIs be replaced individually with Ethernet IP modules on the same starter, as suggested?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dalporto asked if PONIs can be swapped out with new Ethernet IP modules on the same starter. Can AB E-300 DeviceNet overload relays be used to control the starters instead, with some re-wiring necessary?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, it seems like I have no choice but to stick with the PONIs. Thank you, regardless.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dalporto mentioned the past tense of 'bid' can be confusing - it is simply 'bid' regardless of the meaning. However, for the meaning of 'utter' or 'command', the archaic form 'bade' (pronounced like 'bad') can also be used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dalporto mentioned that they are stuck with PONIs, but there may be ways to make them work. Eaton provides migration options for legacy DeviceNet systems that could be helpful in this situation. Good luck with finding a solution! Learn more about Eaton's migration options here: https://www.eaton.com/content/dam/eaton/...assist-devicenet-migration-pa042005en.pdf.pdf</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I have an existing IOFlex drop with 4 modules installed. I have noticed 2 bytes at the beginning that appear to show statuses from the rack before the first DI Module mapping commences. In the PLC, I am seeing the following: "Local:5:I.Data[0].0 - Flex IO Node 1 Module 0 Status," "Local:5:I.Data[0].1 - Flex IO Node 1 Module 1 Status," "Local:5:I.Data[0].2 - Flex IO Node 1 Module 2 Status," and "Local:5:I.Data[0].3 - Flex IO Node 1 Module 3 Status." These 4 bits seem to indicate the failure status of each module.

I also observe the first DI starting at Local:5:I.Data[0].16. I am curious about what other information could potentially be extracted from the remaining part of the structure (4-5-6-7-8-9-10-11-12-13-14-15). While I am unsure if more than 4 modules can be accommodated in that rack, I am assuming that these would be statuses for additional modules. My main goal is to monitor the communication status with the rack (1756-ADN) itself, as a module failure will not be indicated if the rack is not communicating.

Although there are some standard statuses available from the slot structure, I am seeking more comprehensive information. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. How do I configure Cutler Hammer WPONIDNA DeviceNet Modules if I cannot set the Node address using switches?</h4>
<p class='text-muted'><strong>Answer:</strong> - You will need specific software to configure the addresses on the Cutler Hammer WPONIDNA DeviceNet Modules. You can use Eaton C441 DeviceNet Modules for this purpose.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What software should I use to configure the Node addresses on the Cutler Hammer WPONIDNA DeviceNet Modules?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can use Eaton C441 DeviceNet Modules software to configure the Node addresses on the Cutler Hammer WPONIDNA DeviceNet Modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the required end of line resistance for closing the daisy chain on Cutler Hammer WPONIDNA DeviceNet Modules?</h4>
<p class='text-muted'><strong>Answer:</strong> - The required end of line resistance for closing the daisy chain on Cutler Hammer WPONIDNA DeviceNet Modules is an important consideration. Additional insights on this aspect would be beneficial for proper configuration.</p>
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
