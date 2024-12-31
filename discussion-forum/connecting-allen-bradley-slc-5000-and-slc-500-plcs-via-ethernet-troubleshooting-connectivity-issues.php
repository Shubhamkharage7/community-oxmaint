
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am attempting to establish a connection between an SLC 5000 and an SLC 500 PLC using Ethernet for communication. The SLC 5000 is equipped with a 1756en2t Ethernet card installed on the rack, visible in RS LINX along with the SLC 5000. Similarly, when connected to">
    <meta name="keywords" content="allen bradley slc 5000, slc 500 plc, ethernet connectivity, troubleshooting connectivity issues, 1756en2t ethernet card, rs linx visibility, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/connecting-allen-bradley-slc-5000-and-slc-500-plcs-via-ethernet-troubleshooting-connectivity-issues">
    <title>Connecting Allen Bradley SLC 5000 and SLC 500 PLCs via Ethernet: Troubleshooting Connectivity Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Connecting Allen Bradley SLC 5000 and SLC 500 PLCs via Ethernet: Troubleshooting Connectivity Issues | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am attempting to establish a connection between an SLC 5000 and an SLC 500 PLC using Ethernet for communication. The SLC 5000 is equipped with a 1756en2t Ethernet card installed on the rack, visible in RS LINX along with the SLC 5000. Similarly, when connected to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/connecting-allen-bradley-slc-5000-and-slc-500-plcs-via-ethernet-troubleshooting-connectivity-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Connecting Allen Bradley SLC 5000 and SLC 500 PLCs via Ethernet: Troubleshooting Connectivity Issues | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am attempting to establish a connection between an SLC 5000 and an SLC 500 PLC using Ethernet for communication. The SLC 5000 is equipped with a 1756en2t Ethernet card installed on the rack, visible in RS LINX along with the SLC 5000. Similarly, when connected to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/connecting-allen-bradley-slc-5000-and-slc-500-plcs-via-ethernet-troubleshooting-connectivity-issues"
      },
      "headline": "Connecting Allen Bradley SLC 5000 and SLC 500 PLCs via Ethernet: Troubleshooting Connectivity Issues",
      "description": "Hello everyone, I am attempting to establish a connection between an SLC 5000 and an SLC 500 PLC using Ethernet for communication. The SLC 5000 is equipped with a 1756en2t Ethernet card installed on the rack, visible in RS LINX along with the SLC 5000. Similarly, when connected to",
      "author": {
        "@type": "Person",
        "name": "Liam 28"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-26",
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
                <h1 class="text-white">Connecting Allen Bradley SLC 5000 and SLC 500 PLCs via Ethernet: Troubleshooting Connectivity Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Liam 28</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">177</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">378</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am attempting to establish a connection between an SLC 5000 and an SLC 500 PLC using Ethernet for communication. The SLC 5000 is equipped with a 1756en2t Ethernet card installed on the rack, visible in RS LINX along with the SLC 5000. Similarly, when connected to the SLC 500, the PLC is also visible in RS LINX. I have connected an Ethernet cable between the 1756en2t on the 5000 rack and the SLC 500, as well as between my laptop and the Ethernet port on the SLC 5000 CPU. However, I can only see the SLC 500 PLC and the Ethernet card. I expected to see the SLC 500 PLC through the 1756en2t card. Is there something I may have overlooked or not properly configured? Shouldn't I be able to see the SLC 500 PLC in RSLINX when connected to the 5000 PLC? All devices, including the two PLCs, the Ethernet card, and the laptop, are on the same network with IP addresses like 192.168.36.xxxx.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to remote devices connected via backplanes, they will not be automatically detected. To browse these devices, simply right-click on the "Ethernet" sub-item located under the 1756-EN2T module, navigate to Properties, and manually input all the IP addresses that you anticipate to view. This step is crucial for gaining access to devices connected remotely over a network.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of industrial automation, remote devices connected over backplanes do not automatically appear. To rectify this, you can right-click on the "Ethernet" sub-item located under the 1756-EN2T module, navigate to Properties, and manually add all the IP addresses you anticipate to be visible on the network. Thank you Imscar12 for your assistance; I truly appreciate it! I will be sure to give that a try tomorrow.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Liam 28</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up a SLC 5/05, it's important to ensure you have the correct IP addresses and subnet addresses for all devices on the network. If the SLC shares the same IP address as the 5000, you'll need to make adjustments to avoid conflicts. Utilizing tools like Angry IP Scanner can help identify any conflicts. Have you configured the SLC 500 in the 5000 yet? Remember to add the IP address to Linx for seamless integration. - James</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up remote devices over backplanes, keep in mind they may not be automatically detected. To ensure all devices are visible, right-click on the "Ethernet" sub-item under the 1756-EN2T module, access Properties, and input all the relevant IP addresses. I have checked and configured all necessary IP addresses for my devices, including my laptop, SLC 5000, SLC 500, and the 1756-EN2T card. These configurations were made within the properties of the Ethernet driver in RSLINX.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Liam 28</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>James Mcquade inquired about the IP addresses and subnet addresses of devices using a SLC 5/05. It is important to ensure that the SLC and other devices have unique IP addresses to avoid conflicts. Utilizing tools like Angry IP Scanner can help identify any conflicts on the network.

In my setup, I am working with an SLC5/05 and a SLC 5000 with the following IP addresses: 192.168.136.30 for 1756en2t, 192.168.136.29 for SLC5000, and 192.168.136.8 for SLC 5/05. Additionally, the laptop Ethernet adapter has the IP address 192.168.136.40.

I have established communication with both PLCs individually in RSlinx, but there seems to be an issue with them not being able to see each other using the 1756en2t card. This setup is being tested before implementing any changes in the field, making it a simple setup with just two PLCs and a network card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Liam 28</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Liam, 28, mentioned to Imscar12 that he successfully configured all IP addresses for his devices, including his laptop, SLC 5000, SLC 500, and 156en2t card in RSLINX. It's important to note that the remote IPs should be set in the Ethernet sub-item properties of the EN2T card within RsLinx, rather than the top-level driver. Don't forget to expand the settings for further details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why can I only see the SLC 500 PLC and the Ethernet card, but not the SLC 500 PLC through the 1756en2t card when connected to the SLC 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This issue could be related to configuration settings on either the SLC 5000, SLC 500, or the Ethernet devices. Check the network settings and configurations to ensure they are properly set up for communication between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Shouldn't I be able to see the SLC 500 PLC in RSLINX when connected to the 5000 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, you should be able to see the SLC 500 PLC in RSLINX when connected to the SLC 5000, provided that the network configurations are correct and the devices are communicating effectively over Ethernet.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What could be causing the connectivity issues between the SLC 5000 and SLC 500 PLCs even though they are on the same network with IP addresses like 192.168.36.xxxx?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: There could be various reasons for connectivity issues, such as incorrect IP settings, subnet mask mismatches, firewall settings blocking communication, or cable/connection issues. Troubleshoot each of these aspects to identify and resolve the problem.</p>
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
