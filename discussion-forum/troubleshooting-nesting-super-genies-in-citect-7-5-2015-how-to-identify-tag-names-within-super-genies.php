
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am a frequent forum visitor who doesnt often participate. I am currently facing an issue with nesting 2 super genies in Citect 7.5 (2015). Can I determine the Tag Name (not value) used within a supergenie? I am attempting to call a super genie from within">
    <meta name="keywords" content="nesting super genies, citect 5, tag names, super genie troubleshooting, identifying tag names, nested super genie, citect 2015, citect genies, troubleshooting citect">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-nesting-super-genies-in-citect-7-5-2015-how-to-identify-tag-names-within-super-genies">
    <title>Troubleshooting Nesting Super Genies in Citect 7.5 (2015) - How to Identify Tag Names within Super Genies | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Nesting Super Genies in Citect 7.5 (2015) - How to Identify Tag Names within Super Genies | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am a frequent forum visitor who doesnt often participate. I am currently facing an issue with nesting 2 super genies in Citect 7.5 (2015). Can I determine the Tag Name (not value) used within a supergenie? I am attempting to call a super genie from within">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-nesting-super-genies-in-citect-7-5-2015-how-to-identify-tag-names-within-super-genies">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Nesting Super Genies in Citect 7.5 (2015) - How to Identify Tag Names within Super Genies | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am a frequent forum visitor who doesnt often participate. I am currently facing an issue with nesting 2 super genies in Citect 7.5 (2015). Can I determine the Tag Name (not value) used within a supergenie? I am attempting to call a super genie from within">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-nesting-super-genies-in-citect-7-5-2015-how-to-identify-tag-names-within-super-genies"
      },
      "headline": "Troubleshooting Nesting Super Genies in Citect 7.5 (2015) - How to Identify Tag Names within Super Genies",
      "description": "Hello everyone, I am a frequent forum visitor who doesnt often participate. I am currently facing an issue with nesting 2 super genies in Citect 7.5 (2015). Can I determine the Tag Name (not value) used within a supergenie? I am attempting to call a super genie from within",
      "author": {
        "@type": "Person",
        "name": "woolie161"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-09",
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
                <h1 class="text-white">Troubleshooting Nesting Super Genies in Citect 7.5 (2015) - How to Identify Tag Names within Super Genies</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>woolie161</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3102</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">99</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am a frequent forum visitor who doesn't often participate. I am currently facing an issue with nesting 2 super genies in Citect 7.5 (2015). Can I determine the Tag Name (not value) used within a supergenie? I am attempting to call a super genie from within another super genie, but I believe I need to know the tag name used in the first super genie in order to pass it to the second (nested) super genie. For example, the first super genie is filled with "%Tag%_AutoON" and "%Tag%_SpeedSP" where %tag% represents Pump1 or Pump2. I would like to set up an input on "%Tag%_SpeedSP" to trigger a second super genie (number pad), but I need to identify the Tag used in the original super genie. I am hoping someone knowledgeable in this forum can assist me. Thank you, Woolie161.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are trying to parse a literal string in the Super Genie, simply enclose it in 'single quotes'. I recently came across a question that was left unanswered for two years, so I wanted to provide a solution for future reference. One example from the question involved calling a pump using the AssVarTags function with parameters (-2,0,"'"%Tag%"'", "%Tag%_AutoON", "%Tag%_SpeedSP"). In the Super Genie, you can access the pump tag name by using ?STRING 1??2?, while ?3? will function normally for tags 2 and 3.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thefatcontroller</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using Super Genies in Citect, it's essential to find workarounds for any unresolved issues. Thank you, TheFatController, for shedding light on this matter. Although the project is completed, I'll keep your solution in mind for future reference. Just a heads up - I found a workaround by manually adding the equipment tag name above the genie to bypass the issue. Your time and knowledge are greatly appreciated. Looking forward to more insightful discussions in the future. Regards, Woolie161.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>woolie161</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While troubleshooting issues with passing tags between Super Genies, I discovered that using AssChain() and AssChainPopUp() functions successfully transferred substituted tags. It seems that AssVarTags() function is designed for passing/substituting tags from a Genie to a Super Genie exclusively. I hope this insight proves helpful for individuals facing similar challenges in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>heyrevolver</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate the update from Heyrevolver. It appears that Citect has fallen out of favor with our clients as Ignition has been gaining market share recently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>woolie161</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I determine the Tag Name used within a super genie in Citect 7.5 (2015)?</h4>
<p class='text-muted'><strong>Answer:</strong> - To identify the Tag Name within a super genie, you can look for the placeholders used within the super genie template. In the case mentioned, "%Tag%_AutoON" and "%Tag%_SpeedSP" are placeholders representing Pump1 or Pump2.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to call a super genie from within another super genie in Citect 7.5 (2015)?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to call a super genie from within another super genie. However, to pass information between the nested super genies, you may need to know the specific Tag Name used in the first super genie.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I set up an input to trigger a second super genie in Citect 7.5 (2015)?</h4>
<p class='text-muted'><strong>Answer:</strong> - To trigger a second super genie based on an input within the first super genie, you would need to identify the Tag used in the original super genie and pass it as a parameter to the nested super genie.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can someone assist me in troubleshooting nesting Super Genies in Citect 7.5 (2015)?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are facing issues with nesting Super Genies in Citect 7.5 (2015), you can seek assistance from knowledgeable individuals in forums or communities dedicated to Citect or SCADA systems.</p>
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
