
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently struggling with getting a G306A panel to properly communicate with an SDM120CTM meter through the Red Lion device. While I am able to successfully communicate with the meter using PC Modbus software, the response received from the meter is not being correctly interpreted by the Red">
    <meta name="keywords" content="troubleshooting red lion g306a, sdm120ct modbus meter, red lion communication issues, modbus software communication, big endian float interpretation, crimson 3 configuration, float tag voltage reading, register 30001 request, hex">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-red-lion-g306a-communication-with-sdm120ct-modbus-meter">
    <title>Troubleshooting Red Lion G306A Communication with SDM120CT Modbus Meter | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Red Lion G306A Communication with SDM120CT Modbus Meter | Oxmaint Community">
    <meta property="og:description" content="I am currently struggling with getting a G306A panel to properly communicate with an SDM120CTM meter through the Red Lion device. While I am able to successfully communicate with the meter using PC Modbus software, the response received from the meter is not being correctly interpreted by the Red">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-red-lion-g306a-communication-with-sdm120ct-modbus-meter">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Red Lion G306A Communication with SDM120CT Modbus Meter | Oxmaint Community">
    <meta name="twitter:description" content="I am currently struggling with getting a G306A panel to properly communicate with an SDM120CTM meter through the Red Lion device. While I am able to successfully communicate with the meter using PC Modbus software, the response received from the meter is not being correctly interpreted by the Red">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-red-lion-g306a-communication-with-sdm120ct-modbus-meter"
      },
      "headline": "Troubleshooting Red Lion G306A Communication with SDM120CT Modbus Meter",
      "description": "I am currently struggling with getting a G306A panel to properly communicate with an SDM120CTM meter through the Red Lion device. While I am able to successfully communicate with the meter using PC Modbus software, the response received from the meter is not being correctly interpreted by the Red",
      "author": {
        "@type": "Person",
        "name": "AdrianEL"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-06",
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
                <h1 class="text-white">Troubleshooting Red Lion G306A Communication with SDM120CT Modbus Meter</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AdrianEL</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1078</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">21</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently struggling with getting a G306A panel to properly communicate with an SDM120CTM meter through the Red Lion device. While I am able to successfully communicate with the meter using PC Modbus software, the response received from the meter is not being correctly interpreted by the Red Lion. For example, when requesting register 30001 (using a 04 request) for the meter voltage, I receive the response in Hex 43 73 4C CD, which corresponds to a Big Endian coding for Float 243.3 - the correct voltage reading. However, the numbers displayed by the Red Lion are not being interpreted as a Big Endian Float in the same manner. Can anyone provide guidance on how to configure Crimson 3 in order to display a Float Tag with the correct voltage reading? Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Dealing with Modbus can be challenging, but I've found that Redlion Crimson stands out as user-friendly. In the image, you can see a connection to a Teltonika Router with Register Address 143 and Register Number 144, which can be a bit frustrating. I've included the settings I used in Crimson to read the latitude. If you're still stuck, you can explore the Manipulation drop-down menu.

If you're facing difficulties, consider converting your data to binary. For instance, converting 43 73 4C CD to binary and setting the HMI to read it as an integer can help you identify any needed manipulations. With an EXOR HMI, I had to read 143 and apply two different swap manipulations to achieve the same result. This is why I believe that Redlion offers a more straightforward user experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Bryan, I have encountered an issue with the Register Address and Register Number on the Red Lion device. Even though Address 0 corresponds to Number 1, I am unable to retrieve meaningful data using Red Lion Modbus. Interestingly, when I connect the meter to a PC with a Modbus Master, I am able to extract relevant data, such as the value 43 73 4C CD. Strangely, I cannot seem to obtain this information using the Red Lion tag, not matter how I format it. I am starting to consider removing the Eastron meters from my setup, as the Chint Meter is being read perfectly by the Red Lion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AdrianEL</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you utilizing the Data Type Word for Real numbers? Have you considered modifying the Manipulation to Reverse Words or Reverse Bytes and interpreting it as a Floating point? Feel free to explore this option for maximizing data manipulation techniques. - Patrick</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zensequitur</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing the Red Lion device to read two registers as 16-bit words, is the value 0x4373 (18547 in decimal) considered the initial word, with the value 0x4CCD (19661 in decimal) as the subsequent word?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the responses, gentlemen. I have not been successful so far despite trying every possible manipulation option offered by the Red Lion. Strangely, I am able to make the meter function flawlessly when connected to a PC as a Modbus master, but encountering nonsensical readings when using the Red Lion. In the past, I have successfully connected the Red Lion to various other meters (such as Chint and Carlo Gavazzi), but this particular one seems to be posing a challenge. My next course of action will be to reset and configure the Red Lion and meter from scratch, and then use a PC to monitor the Modbus communications. Stay tuned for updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AdrianEL</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a problem with the Red Lion Modbus driver? I have the Red Lion connected to my PC with monitoring software, and the meter is set to address 4. According to the meter's manual, to read volts, I should send the command 04 04 00 00 00 02 (71 CB) with the checksum in the last brackets. However, the Red Lion always sends 04 03 00 00 00 01 (xx xx) regardless of the tag being set to 0 (Digital Coil), 1 (Digital Inputs), 3 (Analog Inputs), 4 (Holding Registers), 6 (File Registers), or L4 (32 Bit Holding Registers). No matter what tag I try to read, the response from the Red Lion always starts with 04 (correct address), 03 (incorrect function), and ends with 00 00 01 (checksum).frustrating!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AdrianEL</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By utilizing the two registers, you can easily determine the accurate value as a verification of the concept. This code snippet allows you to calculate the value based on the hexadecimal values of the registers. The process involves extracting the mantissa and exponent from the high and low registers, performing bitwise operations, and finally, calculating the final value. If the result is not as expected, try swapping the values of the high and low registers at the beginning of the process. Additionally, remember that "&" represents the bitwise AND operator, and "**" denotes exponentiation. It's important to note that this calculation assumes the registers are either 16-bit unsigned integers or 32-bit integers. Consider incorporating a loop to iteratively adjust the mantissa and exponent until the desired result is achieved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate all the help once more! After working on it all day, I have made some progress. Initially, I was puzzled to see the numbers 04 03 00 00 01 xx xx on the serial line when no meter was connected. It turns out, it was just the Red Lion device checking if the equipment was online by pinging the Holding Register. Changing the ping holding register address made a noticeable difference. Monitoring the line without the meter connected led me in the wrong direction. Thank you, drbitboy, for the code - it will come in handy once I receive a meaningful response from the meter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AdrianEL</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey guys, I've finally figured it out! I managed to get the accurate numbers showing, although I'm not exactly sure how. I think tweaking the ping register from 1 to 0 might have done the trick. The Eastron SDM120 manual doesn't mention which register to ping for confirming connection, so maybe that was the key. Thanks a lot for all your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AdrianEL</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I troubleshoot communication issues between a Red Lion G306A panel and an SDM120CT Modbus meter?
- To troubleshoot communication issues, ensure that the settings in Crimson 3 are correctly configured to interpret the Modbus data from the meter. Verify the data format and encoding being used to interpret the response data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is the Red Lion device not interpreting the Modbus response correctly from the SDM120CT meter?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue may be related to the configuration settings in Crimson 3. Check if the data format and interpretation settings for Float Tags are correctly configured to interpret the Big Endian Float values received from the meter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I configure Crimson 3 to display a Float Tag with the correct voltage reading from the SDM120CT Modbus meter?</h4>
<p class='text-muted'><strong>Answer:</strong> - In Crimson 3, ensure that the Float Tag configuration matches the data format and encoding used by the SDM120CT meter. Adjust the settings to interpret the Big Endian Float values received from the meter accurately for correct voltage readings on the Red Lion display.</p>
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
