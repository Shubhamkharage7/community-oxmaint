
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on a project that involves reading weight data from a weigh head in ASCII format. Since I am not very familiar with ASCII, I am facing some difficulties with this task. The weigh head is operating in cyclic mode, and although I am">
    <meta name="keywords" content="ascii weight data, weigh head, start delimiter, end delimiter, setting up, cyclic mode, reading data, accuracy, manual, device specification, ascii format, project, difficulties, understanding ascii, receiving data, configuration, weigh scale, data interpretation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-start-and-end-delimiters-for-ascii-weight-data-from-a-weigh-head-a-guide">
    <title>Setting up Start and End Delimiters for ASCII Weight Data from a Weigh Head: A Guide | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting up Start and End Delimiters for ASCII Weight Data from a Weigh Head: A Guide | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on a project that involves reading weight data from a weigh head in ASCII format. Since I am not very familiar with ASCII, I am facing some difficulties with this task. The weigh head is operating in cyclic mode, and although I am">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-start-and-end-delimiters-for-ascii-weight-data-from-a-weigh-head-a-guide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting up Start and End Delimiters for ASCII Weight Data from a Weigh Head: A Guide | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on a project that involves reading weight data from a weigh head in ASCII format. Since I am not very familiar with ASCII, I am facing some difficulties with this task. The weigh head is operating in cyclic mode, and although I am">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-start-and-end-delimiters-for-ascii-weight-data-from-a-weigh-head-a-guide"
      },
      "headline": "Setting up Start and End Delimiters for ASCII Weight Data from a Weigh Head: A Guide",
      "description": "Hello everyone, I am currently working on a project that involves reading weight data from a weigh head in ASCII format. Since I am not very familiar with ASCII, I am facing some difficulties with this task. The weigh head is operating in cyclic mode, and although I am",
      "author": {
        "@type": "Person",
        "name": "Chris90"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-15",
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
                <h1 class="text-white">Setting up Start and End Delimiters for ASCII Weight Data from a Weigh Head: A Guide</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Chris90</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1452</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">321</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on a project that involves reading weight data from a weigh head in ASCII format. Since I am not very familiar with ASCII, I am facing some difficulties with this task. The weigh head is operating in cyclic mode, and although I am able to read the data being received, I am unsure if it is accurate or makes sense. My main question is how can I properly set up the start and end delimiters as specified in the manual for this device?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The termination or deliver character should be a carriage return, also known as <CR> or ASCII code 13 decimal = 0x0D hexadecimal. Each sample starts with the initial character $(24H), which is the dollar sign '$'. The SINT input data displayed does not contain these characters, indicating a potential issue with the serial communication. This could be due to a mismatch in baud rate, stop bits, or parity bit configuration. If using RS-485, it is possible that the signal wires are reversed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have just confirmed that the baud rate is set to 232, but despite this, I am not receiving any data. It seems that I will need to trace the issue from the weigh head, which is connected via fiber to a converter in our panel as shown in the attached image, all of which were provided by Weightron. Can anyone confirm if, with the weigh head set to cyclical mode instead of remote commands, I should be able to simply read data without the need to transmit or configure the ASCII transmit parameters?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris90</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using the weigh head set to cyclical instead of remote commands, will I be able to immediately read data without sending any commands or configuring ASCII transmit parameters? Initially, there may be some issues at startup as the buffer/UART will be full, requiring the code to discard some initial data. However, once the buffer is cleared and data is being read by the PLC efficiently, you should be able to read data smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully switched the wires and now I am seeing activity and the data is showing accurate readings (weigh head reads 0). Now, I just need to analyze and interpret the data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris90</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Chris90 expressed gratitude for the advice on swapping wires, which resulted in activity and sensible data readings. Now, the focus is on manipulating the data further to achieve desired outcomes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post by user Chris90, it was mentioned that data manipulation is now needed. Upon closer examination of the attached image in the original post, it appears possible to configure the PLC serial port to detect both "Start" and "Termination" delimiters. One suggestion is to set '$$' (or '$24' - a single dollar sign) as the former delimiter and '$r' as the latter delimiter to observe the content in the SINT array Local:1:IO.ASCII.RxData. It may be possible to convert the data directly to a DINT using STOD or to a REAL using STOR instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Learn how to transfer data from the .RxData array to a string with this helpful example. Check out this resource on Rockwell Automation's website for a step-by-step guide (https://literature.rockwellautomation.com/idc/groups/literature/documents/um/5069-um003_-en-p.pdf#page=123). Take note of the CPS instruction mentioned in the process.

To prevent the 5069-SERIAL from updating data while being copied, consider using CPS on the Transaction ID. Adjust the CPS parameters and string length as needed if the Start and Termination delimiters are present in the .RxData array. If necessary, you can exclude the delimiters from .RxData by using the Exclude option in the delimiter configuration settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you very much for your assistance! Yes, I have a system in place to respond to transaction IDs and issue alerts if an ID has not been updated within a certain timeframe.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris90</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible for you to specify the model that supports ethernet communication? I have yet to come across an optical fiber RS-232 system, which I believe would be quite costly. Additionally, I'm curious about the pricing of the 5069-SERIAL module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L33er</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In today's technologically advanced world, one might expect the presence of Ethernet connectivity, but unfortunately, the model d440is does not offer this feature. Instead, we are communication with other third-party devices using Modbus TCP/IP.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chris90</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user by the name of L33er raised a question about the availability of ethernet communication in a specific model. They expressed skepticism about the existence and potential high cost of an optical fibre RS-232 system, specifically mentioning the expense of the 5069-SERIAL model. The scale in question is ATEX rated, making an optical interface a logical choice. For more information on ATEX-rated scales with optical interfaces, visit https://www.coopbilanciai.com/en/products/d440is-atex/.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tdoa</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I set up the start and end delimiters for ASCII weight data from a weigh head operating in cyclic mode?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set up the start and end delimiters for ASCII weight data, refer to the manual provided for the weigh head device. The manual should specify the exact characters or sequences that serve as the start and end delimiters for the data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is it important to properly define start and end delimiters for reading weight data in ASCII format?</h4>
<p class='text-muted'><strong>Answer:</strong> - Defining start and end delimiters is crucial as it helps in accurately identifying the beginning and end of each data packet. This ensures that the received data is parsed correctly and in the intended format.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What challenges can arise if the start and end delimiters are not correctly set for ASCII weight data from a weigh head?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the start and end delimiters are not properly defined, it can lead to misinterpretation of the data, resulting in inaccurate readings or parsing errors. This can affect the overall functionality and reliability of the weight measurement system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any troubleshooting steps available if I am unsure whether the data received is accurate or makes sense?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are unsure about the accuracy or sense of the received data, you can perform troubleshooting steps such as verifying the delimiter settings, checking for any communication errors, and ensuring proper data conversion processes are in place.</p>
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
