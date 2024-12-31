
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compact Logix 5370 controllers are unable to handle 800 byte UDP packets due to the limitations of the processor sockets buffer, which is approximately 470 bytes. If a larger message is received, only a portion of it can be accessed before the rest becomes inaccessible. Since the UDP data">
    <meta name="keywords" content="compactlogix 5370 controllers, udp packet troubleshooting, processor sockets buffer limitations, handling large udp packets, anybus and prosoft modules, raw udp packets protocol, c and">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-large-udp-packets-on-compactlogix-5370-controllers">
    <title>Troubleshooting Large UDP Packets on CompactLogix 5370 Controllers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Large UDP Packets on CompactLogix 5370 Controllers | Oxmaint Community">
    <meta property="og:description" content="Compact Logix 5370 controllers are unable to handle 800 byte UDP packets due to the limitations of the processor sockets buffer, which is approximately 470 bytes. If a larger message is received, only a portion of it can be accessed before the rest becomes inaccessible. Since the UDP data">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-large-udp-packets-on-compactlogix-5370-controllers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Large UDP Packets on CompactLogix 5370 Controllers | Oxmaint Community">
    <meta name="twitter:description" content="Compact Logix 5370 controllers are unable to handle 800 byte UDP packets due to the limitations of the processor sockets buffer, which is approximately 470 bytes. If a larger message is received, only a portion of it can be accessed before the rest becomes inaccessible. Since the UDP data">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-large-udp-packets-on-compactlogix-5370-controllers"
      },
      "headline": "Troubleshooting Large UDP Packets on CompactLogix 5370 Controllers",
      "description": "Compact Logix 5370 controllers are unable to handle 800 byte UDP packets due to the limitations of the processor sockets buffer, which is approximately 470 bytes. If a larger message is received, only a portion of it can be accessed before the rest becomes inaccessible. Since the UDP data",
      "author": {
        "@type": "Person",
        "name": "OWEN.DAVID"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-06",
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
                <h1 class="text-white">Troubleshooting Large UDP Packets on CompactLogix 5370 Controllers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>22 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5564</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">296</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Compact Logix 5370 controllers are unable to handle 800 byte UDP packets due to the limitations of the processor sockets buffer, which is approximately 470 bytes. If a larger message is received, only a portion of it can be accessed before the rest becomes inaccessible. Since the UDP data source cannot be modified in terms of packet size or structure, alternative methods must be considered to transfer the data to the controller successfully. One option is to utilize Anybus or ProSoft modules that support compatible networks. It is important to identify the appropriate UDP sockets network or standard protocol that can work with raw UDP packets. Another approach is to use a C or Python script to intercept and retransmit long packets in shorter UDP packets that the controller can handle, possibly through a network PC. Additionally, the pylogix Python library can serve as a gateway from UDP to CIP instead of using a hardware module. It is important to explore other feasible options that may have been overlooked.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking to send longer messages, consider utilizing the "Large Message" feature which can support nearly 4K bytes of data. However, I'm unsure if this feature is compatible with 5370 controllers and which specific message it should be enabled for.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The most recent sockets PDF released by Rockwell confirms this information. However, an earlier version of the document found online clearly states that the 5370 series, specifically our controller (1769-L33ER), does not support Large Sockets. I extensively investigated this issue at the time, trying various settings and conducting tests with a spare controller. The results confirmed the limitation, possibly differing by only a byte or two. In hindsight, I should have considered documenting my findings for future reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Contr_Conn mentioned that the "Large Message" option can potentially allow for nearly 4K bytes of data transfer. While it may work on all 5370 controllers, the exact message it should be activated on is unclear. This feature has been successfully tested on various 5370 controllers during pylogix testing, indicating that it may be a UDP limitation affecting its functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rest assured that versions 5370 V20 and higher have robust support for large connections. There is no need to manually enable this feature. Can you provide details on the error code you are experiencing and the current firmware revision of your controller? I will be able to assist further with troubleshooting tomorrow.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with UDP, we operate within the Open Sockets domain. The 5370 series restricts message size to 500 bytes, whereas other controller series support 'large sockets' up to 4k. Utilizing sockets and pylogix python libraries made UDP to CIP data transfer simple and efficient. However, this setup currently relies on a Windows OS. What is the most reliable hardware configuration for pylogix that rivals a traditional hardware module? Would a Raspberry Pi or a comparable device be a suitable option?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The 5370 series limits message size to 500 bytes, while other controller series are compatible with 4k 'large sockets'. However, this is an inaccurate statement as sockets in the 5370 support Large Connections starting from V20.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A few months back, I completed my testing on a 1769-l33er with firmware version 30.02. During the testing, I found that the UDP packet size was 800 bytes and we were utilizing Multicast broadcast. It appears that the issue was related to the standard ER bit, indicating buffer overflow. For more information, refer to page 61 of the 2014 version of the document found at https://media.distributordatasoluti...mbedded_Switch_Technology_ENET-UM001_EN_1.pdf. However, the 2020 version of the same document does not provide the same level of detail. For further insights, you can access the 2020 version at https://literature.rockwellautomation.com/idc/groups/literature/documents/at/enet-at002_-en-p.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>That's fantastic news - there is indeed hope after all!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to reading from an empty buffer, UDP will typically result in an error, whereas TCP will return a DN bit with zero length. This distinction highlights the importance of error codes in networking protocols.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After loading my test project file, I activated the backup controller on the system. If the ReadParams.BufLen tag is set too high, an error message will appear stating: "Reply Data Too Large. 400 bytes worked fine, but 500 bytes resulted in an error."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you noticed in the 2014 Rockwell PDF that all CompactLogix 5370 controllers require unconnected MSG instructions? When configuring a message for these controllers, be sure to uncheck the Connected checkbox on the Message Configuration dialog box. Keep in mind that only connected MSG instructions allow for a large connection. Wondering if this restriction has been removed in newer firmware updates?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Furthermore, during the final testing phase, it has been discovered that the socket object is only able to read a maximum of 486 bytes. If the test packet size exceeds 487 bytes, it will result in an error. Interestingly, the socket object is able to recognize a test packet size of 630 bytes, even though its read buffer size is only 8kb. This indicates that there may be limitations we are facing, or perhaps it could be attributed to my lack of experience in this particular domain.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have noticed similar outcomes using L18 in V30 for a maximum of 486 bytes. It is important to note that Connected cannot be utilized, however, I do remember that all internal CIP messages do support Large Connection automatically.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider upgrading to a 5380 controller that natively supports large connections. I will conduct further testing to confirm its compatibility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, possibly. I would need to investigate the compatibility of the 5380 series with the current point IO and local rack modules. However, my focus has shifted to finding a durable hardware solution to run python or C scripts for segmenting and rebroadcasting packets, or utilizing pylogix to write directly to controller tags via CIP. Unfortunately, neither Anybus nor Prosoft offers a module that can handle raw UDP packet data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The 5380 (version 32) in my possession is functioning properly. During testing, it successfully handled a request for 800 bytes from a peer, with 600 bytes sent. The MSG (unconnected) completed bit was set with a 600-byte payload. It's important to note that the 5380 does not utilize local Point I/O, but instead uses 5069 I/O. If you are looking for an external solution, I may be unable to assist, but can offer guidance if needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for testing the 5380 and providing confirmation. Transitioning from the 5370 to the 5380 series seems impractical given the high cost and minimal benefits, as UDP data is non-critical for our system - it is a nice feature to have but not indispensable. Are there alternative hardware module or gateway providers besides ProSoft or Anybus that we should consider? I am uncertain if the request for raw UDP packets has been underestimated in favor of more established protocols. Ideally, I am seeking a solution that does not rely on a Windows PC for connectivity, so I will continue my search for reliable hardware to pair with open-source software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider exploring the use of MicroLogix 1400 or Micro 800 PLCs that have socket support for CIP communication. It's worth noting that the possibility of supporting larger connections may vary. While I don't have specific information on that aspect, it's a suggestion worth considering.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>OWEN.DAVID mentioned a preference for not relying on a Windows PC for the link, opting instead to find reliable hardware for open-source software. Consider checking out Kunbus for robust options: https://revolution.kunbus.com/. Our office has experimented with one and found it promising.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I find this intriguing - it aligns perfectly with my goals. Do I need to inquire about compatibility with the latest Python version and libraries, or is it guaranteed by the hardware? I have a unique project in mind that involves merging data from a UDP blackbox and PLC in a Python-written data historian. Are you familiar with the CAKE Historian platform by CCI?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OWEN.DAVID</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Owen David was intrigued by the compatibility of the hardware with the latest Python version and libraries. He wondered if additional enquiries were necessary or if it was already supported by the equipment. The Raspberry Pi runs on Raspbian (Buster) with an RT kernel patch, allowing you to seamlessly run any Python version or software supported for ARM processors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent analysis of the 2014 Rockwell PDF, OWEN.DAVID pointed out that all CompactLogix 5370 controllers require the use of unconnected MSG instructions. When setting up a message for a CompactLogix 5370 controller, it is crucial to ensure that the Connected checkbox on the Message Configuration dialog box is unchecked. Furthermore, keep in mind that a large connection can only be achieved with connected MSG instructions. Are you curious if this restriction has been lifted in newer firmware updates? Check out the attached document for more details. Additionally, feel free to provide an example program for further discussion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>1angele</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why are CompactLogix 5370 controllers unable to handle 800 byte UDP packets?</h4>
<p class='text-muted'><strong>Answer:</strong> - The controllers have limitations in their processor sockets buffer, which is approximately 470 bytes, causing only a portion of larger packets to be accessible.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are some alternative methods to successfully transfer data to the controller when dealing with large UDP packets?</h4>
<p class='text-muted'><strong>Answer:</strong> - Consider using Anybus or ProSoft modules that support compatible networks, identifying appropriate UDP sockets network or standard protocols, or using scripts like C or Python to intercept and retransmit long packets in shorter UDP packets.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can the pylogix Python library be helpful in overcoming the issue of large UDP packets?</h4>
<p class='text-muted'><strong>Answer:</strong> - The pylogix library can serve as a gateway from UDP to CIP, providing an alternative to using hardware modules for data transfer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there other feasible options to explore for handling large UDP packets on CompactLogix 5370 controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is important to explore additional options that may have been overlooked, such as utilizing network PCs for packet processing or finding compatible networks that can work with raw UDP packets.</p>
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
