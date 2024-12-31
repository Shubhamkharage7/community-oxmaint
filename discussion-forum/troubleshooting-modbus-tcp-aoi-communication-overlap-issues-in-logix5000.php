
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey everyone, Ive been struggling to establish communication between Modbus TCP and Rockwells Modbus TCP AOI for reading purposes. Ive encountered some issues and was hoping to get some assistance. It appears that when I attempt to request data from holding registers (a total of 34), only about ten">
    <meta name="keywords" content="modbus tcp, aoi, communication issues, troubleshooting, logix5000, modbus tcp aoi, overlap issues, holding registers, sts_overload alarm, transaction status, exception, documentation, execution period, poll">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-aoi-communication-overlap-issues-in-logix5000">
    <title>Troubleshooting Modbus TCP AOI Communication Overlap Issues in Logix5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus TCP AOI Communication Overlap Issues in Logix5000 | Oxmaint Community">
    <meta property="og:description" content="Hey everyone, Ive been struggling to establish communication between Modbus TCP and Rockwells Modbus TCP AOI for reading purposes. Ive encountered some issues and was hoping to get some assistance. It appears that when I attempt to request data from holding registers (a total of 34), only about ten">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-aoi-communication-overlap-issues-in-logix5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus TCP AOI Communication Overlap Issues in Logix5000 | Oxmaint Community">
    <meta name="twitter:description" content="Hey everyone, Ive been struggling to establish communication between Modbus TCP and Rockwells Modbus TCP AOI for reading purposes. Ive encountered some issues and was hoping to get some assistance. It appears that when I attempt to request data from holding registers (a total of 34), only about ten">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-aoi-communication-overlap-issues-in-logix5000"
      },
      "headline": "Troubleshooting Modbus TCP AOI Communication Overlap Issues in Logix5000",
      "description": "Hey everyone, Ive been struggling to establish communication between Modbus TCP and Rockwells Modbus TCP AOI for reading purposes. Ive encountered some issues and was hoping to get some assistance. It appears that when I attempt to request data from holding registers (a total of 34), only about ten",
      "author": {
        "@type": "Person",
        "name": "defcon.klaxon"
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
                <h1 class="text-white">Troubleshooting Modbus TCP AOI Communication Overlap Issues in Logix5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>defcon.klaxon</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2454</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">51</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey everyone, I've been struggling to establish communication between Modbus TCP and Rockwell's Modbus TCP AOI for reading purposes. I've encountered some issues and was hoping to get some assistance. It appears that when I attempt to request data from holding registers (a total of 34), only about ten registers are successfully read. At times, I receive an STS_Overload alarm, while other times there is no alarm, but the transaction status always shows as "exception". I have gone through the documentation thoroughly and have experimented with the execution period of the Periodic Task and the Poll Interval of the AOI, but the issue persists. Any advice would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If your ACD upload is showing a faulted state and you need assistance with wireshark analysis, referring to the Modbus Slave device manual can provide valuable insight. Overlap issues may indicate that your peer device failed to respond in time for the next scheduled read attempt. By checking the exception code, you can pinpoint the specific issue at hand. It is possible that you are trying to read data that is not supported by the device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are unable to share your complete automated call distribution (ACD) settings, you can still export and upload just one specific ladder logic rung from your alarm output indicator (AOI). By doing so, you will be able to preserve all of the important configuration and exception values within that particular rung.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Recently, I utilized the Modbus TCP Add-On Instruction (AOI) from Rockwell and encountered a problem similar to what has been described here. Can someone provide assistance with this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mohamedazimal27</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the issue of only a portion of the holding registers being successfully read when using Modbus TCP AOI for communication?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue of only about ten registers being successfully read while attempting to request data from 34 holding registers could be related to communication overlap issues or configuration settings. It's important to review the setup and configuration of the communication parameters to ensure proper data exchange.</p>
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
