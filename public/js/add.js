const article = document.getElementById('post-article');
const member = document.getElementById('post-member');
const merch = document.getElementById('post-merch');
const buttonArticle = document.getElementById('post-article-button');
const buttonMember = document.getElementById('post-member-button');
const buttonMerch = document.getElementById('post-merch-button');
let storyPictures = [];
let removedStoryPictures = [];

const storyPhotoInputs = document.getElementById('story-photos-input')

function removeSinglePicture(inputId) {
    document.getElementById(inputId).value = null;
    document.getElementById(inputId).dispatchEvent(new Event('change', {bubbles: true}));
}

function multipleInputListener() {
    document.getElementById('story-photos-input').addEventListener('change', () => {
        const element = document.getElementById('story-photos-input');
        if (element.value !== null || element.value !== '') {
            const displayElement = document.getElementById("display-pictures");
            displayElement.innerHTML = "";

            for (let i = 0; i < element.files.length; i++) {
                let fileName = checkFileName(element.files[i].name);
                displayElement.innerHTML += '<div id="story-display" class="row animate__animated animate__fadeIn">' +
                    '<div class="col-lg-5 col-10 mx-5 mb-4" style="border-radius: 20px;background-color: white;">' +
                    '<div class="column">' +
                    '<img style="width: 100%;" src="{{asset(\'assets/image.png\')}}" alt="Avatar"></div>' +
                '<div class="column"' +
                'style="display:flex; height: 100%;justify-content: center;align-items: center;">' +
                '<h5 class="card-title"><b>' + fileName + '</b></h5></div>' +
                '</div>' +
                '</div>'
            }
        }
    })
}

function singleInputListener(inputId, labelId, displayId, photoNameId) {
    document.getElementById(inputId).addEventListener('change', () => {
        const inputElement = document.getElementById(inputId);

        if (inputElement.value === null || inputElement.value === '') {
            document.getElementById(labelId).hidden = false;
            document.getElementById(displayId).hidden = true
        } else {
            const fileName = checkFileName(inputElement.files[0].name)
            document.getElementById(labelId).hidden = true;
            document.getElementById(displayId).hidden = false
            document.getElementById(photoNameId).innerHTML = fileName
        }
    })
}

function checkFileName(fileName) {
    const temp = fileName.split('.');
    if (temp[0].length > 8) {
        return temp[0].slice(0, 7) + '_.' + temp[1];
    }

    return fileName;
}

function removePicture(id) {
    document.getElementById(id).value = null;
    document.getElementById(id).dispatchEvent(new Event('change', {bubbles: true}));
}

member.style.display = "none";
merch.style.display = "none";
buttonArticle.onclick = function () {
    article.style.display = "block";
    member.style.display = "none";
    merch.style.display = "none";
}
buttonMember.onclick = function () {
    merch.style.display = "none";
    member.style.display = "block";
    article.style.display = "none";
}
buttonMerch.onclick = function () {
    merch.style.display = "block";
    member.style.display = "none";
    article.style.display = "none";
}

document.querySelectorAll(".drop-zone__input").forEach(inputElement => {
    const dropZoneElement = inputElement.closest('.drop-zone');

    dropZoneElement.addEventListener("click", e => {
        inputElement.click();
    });

    inputElement.addEventListener("change", e => {
        if (inputElement.files.length) {
            updateThumbnail(dropZoneElement, inputElement.files[0]);
        }
    })

    dropZoneElement.addEventListener("dragover", e => {
        e.preventDefault();
        dropZoneElement.classList.add('drop-zone--over');
    });

    ["dragleave", "dragend"].forEach(type => {
        dropZoneElement.addEventListener(type, e => {
            dropZoneElement.classList.remove("drop-zone--over");
        })
    })

    dropZoneElement.addEventListener("drop", e => {
        e.preventDefault();
        if (e.dataTransfer.files.length) {
            inputElement.files = e.dataTransfer.files;
            updateThumbnail(dropZoneElement, e.dataTransfer.files[0])
        }
        dropZoneElement.classList.remove('drop-zone--over');
    });
});

function updateThumbnail(dropZoneElement, file) {
    let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");
    if (dropZoneElement.querySelector(".drop-zone__prompt")) {
        dropZoneElement.querySelector(".drop-zone__prompt").remove();
    }
    if (!thumbnailElement) {
        thumbnailElement = document.createElement("div");
        thumbnailElement.classList.add("drop-zone__thumb");
        dropZoneElement.appendChild(thumbnailElement);
    }
    thumbnailElement.dataset.label = file.name;

    if (file.type.startsWith("image/")) {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => {
            thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
        }
    } else {
        thumbnailElement.style.backgroundImage = null;
    }
}

// Setup a listener on some inputs
singleInputListener('user-photo', 'user-photo-button', 'user-photo-display', 'user-photo-name');

multipleInputListener();
