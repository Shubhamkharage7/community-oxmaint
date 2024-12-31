
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have a project where I need to convert an AB SLC500 program to a GE Fanuc 90-30 program. Currently, I am using LM90 software but will soon be transitioning to Proficy ME. My main query revolves around addressing a bit in the ladder logic using an integer word">
    <meta name="keywords" content="ab slc500, ge fanuc 90-30, lm90 software, proficy me, ladder logic, addressing bits, integer word, bit registers, ge programming, message file, individual messages, n9:20, %r">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/converting-ab-slc500-program-to-ge-fanuc-90-30-addressing-bits-in-ladder-logic">
    <title>Converting AB SLC500 program to GE Fanuc 90-30: Addressing Bits in Ladder Logic | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Converting AB SLC500 program to GE Fanuc 90-30: Addressing Bits in Ladder Logic | Oxmaint Community">
    <meta property="og:description" content="I have a project where I need to convert an AB SLC500 program to a GE Fanuc 90-30 program. Currently, I am using LM90 software but will soon be transitioning to Proficy ME. My main query revolves around addressing a bit in the ladder logic using an integer word">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/converting-ab-slc500-program-to-ge-fanuc-90-30-addressing-bits-in-ladder-logic">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Converting AB SLC500 program to GE Fanuc 90-30: Addressing Bits in Ladder Logic | Oxmaint Community">
    <meta name="twitter:description" content="I have a project where I need to convert an AB SLC500 program to a GE Fanuc 90-30 program. Currently, I am using LM90 software but will soon be transitioning to Proficy ME. My main query revolves around addressing a bit in the ladder logic using an integer word">
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
        "@id": "https://community.oxmaint.com/discussion-forum/converting-ab-slc500-program-to-ge-fanuc-90-30-addressing-bits-in-ladder-logic"
      },
      "headline": "Converting AB SLC500 program to GE Fanuc 90-30: Addressing Bits in Ladder Logic",
      "description": "I have a project where I need to convert an AB SLC500 program to a GE Fanuc 90-30 program. Currently, I am using LM90 software but will soon be transitioning to Proficy ME. My main query revolves around addressing a bit in the ladder logic using an integer word",
      "author": {
        "@type": "Person",
        "name": "DST1"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-17",
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
                <h1 class="text-white">Converting AB SLC500 program to GE Fanuc 90-30: Addressing Bits in Ladder Logic</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DST1</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5078</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">27</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have a project where I need to convert an AB SLC500 program to a GE Fanuc 90-30 program. Currently, I am using LM90 software but will soon be transitioning to Proficy ME. My main query revolves around addressing a bit in the ladder logic using an integer word (%R) in GE systems, as opposed to exclusively using bit registers (%M). For instance, in my AB logic, I utilize N9:20 as a message file along with bits N9:20/0 through N9:20/15 for individual messages within that file. I am curious if there is a similar approach in GE programming that I am not familiar with. Any insights on this topic would be greatly appreciated. Thank you, Steven.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, although I am not an expert on GE equipment, I have thoroughly reviewed all the available documentation and could not find any information regarding the %R bit reference. Best of luck in your search, Mark. For more information, please visit http://www.peakhmi.com/</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mark-</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The GE 90-30 system does not support addressing %R memory at the bit level; however, it does allow you to copy a %R address to a %M address. When performing this action, make sure the %M address is on a byte boundary, such as %M81 or %M89. To execute this task, use the MOV_WORD instruction, which will transfer all 16 bits of the %R word to 16 consecutive %M addresses, starting with the one you specify for bit 0 of the %R word.

For instance, if your GE equivalent of AB N9:20 is %R920, utilize the MOV_WORD instruction with %R920 as the source and %M113 as the destination. In this scenario, %M113 will represent bit 0 of %R920 (N9:20/0), %M114 will correspond to bit 1 (N9:20/1), and so on, up to %M128 representing bit 15 (N9:20/15).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Fantastic, this is exactly what I needed. I appreciate the responses. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DST1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When the Genius network is not involved, I prefer using %G bits for this type of data, which can be utilized as either a "WORD" or "BOOLEAN". With a total of 1280 bits available, one can perform mathematical computations, apply masks, or other "WORD" functions by addressing the words on byte boundaries as suggested by Steve. Additionally, each individual bit address can serve as a contact or coil. It is important to note that these bits are always retentive, which can be advantageous for data storage, although they can be "cleared" as necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There is indeed a method called BIT_TEST_WORD, but it may be more efficient to avoid using this instruction. Instead, you can transfer your data to M, T, or G memory to access the bits directly, as recommended by others.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Paul B</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Paul, yes that's right. There is a "BIT_SET_" function available, however, it's recommended to use it sparingly due to its inefficiency in adding time to the scan. This can make it challenging to follow and troubleshoot logic, especially because of the limitation of no contacts allowed between a function block and a coil.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate all the assistance provided. Converting this program using LM90 is proving to be quite exhausting. I am hoping for a smoother process once my prophecy software arrives.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DST1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To optimize your experience with Proficy ME, reach out to your supplier for a demo CD. This powerful software can run for 4 days with no limits, and by calling 800-433-2685, you can extend that trial period to 30 days. Don't hesitate to start utilizing this essential tool for your business needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RussB</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This morning, I successfully reached the appropriate contacts and my demo is set to be shipped today. Despite multiple follow-up calls regarding the status of my order, it wasn't until I emphasized the word "demo" that progress was swiftly made. In just two minutes, everything fell into place.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DST1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Good news about the Proficy software! While it may not be the most user-friendly software initially, with some persistence and guidance, it can become a favorite programming package. Here are some tips that made using Proficy easier for me:

1. Utilize the "Apply Theme - Logic Developer PLC" feature to fix display issues with windows.
2. Make sure the "Feedback Zone" window is open and use the "references" tab for variable cross-references.
3. Explore all tabs on the "Navigator" window, especially the settings for software functionality.
4. Use the "Companion" window for guidance on various features.
5. Manage variables and tags through the tab on the Navigator window and consider organizing them in an Excel workbook for easier management.
6. Take advantage of the drag-and-drop feature in ladder programming for easier organization.
7. Quickly enter logic by typing instructions like NOCON, NCCON, or COIL, and the software will suggest options as you type.

These tips can help improve your experience with Proficy software. For further assistance, there are video tutorials available on the software disc and feel free to ask questions here.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Paul B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In need of converting an AB SLC500 program to a GE Fanuc 90-30 program, DST1 asked if it is possible to address a bit in the ladder logic from an integer word (%R) or if only bit registers (%M) can be used. In the AB logic, bits N9:20/0 thru N9:20/15 are utilized as individual messages in N9:20 message file. Is there a different method in GE for this? The newer GE models utilize Bit Level addressing like R1234.X[02] and R02100.X[00], not the 90-30 series. Hopefully, this information helps in the conversion process. Thank you, Steve.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MathewP</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I address bits in ladder logic using an integer word (%R) in GE Fanuc 90-30 systems when converting from an AB SLC500 program?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In GE systems, you can address bits in ladder logic using an integer word (%R) by specifying the word number followed by the bit number within that word. For example, to access bit 3 of word 5, you would use %R5:3.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What is the equivalent of AB SLC500's message file and individual bits addressing in GE programming for tasks like message handling?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In GE programming, you can achieve similar functionality to AB SLC500's message file and individual bits addressing by using integer words (%R) to store messages and then accessing specific bits within those words as needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: How can I adapt my existing AB logic, which utilizes N9:20/0 through N9:20/15 for individual messages, to work with GE's programming structure?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To adapt your existing AB logic to GE's programming structure, you can store messages in integer words (%R) and access individual bits within those words to represent different messages, similar to how you handled it in AB SLC500.</p>
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
