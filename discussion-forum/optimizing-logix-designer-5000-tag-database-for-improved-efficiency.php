
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on a program that will serve as a component of a larger plant control system for a hydroelectric power station. This program has been successfully implemented at several other stations. However, the contractor is using the plant control program from a previous facility">
    <meta name="keywords" content="logix designer, logix designer 5000, tag database optimization, efficiency improvement, plant control system, hydroelectric power station, program implementation, tag clutter, base tags, tag aliases, unused tags, tag database cleanup, logix">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-logix-designer-5000-tag-database-for-improved-efficiency">
    <title>Optimizing Logix Designer/5000 Tag Database for Improved Efficiency | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing Logix Designer/5000 Tag Database for Improved Efficiency | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on a program that will serve as a component of a larger plant control system for a hydroelectric power station. This program has been successfully implemented at several other stations. However, the contractor is using the plant control program from a previous facility">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-logix-designer-5000-tag-database-for-improved-efficiency">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing Logix Designer/5000 Tag Database for Improved Efficiency | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on a program that will serve as a component of a larger plant control system for a hydroelectric power station. This program has been successfully implemented at several other stations. However, the contractor is using the plant control program from a previous facility">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-logix-designer-5000-tag-database-for-improved-efficiency"
      },
      "headline": "Optimizing Logix Designer/5000 Tag Database for Improved Efficiency",
      "description": "Hello everyone, I am currently working on a program that will serve as a component of a larger plant control system for a hydroelectric power station. This program has been successfully implemented at several other stations. However, the contractor is using the plant control program from a previous facility",
      "author": {
        "@type": "Person",
        "name": "mylespetro"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-21",
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
                <h1 class="text-white">Optimizing Logix Designer/5000 Tag Database for Improved Efficiency</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mylespetro</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>17 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5030</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">164</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on a program that will serve as a component of a larger plant control system for a hydroelectric power station. This program has been successfully implemented at several other stations. However, the contractor is using the plant control program from a previous facility as a template for building their program.

To create our program, we essentially transferred our existing routines from the previous station's program to the contractor's system and imported our tags from there. As a result, we have encountered a significant amount of unnecessary clutter and instances where the same base tag is listed under two different aliases. While this may not impact operational efficiency since the contractor is primarily utilizing their own tags, the bloated tag database is causing unnecessary complexity.

My main query is whether there is a method to identify and remove any unused tags within the program. This will help streamline the tag database and make it more efficient. If anyone has insights or recommendations on this, it would be greatly appreciated.

For clarification, the Logix Designer being utilized is V24.00.00 (CPR 9 SR 7.1). Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Within your Controller & Program Tags, there is a dropdown filter available. By selecting the option for "Unused Tags," you will be able to view a list of tags that have not been utilized in the program. This feature allows you to easily identify and manage tags that are not being used.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Keystone</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Wow, that was a simple fix. It looks like I overlooked the filter/search options. Thanks once again for pointing it out!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mylespetro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to note that even if those tags are being utilized by an HMI, they will still appear as unused. This is something to watch out for and be cautious about.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>keshik</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to remember that unused tags may still appear if they are being utilized by an HMI system. It's crucial to proceed with caution when dealing with this issue. The HMI is not set up yet, and another contractor suggested removing unused bits from the database. This information is valuable to keep in mind. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mylespetro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's crucial to have a backup plan in place at all times. You never know what threats may be hiding in the shadows, ready to strike at any moment. Take proactive steps to safeguard your digital files and information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Daba emphasizes the importance of backing up your work to prevent any unforeseen issues lurking in the shadows. It's always wise to save your original files and create duplicates as separate backups. Recently, I had a scare when Logix froze my computer, causing me to restart. Thankfully, I had saved my work, but it reminded me of the importance of being diligent in saving and creating backups to avoid any potential data loss. Always stay prepared by making sure you have multiple copies of your files securely stored.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mylespetro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Mylespetro! Please be sure to check your "private messages folder" for any important updates. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLC Pie Guy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When utilizing tags in HMI systems, it is essential to keep in mind that they may still appear as unused even when being used. This is something to handle with caution. I typically opt for dedicated HMI tags that mirror the program's tag values in an interface subroutine, such as "HMI_TagName". This makes it easier to identify and refrain from deleting them.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeremyM mentioned that he typically utilizes dedicated HMI tags that are consistently refreshed with the related tag values within an interface subroutine. These tags, labeled as "HMI_TagName," serve as a clear indicator to avoid accidental deletion. It's a valuable practice to adopt. While the other contractor is currently managing the HMI system, we are considering taking on this task in-house. Appreciate the advice!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mylespetro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When attempting to delete a tag that is being used by a Human-Machine Interface (HMI), an error message will be generated and the tag will not be removed. This applies even if the tag is not currently in use, such as when it is attached to a button on the HMI that has not been pressed yet. This functionality is observed with a PanelView Plus HMI and is dependent on the HMI being online and connected to the Programmable Logic Controller (PLC). It is advisable to create a backup before making any changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF noted that when a Human-Machine Interface (HMI) is utilizing a tag and an attempt to delete it is made, an error message will appear, and the tag will remain in the system. Even if a tag is not currently in use, such as when attached to a button on the HMI that has not been pressed yet, the HMI retains the tag, making it impossible to delete. This functionality is observed in a PanelView Plus, as long as the HMI is online and connected to the Programmable Logic Controller (PLC) during the deletion process. It is advisable to always create a backup before deleting any tags online.

It is important to recognize that many HMI communication drivers store their "connections" to PLC tags, leading to the tag database registering them as "connected". However, other systems like SQL servers and Data Historians may not retain these connections, allowing for the deletion of tags that may be used in the future. To address this, it is recommended to follow a tag-naming convention that includes the connection scope, particularly for external connections. For example, using prefixes like "hmi_" for HMI-accessed tags and "sql_" for SQL-accessed tags can help differentiate them and prevent accidental deletion.

Another method to manage this issue is to set all tags initially as "External Access - None" and then selectively grant access to specific systems like HMI or SQL. In the database's "Edit" view, users can easily group and identify all their "external" tags by sorting them based on the "External Access" column. This approach helps in maintaining the integrity of the tag database and avoiding inadvertent deletions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>daba</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When managing PLC tags online, it's advisable to delete them to avoid any issues. Many HMI communication drivers maintain a cache of their connections to PLC tags, marking them as "connected" in the tag database. However, it's important to note that other equipment like SQL servers or Data Historians may not hold their connections, allowing for the deletion of tags that may be utilized in the future. To prevent accidental deletions, it is recommended to follow a tag-naming convention that includes the connection scope, such as using prefixes like "hmi_" for HMI-accessed tags and "sql_" for SQL-accessed tags. By organizing tags by their access type in the database's "Edit" view, it becomes easier to differentiate between external and internal tags.

It's worth mentioning that the HMI setup is yet to be integrated as it is part of offsite programming. During system commissioning, another contractor will be responsible for configuring the HMI. Additionally, the contractor has retained an earlier version of the system with extra tags as a backup in case any tags were accidentally deleted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mylespetro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Keystone noted that in Studio 5000 "MINI," there seems to be a missing drop-down filter option in the Controller & Program Tags section. Specifically, the filter for selecting Unused Tags to display all tags not used in the program is not available. How can this feature be added to Studio 5000 "MINI"?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jim ruf</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jim Ruf pointed out that the "MINI" feature seems to be unavailable in Studio 5000. How can this be addressed? If it is truly missing, the only solution may involve upgrading the software.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to remember that if tags are being utilized by an HMI, they may still appear as unused. This is something to be cautious about, as mentioned by the original poster. Additionally, these tags may also be read in a message from another PLC. However, since this is all part of site commissioning, it should not pose a significant issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vadoola</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unused tags with a purpose are always placed in a NOP ladder by me. During commissioning, it is important to have no AFIs, forces, short circuits, duplicate destructive elements, uncalled routines, minor faults, or unused tags. It is crucial to ensure that the controller has 0 warnings and 0 errors for optimal performance. It is disheartening to come across code with 1200 warnings and numerous minor faults due to division by zero errors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While working on a v24 L71, I encountered an anomaly with some tags that I was unable to delete. Despite attempting to remove these unused tags, I received a message indicating they were still in use or being accessed externally, even though no HMI had ever interacted with them. To troubleshoot, I disconnected the PLC from all networks and rebooted both the PLC and my PC with my PV+ VM powered down. However, these tags still could not be deleted or renamed while online, even after turning off external access. The common factor among these tags was that they were aliased, yet not all aliased tags were locked. This issue did not extend to the base tags they were aliased to, as I could freely edit or delete them. Ultimately, I had to wait until I could perform a download to resolve the issue. Additionally, a previous project that required a servo controlled by a Compact Logix PLC faced challenges due to long lead times for Kinetix equipment, resulting in the use of Mitsubishi J4s instead. However, the AOIs in the Mitsubishi J4s contained duplicate destructive bits, leading to a compiler warning list filled with redundant notifications. While I have yet to address this issue, I am hesitant to disable the warning system altogether.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I identify and remove unused tags in my Logix Designer program to improve efficiency?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can identify and remove unused tags by examining the tag database in your Logix Designer program. Look for tags that are not associated with any logic or operation in the program and consider deleting them to streamline the database.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the potential consequences of having a bloated tag database in Logix Designer?</h4>
<p class='text-muted'><strong>Answer:</strong> - A bloated tag database can lead to unnecessary complexity, confusion, and difficulties in managing the program. It may also impact readability, maintenance, and troubleshooting efforts in the long run.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it common to encounter instances where the same base tag is listed under different aliases in Logix Designer programs?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is not uncommon to encounter instances where the same base tag is listed under multiple aliases in Logix Designer programs, especially when importing tags from different sources or templates. However, such redundancy can contribute to clutter and inefficiency in the tag database.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What version of Logix Designer is being used in this scenario?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Logix Designer version being utilized in this scenario is V24.00.00 (CPR 9 SR 7.1). It's important to note the specific version as different versions may have varying features and tools for optimizing the tag database.</p>
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
