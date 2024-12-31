
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I had the concept of utilizing DH+ to link two PLCs, one being a ControlLogix 8.02 and the other a ControlLogix 32.02. Can anyone provide examples of the MSG configuration for this setup? As I delve into the 1756-UM514c-en-p User Manual, I am questioning the feasibility of this approach">
    <meta name="keywords" content="plcs, dh+ connectivity, controllogix 02, controllogix 02, msg configuration, 1756-um514c-en-p user">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/connecting-plcs-via-dh-examples-and-configuration-for-controllogix-8-02-to-controllogix-32-02">
    <title>Connecting PLCs via DH+: Examples and Configuration for ControlLogix 8.02 to ControlLogix 32.02 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Connecting PLCs via DH+: Examples and Configuration for ControlLogix 8.02 to ControlLogix 32.02 | Oxmaint Community">
    <meta property="og:description" content="I had the concept of utilizing DH+ to link two PLCs, one being a ControlLogix 8.02 and the other a ControlLogix 32.02. Can anyone provide examples of the MSG configuration for this setup? As I delve into the 1756-UM514c-en-p User Manual, I am questioning the feasibility of this approach">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/connecting-plcs-via-dh-examples-and-configuration-for-controllogix-8-02-to-controllogix-32-02">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Connecting PLCs via DH+: Examples and Configuration for ControlLogix 8.02 to ControlLogix 32.02 | Oxmaint Community">
    <meta name="twitter:description" content="I had the concept of utilizing DH+ to link two PLCs, one being a ControlLogix 8.02 and the other a ControlLogix 32.02. Can anyone provide examples of the MSG configuration for this setup? As I delve into the 1756-UM514c-en-p User Manual, I am questioning the feasibility of this approach">
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
        "@id": "https://community.oxmaint.com/discussion-forum/connecting-plcs-via-dh-examples-and-configuration-for-controllogix-8-02-to-controllogix-32-02"
      },
      "headline": "Connecting PLCs via DH+: Examples and Configuration for ControlLogix 8.02 to ControlLogix 32.02",
      "description": "I had the concept of utilizing DH+ to link two PLCs, one being a ControlLogix 8.02 and the other a ControlLogix 32.02. Can anyone provide examples of the MSG configuration for this setup? As I delve into the 1756-UM514c-en-p User Manual, I am questioning the feasibility of this approach",
      "author": {
        "@type": "Person",
        "name": "psychosunshine"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-16",
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
                <h1 class="text-white">Connecting PLCs via DH+: Examples and Configuration for ControlLogix 8.02 to ControlLogix 32.02</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>psychosunshine</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">572</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">423</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I had the concept of utilizing DH+ to link two PLCs, one being a ControlLogix 8.02 and the other a ControlLogix 32.02. Can anyone provide examples of the MSG configuration for this setup? As I delve into the 1756-UM514c-en-p User Manual, I am questioning the feasibility of this approach and considering exploring Ethernet alternatives, given its widespread usage in similar scenarios.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Which cards are currently available in the racks? Are Ethernet cards or DH/RIO cards in stock? Utilizing MSG over Ethernet for communication could potentially simplify the setup process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user asked about the card types available in the racks, specifically inquiring about Ethernet cards or DH/RIO options. They mentioned that using MSG over Ethernet would be more convenient. The cards available are DH/RIO cards, specifically the 1756-DHRIO model. The user noted that the only available Ethernet port on the 8.02 PLC (located in a full 17 slot rack) is connected to the plant network. They are uncertain about which Ethernet port the CIP protocol would utilize. Additionally, they prefer to avoid using the plant network whenever possible. On the other hand, the 32.02 PLC offers multiple Ethernet port options for use.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>psychosunshine</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you curious about the number of nodes on the DH+ network and considering utilizing a DH+ Gateway? Is your firmware version 8.02 up to date? Do you know the processor PN? Perhaps upgrading the 8.02 firmware to a newer CPU with an integrated Ethernet port could be beneficial.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it advisable to retain the 8.02 firmware version? I believe it is a 5555.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>psychosunshine</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure compatibility and streamlined backup procedures, consider upgrading the CPU to an L7 or L8 model that aligns with the firmware of the existing CPU, ideally version 32.xx or higher. This way, you will only need one spare CPU on hand to serve as a backup for both systems, simplifying maintenance and minimizing downtime.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>This temporary Communication Link will be in place until the old stations from the previous PLC system have completely transitioned to the new PLC. The outdated 8.02 PLC will be phased out, leaving only the modern 32.02 PLC operational.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>psychosunshine</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When assessing the 17 slot rack, it's beneficial to check for any cards that can be duplicated. Are there any 8 point IO or 16 point cards that can be doubled? For example, if you have an OW8, consider upgrading it to an OW16 to free up space for an ENBT card. If not, consider acquiring a used L81 to complete the setup. Additionally, the number of nodes on the DH+ network needs to be addressed to determine potential data transfer issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We utilized the DH/RIO system to enhance the PLC5 by keeping the existing I/O racks. After that, communication is simply established through messaging, if I remember correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rootboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I made the decision to opt for Ethernet over DH+ connectivity, but now I am facing a peculiar DH+ problem. My 8.02 PLC is connected to 5 older Panelviews using DH+. Due to my lack of experience, I mistakenly downloaded a program to the PLC which caused communication issues with the HMIs. Power cycling temporarily resolved the issue, but it recurred later on. Do I need to reconfigure my DHRIO card each time I download a program to the PLC? Should I create a new Routing Table? If so, I would appreciate a step-by-step guide as I am unfamiliar with DH+. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>psychosunshine</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is crucial to monitor the node addresses to prevent network crashes and avoid downloading incorrect programs. I have experienced negative outcomes from doing so in the past, which was not enjoyable. Fortunately, issues with the DHRIO are not common as they store configurations, even when the CPU program is changed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I connect two PLCs, one being a ControlLogix 8.02 and the other a ControlLogix 32.02, via DH+?
- To connect these two PLCs via DH+, you can utilize the MSG configuration. Specific examples of the MSG configuration for this setup can be provided.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it feasible to link the ControlLogix 8.02 and ControlLogix 32.02 PLCs using DH+?</h4>
<p class='text-muted'><strong>Answer:</strong> - The feasibility of connecting these PLCs via DH+ can be assessed based on the information provided in the 1756-UM514c-en-p User Manual. Alternatively, exploring Ethernet alternatives is also an option due to its widespread usage in similar scenarios.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any preferred Ethernet alternatives for connecting PLCs in similar scenarios?</h4>
<p class='text-muted'><strong>Answer:</strong> - Ethernet alternatives can be explored as a viable option for connecting PLCs, especially in scenarios where DH+ connectivity might pose challenges. It is advisable to consider the compatibility and advantages of Ethernet-based solutions.</p>
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
