var imgFeature = document.querySelector('.img_feature')
var listImg = document.querySelectorAll('.list_img img')
var prevBtn = document.querySelector('.prev')
var nextBtn = document.querySelector('.next')

var currentIndex = 0;
function updateImgByIndex(index) {
    // remove active class
    document.querySelectorAll('.list_img div').forEach(item => {
        item.classList.remove('active')
    });

    currentIndex = index
    imgFeature.src = listImg[index].getAttribute('src')
    listImg[index].parentElement.classList.add('active')

}

listImg.forEach((imgElement, index) => {

    imgElement.addEventListener('click', e => {
        currentIndex = index
        updateImgByIndex(index)
    })

});

prevBtn.addEventListener('click', e => {
    if (currentIndex == 0) {
        currentIndex = listImg.length - 1
    } else {
        currentIndex--
    }

    updateImgByIndex(currentIndex)
})


nextBtn.addEventListener('click', e => {
    if (currentIndex == listImg.length - 1) {
        currentIndex = 0
    } else {
        currentIndex++
    }

    updateImgByIndex(currentIndex)
})

updateImgByIndex(0)


// ================================
var updateactive = document.getElementsByClassName('.GB')
var raidoBtn = document.querySelectorAll('input[name="dung-luong"]')
raidoBtn.forEach((raidoBtn) => {
    raidoBtn.addEventListener('change', (e) => {
        updateactive.style.backgroundColor = 'red';
    });

});


const chosseKm = document.querySelectorAll('input[name="km1"]')

chosseKm.forEach((chosseKm) => {
    chosseKm.addEventListener('change', e => {

    })
});


// ===================
// function read(contentElement,readMoreBtn){
//     const contentElement = document.getElementById('content');
// const readMoreBtn = document.getElementById('readMoreBtn');

// let isExpanded = false;

// readMoreBtn.addEventListener('click', () => {
//     if (isExpanded) {
//         // Nếu đang mở rộng, thu lại lại với chiều cao tối đa
//         contentElement.style.maxHeight = '150px';
//         readMoreBtn.textContent = 'Đọc thêm';
//     } else {
//         // Nếu không mở rộng, mở rộng hết chiều cao
//         contentElement.style.maxHeight = contentElement.scrollHeight + 'px';
//         readMoreBtn.textContent = 'Thu gọn';
//     }

//     // Chuyển đổi trạng thái
//     isExpanded = !isExpanded;
// });
// read(contentElement,readMoreBtn)
// }

const contentElement = document.getElementById('content');
const readMoreBtn = document.getElementById('readMoreBtn');

let isExpanded = false;

readMoreBtn.addEventListener('click', () => {
    if (isExpanded) {
        // Nếu đang mở rộng, thu lại lại với chiều cao tối đa
        contentElement.style.maxHeight = '650px';
        readMoreBtn.textContent = 'Đọc thêm';
    } else {
        // Nếu không mở rộng, mở rộng hết chiều cao
        contentElement.style.maxHeight = contentElement.scrollHeight + 'px';
        readMoreBtn.textContent = 'Thu gọn';
    }

    // Chuyển đổi trạng thái
    isExpanded = !isExpanded;
}); 



$(document).ready(function(){
    // $('.nd_ct.actives .content_p').slideDown();
   $('.tieude').click(function() {
    $(this).parent().toggleClass('actives');
    $(this).parent().children('.content_p').slideToggle();
   });
})



