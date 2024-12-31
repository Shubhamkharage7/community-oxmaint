
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my linear topology network chain, I have 32 masters that I would like to use the AL1xxx series from IFM for. These masters support device level ring functionality, which could be beneficial. However, any IO-Link Master could also be utilized. The main challenge is the need for ease">
    <meta name="keywords" content="automatically assigning ip addresses, io-link masters, linear network chain, al1xxx series, ifm, device level ring functionality, io-link master, failed master replacement, laptop configuration, seamless communication, plc, hardware selection">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/automatically-assigning-ip-addresses-to-io-link-masters-in-a-linear-network-chain">
    <title>Automatically Assigning IP Addresses to IO-Link Masters in a Linear Network Chain | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Automatically Assigning IP Addresses to IO-Link Masters in a Linear Network Chain | Oxmaint Community">
    <meta property="og:description" content="In my linear topology network chain, I have 32 masters that I would like to use the AL1xxx series from IFM for. These masters support device level ring functionality, which could be beneficial. However, any IO-Link Master could also be utilized. The main challenge is the need for ease">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/automatically-assigning-ip-addresses-to-io-link-masters-in-a-linear-network-chain">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Automatically Assigning IP Addresses to IO-Link Masters in a Linear Network Chain | Oxmaint Community">
    <meta name="twitter:description" content="In my linear topology network chain, I have 32 masters that I would like to use the AL1xxx series from IFM for. These masters support device level ring functionality, which could be beneficial. However, any IO-Link Master could also be utilized. The main challenge is the need for ease">
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
        "@id": "https://community.oxmaint.com/discussion-forum/automatically-assigning-ip-addresses-to-io-link-masters-in-a-linear-network-chain"
      },
      "headline": "Automatically Assigning IP Addresses to IO-Link Masters in a Linear Network Chain",
      "description": "In my linear topology network chain, I have 32 masters that I would like to use the AL1xxx series from IFM for. These masters support device level ring functionality, which could be beneficial. However, any IO-Link Master could also be utilized. The main challenge is the need for ease",
      "author": {
        "@type": "Person",
        "name": "rabidplc"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-09",
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
                <h1 class="text-white">Automatically Assigning IP Addresses to IO-Link Masters in a Linear Network Chain</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rabidplc</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1457</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">106</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my linear topology network chain, I have 32 masters that I would like to use the AL1xxx series from IFM for. These masters support device level ring functionality, which could be beneficial. However, any IO-Link Master could also be utilized. The main challenge is the need for ease in replacing a failed master without the necessity of configuring it with a laptop. It is crucial for the IP address to be automatically assigned to ensure seamless communication with the PLC. Currently, there are no specifics in terms of hardware selection for PLC, network hardware, panel PC, programming languages, scripts, etc. How can this be achieved effectively?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing a DLR network, take advantage of the Stratix DLR DHCP feature to assign IP addresses based on the device's location in the network. In a star topology setup, consider implementing persistent DHCP assignments for each switch port for efficient network management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Contr_Conn's comment, suggesting the use of Stratix DLR DHCP feature to assign addresses based on device location within the DLR and enabling persistent DHCP per switch port in a star topology setup. This is an excellent solution for efficient network management. Are there alternative switches to Allen Bradley that offer similar capabilities?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rabidplc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named rabidplc inquired about alternative switches to Allen Bradley that have DLR supervisor capabilities. While the market doesn't offer many options, there is a Hirshmann product with similar features. However, it remains uncertain if it supports the specific functionality mentioned. Phoenix Contact previously had a SW7000 product with DLR supervisor capabilities, but it has been discontinued with limited functionality. Another option is a Taiwanese vendor offering the DVS-103I02C-DLR, which reportedly supports DLR supervisor and DHCP server features. However, it's unclear if it supports IP address assignment based on ring position. It's worth considering why an alternative supplier is sought for this specific DLR supervisor product.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I frequently utilize the IFM AL1xxxx module for seamless communication with Siemens S7-15xx PLCs through Profinet. When configuring the network layout correctly in TIA Portal, the PLC will automatically transfer all settings to the new master upon replacement. It's important to note that my expertise lies specifically in Profinet communication with S7-1500 PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chud</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AlfredoQuintero inquired about the need for an alternate supplier for the DLR supervisor product. They are interested in creating a more cost-effective option in comparison to the network switch. 

chud shared their experience with using the IFM AL1xxxx in conjunction with Siemens s7-15xx plcs and communicating via profinet. They mentioned that if the topology is properly designed in TIA Portal, the new master plc will receive all the settings when replacing the old one. However, this information is specific to profinet with s7-1500 plcs.

In terms of ethernet/ip PLCs, it is understood that the configuration will be sent when communication is established. The challenge lies in smoothly swapping out the device while automatically configuring the IP address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rabidplc</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Rabidplc has expressed interest in developing a cost-effective product for network switches. In the world of ethernet/ip PLCs, device configurations are typically sent upon initiating communication. However, the challenge lies in seamlessly replacing devices while automatically assigning IP addresses. One potential solution could be utilizing the Stratix switch, which acts as a DHCP server assigning IP addresses to MAC addresses within a specific network ring. To cut costs, static IP addresses may be necessary, requiring a procedure for assigning IPs to new armor blocks joining the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have devised a strategy to utilize CIP messaging in order to automatically assign the IP address from the PLC. This method involves utilizing Class 0xF5 Attribute 5 Instance 1 with a minimum of 22 8-bit elements in the instance. The automated process will monitor established connections and if any are lost, it will search for the default IP device connection. Once located, it will assign the missing device's IP address to that of the default device. For more information on this process, please visit the following link: https://software-dl.ti.com/mcu-plus...pter/group___e_i___a_p_i___a_d_p___t_c_p.html</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rabidplc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for information on the default IP connection for devices? Have you ever wondered what happens when a device receives an AutoIP address in the absence of a DHCP server? This scenario is uncommon for EIP devices. Are you concerned about potential conflicts when adding two devices simultaneously and whether they will both be assigned the same AutoIP address? And how does a controller's CIP message reach the default IP if it is on a different subnet?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The plan outlined by k4mR8E4RTXiBHpRDA23:26rabidplc involves using CIP messaging to automatically set the IP address on a PLC. By utilizing Class 0xf5, Attribute 5, and Instance 1 with at least 22 8-bit elements, the program will monitor connections and adjust the IP address of devices when needed. The process involves locating the default IP device connection and updating the missing device's IP address accordingly. To simplify this process, consider using Rockwell's DHCP/BOOT tool included in the RXLinx package to statically assign IP addresses to devices in a DLR ring. This method eliminates the need for a DHCP server function and ensures seamless IP address management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Contr_Conn inquired about the concept of a "default IP connection." They asked if a device would receive an AutoIP address if there is no DHCP server present, a scenario that is uncommon for EIP devices. They also questioned what would occur if two devices were added simultaneously and whether both would acquire the same AutoIP address.

In such cases, I would need to either pre-configure spare devices with a specified static IP address or utilize the default IP address, such as 192.168.1.250. The device would need to be on the same subnet for proper functionality. A device would be set up in the PLC with the designated address, and upon online connectivity, the code would detect this and assign a new address. It is advisable to avoid replacing two devices simultaneously to prevent address conflicts.

In the event that a controller CIP message needs to reach the "default IP" address located on a different subnet, proper configuration and routing settings would be necessary to ensure successful communication. Additionally, implementing a menu on the HMI for device replacement, where users can select the device being replaced, install the new device, and confirm the replacement, can streamline the replacement process effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rabidplc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently discovered the innovative Turck BEEP system, which offers the ability to isolate a series of devices and preserve their individual configurations. This cutting-edge technology can efficiently re-map these devices into a unified data structure and facilitate device replacement through DHCP. By connecting directly to Turck BEEP, the PLC streamlines communication and eliminates the need for direct interaction with the chain of devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rabidplc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One interesting product I recently came across is Turck BEEP, which boasts the ability to isolate a series of devices while maintaining their configurations. It consolidates them into a single data structure and facilitates device replacement through DHCP. By connecting the PLC to Turck BEEP, it effectively eliminates the need to interact directly with the chain of devices. I would love to learn more about this product - perhaps you could provide a link to its data sheet for further information?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to comply with this rule, it is essential to pre-configure spare devices with a specific static IP address or use the default IP address, such as 192.168.1.250, within the same subnet. This ensures that the end-user can easily set up the device with the required IP address.

Additionally, a device will be set up in the PLC with the specified address. Upon connecting to the network, the system will detect the online status and automatically assign a new address to the device. To avoid any confusion, it is recommended to replace devices one at a time, following a clockwise direction, and verifying the IP settings before proceeding with the next replacement. Failure to do so may result in incorrect assignments and disrupt the IO mapping. Consider implementing a menu on the HMI for device replacement, allowing users to select the device, install it, confirm the replacement, and ensure a smooth transition.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Alfredo Quintero inquired about a product that he was unfamiliar with and requested a link to the data sheet. To access the information, click on the following link: https://www.turck.us/static/media/downloads/BEEP_Reference_Manual.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rabidplc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The topic is quite intriguing, but I recall you mentioning the importance of having redundancy at the device level.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I ensure that IP addresses are automatically assigned to IO-Link Masters in a linear network chain to facilitate seamless communication with the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One way to achieve this is by utilizing IO-Link Masters that support device level ring functionality, such as the AL1xxx series from IFM. These masters can automatically assign IP addresses, making it easier to replace a failed master without manual configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Can any IO-Link Master be used for automatically assigning IP addresses in a linear network chain?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While any IO-Link Master could be utilized, it is recommended to choose models that specifically support automatic IP address assignment for ease of maintenance and replacement in the network chain.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What are the benefits of using IO-Link Masters with device level ring functionality in a linear network chain?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: IO-Link Masters with device level ring functionality provide benefits such as seamless communication, automatic IP address assignment, and easier replacement of failed masters without the need for manual configuration, enhancing the overall efficiency of the network chain.</p>
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
