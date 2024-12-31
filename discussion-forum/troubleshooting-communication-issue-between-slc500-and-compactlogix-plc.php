
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Last night at my workplace, we experienced a critical issue with a machine controlled by a SLC500. This machine, which is an oxidizer used to burn off solvent gases from printing presses, relies on a common PLC (Compactlogix) to receive an enable signal. The Compactlogix PLC receives inputs from">
    <meta name="keywords" content="slc500, compactlogix plc, communication issue, troubleshooting, oxidizer machine, solvent gases, printing presses, common plc, serial to ethernet adapter, malfunctioning gas valve, shutdown, okay to start signal, stuck inputs, cycling key">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-between-slc500-and-compactlogix-plc">
    <title>Troubleshooting Communication Issue Between SLC500 and Compactlogix PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issue Between SLC500 and Compactlogix PLC | Oxmaint Community">
    <meta property="og:description" content="Last night at my workplace, we experienced a critical issue with a machine controlled by a SLC500. This machine, which is an oxidizer used to burn off solvent gases from printing presses, relies on a common PLC (Compactlogix) to receive an enable signal. The Compactlogix PLC receives inputs from">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-between-slc500-and-compactlogix-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issue Between SLC500 and Compactlogix PLC | Oxmaint Community">
    <meta name="twitter:description" content="Last night at my workplace, we experienced a critical issue with a machine controlled by a SLC500. This machine, which is an oxidizer used to burn off solvent gases from printing presses, relies on a common PLC (Compactlogix) to receive an enable signal. The Compactlogix PLC receives inputs from">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issue-between-slc500-and-compactlogix-plc"
      },
      "headline": "Troubleshooting Communication Issue Between SLC500 and Compactlogix PLC",
      "description": "Last night at my workplace, we experienced a critical issue with a machine controlled by a SLC500. This machine, which is an oxidizer used to burn off solvent gases from printing presses, relies on a common PLC (Compactlogix) to receive an enable signal. The Compactlogix PLC receives inputs from",
      "author": {
        "@type": "Person",
        "name": "Jmccoy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-13",
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
                <h1 class="text-white">Troubleshooting Communication Issue Between SLC500 and Compactlogix PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jmccoy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">274</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">192</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Last night at my workplace, we experienced a critical issue with a machine controlled by a SLC500. This machine, which is an oxidizer used to burn off solvent gases from printing presses, relies on a "common PLC" (Compactlogix) to receive an enable signal. The Compactlogix PLC receives inputs from the SLC500 through a serial to Ethernet adapter and then sends an "okay to start" signal to each press. However, a malfunctioning gas valve on the SLC500 caused it to shut down while the other machines continued to operate due to the outputs from the Compactlogix. It appears that the communication between the SLC500 and Compactlogix froze, resulting in the inputs being stuck in the ON position. After cycling the key on the Compactlogix PLC, the inputs from the SLC updated and turned off. Have you encountered a similar issue before? If so, what steps would you recommend taking? I have not been able to replicate the problem, and this system has been in place for several years.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Has anyone experienced a similar issue as described by Jmccoy? What steps would you recommend taking in such a situation? While I have not been able to replicate the issue before, it is important to look into the concept of a "handshake" in PLCs. This involves setting up a timer to pass information between PLCs, triggering an alarm if a response is not received within a set timeframe. This can be useful in detecting issues and potentially stopping processes if necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I greatly appreciate your help, which has given me a fresh perspective on our system's issues. Our alarm for Communication loss was triggered a few weeks ago, but it went unnoticed as everything seemed to be functioning smoothly. Moving forward, I plan to incorporate this fault output into our system logic to prevent any similar incidents. Additionally, I am considering upgrading to a compactlogix processor as a precaution, given the recent Communication fault with the SLC system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmccoy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If issues persist, it is essential to meticulously craft the logic and ensure it is executed correctly. By doing so, you will be better equipped to pinpoint any underlying problems. Please keep us informed of your findings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user, geniusintraining, suggested not making any changes to the current logic and recommended re-evaluating it. They emphasized the importance of accurately writing the logic to diagnose any issues that may arise in the future. The user expressed gratitude for the assistance and planned to update the logic the following day to test for any failures. They promised to share any discoveries in the thread.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmccoy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You are welcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the communication issue between the SLC500 and Compactlogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> The issue could stem from various factors such as a malfunctioning gas valve, a freeze in communication between the two PLCs, or a problem with the serial to Ethernet adapter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot a communication problem between the SLC500 and Compactlogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> To troubleshoot the issue, you can try power cycling both PLCs, checking the serial to Ethernet adapter, verifying the communication settings, and ensuring that the wiring connections are secure.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I prevent a similar communication breakdown in the future?</h4>
<p class='text-muted'><strong>Answer:</strong> To prevent such issues, regularly inspect and maintain the equipment, monitor communication logs for any anomalies, conduct periodic testing of the system, and consider implementing redundancy or backup communication methods.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What steps can be taken if the inputs from the SLC500 PLC are stuck in the ON position?</h4>
<p class='text-muted'><strong>Answer:</strong> If the inputs are stuck, you can try cycling the key on the Compactlogix PLC to force an update of the inputs. Additionally, checking the programming logic and addressing any faults in the system may help resolve the issue.</p>
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
