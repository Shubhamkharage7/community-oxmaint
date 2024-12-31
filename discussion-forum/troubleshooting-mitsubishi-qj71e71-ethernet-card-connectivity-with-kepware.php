
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am attempting to link a Mitsubishi Q series PLC with a QJ71E71 Ethernet card to Kepware. I am currently utilizing the TCP Protocol, however, I am experiencing sporadic disconnections and can only reconnect by power cycling the station. I have come across suggestions that using UDP">
    <meta name="keywords" content="mitsubishi q series plc, qj71e71 ethernet card, kepware connectivity, troubleshooting ethernet card connectivity, tcp protocol issues, udp configuration, reliable ethernet">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-qj71e71-ethernet-card-connectivity-with-kepware">
    <title>Troubleshooting Mitsubishi QJ71E71 Ethernet Card Connectivity with Kepware | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Mitsubishi QJ71E71 Ethernet Card Connectivity with Kepware | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am attempting to link a Mitsubishi Q series PLC with a QJ71E71 Ethernet card to Kepware. I am currently utilizing the TCP Protocol, however, I am experiencing sporadic disconnections and can only reconnect by power cycling the station. I have come across suggestions that using UDP">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-qj71e71-ethernet-card-connectivity-with-kepware">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Mitsubishi QJ71E71 Ethernet Card Connectivity with Kepware | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am attempting to link a Mitsubishi Q series PLC with a QJ71E71 Ethernet card to Kepware. I am currently utilizing the TCP Protocol, however, I am experiencing sporadic disconnections and can only reconnect by power cycling the station. I have come across suggestions that using UDP">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-qj71e71-ethernet-card-connectivity-with-kepware"
      },
      "headline": "Troubleshooting Mitsubishi QJ71E71 Ethernet Card Connectivity with Kepware",
      "description": "Hello everyone, I am attempting to link a Mitsubishi Q series PLC with a QJ71E71 Ethernet card to Kepware. I am currently utilizing the TCP Protocol, however, I am experiencing sporadic disconnections and can only reconnect by power cycling the station. I have come across suggestions that using UDP",
      "author": {
        "@type": "Person",
        "name": "doglez"
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
                <h1 class="text-white">Troubleshooting Mitsubishi QJ71E71 Ethernet Card Connectivity with Kepware</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>doglez</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1752</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">469</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am attempting to link a Mitsubishi Q series PLC with a QJ71E71 Ethernet card to Kepware. I am currently utilizing the TCP Protocol, however, I am experiencing sporadic disconnections and can only reconnect by power cycling the station. I have come across suggestions that using UDP may be more reliable. Does anyone have experience with this issue? Any advice on configuring UDP for this setup would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Make the switch to User Datagram Protocol (UDP) for a seamless and reliable experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to seamless performance, goghie recommends making the switch to UDP. Do you have any specific configuration instructions for both Mitsubishi and KepServerEx that I should follow? Your guidance is greatly appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>doglez</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In all honesty, the type of protocol used for the PLC end doesn't seem to be a critical factor. In a previous system, only MC protocol was utilized without UDP, and it still functioned successfully. The network settings include an IP address such as 10.201.1.67 with a broadcast address of :255, and UDP port 5000. For the QJ71 module, the port is typically set to 5001. It is recommended to configure the PLC for UDP communication. While the provided screenshot is for FX ENET, the setup is likely similar for the E71 module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In addition to the information provided by Parky, there are also these settings to consider. Explore the additional settings available for optimal customization and functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This is my first time working with the QJ71E71-100 Ethernet Module and I am looking to connect two QJ71E71-100 devices to a PC with an IP address of 192.168.50.23 through a router with the IP address of 192.168.50.1. Can anyone provide a step-by-step guide and assistance with the necessary settings? Thank you in advance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for details on which communication software to use, such as Kepware or another option, consider utilizing UDP with Kepserver, as recommended in previous posts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about communication software for industrial automation? Are you considering Kepware or another option? If using Kepserver, opt for UDP, as suggested in previous comments. As for setting up router relay parameters and configuring the transmission device IP for connecting to a router, could you provide guidance on this aspect? Thank you for your help with Keepware integration!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing sporadic disconnections between a Mitsubishi Q series PLC with a QJ71E71 Ethernet card and Kepware over TCP Protocol?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Sporadic disconnections could be due to network issues, configuration settings, or compatibility problems between the devices. It is recommended to check the network stability, verify configuration settings, and ensure compatibility between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is using UDP a more reliable option for connecting a Mitsubishi QJ71E71 Ethernet card to Kepware compared to TCP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: UDP can be more suitable for real-time applications due to its connectionless nature, but it may not provide the reliability and error-checking features of TCP. It is essential to consider the specific requirements and characteristics of the application before deciding to switch to UDP.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can UDP be configured for connecting a Mitsubishi QJ71E71 Ethernet card to Kepware?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Configuring UDP for the connection between the Mitsubishi QJ71E71 Ethernet card and Kepware would involve setting up the appropriate network parameters, adjusting communication settings, and ensuring proper data exchange between the devices. It is advisable to refer to the device manuals and consult with technical support for detailed guidance on configuring UDP for this setup.</p>
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
