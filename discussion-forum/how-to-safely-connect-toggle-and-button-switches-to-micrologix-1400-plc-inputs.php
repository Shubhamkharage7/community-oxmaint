
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I recently acquired a Micrologix 1400 1766L32BWA PLC and am new to working with this technology. I am looking to incorporate toggle and button switches as inputs for the PLC. Can these switches be safely connected to the input terminal linked to the PLCs 24VDC power supply">
    <meta name="keywords" content="micrologix 1400 plc, 1766l32bwa plc, toggle switches, button switches, micrologix 1400 inputs, plc inputs, connecting switches to plc, plc input terminal, 24vdc power supply">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-safely-connect-toggle-and-button-switches-to-micrologix-1400-plc-inputs">
    <title>How to Safely Connect Toggle and Button Switches to Micrologix 1400 PLC Inputs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Safely Connect Toggle and Button Switches to Micrologix 1400 PLC Inputs | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I recently acquired a Micrologix 1400 1766L32BWA PLC and am new to working with this technology. I am looking to incorporate toggle and button switches as inputs for the PLC. Can these switches be safely connected to the input terminal linked to the PLCs 24VDC power supply">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-safely-connect-toggle-and-button-switches-to-micrologix-1400-plc-inputs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Safely Connect Toggle and Button Switches to Micrologix 1400 PLC Inputs | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I recently acquired a Micrologix 1400 1766L32BWA PLC and am new to working with this technology. I am looking to incorporate toggle and button switches as inputs for the PLC. Can these switches be safely connected to the input terminal linked to the PLCs 24VDC power supply">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-safely-connect-toggle-and-button-switches-to-micrologix-1400-plc-inputs"
      },
      "headline": "How to Safely Connect Toggle and Button Switches to Micrologix 1400 PLC Inputs",
      "description": "Hello everyone! I recently acquired a Micrologix 1400 1766L32BWA PLC and am new to working with this technology. I am looking to incorporate toggle and button switches as inputs for the PLC. Can these switches be safely connected to the input terminal linked to the PLCs 24VDC power supply",
      "author": {
        "@type": "Person",
        "name": "ALNUN"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-24",
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
                <h1 class="text-white">How to Safely Connect Toggle and Button Switches to Micrologix 1400 PLC Inputs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ALNUN</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">565</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">314</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I recently acquired a Micrologix 1400 1766L32BWA PLC and am new to working with this technology. I am looking to incorporate toggle and button switches as inputs for the PLC. Can these switches be safely connected to the input terminal linked to the PLC's 24VDC power supply without causing any damage to the unit? Any assistance on this matter would be greatly appreciated. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Absolutely, it is possible to utilize the Sensor power supply on this particular model to energize inputs exclusively. The diagrams below show lowercase alphabetical subscripts added to shared-terminal connections to signify the option of using diverse power sources for separate isolated groups if preferred.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mike__T</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Mike__T, it is indeed possible to use a Sensor power supply on this model solely for powering inputs. The diagrams show that lowercase alphabetic subscripts can be added to common-terminal connections to signify the option of using different power sources for separate isolated groups, if preferred. Thank you, Mike T, for sharing your expertise and advice. I will try it out. View attachments for more details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ALNUN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently attempted to connect a switch to the first input (I0) and noticed a spark. Could this have caused damage to my I0 input? Are the initial 12 inputs (I0-I11) considered high-speed inputs that utilize relays? Additionally, are the remaining 8 inputs also connected to relays? I am feeling concerned about the potential damage caused by the spark.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ALNUN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you attempted hot wiring it? If you wire it while the power is on, you may notice sparks. When dealing with a BWA, the inputs require 24vdc and the outputs are relay switches that can accommodate various voltage levels when connected to the common terminal.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I may have wired it incorrectly by connecting it hot. Despite this, I am still able to run my PLC without any inputs connected. Can I safely connect my 24v toggle switch directly to an input terminal without causing damage to my PLC since I will be using a sinking input? The common terminals are at -24Vdc, while the switches will be connected to +12vdc. Your clarification on this matter is greatly appreciated as PLCs are quite expensive to replace due to mistakes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ALNUN</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When connecting Inputs, ensure to provide -24VDC or 0VDC to the COM terminals and +24VDC to one side of the switch. Connect the other side of the switch to the INxx terminal for proper operation. This configuration is essential for the system to function correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>forqnc</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When configuring Inputs, ensure you connect -24VDC or 0VDC to all COM terminals, and +24VDC to one side of the switch with the other side connected to INxx. Thank you for the quick response, forqnc. I will make sure to follow these instructions promptly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ALNUN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ALNUN pointed out that wiring should always be done with the power off to avoid sparking. It is important to make all connections carefully, as working with live wires can be dangerous due to the presence of electrical 'potential'.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone! I recently purchased a Micrologix 1400 to replace my Micrologix 1000 PLC. I am wondering if it is possible to easily transfer or import my ladder logic program from the Micrologix 1000 to the ML 1400. If anyone has experience with this process, I would greatly appreciate your guidance. Thank you for your assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ALNUN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you have a MicroLogix 1000 PLC and recently purchased a MicroLogix 1400, you may be wondering if you can easily transfer your ladder logic program. The good news is, you can do so by changing the processor type and verifying the program. However, it's important to be cautious and double-check the wiring, as the commons may be arranged differently. If you need assistance with this process, feel free to ask for help. Your cooperation is greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ianingram</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your response. Can I continue to utilize all inputs with a Single Pole Single Throw (SPST) switch? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ALNUN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I believe the Micro 1400 shares the same voltage inputs as the Micro 1000, I can't confirm without seeing your application.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ianingram</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, there is a 24vdc power supply located adjacent to the input terminals. This setup provides the necessary voltage for the circuit to function properly, ensuring reliable operation. Users often search for information on how to connect a 24vdc power supply to input terminals for electronic devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ALNUN</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Can toggle and button switches be connected directly to the input terminal of a Micrologix 1400 PLC?
- Yes, toggle and button switches can be safely connected to the input terminal of a Micrologix 1400 PLC for input control.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it safe to connect these switches to the input terminal linked to the PLC's 24VDC power supply?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can safely connect toggle and button switches to the input terminal linked to the Micrologix 1400 PLC's 24VDC power supply without causing damage to the unit.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific considerations to keep in mind when connecting toggle and button switches to the Micrologix 1400 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - When connecting toggle and button switches to the Micrologix 1400 PLC, ensure proper wiring, correct polarity, and appropriate voltage levels to prevent any potential issues.</p>
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
