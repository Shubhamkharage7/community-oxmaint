
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I recently obtained a SIMATIC S7-300 training kit designed for maintenance purposes. However, upon powering it up, I encountered an issue where the PLC does not transition to the RUN mode, and instead, the STOP mode LED blinks every 1 second. After inspecting the 24V regulator, I found">
    <meta name="keywords" content="simatic s7-300 training kit, plc troubleshooting, plc stop mode led blinking, plc maintenance, 24v regulator voltage, troubleshooting plc issues, sim">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-simatic-s7-300-training-kit-plc-stuck-in-stop-mode-led-blinking-issue">
    <title>Troubleshooting SIMATIC S7-300 Training Kit: PLC Stuck in STOP Mode LED Blinking Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting SIMATIC S7-300 Training Kit: PLC Stuck in STOP Mode LED Blinking Issue | Oxmaint Community">
    <meta property="og:description" content="Hello, I recently obtained a SIMATIC S7-300 training kit designed for maintenance purposes. However, upon powering it up, I encountered an issue where the PLC does not transition to the RUN mode, and instead, the STOP mode LED blinks every 1 second. After inspecting the 24V regulator, I found">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-simatic-s7-300-training-kit-plc-stuck-in-stop-mode-led-blinking-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting SIMATIC S7-300 Training Kit: PLC Stuck in STOP Mode LED Blinking Issue | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I recently obtained a SIMATIC S7-300 training kit designed for maintenance purposes. However, upon powering it up, I encountered an issue where the PLC does not transition to the RUN mode, and instead, the STOP mode LED blinks every 1 second. After inspecting the 24V regulator, I found">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-simatic-s7-300-training-kit-plc-stuck-in-stop-mode-led-blinking-issue"
      },
      "headline": "Troubleshooting SIMATIC S7-300 Training Kit: PLC Stuck in STOP Mode LED Blinking Issue",
      "description": "Hello, I recently obtained a SIMATIC S7-300 training kit designed for maintenance purposes. However, upon powering it up, I encountered an issue where the PLC does not transition to the RUN mode, and instead, the STOP mode LED blinks every 1 second. After inspecting the 24V regulator, I found",
      "author": {
        "@type": "Person",
        "name": "eagl1"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-16",
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
                <h1 class="text-white">Troubleshooting SIMATIC S7-300 Training Kit: PLC Stuck in STOP Mode LED Blinking Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>eagl1</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">522</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">51</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I recently obtained a SIMATIC S7-300 training kit designed for maintenance purposes. However, upon powering it up, I encountered an issue where the PLC does not transition to the RUN mode, and instead, the STOP mode LED blinks every 1 second. After inspecting the 24V regulator, I found that it is measuring 23.65V. I am unsure if this voltage reading is within the acceptable range.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that there is no program saved on the flash card. Do you possess the necessary software and hardware to upload a program onto the CPU? This PLC is equipped with an MPI port, requiring a Siemens PC Adapter (6GK1571-0BA00-0AA0) to connect online. The recommended programming software includes STEP7 V5 or TIA V1x PRO. It is important to note that attempting to use the flash card in a PC card reader is not advised.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This comprehensive training kit includes a programmer. Currently, I am experiencing difficulties with a Dell PC in the office that contains Step 7 lite software. The system is not booting up, and I suspect it may be due to a problem with the HDD jumper settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>eagl1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, do you have any ideas on what might be causing the issue? I am still facing the same problem where the STOP LED blinks rapidly after pressing MRES, then returns to a slow blink. I am unable to connect the PLC online. I have created a demonstration video for reference: 20240324 101536. Can you provide any guidance on troubleshooting this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>eagl1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Make sure to access the Setting PG/PC Interface dialog and check that the S7ONLINE access point is set to PC Adapter (MPI). Additionally, in the extended properties, confirm that the adapter type is set to USB.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I verified that:</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>eagl1</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, it has been quite some time since I last used the converters with code 7-972-OCB20. What operating system is currently running on your PC? Are there any LED indicators on your converter, and how do they function? Within the MPI tab, you have the option to check the nodes of your MPI node. The default CPU is set to 2, but the MPI address can be adjusted as needed based on where the CPU is located.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gigi17</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The S7-300 device I own features two DSub9 connectors, one dedicated to PROFIBUS DP on the right and the other for MPI on the left. Typically, communication with the programming tool occurs through the MPI interface. Although the video and images you shared do not clearly show where the USB-MPI converter is connected due to the closed cover, it appears to be connected on the right side. I recommend verifying that the converter is indeed plugged into the MPI port, not the PROFIBUS port.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP mentioned that there may not be a program loaded onto the flash card. It turns out, a colleague tried a different flash card from another kit and it worked. It's important to note not to attempt to use the flash card in a PC card reader. Unfortunately, I made the mistake of formatting it. Now, what should I do next?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>eagl1</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What does it mean if the STOP mode LED on the SIMATIC S7-300 PLC blinks every 1 second?</h4>
<p class='text-muted'><strong>Answer:</strong> The blinking STOP mode LED indicates that the PLC is stuck in the STOP mode and is not transitioning to the RUN mode as expected.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is the measured voltage of 23.65V at the 24V regulator within the acceptable range for the SIMATIC S7-300 training kit?</h4>
<p class='text-muted'><strong>Answer:</strong> The acceptable range for the voltage at the 24V regulator may vary depending on the specific requirements of the PLC. It is advisable to consult the official documentation or technical specifications provided by the manufacturer to determine if 23.65V falls within the acceptable range.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot the issue of the SIMATIC S7-300 PLC not transitioning to the RUN mode despite the blinking STOP mode LED?</h4>
<p class='text-muted'><strong>Answer:</strong> Troubleshooting steps may include checking the power supply, ensuring proper program download, verifying connections, examining the hardware configuration, and reviewing error codes or diagnostic messages.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any common reasons why a SIMATIC S7-300 PLC may remain stuck in the STOP mode with the STOP mode LED blinking?</h4>
<p class='text-muted'><strong>Answer:</strong> Common reasons for this issue may include faulty connections, incorrect program execution, power supply problems, hardware malfunctions, or configuration errors. It is recommended to systematically check each of</p>
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
