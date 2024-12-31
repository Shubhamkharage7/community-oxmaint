
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am experiencing an issue with a series of e300s connected to a startix device that then goes to the PLC. The MS and NS lights on all units are blinking, while the link1 light indicates communication. Despite trying resets and various troubleshooting steps, the issue persists.">
    <meta name="keywords" content="rockwell e300 troubleshooting, ms and ns lights blinking, link light normal, startix device, plc, communication issue, resets, e300 series, karin, problem solving, troubleshooting steps, community thread, resolving issues, network communication, troubleshooting">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-rockwell-e300-ms-and-ns-lights-blinking-link-light-normal-need-help">
    <title>Troubleshooting Rockwell E300: MS and NS lights blinking, Link light normal - Need Help! | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Rockwell E300: MS and NS lights blinking, Link light normal - Need Help! | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am experiencing an issue with a series of e300s connected to a startix device that then goes to the PLC. The MS and NS lights on all units are blinking, while the link1 light indicates communication. Despite trying resets and various troubleshooting steps, the issue persists.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-rockwell-e300-ms-and-ns-lights-blinking-link-light-normal-need-help">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Rockwell E300: MS and NS lights blinking, Link light normal - Need Help! | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am experiencing an issue with a series of e300s connected to a startix device that then goes to the PLC. The MS and NS lights on all units are blinking, while the link1 light indicates communication. Despite trying resets and various troubleshooting steps, the issue persists.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-rockwell-e300-ms-and-ns-lights-blinking-link-light-normal-need-help"
      },
      "headline": "Troubleshooting Rockwell E300: MS and NS lights blinking, Link light normal - Need Help!",
      "description": "Hello everyone, I am experiencing an issue with a series of e300s connected to a startix device that then goes to the PLC. The MS and NS lights on all units are blinking, while the link1 light indicates communication. Despite trying resets and various troubleshooting steps, the issue persists.",
      "author": {
        "@type": "Person",
        "name": "Karinrinkashi"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-13",
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
                <h1 class="text-white">Troubleshooting Rockwell E300: MS and NS lights blinking, Link light normal - Need Help!</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Karinrinkashi</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">6024</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">341</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am experiencing an issue with a series of e300s connected to a startix device that then goes to the PLC. The MS and NS lights on all units are blinking, while the link1 light indicates communication. Despite trying resets and various troubleshooting steps, the issue persists. Has anyone else encountered this problem or have any suggestions for resolving it? Your input is greatly appreciated. Thank you in advance! - Karin</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>How do the flashing NS and MS lights communicate? What colors are they using for communication?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Engineerj22</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the significance of MS and NS light blinking as detailed in the E300 Manual. Explore the meanings behind these illuminated notifications for enhanced understanding and troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Engineerj22</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Which type of PLC is being communicated with? If it is a CLX or CMLX PLC, are they included in the IO tree?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Engineerj22</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Engineerj22 inquired about the communication and flashing light colors of the NS and MS indicators. The lights are currently flashing green, including the power light. Despite having the manual in hand, a quicker solution is sought due to time constraints. The issue pertains to a CLX system located in the IO tree, with a warning now showing. Any assistance would be greatly appreciated. Thank you, Karin.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Karinrinkashi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are they in a prepared state? Is it a managed Stratix switch? Ensure that the ports are open. Can you successfully ping them from your personal computer?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Engineerj22</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Engineerj22 inquired about the readiness of the Stratix and its type - whether it's managed or unmanaged. It's essential to ensure that the ports are open for seamless connectivity. Testing the connectivity by pinging the Stratix from a PC is recommended. The Stratix can function as managed or unmanaged based on the port settings. By utilizing port persistence, devices are assigned IP addresses by the Stratix depending on the specific port they are connected to. Karin will attempt to ping the devices and assess the results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Karinrinkashi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I can't help but suspect that there may be a common issue with the e300s. However, the fact that all units seem to be experiencing the same problem is causing me to second guess. Strange, right?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Karinrinkashi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is this installation a new one, or have these specific components been successful in prior projects? It seems unusual to encounter this situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Engineerj22</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Has this issue been resolved? I am experiencing the same problem with an E300 module, where the Power, MS, and NS lights are all flashing green. Power is ready, the module is not being scanned by the EtherNet/IP master, and the module is online with no connections established. The Logix system is able to recognize the module, but the status keeps alternating between connecting and faulted. The internal status in the properties shows as "unconnected." I have already attempted to reset the module within Logix, power cycle it, and press the test/reset button. Despite these efforts, I am still able to ping the module. It is worth noting that this module had been functioning correctly since October 2018.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AMarks95</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rockwell has provided a response to the issue of flashing/blinking green LED’s on the E300 Overload Relay. When the Power LED is flashing green, it indicates that the device is ready. However, if the Module Status (MS) and Network Status (NS) LED’s are also flashing green, it signifies a connection issue to the network.

To troubleshoot this problem, ensure that the E300 Overload Relay is in the I/O tree and that the correct Add on Profile (AOP) for the firmware revision is being used. Additionally, verify that Parameters 23 through 25 are correctly set in the field. Check Parameters 38 and 38 for any mismatches and investigate the cause of the discrepancy. Lastly, check Parameter 186 to confirm that trip bits are not enabled for devices that are not connected to the E300 Overload Relay.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AMarks95</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I wanted to provide an update on my current situation. It appears that the issue was stemming from a faulty network switch. After replacing the switch, all systems are now operating smoothly again. Prior to replacing it, we experienced disruptions with other devices linked to the same switch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AMarks95</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the update! It all falls into place now and makes perfect sense!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Engineerj22</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although this may be an old post, it is still relevant for those who may encounter the same issue in the future. When all four lights are flashing on your device, it could indicate a hardware mismatch. In my case, the issue was caused by a 30-amp module being installed instead of the required 60-amp module. The flashing power light indicates a simple Ready state, while the flashing link light signifies active data communication. If both the NS and MS lights are flashing, it could point to a module mismatch. This can be a common issue faced by users searching for solutions to their device's flashing lights.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nova5</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What does it mean when the MS and NS lights on Rockwell E300 units are blinking?</h4>
<p class='text-muted'><strong>Answer:</strong> Blinking MS and NS lights on Rockwell E300 units typically indicate a communication issue between the units and the devices they are connected to.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why is the Link1 light indicating communication while the MS and NS lights are blinking?</h4>
<p class='text-muted'><strong>Answer:</strong> The Link1 light indicating communication suggests that there might be a partial connection or intermittent signal between the devices, leading to the conflicting status of lights.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What troubleshooting steps can be taken to resolve the issue of MS and NS lights blinking on Rockwell E300 units?</h4>
<p class='text-muted'><strong>Answer:</strong> Some troubleshooting steps to consider include checking cable connections, verifying device configurations, ensuring proper power supply, and potentially updating firmware or software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Has anyone else encountered the issue of blinking MS and NS lights on Rockwell E300 units connected to a startix device?</h4>
<p class='text-muted'><strong>Answer:</strong> Other users might have encountered similar issues and could provide insights or suggestions based on their experiences. Sharing details and collaborating with others in similar situations can be beneficial.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  How can a persistent issue with blinking MS and NS lights on Rockwell E300 units be resolved effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> If the issue persists despite basic troubleshooting steps, it might be necessary to involve technical support from the manufacturer, Rockwell Automation, to diagnose and address the root cause of</p>
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
