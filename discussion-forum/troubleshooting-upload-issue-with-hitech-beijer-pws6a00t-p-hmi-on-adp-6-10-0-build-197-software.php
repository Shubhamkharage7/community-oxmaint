
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As a seller of used industrial machinery, we are in the process of refurbishing a machine and need to upload data from the HMI, which is a product of Hitech Electronics Corp – now part of Beijer. Despite downloading what we believe to be the correct programming software, ADP">
    <meta name="keywords" content="hitech electronics corp, beijer, pws6a00t-p hmi, adp 0 (build 197), troubleshooting, upload issue, industrial machinery, refurbishing, data upload, communication">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-upload-issue-with-hitech-beijer-pws6a00t-p-hmi-on-adp-6-10-0-build-197-software">
    <title>Troubleshooting Upload Issue with Hitech/Beijer PWS6A00T-P HMI on ADP 6.10.0 (Build 197) Software | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Upload Issue with Hitech/Beijer PWS6A00T-P HMI on ADP 6.10.0 (Build 197) Software | Oxmaint Community">
    <meta property="og:description" content="As a seller of used industrial machinery, we are in the process of refurbishing a machine and need to upload data from the HMI, which is a product of Hitech Electronics Corp – now part of Beijer. Despite downloading what we believe to be the correct programming software, ADP">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-upload-issue-with-hitech-beijer-pws6a00t-p-hmi-on-adp-6-10-0-build-197-software">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Upload Issue with Hitech/Beijer PWS6A00T-P HMI on ADP 6.10.0 (Build 197) Software | Oxmaint Community">
    <meta name="twitter:description" content="As a seller of used industrial machinery, we are in the process of refurbishing a machine and need to upload data from the HMI, which is a product of Hitech Electronics Corp – now part of Beijer. Despite downloading what we believe to be the correct programming software, ADP">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-upload-issue-with-hitech-beijer-pws6a00t-p-hmi-on-adp-6-10-0-build-197-software"
      },
      "headline": "Troubleshooting Upload Issue with Hitech/Beijer PWS6A00T-P HMI on ADP 6.10.0 (Build 197) Software",
      "description": "As a seller of used industrial machinery, we are in the process of refurbishing a machine and need to upload data from the HMI, which is a product of Hitech Electronics Corp – now part of Beijer. Despite downloading what we believe to be the correct programming software, ADP",
      "author": {
        "@type": "Person",
        "name": "technolog"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-09",
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
                <h1 class="text-white">Troubleshooting Upload Issue with Hitech/Beijer PWS6A00T-P HMI on ADP 6.10.0 (Build 197) Software</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>technolog</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">7237</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">84</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>As a seller of used industrial machinery, we are in the process of refurbishing a machine and need to upload data from the HMI, which is a product of Hitech Electronics Corp – now part of Beijer. Despite downloading what we believe to be the correct programming software, ADP 6.10.0 (Build 197), we are facing issues with setting the communication parameters. 

The software's Transmission Setup menu option is inaccessible, and despite adjusting the settings in Device Manager to match those on the HMI (Com1: 9600 baud, 8 data bits, Even parity, 1 stop bit), the upload process still times out. We have tried various configurations but have not been successful in establishing a connection.

If anyone has any insights or can offer assistance on resolving this issue, we would greatly appreciate it.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>We are currently connected to the HMI, however, in order to perform an upload, it is requesting a password. It seems to be the developer password. Despite entering the application's default password of 2222, it is not being accepted. Is there possibly a default password for developers that we can use instead?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>technolog</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If a password prompt appears, it indicates that the project has been secured by the author. In my experience with various packages like Beijer iX Developer, I have never encountered a default developer password.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jonnie_R</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The password for Bejiers E series is embedded in the downloaded code, making it inaccessible to users. It is recommended to contact the panel supplier for assistance, although some suppliers may not disclose the password. As an experienced professional in the industry for over 35 years, I never password protect my code unless specifically requested by the equipment provider. I firmly believe in providing the password and documented source code to the client. Many system providers justify password protection by stating it prevents unskilled individuals from making changes or prevents code piracy. However, I find these explanations insufficient as they seem to prioritize control over customer satisfaction. In my years of software development experience, I understand the value of protecting intellectual property but also acknowledge that clients own the code if they have funded the development. It is more efficient to rewrite the code than to attempt to decipher poorly documented code on other systems. While I do not condone the unauthorized use of original code, I believe in the principle of ownership and transparency in software development projects.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To resolve the issue of needing a password to start PWS, consider disabling dip switch 6.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tripstuf2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I am experiencing a delay in timeouts. Can you please identify the issue for me?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nabelec</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Timeout issues commonly arise due to incorrect settings such as Baud rate, parity, and stop bits. When it comes to password protection, there are two levels to consider. The first level is entry protection on the HMI, offering 8 available options to safeguard data entry or page change buttons. Project transfer involves a unique macro within the project system settings, known as Macro PDxxxxxxxx, where xxx represents the password. Access to the original file on disk is necessary for this process. Additionally, a separate macro named PSxxxxxxxx can override all operation and transfer passwords.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After successfully establishing a connection to the HMI, we are prompted to enter a password before proceeding with the upload. It seems the password required is the developer password, different from the application's default password of 2222. Are there any default developer passwords that can be used in this instance? I am encountering the same issue and would appreciate any shared experiences or solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Munish</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As a used industrial machinery merchant, we are currently refurbishing a machine and need to extract data from the HMI, which is manufactured by Hitech Electronics Corp (now owned by Beijer). Despite downloading what seems to be the correct programming software, ADP 6.10.0 (Build 197), and consulting the Installation and Operating Guides, we are unable to configure the communication parameters. The Transmission Setup option under the Options menu is inactive, and we have tried different settings without success. We have identified the communication port as Com1 and adjusted the settings on our USB/serial converter accordingly, but the upload process continues to time out. We have tried various configurations but are still unable to establish a connection. If you have experienced a similar issue and have found a solution, we would greatly appreciate your insights. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Munish</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Google, there is a preset password commonly used for these Human Machine Interfaces (HMI) - 222183600.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ianingram</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The correct password is 222183600. However, I am experiencing communication issues between my PWS6A00T-P HMI and laptop. I am utilizing a USB to serial cable with Windows 11 on my laptop. The software I am using is ADP6 version: 6.8.0 (build 195). I am unable to successfully upload the program from the HMI to the laptop as a communication timeout error message is displayed. On the HMI side, the settings for Download/Upload/Copy are as follows: COM1 Baud rate - 9600, Data bits - 8, Parity - Even, Stop bit - 1. In the device manager, the settings for COM1 are the same. In the ADP software, the transmission setup is as follows: PC port - COM1, Baud rate - 9600. 
Do I need a specific programming cable for connecting the Hi-Tech HMI to the laptop?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Munish</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you unsure if the DIP Switch 7 is set to the ON position? Refer to the manual provided at the following link for detailed cable information: https://www.kwoco-plc.com/download/pws6a00t-n.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ianingram</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DIP switch 7 is set to the on position, while DIP switch 6 is switched off, with all other DIP switches remaining on. This configuration ensures proper settings for the device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Munish</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully backed up my programming cable and identified the issue, thanks to ianingram's assistance. The device is now functioning flawlessly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Munish</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the issue with setting communication parameters between the HMI and ADP 6.10.0 software?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to incorrect settings in the software or mismatched configurations between the HMI and the software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the inaccessible Transmission Setup menu option in the ADP 6.10.0 software?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You may need to check for any software updates, reinstall the software, or seek technical support from the software provider.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can be taken to resolve the timeout issue during the data upload process?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Ensure that the communication settings (baud rate, data bits, parity, stop bits) match between the HMI and the software, try different configurations, and verify the cable connections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any specific recommendations for establishing a successful connection between the HMI and the ADP 6.10.0 software?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Double-check the communication settings, consider using a different communication port or cable, and consult the user manual or technical support for guidance.</p>
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
