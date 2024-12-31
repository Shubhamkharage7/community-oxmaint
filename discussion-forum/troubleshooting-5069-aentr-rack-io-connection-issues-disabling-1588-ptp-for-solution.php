
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I recently set up a 5069-AENTR rack with OA16 and IA16 modules in specific slots. The first group of six IO modules and the last group of three IO modules are experiencing frequent loss of logical connection (error code 203) throughout the day. These connection issues occur">
    <meta name="keywords" content="5069-aentr, oa16, ia16, io modules, connection issues, error code 203, logical connection loss, troubleshooting, 1588 ptp, time synchronization, qa67023, ptpcmd tag, network setup">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-5069-aentr-rack-io-connection-issues-disabling-1588-ptp-for-solution">
    <title>Troubleshooting 5069-AENTR Rack IO Connection Issues: Disabling 1588 PTP for Solution? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 5069-AENTR Rack IO Connection Issues: Disabling 1588 PTP for Solution? | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I recently set up a 5069-AENTR rack with OA16 and IA16 modules in specific slots. The first group of six IO modules and the last group of three IO modules are experiencing frequent loss of logical connection (error code 203) throughout the day. These connection issues occur">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-5069-aentr-rack-io-connection-issues-disabling-1588-ptp-for-solution">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 5069-AENTR Rack IO Connection Issues: Disabling 1588 PTP for Solution? | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I recently set up a 5069-AENTR rack with OA16 and IA16 modules in specific slots. The first group of six IO modules and the last group of three IO modules are experiencing frequent loss of logical connection (error code 203) throughout the day. These connection issues occur">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-5069-aentr-rack-io-connection-issues-disabling-1588-ptp-for-solution"
      },
      "headline": "Troubleshooting 5069-AENTR Rack IO Connection Issues: Disabling 1588 PTP for Solution?",
      "description": "Hello everyone, I recently set up a 5069-AENTR rack with OA16 and IA16 modules in specific slots. The first group of six IO modules and the last group of three IO modules are experiencing frequent loss of logical connection (error code 203) throughout the day. These connection issues occur",
      "author": {
        "@type": "Person",
        "name": "5618"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Troubleshooting 5069-AENTR Rack IO Connection Issues: Disabling 1588 PTP for Solution?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">307</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">60</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I recently set up a 5069-AENTR rack with OA16 and IA16 modules in specific slots. The first group of six IO modules and the last group of three IO modules are experiencing frequent loss of logical connection (error code 203) throughout the day. These connection issues occur independently in each group and can last anywhere from a few seconds to several minutes. I have already tried adjusting the connections between modules but will be conducting a thorough inspection of the entire rack soon.

One potential solution I came across is disabling time synchronization (1588 PTP) on the 5069-AENTR. I found a Knowledgebase article (QA67023) that provides instructions on how to do this using the ptpcmd tag, but I couldn't locate the specific details I needed. I am considering trying this as a last resort to see if it resolves the connection issues.

Additionally, I recently upgraded the controller and made some changes to the network setup. The network includes multiple 1794 Flex racks and PowerFlex 70 drives, with the EN2T module showing a low CPU utilization and stable network connections. Despite troubleshooting efforts, the connection problems persist, and I am seeking advice on potential solutions. Any insights or suggestions would be greatly appreciated. Thank you.

@Davidvu, I noticed you mentioned having the document I am looking for in a previous post. Any chance you could assist me with this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, I missed the 30-minute window for additional details in AENTR:S tags. The IO packet rate remains steady at 210-215, with CIP timeouts count close but not exactly matching the blips. CPU utilization fluctuates between 1 and 3%. When analyzing time sync in the AENTR module properties, I noticed that CIP Synch time synchronization is enabled. The UTC system time currently reads 1/2/1970 6:xx:xx AM, with the grandmaster clock and local clock sharing the same identity. The L81 time displays the correct 2024 date and time. Interestingly, Enable Time Synchronization is not checked on L81, indicating it is not the CST master.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Impressively, the document linked makes mention of IA-AT003 on pages 1-5. It appears that there may be an error in the link provided by RA as the document is not accessible. However, based on the context of the message, it seems they are utilizing the service "Set Single Attribute" (0x10) to adjust the value of PTP Enable (Attribute 1) within the Time Synchronize object (class 0x43) for the sole instance of that class (Instance 0x01). The data being written is a single byte, aligning with the definition of PTP Enable as an 8-bit decimal integer. Typically, a value of 0x01 indicates enable while 0x00 signifies disable for such attributes. Therefore, it is likely that a 0x00 is being transmitted in the ptpcmd tag, which is assumed to be a SINT, effectively deactivating the PTP service within the module. In light of the broken link, feedback has been submitted on the technote to address this issue. Upon reviewing the specifications, it has been confirmed that 0x00 corresponds to disable, and 0x01 corresponds to enable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was hesitant to send a zero due to uncertainties in the running system. However, after setting up a read attribute, I confirmed that a 1 was indeed read. When I attempted to send 0, the MSG failed with error code 16#0010, indicating that the module's mode or state prevented the requested service. It was a disappointment, but I will see what tomorrow brings. My understanding of CIP time synchronization is limited, but I acknowledge its existence.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Today, I dismantled and reassembled the rack, making sure everything was in order. I rearranged the IO module positions while doing so. After saving the project as a L5K file and importing it into a new project, I downloaded it and replaced the old Hirschmann switch with a new Stratix 5200. I ensured that the new switch was integrated into the IO tree, but did not configure smartports or any additional settings. Despite my efforts, the issue persisted. An interesting observation is that the input data from slot 8 does not reset during disruptions such as disconnecting the Ethernet cable or unplugging the AENTR power. While slots 2 & 4 behave correctly, slot 6 has not been tested due to lack of inputs. The longevity of slot 8 holding the input status has been a temporary solution, but I am running out of ideas for a solution. I suspect there may be a software, firmware, or hardware issue at play, which I will investigate further on Monday. Another option would be to reinstall the old SLC rack, but this would require additional time which is in short supply.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a possibility of MAC collisions occurring within the DLR ring nodes? It is essential to manually set all nodes on the ring to 100Mbps full duplex and disable auto-negotiation. Additionally, consider utilizing the DLR Tool to detect and address any potential issues within the network.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the information. None of the components are DLR-enabled. I have not reviewed the port statistics on the Stratix device. The EN2T is configured manually at 100 full, while the rest are likely set to auto. Upon a brief check before leaving, I noted that the AENTR is on auto and the switch indicates gigabit speed. The drives appear to be operating at 100 full, with the Flex potentially at 10 something. I am unsure of the settings on the Hirschmann ports, but I do not anticipate any issues. Our local distributor lacks familiarity with them, so I included the Stratix for potential support. A single cable connects all the Flex racks, although the precise architecture is unknown to me. As far as I remember, there are unmanaged switches in the enclosures, facilitating Ethernet daisy chaining. Next week, I will gather more details from the Stratix. I have the necessary code and screens for the old AOI used in 5700s. This is the first active 5200 unit here, and I have yet to configure the new AOI for local tag integration with a non-PanelView device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you considered using a scope to monitor your DC power supply for your Process Flow Diagrams (PFDs)? It seems like there may be brownouts occurring if your AENTR module is maintaining communication. It's possible that a field device is experiencing temporary shorts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>On my day off, I left shortly after the system was started up. The networked drives were experiencing faults, with a five-second time on delay when running but not fully operational, until the switch was reverted back to the Hirschmann. While I am not sure of the exact cause, it is possible that the issue was related to auto negotiation. The input-output (IO) operates at 120VAC. So far, I have not conducted any scope testing, but I do not believe the source address (SA) is the issue. The recurring blips in two separate groups are not isolated at the Fieldbus Power Distribution (FPD).

I attempted to upload a video, but it was too large for this platform, so I will do my best to provide a visual description. The rack is functioning normally, with AENTR and NET lights showing as stable green, and LINK 1 blinking at a consistent rapid pace. The SA lights remain steady without blinking. The MODULE lights also stay green until...

In slots 7 and 9, the outputs suddenly drop out. The input lights in slot 8 remain unchanged. The MODULE lights in slots 7, 8, and 9 flicker off and on simultaneously three or four times before the outputs are restored. Subsequently, the outputs in slots 1, 3, and 5 also drop out, with input lights in slot 8 staying lit. The MODULE lights in slots 1-6 blink off together three or four times before resuming normal operation.

These intermittent blips occur at irregular intervals throughout the day and are not correlated with the other group. Most blips last around 3.2 seconds, with occasional longer blips lasting around 15 seconds. I am aware of the recommendation to add another FPD between slots 8 and 9 from the International Association of Air-Conditioning and Refrigeration (IAB). However, my local distributor believes it is unnecessary, but I may still consider adding one next week for precautionary purposes.

Regarding the input anomaly, I have observed that during a blip in the group, if I disconnect the Ethernet or rack power, the PLC input tags in slot 8 remain true. On the other hand, tags in slots 2 and 4 all switch to false, as expected. I have not yet tested slot 6, as it is currently unused.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the frequent loss of logical connection (error code 203) in the 5069-AENTR rack with OA16 and IA16 modules?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The connection issues could be caused by various factors, such as faulty connections between modules, network setup changes, or potential software-related issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the connection issues in my 5069-AENTR rack with the first group of six IO modules and the last group of three IO modules?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can try adjusting the connections between modules, conducting a thorough inspection of the entire rack, and considering solutions like disabling time synchronization (1588 PTP) as a last resort.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Where can I find instructions on how to disable time synchronization (1588 PTP) on the 5069-AENTR rack?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can refer to Knowledgebase article QA67023 for instructions on disabling time synchronization (1588 PTP) using the ptpcmd tag, although specific details may need to be located for the process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are some potential solutions for addressing the connection problems in the 5069-AENTR rack despite having already upgraded the controller and made network setup changes?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Seeking advice on potential solutions, such as disabling time synchronization (1588 PTP) and ensuring stable network connections, can help in resolving the persistent connection problems.</p>
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
