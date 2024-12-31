
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I need assistance with a module involving communication between PLCs through a Modbus plus network. The manual instructs me to use an ADDM block and a Read_Var block. I have set the address for the ADDM to Machine{192.168.1.5}3 to read register 40809 from another PLC connected via">
    <meta name="keywords" content="plc communication, troubleshooting communication, modbus plus network, tcsegdb23f24fa, proxy module, addm block, read_var block, register 40809, node 3, bridge a, bridge b, routing index">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-between-plcs-using-tcsegdb23f24fa-modbus-plus-proxy-module">
    <title>Troubleshooting Communication Between PLCs Using TCSEGDB23F24FA Modbus Plus Proxy Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Between PLCs Using TCSEGDB23F24FA Modbus Plus Proxy Module | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I need assistance with a module involving communication between PLCs through a Modbus plus network. The manual instructs me to use an ADDM block and a Read_Var block. I have set the address for the ADDM to Machine{192.168.1.5}3 to read register 40809 from another PLC connected via">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-between-plcs-using-tcsegdb23f24fa-modbus-plus-proxy-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Between PLCs Using TCSEGDB23F24FA Modbus Plus Proxy Module | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I need assistance with a module involving communication between PLCs through a Modbus plus network. The manual instructs me to use an ADDM block and a Read_Var block. I have set the address for the ADDM to Machine{192.168.1.5}3 to read register 40809 from another PLC connected via">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-between-plcs-using-tcsegdb23f24fa-modbus-plus-proxy-module"
      },
      "headline": "Troubleshooting Communication Between PLCs Using TCSEGDB23F24FA Modbus Plus Proxy Module",
      "description": "Hello everyone, I need assistance with a module involving communication between PLCs through a Modbus plus network. The manual instructs me to use an ADDM block and a Read_Var block. I have set the address for the ADDM to Machine{192.168.1.5}3 to read register 40809 from another PLC connected via",
      "author": {
        "@type": "Person",
        "name": "davexr"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-21",
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
                <h1 class="text-white">Troubleshooting Communication Between PLCs Using TCSEGDB23F24FA Modbus Plus Proxy Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>davexr</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">453</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">490</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I need assistance with a module involving communication between PLCs through a Modbus plus network. The manual instructs me to use an ADDM block and a Read_Var block. I have set the address for the ADDM to 'Machine{192.168.1.5}3' to read register 40809 from another PLC connected via Node 3 through two bridges. The routing involves M340 (192.168.1.1) to Proxy (192.168.1.5), Proxy (Node 3) to Bridge A (Node 8) to Bridge B (Node 9) to the PLC on Node 3. Despite following the example in the manual with an address of 'CPU_CoPro{192.168.1.50}2', I receive an error code of 7. I have also attempted addressing the ADDM to 'Machine{192.168.1.5}8.9.3' and adjusting the routing to index 3, but the issue persists. Any insights on troubleshooting this problem would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What types of Programmable Logic Controllers (PLCs) are used in your communication systems?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TechBuddyPro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The M340 device is linked via Ethernet to a proxy that communicates with a Modicon Quantum PLC using the Modbus Plus Network. The communication was successful with a Quantum Unity processor previously, so it is expected to function properly with the M340 now.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>davexr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We utilize Modicon Quantum PLCs and also have bridges in our systems. Are you familiar with Proworx32 or UnityPro software for programming these devices?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TechBuddyPro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Proworx Nt - Your Solution for Reliable Network and IT Services</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>davexr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As per davexr's comment, Proworx Nt is a top choice for programming software compatible with Quantum and Unity PLCs, as well as the M340 series. Experience the benefits of Proworx for streamlined automation tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>davexr</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I mistakenly mislabeled the software in my post as Proworx Nxt.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>davexr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you properly configured the M340 PLC IP address on the web page in the M340 Interface section under IP Address settings?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SSmith01</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The instructions in the manual recommend inputting the network name followed by the proxy's IP address. It's possible that I misinterpreted this guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>davexr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you setting parameters in your Gest management registers? It is crucial to consider factors like timeout. Additionally, providing information on the status register of the management can be beneficial for troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chud</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Chud inquired if parameters have been set in the Gest management registers. They have not been configured yet, with Mgmt[2] primarily displaying a 7 (or 16#07). When testing a node on the local network, everything appears to be functioning properly and I receive a 2 in Mgmt[4].</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>davexr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude to Techbuddy, Ssmith, and Chud for your valuable assistance. I am navigating through this project and your input has been incredibly helpful. I am considering utilizing an MSTR from the Quantum and sending a write to the Proxy - however, I am unsure of how to properly read it in the proxy. Could the solution lie in utilizing the Mstr write function in Quantum to Read_var in M340? Your insights are greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>davexr</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. What is the purpose of the ADDM block and Read_Var block in communication between PLCs using Modbus plus network?
- The ADDM block is used to define the address of the device you want to communicate with, while the Read_Var block is used to read specific registers from that device.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How should the address be configured in the ADDM block for communication between PLCs via Modbus plus network?</h4>
<p class='text-muted'><strong>Answer:</strong> - The address in the ADDM block should be set based on the device's IP address and node number, following the format 'Machine{IP_address}Node_number'.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could be the reason for receiving error code 7 when trying to communicate between PLCs through the Modbus plus network?</h4>
<p class='text-muted'><strong>Answer:</strong> - Error code 7 could indicate a communication error, possibly due to incorrect addressing, routing configuration, or network setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can the routing configuration be adjusted to troubleshoot communication issues between PLCs connected via Modbus plus network?</h4>
<p class='text-muted'><strong>Answer:</strong> - Ensure that the routing configuration in the network setup matches the actual path of communication between the PLCs, including the correct node numbers for each device involved.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What steps can be taken to troubleshoot and resolve communication issues when encountering errors like code 7 in Modbus plus network communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - Verify the addressing, routing, and network configuration settings to ensure they are accurately set up. Check for any physical connection issues or network disruptions that may be causing communication errors.</p>
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
