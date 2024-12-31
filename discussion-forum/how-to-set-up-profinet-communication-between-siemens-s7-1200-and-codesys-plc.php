
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on setting up communication over Profinet between a Siemens S7-1200 PLC as an IO device and a Codesys PLC as an IO controller. Unfortunately, I am encountering an error regarding IO device failure. I would greatly appreciate any assistance on how to successfully">
    <meta name="keywords" content="profinet communication setup, siemens s7-1200 plc, codesys plc, profinet io device, profinet io controller, troubleshooting profinet">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-set-up-profinet-communication-between-siemens-s7-1200-and-codesys-plc">
    <title>How to Set up Profinet Communication between Siemens S7-1200 and Codesys PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Set up Profinet Communication between Siemens S7-1200 and Codesys PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on setting up communication over Profinet between a Siemens S7-1200 PLC as an IO device and a Codesys PLC as an IO controller. Unfortunately, I am encountering an error regarding IO device failure. I would greatly appreciate any assistance on how to successfully">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-set-up-profinet-communication-between-siemens-s7-1200-and-codesys-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Set up Profinet Communication between Siemens S7-1200 and Codesys PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on setting up communication over Profinet between a Siemens S7-1200 PLC as an IO device and a Codesys PLC as an IO controller. Unfortunately, I am encountering an error regarding IO device failure. I would greatly appreciate any assistance on how to successfully">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-set-up-profinet-communication-between-siemens-s7-1200-and-codesys-plc"
      },
      "headline": "How to Set up Profinet Communication between Siemens S7-1200 and Codesys PLC",
      "description": "Hello everyone, I am currently working on setting up communication over Profinet between a Siemens S7-1200 PLC as an IO device and a Codesys PLC as an IO controller. Unfortunately, I am encountering an error regarding IO device failure. I would greatly appreciate any assistance on how to successfully",
      "author": {
        "@type": "Person",
        "name": "raghu_k"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-10",
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
                <h1 class="text-white">How to Set up Profinet Communication between Siemens S7-1200 and Codesys PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>43 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4099</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">220</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on setting up communication over Profinet between a Siemens S7-1200 PLC as an IO device and a Codesys PLC as an IO controller. Unfortunately, I am encountering an error regarding IO device failure. I would greatly appreciate any assistance on how to successfully establish this communication. Thank you in advance for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Share images showcasing your progress thus far.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Raghu_k inquired about establishing communication over Profinet between a Siemens S7-1200 PLC as an IO device and a Codesys PLC as an IO controller. Despite encountering an IO device failure error, Raghu_k seeks assistance in the communication setup process.
To resolve this issue, it is recommended to export the GSD/GSDML file from TIA Portal and import it into the Codesys IO Controller project. This action can help troubleshoot any configuration errors on the IO Controller side.
Ensure that the Profinet settings of the S7-1200 controller are correctly configured:
- Access the PROFINET interface in the controller properties and navigate to Operating Mode settings.
- Confirm that the Operating Mode is set to "IO device."
- Establish transfer areas (data map) as needed.
- Look for the Export button in the settings to obtain the GSD file.
Additionally, it is crucial to adjust the Real Time settings in the Operating Mode. Specifically, set the "IO Controllers outside the project with access to this I-Device" option to 1 or more to allow connections to IO Controllers outside the TIA Portal project.
According to the TIA Portal help file, when configuring shared devices, it is important to set the number of project-external IO controllers at the PROFINET interface for proper communication load calculation and update times.
Remember that the maximum permissible number of IO controllers for the shared device can be found in the GSD file of the device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the responses. It is recommended to ensure that the S7-1200 controller Profinet settings are correctly configured for optimal performance. This can be achieved by navigating to the controller properties and accessing the PROFINET interface, specifically the Operating Mode settings. Make sure to set the Operating Mode to "IO device" and configure the transfer areas (data map) accordingly. Additionally, don't forget to use the Export button to obtain the GSD file.

In the Real Time settings of Operating Mode, there is an option to enable "IO Controllers outside the project with access to this I-Device". It is crucial to set this option to 1 or more to allow connections to IO Controllers outside the TIA Portal project.

Despite following these steps, if you encounter the IO device failure error and the PLC is in an error state, please refer to the attached screenshots for clarity. Furthermore, after importing the GSD file from Siemens TIA Portal, you may encounter an RPC Blocked error on the IO controller side, potentially due to firewall settings. The attached screenshots provide more information on this issue.

If you are still experiencing communication issues, please let us know the additional configurations required for successful communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Raghu_k, as CoDeSys is the Profinet controller, it is important to ensure that the configuration is set up correctly on the controller's side and to investigate any error messages being reported by CoDeSys. If possible, connecting to CoDeSys using a VNC client to run Wireshark and obtain traces could offer further clarity and insights into the issue you are experiencing. This detailed analysis of the configuration and error reporting in CoDeSys will help in troubleshooting the problem effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kdcui suggested referring to the TIA Portal help file for valuable insights on Shared Devices. Hi kdcui, could you please clarify why you recommended raghu_k to explore the "Shared Devices" documentation? The specific requirement for this scenario involves utilizing the S7-1200 as an "i-device" and CoDeSys as a Profinet IO controller. It is important to note that the S7-1200 and CoDeSys will not function simultaneously as controllers, where a third device would need to communicate with both. If there are any misunderstandings, please let me know.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
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
            <p>AlfredoQuintero stated that in order to resolve the issue with the Profinet controller in CoDeSys, it is important to check the configuration on the controller side and identify any error messages. Connecting to CoDeSys using a VNC client and running Wireshark to capture traces can offer valuable insights into the problem. Upon importing the GSDML file into the IO controller (i.e. CoDeSys), there is an issue with scanning the IO device resulting in an "RPC Blocked (Firewall?)" error message. This error does not provide clear guidance on what needs to be addressed. Referencing the screenshots provided in the thread can help in diagnosing the problem with the IO device configuration. Wireshark can be used to further investigate, but preliminary tests, such as pinging the devices using their manually set IP addresses, have been successful.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unfamiliar with this specific CoDeSys error. Is it related to Windows, Linux, or Raspberry Pi CoDeSys? If it pertains to Windows, you may need to establish a firewall rule. This issue appears to be within the operating system's realm, rather than the CoDeSys engineering tool or GSDML. It seems to be operating at a lower level than those components.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently using Codesys software on a Windows operating system. Can you explain in more detail what you mean by setting up a rule for the firewall? This will help me better understand how to configure the firewall settings for optimal security.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Alfredo Quintero inquired about a suggestion to explore the "Shared Devices" documentation for raghu_k. However, the specific requirement in this scenario is to utilize the Siemens S7-1200 as an "i-device" with CoDeSys serving as a Profinet IO controller. It is important to note that the S7-1200 and CoDeSys will not function as controllers simultaneously, with a third device needing to communicate with both. There seems to be a potential misunderstanding regarding the issue at hand. When using the S7 PLC as an IO Device to connect to an external IO Controller, certain settings need to be adjusted. If the setting is not configured to "1" or higher, the IO Controller (such as the CoDeSys controller) may not establish a connection successfully outside the project. For further reference, please refer to the provided screenshots.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that the problem lies in the network setup rather than the PLC configuration. Before making any changes to firewall settings, it is advisable to conduct basic network troubleshooting steps to diagnose the issue effectively. Here are a few steps to follow: 

1. Check if you can successfully ping the PLC from the CodeSys system.
2. Consider connecting the PLC directly to the CodeSys machine with a network cable to isolate any issues caused by network switches.
3. Instead of immediately adjusting firewall rules in Windows, try temporarily disabling the firewall to verify if it is indeed the source of the problem. This will help in identifying and resolving any network connectivity issues efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing the S7 PLC as an IO Device to link up with an external IO Controller, specific settings come into play. Take a look at the screenshots provided below to gain a better understanding. If this setting is not configured to 1 or higher, the IO Controller, like the CodeSyS controller, may encounter connection issues outside the project. In my scenario, I've already adjusted the setting to either 1 or 2, as illustrated in the image attached.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kdcui mentioned that the issue at hand appears to be related to networking rather than PLC configuration. Before making changes to firewall settings, it is recommended to conduct basic network troubleshooting. This includes: 1. Checking if you can successfully ping the PLC from the CodeSys system. 2. Consider directly connecting the PLC to the CodeSys machine with a network cable to bypass any potential issues caused by network switches. 3. Instead of immediately adjusting firewall rules, try temporarily disabling the firewall to ascertain if it is indeed the cause of the problem. In testing, the ability to ping the PLC from CodeSys and vice versa was confirmed, but directly connecting the devices was not possible. Additionally, disabling the firewall temporarily did not resolve the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you provide details on the network topology connecting the PLC and the Codesys machine? Are there any managed switches or routers in the setup? Additionally, I came across a document discussing the RPC Blocked error in Codesys during a Google search. Did you restart the computer after disabling the Windows firewall before attempting again?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kdcui inquired about the network topology connecting the PLC and the Codesys machine. Are there any managed switches or routers in between? Additionally, a quick search revealed a helpful document discussing the RPC Blocked error in Codesys. After disabling the Windows firewall, it is recommended to reboot the computer before attempting again. Thank you for the suggestion; I will reboot the computer after disabling the firewall.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>raghu_k mentioned that they have not attempted to restart the computer after turning off the firewall. They plan on trying this solution. If this does not resolve the issue, there may be a device blocking the network traffic between the systems. It is important to ensure that both devices are connected to the same network. Additionally, if they are on different networks, there may be a managed switch or router causing interference. Improper configuration of the switch or router could impact the transmission of PROFINET IO data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kdcui pointed out that if troubleshooting doesn't resolve the issue, there may be a device obstructing traffic between the systems. It's important to ensure that both devices are on the same network to avoid any interference from managed switches or routers. Improper configuration of these devices could disrupt PROFINET IO data transmission. In this case, both devices are on the same subnet (192.168.2.2 and 192.168.2.22) and connected to a Siemens PLC using Ethernet cables. Siemens TIA Portal and CODESYS are utilized on separate computer systems. The successful ping test confirms that the connection is functioning properly, as depicted in the attached image showing the extended port hub.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this scenario, both devices are located on the same 192.168.2.0 subnet, with one device having the IP address 192.168.2.2 and the other device at 192.168.2.22. Siemens TIA Portal and CODESYS software are installed on separate computer systems. These devices are connected to a Siemens PLC using Ethernet cables, with an extended port hub highlighted in the provided image. The connection between the systems has been confirmed through successful pinging tests. Are there any additional network switches between the PLC and CODESYS controller, or is there only one switch housed in the electrical cabinet? Furthermore, is the network switch in the cabinet a managed switch?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kdcui inquired about the presence of any additional network switches between the PLC and the Codesys controller. Is there only one switch housed in the electrical cabinet, and is it a managed switch? Currently, I am utilizing a virtual Codesys controller on a computer instead of a physical controller for HMI purposes. Please let me know if this explanation is unclear, and I will provide further clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>raghu_k mentioned that there is a single switch connecting the PLC and the Codesys controller. Currently, instead of using a physical Codesys controller, only the software on the computer (i.e. Virtual Codesys controller) is being utilized. The Codesys controller is required for HMI purposes. If this setup is unclear, please let me know so I can provide a better explanation.

Is the switch in the cabinet being managed? Do you have information on the make and model of the switch? Assuming the GSD was properly imported into Codesys from the S7 PLC, it seems like there may be an issue with the Codesys computer. Windows settings are often a common source of problems. 

Are there any other applications installed on the Codesys computer by your IT team? These additional applications could potentially interfere with communications, along with Windows Firewall.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>raghu_k noted that being able to successfully ping both systems indicates a strong connection. However, networking involves more than just ensuring PINGs go through. Certain switches, such as Cisco switches, may default to blocking PN traffic due to their use of VLAN0 for prioritizing PN frames. Fortunately, this issue can often be resolved by enabling a VOIP setting. Additionally, errors can arise if there is a discrepancy between the Controller and Device PN configurations. To avoid these issues, it is recommended to opt for the controller informing the device of the parameters. Failure to do so can lead to complications, especially when dealing with Siemens PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the accurate name properly configured in the network controllers setup?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to networking, it's important to consider more than just getting PINGs through. Certain switches, such as those from Cisco, may block PN traffic by default due to the use of VLAN0 to prioritize PN frames. This issue can typically be resolved by enabling a VOIP setting. Another common source of errors is a mismatch between the Controller and Device PN settings, but ensuring that the controller communicates the parameters to the device should help avoid this problem. It's crucial to use this setting, especially when dealing with Siemens PLCs.

I agree with the need to ask basic questions before delving into complex troubleshooting. It's essential to understand the switch configuration to determine if it is managed or not to avoid wasting time on unlikely causes. Checking the Profinet settings is important, but the focus should also be on ensuring that the GSD file has been properly exported and imported to automate the configuration of the IO Device (PLC) on the Codesys side.

Following mk42's and JRW's advice, make sure to verify that the Profinet Device name on the PLC matches with the Codesys controller. This matching process should have been automatic when importing the GSD file. Additionally, double-check the network adapter configuration on the PLC to ensure the correct IO device is selected. The PROFINET Interface settings on the IO Device should align with the actual network setup.

Providing information about the network switch used can also be helpful in identifying any potential settings that may need adjustment. This way, we can address any issues that may be affecting the network connection effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kdcui</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As there were two separate posts addressing the same issue, I have provided a solution in this post for configuring the SIEMENS S7-1200 as a PROFINET i-device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Alfredo Quintero noted the presence of two posts addressing the same issue and provided a solution in response. The issue at hand pertains to configuring a SIEMENS S7-1200 as a PROFINET i-device. Upon implementation of the solution, the IO device became visible when scanned for devices in the IO controller, as shown in the attached screenshots. The installation of the GSDML file also enabled visibility of the transfer areas in the IO controller. However, clarification is sought regarding the definition of transfer areas in the IO device, specifically in relation to IO mapping and controlling inputs through the IO controller. Further guidance on configuring this setup would be appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While this may be unrelated, I'm curious about the inspiration behind the name EIPScanner for your 1200 model. It piques my interest and leaves me intrigued.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello raghu_k, it's great to hear that you've made some progress. While my previous slide provided some mapping details, please take a look at the graphic data below for more information. I have excluded firewall issues and focused specifically on the IO mapping of cyclic data between the two PLCs. If the graphic data is not clear enough, I will consider presenting it in a different format. In the screenshot, Siemens is sending 0xAFBE_ADDE to CoDeSys and receiving 0x11223344. Best of luck with your project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate all of your responses and helpful solutions. After successfully establishing communication, I can now easily transfer data between the two connected devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Exciting development! Here's to the seamless progression of the project moving forward. I gained valuable insights and enjoyed the process of setting it up. Looking forward to seeing it through to completion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I have encountered a new challenge after successfully setting up profinet communication. I am transferring input data in bytes from an IO device to an IO controller (specifically a Codesys controller). Can you advise on how to convert the byte inputs to boolean values in Codesys?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello there. I'm not entirely clear on your question about converting inputs from byte to bool. The key to resolving this issue lies in using the correct syntax. Take a look at the screenshot for reference. I hope this explanation proves helpful to you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude for the effective solution provided, as it successfully resolved the issue I was facing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm glad to hear that. Your feedback is much appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, following our recent successful communication, we are now facing an error in CODESYS as shown in the attached image. Does anyone have insight on how to troubleshoot these errors?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're experiencing issues with a USB-LAN adapter, it may be causing the program to not detect the Ethernet hardware. To resolve this issue, you'll need to connect the tool to the internet, scan the PLC application, reselect the Ethernet hardware, compile the program, and then download it before putting the PLC into run mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey everyone, I need to merge 4 bytes of data and convert them to obtain a genuine numeric value. Is there a method in CODESYS to perform this conversion from bytes to a real value?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unions are a valuable tool that can be utilized for various purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I am reaching out to join this discussion as I am facing a similar issue. In my project, I am using a PN/PN coupler that needs to be connected to a DCS on an unfamiliar network. I conducted a successful communication test by connecting a second PLC in both directions. However, after removing the second PLC from the project and configuring X2 as an external device, I encountered an error after downloading the project to the PLC: "Net configuration error - Difference between nets at slot 1PNPN Coupler / PNPN Coupler.X1." This issue needs to be resolved in order to ensure proper communication between devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kristof74</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my project, I need to merge 4 bytes of data and transform them into a real value. Is there a method in CODESYS to convert bytes to a real value? Additionally, you can utilize the DINT_TO_REAL function for this purpose. Check out the link for more details: https://help.codesys.com/api-content/2/codesys/3.5.16.0/en/_cds_operator_convert_integer/</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone,

I am reaching out to join this discussion as I am facing a similar issue with a PN/PN coupler in my project that needs to be connected to an unknown network with DCS. After testing by connecting a second PLC and ensuring bidirectional communication, I encountered an error message after removing the second PLC and setting X2 as 'Outside of project' upon loading the project into the PLC: "Net configuration error - Difference between nets at slot 1PNPN Coupler / PNPN Coupler.X1." 

Hey Kristof74, welcome to the forum! It is recommended that you initiate a new thread and provide additional details, such as the brand and model of PLC you are using. This forum primarily focuses on CoDeSys related PLCs, so if you are utilizing Siemens, there is a possibility that Siemens experts may overlook your post. Additionally, this discussion does not pertain specifically to PN/PN couplers.

Could you also share a screenshot of the engineering tool displaying the normal communication setup and the issue you are encountering? The explanation provided is a bit unclear, and visuals would be helpful in understanding the problem better.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey there! Wondering how to configure Siemens PLC as the IO controller and CODESYS as the IO device? We previously had it set up the other way around.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To achieve this, the process is reversed. In Codesys, you should configure it as an I-Device with the necessary transfer areas, and then generate the GSDML file. In TIA, navigate to Options and utilize the Manage general description file (GSD) feature to import the GSDML file from Codesys to TIA. Subsequently, you will be able to locate the Codesys PLC in the hardware catalog under Other field devices, specifically under PROFINET IO. This integration is essential for seamless communication between systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To utilize the Profinet device, you must purchase a separate license, priced at EUR 100, in addition to the standard license. This license will allow you to configure the PROFINET device application using the CODESYS engineering tool to generate the GSDML file for your device's IO size. Detailed instructions can be found in the product datasheet provided in the link below for the CODESYS PROFINET Device SL.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We greatly appreciate your support, guys. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>raghu_k</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing the IO device failure error when setting up Profinet communication between Siemens S7-1200 and Codesys PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The IO device failure error could be due to incorrect configuration settings, mismatch in Profinet device parameters, or network communication issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the IO device failure error in Profinet communication between Siemens S7-1200 and Codesys PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can troubleshoot by checking the Profinet configuration settings on both PLCs, ensuring proper addressing and device parameters, verifying network connectivity, and analyzing error logs for more specific information.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific compatibility issues to be aware of when establishing Profinet communication between Siemens S7-1200 and Codesys PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - It's important to ensure that both PLCs support Profinet communication and that the firmware versions are compatible. Additionally, verifying the Profinet device profiles and ensuring proper configuration is crucial for successful communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are the key steps involved in setting up Profinet communication between Siemens S7-1200 and Codesys PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The key steps include configuring the Profinet parameters on both PLCs, setting up the IO device and controller roles, establishing network connections, and testing the communication to ensure proper functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Where can I find detailed guides or resources to help me set up Profinet communication between Siemens S7-1200 and Codesys PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can refer to</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
