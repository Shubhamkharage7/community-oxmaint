
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I am currently working on a new network deployment of AssetCentre and I am encountering issues with authenticating using our DOMAIN\USER credentials after a fresh installation. I am able to successfully authenticate using a local account, but our Active Directory accounts do not seem to have access.">
    <meta name="keywords" content="assetcentre, domain authentication, troubleshooting, network deployment, active directory, factorytalk administrative console, windows server, pki card, user credentials, access issues, authentication problems, local account, network installation, credential authentication, user access, pk">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-assetcentre-domain-authentication-problems">
    <title>Troubleshooting AssetCentre Domain Authentication Problems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting AssetCentre Domain Authentication Problems | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I am currently working on a new network deployment of AssetCentre and I am encountering issues with authenticating using our DOMAIN\USER credentials after a fresh installation. I am able to successfully authenticate using a local account, but our Active Directory accounts do not seem to have access.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-assetcentre-domain-authentication-problems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting AssetCentre Domain Authentication Problems | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I am currently working on a new network deployment of AssetCentre and I am encountering issues with authenticating using our DOMAIN\USER credentials after a fresh installation. I am able to successfully authenticate using a local account, but our Active Directory accounts do not seem to have access.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-assetcentre-domain-authentication-problems"
      },
      "headline": "Troubleshooting AssetCentre Domain Authentication Problems",
      "description": "Greetings everyone, I am currently working on a new network deployment of AssetCentre and I am encountering issues with authenticating using our DOMAIN\USER credentials after a fresh installation. I am able to successfully authenticate using a local account, but our Active Directory accounts do not seem to have access.",
      "author": {
        "@type": "Person",
        "name": "Acuity"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-07",
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
                <h1 class="text-white">Troubleshooting AssetCentre Domain Authentication Problems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Acuity</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">533</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">131</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone,

I am currently working on a new network deployment of AssetCentre and I am encountering issues with authenticating using our DOMAIN\USER credentials after a fresh installation. I am able to successfully authenticate using a local account, but our Active Directory accounts do not seem to have access. When accessing the FactoryTalk Administrative Console as a local user and navigating to the File menu, I see the option to log off as DOMAIN\USER, which is the same user I am trying to authenticate as when on the network. It is worth mentioning that I authenticate to the Windows Server using a PKI card. Any assistance or guidance on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Access the FT Admin Console (Network) using a Local Account and check if Domain\User is included in the User List. It is important to note that you must manually add each Domain\User to the User list through the "Windows link User" option. This ensures that all users are properly identified and granted access within the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jmeadows7676</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why am I encountering authentication issues with DOMAIN\USER credentials in AssetCentre after a fresh installation?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is possible that there may be configuration issues related to the integration of AssetCentre with the Active Directory domain. Ensure that the necessary settings for domain authentication are properly configured within AssetCentre.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot issues with authenticating Active Directory accounts in AssetCentre?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can start by verifying the domain settings in AssetCentre to ensure that the correct domain information is entered. Additionally, check the permissions and access rights for the Active Directory users within AssetCentre to ensure they have the necessary privileges.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why can I authenticate using a local account but not with Active Directory accounts in AssetCentre?</h4>
<p class='text-muted'><strong>Answer:</strong> - This could indicate a specific issue with how AssetCentre is handling authentication requests from the Active Directory domain. Review the configuration settings and ensure that the integration with Active Directory is correctly configured to allow for domain authentication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps should I take if I authenticate to the Windows Server using a PKI card and encounter authentication issues in AssetCentre?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are using a PKI card for authentication to the Windows Server, ensure that AssetCentre is properly configured to recognize and accept authentication from PKI card users. Check the settings related to PKI authentication within AssetCentre and make any necessary adjustments for compatibility.</p>
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
