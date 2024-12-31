
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello! I have an S7-300 PLC containing important data in DB5.DBD566 (Real) and DB1.DBW456 (Int) that I need to transfer to my S7-1200 PLC. Im looking for guidance on how to successfully GET these values without modifying the S7-300 program. Im encountering an error message stating the specified value">
    <meta name="keywords" content="s7-300 plc, s7-1200 plc, data transfer, dbdbd566, dbdbw456, get block, tia portal v15, program modification, error message, invalid value, s7-120">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-transfer-data-from-s7-300-to-s7-1200-plc-without-modifying-program">
    <title>How to Transfer Data from S7-300 to S7-1200 PLC Without Modifying Program | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Transfer Data from S7-300 to S7-1200 PLC Without Modifying Program | Oxmaint Community">
    <meta property="og:description" content="Hello! I have an S7-300 PLC containing important data in DB5.DBD566 (Real) and DB1.DBW456 (Int) that I need to transfer to my S7-1200 PLC. Im looking for guidance on how to successfully GET these values without modifying the S7-300 program. Im encountering an error message stating the specified value">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-transfer-data-from-s7-300-to-s7-1200-plc-without-modifying-program">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Transfer Data from S7-300 to S7-1200 PLC Without Modifying Program | Oxmaint Community">
    <meta name="twitter:description" content="Hello! I have an S7-300 PLC containing important data in DB5.DBD566 (Real) and DB1.DBW456 (Int) that I need to transfer to my S7-1200 PLC. Im looking for guidance on how to successfully GET these values without modifying the S7-300 program. Im encountering an error message stating the specified value">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-transfer-data-from-s7-300-to-s7-1200-plc-without-modifying-program"
      },
      "headline": "How to Transfer Data from S7-300 to S7-1200 PLC Without Modifying Program",
      "description": "Hello! I have an S7-300 PLC containing important data in DB5.DBD566 (Real) and DB1.DBW456 (Int) that I need to transfer to my S7-1200 PLC. Im looking for guidance on how to successfully GET these values without modifying the S7-300 program. Im encountering an error message stating the specified value",
      "author": {
        "@type": "Person",
        "name": "tientran"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-28",
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
                <h1 class="text-white">How to Transfer Data from S7-300 to S7-1200 PLC Without Modifying Program</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">302</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">49</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello! I have an S7-300 PLC containing important data in DB5.DBD566 (Real) and DB1.DBW456 (Int) that I need to transfer to my S7-1200 PLC. I'm looking for guidance on how to successfully "GET" these values without modifying the S7-300 program. I'm encountering an error message stating "the specified value is invalid" when attempting to use the GET block. What are the required settings for the S7-1200 PLC? Could someone provide me with detailed instructions and a program using TIA Portal V15? Any help would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about transferring data from an S7-300 to an S7-1200, a user named tientran seeks guidance on obtaining values from specific memory addresses without altering the S7-300 program. Despite encountering errors with the GET block, they are interested in learning the proper settings for the S7-1200 to facilitate the data transfer. Assistance in creating an instruction program using TIA Portal V15 is requested. View the accompanying image for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to improve performance and compatibility with various systems, it is recommended to use DBX instead of DBD when dealing with pointers. This will ensure smoother and more efficient operations, ultimately leading to better results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to obtain the values DB5.DBD566 (real) and DB1.DBW456 (int) from an S7-300 (10.255.255.1) without modifying its programming, it is advisable to use DBX instead of DBD for any pointers. If you are facing difficulties in retrieving the values, it is recommended to utilize a get command on an S7-1200 (10.255.255.10). Despite attempting to change the value through an HMI, the S7-1200 may still encounter difficulties in reading it. A step-by-step guide would be greatly appreciated. (The start values are 50 and 700). Thank you for your assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you accessing values from the S7-300 PLC, such as 700 and 50.0, and wondering how you can confirm that these values are being modified through the Human Machine Interface (HMI)?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Make sure to input RD_1 in the P# format, such as P#DB1.DBX4.0 Int 1 or P#DB1.DBX4.0 Byte 2. Additionally, have you set up the remote rack and slot for connecting 300 partners on the 1200 hardware / S7 connections window? Simply providing an IP address is not sufficient.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about updating values from an S7-300 PLC, L D[AR2P#0.0] asked how one can confirm adjustments made through the HMI to the readings of 700 and 50.0. Disregard the previous comment, as it was misinterpreted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up the RD_1 input in P# format, make sure to use P#DB1.DBX4.0 Int 1 or P#DB1.DBX4.0 Byte 2. Additionally, configuring the remote rack and slot for a 300 partner on 1200 hardware/S7 connections window is essential for proper functionality. Simply entering an IP address is not sufficient. Do I need to include S7-300 in the program for S7-1200? If so, the rack and slot must be set accordingly. Thank you for your response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After a quick correction on my part, I realized I misread the previous post. I am able to access the value identified by Step7 on my laptop as well as using KepserverEx4. Click to expand for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about compatibility between the S7-300 and S7-1200 PLCs, tientran asked whether the former needs to be included in the latter's program, requiring the configuration of rack and slot. In response to this query, it is possible to utilize an unspecified PLC, with manual configuration of the IP address, rack, and slot numbers. To do this, navigate to the Network view in the TIA portal, select connections, proceed to S7-connections, and input rack = 0, slot = 2 for the 300CPU in the connections window.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Lare's suggestion, it is possible to use an unknown or unspecified PLC for your project. In order to do this, you will need to manually configure the IP address, rack, and slot settings. To accomplish this, navigate to the Network view in the TIA portal, select connections, then S7-connections. In the connections window, input rack = 0 and slot = 2 specifically for the 300CPU. For a visual reference, please view attachment 71742. However, despite implementing these settings yesterday, they unfortunately did not work as expected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While testing a setting yesterday, I encountered issues that prevented it from working properly. This issue may be due to firewalls or other barriers between devices. When utilizing Put/Get commands, all that is needed is the IP address, rack, and slot on the unspecified PLC, while the partner PLC requires access to the DB-area and enabled Put/Get communication. It is important to note that the 300 series PLCs do not have security settings for Put/Get communication. To resolve this issue, ensure that both software and hardware are downloaded to the 1200 PLC. Additionally, it was previously necessary to power off and power on the PLC after the initial download of settings when utilizing Put/Get commands on a 300 PLC. The partner PLC, which is now a 300 series PLC, also does not have any security settings that could interfere with communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare mentioned that communication should work without any firewalls blocking the connection between PLCs. The Put/Get function requires an IP address, rack, and slot on the unspecified PLC, while the partner PLC only needs access to the DB area with communication allowed for Put/Get. It's worth noting that the 300 series PLCs do not have security settings for Put/Get. When working with S7-1200, both software and hardware need to be downloaded. In the past, a power cycle was required after the initial download when using Put/Get commands on the 300 PLC. As the partner PLC is now a 300 series, there are no security settings on that side either.

I tested the system with two S7-1200 PLCs this morning, and it worked fine. However, when attempting to connect with an S7-300 PLC, the communication was not successful. Although I initially connected the S7-1200 PLC to an ET200s module, I later connected it directly to the S7-300 Ethernet port with no result. Should I power off either the S7-1200 or the S7-300 PLCs to resolve this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Tientran reported that they were able to successfully communicate between two S7-1200 units, but encountered difficulties when trying to connect with an S7-300. Despite observing value changes on the OPC software, the S7-1200 did not receive any data. Initially, the S7-1200 was connected to the ET200s module, but after troubleshooting without success, they attempted a direct connection to the S7-300 ethernet port. Unsure of whether a power reset was required for the S7-1200 or S7-300, Tientran suggested trying a power cycle for the S7-1200. When dealing with 1200 <-> 1200 communication issues, the only difference may lie in the rack and slot numbers (and IP) settings when being read from the 300 CPU. It is important to verify that the S7-300 is configured with the correct DB-area for reading purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare suggested attempting a powerboot on the S7-1200 for troubleshooting purposes. If experiencing communication issues between two S7-1200 units, the main differences to check for are the rack and slot numbers, as well as the IP settings, especially if information is being read from a 300 CPU. Make sure to verify that the 300 CPU has the DB-area you are trying to access. It is important to confirm that the DB1.DBW456 and DB5.DBD566 are accessible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the error message "the specified value is invalid" when attempting to use the GET block for transferring data from S7-300 to S7-1200 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error message "the specified value is invalid" typically indicates a mismatch in data types or incorrect configuration settings while using the GET block for data transfer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are the required settings for the S7-1200 PLC when transferring data from S7-300 without modifying the program?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To transfer data from S7-300 to S7-1200 PLC without program modification, ensure correct configuration of communication settings, data types, and addresses between the two PLCs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Could someone provide detailed instructions and a program example using TIA Portal V15 for transferring data from S7-300 to S7-1200 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Detailed instructions and a program example using TIA Portal V15 can be provided to guide you through the successful data transfer process from S7-300 to S7-1200 PLC without modifying the existing program.</p>
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
