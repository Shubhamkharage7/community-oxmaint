
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently facing a challenge in simulating a Siemens HMI panel using a NAT connection to a PLC. While I can easily change the PLCs IP address to the NAT IP through extended online access and downloading, I am encountering difficulty in changing the HMIs IP address">
    <meta name="keywords" content="siemens hmi panel, nat connection, plc simulation, ip address configuration, routed nat ip, simulating siemens hmi, extended online access, downloading plc, network address translation, hmi panel configuration, nat ip setup, siemens sim">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-simulate-siemens-hmi-panel-with-nat-connection-to-plc">
    <title>How to Simulate Siemens HMI Panel with NAT Connection to PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Simulate Siemens HMI Panel with NAT Connection to PLC | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently facing a challenge in simulating a Siemens HMI panel using a NAT connection to a PLC. While I can easily change the PLCs IP address to the NAT IP through extended online access and downloading, I am encountering difficulty in changing the HMIs IP address">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-simulate-siemens-hmi-panel-with-nat-connection-to-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Simulate Siemens HMI Panel with NAT Connection to PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently facing a challenge in simulating a Siemens HMI panel using a NAT connection to a PLC. While I can easily change the PLCs IP address to the NAT IP through extended online access and downloading, I am encountering difficulty in changing the HMIs IP address">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-simulate-siemens-hmi-panel-with-nat-connection-to-plc"
      },
      "headline": "How to Simulate Siemens HMI Panel with NAT Connection to PLC",
      "description": "Hello, I am currently facing a challenge in simulating a Siemens HMI panel using a NAT connection to a PLC. While I can easily change the PLCs IP address to the NAT IP through extended online access and downloading, I am encountering difficulty in changing the HMIs IP address",
      "author": {
        "@type": "Person",
        "name": "Ben93"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-03",
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
                <h1 class="text-white">How to Simulate Siemens HMI Panel with NAT Connection to PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Ben93</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">620</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">38</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently facing a challenge in simulating a Siemens HMI panel using a NAT connection to a PLC. While I can easily change the PLC's IP address to the NAT IP through extended online access and downloading, I am encountering difficulty in changing the HMI's IP address to a routed NAT IP for simulation purposes. I would greatly appreciate any assistance on how I can accomplish this. Thank you in advance for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you wondering whether to use a TIA Panel or WinCC Advanced for your project? Add a button featuring the system function "ChangeConnection" to easily customize the IP address, rack, and slot in the parameters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One option to consider is creating a duplicate of the PLC within the project, adjusting the IP address, and then linking the HMI to the clone. Another approach is to export the PLC as a device proxy, import it back into the project, update the IP of the proxy, and then connect the HMI to it. This method may be more straightforward and easier to manage in terms of updates. 

If the actual HMI is on the same local network as the PLC and the simulated HMI is located on a different side of the NAT, it may be necessary to incorporate 2 HMIs into the project, which could potentially complicate matters.

Regarding TIA Panel or WinCC Advanced, JesperMP suggested adding a button with the system function ChangeConnection. With this function, users can manually input the IP address, rack, and slot in the parameters. It's important to note that the ChangeConnection system function may not support 1500s for Comfort Panels, only 300/400. However, Unified may support 1500s for a similar function. Depending on the user's setup, this information may or may not be applicable. While it is possible to use the 300 connection type to connect to a 1500, it is essential to ensure that Optimization is turned off for any components the HMI interacts with.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This TIA panel, linked to a 1215 CPU, is not your typical comfort panel. While there isn't a physical HMI, HMIs are utilized to configure the PLC via a simulator.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ben93</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ben93 emphasized that the panel in question is a TIA panel, not a comfort panel. Can you provide more specific details on the exact type of panel being discussed?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the error in my previous statement. The device in question is actually a comfort panel, specifically the 6AV2 124-0MC01-0AX0 model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ben93</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have any thoughts or insights on this particular subject? Share your ideas and opinions with us!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ben93</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MK42 suggested creating a clone of the PLC in the project, adjusting its IP address, and then connecting the HMI to it. Alternatively, you could export the PLC as a device proxy, import it into the project, change the proxy's IP address, and connect the HMI to it. This method would be simpler and easier to update. However, if the real HMI is on the PLC's local network and the HMI simulation is on a different network behind a NAT, you may need to have two HMIs in the project, which could add complexity.

It's important to note that the ChangeConnection system function of a Comfort Panel does not support 1500s, only 300/400 models. Unified, on the other hand, does support 1500s for the equivalent function. Depending on which model you are using, this information may or may not be helpful. It is possible to use the 300 connection type to connect to a 1500, but Optimization needs to be turned off for everything the HMI interacts with. This raises the question of whether changing the settings of the "wrong" PLC may impact the ability to use the HMI simulation on the PLC in the real world.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ben93</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to mk42, the ChangeConnection feature on a Comfort Panel does not support the 1500 series, only the 300/400 series. However, it is possible to use the 300 connection type to connect to a 1500 series PLC, but Optimization must be turned off. Changing the PLC type to S7-300/400 may also be an option, limiting access to non-optimized DBs and no symbolic access. Ben93 expressed concern about changing settings on the "wrong" PLC, but if the HMI displays correct tag values when online, it should work fine. Consider trying out a cloned HMI and share your experience with us. If there are multiple PLCs on the same network, ensure proper configuration for successful communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am excited to test this out, thank you for your recommendation!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ben93</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I change the PLC's IP address to a NAT IP for simulation?
- You can change the PLC's IP address to the NAT IP through extended online access and downloading.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I change the HMI's IP address to a routed NAT IP for simulation purposes?</h4>
<p class='text-muted'><strong>Answer:</strong> - Changing the HMI's IP address to a routed NAT IP for simulation purposes may require specific configuration steps. You may need to access the HMI's settings or configuration to make this change.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific tools or software recommended for simulating Siemens HMI panel with NAT connection to a PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - There may be specific tools or software available for simulating Siemens HMI panel with NAT connection to a PLC. It is recommended to explore Siemens' official resources or forums for guidance on suitable simulation tools.</p>
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
