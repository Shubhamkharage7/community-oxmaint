
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, We have a client who needs to synchronize the time on approximately 10 PLCs, primarily 1756-L82 models running firmware version 32.014. The clients central time server is capable of broadcasting time using NTP (Network Time Protocol) and possibly PTP. However, there are concerns about PTP causing excessive network">
    <meta name="keywords" content="time synchronization for controllogix plcs, controllogix plc time management, ptp technology for plc time sync, minimizing network traffic with ptp, efficient time sync solutions for plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/efficient-time-synchronization-for-controllogix-plcs-minimizing-network-traffic-with-ptp-technology">
    <title>Efficient Time Synchronization for ControlLogix PLCs: Minimizing Network Traffic with PTP Technology | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Efficient Time Synchronization for ControlLogix PLCs: Minimizing Network Traffic with PTP Technology | Oxmaint Community">
    <meta property="og:description" content="Greetings, We have a client who needs to synchronize the time on approximately 10 PLCs, primarily 1756-L82 models running firmware version 32.014. The clients central time server is capable of broadcasting time using NTP (Network Time Protocol) and possibly PTP. However, there are concerns about PTP causing excessive network">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/efficient-time-synchronization-for-controllogix-plcs-minimizing-network-traffic-with-ptp-technology">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Efficient Time Synchronization for ControlLogix PLCs: Minimizing Network Traffic with PTP Technology | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, We have a client who needs to synchronize the time on approximately 10 PLCs, primarily 1756-L82 models running firmware version 32.014. The clients central time server is capable of broadcasting time using NTP (Network Time Protocol) and possibly PTP. However, there are concerns about PTP causing excessive network">
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
        "@id": "https://community.oxmaint.com/discussion-forum/efficient-time-synchronization-for-controllogix-plcs-minimizing-network-traffic-with-ptp-technology"
      },
      "headline": "Efficient Time Synchronization for ControlLogix PLCs: Minimizing Network Traffic with PTP Technology",
      "description": "Greetings, We have a client who needs to synchronize the time on approximately 10 PLCs, primarily 1756-L82 models running firmware version 32.014. The clients central time server is capable of broadcasting time using NTP (Network Time Protocol) and possibly PTP. However, there are concerns about PTP causing excessive network",
      "author": {
        "@type": "Person",
        "name": "slick_william"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-11",
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
                <h1 class="text-white">Efficient Time Synchronization for ControlLogix PLCs: Minimizing Network Traffic with PTP Technology</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>slick_william</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2839</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">190</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings,

We have a client who needs to synchronize the time on approximately 10 PLCs, primarily 1756-L82 models running firmware version 32.014. The client's central time server is capable of broadcasting time using NTP (Network Time Protocol) and possibly PTP. However, there are concerns about PTP causing excessive network traffic due to frequent time updates.

Although the 1756-TIME module is an option, the client prefers to communicate directly with the time server without purchasing additional equipment. Is it feasible for the time server to respond to PTP time requests and sync the PLCs accordingly? One potential solution is to have a master PLC query the time server and then instruct the other PLCs to sync their time accordingly.

If using PTP, is it possible to schedule time synchronization instead of constant syncing? For example, initiating a time sync only at specific times (e.g., 8 am) to minimize network traffic.

Alternatively, would it be more practical to invest in the 1756-TIME module despite its cost? Despite its high price tag, the module simplifies the time synchronization process.

Thank you for your input.

Best regards,
Slick</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>PTP traffic is not a major traffic concern, as participating nodes regularly update to minimize drift and skew. Using periodic messaging would go against the protocol's purpose of ensuring accurate timing synchronization. To prioritize a specific grandmaster, its Priority 1 should be set lower than others, with Priority 2 used as a tie-breaker if needed. NTP can be implemented through controllers' Socket CIP object, with available sample code for assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Can these controllers support CIP Motion applications over Ethernet? How important is synchronization between them? Is it possible for the customer to use the Logix 5000 Clock Sync Tool on a server to regularly update the Wall Clock Time?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the purpose of aligning the times across various controllers? I typically steer clear of manual or external time synchronization in systems utilizing CIP motion over Ethernet. Nevertheless, having a real-time clock is advantageous for displaying and alarming functions. Thus, I opt to utilize my SCADA system to input the current date/time into designated tags on each PLC. This enables the HMI (PanelView Plus 6/7) to periodically synchronize with these tags for accurate clock updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aawilliams85</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you all for the helpful information. The goal is to achieve precise synchronization among all target PLCs in the water and wastewater process, with minimal skew. While exact synchronization may not be necessary in this case, it is still important to coordinate them within a few seconds of each other.

Based on the feedback received, I am inclined towards using NTP in conjunction with a socket CIP object, as suggested by one commenter. I was under the impression that this synchronization could only be achieved with the 1756-TIME module, but I will further investigate this on my end. Utilizing their existing NTP server for the synchronization process would be the ideal solution.

In response to Ken's suggestion, the Clock Sync tool may be suitable if it can sync with the current NTP server. Thank you all once again for your input. We will be in touch soon.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>slick_william</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Ken's suggestion, I believe that the Clock Sync Tool could be effective in synchronizing with an NTP server. However, it is important to note that the Clock Sync Tool is no longer supported. While it may still be possible to download and install it, there will be no technical support available. The reason for the lack of support is due to potential security risks associated with its operation.

In the past, we utilized the Clock Sync Tool on our Dev station with scheduled syncs in place. It was a reliable tool for maintaining time synchronization for alarming and logging purposes. However, after transitioning our Dev machine to a Windows 10 environment, we experienced issues with the tool's functionality. Unfortunately, Rockwell no longer provides support for this tool. As a result, we now manually sync our systems twice a year during DST changes or as needed by operators.

I have limited experience with alternative solutions for time synchronization, but I encourage you to continue researching. In my experience, my plant did not prioritize investing in time synchronization solutions. Best of luck in finding a suitable option for your needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James42005</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are facing difficulties syncing the time on multiple PLCs from a server, I have discovered a solution using Rockwell Software that does not require a license. Simply install 6.4 FT Services and 1.0 FT Action Manager on the server connected to the PLCs. Define the connection path in FT Linx (IP) and create a Trigger (Time Interval) and Action (Wall Clock) in FT Action Manager, linking them with a Task. Although the process is straightforward, there may be a need for one reboot during installation. This solution operates as a service and can greatly simplify time synchronization for PLCs. We hope this information proves helpful in addressing your syncing challenges.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rayman_7676</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can a time server respond to PTP time requests to synchronize multiple PLCs directly without additional equipment?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is feasible for a time server capable of broadcasting time using PTP to respond to time requests and sync multiple PLCs without requiring additional equipment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to schedule time synchronization using PTP to minimize network traffic?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to schedule time synchronization with PTP, allowing for specific times to initiate time syncs (e.g., 8 am) to reduce network traffic from constant syncing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Would investing in the 1756-TIME module simplify the time synchronization process despite its cost?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, investing in the 1756-TIME module would simplify the time synchronization process, even though it comes with a higher price tag.</p>
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
