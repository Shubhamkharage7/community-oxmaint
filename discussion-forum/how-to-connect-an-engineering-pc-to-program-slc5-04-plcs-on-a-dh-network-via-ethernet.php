
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am looking for some guidance on connecting an engineering PC to program SLC5/04 PLCs on a DH+ network. I am returning to the AB world after a break and could use some assistance with this task. We have four SLC5/04 PLCs connected in a daisy chain">
    <meta name="keywords" content="connect engineering pc to slc5/04 plcs, programming slc5/04 plcs via ethernet, dh+ network configuration for slc5/04 plcs, engineering pc connection to dh+">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-an-engineering-pc-to-program-slc5-04-plcs-on-a-dh-network-via-ethernet">
    <title>How to Connect an Engineering PC to Program SLC5/04 PLCs on a DH+ Network via Ethernet | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect an Engineering PC to Program SLC5/04 PLCs on a DH+ Network via Ethernet | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am looking for some guidance on connecting an engineering PC to program SLC5/04 PLCs on a DH+ network. I am returning to the AB world after a break and could use some assistance with this task. We have four SLC5/04 PLCs connected in a daisy chain">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-an-engineering-pc-to-program-slc5-04-plcs-on-a-dh-network-via-ethernet">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect an Engineering PC to Program SLC5/04 PLCs on a DH+ Network via Ethernet | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am looking for some guidance on connecting an engineering PC to program SLC5/04 PLCs on a DH+ network. I am returning to the AB world after a break and could use some assistance with this task. We have four SLC5/04 PLCs connected in a daisy chain">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-an-engineering-pc-to-program-slc5-04-plcs-on-a-dh-network-via-ethernet"
      },
      "headline": "How to Connect an Engineering PC to Program SLC5/04 PLCs on a DH+ Network via Ethernet",
      "description": "Hello everyone, I am looking for some guidance on connecting an engineering PC to program SLC5/04 PLCs on a DH+ network. I am returning to the AB world after a break and could use some assistance with this task. We have four SLC5/04 PLCs connected in a daisy chain",
      "author": {
        "@type": "Person",
        "name": "ctrleng14"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-15",
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
                <h1 class="text-white">How to Connect an Engineering PC to Program SLC5/04 PLCs on a DH+ Network via Ethernet</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ctrleng14</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">525</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">360</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am looking for some guidance on connecting an engineering PC to program SLC5/04 PLCs on a DH+ network. I am returning to the AB world after a break and could use some assistance with this task. We have four SLC5/04 PLCs connected in a daisy chain on a DH+ network, terminated in a Control Logix Gateway. The SCADA system is connected to the gateway on the process control network (PCN). How can I establish a connection for programming the SLCs from an engineering PC on the PCN? Your response is greatly appreciated. Thank you for your time.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The DH+/Ethernet IP gateways play a crucial role in process control networks, allowing for seamless communication between devices. When navigating through RsLinx, you will come across two DH+ Highway connections labeled as A and B, which ultimately connect to your SLC modules. Personally, I have found greater success using this method compared to troubleshooting the local serial interface.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dummy_bit</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you familiar with setting up RSLinx for DH/RIO communication? Proper configuration of the DH/RIO and ENBT is necessary. Confirm if the ENBT and DHRIO are visible in the network. Identify the channel assigned to DH+ and troubleshoot it to locate the 5/04.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up an Ethernet driver in RSLinx for a ControlLogix backplane, start by pinging the ENBT to establish connectivity. If permitted by IT policies, configure for EtherNet/IP; otherwise, use EtherNet Devices. Navigate within RSLinx to expand the ENBT to access the ControlLogix backplane, then progress to the DHRIO module and DH+ network to view the 5/04. In a previous role, I found that a pre-configured DHRIO module in a Logix chassis enabled seamless browsing with RSLinx, negating the need for a routing table. While I lack the necessary hardware for a live demo, I'm confident in the effectiveness of this setup approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To begin, you must set up your computer to communicate with the ENBT in the CLX chassis. In RSLinx Classic, you can establish an EtherNet/IP driver to enable your PC to connect with the ENBT. Ensure that the IP address displayed on the ENBT matches the subnet address of your computer. For instance, if the ENBT is using 192.168.1.10, your computer should have an IP address like 192.168.1.xx, where "xx" is a number between 1-254 not in use by any other device on the network. While there are numerous RSLinx Ethernet/IP driver setup tutorials on YouTube, the linked video demonstrates a similar configuration process. The video showcases connecting to a CLX system via an Ethernet network and then to a DeviceNet network. Although not DH+, the process is quite similar. Learn more about configuring the EtherNet/IP Driver with RSLinx software by watching the tutorial video on YouTube.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you all for your responses, it's greatly appreciated. Everything has been going smoothly so far. The next step involves connecting to RS Logix and going online. I'm unsure if we have the most up-to-date program - is there a way to download a program from an SLC for this purpose?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ctrleng14</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Ctrleng14 expressed gratitude for the replies received thus far and mentioned the next step of connecting to RSLogix and going online. Unsure if there is a way to download a program from the SLC, they inquired about this possibility. It is possible to read the program from the SLC, but it will not contain comments or symbols, as all documentation is stored in the offline file. It is important to note that in the world of Allen-Bradley (AB), you upload from the PLC to your PC and download from the PC to the PLC.

To begin, attempting to connect using the latest file in RSLogix is recommended. If a successful connection is made, all is well. If not, a difference has been detected which may or may not be significant. In such cases, uploading and comparing the uploaded file to the saved one using the compare tool within RSLogix 500 is suggested.

Ctrleng14 shared an attachment (viewable by clicking the provided link) and advised trying either Ethernet devices or the EtherNet/IP driver. They highlighted that knowing the IP address is crucial, as Ethernet devices are typically used 99.999% of the time for connectivity purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, ctrleng14 shared an image indicating that a PC had previously detected an Ethernet device. However, further inspection suggested that no drilling had occurred below the DHRIO module. The presence of a red "X" signified that the computer was unable to locate the ENBT at 10.1.114.210. To resolve this issue, it was recommended to select the TCP-1 driver in RSLinx to initiate browsing using that specific driver. It was also advised to avoid using the TCP-1 driver designed for connecting computers over Ethernet, as it may not be suitable for browsing through a hardware gateway like the ControlLogix chassis with the ENBT and DHRIO. Instead, users were encouraged to create a new EtherNet/IP driver in RSLinx to seamlessly browse through the CLX chassis to access devices on the DH+ network. Additionally, the option to upload the current program from the SLC back to the computer was discussed, highlighting the importance of ensuring project compatibility to avoid any file mismatch errors. If no previous project version is available, users were advised to create a new project with default documentation during the upload process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Operaghost expressed concerns regarding the TCP-1 driver in RSLinx, one of the three Ethernet driver options available. The "TCP-1" driver name can be intimidating, but it is commonly used for connecting to Remote Devices via Linx Gateway. This driver may seem familiar to those who have worked with ProSoft Ethernet/DH+ gateway modules in the past. 

Operaghost also mentioned the ability to upload and merge current programs, a feature that can be useful but may encounter issues with rung comments if the rungs are not aligned between the online version and the file being merged. This issue can be challenging to fix, particularly when the rung comments are tied to the rung numbers instead of the output addresses. While this problem is familiar in RSLogix 5, it may also occur in RSLogix 500.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you all for your responses and valuable insights. I will make sure to provide an update as soon as I have had the opportunity to follow through on the website.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ctrleng14</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my experience with using the upload & merge function, I have found it to be quite effective and have utilized it frequently. However, one issue I have encountered is when rung comments are associated with the rung number instead of the output address. This can lead to complications if the rungs are not aligned between the online version and the file being merged.

When working with RSLogix 5 and 500, there was an option to link rung comments/page titles to either the rung number or the last output on the rung, with each method having its own advantages and disadvantages. Attaching the comment to the output meant that it would appear wherever that output was used, but adding a branched output could cause the comment to disappear. On the other hand, attaching the comment to the rung number allowed for each rung to have a unique comment, but it could lead to misalignment if the program was edited by a different computer.

In RSLogix/Studio 5000, both methods were eliminated in favor of each rung having a unique identifier, to which the comments are attached. This ensures that every rung can have a unique comment without the risk of comments becoming disordered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I connect an engineering PC to program SLC5/04 PLCs on a DH+ network?</h4>
<p class='text-muted'><strong>Answer:</strong> - To connect an engineering PC to program SLC5/04 PLCs on a DH+ network, you can establish a connection through a Control Logix Gateway. The SLC5/04 PLCs are connected in a daisy chain on the DH+ network, terminated in the Control Logix Gateway. The SCADA system is connected to the gateway on the process control network (PCN).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What steps should I follow to establish a connection for programming the SLCs from an engineering PC on the PCN?</h4>
<p class='text-muted'><strong>Answer:</strong> - To establish a connection for programming the SLCs from an engineering PC on the PCN, you can utilize the existing setup with the Control Logix Gateway. Ensure that the engineering PC is on the same network as the Control Logix Gateway and configure the necessary software for programming the SLC5/04 PLCs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific considerations or settings I need to be aware of when connecting the engineering PC to program SLC5/04 PLCs on a DH+ network?</h4>
<p class='text-muted'><strong>Answer:</strong> - When connecting an engineering PC to program SLC5/04 PLCs on a DH+ network, make sure to check the network settings, IP addresses, and compatibility of the programming software with the PLCs. Additionally, ensure that the communication protocols are correctly configured to establish a successful connection for programming the SLCs.</p>
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
