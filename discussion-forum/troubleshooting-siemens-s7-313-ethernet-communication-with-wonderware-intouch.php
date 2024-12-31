
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello Siemens experts! I am currently working on establishing communication with a Siemens S7-313 PLC via Ethernet. Here is a breakdown of the project configuration: - PLC: S7-313-2D with DPCP Card 343-1EX11-0XE0 (IP: 192.168.0.2, subnet 255.255.255.0) - Server: WinXP Server 64 Bit with IP 192.168.0.98 and firewall disabled -">
    <meta name="keywords" content="siemens s7-313, ethernet communication, wonderware intouch, troubleshooting, plc configuration, dpcp card 343-1ex11-0xe0, ip address, subnet, winxp server, firewall disabled, ping success">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-s7-313-ethernet-communication-with-wonderware-intouch">
    <title>Troubleshooting Siemens S7-313 Ethernet Communication with Wonderware InTouch | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Siemens S7-313 Ethernet Communication with Wonderware InTouch | Oxmaint Community">
    <meta property="og:description" content="Hello Siemens experts! I am currently working on establishing communication with a Siemens S7-313 PLC via Ethernet. Here is a breakdown of the project configuration: - PLC: S7-313-2D with DPCP Card 343-1EX11-0XE0 (IP: 192.168.0.2, subnet 255.255.255.0) - Server: WinXP Server 64 Bit with IP 192.168.0.98 and firewall disabled -">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-s7-313-ethernet-communication-with-wonderware-intouch">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Siemens S7-313 Ethernet Communication with Wonderware InTouch | Oxmaint Community">
    <meta name="twitter:description" content="Hello Siemens experts! I am currently working on establishing communication with a Siemens S7-313 PLC via Ethernet. Here is a breakdown of the project configuration: - PLC: S7-313-2D with DPCP Card 343-1EX11-0XE0 (IP: 192.168.0.2, subnet 255.255.255.0) - Server: WinXP Server 64 Bit with IP 192.168.0.98 and firewall disabled -">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-siemens-s7-313-ethernet-communication-with-wonderware-intouch"
      },
      "headline": "Troubleshooting Siemens S7-313 Ethernet Communication with Wonderware InTouch",
      "description": "Hello Siemens experts! I am currently working on establishing communication with a Siemens S7-313 PLC via Ethernet. Here is a breakdown of the project configuration: - PLC: S7-313-2D with DPCP Card 343-1EX11-0XE0 (IP: 192.168.0.2, subnet 255.255.255.0) - Server: WinXP Server 64 Bit with IP 192.168.0.98 and firewall disabled -",
      "author": {
        "@type": "Person",
        "name": "marwan_13"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-01",
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
                <h1 class="text-white">Troubleshooting Siemens S7-313 Ethernet Communication with Wonderware InTouch</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>marwan_13</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">7822</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">264</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello Siemens experts! I am currently working on establishing communication with a Siemens S7-313 PLC via Ethernet. Here is a breakdown of the project configuration:
- PLC: S7-313-2D with DPCP Card 343-1EX11-0XE0 (IP: 192.168.0.2, subnet 255.255.255.0)
- Server: WinXP Server 64 Bit with IP 192.168.0.98 and firewall disabled
- Successfully able to ping the PLC with all packets returning under 1ms
- Archestra: SMC Version DASSIDirect2 with a node named S7300 using port type "S7Cp"
- Wonderware InTouch Window Maker Version 10.5 setup

Do I need to configure the CP card communication in Siemens for it to work effectively? Your assistance is appreciated. Regards, Marwan</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up, focus on configuring the CP itself without the need to adjust the server. Make sure that your remote slot matches the CPU slot 2 for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RheinhardtP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to RheinhardtP, it is recommended to configure the CP itself instead of the Server. Ensure that your remote slot matches the CPU slot 2. Despite configuring the CP and setting the remote connection to 2, the issue persists.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>marwan_13</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Set your Server name to "localhost" for improved performance and security.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RheinhardtP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When configuring your Wonderware server, Mr. RheinhardtP suggests setting the server name to "localhost." Simply adjust the Configuration Control Panel by specifying the IP address and subnet. Thank you for the guidance, Marwan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>marwan_13</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up your Wonderware configuration, ensure that your DA server is running on the same machine by specifying either the machine name, IP address, or localhost. However, make sure to clearly reference the node where the DAS is located. This step is crucial for seamless integration and communication within your Wonderware system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RheinhardtP</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In the Wonderware configuration, make sure to properly identify the node where the DA server is running by referencing the machine name, IP address, or localhost IP. For CP card troubleshooting, ensure that the diagnostic tool is running but the Send/Receive configuration may need to be set up. Do you know how to configure this? Thank you, Marwan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>marwan_13</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Configuring send receive for communication with InTouch should not be necessary. This feature is specifically for inter-PLC communications between CPUs. Once you have updated your Nodename, make sure to upload pictures of your configuration. Additionally, provide your SMC log file for more comprehensive diagnostics.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RheinhardtP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I noticed that on my SMC, within the DA server manager, I am only able to view FSGateway and not DASSIDirect2 or any other OEM services. Can anyone advise me on how to resolve this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bolu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access the necessary driver for your Intouch device, you can install it from the Intouch device drivers installation medium. Alternatively, if you are a registered user on AVEVA, you may have the option to download the driver from their platform. AVEVA's system may make it challenging to locate and acquire the specific driver you need.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Thomas_v2</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How do I establish communication between a Siemens S7-313 PLC and Wonderware InTouch using Ethernet?
- To establish communication between a Siemens S7-313 PLC and Wonderware InTouch using Ethernet, you need to ensure the proper configuration of the CP card in the Siemens PLC and set up the communication parameters in Wonderware InTouch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the key components needed for Ethernet communication between a Siemens S7-313 PLC and Wonderware InTouch?</h4>
<p class='text-muted'><strong>Answer:</strong> - The key components needed for Ethernet communication between a Siemens S7-313 PLC and Wonderware InTouch include the PLC (S7-313-2D with DPCP Card 343-1EX11-0XE0), a server with the appropriate IP configuration, Archestra software, and Wonderware InTouch Window Maker Version 10.5.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Do I need to configure the CP card communication in Siemens for effective communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, configuring the CP card communication in Siemens is essential for effective communication between the S7-313 PLC and Wonderware InTouch. Make sure to set up the CP card with the correct parameters and establish the necessary connections in the Siemens programming environment.</p>
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
