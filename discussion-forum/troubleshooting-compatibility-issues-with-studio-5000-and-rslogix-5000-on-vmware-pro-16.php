
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently facing a dilemma as I attempt to set up a virtual machine for various versions of RSlogix 5000 and Studio 5000. While I have always been a fan of using a VM for troubleshooting and offline work, I have encountered some compatibility issues along the way.">
    <meta name="keywords" content="studio 5000, rslogix 5000, vmware pro 16, troubleshooting compatibility, virtual machine setup, rslogix 5000 versions, studio 5000 versions, windows 10 compatibility, windows 7 compatibility, rockwell">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-compatibility-issues-with-studio-5000-and-rslogix-5000-on-vmware-pro-16">
    <title>Troubleshooting Compatibility Issues with Studio 5000 and Rslogix 5000 on VMware Pro 16 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Compatibility Issues with Studio 5000 and Rslogix 5000 on VMware Pro 16 | Oxmaint Community">
    <meta property="og:description" content="I am currently facing a dilemma as I attempt to set up a virtual machine for various versions of RSlogix 5000 and Studio 5000. While I have always been a fan of using a VM for troubleshooting and offline work, I have encountered some compatibility issues along the way.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-compatibility-issues-with-studio-5000-and-rslogix-5000-on-vmware-pro-16">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Compatibility Issues with Studio 5000 and Rslogix 5000 on VMware Pro 16 | Oxmaint Community">
    <meta name="twitter:description" content="I am currently facing a dilemma as I attempt to set up a virtual machine for various versions of RSlogix 5000 and Studio 5000. While I have always been a fan of using a VM for troubleshooting and offline work, I have encountered some compatibility issues along the way.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-compatibility-issues-with-studio-5000-and-rslogix-5000-on-vmware-pro-16"
      },
      "headline": "Troubleshooting Compatibility Issues with Studio 5000 and Rslogix 5000 on VMware Pro 16",
      "description": "I am currently facing a dilemma as I attempt to set up a virtual machine for various versions of RSlogix 5000 and Studio 5000. While I have always been a fan of using a VM for troubleshooting and offline work, I have encountered some compatibility issues along the way.",
      "author": {
        "@type": "Person",
        "name": "desertsurf520"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-13",
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
                <h1 class="text-white">Troubleshooting Compatibility Issues with Studio 5000 and Rslogix 5000 on VMware Pro 16</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>desertsurf520</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2972</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">28</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently facing a dilemma as I attempt to set up a virtual machine for various versions of RSlogix 5000 and Studio 5000. While I have always been a fan of using a VM for troubleshooting and offline work, I have encountered some compatibility issues along the way. Specifically, Windows 10 had trouble installing version 27, with Rockwell confirming that it is not supported. Surprisingly, Windows 7 seems to work for most versions except the later ones.

I am curious if anyone else has dealt with similar challenges and if there are any workarounds available. I would prefer to have all versions of Studio and Rslogix 5000 on a virtual machine rather than on my host machine. Any advice or insights from those who have experienced similar headaches would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I have Windows 10 VM with every version of software installed from 7 to 35. Here are some valuable suggestions for a smooth installation process: 

1. To avoid issues, install the software in reverse order starting from the highest version to the lowest. (Contrary to Rockwell's recommendation) 
2. For older versions like 20 and below, use an installer that can install multiple versions at once. This will ensure all necessary components, including dotnet 1.0, are properly installed. 
3. Remember to reboot your system whenever prompted. 
4. Always select "activate later" during the installation process. 
5. If any installation errors occur, particularly due to Rockwell's shortcomings, uninstall newer versions, install the older version, and then reinstall any missing components using the v35 installer.
6. Be patient during installations as they can be time-consuming. Following these steps, you can set up a VM or workstation with all versions in about a week.

Pro Tip: When installing Studio 5000 Application Code Manager, be aware of a bug in the SQL Express 2016 installer. Uninstall the older version of SQL Client (2012) and ODBC driver for SQL Server from the add/remove programs section before retrying the installation. This will ensure a successful installation without any issues. ~Trevor</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The conflicting statements from Rockwell and the distributor have been a source of frustration. I have poured countless hours into creating a comprehensive virtual machine (VM) with all versions to streamline my service work. I rely on having access to every controller without any technical issues. Once I successfully create a fully functional VM with all versions, I will definitely back it up. Your advice is appreciated, and I am determined to give it another try.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>desertsurf520</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As a controls engineer for a company servicing numerous customers using different software versions, I understand the challenges of updating systems without disrupting operations. How much storage space does your VM require to accommodate all those versions? I typically allocate 120GB for my VMs, but I anticipate needing more space due to the variety of versions. Expanding VM disk space can be a cumbersome process. - Mitch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Stoeby</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I agree with tlf30 that building an all versions VM is feasible. Follow his advice and troubleshoot any installation issues that may arise. Common problems include encountering the "there is a newer version installed" error for a software component, as well as difficulties with DotNet 1.0 installation. 

My VM typically ranges from 160 to 200 GB in size, depending on the level of defragmentation. It includes various software versions like 5000 software, PLC 5 & 500, Studio SE V12, along with other vendor applications and utilities. Regularly clean up the VM by utilizing Devices -> Hard Disk, Defragment, and Compact features to minimize disk space usage.

I recommend configuring a 300 GB hard drive that grows as needed, instead of allocating the entire space upfront. This approach reduces the time required to back up the VM. Additionally, it is possible to Expand an existing VM hard drive through Devices -> Hard Disk settings. 

If using snapshots in VMWare Pro, please note: 1. Defragment and Compact functions are not compatible with snapshots. 2. Reverting to a snapshot can disrupt Rockwell Codemeter activations hosted within the VM, requiring reactivation. Rockwell recently made changes to this behavior, impacting the functionality of snapshots. This inconvenience diminishes the benefits of using snapshots in the VM environment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mike__T</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To ensure the smooth activation of all my software, I rely on using a dongle and highly recommend it. By using a dongle, I can easily transfer installations to another computer without worrying about activation limits. It's important to note that older versions of software may require Windows 7, and some may even run on Windows 95-98, or in some cases, only on DOS. For running DOS-based software, I utilize virtual machines for compatibility. 

I prioritize the safety of my data by storing everything on my personal cloud storage and regularly backing up my virtual machines, software, and projects. When it comes to installing Rockwell software, it's crucial to install older versions before upgrading to newer ones. Each version of the software installs its own driver, which can cause compatibility issues if not installed in the correct order.

During a recent computer upgrade, it took me nearly two days to reinstall all necessary software. This experience taught me the importance of proper planning to avoid any downtime due to software installation issues. Remember, preparation is key! Good luck with your software installations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Are there compatibility issues with running Studio 5000 and RSLogix 5000 on VMware Pro 16?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, there are compatibility issues reported, especially with certain versions of Windows and the software applications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Which Windows versions are recommended for running different versions of RSLogix 5000 and Studio 5000 on a virtual machine?</h4>
<p class='text-muted'><strong>Answer:</strong> While Windows 7 seems to work for most versions except the later ones, Windows 10 had trouble installing version 27, which is confirmed as not supported by Rockwell.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Have others faced similar challenges with installing multiple versions of Studio 5000 and RSLogix 5000 on a virtual machine?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, other users have encountered similar challenges, as mentioned in the discussion thread. It seems to be a common issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any workarounds available for the compatibility issues with Studio 5000 and RSLogix 5000 on VMware Pro 16?</h4>
<p class='text-muted'><strong>Answer:</strong> Workarounds may include using different Windows versions, seeking advice from the software providers, or exploring alternative virtual machine software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  Is it better to have all versions of Studio and RSLogix 5000 on a virtual machine rather than on the host machine?</h4>
<p class='text-muted'><strong>Answer:</strong> Having the software on a virtual machine can be beneficial for troubleshooting and offline</p>
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
