
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am looking to expand the voltage reading from the thermocouple module and translate it into a numerical value. In the past, I utilized a Micrologix 1400 (1766-L32AWAA) with a supplementary Thermocouple module (1762-IT4). In RS Logix, I accessed the input readings from I:1.1 and performed a Scaling (SCP)">
    <meta name="keywords" content="thermocouple voltage readings, temperature conversion, micro820 plc, 2080-tc module, converting thermocouple readings, micrologix 1400, rs log">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-convert-thermocouple-voltage-readings-into-temperature-using-micro820-and-2080-tc-module">
    <title>How to Convert Thermocouple Voltage Readings into Temperature Using Micro820 and 2080-TC Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Convert Thermocouple Voltage Readings into Temperature Using Micro820 and 2080-TC Module | Oxmaint Community">
    <meta property="og:description" content="I am looking to expand the voltage reading from the thermocouple module and translate it into a numerical value. In the past, I utilized a Micrologix 1400 (1766-L32AWAA) with a supplementary Thermocouple module (1762-IT4). In RS Logix, I accessed the input readings from I:1.1 and performed a Scaling (SCP)">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-convert-thermocouple-voltage-readings-into-temperature-using-micro820-and-2080-tc-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Convert Thermocouple Voltage Readings into Temperature Using Micro820 and 2080-TC Module | Oxmaint Community">
    <meta name="twitter:description" content="I am looking to expand the voltage reading from the thermocouple module and translate it into a numerical value. In the past, I utilized a Micrologix 1400 (1766-L32AWAA) with a supplementary Thermocouple module (1762-IT4). In RS Logix, I accessed the input readings from I:1.1 and performed a Scaling (SCP)">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-convert-thermocouple-voltage-readings-into-temperature-using-micro820-and-2080-tc-module"
      },
      "headline": "How to Convert Thermocouple Voltage Readings into Temperature Using Micro820 and 2080-TC Module",
      "description": "I am looking to expand the voltage reading from the thermocouple module and translate it into a numerical value. In the past, I utilized a Micrologix 1400 (1766-L32AWAA) with a supplementary Thermocouple module (1762-IT4). In RS Logix, I accessed the input readings from I:1.1 and performed a Scaling (SCP)",
      "author": {
        "@type": "Person",
        "name": "gbradley"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-20",
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
                <h1 class="text-white">How to Convert Thermocouple Voltage Readings into Temperature Using Micro820 and 2080-TC Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>gbradley</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">313</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">122</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am looking to expand the voltage reading from the thermocouple module and translate it into a numerical value. In the past, I utilized a Micrologix 1400 (1766-L32AWAA) with a supplementary Thermocouple module (1762-IT4). In RS Logix, I accessed the input readings from I:1.1 and performed a Scaling (SCP) operation to convert it into a floating point value stored in F8:2. How can I achieve the same outcome using a Micro820 (2080-LC20-20QWB) and 2080-TC module? Is the SCL function the solution to this task?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After experimenting with the Micrologix to Micro800 converter tool, I discovered that it generates a specific function block known as RA_SCP.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gbradley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you know how the 1762-IT4 was set up and what value is stored in the configuration data word? Was it specifically set up for Type K thermocouples and scaled for PID control?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy inquired about the configuration of the 1762-IT4 module and the value stored in the configuration data word. Was it set up for Type K thermocouple and Scaled-for-PID operation? Find out more about Type K scaled for PID settings here.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gbradley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User drbitboy inquired about the configuration of the 1762-IT4 module and the value in the configuration data word. Specifically, was it set up for Type K thermocouples and Scaled-for-PID operation? User gbradley confirmed that it was configured for Type K thermocouples scaled for PID, as seen in the attached image. To learn more, visit the link provided at the bottom of this page. Unfortunately, user gbradley is unable to offer further assistance regarding the 2080-TC module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I utilized the SCP command within the Input/Output Menu for my task.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gbradley</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I convert thermocouple voltage readings into temperature using a Micro820 and 2080-TC module?</h4>
<p class='text-muted'><strong>Answer:</strong> - To convert thermocouple voltage readings into temperature using a Micro820 and 2080-TC module, you can utilize the SCL (Scale) function in RS Logix. This function allows you to scale the input readings into a numerical value.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What was the process of converting thermocouple voltage readings in a Micrologix 1400 with a Thermocouple module, and how does it differ from using a Micro820 and 2080-TC module?</h4>
<p class='text-muted'><strong>Answer:</strong> - In the past with a Micrologix 1400 and Thermocouple module, you accessed the input readings and performed a Scaling (SCP) operation in RS Logix. With a Micro820 and 2080-TC module, you can achieve a similar outcome by utilizing the SCL function in RS Logix.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can I directly access input readings from the 2080-TC module in a Micro820 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can access input readings from the 2080-TC module in a Micro820 PLC. By using the appropriate functions and operations in RS Logix, you can convert these readings into temperature values.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is the SCL function the recommended solution for converting thermocouple voltage readings into temperature with a Micro820 and 2080-TC module?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the SCL function is a suitable solution for converting thermocouple voltage</p>
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
