function countdown(id, endTime) {
    const countDownElement = document.getElementById(id);
    const daysSpan = countDownElement.querySelector(`#days${id.charAt(id.length - 1)}`);
    const hoursSpan = countDownElement.querySelector(`#hours${id.charAt(id.length - 1)}`);
    const minutesSpan = countDownElement.querySelector(`#minutes${id.charAt(id.length - 1)}`);
    const secondsSpan = countDownElement.querySelector(`#seconds${id.charAt(id.length - 1)}`);

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = endTime - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        daysSpan.textContent = days < 10 ? `0${days}` : days;
        hoursSpan.textContent = hours < 10 ? `0${hours}` : hours;
        minutesSpan.textContent = minutes < 10 ? `0${minutes}` : minutes;
        secondsSpan.textContent = seconds < 10 ? `0${seconds}` : seconds;

        if (distance < 0) {
            clearInterval(timerInterval);
            daysSpan.textContent = "00";
            hoursSpan.textContent = "00";
            minutesSpan.textContent = "00";
            secondsSpan.textContent = "00";
        }
    }

    const timerInterval = setInterval(updateCountdown, 1000);
    updateCountdown();
}

const endDate1 = new Date().getTime() + (2 * 24 * 60 * 60 * 1000); // 2 days from now
const endDate2 = new Date().getTime() + (2 * 24 * 60 * 60 * 1000); // 2 days from now

countdown('countdown1', endDate1);
countdown('countdown2', endDate2);