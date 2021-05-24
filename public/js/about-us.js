let down1 = document.getElementById("down-1");
let down2 = document.getElementById("down-2");
let down3 = document.getElementById("down-3");
let down4 = document.getElementById("down-4");
let down5 = document.getElementById("down-5");
let x1 = document.getElementById("header-FAQ-1-a");
let x2 = document.getElementById("header-FAQ-2-a");
let x3 = document.getElementById("header-FAQ-3-a");
let x4 = document.getElementById("header-FAQ-4-a");
let x5 = document.getElementById("header-FAQ-5-a");
let c1 = document.getElementById("header-FAQ-1");
let c2 = document.getElementById("header-FAQ-2");
let c3 = document.getElementById("header-FAQ-3");
let c4 = document.getElementById("header-FAQ-4");
let c5 = document.getElementById("header-FAQ-5");
let shownUser = null;

x1.style.display = "none";
x2.style.display = "none";
x3.style.display = "none";
x4.style.display = "none";
x5.style.display = "none";
down1.style.display = "none";
down2.style.display = "none";
down3.style.display = "none";
down4.style.display = "none";
down5.style.display = "none";
let faqExpanded = false;
let expand = document.getElementById("expand");

c1.onclick = function () {
    down1.style.display = "block";
    x1.style.display = "block";
    c1.style.display = "none";
}
c2.onclick = function () {
    down2.style.display = "block";
    x2.style.display = "block";
    c2.style.display = "none";
}
c3.onclick = function () {
    down3.style.display = "block";
    x3.style.display = "block";
    c3.style.display = "none";
}
c4.onclick = function () {
    x4.style.display = "block";
    c4.style.display = "none";
    down4.style.display = "block";
}
c5.onclick = function () {
    x5.style.display = "block";
    c5.style.display = "none";
    down5.style.display = "block";
}

expand.onclick = function () {
    faqButtonStatus()
}

function faqButtonStatus() {
    if (!faqExpanded) {
        faqExpanded = !faqExpanded;
        down1.style.display = "block";
        x1.style.display = "block";
        c1.style.display = "none";
        down2.style.display = "block";
        x2.style.display = "block";
        c2.style.display = "none";
        down3.style.display = "block";
        x3.style.display = "block";
        c3.style.display = "none";
        down4.style.display = "block";
        x4.style.display = "block";
        c4.style.display = "none";
        expand.innerHTML = "Collapse All"
        down5.style.display = "block";
        x5.style.display = "block";
        c5.style.display = "none";
        expand.innerHTML = "Collapse All"
    } else {
        faqExpanded = !faqExpanded;
        down1.style.display = "none";
        x1.style.display = "none";
        c1.style.display = "block";
        down2.style.display = "none";
        x2.style.display = "none";
        c2.style.display = "block";
        down3.style.display = "none";
        x3.style.display = "none";
        c3.style.display = "block";
        down4.style.display = "none";
        x4.style.display = "none";
        c4.style.display = "block";
        down5.style.display = "none";
        x5.style.display = "none";
        c5.style.display = "block";
        expand.innerHTML = "Expand All"
    }
}

window.onclick = function (event) {
    if (event.target === x1) {
        down1.style.display = "none";
        x1.style.display = "none";
        c1.style.display = "block";
    }
    if (event.target === x2) {
        down2.style.display = "none";
        x2.style.display = "none";
        c2.style.display = "block";
    }
    if (event.target === x3) {
        down3.style.display = "none";
        x3.style.display = "none";
        c3.style.display = "block";
    }
    if (event.target === x4) {
        down4.style.display = "none";
        x4.style.display = "none";
        c4.style.display = "block";
        // c4.style.transition = "2s";
    }
    if (event.target === x5) {
        down5.style.display = "none";
        x5.style.display = "none";
        c5.style.display = "block";
    }

    if (x5.style.display === "block"
        && x4.style.display === "block"
        && x3.style.display === "block"
        && x2.style.display === "block"
        && x1.style.display === "block") {
        faqExpanded = false;
        faqButtonStatus()
    }

    if (x5.style.display === "none"
        && x4.style.display === "none"
        && x3.style.display === "none"
        && x2.style.display === "none"
        && x1.style.display === "none") {
        faqExpanded = true;
        faqButtonStatus()
    }
}


function showUser(user) {
    document.getElementById("modal-name").innerHTML = user['name'];
    document.getElementById("modal-position").innerHTML = user['user_positions'].name;
    document.getElementById("modal-description").innerHTML = '"' + user['story'] + '"';
    document.getElementById("modal-profile-picture").src = 'assets/profile/' + user['photo'];
    console.log(user);
}

document.getElementById('about').id = 'this';

$('.carousel').carousel({
    interval: false,
});
