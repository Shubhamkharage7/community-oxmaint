
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="During the transition from RSView32 to FactoryTalk View SE, I encountered a challenge with the VB code embedded in the project. While transferring the code, I encountered an error that I couldnt resolve through online resources. Here is the excerpt of the code in question: Public Sub display_alan() Dim">
    <meta name="keywords" content="retrieve tag values, factorytalk view se, vba, rsview32 transition, vb code, error resolution, online resources, code excerpt, tag values, string variable, temporary storage locations, error message, compile error, variable not defined, g">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-retrieve-tag-values-in-factorytalk-view-se-with-vba">
    <title>How to Retrieve Tag Values in FactoryTalk View SE with VBA | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Retrieve Tag Values in FactoryTalk View SE with VBA | Oxmaint Community">
    <meta property="og:description" content="During the transition from RSView32 to FactoryTalk View SE, I encountered a challenge with the VB code embedded in the project. While transferring the code, I encountered an error that I couldnt resolve through online resources. Here is the excerpt of the code in question: Public Sub display_alan() Dim">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-retrieve-tag-values-in-factorytalk-view-se-with-vba">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Retrieve Tag Values in FactoryTalk View SE with VBA | Oxmaint Community">
    <meta name="twitter:description" content="During the transition from RSView32 to FactoryTalk View SE, I encountered a challenge with the VB code embedded in the project. While transferring the code, I encountered an error that I couldnt resolve through online resources. Here is the excerpt of the code in question: Public Sub display_alan() Dim">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-retrieve-tag-values-in-factorytalk-view-se-with-vba"
      },
      "headline": "How to Retrieve Tag Values in FactoryTalk View SE with VBA",
      "description": "During the transition from RSView32 to FactoryTalk View SE, I encountered a challenge with the VB code embedded in the project. While transferring the code, I encountered an error that I couldnt resolve through online resources. Here is the excerpt of the code in question: Public Sub display_alan() Dim",
      "author": {
        "@type": "Person",
        "name": "FactoryTalktotheHand"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-14",
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
                <h1 class="text-white">How to Retrieve Tag Values in FactoryTalk View SE with VBA</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>FactoryTalktotheHand</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4031</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">189</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>During the transition from RSView32 to FactoryTalk View SE, I encountered a challenge with the VB code embedded in the project. While transferring the code, I encountered an error that I couldn't resolve through online resources. Here is the excerpt of the code in question:

Public Sub display_alan()
Dim calculator_name As String

'Assign the tag calculator\Name to the string variable calculator_name'
calculator_name = gTagdb.GetTag("calculator\Name").Value

'Utilize the string variable in the subsequent gettag equations to define the values for the calculator's temporary storage locations'

On Error Resume Next
'SET CAL DISPLAY MIN VALUE
gTagdb.GetTag("calculator\minvalue") = gTagdb.GetTag(calculator_name).MinimumValue
On Error Resume Next
'SET CAL DISPLAY MAX VALUE
gTagdb.GetTag("calculator\maxvalue") = gTagdb.GetTag(calculator_name).MaximumValue
On Error Resume Next
'SET CALC DISPLAY CURRENT VALUE
gTagdb.GetTag("calculator\valuetag") = gTagdb.GetTag(calculator_name).Value
On Error Resume Next
'SET CALC DISPLAY DATA ENTRY VALUE
gTagdb.GetTag("calculator\valuetag2") = gTagdb.GetTag(calculator_name).Value
On Error Resume Next
gCommand.Execute "display calc2"
On Error Resume Next
End Sub

Upon attempting to run the code, an error message displays: "Compile Error: Variable not defined," specifically highlighting the "gTagdb" section. I suspect that "gTagdb" may not be the appropriate command for retrieving tag values into VB variables in FactoryTalk View SE, unlike in RSView32. Thus, I am curious about the equivalent of "gTagdb" in the context of FactoryTalk View SE.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider establishing a tag group to better organize your content for improved search engine optimization and user experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jkerekes</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering organization in your HMI Tag database, it's beneficial to explore the concept of creating a taggroup. This feature may seem straightforward as it's essentially a grouping of tags, but its integration with folders in the database may be unclear. Is a taggroup synonymous with a folder, or does it serve a distinct purpose? As you navigate through this upgrade from RSView32, you may notice certain features have been eliminated and procedures have become more complex, leaving you feeling frustrated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>FactoryTalktotheHand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Before getting started, be sure to consult the help files for guidance. Begin by creating a tag group and then adding either HMI or direct tags to the group. It's important to note the various distinctions between SE and View32, particularly when it comes to VBA functionality. In View32, VBA runs on the server, whereas in SE, it operates on the client side. This difference has significant implications worth exploring.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jkerekes</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello! Instead of using gTagdb.gettag, you can utilize TagDB.GetTag("TagName") for better performance. If you require further assistance, feel free to reach out to me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Wahdan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Wahdan recommends using TagDB.GetTag("TagName") instead of gTagdb.gettag for better functionality. If you require further assistance, feel free to reach out. Unfortunately, despite 7 years of effort, he was ultimately let go due to inability to resolve the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Sharing solutions to problems can be incredibly helpful for others facing similar issues. By posting your solutions publicly, you can assist others in finding answers to their own problems. This sharing of solutions can make searching for resolutions much easier and more effective.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for overlooking the fact that this post was published seven years ago.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Wahdan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Wahdan expressed apologetic remorse for overlooking the fact that the post was published 7 years ago. "No worries," he added in a jesting tone. Despite the age of the post, the provided solution remains valuable and will assist individuals seeking answers in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1.  What is the equivalent of "gTagdb" in FactoryTalk View SE for retrieving tag values into VB variables?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In FactoryTalk View SE, the equivalent to "gTagdb" for retrieving tag values into VB variables is typically "ApplicationMgr.TagName". This command allows you to access tag values within your VBA code.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  I encountered a "Compile Error: Variable not defined" message while running VBA code in FactoryTalk View SE. How can I resolve this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error message indicates that the variable "gTagdb" is not defined in the context of FactoryTalk View SE. To fix this issue, ensure you are using the correct command for accessing tag values, such as "ApplicationMgr.TagName", and declare the necessary variables at the beginning of your VBA script.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps should I take when transferring VBA code from RSView32 to FactoryTalk View SE to ensure compatibility?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When transitioning VBA code from RSView32 to FactoryTalk View SE, review and update your code to align with the specific commands and syntax used in FactoryTalk View SE. Pay attention to differences in how tag values are accessed and manipulated in each system to prevent errors during code execution.</p>
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
