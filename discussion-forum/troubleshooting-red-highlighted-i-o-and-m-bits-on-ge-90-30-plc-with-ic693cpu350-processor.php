
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have limited experience with GE 90-30 PLCs and recently encountered a brake press issue at a customers site. The GE 90-30 PLC in question is equipped with an IC693CPU350 processor. Upon connecting online, I noticed that approximately half of the I/O and M bits were highlighted in red,">
    <meta name="keywords" content="ge 90-30 plc troubleshooting, ic693cpu350 processor tips, red highlighted i/o and m bits, ge 90-30 plc brake press issue, troubleshooting ge 90-">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-red-highlighted-i-o-and-m-bits-on-ge-90-30-plc-with-ic693cpu350-processor">
    <title>Troubleshooting Red Highlighted I/O and M Bits on GE 90-30 PLC with IC693CPU350 Processor | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Red Highlighted I/O and M Bits on GE 90-30 PLC with IC693CPU350 Processor | Oxmaint Community">
    <meta property="og:description" content="I have limited experience with GE 90-30 PLCs and recently encountered a brake press issue at a customers site. The GE 90-30 PLC in question is equipped with an IC693CPU350 processor. Upon connecting online, I noticed that approximately half of the I/O and M bits were highlighted in red,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-red-highlighted-i-o-and-m-bits-on-ge-90-30-plc-with-ic693cpu350-processor">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Red Highlighted I/O and M Bits on GE 90-30 PLC with IC693CPU350 Processor | Oxmaint Community">
    <meta name="twitter:description" content="I have limited experience with GE 90-30 PLCs and recently encountered a brake press issue at a customers site. The GE 90-30 PLC in question is equipped with an IC693CPU350 processor. Upon connecting online, I noticed that approximately half of the I/O and M bits were highlighted in red,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-red-highlighted-i-o-and-m-bits-on-ge-90-30-plc-with-ic693cpu350-processor"
      },
      "headline": "Troubleshooting Red Highlighted I/O and M Bits on GE 90-30 PLC with IC693CPU350 Processor",
      "description": "I have limited experience with GE 90-30 PLCs and recently encountered a brake press issue at a customers site. The GE 90-30 PLC in question is equipped with an IC693CPU350 processor. Upon connecting online, I noticed that approximately half of the I/O and M bits were highlighted in red,",
      "author": {
        "@type": "Person",
        "name": "MikeVT"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-23",
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
                <h1 class="text-white">Troubleshooting Red Highlighted I/O and M Bits on GE 90-30 PLC with IC693CPU350 Processor</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MikeVT</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">98</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">407</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have limited experience with GE 90-30 PLCs and recently encountered a brake press issue at a customer's site. The GE 90-30 PLC in question is equipped with an IC693CPU350 processor. Upon connecting online, I noticed that approximately half of the I/O and M bits were highlighted in red, indicating that they may be forced. The customer does not seem to have connected with the PLC or have the necessary software or trained staff. Have you come across a similar scenario before? Any advice or recommendations would be highly valued and appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have never encountered instances of bits being forcibly manipulated without reason. Could any of these forced bits be connected to the issue that prompted your visit to the machine? Bits may remain forced due to negligence from startup personnel or maintenance staff, which is not ideal. In GE PLCs, forcing a bit does not directly control its on/off state but removes it from program control, including I/O service. The internal bit %S0011 serves as a marker for forced bits. One possible explanation for numerous forced bits could be the use of a generic program by the machine builder with multiple options. Bits related to unused options may be forced but left in a non-impacting state on machine operation. While this is not recommended, it may have been a quick fix implemented for specific reasons.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Steve Bailey's query about forced bits in a PLC program, it is important to address the potential issues that can arise from leaving bits in a forced state. This situation can occur due to oversight by startup personnel or maintenance technicians, and while it may not directly turn a bit on or off in GE PLCs, it does remove program control. The presence of forced bits like %S0011 could be a result of using a generic program with multiple options, some of which may not be in use but are still forced in the program.

When inspecting a machine with forced outputs and inputs, it is crucial to have a clear understanding of the program logic. In this case, the presence of a Bend Wizard control system connected to the PLC adds another layer of complexity. While the program may be relatively small and there is an electrical print for reference, the forced items in the program could be affecting the functionality of the Bend Wizard in controlling the brake press. 

Comparing this troubled machine to an identical one operating correctly with the same PLC and program highlights the importance of revisiting the customer to remove all forced bits. This step may help in troubleshooting and resolving the issues affecting the machine's operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeVT</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you verified if this Programmable Logic Controller (PLC) was previously in operation and functioning correctly? Make sure to review the configuration settings to determine if it is programmed to reload from flash memory in case of program loss in RAM. If the PLC was shut down due to a depleted battery, it may have switched to a saved program containing the necessary forces.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The report showed that the brake press was functioning correctly until last Thursday. Although not a new machine, maintenance did replace the PLC battery quickly, without any extended downtime. Using Proficy 8.5 on an older computer, where can I access the configuration information? I attempted to flash an EEPROM but the option was grayed out while offline. It seems there may not be any flash memory available. It appears I may have mistakenly searched for flash memory while online, as I am unable to locate that option in my offline version.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeVT</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To access the CPU module in Proficy Navigator, simply expand the Main Rack and double click on it. Within the module, there are two options to choose from: RAM (default) and PROM which refers to flash memory in the case of the CPU 350. When downloading to the PLC, there is an option to write to Flash memory as well. Selecting "Write all items to Flash" likely copies the RAM data to Flash memory, suggesting that the backup in Flash memory may include the force status information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey advises users to navigate to the Main Rack in Proficy Navigator and then double-click on the CPU module. Within this module, users will find the options for Logic/Configuration from Registers, with the choices being RAM (default) and PROM (flash memory in the case of the CPU 350). When downloading to the PLC, there is a checkbox option to also write to Flash memory. Selecting "Write all items to Flash" copies RAM to Flash, potentially including the force status in the backup. It is important to note that the PLC is set to PROM, indicating the presence of flash memory. This information provided by Steve is valuable and may prove useful in troubleshooting the machine. Thank you for sharing these insights, they are greatly appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeVT</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. What does it mean when I/O and M bits are highlighted in red on a GE 90-30 PLC with an IC693CPU350 processor?
- When I/O and M bits are highlighted in red, it typically indicates that those bits may have been forced or overridden in the PLC program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot red highlighted I/O and M bits on a GE 90-30 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot this issue, you can review the PLC program to identify where the bits are being forced and make necessary adjustments to ensure they are following the intended logic.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should be done if a customer's site lacks the necessary software or trained staff for the GE 90-30 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - In such cases, it is recommended to provide training to the customer's staff or offer remote support to assist with troubleshooting and resolving the issue effectively.</p>
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
