
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am interested in setting up a Profinet network within my manufacturing facility to link various devices such as a PLC, HMI, and multiple Profinet-based Weight Transmitters. I am aware that in order for effective communication to occur, all devices must be on the same subnet. However, due to">
    <meta name="keywords" content="profinet network, manufacturing facility, connect devices, separate subnets, plc, hmi, profinet-based weight transmitters, effective communication, 9">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-devices-on-separate-subnets-in-a-manufacturing-facility-using-profinet">
    <title>How to Connect Devices on Separate Subnets in a Manufacturing Facility Using Profinet | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect Devices on Separate Subnets in a Manufacturing Facility Using Profinet | Oxmaint Community">
    <meta property="og:description" content="I am interested in setting up a Profinet network within my manufacturing facility to link various devices such as a PLC, HMI, and multiple Profinet-based Weight Transmitters. I am aware that in order for effective communication to occur, all devices must be on the same subnet. However, due to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-devices-on-separate-subnets-in-a-manufacturing-facility-using-profinet">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect Devices on Separate Subnets in a Manufacturing Facility Using Profinet | Oxmaint Community">
    <meta name="twitter:description" content="I am interested in setting up a Profinet network within my manufacturing facility to link various devices such as a PLC, HMI, and multiple Profinet-based Weight Transmitters. I am aware that in order for effective communication to occur, all devices must be on the same subnet. However, due to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-devices-on-separate-subnets-in-a-manufacturing-facility-using-profinet"
      },
      "headline": "How to Connect Devices on Separate Subnets in a Manufacturing Facility Using Profinet",
      "description": "I am interested in setting up a Profinet network within my manufacturing facility to link various devices such as a PLC, HMI, and multiple Profinet-based Weight Transmitters. I am aware that in order for effective communication to occur, all devices must be on the same subnet. However, due to",
      "author": {
        "@type": "Person",
        "name": "aamirawan91"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-13",
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
                <h1 class="text-white">How to Connect Devices on Separate Subnets in a Manufacturing Facility Using Profinet</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>23 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1363</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">282</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am interested in setting up a Profinet network within my manufacturing facility to link various devices such as a PLC, HMI, and multiple Profinet-based Weight Transmitters. I am aware that in order for effective communication to occur, all devices must be on the same subnet. However, due to the significant distance between them, it is impractical to establish direct connections or connect through a single network switch.

My strategy is to link each device to the closest Ethernet port provided by the IT department for intranet connections in the plant. These ports automatically assign IP addresses to connected devices, which may or may not fall within the same subnet. For example, devices on the 3rd floor have IP addresses in the subnet 172.16.103.x, whereas those on the ground floor use 172.16.102.x. Despite being on different subnets, devices on different floors can still communicate, likely due to IT's routing configurations for plant-wide connectivity. While I am uncertain, this setup gives me hope that my PLC on the first floor can communicate with a Weight Transmitter on the 3rd floor.

However, my concern lies in the manual assignment of IP addresses to each device. I question whether devices on separate subnets can communicate in this scenario. Additionally, I am unsure if the networks on the 3rd and 1st floors are physically connected, as my knowledge of network infrastructure is limited.

Before proceeding with the project and purchasing equipment, I need clarification on these aspects. If my initial plan is not feasible, I am interested in exploring alternative solutions.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of Profinet, it is the responsibility of the IO Controller to allocate IP addresses to the IO Devices. It is crucial not to delegate this task to a third party, such as the DHCP server of the office network. While it is technically possible to collaborate with the IT department to reserve IP addresses, it is strongly advised to keep the Profinet network separate from the office network to avoid any potential complications. IT departments often have different priorities, such as performing server maintenance or network changes after office hours, which may disrupt production processes that run round-the-clock. For large distributed plants, it is essential to carefully plan and design a Profinet network that can efficiently handle the workload. Fortunately, Profinet cables are affordable and readily available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP noted that in Profinet, the IO Controller is responsible for assigning IP addresses to IO Devices, rather than allowing a third party such as the office network's DHCP server to do so. While it is possible to work with IT to reserve IP addresses for your use, it is not advisable to mix Profinet with the office network due to differing priorities between production and IT departments. For instance, IT may conduct server maintenance or network changes after office hours, while production is still operational. In the case of a large distributed plant, it is recommended to design a dedicated Profinet network. Profinet cables are cost-effective. Additionally, although this weight transmitter is not a Siemens product, it can be integrated into a Siemens Profinet network using a GSDML file in TIA Portal.

Regarding the connectivity of transmitters located on different floors, even if IP addresses are reserved by the PLC, they may still be in different physical networks. This raises the question of whether the PLC will be able to locate and connect to them effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Integrating Profinet with the office network may pose some challenges, but it can be done successfully with the right configuration. While Profinet cables are cost-effective, it is essential to ensure proper connectivity between the Profinet IO Controller and IO Device using Ethernet switches. However, integrating Profinet into a complex office network with multiple interconnected subnets and routers may lead to complications. IT policies and restrictions could potentially hinder the smooth integration of a Profinet Device into the network. Troubleshooting issues that arise from mixing Profinet with an office network can be quite difficult.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, JesperMP noted the potential challenges of integrating Profinet with the office network, highlighting the cost-effectiveness of Profinet cables. While it is technically feasible to connect the Profinet IO Controller to the IO Device using regular Ethernet switches, navigating through multiple switches within a complex office network may pose difficulties. IT departments often segment office networks into multiple subnetworks connected by routers, enforcing rules and limitations that could hinder the integration of a Profinet Device. Troubleshooting issues that arise from mixing Profinet with the office network can be complex.

Considering the option of directly connecting the IO device to the PLC instead of utilizing IT ports, it may eliminate network uncertainties but could potentially require laying lengthy Profinet cables. The maximum distance allowed for a Profinet cable is typically 100 meters. While incorporating switches could extend this distance, it may incur additional costs. In a scenario where the manager prefers utilizing the nearest Ethernet ports to connect transmitters to the PLC through the company's network, suggesting the use of switches and direct connections may be the optimal solution. Clarifying if exceeding the 100-meter limit is permissible when utilizing switches between the PLC and IO device (transmitters) would be advisable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Certainly! Ethernet can easily be extended using switches, allowing for increased connectivity and network flexibility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>According to JesperMP, it is possible to extend Ethernet networks using switches. This means you can easily expand your network coverage. Thank you for the information!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I cannot fully endorse this approach for your specific system, it worked well for my previous organization's large physical IT network. Each switch port was individually assigned to a VLAN, ensuring segregated traffic for different purposes. For instance, we had a dedicated "machine" VLAN for programming and monitoring, while all machine IO operated on a physically isolated network with a separate non-routable subnet.

Consider having your IT team configure a VLAN for your Profinet devices to effectively segregate traffic. However, there is a likelihood of encountering issues at critical moments, as Jesper pointed out. To avoid potential complications, it is advisable to invest in a separate physical network independent of the office IT system. Although it may involve higher initial costs, this approach will provide better long-term reliability for your operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Profinet IO requires profinet-capable switches to ensure timely communication. Using Siemens Profinet switches, whether unmanaged or managed, is essential to prevent communication issues. Managed switches with Profinet functionality specified in the manual are also suitable. 

A portion of Profinet IO traffic is transmitted through Ethernet TCP packets, which regular Ethernet switches may not pass. Without the proper switches, communication breaks or complete failure of Profinet IO can occur. 

While Profinet PLC communication (PLC <> Scada) is less time-sensitive than IO, it is still advised to use profinet switches for optimal performance. Unmanaged switches may work for both types of communication since they lack firewalls that could block data flow.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Lare, Profinet IO requires time-critical communication and relies on Profinet capable switches, specifically Siemens Profinet switches. However, if Profinet IRT is not being used, switches with Quality of Service (QoS) support are adequate.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to JesperMP, switches with QoS support are sufficient as long as they are not Profinet IRT. It is true that Siemens switches come with default settings for Profinet communications. If using non-Siemens switches, you may need to adjust firewall settings, or in some cases, the switches may not support Profinet IRT at all on site. Fortunately, there have been no issues with CPU to PC communications, as it does not involve IRT.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare confirmed that Siemens switches come pre-configured for profinet communications, making them suitable for industrial applications. However, when using non-Siemens switches, you may need to adjust firewall settings or, in some cases, the switches may not support Profinet IRT. This can potentially cause issues with CPU to PC communications, although this is not a concern for non-IRT setups. So, when connecting your PLC to a weight transmitter using a regular non-Siemens network switch, it's important to consider these factors to ensure smooth operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>aamirawan91 asked if they should be concerned when using a standard non-Siemens network switch to connect their PLC to a weight transmitter. I believe the weight data is transmitted through IRT communication to the PLC, which is Profinet IO compatible, so yes, switches should support Profinet functionality. The transmitter's datasheet should specify the type of communication being used; this is especially important if Profinet IO cards like ET200S or ET200SP series are involved. If there is another PLC located near the weight transmitters and all transmitters are connected to this "remote" PLC, communication can be established with another PLC or PC on a non-Profinet network. It's worth noting that S7 communications outside of the PLC are not Profinet IRT, but there may be issues with transmitter IO data being sent to the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When connecting your PLC to the weight transmitter, it is crucial to consider the network switch being used. Simply plugging into the IT infrastructure without proper thought can lead to complications down the line. While any switch may be able to handle regular Profinet IO traffic in theory, some switches may block certain functions by default. Cisco switches, for example, block traffic with a Priority assigned but no VLAN, which is essential for PN to work properly. It is important to ensure that the switch being used is tested and compatible with Profinet to avoid any issues. It is unlikely that a weight transmitter utilizes IRT, as it typically relies on regular Profinet IO. Creating a separate OT network infrastructure, using fiber optic cable instead of copper, or negotiating with IT to meet your needs are all viable options to ensure a smooth connection between your PLC and weight transmitter. Remember to refer to the data sheet for confirmation on the type of network required for your specific setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of industrial networks, simply plugging into the IT infrastructure and crossing your fingers is not a wise strategy. While any switch should be able to handle regular Profinet IO traffic in theory, practical experience reveals that some switches may block specific functions by default. For instance, Cisco switches tend to restrict traffic with a Priority assigned but no VLAN (the way PN operates) unless a voip setting is enabled. On the other hand, unmanaged switches may impede certain diagnostics, leading to operational issues.

It is crucial to invest in switches that have undergone rigorous testing for Profinet compatibility, as not all industrial network brands offer this level of assurance. While office-grade equipment might suffice, it could necessitate more troubleshooting and interactions with tech support to optimize performance.

When dealing with weight transmitters, it is highly unlikely that they utilize IRT which is typically reserved for high-speed motion components. Most likely, they operate on regular Profinet IO, a fact that can be confirmed by referring to the product's data sheet. Keep in mind that IRT demands specialized switches or direct connections, and only a limited number of switches, mainly four-port ones, support this feature.

To ensure smooth network operations, consider the following options in order of preference: 
1) Establish a separate OT network infrastructure with strategically placed switches throughout the facility.
2) Opt for fiber optic cables instead of copper cables for the connection back to the main PLC, allowing for longer distances.
3) Engage in negotiations with the IT department, leveraging VLANs if necessary, and hoping for their cooperation. Despite the potential benefits of VLANs, reliance on timely maintenance from IT staff remains a risk.

