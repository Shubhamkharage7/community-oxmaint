
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have been a frequent visitor to this forum and am excited to finally be a part of this community! Today, I have a question regarding communication between a CompactLogix 5069-L330ER and PLC-5/20E over Ethernet. I currently have multiple PLC-5 controlled induction furnaces, each with its own">
    <meta name="keywords" content="seo-friendly keywords for the article could include:, , compactlogix 5069-l330er, plc-5 integration, io-link flowmeter communication, ethernet communication, ifm io-link master">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/integrating-compactlogix-5069-l330er-with-plc-5-for-io-link-flowmeter-communication">
    <title>Integrating CompactLogix 5069-L330ER with PLC-5 for IO-Link Flowmeter Communication | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Integrating CompactLogix 5069-L330ER with PLC-5 for IO-Link Flowmeter Communication | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have been a frequent visitor to this forum and am excited to finally be a part of this community! Today, I have a question regarding communication between a CompactLogix 5069-L330ER and PLC-5/20E over Ethernet. I currently have multiple PLC-5 controlled induction furnaces, each with its own">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/integrating-compactlogix-5069-l330er-with-plc-5-for-io-link-flowmeter-communication">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Integrating CompactLogix 5069-L330ER with PLC-5 for IO-Link Flowmeter Communication | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have been a frequent visitor to this forum and am excited to finally be a part of this community! Today, I have a question regarding communication between a CompactLogix 5069-L330ER and PLC-5/20E over Ethernet. I currently have multiple PLC-5 controlled induction furnaces, each with its own">
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
        "@id": "https://community.oxmaint.com/discussion-forum/integrating-compactlogix-5069-l330er-with-plc-5-for-io-link-flowmeter-communication"
      },
      "headline": "Integrating CompactLogix 5069-L330ER with PLC-5 for IO-Link Flowmeter Communication",
      "description": "Hello everyone, I have been a frequent visitor to this forum and am excited to finally be a part of this community! Today, I have a question regarding communication between a CompactLogix 5069-L330ER and PLC-5/20E over Ethernet. I currently have multiple PLC-5 controlled induction furnaces, each with its own",
      "author": {
        "@type": "Person",
        "name": "Wright18"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-27",
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
                <h1 class="text-white">Integrating CompactLogix 5069-L330ER with PLC-5 for IO-Link Flowmeter Communication</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Wright18</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">81</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">331</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have been a frequent visitor to this forum and am excited to finally be a part of this community! Today, I have a question regarding communication between a CompactLogix 5069-L330ER and PLC-5/20E over Ethernet. 

I currently have multiple PLC-5 controlled induction furnaces, each with its own PLC. While plans are in place to upgrade all furnaces to the CompactLogix platform, recent issues with process water have necessitated the integration of IO-Link flowmeters into our current systems.

My objective is to install a CompactLogix 5069-L330ER processor, IFM IO-Link master, and IFM IO-Link flowmeters on each furnace. I aim to send status updates from the flowmeters to the PLC-5, which will continue to control pumps, heating elements, and valves. This will not only address our immediate concerns but also jumpstart our planned control upgrades.

I am familiar with sending data between Control/CompactLogix processors using produced and consumed tags but have limited experience with messaging. My initial queries regarding this approach are as follows:

1. Is it feasible to transmit critical process information (low pump flow, high water temperature, etc.) via messaging?
2. Can we verify that the message was successfully received by the PLC-5?
3. When should we utilize the "Map PLC/SLC Messages" function in Studio 5000?
4. Is it possible for the CompactLogix to directly write to the PLC-5 data table?

Thank you in advance for your assistance. Jake</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>1. Ensure that your system has a fail-safe mechanism in place to detect a loss of connection, such as setting up a heartbeat signal and alarms for communication failures. Implement a rolling heartbeat interval from the ControlLogix (CLX) and compare it with the previous interval in the PLC5. If the interval remains static for a certain period, trigger an alarm.

2. It is crucial to pay attention to step 13, especially when transferring messages between a PLC5 and a CLX. When sending or receiving data, use a specific format such as N7:0 in the PLC5 and map it to a Logix tag in the CLX. However, it is essential to consider step 44 - avoid writing directly from one PLC to another to prevent issues like writing to incorrect addresses. Always retrieve necessary data from the remote PLC in the requesting PLC to simplify troubleshooting and prevent errors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the PLCTalk forum community! I recommend placing your MSG instructions in the PLC-5 whenever possible. It's important to ensure that the PLC-5E has enough message control data table elements, especially since Ethernet requires double the usual amount. Additionally, it is essential to confirm that the PLC-5E has the necessary firmware versions to communicate with a ControlLogix system.

You can check the firmware list on the RA Knowledgebase or perform a quick inspection of the PLC-5 physically and via the network. A Series F controller will have an RJ45 jack and be labeled as "10/100" and possibly "EtherNet/IP", indicating that it has the correct firmware. Alternatively, you can use Windows PowerShell to test a TCP/IP connection to TCP Port 44818 by entering the command "tnc <IP address of PLC5E> -p 44818".

If the controller only responds to Port 2222 and not Port 44818, it signifies that it's an older model that cannot communicate with the CompactLogix. To allow the CompactLogix to emulate PLC/SLC Data Tables, use the "Map PLC/SLC data tables" feature. Set up an array tag (INT or REAL type) and assign it a Data Table Number to simulate when receiving a Data Table Typed Read or Typed Write command.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
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
<h4 class='text-dark'>FAQ: 1. Is it feasible to transmit critical process information (low pump flow, high water temperature, etc.) via messaging?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is feasible to transmit critical process information via messaging between the CompactLogix 5069-L330ER and PLC-5/20E over Ethernet. You can utilize messaging to send updates from IFM IO-Link flowmeters to the PLC-5 for monitoring and control purposes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can we verify that the message was successfully received by the PLC-5?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can verify that the message was successfully received by the PLC-5. Implementing confirmation or acknowledgement mechanisms in the messaging protocol can help ensure that the data transmission is successful.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. When should we utilize the "Map PLC/SLC Messages" function in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> - The "Map PLC/SLC Messages" function in Studio 5000 should be utilized when you need to establish communication and data exchange between the CompactLogix and PLC-5/SLC processors. This function helps in mapping message elements for efficient data transfer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it possible for the CompactLogix to directly write to the PLC-5 data table?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is possible for the CompactLogix to write directly to the PLC-5 data table using messaging or other communication protocols supported by both platforms. By configuring the messaging appropriately, you can enable direct data exchange between the two processors.</p>
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
