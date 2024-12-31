
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello! I am currently working with a client who has a S7300 system manufactured around 2013. They have approximately 25 inverters, 3 DP to DP converters, and 5 IM153 remote I/O units all connected on a Profibus network. The client is interested in upgrading the inverter communications first, followed">
    <meta name="keywords" content="upgrade inverter communications, profibus to profinet, siemens cp343, s7300 system, inverters, dp to dp converters, im153 remote i/o units, profibus network, obsolete profibus cards, cp343">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/upgrade-inverter-communications-from-profibus-to-profinet-with-siemens-cp343-transitioning-to-profinet-on-s7300-system">
    <title>Upgrade Inverter Communications from Profibus to Profinet with Siemens CP343: Transitioning to Profinet on S7300 System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Upgrade Inverter Communications from Profibus to Profinet with Siemens CP343: Transitioning to Profinet on S7300 System | Oxmaint Community">
    <meta property="og:description" content="Hello! I am currently working with a client who has a S7300 system manufactured around 2013. They have approximately 25 inverters, 3 DP to DP converters, and 5 IM153 remote I/O units all connected on a Profibus network. The client is interested in upgrading the inverter communications first, followed">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/upgrade-inverter-communications-from-profibus-to-profinet-with-siemens-cp343-transitioning-to-profinet-on-s7300-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Upgrade Inverter Communications from Profibus to Profinet with Siemens CP343: Transitioning to Profinet on S7300 System | Oxmaint Community">
    <meta name="twitter:description" content="Hello! I am currently working with a client who has a S7300 system manufactured around 2013. They have approximately 25 inverters, 3 DP to DP converters, and 5 IM153 remote I/O units all connected on a Profibus network. The client is interested in upgrading the inverter communications first, followed">
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
        "@id": "https://community.oxmaint.com/discussion-forum/upgrade-inverter-communications-from-profibus-to-profinet-with-siemens-cp343-transitioning-to-profinet-on-s7300-system"
      },
      "headline": "Upgrade Inverter Communications from Profibus to Profinet with Siemens CP343: Transitioning to Profinet on S7300 System",
      "description": "Hello! I am currently working with a client who has a S7300 system manufactured around 2013. They have approximately 25 inverters, 3 DP to DP converters, and 5 IM153 remote I/O units all connected on a Profibus network. The client is interested in upgrading the inverter communications first, followed",
      "author": {
        "@type": "Person",
        "name": "Blue Fox"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-13",
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
                <h1 class="text-white">Upgrade Inverter Communications from Profibus to Profinet with Siemens CP343: Transitioning to Profinet on S7300 System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Blue Fox</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">525</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">244</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello! I am currently working with a client who has a S7300 system manufactured around 2013. They have approximately 25 inverters, 3 DP to DP converters, and 5 IM153 remote I/O units all connected on a Profibus network. The client is interested in upgrading the inverter communications first, followed by transitioning to Profinet next year. The need to upgrade the inverter communications is primarily because the existing Profibus cards are becoming obsolete.

Currently, the site utilizes a CP343 unit to interface with a SCADA server. I am considering using this unit as a Profinet connection to the inverters. The CP343 unit has 2 ports, with one currently unused. I would like to connect directly from the CP343 to a single inverter initially, and then expand to using an unmanaged switch to connect to all the inverters and I/O units in the system.

The inverters with Profinet cards have 2 ports, allowing for a daisy chain connection. I would appreciate any advice on this transition, as I have experience with Profinet on S7 1500's and S7 1200's but not on an older S7 300 system. Thank you for any assistance you can provide!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In my opinion, it would be beneficial to upgrade the older 300 CPU to a 31x-2 DP/PN version and connect the new Profinet drives to the PN port of the CPU. This allows for the DP network to remain while gradually transitioning DP devices to the PN port. It's important to note that the CP343 (specific models serve as Profinet I/O controllers) requires specific send and receive blocks for IO control. It is likely that drive blocks will need to be reconfigured when using a CP343, based on my own experience. I look forward to hearing other perspectives on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JRW</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure that the CP343 model you choose is capable of functioning as a profinet controller to avoid any compatibility issues. If the CP343-300 model features an integrated PN interface, profinet will operate smoothly. If not, additional steps will be needed to establish communication between the CPU and CP for reading/writing IO. While this process may require some extra effort, data transfer between the devices can introduce potential errors, as the CP may operate on its own run/stop functionality. Additionally, the S7-300 backplane speed is notably slower than an ethernet connection, potentially leading to unexpected delays.

The configuration steps for setting up a PN network remain consistent whether working with the S7-300 or S7-1500. By assigning device names, downloading the PLC program, and ensuring compatibility, seamless communication should be established between the devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my opinion, it would be beneficial to upgrade from the older 300 CPU to a 31x-2 DP/PN version. By connecting the new Profinet drives to the PN port of the CPU, the existing DP network can remain in place while gradually transitioning DP devices to the PN port as well. Upgrading to a PN CPU can greatly streamline operations, especially when dealing with servos.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello. I concur with the endorsement from JRW and mk42. I possess a CP343, which serves as a unique PROFINET master from the early stages of its development. I predominantly utilize it for programming purposes. However, I have encountered issues with compatibility and functionality when connecting it with various PROFINET IO devices. Another option to consider is integrating a Hilscher product that acts as a PROFIBUS slave and PROFINET IO master. By doing so, your S7-300 will recognize an additional PROFIBUS DP slave, and the 50-DP-EN will facilitate the PROFINET IO communication. This could potentially provide a cost-effective alternative to acquiring a 31x-2 DP/PN module. Best of luck with your project. Check out Hilscher's NT 50-DP-EN for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As the S7-300 series is being phased out, upgrading to a CPU 3xx DP/PN version is not recommended. It is advisable to transition to a more advanced S7-1500 based system for enhanced performance and reliability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>According to L D[AR2P#0.0], the S7-300 series is being phased out, making it necessary to consider upgrading to an S7-1500 system. Switching to a PN 300 model could be a cost-effective solution that bridges the gap between using a new CP for IO operations and undergoing a complete migration to the S7-1500 platform. However, it should be noted that this transition does not address any product lifecycle concerns that may arise.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recommend upgrading to a 31x-2PN/DP for a seamless transition from DP to PN in gradual steps, while keeping the CP343 for the SCADA connection. It is worth considering migration to the S7-1500 series, although this will require more effort and an update to the SCADA system due to changed connection and process tags. When deciding between S7-300 and S7-1500, consider the expected plant lifetime - if it exceeds 5 years, opt for the S7-1500 solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are two ways to upgrade your system: 1) Upgrade using a 31x-2PN/DP without any issues, but keep in mind the limited lifespan of the S7-300 and the lower speed of 187.5 kBd between the CPU and CP card due to the backbone bus. 2) Upgrade to a S7-1500 CPU with 2 ports and utilize the IE/PB link (PN IO gateway connecting Industrial Ethernet and PROFIBUS) with order number 6GK1411-5AB10I have successfully implemented solution 2 for a client and the transition was seamless. We now operate on the S7-1500 CPU platform (CPU 1516) without changing the IO cards or rewiring, thanks to placing the IO card of the CPU and remote I/O racks on ET 200M IM 153-4 PN on Profinet. Additionally, the DP to DP converters can be replaced with the IE/PB link, allowing one side to be Profinet and the other side to be Profibus.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JERA</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is there a need to upgrade the inverter communications from Profibus to Profinet in the S7300 system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The need to upgrade the inverter communications is primarily due to the existing Profibus cards becoming obsolete.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can the CP343 unit be utilized for transitioning to Profinet in the S7300 system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The CP343 unit can be used as a Profinet connection to the inverters by utilizing its 2 ports, with one currently unused.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can the CP343 unit be connected directly to a single inverter initially before expanding to connect to all inverters and I/O units in the system using an unmanaged switch?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the CP343 unit can be connected directly to a single inverter initially and then expanded to connect to all the inverters and I/O units in the system using an unmanaged switch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What is the configuration like for the inverters with Profinet cards that have 2 ports allowing for a daisy chain connection?</h4>
<p class='text-muted'><strong>Answer:</strong> - The inverters with Profinet cards have 2 ports, which allows for a daisy chain connection to facilitate communication within the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Is it possible to offer advice on transitioning to Profinet on an older S7 300 system for someone with experience on Profinet in newer systems like S7 1500 and S7 1200?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, advice can be provided on transitioning to Profinet on an</p>
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
