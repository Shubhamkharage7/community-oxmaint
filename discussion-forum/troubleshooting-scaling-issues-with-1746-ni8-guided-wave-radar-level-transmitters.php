
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, Im currently experiencing some scaling issues with Vegapuls 65 guided wave radar level transmitters, specifically with SCP commands. I have set the minimum and maximum values in the transmitters based on tank measurements (horizontal cylinders), and the dip tape and transmitter display are in agreement, with a difference">
    <meta name="keywords" content="troubleshooting scaling issues, guided wave radar level transmitters, 1746-ni8 level transmitters, scaling problems with level transmitters, vegapuls 65 radar level transmitters">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-scaling-issues-with-1746-ni8-guided-wave-radar-level-transmitters">
    <title>Troubleshooting Scaling Issues with 1746-NI8 Guided Wave Radar Level Transmitters | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Scaling Issues with 1746-NI8 Guided Wave Radar Level Transmitters | Oxmaint Community">
    <meta property="og:description" content="Hello, Im currently experiencing some scaling issues with Vegapuls 65 guided wave radar level transmitters, specifically with SCP commands. I have set the minimum and maximum values in the transmitters based on tank measurements (horizontal cylinders), and the dip tape and transmitter display are in agreement, with a difference">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-scaling-issues-with-1746-ni8-guided-wave-radar-level-transmitters">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Scaling Issues with 1746-NI8 Guided Wave Radar Level Transmitters | Oxmaint Community">
    <meta name="twitter:description" content="Hello, Im currently experiencing some scaling issues with Vegapuls 65 guided wave radar level transmitters, specifically with SCP commands. I have set the minimum and maximum values in the transmitters based on tank measurements (horizontal cylinders), and the dip tape and transmitter display are in agreement, with a difference">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-scaling-issues-with-1746-ni8-guided-wave-radar-level-transmitters"
      },
      "headline": "Troubleshooting Scaling Issues with 1746-NI8 Guided Wave Radar Level Transmitters",
      "description": "Hello, Im currently experiencing some scaling issues with Vegapuls 65 guided wave radar level transmitters, specifically with SCP commands. I have set the minimum and maximum values in the transmitters based on tank measurements (horizontal cylinders), and the dip tape and transmitter display are in agreement, with a difference",
      "author": {
        "@type": "Person",
        "name": "Robb B"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-24",
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
                <h1 class="text-white">Troubleshooting Scaling Issues with 1746-NI8 Guided Wave Radar Level Transmitters</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Robb B</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">334</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">341</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I'm currently experiencing some scaling issues with Vegapuls 65 guided wave radar level transmitters, specifically with SCP commands. I have set the minimum and maximum values in the transmitters based on tank measurements (horizontal cylinders), and the dip tape and transmitter display are in agreement, with a difference of only about an eighth of an inch over a span of approximately 10.28 feet. However, I am facing a challenge with one transmitter that is not allowing me to adjust the maximum value beyond 1.89 feet, resulting in an F261 error when overridden. Let's set that aside for now and focus on the key details:Transmitter specifications are as follows:Minimum: 10.28 feetMaximum: 0.0 feetUpdate time: 0 secondsAttached are the SCP commands and card configurations. Interestingly, I have 4 temperature transmitters on the same card that are functioning properly, as well as a third level transmitter that appears to be working fine. I have compared the configuration files between slot 7 and slot 2 (another NI8 card), and noticed a difference in the filtering frequency (1Hz compared to none). The values in the custom ranges are grayed out, with differences between 0 and -31967, but since I am using 4-20mA scaling on both, I believe these values are not relevant. Please disregard the numbers in the SCP, as those are my attempts to troubleshoot the scaling issue.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the configuration of the cards - 4-20ma or 0-10v? Have you properly initialized each channel? A 0-10 volt signal should provide an input range of 0 to 32767, while a 4-20ma signal should yield an input range of 3277 to 16383. It's been some time since I last worked with an NI8 card. - James.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>James Mcquade inquired about the configuration of the cards, specifically asking if they are set up for 4-20mA or 0-10V. It is crucial to initialize each channel correctly for optimal performance. A 0-10 volt signal is expected to provide an input ranging from 0 to 32767, while a 4-20mA signal should yield an input between 3277 and 16383. The process of setting up NI8 cards may be unfamiliar if it has been a while since the last configuration. In this case, the cards are configured for 4-20mA, with each channel initialized accordingly. The manual indicates that a 4-20 signal is within the range of -32767 to +32767. Additionally, another NI8 card and four inputs on the same card follow the same configuration and function effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robb B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Future reminder: I believe I have identified the issue to be with the sensor. When I set the output of Tank 1 sensor to either 0 or 50%, the HMI accurately displays the value thanks to the PLC's SCP. However, Tank 2 continues to show a configuration error (F261) when attempting to adjust the min/max ranges. I am currently awaiting a response from Vega regarding this issue and will also be exploring the option of installing a spare sensor in the interim.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robb B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As this is a radar sensor, it is assumed that the measurement indicates the distance from the sensor to the surface below. In this case, a greater distance measured corresponds to a lower level, and vice versa. Can the current scaling be adjusted to accommodate a negative slope between inputs and outputs? This adjustment may be necessary for optimal functionality and accurate readings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy explained that being a radar sensor, the measurement indicates the distance from the sensor to the surface. A greater distance measured corresponds to a lower level, and vice versa. Can the scaling in place accommodate a negative slope between inputs and outputs? Yes, simply switch the min and max values. Most transmitters and PLC inputs can handle a higher value in either the min or max. The issue was resolved by installing a new (used) sensor with correct min and max values, resulting in very precise readings. Thank you to everyone for their input and suggestions!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robb B</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the scaling issues with the Vegapuls 65 guided wave radar level transmitters as described in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The scaling issues with the Vegapuls 65 guided wave radar level transmitters could be caused by various factors such as incorrect configuration settings, differences in filtering frequencies, or limitations in adjusting the maximum values beyond a certain point.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot an F261 error related to adjusting the maximum value on a transmitter?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting an F261 error related to adjusting the maximum value on a transmitter may involve checking the configuration files, comparing settings between different cards, verifying filtering frequencies, and ensuring the correct input/output scaling values are applied.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why is one transmitter not allowing adjustments beyond 1.89 feet when setting the maximum value?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The limitation in adjusting the maximum value beyond 1.89 feet on a transmitter could be due to specific constraints within the device, configuration discrepancies, or potential firmware issues that need to be addressed during troubleshooting.</p>
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
