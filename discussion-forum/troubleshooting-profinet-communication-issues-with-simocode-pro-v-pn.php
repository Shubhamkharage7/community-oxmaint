
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, we utilize a SIMOCODE to control the operation of key pumps within our factory. This system communicates via PROFINET and is programmed using the TIA Portal software. We monitor and adjust settings using an HMI. While the starting and stopping functions are functioning flawlessly, we are facing">
    <meta name="keywords" content="profinet communication, simocode pro v pn, tia portal software, hmi settings, pump operation, communication fault, command state, siemens support, watchdog features, bus faults, communication failure, troubleshooting, factory pumps, maintaining operations">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-profinet-communication-issues-with-simocode-pro-v-pn">
    <title>Troubleshooting PROFINET Communication Issues with SIMOCODE pro V PN | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PROFINET Communication Issues with SIMOCODE pro V PN | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, we utilize a SIMOCODE to control the operation of key pumps within our factory. This system communicates via PROFINET and is programmed using the TIA Portal software. We monitor and adjust settings using an HMI. While the starting and stopping functions are functioning flawlessly, we are facing">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-profinet-communication-issues-with-simocode-pro-v-pn">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PROFINET Communication Issues with SIMOCODE pro V PN | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, we utilize a SIMOCODE to control the operation of key pumps within our factory. This system communicates via PROFINET and is programmed using the TIA Portal software. We monitor and adjust settings using an HMI. While the starting and stopping functions are functioning flawlessly, we are facing">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-profinet-communication-issues-with-simocode-pro-v-pn"
      },
      "headline": "Troubleshooting PROFINET Communication Issues with SIMOCODE pro V PN",
      "description": "Hello everyone, we utilize a SIMOCODE to control the operation of key pumps within our factory. This system communicates via PROFINET and is programmed using the TIA Portal software. We monitor and adjust settings using an HMI. While the starting and stopping functions are functioning flawlessly, we are facing",
      "author": {
        "@type": "Person",
        "name": "pisoj"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-20",
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
                <h1 class="text-white">Troubleshooting PROFINET Communication Issues with SIMOCODE pro V PN</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>pisoj</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2579</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">59</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, we utilize a SIMOCODE to control the operation of key pumps within our factory. This system communicates via PROFINET and is programmed using the TIA Portal software. We monitor and adjust settings using an HMI. While the starting and stopping functions are functioning flawlessly, we are facing an issue regarding maintaining the command state in the event of a communication failure. Specifically, we want the pump to continue running even if there is a communication fault, ensuring that operations are not disrupted. Despite trying various solutions provided by Siemens support, such as disabling watchdog features and enabling external fault settings linked with bus faults, we have not found a successful resolution. If anyone has encountered a similar challenge and has successfully addressed it, we would greatly appreciate any guidance. Thank you in advance for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Simocode is crucial for maintaining the command status in the event of communication faults. Thank you in advance for your assistance. When a communication fault occurs, is it between the HMI and the PLC, or between the PLC and the drive? While it seems unlikely for communication faults to occur between the PLC and the drive, I am open to correction from experts in motion technology. Join the forum to learn more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What occurs when attempting to deactivate non-redundant command mode? In this case, the system should await an "OFF" command rather than abruptly halting when the start signal decreases. It is essential to ensure that the Programmable Logic Controller (PLC) program incorporates ON and OFF bits for a smooth operation of the pump in typical scenarios.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>matsdin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting non-maintained command mode, consider disabling it and ensuring the PLC program utilizes both ON and OFF bits to control the pump. This will allow the pump to stop when an "OFF" command is received, rather than halting when the start signal goes low. Communication issues between the PLC and the motor can be resolved by ensuring proper communication is established. If you're interested, I can share the solution on the forum later. Thank you for the responses, everyone!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pisoj</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for sharing that you have found a solution to your problem. It's great to hear that everything is sorted out.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Pisoj mentioned that there was no issue with the normal ON-OFF function, as it was functioning correctly. He clarified that the communication loss problem occurred between the PLC and the motor, and not with the drive. The issue has been resolved, and if anyone is interested, he will share the solution on the forum. Thank you to everyone for the responses. Feel free to share the solution as we are experiencing the same problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gideon001</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I ensure that a pump controlled by SIMOCODE via PROFINET continues running even during communication failures?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To ensure that the pump continues running during communication failures, you may need to adjust settings related to watchdog features and external fault settings linked with bus faults. However, if these solutions have not been successful, further troubleshooting may be required.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What are some common troubleshooting steps for PROFINET communication issues with SIMOCODE pro V PN?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Common troubleshooting steps may include checking network configurations, verifying communication settings in the TIA Portal software, ensuring proper HMI functionality, and examining hardware connections for any issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a specific guide or resource from Siemens that provides detailed troubleshooting steps for maintaining command state during communication faults with SIMOCODE pro V PN?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Siemens may have specific guides or resources available that offer detailed troubleshooting steps for addressing communication faults and maintaining command state with SIMOCODE pro V PN. It is recommended to reach out to Siemens support or consult their documentation for further assistance.</p>
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
