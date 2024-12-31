
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have a Wonderware standalone HMI that is gathering process data from our production line and storing it in a MySQL database. Initially, I experimented with MS Access. The issue arises when using two different insert options. When utilizing the SQLInsert function, everything functions smoothly without errors. However, when">
    <meta name="keywords" content="wonderware intouch, sql insert errors, troubleshooting, hmi, mysql database, sqlinsert function, sqlinsertprepare, sqlinsertexecute, insert errors, item cannot be found, ordinal error, script errors, quad_connection, str">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-intouch-sql-insert-errors">
    <title>Troubleshooting Wonderware Intouch SQL Insert Errors | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Wonderware Intouch SQL Insert Errors | Oxmaint Community">
    <meta property="og:description" content="I have a Wonderware standalone HMI that is gathering process data from our production line and storing it in a MySQL database. Initially, I experimented with MS Access. The issue arises when using two different insert options. When utilizing the SQLInsert function, everything functions smoothly without errors. However, when">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-intouch-sql-insert-errors">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Wonderware Intouch SQL Insert Errors | Oxmaint Community">
    <meta name="twitter:description" content="I have a Wonderware standalone HMI that is gathering process data from our production line and storing it in a MySQL database. Initially, I experimented with MS Access. The issue arises when using two different insert options. When utilizing the SQLInsert function, everything functions smoothly without errors. However, when">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-intouch-sql-insert-errors"
      },
      "headline": "Troubleshooting Wonderware Intouch SQL Insert Errors",
      "description": "I have a Wonderware standalone HMI that is gathering process data from our production line and storing it in a MySQL database. Initially, I experimented with MS Access. The issue arises when using two different insert options. When utilizing the SQLInsert function, everything functions smoothly without errors. However, when",
      "author": {
        "@type": "Person",
        "name": "tgulch"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-23",
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
                <h1 class="text-white">Troubleshooting Wonderware Intouch SQL Insert Errors</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tgulch</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2928</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">356</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have a Wonderware standalone HMI that is gathering process data from our production line and storing it in a MySQL database. Initially, I experimented with MS Access. The issue arises when using two different insert options. When utilizing the SQLInsert function, everything functions smoothly without errors. However, when employing the SQLInsertPrepare and SQLInsertExecute functions, I encounter an "item cannot be found in the requested ordinal" error. The script for a successful insert without any hitches includes:

ResultCodePreparL1O = SQLInsert(Quad_Connection, "STR1_Overview_Report", "STR1_Overview");
ResultCodePreparL1B = SQLInsert(Quad_Connection, "STR1_Bronx_Report", "STR1_Bronx");
ResultCodePreparL1N = SQLInsert(Quad_Connection, "STR1_NDT_Report", "STR1_NDT");

On the other hand, the script causing errors during insert preparation and execution is as follows:

ResultCodePreparL1O = SQLInsertPrepare(Quad_Connection, "STR1_Overview_Report", "STR1_Overview", STR1_OV_State);
ResultCodeInsertL1O = SQLInsertExecute(Quad_Connection, "STR1_Overview", STR1_OV_State);
ResultCodeEndL1O = SQLInsertEnd(Quad_Connection, STR1_OV_State);

Despite using different scripts, the errors are consistent in both MySQL and Access databases. Presumably, the issue lies in the table name and bindlist. I find it perplexing how the straight insert command works smoothly while the execute command presents an error. Additionally, the prepare and end commands do not generate any errors; it is specifically the InsertExecute command that triggers the error.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello tgulch, I am encountering a similar problem with Intouch 2023 R2 on Windows Server 2022 using SQL Express. While SQLInsert is functioning correctly and inserting data into the table without any issues, SQLSelect and SQLUpdate are not working properly. Have you been able to find a solution to this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>slashgnr6971</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the "item cannot be found in the requested ordinal" error when using SQLInsertPrepare and SQLInsertExecute functions in Wonderware Intouch?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue could be related to the table name and bindlist used in the SQLInsertPrepare and SQLInsertExecute functions. Double-check the table name and bindlist parameters to ensure they are correctly specified.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why does the SQLInsert function work without errors while SQLInsertPrepare and SQLInsertExecute functions encounter issues in Wonderware Intouch?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancy in error occurrence between SQLInsert and SQLInsertPrepare/SQLInsertExecute functions could be due to how the insert commands handle table name and bindlist parameters. Review the implementation of these functions to identify any discrepancies causing the error.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any specific considerations when working with MySQL and MS Access databases in Wonderware Intouch for SQL insert operations?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When dealing with SQL insert operations in Wonderware Intouch with MySQL or MS Access databases, ensure consistency in table names, bindlist parameters, and command syntax across different functions to avoid errors like the "item cannot be found in the requested ordinal" issue.</p>
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
