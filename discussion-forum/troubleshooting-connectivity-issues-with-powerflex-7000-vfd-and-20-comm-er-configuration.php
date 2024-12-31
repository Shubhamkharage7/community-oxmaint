
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently acquired 3 brand new PowerFlex 7000 VFDs for a large electrical project. A technician from Rockwell came by to inspect them before startup. After providing the technician with the IP addresses, he made adjustments at both the VFD and the Panel View. While I am able to">
    <meta name="keywords" content="powerflex 7000 vfd, troubleshooting connectivity issues, 20-comm-er configuration, rockwell technician, ip addresses adjustment, panel view, ping vfd, ccw connection, studio5000 connection, direct connection, parameters retrieval, boot">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issues-with-powerflex-7000-vfd-and-20-comm-er-configuration">
    <title>Troubleshooting Connectivity Issues with PowerFlex 7000 VFD and 20-comm-er Configuration | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Connectivity Issues with PowerFlex 7000 VFD and 20-comm-er Configuration | Oxmaint Community">
    <meta property="og:description" content="I recently acquired 3 brand new PowerFlex 7000 VFDs for a large electrical project. A technician from Rockwell came by to inspect them before startup. After providing the technician with the IP addresses, he made adjustments at both the VFD and the Panel View. While I am able to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issues-with-powerflex-7000-vfd-and-20-comm-er-configuration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Connectivity Issues with PowerFlex 7000 VFD and 20-comm-er Configuration | Oxmaint Community">
    <meta name="twitter:description" content="I recently acquired 3 brand new PowerFlex 7000 VFDs for a large electrical project. A technician from Rockwell came by to inspect them before startup. After providing the technician with the IP addresses, he made adjustments at both the VFD and the Panel View. While I am able to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-connectivity-issues-with-powerflex-7000-vfd-and-20-comm-er-configuration"
      },
      "headline": "Troubleshooting Connectivity Issues with PowerFlex 7000 VFD and 20-comm-er Configuration",
      "description": "I recently acquired 3 brand new PowerFlex 7000 VFDs for a large electrical project. A technician from Rockwell came by to inspect them before startup. After providing the technician with the IP addresses, he made adjustments at both the VFD and the Panel View. While I am able to",
      "author": {
        "@type": "Person",
        "name": "GlennM"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-01",
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
                <h1 class="text-white">Troubleshooting Connectivity Issues with PowerFlex 7000 VFD and 20-comm-er Configuration</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>GlennM</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">583</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">440</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently acquired 3 brand new PowerFlex 7000 VFD's for a large electrical project. A technician from Rockwell came by to inspect them before startup. After providing the technician with the IP addresses, he made adjustments at both the VFD and the Panel View. While I am able to ping the VFD and receive a response, I am encountering difficulties connecting to them through CCW or Studio5000. Interestingly, I can establish a direct connection with CCW and retrieve the parameters. I have noticed that the 20-comm-er BOOTP is enabled, however, the IP address is still present in the parameters. Upon attempting to disable BOOTP via the interface and manually input the IP address, I am informed that it is a duplicate address. Despite spending numerous hours searching online for a solution, I have been unable to resolve this issue and establish proper communications. Any assistance in resolving this matter would be greatly appreciated as it is crucial to establish connectivity before startup.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There is a separate control board with its own IP address that the Panel View communicates with. It's possible that this IP address has been set to match the one you are trying to assign to the 20-COMM-ER module. Please note that it has been a while since I last worked with PF7000's, so my memory may not be completely accurate. The 20-COMM-ER module will retain its IP address even when BOOTP is enabled.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The 192.168.1.0/24 Class C private subnet is widely used for A-B devices, typically with a thumbwheel for the final octet. This subnet is indicated by a /24, which means the first 24 bits are consistent. The subnet mask for /24 is 255.255.255.0, accommodating hosts from 192.168.1.1 to 192.168.1.254. It is recommended to stick with this common Class C subnet to align with user expectations. Ensure no other devices are using the same address to prevent duplicate IP errors in RSLinx or BOOTP/DHCP. If encountering issues in Studio 5000, it may signal a device already utilizing that address in the I/O tree.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The IP address is unique, ruling out any duplication issues. The problem may lie within RSLinx, as it is not recognizing the PowerFlex device despite having the EDS file auto download enabled. Despite my 20 years of experience with Rockwell PLCs and software, this particular issue has me perplexed. While I have extensive experience with Rockwell PLCs, this level of troubleshooting with VFDs is new to me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GlennM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you wonder why the three devices appear in the ETH-1 configuration but not in ETHIP-1, which displays all devices? They should be visible in both configurations unless they are set up for different Ethernet adapters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am aware that with ETH-1, configuration involves adding the IP address of the device, whereas with ETH!P-1, it automatically discovers devices but seems to struggle with locating VFDs specifically. Despite being able to detect all other control system devices, it fails to find the VFDs. I have tried pinging the VFDs using CMD, and they do respond, so I am puzzled by this discrepancy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GlennM</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to identify all devices on the network, I would recommend disconnecting the VFDs and using the "Angry IP Scanner." This approach proved beneficial recently when a technician mistakenly assigned the IP address of a CTS leak tester (not compatible with Ethernet/IP protocol) to an IFM I/O block. Despite this hiccup in an established system, the issue was quickly resolved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It has been five years since I last worked with medium voltage drives, but during that time, Rockwell offered exceptional technical support from their Ontario office (519-740-4790) without requiring a contract. All you needed was some patience to navigate through the phone menu and provide the complete serial number of your drive. They had "as built" drawings and set-up data that we unfortunately misplaced at our site, but Rockwell was very helpful in troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rounder</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1.  I can ping the PowerFlex 7000 VFD, but I am facing connectivity issues with CCW or Studio5000. How can I troubleshoot this problem?</h4>
<p class='text-muted'><strong>Answer:</strong> If you are able to ping the VFD but cannot establish a connection through CCW or Studio5000, you may need to check the network settings, ensure proper configuration in the software, and verify that the IP addresses match between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I am encountering a 'duplicate address' error when trying to manually input the IP address on the 20-comm-er BOOTP interface. How can I resolve this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> If you are receiving a duplicate address error when trying to input the IP address manually, it indicates that the IP address is already in use on the network. You may need to check for conflicting IP addresses and ensure that each device has a unique IP address assigned.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I disable BOOTP on the 20-comm-er configuration and manually set the IP address for the PowerFlex 7000 VFD?</h4>
<p class='text-muted'><strong>Answer:</strong> To disable BOOTP and manually set the IP address on the 20-comm-er configuration, you may need to access the interface settings for the VFD and follow the appropriate steps outlined in the user manual or technical documentation provided by Rockwell Automation.</p>
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
