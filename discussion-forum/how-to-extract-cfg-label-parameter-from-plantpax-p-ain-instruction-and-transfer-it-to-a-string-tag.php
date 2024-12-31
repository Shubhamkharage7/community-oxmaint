
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Is there a method to extract the Cfg_Label (string) parameter from this instruction and transfer it to a string tag? For example, if the P_AIN tag is configured with label, tag, and description all as string tags in the parameters, is it feasible to replicate that information for use">
    <meta name="keywords" content="extract cfg_label, plantpax p_ain instruction, transfer string tag, p_ain tag, controller-scoped tag, hmi accessibility, aoi parameters, pit_1201, replicate information, string tags, string parameter">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-extract-cfg-label-parameter-from-plantpax-p-ain-instruction-and-transfer-it-to-a-string-tag">
    <title>How to Extract Cfg_Label Parameter from PlantPax P_Ain Instruction and Transfer it to a String Tag | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Extract Cfg_Label Parameter from PlantPax P_Ain Instruction and Transfer it to a String Tag | Oxmaint Community">
    <meta property="og:description" content="Is there a method to extract the Cfg_Label (string) parameter from this instruction and transfer it to a string tag? For example, if the P_AIN tag is configured with label, tag, and description all as string tags in the parameters, is it feasible to replicate that information for use">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-extract-cfg-label-parameter-from-plantpax-p-ain-instruction-and-transfer-it-to-a-string-tag">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Extract Cfg_Label Parameter from PlantPax P_Ain Instruction and Transfer it to a String Tag | Oxmaint Community">
    <meta name="twitter:description" content="Is there a method to extract the Cfg_Label (string) parameter from this instruction and transfer it to a string tag? For example, if the P_AIN tag is configured with label, tag, and description all as string tags in the parameters, is it feasible to replicate that information for use">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-extract-cfg-label-parameter-from-plantpax-p-ain-instruction-and-transfer-it-to-a-string-tag"
      },
      "headline": "How to Extract Cfg_Label Parameter from PlantPax P_Ain Instruction and Transfer it to a String Tag",
      "description": "Is there a method to extract the Cfg_Label (string) parameter from this instruction and transfer it to a string tag? For example, if the P_AIN tag is configured with label, tag, and description all as string tags in the parameters, is it feasible to replicate that information for use",
      "author": {
        "@type": "Person",
        "name": "JPM_121923"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-27",
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
                <h1 class="text-white">How to Extract Cfg_Label Parameter from PlantPax P_Ain Instruction and Transfer it to a String Tag</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JPM_121923</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">632</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">451</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Is there a method to extract the Cfg_Label (string) parameter from this instruction and transfer it to a string tag? For example, if the P_AIN tag is configured with label, tag, and description all as string tags in the parameters, is it feasible to replicate that information for use in another controller-scoped (string) tag? While the HMI can access it in the associated Object, the parameters of the AOI (such as PIT_1201) do not provide accessibility when drilled down.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Cfg_Label variable is set to Public access, allowing the SCADA system to access it, but not the PLC. By converting it to an input parameter, you can make it usable within the PLC. However, this change may cause compatibility issues if someone uses a downloaded version of the AOI rather than your modified one. What is the specific reason for making this adjustment?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JPM_121923 queried about extracting the Cfg_Label (string) parameter from a certain instruction and transferring it to a string tag. For example, is it possible to duplicate the configuration from the P_AIN tag, which includes label, tag, and description set as string tags, for use in a different controller-scoped string tag? Although the HMI can access it in the associated Object, the parameters might not be accessible when navigating through the .parameters of the AOI, such as PIT_1201.

One way to achieve this is by sending a CIP data table read message from the controller to itself. Additionally, you can copy the AOI to a "raw" UDT with the same size as the AOI and extract the information from there. If you need to make changes to the AOI, you can create a new parameter that links to the .LEN member of the string and then transfer that parameter to another string.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeremyM mentioned that it is possible to send a CIP data table read message from the controller to itself. Another option is to copy the AOI to a "raw" UDT of similar size and retrieve the information from there. By modifying the AOI, a new parameter can be created to alias the .LEN member of the string, which can then be copied into another string. Can copying the AOI instance to another variable give access to the data fields without calling it? More details on this process are needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User cardosocea asked for clarification on accessing data fields in an AOI instance. By copying the AOI instance to another variable, you can access its data fields without calling it directly. This means that the instances of AOI are structured types that can be accessed without explicitly calling the AOI itself.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In most cases, the Local scoped variables of the AOI in the UDT are not visible.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>cardosocea noted that while Local scoped variables of the AOI in the UDT may not be directly visible, they still exist in memory and can be easily accessed. Visibility is a key aspect of the structured type's metadata, but with the right approach, these variables can be reached efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeremyM highlighted the importance of visibility as a metadata component in structured data. This information is readily available in memory and easily accessible. Would you be willing to share some of your expertise on this topic?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Interested in sharing your expertise on this topic? How can we extract the Cfg_Label parameter from the PlantPax - P_Ain Instruction and transfer it to a string tag? If the P_AIN tag is set up with label, tag, and description as string tags in the parameters, is there a way to extract this information for use elsewhere? Find out more on plctalk.net.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are searching for a more efficient method, consider exploring alternative options. These strings are specifically designed for HMI display and are easily adaptable for international use. By manipulating them in the PLC, you are disrupting this functionality. Explore the PlantPAx Configuration Tool as it may offer a different solution to your objectives. Mastering this tool's learning curve will enable you to manage all Cfg_ strings in every PlantPAx object across controllers through an Excel spreadsheet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface suggested that there may be a more efficient way to achieve your goals. The strings in question are specifically designed for HMI display and can be easily translated for international use. By processing them in the PLC, you risk disrupting this functionality. Furthermore, in version 5, the translation process is handled through tag extended properties and project documentation, which may limit flexibility for future additions. Despite these constraints, this is in line with Rockwell's approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface suggests exploring alternative methods for processing strings on HMI displays to ensure easy internationalization. By considering the PlantPAx Configuration Tool as an option, you may find a better approach to achieving your goals. Overcoming the learning curve of this tool will enable you to conveniently manage Cfg_ strings within PlantPAx objects across controllers using an Excel spreadsheet. Can Logix strings be utilized on an HMI or SCADA system to support full Unicode UTF-8 compatibility?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unicode is not functioning correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface noted that unicode does not function properly. Frustratingly, the method I have been employing involves utilizing a basic PLC ST configuration routine with temporary strings shared between the controller, and then copying them into AOIs using the pointer style mentioned above. The objective was to streamline the process of configuring devices, objects, and Interlock/Permission setups in a centralized manner, complete with naming conventions, without relying on external software tools.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The PlantPAx Config Tool excels at parsing through your .ACD file to effortlessly identify and organize all PlantPAx objects. This tool generates an OPC-enabled Excel spreadsheet that allows for easy reading and writing of Cfg_ values. Regardless of the AOI or tag, the PlantPAx Config Tool can be used by simply setting up the necessary filters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface mentioned that the PlantPAx Config Tool efficiently analyzes the .ACD file to recognize all PlantPAx objects. It generates an OPC enabled Excel spreadsheet for easy reading and writing of Cfg_ values. This tool is compatible with any AOI or tag, simply configure the filters to tailor its functionality.  
Does the use of Linx Gateway or a license necessary for the operation of this tool?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up a spreadsheet, you have the option to choose between RSLinx or FactoryTalk in column F of the setup tab. It's worth noting that the lite version of RSLinx does not support OPC, although it is unclear whether FactoryTalk Linx does. Make sure to verify the compatibility of your chosen software before making a decision.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I extract the Cfg_Label parameter from a PlantPax P_Ain instruction?
- To extract the Cfg_Label parameter from a PlantPax P_Ain instruction, you can use a method to transfer it to a string tag within the controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can I replicate the information from the P_Ain tag configuration to another controller-scoped string tag?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is feasible to replicate the information such as label, tag, and description from the P_Ain tag configuration to another controller-scoped string tag for use in other applications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why is it challenging to access the parameters of the AOI, like PIT_1201, when drilled down?</h4>
<p class='text-muted'><strong>Answer:</strong> - The parameters of the AOI may not provide direct accessibility when drilled down due to limitations in the software or the way the AOI is designed. This can make it difficult to extract specific information like the Cfg_Label parameter.</p>
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
