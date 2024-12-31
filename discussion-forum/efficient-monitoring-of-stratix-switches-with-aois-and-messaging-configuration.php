
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone! I have been following this community for a while, but this is my first time posting. Currently, I am tackling a project that involves developing a program to monitor the diagnostic data on multiple Stratix switches. Many essential parameters, such as temperature and MAC addresses, can only">
    <meta name="keywords" content="efficient monitoring, stratix switches, aois, messaging configuration, diagnostic data, temperature, mac addresses, eds file, message configuration, add-on instruction, switch reference, parameters, routine, logix version 32, l85">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/efficient-monitoring-of-stratix-switches-with-aois-and-messaging-configuration">
    <title>Efficient Monitoring of Stratix Switches with AOIs and Messaging Configuration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Efficient Monitoring of Stratix Switches with AOIs and Messaging Configuration | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone! I have been following this community for a while, but this is my first time posting. Currently, I am tackling a project that involves developing a program to monitor the diagnostic data on multiple Stratix switches. Many essential parameters, such as temperature and MAC addresses, can only">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/efficient-monitoring-of-stratix-switches-with-aois-and-messaging-configuration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Efficient Monitoring of Stratix Switches with AOIs and Messaging Configuration | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone! I have been following this community for a while, but this is my first time posting. Currently, I am tackling a project that involves developing a program to monitor the diagnostic data on multiple Stratix switches. Many essential parameters, such as temperature and MAC addresses, can only">
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
        "@id": "https://community.oxmaint.com/discussion-forum/efficient-monitoring-of-stratix-switches-with-aois-and-messaging-configuration"
      },
      "headline": "Efficient Monitoring of Stratix Switches with AOIs and Messaging Configuration",
      "description": "Greetings everyone! I have been following this community for a while, but this is my first time posting. Currently, I am tackling a project that involves developing a program to monitor the diagnostic data on multiple Stratix switches. Many essential parameters, such as temperature and MAC addresses, can only",
      "author": {
        "@type": "Person",
        "name": "Astleas"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-17",
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
                <h1 class="text-white">Efficient Monitoring of Stratix Switches with AOIs and Messaging Configuration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Astleas</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>22 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">8042</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">172</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone! I have been following this community for a while, but this is my first time posting. Currently, I am tackling a project that involves developing a program to monitor the diagnostic data on multiple Stratix switches. Many essential parameters, such as temperature and MAC addresses, can only be accessed through explicit messaging. Each parameter is defined by class/instance/attribute information in the EDS file, making message configuration straightforward.

However, the sheer volume of parameters to monitor presents a significant challenge. Setting up separate messages for each parameter, especially when some parameters apply to every port on the switch, is a daunting task. While configuring messages for one switch is feasible, repeating this process for every switch the program needs to monitor is impractical.

Ideally, I envision creating an Add-On Instruction (AOI) that handles messaging internally. Since the message class, instance, and attribute are consistent for a given parameter across all switches, the AOI would simply require a switch reference to output the specific parameters for that switch. This would involve developing the AOI, duplicating it for each switch on a new rung, adjusting the reference accordingly, and completing the task.

However, based on my own experimentation and the information gathered from various forum discussions, implementing messaging within an AOI seems challenging. If I were required to configure each message externally in the routine where the AOI is called, it would defeat the purpose of streamlining the process.

I am currently using version 32 of Logix and working with an L85. I am hopeful that there have been advancements or changes since the older forum posts I have consulted, which could potentially make my desired solution achievable. Is there a way to approach this issue differently or any key aspects that I may be overlooking? Your insights and suggestions would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Avoid performing this task in an AOI. Instead, establish a structured routine that indirectly cycles through all the messaging with the help of an Index. Create a User-Defined Type (UDT) to store all the necessary members and utilize an array to hold attributes such as Enable, Message Config, Read/Write Duration Timers, Comm Delay, Read/Write Failure, etc., in an indirect manner. I implement a similar approach when retrieving extensive data from remote sites to ensure that all messages are sequentially staged and not sent simultaneously.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DBLD99</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our machines are equipped with the Rockwell PowerFlex 525 Faceplate AOI, which features logic to communicate with the VFD and retrieve the last fault code. This AOI functions exactly as described, with approximately 40 VFDs in the machine. The AOI is utilized multiple times throughout the machine, with the same number of message type tags configured as controller tags. - PaulB.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>paulB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PaulB mentioned utilizing the Rockwell PowerFlex 525 Faceplate AOI in their machines to send messages to the VFD and access the last fault code. This AOI is effectively integrated with approximately 40 VFDs in the machine, with multiple instances of the AOI being called and configured with the same number of message type tags as controller tags. Instead of using a MSG instruction, it is recommended to directly read from the output array for this purpose.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>janner_10</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking to simplify your setup for Stratix Switches, consider using the Rockwell-provided AOI that includes pre-configured functionality. This AOI also comes with user-friendly HMI faceplates for easy operation. You can find this time-saving solution in the Network Device Library section of PCDC. It's worth noting that this AOI is compatible with all current Stratix platforms, making it a versatile option for your networking needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to your initial query, the MSG tag in AOI is always set as an InOut parameter. While configuration can be achieved programmatically within the AOI, the Service code remains non-configurable. As a result, it is necessary to utilize Get Attribute Single and Get Attribute All messages individually. I highly suggest opting for the Rockwell supplied AOI as it efficiently handles all messaging tasks for you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>A few years ago, I embarked on a journey where Contr_Conn provided invaluable insight and solutions. To learn more, check out my thread on the topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Contr_Conn, the Rockwell AOI already exists and is designed to work with the PanelView interface, although this is not mandatory. It is important to note that if you are using a different HMI, the AOI information will be aligned with the faceplate pages. You will need to recreate the pages for your specific HMI. Additionally, it is worth mentioning that the select buttons on the faceplate are momentary and are held for 500 milliseconds. This may seem inconvenient to some users. In my case, the HMI buttons latch on and are only unlatched in the PLC. Below are some screenshots of a four Stratix system used with an InTouch HMI, which could provide some inspiration. I utilized one HMI Stratix tag and copied parameters to and from the selected Stratix AOI tag for the HMI. While readable, the screenshots may appear slightly blurry due to file compression.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Did you know that you can use the MSG instruction within an Add-On Instruction (AOI)? It seems I overlooked the option of passing the MSG backing tag as an InOut parameter. When I attempted to define it as a local variable inside an AOI, Logix Designer gave me a strong response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>theColonel26</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For those looking to create a custom HMI for the Stratix AOI without being able to edit the faceplate in FTView, here is some supplementary information. Each page of the faceplate has different values assigned to Animation_Active. Pages 1, 2, & 3 have values of 10, 11, & 12 respectively. When accessing the overview faceplate, I set Animation_Active to 10 to enable messaging for all three pages. Setting it to 11 & 12 also works, but doesn't provide any additional functionality. I have consolidated all three pages onto my home page.

On network pages 1, 2, & 3, Animation_Active is set to 20, 21, & 22. I am unsure if these values are crucial for the messaging of detailed port information on each page. In my application, any of these values suffice for the required port messaging. Each value corresponds to a specific popup in my application.

The cable diagnostics page assigns values of Animation_Active 30, CIP sync 40, global alarms 50, and port alarms 51. However, I haven't incorporated any features for these in my application.

The port buttons control the Home.Set_Port.Bit[x] for the corresponding port. Additionally, there are scroll buttons for Port_Selector.Set_Port_Up(orDown). Animation_Active and port selection bits are communicated from the HMI to the AOI. Information for the HMI or other functions can be found in Parameters.Home, Parameters.Port, and more. Port_Indicator[x] values are used to match the appearance of the home faceplate, with 0=grey, 1=red, 2=brown, and 3=green, repeating for 10 to 13.

On port page 1, Link_Status is represented by: 0=grey/Inactive, 1=green/Active, 2=black/Disabled, 3=red/Alarm. I won't delve into InterfaceFlags for auto-negotiation and duplex indication, as it requires some logical processing. SmartPort_Number offers various values for different text descriptions.

Lastly, on port page 2, the least significant digit is stored in a separate UDINT[0] tag, while the tens place and higher values are in UDINT[1].</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The description provided above is accurate, however, it pertains to an outdated version of AOI that is no longer available on the Sample Code site. The current version on PCDC utilizes different tag names and relocates essential HMI-related tags to Local Tags. This makes it challenging to access them programmatically outside of the AOI, treating them as AOI parameters. Despite this limitation, there are potential workarounds available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you all for your feedback. Upon reviewing Rockwell's AOI in the Network Device Library, I noticed that it cycles through various classes, instances, and attributes in a single message, similar to what DLBD99 mentioned. Based on Rockwell's instructional video on the faceplate, it seems that this AOI collects most of the data from the EDS file. I have observed that this data is only accessible in the "HMI_Parameters" section of the AOI, which, as Contr_Conn pointed out, consists of only local tags. What are my options for making these parameters available to the entire controller? In this project, there is no immediate need for an external HMI; rather, the goal is to have the data as controller tags for user visibility and to activate physical alarms. If I can obtain these as controller tags and implement message cycling for any additional data not captured by those tags, I would be in a favorable position.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Astleas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To programmatically retrieve an AOI's local UDT, you can take three actions:

1) Initiate a data table read message from the controller to itself using the following specifications: 
- Message type: CIP Data Table Read 
- Source Element: AoInstance.LocalTag (ensure the local tag is Read/Write or Read-Only) 
- Number of Elements: 1 
- Destination: Any tag with the same type as AoInstance.LocalTag

