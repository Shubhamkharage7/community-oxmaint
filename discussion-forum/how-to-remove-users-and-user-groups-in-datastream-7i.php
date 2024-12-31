
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As a beginner to Datastream 7i, I am currently in the midst of integrating the system into our companys operations. While working in the testing database, I created several users and user groups that I now wish to remove. However, I encountered an error message stating, This record cannot">
    <meta name="keywords" content="datastream 7i, remove users, remove user groups, datastream 7i integration, testing database, error message, datastream user management, datastream 7i beginners, datastream user groups, datastream record deletion, datastream">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-remove-users-and-user-groups-in-datastream-7i">
    <title>How to Remove Users and User Groups in Datastream 7i | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Remove Users and User Groups in Datastream 7i | Oxmaint Community">
    <meta property="og:description" content="As a beginner to Datastream 7i, I am currently in the midst of integrating the system into our companys operations. While working in the testing database, I created several users and user groups that I now wish to remove. However, I encountered an error message stating, This record cannot">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-remove-users-and-user-groups-in-datastream-7i">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Remove Users and User Groups in Datastream 7i | Oxmaint Community">
    <meta name="twitter:description" content="As a beginner to Datastream 7i, I am currently in the midst of integrating the system into our companys operations. While working in the testing database, I created several users and user groups that I now wish to remove. However, I encountered an error message stating, This record cannot">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-remove-users-and-user-groups-in-datastream-7i"
      },
      "headline": "How to Remove Users and User Groups in Datastream 7i",
      "description": "As a beginner to Datastream 7i, I am currently in the midst of integrating the system into our companys operations. While working in the testing database, I created several users and user groups that I now wish to remove. However, I encountered an error message stating, This record cannot",
      "author": {
        "@type": "Person",
        "name": "greg garcia"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-28",
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
                <h1 class="text-white">How to Remove Users and User Groups in Datastream 7i</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>greg garcia</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4964</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">313</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>As a beginner to Datastream 7i, I am currently in the midst of integrating the system into our company's operations. While working in the testing database, I created several users and user groups that I now wish to remove. However, I encountered an error message stating, "This record cannot be deleted because it is linked to another record within the system."</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello mech29, the error message you received indicates that there are transactions linked to the user in question. In order to delete the user, all records associated with them must also be removed. To address this issue, you can choose to "disable" the user account instead.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Diana Spencer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for responding. In order to delete a user, will disabling them first be necessary? If not, how can I go about removing all records associated with that user's account? mech29</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lila Long</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello mech29, I don't believe that simply disabling a user account is the best solution. While disabling the account prevents the user from logging in, there may still be lingering records associated with the account. Deleting the user could result in inconsistent data within the database. It's unclear if DSTM 7i offers an archiving tool that safely removes user data without causing any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vince Myers</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To remove a user from an employee's record in WORK EMPLOYEES, first delete the USERID associated with the EMPLOYEE. After ensuring that no requisitions or work orders have been processed under this userid, you can proceed to delete the USER record.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rachel White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mech29 reported encountering error messages when attempting to delete users, suggesting that the accounts in question may have been active. This complicates matters and adds a layer of difficulty to the situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nathan Scott</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>At a certain juncture, it is inevitable to have inactive records within your system. It appears that some of these records are bound to be obsolete. Simply deactivate the users or indicate that the employees are no longer in service and proceed. If no one can access the system using the outdated user IDs, and employees are still visible in the List of Values (LOVs), then there is no need to worry. It is not always necessary to attempt to delete everything.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Yvonne Mitchell</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If a user is linked to any record in 7i, they cannot be deleted, even if they were used for a work order or are associated with a craft/trade that has a history record. If you have Audit setup and there is a history record, the user cannot be removed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tiffany Gray</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I remove users and user groups in Datastream 7i?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To remove users and user groups in Datastream 7i, you can follow these steps: [provide steps or guidelines on how to delete users and user groups].</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why am I getting the error message "This record cannot be deleted because it is linked to another record within the system" when trying to remove users or user groups in Datastream 7i?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error message indicates that the user or user group you are trying to delete is linked to another record within the system, which is preventing its deletion. You may need to first unlink or remove the dependencies before deleting the user or user group.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What should I do if I want to delete a user or user group in Datastream 7i but it is linked to other records?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you intend to delete a user or user group that is linked to other records, you will need to identify and remove those dependencies first before attempting to delete the user or user group. This may involve reviewing and modifying relationships within the system to ensure a successful deletion.</p>
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
