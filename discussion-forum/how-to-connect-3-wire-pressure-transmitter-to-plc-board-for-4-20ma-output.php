
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have been assigned the task of integrating a 3-wire pressure differential transmitter, specifically the Veris PW Series, into a system and connecting it to an existing PLC board. This transmitter has three wires for positive, negative, and signal connections. My goal is to configure it for a 4-20mA">
    <meta name="keywords" content="3-wire pressure transmitter, plc board connection, 4-20ma output configuration, veris pw series transmitter, wiring diagram for plc, integrating pressure transmitter">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-connect-3-wire-pressure-transmitter-to-plc-board-for-4-20ma-output">
    <title>How to Connect 3-Wire Pressure Transmitter to PLC Board for 4-20mA Output | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Connect 3-Wire Pressure Transmitter to PLC Board for 4-20mA Output | Oxmaint Community">
    <meta property="og:description" content="I have been assigned the task of integrating a 3-wire pressure differential transmitter, specifically the Veris PW Series, into a system and connecting it to an existing PLC board. This transmitter has three wires for positive, negative, and signal connections. My goal is to configure it for a 4-20mA">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-connect-3-wire-pressure-transmitter-to-plc-board-for-4-20ma-output">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Connect 3-Wire Pressure Transmitter to PLC Board for 4-20mA Output | Oxmaint Community">
    <meta name="twitter:description" content="I have been assigned the task of integrating a 3-wire pressure differential transmitter, specifically the Veris PW Series, into a system and connecting it to an existing PLC board. This transmitter has three wires for positive, negative, and signal connections. My goal is to configure it for a 4-20mA">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-connect-3-wire-pressure-transmitter-to-plc-board-for-4-20ma-output"
      },
      "headline": "How to Connect 3-Wire Pressure Transmitter to PLC Board for 4-20mA Output",
      "description": "I have been assigned the task of integrating a 3-wire pressure differential transmitter, specifically the Veris PW Series, into a system and connecting it to an existing PLC board. This transmitter has three wires for positive, negative, and signal connections. My goal is to configure it for a 4-20mA",
      "author": {
        "@type": "Person",
        "name": "jgruizinga"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-17",
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
                <h1 class="text-white">How to Connect 3-Wire Pressure Transmitter to PLC Board for 4-20mA Output</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jgruizinga</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">992</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">89</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have been assigned the task of integrating a 3-wire pressure differential transmitter, specifically the Veris PW Series, into a system and connecting it to an existing PLC board. This transmitter has three wires for positive, negative, and signal connections. My goal is to configure it for a 4-20mA output, however, the wiring diagram for the PLC card I intend to use only shows provisions for positive and negative connections. How can I successfully connect the three conductors from the transmitter in this scenario? One possible solution could involve sourcing power from the cabinet, but I am unsure how to transmit the signal to the control board. Your assistance in resolving this issue would be highly valued, as I am seeking guidance on this matter. Thank you for your help!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The power supply serves as the main source of energy for the device, while the signal and power share a common ground. The output signal ranges from 4 to 20 mA.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ah, now I understand. Appreciate the clarification, Tom!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jgruizinga</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you know the complete model number of the transmitter? Some of these transmitters are versatile, able to function as either a 3-wire voltage output or a 2-wire 4-20mA device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>g.mccormick</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Veris PWLX04S model is equipped with a versatile output system, offering users the choice between 4-20mA, 0-5V, or 0-10V options for 3-wire transmitters. While the manual does not explicitly mention loop-powered functionality, my understanding of instrumentation and controls is still developing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jgruizinga</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to jgruizinga, the manual specifies the output options for a 3-wire transmitter as user-selectable 4-20mA, 0-5V, or 0-10V signals. This indicates that the transmitter itself supplies the loop excitation power.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For optimal performance when using a 3 or 4 wire transmitter, it is essential to have a passive analogue input, meaning the transmitter is loop powered without receiving power from the card. In contrast, with a 2-wire setup, power is supplied through the loop from the card (active). This distinction is crucial for proper functionality and efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Below are a few illustrations of each type. It is important to note that certain controller analog inputs have a shared common (-) among all inputs on the I/O card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
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
<h4 class='text-dark'>FAQ: How can I connect a 3-wire pressure transmitter to a PLC board for a 4-20mA output?</h4>
<p class='text-muted'><strong>Answer:</strong> To connect a 3-wire pressure transmitter with positive, negative, and signal connections to a PLC board that only has provisions for positive and negative connections, you may need to source power from the cabinet and find a way to transmit the signal to the control board.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: Are there specific considerations when integrating a Veris PW Series 3-wire pressure differential transmitter into a system?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, when integrating a Veris PW Series transmitter, you may need to address the wiring configuration, especially when trying to achieve a 4-20mA output.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What are the potential solutions for connecting the three conductors from the transmitter to a PLC board with limited connections?</h4>
<p class='text-muted'><strong>Answer:</strong> One possible solution could involve sourcing power from the cabinet and finding a way to transmit the signal to the control board. It's important to carefully plan and execute the wiring to ensure a successful connection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How can I seek guidance on connecting a 3-wire pressure transmitter to a PLC board?</h4>
<p class='text-muted'><strong>Answer:</strong> You can reach out to experts in the field or online communities for assistance and guidance on resolving the wiring issue and successfully connecting the transmitter to the PLC board.</p>
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
