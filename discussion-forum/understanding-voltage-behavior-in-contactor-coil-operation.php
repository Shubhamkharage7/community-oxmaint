
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Encountering a new situation, I found myself dealing with a 120v output card that controls a motor contactor and overloads. After setting the output, the motor started but eventually overamperage caused the overloads to trip, shutting off the motor. With A1 receiving 120v and A2 using the neutral with">
    <meta name="keywords" content="understanding voltage behavior, contactor coil operation, 120v output card, motor contactor, overloads, overamperage, tripping, a1, a2, neutral connections, normally closed contacts, voltage readings, grounding">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-voltage-behavior-in-contactor-coil-operation">
    <title>Understanding Voltage Behavior in Contactor Coil Operation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding Voltage Behavior in Contactor Coil Operation | Oxmaint Community">
    <meta property="og:description" content="Encountering a new situation, I found myself dealing with a 120v output card that controls a motor contactor and overloads. After setting the output, the motor started but eventually overamperage caused the overloads to trip, shutting off the motor. With A1 receiving 120v and A2 using the neutral with">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-voltage-behavior-in-contactor-coil-operation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding Voltage Behavior in Contactor Coil Operation | Oxmaint Community">
    <meta name="twitter:description" content="Encountering a new situation, I found myself dealing with a 120v output card that controls a motor contactor and overloads. After setting the output, the motor started but eventually overamperage caused the overloads to trip, shutting off the motor. With A1 receiving 120v and A2 using the neutral with">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-voltage-behavior-in-contactor-coil-operation"
      },
      "headline": "Understanding Voltage Behavior in Contactor Coil Operation",
      "description": "Encountering a new situation, I found myself dealing with a 120v output card that controls a motor contactor and overloads. After setting the output, the motor started but eventually overamperage caused the overloads to trip, shutting off the motor. With A1 receiving 120v and A2 using the neutral with",
      "author": {
        "@type": "Person",
        "name": "mavrick"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-24",
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
                <h1 class="text-white">Understanding Voltage Behavior in Contactor Coil Operation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mavrick</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">349</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">333</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Encountering a new situation, I found myself dealing with a 120v output card that controls a motor contactor and overloads. After setting the output, the motor started but eventually overamperage caused the overloads to trip, shutting off the motor. With A1 receiving 120v and A2 using the neutral with normally closed contacts, I observed that removing the 120v led to different voltage readings depending on the connections. 

Upon turning off the output, I discovered that testing from A1 yielded 120v when grounded or connected to the main neutral terminals. However, when connected to the normally closed terminals (which loop back to the main neutral terminal), the voltage was 0. Surprisingly, this occurred without resetting the overload. After resetting the overload, the voltage readings returned to what was expected.

This led me to wonder if a coil can retain voltage during an overload situation. I have been unable to find any information on this phenomenon. Any insights would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like the neutral wire of the 120 volt source or feed you are using may not be properly grounded. Make sure your electrical system is properly grounded to prevent any potential issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rob...</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mavrick inquired whether a coil can retain voltage during overload situations, similar to a capacitor. However, nothing can store an AC voltage in that manner. Mavrick further described a scenario where A1 on the coil was receiving 120v and A2 was connected to the neutral, causing the circuit to open. Surprisingly, even after removing the 120v input, connecting A1 to ground or the main neutral terminals resulted in 120v readings, while connecting to the normally closed terminals resulted in 0 volts. This phenomenon occurred without resetting the overload, leading to suspicions of induced or capacitively coupled ("phantom") voltage. Upon resetting the overload, the voltage readings returned to the expected zero. It was suggested that the initial readings could be attributed to induced signals, as the coil effectively acted as an antenna. To verify the voltage readings, using a DMM with low impedance input was recommended.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>strantor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are using a triac output card, a common issue is reading 120V when there is no load due to leakage current through the triac. In this case, your meter may not provide sufficient load to accurately measure the voltage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Eric Nelson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the event that a contactor has three overloads, it is essential to disconnect the power and carefully remove them. Press the overload reset button before inserting the new overloads in a straight manner. Take note of the type of output card in use and proceed with caution when removing wires from the output terminal. It is important to understand the circuit, as power is typically applied to the normally closed contact before passing through the coil and connecting to the neutral output. This signifies a sinking output, not a sourcing one. It is advisable to be cautious and follow these steps carefully.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Eric Nelson explained that when testing a triac output card, a reading of 120V may be displayed if there is no load due to leakage current through the triac. In this situation, a meter alone may not provide enough of a load to accurately measure the output voltage. This information is essential for troubleshooting and ensuring accurate readings from the card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>At the water utility I worked for, we had numerous triac output cards utilized with PLC5/40. Our smaller motor systems often incorporated interposing relays. These relays were triggered by the output, activating a milliamp relay coil which then closed the relay contacts, supplying power to the motor starter. One advantageous aspect of this configuration is that if someone mistakenly connects an output card to a 3.2 amp hydraulic valve solenoid, only the contacts in a cost-effective $5 ice cube relay would be damaged in the event of a malfunction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named saultgeorge shared their experience with using triac output cards at a water utility with a PLC5/40 system. Many smaller motor systems utilized interposing relays to control the power flow to the motor starter. One advantage of this setup is that if an output card is incorrectly connected to a high-amperage solenoid, only the inexpensive ice cube relay contacts would be damaged. I have encountered a similar issue with a CompactLogix system, where the low-profile relays were not sufficient to handle the load, requiring the purchase of more expensive ones with built-in surge protection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can a contactor coil retain voltage during an overload situation?</h4>
<p class='text-muted'><strong>Answer:</strong> - In the scenario described, the user observed unexpected voltage readings when testing the contactor coil connections. This led to the question of whether a coil can retain voltage during an overload situation.
   - Answer: Based on the user's experience, it seems that in certain conditions, such as during an overload situation, the contactor coil may retain voltage. Resetting the overload helped return the voltage readings to normal.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why did the motor overamperage cause the overloads to trip?</h4>
<p class='text-muted'><strong>Answer:</strong> - The user mentioned that the motor started but eventually overamperage caused the overloads to trip, shutting off the motor. Understanding why this occurred is crucial for troubleshooting and preventing future issues.
   - Answer: Overloads are designed to protect the motor from excessive current, which can lead to overheating and damage. When the motor draws more current than the overloads are rated for, they trip to prevent further damage.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why did the voltage readings vary depending on the connections to the contactor coil?</h4>
<p class='text-muted'><strong>Answer:</strong> - The user observed that removing the 120v input led to different voltage readings depending on how the contactor coil connections were tested. Understanding why the voltage readings varied can provide insights into the electrical behavior of the system.
   - Answer: The varying voltage readings when testing the contactor coil connections could be attributed to how the circuit is designed and how different connections affect the flow</p>
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
