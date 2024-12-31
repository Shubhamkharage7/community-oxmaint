
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have some important insights to share regarding setting up the new OPC UA server, and I believe this information will be of interest to you, JeremyM. Rockwells documentation on this process is currently limited, but I am actively working on gathering more information through a ticket">
    <meta name="keywords" content="controllogix v36, opc ua server, setting up, maximum performance, rockwell, documentation, technotes, configuration, 1756-l81e, 1756-l82e, opc nodes, opc cip object, connecting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/ultimate-guide-to-setting-up-controllogix-v36-opc-ua-server-for-maximum-performance">
    <title>Ultimate Guide to Setting Up ControlLogix v36 OPC UA Server for Maximum Performance | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Ultimate Guide to Setting Up ControlLogix v36 OPC UA Server for Maximum Performance | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have some important insights to share regarding setting up the new OPC UA server, and I believe this information will be of interest to you, JeremyM. Rockwells documentation on this process is currently limited, but I am actively working on gathering more information through a ticket">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/ultimate-guide-to-setting-up-controllogix-v36-opc-ua-server-for-maximum-performance">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ultimate Guide to Setting Up ControlLogix v36 OPC UA Server for Maximum Performance | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have some important insights to share regarding setting up the new OPC UA server, and I believe this information will be of interest to you, JeremyM. Rockwells documentation on this process is currently limited, but I am actively working on gathering more information through a ticket">
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
        "@id": "https://community.oxmaint.com/discussion-forum/ultimate-guide-to-setting-up-controllogix-v36-opc-ua-server-for-maximum-performance"
      },
      "headline": "Ultimate Guide to Setting Up ControlLogix v36 OPC UA Server for Maximum Performance",
      "description": "Hello everyone, I have some important insights to share regarding setting up the new OPC UA server, and I believe this information will be of interest to you, JeremyM. Rockwells documentation on this process is currently limited, but I am actively working on gathering more information through a ticket",
      "author": {
        "@type": "Person",
        "name": "tlf30"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-17",
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
                <h1 class="text-white">Ultimate Guide to Setting Up ControlLogix v36 OPC UA Server for Maximum Performance</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>20 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4582</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">357</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have some important insights to share regarding setting up the new OPC UA server, and I believe this information will be of interest to you, JeremyM. Rockwell's documentation on this process is currently limited, but I am actively working on gathering more information through a ticket with Rockwell. I will continue to update my findings as I progress.

If you're looking for guidance on configuring the OPC server, take note of the following TechNotes:
- QA67230 - Key details on OPC UA in version 36
- QA67231 - Steps to activate OPC server/client
- QA67232 - Tutorial on utilizing OPC client

Please be aware that my notes mainly focus on the OPC server, as I have not yet delved into the client side. My testing has been conducted on the 1756-L81E and 1756-L82E models. After consulting with tech support, it appears that the 1756-L81E (along with similar models supporting a maximum of 0 OPC nodes) does not fully support OPC, although it does have the OPC CIP object.

For connecting to the OPC server, you can refer to the following details:
- OPC Discovery URL: http://address:4840
- OPC TCP URL: opc.tcp://address:4840
- Supported Connection Modes: Basic256Sha256 (Sign and Encrypt), None (No encryption or verification, Insecure)

Regarding tag addressing, controller tags are stored in namespace 6 and can be referenced by name. For instance, a controller tag named "TEST" will have an OPC address of "ns=6;s=TEST." Program tags are referenced with the prefix "Program:" followed by the program name and tag name, such as "ns=6;s=Program:MainProgram.PROG_TEST."

When it comes to OPC server configuration, you will need to send a message to the controller to enable or disable the OPC server. This setting will be retained after a download, and I recommend using the S:FS (First Scan Bit) to initiate the enable message to ensure OPC activation. By default, the OPC server/client is disabled.

For more details on setting up the OPC server, including node counts and performance tests, as well as undocumented messages for additional functionality, please refer to my detailed findings above. I hope this information proves beneficial to your understanding of OPC server setup ~ Trevor.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>UPDATE: Rockwell has recently revised TechNote QA67231 to address issues with missing Logix import files and broken images. This update ensures that the necessary files are now included and all images are displaying correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Fantastic! Thank you. It is high time for Rockwell to introduce an OPC UA server, which will greatly benefit their users and enhance connectivity. This addition will streamline operations and improve data communication within industrial systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Saving this page for future reference when I need to delve into this topic. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheRooster</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Update: Rockwell has recently updated QA67232, which includes sample code for the OPC UA Client documentation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here are the node counts for popular tags in the system:PID_ENHANCED = 166 Nodes (Wow!)PID = 69 NodesTIMER = 6 NodesCOUNTER = 8 NodesFBD_TIMER = 13 NodesTOTALIZER = 46 NodesDISCRETE_2STATE = 42 NodesDISCRETE_3STATE = 74 NodesIt is worth mentioning that Rockwell Automation has addressed my inquiry regarding the 1756-L81E controller (and other models with 0 nodes support) stating that they currently do not offer any OPC support (both server and client).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Currently, there is still no OPC UA implementation in place. The Logix version only includes some tasks from summer internships, but there is hope that a more comprehensive implementation will be available by version 40. This puts them behind competitors like Siemens who have had OPC UA capabilities since the early to mid-2010s. It seems like progress is being made, albeit slowly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You seem quite optimistic, don't you? Embracing a positive outlook can greatly impact your life.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, Can someone clarify if TechNote QA67231 is accurate in stating that only the built-in Ethernet port on the CPU is compatible with OPC client communication? The communication pathway specified in step 1.4 is as follows.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>volker81k</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am disappointed to discover that there are severe constraints on the number of tags allowed. This restriction renders the platform impractical for HMI connectivity, suggesting it may not fulfill its intended purpose.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CapinWinky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it true that the latest feature is not compatible with the 5370 PLC series?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NADIROVIC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CapinWinky expressed disappointment over the severe restrictions on tag count in a particular software. This limitation renders it impractical for an HMI connection, a usage scenario that was likely anticipated. However, the L8x processors connected to Ignition through the OPC UA driver can effortlessly handle thousands of tags, delivering exceptional performance that surpasses ENxT connections. This is attributed to the L8x's support for larger CIP sizes and concurrent connections, making it a superior choice for demanding industrial applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a comment by Robertmee, it seems there may be a misunderstanding. We are utilizing L8x processors connected to ignition through the OPC UA driver, managing a high volume of tags with exceptional performance. This setup surpasses the performance of an ENxT connection, thanks to the L8x's support for larger CIP sizes and concurrent connections. It's important to note that our discussion pertains to the controller's in-built OPC server/client, operating over EthernetIP (CIP) rather than the OPC support within the controller itself, as of firmware version 36.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In discussing the in-controller OPC support, it is important to note that Ignition connects to the controller using EthernetIP (CIP) instead. The conversation revolves around the embedded OPC server/client within the controller, specifically in firmware v36. It seems there may have been confusion regarding the usability of the port as an HMI port in a previous post, which appeared out of place within the thread. My apologies if I misunderstood the intent of the original post.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to @CapinWinky, the built-in OPC UA server has a tag count limit that is too restrictive for establishing a direct connection to the controller for data display on an HMI. The limitation on the number of tags accessible via OPC UA restricts its effectiveness mainly to controller-to-controller connections.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tlf30 mentioned that the built-in OPC UA server's tag count limit may hinder its ability to be used for a direct OPC UA connection to the controller for displaying data on an HMI. The restriction on the number of tags that can be enabled for OPC UA access limits its utility mainly to controller-to-controller connections. I'm curious to learn more about which type of HMI would act as a client for a direct connection to the L8x OPC server and the benefits compared to using the standard CIP drivers frequently used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I try to avoid it as much as possible. The number of allotted nodes is adjusted according to the processor model, which can be frustrating especially since memory is already scaled accordingly. It can be overwhelming to think about which limit I will reach first, as it just adds unnecessary stress. I was disappointed when they deemed the 5480 unworthy, forcing me to install a full Ignition server on my own.

However, there are benefits to not having to rely on an external relay or gateway that may struggle with parsing UA node definitions from third-party sources, like FactoryTalk. With Logix tag browser, you have the ability to select which tags participate in OPC, giving you more control over your system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is unacceptable that the L81 and L306 have been excluded. This raises questions about whether Rockwell has enabled OPC backplane support for ENxT modules. It is possible that they only work through the processor's ethernet port, leaving out any field-side connections.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tlf30 shared valuable insights on setting up the new OPC UA server, which may be of interest to JeremyM due to the limited documentation available from Rockwell. While working on getting the OPC UA server up and running smoothly, tlf30 encountered some challenges and is in communication with Rockwell for further assistance. The provided code and notes offer guidance on configuring the OPC server, managing connections, and addressing tags in the controller. Additionally, details on OPC server configuration, node counts, performance tests, and undocumented messages are included for a comprehensive overview. By following the tips and instructions provided, users can navigate through the process of enabling and utilizing the OPC server effectively on various Rockwell controllers. Your troubleshooting efforts will be greatly facilitated by referring to these detailed findings and recommendations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee inquired about the HMI compatibility with a direct OPC server connection to the L8x PLC, wondering about the benefits compared to using standard CIP drivers. 
In my opinion, any HMI platform supporting OPC UA should work for this purpose. The advantage lies in bypassing the need for CIP drivers on another server, such as Kepware or FactoryTalk Linx Gateway, and accessing data directly from the PLC in a standardized manner. By exposing only the necessary tags to the HMI from Studio 5000, you can simplify the communication setup. 
At my workplace, we are streamlining communication by transitioning to OPC UA and Modbus for device-agnostic access through the HMI. Eliminating the need for OPC drivers would greatly simplify the deployment process for RA PLCs. However, current node limitations prevent us from fully utilizing this setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arcticlynx</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@robertmee pointed out that many PLCs now offer native OPC UA servers as a way to connect third-party HMIs. For example, when faced with Rockwell's limited tag count, the CtrlX system had to switch to using Node Red to transfer tags for use with WebIQ. Similarly, Beckhoff's HMI originally planned to utilize the OPC UA server but ended up pulling data over EIP. The restrictions on tag counts in Rockwell's OPC UA server seem illogical considering the potential for hosting thousands of tags on a PLC for HMI use. This limitation may be a strategic decision to promote sales of Rockwell's panelview products. Despite these challenges, the financial benefits of using third-party HMIs outweigh the additional costs of workaround solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CapinWinky</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are some recommended TechNotes for setting up the OPC UA server in ControlLogix v36?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Some recommended TechNotes include QA67230 for key details on OPC UA, QA67231 for steps to activate OPC server/client, and QA67232 for a tutorial on utilizing OPC client.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Which models have been tested for setting up the OPC server in ControlLogix v36?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: The testing has been conducted on the 1756-L81E and 1756-L82E models.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I find information on connecting to the OPC server in ControlLogix v36?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Information on connecting to the OPC server can be found with the OPC Discovery URL, OPC TCP URL, and supported Connection Modes provided.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How are controller tags addressed in the OPC server setup for ControlLogix v36?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Controller tags are stored in namespace 6 and can be referenced by name. For example, a controller tag named "TEST" will have an OPC address of "ns=6;s=TEST."</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can I configure the OPC server in ControlLogix v36 and enable or disable it?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: To configure the OPC server, you will need to send a message to the controller to enable or disable the OPC server. It is recommended to use the S:FS (First Scan Bit) to initiate the enable message to ensure OPC activation. By default</p>
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
