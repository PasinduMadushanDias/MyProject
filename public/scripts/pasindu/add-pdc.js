document.addEventListener('DOMContentLoaded', function() {
    const lecturerData = [
        { title: 'Dr', name: 'Kasun', contactNo: '0752207771', email: 'kasun@gmail.com' }

    ];

    const tableBody = document.getElementById('lecturerTableBody');

    function renderTable() {
        tableBody.innerHTML = '';
        lecturerData.forEach(lecturer => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${lecturer.title}</td>
                <td>${lecturer.name}</td>
                <td>${lecturer.contactNo}</td>
                <td>${lecturer.email}</td>
                <td><button class="view-btn"><a href="/add-pdc/profilepdc">View</a></button></td>
            `;
            tableBody.appendChild(row);
        });
    }

    renderTable();

    // Add event listeners for buttons and pagination
    document.querySelector('.delete-btn').addEventListener('click', () => alert('Delete functionality not implemented'));
    document.querySelector('.new-btn').addEventListener('click', () => alert('New lecturer functionality not implemented'));
    document.querySelector('.search-input').addEventListener('input', (e) => console.log('Search:', e.target.value));
    document.querySelector('.prev-btn').addEventListener('click', () => alert('Previous page'));
    document.querySelector('.next-btn').addEventListener('click', () => alert('Next page'));

    // Sidebar navigation
    const sidebarItems = document.querySelectorAll('.sidebar-item');
    sidebarItems.forEach(item => {
        item.addEventListener('click', function() {
            sidebarItems.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
        });
    });
});