
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am working on creating a wiring diagram for two VFDs that will be controlled by a single pressure switch contact. I would greatly appreciate any advice on how to set up the wiring without the need for extra splitters. I have included the VFD wiring diagram">
    <meta name="keywords" content="vfds, pressure switch contact, wiring diagram, setup tips, vfd wiring, dual vfd setup, control multiple vfds, pressure switch wiring, electrical diagram, wiring setup, vfd configuration, single contact control, motor control">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-wire-two-vfds-with-one-pressure-switch-contact-diagram-and-setup-tips">
    <title>How to Wire Two VFDs with One Pressure Switch Contact: Diagram and Setup Tips | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Wire Two VFDs with One Pressure Switch Contact: Diagram and Setup Tips | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am working on creating a wiring diagram for two VFDs that will be controlled by a single pressure switch contact. I would greatly appreciate any advice on how to set up the wiring without the need for extra splitters. I have included the VFD wiring diagram">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-wire-two-vfds-with-one-pressure-switch-contact-diagram-and-setup-tips">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Wire Two VFDs with One Pressure Switch Contact: Diagram and Setup Tips | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am working on creating a wiring diagram for two VFDs that will be controlled by a single pressure switch contact. I would greatly appreciate any advice on how to set up the wiring without the need for extra splitters. I have included the VFD wiring diagram">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-wire-two-vfds-with-one-pressure-switch-contact-diagram-and-setup-tips"
      },
      "headline": "How to Wire Two VFDs with One Pressure Switch Contact: Diagram and Setup Tips",
      "description": "Hello everyone, I am working on creating a wiring diagram for two VFDs that will be controlled by a single pressure switch contact. I would greatly appreciate any advice on how to set up the wiring without the need for extra splitters. I have included the VFD wiring diagram",
      "author": {
        "@type": "Person",
        "name": "Prasanthen"
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
                <h1 class="text-white">How to Wire Two VFDs with One Pressure Switch Contact: Diagram and Setup Tips</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Prasanthen</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">332</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">15</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone,

I am working on creating a wiring diagram for two VFDs that will be controlled by a single pressure switch contact. I would greatly appreciate any advice on how to set up the wiring without the need for extra splitters. I have included the VFD wiring diagram and the current proposed wiring for reference. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One strategy to enable the second VFD without using the 24v from the first is to wire a run contact from the first drive to the input run of the second drive. By disconnecting the 24v link from the second drive's run relay and instead feeding it from the first drive, the second drive's run output becomes volt free. This setup allows the first drive to activate the second drive when the pressure switch is engaged, creating a seamless operation between the two drives.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To combine the DC Commons of each drive and utilize a single voltage source, they must be connected together. It is crucial not to link the +24V lines. Ideally, an external 24V supply should be used, with its DC Common connected to both drives. However, connecting the DC Commons of the drives and the DC Common of the switch (either Pin 3 or L-) should also suffice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drforsythe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you very much for your valuable input. I would like to enhance the understanding of the pressure sensor input by connecting one contact to the VFD(s) and one analog signal to the PLC. For further information on the pressure sensor signals, please refer to the image attached.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Prasanthen</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If the system is dependent on both drives being powered, following @drforsythe's advice should resolve the issue. However, if you anticipate the need to operate with one pump offline (due to maintenance, malfunction, etc.), you may encounter issues with the sensor losing power. In such cases, it is recommended to utilize an external 24V power supply with the 0V terminal connected to the COM terminals of both drives. While you mentioned reluctance towards using a splitter, an alternative solution could involve incorporating a 2-pole relay. By connecting the relay's coil to the sensor and its contacts to each drive, you can maintain isolation between the drives' 24V supplies, which may be beneficial in your specific scenario.

Considering that you already have a PLC in place, another viable option is to connect the sensor's digital output to a PLC input and utilize 2 PLC outputs to manage the drives. This approach offers additional flexibility for future modifications. While you may not require this setup immediately, it's worth noting that circumstances can change rapidly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Benefits of using an auxiliary relay in a circuit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Joseph_e2 suggested that if the system requires both drives to be powered up, then @drforsythe's recommendation should suffice. However, if there is a need to run with one pump powered off in the future, an external 24V power supply connected to both drives' COM terminal can be used. While avoiding the use of a splitter, one could consider implementing a 2-pole relay driven by the sensor, with each contact wired to a drive to maintain isolation between the drives' 24V supplies.

Another option, since there is a PLC available, would be to connect the sensor's digital output to a PLC input and utilize 2 PLC outputs to control the drives for added flexibility. Avoid using the drive for the input power source to prevent any damage and utilize a separate 24VDC source connected to the pressure switch and a relay with 2 NO contacts. Each isolated contact can then be used to close the input to the drive, ensuring that each drive's power source is only used for its own signal through the relay. Implementing any other method may be considered a hack, unless utilizing inputs and outputs from the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I wire two VFDs with one pressure switch contact without using extra splitters?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One way to achieve this is by connecting the common terminal of the pressure switch to the control terminals of both VFDs, ensuring that the wiring is done in parallel. This setup allows the pressure switch to control both VFDs simultaneously.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What considerations should I keep in mind when setting up the wiring for two VFDs with a single pressure switch contact?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is important to ensure that the wiring is properly insulated and secured to prevent any short circuits or loose connections. Additionally, double-check the wiring diagram to confirm that all connections are properly aligned with the specifications of the VFDs and the pressure switch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can you provide a detailed explanation or step-by-step guide on how to wire two VFDs with one pressure switch contact?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To wire two VFDs with one pressure switch contact, start by identifying the common terminal on the pressure switch and connect it to the control terminals of both VFDs. Make sure the connections are secure and follow the wiring diagram provided by the manufacturer for accurate setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any safety precautions I should take when working on the wiring setup for two VFDs controlled by a single pressure switch contact?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Prioritize safety by ensuring that the power source is turned off before working on the wiring</p>
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
