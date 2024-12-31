
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am currently working with a 1756-L81E PLC equipped with an EN2T module in slot1 for network communication. Additionally, there is an EEN2TR module in slot2 communicating with rack 2 1756-L81E. Following the instructions provided by Rockwell, I successfully imported and configured the Modbus Client AIO. I specifically">
    <meta name="keywords" content="controllogix plc troubleshooting, controllogix en2t module configuration, modbus client aio setup, rockwell plc error code -8, plc firmware version 011">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-client-aio-communication-problems">
    <title>Troubleshooting ControlLogix Client AIO Communication Problems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ControlLogix Client AIO Communication Problems | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am currently working with a 1756-L81E PLC equipped with an EN2T module in slot1 for network communication. Additionally, there is an EEN2TR module in slot2 communicating with rack 2 1756-L81E. Following the instructions provided by Rockwell, I successfully imported and configured the Modbus Client AIO. I specifically">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-client-aio-communication-problems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ControlLogix Client AIO Communication Problems | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am currently working with a 1756-L81E PLC equipped with an EN2T module in slot1 for network communication. Additionally, there is an EEN2TR module in slot2 communicating with rack 2 1756-L81E. Following the instructions provided by Rockwell, I successfully imported and configured the Modbus Client AIO. I specifically">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-client-aio-communication-problems"
      },
      "headline": "Troubleshooting ControlLogix Client AIO Communication Problems",
      "description": "Greetings, I am currently working with a 1756-L81E PLC equipped with an EN2T module in slot1 for network communication. Additionally, there is an EEN2TR module in slot2 communicating with rack 2 1756-L81E. Following the instructions provided by Rockwell, I successfully imported and configured the Modbus Client AIO. I specifically",
      "author": {
        "@type": "Person",
        "name": "CntrlAltDstry"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-20",
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
                <h1 class="text-white">Troubleshooting ControlLogix Client AIO Communication Problems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>CntrlAltDstry</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">396</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">136</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am currently working with a 1756-L81E PLC equipped with an EN2T module in slot1 for network communication. Additionally, there is an EEN2TR module in slot2 communicating with rack 2 1756-L81E. Following the instructions provided by Rockwell, I successfully imported and configured the Modbus Client AIO. I specifically set the .LocalSlot to 1 for the purpose of retrieving data from a Scadapack on the network to perform calculations.

Upon enabling Client_01_EN, I encountered an immediate fault activation with a last error code of -8 (Create Soc Failed). The PLC I am using is operating on version 30.011. It is worth noting that we have another PLC (1769-L33ER) running the same Client AIO without any issues. The only discrepancy being that the Ethernet connection on this PLC is directly from the processor, rather than through a separate Ethernet card, and it is operating on version 33.11.

I am seeking advice on any potential oversights on my end or if the issue may be related to a network firewall. Your insights are greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are facing uncertainties about your task involving a path, it is crucial to ensure the correct configuration of the path. Implementing a pathway through an ENxT varies significantly from a direct connection to the processor. Proper navigation through the backplane is necessary in order to establish successful communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our physical network at the location is equipped with numerous devices operating on a 10.1.5.1 gateway. The PLC communicates within this network using the 1756-EN2T card in slot 1 on the gateway, which is assigned the IP address 10.1.5.10. Additionally, there is a Scadapack connected to the same gateway with the IP address 10.1.5.11. In the Client AIO configuration, the .LocalSlot is configured to 1 to specify the slot of the EN2T Ethernet card on the network. The .LocalAddress is left blank, as the processor is the 5580 model as indicated in the manual. The .DestAddress is set to 10.1.5.11 in order to retrieve information from the Scadapack. The .DestinationPort is standardized at 502 for both devices, ensuring seamless communication between them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CntrlAltDstry</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure proper communication with the PLC, it is essential to determine the slot it is located in. This entails setting up a path from the enbts IP address, through the backplane, to the PLC processor. The connection is successful on the 1769 compact model as the IP address corresponds to the processor, utilizing the built-in port. While I am not well-versed in the scadapack AOI, in a typical message path, the format would be xxx.xxx.xxx.xxx,1,Y, with 1 indicating the backplane and Y representing the PLC slot. This information is crucial for establishing a seamless and efficient communication network within the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To troubleshoot error -8, start by verifying the firmware version of your EN2T module, ensuring it is either EN2T or EN2TR, not ENBT. Next, review the "Create" message configuration to identify any fault codes. Share RSlinx screenshots for further analysis. This process will help diagnose and resolve error -8 issues effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears to be an EN2T device. Here is some information on the EN2T module and instructions on how to create a message.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CntrlAltDstry</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like your pathway may be incorrect. Are you utilizing the Message Tag in a MSG command? Navigate to the communication tab within that command for further clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure your EN2T firmware is up to date to avoid issues. As per technote IN37624, it should be version 5.007 or above. If you encounter error code 16#0005, it means your firmware is not at the required level.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I remember there being an excellent blog post on effective messaging strategies by JesperMP. I suggest searching for it as it provides a valuable explanation. I have it saved on my USB drive at home. This resource can greatly benefit you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Many thanks to Contr Conn for assisting me in running an Ethernet cable from the AB PLC processor to the network switch. By adjusting my slot to 0, successful communication was established and values were transmitted. Your expertise is truly magical and greatly valued.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CntrlAltDstry</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the benefits of updating the EN2T firmware today. Unleash the power of the latest firmware for your EN2T device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I plan to attempt that too. Currently, the device is connected to a plant website and is linked to our Scada system via an ethernet port. I am hesitant to perform this task remotely over the network. The next time I have physical access to the device, I will update the EN2T and disconnect the secondary connection that was added.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>CntrlAltDstry</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the fault activation with error code -8 (Create Soc Failed) when enabling the Client_01_EN on the 1756-L81E PLC with an EN2T module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error code -8 (Create Soc Failed) could indicate issues with socket creation for communication. Possible causes could include network configuration errors, firewall settings, or compatibility issues with the firmware version of the PLC.</p>
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
