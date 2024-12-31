
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="While working on my school project today, we utilized a 24V power supply and accidentally set the current at 0.9A. A distinct pop sound emanated from the PLC, a Micrologix 1100 series B 1763-L16DWD, followed by a faint smell. We refrained from attempting to power it back on. Uncertain">
    <meta name="keywords" content="plc troubleshooting, overloaded plc, current overload damage, fuse damage, capacitor damage, micrologix 1100 series b, 1763-l16dwd, power supply issue, electrical pop sound, electrical smell, component replacement">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-after-overloading-with-current-fuse-or-capacitor-damage">
    <title>Troubleshooting PLC after Overloading with Current: Fuse or Capacitor damage? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PLC after Overloading with Current: Fuse or Capacitor damage? | Oxmaint Community">
    <meta property="og:description" content="While working on my school project today, we utilized a 24V power supply and accidentally set the current at 0.9A. A distinct pop sound emanated from the PLC, a Micrologix 1100 series B 1763-L16DWD, followed by a faint smell. We refrained from attempting to power it back on. Uncertain">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-after-overloading-with-current-fuse-or-capacitor-damage">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PLC after Overloading with Current: Fuse or Capacitor damage? | Oxmaint Community">
    <meta name="twitter:description" content="While working on my school project today, we utilized a 24V power supply and accidentally set the current at 0.9A. A distinct pop sound emanated from the PLC, a Micrologix 1100 series B 1763-L16DWD, followed by a faint smell. We refrained from attempting to power it back on. Uncertain">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-plc-after-overloading-with-current-fuse-or-capacitor-damage"
      },
      "headline": "Troubleshooting PLC after Overloading with Current: Fuse or Capacitor damage?",
      "description": "While working on my school project today, we utilized a 24V power supply and accidentally set the current at 0.9A. A distinct pop sound emanated from the PLC, a Micrologix 1100 series B 1763-L16DWD, followed by a faint smell. We refrained from attempting to power it back on. Uncertain",
      "author": {
        "@type": "Person",
        "name": "j.sean.gg"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-03",
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
                <h1 class="text-white">Troubleshooting PLC after Overloading with Current: Fuse or Capacitor damage?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>j.sean.gg</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">728</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">65</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>While working on my school project today, we utilized a 24V power supply and accidentally set the current at 0.9A. A distinct pop sound emanated from the PLC, a Micrologix 1100 series B 1763-L16DWD, followed by a faint smell. We refrained from attempting to power it back on. Uncertain about the extent of damage caused, I am curious if a fuse or capacitor might have blown. With limited knowledge about PLCs, I am contemplating if replacing a component will restore its functionality or if it's safe to power it up again.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>During my school project, we mistakenly set the current of a 24V power supply to 0.9A, causing a pop sound and a strange smell from our Micrologix 1100 PLC. Unsure of what went wrong, I wonder if we need to replace a fuse or capacitor. It's risky to power it back on without identifying and fixing the damaged components that led to the issue. Be cautious and seek professional help to avoid further damage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After consulting with others, it appears that the problem was not the current, but rather that we mistakenly supplied the PLC with 48 volts. I am concerned that this overvoltage may have caused damage to the entire system. Despite checking the user manual, I am still unsure of the extent of the harm done to the overall system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>j.sean.gg</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to note that a Programmable Logic Controller (PLC) will only draw the necessary amount of current it requires. Therefore, even if a Power Supply Unit (PSU) is set to 5 amps when the PLC only requires 1 amp, it will only draw 1 amp unless the PLC is faulty. However, applying 48 volts to a PLC that is rated at 24 volts may result in damaging some components. Typically, the power supply regulator circuit may be affected, but there is a chance of repair if only the regulator or a capacitor and resistor are burnt. There are no guarantees though. In a past occurrence, an engineer mistakenly connected 240v to a PLC that was designed for 24v, resulting in damage to the regulator and a burnt resistor. While the PLC continued to function for a period, it eventually failed due to the high voltage causing other components to suffer. Ultimately, the PLC had to be replaced.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When applying double the rated voltage, the current passing through the load also doubles according to the formula V = I x R. This commonly leads to a phenomenon often humorously referred to by professionals as "letting the smoke out".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To troubleshoot the issue, start by removing the plastic casing to locate the scorch mark. With some soldering expertise, it may be possible to replace the damaged component. However, it's more likely that a replacement is needed. Fortunately, this is for a school project and not a critical component on a production line. It's a common mistake to confuse a DH-485 port for ethernet, which can cause issues when connected to laptops. Remember, you're not alone in this experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>If your circuit board is epoxy-coated like a MicroLogix 1400, you may need to consult an electronic repair company to safely remove the coating without causing additional damage. Despite attempting to "put the magic smoke back in," the 1400 still doesn't function properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dummy_bit</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Tom Jenkins, the formula V = I x R shows that doubling the voltage results in double the current flowing through the load. This increase in current leads to a fourfold increase in power dissipated in the load. This relationship is further illustrated by the formula P = I^2 x R. Understanding the impact of voltage and current on power dissipation is crucial in electrical systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Great news, everyone! The teacher examined it and determined that it was just a blown zener diode. Fortunately, the project can proceed as the device is still functioning properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>j.sean.gg</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Avoided a disaster by a hair's breadth...</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could have caused the pop sound and smell from the PLC after overloading with current?</h4>
<p class='text-muted'><strong>Answer:</strong> - The pop sound and smell likely indicate damage to a component within the PLC, possibly a blown fuse or capacitor.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it safe to power on the PLC again after overloading it with current?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is not recommended to power on the PLC again without first identifying and addressing the cause of the issue to prevent further damage.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I determine if the fuse or capacitor in my PLC is damaged?</h4>
<p class='text-muted'><strong>Answer:</strong> - To determine if the fuse or capacitor is damaged, you may need to visually inspect the components for signs of physical damage or test them with a multimeter for continuity.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Will replacing a blown fuse or capacitor restore the functionality of the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Replacing a blown fuse or capacitor may restore the functionality of the PLC, but it is important to ensure that no other components were affected by the overloading before attempting to power it on again.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What precautions should I take when working with PLCs to avoid overloading them with current?</h4>
<p class='text-muted'><strong>Answer:</strong> - To prevent overloading a PLC with current, always ensure that the power supply voltage and current settings match the specifications of the PLC, and avoid making adjustments without proper knowledge or training.</p>
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
