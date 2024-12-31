
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently upgraded an application from RSView32 to FactoryTalkView SE, which led to a change in how datalogs are stored. Previously, the datalog was saved in a *.DBF file in RSView32 and a software generated reports in Excel from that file. However, in FactoryTalkView SE, datalogs are now saved">
    <meta name="keywords" content="factorytalkview se datalog storage, datalog management in factorytalkview se, resolve dbf file issues in factorytalkview se, factorytalkview se datalog format change, rsview32">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-store-datalogs-in-factorytalkview-se-and-resolve-dbf-file-issues">
    <title>How to Store Datalogs in FactoryTalkView SE and Resolve DBF File Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Store Datalogs in FactoryTalkView SE and Resolve DBF File Issues | Oxmaint Community">
    <meta property="og:description" content="I recently upgraded an application from RSView32 to FactoryTalkView SE, which led to a change in how datalogs are stored. Previously, the datalog was saved in a *.DBF file in RSView32 and a software generated reports in Excel from that file. However, in FactoryTalkView SE, datalogs are now saved">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-store-datalogs-in-factorytalkview-se-and-resolve-dbf-file-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Store Datalogs in FactoryTalkView SE and Resolve DBF File Issues | Oxmaint Community">
    <meta name="twitter:description" content="I recently upgraded an application from RSView32 to FactoryTalkView SE, which led to a change in how datalogs are stored. Previously, the datalog was saved in a *.DBF file in RSView32 and a software generated reports in Excel from that file. However, in FactoryTalkView SE, datalogs are now saved">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-store-datalogs-in-factorytalkview-se-and-resolve-dbf-file-issues"
      },
      "headline": "How to Store Datalogs in FactoryTalkView SE and Resolve DBF File Issues",
      "description": "I recently upgraded an application from RSView32 to FactoryTalkView SE, which led to a change in how datalogs are stored. Previously, the datalog was saved in a *.DBF file in RSView32 and a software generated reports in Excel from that file. However, in FactoryTalkView SE, datalogs are now saved",
      "author": {
        "@type": "Person",
        "name": "billyjb2000"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-31",
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
                <h1 class="text-white">How to Store Datalogs in FactoryTalkView SE and Resolve DBF File Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>billyjb2000</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">241</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">369</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently upgraded an application from RSView32 to FactoryTalkView SE, which led to a change in how datalogs are stored. Previously, the datalog was saved in a *.DBF file in RSView32 and a software generated reports in Excel from that file. However, in FactoryTalkView SE, datalogs are now saved in a *.DAT format, no longer supporting *.DBF files. I came across a solution in Rockwell's KnowledgeBase but am having difficulty implementing it. Has anyone encountered and successfully addressed this issue before? Visit the link for more details: https://rockwellautomation.custhelp.com/app/answers/answer_view/a_id/69931/loc/en_US</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The ODBC dBASE drivers are believed to originate from Office, particularly the "Jet Engine" on which MS Access is built. The Jet Engine used to be freely available for separate installation, and it still appears to be so. You can download the Microsoft Access Database Engine 2016 Redistributable from the Official Microsoft Download Center. To check if the dBASE driver is installed, use the ODBC Administration Tool. Remember that a .DBF "database" is essentially a directory, with the tables being files within it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The instructions provided were adequate, but there were a few details missing. I followed the steps on a single computer, avoiding the need to transfer files between machines. One key action I took was creating a dedicated "database" folder to keep all files organized in one place, which proved essential for step #7 when saving DBF files in a specific location for easy access. Additionally, my version of Access no longer automatically generates .MDB files, so I had to utilize the "Save As" function and select the MDB format, opting for the 2002 version. In step #10, it is crucial to click the browse button next to each table to choose the DBF versions. Once I sorted out these details, I successfully logged into the DBF database.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What is the difference in how datalogs are stored between RSView32 and FactoryTalkView SE?
- In RSView32, datalogs were saved in a .DBF file, while in FactoryTalkView SE, datalogs are saved in a .DAT format.
  
2. How can I resolve the issue of transitioning from .DBF files to .DAT files in FactoryTalkView SE?
- You can refer to the solution provided in Rockwell's KnowledgeBase for guidance. Visit the link for more details: https://rockwellautomation.custhelp.com/app/answers/answer_view/a_id/69931/loc/en_US</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Has anyone successfully addressed the issue of storing datalogs in FactoryTalkView SE after upgrading from RSView32?</h4>
<p class='text-muted'><strong>Answer:</strong> - The thread discusses the challenges faced in implementing the solution provided by Rockwell. It might be helpful to seek advice from others who have encountered and resolved this issue before.</p>
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
