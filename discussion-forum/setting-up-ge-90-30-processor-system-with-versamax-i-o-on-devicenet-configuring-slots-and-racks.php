
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am in the process of setting up a GE processor system for the first time, utilizing a GE 90/30 processor with Versamax I/O on devicenet. One aspect I am currently grappling with is the configuration of 4 slots in 4 racks within the system. Each rack can accommodate">
    <meta name="keywords" content="ge 90/30 processor system, versamax i/o, devicenet, configuring slots and racks, input and output bits, expansion racks, autoconfigure system, empty slots configuration, reference addresses, module ranges, initial input number, hardware configuration">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-ge-90-30-processor-system-with-versamax-i-o-on-devicenet-configuring-slots-and-racks">
    <title>Setting up GE 90/30 Processor System with Versamax I/O on Devicenet: Configuring Slots and Racks | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting up GE 90/30 Processor System with Versamax I/O on Devicenet: Configuring Slots and Racks | Oxmaint Community">
    <meta property="og:description" content="I am in the process of setting up a GE processor system for the first time, utilizing a GE 90/30 processor with Versamax I/O on devicenet. One aspect I am currently grappling with is the configuration of 4 slots in 4 racks within the system. Each rack can accommodate">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-ge-90-30-processor-system-with-versamax-i-o-on-devicenet-configuring-slots-and-racks">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting up GE 90/30 Processor System with Versamax I/O on Devicenet: Configuring Slots and Racks | Oxmaint Community">
    <meta name="twitter:description" content="I am in the process of setting up a GE processor system for the first time, utilizing a GE 90/30 processor with Versamax I/O on devicenet. One aspect I am currently grappling with is the configuration of 4 slots in 4 racks within the system. Each rack can accommodate">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-ge-90-30-processor-system-with-versamax-i-o-on-devicenet-configuring-slots-and-racks"
      },
      "headline": "Setting up GE 90/30 Processor System with Versamax I/O on Devicenet: Configuring Slots and Racks",
      "description": "I am in the process of setting up a GE processor system for the first time, utilizing a GE 90/30 processor with Versamax I/O on devicenet. One aspect I am currently grappling with is the configuration of 4 slots in 4 racks within the system. Each rack can accommodate",
      "author": {
        "@type": "Person",
        "name": "Sandy B."
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-21",
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
                <h1 class="text-white">Setting up GE 90/30 Processor System with Versamax I/O on Devicenet: Configuring Slots and Racks</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Sandy B.</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2503</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">177</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am in the process of setting up a GE processor system for the first time, utilizing a GE 90/30 processor with Versamax I/O on devicenet. One aspect I am currently grappling with is the configuration of 4 slots in 4 racks within the system. Each rack can accommodate 8 modules, resulting in a total of 128 bits of inputs and 128 bits of outputs. With the possibility of having 8 racks (1 main and 7 expansion), the total input and output bits can reach 1028. The system is designed to autoconfigure, but I am unsure about how it addresses the empty slots in each rack. In my current hardware configuration, the reference addresses are %I00265 and %Q00145, both with a length of 1040. For instance, my first input module ranges from %I00265 to %I00280 and my second input module ranges from %I00281 to %I00296. The question remains: what will be the initial input number used in the second rack?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When configuring your hardware profile in Proficity ME, it is important to consider the reference address and length of each I/O module. For example, a 16 input module placed in the first slot after the CPU will have a reference address of %I1 and a length of 16, occupying locations %I1 - %I16. Planning for future expansion, such as adding an 8 input card later, requires organizing memory accordingly. If a second 16 input card is placed in slot 3, its reference address would be %I25 with a length of 16, leaving %I17 - %I24 available for the future card. Keep in mind that the future addition should have a shorter length of 8 to accommodate the 8 input card. Proficity ME will guide you on the next available starting address as you install cards, allowing you to adjust reference addresses if needed. This approach ensures a well-organized and efficient configuration for your I/O modules.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Paullys50</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Salut à tous les experts, Je suis en train de travailler sur un système automatisé RX3I de General Electric qui utilise des modules de communication connectés via un réseau RJ45 avec un module d’extension d’entrée-sortie d’émetteur ETM001F qui est lui-même connecté à un module récepteur erm002 non isolé. Malheureusement, les modules d’entrée-sortie analogiques ne fonctionnent plus en raison d'un défaut. Lorsque j’essaie d’identifier les problèmes à l'aide du logiciel proficy de GE, j’obtiens le code d’erreur 1 qui indique une configuration corrompue. J'aurais besoin d'aide pour configurer correctement les modules analogiques IC200ALG264. J'ai essayé de modifier les plages de courant de 0-200mA à 4-20mA, mais sans succès. S'il vous plaît, pouvez-vous m'aider à résoudre ce problème?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>yeoshoua</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings, experts! I am currently dealing with a General Electric RX3I PLC system that utilizes RJ45 networking to connect its communication modules. The system includes an ETM001F transmitter input/output extension module, which is linked to a non-isolated ERM002 receiver module. Unfortunately, I am experiencing issues with the analog I/O modules as they are no longer functioning correctly. When attempting to diagnose the problem using the Proficy Machine Edition software, I am receiving fault code 1, indicating a corrupted configuration. I need assistance in reconfiguring the IC200ALG264 analog modules, particularly in adjusting the current ranges from 0-200mA to 4-20mA. Any guidance on solving this configuration issue would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>yeoshoua</span></li>
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
<h4 class='text-dark'>FAQ: 1. How many slots and racks can be configured in a GE 90/30 processor system with Versamax I/O on Devicenet?</h4>
<p class='text-muted'><strong>Answer:</strong> - In this setup, each rack can accommodate 8 modules, and there is a possibility of having 8 racks (1 main and 7 expansion), resulting in a total of 1028 input and output bits.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How does the system address empty slots within each rack during configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> - The system is designed to autoconfigure, but it is essential to understand how it addresses empty slots in each rack to ensure proper functioning of the setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the initial input number used in the second rack in the provided hardware configuration example?</h4>
<p class='text-muted'><strong>Answer:</strong> - In the described setup where the first input module ranges from %I00265 to %I00280, and the second input module ranges from %I00281 to %I00296, what would be the initial input number for the second rack to continue the addressing sequence effectively?</p>
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
