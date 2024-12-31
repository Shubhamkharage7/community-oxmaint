
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The 1747-L541 processor requires a program to be loaded into the PLC. However, when attempting to download the program via DF1, there is a warning that communication may be disrupted. The PLC communicates with a Panelview 600 via DH+. Upon clicking Apply changes, communication is lost and the backup">
    <meta name="keywords" content="slc504 communication issues, troubleshooting df1 and dh+ networks, 1747-l541 processor communication problems, plc communication errors, panelview 600 dh+ communication, backup">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-slc504-communication-issues-with-df1-and-dh-networks">
    <title>Troubleshooting SLC504 Communication Issues with DF1 and DH+ Networks | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting SLC504 Communication Issues with DF1 and DH+ Networks | Oxmaint Community">
    <meta property="og:description" content="The 1747-L541 processor requires a program to be loaded into the PLC. However, when attempting to download the program via DF1, there is a warning that communication may be disrupted. The PLC communicates with a Panelview 600 via DH+. Upon clicking Apply changes, communication is lost and the backup">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-slc504-communication-issues-with-df1-and-dh-networks">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting SLC504 Communication Issues with DF1 and DH+ Networks | Oxmaint Community">
    <meta name="twitter:description" content="The 1747-L541 processor requires a program to be loaded into the PLC. However, when attempting to download the program via DF1, there is a warning that communication may be disrupted. The PLC communicates with a Panelview 600 via DH+. Upon clicking Apply changes, communication is lost and the backup">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-slc504-communication-issues-with-df1-and-dh-networks"
      },
      "headline": "Troubleshooting SLC504 Communication Issues with DF1 and DH+ Networks",
      "description": "The 1747-L541 processor requires a program to be loaded into the PLC. However, when attempting to download the program via DF1, there is a warning that communication may be disrupted. The PLC communicates with a Panelview 600 via DH+. Upon clicking Apply changes, communication is lost and the backup",
      "author": {
        "@type": "Person",
        "name": "ThomasGruetter"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-29",
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
                <h1 class="text-white">Troubleshooting SLC504 Communication Issues with DF1 and DH+ Networks</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">910</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">262</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>The 1747-L541 processor requires a program to be loaded into the PLC. However, when attempting to download the program via DF1, there is a warning that communication may be disrupted. The PLC communicates with a Panelview 600 via DH+. Upon clicking "Apply changes," communication is lost and the backup capacitor must be drained to reset the unit. Avoiding clicking "Apply changes" during the next download and then adjusting the DH+ address node online still resulted in communication loss via DF1. Screenshots are provided for reference. Is it possible to connect to different nodes on the network via DH+? None of the PLCs on the network are accessible via DF1.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Inspect the serial ports settings within RSLogix, the software in which you are transferring the program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mickey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While examining the serial configuration settings, the only difference I noticed was that my initial program has a baud rate higher than the default setting. I came across a helpful tip in a post from 2003 suggesting to go online with the SLC in Rslogix500. By opening the program, accessing the comm settings, and selecting Who Active to go online, I was able to connect with the processor and save the project. However, I encountered an issue as the PLC wanted to establish a connection via DH+ instead.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While reading through other discussions, I discovered that bits S:34/0 and S:34/5 in my program were set to 1, which was unfamiliar to me. I made the necessary adjustments by changing them to 0 and then downloading the program. As a result, it now autoconfigures to SLC-CH0 without any issues. However, I am unsure about how to connect or upload to other PLCs on the DH+ network. I plan to experiment with the pass-through function using the KF-2 device in RSLinx to see if that will allow me to establish a connection. Perhaps the engineer who set up this system initially used a similar method to connect to the PLCs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ThomasGruetter noted that the only difference in the serial configuration is the higher baud rate in the original program compared to the default setting. This seems to be the root of the issue. To resolve it, adjust the offline program's serial configuration to align with your current connection. Alternatively, you can download the original program and set up the new connection in RSLinx by configuring the driver.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Recently, I encountered an issue while trying to connect to my SLC504 PLC. After downloading the program with specific settings, I lost communication on DF1-SLC-CH0. Despite closing Linx and reopening without drivers, I still couldn't establish a connection with Device 1770-KF2. It seems that setting the two bits to 1 is necessary, but I'm facing issues with my drivers. It's important to note that there is no DH+ network, only one processor in my test rack. Despite these challenges, I expect to successfully connect to my SLC504.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ThomasGruetter</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I experiencing communication loss when trying to download a program to the 1747-L541 processor via DF1?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Communication loss during the download process could be due to potential disruptions in the DF1 communication protocol. It's important to troubleshoot the DF1 settings and ensure they are correctly configured.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I prevent communication disruptions when adjusting the DH+ address node online?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To avoid communication loss when adjusting the DH+ address node online, make sure to carefully follow the proper sequence of steps and confirm the settings are correct. Additionally, consider checking for any conflicting configurations that might be causing the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can I connect to different nodes on the network via DH+ to resolve communication issues?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to connect to different nodes on the network via DH+ to troubleshoot and resolve communication issues. Make sure to verify the network topology, node addresses, and communication settings to ensure successful connections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Why are none of the PLCs on the network accessible via DF1?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The inability to access PLCs on the network via DF1 could indicate issues with the DF1 configuration, network setup, or compatibility. Verify the DF1 settings, network connections, and PLC compatibility to address this accessibility issue.</p>
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
