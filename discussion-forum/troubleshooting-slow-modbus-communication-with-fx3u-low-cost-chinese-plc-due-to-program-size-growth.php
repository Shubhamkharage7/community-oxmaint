
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As a novice in the field of automation, I have successfully established an automation system that links multiple devices (such as a datalogger and radio) through Modbus RS485 at a speed of 9600Kbps. The system is supported by a PLC program developed in GX WORKS 2. Initially, the program">
    <meta name="keywords" content="troubleshooting modbus communication, fx3u low-cost chinese plc, slow modbus communication, modbus rs485 speed, gx works 2 plc programming, modbus program">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-slow-modbus-communication-with-fx3u-low-cost-chinese-plc-due-to-program-size-growth">
    <title>Troubleshooting Slow Modbus Communication with FX3U Low-Cost Chinese PLC due to Program Size Growth | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Slow Modbus Communication with FX3U Low-Cost Chinese PLC due to Program Size Growth | Oxmaint Community">
    <meta property="og:description" content="As a novice in the field of automation, I have successfully established an automation system that links multiple devices (such as a datalogger and radio) through Modbus RS485 at a speed of 9600Kbps. The system is supported by a PLC program developed in GX WORKS 2. Initially, the program">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-slow-modbus-communication-with-fx3u-low-cost-chinese-plc-due-to-program-size-growth">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Slow Modbus Communication with FX3U Low-Cost Chinese PLC due to Program Size Growth | Oxmaint Community">
    <meta name="twitter:description" content="As a novice in the field of automation, I have successfully established an automation system that links multiple devices (such as a datalogger and radio) through Modbus RS485 at a speed of 9600Kbps. The system is supported by a PLC program developed in GX WORKS 2. Initially, the program">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-slow-modbus-communication-with-fx3u-low-cost-chinese-plc-due-to-program-size-growth"
      },
      "headline": "Troubleshooting Slow Modbus Communication with FX3U Low-Cost Chinese PLC due to Program Size Growth",
      "description": "As a novice in the field of automation, I have successfully established an automation system that links multiple devices (such as a datalogger and radio) through Modbus RS485 at a speed of 9600Kbps. The system is supported by a PLC program developed in GX WORKS 2. Initially, the program",
      "author": {
        "@type": "Person",
        "name": "GcNuc"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-07",
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
                <h1 class="text-white">Troubleshooting Slow Modbus Communication with FX3U Low-Cost Chinese PLC due to Program Size Growth</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>GcNuc</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">431</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">73</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>As a novice in the field of automation, I have successfully established an automation system that links multiple devices (such as a datalogger and radio) through Modbus RS485 at a speed of 9600Kbps. The system is supported by a PLC program developed in GX WORKS 2. Initially, the program utilized around 2000 steps out of the specified 8000 steps, and I monitored the Modbus communication by utilizing the IVRD or IVWR function along with a counter that switches readings every second for each connected device.

However, as the program grew in complexity and consumed more steps (currently around 4900 steps), the Modbus communication began to encounter failures. What used to be a quick 1-second read and write for each device now takes about 5 seconds. Despite adjusting timeout settings and increasing the transmission speed to 19200Kbps, the issue persisted.

I have searched extensively online for a solution to this problem but have not found any. Is there a viable solution to this issue, or is it simply a limitation of the Modbus system? Any advice or guidance on this matter would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is likely that the performance of the PLC in processing Modbus transactions is influenced by the available time for processing. My assumption is that the PLC is equipped with a watchdog timer that resets whenever it handles the I/O tasks. If the I/O tasks are not completed before the watchdog timer expires, the PLC will encounter faults. The PLC likely prioritizes processing Modbus codes after evaluating logic and before fulfilling I/O tasks. As the program lengthens, the PLC has less time to dedicate to processing Modbus transactions effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I don't have much knowledge about GX WORKS 2, an estimated transaction completion time is approximately 4.2 seconds based on the number of transactions. It's a rough estimate, but it's advisable to allocate at least 50ms for each transaction exchange from start to finish. Keep in mind that this timeframe may vary depending on the workload.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my opinion, the issue may be related to the processing time of the PLC for Modbus transactions. It is possible that the PLC utilizes a watchdog timer that needs to be reset each time it handles I/O tasks. If the I/O tasks are not completed within the specified timeframe, the PLC may experience faults. The PLC likely prioritizes processing Modbus codes after evaluating logic and before servicing I/O tasks. As the program length increases, the time available for processing Modbus transactions decreases. Some PLC models offer a feature that allows users to adjust the allocation of CPU time between the user program and other tasks like communication. It is unclear if this FX model includes this feature, but modifying these allocations could potentially resolve the issue. However, without knowing the number of devices being queried, their turnaround times, or the volume of data being transferred, it is difficult to determine the most effective solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The FX3 clones typically come with only 8k of memory for the program, indicating that your program is likely not very large. In most clones, the PLC parameters cannot be modified and support for MB directly is not available. The authentic FX has adapters that support MB as one of the protocols, handling processing such as CRC independently of the PLC itself. Additionally, most clones have firmware versions that are older and slower compared to the later FX3 models. Questions to consider include whether the interface is an add-on card like the 232/485 BD-MB, or if you wrote your own code for CRC, etc. MB is known for being power hungry due to its CRC generation, which can impact processing speed. In one instance, using an FX3U without the MB version card resulted in slower performance, even after eventually obtaining the correct card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a PLC system, the FX unit handles communications at the end of each scan by alternating between sending and receiving data. When multiple stations are involved and the PLC scan time is lengthy, it can take several seconds to complete communication with all stations. A strict order of request-response is followed in serial communication. Monitoring the scan times, such as the last, maximum, and minimum, can be done in the D8000 system registers. By calculating the number of scans required to communicate with all stations and multiplying it by the scan time, the minimum time needed for communication can be determined. Increasing the baud rate may yield minimal improvements, as the bottleneck does not lie there. Additionally, if a cloned FX unit operates slower than the original, communication delays may worsen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the Modbus communication slowing down as the program size in the FX3U PLC increases?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The slowdown in Modbus communication could be due to the increased complexity of the program which consumes more steps, leading to longer processing times and delays in data exchange.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Can adjusting timeout settings and increasing transmission speed resolve the slow Modbus communication issue with the FX3U PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While adjusting timeout settings and increasing transmission speed (e.g., from 9600Kbps to 19200Kbps) may help in some cases, it may not completely resolve the issue if the program size and complexity are causing significant delays.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is the slow Modbus communication issue a limitation of the Modbus system itself?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The slow communication issue is more likely related to the program size and complexity within the FX3U PLC rather than being a limitation of the Modbus system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What steps can be taken to address the slowdown in Modbus communication with the FX3U PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address the slowdown, consider optimizing the PLC program, reducing unnecessary steps, improving communication efficiency, and possibly implementing asynchronous communication methods to enhance data exchange speed.</p>
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
