
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am utilizing a Turck TBEN-S2-4AI block in conjunction with Codesys software to monitor a temperature sensor outputting a 4-20mA signal. Despite verifying that the wire transmits 16mA using a meter, my computer consistently registers a value of 0. I have scoured various forums without success in finding a">
    <meta name="keywords" content="troubleshooting turck tben-s2-4ai block, codesys software, reading 4-20ma analog input, temperature sensor, 16ma signal, codesys settings, forums help, expertise, queries, solutions, root">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-turck-tben-s2-4ai-block-for-reading-4-20ma-analog-input-with-codesys-software">
    <title>Troubleshooting Turck TBEN-S2-4AI Block for Reading 4-20mA Analog Input with Codesys Software | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Turck TBEN-S2-4AI Block for Reading 4-20mA Analog Input with Codesys Software | Oxmaint Community">
    <meta property="og:description" content="I am utilizing a Turck TBEN-S2-4AI block in conjunction with Codesys software to monitor a temperature sensor outputting a 4-20mA signal. Despite verifying that the wire transmits 16mA using a meter, my computer consistently registers a value of 0. I have scoured various forums without success in finding a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-turck-tben-s2-4ai-block-for-reading-4-20ma-analog-input-with-codesys-software">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Turck TBEN-S2-4AI Block for Reading 4-20mA Analog Input with Codesys Software | Oxmaint Community">
    <meta name="twitter:description" content="I am utilizing a Turck TBEN-S2-4AI block in conjunction with Codesys software to monitor a temperature sensor outputting a 4-20mA signal. Despite verifying that the wire transmits 16mA using a meter, my computer consistently registers a value of 0. I have scoured various forums without success in finding a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-turck-tben-s2-4ai-block-for-reading-4-20ma-analog-input-with-codesys-software"
      },
      "headline": "Troubleshooting Turck TBEN-S2-4AI Block for Reading 4-20mA Analog Input with Codesys Software",
      "description": "I am utilizing a Turck TBEN-S2-4AI block in conjunction with Codesys software to monitor a temperature sensor outputting a 4-20mA signal. Despite verifying that the wire transmits 16mA using a meter, my computer consistently registers a value of 0. I have scoured various forums without success in finding a",
      "author": {
        "@type": "Person",
        "name": "MTR_T"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-20",
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
                <h1 class="text-white">Troubleshooting Turck TBEN-S2-4AI Block for Reading 4-20mA Analog Input with Codesys Software</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MTR_T</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">316</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">86</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am utilizing a Turck TBEN-S2-4AI block in conjunction with Codesys software to monitor a temperature sensor outputting a 4-20mA signal. Despite verifying that the wire transmits 16mA using a meter, my computer consistently registers a value of 0. I have scoured various forums without success in finding a solution, possibly due to my lack of expertise in framing the right queries. Attached is a snapshot of my Codesys settings for reference. Any guidance on resolving this issue would be highly appreciated! Additionally, I am in the company of a fellow talkplc member known as Rootboy, who sends his greetings to anyone familiar with him.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not very familiar with this topic, but it is worth considering that configuring the ports is essential for specifying what information they should monitor, such as voltage, current, or temperature. It is also important to determine whether the port is meant for input or output. I believe the module configuration software is called TAS and can be found on the Turck website.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Stu, thank you for your input! I have configured the ports using the Codesys software to monitor current within the 4-20mA range. I believe this is the correct setup, but there may be additional steps I am overlooking. It is important to note that an error occurs when the current value is outside of the specified range, causing a red LED to illuminate on the physical block. However, adjusting the range to 0-20mA resolves the error and switches the LED to green (indicating the value is within range). This suggests that the block has been properly configured.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MTR_T</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For years, I have relied on Turck TBEN blocks and consistently configured them using a web browser interface. To access the device's webpage, navigate to the port where your temperature sensor is connected. Here, you can view the real-time temperature readings from the sensor. It's possible that the Codesys software is not completely overwriting the block's configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Crankin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To connect to Crankin, simply enter the IP address into your web browser. Make sure to configure the port settings for both input and output, and set the type to 4-20mA for proper communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stu</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access the webpage on the blocked IP address, simply log in with the default credentials: admin as the username and the password located at 192.168.1.254.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Crankin</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Crankin recommended accessing the webpage via the blocked IP address and logging in with the default credentials (username: admin, password: 192.168.1.254). Upon following the suggestion, I successfully logged in (default password: password) and noticed that the settings appeared to be up to date, with a reading of 0. Check out the image below for a visual representation of what I encountered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MTR_T</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>My next course of action involves inputting a mA signal into the channel to analyze the output. I highly recommend utilizing this updated Analog Simulator and Generator with LCD for accurate readings: +/- 0-10VDC & 0-22mA. This device has proven to be dependable in past situations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Issue resolved! The problem stemmed from two main factors. Firstly, there were wiring errors as I was connected to pins 1 and 3 (brown and blue) instead of pins 1 and 2 (brown and white). Secondly, the incorrect "Current Wiring Type" was selected in Codesys, initially set to "Differential" instead of the required "Single Ended". It appears that this setting can also be adjusted in the Turk Webserver, but making the change in Codesys did the trick for me. A big thank you to everyone who assisted me in resolving this issue! As for marking this thread as resolved, is there a specific procedure I need to follow or can I simply leave it as is?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MTR_T</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why is my Turck TBEN-S2-4AI block not reading the 4-20mA analog input correctly in Codesys software?
- This issue could be due to incorrect wiring, configuration settings, or compatibility issues. 
   
2. How can I troubleshoot the Turck TBEN-S2-4AI block in Codesys if it shows a value of 0 despite a 16mA signal input?
- Check the wiring connections, ensure proper configuration of the block in Codesys, and consider compatibility issues between the hardware and software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a specific guide or resource available for setting up the Turck TBEN-S2-4AI block in Codesys for monitoring analog inputs?</h4>
<p class='text-muted'><strong>Answer:</strong> - Refer to the Turck TBEN-S2-4AI block's user manual and Codesys documentation for detailed setup instructions and troubleshooting tips.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I ensure that my Turck TBEN-S2-4AI block is correctly configured to read the 4-20mA signal from a temperature sensor?</h4>
<p class='text-muted'><strong>Answer:</strong> - Double-check the configuration settings in Codesys, verify the wiring connections, and ensure that the hardware and software are compatible for seamless communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Are there any common pitfalls or mistakes to avoid when using the Turck TBEN-S2-4AI block with Codesys software for analog input monitoring?</h4>
<p class='text-muted'><strong>Answer:</strong> - Avoid incorrect wiring connections, ensure proper calibration of the sensor, double-check configuration settings in Codesys, and troubleshoot any compatibility issues</p>
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
