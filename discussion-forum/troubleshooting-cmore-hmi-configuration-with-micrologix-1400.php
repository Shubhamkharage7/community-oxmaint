
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I am a newcomer with several years of experience working with Programmable Logic Controllers (PLCs). Currently, I am faced with the task of configuring a Micrologix 1400 to a Cmore 10-inch Human-Machine Interface (HMI). Despite setting up a test program to toggle bits in the HMI, I am">
    <meta name="keywords" content="cmore hmi configuration, micrologix 1400, troubleshooting, plc, programmable logic controllers, ethernet connection, rslogix 500, cmore communication, hmi button, b9:0/0, rs5000">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-cmore-hmi-configuration-with-micrologix-1400">
    <title>Troubleshooting Cmore HMI Configuration with Micrologix 1400 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Cmore HMI Configuration with Micrologix 1400 | Oxmaint Community">
    <meta property="og:description" content="Greetings! I am a newcomer with several years of experience working with Programmable Logic Controllers (PLCs). Currently, I am faced with the task of configuring a Micrologix 1400 to a Cmore 10-inch Human-Machine Interface (HMI). Despite setting up a test program to toggle bits in the HMI, I am">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-cmore-hmi-configuration-with-micrologix-1400">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Cmore HMI Configuration with Micrologix 1400 | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I am a newcomer with several years of experience working with Programmable Logic Controllers (PLCs). Currently, I am faced with the task of configuring a Micrologix 1400 to a Cmore 10-inch Human-Machine Interface (HMI). Despite setting up a test program to toggle bits in the HMI, I am">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-cmore-hmi-configuration-with-micrologix-1400"
      },
      "headline": "Troubleshooting Cmore HMI Configuration with Micrologix 1400",
      "description": "Greetings! I am a newcomer with several years of experience working with Programmable Logic Controllers (PLCs). Currently, I am faced with the task of configuring a Micrologix 1400 to a Cmore 10-inch Human-Machine Interface (HMI). Despite setting up a test program to toggle bits in the HMI, I am",
      "author": {
        "@type": "Person",
        "name": "Jmccoy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-22",
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
                <h1 class="text-white">Troubleshooting Cmore HMI Configuration with Micrologix 1400</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jmccoy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">807</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">25</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I am a newcomer with several years of experience working with Programmable Logic Controllers (PLCs). Currently, I am faced with the task of configuring a Micrologix 1400 to a Cmore 10-inch Human-Machine Interface (HMI). Despite setting up a test program to toggle bits in the HMI, I am unable to do so. The PLC and HMI are connected via Ethernet, but I am perplexed as to why I cannot toggle the switches on the HMI to manipulate the PLC logic. I am attempting to make the input true using B9:0/0 "Red_Light_HMI". Despite attempting to import/export data between RSlogix 500 and Cmore, I have been unsuccessful. While I can observe communication between the PLC and HMI, the tags only import as "B9:0/0" without any action when assigned to the HMI button. I have even tried modifying B9:0/0 to 10 without success. This process has been attempted multiple times with RS5000 and Studio software. I am seeking assistance in understanding where I may be going wrong in this setup.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What are the different types of Cmore panels available, such as EA3, EA9, and CM5?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeexplorer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Check out these screenshots from my Model Train Project, featuring a Micrologix 1400 and Cmore Micro (EA3) HMI. The unique aspect of my setup is the Ethernet configuration. My project is seamlessly integrated into my home network, with static IP addresses for the PLC and HMI reserved in the router. To facilitate communication, a gateway address is set in the Micrologix. Additionally, I have another HMI with a 4-inch display that runs on battery and wireless. This allows me to monitor and control the trains from any location within my house. For direct PLC to HMI communication, simply set the PLC's IP address to 192.168.1.1 with a subnet of 255.255.255.0, and the HMI's IP address to 192.168.1.2 on the same subnet. I hope this information is helpful for your own model train projects.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mikeexplorer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Some of our operations are powered by ML1400 systems communicating with 6" EA9s. My configuration closely resembles that of mikeexplorer's screenshots. Could you please provide your RSLogix 500 and C-More files for reference?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The EA9 is connected to the PLC via Ethernet cable, with a serial connection used to view the PLC. The PLC's IP address and subnet are 192.168.2.2 and 255.255.255.0, respectively, while the HMI's IP address is on the same subnet at 192.168.2.3. Screenshots will be shared later in the office. The issue seems to be that tags are not importing correctly into the cmore project. I created two toggle switches, B9:0/1 and B9:0/2, which import with their designated names. However, toggling one switch also affects the other, as if they share the same tag, which is not reflected in the Rs500 program. This could be a simple oversight due to fatigue from recent night shifts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmccoy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What are SYMBOLS and how do they impact our lives? Discover the significance of SYMBOLS in culture and communication. Explore the meaning and power of SYMBOLS in various contexts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you attempted generating tags within Cmore instead of importing them from the ML1400 project? By doing so, you may be able to confirm whether there is an issue with the import process as suspected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with serial connection and Ethernet, it's important to note that they are not interchangeable. To ensure proper data formatting, I recommend manually creating a variety of tags for each datatype when working with a new platform. Additionally, I suggest opening the CSV file in Notepad++ before making any changes and working with a duplicate copy in Excel. This allows you to easily identify and correct any added or removed characters by Excel before re-importing the file.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I initially attempted to import the cmore tags into Rs500, I encountered recurring errors. Additionally, I currently rely on a serial to USB connection to connect online with the micrologix due to IT updates disrupting my Ethernet drivers. Typically, I exclusively work with Ethernet, and the PLC and HMI are currently linked via an Ethernet cable for communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmccoy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When attempting to import C-More tags into RS500, it is important to note that the formats are quite different. Typically, the PLC serves as the "source" with the HMI reflecting the PLC, not vice versa. One recommended approach is to manually create the tags in C-More, pointing to the PLC addresses, to test functionality.

In addition, dealing with IT policies can be frustrating but it is important to address this issue directly. Consider connecting your PC to the same physical network as the PLC and HMI. Are they connected directly or through a switch or hub? This can help troubleshoot any connectivity issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When attempting to import C-More tags into RS500, it's important to note that they are in different formats. Typically, the PLC serves as the "source" and the HMI reflects the PLC's data. To start, manually create tags in C-More that point to the PLC's addresses to test compatibility.

Dealing with IT policies can be frustrating, but it's worth discussing with them. Try connecting your PC directly to the same network as the PLC and HMI. Ensure they are either patched together or connected through a switch or hub for proper communication.

After starting a new C-More project and importing tags, everything started working correctly. Double-check settings as tweaking too many can lead to issues. Thank you for the assistance! Also, consider updating your VM as it's still on Windows 7.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmccoy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I unable to toggle bits in the Cmore HMI after configuring it with a Micrologix 1400 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to the configuration settings, data mapping, or communication setup between the PLC and HMI. Ensure that the tags are correctly imported/exported and mapped for proper interaction.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the problem of not being able to manipulate the PLC logic through the HMI switches?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Check the data types, addresses, and communication settings for consistency between RSLogix 500, the Micrologix 1400, and the Cmore HMI. Verify that the tags are properly assigned and that the HMI buttons are linked to the correct PLC variables.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why are the imported tags only showing as "B9:0/0" without any functionality on the HMI buttons?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This issue may arise due to incorrect tag configurations or data mapping. Ensure that the tags are properly defined and linked in both the PLC and HMI software to enable bidirectional communication and control.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What steps should I take to troubleshoot the unsuccessful data import/export process between RSLogix 500 and Cmore for the HMI-PLC setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Double-check the tag configurations, data formats, and communication protocols in both the PLC and HMI software. Verify the data transfer settings and ensure that the tags are</p>
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
