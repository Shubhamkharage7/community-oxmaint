
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently dealing with issues regarding a Modbus meter. I am not receiving any meaningful data back from it, despite following the instructions in its datasheet. I am wondering if this meter is actually a Rayleigh instrument. The data I am receiving is as follows: XMT:">
    <meta name="keywords" content="modbus meter, hager ecr380d, rayleigh instrument, troubleshooting issues, data retrieval problem, datasheet instructions, modbus communication, xmt data, rcv data, guidance needed, technical support, meter configuration, data interpretation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-modbus-meter-hager-ecr380d-is-it-actually-a-rayleigh-instrument">
    <title>Troubleshooting Issues with Modbus Meter Hager ECR380D: Is it Actually a Rayleigh Instrument? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Issues with Modbus Meter Hager ECR380D: Is it Actually a Rayleigh Instrument? | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently dealing with issues regarding a Modbus meter. I am not receiving any meaningful data back from it, despite following the instructions in its datasheet. I am wondering if this meter is actually a Rayleigh instrument. The data I am receiving is as follows: XMT:">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-modbus-meter-hager-ecr380d-is-it-actually-a-rayleigh-instrument">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Issues with Modbus Meter Hager ECR380D: Is it Actually a Rayleigh Instrument? | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently dealing with issues regarding a Modbus meter. I am not receiving any meaningful data back from it, despite following the instructions in its datasheet. I am wondering if this meter is actually a Rayleigh instrument. The data I am receiving is as follows: XMT:">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-modbus-meter-hager-ecr380d-is-it-actually-a-rayleigh-instrument"
      },
      "headline": "Troubleshooting Issues with Modbus Meter Hager ECR380D: Is it Actually a Rayleigh Instrument?",
      "description": "Hello everyone, I am currently dealing with issues regarding a Modbus meter. I am not receiving any meaningful data back from it, despite following the instructions in its datasheet. I am wondering if this meter is actually a Rayleigh instrument. The data I am receiving is as follows: XMT:",
      "author": {
        "@type": "Person",
        "name": "leeroybrown"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">Troubleshooting Issues with Modbus Meter Hager ECR380D: Is it Actually a Rayleigh Instrument?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>leeroybrown</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">378</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">299</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently dealing with issues regarding a Modbus meter. I am not receiving any meaningful data back from it, despite following the instructions in its datasheet. I am wondering if this meter is actually a Rayleigh instrument. The data I am receiving is as follows: XMT: [100][000][000][000][000][006][012][003][019][191][000][004] and RCV: [100][000][000][000][000][003][012][131][002]. Can anyone provide guidance on troubleshooting this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have more details about the specific device you are using as the Modbus Master? It's important to note that when dealing with Modbus Communications, if you encounter strange data, consider whether the devices on each end are using 0 or 1 based data addressing. Also, when working with 32-bit values, you may need to swap the word order.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am perplexed by the XMT and RCV packets displayed, as they appear to be Modbus/TCP packets while the meter only supports Modbus RTU. Are you also utilizing a Modbus/TCP to Modbus RTU converter? Your XMT packet indicates a request for 4 holding registers starting at register address 5055, with the RCV packet receiving an exception response of code 02 ILLEGAL DATA ADDRESS, signifying that the requested registers do not exist on the device.

Upon reviewing the device's Modbus table, available at https://hager.com/intl-en/products/...le/190724_MODBUS_TABLE_FOR_ENERGY_METERS.XLS/, and comparing the Address DEC with Address HEX columns, it appears that the correct starting register address should be 45056 instead of 5055. This discrepancy is due to the document using a 0-based register addressing system, where B000 hex equates to 45056. It is worth noting that 45056 does not correspond to Holding Register 5056 in Modbus notation; instead, it represents a 0-based register address.

For more insights on Modbus register numbering schemes, you can refer to my post on Modbus Register Numbering at control.com. Different Modbus vendors utilize varying notations for documentation, making it essential to understand the differences in numbering schemes.

If you inputted 45056 into your client to generate the XMT packet, you may need to input 445057 for the master/client to correctly request register address 45056.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, jshilze, for your assistance in addressing this issue. I will be visiting the site tomorrow to determine if the suggested solution is effective. Your help is greatly appreciated, as this particular problem had proved challenging for me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>leeroybrown</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey there, I'm thrilled that it worked for you! Your time is valuable, and this solution has definitely saved you a lot of time. However, I can't shake the feeling that I might encounter this issue again in the future. What led you to realize that an extra register was necessary?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>leeroybrown</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm pleased that everything is functioning properly. I would recommend revisiting my earlier post, as I am confident that it addresses your inquiry. In particular, refer to the Modbus register numbering guide I referenced, which mentions that the document follows a 0-based register addressing system, as evidenced by the statement "B000 hex equals 45056." It is noteworthy that hexadecimal register addresses consistently start from 0 (I have yet to come across any instances where this is not the case).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I revisited and bookmarked that discussion thread. Appreciate it once again.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>leeroybrown</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For a detailed explanation of one or zero-based addressing in Modbus, I recommend reading and bookmarking Jschulze's comprehensive guide available at the following link: Modbus Register Numbering.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
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
<h4 class='text-dark'>FAQ: 1. Is the Modbus meter being discussed in the thread a Rayleigh instrument?</h4>
<p class='text-muted'><strong>Answer:</strong> - The user suspects that the Modbus meter may be a Rayleigh instrument. However, based on the provided data XMT: [100][000][000][000][000][006][012][003][019][191][000][004] and RCV: [100][000][000][000][000][003][012][131][002], it is not explicitly confirmed whether it is a Rayleigh instrument or not.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What could be the reason for not receiving meaningful data from the Modbus meter despite following the datasheet instructions?</h4>
<p class='text-muted'><strong>Answer:</strong> - There could be various reasons for not receiving meaningful data from the Modbus meter, such as incorrect configuration settings, communication protocol mismatches, wiring issues, or potential hardware problems. Troubleshooting these aspects may help in resolving the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot issues with the Modbus meter to receive the expected data?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot issues with the Modbus meter, it is recommended to check the configuration settings, ensure the communication protocol settings match between devices, verify the wiring connections, and inspect for any potential hardware faults. Seeking guidance from the manufacturer's technical support or documentation can also be beneficial.</p>
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
