function countUpAnimation(element, start, end, duration, suffix) {
      let range = end - start;
      let startTime = null;
  
      function updateCount(timestamp) {
        if (!startTime) {
          startTime = timestamp;
        }
  
        const progress = timestamp - startTime;
        const increment = Math.ceil((progress / duration) * range);
  
        if (progress < duration) {
          const currentValue = Math.min(start + increment, end);
          element.textContent = currentValue + suffix;
          requestAnimationFrame(updateCount);
        } else {
          element.textContent = end + suffix;
        }
      }
  
      requestAnimationFrame(updateCount);
    }
  
    window.onload = function() {
      countUpAnimation(document.getElementById('countUp1'), 0, 75, 2500, 'K+');
      countUpAnimation(document.getElementById('countUp2'), 0, 99, 2000, '%');
      countUpAnimation(document.getElementById('countUp3'), 0, 200, 3000, 'K');
    };