
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I have been relying on this website for valuable advice for quite some time now. However, I have encountered a challenge that I need help with. I am working with a Red Lion DA30 controller using Crimson 3.2, attempting to establish communication with an Alicat MFC (Mass">
    <meta name="keywords" content="red lion da30 controller, crimson 2, alicat mfc, mass flow controller v7, rs-232 raw ascii protocol, port commands, communication programming">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-red-lion-da30-controller-communication-with-alicat-mfc-using-crimson-3-2">
    <title>Troubleshooting Red Lion DA30 Controller Communication with Alicat MFC using Crimson 3.2 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Red Lion DA30 Controller Communication with Alicat MFC using Crimson 3.2 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I have been relying on this website for valuable advice for quite some time now. However, I have encountered a challenge that I need help with. I am working with a Red Lion DA30 controller using Crimson 3.2, attempting to establish communication with an Alicat MFC (Mass">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-red-lion-da30-controller-communication-with-alicat-mfc-using-crimson-3-2">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Red Lion DA30 Controller Communication with Alicat MFC using Crimson 3.2 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I have been relying on this website for valuable advice for quite some time now. However, I have encountered a challenge that I need help with. I am working with a Red Lion DA30 controller using Crimson 3.2, attempting to establish communication with an Alicat MFC (Mass">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-red-lion-da30-controller-communication-with-alicat-mfc-using-crimson-3-2"
      },
      "headline": "Troubleshooting Red Lion DA30 Controller Communication with Alicat MFC using Crimson 3.2",
      "description": "Hello everyone, I have been relying on this website for valuable advice for quite some time now. However, I have encountered a challenge that I need help with. I am working with a Red Lion DA30 controller using Crimson 3.2, attempting to establish communication with an Alicat MFC (Mass",
      "author": {
        "@type": "Person",
        "name": "rmwhite"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">Troubleshooting Red Lion DA30 Controller Communication with Alicat MFC using Crimson 3.2</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rmwhite</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">170</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">207</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I have been relying on this website for valuable advice for quite some time now. However, I have encountered a challenge that I need help with. I am working with a Red Lion DA30 controller using Crimson 3.2, attempting to establish communication with an Alicat MFC (Mass Flow Controller v7) that utilizes RS-232 Raw ASCII protocol. While I am familiar with Crimson, I have limited experience with Port commands and programming for communication purposes. 

My current task involves sending a command to the Alicat MFC device. From the manufacturer's manual, the command structure is as follows: "Poll the device: [unit ID]<CR>Example: a<CR> (polls unit A)." Subsequently, data can be read from the same port to retrieve the data frame.

My ultimate goal is to update the setpoint on the MFC, but I am currently struggling to get the DA30 to read data from the MFC. Despite reviewing various Tech Notes from Red Lion and referencing sample code, I have been unsuccessful in retrieving any data. I would greatly appreciate any advice or pointers on how to overcome this issue. Thank you in advance for your assistance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the PLCTalk forum community! If you've come across tech note TNIA10 as your starting point, you're on the right track. To begin, consider starting with a basic task: creating a button that triggers the PortPrint instruction. Since it's a serial RS-232 connection, you'll use PortPrint instead of PortPrintEx.

To determine which physical port to use on the DA30, refer to Crimson 3.2 and the default DA30 project. The "RS-232 Comms Port" is labeled as Port 2 in the lower left corner. Create a button with a simple line of code like PortPrint(2,"A\r") and test it by connecting to your PC's serial port using the appropriate settings.

Next, configure the RS-232 port to execute a program when data is received. This involves entering the ProgramName() in the OnUpdate field in the Driver Settings for the RS-232 port. By following these steps, you'll be able to effectively utilize your RS-232 connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you looking for the part number of the Alicat MFC or a visual reference of the terminals? Do you need a diagram of the RS232 connection, including TX, RX, and GND? Are you unsure about the RS232 Port settings on the Alicat MFC, such as Baud and Stop Bits (commonly 8N1)? Have you encountered issues with software due to hardware errors, like incorrect wiring placements on RJ11 connectors used on Graphite HMIs?

If so, a search on the Alicat website reveals the availability of their own Serial Tools software and drivers for seamless communication with Alicat mass flow and pressure instruments. These tools can be found on their website about halfway down the page.

Don't waste hours troubleshooting like I did - make sure to verify all connections and settings before jumping to software-related issues. Make use of Alicat's resources to ensure smooth operation of your devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach welcomes you to the PLCTalk forum community! If you've already checked out tech note TNIA10 as a starting point, that's great. To get started, focus on creating a simple button that performs a single action when clicked, such as using the PortPrint instruction for serial RS-232 communication on a DA30. Ensure you are using the correct physical port, which is typically Port 2 in Crimson 3.2 for the DA30.

Try setting up a button with a basic line of code like PortPrint(2,"A\r") and test it by connecting to your PC's serial port. Then, configure the RS-232 port to execute a program when data is received by adding the ProgramName() in the OnUpdate field in the Driver Settings.

Ken, it's great to hear that TNIA10 has been helpful for you. The subtle reminder of the RS-232 Comms Port in the lower left corner of Crimson is a handy feature. You can proceed with confidence and give it a shot! Thanks for sharing your insights!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rmwhite</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, BryanG asked for specific information regarding the Alicat MFC, such as the part number, a picture of the terminals, and details on the RS232 connection settings. He also mentioned spending time troubleshooting software issues only to realize there were hardware errors. He pointed out potential mistakes in RS232 connector types and wire placements on Graphite HMIs. A suggestion was made to use Alicat's Serial Tools for assistance. Additionally, Bryan shared insights on the Alicat's 6 pin Industrial Connector and its connection to an RJ11 cable. The pinout details for the DA30 RJ11 were also provided. Confirming the correct wiring, Bryan noted that the Baud Rates matched and were accessible through the MFC's touch screen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rmwhite</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The connection setup seems incorrect. RS232 utilizes TX and RX for transmit and receive signals, rather than the traditional (+) and (-) markings found in RS485. To ensure proper configuration, refer to the DA30 manual provided below. If using RS232, confirm that the Alicat is set to this protocol. Connect Alicat Pin 2 TX to DA30 Pin 2 RX, Alicat Pin 3 RX to DA30 Pin 5 TX, and Alicat Pin 5 GND to DA30 Pin 3 or 4 COM. If RS485 is being used instead, please contact me for revised pin assignments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to BryanG's comment, it appears that there may have been confusion between RS232 and RS485 wiring. It is important to note that RS232 does not utilize (+) and (-), but rather TX and RX for transmit and receive functions. If you are working with RS232, ensure that the Alicat device is set to RS232 mode and follow the correct pin connections. Pin 2 on the Alicat should connect to Pin 2 RX on the DA30, Pin 3 to Pin 5 TX, and Pin 5 to Pin 3 or 4 COM. If using RS485, the pin numbers may need to be adjusted. Grateful for the clarification, the wiring will be double-checked to ensure accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rmwhite</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I establish communication between a Red Lion DA30 controller and an Alicat MFC using Crimson 3.2?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To establish communication, you can utilize RS-232 Raw ASCII protocol and send commands following the structure specified in the manufacturer's manual.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What is the command structure for polling the Alicat MFC device?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The command structure for polling the device is "[unit ID]<CR>" where you can replace [unit ID] with the specific unit you want to poll (e.g., a<CR> for unit A).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I read data from the same port to retrieve the data frame from the Alicat MFC device?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can read data from the port using programming commands and protocols specified in the manufacturer's manual or relevant documentation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  I am struggling to get the Red Lion DA30 to read data from the Alicat MFC. What can I do to troubleshoot this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can review Tech Notes from Red Lion, reference sample code, and seek advice from forums or experts in the field to troubleshoot and overcome communication issues.</p>
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
