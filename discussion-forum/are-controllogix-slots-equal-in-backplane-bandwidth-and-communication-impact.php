
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have a question about ControlLogix slots - are they all the same? When two cards communicate with each other, does the slot they are in affect the backplane bandwidth? For example, would an ethernet card in the last slot communicating with a controller in slot 0 have a">
    <meta name="keywords" content="controllogix slots, backplane bandwidth, communication impact, ethernet card, controller communication, slot impact, backplane communication, controllogix cards, slot allocation, slot placement, 1756-en4tr, redundant cards, slot requirements">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/are-controllogix-slots-equal-in-backplane-bandwidth-and-communication-impact">
    <title>Are ControlLogix Slots Equal in Backplane Bandwidth and Communication Impact? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Are ControlLogix Slots Equal in Backplane Bandwidth and Communication Impact? | Oxmaint Community">
    <meta property="og:description" content="I have a question about ControlLogix slots - are they all the same? When two cards communicate with each other, does the slot they are in affect the backplane bandwidth? For example, would an ethernet card in the last slot communicating with a controller in slot 0 have a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/are-controllogix-slots-equal-in-backplane-bandwidth-and-communication-impact">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Are ControlLogix Slots Equal in Backplane Bandwidth and Communication Impact? | Oxmaint Community">
    <meta name="twitter:description" content="I have a question about ControlLogix slots - are they all the same? When two cards communicate with each other, does the slot they are in affect the backplane bandwidth? For example, would an ethernet card in the last slot communicating with a controller in slot 0 have a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/are-controllogix-slots-equal-in-backplane-bandwidth-and-communication-impact"
      },
      "headline": "Are ControlLogix Slots Equal in Backplane Bandwidth and Communication Impact?",
      "description": "I have a question about ControlLogix slots - are they all the same? When two cards communicate with each other, does the slot they are in affect the backplane bandwidth? For example, would an ethernet card in the last slot communicating with a controller in slot 0 have a",
      "author": {
        "@type": "Person",
        "name": "tlf30"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Are ControlLogix Slots Equal in Backplane Bandwidth and Communication Impact?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">631</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">487</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have a question about ControlLogix slots - are they all the same? When two cards communicate with each other, does the slot they are in affect the backplane bandwidth? For example, would an ethernet card in the last slot communicating with a controller in slot 0 have a different impact compared to an ethernet card in slot 1 communicating with a controller in slot 0? Additionally, the manual for redundant 1756-EN4TR specifies that the cards should be in slot 0 and 1 - is there a specific reason for this slot requirement? Thank you, Trevor.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The ControlBus backplane in a 1756 chassis is not limited by distance or slot placement, but may be affected by power requirements when using hydraulic control modules or Prosoft MVI's. While it has been a common practice for over 20 years to place communication modules next to the CPU in Slot 0, there is no technical obligation to do so. There is nothing inherently special about Slot 0 and Slot 1 in terms of functionality. The recommendation to use Slot 0 and Slot 1 for 1756-RN4TR modules in Redundant Adapter Pair setups likely stems from convention that evolved into a mandatory rule. This setup may be designed to mimic the "IP plus one" network address allocation for paired -EN4TR modules.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As Ken pointed out, the key requirement for setting up a Redundant Adapter configuration in an IO rack is that modules must be placed in specific slots in order to communicate with each other effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate the feedback from Ken Roach and Contr_Conn, which supports my current belief. I am considering testing various unsupported slot configurations for the redundant Ethernet adapters. While reviewing the Ethernet manual, I came across a screenshot showing the adapters in the same chassis as the processor (although the processor was in slot 2), despite the manual specifying that only IO cards can be in the chassis with a redundant pair of EN4TR cards. It would be ideal if there were no slot requirements. I plan to explore the CIP messages used to configure the cards into redundancy and see if I can manually set them up in different slots.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I strongly advise against making architectural decisions based solely on illustrations. It is important to rely on engineers or documentation authors to avoid inconsistencies. If you come across any inconsistencies, consult with RA or other experts. I do not have experience with the -EN4T, but it appears to be a new hardware platform with unique features such as adapter teaming, pairing, and redundancy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Certainly, I am intrigued to explore the feasibility of implementing certain features. Utilizing products that are already integrated makes it simpler to request support from our Rockwell representative. The EN4TR units have proven to be highly reliable in my previous projects, which is why I now incorporate them into all new projects. I am particularly optimistic about the possibility of dual IP support being introduced in future models. Although the hardware currently supports it for PRP functionality, the end user interface for this feature is not as accessible as it is on the CompactLogix.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Redundant Adapter mode can be activated through a rotary switch on the module, allowing modules to communicate with each other independently of a controller. If you're unsure about which CIP messaging to use, consider specifying Redundant adapters in the IO rack within Studio 5000. Note that this configuration will restrict the use of slots beyond 0 and 1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When discussing issues with our Rockwell representative, it is beneficial to have already implemented solutions in place. As a former Rockwell representative, I encountered challenges where customers had disregarded documented recommendations and were resistant to making system changes. Without a budget and limited engineering support, I had to find ways to reassure customers that their systems would function correctly. However, these situations often resulted in disappointment and could have been easily avoided by simply incorporating a network module or adjusting a wiring diagram.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tlf30 mentioned observing a screenshot in the Ethernet manual showcasing redundant adapters positioned within the same chassis as the processor. Could you kindly provide a reference to the specific manual featuring this illustration? While reviewing the Redundant Adapter section in the 1756-um004 manual, I did not come across this detail. It has been four years since I last configured this setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>tlf30 expressed optimism for the future inclusion of dual IP support on the devices to enable PRP functionality. Currently, there is only one IP address assigned to both ports in PRP mode, allowing connection to two separate networks. This feature is anticipated to enhance network flexibility and efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When seeking official support from Rockwell representatives, it is advantageous to have implemented solutions already in place. As a former Rockwell rep, I encountered challenges when customers deviated from documentation recommendations and were resistant to changes. Finding solutions without a designated budget while facing limitations in engineering support led to disappointments. Often, simple remedies such as adding a network module or adjusting wiring configurations could have solved the issues.

We strictly adhere to Rockwell Automation's guidelines before implementing any changes in the field. It is common for us to seek assistance and support frequently.

In reference to the Redundant Adapter configuration, evidence from the manual indicates modules in slot 0 of the local chassis. This demonstrates how the RA engineer integrated the modules into the IO tree successfully.

When operating in PRP mode with a single IP address on both ports, VLAN tagging is utilized. The module's ethernet configuration processes data on separate VLANs rather than performing packet switching between interfaces.

Enabling Redundant Adapter mode through the module's rotary switch allows modules to communicate independently without controller involvement. The configuration for Redundant Adapters in the IO rack restricts the use of slots 0 and 1 in Studio 5000.

Configuring redundant adapters in the IO tree involves sending configuration messages to the IO Map CIP class in the controller. While configuring in a remote rack is feasible, integrating redundant IO in the local rack may pose challenges due to limitations on epaths for redundancy.

Awaiting the arrival of a second EN4TR module to conduct further testing on the bench.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The screenshot does not clearly indicate that this is a controller chassis. The module in the controller chassis is labeled as "Local". To test this, I utilized my outdated laptop with the old AOP style and labeled the local module as "MyLocal". The slots are showing as non-selectable, most likely due to being set for a Redundant adapter, limited to 0 and 1. In the local chassis, there is no option for a Redundant Adapter, only the choice of "No". Best of luck with your testing!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Contr_Conn mentioned that the screenshot provided does not indicate that it is a controller chassis. The module in the controller chassis was named "Local" by someone, but for testing purposes, Contr_Conn used an old laptop with an old-style AOP and named the local module "MyLocal" instead. Additionally, the slots are not selectable because they are set for a Redundant adapter, clamped at 0 and 1. There is no option for a Redundant Adapter in the local chassis, only the choice of No. Best of luck with your testing. See the attached image for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Are all ControlLogix slots equal in terms of backplane bandwidth and communication impact?
   - No, the slot position of cards can affect backplane bandwidth when communicating with each other.
   
2. Does the slot position of cards impact communication between them?
   - Yes, the slot in which cards are placed can impact communication, especially when communicating with controllers in different slots.
   
3. Why does the manual for redundant 1756-EN4TR specify that the cards should be in slot 0 and 1?
   - The specific slot requirement for the redundant 1756-EN4TR cards is likely to ensure optimal communication and performance.</p>
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
