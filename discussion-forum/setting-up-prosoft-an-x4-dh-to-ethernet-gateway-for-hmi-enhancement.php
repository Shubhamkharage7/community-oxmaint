
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am in the process of setting up a Prosoft AN-X4 to enhance communication for a new PanelView Plus 7. Currently, we have a communication setup from a SLC-500 through DH+ to a PanelView 600C terminal, and I am looking to upgrade to a newer HMI with Ethernet">
    <meta name="keywords" content="prosoft an-x4, ethernet gateway, hmi enhancement, panelview plus 7, slc-500, dh+, communication setup, prosoft unit, factorytalk view, runtime application, configure setup, configuration challenges, communication path, upgrade">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-prosoft-an-x4-dh-to-ethernet-gateway-for-hmi-enhancement">
    <title>Setting up Prosoft AN-X4 DH+ to Ethernet Gateway for HMI Enhancement | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting up Prosoft AN-X4 DH+ to Ethernet Gateway for HMI Enhancement | Oxmaint Community">
    <meta property="og:description" content="Hello, I am in the process of setting up a Prosoft AN-X4 to enhance communication for a new PanelView Plus 7. Currently, we have a communication setup from a SLC-500 through DH+ to a PanelView 600C terminal, and I am looking to upgrade to a newer HMI with Ethernet">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-prosoft-an-x4-dh-to-ethernet-gateway-for-hmi-enhancement">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting up Prosoft AN-X4 DH+ to Ethernet Gateway for HMI Enhancement | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am in the process of setting up a Prosoft AN-X4 to enhance communication for a new PanelView Plus 7. Currently, we have a communication setup from a SLC-500 through DH+ to a PanelView 600C terminal, and I am looking to upgrade to a newer HMI with Ethernet">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-prosoft-an-x4-dh-to-ethernet-gateway-for-hmi-enhancement"
      },
      "headline": "Setting up Prosoft AN-X4 DH+ to Ethernet Gateway for HMI Enhancement",
      "description": "Hello, I am in the process of setting up a Prosoft AN-X4 to enhance communication for a new PanelView Plus 7. Currently, we have a communication setup from a SLC-500 through DH+ to a PanelView 600C terminal, and I am looking to upgrade to a newer HMI with Ethernet",
      "author": {
        "@type": "Person",
        "name": "mechadruid"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-07",
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
                <h1 class="text-white">Setting up Prosoft AN-X4 DH+ to Ethernet Gateway for HMI Enhancement</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mechadruid</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">651</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">111</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am in the process of setting up a Prosoft AN-X4 to enhance communication for a new PanelView Plus 7. Currently, we have a communication setup from a SLC-500 through DH+ to a PanelView 600C terminal, and I am looking to upgrade to a newer HMI with Ethernet capability using the Prosoft unit. I am facing challenges in configuring the communication path for the AN-X4 in FactoryTalk View for the runtime application. Any advice on how to successfully configure this setup would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I utilize a few of these devices for Ethernet to DeviceNet Plus communication via radio frequency. While I lack knowledge about FactoryTalk View, I observed that the endpoint appears as a pathway in RSLinx, much like any other device once configured.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After testing FactoryTalk Linx on DH+ networks, I found that its subscription-based nature can lead to overwhelming data traffic and lack of control over update frequencies. When I tried out the new functionality in V12, I ran into issues with my test program running on my laptop using FTView SE with FactoryTalk Linx as the OPC Server. Commands sent to the PLC through the test screens caused the PLC to stop responding to both my laptop and the PanelView Plus 7 HMI. Switching to RSLinx as the OPC server for FTView SE allowed me to manage packet transmission and tag updates effectively. Rockwell suggests limiting packets to no more than 10 at once on DH+ networks and creating multiple topics for different tag update speeds.

The PanelView Plus 7 I installed had fewer issues with this problem, possibly due to differences in firmware compared to Windows 10. In my opinion, using a Panel PC with FTView SE and RSLinx OEM/Single Node is the best solution if you are keeping the 5/04 in place. Otherwise, consider upgrading to a PanelView Plus 7 with a 5/05 processor or migrating to compactlogix for smoother operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RedSoxFan3</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During my desk testing with a SLC 5/04 connected to the Prosoft AN-X4 and then to the PanelView Plus 7, I noticed a slow response time for the numeric display, taking around 1-3 seconds to update the screen. The communication setup is currently configured to communicate with the SLC simulated in FactoryTalk Linx within the runtime application. I am using FactoryTalk View ME for this setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mechadruid</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While testing on my desk with a SLC 5/04 connected to a ProSoft AN-X4 and then to a PanelView Plus 7, I noticed that the response time for the numeric display was quite slow, taking about 1-3 seconds to update the screen. I am currently using FactoryTalk View ME, with communications set up to go to the SLC simulated in FactoryTalk Linx in the runtime application.

In my experience, older technologies such as RSLinx, RSView32, and PanelView/PV+/PV+6 tend to outperform any migration efforts. With the old tech, you had full control over update times for each tag and were directly connected to the network. 
On the other hand, with newer technology, you are dependent on registry keys in FTLinx and firmware of the new HMI and gateways. It is advisable to convert the PLC to an Ethernet-based processor for optimal performance with FTView.

While I have witnessed good performance with the ProSoft gateway over DH+ networks and excellent performance over RIO networks, there is a greater risk of issues arising, especially with firmware that is beyond your control. I had a positive experience with a technician from Tech Connect in the past and would recommend reaching out to them for additional tips and support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RedSoxFan3</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RedSoxFan3 mentioned that the older technology (RSLinx, RSView32, PanelView/PV+/PV+6) outperforms any migration process. With the old tech, you had complete control over update times for each tag and direct network connectivity. However, with the new technology, you are reliant on registry keys in FTLinx and the firmware of the new HMI and gateways. It is suggested to convert the PLC to an Ethernet-based processor for better performance in FTView. Although good performance has been observed with the Prosoft gateway over DH+ networks and excellent performance over RIO networks, there is a higher risk of things going wrong, particularly with firmware you cannot control. Contacting Tech Connect may provide more insights and tips for improving performance. Testing the new PanelView in the field with the Prosoft gateway will help determine if there are any improvements in response times. It may be beneficial to contact Rockwell regarding intentions to upgrade, and an update will be provided on the outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mechadruid</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>DH+ networks support up to speeds of 56k, but to enhance performance, it's essential to implement data compression techniques. Rather than grouping status bits into bit arrays or integer files, old PLC5 programs could condense them into a single integer array file. By consolidating HMI data into one input and one output packet, efficiency is improved.

One drawback of PCCC communication is the need to call array files with specific indexes and lengths, as the protocol lacks built-in data compression capabilities. To optimize data transfer, careful planning is required. For instance, when requesting data like N20:0 and N20:30, the server may decide whether to send multiple requests or a single request with a larger length.

Consolidating data into a compact integer array can significantly enhance performance by reducing the need for multiple read requests. This streamlined approach minimizes wasted data space and leads to more efficient data transfer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RedSoxFan3</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RedSoxFan3 claimed that DH+ networks are limited to 56k, but that statement is false. I have evidence to prove otherwise. Click to learn more about DH+ network capabilities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy disputed the claim, providing evidence to support the truth. See attachment 68895 for more details. This pertains to an SLC 5/04 controller, confirming the validity of the statement. The 1747-SN RIO adapter allows for configuration of up to 230K, with the exception of the controller itself.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RedSoxFan3</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Oh, I overlooked that crucial piece of information. I humbly accept my mistake.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RedSoxFan3 confirmed that the 1747-SN RIO adapter can support speeds of up to 230K for an SLC 5/04 controller. However, the controller itself does not support this speed. It appears that the manual being referenced may be outdated, so it is recommended to consult RSLogix 500 for accurate information. It is important to note that the slow screen update on FTVSE / PVP could be due to the display refresh rate or AN-X4 update rate. Another potential issue could be overloading the DH+ network with more than 2K words per second at 57.6K, which is common when dealing with multiple old PVs or continuous MSGs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ShawnTierney</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum discussion, ShawnTierney suggested referring to RSLogix 500 for information on supported speeds for Rockwell Automation controllers. He also noted that slow updates on FactoryTalk View SE (FTVSE) or PanelView Plus (PVP) screens may be attributed to display refresh rates and high DH+ utilization. Furthermore, a manual from 2008 mentions a built-in DH+ channel that supports high-speed communication at 57.6 Kbaud, 115.2 Kbaud, and 230.4 Kbaud.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RedSoxFan3</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>RedSoxFan3 recently discovered a manual dating back to 2008, which highlights the inclusion of a "built-in DH+ channel that supports high-speed communication at 57.6 Kbaud, 115.2 Kbaud, and 230.4 Kbaud." This is a valuable find for those interested in industrial communication protocols.

If you're using a PanelView Plus 7, it's important to note that using PVP firmware below version 8.1 is not recommended. For seamless connectivity with PLC-5 and SLC-500 systems, consider utilizing the Prosoft AN-X2 module for efficient shortcuts.

In a quick overview, Shawn demonstrates the process of connecting a PanelView Plus 7 to PLCs and SLCs via Data Highway Plus using the Prosoft AN-X4-AB-DHRIO. For more detailed information, check out the full tutorial on YouTube.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ShawnTierney</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I enhance communication for my PanelView Plus 7 using a Prosoft AN-X4 DH+ to Ethernet Gateway?
- To enhance communication for your PanelView Plus 7, you can set up a Prosoft AN-X4 DH+ to Ethernet Gateway. This device will allow you to bridge the communication between your SLC-500 through DH+ to the newer HMI with Ethernet capability.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What challenges might arise when configuring the Prosoft AN-X4 in FactoryTalk View for a runtime application?</h4>
<p class='text-muted'><strong>Answer:</strong> - Challenges in configuring the Prosoft AN-X4 in FactoryTalk View for a runtime application may include setting up the correct communication path, ensuring compatibility between devices, and configuring network settings properly. It is important to follow the manufacturer's guidelines and seek assistance if needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can you provide advice on successfully configuring the Prosoft AN-X4 for communication with the PanelView Plus 7?</h4>
<p class='text-muted'><strong>Answer:</strong> - When configuring the Prosoft AN-X4 for communication with the PanelView Plus 7, ensure that you have the necessary documentation and software tools to set up the communication path correctly. Follow the step-by-step instructions provided by Prosoft and make sure to test the setup thoroughly before deploying it in a production environment.</p>
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
