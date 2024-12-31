
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Does anyone have insight on the conditions necessary for Rockwell to switch a Module Status from Running to Comm Loss when pulling via GSV? Similarly, what are the requirements for Rockwell to activate the ConnectionFaulted bit in the CONNECTION_STATUS Type of a Produce Consume UDT?We are experiencing intermittent trips">
    <meta name="keywords" content="rockwell module, status change, communication faults, investigation, module status running, comm loss, gsv, connectionfaulted, connection_status type, produce consume udt, intermittent trips, root cause, rockwell literature">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/rockwell-module-status-change-and-communication-faults-investigation">
    <title>Rockwell Module Status Change and Communication Faults Investigation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Rockwell Module Status Change and Communication Faults Investigation | Oxmaint Community">
    <meta property="og:description" content="Does anyone have insight on the conditions necessary for Rockwell to switch a Module Status from Running to Comm Loss when pulling via GSV? Similarly, what are the requirements for Rockwell to activate the ConnectionFaulted bit in the CONNECTION_STATUS Type of a Produce Consume UDT?We are experiencing intermittent trips">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/rockwell-module-status-change-and-communication-faults-investigation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rockwell Module Status Change and Communication Faults Investigation | Oxmaint Community">
    <meta name="twitter:description" content="Does anyone have insight on the conditions necessary for Rockwell to switch a Module Status from Running to Comm Loss when pulling via GSV? Similarly, what are the requirements for Rockwell to activate the ConnectionFaulted bit in the CONNECTION_STATUS Type of a Produce Consume UDT?We are experiencing intermittent trips">
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
        "@id": "https://community.oxmaint.com/discussion-forum/rockwell-module-status-change-and-communication-faults-investigation"
      },
      "headline": "Rockwell Module Status Change and Communication Faults Investigation",
      "description": "Does anyone have insight on the conditions necessary for Rockwell to switch a Module Status from Running to Comm Loss when pulling via GSV? Similarly, what are the requirements for Rockwell to activate the ConnectionFaulted bit in the CONNECTION_STATUS Type of a Produce Consume UDT?We are experiencing intermittent trips",
      "author": {
        "@type": "Person",
        "name": "JankyPLC"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-31",
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
                <h1 class="text-white">Rockwell Module Status Change and Communication Faults Investigation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JankyPLC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">311</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">229</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Does anyone have insight on the conditions necessary for Rockwell to switch a Module Status from Running to Comm Loss when pulling via GSV? Similarly, what are the requirements for Rockwell to activate the "ConnectionFaulted" bit in the "CONNECTION_STATUS" Type of a Produce Consume UDT?We are experiencing intermittent trips of these statuses and are struggling to pinpoint the root cause. Despite thorough searches, we have been unable to locate this information in Rockwell literature.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In general, a cyclic EtherNet/IP connection is considered lost due to a timeout if 4 times the RPI has elapsed without the Originator (the PLC) receiving a data frame from the Target (the I/O adapter). This applies to both Produced/Consumed Tags and I/O connections. Although the EtherNet/IP specification allows for the timeout to be set at any multiple of the RPI, in my experience, Rockwell products typically use a multiplier of 4 and do not offer adjustment options. 

Each production of cyclic data is assigned an incremental transaction ID. By capturing data frames with Wireshark, you can observe the transaction IDs increasing with each transmission. Analyzing these IDs can help identify missing values. The connection statistics webpage on the controller will also flag missed packets, indicating potential packet loss within the infrastructure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken provided a detailed explanation on the concept of "Comm Loss" in IO status. When querying the EntryStatus using GSV and masking it, several possible states can be derived. These states include Standby, Faulted, Validating, Connecting, Connected, Shutting Down, Inhibited, Waiting, Reconfiguring, Firmware Updating, and Configuring. To describe the state of being offline, terms like CommLoss, Disconnected, LinkDown, or Offline can be used. The logic of wanting the device to be connected but it isn't due to inhibition best represents this state. The term Sts_Offline may be preferred, or perhaps Sts_Down. Ultimately, the key is understanding that a connection being inhibited does not necessarily indicate a complete Comm Loss situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken, thank you for providing the essential information I needed to troubleshoot effectively! Jeremy, your insight is on point! The AOI being utilized examines various statuses and classifies them as Down if they are not inhibited or connected. It can be a challenge to determine the level of detail to include in my posts, as there is a constant balance between the importance of details and the tendency for readers to only skim the first few sentences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JankyPLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently addressing an intermittent issue and made an intriguing observation while working on it. I implemented the same logic to log communication failures in both PLCs that are exchanging data. Last night, PLC1 detected a 2.7s period where the .ConnectionFaulted (Connection Status datatype) of the received tag from PLC2 turned true. Surprisingly, PLC2 did not register a .ConnectionFaulted status for the tag received from PLC1. As of now, PLC1 has recorded 5 communication losses, while PLC2 has only recorded 1. This discrepancy is puzzling to me. How is it possible to experience communication loss from PLC2 to PLC1, as seen in PLC1's logs, without experiencing the same loss from PLC1 to PLC2 at the same time?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JankyPLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JankyPLC noted: I am still troubleshooting an intermittent issue and made an interesting observation. I implemented identical logic in both PLCs that exchange data with each other to log communication failures. Last night, PLC1 detected a 2.7-second period where the .ConnectionFaulted (Connection Status datatype) of the data received from PLC2 turned true. However, in PLC2, the .ConnectionFaulted bit of the data from PLC1 did not turn true. Currently, PLC1 has recorded 5 communication losses, while PLC2 has only registered 1. This discrepancy is puzzling. How could there be communication losses from PLC2 to PLC1 as documented in PLC1, while there are no communication losses from PLC1 to PLC2 as observed in PLC2 simultaneously? Could the PLC that did not detect the issue have been placed into Program mode?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, both PLCs were in active production, with one being located within a secured perimeter. Despite this, there was no communication loss following my earlier comment, which remained consistent overnight and into the morning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JankyPLC</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What are the conditions necessary for Rockwell to switch a Module Status from Running to Communication Loss when pulling via GSV?
- Rockwell typically switches a Module Status from Running to Communication Loss when there is a loss of communication between the module and the controller. This could be due to network issues, wiring problems, or configuration errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How does Rockwell activate the "ConnectionFaulted" bit in the "CONNECTION_STATUS" Type of a Produce Consume UDT?</h4>
<p class='text-muted'><strong>Answer:</strong> - The "ConnectionFaulted" bit in the "CONNECTION_STATUS" Type of a Produce Consume UDT is activated when there is an issue with the connection between the producing and consuming devices. This could be caused by network interruptions, configuration mismatches, or hardware failures.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could be the root cause of intermittent trips of Module Status and "ConnectionFaulted" bit activations in Rockwell systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - Intermittent trips of Module Status and "ConnectionFaulted" bit activations in Rockwell systems could be caused by various factors such as intermittent network issues, fluctuating signal strength, loose connections, or incompatible firmware versions between devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Where can I find detailed information about Rockwell's Module Status changes and "ConnectionFaulted" bit activations?</h4>
<p class='text-muted'><strong>Answer:</strong> - Detailed information about Rockwell's Module Status changes and "ConnectionFaulted" bit activations can usually be found in Rockwell's technical documentation, user manuals, or knowledge base articles. If you are unable to locate this</p>
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
