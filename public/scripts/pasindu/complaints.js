document.addEventListener('DOMContentLoaded', function() {
    // Handle view buttons
    // const viewButtons = document.querySelectorAll('.btn-view');
    // viewButtons.forEach(button => {
    //     button.addEventListener('click', function() {
    //         const complaintItem = this.closest('.complaint-item');
    //         const title = complaintItem.querySelector('.title').textContent;
    //         alert(`Viewing details for: ${title}`);
    //     });
    // });

    // Handle mark as read buttons
    const markButtons = document.querySelectorAll('.btn-mark');
    markButtons.forEach(button => {
        button.addEventListener('click', function() {
            const complaintItem = this.closest('.complaint-item');
            complaintItem.classList.remove('new');
            this.textContent = 'Marked as read';
            this.disabled = true;
        });
    });

    // Handle pagination
    const pageNumbers = document.querySelectorAll('.page-numbers span');
    pageNumbers.forEach(number => {
        number.addEventListener('click', function() {
            // Remove active class from all numbers
            pageNumbers.forEach(num => num.classList.remove('active'));
            // Add active class to clicked number
            if (this.textContent !== '...') {
                this.classList.add('active');
            }
        });
    });

    // Handle prev/next buttons
    const prevButton = document.querySelector('.btn-prev');
    const nextButton = document.querySelector('.btn-next');

    prevButton.addEventListener('click', function() {
        const activeNumber = document.querySelector('.page-numbers span.active');
        const currentPage = parseInt(activeNumber.textContent);
        if (currentPage > 1) {
            activeNumber.classList.remove('active');
            const prevPage = document.querySelector(`.page-numbers span:nth-child(${currentPage - 1})`);
            if (prevPage && prevPage.textContent !== '...') {
                prevPage.classList.add('active');
            }
        }
    });

    nextButton.addEventListener('click', function() {
        const activeNumber = document.querySelector('.page-numbers span.active');
        const currentPage = parseInt(activeNumber.textContent);
        if (currentPage < 10) {
            activeNumber.classList.remove('active');
            const nextPage = document.querySelector(`.page-numbers span:nth-child(${currentPage + 1})`);
            if (nextPage && nextPage.textContent !== '...') {
                nextPage.classList.add('active');
            }
        }
    });

    // Handle sidebar item clicks
    // const sidebarItems = document.querySelectorAll('.sidebar-item');
    // sidebarItems.forEach(item => {
    //     item.addEventListener('click', function() {
    //         sidebarItems.forEach(i => i.classList.remove('active'));
    //         this.classList.add('active');
    //     });
    // });
});