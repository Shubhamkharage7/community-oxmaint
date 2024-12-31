
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="After successfully establishing a connection with a PLC, I activate the Enable BOOTP/DHCP option and receive a confirmation message stating that the command was successful. This change is reflected in RSLinx, where the device port configuration switches from manual to automatic IP settings via BOOTP. However, when attempting to">
    <meta name="keywords" content="troubleshooting, disable bootp button, bootp server, plc connection, enable bootp/dhcp, rslinx, manual ip settings, automatic ip settings, port configuration, dhcp disable issue, network configuration, configuration changes, warning messages">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-the-ineffective-disable-bootp-button-on-bootp-server">
    <title>Troubleshooting the Ineffective Disable BootP Button on BootP Server | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting the Ineffective Disable BootP Button on BootP Server | Oxmaint Community">
    <meta property="og:description" content="After successfully establishing a connection with a PLC, I activate the Enable BOOTP/DHCP option and receive a confirmation message stating that the command was successful. This change is reflected in RSLinx, where the device port configuration switches from manual to automatic IP settings via BOOTP. However, when attempting to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-the-ineffective-disable-bootp-button-on-bootp-server">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting the Ineffective Disable BootP Button on BootP Server | Oxmaint Community">
    <meta name="twitter:description" content="After successfully establishing a connection with a PLC, I activate the Enable BOOTP/DHCP option and receive a confirmation message stating that the command was successful. This change is reflected in RSLinx, where the device port configuration switches from manual to automatic IP settings via BOOTP. However, when attempting to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-the-ineffective-disable-bootp-button-on-bootp-server"
      },
      "headline": "Troubleshooting the Ineffective Disable BootP Button on BootP Server",
      "description": "After successfully establishing a connection with a PLC, I activate the Enable BOOTP/DHCP option and receive a confirmation message stating that the command was successful. This change is reflected in RSLinx, where the device port configuration switches from manual to automatic IP settings via BOOTP. However, when attempting to",
      "author": {
        "@type": "Person",
        "name": "unsaint32"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-04",
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
                <h1 class="text-white">Troubleshooting the Ineffective Disable BootP Button on BootP Server</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>unsaint32</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>25 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">16736</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">45</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>After successfully establishing a connection with a PLC, I activate the "Enable BOOTP/DHCP" option and receive a confirmation message stating that the command was successful. This change is reflected in RSLinx, where the device port configuration switches from manual to automatic IP settings via BOOTP. However, when attempting to disable BOOTP/DHCP, the process does not take effect. There is no indication of any change, warning, or alteration in port configuration. Why is this happening and how can it be resolved? Your assistance is appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>unsaint32 reported that enabling Bootp/DHCP was successful. After establishing a connection with a PLC, clicking on "Enable BOOTP/DHCP" resulted in a message confirming the successful command execution. The RSLinx displayed a change in the device port configuration from manual IP settings to automatic settings using BOOTP.

However, disabling Bootp/DHCP did not produce any noticeable changes. No warnings or port configuration adjustments were observed. This raised the question of why it did not work as expected. Your assistance on this matter is greatly appreciated.

It is worth noting that BOOTP/DHCP is enabled by default on all modules. Once an IP address is assigned, it remains in place until the power is reset. In the event of a power cycle with BOOTP enabled, the IP address must be reassigned either manually or through a "relation list". To retain the assigned IP settings, it is necessary to "Disable BOOTP/DHCP".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ironically, I faced the same problem earlier this morning. To resolve it, I simply right-clicked on the relationship in the lower box and chose to Disable Bootp from the dropdown menu that appeared. This method worked perfectly for me. The reason why it didn't work using a different approach remains a mystery to me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JZerb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JZerb shared a tip for resolving a common issue with relations by disabling Bootp. Interestingly, I encountered the same problem this morning and found success by right-clicking on the relation in the lower box and selecting "Disable Bootp" from the drop-down menu that appears. It worked perfectly for me using this method. The reason why it doesn't work the other way around remains a mystery.

Enabling Bootp is only necessary if you have previously disabled it. Bootp is the default power-up mode, unless explicitly disabled. The decision is straightforward - if you prefer to manually assign modules every power-up, or automate the process using a Bootp/DHCP server, then you should enable Bootp. If you want the module to retain its assigned IP settings, then simply disable Bootp once you have configured the IP settings desired.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In configuring network settings, the enable/disable buttons typically control DHCP/BootP assignment for the server, not the physical device itself. For example, enabling a BootP server instance for a specific MAC address assigns it an address that remains even after power cycles or changes via RsLinx, unless disabled. It is advisable to also disable BootP on the PLC through RsLinx. While I am not an expert in BootP configuration, I usually prefer setting my IP address over serial connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>labeledas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using the enable/disable buttons, keep in mind that they are not just for server DHCP/Bootp assignments, but also for the physical device itself. For example, you can enable a BootP server instance for a specific MAC address and assign it an IP address. This assigned address will persist even after a power cycle or changes made via RsLinx, unless you click the disable button. It's important to note that you may still need to disable BootP on the PLC via RsLinx. While I personally prefer setting my IP over serial communication, it's good to know the options available. The buttons actually send essential commands to the remote device to ensure it remembers its IP settings (Disable BOOTP) or enters BOOTP mode (Enable BOOTP). So, be on the lookout for a "Command Successful" response to confirm your changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>daba explained that the buttons on the device are used to send essential commands to the remote device, either to retain its IP settings (Disable BOOTP) or to activate BOOTP mode (Enable BOOTP). This is why you receive a "Command Successful" or another response. It is useful information to keep in mind, especially for those who primarily use serial communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>labeledas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As mentioned before, I usually rely on serial connections for configuration. Whether you choose to go with a serial connection or another method, the process to access the "Port Configuration" of a module remains the same. This typically involves setting the IP address, DNS addresses, and more, then selecting the option to "Disable BOOTP/DHCP" to save the settings. Essentially, by doing this, you are manually configuring the module instead of relying on the BOOTP application buttons.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the original poster (OP) was trying to deactivate BOOTP using the designated disable BOOTP function, but encountered difficulty as it did not provide a success message. However, clicking on the enable BOOTP button did result in a successful command message. This issue was similar to one I faced earlier today, where I followed the same steps to successfully disable BOOTP and receive the desired command confirmation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JZerb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JZerb pointed out that the OP was struggling with disabling BOOTP using the provided button, as it was not showing a successful command message. However, clicking on the ENABLE BOOTP button did result in a successful command message. This issue resonated with me as I also encountered the same problem this morning and had to take similar steps to ensure a successful DISABLE BOOTP command message.

From my understanding, disabling Bootp or DHCP does not produce any changes when the "Disable BOOTP/DHCP" button is clicked. There is no indication of a change, warning, or port configuration alteration. Disabling BOOTP simply instructs the module to boot up next time with the current configuration in memory.

It is worth noting that the success or failure of the button command was not mentioned in the original post. In some cases, certain modules may have difficulties with the RA BOOTP program, requiring alternative methods to disable BOOTP such as serial attachment or web-page configuration. Fortunately, all A-B modules I have encountered have successfully accepted the Disable BOOTP command.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>George discussed the issue about enabling and disabling BOOTP/DHCP on a device. It seems that the user unsaint32 has encountered some difficulties with the process. Their attempts to disable BOOTP/DHCP did not seem to work as expected, as there was no change observed in the port configuration. 

unsaint32 was successful in enabling BOOTP/DHCP on the device, but faced issues when trying to disable it. This inconsistency in the functionality of the BOOTP/DHCP Server utility software raises the question of why the disable command did not work properly.

To troubleshoot, George suggested right-clicking on the device's MAC address in the Relation List or navigating to the port configuration settings in RSLinx Classic to manually disable BOOTP/DHCP. If these steps do not work, further investigation into the device's catalog number may be necessary.

George also pointed out that different PC environments can impact the performance of software utilities like BOOTP/DHCP Server. It is essential to consider these factors when troubleshooting issues with the software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geospark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A common issue often encountered when using newer versions of Rockwell software is the "Disable Bootp button not working." Many users have reported experiencing this problem when trying to disable the Bootp feature. It is important to note that while Rockwell software is widely used, it is not without its flaws.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have never had success using the buttons to turn BOOTP on or off. However, the enable/disable BOOTP menu item always works reliably. It makes me question if the developer overlooked attaching the code to those buttons in this specific version of the BOOTP server.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF reported that they have never had success using the buttons to enable or disable BOOTP. However, utilizing the menu item to enable or disable BOOTP consistently works for them. They questioned if the developer of this version of the BOOTP server may have overlooked attaching the code to those buttons. Can you please specify the version you are currently using? ASF's version is BOOTP/DHCP Server Version 2.3.2.0, and they have confirmed that the buttons are functioning properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I apologize for the delay in responding and for not clearly conveying that my attempt to disable Bootp was unsuccessful. After receiving feedback, I successfully disabled Bootp by accessing the drop-down menu and right-clicking on the relevant option. This change was reflected in the BootP server software, and my RS Linx port configuration was updated. I have learned that the disable-bootp button may not always work as intended. My version of RsLinx is 3.81.00 CPR 9 SR 8.1. Many thanks to everyone for sharing their insights and knowledge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>unsaint32</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When asked about their version, daba replied that they are using BOOTP/DHCP Server Version 2.3.2.0. The buttons were functioning properly before, but after upgrading to v3.01.00, they stopped working. It seems to be the same issue the original poster (OP) is facing. Despite multiple attempts to set an IP and disable BOOTP/DHCP using the button, it was unsuccessful. However, disabling BOOTP/DHCP through the Tools menu worked instantly. Personally, daba had never needed to enable BOOTP/DHCP from the buttons or Tools menu, but it seems to function correctly, while the "Disable" button seems to have a coding issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>UPDATE: ASF's response came before mine. Keep reading for important information. Unsaint32 mentioned that disabling BootP did not work as expected. There's no need for apologies as Unsaint32's post was clear, titled "BootP server Disable Bootp button not working." However, it's understandable how confusion can arise. A simple explanation that the device was not new and that BOOTP/DHCP was already disabled would have clarified the situation. 

I must apologize for calling out Unsaint32 on not providing device details. Upon reviewing the attached screenshot on a larger monitor, it's clear that there was enough information. Unsaint32 later shared that disabling BootP from the drop-down menu worked perfectly. This success message appeared in the BootP server software. 

After reviewing the screenshot and noting the RSLinx Classic version (v3.81), I recalled details from the release notes. RSLinx Classic v3.81 introduces the "BootP DHCP EtherNet/IP Commissioning Tool." The tool's functionality may differ between versions. Bit_Bucket_07 mentioned historical issues with the "disable-bootp" button, relevant to older versions. For newer versions like Unsaint32's, there's a known issue with the enable and disable buttons. Rockwell suggests using the menu option instead.

It's important to distinguish between older and newer versions of the software regarding the functionality of the BootP tool. While older versions may have issues for various external reasons, the newer versions have acknowledged issues with the buttons themselves. Unsaint32 expressed gratitude for the insights provided. I hope this adds to your understanding. 

Best regards, George</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geospark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's amusing to me for a few reasons. Firstly, RA openly admitting that the issue is broken. Secondly, the fact that they have acknowledged the issue but have yet to fix it for approximately a year - a relatively simple fix. Lastly, the frustration of needing a TechConnect contract just to access a technote revealing a simple oversight in attaching code to a button.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While it may be entertaining, I believe it's important to clarify your earlier statement to avoid confusion and uphold the validity of my argument. Specifically, you mentioned that the buttons for enabling or disabling BOOTP have never worked for you when using the newer BootP DHCP EtherNet/IP Commissioning Tool v3.01, as opposed to the older versions like BootP DHCP Server up to v2.3.2.

It appears that the functionality of these buttons worked for you in the past with the older version, but not with the current version. This aligns with the acknowledgment from RA that there may be a known issue with the buttons in the newer version of the utility.

It's crucial to note that this issue seems to be specific to the newer version of the software, as opposed to a longstanding problem with all versions of the software. While there are potential external factors that could cause similar issues with older versions, it's clear that the focus here is on the "BootP DHCP EtherNet/IP Commissioning Tool."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geospark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello George, I completely agree with your observation. In previous versions of the BOOTP tool, the button consistently executed the necessary command. The success of the command in enabling or disabling BOOTP/DHCP ultimately depends on various factors like correct IP settings, disabled interfering network adapters, and ensuring a PLC has not already taken control of the connection. Despite these considerations, the button always made an effort to send the command when clicked. However, in the latest version (v3.01), the button appears to not send the command or show any indication of attempting to do so. Consequently, it does not achieve the desired outcome of enabling or disabling BOOTP/DHCP. All factors remaining constant, the menu option should still function correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I wanted to add that I encountered a problem with the newest version, V3.02, today. Thanks to JZerb's suggestion in the right-click menu, I was able to resolve it. I even used wire-sharking and found that the button is often not working properly, failing to generate any command. However, it did work a couple of times for me (the only way to disable DHCP on SMC EX260 valve banks). This suggests that the issue is more complex than just a missing method linked to the button click. It seems that there is a deeper problem with the functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CapinWinky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CapinWinky mentioned that the situation is even more escalated than expected. It seems like RA has a unique way of handling problems - why look for a solution when you can create a fix?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geospark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To be honest, I purchased one of these devices last year and have not had to deal with the headaches of RA's BootP nightmare since. If you're looking for an Ethernet IP Address Explorer with DHCP and BootP server capabilities, check out the product at https://www.theautomationstore.com/ethernet-ip-address-explorer-dhcp-and-bootp-server/.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gomez_</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF mentioned that they have encountered issues with the buttons for enabling or disabling BOOTP settings. Despite the buttons not functioning, using the corresponding menu item always works reliably. It seems like the coder may have overlooked linking the code to the disable button. Despite multiple attempts to troubleshoot this issue, the dropdown menu option consistently works while the button does not. The enable button, on the other hand, works without any issues. After recently troubleshooting this problem again, ASF felt compelled to share their experience on the forum.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tomo453</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Daba stated that ENABLING BOOTP is not necessary if it has not been DISABLED. By default, BOOTP is the power-up mode unless it has been disabled. If you prefer to manually or automatically assign modules every power-up using a BOOTP/DHCP server, then enable it. However, if you want the module to retain its assigned IP settings, disable BOOTP after setting the desired IP address.

Hello, a few weeks ago, I attempted to use Boot DHCP to allocate an IP address to a Panel View Plus HMI. After identifying the MAC address, I assigned the IP address as usual. However, when I tried to disable DHCP, I encountered an error message indicating that the operation was unsuccessful. Can you explain why this happened? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>edrHeihel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent question, edrHeihel asked about the issue of disabling Bootp after assigning an IP address to a Panel View Plus HMI. When attempting to disable DHCP, an error message indicating the operation was unsuccessful was received. This can occur when the device assigned an IP address becomes controlled by another entity, such as a PLC communicating with it. For Panelview Plus HMIs, it is recommended to utilize the configuration mode on the device itself to adjust network settings. It is uncommon to use bootp on Panelview Plus devices based on personal experience with numerous installations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why is the "Disable BOOTP/DHCP" button not working on the BootP server?
- The issue could be due to a configuration error or a technical glitch in the server settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the ineffective disable BOOTP button on the BootP server?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can try restarting the server, checking the network connections, verifying the settings, and updating the firmware to resolve the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps can be taken to ensure successful activation and deactivation of BOOTP/DHCP settings?</h4>
<p class='text-muted'><strong>Answer:</strong> - Double-check the server settings, ensure proper communication with the PLC, and troubleshoot any network issues that may be affecting the configuration changes.</p>
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