2) Add a new parameter (Input or Output) to the AOI and alias it to the first element of the nested UDT. Prefix these parameters with "Ptr_" to indicate a pointer. Create an OutsideTag with the same type as the local tag and perform a COP (AoInstance.Ptr_LocalTag, OutsideTag, 1).

3) Within the AOI, create an In/Out parameter and perform a COP action to it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As per JeremyM's input, all three methods are effective, although they come with a few limitations. Methods 2 and 3 are only suitable for unprotected AOIs, whereas the AOI in question is code protected. Methods 1 and 2 provide a read-only mirror copy of HMI_Parameters tags, requiring the use of the MSG Write command to update data in a specific local tag. It is important to note that certain information within this AOI is only accessible when a specific tab is open on the HMI. When writing your own code, avoid sending simultaneous messages to Stratix - it is best to send them one at a time. While the code is protected, it is still visible, allowing you to manually retype it into your own AOI if needed. This may not be the most efficient solution, but it is quicker than starting from scratch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It has been a while since I first started utilizing the AOI, so it was quite plausible that there might be a more recent version available. Today, I conducted a search for PCDC sample code related to "stratix," and the top result was version 10.00.01, which I have been using with Logix V20 and Studio V32. The zip file contained within is dated 8/31/2017, indicating that it has remained unchanged since at least that time.

