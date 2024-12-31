
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="What is the maximum allowable jitter on a CPU controller for motion control? In our testing on an IPC with Codesys runtime, we cammed 31 virtual slave axes to a virtual master and noticed peak jitter of approximately 200µs – a concerning figure. The motion instructions operate on a">
    <meta name="keywords" content="maximum allowable jitter, cpu controller, motion control, ipc, codesys runtime, virtual slave axes, virtual master, peak jitter, 200µs, cycle time, controller code, smooth camming operation, virtual axes, physical drives, ethercat">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-the-maximum-allowable-jitter-for-motion-control-on-a-cpu-controller">
    <title>Understanding the Maximum Allowable Jitter for Motion Control on a CPU Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding the Maximum Allowable Jitter for Motion Control on a CPU Controller | Oxmaint Community">
    <meta property="og:description" content="What is the maximum allowable jitter on a CPU controller for motion control? In our testing on an IPC with Codesys runtime, we cammed 31 virtual slave axes to a virtual master and noticed peak jitter of approximately 200µs – a concerning figure. The motion instructions operate on a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-the-maximum-allowable-jitter-for-motion-control-on-a-cpu-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding the Maximum Allowable Jitter for Motion Control on a CPU Controller | Oxmaint Community">
    <meta name="twitter:description" content="What is the maximum allowable jitter on a CPU controller for motion control? In our testing on an IPC with Codesys runtime, we cammed 31 virtual slave axes to a virtual master and noticed peak jitter of approximately 200µs – a concerning figure. The motion instructions operate on a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-the-maximum-allowable-jitter-for-motion-control-on-a-cpu-controller"
      },
      "headline": "Understanding the Maximum Allowable Jitter for Motion Control on a CPU Controller",
      "description": "What is the maximum allowable jitter on a CPU controller for motion control? In our testing on an IPC with Codesys runtime, we cammed 31 virtual slave axes to a virtual master and noticed peak jitter of approximately 200µs – a concerning figure. The motion instructions operate on a",
      "author": {
        "@type": "Person",
        "name": "aand74"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-12",
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
                <h1 class="text-white">Understanding the Maximum Allowable Jitter for Motion Control on a CPU Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>aand74</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1199</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">158</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>What is the maximum allowable jitter on a CPU controller for motion control? In our testing on an IPC with Codesys runtime, we cammed 31 virtual slave axes to a virtual master and noticed peak jitter of approximately 200µs – a concerning figure. The motion instructions operate on a cycle time of 2ms, with minimal controller code to ensure smooth camming operation. This preliminary setup uses virtual axes, with plans to eventually connect physical drives on Ethercat.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>You are correct in noting that a 200-microsecond delay is far too excessive, making it impractical to employ derivative gain and resulting in non-smooth target trajectories. I personally prefer no delay at all. Utilizing a FPGA allows for the use of virtual axes to access the cam using cubic splines. It seems that the slave axes are also virtual for testing purposes. A 2-millisecond update time may be considered slow, but coordinating the next cam to begin where the previous one ends should be straightforward. Are the cams set to cyclic motion? Do you continuously execute the same cam or are they each unique? In saw mill operations, each cam is usually unique, while in typical machine control, the same cams are repeated. Performing these tasks on a PC may present challenges. Can you provide more information about the application? With decades of experience in this field, I have tackled numerous projects over the years.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We utilize an Advantech UTC-216F, which is not your typical home PC but rather an industrial IPC commonly used in various applications. However, it has not been previously used in motion control applications. The program we tested is purely for testing purposes, as we do not yet have the actual cam profiles for the final packaging machine. The test scenario includes acceleration, constant velocity, deceleration, and dwell phases. To reduce load intensity, we plan to continuously switch cams using the MC_Camin instruction. Currently, we are experiencing jitter peaks ranging from 200 to 300 µs, with the execution of MC_Camin peaking at over 500 µs. This system runs on a Codesys runtime on Linux. We have provided a trace of jitter and cycle time, along with a monitor displaying maximum and minimum values in µs. It would be beneficial to establish reasonable values for smooth motion execution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aand74</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you provide me with the CPU usage data from the task configuration page?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I wish more people could create high-quality trends like that. User aand74 mentioned using an Advantech UTC-216F, which is not a typical home PC but more of an industrial IPC. While this IPC has been used in various applications before, it has not been tested with motion control applications yet. Despite having some industrial-grade electronic components, it still consists of regular PC hardware. The test scenario involves different cam profiles for an upcoming packaging machine, with phases like acceleration, constant velocity, deceleration, and dwell. The goal was to attach multiple cams continuously to reduce the load on the MC_Camin instruction.

There seems to be some jitter issues between 200 and 300 µs, with an execution peak of over 500 µs for MC_Camin on a Codesys runtime Linux system. The solution proposed involves using a Real-Time Linux or a military-grade RTOS like the one from Green Hills. By implementing a FPGA for synchronous and deterministic I/O for all axes simultaneously, delays caused by interrupts or high priority tasks can be minimized.

Additionally, an older video showcases the seamless transition between different cams or splines using an 80186 CPU, demonstrating the potential for modern CPUs with multicore capabilities. The video also highlights a system where a scanner optimizes cuts on logs by following their natural sweep, with the ability to download and execute cam profiles in advance. The question remains regarding the necessity of acceleration and constant velocity sections over a normal move command.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for a real-time solution, consider using CoDeSys RTE for Windows instead of CoDeSys for Linux. CoDeSys RTE offers real-time deterministic performance with minimal jitter (less than 200 microseconds). Many of their tools can be accessed for free, allowing you to test them before committing to a license purchase. Take advantage of this trial period to see if CoDeSys RTE can enhance your application's performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey expressed his admiration for well-crafted trends and emphasized their importance as a fundamental feature of CoDeSys. Despite being slightly more complex to configure than RMCTools, CoDeSys offers a robust system that is underutilized by many. Investing time in understanding and utilizing these trends could greatly benefit users.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ndzied1 mentioned that CoDeSys for Linux is not real-time, but there is a Windows version called CoDeSys RTE that offers real-time deterministic capabilities with a jitter of 200 microseconds. Most of their software can be downloaded for free and tested before purchasing a license. The runtime being referred to is CODESYS Control for Linux SL, which is specifically designed for real-time motion control according to Codesys.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aand74</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dwoodlock inquired about sharing the CPU load displayed in your task configuration view. It appears that Core 1 is consistently dedicated to Softmotion. Feel free to provide insights on the CPU load distribution for optimization purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aand74</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey expressed his admiration for the high-quality trends being created. The cam profiles vary as the parts are positioned in different locations, but not all axes may need to execute the MC_Camin simultaneously. The effectiveness of the MC_Camin implementation is crucial, whether it is for a single axis or multiple axes running the MC_Camin instruction together.

This testing program was designed to assess a worst-case scenario, considering the load intensity of cam appending. The decision to include acceleration, constant velocity, deceleration, and dwell cams was made to ensure the appending process even when the velocity is not zero. Although tests with a dwell-to-dwell move cam were conducted, the results were similar.

In our final machine application, we utilize tools that calculate and generate the cam trajectory for each axis. Therefore, this test served as a performance evaluation under extreme conditions, as the application is still in progress.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aand74</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, user aand74 mentioned that they are using CODESYS Control for Linux SL for runtime, which is recommended by Codesys for real-time motion control applications. However, based on information found in the CoDeSys online help, it is mentioned that the CODESYS Control for Linux SL runtime may not meet hard real-time requirements due to its scheduling method being dependent on the operating system. It is suggested that configuring the operating system with a RT preempt patch may improve time behavior and minimize jitter times. Therefore, adjusting Linux settings could potentially lead to better jitter numbers for smoother performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. What is the maximum allowable jitter for motion control on a CPU controller?
- The maximum allowable jitter for motion control on a CPU controller is typically dependent on the specific application requirements and the precision needed for smooth operation. In general, lower jitter values are preferred for precise motion control applications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are some common causes of jitter in motion control systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - Common causes of jitter in motion control systems can include processing delays in the controller, communication latency between components, fluctuations in system load, and inadequate tuning of control parameters. Identifying and addressing these factors is crucial for minimizing jitter in motion control applications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How does peak jitter of approximately 200µs affect motion control operations?</h4>
<p class='text-muted'><strong>Answer:</strong> - A peak jitter of approximately 200µs can have a noticeable impact on the precision and smoothness of motion control operations, especially in applications that require high accuracy and repeatability. It is important to evaluate whether this level of jitter meets the requirements of the specific motion control application.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What steps can be taken to reduce jitter in motion control systems?</h4>
<p class='text-muted'><strong>Answer:</strong> - To reduce jitter in motion control systems, consider optimizing controller performance, tuning control parameters for improved stability, minimizing communication delays, and implementing real-time monitoring and feedback mechanisms. Additionally, using hardware with higher processing capabilities and lower latency can help improve overall system performance and reduce jitter.</p>
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