Personal experiences have shown the importance of using the right equipment for the job. In a past scenario involving Siemens Remote IO on non-Profinet Cisco switches, despite configuring the switch to accommodate VoIP and other required settings, intermittent drops in IO occurred on the remote side. This led to communication errors on the CPU and revealed that the firewall was still intermittently blocking certain Profinet packets.

Ultimately, rerouting the Remote IO to direct cabling was the solution, as the existing non-Profinet switches could not provide the necessary support. It serves as a lesson on the critical role of selecting compatible equipment in industrial networking setups.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a question regarding connecting devices on different subnets. While connecting a Profinet IO device like a weight transmitter to a PLC across various subnets through routing may pose challenges, I am curious about the possibility of linking a computer running SCADA (specifically WinCC Unified) to the PLC on separate subnets. Is this connection independent of the Profinet protocol?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>aamirawan91 mentioned: I have a question regarding connecting a Profinet IO device such as a weight transmitter to a PLC on different subnets. While it may seem challenging to do so via routing, there are alternative methods that could work in your specific scenario. It is important to note that routing Profinet is not a viable option. VLANs and separate infrastructure are potential solutions for Profinet connectivity.

Additionally, if you are considering connecting a computer running SCADA (WinCC Unified) to the PLC on different subnets, it is possible to do so without relying on the Profinet protocol. This type of connection can be routed effectively. Do the scales support protocols such as modbus tcp, EIP, or OPC UA?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mk42 mentioned that while there are potential solutions in your situation, routing Profinet is not one of them. VLANs or separate infrastructure may be more suitable options. It is worth exploring if the scales support protocols like Modbus TCP, EIP, or OPC UA, as these do not rely on Profinet and can be routed for communication.

