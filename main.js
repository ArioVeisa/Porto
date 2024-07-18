const projectItems = document.querySelectorAll('.projects .inner .items .item')

projectItems.forEach(item =>{
    item.addEventListener('mouseover', () =>{
        item.style.transform = 'scale(1.05)';
        item.style.transition = 'transform 0.3s ease';
    })
    item.addEventListener('mouseout', () =>{
        item.style.transform = 'scale(1)';
    });
});

//link form contact
const secheduleCallBtn = document.getElementById('scheduleCallBtn');

secheduleCallBtn.addEventListener('click', () =>{
    window.location.href = 'formContacs.php';
})
