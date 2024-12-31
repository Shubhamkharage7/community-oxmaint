
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am using a cell that features a compact GuardLogix PLC along with three HMIs and two VFDs. Lately, I have been encountering intermittent communication faults with one of the HMIs and periodically with both VFDs. I have confirmed that there are no IP address conflicts and that the">
    <meta name="keywords" content="troubleshooting hmi communication issues, vfd communication faults, guardlogix plc problems, compact guardlogix cell issues, intermittent communication faults, hmis and vfds faults, ip address conflicts, cell controller network conflicts">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-intermittent-communication-issues-with-hmi-and-vfds-in-compact-guardlogix-cell">
    <title>Troubleshooting Intermittent Communication Issues with HMI and VFDs in Compact GuardLogix Cell | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Intermittent Communication Issues with HMI and VFDs in Compact GuardLogix Cell | Oxmaint Community">
    <meta property="og:description" content="I am using a cell that features a compact GuardLogix PLC along with three HMIs and two VFDs. Lately, I have been encountering intermittent communication faults with one of the HMIs and periodically with both VFDs. I have confirmed that there are no IP address conflicts and that the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-intermittent-communication-issues-with-hmi-and-vfds-in-compact-guardlogix-cell">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Intermittent Communication Issues with HMI and VFDs in Compact GuardLogix Cell | Oxmaint Community">
    <meta name="twitter:description" content="I am using a cell that features a compact GuardLogix PLC along with three HMIs and two VFDs. Lately, I have been encountering intermittent communication faults with one of the HMIs and periodically with both VFDs. I have confirmed that there are no IP address conflicts and that the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-intermittent-communication-issues-with-hmi-and-vfds-in-compact-guardlogix-cell"
      },
      "headline": "Troubleshooting Intermittent Communication Issues with HMI and VFDs in Compact GuardLogix Cell",
      "description": "I am using a cell that features a compact GuardLogix PLC along with three HMIs and two VFDs. Lately, I have been encountering intermittent communication faults with one of the HMIs and periodically with both VFDs. I have confirmed that there are no IP address conflicts and that the",
      "author": {
        "@type": "Person",
        "name": "EmpireShallRise"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-12",
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
                <h1 class="text-white">Troubleshooting Intermittent Communication Issues with HMI and VFDs in Compact GuardLogix Cell</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>EmpireShallRise</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">424</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">153</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am using a cell that features a compact GuardLogix PLC along with three HMIs and two VFDs. Lately, I have been encountering intermittent communication faults with one of the HMIs and periodically with both VFDs. I have confirmed that there are no IP address conflicts and that the cell controller is not connected to our main network to prevent any conflicts. Additionally, I have checked all devices for power issues and found no conflicts there either. I am struggling to identify the root cause of these quick communication faults. Any advice or suggestions on how to troubleshoot this issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you share information about the network switch you are currently using and whether you have conducted any network monitoring? Have you observed any indication of lights flashing on the ports when communication issues arise? Can you identify the specific communication fault, such as an error code or any other relevant details?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SCADA_Joe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What methods have you used to detect IP conflicts? How often do dropoffs occur?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nova5</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>SCADA expert Joe inquired about the specifics of the network switch being utilized and whether any network monitoring has been conducted. Have you observed the ports' lights momentarily turning off when communication faults occur? Can you provide more details on the communication fault, such as an error code? Additionally, have there been any recent changes? Did the system function properly before without any issues? What is the RPI to the VFDs? Are CIP safety protocols being applied to the drives? Do you have safety IO in place?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>scarince</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It was functioning smoothly before, but the cabinet was messy and has since been reorganized for better troubleshooting. However, after the reorganization, some issues have arisen. I have already verified the IP addresses, ruling out that as the root cause. I have individually pinged all devices without detecting any conflicts with IP addresses. The drives do not have CIP safety protocols, but I do have safety I/O in place for emergency stops and gates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>EmpireShallRise</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for efficient ethernet cable placement in your cabinet and other areas? Do the cables come with a Shielded Twisted Pair (STP) rating?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The communication fault typically lasts for half a second before quickly resolving itself and clearing the error. The response time of the system is 250 milliseconds.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>EmpireShallRise</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The motor power cables lack shielding, exposing them to potential interference and electrical noise.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>EmpireShallRise</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to ethernet cables, I've learned from experience that using STP rated cables is essential for avoiding problems. Shielded VFD cables are a must for connecting motors due to the high levels of electrical noise they produce. This noise can disrupt static DC input signals and cause interference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I understand now. I was caught off guard because I have a setup with two halves, each with one line. Line 1 and Line 2 are similar, but Line 1 has additional conveyors and monitors. Despite Line 1 having more components, I never encounter communication faults on that line. The issue is with Line 2, where I am facing communication problems. I will try using stp cable for communication to see if that resolves the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>EmpireShallRise</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you attempted to isolate one of the faulty devices and ping it to determine its stability?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nova5</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are some common causes of intermittent communication faults between HMIs and VFDs in a compact GuardLogix cell?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Common causes can include issues such as network interference, incorrect settings, faulty cables, software glitches, or even hardware malfunctions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot intermittent communication issues between HMIs and VFDs in a compact GuardLogix cell?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Start by checking for IP address conflicts, power issues, network interference, and ensuring proper configuration settings. You may also want to inspect cables and connections for any physical damage.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I prevent intermittent communication faults between HMIs and VFDs in a compact GuardLogix cell?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To prevent such issues, make sure to regularly update firmware and software, follow best practices for network segmentation, use shielded cables, and conduct periodic maintenance checks on all devices involved in the communication network.</p>
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
