
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello there! I am currently endeavoring to establish communication between a PLC Logix5562S, 1756-EN2T, and a Dobot Robot using TCP with the MSG instruction. I have successfully created a connection with a socket and am able to both send and receive messages. The Dobot Robot is programmed to transmit">
    <meta name="keywords" content="troubleshooting tcp communication, plc logix5562s, dobot robot, msg instruction, 1756-en2t, socket connection, readsocket function, 8">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-tcp-communication-with-msg-instruction-on-plc-logix5562s-and-dobot-robot">
    <title>Troubleshooting TCP Communication with MSG Instruction on PLC Logix5562S and Dobot Robot | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting TCP Communication with MSG Instruction on PLC Logix5562S and Dobot Robot | Oxmaint Community">
    <meta property="og:description" content="Hello there! I am currently endeavoring to establish communication between a PLC Logix5562S, 1756-EN2T, and a Dobot Robot using TCP with the MSG instruction. I have successfully created a connection with a socket and am able to both send and receive messages. The Dobot Robot is programmed to transmit">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-tcp-communication-with-msg-instruction-on-plc-logix5562s-and-dobot-robot">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting TCP Communication with MSG Instruction on PLC Logix5562S and Dobot Robot | Oxmaint Community">
    <meta name="twitter:description" content="Hello there! I am currently endeavoring to establish communication between a PLC Logix5562S, 1756-EN2T, and a Dobot Robot using TCP with the MSG instruction. I have successfully created a connection with a socket and am able to both send and receive messages. The Dobot Robot is programmed to transmit">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-tcp-communication-with-msg-instruction-on-plc-logix5562s-and-dobot-robot"
      },
      "headline": "Troubleshooting TCP Communication with MSG Instruction on PLC Logix5562S and Dobot Robot",
      "description": "Hello there! I am currently endeavoring to establish communication between a PLC Logix5562S, 1756-EN2T, and a Dobot Robot using TCP with the MSG instruction. I have successfully created a connection with a socket and am able to both send and receive messages. The Dobot Robot is programmed to transmit",
      "author": {
        "@type": "Person",
        "name": "Manchancleta"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-30",
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
                <h1 class="text-white">Troubleshooting TCP Communication with MSG Instruction on PLC Logix5562S and Dobot Robot</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Manchancleta</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">249</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">75</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello there! I am currently endeavoring to establish communication between a PLC Logix5562S, 1756-EN2T, and a Dobot Robot using TCP with the MSG instruction. I have successfully created a connection with a socket and am able to both send and receive messages. The Dobot Robot is programmed to transmit 1440 bytes of data every 200ms. However, I am encountering an issue with continuously reading using the ReadSocket function. Despite attempting to reset the MSG instruction, the problem persists. The only workaround I have found is to delete the socket and create a new one each time I wish to read a new message, but I am sure there must be a more efficient solution to this dilemma.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're unable to continually read using ReadSocket.Click, it's important to troubleshoot the issue further. Are you receiving an error message? If so, what is the error code? It's essential to confirm that there are no active socket Writes while attempting a Socket Read to ensure proper functionality. Additionally, consider checking for any service timeouts that may be affecting the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not encountering any errors while using the Dobot Robot TCP remote control. I have observed that certain bytes, such as those related to the timestamp, update their values without needing the socket to be reset. However, most bytes do not seem to update. For instance, when changing the robot state, a byte should reflect this change but remains unchanged. I am also running a SocketWrite on another port for sending commands, which I set up on a separate socket. Could this setup be causing the issue?

The Dobot Robot TCP remote control operates by utilizing port 29999 for sending commands and port 30005 for reading the 1440 bytes of information it transmits every 200ms. I have configured the SocketRead with the "extended message" option. An additional problem I have noticed is that when I switch the Trigger[27] state to receive new messages, it starts receiving garbage data until I reset the socket. Adjusting the Timeout value did not have any effect. 

Do I need to trigger the SocketRead every time I wish to read information? If so, would setting up a timer to trigger it be necessary? I have attempted to trigger the SocketRead without success. If there is any information missing that could help diagnose the issue, please let me know.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Manchancleta</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Using Socket AOI is highly recommended over creating your own code from scratch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I troubleshoot issues with continuously reading data using the MSG instruction in a PLC Logix5562S when communicating with a Dobot Robot over TCP?
- Answer: One potential troubleshooting step could be to check the configuration settings of the MSG instruction to ensure it aligns with the data transmission rate of the Dobot Robot. Additionally, verifying the socket connection and resetting the MSG instruction may help resolve the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why am I experiencing difficulties with reading messages continuously using the ReadSocket function in my PLC Logix5562S setup with a Dobot Robot?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: The issue could be related to how the ReadSocket function is handling incoming data packets from the Dobot Robot. It is recommended to review the function's implementation and consider optimizing the reading process for smoother communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a more efficient solution than deleting and recreating the socket each time to resolve the problem of continuously reading messages from the Dobot Robot in a PLC Logix5562S system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: It is advisable to explore alternative approaches such as adjusting the communication settings, optimizing the MSG instruction parameters, or implementing error-handling mechanisms to enhance the efficiency of reading messages without the need for socket deletion and recreation.</p>
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
