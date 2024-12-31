
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently seeking a more efficient method for sorting my data. In my dataset, which consists of 233 positive integers ranging from 0 to 20160, I am trying to identify the smallest non-zero value, which I will refer to as Ntarget. One way I have managed">
    <meta name="keywords" content="optimizing sorting methods, efficiency, sorting data, dataset, positive integers, non-zero value, ntarget, array manipulation, algorithm efficiency, rungs, grt, srt, array position, sorting algorithm, sorting efficiency, data management, integer">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/optimizing-sorting-methods-for-efficiency">
    <title>Optimizing Sorting Methods for Efficiency | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Optimizing Sorting Methods for Efficiency | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently seeking a more efficient method for sorting my data. In my dataset, which consists of 233 positive integers ranging from 0 to 20160, I am trying to identify the smallest non-zero value, which I will refer to as Ntarget. One way I have managed">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/optimizing-sorting-methods-for-efficiency">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Optimizing Sorting Methods for Efficiency | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently seeking a more efficient method for sorting my data. In my dataset, which consists of 233 positive integers ranging from 0 to 20160, I am trying to identify the smallest non-zero value, which I will refer to as Ntarget. One way I have managed">
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
        "@id": "https://community.oxmaint.com/discussion-forum/optimizing-sorting-methods-for-efficiency"
      },
      "headline": "Optimizing Sorting Methods for Efficiency",
      "description": "Hello everyone, I am currently seeking a more efficient method for sorting my data. In my dataset, which consists of 233 positive integers ranging from 0 to 20160, I am trying to identify the smallest non-zero value, which I will refer to as Ntarget. One way I have managed",
      "author": {
        "@type": "Person",
        "name": "thehoneybadger"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-04",
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
                <h1 class="text-white">Optimizing Sorting Methods for Efficiency</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>45 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1841</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">49</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently seeking a more efficient method for sorting my data. In my dataset, which consists of 233 positive integers ranging from 0 to 20160, I am trying to identify the smallest non-zero value, which I will refer to as Ntarget. One way I have managed to accomplish this is by using rungs 100 and 101 to generate integers and insert them into the array A_Start_Compare[...]. These integers range from -20160 to +20160, but I am specifically interested in the positive integers. Rung 102 helps eliminate the negative integers using a GRT. Ideally, I would like to simply subtract the integer from B_Next_Water[0] and then use SRT. However, the issue arises when the generated numbers after GRT fall between 0 and +20160. My goal is to pinpoint the smallest non-zero number (Ntarget), which can be located anywhere in the array.

To achieve this, I realized I need to position the desired number at either the top (B_Next_Water[232]) or bottom (B_Next_Water[0]) of the SRT so that I can easily reference its exact array position. To accomplish this, I initially manipulate Ntarget by making it the largest number through subtraction from +20160. This enables Ntarget to consistently reside at B_Next_Water[232] after SRT, thereby streamlining the process.

While this method is effective, I am open to exploring alternative approaches for improved efficiency. Any suggestions on how to enhance this process are greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you looking to sort the array, or are you specifically seeking the smallest value greater than zero? It's important to clarify your goal in order to determine the best approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the need to sort the array or just finding the lowest value above 0? I am solely focused on identifying the lowest positive value. Is there a method to achieve this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>TheHoneyBadger is seeking advice on optimizing a code snippet. One suggestion is to reverse the Source A/B parameters in the first SUB element on rung 102, eliminating the need for a second SUB element on the same rung. This adjustment will result in the SUB element on rung 103 becoming SUB 0 B_Next_Water[231(232?)]. 

In the code snippet, when the one-shot detects the rising edge of Test[0].0 on rung 100, it populates a 233-element array with values of 0 and sets B_Next_Water_Calc to 1 to initiate data sampling. If bitOSF_Flashing_500ms is 1 on the same scan cycle, the CTU on the next rung will be triggered to increment Trig_Next_Water.ACC from 0 to 1, leaving a 0 in B_Next_Water[0]. 

However, if bitOSF_Flashing_500ms is 0 when B_Next_Water_Calc is set to 1, a non-negative value may end up in B_Next_Water[0], potentially impacting downstream processes. This discrepancy could lead to the array being filled with a mix of 0s and 1s. Additionally, the inversion of values on rung 102, along with the GRT instruction at the rung's beginning, may be causing confusion.

Overall, reevaluating the logic and parameter configurations in the code can help streamline its functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The honey badger mentioned that Rung 102 effectively removes negative integers with the help of a GRT. In addition, it gets rid of smaller positive numbers when B_Next_Water[0] is non-zero. Click here to learn more about this process!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the comment thread, Dr. Bitboy suggested reversing the Source A/B parameters in the first SUB on rung 102 to streamline the code. By making this adjustment, the need for the second SUB on rung 102 is eliminated, and the SUB on rung 103 is modified to become SUB 0 B_Next_Water[231(232?)].TL;DR: The current code logic may not be functioning correctly. On rung 100, the one-shot trigger detects the rising edge of Test[0].0, populates a 233-element array with values of 0, and sets a value of 1 into B_Next_Water_Calc to initiate data sampling. If bitOSF_Flashing_500ms is 1 on the same scan cycle, the input rung to the CTU on the following rung is activated, incrementing Trig_Next_Water.ACC from 0 to 1. This can lead to a scenario where a non-negative value affects downstream operations if bitOSF_Flashing_500ms is 0 when the value 1 is latched into B_Next_Water_Calc. Adjustments and clarifications are needed to ensure proper functionality and data handling. Feel free to try alternative methods like SRT or FAL to optimize the code further.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One way to efficiently loop through data indirectly is by utilizing a for-next loop structure. Set a temporary tag to a high value, such as 20,000, and initialize the indirect pointer to 0. Proceed to iterate through the array, comparing each element with conditions specified by the temporary tag. Update the tag accordingly, while incrementing the pointer.

For instance, consider an array where elements are as follows: Array[0] = -20, Array[1] = 200, Array[2] = 250, and Array[230] = 10. By implementing the looping method described, the temporary tag will store the lowest value within the range of 1 to 20,000 after each iteration.

Alternatively, if time efficiency is not a concern, you may opt to perform the comparison in a single scan and reset the pointer once it reaches the end of the array. Furthermore, it is possible to enhance this process by storing the pointer of the lowest value found, providing both the actual lowest value and the corresponding array location without the need for sorting. It is essential to note that the provided code examples do not follow the CLX syntax.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the value of A_Start_Compare[...ACC] fluctuating during this ongoing sampling process? What factors determine the value of OSF_Flashing_500ms? Does the process take approximately two minutes (233 samples at 500s intervals) to finish?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky suggested looping through the data indirectly using a for-next loop. By setting the temporary tag to a high value such as 20,000, and the indirect pointer to 0, you can loop through the array, updating the tag if the array value falls within a certain range. This method helps identify the lowest value within the array. Alternatively, you can scan the array once and reset the pointer when reaching the last location. Storing the pointer when a lower value is found can also help determine the lowest value and its corresponding array location without the need for sorting. Although this code may be challenging for some, taking the time to study it can lead to a better understanding of its functionality. Thank you, Parky, for sharing this approach. I will explore it further and reach out if I need clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize a Forward Selection Criterion (FSC) to analyze and compare the elements in the array at position "pos" with the value "nvalue". If the element at position "pos" is greater, update the value of "nvalue" to be that element and proceed with the Forward Selection Criterion (FSC) process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Disregard my previous comment. I just realized that the program is transferring the value from B_Sch_Time_Now[0] to B_Next_Water[0] on rung 100. Can we count on this value being higher than 20159? Oh, never mind - the value of B_Sch_Time_Now[0] is actually 5245 in the visual representation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the coding process, it is important to consider if the value of A_Start_Compare[...ACC] is changing during sampling and what determines the value of OSF_Flashing_500ms. Does the sampling process take about two minutes (233 samples at 500s per sample) to complete?

A_Start_Compare[...ACC] represents the start times for sprinkler timers that are user-entered. While these values can change during scanning, it is unlikely to impact the calculation of Ntarget, the lowest positive value (not 0). Any changes that occur in the middle of the scan are unlikely to affect the scan's purpose unless the changed value coincides with Ntarget, leading to a temporary error lasting up to 230 seconds.

The value of OSF_Flashing_500ms controls a flashing light in the "Flashing Light" Subroutine, producing pulses at intervals like 0.5 seconds among others. This pulse incrementally affects A_Start_Compare[Trig....ACC] and is crucial for comparing multiple start times. As the comparison process involves a substantial number of start times, the subroutine should run smoothly for about 115 seconds. Adjustments in sampling times can help observe changes better for troubleshooting. The goal is to eventually match sampling speed with scanning speed for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for the FSC code? This code is designed to ensure simplicity, speed, and a touch of elegance (an inside joke for our team). While it could be combined onto a single rung, we have separated it into multiple rungs for easier readability. To get started, just flip the Start_Find switch to ON.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Get It Done in ST. Explore Opportunities in ST for Success.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Corsair</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Completing two to three rungs in a single scan cycle can be achieved by increasing the array size of B_Next_Water from 233 to 256. In the first rung, the array is copied to a buffer array, filling B_Next_Water with large negative values, sorting the data, and utilizing a DINT tag called TMPIDX. Moving on to the second rung, the values 256 are assigned to the DINT tags INDEX and DELTA. Finally, the third rung conducts a binary search eight times to find the smallest value in B_Next_Water that is greater than B_Schd_Time_Now[0], ensuring that either INDEX is 256 or the mentioned condition is met.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee shared the FSC code, emphasizing its simplicity, speed, and "elegance" (a nod to an inside joke). While the code could be condensed into a single rung for efficiency, multiple rungs were used for better readability. To start the process, simply switch the Start_Find toggle to ON.

I want to express my gratitude for Robert's elegant solution. I have a strong appreciation for elegant problem-solving approaches. After examining the FSC recommendation, I delved into its functionality by referencing the Rockwell Automation literature. This exploration led me to page 457, where I gained a clear understanding of how the instruction operates.

According to the manual, the instruction will continue iterating until an expression evaluates to True. To achieve this, I arranged the B_Next_Water[...] values in ascending order to pinpoint the first positive value after 0. The .POS feature indicates the position of the Ntarget within the B_Next_Water[...] array.

Despite my efforts, I faced a challenge as the .POS remained at 0 without progressing further. Upon analyzing values greater than 0, the initial values suggested that the expression might be identifying B_Next_Water[0] = 0 as True.

To troubleshoot, I modified the expression to locate the first value exceeding 300. Unfortunately, the .POS still stayed at 0. In response, I adjusted the code, but the FSC process continued to face difficulties processing the data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Corsair recommended: Use Structured Text for this task. Can you provide an example of how structured text should be formatted? Thank you, Corsair.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A key adjustment was made in the sequence of operations by moving the (OTU) B_Next_Water_Calc to run before the SRT instruction, resulting in successful functionality of the FSC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By implementing the three rungs in the same way I did for the FSC, sorting is unnecessary. This streamlined approach simplifies the process and increases efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that there may be a misunderstanding with the term "sort". Sorting involves rearranging the elements in a list to achieve a specific goal related to their values. The FSC solution has been suggested as the best option so far, although it still has some limitations. One issue with this solution is that it may not always execute in a single scan, depending on the position of the last element in the list. This can lead to potential scan order problems unless additional logic is implemented to ensure proper execution. While the FSC solution is elegant and utilizes Rockwell instructions effectively, it may require extra code to address its shortcomings. This can complicate the work of future programmers, especially if they are not familiar with the intricacies of the code. Despite any skepticism towards it, using a well-structured loop can be a viable alternative in any programming language, including RLL. The RLL pseudocode provided offers a clear and concise way to implement the desired functionality within a single scan. It is recommended to include a descriptive comment at the beginning of the logic to enhance readability. Grouping related instructions into logical branches can further improve the organization and clarity of the code, making it easier for others to understand and modify it in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After relocating the (OTU) B_Next_Water_Calc to run before the SRT instruction, the FSC successfully worked. Can anyone explain why moving the OTU had such an impact on the FSC's functionality? I am curious about the reason behind this unexpected outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JLand expressed concerns regarding the concept of sorting in programming. While a sort involves rearranging elements in a list to meet specific criteria, the FSC (First Set Coil) solution has been suggested as the most efficient approach, although it may not always execute in a single scan. This can lead to potential scan order issues unless additional logic is implemented to address these shortcomings. Despite its elegance and utilization of native Rockwell instructions, the FSC solution may require supplementary code to compensate for its limitations, which could complicate future programming efforts, especially in a team environment. For those averse to FSC, a loop structure, such as the one provided in RLL (Relay Ladder Logic) pseudocode, can offer a clear and concise alternative that guarantees single-scan execution.

However, it is worth noting that some individuals may prefer using FOR-NEXT loops over JMP instructions to avoid potential risks associated with infinite loops and watchdog major faults. In cases where data integrity during execution is a concern, performing a CPS (Compare and Populate) operation into a buffer array before processing the data can be a more secure approach. Each programming method has its advantages and drawbacks, and personal preferences may vary. While some find FSC instructions easy to comprehend, others may struggle with manual loop structures due to their non-linear nature. Ultimately, the choice between loops and FSC hinges on individual comfort levels and programming habits within the PLC (Programmable Logic Controller) environment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JLand expressed concern about the FSC solution as it may not always execute in a single scan. Another option is a one-scan solution that delegates the task of disregarding negative differences to the FSC instruction (highlighted with a red arrow).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indirect addressing is a simple concept that you may already be familiar with. For instance, when you access your array[0] (the first tag in the array), you are directly referencing it with the 0 in the brackets. By using a variable such as an integer type tag called My_pointer and setting it to 0, the array[my_pointer] will then point to the first tag in the array. It's important to be cautious and ensure that the pointer doesn't go beyond the bounds of the array. For example, if your array has 20 elements, setting the pointer to 21 would cause a fault as there is no array element at index 21. 

To prevent faults, it is advisable to create your array with one extra element, like 21 elements in this case, but restrict the pointer to only go up to 20. By following this approach, you can avoid any potential faults in the Programmable Logic Controller (PLC) program. 

In the program, the pointer is initially set to 0, corresponding to My_array[0]. During comparisons, My_array[pointer] is accessed, and after checking if the array value is less than the previous one, the pointer is incremented by 1. This process continues through a loop until the for loop is completed.

Additionally, you can track the position of the lowest value in the array by using a second variable. This way, not only do you have the lowest value but also its position within the array. 

Functions like search or sort may employ similar concepts, but they are encapsulated within a function. When analyzing the compiled code of any program, you will observe various jumps and calls to subroutines, similar to implementing jumps and loops.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JLand pointed out a concern with the FSC solution, noting that it may not always execute in a single scan. The key factor for achieving this is having the last element in the list be the only one less than 30000. Otherwise, looping the FSC until DN is set would be necessary. However, the question arises - is completing the FSC in one scan truly crucial? If not, restarting the FSC on each subsequent scan when a new lowest value is found could be a viable solution, using the result only when DN is true.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Furthermore, I assume that the SRT will be completed within a single scan cycle. Additionally, I am uncertain about which XICs (.IN vs. .FD) to choose for the last branch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about structured text examples, thehoneybadger thanked corsair and asked for clarification. The code provided demonstrates how to find the smallest number in an array of DINTs. By looping through the array and comparing each element to the current smallest value, the code efficiently identifies the smallest number present. This example showcases how structured text can be used to perform specific tasks, such as finding the smallest value in a data set.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee stated his agreement with the use of FOR-NEXT loops over JMP instructions to avoid the risk of infinite loops and watchdog major faults. He suggested using a simple CPS into a buffer array for FSC limitations in cases where data changes during execution. Each programmer has their own preferences, with some finding FSC easier to read compared to manual loops. However, using JMP should be done judiciously and only in situations where the entire loop can be easily viewed on a small screen. It is recommended to program it compactly using the SIZE instruction instead of hardcoding the loop's upper bound to prevent getting stuck in the loop due to incorrect modifications. Using FOR in RLL may be cumbersome as it requires abandoning the practice of placing all subroutine calls in the main routine as JSRs. This approach may not be suitable for everyone, but it is worth noting that Rockwell's handling of FOR in RLL can lead to confusion. Each programming language has its own quirks, and outside of RLL, the approach may vary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy noted: P.P.S. In the last branch, the choice between XICs (.IN vs. .FD) may be uncertain. According to the Logix help file, either option should be suitable: - FD: Activated when a match is detected - IN: Activated when a match is detected. Inhibits FSC operation. In other words, if you manually clear the IN bit and then rescan the FSC, it will resume from where it stopped. Both IN and FD are always triggered together by the FSC. Therefore, when evaluating them immediately after running the FSC, it is not critical which one you select. Either a match was found and both were set to true, or no match was found and both were set to false (with DN set to true since we are in ALL mode).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The reason behind the program's success after relocating the OTU is unclear. It seems that the change not only affected the FSC but potentially other aspects as well. It would be necessary to review both programs to fully understand the impact. Additionally, the 500ms OSF is primarily for debugging purposes, allowing for monitoring of difference values as they are loaded into the B_Next_Water array. Is achieving a one-scan solution the end goal here?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to drbitboy's comments, it was mentioned that more changes were made and it would be necessary to review both programs. The 500ms One-Step-Forward (OSF) is primarily for debugging purposes, allowing users to monitor value differences as they are loaded into the B_Next_Water array. Achieving a one-scan solution is the ultimate objective. The most recent version now features a 0.1s scan time, which is currently satisfactory but room for optimization is always welcomed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to the Logix help file documentation, either the FD or IN flags should work in this case. When a match is found, both FD and IN are set together. Manually clearing the IN flag and rescanning the FSC will resume where it left off. Since both flags are evaluated immediately after running the FSC, it doesn't matter which one is used as they will both be true if a match is found, or false if not (with DN being set to true in ALL mode). Resetting the IN flag is unnecessary as we only need the first match, which the SRT handles. The goal is for the FSC to complete in 233 scan cycles once the 2Hz OSF is removed, making @parky's approach the most suitable one.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In programming, DINTs are used to store integers. The code snippet provided initializes the variable 'Smallest' with a very large value. It then goes through an array to find the smallest positive value, updating 'Smallest' if a smaller value is found. Learning this concept is essential for programming proficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce suggested considering the possibility of looping the FSC until DN is setIs it necessary to do it in a single scan? If not, it may be more efficient to restart the FSC on each scan when a new lowest value is found, using the result only when DN is true. While it may seem easier to spread this logic across multiple scans, it can lead to confusion and errors for future developers or system modifications.

It is always best practice to implement logic like this in a single scan to avoid potential issues. By dividing it into multiple scans, there is a risk of unintended errors when assumptions are made about the execution process. It is important to design systems that are robust and do not rely on external fixes to compensate for deficiencies in the code.

In digital signal processing, there is a principle of accepting a wider range of signals while being selective about the signals transmitted. This translates to programming by allowing for some flexibility in input signals while ensuring precision in output signals. By following this principle, you can avoid issues related to assumptions made by other developers in the future.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Honey Badger mentioned the importance of learning to utilize ladder and ST in programming. While they typically lean towards using ladder logic, they recognize the benefits of using ST for looping through processes. Improving proficiency in both languages can enhance efficiency in programming tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ST is a valuable tool for running loops and mathematical operations. An alternative approach is available that eliminates loops and instead relies on scanning. The speed of updates using this method will be determined by the array size and scan time - for instance, updating an array of 100 elements with a scan time of 10ms would take 1 second. The most suitable method depends on the specific requirements for manipulating the data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After analyzing the code closely, I discovered a new appreciation for Structured Text (ST). While I typically use ladder logic, I find that ST is more efficient when iterating through a set of data. In interpreting the code, I found it to be straightforward and easily understandable. It appears to identify the smallest value within an array by looping through each element and comparing it to the current smallest value.

The code snippet provided showcases how the "Smallest" variable is updated whenever a new, smaller value is encountered in the array. By looping through the array elements and comparing them, the final result will be the smallest value within the array.

Considering how to incorporate this code into my own projects, I was reminded of a recent challenge I faced on PLCTalk. Unfortunately, my version of Logix5000 does not support Structured Text, which is a disappointment. It seems that I won't be able to utilize ST in my work today. Oh well, maybe next time!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In post #7, I implemented code that resembles Structured Text (ST) in ladder logic. On most PLCs, the for/next loop is essentially translated into jumps once compiled. Although ladder logic may appear more complex, it is important to understand the differences between ladder logic and ST for various functions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this RSLogix 500 program, we have implemented a method inspired by@parky's approach, while also keeping OP's naming convention in mind. The code closely aligns with the ST FOR-DO-END_DO loop outlined by@dmroeder, with each instruction mapping to a corresponding statement. The scan cycle serves as the loop structure, with additional code included to prevent index-out-of-bounds errors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned that certain sections of the code are designed to prevent errors caused by index-out-of-bounds faults. In hindsight, it would have been beneficial to include two examples - one demonstrating the basic functionality and another showcasing a more secure approach. This precaution is crucial for preventing programming errors and ensuring the reliability of the code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy shared an RSLogix 500 version of a similar approach to @parky's, aiming to maintain OP's naming convention within the code. This method closely aligns most instructions with the statements in an ST FOR-DO-END_DO loop suggested by @dmroeder. However, instead of a traditional loop structure, it leverages the scan cycle. Certain segments of the code are implemented to prevent index-out-of-bounds errors. The example provided earlier in pseudocode mirrors this solution but achieves the same outcome with a single scan while still safeguarding against out-of-bounds array references.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JLand</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy shared a one-scan solution for handling negative differences by utilizing the FSC instruction. By following the red arrow in the attached image, you can see how to implement this technique effectively. When I tested the code, it ran smoothly thanks to this approach. However, I learned from Robert's response #13 that I needed to unlatch the FSC.IN to repeat the test after a True comparison was detected. Additionally, I discovered that FSC continues from its last .POS, prompting me to include a MOV instruction to reset the search each time it is triggered. I appreciate the support and guidance from everyone involved in this process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent forum discussion, the user thehoneybadger shared their experience with Dr.B's code, describing how it worked seamlessly. However, they encountered a problem when FSC.IN became stuck after being engaged. Upon reading response #13 from Robert, the user realized the importance of unlatching the FSC.IN to repeat the test once FSC detected a True comparison. It was also noted that FSC would resume from its last .POS, prompting the user to incorporate a MOV to reset the search whenever triggered. Grateful for the assistance received, the user expressed their thanks to the community.

Additionally, the user suggested resetting the control object on the top branch after the one-shot to reset the .IN and .POS values to 0 as another solution to the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Great job! Keep up the good work.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you able to reset the FSC? I attempted to reset and clear the Control_FSC_Next_Water.IN and Control_FSC_Next_Water.POS files without success. As a next step, I inserted the OTU and MOV files, but it turns out that resetting is much more effective.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Another useful tip for PLC programming involves utilizing the control structures' EN bits for edge detection in SRT and FSC instructions. Instead of using the [ONS] instruction with the memory bit ons[23].30, you can achieve the same result by replacing it with an XIO Control_SRT_Next_Water.EN. This simple switch will work just like the original one-shot operation, making your programming more efficient and streamlined.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What is the goal of the sorting process described in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The goal is to identify the smallest non-zero value, referred to as Ntarget, from a dataset of 233 positive integers ranging from 0 to 20160.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How is the sorting process currently being conducted in the dataset?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The process involves generating integers in rungs 100 and 101 and inserting them into the array A_Start_Compare[], eliminating negative integers in rung 102 using a GRT, and manipulating Ntarget to position it at either the top (B_Next_Water[232]) or bottom (B_Next_Water[0]) of the SRT.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: What issue arises when the generated numbers fall within the range of 0 to +20160 after the GRT filter?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue arises when the generated numbers fall within this range, making it challenging to pinpoint the smallest non-zero number (Ntarget) in the array.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: How is the desired number positioned at either the top or bottom of the SRT to simplify referencing its array position?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The desired number (Ntarget) is manipulated to become the largest number through subtraction from +20160, ensuring it consistently resides at B_Next_Water[232] after the SRT operation.</p>
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