Upon exploring further, I came across a link to a newer version, V12, leading me to NetworkDeviceLibrary_v1.04.00.zip. Initial inspection revealed that it includes additional DLR features not present in V10, which are not necessary for my requirements. The library is designed for V30 and above, and I encountered difficulties importing it into V20. Unfortunately, the HMI_Parameters are only locally accessible with external read/write permissions, which is inconvenient.

Based on my observation, I believe that most of the values in AOI V10 align with those in AOI V12, suggesting a continuation rather than a complete overhaul. My exploration was cursory, and I did not delve deeply into the differences between the two versions.

In regard to the V10 AOI details: InterfaceFlags.01 being off signifies half duplex, while on indicates full duplex. The Autonegotiation status can be deduced from the values of InterfaceFlags.02, InterfaceFlags.03, and InterfaceFlags.04. Specifically, 0 denotes In Progress, 1 indicates Failed, 2 signifies Duplex Fail, and 3 stands for OK. The port page displays threshold broadcast units, but I noticed a value of 0, rendering them invisible on the HMI. This issue has been added to my low-priority to-do list for further investigation.

Regarding SmartPort_Number values: 0 represents None, 1 signifies Automation Device, 2 indicates Multiport Automation Device, and so on. Values below 0 or greater than 10 are considered errors and need to be addressed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was surprised to learn that V10 is still an option, as the latest version is V12 on PCDC. From my recollection, V10 does not provide full compatibility with all Stratix catalog numbers and the Stratix 5800 series.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is intriguing how the AOI is specifically designed to be utilized only by one HMI. This limitation raises questions about its adaptability and versatility across different interfaces and systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is not ideal for multiple HMIs to access the same data simultaneously. When a page is opened or closed, it writes to Animation_Active, which can cause issues if one HMI closes while others are still viewing the page. Attempting to access details from different ports simultaneously will not work effectively. Both HMIs will display data from the last selected port, identified by Selected_Port_Name.V10 is not protected, but copying and pasting initial rung structures from there can be helpful in creating an unlocked version, although extensive editing will still be necessary. Consider using two large monitors placed side by side to manage this more efficiently.

In the latest V10 information, Home page 2 displays FW_Type, with 'off' indicating lite and 'on' indicating full. On the port page 2, octets and packets show separate least significant digits, while discards, errors, and unknown are represented by a single DINT. The home page also includes banner notifications such as 'Stale Data: AOI Faulted' when AOI_Error is active, 'Stale Data: AOI Not Enabled' when AOI_Enabled is off, and 'Stale Data: Controller not Communicating' when PLC - HMI communication is disrupted. In the ladder, an unlatch to the MSG.er bits is added if the connection is lost, preventing errors like one experienced when disconnecting cables.

