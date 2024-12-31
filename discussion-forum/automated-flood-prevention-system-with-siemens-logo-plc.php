
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am looking to set up a flood prevention system using my household water pump. The goal is to have the pump automatically shut off if the power consumption exceeds 3 kWh per day. For hardware, I am using a Siemens LOGO 6ED1 053-1FA00-0BA0 micro PLC along">
    <meta name="keywords" content="flood prevention system, automated water pump, siemens logo plc, sifam tinsley kwh meter, solid state relay, micro plc, household flood prevention, 8">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/automated-flood-prevention-system-with-siemens-logo-plc">
    <title>Automated Flood Prevention System with Siemens LOGO PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Automated Flood Prevention System with Siemens LOGO PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am looking to set up a flood prevention system using my household water pump. The goal is to have the pump automatically shut off if the power consumption exceeds 3 kWh per day. For hardware, I am using a Siemens LOGO 6ED1 053-1FA00-0BA0 micro PLC along">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/automated-flood-prevention-system-with-siemens-logo-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Automated Flood Prevention System with Siemens LOGO PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am looking to set up a flood prevention system using my household water pump. The goal is to have the pump automatically shut off if the power consumption exceeds 3 kWh per day. For hardware, I am using a Siemens LOGO 6ED1 053-1FA00-0BA0 micro PLC along">
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
        "@id": "https://community.oxmaint.com/discussion-forum/automated-flood-prevention-system-with-siemens-logo-plc"
      },
      "headline": "Automated Flood Prevention System with Siemens LOGO PLC",
      "description": "Hello everyone, I am looking to set up a flood prevention system using my household water pump. The goal is to have the pump automatically shut off if the power consumption exceeds 3 kWh per day. For hardware, I am using a Siemens LOGO 6ED1 053-1FA00-0BA0 micro PLC along",
      "author": {
        "@type": "Person",
        "name": "stickman1019"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-02",
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
                <h1 class="text-white">Automated Flood Prevention System with Siemens LOGO PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>stickman1019</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1305</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">437</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am looking to set up a flood prevention system using my household water pump. The goal is to have the pump automatically shut off if the power consumption exceeds 3 kWh per day. 

For hardware, I am using a Siemens LOGO 6ED1 053-1FA00-0BA0 micro PLC along with a Sifam Tinsley AP25-1DO kWh meter, which has a pulsed output of 1 pulse per kWh. This output can be configured with pulse widths of 200/100/60 ms. 

Since the PLC inputs are AC and the pulsed signal is DC, I plan to use a solid state relay to activate input I3 of the PLC. I am unsure if a pulse width of 200 ms is sufficient for the PLC to detect the input. 

I have attached a copy of the program which is working in the simulator, but I still need to obtain a programming cable to download it to the PLC. 

Any assistance is appreciated in this matter. 

The program includes a Bypass Switch for system bypasses, a Float Switch for flood detection at the pump location, a Pulse Input from the kWh meter, and a Weekly Timer that activates daily at midnight with a delay before resetting for the next day.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In my previous experience, I have utilized the LOGO system and while I cannot offer a guarantee, I believe a 200ms pulse should be detectable. In a previous project, I implemented a setup where a cylinder switch activated the retraction process, which did not operate within a timeframe close to 200ms. For a more precise control, consider obtaining a DC timer programmed for OneShot mode to generate a 1-second pulse signal.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for responding. I recently searched in my garage and discovered a Brodersen UNIC XM with a DC coil. I will conduct a bench test on this and provide an update.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stickman1019</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Stickman1019 inquired about using a Siemens LOGO 6ED1 053-1FA00-0BA0 micro PLC, which features 12 AC inputs and 4 AC outputs. However, it seems it actually has 8 relay outputs regardless of being AC or DC. If your flood protection is based on kilowatt-hours used and the pump consumes a consistent amount of power while running, consider using a timer instead of a kilowatt-hour meter. For instance, if the pump runs at 500 watts, you could set the timer to switch off the pump after it has run for more than 6 hours total in a day, resetting at midnight for the next cycle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zimmer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're unable to locate a datasheet for your exact model, consider referring to a newer version of the LOGO that specifies a 50ms response time for AC inputs. In this case, a 200ms delay should be more than sufficient.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am using a kWh meter to accurately monitor my usage and have decided to upgrade to the 0BA8 model, which I believe will work better with the meter. You can find the upgrade option on eBay at the following link: https://www.ebay.ie/itm/27612312886.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stickman1019</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey guys, I made the decision to utilize my current PLC and successfully established communication by connecting it with a USB cable purchased from Amazon. However, I encountered a problem as my LOGO PLC lacks a system clock, causing the Weekly Timer in my code to malfunction. I am now looking to create a daily timer using the available functions of the 0BA0, but I am facing challenges due to its lack of internal flags. Can anyone provide guidance on constructing a daily timer using the functions provided by the 0BA0 PLC?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stickman1019</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Explore the stunning photo gallery showcasing the beauty of nature and wildlife at https://imgur.com/a/BQelzI8 and https://imgur.com/a/oIPNHZc. Immerse yourself in breathtaking images captured in these incredible albums.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stickman1019</span></li>
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
<h4 class='text-dark'>FAQ: 1. How does the flood prevention system using the Siemens LOGO PLC work?</h4>
<p class='text-muted'><strong>Answer:</strong> - The flood prevention system uses a Siemens LOGO micro PLC in conjunction with a Sifam Tinsley kWh meter to monitor power consumption of the household water pump. If the power consumption exceeds 3 kWh per day, the system automatically shuts off the pump.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What hardware components are being used in the automated flood prevention system setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The hardware components include a Siemens LOGO 6ED1 053-1FA00-0BA0 micro PLC, a Sifam Tinsley AP25-1DO kWh meter with a pulsed output, and a solid state relay to activate input I3 of the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How is the pulsed output of the kWh meter configured and connected to the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The pulsed output of the kWh meter generates 1 pulse per kWh, with configurable pulse widths of 200/100/60 ms. A solid state relay is used to connect the DC pulsed signal to the PLC input I3, ensuring compatibility between the AC PLC inputs and DC pulsed signal.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is a pulse width of 200 ms sufficient for the PLC to detect the input from the kWh meter?</h4>
<p class='text-muted'><strong>Answer:</strong> - The adequacy of the 200 ms pulse width for the PLC to detect the input may vary based on the specific requirements and setup. It's important to test and verify the functionality to ensure proper detection and response.</p>
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
