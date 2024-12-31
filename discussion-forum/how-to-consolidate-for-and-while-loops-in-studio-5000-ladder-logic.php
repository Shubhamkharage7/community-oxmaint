
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Is it possible to consolidate the following ladder logic into a single ladder in order to integrate it with additional ladder code and create an AOI? I have been attempting to do so without success. The current FOR instruction calls a separate routine, which is not compatible with creating">
    <meta name="keywords" content="consolidate for and while loops, studio 5000 ladder logic, ladder logic integration, aoi creation, routine compatibility, alternative ladder logic approach, counting alarmed bits, alarm buffer, element manipulation, bit count">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-consolidate-for-and-while-loops-in-studio-5000-ladder-logic">
    <title>How to Consolidate For and While Loops in Studio 5000 Ladder Logic | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Consolidate For and While Loops in Studio 5000 Ladder Logic | Oxmaint Community">
    <meta property="og:description" content="Is it possible to consolidate the following ladder logic into a single ladder in order to integrate it with additional ladder code and create an AOI? I have been attempting to do so without success. The current FOR instruction calls a separate routine, which is not compatible with creating">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-consolidate-for-and-while-loops-in-studio-5000-ladder-logic">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Consolidate For and While Loops in Studio 5000 Ladder Logic | Oxmaint Community">
    <meta name="twitter:description" content="Is it possible to consolidate the following ladder logic into a single ladder in order to integrate it with additional ladder code and create an AOI? I have been attempting to do so without success. The current FOR instruction calls a separate routine, which is not compatible with creating">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-consolidate-for-and-while-loops-in-studio-5000-ladder-logic"
      },
      "headline": "How to Consolidate For and While Loops in Studio 5000 Ladder Logic",
      "description": "Is it possible to consolidate the following ladder logic into a single ladder in order to integrate it with additional ladder code and create an AOI? I have been attempting to do so without success. The current FOR instruction calls a separate routine, which is not compatible with creating",
      "author": {
        "@type": "Person",
        "name": "TheWaterboy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-08",
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
                <h1 class="text-white">How to Consolidate For and While Loops in Studio 5000 Ladder Logic</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>26 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1521</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">342</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Is it possible to consolidate the following ladder logic into a single ladder in order to integrate it with additional ladder code and create an AOI? I have been attempting to do so without success. The current FOR instruction calls a separate routine, which is not compatible with creating an AOI as it can only have one routine. I am struggling to come up with an alternative approach in ladder logic.

Code:
// Counting Alarmed Bits
AlarmBitsTrue:=0;
For I := 0 to (NumOfArrayWords-1) DO
   Element :=Alarm_Buffer[I];
	While (Element <> 0) do
		Element := (Element & (Element -1)); 
		AlarmBitsTrue := AlarmBitsTrue +1;
	end_while; 
end_for;
	BitCount :=	AlarmBitsTrue;
If (BitCount > 0) then
	AlarmPresent:=1;
else
	AlarmPresent:=0;
end_if;</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Nested loops should be avoided in an AOI. If you need to count the number of high bits in an array of words, consider using a FAL in INC mode. This will allow you to move each array element into a temporary word during each scan. Then, use a FBC instruction on the temporary word to determine the number of high bits. Keep accumulating the results until the FAL process is complete.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>How does this version compare? Please note that this example is based on v36 and features the latest "updated" instruction mnemonics.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to implement the code in an AOI? Are you looking for the number of activated bits? If not, simply verify if the DINT is not equal to zero. However, if you do require a count of the bits activated, you can refer to this Reddit thread.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>destination unknown</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize the concept of AOI (Arithmetic Operation Instructions) to invoke other AOIs. Build an AOI named ArrayCountBits32 containing specific code, then instantiate this AOI locally within your external AOI and invoke it. It's worth noting that there are optimized algorithms available for counting bits without the need for loops. For more information, you can refer to this discussion on Stack Overflow: https://stackoverflow.com/questions/109023/count-the-number-of-set-bits-in-a-32-bit-integer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>"Are you in need of counting the number of set bits? If not, simply verify if the DINT is not equal to zero. Another option is to utilize an FSC to determine if any bits are set within an array of words."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
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
            <p>While loops in ladder programming, specifically using the JMP-LBL instruction, can technically be implemented but is generally discouraged due to its negative impact on program scan time and the possibility of triggering watchdog timers. However, in cases where it is absolutely necessary, I will program it in a way that ensures the logic within the loop is only scanned once during every program scan cycle to optimize performance and prevent any potential issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AllSincere is grateful for the assistance received, especially from @ASF - Thank you! Today, I will be testing the ladder suggested and assess its effectiveness. The reason for needing everything in one AOI is because only one routine is allowed in an AOI. Regarding the suggestion of using nested loops in an AOI, the limitations are being questioned. Despite considering options like the FOR operator and the N & (N-1) test for fast bit counting, challenges were faced. Experimenting with the FAL idea resulted in significantly higher scan times compared to the ST code. If the ladder setup proves unsuccessful, optimization techniques will be explored. Integrating one AOI within another is preferred over using two separate AOIs for functions that always work together. While counting bits is not essential at the moment, it may prove useful in the future for alerting users about multiple alarms set.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For an easy FAL technique that doesn't involve counting bits, consider using a different AOI if bit counting is necessary. This approach offers a clean and efficient solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>destination unknown</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I will attempt the test array once more, which is a DINT[4] with a length of 127 if it works on contiguous memory. It is puzzling that it took significantly longer, considering its specialized design for this task. However, that was the outcome during my previous attempt.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to achieving high speed in a Programmable Logic Controller (PLC), one of the top methods to consider is using the following code: Code: xic add DINT.0 -> Count+1 DINT.1 -> Count+1 and so on. This method is known for its efficiency and quick execution in PLC programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>destination unknown</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When working with a DINT[4] test array, it is important to consider that .LEN should reflect the number of elements in the array. If the array size is limited to four elements, there is no issue in employing a brute force approach to reach a solution. It is crucial to remember that for contiguous memory operation, the .LEN parameter must accurately represent the array's size.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>destination unknown</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF recently examined a programming issue using v36 and its updated instruction mnemonics. However, there seems to be a glitch in the counting process - it halts when encountering a DINT with no bits set. For example, setting bits in array[1], array[2], and array[3] won't be counted until a bit in array[0] is set. The reason behind this behavior is being investigated. Stay tuned for updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As advised by Destination_Unknown, when focusing solely on 4 DINTS, employing the brute force method of 129 lines may prove to be most efficient. This approach involves incrementing the count for each individual bit within the 4 DINTS, starting from Dint[0].0 up to Dint[3].31.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>g.mccormick</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is unlikely to be the root cause, but it seems unnecessary to have theEQU Element 0on the lower branch. Additionally, an Element value of -32768 can result in an underflow, potentially triggering a trap or PLC fault which should be prevented. Perhaps these values should be treated as unsigned integers?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One user, drbitboy, noted that setting a value of -32768 inElement can result in an underflow, potentially triggering a trap or PLC fault that needs to be addressed. It is important to be aware that a 16-bit signed integer can accommodate values ranging from -32768 to 32767. Be cautious of potential underflow issues when working with these values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The modified code in ASF, with a slight change in the JMP location, runs smoothly and efficiently. While not as quick as the ST, it comes very close. I integrated it with the necessary logic, created an AOI, and achieved excellent results. It would be a bonus if I could extract the description field from a Logix PLC tag within the PLC logic, but unfortunately, that capability is not currently available. Grateful for the support provided by everyone.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Joseph_e2 explained that a 16-bit signed integer has a range of -32768 to 32767. Subtracting 1 from -32768 would lead to an overflow. If a 16-bit signed integer has a value of 1 in bit 15, it can also result in subtracting 1 from -32768. Upon further examination, it appears that these are actually DINTs, which still encounter the same issue if any bit 31 values are 1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy mentioned that ASF's code, with a slight tweak to the JMP location, is very efficient and fast. While it may not match the speed of the ST completely, it comes close. I integrated it with the necessary logic, created an AOI, and it functions flawlessly. It would be ideal if I could extract the description field from a Logix PLC tag directly within the PLC logic. That would truly be the icing on the cake, though unfortunately, it's not currently possible. Many thanks to everyone for the assistance. This should result in a slightly improved performance, although the difference may not be significant enough to measure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the effort of optimizing code worth it? Like many developers, I strive to make my code as efficient as possible, partly due to my own perfectionism. After considering your feedback, I realize there are areas that need improvement.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There is plenty of juice left for those with OCD tendencies as the comparison of four efficient bit-counting algorithms is still in progress, generating valuable data for analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The results obtained from testing a MicroLogix 1100 may not necessarily be applicable to a Logix/Studio 5000 setting. The test involved using the S:4/S:35 10kHz timer to run 1000 iterations of four 32-bit signed integers (MicroLogix Longs). Each of the four Longs were populated with consecutive bytes of the same value, ranging from 0x00_00_00_00 to 0xFF_FF_FF_FF. Various bit counting algorithms were implemented and analyzed, including CONTRL (control group), SUBAND (Kernighan's method), PARALLEL (parallel counting), XIC_ (bit checking using /[INDEX[ notation), and LOOKUP (precalculated bit counting for all possible byte values). These algorithms were compared based on their efficiency in counting 1-valued bits.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I optimized the code by implementing Kernighan's Way algorithm, resulting in a 6% reduction in processing time. This coding technique has significantly improved efficiency and speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the Benefits of Unrolling: Why You Should Unravel Today!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy inquired about unrolling loops for optimization. Unrolling loops can improve performance in code execution by eliminating loop index comparisons and implicit jumps (JMPs). This technique is commonly used by optimizing compilers when the number of iterations is known. However, unrolling can also be applied in certain cases when the number of iterations is not known. In the context of our example, theNEQ element 0 was used for comparison, resulting in a few microseconds saved per Long data type. The unrolled version of a loop replaces the loop structure with a series of individual statements, which can lead to enhanced execution speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I understand now. I'll send you the remaining code. Your attention to detail is much more pronounced than mine.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheWaterboy remarked, "Your obsessive-compulsive disorder (OCD) seems more severe than mine." This statement is followed by a confused "Thanks?" in response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can I consolidate for and while loops in Studio 5000 Ladder Logic to create an AOI?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to consolidate for and while loops into a single ladder logic in Studio 5000 to integrate it with additional code and create an AOI. However, you may face challenges if the current FOR instruction calls a separate routine. You need to find an alternative approach to consolidate the loops effectively.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is the current ladder logic not compatible with creating an AOI?</h4>
<p class='text-muted'><strong>Answer:</strong> - The current logic is not compatible with creating an AOI because it calls a separate routine within the FOR instruction. An AOI can only have one routine, so the logic needs to be adjusted to fit within this constraint for successful integration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a different approach to consolidating for and while loops in Studio 5000 Ladder Logic?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can explore alternative approaches to consolidating the loops, such as restructuring the logic flow within a single ladder, avoiding separate routines, and ensuring compatibility with creating an AOI. Adapting the logic to meet the requirements of an AOI is crucial for successful integration.</p>
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