Please note that all testing was done using V10, and it is advised to proceed at your own risk. There is no warranty or guarantee provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the valuable feedback, everyone. With the incorporation of prebuilt AOIs and indirect addressing for message instructions, I have successfully developed a program that aligns well with my requirements. Moving forward, I have a related query regarding UDTs and message instructions within the same project.

I have established a UDT to represent a port on a Stratix switch, with an array of 26 instances to denote the ports on a specific switch. This UDT comprises various arrays, including a set of six SINTs for the MAC address. However, due to the constraints of the CIP Generic "Get Single Attribute" message protocol, I am unable to dynamically alter the index of the target element. To overcome this limitation, I have introduced another instance of the port UDT to act as temporary storage for the data. The intention is to write the message data here before transferring it to the relevant port with the appropriate index.

The issue I am encountering lies in the data copying process. When attempting to use a COPY instruction with the source as Temp_Port.MAC_Address and the destination as Port_Array[index].MAC_Address, I am met with an error stating: "Invalid data type. Argument must match parameter data type." A similar error arises when trying to copy Temp_Port.MAC_Address[0] to Port_Array[index].MAC_Address[0]. This confusion arises despite both data types being arrays of 6 SINTs.

In an attempt to utilize a MOVE instruction, I encounter the same error. However, a workaround is possible by employing the instruction on a single byte - for instance, Temp_Port.MAC_Address[5] to Port_Array[index].MAC_Address[5].

It appears there may be a misunderstanding on my part regarding the functionality of MOV and COP instructions in relation to arrays and UDTs. Can anyone provide clarity on this matter?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Astleas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Logix is not compatible with the COP SingleUDT.SixUINTs UDTArray[Index].SixUINTs Length=1 configuration. It is functioning properly when defined as COP SingleUDT.SixUINTs[0] UDTArray[Index].SixUINTs[0] Length=6. Alternatively, you can also populate the entire single UDT into the array with COP SingleUDT UDTArray[Index] Length=1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, 5618. For some reason, I am having difficulty compiling the first version of that instruction. Please refer to the screenshot provided. The second version compiles smoothly and functions as intended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Astleas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am revisiting this discussion to provide additional information on the V10 AOI and its accompanying AOI in a bundled package. I recently upgraded a L43 to a L306 and retained the existing Stratix AOI for a 5700. The previous path to the switch was 1,1,2,192.168.1.99, but now it is 4,192.168.1.99. An error occurred with the V10 AOI due to the.NET_NodeMSGPathCreate AOI written in ST language, used within the main Stratix AOI to convert the path string to the MSG instruction format. The issue arose because the AOI did not recognize 4 as a valid port in the path. By adjusting the upper limit in line 143 of the AOI from 1 to 4, the problem was resolved. While I believe this might not be an issue in newer versions, I prefer using this older, more flexible AOI for the 5700. This year, I will be working with some Stratix 5200. For those, I may either modify the newer unlocked AOI to access the desired HMI data or develop a similar routine.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I need to examine the newer AOI to see if it supports the 5200 and 5800 in addition to the 5700, 5400, and 5410. I plan to use it as a reference to update my existing block, which is limited to the aforementioned models. I prefer to customize my own block for real-time data transmission to operators. Can anyone provide a message reference for Stratix or Cisco IE switches? Despite using wireshark and old faceplates, I have yet to locate the necessary information through trial and error.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the challenge faced when monitoring diagnostic data on multiple Stratix switches?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The challenge lies in setting up separate messages for each parameter, especially when some parameters apply to every port on the switch, which can be a daunting task when repeated for multiple switches.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How does the idea of creating an Add-On Instruction (AOI) help in monitoring the switches more efficiently?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The AOI would handle messaging internally based on consistent message class, instance, and attribute information for a given parameter across all switches, requiring only a switch reference to output specific parameters for each switch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What concerns are raised regarding implementing messaging within an AOI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The main concern is that if messages need to be configured externally in the routine where the AOI is called, it might defeat the purpose of streamlining the monitoring process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What software version and hardware are being used for this project?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The project is being developed using version 32 of Logix and working with an L85 hardware.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  Are there any recent advancements or changes that could make the desired monitoring solution achievable?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The individual is hopeful that there have been advancements or changes since older forum posts, which might help in achieving the desired solution for monitoring the switches efficiently.</p>
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
