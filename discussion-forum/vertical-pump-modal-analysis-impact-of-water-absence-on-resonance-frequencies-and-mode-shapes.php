
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Seeking assistance with a question regarding modal analysis on a vertical pump. The analysis will be conducted with no water in the columns or bowl assembly when the pump is not operational. The pump will be monitored both above and below ground level, with the water drained from the">
    <meta name="keywords" content="vertical pump, modal analysis, water absence, resonance frequencies, mode shapes, operating deflection shape, ods analysis, stiffness and damping, components impact, frequency shifts, damping changes, spectrums, log scale, me">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/vertical-pump-modal-analysis-impact-of-water-absence-on-resonance-frequencies-and-mode-shapes">
    <title>Vertical Pump Modal Analysis: Impact of Water Absence on Resonance Frequencies and Mode Shapes | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Vertical Pump Modal Analysis: Impact of Water Absence on Resonance Frequencies and Mode Shapes | Oxmaint Community">
    <meta property="og:description" content="Seeking assistance with a question regarding modal analysis on a vertical pump. The analysis will be conducted with no water in the columns or bowl assembly when the pump is not operational. The pump will be monitored both above and below ground level, with the water drained from the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/vertical-pump-modal-analysis-impact-of-water-absence-on-resonance-frequencies-and-mode-shapes">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Vertical Pump Modal Analysis: Impact of Water Absence on Resonance Frequencies and Mode Shapes | Oxmaint Community">
    <meta name="twitter:description" content="Seeking assistance with a question regarding modal analysis on a vertical pump. The analysis will be conducted with no water in the columns or bowl assembly when the pump is not operational. The pump will be monitored both above and below ground level, with the water drained from the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/vertical-pump-modal-analysis-impact-of-water-absence-on-resonance-frequencies-and-mode-shapes"
      },
      "headline": "Vertical Pump Modal Analysis: Impact of Water Absence on Resonance Frequencies and Mode Shapes",
      "description": "Seeking assistance with a question regarding modal analysis on a vertical pump. The analysis will be conducted with no water in the columns or bowl assembly when the pump is not operational. The pump will be monitored both above and below ground level, with the water drained from the",
      "author": {
        "@type": "Person",
        "name": "Kyle Bowlin"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Vertical Pump Modal Analysis: Impact of Water Absence on Resonance Frequencies and Mode Shapes</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Kyle Bowlin</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4112</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">437</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Seeking assistance with a question regarding modal analysis on a vertical pump. The analysis will be conducted with no water in the columns or bowl assembly when the pump is not operational. The pump will be monitored both above and below ground level, with the water drained from the sump during the analysis. This absence of water may impact the stiffness and damping of components, potentially shifting resonance frequencies. Conducting an Operating Deflection Shape (ODS) analysis while the pump is running and filled with water will allow for visualization of mode shapes at resonance, aiding in identifying changes. Analyzing spectrums from the ODS in log scale can assist in determining frequency shifts and damping changes caused by water presence. In ME' Scope, consideration must be given to accounting for unknown changes in resonance values and determining the extent of frequency shifts. How have others addressed these challenges in similar projects? Any insights would be greatly appreciated as I prepare for an upcoming project. Thank you, KB.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that Vibrant Technologies offers a version of MeScope which allows users to input variables, such as the mass of water, to make assessments based on the information provided. It might be beneficial to reach out to them directly for more information. As for the modal test, have you tried impacting above ground and collecting response data from the support column below ground? I have not personally conducted this test, but I am curious to see how the data turns out. When performing the Operational Deflection Shape (ODS) test with the added mass of water in the wetted piping, you may anticipate a change in natural frequency (Fn). It is crucial to consider the location of Fn in relation to the running speed, as this can determine whether or not the mode(s) will be excited or visible. One approach to potentially energize the modes is to "jog" the pump to provide an impulse to the entire structure. If you discover a solution to this testing challenge, please feel free to share. Thank you and best regards, Jim Powers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ursula King</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Jim, I appreciate you taking the time to review and respond. I am determined to investigate the issue with the mass of water and ME' Scope. I am intrigued by this and am eager to delve into it further. The individual we have enlisted for testing is highly skilled in Modal/ODS analysis, possessing extensive experience in the field. This assures me that the results we obtain will be highly accurate. As you mentioned, we will utilize a combination of coast down testing, ODS, and Modal data to pinpoint the frequencies and assess how they are affected by the presence of water. I will explore the possibility of using ME'Scope and report back to you. Additionally, I will share the findings on how the natural frequencies shift with and without water. Thank you once again for your assistance. KB</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Xavier Morris</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have conducted testing on large vertical pumps in the past, although not specifically with ME-Scope. The presence of water both inside and outside the pump column increases the mass. As a general guideline, it is recommended to have twice the amount of water inside the column compared to the sump level in order to account for the external mass of water. Additionally, there may be variations in natural frequencies depending on the impeller support conditions in wet versus dry settings. It is crucial to ensure that the stop logs are secure when working in potentially hazardous conditions, such as standing knee-deep in water, debris, and sludge while working on the pump inlet bell. Walt.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Paul Adams</span></li>
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
<h4 class='text-dark'>FAQ: 1. How does the absence of water in a vertical pump impact resonance frequencies and mode shapes during modal analysis?</h4>
<p class='text-muted'><strong>Answer:</strong> - The absence of water in the columns or bowl assembly can impact the stiffness and damping of components, potentially shifting resonance frequencies. This change may affect the mode shapes observed during the analysis.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the significance of conducting an Operating Deflection Shape (ODS) analysis on a vertical pump both with and without water?</h4>
<p class='text-muted'><strong>Answer:</strong> - Conducting an ODS analysis while the pump is running and filled with water allows for visualization of mode shapes at resonance, aiding in identifying changes that may occur when water is absent. This comparison can help in understanding the impact of water presence on the pump's behavior.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can analyzing spectrums from the ODS in log scale help in determining frequency shifts and damping changes caused by water presence in a vertical pump?</h4>
<p class='text-muted'><strong>Answer:</strong> - Analyzing spectrums from the ODS in log scale can assist in determining frequency shifts and damping changes caused by the presence or absence of water in the pump. This analysis helps in quantifying the differences in resonance values and damping characteristics under different operating conditions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What considerations should be taken into account in ME' Scope when dealing with unknown changes in resonance values and frequency shifts in a vertical pump?</h4>
<p class='text-muted'><strong>Answer:</strong> - In ME' Scope, it is important to consider accounting for unknown changes in resonance values and determining the extent of frequency shifts that may occur due to the absence of</p>
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
