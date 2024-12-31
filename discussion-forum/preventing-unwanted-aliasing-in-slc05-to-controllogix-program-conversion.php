
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my effort to migrate an SLC program to ControlLogix, I am utilizing the saveas-.acd command while also disabling the aliasing option. However, I have encountered a significant challenge during the conversion process. Many tags are being mistakenly converted into aliases. While N7:1 is properly translated to N7[1], N7:21">
    <meta name="keywords" content="preventing unwanted aliasing, slc05 to controllogix conversion, saveas command, aliasing option, tag conversion, slc program migration, controllogix program, tag aliasing, unalias tags, n7:1 to n">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/preventing-unwanted-aliasing-in-slc05-to-controllogix-program-conversion">
    <title>Preventing Unwanted Aliasing in SLC05 to ControlLogix Program Conversion | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Preventing Unwanted Aliasing in SLC05 to ControlLogix Program Conversion | Oxmaint Community">
    <meta property="og:description" content="In my effort to migrate an SLC program to ControlLogix, I am utilizing the saveas-.acd command while also disabling the aliasing option. However, I have encountered a significant challenge during the conversion process. Many tags are being mistakenly converted into aliases. While N7:1 is properly translated to N7[1], N7:21">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/preventing-unwanted-aliasing-in-slc05-to-controllogix-program-conversion">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Preventing Unwanted Aliasing in SLC05 to ControlLogix Program Conversion | Oxmaint Community">
    <meta name="twitter:description" content="In my effort to migrate an SLC program to ControlLogix, I am utilizing the saveas-.acd command while also disabling the aliasing option. However, I have encountered a significant challenge during the conversion process. Many tags are being mistakenly converted into aliases. While N7:1 is properly translated to N7[1], N7:21">
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
        "@id": "https://community.oxmaint.com/discussion-forum/preventing-unwanted-aliasing-in-slc05-to-controllogix-program-conversion"
      },
      "headline": "Preventing Unwanted Aliasing in SLC05 to ControlLogix Program Conversion",
      "description": "In my effort to migrate an SLC program to ControlLogix, I am utilizing the saveas-.acd command while also disabling the aliasing option. However, I have encountered a significant challenge during the conversion process. Many tags are being mistakenly converted into aliases. While N7:1 is properly translated to N7[1], N7:21",
      "author": {
        "@type": "Person",
        "name": "RetiQlum2"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-10",
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
                <h1 class="text-white">Preventing Unwanted Aliasing in SLC05 to ControlLogix Program Conversion</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RetiQlum2</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">322</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">431</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my effort to migrate an SLC program to ControlLogix, I am utilizing the saveas->.acd command while also disabling the aliasing option. However, I have encountered a significant challenge during the conversion process. Many tags are being mistakenly converted into aliases. While N7:1 is properly translated to N7[1], N7:21 is transformed into N7_21 and then aliased to N7[21]. I am in need of a solution to prevent this unwanted aliasing behavior or to efficiently unalias them collectively, if feasible.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I had to go through this process a few times. I used to perform the AB conversion like you did, then export to L5K. I had an excel spreadsheet with both old N7 tags and new tags, which were converted from the comments on the N7s, displayed on one screen. I meticulously went through the process of finding and replacing the L5K in notepad++.

Even though this was done a while ago, the reason I preferred editing the L5K file was that upon re-importing, the tags were no longer aliased tags, making the tag creation and tag value conversion much cleaner, as opposed to just the rung content. In general, I have a strong preference for the export/import method.

Interestingly, none of the highly experienced engineers I collaborated with at the time were aware of a truly seamless way to convert programs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>KenWiegers</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>No offense, but as an integrator, and especially as a customer, I would strongly dislike any conversion resulting in B, N, and T arrays. The conversion tool provided for migration by AB was severely lacking. I refuse to use it. I prefer to rewrite the code with proper user-defined types (UDTs) and organized tags to avoid creating a program that is hard to maintain and troubleshoot. While it may seem like a simple customer request, sometimes it is necessary to guide them towards a better solution, preventing potential issues down the road.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee expressed concerns about the use of conversion utilities that result in arrays like B, N, and T arrays. He believes that rewriting code using proper UDTs and organizing tags is a better approach than creating a difficult-to-maintain program. While it may initially seem like a customer-driven request, it is essential to guide customers to avoid potential pitfalls in the long run.

Robertmee also highlighted the need to properly convert the program to facilitate batch tag name changes, which is the first step in the process. Additionally, he mentioned the challenges posed by the original programmer's heavy use of indirection and indirect referencing of filenames. It is crucial to address these issues as the customer seeking these modifications is Robertmee himself.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RetiQlum2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>My most recent major migration involved transitioning from PLC5 to ControlLogix. During this process, I encountered numerous outdated remnants from previous migrations, such as from PLC2 to PLC5. To ensure a smooth transition, I meticulously transcribed the code with more detailed subdivisions than before. This meticulous approach proved to be successful. I have come across programs in the past that were difficult to troubleshoot due to the use of N7[x] arrays. I commend your decision to treat the migration tool as a preliminary step that requires cleanup before deployment. Your future self, as well as your customers, will appreciate the effort.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's evident that not all aliases were created, as only some were set up. Unlike SLC and PLC5, CLogix lacks the ability to handle certain indirect addressing methods. For instance, the syntax N100[N7[21]] is incompatible with CLogix. However, using N100[N7_21] is approved, and as long as N7_21 is linked to N7[21] as an alias, any logic related to N7[21] within an array will still function. The conversion process must be comprehensive and address all scenarios. In CLogix, it's not possible to jump between different parent arrays using indirect addressing, necessitating additional code. For example, #N[N7:22]:0 doesn't have a direct equivalent in CLogix, so a PCE instruction will be substituted with a comment during the conversion process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gmferg</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Avoid using the conversion tool as it may not be as efficient or precise. Instead, opt to manually convert the program for faster and cleaner results. In my experience, creating Excel tools to facilitate the conversion process has been helpful. You can export the rungs to XML and utilize Excel VBA to generate new XML files for importing into ControlLogix. However, for smaller programs, rewriting the ladder manually is just as simple. Once the initial conversion is done, go back and tidy up by organizing elements into function blocks. This approach ensures a smoother and more accurate conversion process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee pointed out the importance of addressing resistance to change in customer-driven requests. It is crucial to help customers see the benefits they will receive by embracing new technology and advancements in control systems. Despite facing opposition from traditionalists who are reluctant to let go of outdated PLCs, it is essential to modernize and streamline processes.

I once encountered challenges when transitioning a program from a PLC5 to an S7-1500 due to resistance from individuals who were attached to the old system. Despite encountering dead code and unnecessary complexities in the process, the project ultimately proved successful in enhancing operations. However, the reluctance to embrace change ultimately led to my decision to resign and seek new opportunities.

While some SLC and PLC5 programs may be well-written, it is vital to constantly update and modernize systems to improve efficiency and functionality. By organizing routines into programs and utilizing advanced functions like AOIs, navigation and troubleshooting can become more streamlined and user-friendly. Overall, embracing change and innovation is essential in the ever-evolving field of control systems and automation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>gmferg explained that not all aliases were created, as SLC and PLC5 could handle indirect addressing differently from CLogix. In CLogix, syntax like N100[N7[21]] will not work, but N100[N7_21] is acceptable. As long as N7_21 is aliased to N7[21], logic operating on N7[21] as part of an array will still function. However, indirect addressing jumping between different parent arrays is not possible in CLogix and requires more code. For example, #N[N7:22]:0 does not have a direct translation in CLogix, so a PCE instruction will be put there with a comment. Overall, a comprehensive conversion is necessary to ensure all aspects are covered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RetiQlum2</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I prevent unwanted aliasing when converting an SLC program to ControlLogix using the saveas->.acd command?</h4>
<p class='text-muted'><strong>Answer:</strong> - To prevent unwanted aliasing during the conversion process, ensure that the aliasing option is disabled. This can help avoid tags being mistakenly converted into aliases.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What can cause tags to be mistakenly converted into aliases during the migration from SLC to ControlLogix?</h4>
<p class='text-muted'><strong>Answer:</strong> - One common reason for tags being mistakenly converted into aliases is the presence of colons in the tag names. For example, N7:21 may be transformed into N7_21 and then aliased to N7[21].</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a way to efficiently unalias tags collectively after the conversion process?</h4>
<p class='text-muted'><strong>Answer:</strong> - Unfortunately, there may not be a direct method to unalias tags collectively after the conversion process. However, you may need to manually review and adjust the affected tags to correct any unwanted aliasing behavior.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific best practices or tips to follow to avoid aliasing issues when migrating programs between SLC and ControlLogix platforms?</h4>
<p class='text-muted'><strong>Answer:</strong> - When migrating programs between SLC and ControlLogix platforms, it is recommended to avoid using special characters like colons in tag names to reduce the chances of aliasing issues. Additionally, double-checking the conversion settings and ensuring the aliasing option is disabled can help prevent unwanted aliasing behavior.</p>
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
