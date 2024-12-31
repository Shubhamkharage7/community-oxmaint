
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am facing some confusion regarding the data readings I am getting from a JUMO601 paperless recorder connected to an Omron NJ301-1100 PLC. The numbers I am receiving do not seem to make sense to me despite my attempts to scale them in different ways. I have">
    <meta name="keywords" content="modbus tcp troubleshooting, jumo601 paperless recorder, omron nj301-1100 plc, pt100 sensors, modbus connection setup, mtcp library, struct">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-analog-readings-from-jumo601-paperless-recorder">
    <title>Troubleshooting Modbus TCP Analog Readings from JUMO601 Paperless Recorder | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus TCP Analog Readings from JUMO601 Paperless Recorder | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am facing some confusion regarding the data readings I am getting from a JUMO601 paperless recorder connected to an Omron NJ301-1100 PLC. The numbers I am receiving do not seem to make sense to me despite my attempts to scale them in different ways. I have">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-analog-readings-from-jumo601-paperless-recorder">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus TCP Analog Readings from JUMO601 Paperless Recorder | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am facing some confusion regarding the data readings I am getting from a JUMO601 paperless recorder connected to an Omron NJ301-1100 PLC. The numbers I am receiving do not seem to make sense to me despite my attempts to scale them in different ways. I have">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-analog-readings-from-jumo601-paperless-recorder"
      },
      "headline": "Troubleshooting Modbus TCP Analog Readings from JUMO601 Paperless Recorder",
      "description": "Hello everyone, I am facing some confusion regarding the data readings I am getting from a JUMO601 paperless recorder connected to an Omron NJ301-1100 PLC. The numbers I am receiving do not seem to make sense to me despite my attempts to scale them in different ways. I have",
      "author": {
        "@type": "Person",
        "name": "Bobobodopalus"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-18",
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
                <h1 class="text-white">Troubleshooting Modbus TCP Analog Readings from JUMO601 Paperless Recorder</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Bobobodopalus</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">275</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">178</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am facing some confusion regarding the data readings I am getting from a JUMO601 paperless recorder connected to an Omron NJ301-1100 PLC. The numbers I am receiving do not seem to make sense to me despite my attempts to scale them in different ways. I have PT100 sensors connected to the JUMO recorder's analog inputs 1 and 2.

I have successfully set up a Modbus connection using the MTCP library provided by Omron, and the communication is working as I am getting values that correspond to the PT100 temperatures. The data types from the JUMO recorder are in floats. I am receiving the Modbus data in an array format, so I have utilized structured text (ST) to extract the desired data and combine two words into a Dword.

Word[0] appears to have fluctuations, which I assume are due to decimal points in Celsius being read. On the other hand, Word[1] seems more stable, with the three digits representing the Celsius integer reading. Does the digit 4 in Word[1] have a specific significance, like confirming the proper connection of the PT100 sensor?

Just for clarification, these readings were captured when the temperature was around 20 degrees Celsius (or 68 degrees Fahrenheit).</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Test out different word combinations to ensure they convey the message you intend. Check out this link for a tool that demonstrates the different outcomes that can be achieved through swapping words or bytes: https://www.scadacore.com/tools/programming-calculators/online-hex-converter/</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bb76</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Instead of using a pt100 probe, consider using a 100 Ohm resistor to measure the temperature. A 100 Ohm resistor corresponds to 0 degrees Celsius. By reading the value and understanding its representation, you can troubleshoot potential issues such as big or little endian or LSB/MSB problems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>bb76 suggested experimenting with word and byte swaps to achieve expected results. This online hex converter tool provides various options for conversions: https://www.scadacore.com/tools/programming-calculators/online-hex-converter/. This valuable converter might be useful for converting to float-bigendian format on sysmac.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bobobodopalus</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To correctly convert the hexadecimal value 0x4199317E into a float data type instead of a DINT, you will then achieve the accurate reading of 19.14.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you want to achieve the desired outcome, using the function CopyDwordToReal is more appropriate than using Dword_To_Real.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bobobodopalus</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of programming, Bobobodopalus recommended utilizing the CopyDwordToReal function to achieve the desired outcome, emphasizing its superiority over Dword_To_Real. This tip, detailed below, underscores the importance of choosing the right method for optimal results. As wise words from Jouni Rynö suggest, "It's just zeros and ones, it cannot be hard."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I troubleshoot inconsistent data readings from a JUMO601 paperless recorder connected to an Omron PLC?
- To troubleshoot inconsistent data readings, you can try scaling the readings in different ways and ensure the correct setup of Modbus connection and data extraction process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What data types does the JUMO recorder provide for its readings?</h4>
<p class='text-muted'><strong>Answer:</strong> - The JUMO recorder provides data types in floats for its readings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I extract and process Modbus data received in an array format using structured text?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can utilize structured text (ST) to extract the desired data and combine two words into a Dword when receiving Modbus data in an array format.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Why does Word[0] in the Modbus data show fluctuations while Word[1] appears more stable when reading temperatures from PT100 sensors?</h4>
<p class='text-muted'><strong>Answer:</strong> - Fluctuations in Word[0] may be due to decimal points in Celsius readings, while the stability of Word[1 could indicate a more accurate integer reading of the Celsius temperature.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Is there any specific significance to the digit 4 in Word[1] of the Modbus data when reading temperatures from PT100 sensors?</h4>
<p class='text-muted'><strong>Answer:</strong> - The digit 4 in Word[1] may not have a specific significance related to the proper connection of the PT100 sensor; it could be part of the data representation format.</p>
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
