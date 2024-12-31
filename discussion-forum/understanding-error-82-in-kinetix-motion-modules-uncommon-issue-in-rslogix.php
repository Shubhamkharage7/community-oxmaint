
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Occasionally, I encounter error 82 during the homing/enabling/disabling process of a Kinetix module. Surprisingly, error code 82 is not documented in the RSLogix help guide. Can anyone shed light on the significance of this mysterious error code?">
    <meta name="keywords" content="error 82, kinetix module, rslogix, homing process, enabling process, disabling process, error codes, rslogix help guide, mysterious error code, kinetix motion modules, error troubleshooting, error resolution, error significance">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-error-82-in-kinetix-motion-modules-uncommon-issue-in-rslogix">
    <title>Understanding Error 82 in Kinetix Motion Modules: Uncommon Issue in RSLogix | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding Error 82 in Kinetix Motion Modules: Uncommon Issue in RSLogix | Oxmaint Community">
    <meta property="og:description" content="Occasionally, I encounter error 82 during the homing/enabling/disabling process of a Kinetix module. Surprisingly, error code 82 is not documented in the RSLogix help guide. Can anyone shed light on the significance of this mysterious error code?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-error-82-in-kinetix-motion-modules-uncommon-issue-in-rslogix">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding Error 82 in Kinetix Motion Modules: Uncommon Issue in RSLogix | Oxmaint Community">
    <meta name="twitter:description" content="Occasionally, I encounter error 82 during the homing/enabling/disabling process of a Kinetix module. Surprisingly, error code 82 is not documented in the RSLogix help guide. Can anyone shed light on the significance of this mysterious error code?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-error-82-in-kinetix-motion-modules-uncommon-issue-in-rslogix"
      },
      "headline": "Understanding Error 82 in Kinetix Motion Modules: Uncommon Issue in RSLogix",
      "description": "Occasionally, I encounter error 82 during the homing/enabling/disabling process of a Kinetix module. Surprisingly, error code 82 is not documented in the RSLogix help guide. Can anyone shed light on the significance of this mysterious error code?",
      "author": {
        "@type": "Person",
        "name": "OOPer"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">Understanding Error 82 in Kinetix Motion Modules: Uncommon Issue in RSLogix</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>OOPer</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>19 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">15926</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">348</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Occasionally, I encounter error 82 during the homing/enabling/disabling process of a Kinetix module. Surprisingly, error code 82 is not documented in the RSLogix help guide. Can anyone shed light on the significance of this mysterious error code?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Which version of Logix are you currently using? How have you configured the axis - is it set up as Servo Axis Drive or another configuration? Can you provide details on the specific instructions you are using, such as MAH, MSO, MAH, MSF?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MichaelG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Encountering errors like RSLogix 19Axis_CIP_DriveMAH, MSF, MSO can be frustrating, especially when they are inconsistent. This issue often arises after recovering from a fault condition.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OOPer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are facing the error code "CIP axis in incorrect state" while using RSLogix 5000, you can find more information in the motion_instr.pdf file located at C:\Program Files\Rockwell Software\RSLogix 5000\Common\ENU\Docs. This error typically indicates that the axis is in an incorrect operational state. In some cases, this error message may seem unhelpful, but troubleshooting steps can be found in the documentation provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MichaelG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For those seeking further insights into the Axis State, feel free to share any discoveries you make. I will be working with a significant amount of PF 755 in my upcoming project and am eager to learn from your findings. Explore our knowledge base articles 69996 and 69997 for comprehensive information on Axis States. Article 69996 delves into interpreting the CIP Axis State for an Axis_CIP_Drive, while article 69997 compares Axis CIP State Behavior with Axis Servo Drive in SERCOS. Discover solutions for correcting CIP axis states in the mentioned articles.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MichaelG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Michael. It seems that addressing the incorrect state issue when faulting out the drives with the EStop was a key factor in resolving the finicky reset process. Adding a 2-second delay after fault reset.DN before sending any commands proved to be a consistent way to recover from faults. Following this adjustment, I did not encounter the 82 error again. I will verify this when I return to the floor in a few weeks and provide you with updates accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OOPer</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Recovering from Estop can be tricky, especially when encountering errors in the ACD file referenced in knowledge base 69996. It is crucial to inspect the axis.CIPAxisState and take appropriate action to ensure a smooth recovery process. Waiting for the drive to complete its task may also be necessary in some cases.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MichaelG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, MichaelG mentioned that recovery from Estop can be tricky. Looking into knowledge base 69996, the code seems to have errors in the sequencer. It is essential to inspect the Axis CIPAxisState and take appropriate action to recover or wait for the drive to complete its task. It is crucial to understand the difference between Axis CIP status and state to avoid confusion.

One challenge highlighted in the ACD sample is the ambiguity surrounding the "Faults are repaired then cleared based on the type of fault seen." statement on rung 8. Determining the type of fault can be unclear, especially since drives may not behave consistently. Currently, a Shutdown reset followed by a Fault reset is being performed for every fault.

Recovering from over-travel limits presents a unique challenge. The logic behind complicating this basic procedure by A-B is unclear.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OOPer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An OOPer noted that the ACD sample can be ambiguous, particularly in the statement "Faults are repaired then cleared based on the type of fault seen" on rung 8. It is unclear how to determine this, especially since the drives do not consistently respond the same way. Currently, the approach involves a Shutdown reset followed by a Fault reset for each fault. Could changing the state of Axis_1.CIPShutdownStatus aid in your logic? Further exploration and testing may be needed to find the best solution. OOPer also commented on the complexities of recovering from over-travel limits, expressing confusion over A-B's approach to this basic function. For additional insights, refer to Knowledge base article 66060 on Power Programming V4.1 – (ISA-88 & PackML Based), which outlines Rockwell's preferred method for OEMs. This resource sheds light on Rockwell's expectations for programming standards and best practices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MichaelG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MichaelG pointed out the complexity of utilizing Power Programming V4.1 based on ISA-88 & PackML standards, as recommended by Rockwell Automation for OEMs. I personally found PhaseManager beneficial in my project, despite coming from an OOP background. Regarding the Axis_1.CIPShutdownStatus, I am curious about its potential impact on logic and plan to test it on a bench. While using ShutdownStatus, I didn't observe any significant changes and was unaware of the CIPShutdownstatus member. Is there a comprehensive document explaining all Axis_CIP_Drive members aside from GSV information? I recently discovered a member for CIPAxisState, which I previously relied on GSV for.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OOPer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One user, OOPer, expressed frustration with the use of ShutdownStatus in Axis_CIP_Drive members. They were unable to find the CIPShutdownstatus member and inquired about a comprehensive document explaining all the Axis_CIP_Drive members. Instead of relying on GSV, they discovered a specific member for CIPAxisState. To locate all axis UDT members, it is recommended to monitor the axis tag and expand, as different versions may have varying members. For more information, refer to the Manual CIP Attributes available at http://literature.rockwellautomation.com/idc/groups/literature/documents/rm/motion-rm003_-en-p.pdf. Additionally, ensure that "Auto Tag Update" is enabled in Motion Group attributes to ensure that attributes like Shutdownstatus are regularly updated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MichaelG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you encounter error 82 while setting up a Kinetix module in RSLogix, you may be wondering what it means. This mysterious error code can be confusing as it is not listed in the RSLogix help documentation. However, a helpful tip to resolve this issue is to add the following code before the MSO:XIC AXIS.FeedbackIntegrityStatus XIO AXIS.ModuleConnFault. Good luck troubleshooting!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>glubash</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently experiencing the same issues as well. Upon reviewing my alarm log, I have identified that I am in an incorrect state marked by "control sync fault" and "connection reset." It seems to be the identical issue reported by the previous user.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gte383f</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When encountering the error message "CIP axis in incorrect state" in RSLogix 5000, it typically means that the axis is not in the correct operational state. This error message may appear when the Enable input to the drive is not activated on your system. It can be found in the motion_instr.pdf file located in C:\Program Files\Rockwell Software\RSLogix 5000\Common\ENU\Docs\. The message may seem unhelpful, but it provides a clue to the issue at hand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JaxGTO</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am experiencing a common problem where the MSO instruction is not working after an STO. Should I introduce a delay before executing the MSF and MSO instructions, or should I incorporate additional axis bits logic beforehand?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After performing a safe torque off, it may be necessary to reset the axis. To determine if a reset is needed, try using a motion direct command (MAFR) and check if the axis will move accordingly. If successful, be sure to incorporate a reset procedure into the program for future use. Best of luck with your troubleshooting efforts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>glubash</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I noticed a strange behavior when adding a new Microsoft Office (MSO) feature outside of the area of interest (AOI). Surprisingly, the newly added MSO feature works when triggered, but the one inside the AOI does not, even after multiple attempts to trigger it. How can this discrepancy be explained?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The axis successfully operated by utilizing the axis.SafeTorqueOffInhibit feature and allowing some time to pass before initiating a call to the mso function.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kataeb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Engineers, I am encountering an issue with my Kinetix 350 system. The current status shows Axis state as Initializing, Axis Fault as No Fault, Module Fault as Moduleconnfault, Group fault as No Fault, Motion Fault as No Fault, Initialization Fault as No Fault, Attribute Error as No Fault, and Start Inhibited as Not Inhibited. I am experiencing errors when executing any motion instruction, such as mso. I would greatly appreciate any assistance in resolving this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jrex</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When issuing an MSO, the axis must not be in a connecting state or have a faulted module. It is essential to follow a specific sequence and verify the status of the axis for a proper reset. First, perform a MASR if the axis is shut down, followed by a MAFR if the axis is faulted. If the axis is neither shut down nor faulted and the motion group is synchronized, then issue an MSO. A Rockwell publication on motion provides detailed information on relevant status bits and reset procedures. While I am unable to provide the specific details at the moment, a quick search for "Rockwell motion" will lead you to the necessary information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What does error code 82 signify in Kinetix Motion Modules?
   - Error code 82 in Kinetix Motion Modules indicates an uncommon issue that may arise during the homing, enabling, or disabling process. This error is not documented in the RSLogix help guide.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot error 82 in Kinetix Motion Modules?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting error 82 in Kinetix Motion Modules may require a deeper understanding of the specific circumstances under which it occurs. Some common troubleshooting steps include checking wiring connections, motor settings, firmware versions, and consulting technical support resources.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is error 82 a critical issue that can affect the operation of Kinetix Motion Modules?</h4>
<p class='text-muted'><strong>Answer:</strong> - Error 82, being an uncommon issue not documented in the RSLogix help guide, may or may not have a significant impact on the operation of Kinetix Motion Modules. It is essential to address and resolve this error promptly to ensure smooth functionality and prevent potential downtime.</p>
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
