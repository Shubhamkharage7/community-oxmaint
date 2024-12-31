
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I currently have numerous Micros deployed in the field, including models 810, 820, and a couple of 850, totaling about 12 units in operation 24/7. Recently, I encountered an issue with one of these units for the first time. This particular Micro is controlling a switching conveyor">
    <meta name="keywords" content="micro820 troubleshooting, conveyor switching failure, micro plc issues, micro820 fault light, troubleshooting conveyor control, micro820 communication problem, micro820 enet light">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-a-micro820-failure-why-is-the-conveyor-not-switching">
    <title>Troubleshooting a Micro820 Failure: Why is the Conveyor Not Switching? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting a Micro820 Failure: Why is the Conveyor Not Switching? | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I currently have numerous Micros deployed in the field, including models 810, 820, and a couple of 850, totaling about 12 units in operation 24/7. Recently, I encountered an issue with one of these units for the first time. This particular Micro is controlling a switching conveyor">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-a-micro820-failure-why-is-the-conveyor-not-switching">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting a Micro820 Failure: Why is the Conveyor Not Switching? | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I currently have numerous Micros deployed in the field, including models 810, 820, and a couple of 850, totaling about 12 units in operation 24/7. Recently, I encountered an issue with one of these units for the first time. This particular Micro is controlling a switching conveyor">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-a-micro820-failure-why-is-the-conveyor-not-switching"
      },
      "headline": "Troubleshooting a Micro820 Failure: Why is the Conveyor Not Switching?",
      "description": "Hello everyone, I currently have numerous Micros deployed in the field, including models 810, 820, and a couple of 850, totaling about 12 units in operation 24/7. Recently, I encountered an issue with one of these units for the first time. This particular Micro is controlling a switching conveyor",
      "author": {
        "@type": "Person",
        "name": "PLC Pie Guy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-01",
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
                <h1 class="text-white">Troubleshooting a Micro820 Failure: Why is the Conveyor Not Switching?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLC Pie Guy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3476</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">330</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I currently have numerous Micros deployed in the field, including models 810, 820, and a couple of 850, totaling about 12 units in operation 24/7. Recently, I encountered an issue with one of these units for the first time. This particular Micro is controlling a switching conveyor for lane sorting, which includes a 1 h.p. 600VAC motor on a VFD, two 24VDC magnets, a photoeye, and a signal from a checkweigher.

Upon startup, it was discovered that the conveyor was not switching, and the Micro displayed a solid RED fault light. After attempting to power cycle the unit multiple times without success, I decided to replace it with a new unit, which has been running smoothly since.

Now, with the failed Micro on my desk, I am unable to communicate with it. The ENET light is solid GREEN, indicating that it should have a configured IP address, but I am unable to locate it. Even after trying to ping the address assigned to it a year ago, setting the computer IP to the default 169.254.XXX.XXX with a subnet of 255.255.0.0, and checking with Wireshark, I am still unable to establish a connection.

It is worth noting that the SD light is also on solid GREEN, despite the absence of an SD card in the unit. The controller seems to be in a bricked state, as it immediately goes to this state upon power up without attempting to enter run mode or flashing the ENET light.

What are your thoughts on this situation?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective approach is to create an SD card containing specific information by making a file named "configmefirst.txt" in the root directory. The content of this file should be as follows: [PM][IPA=192.168.2.100][SNM=255.255.255.0][GWA=192.168.2.1][END]. Once the SD card is prepared, insert it into micro820, power cycle the device, and check if it is visible. Ensure your laptop is on the same network to establish a connection. Start by updating the firmware and proceed with testing. Best of luck!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>damica1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am going to give that a shot once I grab a MicroSD card. I will be sure to share my results after trying it out. Thank you for the helpful advice!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLC Pie Guy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The image depicts the contents loaded onto the SD card. Despite multiple attempts, the issue persists with a solid RED fault light, a solid Green SD light, and a solid Green ENET light with no communication established. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLC Pie Guy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you connected directly to the programmable logic controller (PLC)? If your PC displays a network error in the corner of your screen, try connecting to a router. Access the router's website to check for active nodes. This troubleshooting method can help resolve connectivity issues efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I connected my PC directly to the Micro and also attempted to use a 5 port switch, however, it did not yield any noticeable results. I may try using a router in order to potentially salvage the unit, although I currently do not have one available. I will purchase a low-cost router with this capability soon. Thank you for your recommendations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLC Pie Guy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I do not utilize static IP addresses in the fitness equipment I offer for sale, as I believe in providing a convenient "plug and play" option for end-users. If your equipment is experiencing connectivity issues due to a strange address, it may be caused by not having DHCP selected. While using a router may not resolve the issue, it is worth testing it at home to see if it improves the connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upgrade the firmware on your device for improved performance and functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>BachPhi recommended updating the firmware to resolve the issue. However, the device needs to establish communication first.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's definitely worth a shot to give Controlflash a try and see if it can recognize it. Are there any serial communication options available?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By default, the serial port is set to display information on the LCD screen. I haven't altered this in any of my projects, but now I realize the importance of changing it in all of them in case a situation arises where it's necessary!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLC Pie Guy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello PLC Pie Guy! After inserting the SD card and performing a Power Cycle (even if the fault light remains on), have you tried searching for a device by setting up a connection path in CCW? If you are unable to locate the device, there may be an issue. However, if you can see the device, attempt to establish a connection - the software will prompt you to clear the fault (and provide the fault code). If further assistance is needed, I am not aware of any other solutions available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>damica1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I did not attempt to establish a connection path with CCW after inserting the SD card. My assumption was that if the IP address from the card was accepted, then I should be able to ping 192.168.2.100, or at least see it in Linx. I may try using the SD card again and then follow up with CCW to browse a connection path, as it may make a difference. It's worth a shot. Thank you all for the advice!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLC Pie Guy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I rely on numerous Micro 820s deployed in the field, each equipped with an SD card for project backup. This precaution proved invaluable when faced with a fault that rendered the controller defunct. After swiftly replacing the PLC and inserting the SD card, I was able to resume operations seamlessly. Stay tuned for updates on this ongoing issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyGranado</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently experiencing the same problem with a Micro820 manufactured in October 2021. The red FAULT light, along with the green ENET and green SD Card lights, remain illuminated continuously immediately upon powering up the controller. The controller appears unresponsive and inaccessible. Additionally, the LED indicators flicker rapidly, changing from dim to bright. Is there a solution available for this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Stomachbuzz</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is the conveyor not switching and displaying a solid RED fault light on the Micro820 unit?</h4>
<p class='text-muted'><strong>Answer:</strong> - The conveyor not switching and displaying a solid RED fault light could indicate a critical issue with the unit that needs troubleshooting.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What steps can be taken if a Micro820 unit is unresponsive and displays a solid GREEN ENET light but cannot be located on the network?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the Micro820 unit is unresponsive despite showing a solid GREEN ENET light, troubleshooting steps such as verifying the IP address, using Wireshark, and checking for connectivity issues can be attempted to establish a connection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why is the SD light on solid GREEN on a Micro820 unit even when there is no SD card inserted?</h4>
<p class='text-muted'><strong>Answer:</strong> - The SD light being on solid GREEN despite the absence of an SD card could indicate a potential issue with the controller being in a bricked state, requiring further investigation and troubleshooting.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What could be the possible causes of a Micro820 unit immediately entering a bricked state upon power up without attempting to enter run mode?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Micro820 unit immediately entering a bricked state upon power up without entering run mode could be caused by various factors such as internal hardware failures, software corruption, or configuration errors that need to be addressed for proper functionality.</p>
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
