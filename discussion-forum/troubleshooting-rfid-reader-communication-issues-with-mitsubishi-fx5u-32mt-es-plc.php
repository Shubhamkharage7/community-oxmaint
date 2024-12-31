
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am utilizing a PLC Mitsubishi FX5U-32MT/ES with an RFID reader to read values from tag cards exclusively. However, the reader is currently unresponsive, possibly due to issues with its RS232 communication using the ladder RS2 command. What could be causing this lack of response?">
    <meta name="keywords" content="mitsubishi fx5u-32mt/es plc, rfid reader communication issues, troubleshooting rfid reader problems, rs232 communication errors, plc rfid integration, mitsubishi plc programming">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-rfid-reader-communication-issues-with-mitsubishi-fx5u-32mt-es-plc">
    <title>Troubleshooting RFID Reader Communication Issues with Mitsubishi FX5U-32MT/ES PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting RFID Reader Communication Issues with Mitsubishi FX5U-32MT/ES PLC | Oxmaint Community">
    <meta property="og:description" content="I am utilizing a PLC Mitsubishi FX5U-32MT/ES with an RFID reader to read values from tag cards exclusively. However, the reader is currently unresponsive, possibly due to issues with its RS232 communication using the ladder RS2 command. What could be causing this lack of response?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-rfid-reader-communication-issues-with-mitsubishi-fx5u-32mt-es-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting RFID Reader Communication Issues with Mitsubishi FX5U-32MT/ES PLC | Oxmaint Community">
    <meta name="twitter:description" content="I am utilizing a PLC Mitsubishi FX5U-32MT/ES with an RFID reader to read values from tag cards exclusively. However, the reader is currently unresponsive, possibly due to issues with its RS232 communication using the ladder RS2 command. What could be causing this lack of response?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-rfid-reader-communication-issues-with-mitsubishi-fx5u-32mt-es-plc"
      },
      "headline": "Troubleshooting RFID Reader Communication Issues with Mitsubishi FX5U-32MT/ES PLC",
      "description": "I am utilizing a PLC Mitsubishi FX5U-32MT/ES with an RFID reader to read values from tag cards exclusively. However, the reader is currently unresponsive, possibly due to issues with its RS232 communication using the ladder RS2 command. What could be causing this lack of response?",
      "author": {
        "@type": "Person",
        "name": "viphesoyamnmmy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-26",
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
                <h1 class="text-white">Troubleshooting RFID Reader Communication Issues with Mitsubishi FX5U-32MT/ES PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>viphesoyamnmmy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">224</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">467</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am utilizing a PLC Mitsubishi FX5U-32MT/ES with an RFID reader to read values from tag cards exclusively. However, the reader is currently unresponsive, possibly due to issues with its RS232 communication using the ladder RS2 command. What could be causing this lack of response?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider sharing detailed code snippets and settings for the 232 card, along with the specific protocol utilized by the RFID technology. This information can provide valuable insights for troubleshooting and optimizing the system's performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>parky recommended sharing the code, settings, and protocol used by the 232 card and RFID device. While I'm not certain about the code, I do have information on the RFID protocol. Would you mind expanding on that, please?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>viphesoyamnmmy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As a novice in this field of study, I have limited knowledge of RS232 communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>viphesoyamnmmy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The location of the send data bit set M8561 is unclear. It seems like you may be attempting to send data too quickly with a 10ms clock. Additionally, it appears that you are moving data twice to the same bit D200 onwards, which doesn't make sense as the data is overwritten in the next scan of the PLC. To properly send a request, follow these steps: STX, Start Address, Number of Bytes, BCC, LFCR, then wait for the response (ACK or NAK), Data, BCC, LFCR. Reset the RX bit before setting the send bit again. It is assumed that the 232-BD board is being used. To test communication, set the data, trigger, and manually send the request once to see if you receive a reply or a NAK. It is important to establish communication before making repeat requests. Ensure the BCC calculation method is correct before sending the data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the initial feedback, Parky inquired about the location of the set send data bit M8561. It appears that there may be a confusion in the data transfer process, with the 10ms clock speed being considered too fast. Additionally, the data seems to be moved twice to the same location, which could be causing issues in PLC scanning.

To ensure smooth communication, it is recommended to follow a specific protocol of sending a request (STX, Start Address, Number of Bytes, BCC, LFCR), waiting for a response (ACK or NAK, Data, BCC, LFCR), and resetting the RX bit before sending again. It is assumed that the 232-BD board is being used for this process.

For troubleshooting, it is suggested to manually trigger a data request and observe the response before attempting any repeated requests. It would also be beneficial to clarify the method used for calculating the BCC before sending the data.

Regarding the M8561 bit insertion and removal, it was initially thought to be related to data reception or writing. The FX5-232ADP module handles the setting of byte numbers. As for reading RFID tags, a structured example or suggestions would be greatly appreciated for further guidance.

Any insights or examples provided would be of great help. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>viphesoyamnmmy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The transmission of M8561 has been completed and M8562 has been received. However, there is a lack of FX5 or the 232 card. I recommend starting by sending a request to force a response, such as identifying if it returns ACK or NACK, and verifying the checksum format. Without understanding the data sent by the RFID, it is challenging to provide guidance. It appears you are utilizing the ADP board instead of the -BD one. As per the protocol, data needs to be requested. Typically, the RFID automatically sends data upon detection, eliminating the need to request data for regular reads. Only make a request if different data needs to be read. Please provide the complete RFID reader manual or a download link. Ensure the baud rate and settings are accurate if the data received is unexpected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to send a direct message or DM?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>viphesoyamnmmy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, I notice you are from Thailand. I frequently visit the southern province of Nakhon Si Thammarat.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky responded affirmatively and noted that the person is from Thailand. Parky shared that he spends a lot of time in the southern part of Thailand, specifically in Nakhon Si Thammarat, a beautiful country.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>viphesoyamnmmy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Just got back to you with a response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why is my RFID reader unresponsive when connected to a Mitsubishi FX5U-32MT/ES PLC?
   - The lack of response from the RFID reader could be due to issues with its RS232 communication using the ladder RS2 command. Ensure that the communication settings (baud rate, data bits, stop bits, parity) on both the PLC and the RFID reader are correctly configured and matching.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot communication issues between the RFID reader and the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot communication issues, check the physical connections between the RFID reader and the PLC, verify the communication settings, test different communication cables, and monitor the communication status indicators on both devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps can I take to resolve RS232 communication problems with the Mitsubishi FX5U-32MT/ES PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To resolve RS232 communication problems, double-check the ladder RS2 command configuration in the PLC program, ensure proper grounding of the devices, check for any hardware faults, and consider testing the communication with a different device to isolate the issue.</p>
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
