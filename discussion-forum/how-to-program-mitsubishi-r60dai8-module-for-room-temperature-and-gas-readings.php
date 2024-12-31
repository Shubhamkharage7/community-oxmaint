
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently utilizing the Mitsubishi R60DAI8 module to obtain digital values in a library. My next step is to configure the data for room temperature, carbon monoxide, and nitrogen monoxide readings. Should I simply move these values to the corresponding addresses or is there a specific configuration process">
    <meta name="keywords" content="mitsubishi r60dai8 module programming, room temperature sensor configuration, gas readings setup, configuring mitsubishi r60dai8 for temperature and gas, setting up room temperature monitoring, 6">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-program-mitsubishi-r60dai8-module-for-room-temperature-and-gas-readings">
    <title>How to Program Mitsubishi R60DAI8 Module for Room Temperature and Gas Readings | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Program Mitsubishi R60DAI8 Module for Room Temperature and Gas Readings | Oxmaint Community">
    <meta property="og:description" content="I am currently utilizing the Mitsubishi R60DAI8 module to obtain digital values in a library. My next step is to configure the data for room temperature, carbon monoxide, and nitrogen monoxide readings. Should I simply move these values to the corresponding addresses or is there a specific configuration process">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-program-mitsubishi-r60dai8-module-for-room-temperature-and-gas-readings">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Program Mitsubishi R60DAI8 Module for Room Temperature and Gas Readings | Oxmaint Community">
    <meta name="twitter:description" content="I am currently utilizing the Mitsubishi R60DAI8 module to obtain digital values in a library. My next step is to configure the data for room temperature, carbon monoxide, and nitrogen monoxide readings. Should I simply move these values to the corresponding addresses or is there a specific configuration process">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-program-mitsubishi-r60dai8-module-for-room-temperature-and-gas-readings"
      },
      "headline": "How to Program Mitsubishi R60DAI8 Module for Room Temperature and Gas Readings",
      "description": "I am currently utilizing the Mitsubishi R60DAI8 module to obtain digital values in a library. My next step is to configure the data for room temperature, carbon monoxide, and nitrogen monoxide readings. Should I simply move these values to the corresponding addresses or is there a specific configuration process",
      "author": {
        "@type": "Person",
        "name": "Akalya"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-10",
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
                <h1 class="text-white">How to Program Mitsubishi R60DAI8 Module for Room Temperature and Gas Readings</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Akalya</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">182</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">373</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently utilizing the Mitsubishi R60DAI8 module to obtain digital values in a library. My next step is to configure the data for room temperature, carbon monoxide, and nitrogen monoxide readings. Should I simply move these values to the corresponding addresses or is there a specific configuration process involved?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There seems to be some confusion regarding the digital value you're receiving from the module and how to convert it to a temperature or another reading. The R60DAI8 module actually provides an analog output. Are you looking to convert a temperature or another unit into a raw value for output from the analog card, or is the card functioning as an analog input card where you need to convert the raw count into a meaningful value such as temperature? The manual provides guidance on scaling the values on the card itself, or you can scale the raw value manually. For example, if the analog raw value ranges from 0 to 32000 and you want to convert it to degrees Celsius (0-150.0°C), you would divide 32000.0 by 150.0 to get 213.0. So, if the raw value is 16000, dividing it by 213.0 gives you 75.0. It is recommended to convert the raw analog value to a real input. For more information, refer to this manual: https://dl.mitsubishielectric.com/dl/fa/document/manual/plc/sh081235eng/sh081235engd.pdf</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the error, the correct code is R60ADI8. How can I configure the digital value (Daddress) from an analog module?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Akalya</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Within the settings, you have the option to designate the destination of the raw digital value, such as the "D" registers. For scaling purposes, simply click on the module information tab on the left-hand side of the R60ADI8 navigation panel, then select Scaling to adjust the scaling. Additionally, for automatic refresh, I have set up a couple of parameters from D100 to D103.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking for a way to calibrate a sensor by adjusting the zero and span values, you have the option to do this either in the configuration settings or within the PLC program. If you prefer to scale the values in the PLC program, let me know which language you are using (such as ladder logic or Function Block Diagram/ Ladder Logic) and I can provide some recommendations. One approach is to utilize a function block for each analog input, where you can input the scaling information. 
You can input the raw values directly into the D words with a range of 0-32000, or you can scale them to a specific range (e.g. 0-1500) and then convert to a float by dividing by 10 to get a range of 0.0-150.0 (with one decimal place).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently favoring the ladder logic programming language.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Akalya</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The scaling factor on the card is limited to integers between 0 and 1500. For instance, if you want to display a range of 0-150.0 degrees with one decimal place, you can leave it at 1500 and imply a decimal point. On some HMIs, you can set it to imply a decimal point of 1, showing as 0.0-150.0 degrees Celsius. Alternatively, you can convert the integer to a floating point by dividing it by 10, making the range 0.0 to 150.0. Below is a simple conversion for two AI inputs where the raw scaled values are 0-1500 for temperature and 0-1000 for pressure. This information could typically be placed on one contact, but for clarity, I have separated them onto different lines to include comments for each instruction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unable to view the attachment you mentioned. In ladder logic, I can set it up as shown in the images. Do I also need to configure the Digital output value in the previous setting you mentioned? How will the SCADA system receive this information? I would like to input a value of D1 to 3 for the SCADA system. Can I simply use the D1 address instead of 400, or do I need to create a separate program to send this address to the SCADA system?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Akalya</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am puzzled as to why you are unable to view the attachment, which is simply a png image. You can utilize register D1 to D3 or any other configured registers in the AI setup for the scada system to easily read them without the need to transfer them. The scada I/O driver or OPC can access a wide range of addresses in the PLC. I have shared the code again as a jpeg file in case your PC is incompatible with png files. Please note that when converting an integer value to a float, it will occupy two D registers. For instance, if you convert D1 to a float and store it in D10, it will use two registers - D10 and D11. To convert integers into floats and scale them to decimal places, use [INT2FLT D1 D400] for D1, [INT2FLT D2 D402] for D2, and so forth.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How do I program the Mitsubishi R60DAI8 module for room temperature and gas readings?
- To program the Mitsubishi R60DAI8 module for room temperature and gas readings, you would typically need to configure the data by moving the values to the corresponding addresses.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a specific configuration process involved in setting up room temperature, carbon monoxide, and nitrogen monoxide readings?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the specific configuration process involves assigning the data for room temperature, carbon monoxide, and nitrogen monoxide to the corresponding addresses within the Mitsubishi R60DAI8 module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can you provide guidance on how to configure the Mitsubishi R60DAI8 module for obtaining digital values in a library?</h4>
<p class='text-muted'><strong>Answer:</strong> - To configure the Mitsubishi R60DAI8 module for obtaining digital values in a library, you may need to define the data structure and map the values to the appropriate addresses within the module.</p>
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
