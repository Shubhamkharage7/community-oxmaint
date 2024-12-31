
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am seeking assistance in establishing a connection between an Allen Bradley Micrologix 1200 using DF1 protocol and a WinCC Advanced project on a PC station (not HMI). Currently, I am able to run the project using WinCC RT at Windows startup, but I am using WinCC Professional, which">
    <meta name="keywords" content="allen bradley micrologix 1200, wincc advanced project, df1 protocol, wincc rt, pc station, serial communication, wincc professional, driver integration, serial port, project setup, windows startup, project saving, driver compatibility">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/connecting-allen-bradley-micrologix-1200-with-wincc-advanced-project-using-df1-protocol-and-wincc-rt">
    <title>Connecting Allen Bradley Micrologix 1200 with WinCC Advanced project using DF1 protocol and WinCC RT | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Connecting Allen Bradley Micrologix 1200 with WinCC Advanced project using DF1 protocol and WinCC RT | Oxmaint Community">
    <meta property="og:description" content="I am seeking assistance in establishing a connection between an Allen Bradley Micrologix 1200 using DF1 protocol and a WinCC Advanced project on a PC station (not HMI). Currently, I am able to run the project using WinCC RT at Windows startup, but I am using WinCC Professional, which">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/connecting-allen-bradley-micrologix-1200-with-wincc-advanced-project-using-df1-protocol-and-wincc-rt">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Connecting Allen Bradley Micrologix 1200 with WinCC Advanced project using DF1 protocol and WinCC RT | Oxmaint Community">
    <meta name="twitter:description" content="I am seeking assistance in establishing a connection between an Allen Bradley Micrologix 1200 using DF1 protocol and a WinCC Advanced project on a PC station (not HMI). Currently, I am able to run the project using WinCC RT at Windows startup, but I am using WinCC Professional, which">
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
        "@id": "https://community.oxmaint.com/discussion-forum/connecting-allen-bradley-micrologix-1200-with-wincc-advanced-project-using-df1-protocol-and-wincc-rt"
      },
      "headline": "Connecting Allen Bradley Micrologix 1200 with WinCC Advanced project using DF1 protocol and WinCC RT",
      "description": "I am seeking assistance in establishing a connection between an Allen Bradley Micrologix 1200 using DF1 protocol and a WinCC Advanced project on a PC station (not HMI). Currently, I am able to run the project using WinCC RT at Windows startup, but I am using WinCC Professional, which",
      "author": {
        "@type": "Person",
        "name": "bigplik"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-16",
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
                <h1 class="text-white">Connecting Allen Bradley Micrologix 1200 with WinCC Advanced project using DF1 protocol and WinCC RT</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bigplik</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1214</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">109</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am seeking assistance in establishing a connection between an Allen Bradley Micrologix 1200 using DF1 protocol and a WinCC Advanced project on a PC station (not HMI). Currently, I am able to run the project using WinCC RT at Windows startup, but I am using WinCC Professional, which does not have a driver for connecting with the Micrologix 1200 via serial port.

If I switch to WinCC Advanced to create a project for the PC station, I can find a driver for serial communication with DF1. However, I am unsure how to save the project in a way that allows it to be run by WinCC RT. Therefore, I am exploring two solutions:

1) Is there a method to integrate a DF1 serial driver into WinCC Professional?
2) How can I save a WinCC Advanced project to enable it to be run by WinCC RT at a later time?

Any suggestions or advice on this matter would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>bigplik asked if it is possible to integrate the DF1 serial driver into WinCC Professional. While I may not have direct experience with WinCC Professional, I believe it can function as an OPC DA Client for RSLinx, which serves as an OPC DA Server.

Additionally, bigplik inquired about how to save a WinCC Advanced project in order to later run it with WinCC RT (runtime). To achieve this, ensure that the target PC and configuration PC are connected to the same LAN. Then, launch the WinCC RT Loader program on the target PC and initiate a transfer via Ethernet from the configuration PC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>My Micrologix 1200 PLC does not have an ETH port, only a serial port available. Hey @JesperMP, are you familiar with any AllenBradley alternatives for WinCC Runtime? I want to create a basic SCADA screen to operate on a PC and link it to my AB Micrologix 1200 using DF1. Can you suggest any compatible solutions for this setup?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bigplik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Both the configuration PC and the target PC are equipped with Ethernet connectivity, even if the connection to the PLC is serial. To initiate a test of WinCC Advanced RT on the configuration PC within TIA, simply click on the 'Start Runtime' button. WinCC Advanced is a suitable option for a SCADA Lite system, featuring an integrated DF1 driver. In contrast, WinCC Professional may be excessive for a project involving an AB ML1200 PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a single PC and I need to remotely start it in order to run my PC station project using WinCC Advanced. This project requires a connection to an AB ML1200 PLC via a serial port, as no other ports are available on the AB ML1200 and there is no additional PC for use.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bigplik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The WinCC Advanced programming software should be installed on the same PC designated for operation. In this scenario, simply follow the instructions for initiating the transfer process and enter the PC's unique IP address.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
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
<h4 class='text-dark'>FAQ: 1) Can I integrate a DF1 serial driver into WinCC Professional for connecting with an Allen Bradley Micrologix 1200?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, WinCC Professional does not have a built-in driver for connecting with the Micrologix 1200 via serial port. You may need to consider using WinCC Advanced, which offers a driver for serial communication with DF1.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2) How can I save a WinCC Advanced project to be run by WinCC RT at a later time?</h4>
<p class='text-muted'><strong>Answer:</strong> - To enable a WinCC Advanced project to be run by WinCC RT, you can save the project in a compatible format that WinCC RT can access. Make sure to follow the appropriate steps for saving and transferring the project files for seamless execution.</p>
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
