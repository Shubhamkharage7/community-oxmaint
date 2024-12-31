
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="My objective is to establish a connection between an MQTT broker within the IP range 192.168 and my OT network, which includes the L33ER PLC operating on the 10.10. IP range. I require bidirectional communication with the MQTT client. One possible solution is to utilize a NAT router and">
    <meta name="keywords" content="mqtt broker, l33er plc, bidirectional communication, ip range 168, ot network, nat router, rockwell aoi, imported program, sample code, 460etcqt-n2e mqtt gateway, rta">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/connecting-mqtt-broker-to-l33er-plc-with-bidirectional-communication-solutions-and-insights">
    <title>Connecting MQTT Broker to L33ER PLC with Bidirectional Communication: Solutions and Insights | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Connecting MQTT Broker to L33ER PLC with Bidirectional Communication: Solutions and Insights | Oxmaint Community">
    <meta property="og:description" content="My objective is to establish a connection between an MQTT broker within the IP range 192.168 and my OT network, which includes the L33ER PLC operating on the 10.10. IP range. I require bidirectional communication with the MQTT client. One possible solution is to utilize a NAT router and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/connecting-mqtt-broker-to-l33er-plc-with-bidirectional-communication-solutions-and-insights">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Connecting MQTT Broker to L33ER PLC with Bidirectional Communication: Solutions and Insights | Oxmaint Community">
    <meta name="twitter:description" content="My objective is to establish a connection between an MQTT broker within the IP range 192.168 and my OT network, which includes the L33ER PLC operating on the 10.10. IP range. I require bidirectional communication with the MQTT client. One possible solution is to utilize a NAT router and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/connecting-mqtt-broker-to-l33er-plc-with-bidirectional-communication-solutions-and-insights"
      },
      "headline": "Connecting MQTT Broker to L33ER PLC with Bidirectional Communication: Solutions and Insights",
      "description": "My objective is to establish a connection between an MQTT broker within the IP range 192.168 and my OT network, which includes the L33ER PLC operating on the 10.10. IP range. I require bidirectional communication with the MQTT client. One possible solution is to utilize a NAT router and",
      "author": {
        "@type": "Person",
        "name": "frandESS"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-05",
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
                <h1 class="text-white">Connecting MQTT Broker to L33ER PLC with Bidirectional Communication: Solutions and Insights</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>frandESS</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">847</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">283</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>My objective is to establish a connection between an MQTT broker within the IP range 192.168 and my OT network, which includes the L33ER PLC operating on the 10.10. IP range. I require bidirectional communication with the MQTT client. 

One possible solution is to utilize a NAT router and employ the AOI provided by Rockwell. While the manual appears to be straightforward, I am finding it challenging to understand how to implement the imported program. Have you had experience working with the AOI MQTT program or have access to sample code?

Alternatively, I am considering using the 460ETCQT-N2E MQTT gateway from RTA Automation and incorporating the AOI Modbus Client. 

I would greatly appreciate any insights or advice on this matter. Please refer to the attached image for more details.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If anyone has had hands-on experience with the Rockwell MQTT AOI, I would love to hear your insights. Share your expertise on utilizing the Rockwell MQTT AOI in real-world applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mullet</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you need help with MQTT or MQTT Sparkplug protocols, I recommend contacting Integration Objects. They have a wealth of experience in these protocols and are members of the Eclipse Foundation, staying up to date on industry standards. You can reach out to them through their website at www.integrationobjects.com or via email at [email protected]. Their certification in the MQTT protocol guarantees reliable and expert services for your integration needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>k_w</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ControlLogix v36 (including Compact) now offers MQTT support, with detailed technical notes available on its implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
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
<h4 class='text-dark'>FAQ: 1. How can I establish bidirectional communication between an MQTT broker and an L33ER PLC on different IP ranges?</h4>
<p class='text-muted'><strong>Answer:</strong> - One possible solution is to utilize a NAT router and the AOI provided by Rockwell for MQTT communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I implement the AOI MQTT program provided by Rockwell for bidirectional communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - While the manual may seem straightforward, some users find it challenging to understand how to implement the imported program. Seeking guidance from experienced users or access to sample code can be helpful.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the alternatives to using the AOI provided by Rockwell for MQTT communication?</h4>
<p class='text-muted'><strong>Answer:</strong> - An alternative solution could be using the 460ETCQT-N2E MQTT gateway from RTA Automation and incorporating the AOI Modbus Client.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Where can I find more insights and advice on connecting an MQTT broker to an L33ER PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Seeking advice from experienced users or forums specializing in industrial automation and networking can provide valuable insights and guidance on this matter.</p>
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
