
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently in the process of setting up a Parallel Redundancy Protocol (PRP) system in a laboratory environment. The L73 PLC is located in rack 4, with 3 IO racks numbered 1, 2, and 3. Previous discussions about this system can be found at https://www.plctalk.net/qanda/showpost.php?p=937884andpostcount=1. Following feedback from">
    <meta name="keywords" content="prp system, parallel redundancy protocol, prp rules, l73 plc, io racks, 1756-en4tr, 1756-en2tp, cat6 copper connections, stratix 5400 switch, strat">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-cabling-issues-in-prp-system-strategies-and-insights">
    <title>Troubleshooting Cabling Issues in PRP System: Strategies and Insights | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Cabling Issues in PRP System: Strategies and Insights | Oxmaint Community">
    <meta property="og:description" content="I am currently in the process of setting up a Parallel Redundancy Protocol (PRP) system in a laboratory environment. The L73 PLC is located in rack 4, with 3 IO racks numbered 1, 2, and 3. Previous discussions about this system can be found at https://www.plctalk.net/qanda/showpost.php?p=937884andpostcount=1. Following feedback from">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-cabling-issues-in-prp-system-strategies-and-insights">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Cabling Issues in PRP System: Strategies and Insights | Oxmaint Community">
    <meta name="twitter:description" content="I am currently in the process of setting up a Parallel Redundancy Protocol (PRP) system in a laboratory environment. The L73 PLC is located in rack 4, with 3 IO racks numbered 1, 2, and 3. Previous discussions about this system can be found at https://www.plctalk.net/qanda/showpost.php?p=937884andpostcount=1. Following feedback from">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-cabling-issues-in-prp-system-strategies-and-insights"
      },
      "headline": "Troubleshooting Cabling Issues in PRP System: Strategies and Insights",
      "description": "I am currently in the process of setting up a Parallel Redundancy Protocol (PRP) system in a laboratory environment. The L73 PLC is located in rack 4, with 3 IO racks numbered 1, 2, and 3. Previous discussions about this system can be found at https://www.plctalk.net/qanda/showpost.php?p=937884andpostcount=1. Following feedback from",
      "author": {
        "@type": "Person",
        "name": "thingstodo"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-12",
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
                <h1 class="text-white">Troubleshooting Cabling Issues in PRP System: Strategies and Insights</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>thingstodo</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">993</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">224</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently in the process of setting up a Parallel Redundancy Protocol (PRP) system in a laboratory environment. The L73 PLC is located in rack 4, with 3 IO racks numbered 1, 2, and 3. Previous discussions about this system can be found at https://www.plctalk.net/qanda/showpost.php?p=937884&postcount=1. 

Following feedback from Rockwell network engineers on an updated version of the network sketch, the PRP network has been approved as compliant with PRP rules. Necessary parts have been ordered and have now been delivered. Hardware has been installed, connected, and is operational. My focus now is on detecting and addressing failures before they impact the process  (i.e. equipment malfunction due to communication issues). 

Racks 2 and 4 feature a 1756-EN4TR set to mode 4 (PRP), while racks 1 and 3 have 1756-EN2TP modules. Each rack is equipped with 2 cat6 copper connections - Channel A connects to a Stratix 5400 switch, and Channel B to a Stratix 5410 switch. The configuration of the Stratix switches is pending approval from the IT department. 

Currently, communication is functional without any issues between the racks. Redundant power supplies and cabling are in place for each switch and module. I am working on implementing a system to detect and alert on single points of failure, such as network cable disconnection, retries, CRC errors, etc. 

In my research, I have come across recommended messages for each rack but it is unclear what the bits in the returned DINT represent. I am also monitoring message instructions for .ER, but it seems to have a 30-second delay in detecting an unplugged cable. 

I am seeking input from others experienced with PRP systems and their strategies for detecting and addressing issues promptly. If you have any insights to share, please do so.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently experimenting with this setup in a lab environment. You can find the EIP_Diagnostics_AOI in the Rockwell sample library for testing. Although it may be challenging to use it without faceplates, you can simply enter your path in the EIP_NodeTable.Public_Operations.Set_NewNode and input a 1 in EIP_NodeTable.Public_Operations.CmdCreateNewNode. This will help you add the module to EIP_NodeTable.Public_NodeTable[1], and each subsequent creation will contribute to the array of nodes. This feature allows me to access a wealth of module data, including link status.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Forebiz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Forebiz mentioned that they are currently experimenting with EIP_Diagnostics_AOI in a lab setup. They suggested checking out this AOI in the Rockwell sample library. Without the use of faceplates, navigating the AOI may be a bit challenging. By entering your path in EIP_NodeTable.Public_Operations.Set_NewNode and inserting a 1 in EIP_NodeTable.Public_Operations.CmdCreateNewNode, you can add the module to EIP_NodeTable.Public_NodeTable[1]. Each additional module you create will be added to this array of nodes, allowing for easy access to a wealth of data, including link status.

Thank you for your feedback. I am encountering difficulties locating the EIP_Diagnostics_AOI. Despite searching for it under Sample code on the Rockwell website, no results are found. Searching for just AOI yields 191 results, none of which are the EIP_Diagnostics AOI. I am currently using V33.01 of Studio and it seems that the various sample code bundled with the Studio package does not list the EIP_Diagnostics AOI. Could you please direct me to where I can find this AOI?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thingstodo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When searching for information, I was unable to locate it initially. However, upon searching for 94841, I discovered a resource titled "EtherNet/IP Diagnostics Faceplates for ME and SE V3.1." While my original search term was EN2TR, similar results can be found using EN4TR as well.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Forebiz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Forebiz mentioned that the search for "EtherNet/IP Diagnostics Faceplates for ME and SE V3.1" under code 94841 yielded the desired results. Originally sought through EN2TR, the same logic can be applied for EN4TR. A helpful link provided on the Rockwell Forums allows access to the necessary AOI without the need for a service agreement, making it accessible even when not logged in. You can find the download link here:https://www.rockwellautomation.com/...29fd-f3ff-d748-41975636ab5b;deepLinking=false. Thank you for the assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thingstodo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The AOI system has been successfully installed and set up in the lab, with 4 racks connected to 2 Stratix switches as explained earlier. We plan to run tests over the Christmas break to ensure the code operates smoothly. Although the AOI user interface lacks the convenience of Factorytalk View, it still functions properly. In January, we will commence testing to confirm that any potential failures on the rack side (such as disconnected Ethernet cables, cable damage, or port speed issues) are promptly detected and alarmed. The Stratix AOI will be integrated into the lab program once the IT department finalizes the configuration and IP addresses. Through the Stratix AOI, we will also check for any failures on the switch side (like power supply issues, removed SFP, disconnected network cables, or network noise) to ensure comprehensive monitoring.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thingstodo</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>As of March 1, there have been delays in the arrival of 1756-EN2TP and 1756-EN4TR, causing changes to our plans. Our ultimate goal is still PRP, but we are facing constraints due to a lack of necessary hardware for assembly. Prior to dismantling and reorganizing the system, we documented it as thoroughly as possible with sketches, PLC programs, and more.

The lab has successfully transitioned to DLR configuration across switches and racks in 5 MCC rooms and 3 controllers. The 1756-EN4TRs can serve either PRP or DLR purposes, while some previously tested 1756-EN2TRs are being utilized in the DLR rings. The recently received 1756-EN2TPs are connecting the stratix switches to racks with a single connection, maximizing available resources.

This setup enables the conversion of all 5 MCC rooms to DLR, with one DLR spanning across all rooms. Additionally, 3 MCC rooms have local racks connected to the switch via EN2TP, and two larger MCC rooms have additional local DLRs with controllers in the racks. Although we currently lack sufficient stratix switches, efforts are being made to enhance IT visibility within each DLR.

It is anticipated that if more stratix switches are delivered before the shutdown concludes in mid-April, each DLR will benefit from at least one Stratix switch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thingstodo</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the key components of a Parallel Redundancy Protocol (PRP) system in a laboratory environment?</h4>
<p class='text-muted'><strong>Answer:</strong> - The key components of a PRP system in a laboratory environment typically include PLCs, IO racks, network switches (such as Stratix switches), and redundant power supplies with cabling connections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can failures be detected and addressed in a PRP system to prevent process disruptions?</h4>
<p class='text-muted'><strong>Answer:</strong> - Failures in a PRP system can be detected and addressed by implementing systems that monitor for single points of failure, such as network cable disconnections, retries, CRC errors, etc. Additionally, setting up alerts and monitoring message instructions can help in detecting issues promptly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the differences in configurations between the 1756-EN4TR and 1756-EN2TP modules used in PRP systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - Racks 2 and 4 typically feature 1756-EN4TR modules set to mode 4 (PRP), while racks 1 and 3 have 1756-EN2TP modules. The 1756-EN4TR modules are tailored for PRP applications, while the 1756-EN2TP modules serve other networking purposes in the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can the DINT bits in the returned messages for each rack be interpreted in a PRP system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The bits in the returned DINT represent various information related to the status of the rack</p>
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
