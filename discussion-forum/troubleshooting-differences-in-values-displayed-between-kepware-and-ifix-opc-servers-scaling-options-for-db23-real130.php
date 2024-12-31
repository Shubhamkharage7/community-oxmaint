
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have limited knowledge about the simaticnet OPC server, but I am familiar with Kepware. In the PLC, I typically only scale raw to engineering, but Kepware does offer the possibility of scaling as well. The tag configuration in iFix for this specific tag is as follows: CPU;READ;DB23;REAL130;S7:[OPC_1]. While">
    <meta name="keywords" content="opc server scaling options, troubleshooting opc server differences, kepware vs ifix opc servers, scaling tags in kepware and ifix, simaticnet opc server configuration">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-differences-in-values-displayed-between-kepware-and-ifix-opc-servers-scaling-options-for-db23-real130">
    <title>Troubleshooting Differences in Values Displayed Between Kepware and iFix OPC Servers: Scaling Options for DB23;REAL130 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Differences in Values Displayed Between Kepware and iFix OPC Servers: Scaling Options for DB23;REAL130 | Oxmaint Community">
    <meta property="og:description" content="I have limited knowledge about the simaticnet OPC server, but I am familiar with Kepware. In the PLC, I typically only scale raw to engineering, but Kepware does offer the possibility of scaling as well. The tag configuration in iFix for this specific tag is as follows: CPU;READ;DB23;REAL130;S7:[OPC_1]. While">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-differences-in-values-displayed-between-kepware-and-ifix-opc-servers-scaling-options-for-db23-real130">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Differences in Values Displayed Between Kepware and iFix OPC Servers: Scaling Options for DB23;REAL130 | Oxmaint Community">
    <meta name="twitter:description" content="I have limited knowledge about the simaticnet OPC server, but I am familiar with Kepware. In the PLC, I typically only scale raw to engineering, but Kepware does offer the possibility of scaling as well. The tag configuration in iFix for this specific tag is as follows: CPU;READ;DB23;REAL130;S7:[OPC_1]. While">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-differences-in-values-displayed-between-kepware-and-ifix-opc-servers-scaling-options-for-db23-real130"
      },
      "headline": "Troubleshooting Differences in Values Displayed Between Kepware and iFix OPC Servers: Scaling Options for DB23;REAL130",
      "description": "I have limited knowledge about the simaticnet OPC server, but I am familiar with Kepware. In the PLC, I typically only scale raw to engineering, but Kepware does offer the possibility of scaling as well. The tag configuration in iFix for this specific tag is as follows: CPU;READ;DB23;REAL130;S7:[OPC_1]. While",
      "author": {
        "@type": "Person",
        "name": "dbptx"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-25",
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
                <h1 class="text-white">Troubleshooting Differences in Values Displayed Between Kepware and iFix OPC Servers: Scaling Options for DB23;REAL130</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dbptx</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">354</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">114</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have limited knowledge about the simaticnet OPC server, but I am familiar with Kepware. In the PLC, I typically only scale raw to engineering, but Kepware does offer the possibility of scaling as well. The tag configuration in iFix for this specific tag is as follows: CPU;READ;DB23;REAL130;S7:[OPC_1]. While using OPC Scout V10, I noticed that there is no scaling information available for DB23;REAL130. Is it feasible to scale this tag? Am I searching in the correct location?

My main concern is determining why there is a discrepancy in the values displayed between Kepware OPC and iFix. Despite using two distinct OPC servers with the same source (S7 PLC), the values differ. Without scaling in iFix or Kepware, I am exploring the simatic configuration for answers.

I hope this explanation is clear, and I appreciate any guidance you can provide. Thank you in advance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Exploring Opportunities with OPC Scout for Enhanced Performance and Efficiency</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dbptx</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am unfamiliar with scaling tags in Simatic Net, and I am unable to locate information on this topic. In a discussion on Net.dbptx, the focus is on determining the discrepancy between values from Kepware OPC and iFix. Despite both pulling data from a common source (S7 PLC), the values displayed are dissimilar. It would be helpful to see screenshots illustrating these differences, as well as an online screenshot from a watch table in STEP7 featuring the corresponding variables. This visual comparison can provide insights into the root cause of this discrepancy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you Jesper for your assistance. Unfortunately, I was unable to uncover the root of the problem. I will continue my search for another possible cause and provide an update once I have identified it. Goodbye for now!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dbptx</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JesperMP mentioned that they are unfamiliar with the scaling of tags in Simatic Net and would like to see some screenshots highlighting the differences. Additionally, they are curious about online screenshots from a watch table in STEP7 displaying the same variables. Examining specific values in these screenshots could potentially offer insights. In my opinion, SimaticNet primarily functions as a data transfer tool rather than an OPC server package. It facilitates communication with S7 PLCs through various protocols, with OPC being one of the supported data sinks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey @dbptx, sharing the requested screenshots could bring clarity to the situation. This may help create a better understanding of the issue at hand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Is it possible to scale the tag DB23;REAL130 in iFix if no scaling information is available in OPC Scout V10?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to scale the tag in iFix even if there is no scaling information available in OPC Scout V10. You may need to configure the scaling settings within iFix itself.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why are there differences in the values displayed between Kepware OPC and iFix for the same source (S7 PLC)?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Discrepancies in values between different OPC servers could be due to how the servers handle data processing, scaling configurations, or other settings. It is essential to check the configuration settings in both Kepware and iFix to ensure consistency.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Should I explore the simatic configuration to address the discrepancy in values between Kepware and iFix?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, exploring the simatic configuration for the source PLC can provide insights into potential reasons for the value differences between Kepware and iFix. Checking the PLC configuration and communication settings may help identify the root cause of the discrepancy.</p>
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
