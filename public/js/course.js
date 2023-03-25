let page = document.body.id;
let title;
const addCourse = () => {
    const btn = Array.from(document.getElementsByClassName("btn"));
    const cards = Array.from(document.getElementsByClassName("card-text"));
    let title = "";
    let titleId = 0;
    btn.forEach((item) => {
        item.addEventListener("click", () => {
            item.style.backgroundColor = "green";
            item.innerHTML = "Enrolled Successfully";
            item.classList.add("newBtnStyle");
            cards.forEach((card) => {
                if (item.previousElementSibling.innerHTML == card.innerHTML) {
                    titleId = card.previousElementSibling.innerHTML;
                    const val = document.getElementById("title-id");
                    val.value = titleId;
                    let value = val.value;
                    console.log(titleId);
                    console.log(`Value is ${value}`);
                    title =
                        card.previousElementSibling.previousElementSibling
                            .innerHTML;
                    function setCookie(name, value, minutes) {
                        const expirationDate = new Date();
                        expirationDate.setTime(
                            expirationDate.getTime() + minutes * 60 * 1000
                        );
                        const expires =
                            "expires=" + expirationDate.toUTCString();
                        document.cookie =
                            name + "=" + value + ";" + expires + ";path=/";
                    }

                    // Set the cookie
                    setCookie("enrolledCourse", titleId, 1);
                    // window.location.assign("{{ url('/home') }}");
                }
            });
        });
    });
};
const addCourseToHome = () => {
    const home = document.querySelector(".bottom-container");
    let courseShow;
    if (home) {
        courseShow = document.createElement("div");
        courseShow.className = "subjects bg-dark text-light text-center h4";
        courseShow.innerHTML = title;
        document.body.appendChild(courseShow);
    }
};
switch (page) {
    case "courses":
        addCourse();
        break;
    case "home":
        addCourseToHome();
        break;
}
