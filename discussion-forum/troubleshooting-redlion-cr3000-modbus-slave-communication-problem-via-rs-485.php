
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have numerous DA30 and CR3000 RedLions that are actively communicating with a PLC through ethernet and transmitting data to third parties via 485. While I have been utilizing a standard configuration for all devices, one recently began experiencing issues without any apparent cause. Upon investigation, I discovered that">
    <meta name="keywords" content="redlion cr3000 modbus slave troubleshooting, redlion cr3000 rs-485 communication problem, redlion cr3000 plc communication issue, redlion cr3000 modbus slave">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-redlion-cr3000-modbus-slave-communication-problem-via-rs-485">
    <title>Troubleshooting RedLion CR3000 Modbus Slave Communication Problem via RS-485 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting RedLion CR3000 Modbus Slave Communication Problem via RS-485 | Oxmaint Community">
    <meta property="og:description" content="I have numerous DA30 and CR3000 RedLions that are actively communicating with a PLC through ethernet and transmitting data to third parties via 485. While I have been utilizing a standard configuration for all devices, one recently began experiencing issues without any apparent cause. Upon investigation, I discovered that">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-redlion-cr3000-modbus-slave-communication-problem-via-rs-485">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting RedLion CR3000 Modbus Slave Communication Problem via RS-485 | Oxmaint Community">
    <meta name="twitter:description" content="I have numerous DA30 and CR3000 RedLions that are actively communicating with a PLC through ethernet and transmitting data to third parties via 485. While I have been utilizing a standard configuration for all devices, one recently began experiencing issues without any apparent cause. Upon investigation, I discovered that">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-redlion-cr3000-modbus-slave-communication-problem-via-rs-485"
      },
      "headline": "Troubleshooting RedLion CR3000 Modbus Slave Communication Problem via RS-485",
      "description": "I have numerous DA30 and CR3000 RedLions that are actively communicating with a PLC through ethernet and transmitting data to third parties via 485. While I have been utilizing a standard configuration for all devices, one recently began experiencing issues without any apparent cause. Upon investigation, I discovered that",
      "author": {
        "@type": "Person",
        "name": "unexpectedlee"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-17",
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
                <h1 class="text-white">Troubleshooting RedLion CR3000 Modbus Slave Communication Problem via RS-485</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>unexpectedlee</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">161</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">352</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have numerous DA30 and CR3000 RedLions that are actively communicating with a PLC through ethernet and transmitting data to third parties via 485. While I have been utilizing a standard configuration for all devices, one recently began experiencing issues without any apparent cause. Upon investigation, I discovered that the problem stemmed from using both integers and real numbers on the same device. When I try to input an integer in a separate block, it disrupts the transmission of real numbers. This issue has been replicated in a lab setting, but the underlying reason remains unclear. It is crucial to maintain the order and type of registers to avoid any disruptions in communication with third parties, which will require coordination to rectify. Your assistance in resolving this matter is greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you encounter a device that has suddenly stopped working properly, it is important to consider any recent changes in the system. If no changes were made, it is worth investigating whether the issue lies with the software or database. Sometimes, communication issues can cause devices to malfunction and experience timeouts, especially when multiple requests are made simultaneously. Resetting the database on the problematic DA30 or CR3000 device may help, as databases can become corrupted over time. Additionally, it is advisable to try swapping out the device to determine if the problem is specific to that particular device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For the best assistance, contact Red Lion's dedicated support team. They possess valuable knowledge and solutions that may not be found in the user manual. Oftentimes, user manuals may be outdated or lacking important information. Within Crimson 3.2, there is a feature named "Export Gateway Blocks" which allows for the transfer of configuration data for "PLC1" into a text file, making it easier for troubleshooting. It would be beneficial to know the version you are using and to provide the exported data for further analysis. There may be a discrepancy in the block size due to potential overlapping issues with the tags.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>modiconguy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the responses. What has changed today? I have installed two new units and transferred the same configuration with only changes in IP addresses and slave addresses (1 & 2). One of the units is functioning properly, while the other is not. I have attempted to recompile the database and communication blocks (File>Utilities) and have also tested with different devices in the lab, including a DA30 and a CR3k.

I will be reaching out to RedLion for assistance, but I am wondering if this issue is a common one. Please see the exported gateway block attached. Note that PLC1 is not the specific block I am working with; I have simplified it to the smallest size possible while still encountering the problem. My software version is 3.2.1016.0.

I am unsure why there may be an overlap. 40,001 is a Real, requiring two bits, while 40,003 is an int, requiring only one bit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>unexpectedlee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I found a workaround by merging and performing bit shifts on integers, allowing me to successfully access and interpret the data. Though a bit cumbersome, this method has proven effective for reading the information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>unexpectedlee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was testing for overlapping INT block definitions in the system file. It seems the INT block starts at address 400003 with a length of 1, although it wasn't very clear in the screenshot. I agree with another user that the problem may be related to hardware issues or corruption. I have experienced issues in the past with malfunctioning serial ports that displayed some indicator lights, as well as problems caused by incorrect image file writing in Emulator mode that rendered certain hardware components unusable until the issue was resolved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>modiconguy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing communication issues with the RedLion CR3000 Modbus Slave via RS-485?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue might arise from mixing integers and real numbers on the same device, causing disruptions in data transmission.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve communication problems when using different data types on the RedLion CR3000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To maintain consistent communication, ensure that the order and type of registers are coordinated to avoid disruptions, especially when sending data to third parties.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Have others experienced similar issues with RedLion devices communicating via RS-485?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While not explicitly mentioned in the thread, issues related to data types and transmission disruptions can be common in industrial communication setups using Modbus protocol.</p>
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
