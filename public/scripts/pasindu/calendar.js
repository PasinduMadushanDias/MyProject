class Calendar {
    constructor() {
        this.date = new Date();
        this.currentMonth = this.date.getMonth();
        this.currentYear = this.date.getFullYear();
        this.events = {
            '2024-07-01': [{ time: '3:00 p.m.', company: 'WSO2' }],
            '2024-07-04': [{ time: '1:00 p.m.', company: 'IFS' }],
            '2024-07-09': [{ time: '1:00 p.m.', company: 'Pajero' }],
            '2024-07-12': [{ time: '3:00 p.m.', company: 'WSO2' }],
            '2024-07-22': [{ time: '3:00 p.m.', company: 'CISCO' }],
            '2024-07-25': [{ time: '3:00 p.m.', company: 'IFS' }]
        };

        this.initializeCalendar();
        this.addEventListeners();
    }

    initializeCalendar() {
        this.updateMonthDisplay();
        this.renderCalendar();
    }

    addEventListeners() {
        document.querySelector('.prev-month').addEventListener('click', () => {
            this.navigateMonth(-1);
        });
        document.querySelector('.next-month').addEventListener('click', () => {
            this.navigateMonth(1);
        });
    }

    updateMonthDisplay() {
        const months = [
            'January', 'February', 'March', 'April', 'May', 'June', 
            'July', 'August', 'September', 'October', 'November', 'December'
        ];
        document.querySelector('.month-name').textContent = `${months[this.currentMonth]}`;
    }

    navigateMonth(direction) {
        this.currentMonth += direction;
        if (this.currentMonth > 11) {
            this.currentMonth = 0;
            this.currentYear++;
        } else if (this.currentMonth < 0) {
            this.currentMonth = 11;
            this.currentYear--;
        }
        this.updateMonthDisplay();
        this.renderCalendar();
    }

    formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    getEventForDate(date) {
        const dateString = this.formatDate(date);
        return this.events[dateString] || [];
    }

    renderCalendar() {
        const daysContainer = document.querySelector('.days');
        daysContainer.innerHTML = '';

        const firstDay = new Date(this.currentYear, this.currentMonth, 1);
        const lastDay = new Date(this.currentYear, this.currentMonth + 1, 0);
        const startingDay = firstDay.getDay();
        const monthDays = lastDay.getDate();

        // Previous month's days
        const prevMonthLastDay = new Date(this.currentYear, this.currentMonth, 0).getDate();
        for (let i = startingDay - 1; i >= 0; i--) {
            const dayDiv = document.createElement('div');
            dayDiv.className = 'day other-month';
            dayDiv.innerHTML = `<div class="day-number">${prevMonthLastDay - i}</div>`;
            daysContainer.appendChild(dayDiv);
        }

        // Current month's days
        for (let day = 1; day <= monthDays; day++) {
            const dayDiv = document.createElement('div');
            dayDiv.className = 'day';
            
            const currentDate = new Date(this.currentYear, this.currentMonth, day);
            const events = this.getEventForDate(currentDate);
            
            let eventsHtml = '';
            events.forEach(event => {
                eventsHtml += `
                    <div class="event" title="${event.company} - ${event.time}">
                        ${event.time} - ${event.company}
                    </div>
                `;
            });

            dayDiv.innerHTML = `
                <div class="day-number">${day}</div>
                ${eventsHtml}
            `;
            
            // Highlight current day
            if (
                day === this.date.getDate() && 
                this.currentMonth === this.date.getMonth() && 
                this.currentYear === this.date.getFullYear()
            ) {
                dayDiv.classList.add('current-day');
            }
            
            daysContainer.appendChild(dayDiv);
        }

        // Next month's days
        const totalDays = daysContainer.children.length;
        const remainingDays = 42 - totalDays; // 6 rows × 7 days = 42 total grid cells
        for (let day = 1; day <= remainingDays; day++) {
            const dayDiv = document.createElement('div');
            dayDiv.className = 'day other-month';
            dayDiv.innerHTML = `<div class="day-number">${day}</div>`;
            daysContainer.appendChild(dayDiv);
        }
    }
}

// Initialize calendar when page loads
document.addEventListener('DOMContentLoaded', () => {
    new Calendar();
});