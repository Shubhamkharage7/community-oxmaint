
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I am currently attempting to modify the IP address of an Omron PLC (NJ30-1200) and HMI (NB7W-TW01B) in order to connect them to our network. Sysmac Studio is the software utilized for the PLC, while NB Designer is employed for the HMI. However, after adjusting the IP addresses,">
    <meta name="keywords" content="omron plc, hmi ip addresses, connectivity issue, troubleshooting, modify ip address, sysmac studio, nb designer, communication lost, nj30-1200, nb7w-tw01b, network connection, plc software, hmi">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-after-modifying-omron-plc-and-hmi-ip-addresses">
    <title>Troubleshooting Connectivity Issue After Modifying Omron PLC and HMI IP Addresses | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Connectivity Issue After Modifying Omron PLC and HMI IP Addresses | Oxmaint Community">
    <meta property="og:description" content="Greetings! I am currently attempting to modify the IP address of an Omron PLC (NJ30-1200) and HMI (NB7W-TW01B) in order to connect them to our network. Sysmac Studio is the software utilized for the PLC, while NB Designer is employed for the HMI. However, after adjusting the IP addresses,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-after-modifying-omron-plc-and-hmi-ip-addresses">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Connectivity Issue After Modifying Omron PLC and HMI IP Addresses | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I am currently attempting to modify the IP address of an Omron PLC (NJ30-1200) and HMI (NB7W-TW01B) in order to connect them to our network. Sysmac Studio is the software utilized for the PLC, while NB Designer is employed for the HMI. However, after adjusting the IP addresses,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-after-modifying-omron-plc-and-hmi-ip-addresses"
      },
      "headline": "Troubleshooting Connectivity Issue After Modifying Omron PLC and HMI IP Addresses",
      "description": "Greetings! I am currently attempting to modify the IP address of an Omron PLC (NJ30-1200) and HMI (NB7W-TW01B) in order to connect them to our network. Sysmac Studio is the software utilized for the PLC, while NB Designer is employed for the HMI. However, after adjusting the IP addresses,",
      "author": {
        "@type": "Person",
        "name": "Dshahzad"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-04",
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
                <h1 class="text-white">Troubleshooting Connectivity Issue After Modifying Omron PLC and HMI IP Addresses</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Dshahzad</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">505</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">287</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I am currently attempting to modify the IP address of an Omron PLC (NJ30-1200) and HMI (NB7W-TW01B) in order to connect them to our network. Sysmac Studio is the software utilized for the PLC, while NB Designer is employed for the HMI. However, after adjusting the IP addresses, communication between the PLC and HMI is lost. The PLC IP address is altered in Sysmac Studio, and both the PLC and HMI IP addresses are updated in NB Designer. Your assistance in troubleshooting this connectivity issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you adjusted the NODE rotary dials on the NJ to align with the final octet of the PLC IP address?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>IO_Rack inquired about aligning the NODE rotary dials on the NJ with the final octet in the PLC IP address. Thank you for your response. I haven't adjusted any rotary dials as there are no such dials on the CPU, only DIP switches. Should I also modify the DIP switches? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dshahzad</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When configuring the Node Address for the PLC/HMI in NB Designer, ensure it matches the last octet of the IP address. Also, verify the address updates in the communication settings. In Sysmac Studio, navigate to "Built-in Ethernet/IP Port Settings" and review the FINS Settings to confirm the node address. If automatic generation is enabled, it will reflect the last octet of your IP address. Additionally, check if both IP addresses being changed are on the same subnet. If not, consider adding entries to the IP address table for proper communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Chelton inquired: In NB Designer, have you assigned the PLC/HMI node address as the last octet of the IP address? Also, verify in the communication settings that the addresses have been updated. In Sysmac Studio, navigate to "Built-in Ethernet/IP Port Settings" and check the node address set in the FINS Settings. If automatic generation is enabled, it will use the last octet of the IP address. Are both IPs being changed within the same subnet? If not, additional entries may need to be added to the IP address table. 

Hello Chelton,
I have not yet altered the node address. Please refer to the table below:
Existing:
- IP Address: 192.168.0.1
- Node: 1
Proposed:
- IP Address: 192.168.40.7
- Node: 1
Should we update the node to 7 in the proposed configuration? I have also included the communication settings from NB Designer for your reference. Please let me know. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dshahzad</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although it is not required for the node address to match the last octet of the IP address, aligning them can streamline FINS communication. It is recommended to set the node address to 7 for optimal functionality. Additionally, ensure that the HMI (NB) node address is configured correctly. If the node addresses do not align with the last octet address, refer to the address tables in both the NB and PLC for resolution. This can help facilitate seamless communication between devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Dshahzad clarified that there are no rotary dials on the CPU, but there are DIP switches that may need to be changed. It seems that rotary dials are found on older Omron PLCs, as Chelton provided instructions on properly changing the PLC node for the NJ/NX series.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We are grateful for all the support we've received in ensuring the successful update of our IP address, which is now functioning as intended. Thank you for your ongoing support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Dshahzad</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why did the communication between the Omron PLC and HMI get lost after modifying their IP addresses?</h4>
<p class='text-muted'><strong>Answer:</strong> - When the IP addresses of the Omron PLC and HMI are changed, it is essential to ensure that the new addresses are within the same subnet and configured correctly to maintain communication between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the connectivity issue between the Omron PLC and HMI after IP address modifications?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can start by verifying the IP settings on both the PLC and HMI to confirm they are correctly configured. Additionally, check the network settings in both Sysmac Studio and NB Designer to ensure they match the new IP addresses.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What software should I use to modify the IP address of an Omron PLC and HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - Sysmac Studio is typically used to configure the Omron PLC's IP address, while NB Designer is employed for the HMI. Ensure you are using the correct software for each device to avoid connectivity issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it necessary to update both the PLC and HMI IP addresses in their respective software after making changes?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is crucial to update the IP addresses of both the Omron PLC and HMI in their respective software (Sysmac Studio for the PLC and NB Designer for the HMI) to ensure proper communication between the devices on the network.</p>
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
