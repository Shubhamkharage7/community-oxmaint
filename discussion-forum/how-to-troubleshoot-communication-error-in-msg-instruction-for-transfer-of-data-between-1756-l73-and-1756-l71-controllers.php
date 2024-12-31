
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am facing challenges in setting up a message instruction to transfer data from a 1756-L73 controller to a 1756-L71 controller. The communication path from the first controller is 1,4,2, IP address, 1,0. Despite my efforts, I am encountering a communication failure error. Can anyone provide guidance">
    <meta name="keywords" content="- troubleshoot communication error, - msg instruction data transfer, - 1756-l73 controller, - 1756-l71 controller, - communication failure error, - troubleshooting guidance, - same subnet controllers, - setting up message instruction">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-troubleshoot-communication-error-in-msg-instruction-for-transfer-of-data-between-1756-l73-and-1756-l71-controllers">
    <title>How to Troubleshoot Communication Error in MSG Instruction for Transfer of Data between 1756-L73 and 1756-L71 Controllers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Troubleshoot Communication Error in MSG Instruction for Transfer of Data between 1756-L73 and 1756-L71 Controllers | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am facing challenges in setting up a message instruction to transfer data from a 1756-L73 controller to a 1756-L71 controller. The communication path from the first controller is 1,4,2, IP address, 1,0. Despite my efforts, I am encountering a communication failure error. Can anyone provide guidance">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-troubleshoot-communication-error-in-msg-instruction-for-transfer-of-data-between-1756-l73-and-1756-l71-controllers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Troubleshoot Communication Error in MSG Instruction for Transfer of Data between 1756-L73 and 1756-L71 Controllers | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am facing challenges in setting up a message instruction to transfer data from a 1756-L73 controller to a 1756-L71 controller. The communication path from the first controller is 1,4,2, IP address, 1,0. Despite my efforts, I am encountering a communication failure error. Can anyone provide guidance">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-troubleshoot-communication-error-in-msg-instruction-for-transfer-of-data-between-1756-l73-and-1756-l71-controllers"
      },
      "headline": "How to Troubleshoot Communication Error in MSG Instruction for Transfer of Data between 1756-L73 and 1756-L71 Controllers",
      "description": "Hello everyone, I am facing challenges in setting up a message instruction to transfer data from a 1756-L73 controller to a 1756-L71 controller. The communication path from the first controller is 1,4,2, IP address, 1,0. Despite my efforts, I am encountering a communication failure error. Can anyone provide guidance",
      "author": {
        "@type": "Person",
        "name": "LP_337"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-20",
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
                <h1 class="text-white">How to Troubleshoot Communication Error in MSG Instruction for Transfer of Data between 1756-L73 and 1756-L71 Controllers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>LP_337</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">736</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">194</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am facing challenges in setting up a message instruction to transfer data from a 1756-L73 controller to a 1756-L71 controller. The communication path from the first controller is 1,4,2, IP address, 1,0. Despite my efforts, I am encountering a communication failure error. Can anyone provide guidance on troubleshooting this issue? It's worth noting that both controllers are on the same subnet. Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To gain a better understanding of the pathway, additional information is required. Based on the current data, the pathway appears to include VLAN X, 2, IP address x.x.x.x, and has a flow of 1 with no delays.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure clarity, let's confirm the setup. Your initial controller utilizes an Ethernet module located in Slot 4 within the nearby chassis, while the second controller is situated in Slot #0 within the distant chassis. Could you confirm the specific Ethernet module model being used in the local chassis - is it 1756-EN2T or ENBT? Additionally, what error message are you encountering? One potential troubleshooting step to consider is adding the remote ethernet module and controller to the local controller's I/O Configuration. While not mandatory, this can streamline the path selection process for easier operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The IP address setup appears to be correct for an Ethernet module in Slot 04 of the source controller's chassis and a CPU in Slot 00 of the destination controller's chassis. The 1's represent the Backplane port, while the 2 signifies the Network Port of a 1756-ENxT module. It is important to accurately count the slots, starting with 00 as the leftmost slot. To test the CIP Path and connectivity, configure a message to execute the Get Identity service, which all controllers and modules can respond to. Recording the .ERR and .EXERR error values for the MESSAGE control tag can help diagnose network connectivity issues, CIP Path addressing problems, or errors related to the tag's syntax, spelling, scope, or external access settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have another example that mirrors your situation closely. It's important to skip the initial step. Begin by inserting the ENxT module into Slot 4. Make sure to connect Ethernet port 2 and configure the IP Address for Backplane 1. The PLC should be positioned in Slot 04,2,x.x.x.x,1,0. This setup is vital for seamless operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JaxGTO</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>CIP Paths consist of pairs of [Port, Address] values, always. When the 1756-ENxT module is included in the I/O tree of the CPU's chassis (even if not currently utilized for I/O purposes), clicking on the module triggers the insertion of the initial "1, slot" hop into the CIP Path string within the MESSAGE control tag. Interestingly, entering "1, <slot>" manually will prompt RSLogix to automatically replace it with the module name. The first hop in the CIP Path sequence, starting with Port 1 of the backplane and then moving to the 1756-ENxT slot, is always necessary when using an Ethernet module external to the CPU. It is imperative to include this initial step and cannot be omitted when connecting to the 1756 backplane.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you to everyone who commented. Today, I will be sharing some photos to illustrate how I have set everything up. This visual aid should provide a clearer understanding of the issue I am facing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>LP_337</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Below are photos showcasing my current setup, including device names from RsLinx, error codes, and IP paths. I appreciate any assistance in resolving this issue. Thank you in advance to everyone helping me troubleshoot.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>LP_337</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for sharing those screenshots! The error code 0x0001_0204 typically indicates a connection timeout. The CIP Path traces the route from the CPU with the MSG instruction to the target CPU. In your initial post, you mentioned CIP Path 1,4,2, IP address, 1,0. The second component of the CIP path suggests that the 1756-EN2TR in the CPU's chassis with the MSG instruction is in Slot 4. However, your I/O tree screenshot displays it in Slot 1. The sixth element in the CIP path indicates that the target ControlLogix should be in Slot 0, but the -EN2TR in Slot 0 seems to be the receiver and the receiving CPU is not visible in the screenshot. This discrepancy suggests that either the I/O tree shown is in the receiving CPU, or there may be an error in the CIP path. If the CPU receiving the message is listed in the I/O tree, simply select that object in the Path browse for the CIP Path to be correctly and automatically populated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing a communication error in a message instruction for transferring data between 1756-L73 and 1756-L71 controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> -  There could be various reasons for a communication error, such as incorrect path configuration, IP address settings, network issues, or programming errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot a communication failure error between two controllers on the same subnet?</h4>
<p class='text-muted'><strong>Answer:</strong> -  To troubleshoot the issue, you can check the path configuration, verify the IP addresses, ensure proper network connectivity, and review the message instruction setup for any mistakes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take to resolve a communication error when setting up a message instruction for data transfer between Allen-Bradley controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Some steps to resolve the issue include checking the routing path, confirming the IP addresses, verifying subnet settings, examining the message instruction configuration, and testing the network connection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there specific considerations to keep in mind when setting up a message instruction for transferring data between different Allen-Bradley controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Yes, considerations include ensuring the correct path configuration, setting up proper IP addresses, configuring the controllers on the same subnet, and troubleshooting any communication errors that may arise during the setup process.</p>
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
