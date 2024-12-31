
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello! We are currently working on an upgrade project that involves replacing an existing GOP panel (Modbus RTU Slave) connected to an AC80 Controller (Modbus RTU Master). The proposed replacement is a Siemens MTP1500 HMI, but we are facing a challenge because the AC80 must be a Modbus RTU">
    <meta name="keywords" content="s7-1200 plc modbus rtu slave, ac80 controller modbus rtu master, siemens mtp1500 hmi communication, plc communication solutions, modbus rtu slave setup">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/using-s7-1200-plc-as-modbus-rtu-slave-for-ac80-controller-and-siemens-mtp1500-hmi">
    <title>Using S7-1200 PLC as Modbus RTU Slave for AC80 Controller and Siemens MTP1500 HMI | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Using S7-1200 PLC as Modbus RTU Slave for AC80 Controller and Siemens MTP1500 HMI | Oxmaint Community">
    <meta property="og:description" content="Hello! We are currently working on an upgrade project that involves replacing an existing GOP panel (Modbus RTU Slave) connected to an AC80 Controller (Modbus RTU Master). The proposed replacement is a Siemens MTP1500 HMI, but we are facing a challenge because the AC80 must be a Modbus RTU">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/using-s7-1200-plc-as-modbus-rtu-slave-for-ac80-controller-and-siemens-mtp1500-hmi">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Using S7-1200 PLC as Modbus RTU Slave for AC80 Controller and Siemens MTP1500 HMI | Oxmaint Community">
    <meta name="twitter:description" content="Hello! We are currently working on an upgrade project that involves replacing an existing GOP panel (Modbus RTU Slave) connected to an AC80 Controller (Modbus RTU Master). The proposed replacement is a Siemens MTP1500 HMI, but we are facing a challenge because the AC80 must be a Modbus RTU">
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
        "@id": "https://community.oxmaint.com/discussion-forum/using-s7-1200-plc-as-modbus-rtu-slave-for-ac80-controller-and-siemens-mtp1500-hmi"
      },
      "headline": "Using S7-1200 PLC as Modbus RTU Slave for AC80 Controller and Siemens MTP1500 HMI",
      "description": "Hello! We are currently working on an upgrade project that involves replacing an existing GOP panel (Modbus RTU Slave) connected to an AC80 Controller (Modbus RTU Master). The proposed replacement is a Siemens MTP1500 HMI, but we are facing a challenge because the AC80 must be a Modbus RTU",
      "author": {
        "@type": "Person",
        "name": "Lowden Clear"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-16",
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
                <h1 class="text-white">Using S7-1200 PLC as Modbus RTU Slave for AC80 Controller and Siemens MTP1500 HMI</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Lowden Clear</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">412</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">338</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello! We are currently working on an upgrade project that involves replacing an existing GOP panel (Modbus RTU Slave) connected to an AC80 Controller (Modbus RTU Master). The proposed replacement is a Siemens MTP1500 HMI, but we are facing a challenge because the AC80 must be a Modbus RTU Master, while the MTP1500 HMI does not appear to have the option to function as a Modbus RTU Slave. We are considering the possibility of using a S7-1200 PLC to act as a slave to both devices and facilitate communication. We are unsure if this solution is feasible, so any assistance would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If the panel is functioning as a slave, there may be challenges due to Siemens' lack of support for modbus bits and words independently within their modbus blocks. In order to communicate effectively with both the panel and AC80, registers need to be packed into memory words and remain continuous. Consider using a controller from a manufacturer that natively supports modbus, such as Schneider, to avoid compatibility issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your GOP screen is displaying data retrieved from the AC80, then the GOP is functioning as the master while the AC80 acts as the slave. It is crucial to note that this setup is non-negotiable. Switching out the GOP for another HMI screen should not pose any issues, provided that it is compatible with Modbus RTU. In such instances, the hierarchy is clear - the screen takes on the role of the master, while the controller/PLC assumes the position of the slave.

In a serial network, it is imperative to understand that only one master can exist. Collisions can occur if two masters attempt to communicate simultaneously. The synchronization process for a serial master involves a strict order of request-response sequences. For multiple masters, transitioning to ethernet communication and utilizing Modbus TCP is recommended for seamless operation with multiple screens connected to a single device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The AC80's manual (http://download.5117.com/data/file/361.pdf) specifies on page 28 (2-14) that the Ch2 port offers two modes of operation: "Panelbus" mode and "MultiVendor" mode. In "Panelbus" mode, the AC80 acts as the master (as detailed in the CH2TYP setting on page 40 (4-2)). In "MultiVendor" mode, it can be configured as either a master or a slave. Both modes support GOP. It appears that the AC80 may currently be set to "Panelbus" mode, and changing it to "MultiVendor" mode as a slave is likely necessary for compatibility with the new HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing the software instruction manual for the GOP panel, I discovered that it specifies "AC80 always functions as the master while GOP acts as the slave." I overlooked checking the AC80 documentation, but I will make sure to review it now to understand how it can interact with the new HMI as the master. Thank you for pointing me in the right direction!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lowden Clear</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the context of data exchange between a GOP screen and an AC80 controller, it is crucial to understand the dynamics of master-slave relationships. Essentially, when a screen needs to access data from a controller, the screen acts as the master and the controller as the slave. It is important to note that in a serial network, there can only be one master to avoid collisions. Therefore, if multiple screens need to connect to the same device as masters, it is advisable to switch to Ethernet and use Modbus TCP.

While it is technically possible for the panel to act as a slave in rare cases, it is more common for the panel to function as the master. Additionally, it is feasible to have multiple serial masters connected to a PLC by incorporating multiple slave ports on the PLC side. Moreover, the use of multiplexers for RS485 can facilitate the connection of several Modbus serial masters to a single slave.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When multiple networks are connected to various ports of a PLC, each network may have its own master. In this discussion, we are focusing on a single network. The same concept applies to a multiplexer, as multiple networks will have their own masters connected to different ports of the multiplexer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Reflecting on the past, I recall the Modbus multiplexer box created by Modicon to efficiently handle requests from multiple masters. This device would send queries to slaves one at a time, waiting for each reply before moving on to the next. To accommodate this sequential process, the timeout period for each master had to be extended. Despite the delay caused by this method, the multiplexer effectively managed communication for up to 6 masters, albeit at a slower pace than direct point-to-point communication. While this approach may seem outdated in today's standards, it was a functional solution. Presently, I am uncertain which manufacturer produces a Modbus box with similar capabilities. It is important to note that this type of multiplexer is specifically tailored for the Modbus RTU protocol, not a generic serial port multiplexer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Corsair</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can a Siemens S7-1200 PLC act as a Modbus RTU Slave to facilitate communication between an AC80 Controller and a Siemens MTP1500 HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to use a Siemens S7-1200 PLC as a Modbus RTU Slave to connect the AC80 Controller (Modbus RTU Master) and the Siemens MTP1500 HMI. The PLC can bridge the communication gap between the devices by acting as an intermediary.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the advantages of using a PLC as a communication bridge in this setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - Using a PLC as a communication bridge offers flexibility, scalability, and the ability to handle different communication protocols. It allows for seamless integration between devices that do not directly support the required communication protocol.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific considerations to keep in mind when configuring the S7-1200 PLC for this purpose?</h4>
<p class='text-muted'><strong>Answer:</strong> - When configuring the S7-1200 PLC as a Modbus RTU Slave, ensure that the communication settings, such as baud rate, data format, and addressing, are correctly configured to match the requirements of the AC80 Controller and the MTP1500 HMI. Additionally, verify that the PLC programming includes the necessary logic to handle the data exchange between the devices.</p>
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
