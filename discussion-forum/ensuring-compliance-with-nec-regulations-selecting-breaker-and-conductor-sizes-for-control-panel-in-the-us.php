
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, we recently imported a batch of Japanese equipment with a specified power requirement of 480V 60Hz. The FLA nameplate on the equipment indicates 32A. However, upon inspecting the control panel, I found that there may be violations of NEC regulations regarding circuit breakers and wire gauge. The">
    <meta name="keywords" content="nec regulations for control panel, breaker and conductor sizes selection, compliance with nec regulations, circuit breaker sizing guidelines, wire gauge requirements in control panels, ocpd selection for control panels">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/ensuring-compliance-with-nec-regulations-selecting-breaker-and-conductor-sizes-for-control-panel-in-the-us">
    <title>Ensuring Compliance with NEC Regulations: Selecting Breaker and Conductor Sizes for Control Panel in the US | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Ensuring Compliance with NEC Regulations: Selecting Breaker and Conductor Sizes for Control Panel in the US | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, we recently imported a batch of Japanese equipment with a specified power requirement of 480V 60Hz. The FLA nameplate on the equipment indicates 32A. However, upon inspecting the control panel, I found that there may be violations of NEC regulations regarding circuit breakers and wire gauge. The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/ensuring-compliance-with-nec-regulations-selecting-breaker-and-conductor-sizes-for-control-panel-in-the-us">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ensuring Compliance with NEC Regulations: Selecting Breaker and Conductor Sizes for Control Panel in the US | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, we recently imported a batch of Japanese equipment with a specified power requirement of 480V 60Hz. The FLA nameplate on the equipment indicates 32A. However, upon inspecting the control panel, I found that there may be violations of NEC regulations regarding circuit breakers and wire gauge. The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/ensuring-compliance-with-nec-regulations-selecting-breaker-and-conductor-sizes-for-control-panel-in-the-us"
      },
      "headline": "Ensuring Compliance with NEC Regulations: Selecting Breaker and Conductor Sizes for Control Panel in the US",
      "description": "Hello everyone, we recently imported a batch of Japanese equipment with a specified power requirement of 480V 60Hz. The FLA nameplate on the equipment indicates 32A. However, upon inspecting the control panel, I found that there may be violations of NEC regulations regarding circuit breakers and wire gauge. The",
      "author": {
        "@type": "Person",
        "name": "cchang455"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-02",
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
                <h1 class="text-white">Ensuring Compliance with NEC Regulations: Selecting Breaker and Conductor Sizes for Control Panel in the US</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>cchang455</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">455</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">29</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, we recently imported a batch of Japanese equipment with a specified power requirement of 480V 60Hz. The FLA nameplate on the equipment indicates 32A. However, upon inspecting the control panel, I found that there may be violations of NEC regulations regarding circuit breakers and wire gauge. The main breaker is 40A and the main feeder size is 14mm2. I need to make changes to comply with NEC regulations with minimal modifications. The panel includes 11 servo drives, a 1HP water pump, and a controller. The supplier mentioned that certain servo drives do not operate simultaneously. Servo drives #1-8 have a rated input current of 8.5A, while drives #9-11 have a rated input current of 4.6A. The selection of circuit breakers and wire gauge was based on duty cycle considerations.

NEC requires considering all continuous and non-continuous loads when selecting OCPD and conductors, regardless of logic interlocks. Are servo drives considered continuous or non-continuous loads? Most servos operate below 50% load and do not run continuously, so they may be classified as non-continuous loads. The calculations for selecting the appropriate breaker size can be done using different methods prescribed by NEC and NFPA 79.

In terms of changing conductor size without changing the breaker, it may be feasible as long as the current carrying capacity requirements are met. NEC specifies current carrying capacity for AWG wire sizes, but for IEC standard wire sizes, manufacturer specifications should be followed.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When choosing Overcurrent Protection Devices (OCPD) and conductors, the NEC mandates considering both continuous and non-continuous loads, regardless of any logic interlocks. It is important to note that in the case of servo drives, it is more accurate to describe them as non-coincident rather than non-continuous. This distinction is crucial because non-continuous implies that all motors could potentially run simultaneously, even if only for short durations. However, in your machine, certain motors are designed to prevent running at the same time as others.

According to NEC 220.60 on Noncoincident Loads, if it is unlikely for two or more non-coincident loads to be in use simultaneously, only the largest load(s) being used at one time should be considered when calculating the total load of a feeder or service. Additionally, Exception #3 of NEC 430.24 states that if circuitry is interlocked to prevent simultaneous operation of specific motors or loads, the conductor ampacity can be based on the sum of currents resulting in the highest total current when operated simultaneously.

There is no restriction on the use of software-based interlocking systems, such as a PLC program. Regarding servo drives, which may present a gray area, it is unclear whether non-running motors are completely disabled or still exerting holding torque. NFPA 79 Section 19.3.2 may offer some clarity as it specifically addresses servos: "Motor circuit conductors for motors operating in non-continuous mode can have reduced ampacity based on the design load and duty cycle." This guideline may provide some helpful insight into addressing the unique considerations of servo drives in electrical systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kolyur</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering demand factors, both the National Electrical Code (NEC) and NFPA 79 offer provisions to account for them. However, NEC tends to be more cautious in this aspect. For instance, NEC paragraph 430.26 allows the Authority Having Jurisdiction (AHJ) to approve feeder conductors with a lower ampacity than specified in 430.24. This decision will ultimately be in the hands of the AHJ. 

In comparison, NFPA 79 paragraph 19.3.2 permits motor circuit conductors to have reduced ampacity based on the design load and duty cycle. It seems from your profile that you are based in Taiwan. Will this equipment be installed in the US? It would be advisable to consult with the AHJ at the installation site for further clarification and guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>paulB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Kolyur and PaulB, thank you for your response! The machine will be installed in the United States and is just one of many machines we have. I am concerned about getting approval from the AHJ due to past cases.

We have a different type of machine that requires a 200A breaker according to NEC guidelines, even though the actual working current is only around 50A due to the number of servos in the system. This presents a challenge in terms of cable size in the cabinet.

I am curious if this situation is common in the US. It seems like a waste to size the breaker according to NEC standards when the actual current is much lower. We are using the appropriate cable size based on the breaker size, but I question the necessity for the breaker to be so large.

While I understand the safety reasons behind NEC regulations for wire size limitations, I am puzzled by the requirement for a breaker of a certain size. Wouldn't a smaller breaker with a larger cable still provide protection in case of overcurrent?

I have noticed a similar design approach in Germany where calculations are based on the actual load requirements for the feeder, which contrasts with practices in the US. This discrepancy seems puzzling.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cchang455</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my understanding, based on NEC paragraph 430.62, a feeder providing power to specific fixed motor loads must have a protective device with a rating or setting that does not exceed the rating or setting of the branch circuit's short-circuit and ground fault protective device for any motor connected to the feeder. It is important to verify if the circuit breakers shown in the initial post are accurate. According to information from the Schneider website, the circuit breaker in question has a rating of 6-10A and a magnetic tripping current of 138A. As per NEC guidelines, the main circuit breaker should be rated lower than 138A to comply with the specification of "not greater" in the NEC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>paulB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>kolyur suggested that your servo drive groups may be considered non-coincident rather than non-continuous. Non-continuous loads imply that all motors could potentially run simultaneously, which is not the case for your machine as certain motors are prevented from running at the same time. Refer to code 220.60 for Noncoincident Loads, which allows for the calculation of total load based on the largest load used at one time. Exception #3 of 430.24 permits conductor ampacity based on interlocked circuitry preventing simultaneous operation of motors or loads. This interlocking can potentially be software-based, like a PLC program. As for the use of servo drives, NFPA 79 section 19.3.2 allows for reduced ampacity based on design load and duty cycle for motors operating in other than continuous mode. While this may help avoid code violations, the issue remains a gray area, especially for a new facility where local inspectors may conduct detailed checks. This uncertainty could not only impact your panel but also affect the upstream PDP due to potential breaker changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cchang455</span></li>
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
<h4 class='text-dark'>FAQ: 1. Are servo drives considered continuous or non-continuous loads according to NEC regulations?</h4>
<p class='text-muted'><strong>Answer:</strong> - Servo drives may be classified as non-continuous loads based on the fact that most servos operate below 50% load and do not run continuously.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How should circuit breakers and wire gauge be selected for a control panel to comply with NEC regulations?</h4>
<p class='text-muted'><strong>Answer:</strong> - NEC requires considering all continuous and non-continuous loads when selecting Overcurrent Protection Devices (OCPD) and conductors. Different methods prescribed by NEC and NFPA 79 can be used for calculating the appropriate breaker size.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to change conductor size without changing the breaker to ensure compliance with NEC regulations?</h4>
<p class='text-muted'><strong>Answer:</strong> - It may be feasible to change conductor size without changing the breaker as long as the current carrying capacity requirements are met. Manufacturer specifications should be followed for IEC standard wire sizes, while NEC specifies current carrying capacity for AWG wire sizes.</p>
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
