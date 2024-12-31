
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my workplace, I have taken on the responsibility of designing industrial control panels. Currently, I am examining an older panel running on 120VAC. In reviewing past designs, I observed that the Engineer used a dual breaker for the incoming 120VAC power, routing both the hot and neutral through">
    <meta name="keywords" content="industrial control panel design, 120vac power system, dual breaker benefits, ul489 20a dual breaker, electrical code guidelines, 208v 3-phase system">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/why-use-a-dual-breaker-on-120vac-power-investigating-the-design-choice">
    <title>Why Use a Dual Breaker on 120VAC Power? Investigating the Design Choice | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Why Use a Dual Breaker on 120VAC Power? Investigating the Design Choice | Oxmaint Community">
    <meta property="og:description" content="In my workplace, I have taken on the responsibility of designing industrial control panels. Currently, I am examining an older panel running on 120VAC. In reviewing past designs, I observed that the Engineer used a dual breaker for the incoming 120VAC power, routing both the hot and neutral through">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/why-use-a-dual-breaker-on-120vac-power-investigating-the-design-choice">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Why Use a Dual Breaker on 120VAC Power? Investigating the Design Choice | Oxmaint Community">
    <meta name="twitter:description" content="In my workplace, I have taken on the responsibility of designing industrial control panels. Currently, I am examining an older panel running on 120VAC. In reviewing past designs, I observed that the Engineer used a dual breaker for the incoming 120VAC power, routing both the hot and neutral through">
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
        "@id": "https://community.oxmaint.com/discussion-forum/why-use-a-dual-breaker-on-120vac-power-investigating-the-design-choice"
      },
      "headline": "Why Use a Dual Breaker on 120VAC Power? Investigating the Design Choice",
      "description": "In my workplace, I have taken on the responsibility of designing industrial control panels. Currently, I am examining an older panel running on 120VAC. In reviewing past designs, I observed that the Engineer used a dual breaker for the incoming 120VAC power, routing both the hot and neutral through",
      "author": {
        "@type": "Person",
        "name": "cary_mur001"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-08",
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
                <h1 class="text-white">Why Use a Dual Breaker on 120VAC Power? Investigating the Design Choice</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>cary_mur001</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">256</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">55</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my workplace, I have taken on the responsibility of designing industrial control panels. Currently, I am examining an older panel running on 120VAC. In reviewing past designs, I observed that the Engineer used a dual breaker for the incoming 120VAC power, routing both the hot and neutral through each half of the breaker. Per electrical code guidelines, the neutral does not require protection. This raises the question of why the mains hot and neutral were routed through a UL489 20A dual breaker. Upon inspection of the schematics, it appears they may have been anticipating the use of two hot legs in a 208V 3 phase system. However, this setup would result in the remaining branch circuits being inadequately protected, as they are all single breakers on the hot side only.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It's been a while since I last reviewed that section, but to the best of my recollection, it is allowed. However, what is not permissible is a fused connection where the neutral wire can be disconnected without the live wire also being disconnected. This issue arose in a corner-grounded delta system where a load was connected to a fused disconnect. In order to comply with regulations, we had to replace the fuse in the neutral phase with a non-fusible "blank." I was relieved when this system was replaced. Although I'm unsure of the benefits, there must have been a reason for its use. It's possible they had an abundance of 2-pole breakers and needed more 1-pole units.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In Europe, circuit breakers consist of 2 poles for total isolation of the circuit. For a three-phase power supply in a plant with a neutral, the main switch is commonly 4 poles. The neutral provided by the company typically carries a voltage close to zero, but there is a risk of higher voltage due to supply failures. To ensure safety, switches should be unipolar unless a separate 0V is created by using a transformer with one side of the secondary connected to ground instead of the supply's neutral.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Typically, 2-pole breakers are found on machinery imported from overseas, where neither side of the single-phase transformer secondary is grounded. It is important to ensure all non-grounded conductors are properly protected in these instances to prevent electrical hazards.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Joseph_e2 mentioned that while reviewing a certain section, he remembered that a certain type of connection is permissible. However, he emphasized that a fused connection where the grounded conductor could open without the hot also opening is not permissible. He shared an experience with a corner-grounded delta system where a load was on a fused disconnect, and they had to replace the fuse in the grounded phase with a "blank" that didn't have a fusible link to comply with regulations. He expressed relief when the system was eventually replaced.

The corner ground installation discussed is not only interesting but also potentially hazardous. While working for an electrical contractor in the Midwest, the author encountered many irrigation pump controllers in systems like center pivot or other irrigation setups. According to the author's boss, the configuration typically involved one phase having a wire straight from the lug to a ground lug, a deviation from standard practices. The author was warned not to tamper with the configuration to avoid encountering a voltage of 277V. The unusual setup was reportedly a cost-saving measure by the utility company to reduce the use of miles of neutral wire.

In conclusion, the author highlighted the peculiarities of the corner-grounded installation and the potential dangers posed by unconventional electrical configurations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>saultgeorge</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering purchasing machines, it's worth noting that some OEMs offer both 120 and 220 volt options, allowing for potential conversion. In terms of cost, investing in 2 pole breakers may not be significantly more expensive than 1 pole breakers, and avoiding the need to manage separate inventory could potentially offset any additional expense. Additionally, utilizing a single standard CAD template can streamline the engineering process and save time. A similar cost-saving approach can be seen with ice cube relays, where the efficiency of using 4 pole relays and sockets may outweigh the slight savings of 2 pole options, especially for OEMs dealing with high quantities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Saultgeorge mentioned an intriguing yet risky corner ground installation scenario he encountered while working in the Midwest for an electrical contractor. The setup involved irrigation pump controllers operating like a center pivot system, with an unusual configuration in the 3-phase 480V pump controller. Specifically, the "B" phase was wired directly to a ground lug, a deviation from the norm in proper electrical setups.

According to Saultgeorge's boss, tampering with this ground connection could result in a dangerous 277V current passing through. He explained that this unorthodox setup was a cost-saving measure by the utility company (referred to as REA), avoiding the need for miles of neutral wire. This unconventional configuration made it impossible to obtain a reading to ground from that particular phase, adding to the peculiarity of the situation.

The installation involved a 480-240V Delta-Delta transformer powering a forming press brought in from another facility long before Saultgeorge joined the team. It seemed that the setup was a quick fix due to the lack of a delta-wye transformer. This caused confusion for electricians troubleshooting other issues, as they encountered unusual voltage readings on the incoming line. After confirming the legitimacy of the setup, they promptly replaced it with a more conventional system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why was a dual breaker used for the incoming 120VAC power in the industrial control panel?</h4>
<p class='text-muted'><strong>Answer:</strong> - The dual breaker was likely used to anticipate the future use of two hot legs in a 208V 3 phase system, as indicated in the schematics.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it necessary to route both the hot and neutral through each half of the dual breaker?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, according to electrical code guidelines, the neutral does not require protection, so routing only the hot through the dual breaker would be sufficient.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the implications of routing both hot and neutral through a dual breaker on a 120VAC system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Routing both through a dual breaker may result in inadequately protected branch circuits, as the remaining circuits are typically on single breakers connected to the hot side only.</p>
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
