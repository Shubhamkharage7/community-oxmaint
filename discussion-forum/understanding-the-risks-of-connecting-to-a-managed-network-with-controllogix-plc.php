
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am a newcomer to the industry and I am really enjoying my experience so far. I am interested in setting up an online ControlLogix PLC on a network supported by a “Managed” switch. I have heard that there is a risk of everything going offline when connecting">
    <meta name="keywords" content="controllogix plc, managed network, risks of connecting, online setup, managed switch, control system offline, industry newcomer, network support, network connection risks, clarification needed, network management, plc connectivity risks, control system reliability, managed switch">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-the-risks-of-connecting-to-a-managed-network-with-controllogix-plc">
    <title>Understanding the Risks of Connecting to a Managed Network with ControlLogix PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding the Risks of Connecting to a Managed Network with ControlLogix PLC | Oxmaint Community">
    <meta property="og:description" content="Hello, I am a newcomer to the industry and I am really enjoying my experience so far. I am interested in setting up an online ControlLogix PLC on a network supported by a “Managed” switch. I have heard that there is a risk of everything going offline when connecting">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-the-risks-of-connecting-to-a-managed-network-with-controllogix-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding the Risks of Connecting to a Managed Network with ControlLogix PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am a newcomer to the industry and I am really enjoying my experience so far. I am interested in setting up an online ControlLogix PLC on a network supported by a “Managed” switch. I have heard that there is a risk of everything going offline when connecting">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-the-risks-of-connecting-to-a-managed-network-with-controllogix-plc"
      },
      "headline": "Understanding the Risks of Connecting to a Managed Network with ControlLogix PLC",
      "description": "Hello, I am a newcomer to the industry and I am really enjoying my experience so far. I am interested in setting up an online ControlLogix PLC on a network supported by a “Managed” switch. I have heard that there is a risk of everything going offline when connecting",
      "author": {
        "@type": "Person",
        "name": "PLCrookiee"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-10",
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
                <h1 class="text-white">Understanding the Risks of Connecting to a Managed Network with ControlLogix PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLCrookiee</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">468</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">342</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am a newcomer to the industry and I am really enjoying my experience so far. I am interested in setting up an online ControlLogix PLC on a network supported by a “Managed” switch. I have heard that there is a risk of everything going offline when connecting to a managed network. I would like some clarification on what this statement means, as my intention is not to take the control system offline.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you ever heard about the risks of going offline when connecting to a managed network? In a situation I encountered, the network switch was programmed to automatically disconnect if the connected device's MAC address did not match its configuration. However, this is not a common occurrence and generally does not pose a threat to network stability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello PLCCrookie,

Managed switches typically require password authentication to ensure only authorized administrators can modify settings. These switches have the capability to bring multiple components offline if someone tampers with settings like baud rate, port activations, or VLAN configurations. To avoid potential disruptions, ensure your PC's IP address is assigned dynamically by the company's DHCP. If IP addresses on the automation network are manually allocated, double-check that your PC's address is unique and compatible with ControlLogix's IP scheme. This will help prevent any conflicts and maintain smooth operation of your network.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For a well-managed network, it is crucial to communicate with the network administrator and inquire about any potential issues. Creating an IP conflict can lead to receiving notifications from the network team, indicating that they are actively monitoring and safeguarding the network. I once knew a contractor who, despite being skilled in his work, made the mistake of duplicating an IP address on a managed network. This triggered numerous security alerts, causing a commotion among the network personnel. As a result, we had to reach out to the contractor's company and prohibit him from further engagements with our network. It is essential to handle managed networks with care and seek guidance from the administrators to avoid such disruptions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Waterboy emphasized the importance of contacting the network manager regarding any IP conflicts to prevent mishaps and ensure a smoothly running network. It is crucial to seek guidance from the network administrator to avoid potential issues before connecting devices to the network. This proactive approach shows that the network is well-maintained and carefully managed for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy advised: If you are dealing with a managed network, it is crucial to communicate with the network administrator to avoid IP conflicts. The administrator has put thought into the network's infrastructure and it is important to respect their guidelines. I once knew a contractor who, when encountering a managed network, simply duplicated an existing device's IP address on his laptop to gain access. This led to multiple security alerts and ultimately resulted in him being banned from further work. It would have been wiser for him to attempt to obtain an IP address from the DHCP server by configuring his computer for automatic assignment. Waterboy, your cautionary tale serves as a reminder to always follow proper network protocols and seek guidance from network administrators to avoid disruptions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
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
            <p>AlfredoQuintero commented on TheWaterboy's unsettling tale, suggesting he should have attempted to configure his computer for dynamically assigned IP settings to check if it received an IP address from the DHCP server. TheWaterboy was a skilled individual who could accomplish tasks rapidly, but his methods sometimes clashed with security protocols. Despite the network being secure with shut-off ports and IDS monitoring, he would not hesitate to unplug connections without consulting IT first. This often led to tensions and eventually resulted in consequences. Years later, his rapid work ethic took a toll when he fell into drug use after meeting a woman. It remains a cautionary story about the consequences of cutting corners for the sake of speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy expressed understanding for the time-consuming nature of the request. While it may be uncommon to find a contractor who wouldn't take advantage of such an opportunity to overcharge, the scenario also highlighted the potential for miscommunication. For example, the operator may have misinterpreted the situation when the individual was actually liaising with the IT team to secure network access.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, mk42 pointed out the challenges of dealing with contractors who may overbill for their services. It's quite uncommon to find a contractor who wouldn't take advantage of such opportunities. For instance, a simple error like a wire being in the wrong terminal can lead to lengthy and costly coordination involving multiple crews, safety officers, and lockout/tagout procedures. This can result in significant delays and expenses for just a minor mistake. This situation is reminiscent of how car owner's manuals used to include instructions for valve adjustments, but now caution against drinking battery acid.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When discussing the concept of "taking everything offline", you might have come across the issue with the spanning tree protocol. I personally encountered this problem a few years back when managing Stratix switches on our machines. Initially, it seemed like our Ethernet connections were randomly going down, but after some investigation, we realized that every time one of the machines on the network was restarted, all connections went offline temporarily. We initially suspected foul play, but it turned out to be a configuration issue related to the spanning tree protocol. A Rockwell technician reconfigured the switches, resolving the issue. The spanning tree protocol sends messages to all switches in the network during boot, and a misconfiguration led to temporary disconnection of the switches.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>crawler009</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the past, Stratix switches did not automatically acknowledge the STP election status of other switches in the network. When a Stratix switch was added to a network with non-Stratix switches, it would cause port shutdowns by asserting its dominance. This behavior, influenced by AB, was not seen in Cisco models which Stratix is based on. This issue was easily resolved in the configuration settings, but initially, AB assumed there would only be Stratix switches on the network. Due to problems arising from this assumption, the default setting was promptly fixed in the firmware by AB.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. What are the risks associated with connecting a ControlLogix PLC to a managed network with a "Managed" switch?
- When connecting a ControlLogix PLC to a managed network with a "Managed" switch, there is a risk of the control system going offline due to potential network configuration issues or conflicts.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I prevent the control system from going offline when connecting to a managed network with ControlLogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To minimize the risk of the control system going offline, ensure proper network configuration settings, avoid conflicts with existing network devices, and consider implementing redundancy or failover mechanisms.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there specific precautions or best practices to follow when connecting ControlLogix PLC to a managed network?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is recommended to consult with network experts or system integrators to ensure proper network segmentation, VLAN configurations, and security measures are in place to maintain system uptime and reliability.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps should I take to troubleshoot and resolve any connectivity issues that may arise after connecting ControlLogix PLC to a managed network?</h4>
<p class='text-muted'><strong>Answer:</strong> - In case of connectivity issues, troubleshoot by checking network settings, firewall rules, and potential bottlenecks. Engage with IT support or automation specialists to diagnose and resolve any technical issues affecting the PLC's connection to the managed network.</p>
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
