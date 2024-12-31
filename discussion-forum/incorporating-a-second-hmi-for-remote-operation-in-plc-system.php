
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I am preparing to incorporate a second identical HMI into a project. This new HMI will essentially mirror the functionality of the first one. Our equipment can be operated from either HMI, based on the customers requirements for the day. It is important to note that only">
    <meta name="keywords" content="hmi, remote operation, plc system, second hmi, mirroring functionality, customer requirements, control unit, hmi conflict, integer value, pushbuttons, triggering actions, automation direct ea9, micrologix 1400 plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/incorporating-a-second-hmi-for-remote-operation-in-plc-system">
    <title>Incorporating a Second HMI for Remote Operation in PLC System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Incorporating a Second HMI for Remote Operation in PLC System | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I am preparing to incorporate a second identical HMI into a project. This new HMI will essentially mirror the functionality of the first one. Our equipment can be operated from either HMI, based on the customers requirements for the day. It is important to note that only">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/incorporating-a-second-hmi-for-remote-operation-in-plc-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Incorporating a Second HMI for Remote Operation in PLC System | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I am preparing to incorporate a second identical HMI into a project. This new HMI will essentially mirror the functionality of the first one. Our equipment can be operated from either HMI, based on the customers requirements for the day. It is important to note that only">
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
        "@id": "https://community.oxmaint.com/discussion-forum/incorporating-a-second-hmi-for-remote-operation-in-plc-system"
      },
      "headline": "Incorporating a Second HMI for Remote Operation in PLC System",
      "description": "Hello everyone! I am preparing to incorporate a second identical HMI into a project. This new HMI will essentially mirror the functionality of the first one. Our equipment can be operated from either HMI, based on the customers requirements for the day. It is important to note that only",
      "author": {
        "@type": "Person",
        "name": "Skidood"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-25",
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
                <h1 class="text-white">Incorporating a Second HMI for Remote Operation in PLC System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Skidood</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">371</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">418</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I am preparing to incorporate a second identical HMI into a project. This new HMI will essentially mirror the functionality of the first one. Our equipment can be operated from either HMI, based on the customer's requirements for the day. It is important to note that only one HMI can be used at a time to control the unit, avoiding any conflicts. Both HMIs will display the same screen simultaneously by monitoring an integer value in the PLC.

One concern I have is regarding pushbuttons on the screens triggering actions in the PLC. If a button is pressed on one HMI while it is not pressed on the other, will this create a conflict in the PLC? I am using Automation Direct EA9 HMI and a MicroLogix 1400 PLC, with one HMI connected via Ethernet and the other through RS-232.

I believe that as long as the bit in the PLC controlled by the pushbutton changes state as intended, even momentarily, there should not be any issues. However, I would appreciate any advice or insights on managing potential conflicts in this setup. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If one button is pressed on one HMI while the same button on the other HMI is not pressed, it may create a conflict in the PLC. However, there is no need to be concerned about this. When you touch a momentary pushbutton on the HMI screen, a value of 1 is written to the corresponding bit in the PLC. This value is written only once. When you release the button on the HMI screen, a value of zero is written to the PLC bit, also only once.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Steve, the communication server functions based on state changes and updates values accordingly. One important consideration for duplicated HMIs is the potential security issues that may arise if only one HMI is logged in, as well as any alarm acknowledgment discrepancies between the two HMIs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In situations where multiple HMI units are used, a common practice is to implement a 'Take Control' feature. This can be achieved through an external selector switch or HMI buttons. The manual controls are typically grouped on specific pages within the HMI, with access restricted to the HMI currently in control. This measure is crucial in preventing safety incidents, such as the accidental triggering of actuators by unauthorized personnel. 
A key requirement is for operators to release control after use, allowing others to take over from different locations. A popular choice is to use illuminated selector switches that indicate control status. While there may be instances where operators forget to release control initially, the system typically operates as intended after a short adjustment period. This approach ensures smooth and safe machine operation. 
Regards</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chavak</span></li>
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
<h4 class='text-dark'>FAQ: 1. FAQ: How can I incorporate a second HMI for remote operation in a PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To incorporate a second HMI into your project, ensure both HMIs mirror the same functionality and can control the equipment based on customer requirements. Use a method to monitor an integer value in the PLC to synchronize the screens.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: What should I consider to avoid conflicts when using two HMIs to control a unit?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To prevent conflicts, ensure only one HMI can control the unit at a time. Monitor the pushbutton states in the PLC to manage potential conflicts that may arise when one HMI triggers actions that the other HMI does not.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: Will pressing a button on one HMI while it is not pressed on the other HMI create conflicts in the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Pressing a button on one HMI should not create conflicts in the PLC as long as the bit controlled by the pushbutton changes state as intended. Monitor and synchronize the states of the pushbuttons between HMIs to avoid potential conflicts.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. FAQ: What equipment are compatible for incorporating a second HMI in a PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The thread mentions using Automation Direct EA9 HMI and a MicroLogix 1400 PLC, with one HMI connected via Ethernet and the other through RS-232. Ensure compatibility between the HMIs and the PLC to effectively integrate a second HMI for remote operation.</p>
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
