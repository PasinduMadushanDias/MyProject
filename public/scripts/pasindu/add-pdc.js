document.addEventListener('DOMContentLoaded', function() {
    const lecturerData = [
        { title: 'Dr', name: 'Kasun', contactNo: '0752207771', email: 'kasun@gmail.com' },
        { title: 'Dr', name: 'Manju', contactNo: '0752207772', email: 'manju@gmail.com' },
        { title: 'Dr', name: 'Chamath', contactNo: '0752207773', email: 'chamath@gmail.com' },
        { title: 'Dr', name: 'Ajantha', contactNo: '0752207774', email: 'ajantha@gmail.com' },
        { title: 'Dr', name: 'Dinunil', contactNo: '0752207775', email: 'dinunil@gmail.com' },
        { title: 'Dr', name: 'Keneth', contactNo: '0752207776', email: 'keneth@gmail.com' },
        { title: 'Dr', name: 'Lasanthi', contactNo: '0752207777', email: 'lasanthi@gmail.com' },
        { title: 'Dr', name: 'Viraj', contactNo: '0752207778', email: 'viraj@gmail.com' },
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
                <td><button class="view-btn">View</button></td>
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