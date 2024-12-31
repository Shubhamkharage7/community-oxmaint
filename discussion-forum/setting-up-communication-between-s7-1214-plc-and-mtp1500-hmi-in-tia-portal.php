
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings! I am currently working on two projects involving S7-1214 PLCs - Project1 with an MTP1500 HMI and Project2 with another S7-1214 PLC. Both PLCs require communication with the HMI, and I have successfully set up a connection in the HMI for Project1. However, I am uncertain about the">
    <meta name="keywords" content="s7-1214 plc, mtp1500 hmi, tia portal, communication setup, project1, project2, connection configuration, devices/networks/connection settings, ip address, seamless operation, plc communication, hmi connection">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-communication-between-s7-1214-plc-and-mtp1500-hmi-in-tia-portal">
    <title>Setting up communication between S7-1214 PLC and MTP1500 HMI in TIA Portal | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting up communication between S7-1214 PLC and MTP1500 HMI in TIA Portal | Oxmaint Community">
    <meta property="og:description" content="Greetings! I am currently working on two projects involving S7-1214 PLCs - Project1 with an MTP1500 HMI and Project2 with another S7-1214 PLC. Both PLCs require communication with the HMI, and I have successfully set up a connection in the HMI for Project1. However, I am uncertain about the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-communication-between-s7-1214-plc-and-mtp1500-hmi-in-tia-portal">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting up communication between S7-1214 PLC and MTP1500 HMI in TIA Portal | Oxmaint Community">
    <meta name="twitter:description" content="Greetings! I am currently working on two projects involving S7-1214 PLCs - Project1 with an MTP1500 HMI and Project2 with another S7-1214 PLC. Both PLCs require communication with the HMI, and I have successfully set up a connection in the HMI for Project1. However, I am uncertain about the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-communication-between-s7-1214-plc-and-mtp1500-hmi-in-tia-portal"
      },
      "headline": "Setting up communication between S7-1214 PLC and MTP1500 HMI in TIA Portal",
      "description": "Greetings! I am currently working on two projects involving S7-1214 PLCs - Project1 with an MTP1500 HMI and Project2 with another S7-1214 PLC. Both PLCs require communication with the HMI, and I have successfully set up a connection in the HMI for Project1. However, I am uncertain about the",
      "author": {
        "@type": "Person",
        "name": "swedeleaner"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-30",
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
                <h1 class="text-white">Setting up communication between S7-1214 PLC and MTP1500 HMI in TIA Portal</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">456</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">193</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings! I am currently working on two projects involving S7-1214 PLCs - "Project1" with an MTP1500 HMI and "Project2" with another S7-1214 PLC. Both PLCs require communication with the HMI, and I have successfully set up a connection in the HMI for Project1. However, I am uncertain about the setup for Project2. I have configured a new connection in the HMI for Project2 by entering the IP address of the PLC. Should I also make an additional connection in the Devices/Networks/Connection settings of the Project2 PLC, or is the connection already established? (Please disregard the S7 Connection as it is intentional.) Remember, proper communication setup is essential for seamless operation.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Wondering how to link two S7-1214 PLCs to a single KTP600 PN HMI? Get industry support from Siemens experts on this topic - Article 65957.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>moggie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Moggie! The PLCs linked are part of the same project, but mine are actually spread across different projects.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To interact with the second PLC, you can either specify all settings manually using absolute addresses or designate it as a "proxy PLC." This feature allows for seamless integration and configuration. Visit SIOSsupport.industry.siemens.com for more information on PLC support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Jesper. I believe I have resolved the issue by duplicating the PLC within the smaller project. However, I encountered a message stating "No PLC found in project" when attempting to utilize device proxy. Can I still use PUT/GET within the same project to communicate between PLCs, or is there a more straightforward method available? My PUT/GET configuration is already set up – can I keep it as is?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>swedeleaner mentioned that they were able to address the issue by mirroring the PLC in the smaller project, which is a common workaround in situations where suppliers are hesitant to share the entire PLC program or when different versions of TIA are being used. Moving forward in the same project, the question arose whether PUT/GET functionality would suffice for PLC to PLC communication or if there is a simpler method available. The PUT/GET configuration is already set up and can be left as is for now. It is important to note that the PLC performing the PUT/GET function must have an unspecified connection to the other PLC and should not establish a fully specified connection that requires data to be loaded onto the partner PLC. While BSEND/BRECV would be preferred, it is not compatible with the S7-1200 model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to thank Jesper for your assistance - it's greatly appreciated. I decided to go for the fully specified connection, regardless of whether I download to either of the PLCs. One is currently in mid-commissioning phase, while the other is still offline and waiting for programming to be loaded.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-12-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>swedeleaner</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. How do I set up communication between an S7-1214 PLC and an MTP1500 HMI in TIA Portal?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set up communication between the S7-1214 PLC and MTP1500 HMI, you need to configure connections in both devices. Ensure you have the correct IP address entered in the HMI and establish a corresponding connection in the PLC's Devices/Networks/Connection settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. I have successfully set up a connection for Project1 between the S7-1214 PLC and the HMI. Do I need to create a new connection for Project2 in the HMI and PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, for each project involving a different S7-1214 PLC, you will need to create a new connection in both the HMI and PLC. Enter the specific IP address of the PLC for Project2 in the HMI, and set up a corresponding connection in the PLC's network settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it necessary to establish a separate connection in the Devices/Networks/Connection settings of the Project2 PLC, even if a connection is configured in the HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is essential to create a connection in the Devices/Networks/Connection settings of the Project2 PLC, in addition to setting up the connection in the HMI. This ensures proper communication between the PLC and HMI for seamless operation of the system.</p>
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
