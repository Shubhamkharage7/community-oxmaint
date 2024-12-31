
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently faced with a situation where the encoder (TandR Electronic ZH-80M) used in an older machine is no longer available. I am exploring the possibility of retrofitting a different encoder. While I am open to adapting the shaft, my main concern is ensuring that the new encoder">
    <meta name="keywords" content="encoder upgrading, controller compatibility, retrofitting options, t&r electronic zh-80m, encoder retrofit, shaft adaptation, new encoder compatibility, hmi encoder, encoder error margin, wiring pictures, resolver issue, machine details, encoder troubleshooting, position">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/upgrading-encoder-compatibility-with-controller-and-retrofitting-options">
    <title>Upgrading Encoder: Compatibility with Controller and Retrofitting Options | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Upgrading Encoder: Compatibility with Controller and Retrofitting Options | Oxmaint Community">
    <meta property="og:description" content="I am currently faced with a situation where the encoder (TandR Electronic ZH-80M) used in an older machine is no longer available. I am exploring the possibility of retrofitting a different encoder. While I am open to adapting the shaft, my main concern is ensuring that the new encoder">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/upgrading-encoder-compatibility-with-controller-and-retrofitting-options">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Upgrading Encoder: Compatibility with Controller and Retrofitting Options | Oxmaint Community">
    <meta name="twitter:description" content="I am currently faced with a situation where the encoder (TandR Electronic ZH-80M) used in an older machine is no longer available. I am exploring the possibility of retrofitting a different encoder. While I am open to adapting the shaft, my main concern is ensuring that the new encoder">
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
        "@id": "https://community.oxmaint.com/discussion-forum/upgrading-encoder-compatibility-with-controller-and-retrofitting-options"
      },
      "headline": "Upgrading Encoder: Compatibility with Controller and Retrofitting Options",
      "description": "I am currently faced with a situation where the encoder (TandR Electronic ZH-80M) used in an older machine is no longer available. I am exploring the possibility of retrofitting a different encoder. While I am open to adapting the shaft, my main concern is ensuring that the new encoder",
      "author": {
        "@type": "Person",
        "name": "Trazor"
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
                <h1 class="text-white">Upgrading Encoder: Compatibility with Controller and Retrofitting Options</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Trazor</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">261</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">381</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently faced with a situation where the encoder (T&R Electronic ZH-80M) used in an older machine is no longer available. I am exploring the possibility of retrofitting a different encoder. While I am open to adapting the shaft, my main concern is ensuring that the new encoder and controller are compatible. Although information about this machine is scarce, I am willing to gather more details to resolve this issue. The current encoder on the HMI measures position in degrees with a margin of error of plus/minus 1 degree. I have also included pictures of the wiring and the encoder for reference. Any assistance in solving this problem would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The term "Schritte/Umdrehung" refers to the number of steps per revolution (4096), while "Umdrehungen" represents the total revolutions (4094). It is possible that this could be a 12-bit by 12-bit, or 24-bit encoder configuration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for top-quality Synchronous Serial Interface (SSI) Absolute Encoders? Visit encoder.com for a wide selection of Synchronous Serial Interface Encoders.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Transforming this encoder into a product currently on the market is a straightforward process. Any sales representative from top brands such as Turck, IFM, or Pepper & Fuchs should have no trouble assisting you with this task. If you encounter any issues, feel free to reach out to us for further assistance. - Automation Solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Automation Solutions</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy explained the meaning behind "Schritte/Umdrehung" as Steps per Revolution (4096) and "Umdrehungen" as Revolutions (4094). This could potentially indicate a 12-bit by 12-bit, hence a 24-bit encoder. It's uncertain if it's truly a 24-bit configuration, as accessing the actual system within a control box is a time-consuming task without any reference manuals available. It seems like the previous team may have misplaced them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Trazor</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Automation Solutions mentioned that transitioning this encoder to a readily accessible product is easily achievable. Any sales engineer specializing in Turck, IFM, or Pepper & Fuchs should be equipped to assist you without any issues. If you are unable to find the assistance you need, feel free to reach out to us, and we will gladly provide support. -Automation Solutions. I plan on reaching out to you when your services are available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Trazor</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Is it possible to retrofit a different encoder into an older machine if the original one is no longer available?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, it is possible to retrofit a different encoder, but compatibility with the controller needs to be ensured.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I ensure that the new encoder and controller are compatible when retrofitting a different encoder?</h4>
<p class='text-muted'><strong>Answer:</strong> To ensure compatibility, gather as much information as possible about the machine, encoder, and controller. Check specifications and consult with technical experts if needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What are some considerations when retrofitting a different encoder, such as adapting the shaft?</h4>
<p class='text-muted'><strong>Answer:</strong> When retrofitting a different encoder, consider factors like shaft adaptation, measuring accuracy requirements, and electrical connections.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How important is it to maintain the same level of measuring accuracy when replacing an encoder in a machine?</h4>
<p class='text-muted'><strong>Answer:</strong> It is crucial to maintain a similar level of measuring accuracy to ensure the machine functions correctly. Check the margin of error and specifications of the new encoder to meet the required standards.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  Can I get assistance in resolving encoder compatibility issues by providing pictures of the wiring and the encoder for reference?</h4>
<p class='text-muted'><strong>Answer:</strong> Providing pictures of the wiring and the encoder can be helpful for others to understand the setup and offer relevant assistance in resolving compatibility issues.</p>
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
