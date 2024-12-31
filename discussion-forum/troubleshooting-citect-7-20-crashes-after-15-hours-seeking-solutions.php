
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I have been experiencing persistent issues with Citect for the past month, and despite our efforts, we have not been able to identify the cause or find a solution. We recently purchased a copy of Citect 7.20 along with a complimentary license key (600 points). The problem were">
    <meta name="keywords" content="citect 20 crashes, citect scada software, citect troubleshooting, citect 20 issues, citect opc server, simaticnet 2008 edition, citect windows 7, citect windows xp">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-citect-7-20-crashes-after-15-hours-seeking-solutions">
    <title>Troubleshooting Citect 7.20 Crashes After 15 Hours: Seeking Solutions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Citect 7.20 Crashes After 15 Hours: Seeking Solutions | Oxmaint Community">
    <meta property="og:description" content="Hello, I have been experiencing persistent issues with Citect for the past month, and despite our efforts, we have not been able to identify the cause or find a solution. We recently purchased a copy of Citect 7.20 along with a complimentary license key (600 points). The problem were">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-citect-7-20-crashes-after-15-hours-seeking-solutions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Citect 7.20 Crashes After 15 Hours: Seeking Solutions | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I have been experiencing persistent issues with Citect for the past month, and despite our efforts, we have not been able to identify the cause or find a solution. We recently purchased a copy of Citect 7.20 along with a complimentary license key (600 points). The problem were">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-citect-7-20-crashes-after-15-hours-seeking-solutions"
      },
      "headline": "Troubleshooting Citect 7.20 Crashes After 15 Hours: Seeking Solutions",
      "description": "Hello, I have been experiencing persistent issues with Citect for the past month, and despite our efforts, we have not been able to identify the cause or find a solution. We recently purchased a copy of Citect 7.20 along with a complimentary license key (600 points). The problem were",
      "author": {
        "@type": "Person",
        "name": "nhadjinikolov"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-16",
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
                <h1 class="text-white">Troubleshooting Citect 7.20 Crashes After 15 Hours: Seeking Solutions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>nhadjinikolov</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4968</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">219</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I have been experiencing persistent issues with Citect for the past month, and despite our efforts, we have not been able to identify the cause or find a solution. We recently purchased a copy of Citect 7.20 along with a complimentary license key (600 points). The problem we're facing is that the SCADA software Citect crashes and becomes unresponsive after approximately 15 hours of operation. This issue has been ongoing since the software was first installed and started running.

The PLC we are using is a SIMATIC ET-200S (6ES7151-8AB00-0AB0), and the communication between the SCADA and the PLC is facilitated through the OPC server SimaticNET 2008 Edition. Originally, Citect was installed on a computer running Windows 7 Professional. However, due to the persistent problems, we switched to a new PC with Windows XP Professional in an attempt to rule out any system-related errors. Unfortunately, the issue persisted even after the change. We also attempted to resolve the problem by installing SP2, but it did not solve the issue.

Our project utilizes a single trend server and an alarm server, and there are no custom scripts added aside from those used for calling popup trends or changing pages. The error report from the Windows Event Viewer indicates that the faulting application is Citect32.exe (version 7.20.0.598), with the faulting module being KERNELBASE.dll (version 6.1.7601.17514). The exception code is 0xe0434f4d.

I have attached one of the exception reports generated by Citect for reference. Any insights or suggestions on why this issue may be occurring would be greatly appreciated, as the support from Schneider Electric Bulgaria has not been able to provide a solution. I have also reached out to Schneider Electric Global for assistance and I am awaiting a response. Thank you to anyone who can help us with this problem.

Best regards,
Nikola Hadjinikolov</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After receiving no response from anyone, including Schneider and my colleagues, I decided to investigate the project myself. Despite not finding any issues initially, I created a new project that simply displayed PLC data, and it worked successfully. However, I discovered that the client process was rapidly consuming memory at a rate of 40-100 KB per second. Eventually, after approximately 15 hours, the entire 2 GB of RAM was filled, causing Citect to crash due to insufficient memory. I decided to rebuild the project from scratch, only exporting the variables and graphics. Surprisingly, everything ran smoothly without the need for any service packs or fixes. Although all settings were the same as the previous project, I made some minor cosmetic changes to enhance the alarm summary page. This issue was likely caused by a memory leak bug, though the specific reason remains unknown. I hope this information proves helpful to anyone facing a similar problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nhadjinikolov</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have yet to implement programming for Citect due to budget constraints this year. However, since there are logging capabilities available, my suggestion would be to consider logging data at a rate of 1.0 or 0.1 per second to ensure smooth operations without the risk of integer overflow. For example, by logging at 1.0 or 0.1 per second, you would accumulate 570,000 tenths within a span of 900 minutes or 54,000 seconds. This approach will help optimize data tracking and prevent any potential issues caused by overflowing integers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>iant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears to be a memory leak issue, a common problem in previous versions of Citect. I recommend reaching out to Citect support to report your findings, as they may have a hotfix available to resolve the memory problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>andybutcher</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We are experiencing a common issue with our Vijeo Citect 7.4 SP 2 SCADA Project, where it freezes after 3 to 4 hours, showing outdated values without updating them, impacting client data. Restarting the SCADA on the server temporarily resolves the problem. We would appreciate any suggestions for a permanent solution. Thank you in advance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kvsrk</span></li>
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
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1. Why does Citect 7.20 crash after approximately 15 hours of operation?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue of Citect crashing after 15 hours of operation could be due to various factors such as compatibility issues, system errors, or configuration settings. Further troubleshooting and analysis may be required to pinpoint the exact cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What PLC and communication setup is being used with Citect?</h4>
<p class='text-muted'><strong>Answer:</strong> - The thread mentions the use of a SIMATIC ET-200S PLC (6ES7151-8AB00-0AB0) and communication facilitated through the OPC server SimaticNET 2008 Edition. This information can be crucial in understanding the system architecture and potential areas for investigation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What operating systems have been tested with Citect?</h4>
<p class='text-muted'><strong>Answer:</strong> - The discussion mentions that Citect was initially installed on a computer running Windows 7 Professional, and later switched to a new PC with Windows XP Professional. Despite the change in operating systems, the issue persisted. This highlights the need to explore other possible causes beyond the OS environment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What error messages or logs are generated when Citect crashes?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Windows Event Viewer reports that the faulting application is Citect32.exe (version 7.20.0.598), with KERNELBASE.dll (version 6.1.7601.17514) as the faulting module. Understanding the error codes and messages can provide clues for troubleshooting and resolving the issue.</p>
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
