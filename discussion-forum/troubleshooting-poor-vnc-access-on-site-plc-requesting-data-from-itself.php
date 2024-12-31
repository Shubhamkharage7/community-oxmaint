
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone. I encountered an unusual issue with poor VNC access on a site I visited. The IT team assisted me, and after analyzing a Wireshark report, we discovered that data was being requested from the MAC address of the L33ER and broadcast out to the switch with a">
    <meta name="keywords" content="vnc access troubleshooting, poor vnc access solutions, plc data request issues, troubleshooting vnc connection problems, wireshark analysis for vnc access, resolving plc self-request">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-poor-vnc-access-on-site-plc-requesting-data-from-itself">
    <title>Troubleshooting Poor VNC Access on Site: PLC Requesting Data from Itself? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Poor VNC Access on Site: PLC Requesting Data from Itself? | Oxmaint Community">
    <meta property="og:description" content="Hello everyone. I encountered an unusual issue with poor VNC access on a site I visited. The IT team assisted me, and after analyzing a Wireshark report, we discovered that data was being requested from the MAC address of the L33ER and broadcast out to the switch with a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-poor-vnc-access-on-site-plc-requesting-data-from-itself">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Poor VNC Access on Site: PLC Requesting Data from Itself? | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone. I encountered an unusual issue with poor VNC access on a site I visited. The IT team assisted me, and after analyzing a Wireshark report, we discovered that data was being requested from the MAC address of the L33ER and broadcast out to the switch with a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-poor-vnc-access-on-site-plc-requesting-data-from-itself"
      },
      "headline": "Troubleshooting Poor VNC Access on Site: PLC Requesting Data from Itself?",
      "description": "Hello everyone. I encountered an unusual issue with poor VNC access on a site I visited. The IT team assisted me, and after analyzing a Wireshark report, we discovered that data was being requested from the MAC address of the L33ER and broadcast out to the switch with a",
      "author": {
        "@type": "Person",
        "name": "krakenfan69"
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
                <h1 class="text-white">Troubleshooting Poor VNC Access on Site: PLC Requesting Data from Itself?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>krakenfan69</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">439</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">453</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone. I encountered an unusual issue with poor VNC access on a site I visited. The IT team assisted me, and after analyzing a Wireshark report, we discovered that data was being requested from the MAC address of the L33ER and broadcast out to the switch with a query for "who has 192.168.1.1". Surprisingly, the IP address it was requesting data from was actually its own. Despite eventually timing out and allowing the VNC connection, the performance is still subpar. The Ethernet radios have excellent signal strength, and I have not found any message instructions or Produce/Consume tags in the code. Can anyone provide hints on how to locate the source of this generated request within the PLC?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is unlikely that a message would trigger an ARP request, as typically only devices within the I/O tree would do so. ARP requests themselves are not significant enough to impact performance, as they occur infrequently. In my situation, an ARP request of 44 bytes is sent approximately every 30 seconds. My suspicion is that there may be a device in the tree with the same IP address as the PLC. As an experiment, I inserted a generic module with the IP address matching my controller (192.168.1.10), prompting an ARP request to identify the owner of that address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the VNC connection established once the self-ARP requests cease? Kindly provide a snapshot of the hardware tree for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here you are. It seems that the VNC can eventually establish a connection, particularly after the ARP process finishes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>krakenfan69</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The controller is not messaging itself but rather using a "Gratuitous ARP" probe to update connected switches and detect duplicate IP addresses on the LAN. Despite the great signal strength of the Ethernet radios, the statement "there's nothing wrong with the radios" is often questionable. Various factors can affect remote access performance, so it's important to not overlook a few ARP packets when using tools like Wireshark.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This feature is also utilized for identifying duplicate IP addresses. If Wireshark displays an ARP message stating "Tell 0.0.0.0," then a duplicate IP address has been detected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Contr_Conn mentioned that this technique can be utilized to identify duplicate IP addresses. If you notice Wireshark displaying ARP with the message "...Tell 0.0.0.0," it indicates a duplicate IP address. Have you encountered this before? It doesn't seem to be a common occurrence, as I haven't observed many instances of this in regular ARP traffic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User idiotsecant expressed curiosity about the frequency of encountering a node exhibiting such behavior in the natural environment. They mused that if it were a common occurrence, they would expect to observe an abundance of similar requests within standard Address Resolution Protocol (ARP) traffic. However, their personal experience does not align with this expectation. It is worth noting that this functionality has been utilized in Logix and EtherNet/IP for over two decades. It is a longstanding feature present in all Rockwell Automation modules.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
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
<h4 class='text-dark'>FAQ: What could be causing poor VNC access on the site?</h4>
<p class='text-muted'><strong>Answer:</strong> In this case, the issue could be related to a data request from the MAC address of the L33ER that is broadcast out to the switch, querying for its own IP address.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How was the issue of poor VNC access identified and analyzed?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue was identified and analyzed by the IT team through a Wireshark report, which showed data being requested from the MAC address of the PLC and broadcast out to the switch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How can one locate the source of the generated request within the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> To locate the source of the generated request within the PLC, one can investigate the PLC code for any message instructions or Produce/Consume tags that might be causing the issue.</p>
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
