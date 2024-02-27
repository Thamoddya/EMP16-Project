

var swiper = new Swiper(".mySwiper", {
    slidesPerView: "1.5",
    centeredSlides: true,
    spaceBetween: 30,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop: true,
});



//JavaScript

OrgChart.templates.myTemplate = Object.assign({}, OrgChart.templates.ana);
OrgChart.templates.myTemplate.size = [125, 170];
OrgChart.templates.myTemplate.node = '<rect x="0" y="0" height="170" width="125" fill="#ffff" stroke-width="1" stroke="#000" rx="5" ry="5"></rect>';
OrgChart.templates.myTemplate.field_0 = '<text data-width="100" data-text-overflow="multiline" style="font-size: 20px;font-weight: bold;" fill="#2D2D2D" x="62.5" y="85" text-anchor="middle">{val}</text>';
OrgChart.templates.myTemplate.field_1 = '<text data-width="110" data-text-overflow="multiline"  style="font-size: 14px;" fill="#2D2D2D" x="62.5" y="132" text-anchor="middle">{val}</text>';
OrgChart.templates.myTemplate.img_0 = '<clipPath id="{randId}">' +
    '<circle cx="60" cy="37" r="30"></circle>' +
    '</clipPath>' +
    '<image preserveAspectRatio="xMidYMid slice" clip-path="url(#{randId})" xlink:href="{val}" x="30" y="7"  width="60" height="60"></image>';
OrgChart.templates.myTemplate.plus = '<circle cx="15" cy="15" r="15" fill="#57B6F1" stroke="#ffffff" stroke-width="1"></circle>'
    + '<line x1="4" y1="15" x2="26" y2="15" stroke-width="1" stroke="#ffffff"></line>'
    + '<line x1="15" y1="4" x2="15" y2="26" stroke-width="1" stroke="#ffffff"></line>';
OrgChart.templates.myTemplate.minus = '<circle cx="15" cy="15" r="15" fill="#37D8BF" stroke="#ffffff" stroke-width="1"></circle>'
    + '<line x1="4" y1="15" x2="26" y2="15" stroke-width="1" stroke="#ffffff"></line>';

var editForm = function () {
    this.nodeId = null;
};

editForm.prototype.init = function (obj) {
    var that = this;
    this.obj = obj;
    this.editForm = document.getElementById("editForm");
    this.imgInput = document.getElementById("img");
    this.nameInput = document.getElementById("name");
    this.titleInput = document.getElementById("title");
};

editForm.prototype.show = function (nodeId) {
    this.nodeId = nodeId;
    var left = document.body.offsetWidth / 2 - 150;
    this.editForm.style.left = left + "px";
    var node = chart.get(nodeId);
    this.imgInput.src = node.img ? node.img : "#";
    this.nameInput.innerHTML = node.name ? node.name : "";
    this.titleInput.innerHTML = node.title ? node.title : "";
    this.editForm.style.display = "block";
    OrgChart.animate(this.editForm, {opacity: 0}, {opacity: 1}, 300, OrgChart.anim.inOutSin);
};

editForm.prototype.content = function (id, detailsMode, dontAnim, width, dontRenderButtons) {
    var div = document.createElement('div');
    div.innerHTML = document.getElementById('editForm').innerHTML;
    div.innerHTML += '<style>#close{display:none !important;}</style>';
    return {element: div, focusId: '', title: '', shareText: ''};
};

editForm.prototype.hide = function (showldUpdateTheNode) {
    this.editForm.style.display = "none";
    this.editForm.style.opacity = 0;
};

var chart = new OrgChart(document.getElementById('tree'), {
    mode: 'dark',
    mouseScrool: OrgChart.action.ctrlZoom,
    toolbar: {
        zoom: true,
    },
    enableSearch: false,
    template: "myTemplate",
    nodeBinding: {
        field_0: "name",
        field_1: 'title',
        img_0: "img",
    },
    clinks: [
        {from: 1, to: 2, template: 'blue' },
        {from: 2, to: 1, template: 'blue' },
        {from: 5, to: 1, template: 'yellow' },
        {from: 8, to: 5, template: 'orange' },
        {from: 4, to: 8, template: 'orange' },
        {from: 7, to: 6, template: 'orange' },
    ],
    editUI: new editForm()
});

chart.load([
    {
        id: 1,
        name: "Bamidu Jayakodi",
        title: "CEO & Founder",
        img: "../images/home/bamidu.jpg",
        stroke_color: '#FFFFFF',
    },
    {
        id: 2,
        name: "Thamoddya Rashmitha",
        title: "CTO & Founder",
        img: "../images/home/thamoddya.jpg",
        stroke_color: '#FFFFFF',
    },
    {
        id: 3,
        pid: 1,
        name: "Shehan Hansaka",
        title: "CLO",
        img: "../images/home/shehan.jpg",
        stroke_color: '#FFFFFF',
    },
    {
        id: 4,
        pid: 1,
        name: "Rishika Mandakini",
        title: "CFO & CTSM",
        img: "../images/home/rishika.jpg",
        stroke_color: '#FFFFFF',
    },
    {
        id: 5,
        pid: 2,
        name: "Didul Adeesha",
        title: "UI/UX Designer & CMO",
        img: "../images/home/didul.jpg",
        stroke_color: '#FFFFFF',
    },
    {
        id: 6,
        pid: 1,
        name: "Mohan Chanaka",
        title: "CHRO",
        img: "../images/home/mohan.jpg",
        stroke_color: '#FFFFFF',
    },
    {
        id: 7,
        pid: 2,
        name: "Supun J.",
        title: "QA & CHRO",
        img: "../images/home/supun.jpg",
        stroke_color: '#FFFFFF',
    },
    {
        id: 8,
        pid: 1,
        name: "Kalana Didulanga",
        title: "CTSM & CMO",
        img: "../images/home/kalana.jpg",
        stroke_color: '#FFFFFF',
    },
]);

document.getElementById('editForm').addEventListener('click', function (e) {
    e.preventDefault();
    chart.exportPDFProfile({
        id: chart.editUI.nodeId,
    });
    chart.editUI.hide();
})

