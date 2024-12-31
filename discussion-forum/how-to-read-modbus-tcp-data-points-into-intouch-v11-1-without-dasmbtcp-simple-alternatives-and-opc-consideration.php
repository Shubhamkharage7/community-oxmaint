
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, Im seeking advice on how to read data points from a Modbus TCP server into InTouch v11.1 without using DASMBTCP. Are there any simple alternatives available? Despite my best efforts, I have been unable to get DASMBTCP to work even after days of troubleshooting. I have also">
    <meta name="keywords" content="modbus tcp data points, intouch v1, dasmbtcp alternative, opc integration, modbus tcp server, intouch troubleshooting, wonderware tech support">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-read-modbus-tcp-data-points-into-intouch-v11-1-without-dasmbtcp-simple-alternatives-and-opc-consideration">
    <title>How to Read Modbus TCP Data Points into InTouch v11.1 Without DASMBTCP: Simple Alternatives and OPC Consideration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Read Modbus TCP Data Points into InTouch v11.1 Without DASMBTCP: Simple Alternatives and OPC Consideration | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, Im seeking advice on how to read data points from a Modbus TCP server into InTouch v11.1 without using DASMBTCP. Are there any simple alternatives available? Despite my best efforts, I have been unable to get DASMBTCP to work even after days of troubleshooting. I have also">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-read-modbus-tcp-data-points-into-intouch-v11-1-without-dasmbtcp-simple-alternatives-and-opc-consideration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Read Modbus TCP Data Points into InTouch v11.1 Without DASMBTCP: Simple Alternatives and OPC Consideration | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, Im seeking advice on how to read data points from a Modbus TCP server into InTouch v11.1 without using DASMBTCP. Are there any simple alternatives available? Despite my best efforts, I have been unable to get DASMBTCP to work even after days of troubleshooting. I have also">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-read-modbus-tcp-data-points-into-intouch-v11-1-without-dasmbtcp-simple-alternatives-and-opc-consideration"
      },
      "headline": "How to Read Modbus TCP Data Points into InTouch v11.1 Without DASMBTCP: Simple Alternatives and OPC Consideration",
      "description": "Hello everyone, Im seeking advice on how to read data points from a Modbus TCP server into InTouch v11.1 without using DASMBTCP. Are there any simple alternatives available? Despite my best efforts, I have been unable to get DASMBTCP to work even after days of troubleshooting. I have also",
      "author": {
        "@type": "Person",
        "name": "Mark_"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-21",
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
                <h1 class="text-white">How to Read Modbus TCP Data Points into InTouch v11.1 Without DASMBTCP: Simple Alternatives and OPC Consideration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Mark_</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3586</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">221</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I'm seeking advice on how to read data points from a Modbus TCP server into InTouch v11.1 without using DASMBTCP. Are there any simple alternatives available? Despite my best efforts, I have been unable to get DASMBTCP to work even after days of troubleshooting. I have also reached out to Wonderware tech support without success. Is OPC a viable and user-friendly option for me as a beginner? I would prefer not to add any additional hardware as it is a remote site. Would it be acceptable to hire a professional through this forum for assistance? Payment can be made in high-fives and/or dollars.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The control system of PLC is ControlLogix, but it lacks an EN2T Ethernet card, making it incompatible with AB's modbus read AOI sample code. Upgrading to an EN2T card is necessary to utilize this feature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mark_</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you provide us with further information on the functionality of DASMBTCP and any specific issues you may have encountered? I have personal experience with this technology and know it can be challenging to configure correctly. Could you also specify the hardware used in the modbus server you are attempting to connect with? This information will help us troubleshoot any potential issues effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>defcon.klaxon</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the DASMBTCP 3.0 SP1 software, there have been challenges when reading data from an Eaton PXM-4000 Power Xpert power meter. The WW data quality status values fluctuate between 0, 4, and 27 during various attempts. Despite limited modbus experience, all syntax permutations have been exhausted in trying to retrieve data for the WW item name. One specific register, 4671, is of interest for reading purposes. After troubleshooting with tech support using the wwclient.exe utility, consistent results were obtained, indicating that the issue is not related to the WW tag database configuration. All DAS configuration settings align with the guidelines outlined in the DASMBTCP manual. This technical issue has proven to be quite perplexing and continues to be a challenge to resolve.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mark_</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mark_ is seeking advice on reading data using ModScan and ModbusPoll from the same PC. Payment is available in high-fives and/or dollars. Can you provide the ModScan configuration? There seems to be an issue with your registers, and it may be beneficial to consider using the ModbusBridge instead of ModbusPLC. Your support would be greatly appreciated. Click to expand for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lostcontrol</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I captured a Modscan screenshot and experimented with ModbusBridge briefly. I am open to revisiting that. I am currently using educated guesses for the Item Name syntax, as it remains unclear to me even after reading the manual.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mark_</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you haven't already, consider enabling the "Swap String Bytes" feature in the DASMBTCP setup within Intouch. In the event that the value in register 2002 of the meter is not 0, it is possible that the string data may be displayed in reverse. Make sure to check and adjust this setting to correct any potential issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>muusic_man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have opted for 6-digit addressing, the initial register you should read using Modscan will be labeled as 404660. It is advisable to choose the "Advise all items" option.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KirkC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To leverage the Unit ID 1, it is imperative to employ the ModbusBridge within DASMBTCP and configure the ModbusPLCRS object with an ID of 1. Utilizing the standard ModbusPLC root object will default the ID to 255. Additionally, adopting KirkC's recommended addressing strategy is crucial for seamless operations. Alternatively, adjusting DASMBTCP to utilize 5-digit addressing can optimize efficiency by eliminating the need for zero fillers in your addresses.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ynpmoose</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ynpmoose, you've hit the nail on the head! The solution is finally working flawlessly - virtual high five! Just when I was on the verge of giving up, I stumbled upon your post and it was a game changer. It turns out, I had only tried reaching out to tech support for ModbusBridge and not PLCRS. A huge shoutout to everyone who contributed to solving this issue. You've all earned a spot on my Christmas card list.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mark_</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Mark_ exclaimed, "ynpmoose, you absolutely nailed it! It's finally working!" I was on the verge of giving up before your post. It appears I hadn't tried PLCRS, only ModbusBridge with the WW tech support. A big thank you to everyone who contributed. You're all definitely making it onto my Christmas card list. Could you please provide an update on the connection you're using - possibly from the power meter to the RS485 converter to the PC via Ethernet? Mine doesn't seem to be working as expected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>muzzamil88</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are some simple alternatives to reading Modbus TCP data points into InTouch v11.1 without using DASMBTCP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One simple alternative could be to consider using OPC (OLE for Process Control) as a viable option for data integration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is OPC a user-friendly option for beginners looking to read data points into InTouch v11.1?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: OPC can be a user-friendly option for beginners as it provides a standardized way to communicate between different industrial automation devices and software applications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it acceptable to hire a professional for assistance in setting up Modbus TCP data points in InTouch v11.1?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is possible to seek assistance from professionals through forums or other platforms for setting up Modbus TCP data points. Payment terms can be mutually agreed upon based on the services provided.</p>
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
