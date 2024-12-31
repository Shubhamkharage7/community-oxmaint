
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, Im seeking help on setting up a redundant master on Modbus to enable a backup PLC in my system. I aim to implement a system with two PLCs (primary and redundant) running the same program. In case the primary PLC fails, the redundant PLC will take over.">
    <meta name="keywords" content="redundant plc setup, modbus rtu redundancy, backup plc system, setting up modbus rtu, carel modbus rtu protocol, plc redundancy with modbus, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-redundant-plcs-with-modbus-rtu-for-system-backup">
    <title>Setting Up Redundant PLCs with Modbus RTU for System Backup | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting Up Redundant PLCs with Modbus RTU for System Backup | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, Im seeking help on setting up a redundant master on Modbus to enable a backup PLC in my system. I aim to implement a system with two PLCs (primary and redundant) running the same program. In case the primary PLC fails, the redundant PLC will take over.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-redundant-plcs-with-modbus-rtu-for-system-backup">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting Up Redundant PLCs with Modbus RTU for System Backup | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, Im seeking help on setting up a redundant master on Modbus to enable a backup PLC in my system. I aim to implement a system with two PLCs (primary and redundant) running the same program. In case the primary PLC fails, the redundant PLC will take over.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-redundant-plcs-with-modbus-rtu-for-system-backup"
      },
      "headline": "Setting Up Redundant PLCs with Modbus RTU for System Backup",
      "description": "Hello everyone, Im seeking help on setting up a redundant master on Modbus to enable a backup PLC in my system. I aim to implement a system with two PLCs (primary and redundant) running the same program. In case the primary PLC fails, the redundant PLC will take over.",
      "author": {
        "@type": "Person",
        "name": "wirelessliquid"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-12",
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
                <h1 class="text-white">Setting Up Redundant PLCs with Modbus RTU for System Backup</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>wirelessliquid</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">601</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">445</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I'm seeking help on setting up a redundant master on Modbus to enable a backup PLC in my system. I aim to implement a system with two PLCs (primary and redundant) running the same program. In case the primary PLC fails, the redundant PLC will take over. I plan to utilize Modbus RTU (specifically Carel Modbus RTU) as the communication protocol, with the Carel cPCO Mini as the controller. Each controller boasts two Modbus ports.

Given that Modbus is a single master protocol, my idea is to use the first Modbus port to establish a connection between the primary and redundant controllers to monitor the primary's status. The primary controller will function as the master on the second Modbus port, connecting to all sensors and devices. Similarly, the redundant controller will also act as a master on its secondary Modbus port, which will be inactive as long as the heartbeat signal between the controllers on the first Modbus port is consistent. In the event of a heartbeat error, the primary PLC's Modbus port 2 would be disabled, and the redundant PLC's Modbus port 2 would be activated. This setup would ensure redundancy with only one active master communicating with the sensors and devices at any given time.

Will this approach be effective? Are there any crucial details I may have overlooked? While I have experience with Ethernet IP over the past four years, my knowledge of Modbus is more limited.

Best regards,
Wirelessliquid</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>While I am not familiar with that specific controller, it is crucial for the backup RTU master to stay inactive when not handling communication tasks and to have a distinct Station ID on the RTU network. However, these conditions can pose challenges. Certain PLCs may not allow the configuration of a port as a Modbus Master and the assignment of a Station ID. It is important to ensure that the Station ID numbers of both RTU masters are unique to prevent them from both becoming active simultaneously when a slave responds to a poll. This scenario could lead to communication interference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you limited to using Modbus as your only communication protocol? While it may seem like a convenient choice, it may not be the best option for setting up redundancy. It could be challenging to ensure a smooth transition between the primary and secondary controllers, especially when it comes to controlling the outputs effectively. Without proper synchronization, the PLC not in control of the I/O devices may struggle to accurately track the states of the devices.

To address this issue, you may consider using three ports on each controller. One port can be dedicated to I/O communication, with both PLCs connected on the same network wire as masters. However, only one PLC should send Modbus commands at a time to avoid conflicts. The other two ports can be configured differently - one with the primary PLC as master and the secondary as slave, and the other with the secondary as master and the primary as slave. Through these ports, status data can be exchanged, and the PLC managing the I/O devices can transmit the current states to the secondary controller, ensuring synchronization between the programs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I set up redundant PLCs with Modbus RTU for system backup?</h4>
<p class='text-muted'><strong>Answer:</strong> You can implement a system with two PLCs running the same program, where the primary PLC functions as the master on one Modbus port while the redundant PLC monitors the primary's status and takes over in case of failure.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is Modbus RTU suitable for establishing communication between redundant PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, Modbus RTU can be used for communication between redundant PLCs, ensuring a backup system is in place to maintain continuous operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any specific considerations when using the Carel cPCO Mini controller for this setup?</h4>
<p class='text-muted'><strong>Answer:</strong> The Carel cPCO Mini controller offers two Modbus ports, making it suitable for establishing connections between the primary and redundant PLCs while also communicating with sensors and devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What happens in case of a heartbeat error between the primary and redundant controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> In the event of a heartbeat error, the primary PLC's Modbus port 2 will be disabled, and the redundant PLC's Modbus port 2 will be activated, ensuring continuous operation and redundancy.</p>
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
