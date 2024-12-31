
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently facing difficulties in establishing communication with the Modicon TSX3721001 using the TSXcUSB485 cable I purchased from a Schneider distributor. Unfortunately, the distributor did not provide me with the necessary drivers on a CD. After downloading the drivers from the internet, I was able to resolve">
    <meta name="keywords" content="modicon tsx3721001, tsxcusb485 cable, schneider distributor, driver issue, device manager, windows xp sp3 virtual machine, plc communication error, remote ack, net_query, pl7 pro v4, communication">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-with-modicon-tsx3721001-plc-using-tsxcusb485-cable">
    <title>Troubleshooting Communication with Modicon TSX3721001 PLC Using TSXcUSB485 Cable | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication with Modicon TSX3721001 PLC Using TSXcUSB485 Cable | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently facing difficulties in establishing communication with the Modicon TSX3721001 using the TSXcUSB485 cable I purchased from a Schneider distributor. Unfortunately, the distributor did not provide me with the necessary drivers on a CD. After downloading the drivers from the internet, I was able to resolve">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-with-modicon-tsx3721001-plc-using-tsxcusb485-cable">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication with Modicon TSX3721001 PLC Using TSXcUSB485 Cable | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently facing difficulties in establishing communication with the Modicon TSX3721001 using the TSXcUSB485 cable I purchased from a Schneider distributor. Unfortunately, the distributor did not provide me with the necessary drivers on a CD. After downloading the drivers from the internet, I was able to resolve">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-with-modicon-tsx3721001-plc-using-tsxcusb485-cable"
      },
      "headline": "Troubleshooting Communication with Modicon TSX3721001 PLC Using TSXcUSB485 Cable",
      "description": "Hello, I am currently facing difficulties in establishing communication with the Modicon TSX3721001 using the TSXcUSB485 cable I purchased from a Schneider distributor. Unfortunately, the distributor did not provide me with the necessary drivers on a CD. After downloading the drivers from the internet, I was able to resolve",
      "author": {
        "@type": "Person",
        "name": "qayyum faiz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-22",
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
                <h1 class="text-white">Troubleshooting Communication with Modicon TSX3721001 PLC Using TSXcUSB485 Cable</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>qayyum faiz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">7294</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">332</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello,

I am currently facing difficulties in establishing communication with the Modicon TSX3721001 using the TSXcUSB485 cable I purchased from a Schneider distributor. Unfortunately, the distributor did not provide me with the necessary drivers on a CD. After downloading the drivers from the internet, I was able to resolve the driver issue, and the cable is now displaying as healthy in the device manager.

I am operating on a Windows XP SP3 Virtual Machine and attempting to connect to the PLC through this virtual environment. Despite successfully establishing a connection, I encounter an error message stating "No remote ACK in function net_query! Stay connected?" When I select yes, the error reappears after a few seconds. If I choose no, the communication is lost.

I am utilizing PL7 PRO V4.4 for the PLC, but unfortunately, I am unable to establish communication from there as well. I have been experiencing this issue for the past two days and would greatly appreciate any assistance in resolving it. Please refer to the attached files for the settings and error message snapshot.

Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To troubleshoot the issue, begin by identifying the problem areas. Can you establish communication between the computer and another device via the serial port? Try connecting a different computer and using Windows HyperTerminal to see if there is any data transmission through the port. For more detailed guidance on PLC programming software tools, visit accautomation.ca/three-free-plc-programming-software-tools/. Have you attempted using a different computer for testing purposes? These are just a few suggestions to consider. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gclshortt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The parity settings on your Windows port are currently set to none, but they should be set to odd for optimal performance. Additionally, it is unusual that the Unitelway setup does not display the cable part number next to the selected COM port. Have you made sure to configure the settings in the Unitelway setup for the driver to perform a reset as needed? See the image for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chud</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Chud,

I recently switched the parity to Odd, but unfortunately, the issue still persists. In an attempt to resolve the problem, a friend suggested that I try communicating through a physical machine instead of a virtual one. I set up a desktop with Windows XP for this purpose, but encountered the same error message.

I'm also intrigued by your mention of the cable name appearing alongside the COM port, which isn't happening in my situation. Could this indicate a problem with the installed driver? What steps do you recommend I take to troubleshoot and resolve this issue?

Looking forward to your guidance on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>qayyum faiz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Today, I successfully established communication with the PLC, uploaded the program, and accessed it online. My initial issue stemmed from difficulties with the USB and Unitelway drivers. I reached out to local support from Schneider, explained the problem, and requested links for the drivers to verify. Despite previously downloading the drivers from Schneider's official website, they were not working as expected. For those facing a similar issue, I have included links to the latest driver versions below:
1. https://schneider-electric.box.com/s/9wtvr55xz5f5ao0ney74zsnh55t1lsi0
2. https://schneider-electric.box.com/s/jyf6f6gma6vcl0blbttnugwl8a6ty2r1

Moreover, I successfully communicated using a dedicated system running Windows XP SP3 without the need for a virtual machine. After installing the driver successfully, you will see the TSXC485USB listed in the driver manager alongside the selected COM port, as mentioned by CHUD. I plan to test the new drivers on a virtual machine and share my findings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>qayyum faiz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, could you please tell me the correct position for the TSXC485USB converter? (Perhaps facing directly?) Thank you for your help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>fernandy2k</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After successfully troubleshooting issues on a virtual machine for 2 days, everything is now functioning smoothly. If you encounter similar challenges, simply check the box for "Force virtual comport" to resolve them. Don't forget to share this solution with others who may benefit from it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ramaslabas</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for this helpful post! I encountered the same problems but was able to find solutions with the valuable information shared here. Grateful for the support!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>safetech</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Qayyum Faiz shared his successful experience communicating with the PLC, troubleshooting USB and Unitelway driver issues, and receiving support from Schneider. Despite downloading drivers from Schneider's official website, he encountered difficulties and had to seek assistance from the local support team. Links to the latest driver versions are provided for anyone facing a similar issue. Additionally, Faiz was able to communicate with a dedicated system running Windows XP SP3 without the use of a virtual machine. He plans to test the new drivers on a virtual machine and share his findings. If you are experiencing the same issue and the provided links are expired, you can contact Schneider's local support team for assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Muhammad Usman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Qayyum Faiz shared his successful experience in communicating with the PLC and uploading the program online. He faced challenges with the USB and unitelway drivers but reached out to local support from Schneider for assistance. Despite downloading drivers from Schneider's official website, they did not work initially. Below are the latest driver links for anyone facing a similar issue. Additionally, Qayyum was able to communicate on a dedicated system with Windows XP SP3 without using a virtual machine. When the driver is successfully installed, the TSXC485USB will appear in the driver manager along with the selected COM, as mentioned by CHUD. Qayyum plans to test the new drivers on a virtual machine and share his experience soon.

In response to the original post, a user mentioned facing similar difficulties and requested the drivers as the provided links were no longer working. They expressed gratitude in advance for the assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Muhammad Usama</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I resolve the "No remote ACK in function net_query! Stay connected?" error when communicating with a Modicon TSX3721001 PLC using a TSXcUSB485 cable?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This error could indicate a communication problem between the software and the PLC. Ensure that the settings in your communication software match the settings of the PLC and the cable. Double-check the cable connections and try restarting both the software and the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What should I do if I encounter difficulties establishing communication with a Modicon TSX3721001 PLC through a Windows XP SP3 Virtual Machine?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Ensure that the necessary drivers for the TSXcUSB485 cable are correctly installed on the virtual machine. Check the compatibility of the drivers with Windows XP SP3. You may also want to consider using a different operating system or a physical machine for communication with the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot communication issues between PL7 PRO V4.4 software and a Modicon TSX3721001 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Make sure that the settings in PL7 PRO V4.4 match the communication settings of the PLC. Verify the cable connections and ensure that the software has the correct permissions to communicate with the PLC. You may also want to try restarting the software and the PLC to see if that resolves the issue.</p>
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
