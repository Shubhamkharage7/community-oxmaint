
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I need assistance in establishing a connection between a Danfoss inverter and an S7-200 CPU 226. When using Microwin, I encountered an error related to the DATA Ptr. Despite trying to assign different VB memory locations (such as vb100, vb1100, vb0), the error message remained consistent. The">
    <meta name="keywords" content="troubleshooting error 36, microwin modbus rtu connection, danfoss inverter, s7-200 cpu 226, data ptr, vb memory locations, network 2, error 36, operand 5, instruction">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-error-36-in-microwin-modbus-rtu-connection-between-danfoss-inverter-and-s7-200-cpu-226">
    <title>Troubleshooting Error 36 in Microwin Modbus RTU Connection between Danfoss Inverter and S7-200 CPU 226 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Error 36 in Microwin Modbus RTU Connection between Danfoss Inverter and S7-200 CPU 226 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I need assistance in establishing a connection between a Danfoss inverter and an S7-200 CPU 226. When using Microwin, I encountered an error related to the DATA Ptr. Despite trying to assign different VB memory locations (such as vb100, vb1100, vb0), the error message remained consistent. The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-error-36-in-microwin-modbus-rtu-connection-between-danfoss-inverter-and-s7-200-cpu-226">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Error 36 in Microwin Modbus RTU Connection between Danfoss Inverter and S7-200 CPU 226 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I need assistance in establishing a connection between a Danfoss inverter and an S7-200 CPU 226. When using Microwin, I encountered an error related to the DATA Ptr. Despite trying to assign different VB memory locations (such as vb100, vb1100, vb0), the error message remained consistent. The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-error-36-in-microwin-modbus-rtu-connection-between-danfoss-inverter-and-s7-200-cpu-226"
      },
      "headline": "Troubleshooting Error 36 in Microwin Modbus RTU Connection between Danfoss Inverter and S7-200 CPU 226",
      "description": "Hello everyone, I need assistance in establishing a connection between a Danfoss inverter and an S7-200 CPU 226. When using Microwin, I encountered an error related to the DATA Ptr. Despite trying to assign different VB memory locations (such as vb100, vb1100, vb0), the error message remained consistent. The",
      "author": {
        "@type": "Person",
        "name": "Adnanhamid"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-25",
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
                <h1 class="text-white">Troubleshooting Error 36 in Microwin Modbus RTU Connection between Danfoss Inverter and S7-200 CPU 226</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Adnanhamid</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">167</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">295</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I need assistance in establishing a connection between a Danfoss inverter and an S7-200 CPU 226. When using Microwin, I encountered an error related to the DATA Ptr. Despite trying to assign different VB memory locations (such as vb100, vb1100, vb0), the error message remained consistent. The error message displayed during compilation is as follows: Network 2, row 1, col 2: ERROR 36 - (operand 5) The size or data type is not valid for the instruction operand. The blocks involved are SBR_0 (SBR0), MBUS_CTRL (SBR1), MBUS_MSG (SBR2), MBUSM1 (SBR3), INT_0 (INT0), and MBUSM2 (INT1). The block size is 0 bytes, with 1 error identified. Any advice would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not familiar with the Modbus library, but based on my understanding, a 'Pointer' in Microwin is indicated by using the '&' symbol. Therefore, instead of using VB100, you should use &VB100. It is unclear if there are additional setup steps required to utilize this memory location as a pointer. For detailed instructions on using the Modbus library with Siemens S7-200, refer to chapter 12 of the Siemens Manual. You can find more information on pointers by searching for the term in the PDF manual: https://cache.industry.siemens.com/dl/files/582/1109582/att_22063/v1/s7200_system_manual_en-US.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
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
<h4 class='text-dark'>FAQ: 1. What does Error 36 in Microwin Modbus RTU connection between Danfoss Inverter and S7-200 CPU 226 indicate?</h4>
<p class='text-muted'><strong>Answer:</strong> - Error 36 in Microwin indicates that the size or data type is not valid for the instruction operand. It typically relates to issues with assigning VB memory locations in the connection setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot Error 36 in my Microwin setup for the Danfoss inverter and S7-200 CPU 226 connection?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot Error 36, you can try assigning different VB memory locations, such as vb100, vb1100, vb0, to see if that resolves the issue. Additionally, double-check the blocks involved in the setup like SBR_0, MBUS_CTRL, MBUS_MSG, MBUSM1, INT_0, and MBUSM2 for any errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the common blocks involved in the connection setup between Danfoss inverter and S7-200 CPU 226?</h4>
<p class='text-muted'><strong>Answer:</strong> - The common blocks involved in the setup include SBR_0 (SBR0), MBUS_CTRL (SBR1), MBUS_MSG (SBR2), MBUSM1 (SBR3), INT_0 (INT0), and MBUSM2 (INT1). These blocks play a crucial role in establishing the connection and data exchange between the devices.</p>
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
