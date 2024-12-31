
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello to all the intelligent and knowledgeable individuals out there. I am currently facing an issue with my HMI connected to 2 PLCs via ethernet. These PLCs are controlling 2 systems within a single machine. The problem arises when the sensor readings on the HMI start freezing intermittently. Restarting">
    <meta name="keywords" content="plc troubleshooting, hmi connectivity, intermittent freezing issue, sensor readings, ethernet connection, ai card, 1769-if41, abnormal sensor readings, system malfunction, feedback failure, sensor data, plc restart, intermittent hmi problem, machine">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-intermittent-plc-freezing-issue-with-hmi-connectivity">
    <title>Troubleshooting Intermittent PLC Freezing Issue with HMI Connectivity | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Intermittent PLC Freezing Issue with HMI Connectivity | Oxmaint Community">
    <meta property="og:description" content="Hello to all the intelligent and knowledgeable individuals out there. I am currently facing an issue with my HMI connected to 2 PLCs via ethernet. These PLCs are controlling 2 systems within a single machine. The problem arises when the sensor readings on the HMI start freezing intermittently. Restarting">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-intermittent-plc-freezing-issue-with-hmi-connectivity">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Intermittent PLC Freezing Issue with HMI Connectivity | Oxmaint Community">
    <meta name="twitter:description" content="Hello to all the intelligent and knowledgeable individuals out there. I am currently facing an issue with my HMI connected to 2 PLCs via ethernet. These PLCs are controlling 2 systems within a single machine. The problem arises when the sensor readings on the HMI start freezing intermittently. Restarting">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-intermittent-plc-freezing-issue-with-hmi-connectivity"
      },
      "headline": "Troubleshooting Intermittent PLC Freezing Issue with HMI Connectivity",
      "description": "Hello to all the intelligent and knowledgeable individuals out there. I am currently facing an issue with my HMI connected to 2 PLCs via ethernet. These PLCs are controlling 2 systems within a single machine. The problem arises when the sensor readings on the HMI start freezing intermittently. Restarting",
      "author": {
        "@type": "Person",
        "name": "Syahmi Noordin"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-09",
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
                <h1 class="text-white">Troubleshooting Intermittent PLC Freezing Issue with HMI Connectivity</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Syahmi Noordin</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">227</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">115</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello to all the intelligent and knowledgeable individuals out there. I am currently facing an issue with my HMI connected to 2 PLCs via ethernet. These PLCs are controlling 2 systems within a single machine. The problem arises when the sensor readings on the HMI start freezing intermittently. Restarting the PLC resolves the issue temporarily. The PLC in question is connected to 3 sensors (4-20mA), and the readings from these sensors become abnormal during the freezing issue. I suspect the issue may be related to the AI card (1769-IF41) in the PLC. Additionally, the button programmed on the HMI to start the system also fails to function. This leads me to believe that the problematic PLC is not receiving feedback from the HMI. I would greatly appreciate insights from your collective experience in identifying the root cause of this issue. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Insufficient isolation could result in issues with 4-20mA sensors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Syahmi Noordin asked for help from experienced individuals in the field. He suggested connecting to the PLC's to investigate issues with freezing and recommended rebooting them to potentially resolve errors in the program. He also advised trying to disconnect sensors one by one during a freeze and checking for errors online. Additionally, he inquired whether the system is new or if the freezing issue recently began.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why are sensor readings on the HMI freezing intermittently when connected to 2 PLCs via ethernet?</h4>
<p class='text-muted'><strong>Answer:</strong> - The freezing issue may be related to a potential problem with the AI card (1769-IF41) in one of the PLCs, causing abnormal readings from the connected sensors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I temporarily resolve the intermittent freezing issue with the sensor readings on the HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - Restarting the problematic PLC has been mentioned as a temporary solution to resolve the intermittent freezing issue with the sensor readings on the HMI.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why is the button programmed on the HMI to start the system failing to function?</h4>
<p class='text-muted'><strong>Answer:</strong> - The failure of the button programmed on the HMI to start the system could be due to the problematic PLC not receiving feedback from the HMI, indicating a potential communication issue between the PLC and the HMI.</p>
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
