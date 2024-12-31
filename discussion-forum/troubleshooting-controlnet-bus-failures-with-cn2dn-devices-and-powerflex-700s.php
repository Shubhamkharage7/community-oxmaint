
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, seeking advice for a specific issue we are experiencing. Currently, our controlnet bus consists of (6) CN2DN devices and (2) PowerFlex 700s. We have encountered instances where multiple CN2DN devices fail, while the VFDs remain operational. Most of the devices connected to the CN2DN are E3P overloads.">
    <meta name="keywords" content="troubleshooting controlnet bus failures, cn2dn devices, powerflex 700s, e3p overloads, cn2r/b card, fault indication, cn2dn device failure registers, msg instruction, cip generic">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-controlnet-bus-failures-with-cn2dn-devices-and-powerflex-700s">
    <title>Troubleshooting ControlNet Bus Failures with CN2DN Devices and PowerFlex 700s | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ControlNet Bus Failures with CN2DN Devices and PowerFlex 700s | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, seeking advice for a specific issue we are experiencing. Currently, our controlnet bus consists of (6) CN2DN devices and (2) PowerFlex 700s. We have encountered instances where multiple CN2DN devices fail, while the VFDs remain operational. Most of the devices connected to the CN2DN are E3P overloads.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-controlnet-bus-failures-with-cn2dn-devices-and-powerflex-700s">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ControlNet Bus Failures with CN2DN Devices and PowerFlex 700s | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, seeking advice for a specific issue we are experiencing. Currently, our controlnet bus consists of (6) CN2DN devices and (2) PowerFlex 700s. We have encountered instances where multiple CN2DN devices fail, while the VFDs remain operational. Most of the devices connected to the CN2DN are E3P overloads.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-controlnet-bus-failures-with-cn2dn-devices-and-powerflex-700s"
      },
      "headline": "Troubleshooting ControlNet Bus Failures with CN2DN Devices and PowerFlex 700s",
      "description": "Hello everyone, seeking advice for a specific issue we are experiencing. Currently, our controlnet bus consists of (6) CN2DN devices and (2) PowerFlex 700s. We have encountered instances where multiple CN2DN devices fail, while the VFDs remain operational. Most of the devices connected to the CN2DN are E3P overloads.",
      "author": {
        "@type": "Person",
        "name": "ObnoxiousWatermelon"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-18",
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
                <h1 class="text-white">Troubleshooting ControlNet Bus Failures with CN2DN Devices and PowerFlex 700s</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ObnoxiousWatermelon</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">408</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">500</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, seeking advice for a specific issue we are experiencing. Currently, our controlnet bus consists of (6) CN2DN devices and (2) PowerFlex 700's. We have encountered instances where multiple CN2DN devices fail, while the VFDs remain operational. Most of the devices connected to the CN2DN are E3P overloads. To troubleshoot, we conducted tests by disconnecting various points in the loop, such as the 'A' bus, to observe the network's reaction and attempt to replicate the issue. Typically, disconnecting the 'A' bus results in a switchover to the 'B' bus. However, there have been cases where disconnecting at specific locations causes certain nodes to drop out.

To clarify the situation, it appears that the CN2R/B card is not indicating a fault. Instead, the fault is being triggered by the CN2DN devices. Our current AOI examines the CN2DN Device failure registers, in addition to a MSG instruction (CIP Generic) that references f0 Instance 1 Attribute 83 to identify faults on the CN2DN devices. If more information is needed to provide further assistance, please don't hesitate to reach out.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon reading your post this morning, I recalled a past experience that might be helpful to you. Several years ago, I encountered an issue with ControlNet while working for a board manufacturer. We had a ControlNet scanner/adapter board integrated with a robot arm controller for welding applications. The noise generated by the robot's motion control caused communication errors on the ControlNet bus. After seeking assistance from Rockwell, we were advised to ground all the robots to a single point in the building, which resolved the issue.

Before attempting any solutions, it is recommended to monitor the error counters on the ControlNet interfaces for unusual counts. A stable network should have minimal error rates. If errors persist, addressing grounding issues may be necessary. It is important to reference Rockwell documentation for ControlNet specifications to ensure proper troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>How can the 1788-CN2DN modules be brought back online? Do they recover automatically or require a manual reset or a reconfiguration of the ControlNet system? Your system may be experiencing multiple issues. It is possible that there is faulty media or interference on Channel B. Additionally, there may be a factor causing the 1788-CN2DN modules to restart or disconnect from the ControlNet simultaneously, such as a shared DC power supply dropping below the required operating level (typically 18V for these units). There may also be a heavy load or voltage discharge on a DeviceNet network causing disruptions that affect the ControlNet system as well.

Many systems power the 1788-CN2DN modules from the DeviceNet network power supply, but this setup eliminates the advantages of isolation and independence between system components. It is unclear whether the classic 1788-CN2DN modules have removable CNet and DNet daughter cards like the FlexLogix, or if everything is fixed in place. Issues like corrosion or wear would likely not impact all modules simultaneously.

Diagnostic steps could involve monitoring the ControlNet media counter objects from all network nodes to observe any increases at specific times. In past experiences, having a ControlNet signal meter helped in isolating individual node broadcasts for analysis on an oscilloscope, as well as provided LED indicators for signal quality at each node number. This tool was used in combination with media counters and status objects, along with referencing protocol specifications for GSV and messaging details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon further examination, it was confirmed that the 1788-CN2DN module is equipped with its own independent control power supply, located on top of the device, and does not draw logic power from the DeviceNet. Even when the power from DeviceNet is turned off, the module can still be connected and operated through ControlNet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AlfredoQuintero shared: Good morning! After reading your post, I couldn't help but think of a couple of forum members who are experts in this field. While my experience with ControlNet dates back several decades and I may not have the technical expertise, I do recall a similar issue I faced in the past. I was working for a board manufacturer that utilized a ControlNet scanner/adapter board for various applications, including robot arm controllers for welding. The noise interference from the robot's control system was causing communication errors on the ControlNet bus. With help from Rockwell, we resolved the issue by connecting all the ground wires from the robots to a single point in the building. This simple solution significantly improved communication.

If you are experiencing errors with ControlNet, it's worth checking the error counters in the interfaces and consulting Rockwell's documentation for further guidance. Remember, a reliable network should have minimal error rates. If errors persist, addressing grounding issues may be necessary.

Regarding your experience with Rsnetworx for ControlNet, it's not uncommon to encounter difficulties with the software. In our tests, we also noticed that disconnecting the 'A' bus did not always trigger a network refresh. Have you had a chance to use the 1788-CNCHKR device before?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ObnoxiousWatermelon</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach asked about methods for bringing the 1788-CN2DN units back online. Will they recover automatically, or do they need a manual reboot or ControlNet re-schedule? There may be multiple issues at play, such as bad media or noise on Channel B and potential power supply problems causing the units to reboot. Systems powering the 1788-CN2DN from the DeviceNet network may lose benefits like isolation. Diagnostics could involve monitoring ControlNet media counters and analyzing node broadcasts with a ControlNet signal meter. Troubleshooting the network during an upset can be challenging when the CN2DN units come back online immediately. Checking redundant DC power supplies and using appropriate diagnostic tools, such as RSNetworx for ControlNet, may help. The older ControlNet signal meter model, 1788-CNCHKR, is obsolete, but it was useful for monitoring signal quality. Disconnecting bus lines for testing purposes can help identify issues, such as a CN2DN unit going down due to a bad signal on one bus line.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ObnoxiousWatermelon</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why are some CN2DN devices failing while the PowerFlex 700's remain operational in the ControlNet bus system?</h4>
<p class='text-muted'><strong>Answer:</strong> This could be due to specific issues within the CN2DN devices themselves, separate from the VFDs. Troubleshooting may involve isolating the problematic devices and examining their functionality and connections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can we effectively troubleshoot ControlNet bus failures with CN2DN devices and PowerFlex 700's?</h4>
<p class='text-muted'><strong>Answer:</strong> One approach could be conducting tests by disconnecting various points in the loop to observe network reactions and replicate the issue. Monitoring how the network behaves when certain connections are altered can provide insights into the root cause of the failures.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What role does the CN2R/B card play in identifying faults in the ControlNet bus system?</h4>
<p class='text-muted'><strong>Answer:</strong> While the CN2R/B card may not be indicating faults, the issue seems to be triggered by the CN2DN devices. It's essential to investigate the CN2DN Device failure registers and utilize MSG instructions to pinpoint faults accurately.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can the AOI examining CN2DN Device failure registers and the MSG instruction referencing f0 Instance 1 Attribute 83 help in troubleshooting the issues with CN2DN devices?</h4>
<p class='text-muted'><strong>Answer:</strong> By utilizing these tools, you can identify specific faults on the CN2DN devices, aiding in</p>
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
