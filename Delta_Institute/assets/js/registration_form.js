const form = document.querySelector("form"),
nextBtn1 = form.querySelector(".nextBtn1"),
nextBtn2 = form.querySelector(".nextBtn2"),
backBtn1 = form.querySelector(".backBtn1"),
backBtn2 = form.querySelector(".backBtn2"),
allInput1 = form.querySelectorAll(".first input");
allInput2 = form.querySelectorAll(".second input");

nextBtn1.addEventListener("click", () => {
allInput1.forEach(input => {
    if (input.value != "") {
        form.classList.add('secActive');
    } else {
        form.classList.remove('secActive');
    }
})
})

nextBtn2.addEventListener("click", () => {
allInput2.forEach(input => {
    if (input.value != "") {
        form.classList.add('thiActive');
    } else {
        form.classList.remove('thiActive');
    }
})
})

backBtn1.addEventListener("click", () => form.classList.remove('secActive'));
backBtn2.addEventListener("click", () => form.classList.remove('thiActive'));