Unfortunately, the scale only supports Profinet and Profibus. In order to facilitate communication between the WinCC and PLC, it is important to assign appropriate IP addresses. The PLC is currently in the 172.16.102.x subnet, while the WinCC PC is in the 172.16.103.x subnet. Despite having routing set up by the IT department enabling communication across subnets for other computers, the WinCC and PLC are unable to communicate. The PLC has been assigned the IP 192.168.0.1, and the WinCC PC has been assigned 192.168.0.2. Connecting them within the same network (172.16.102.x) allowed for communication, but this was not possible across different subnets.

It may be necessary to utilize the "use router" option in TIA Portal to enable communication between the WinCC and PLC across different subnets.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Aamirawan91 posed the question: Is it necessary to enable the "use router" option in TIA Portal? It is essential to consult your IT department, the ones in charge of the network, regarding your intentions and to follow their guidance. If the devices are within the same subnet, a router/gateway might not be required. However, if they are not, then it is necessary. Keep in mind that you may not have the freedom to choose your own IP addresses or settings. Additionally, considerations such as IT firewalls must be taken into account. It is crucial to involve the IT department, unless you are confident in your understanding of the network setup and your actions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking to connect devices on a network, it's best to consult your IT department for guidance. Discuss your needs with them to determine if a router/gateway is necessary for devices on different subnets. Keep in mind that you may not have control over IP addresses or network settings. Consider any IT firewalls that may be in place. It's crucial to work with your IT department unless you're confident in your understanding of the network setup. Your IT team plays a crucial role in ensuring a smooth connection process. Thank you for your input!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aamirawan91</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have experience in networking within an extrusion industry utilizing Siemens HMI and PLC systems. Despite assigning unique IP addresses to each HMI and PLC (ranging from 192.168.50.1 to 255), I am encountering HMI # errors. Our network setup includes Cisco managed switches. I am retrieving data through Profinet from the PLC for analysis every 10 seconds. When I tested with a single master polling the error machine, it worked smoothly without any issues. However, when a second PLC is introduced, the HMI # error reappears.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nikhil wagh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Nikhil Wagh shared his experience with networking in the extrusion industry, utilizing Siemens HMI and PLC systems. Despite assigning different IP addresses to each device (ranging from 192.168.50.1 to 192.168.50.255), he is encountering HMI # errors. The setup also includes Cisco managed switches. Wagh is polling data via Profinet from the PLC for analysis every 10 seconds. When testing with a single master polling the error machine, the system functions without issues. However, introducing a second PLC causes the HMI # error to reappear, indicating a potential issue with S7 connection resources on the PLC 1200.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare mentioned that it seems like all connection resources of the PLC are being utilized, and the last connection is unable to obtain an S7 connection resource from the S7 1200 PLC. This issue is occurring while using the Node-RED S7 pallet to poll data. Currently, there is a direct connection between the HMI or panel PC and the managed switch, as well as the PLC, as they are all within the same network. This setup involves multiple PLCs and HMIs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nikhil wagh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Nikhil Wagh confirmed that the S7 1200 is being used with Node-RED's S7 pallet to poll data. Currently, a HMI or panel PC is directly connected to the managed switch, along with the PLC, all within the same network. There are multiple PLC and HMI devices in use. Make sure to check connection resources online to the PLC. Additionally, it is recommended to open a new thread for further assistance. If the S7 1200 is old with outdated firmware, it may only support up to 3 S7 connections. An online connection may also require an additional resource.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can devices on separate subnets communicate with each other within a manufacturing facility using Profinet?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, devices on separate subnets can communicate with each other within a manufacturing facility if there are appropriate routing configurations in place to facilitate communication across different subnets.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is manual assignment of IP addresses necessary for devices on separate subnets to communicate?</h4>
<p class='text-muted'><strong>Answer:</strong> - Manual assignment of IP addresses may not be necessary if the network infrastructure is configured to route communication between devices on different subnets effectively.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are the networks on different floors physically connected in a manufacturing facility setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The physical connections between networks on different floors may vary depending on the network infrastructure design. It is recommended to consult with the IT department or network administrators for clarification on the connectivity between different subnets.</p>
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
