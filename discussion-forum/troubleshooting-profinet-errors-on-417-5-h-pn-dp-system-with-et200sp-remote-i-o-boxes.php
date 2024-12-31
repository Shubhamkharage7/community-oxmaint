
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have an extensive list of events recorded in the diagnostic buffer, but I lack the expertise to decipher or address them effectively (as my background is primarily in AB PLC systems). The first event recorded is as follows: Event 1 of 120: Event ID 16# 38B3I/O encountered an">
    <meta name="keywords" content="profinet errors, troubleshooting profinet issues, 417-5 h pn/dp system, et200sp remote i/o boxes, diagnostic buffer events, event id 16# 38b3i/o, process image input">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-profinet-errors-on-417-5-h-pn-dp-system-with-et200sp-remote-i-o-boxes">
    <title>Troubleshooting Profinet Errors on 417-5 H PN/DP System with ET200SP Remote I/O Boxes | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Profinet Errors on 417-5 H PN/DP System with ET200SP Remote I/O Boxes | Oxmaint Community">
    <meta property="og:description" content="I have an extensive list of events recorded in the diagnostic buffer, but I lack the expertise to decipher or address them effectively (as my background is primarily in AB PLC systems). The first event recorded is as follows: Event 1 of 120: Event ID 16# 38B3I/O encountered an">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-profinet-errors-on-417-5-h-pn-dp-system-with-et200sp-remote-i-o-boxes">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Profinet Errors on 417-5 H PN/DP System with ET200SP Remote I/O Boxes | Oxmaint Community">
    <meta name="twitter:description" content="I have an extensive list of events recorded in the diagnostic buffer, but I lack the expertise to decipher or address them effectively (as my background is primarily in AB PLC systems). The first event recorded is as follows: Event 1 of 120: Event ID 16# 38B3I/O encountered an">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-profinet-errors-on-417-5-h-pn-dp-system-with-et200sp-remote-i-o-boxes"
      },
      "headline": "Troubleshooting Profinet Errors on 417-5 H PN/DP System with ET200SP Remote I/O Boxes",
      "description": "I have an extensive list of events recorded in the diagnostic buffer, but I lack the expertise to decipher or address them effectively (as my background is primarily in AB PLC systems). The first event recorded is as follows: Event 1 of 120: Event ID 16# 38B3I/O encountered an",
      "author": {
        "@type": "Person",
        "name": "codingo"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-05",
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
                <h1 class="text-white">Troubleshooting Profinet Errors on 417-5 H PN/DP System with ET200SP Remote I/O Boxes</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>codingo</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">101</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">442</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have an extensive list of events recorded in the diagnostic buffer, but I lack the expertise to decipher or address them effectively (as my background is primarily in AB PLC systems). The first event recorded is as follows: Event 1 of 120: Event ID 16# 38B3I/O encountered an error while updating the process image input table in the outgoingP area. The error pertains to byte access at address 517 in process image partition 0, which is not user-relevant (Z1: 2942). The requested OB is Program Execution Error OB (OB85) with a priority class of 25. This is an external error occurring at 07:20:04.002 PM on 12/05/1994. The second event is categorized as Event 14 of 120, with Event ID 16# 38CB related to PROFINET IO. The error involves the station return address, specifically the input address 16355. The IO system ID is 100, and the station number is 51. The logical basic address of the IO controller is 16383, and the requested OB is Rack Failure OB (OB86) with a priority class of 25. Like the previous event, this is an external error occurring at 07:20:04.001 PM on 12/05/1994. There are numerous instances of these two events with varying values for the "Basic address of the IO controller: 16383." It would be greatly appreciated if someone could provide a detailed breakdown of each line to explain the significance, potential issues caused, and possible resolutions. The system is currently operational but experiences intermittent halts accompanied by alarms. The main PLC red LEDs indicating "Ext Fault" and "Bus Fault" illuminate briefly before turning off, after which the system resumes normal operation without any manual intervention. This occurs randomly and on a daily basis. The errors observed in Proneta have been attached for reference and assistance is requested in understanding and resolving these issues.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Performing a cross-reference on PQW 517 and PIW 517 reveals attempts to communicate with a device that is currently offline or disabled. Additionally, Profinet node 51 has an address exceeding the configuration set in the controller, indicating unauthorized modifications to the system setup. It appears that changes were made by an individual lacking knowledge of the system's configuration. The expansion of the 417 image table is possible, but only when not in run mode and depending on the memory module installed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for responding. Can you provide more information about PQW 517 and PIW 517? I am new to this and unsure how to cross-reference these terms. Could you please guide me on what to look for? Your assistance is greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>codingo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are searching for the remote IO station with assigned IO address 517, you can locate this information in the HW configuration. Alternatively, you can identify the Remote IO Station by finding the number 51 in the list of stations. It is important to note that a system utilizing an S7-417H CPU is quite complex. An "H" CPU is typically used in a high-availability and redundant configuration. It may be beneficial to seek expert assistance for further guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting a PLC issue related to a faulty IO, it may be helpful to search for the code that accesses the problematic input table using byte access at access address 517. A cross reference search for PIB517 may provide insights, but it's possible that the access method is more intricate and not easily identified. The primary issue lies in stations dropping off the network, rather than the PLC code itself.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
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
<h4 class='text-dark'>FAQ: 1. What do the recorded events in the diagnostic buffer indicate about the Profinet errors on the 417-5 H PN/DP system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The events in the diagnostic buffer provide detailed information about errors encountered during the system operation, such as issues with updating process image input tables and station return addresses in the Profinet IO setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I interpret the specific error messages like Event ID 1638B3 and 1638CB in the context of the system's operation?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Event IDs correspond to specific errors related to byte access, process image partition addresses, and IO system IDs, which are crucial for diagnosing the root cause of the Profinet errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the potential implications of the intermittent halts and alarms experienced in the system, despite it being operational most of the time?</h4>
<p class='text-muted'><strong>Answer:</strong> - The intermittent halts and alarms, along with the illuminated red LEDs indicating "Ext Fault" and "Bus Fault," suggest underlying issues that may lead to disruptions in system performance and signal potential problems that require attention.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I troubleshoot and resolve the Profinet errors observed in the system, particularly in relation to the errors mentioned in the Proneta logs?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting steps may involve analyzing the Proneta logs in detail, identifying patterns in the errors, checking for loose connections, verifying network configurations, and possibly updating firmware or addressing hardware issues to resolve the Profin</p>
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
