
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently upgrading a weigh in motion scale on a conveyor system from an AP Dataweigh to a Mettler IND570. The communication protocol being used is Profibus DP. In the past, I have never encountered any issues with the old scale or previous versions of Mettler scales when">
    <meta name="keywords" content="mettler ind570, weigh in motion scale, profibus dp, communication issue, troubleshooting, final weight, instantaneous weight, conveyor system, ap dataweigh, plc changes, scale installation, profibus card, terminal emulator">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-mettler-ind570-weigh-in-motion-scale-communication-issue-via-profibus-dp">
    <title>Troubleshooting Mettler IND570 Weigh in Motion Scale Communication Issue via Profibus DP | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Mettler IND570 Weigh in Motion Scale Communication Issue via Profibus DP | Oxmaint Community">
    <meta property="og:description" content="I am currently upgrading a weigh in motion scale on a conveyor system from an AP Dataweigh to a Mettler IND570. The communication protocol being used is Profibus DP. In the past, I have never encountered any issues with the old scale or previous versions of Mettler scales when">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-mettler-ind570-weigh-in-motion-scale-communication-issue-via-profibus-dp">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Mettler IND570 Weigh in Motion Scale Communication Issue via Profibus DP | Oxmaint Community">
    <meta name="twitter:description" content="I am currently upgrading a weigh in motion scale on a conveyor system from an AP Dataweigh to a Mettler IND570. The communication protocol being used is Profibus DP. In the past, I have never encountered any issues with the old scale or previous versions of Mettler scales when">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-mettler-ind570-weigh-in-motion-scale-communication-issue-via-profibus-dp"
      },
      "headline": "Troubleshooting Mettler IND570 Weigh in Motion Scale Communication Issue via Profibus DP",
      "description": "I am currently upgrading a weigh in motion scale on a conveyor system from an AP Dataweigh to a Mettler IND570. The communication protocol being used is Profibus DP. In the past, I have never encountered any issues with the old scale or previous versions of Mettler scales when",
      "author": {
        "@type": "Person",
        "name": "MHennel"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-03",
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
                <h1 class="text-white">Troubleshooting Mettler IND570 Weigh in Motion Scale Communication Issue via Profibus DP</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MHennel</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1474</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">471</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently upgrading a weigh in motion scale on a conveyor system from an AP Dataweigh to a Mettler IND570. The communication protocol being used is Profibus DP. In the past, I have never encountered any issues with the old scale or previous versions of Mettler scales when it comes to obtaining the final weight at the end of the weigh cycle. However, with this new scale, I am only able to see the instantaneous weight on the scale in the input table, not the final weight. Despite following the documentation and sample program from Mettler, I have not been able to make any PLC changes that would solve this issue. The technicians onsite, who are unfamiliar with installing a Profibus card on a scale, have also been unable to identify a solution within the scale itself. While I can access the data needed using a terminal emulator via the serial port, I require the data to be transmitted over Profibus. If anyone has encountered a similar situation or has any suggestions, I would greatly appreciate your input.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>As I transition from 560s to 570s, I have not had the opportunity to delve into the programming on the scale side. Similarly, I have some additional I/O available that allows me to capture the weight at the exact moment needed. There is a dedicated programming team in North Carolina that works closely with sales to ensure the specifications are accurate before installation. Have you reached out to them? They have been a valuable resource for me in addressing my specific needs prior to purchase.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Frost999</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Obtaining the real-time weight at the end of the scale can be achieved by examining the exit PE within the status word. However, it is important to note that this instant weight may not necessarily match the actual measured weight, potentially leading to a significant discrepancy. Fortunately, after consulting with a colleague, I have received guidance on a solution to this issue. By issuing a read command when the exit PE is activated, I should be able to obtain the accurate weight measurement. Subsequently, additional commands will be required to restart the process. I plan to conduct testing later this week to ensure the accuracy of the measurements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MHennel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully resolved the issue. Obtaining scale weight, which was once a straightforward process, has now become much more intricate. To retrieve the data, you must send a request to the scale and use the appropriate Shared Data Command to obtain the desired weight value. Following that, a series of Acknowledgements are necessary to reset and repeat the process. While it is functional, the current method requires more effort than should be necessary to simply obtain the processed weight at the conclusion of the weighing cycle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MHennel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I need help navigating a road block with my s315. The manual is not providing clear instructions. Can you share what steps you took to resolve a similar issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>07ghost88</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for guidance on pulling data using a Step 7 program, check out Chapter 6 of the IND570 PLC Interface Manual. While the process may require more effort compared to older Mettler scales, it is known for its reliability. Click on the link provided to access the manual.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MHennel</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your assistance with this issue related to Profinet. I am finding this particular situation to be more challenging than the previous profile version. Even our scale distributor suggested that I send an iw0104 SD, but did not provide clear guidance on how to obtain it. Can you please help me with direction on how to access this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>07ghost88</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The manual features Profinet examples in Chapter 7, where the PLC section closely resembles the Profibus version. It is crucial to correctly configure the scaling message slots to ensure proper functionality. The technician I consulted advised me to write to a specific memory location to initiate data transmission. Ultimately, I took on the task of configuring the scale communications independently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MHennel</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I've discovered that the individual who configured this hardware only set up one message slot. I believe having all four message slots is essential for effective weight capture. Otherwise, I will be unable to proceed efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>07ghost88</span></li>
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
<h4 class='text-dark'>FAQ: 1.  I am upgrading to a Mettler IND570 weigh in motion scale using Profibus DP, but I can only see the instantaneous weight and not the final weight. How can I resolve this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Try ensuring that the PLC programming aligns with the requirements of the Mettler scale and Profibus DP communication protocol. Double-check the configuration settings and consider consulting with experienced professionals for troubleshooting.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I followed the documentation and sample program from Mettler for the IND570 scale, but I am still unable to obtain the final weight over Profibus DP. What should I do next?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Verify the Profibus card installation on the scale and ensure it is correctly integrated with your system. Review the PLC changes, bus configuration, and data transmission settings to ensure they are in line with the scale's requirements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  I can access the required data using a terminal emulator through the serial port, but I need it transmitted over Profibus. How can I achieve this with the Mettler IND570 scale?</h4>
<p class='text-muted'><strong>Answer:</strong> -  Check the Profibus communication setup and parameters to ensure the correct data transfer. Consider seeking assistance from experts familiar with Profibus DP and Mettler scales to troubleshoot and configure the communication for seamless data transmission.</p>
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
