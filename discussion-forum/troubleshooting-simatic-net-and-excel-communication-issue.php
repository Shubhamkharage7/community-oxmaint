
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am unsure if this is the appropriate forum for my inquiry, but I will proceed. The company currently utilizes an outdated Windows 98 computer as the main machine. We are looking to upgrade to Windows XP to facilitate hardware replacement, as sourcing Windows 98 hardware has become increasingly">
    <meta name="keywords" content="simatic net, excel communication, troubleshooting, windows 98, windows xp, hardware replacement, excel spreadsheet, simatic net cp 5611, s7data, debug menu, data logging card, cp5621, cp5611, micro">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-simatic-net-and-excel-communication-issue">
    <title>Troubleshooting Simatic Net and Excel Communication Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Simatic Net and Excel Communication Issue | Oxmaint Community">
    <meta property="og:description" content="I am unsure if this is the appropriate forum for my inquiry, but I will proceed. The company currently utilizes an outdated Windows 98 computer as the main machine. We are looking to upgrade to Windows XP to facilitate hardware replacement, as sourcing Windows 98 hardware has become increasingly">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-simatic-net-and-excel-communication-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Simatic Net and Excel Communication Issue | Oxmaint Community">
    <meta name="twitter:description" content="I am unsure if this is the appropriate forum for my inquiry, but I will proceed. The company currently utilizes an outdated Windows 98 computer as the main machine. We are looking to upgrade to Windows XP to facilitate hardware replacement, as sourcing Windows 98 hardware has become increasingly">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-simatic-net-and-excel-communication-issue"
      },
      "headline": "Troubleshooting Simatic Net and Excel Communication Issue",
      "description": "I am unsure if this is the appropriate forum for my inquiry, but I will proceed. The company currently utilizes an outdated Windows 98 computer as the main machine. We are looking to upgrade to Windows XP to facilitate hardware replacement, as sourcing Windows 98 hardware has become increasingly",
      "author": {
        "@type": "Person",
        "name": "MR.Q"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-03",
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
                <h1 class="text-white">Troubleshooting Simatic Net and Excel Communication Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MR.Q</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">900</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">380</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am unsure if this is the appropriate forum for my inquiry, but I will proceed. The company currently utilizes an outdated Windows 98 computer as the main machine. We are looking to upgrade to Windows XP to facilitate hardware replacement, as sourcing Windows 98 hardware has become increasingly difficult. This computer houses an Excel spreadsheet that communicates with the entire network using a Simatic Net CP 5611. While I have successfully configured Excel to connect to S7data, I encountered a sudden crash upon attempting to access the debug menu. It appears that Excel is unable to communicate with the cp5621 data logging card, posing a significant issue. Despite configuring it similarly to our Master machine, which is set as ''micro/win cp5611 PPI,'' there seems to be a discrepancy between the cp5611 and cp5621 on XP, as the latter appears as a 5611. Can anyone shed light on this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are using a Windows 98 machine, chances are you have the SIMATIC NET OPC Server installed, with Excel acting as the OPC Client, and the Micro/Win CP5611 PPI facilitating communication with S7-200 PLCs. How many S7-200 PLCs are currently in use? It is recommended to upgrade to S7-1200 PLCs (featuring built-in Ethernet) instead. Upgrading your computer to a modern Windows 10/11 system should not pose any issues with Simatic NET and Excel compatibility. The CP5621 is believed to be compatible with the CP5611 in terms of Simatic NET (OPC) configuration. Please share your Excel file and SIMATIC NCM PC project with me. To archive the project, use NCM PC Manager to create a zip file by navigating to File -> Archive.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sigmadelta</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the case of your Windows 98 system, it's probable that the SIMATIC NET OPC Server is installed, with Excel serving as the OPC Client, and the Micro/Win CP5611 PPI facilitating communication with S7-200 PLCs. Considering an upgrade to S7-1200 PLCs (featuring built-in Ethernet) would be ideal at this point. Transitioning to a more current Windows 10/11 computer should pose no issues for Simatic NET and Excel. The CP5621 likely offers compatibility with the CP5611 for Simatic NET (OPC) configuration.

If you could provide your Excel file and SIMATIC NCM PC project, it would be greatly appreciated. To archive the project using NCM PC Manager, simply navigate to File -> Archive to create a zip file. It appears there are some unexpected developments, and I may have overlooked certain aspects previously. Can you offer guidance on locating the NCM project file, as our machine's sensitivity warrants caution to avoid mishaps due to limited backups?

With a network predominantly using S7-200s, housing 4 CPUs and 2 HMIs, I can share the Excel files available, although the SIMATIC NCM is currently inaccessible. Fortunately, off-site backups of the complete system are stored on multiple drives, although they are not bootable. If the necessary file can be located within these backups, it would be a significant success.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MR.Q</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have off-site backups of the complete operating system stored across several drives, though I am unable to boot from them. Being able to access the files within would be a major victory. If there is a method to share the entire PC backup with me, it would greatly simplify things.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sigmadelta</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User sigmadelta expressed a desire for the entire PC backup to be sent to them, stating it would make things much simpler. I am able to send the complete drive in a compressed WinRAR file, which is 1.85gb in size. Please let me know if I should use your business email address or if you prefer to provide a personal email via private message. This process will make it easier for you to access the backup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MR.Q</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Feel free to reach out to me via my professional email at [email protected] For secure file sharing, you can send the necessary documents through popular cloud storage services like Dropbox or Google Drive. I am well-versed in using both platforms for seamless communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sigmadelta</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What is the issue with Excel communication using Simatic Net CP 5611 on Windows XP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue seems to be a discrepancy in communication between Excel and the data logging card CP 5621 on Windows XP, where the CP 5621 appears as a 5611.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can I resolve the sudden crash in Excel when attempting to access the debug menu?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve the crash issue, it might be necessary to troubleshoot the communication setup between Excel and the Simatic Net CP 5611/CP 5621, ensuring proper configuration and compatibility.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Why is there a problem with Excel communicating with the CP 5621 data logging card on Windows XP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue might be related to the configuration and compatibility differences between the CP 5611 and CP 5621 on Windows XP, leading to communication issues in Excel.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: How can I configure Excel to connect to S7data using the Simatic Net CP 5611/CP 5621 on Windows XP?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Properly configuring Excel to connect to S7data involves ensuring compatibility and correct settings for the CP 5611/CP 5621 on Windows XP, which might require additional troubleshooting steps.</p>
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
