
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on a project that involves utilizing Allen Bradley Micro850 controllers with Ethernet IP functionality. The goal of the project is to establish a connection between multiple controllers across various locations to a centralized server in the cloud using Modbus over TCP/IP as the">
    <meta name="keywords" content="modbus tcp/ip, allen bradley micro850, ethernet ip, central cloud server, modbus communication, multiple modbus devices, remote connection, modbus register system, modbus over tcp/ip, subnet communication, modbus tcp obstacles">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/connecting-multiple-modbus-devices-remotely-to-a-central-cloud-server">
    <title>Connecting Multiple Modbus Devices Remotely to a Central Cloud Server | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Connecting Multiple Modbus Devices Remotely to a Central Cloud Server | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on a project that involves utilizing Allen Bradley Micro850 controllers with Ethernet IP functionality. The goal of the project is to establish a connection between multiple controllers across various locations to a centralized server in the cloud using Modbus over TCP/IP as the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/connecting-multiple-modbus-devices-remotely-to-a-central-cloud-server">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Connecting Multiple Modbus Devices Remotely to a Central Cloud Server | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on a project that involves utilizing Allen Bradley Micro850 controllers with Ethernet IP functionality. The goal of the project is to establish a connection between multiple controllers across various locations to a centralized server in the cloud using Modbus over TCP/IP as the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/connecting-multiple-modbus-devices-remotely-to-a-central-cloud-server"
      },
      "headline": "Connecting Multiple Modbus Devices Remotely to a Central Cloud Server",
      "description": "Hello everyone, I am currently working on a project that involves utilizing Allen Bradley Micro850 controllers with Ethernet IP functionality. The goal of the project is to establish a connection between multiple controllers across various locations to a centralized server in the cloud using Modbus over TCP/IP as the",
      "author": {
        "@type": "Person",
        "name": "thehoneybadger"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-22",
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
                <h1 class="text-white">Connecting Multiple Modbus Devices Remotely to a Central Cloud Server</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">314</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">332</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on a project that involves utilizing Allen Bradley Micro850 controllers with Ethernet IP functionality. The goal of the project is to establish a connection between multiple controllers across various locations to a centralized server in the cloud using Modbus over TCP/IP as the communication protocol. One challenge I am facing is ensuring that each device does not use the same register location, as Modbus operates on a set register system. Although I do not have a solution yet, I am optimistic about finding one in the future.

My main concern, as highlighted by a source on the internet, is the requirement for all devices to be on the same subnet for communication to occur with Modbus TCP. This means that devices with different IP addresses, such as 192.168.10.x/24 and 10.100.45.x/24, may have difficulty communicating. Is there a way to overcome this obstacle?

This project marks my first experience with Modbus, presenting a significant challenge for me. I have sought guidance from various resources, including videos like "Allen Bradley Micro850 Modbus TCP Server" and "Turn a Micro800 into a Modbus TCP Server." However, it seems that the examples shown in these videos involve devices on the same network, rather than operating over the internet. As a result, the Modbus data may remain within the local area network (LAN) rather than being transmitted over the internet.

Thank you in advance for your assistance and support.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently learning about cloud storage architectures, and it seems possible to achieve data exchange by establishing a network path to reach each controller through a centralized or distributed middleman. Even though I have not personally utilized the Modbus TCP nodes in Node-Red, it should be capable of managing this process effortlessly. Additionally, Node-Red offers various server nodes that may be necessary for this task. It is worth exploring further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to thehoneybadger, the objective is to establish a connection between various controllers across different sites and a central server in the cloud by utilizing modbus over TCP/IP as the communication protocol. It is important to note that with TCP/IP, clients connect to a server, and not the other way around. The Micro850 PLCs would act as servers (Modbus slaves) while the client, serving as the Modbus master, would read or write the data.

One challenge with this setup is that all Micro850 devices would require a public and static IP address, which can be costly and may pose security risks when unencrypted data is transmitted over the network. A more secure and cost-effective solution would be to have each remote location equipped with a router that supports VPN connectivity, automatically connecting to the central headquarters that requires a public and static IP.

This approach offers several benefits, including all devices being on the same virtual private subnet. In addition to facilitating Modbus communication, it also allows for remote access to PLC programming with encrypted traffic for enhanced security measures.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to TCP/IP communication, it is important to understand that servers typically do not connect to other servers. In the context of the Micro850 PLC acting as servers (Modbus slaves) and clients (Modbus masters) interacting with them, it is crucial to consider the need for public and static IP addresses for each Micro850. This requirement may not always be feasible and could introduce security risks with unencrypted data transmission over the network. 

To address these challenges, I recommend implementing routers with VPN capabilities at each remote location, automatically connecting them to a central headquarters with the necessary public and static IP address. This setup offers numerous advantages, such as all devices being on the same private subnet, enabling secure communication not only for Modbus but also for remote PLC programming with encrypted traffic.

In my current system, I have a single device in the field communicating via a 4G modem antenna to an offsite VPN server. The next phase involves expanding to two devices at separate locations using their own 4G modems to communicate with a shared VPN server. Additionally, I am looking to set up a website with web sockets to remotely manage and configure the PLCs. Each site will have unique login credentials, allowing for separate web pages controlling different PLCs through web sockets associated with Modbus registers.

While my communication setup has been secure so far, I am exploring new solutions for remote access, moving from onsite panelview access to offsite control via a custom web page hosted on a cloud server. As I focus on PLC programming, I am seeking assistance from experts familiar with Modbus and web socket integration for this project. If you have experience in this area, please reach out to discuss potential collaboration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering connectivity solutions for remote locations, utilizing an MQTT Server, preferably cloud-based, can be a highly effective choice. By implementing a publish/subscribe model across all remote sites, you can significantly reduce bandwidth usage and streamline communication. Moreover, utilizing a VPN for added security can further enhance data transmission. Compared to Modbus, MQTT offers a more straightforward approach to handling instances of "Lost Communication."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Old Man recommended using an MQTT Server (potentially cloud-based) for a more streamlined approach. By having all remote locations "publish/subscribe" to the server, you can significantly reduce bandwidth usage and easily manage "Lost Communication" issues compared to using Modbus. Utilizing a VPN for added security is also an option. Thank you, OM, for the advice on utilizing MQTT, I have a feeling this will be our final solution. Have you had experience with this before based on your bio? It seems like you are well-versed in this method.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I work in the Oil & Gas industry, overseeing numerous remote sites across the US. Our operations are supported by our exclusive "Cellular Private Network" utilizing MQTT as our primary communication protocol. Data is typically updated every 3 minutes, but real-time commands are transmitted instantly to remote locations. All data is centralized on our "Ignition/Mqtt" server and stored in an MS-SQL database for generating various analytical insights like Trends, Reports, and Charts. This approach is highly efficient and cost-effective. The flexibility of our Private Network enables me to remotely reprogram, update, or perform any necessary tasks from anywhere with an internet connection, replicating the experience as if the equipment were physically in front of me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Old Man shared his experience in the Oil & Gas industry, highlighting the use of a Cellular Private Network with MQTT communication protocol for data transmission. With hundreds of remote locations across the US, data is updated every 3 minutes and stored in an Ignition/Mqtt server linked to a MS-SQL database. This efficient and cost-effective system allows for real-time commands and remote programming capabilities. 

Similarly, our system utilizes Micrologix850 hardware for modbus communication over TCP/IP, logging data to a MS-SQL database with the use of NO-JS. Exploring Modbus TCP/IP as a reliable method for data transport, the focus is on sending values and bits to modbus registers. While different communication methods are employed, there may be potential for improvement in achieving similar goals with a Micro850 system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have a system in place for logging your data, such as using a "Modbus read function" to retrieve data and then writing it to your database? Are you utilizing a python script or a SCADA package for this purpose? How frequently will you be polling the Modbus registers and how many registers will you be reading with each function call? How many remote units are involved in this process and have you calculated the necessary bandwidth? Will you also be writing data back to the Modbus registers and have you considered a plan for dealing with lost communication? I will send you my email for further discussion, as privacy concerns may limit our conversation on this forum.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I ensure that multiple Modbus devices across different locations do not use the same register location?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: To prevent conflicts, carefully assign unique register locations to each device as Modbus operates on a set register system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it necessary for all devices to be on the same subnet for Modbus TCP communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Yes, devices need to be on the same subnet for seamless communication with Modbus TCP. Devices with different IP addresses may face difficulties, but there are ways to overcome this obstacle such as using VPNs or routing strategies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I make Modbus communication work over the internet for devices on different networks?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: To enable Modbus communication over the internet, consider setting up secure connections like VPN tunnels or using routing configurations to allow devices with different IP addresses to communicate effectively.</p>
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
