
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! I thought I had everything figured out, but it turns out it wouldnt work. Here is the situation Im dealing with: I am using a 1769-L30ER flow meter with pulse output (100:1 ratio) for a batching process. Thanks to some valuable information on this website, I was">
    <meta name="keywords" content="batch accuracy improvement, on/off valve control, flow meter pulse output, batching process optimization, plc batch correction, sfc and sqi sqo implementation, pulse monitoring system">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/improving-batch-accuracy-with-on-off-valve-control">
    <title>Improving Batch Accuracy with On/Off Valve Control | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Improving Batch Accuracy with On/Off Valve Control | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! I thought I had everything figured out, but it turns out it wouldnt work. Here is the situation Im dealing with: I am using a 1769-L30ER flow meter with pulse output (100:1 ratio) for a batching process. Thanks to some valuable information on this website, I was">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/improving-batch-accuracy-with-on-off-valve-control">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Improving Batch Accuracy with On/Off Valve Control | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! I thought I had everything figured out, but it turns out it wouldnt work. Here is the situation Im dealing with: I am using a 1769-L30ER flow meter with pulse output (100:1 ratio) for a batching process. Thanks to some valuable information on this website, I was">
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
        "@id": "https://community.oxmaint.com/discussion-forum/improving-batch-accuracy-with-on-off-valve-control"
      },
      "headline": "Improving Batch Accuracy with On/Off Valve Control",
      "description": "Hello everyone! I thought I had everything figured out, but it turns out it wouldnt work. Here is the situation Im dealing with: I am using a 1769-L30ER flow meter with pulse output (100:1 ratio) for a batching process. Thanks to some valuable information on this website, I was",
      "author": {
        "@type": "Person",
        "name": "AD-PLC"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-29",
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
                <h1 class="text-white">Improving Batch Accuracy with On/Off Valve Control</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>24 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">895</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">372</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! I thought I had everything figured out, but it turns out it wouldn't work. Here is the situation I'm dealing with: I am using a 1769-L30ER flow meter with pulse output (100:1 ratio) for a batching process. Thanks to some valuable information on this website, I was able to construct this process successfully. However, for a small program I created, I am now focusing on utilizing SFC or SQI SQO.

My objective is simply to mix two ingredients, meeting a preset requirement. While accuracy is not crucial, I am aiming to monitor pulses. The meter will count pulses and once it reaches the desired amount, it will close the valve and make a batch correction to avoid overshooting by "X" gallons on the first run. I want the PLC to automatically adjust this for each new batch.

Initially, I calculated that 100 gallons would require 10,000 pulses (based on the V/V% of calculated amounts per ingredient). I determined the formula as follows: (TargetPulses - TargetOS) = TargetConfirmed (the target at which the valve should close in advance). When the stored pulse count reaches the target, the valve will close. Given that the valve takes about 3 seconds to close, I set a timer for 5 seconds.

To account for any overshoot, I subtracted the PulseCount from the TargetPulses. Then, I transferred that result to TargetOS. Ideally, if the result was zero, the system would correct itself for each batch. For example, if 1000 pulses were counted and the target was also 1000 pulses, the overshoot would be zero. This would signal a restart of the cycle, ensuring accuracy for subsequent batches.

I am wondering if there is anything essential that I may be overlooking in my setup. I have searched for batch controller code or examples, but it seems that most rely on a PID loop with a control valve.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In the second image, is there any logic present to the left of the rung? If not, the RTO will need to be reset on every scan cycle. Additionally, the description of the process may need further clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@drbitboy The batching program combines two liquids, referred to as ingredient 1 and ingredient 2, introduced at different stages of the process. Once the user selects the desired batch amount, ingredient 1 is batched first, followed by ingredient 2. The two ingredients are then mixed in a tank mixer for a specified time period. While the process may seem simple, there are some technical aspects to consider, such as the behavior of the RTO (Real Time Output) function in PLCs.
In my experience, I encountered an issue where the RTO value would reset on every scan if no code was present. This was my first time working with PLCs, but I have a basic understanding of their functions. I initially misunderstood the RTO function, expecting it to retain its value when true without the need for the RES command.
Furthermore, when the batch order is confirmed, a value of 1 is assigned to BatchSeq, triggering the batching process for ingredient one. It's worth noting that this approach may not be the most efficient, and I am actively exploring alternative methods. While some resources suggest this method is acceptable as long as it is concise and well-understood, I acknowledge the potential for complications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I now understand what you were referring to! Indeed, the scan resets each time. Rest assured, I have the batchseq EQU before that specific line. I apologize for any confusion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The RTO will only reset when the accumulator time reaches 3500ms or more, resetting the accumulator without the need for the ONS function. It may be more effective to use TON instead of RTO to avoid issues with aborting operations and not resetting the accumulator time. Instead of comparing the accumulator time to 3500ms, you can preset the timer for 3500ms and use the DN bit to detect when 3.5 seconds have elapsed. This approach involves counting flowmeter pulses for 3.5 seconds after initiating the valve closure command to estimate the overshoot delivery of material. This estimate is then used to adjust the timing of the valve closure on the next cycle to achieve the target amount accurately once the valve is closed. This process is also known as "In-Flight" adjustment to optimize flowmeter pulse counts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When conducting multiple batching processes, one effective method is to install a butterfly valve in the line with a 20mm hole (referred to as the trickle valve). Here's how it works: The trickle valve remains closed initially, then both the main valve and trickle valve are opened. Count the pulses until the quantity reaches the desired setpoint minus a certain volume. At this point, close the trickle valve to slow down the process and get closer to the target setpoint. Additionally, monitor and adjust for over/under dosing levels by incorporating a portion of this into the setpoint, within specified limits. While adding a small bore valve in parallel with the main valve is another option, it wasn't feasible in our case due to physical constraints. A major challenge we encountered was fluctuating water pressure when other equipment was in use, causing variability during the process. Implementing the trickle valve solution proved to be the most effective way to address this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello @drbitboy, thank you for your insights. I am currently contemplating the best way to provide detailed responses. Please excuse any lack of knowledge on my part. 

I do not have a PLC or a prototype set up at the moment, so I am working on this conceptually. I have added a cancel batch button that resets the timer/s, as well as a pause feature. When the system is in a "PAUSE STATE," I aim to retain the stored timing.

Regarding your suggestion to use the DN bit, I now understand its importance. It definitely seems like the right approach. 

I recall reading a discussion (although I can't locate the thread now) about closing the valve once the desired pulses have been reached. The suggestion was to use an RTO timer to calculate any additional pulses accumulated after the valve closes, and to subtract that from the target pulses in the next batch. The term "in-flight" that you mentioned has been very beneficial for my learning process.

From my understanding of previous discussions, if I were to reach the exact desired pulses in a scenario, the calculation would be: [Desired Pulses] - [Target Pulses] = [Target Overshoot], resulting in zero. However, this would lead to overshooting again in subsequent batches. 

I believe it would be more effective to update a value and then use a MOV instruction for the calculated value. For instance, if I calculated an overshoot of 10 gallons in the first batch, that value would be stored for the next batch. If the overshoot in the following batch is 1 gallon, I should subtract a gallon's worth of pulses to ensure the valve closes in time. This process should yield consistent results. If there is an undershoot, the same logic applies to get closer to the target pulses in the next batch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky suggested a clever solution for improving batching processes by incorporating a butterfly valve with a 20mm hole, referred to as a "trickle valve." The process involves closing the trickle valve while keeping the main valve open, monitoring pulses until reaching the desired quantity, then adjusting for accuracy by closing the trickle valve to slow down the flow. Additionally, adjusting for over/under dosing levels can help maintain setpoint accuracy within limits. While a small bore valve in parallel could also be effective, space constraints may be an issue. The main challenge faced was water pressure fluctuations, which this two-stage valve system helped address effectively.

This innovative two-stage shutdown valve system, combining a butterfly valve with a trickle valve, stands out as a unique solution. While a parallel valve setup could also be considered, the physical constraints may impede its implementation. Considering the limitations regarding accuracy, the approach suggested by Parky seems practical and efficient. In a scenario where precision is not a top priority, this method offers a viable alternative to continuous PLC updates for correction factors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective method for In-Flight measurement is to use a counter that resets when the valve is opened, begins counting pulses when the valve is commanded to close, and continues counting as long as pulses are received within a brief timeframe (e.g. 500ms) using a Time-of-Flight sensor. The In-Flight measurement is determined by the number of pulses in the counter when the Time-of-Flight sensor expires. This measurement is then subtracted from the next target measurement to determine the optimal timing for closing the valve.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Initially, our system only included an over/under dosing correction feature. The main issue arose when the supply pressure increased due to limited usage in other vessels, leading to potential overdosing. To address this issue, a trickle valve was implemented. I decided to keep the correction factor in place, but decreased the amount of correction it would apply.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to accurately measure In-Flight data, a reliable method involves using a high-speed counter that resets when the valve opens and starts counting pulses when the command to close the valve is given. By setting a short time period (e.g. 500ms) for counting pulses using a Time-of-Flight (TOF) method, you can ensure accurate measurements. If no pulse is received within the specified time period, the TOF expires and the number of pulses in the counter represents the In-Flight measurement. This measurement can then be subtracted from the next target measurement to determine the optimal timing for closing the valve. Utilizing a high-speed counter card can mitigate any potential issues where pulses are missed or not captured effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Valves typically have consistent closing and opening times, unless there are fluctuations in the supply air or other control actions. If you are following Brian's method and notice variations, it may be due to changes in dosing supply. Make sure to monitor the maximum deviation from the target so that the system does not veer off course significantly. This will help prevent any unexpected deviations in operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky explained that valves typically have consistent closing and opening times, unless there are variations in the supply air or control actions. The fluctuation in dosing supply could be the reason for any deviations when using Brian's method. It is important to set a maximum deviation from the target to prevent significant errors. In this case, the process valve is electrically operated, and the focus should be on adjusting the dosing supply for better control. While accuracy is important, the goal is to create a system that can "self-learn" over time. Unfortunately, finding code examples or references for a batch controller has been challenging, but exploring different computer codes may provide some inspiration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inconsistent dosing supplies can lead to potential errors and inefficiencies in your system. For example, if there is an overdose of 20 counts, trying to adjust by 10 counts may result in an underdose of 30 counts if the supply slows down. It is crucial to calibrate your in-flight range adjustment properly to avoid compounding errors. This is why implementing a trickle feed system can help minimize these issues. Batch controllers can function as high-speed counters or utilize a PID loop to maintain a constant flow rate, along with an adjustable in-flight feature. PID controlled valves are optimal for managing fluctuating flows, but an alternative method could involve drilling a hole in an additional valve to regulate the flow effectively. Despite the pressure changes with a smaller aperture, this technique can help stabilize the flow rate and improve dosing accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe that a more effective approach would be to calculate the offset by subtracting the final total count from the valve-off counts. My method, outlined in the accompanying PDF, involves counting pulses after the valve is turned off until the system comes to a complete stop for estimating in-flight data. I found it necessary to incorporate a fudge factor of 1 count into this estimate. However, some may find this process overly complicated. In LAD 3, we simulate a flowmeter pulse for a (Cv)-fast-opening valve that transitions from fully open to fully closed in approximately 4 seconds (equivalent to 4k scan cycles) in either direction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to drbitboy's suggestion, consider subtracting the final total count from valve-off counts to determine the offset for better accuracy. Refer to the attached PDF for detailed instructions on my method of estimating in-flight pulses by counting pulses after the valve is turned off. A slight adjustment of 1 count was necessary for accurate estimates. The process may seem intricate, but it is essential for LAD 3 flowmeter models, especially for fast-opening valves with a Cv rating. These valves typically take approximately 4 seconds (equivalent to 4k scan cycles) to move between full open and full closed positions in both directions. Feel free to explore this method further and make adjustments as needed. Thank you for expanding our knowledge in this area!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reviewing the information, I will make adjustments and optimize the settings. Thank you for your input! In this system, N7:0 is set as the target number of pulses (50), which includes the in-flight counter C5:1's .ACCumulator. The estimate for in-flight pulse count is determined by Counter C5:0's .PREset, indicating the number of flowmeter pulses needed to close the valve. The calculation involves subtracting the in-flight accumulator from the target number of pulses.

Please disregard Rung 0002, as it is a duplicate of Rung 0004. Rung 0003 controls the Start/Stop Circuit pattern, activating the valve until the counter C5:0 reaches its .PREset. Rung 0004 initializes the system when the one-shot start button is pressed. Rung 0005 counts the in-flight pulses after the valve closure command, while Rung 0006 tallies all pulses.

LAD 3 is a valve and flowmeter pulse simulator, operating on a scan cycle clock. Though minor roundoff errors may occur due to 32-bit REALs, the simulation is generally accurate for testing purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you in need of the flow rate as well? If so, utilizing the flowrate can assist in calculating a preliminary value and shutting the valve before reaching a set quantity. This approach considers system wear and ensures consistent performance even as the pump ages. We successfully applied this technique for batch material charging, achieving a deviation of 0.01 percent or less. By adjusting the variable k to 1.0 or lower, the formula (meter_total + (flowrate * k))= calced_total can be optimized to meet the desired target.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore inquired about the availability of the flow rate data. Utilizing the flowrate information can assist in calculating a pre-act value and closing the valve before reaching the desired quantity. This technique considers system wear and ensures consistent performance as the pump ages. Our team successfully applied this approach for batch charging materials, achieving a deviation of 0.01 percent or less. To calculate the total, the formula used was (meter_total + (flowrate * k))= calced_total***(k =1.0 or lower, adjust k for better accuracy). The anticipated flowrate is approximately 100GPM, depending on system conditions. As a centrifugal pump is utilized, the flowrate may vary during startup and when the quantity is reached. It appears that your method involves a variable process valve and resembles a PID loop value.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>You have the freedom to choose any variable name you prefer for the example provided. This system operates in a discrete on/off manner, based on a measured flow rate of zero total. The steps involved include opening the valve, starting the pump, and waiting for the calculated total to reach the desired total before closing the valve and stopping the pump. If your measured flow rate is around 100 gallons per minute (gpm), it is recommended to begin with a value of k=0.0833.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about flow rate as well? Utilizing the flowrate can help calculate a pre-act value and close the valve before reaching the desired quantity, taking system wear into consideration for long-term target delivery. This method was successfully applied in batch material charging, resulting in a deviation of 0.01 percent or less. When incorporating the formula (meter_total + (flowrate * k) = calced_total), adjust the variable 'k' accordingly to align with the target. Curious about whether the flow rate is based on sensor measurements, pump curve predictions, or time trials? In my experience with batch systems, incorporating pre-acts while using measured flow values has yielded more accurate results compared to relying solely on scale weight measurements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our sensor accurately measures payloads of 30,000 pounds with a variation of only +/- 30 pounds using a Coriolis mass meter. This precise measurement ensures optimal efficiency and reliability in industries that rely on accurate payload readings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During a recent interview, Ken Moore discussed the routine charging process of 30,000 lbs. +/- 30 lbs using a Coriolis mass meter. In addition, micromotion Coriolis meters are utilized for charging blow stills, while standard turbine or ultrasonic flow meters are used for adding catalyst. Click to expand for more information on these measurement techniques commonly used in chemical processing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore inquired about the flow rate and its potential impact on determining a pre-act value for closing the valve before the task is complete. This approach considers system wear and ensures consistent delivery even as the pump wears over time. By using this method for batch charging materials, we consistently achieved a deviation of 0.01 percent or better. Are you curious about how this method was developed or where you can find more information about it? The pre-act method appears to be the top choice, but is there a way to 'recalibrate' if a technician replaces the valve with a different one? Or is it a situation where you are notified if the system is not operating accurately?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the lack of comments provided by drbitboy. The target number of pulses (50) is set as N7:0, which includes the in-flight Counter C5:1's accumulator. The in-flight pulse count estimate is determined by Counter C5:0's preset, which dictates the number of flowmeter pulses required to command the valve closed. To calculate the in-flight pulse count, subtract the accumulator in-flight from the target (N7:0). 

It is important to note that Rung 0002 is a duplicate of Rung 0004 and should be disregarded. Rung 0003 represents the Start/Stop Circuit pattern that controls the valve opening until Counter C5:0 reaches its preset value. This preset value will be lower than the N7:0 target once the initial in-flight estimate is established. Rung 0004 initializes the system when the one-shot start button is pressed. Rung 0005 tracks in-flight pulses after the valve closure command, while Rung 0006 counts all pulses. LAD 3 simulates valve and flowmeter pulses using a basic model with a scan cycle clock. Despite potential roundoff errors from 32-bit REALs, this model is effective for simulation purposes.

The concept of using a pre-act method for batching is gaining popularity. It would be beneficial to test both cases, as it appears similar to other methods used. In your experience, is pre-act a preferred approach for batching with discrete valves? While it may have limitations due to its discrete nature, integrating it into the process workflow makes practical sense. Thank you for sharing your insights and background knowledge on this topic. I look forward to further exploration based on the information provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AD-PLC</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. What is the purpose of using a flow meter with pulse output in a batching process?
- Answer: The flow meter with pulse output is used to monitor pulses and control the flow of ingredients to meet preset requirements in a batching process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How does the PLC system adjust for overshooting in the batching process?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: The PLC system adjusts for overshooting by calculating the difference between the target pulses and the actual pulse count, then making a batch correction to avoid overshooting by a specified amount.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How does the valve control work in the batching process?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: The valve control system closes the valve once the stored pulse count reaches the target amount, with a timer set to ensure proper valve closure time.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific considerations for ensuring accuracy in subsequent batches?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: The system is designed to self-correct for overshooting by adjusting the target pulse count based on the actual pulse count, ensuring accuracy for each new batch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Is there a need for a PID loop with a control valve in this batching process setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: The current setup focuses on utilizing SFC or SQI SQO for mixing two ingredients in a batching process, without the need for a PID loop with a control valve.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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
