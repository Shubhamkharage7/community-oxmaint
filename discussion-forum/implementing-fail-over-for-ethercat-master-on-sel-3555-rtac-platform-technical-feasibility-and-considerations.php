
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am currently utilizing the SEL-3555 RTAC platform and exploring the possibility of implementing fail-over for the EtherCAT master on this platform. While SEL Tech support engineers have advised against this, they have not provided a clear explanation as to why this is not recommended. They have pointed">
    <meta name="keywords" content="fail-over implementation for ethercat master, sel-3555 rtac platform fail-over, ethercat master fail-over considerations, implementing redundancy for ethercat master, sel">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/implementing-fail-over-for-ethercat-master-on-sel-3555-rtac-platform-technical-feasibility-and-considerations">
    <title>Implementing Fail-Over for EtherCAT Master on SEL-3555 RTAC Platform: Technical Feasibility and Considerations | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Implementing Fail-Over for EtherCAT Master on SEL-3555 RTAC Platform: Technical Feasibility and Considerations | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am currently utilizing the SEL-3555 RTAC platform and exploring the possibility of implementing fail-over for the EtherCAT master on this platform. While SEL Tech support engineers have advised against this, they have not provided a clear explanation as to why this is not recommended. They have pointed">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/implementing-fail-over-for-ethercat-master-on-sel-3555-rtac-platform-technical-feasibility-and-considerations">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Implementing Fail-Over for EtherCAT Master on SEL-3555 RTAC Platform: Technical Feasibility and Considerations | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am currently utilizing the SEL-3555 RTAC platform and exploring the possibility of implementing fail-over for the EtherCAT master on this platform. While SEL Tech support engineers have advised against this, they have not provided a clear explanation as to why this is not recommended. They have pointed">
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
        "@id": "https://community.oxmaint.com/discussion-forum/implementing-fail-over-for-ethercat-master-on-sel-3555-rtac-platform-technical-feasibility-and-considerations"
      },
      "headline": "Implementing Fail-Over for EtherCAT Master on SEL-3555 RTAC Platform: Technical Feasibility and Considerations",
      "description": "Greetings, I am currently utilizing the SEL-3555 RTAC platform and exploring the possibility of implementing fail-over for the EtherCAT master on this platform. While SEL Tech support engineers have advised against this, they have not provided a clear explanation as to why this is not recommended. They have pointed",
      "author": {
        "@type": "Person",
        "name": "BeepBob"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-18",
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
                <h1 class="text-white">Implementing Fail-Over for EtherCAT Master on SEL-3555 RTAC Platform: Technical Feasibility and Considerations</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">237</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">458</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, 

I am currently utilizing the SEL-3555 RTAC platform and exploring the possibility of implementing fail-over for the EtherCAT master on this platform. While SEL Tech support engineers have advised against this, they have not provided a clear explanation as to why this is not recommended. They have pointed out that none of their customers have attempted to use the EtherCAT network POU in the same way I am trying to. 

Here is a breakdown of my setup: 
1. I have two RTACs, referred to as RTAC A and RTAC B. 
2. RTAC A is configured with an IPAlias block communicating with a corresponding IPAlias block on RTAC B. 
3. The IPAlias block determines which RTAC will take control of the IPAlias interface (x.x.x.x). 
4. I have an Axion RemoteIO chassis that utilizes EtherCAT as the protocol. 
5. Each RTAC has an EtherCAT network with a software POU block that can be enabled or disabled. 

My goal is to use the output of the IPAlias block to control the activation/deactivation of the EtherCAT POU on the RTAC, ensuring that only the RTAC in charge has control over the Axion Remote IO running on the EtherCAT protocol. 

Despite attempting the setup, it has not been successful. I am now seeking documentation on the sequence of operations for EtherCAT. I have tried searching for this information online, but only come across articles discussing the benefits of EtherCAT without finding specific technical details. 

From my understanding, the EtherCAT network is initialized once during the download to the RTAC and does not have a mechanism to re-initialize if the Master disconnects. I am unable to find documentation outlining the actions in case of a Master disconnect or when the network service is stopped by the EtherCAT POU. 

I am reaching out to those with extensive experience in working with EtherCAT. Is it technically feasible to implement fail-over for a Master on the EtherCAT network? Does the EtherCAT network instance retain certain parameters of the Master, such as IP or MAC addresses, in a way that could cause issues if another Master were to take over the network? 

Any insights or guidance on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After some research, it appears that the EtherCAT protocol does offer the option for a passive/standby master, although this feature must be specifically implemented by the software developer. If SEL does not explicitly mention this capability, it is likely not supported. Therefore, attempting to achieve the same functionality through the POU may not be successful, as the network instance could end up without a master.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking to integrate CODESYS with SEL, there is a high probability that SEL already supports it. You can kindly request them to include the feature you are interested in, such as running two controllers on a single ethercat network. The demonstration typically lasts either 30 minutes or 2 hours, which could be useful for a proof of concept using CODESYS runtimes. You can find all the necessary ethercat specifications and documentation on websites such as CODESYS Group and ethercat.org, accessible for free after becoming a member. One of the advantages of using the ethercat protocol is the easy access to detailed specifications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AustralIan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An Australian individual mentioned that SEL most likely utilizes CODESYS and suggested politely requesting them to implement a specific feature for dual controllers and one EtherCAT network. The EtherCAT specifications and related documentation can be accessed for free on websites like CODESYS Group and ethercat.org by becoming a member. The open access to EtherCAT specifications is a standout feature of this protocol. To inquire about implementing CODESYS as the logic engine, consider asking SEL for specific technical details using references from the provided link. This aligns perfectly with what you aim to achieve.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BeepBob</span></li>
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
<h4 class='text-dark'>FAQ: 1. Is it recommended to implement fail-over for the EtherCAT master on the SEL-3555 RTAC platform according to SEL Tech support engineers?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: SEL Tech support engineers have advised against implementing fail-over for the EtherCAT master on the SEL-3555 RTAC platform, citing concerns and lack of customer attempts in this area.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the setup breakdown for implementing fail-over on the RTAC platform with EtherCAT?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: The setup involves two RTACs (RTAC A and RTAC B) with IPAlias blocks, an Axion RemoteIO chassis using EtherCAT, and EtherCAT network with software POU blocks that can be enabled or disabled based on IPAlias control.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What challenges have been faced in implementing fail-over for the EtherCAT master on the SEL-3555 RTAC platform?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: The attempt to control the activation/deactivation of the EtherCAT POU based on IPAlias control has not been successful, leading to a search for documentation on EtherCAT's sequence of operations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there documentation available on the sequence of operations for EtherCAT in case of a Master disconnect or network service stoppage by the EtherCAT POU?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: The user has been unable to find documentation detailing the actions in scenarios of Master disconnect or network service stoppage by the EtherCAT POU, which has prompted the search for technical details.</p>
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
