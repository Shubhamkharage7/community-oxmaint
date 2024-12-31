
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey Sherman, lets take a trip down memory lane! Is there anyone in the forum who has experience with a redundant GE Series Six system? A facility with a system installed back in 1986 has been encountering sporadic issues with the CPU dropping out of run mode. When the">
    <meta name="keywords" content="ge series six, redundant system, troubleshooting, cpu dropping out, backup cpu, keyswitch reboot, plc modules, battery leds, system maintenance, old systems, expert advice, facility issues, system transition, redundancy, ge">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-redundant-ge-series-six-systems-from-1986-looking-for-expert-advice">
    <title>Troubleshooting Issues with Redundant GE Series Six Systems from 1986: Looking for Expert Advice | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Issues with Redundant GE Series Six Systems from 1986: Looking for Expert Advice | Oxmaint Community">
    <meta property="og:description" content="Hey Sherman, lets take a trip down memory lane! Is there anyone in the forum who has experience with a redundant GE Series Six system? A facility with a system installed back in 1986 has been encountering sporadic issues with the CPU dropping out of run mode. When the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-redundant-ge-series-six-systems-from-1986-looking-for-expert-advice">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Issues with Redundant GE Series Six Systems from 1986: Looking for Expert Advice | Oxmaint Community">
    <meta name="twitter:description" content="Hey Sherman, lets take a trip down memory lane! Is there anyone in the forum who has experience with a redundant GE Series Six system? A facility with a system installed back in 1986 has been encountering sporadic issues with the CPU dropping out of run mode. When the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-redundant-ge-series-six-systems-from-1986-looking-for-expert-advice"
      },
      "headline": "Troubleshooting Issues with Redundant GE Series Six Systems from 1986: Looking for Expert Advice",
      "description": "Hey Sherman, lets take a trip down memory lane! Is there anyone in the forum who has experience with a redundant GE Series Six system? A facility with a system installed back in 1986 has been encountering sporadic issues with the CPU dropping out of run mode. When the",
      "author": {
        "@type": "Person",
        "name": "Steve Bailey"
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
                <h1 class="text-white">Troubleshooting Issues with Redundant GE Series Six Systems from 1986: Looking for Expert Advice</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2409</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">407</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey Sherman, let's take a trip down memory lane! Is there anyone in the forum who has experience with a redundant GE Series Six system? A facility with a system installed back in 1986 has been encountering sporadic issues with the CPU dropping out of run mode. When the backup CPU takes over, the transition is smooth, but both CPUs are facing the same issue. They are able to reboot the PLC using the keyswitch. The system has been inactive for a few months, but the batteries still seem to be in good condition based on the battery LEDs. I have some ideas on which modules to replace first, but I'm curious if anyone else has dealt with these old systems before. Rootboy, I'm looking at you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Verify the watchdog timers for each CPU. While I am not familiar with these systems, this is the initial consideration. Best of luck.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AkaHammer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For detailed instructions on operating the Asix Plus system, you can access the user manual at http://www.cimtecautomation.com/doc...Six/Manuals/GEK-96602Asixplususer'smanual.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TWS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Check out the following link for more information on GE Series Six PLCs: https://www.nuovaelva.it/docs/Ge-Fa.../INFOLINK/MORE_PLCS/SERIES_SIX/GEK-25366C.PDF.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TWS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello TWS, thank you for providing all the necessary manuals. AKAHammer, it is possible that the CPUs are halting due to a watchdog timeout issue. Surprisingly, the programs have not been altered since they were functioning properly. The real concern here is identifying the reason for the increased time per program scan. If the delay is caused by the redundancy controller taking longer to transfer data between the primary and backup units, which specific module in the RPU should be swapped out? It would be helpful if any forum members have experience with common system failures and can offer insight on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you checked if the programmable logic controllers (PLCs) in the same panel are connected to an ethernet switch? It might be worth reseating the connections between the PLCs and the backplane, as well as the input/output (I/O) cards. Dirty connections have been known to cause issues with AB PLCs in the past. This simple troubleshooting step could potentially resolve the issue. Feel free to reach out if you need further assistance. Thank you, James.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Both PLCs and the redundancy switch are housed in the same panel, without any involvement of ethernet. This system was installed in 1986. One of my initial recommendations was to reseat the modules on site, which has proven to be beneficial in numerous Series Six systems over the years.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The most recent project I tackled involved troubleshooting a cardboard line with recurring random faults and lockups. Despite replacing all the electrolytic caps without success, I ultimately resolved the issue by removing all the cards and cleaning the contacts with an eraser.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Soggy Canuck</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One tried-and-true troubleshooting technique for the Series Six is to reseat all modules back into the rack. This step is essential for resolving connectivity issues and ensuring optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey jokingly called for the wayback machine to help address a GE Series Six system issue on the forum. The system, installed in 1986, is facing intermittent problems with the CPU dropping out of run. Despite a back up CPU in place, both CPUs are experiencing issues. The system has been inactive for several months, but the batteries are in good condition. Bailey is seeking advice on which modules to replace first and is hoping someone with experience on these systems, like Rootboy, can offer insight.

On a different note, Bailey recently purchased a WSI board (MCA, not ISA) for a good deal and is considering incorporating it into his setup. However, he is open to passing it along to someone in need.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rootboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon reflection, it is puzzling to consider what may have transpired since 1986 to trigger this issue. It seems unlikely that the program itself is at fault, unless there has been tampering or replacement of components. It is crucial to pinpoint what exactly has changed in order to address the root cause of this issue. I do not have any prior experience with the S6.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mad4x4</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering why a system that has been functioning since 1986 suddenly experiences issues, it's important to identify any changes that may have occurred. Perhaps something within the system has been replaced without proper documentation. It's worth noting that S6 is not within my expertise. Additionally, given that it has been in operation for 38 years, it may be time to consider replacing it unless it is intended for display in a museum. This discussion is a resurrected thread, indicating its relevance in current conversations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon closer inspection, I found that the connections between the different parts of the system were loose. By simply tightening the screws on the 37-pin Dsub connectors, I was able to eliminate the sporadic issues. Recently, the establishment underwent a change in ownership. The new proprietor reached out to me for a proposal to enhance the setup. However, after conducting some research, I uncovered that he has a history of not paying contractors, which led me to decline the opportunity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey revealed that the intermittent faults in the system were caused by loose cables connecting the components, specifically the 37-pin Dsub connectors. After tightening the screws on the connectors, the issues were resolved. Upon being approached by the new owner of the facility for a potential upgrade, I decided to decline due to the owner's history of not paying contractors.

I have concerns about a facility that is still using outdated equipment, especially when a more modern upgrade is available. This reluctance to invest in important upgrades raises red flags for me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the CPU to drop out of run mode in a redundant GE Series Six system from 1986?</h4>
<p class='text-muted'><strong>Answer:</strong> There could be various reasons for this issue, such as faulty modules, aging components, or power supply problems. It's essential to troubleshoot and identify the specific cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can one ensure a smooth transition when the backup CPU takes over in a redundant system?</h4>
<p class='text-muted'><strong>Answer:</strong> To ensure a smooth transition, it's crucial to have proper synchronization and redundancy setup in place. Additionally, monitoring the system performance and addressing any underlying issues promptly can help maintain a seamless transition.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can be taken to address sporadic issues with both CPUs in a redundant GE Series Six system?</h4>
<p class='text-muted'><strong>Answer:</strong> Start by checking the modules, power supplies, and connections for any signs of wear or malfunction. It might also be helpful to review the system logs for any error messages or warnings that could provide insights into the root cause of the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How important is it to maintain the batteries in an inactive system like the one described in the thread?</h4>
<p class='text-muted'><strong>Answer:</strong> Even in inactive systems, maintaining the batteries is crucial as they can degrade over time. Checking the battery condition regularly and ensuring they are functioning correctly is essential to prevent unexpected failures or issues when the system is put back into operation.</p>
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
