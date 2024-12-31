
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In the period from 2020 to 2022, known as the no parts available era, there was a recommendation to use a 1756-OBV8S instead of the PointIO safety modules typically utilized. While I successfully connected the 1756-OBV8S to a servo drive safe-off through direct wiring, I encountered difficulties when attempting">
    <meta name="keywords" content="ab 1756-obv8s, safety relay activation, troubleshooting faults, 1756-obv8s card, 24v coil allen-bradley 700s, pointio safety modules, direct wiring">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-faults-with-ab-1756-obv8s-in-safety-relay-activation">
    <title>Troubleshooting Faults with AB 1756-OBV8S in Safety Relay Activation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Faults with AB 1756-OBV8S in Safety Relay Activation | Oxmaint Community">
    <meta property="og:description" content="In the period from 2020 to 2022, known as the no parts available era, there was a recommendation to use a 1756-OBV8S instead of the PointIO safety modules typically utilized. While I successfully connected the 1756-OBV8S to a servo drive safe-off through direct wiring, I encountered difficulties when attempting">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-faults-with-ab-1756-obv8s-in-safety-relay-activation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Faults with AB 1756-OBV8S in Safety Relay Activation | Oxmaint Community">
    <meta name="twitter:description" content="In the period from 2020 to 2022, known as the no parts available era, there was a recommendation to use a 1756-OBV8S instead of the PointIO safety modules typically utilized. While I successfully connected the 1756-OBV8S to a servo drive safe-off through direct wiring, I encountered difficulties when attempting">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-faults-with-ab-1756-obv8s-in-safety-relay-activation"
      },
      "headline": "Troubleshooting Faults with AB 1756-OBV8S in Safety Relay Activation",
      "description": "In the period from 2020 to 2022, known as the no parts available era, there was a recommendation to use a 1756-OBV8S instead of the PointIO safety modules typically utilized. While I successfully connected the 1756-OBV8S to a servo drive safe-off through direct wiring, I encountered difficulties when attempting",
      "author": {
        "@type": "Person",
        "name": "kekrahulik"
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
                <h1 class="text-white">Troubleshooting Faults with AB 1756-OBV8S in Safety Relay Activation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1500</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">34</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In the period from 2020 to 2022, known as the "no parts available" era, there was a recommendation to use a 1756-OBV8S instead of the PointIO safety modules typically utilized. While I successfully connected the 1756-OBV8S to a servo drive safe-off through direct wiring, I encountered difficulties when attempting to activate a 24V Coil Allen-Bradley 700S emergency stop relay. The Card Output consistently faulted whenever an attempt was made to activate the relay. The issue was set aside as the relay was intended for future use, but now the need arises to replace multiple hardwired 120V relays with Safety PLC controlled 24V relays.

As I delved into the AB knowledgebase, it became evident that others have faced similar challenges. One technote suggested incorporating diodes to avoid faults when connecting in Bipolar mode, although this was not applicable in my case. The card was configured for sourcing, with the output wires connected to the relay coil+ and the relay coil- wired to 24V common.

Another technote implied the necessity of employing a SELV/PELV listed 24V power supply. Surprisingly, my search for a SELC power supply on the AB platform yielded no results. Additionally, a technote raised concerns about the reliability of the modules, citing incidents of False Overload Faults with OBV8S/OBV8SK in Sourcing mode.

In response to this issue, a firmware update (V2.011) and Add-On Profile (V2.01) were released for 5069-OBV8S / 5069-OBV8SK modules, while a resolution for 1756-OBV8S / 1756-OBV8SK V1.011 is expected in a future firmware update.

In light of these challenges, my queries to the group are as follows:
1. Has anyone successfully utilized a 1756-OBV8S card? Any insights to share?
2. Is a SELV power supply indispensable for its operation?
3. I recently acquired 700-HN123 8-pin safety relays to assist in activating the larger 700S relays, in case of a potential load issue. Has anyone else encountered this scenario?

Given the delayed delivery of the 1756-OBV8s, it may have been more prudent to opt for PointIO initially.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One common issue when using a non-safe interposing relay is the loss of safety integrity. To ensure safety, I opt for the AB 700-HPS2Z24, a "Pin" style safety relay, to serve as an interposing relay. This relay is securely mounted in a 700-HN123 base for added protection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently purchased 700-HPSXZ24 safety relays to use with my 700-HN123 bases. However, I am facing an issue with the compatibility of the 1756-OBV8S card with the 700S-DCP1020DZ24 relay. It seems that the card is not able to activate the relay as needed. This situation is quite frustrating as I may need to resort to using a 24Vdc safety relay instead.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you found a solution to this issue? Upon reviewing past designs, I encountered no issues with integrating safety contactors into this module.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When you refer to "reviewed previous designs," what exactly do you mean? A colleague recently spoke with Rockwell and found them receptive to the issue of integrating a 700S-DCP1020DZ24 relay. Without hesitation, Rockwell suggested their latest model, the 700S-EF620QJC, which features a coil with low current. This new relay could be a potential solution to the problem at hand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my prior designs, I utilized the low current coil version which has been a longstanding option. Upon verifying that the relay's holding current was within the module's supply capacity, I made the decision to use this particular version. I presumed that the necessary checks were also carried out for the circuit in question, facing challenges. In instances where a relay's hold current exceeds the module's capability, the most effective solution would be to opt for an interposing relay if a low current option is not accessible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Our oversight in conducting proper due diligence led us to assume that the new 1756 card would have the same capabilities as the other relays we have been successfully using with PointIO for years.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kekrahulik</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Q: Has anyone successfully utilized a 1756-OBV8S card? Any insights to share?
    The user successfully connected the 1756-OBV8S to a servo drive safe-off through direct wiring but faced difficulties when attempting to activate a 24V Coil Allen-Bradley 700S emergency stop relay.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is a SELV power supply indispensable for the operation of a 1756-OBV8S card?</h4>
<p class='text-muted'><strong>Answer:</strong> While a technote implied the necessity of employing a SELV/PELV listed 24V power supply, the user's search for a SELC power supply on the AB platform yielded no results.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  I recently acquired 700-HN123 8-pin safety relays to assist in activating the larger 700S relays. Has anyone else encountered this scenario?</h4>
<p class='text-muted'><strong>Answer:</strong> The user acquired 700-HN123 8-pin safety relays to aid in activating larger 700S relays, potentially to address load issues.</p>
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
