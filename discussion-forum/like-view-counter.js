document.addEventListener('DOMContentLoaded', () => {
    const counterElement = document.getElementById('counter');
    const resetButton = document.getElementById('resetButton');
    const COUNT_KEY = 'page_counter';
    const TIMESTAMP_KEY = 'last_visit_timestamp';
    // const TWO_MINUTES = 2 * 60 * 100; // 2 minutes in milliseconds
    const TWO_MINUTES = 30 * 1000; // 30 sec in milliseconds
    const DEFAULT_COUNT = 100;

    let count = localStorage.getItem(COUNT_KEY);
    let lastVisitTimestamp = localStorage.getItem(TIMESTAMP_KEY);

    // Initialize count to 100 if it's not already set
    if (count === null) {
        count = DEFAULT_COUNT;
    } else {
        count = parseInt(count);
    }

    const now = new Date().getTime();

    if (lastVisitTimestamp === null || now - lastVisitTimestamp > TWO_MINUTES) {
        count += 1;
        localStorage.setItem(COUNT_KEY, count);
        localStorage.setItem(TIMESTAMP_KEY, now);
    }

    counterElement.textContent = formatNumber(count);

    // Reset counter on button click
    resetButton.addEventListener('click', () => {
        count = DEFAULT_COUNT;
        localStorage.setItem(COUNT_KEY, count);
        localStorage.removeItem(TIMESTAMP_KEY);
        counterElement.textContent = formatNumber(count);
    });

    function formatNumber(num) {
        if (num >= 1000000) {
            return (num / 1000000).toFixed(1).replace(/\.0$/, '') + 'M';
        }
        if (num >= 1000) {
            return (num / 1000).toFixed(1).replace(/\.0$/, '') + 'K';
        }
        return num;
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const likeButton = document.getElementById('likeButton');
    const likeCountElement = document.getElementById('likeCount');
    const LIKE_KEY = 'liked_post';
    const COUNT_KEY = 'total_likes';
    const DEFAULT_LIKE = 5;

    let totalLikes = localStorage.getItem(COUNT_KEY);
    let isLiked = localStorage.getItem(LIKE_KEY) === 'true';

    if (totalLikes === null) {
        totalLikes = DEFAULT_LIKE;
        // totalLikes = 0;
    } else {
        totalLikes = parseInt(totalLikes);
    }

    if (isLiked) {
        likeButton.classList.add('liked');
        // likeButton.textContent = 'Liked';
        likeButton.style.color = 'red';
    }

    updateLikeCount();

    likeButton.addEventListener('click', () => {
        if (isLiked) {
            totalLikes -= 1;
            localStorage.setItem(LIKE_KEY, 'false');
            likeButton.classList.remove('liked');
            // likeButton.textContent = 'Like';
            likeButton.style.color = 'white';
        } else {
            totalLikes += 1;
            localStorage.setItem(LIKE_KEY, 'true');
            likeButton.classList.add('liked');
            // likeButton.textContent = 'Liked';
            likeButton.style.color = 'red';
        }

        isLiked = !isLiked;
        localStorage.setItem(COUNT_KEY, totalLikes);
        updateLikeCount();
    });

    function updateLikeCount() {
        likeCountElement.textContent = `${formatNumber(totalLikes)} `;
        // likeCountElement.textContent = `${formatNumber(totalLikes)} Likes`;
    }

    function formatNumber(num) {
        if (num >= 1000000) {
            return (num / 1000000).toFixed(1).replace(/\.0$/, '') + 'M';
        }
        if (num >= 1000) {
            return (num / 1000).toFixed(1).replace(/\.0$/, '') + 'K';
        }
        return num;
    }
});

document.getElementById("author-question-header").addEventListener("click", function () {
    var moreReplies = document.getElementById("author-question");
    if (moreReplies.style.display === "none") {
        moreReplies.style.display = "block";
    } else {
        moreReplies.style.display = "none";
    }
    updateReplyCounts();
});