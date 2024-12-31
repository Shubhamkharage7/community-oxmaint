
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently undertaking a project that involves setting up an IoT platform utilizing Microsoft Azure Cloud. For communication, I will be using LAN with the TCP protocol. My plan is to integrate OPC UA, Simatic IoT Gateway, and other tools to transfer data from the aging">
    <meta name="keywords" content="simotion control units, microsoft azure iot platform, integrating simotion controllers, simatic iot gateway, opc ua communication, lan tcp protocol, simotion scout programming, edge device data transfer, plc integration, iot cloud solutions, legacy control systems">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/integrating-simotion-control-units-with-microsoft-azure-iot-platform">
    <title>Integrating Simotion Control Units with Microsoft Azure IoT Platform | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Integrating Simotion Control Units with Microsoft Azure IoT Platform | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently undertaking a project that involves setting up an IoT platform utilizing Microsoft Azure Cloud. For communication, I will be using LAN with the TCP protocol. My plan is to integrate OPC UA, Simatic IoT Gateway, and other tools to transfer data from the aging">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/integrating-simotion-control-units-with-microsoft-azure-iot-platform">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Integrating Simotion Control Units with Microsoft Azure IoT Platform | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently undertaking a project that involves setting up an IoT platform utilizing Microsoft Azure Cloud. For communication, I will be using LAN with the TCP protocol. My plan is to integrate OPC UA, Simatic IoT Gateway, and other tools to transfer data from the aging">
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
        "@id": "https://community.oxmaint.com/discussion-forum/integrating-simotion-control-units-with-microsoft-azure-iot-platform"
      },
      "headline": "Integrating Simotion Control Units with Microsoft Azure IoT Platform",
      "description": "Hello everyone, I am currently undertaking a project that involves setting up an IoT platform utilizing Microsoft Azure Cloud. For communication, I will be using LAN with the TCP protocol. My plan is to integrate OPC UA, Simatic IoT Gateway, and other tools to transfer data from the aging",
      "author": {
        "@type": "Person",
        "name": "MatijaV"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-20",
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
                <h1 class="text-white">Integrating Simotion Control Units with Microsoft Azure IoT Platform</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MatijaV</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">247</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">488</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently undertaking a project that involves setting up an IoT platform utilizing Microsoft Azure Cloud. For communication, I will be using LAN with the TCP protocol. My plan is to integrate OPC UA, Simatic IoT Gateway, and other tools to transfer data from the aging Simotion controller to the Edge device (IPC), and ultimately to Microsoft Azure. The challenge lies in the compatibility of the old Simotion control units programmed in Simotion Scout, making it difficult to find a suitable solution. As a recent graduate with a focus on PLCs, I am seeking assistance from those familiar with this area. Any guidance or further information on the problem would be greatly appreciated. Thank you, Matija.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When selecting a solution, it is important to consider the specific requirements of your system. It is recommended to approach the decision-making process from this angle. The latest version of Simotion is known to support OPC UA, however, it is uncertain if an upgrade is possible for your system. It is also unclear whether the upgrade is a simple firmware update or if it involves additional costs (possibly related to engineering software). Have you looked into whether Simatic Edge offers a Simotion communications driver as an alternative to OPC UA? There are various gateway devices available that support multiple protocols and can seamlessly transmit data to the cloud. It is worth exploring if any of these devices support Simotion directly and can directly transfer data to Azure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You may want to enhance your system by integrating a Siemens HMI or PC with a Simotion "driver" to access tags through a proxy. This will enable your HMI to function as an edge device. Based on your initial plan, it seems like a viable option. In this scenario, it's advisable not to reprogram the Simotion controller.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, JRW suggested the possibility of integrating a Siemens HMI or PC with a Simotion "driver" to access tags via proxy, potentially allowing the HMI to function as an edge device. Building upon this idea from a previous post, it seems like this is already in line with your plans. In your situation, it may be best to refrain from reprogramming the Simotion controller. I have taken the step of adding a PC and will be moving forward in this direction. Apologies for the delayed response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MatijaV</span></li>
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
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1.  What are the key components involved in integrating Simotion Control Units with Microsoft Azure IoT Platform?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The key components involved in this integration include OPC UA, Simatic IoT Gateway, LAN with TCP protocol, and Edge devices (IPC) for transferring data from the aging Simotion controller to Microsoft Azure.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What is the main challenge faced when integrating old Simotion control units with Microsoft Azure IoT Platform?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The main challenge lies in the compatibility of the old Simotion control units programmed in Simotion Scout, making it difficult to find a suitable solution for transferring data to Microsoft Azure.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I overcome compatibility issues with old Simotion control units to integrate with Microsoft Azure IoT Platform?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Overcoming compatibility issues may involve finding alternative tools or methods that can bridge the gap between the old Simotion control units and modern IoT platforms like Microsoft Azure. Seeking assistance from experts in the field or exploring additional resources can provide valuable insights and solutions.</p>
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
