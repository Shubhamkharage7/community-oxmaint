
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently troubleshooting an issue with a Legacy Hydromat machine that is controlled by a GE 90-30 system with a 372 Plus CPU featuring two 10/100mB ports. I have connected my laptop to the machine using an ethernet cable and successfully pinged the device. Despite setting">
    <meta name="keywords" content="legacy hydromat machine, ge 90-30 system, 372 plus cpu, proficy machine edition 6, connectivity issue, troubleshooting, ethernet connection, ip address, online connection, windows 10 workstation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-with-legacy-hydromat-machine-controlled-by-ge-90-30-system-using-proficy-machine-edition-8-6">
    <title>Troubleshooting connectivity issue with Legacy Hydromat Machine controlled by GE 90-30 system using Proficy Machine Edition 8.6 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting connectivity issue with Legacy Hydromat Machine controlled by GE 90-30 system using Proficy Machine Edition 8.6 | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently troubleshooting an issue with a Legacy Hydromat machine that is controlled by a GE 90-30 system with a 372 Plus CPU featuring two 10/100mB ports. I have connected my laptop to the machine using an ethernet cable and successfully pinged the device. Despite setting">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-with-legacy-hydromat-machine-controlled-by-ge-90-30-system-using-proficy-machine-edition-8-6">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting connectivity issue with Legacy Hydromat Machine controlled by GE 90-30 system using Proficy Machine Edition 8.6 | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently troubleshooting an issue with a Legacy Hydromat machine that is controlled by a GE 90-30 system with a 372 Plus CPU featuring two 10/100mB ports. I have connected my laptop to the machine using an ethernet cable and successfully pinged the device. Despite setting">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issue-with-legacy-hydromat-machine-controlled-by-ge-90-30-system-using-proficy-machine-edition-8-6"
      },
      "headline": "Troubleshooting connectivity issue with Legacy Hydromat Machine controlled by GE 90-30 system using Proficy Machine Edition 8.6",
      "description": "Hello everyone, I am currently troubleshooting an issue with a Legacy Hydromat machine that is controlled by a GE 90-30 system with a 372 Plus CPU featuring two 10/100mB ports. I have connected my laptop to the machine using an ethernet cable and successfully pinged the device. Despite setting",
      "author": {
        "@type": "Person",
        "name": "mynameisclaimed"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-04",
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
                <h1 class="text-white">Troubleshooting connectivity issue with Legacy Hydromat Machine controlled by GE 90-30 system using Proficy Machine Edition 8.6</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mynameisclaimed</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">197</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">180</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently troubleshooting an issue with a Legacy Hydromat machine that is controlled by a GE 90-30 system with a 372 Plus CPU featuring two 10/100mB ports. I have connected my laptop to the machine using an ethernet cable and successfully pinged the device. Despite setting the IP address in the properties window of a blank project created in Proficy Machine Edition 8.6, I am unable to establish an online connection for uploading data from the machine. I suspect that the compatibility issue may lie with my Windows 10 workstation. Can anyone provide insight or suggestions on how to resolve this connectivity problem?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems your suspicion is valid. Version 9.5 was officially certified as Windows 10-compatible. When setting up the blank project, did you switch to a CPU372 from the default CPU374 selection? While uncertain if a mismatch could hinder communication, it's worth checking.I have configured the IP address in the properties window as well. To clarify, did you modify the Physical Port setting from COM to Ethernet and input the CPU372's IP address after right-clicking on the target with the CPU372?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I understood the issue with model 364 settings and have corrected it. I will now input the IP address as advised in the right-click menu. Thank you, Steve, I will update you shortly with the outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mynameisclaimed</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe the issue lies in the compatibility of Windows, thank you for assisting me with this problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mynameisclaimed</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I've successfully managed to access the internet and transfer files using 90-30 systems on Windows 10 using Proficy 2.2, despite it not being officially endorsed. It's likely that version 8.6 has a unique problem, which I have no experience with. Upgrading to a newer version of Machine Edition or running 8.6 on Windows 7 may yield more favorable outcomes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arcticlynx</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you experimented with serial data communication via the power supply port? Explore this innovative technology to enhance your system's connectivity and functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
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
            <p>Greetings everyone, I managed to borrow a workstation with updated firmware, which resolved the versioning issue I was experiencing. While I didn't attempt to use a serial, I will keep it in mind for future reference. Many thanks for your assistance, the machine is now operating much more efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mynameisclaimed</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I troubleshoot connectivity issues between a Legacy Hydromat machine and a GE 90-30 system using Proficy Machine Edition 8.6?</h4>
<p class='text-muted'><strong>Answer:</strong> First, ensure proper physical connection via ethernet cable and check if you can ping the device successfully. Verify IP address settings in Proficy Machine Edition 8.6 and ensure compatibility with your Windows 10 workstation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I have set the IP address in Proficy Machine Edition 8.6, but still cannot establish an online connection with the machine. What could be the possible reasons for this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Check for any firewall or antivirus settings blocking the connection. Ensure the correct IP configuration and network settings are used. Verify compatibility between the software versions and the operating system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take to resolve compatibility issues between a Windows 10 workstation and a Legacy Hydromat machine controlled by a GE 90-30 system?</h4>
<p class='text-muted'><strong>Answer:</strong> Update the necessary drivers for the communication ports on the Windows 10 workstation. Ensure that the software versions and firmware of the machine are compatible with the operating system. Consider using compatibility mode or virtual machines if needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  I suspect a compatibility issue between my Windows 10 workstation and the Legacy Hydromat machine. How can I further diagnose and troubleshoot this problem?</h4>
<p class='text-muted'><strong>Answer:</strong> Try connecting the machine to a</p>
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
