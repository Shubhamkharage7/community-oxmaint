
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am seeking to integrate a Red Lion Cub5B00 counter with a Graphite G12 PLC/HMI for count display. However, after approximately an hour of the PLC being powered on, I encounter a loss of connection with the Cub counter. The data communication light (red light) on the RS485 port">
    <meta name="keywords" content="red lion graphite g12, red lion cub counter, troubleshooting connection loss, rs485 port, plc/hmi integration, data communication issues, red lion cub5b00, connection problems, count display, green flashing light, red">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-connection-loss-between-red-lion-graphite-g12-and-red-lion-cub-counter">
    <title>Troubleshooting Connection Loss between Red Lion Graphite G12 and Red Lion Cub Counter | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Connection Loss between Red Lion Graphite G12 and Red Lion Cub Counter | Oxmaint Community">
    <meta property="og:description" content="I am seeking to integrate a Red Lion Cub5B00 counter with a Graphite G12 PLC/HMI for count display. However, after approximately an hour of the PLC being powered on, I encounter a loss of connection with the Cub counter. The data communication light (red light) on the RS485 port">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-connection-loss-between-red-lion-graphite-g12-and-red-lion-cub-counter">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Connection Loss between Red Lion Graphite G12 and Red Lion Cub Counter | Oxmaint Community">
    <meta name="twitter:description" content="I am seeking to integrate a Red Lion Cub5B00 counter with a Graphite G12 PLC/HMI for count display. However, after approximately an hour of the PLC being powered on, I encounter a loss of connection with the Cub counter. The data communication light (red light) on the RS485 port">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-connection-loss-between-red-lion-graphite-g12-and-red-lion-cub-counter"
      },
      "headline": "Troubleshooting Connection Loss between Red Lion Graphite G12 and Red Lion Cub Counter",
      "description": "I am seeking to integrate a Red Lion Cub5B00 counter with a Graphite G12 PLC/HMI for count display. However, after approximately an hour of the PLC being powered on, I encounter a loss of connection with the Cub counter. The data communication light (red light) on the RS485 port",
      "author": {
        "@type": "Person",
        "name": "Nman"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-20",
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
                <h1 class="text-white">Troubleshooting Connection Loss between Red Lion Graphite G12 and Red Lion Cub Counter</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Nman</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">270</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">7</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am seeking to integrate a Red Lion Cub5B00 counter with a Graphite G12 PLC/HMI for count display. However, after approximately an hour of the PLC being powered on, I encounter a loss of connection with the Cub counter. The data communication light (red light) on the RS485 port ceases to illuminate, despite the continued presence of the green flashing light on the port.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings and welcome to the PLCTalk forum community! Can you share which driver you are utilizing to establish communication between the Cub5B00 and the Graphite G12? Are you currently monitoring error counters or diagnostics for the driver? Let's discuss and troubleshoot this together.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In resolving the issue, I ultimately turned to Modbus and a separate counter. However, I believe the solution lies in utilizing raw data and transmitting messages via serial communication, such as $N012. Thank you for your response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nman</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Q: Why does the connection between Red Lion Graphite G12 and Red Lion Cub counter get lost after an hour of the PLC being powered on?
    The loss of connection could be due to various factors such as communication settings, cable issues, power fluctuations, or software configuration errors.
  
2. Q: What could be causing the data communication light on the RS485 port to stop illuminating while the green flashing light remains active?
    The specific behavior of the lights could indicate a potential issue with the RS485 communication protocol, including incorrect baud rates, parity settings, or noise interference on the communication line.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot and resolve the connection loss between the Red Lion Graphite G12 and Cub counter?</h4>
<p class='text-muted'><strong>Answer:</strong> Troubleshooting steps may involve checking the RS485 cable connections, verifying communication settings on both devices, ensuring proper grounding, and testing the system with different configurations to identify the root cause of the connection loss.</p>
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
