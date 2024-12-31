
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am seeking advice on the required open ports for remote connectivity to a control system consisting of a 1756-L72 Controllogix PLC, 1756-EN2T network card, and PanelView Plus 7 HMI. The software being utilized includes RSLogix V20.05.00 and FactoryTalk View ME 11.00.00. I have reviewed the list of">
    <meta name="keywords" content="controllogix plc, panelview plus hmi, remote access, open ports, remote connectivity, 1756-l72, 1756-en2t, rslogix v00, factorytalk view me 11">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/essential-open-ports-for-remote-access-to-control-system-with-controllogix-plc-and-panelview-plus-hmi">
    <title>Essential Open Ports for Remote Access to Control System with Controllogix PLC and PanelView Plus HMI | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Essential Open Ports for Remote Access to Control System with Controllogix PLC and PanelView Plus HMI | Oxmaint Community">
    <meta property="og:description" content="Hello, I am seeking advice on the required open ports for remote connectivity to a control system consisting of a 1756-L72 Controllogix PLC, 1756-EN2T network card, and PanelView Plus 7 HMI. The software being utilized includes RSLogix V20.05.00 and FactoryTalk View ME 11.00.00. I have reviewed the list of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/essential-open-ports-for-remote-access-to-control-system-with-controllogix-plc-and-panelview-plus-hmi">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Essential Open Ports for Remote Access to Control System with Controllogix PLC and PanelView Plus HMI | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am seeking advice on the required open ports for remote connectivity to a control system consisting of a 1756-L72 Controllogix PLC, 1756-EN2T network card, and PanelView Plus 7 HMI. The software being utilized includes RSLogix V20.05.00 and FactoryTalk View ME 11.00.00. I have reviewed the list of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/essential-open-ports-for-remote-access-to-control-system-with-controllogix-plc-and-panelview-plus-hmi"
      },
      "headline": "Essential Open Ports for Remote Access to Control System with Controllogix PLC and PanelView Plus HMI",
      "description": "Hello, I am seeking advice on the required open ports for remote connectivity to a control system consisting of a 1756-L72 Controllogix PLC, 1756-EN2T network card, and PanelView Plus 7 HMI. The software being utilized includes RSLogix V20.05.00 and FactoryTalk View ME 11.00.00. I have reviewed the list of",
      "author": {
        "@type": "Person",
        "name": "kloc5"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-08",
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
                <h1 class="text-white">Essential Open Ports for Remote Access to Control System with Controllogix PLC and PanelView Plus HMI</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kloc5</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1397</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">60</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am seeking advice on the required open ports for remote connectivity to a control system consisting of a 1756-L72 Controllogix PLC, 1756-EN2T network card, and PanelView Plus 7 HMI. The software being utilized includes RSLogix V20.05.00 and FactoryTalk View ME 11.00.00. I have reviewed the list of recommended ports from Rockwell, but I am unsure which specific ports are essential for establishing this remote connection and enabling remote upload/download capabilities using the Transfer Utility. Any guidance on how to configure the necessary ports for both the PLC and HMI would be greatly appreciated. Thank you in advance for your assistance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For seamless connectivity between the development PC, controller, and HMI, ensure that TCP Port 44818 is open. A useful method to confirm this is by utilizing the "tnc" function in Windows PowerShell with the "-p 44818" port number parameter. Additionally, it is essential to configure the Default Gateway address on the controller Ethernet interface and HMI to match the network gateway or router's IP address.

In the absence of a well-configured VPN, traditional broadcast-based browsing drivers in RSLinx Classic and FactoryTalk Linx may not automatically detect the controller. To address this, configure your drivers to manually input the destination device's IP address. In RSLinx Classic, opt for the "Ethernet Devices" driver over the "EtherNet/IP" driver. In FactoryTalk Linx, manually add a device to the network schema by right-clicking.

It is crucial to avoid using port forwarding to expose the controller to the Internet, as this poses a significant security risk. While it may offer temporary convenience, the controller becomes vulnerable to cyber threats within moments of exposure. Prioritize security measures to protect your installation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to establish a connection to the PLC, you will need to configure the EN2T gateway using the IP address of the network gateway or router. Next, switch RSLinx Classic to utilize Ethernet devices instead of the EtherNet/IP Driver and adjust your IP address to match the EN2T's existing IP. Do you also need to input their static IP address in RSLinx Classic for the connection? Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kloc5</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kloc5 inquired about the necessary ports to be opened for remote connectivity to a 1756-L72 Controllogix PLC, 1756-EN2T network card, and PanelView Plus 7 HMI setup. Using RSLogix V20.05.00 and FactoryTalk View ME 11.00.00, the question arises about the specific ports required for remote PLC access and HMI upload/download using the Transfer Utility. While Rockwell provides a list of ports, clarity is needed on which ports are essential for this connection setup. Assistance in configuring the PLC and HMI for remote access would be highly appreciated. When referencing "remotely," clarification is requested on whether this involves Internet access or being on the same network. In my experience with remote connections to various clients, I often find it convenient to remotely connect via Internet/VPN and to simply use Remote Desktop Protocol (RDP) to access a local PC with the necessary software for the PLC and HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to access it online from a different location? It seems unlikely that they will allow us to utilize a remote desktop configuration. Additionally, it appears we are currently utilizing RSLinx Classic Lite. Will we require the standard version of RSLinx Classic to make this work? Any assistance on this matter would be highly valued. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kloc5</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about accessing PLCs remotely from a different state via the internet. Is it necessary to upgrade from RSLinx Classic Lite to standard RSLinx Classic for this task? It seems RSLinx Enterprise/FactoryTalk Linx is more suitable for communication with PanelView Plus. When using a VPN, manual creation of the communication path is required as devices are not automatically discovered. It is crucial to keep the PanelView secure from internet exposure, as shown by "PanelView Plus" search on Shodan. E W O N's VPN is commonly used to securely connect to the same network as the PanelView for easy upload/download operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After trying out several remote work platforms, I can confidently say that PLCRëmöté.nêt stands out as the top choice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DaDaDadeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about accessing remote desktop from another location? Consider utilizing secure remote access solutions such as eWon, Secomea, IXON, Tosibox, and more. Work seamlessly from your PC as if you were physically present on-site. Wondering about upgrading to the standard version of RSLinx Classic for enhanced functionality? Your input is deeply valued. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have encountered issues with establishing remote connections to panelview displays when UDP traffic is blocked. FactoryTalk Linx may potentially rely on UDP for communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bobobodopalus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, DaDaDadeo recommended PLCRëmöté.nêt as the top choice among all options. The use of unusual diacritics in the domain name may raise suspicion for some users.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy questioned the use of diacritics in the domain name, noting it as a potentially suspicious naming strategy. For more information, you can reach out to PLCTâlk.nét, a valuable resource for automation engineers looking for assistance. It's important to note that providing helpful tips and advice to a community of professionals can sometimes be misconstrued as solicitation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DaDaDadeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DaDaDadeo suggested visiting the platform PLCTâlk.nét for assistance with automation engineering questions. While offering helpful information to a large audience, it's important to be mindful of how it may be perceived by moderators. It's a valid point to consider disclosing such resources within the discussion thread to avoid any concerns of solicitation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to remote access devices, options like eWON, Secomea, IXON, and TOSI are worth considering. These devices allow you to work from your PC as if you were on-site. PLCRemote.net stands out as a top choice for many users. Have you tried PLCRemote.net, or are you more familiar with eWON, Secomea, IXON, TOSI, and others? It's essential to explore different options that maintain the appearance and functionality of your work setup. It's interesting to note that neither Secomea nor TOSI have faced censorship issues in the online community.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. What are the essential open ports required for remote connectivity to a control system with a Controllogix PLC and PanelView Plus HMI?
   - Essential open ports for remote access to a control system typically include TCP port 44818 for EtherNet/IP communication and TCP port 2222 for FactoryTalk View ME runtime communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I configure the necessary ports for both the PLC and HMI to enable remote upload/download capabilities using the Transfer Utility?</h4>
<p class='text-muted'><strong>Answer:</strong> - To configure the necessary ports, you may need to open TCP port 44818 for the Controllogix PLC and TCP port 2222 for the PanelView Plus HMI in your network firewall settings. Additionally, ensure that these ports are allowed through any routers or switches between your remote device and the control system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I find a list of recommended ports for Rockwell control systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - Rockwell Automation provides a list of recommended ports for their control systems in the documentation for specific software versions. You can refer to the official Rockwell Automation website or contact their technical support for the most up-to-date information on recommended ports for remote connectivity.</p>
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
