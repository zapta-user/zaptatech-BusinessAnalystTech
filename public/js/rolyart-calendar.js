function RolyartCalendar(config) {
    this.container = document.getElementById(config.container);
    this.container.classList.add('rolyart-calendar');
    this.today = new Date();
    this.selected = this.today;
    this.currentMonth = this.today.getMonth();
    this.currentYear = this.today.getFullYear();
    this.months = config.months;
    this.weekDays = config.weekDays;

    /** 
     * Calendar navigation
     * nextMonth()
     * prevMonth()
     */

    this.nextMonth = () => {
        if (this.currentMonth == 11) {
            this.currentMonth = 0;
            this.currentYear = this.currentYear + 1;
        } else {
            this.currentMonth = this.currentMonth + 1;
        }
        this.showCalendar(this.currentYear, this.currentYear);
    }
    this.prevMonth = () => {
        if (this.currentMonth == 0) {
            this.currentMonth = 11;
            this.currentYear = this.currentYear - 1;
        } else {
            this.currentMonth = this.currentMonth - 1;
        }
        this.showCalendar(this.currentYear, this.currentYear);
    }

    /** 
     * Get days of month
     * getPrevDays()
     * getNextDays()
     * getCurrentDays()
     */
    this.getPrevDays = (date, staDay = 0) => {
        let ret = [];
        let year = date.getFullYear();
        let month = date.getMonth();
        let firstWeekday = new Date(year, month, 1).getDay();
        let days = (firstWeekday + 7) - (staDay + 7) - 1;
        for (let i = days * -1; i <= 0; i++) {
            ret.push({
                date: new Date(year, month, i).getDate(),
                type: "not-current",
                id: new Date(year, month, i)
            });
        }
        return ret;
    }
    this.getNextDays = (prevMonthDays, monthDays) => {
        let ret = [];
        let days = 42 - (prevMonthDays.length + monthDays.length);
        for (let i = 1; i <= days; i++) {
            ret.push({
                date: i,
                type: "not-current"
            });
        }
        return ret;
    }
    // Modify the getCurrentDays function to mark past dates as "not-current" and display only current month dates
    this.getCurrentDays = (date) => {
        let ret = [];
        let year = date.getFullYear();
        let month = date.getMonth();
        let today = new Date();

        // Get the current date
        let firstDay = new Date(year, month, 1);
        let lastDay = new Date(year, month + 1, 0);

        for (let i = 1; i <= lastDay.getDate(); i++) {
            let currentDate = new Date(year, month, i);

            if (currentDate < firstDay || currentDate > lastDay) {
                // Dates outside of the current month should be marked as "not-current"
                ret.push({
                    date: i,
                    type: "not-current"
                });
            } else {
                // Dates within the current month
                if (currentDate < today) {
                    // Past dates should also be marked as "not-current"
                    ret.push({
                        date: i,
                        type: "not-current"
                    });
                } else {
                    ret.push({
                        date: i,
                        type: "current",
                        id: this.YYYYmmdd(currentDate),
                    });
                }
            }
        }
        return ret;
    };



    /** 
     * YYYY-MM-DD date format
     * YYYYmmdd()
     */
    this.YYYYmmdd = (date) => {
        let d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();
        if (month.length < 2)
            month = '0' + month;
        if (day.length < 2)
            day = '0' + day;
        return [year, month, day].join('-');
    }

    this.calendarHeader = () => {
        let header = document.createElement('header');
        header.classList.add('calendar-header');
        let monthAndYear = document.createElement('h3');
        let calendarControl = document.createElement('div');
        let prevMonth = document.createElement('button');
        let currentMonth = document.createElement('button');
        let nextMonth = document.createElement('button');

        monthAndYear.classList.add('month-year');
        calendarControl.classList.add('calendar-control');
        monthAndYear.innerHTML = `${this.months[this.currentMonth] + ' ' + this.currentYear}`;

        prevMonth.innerHTML = '<'
        prevMonth.addEventListener('click', () => {
            this.prevMonth();
            monthAndYear.innerHTML = `${this.months[this.currentMonth] + ' ' + this.currentYear}`;
        })

        nextMonth.innerHTML = '>'
        nextMonth.addEventListener('click', () => {
            this.nextMonth();
            monthAndYear.innerHTML = `${this.months[this.currentMonth] + ' ' + this.currentYear}`;
        })


        currentMonth.innerHTML = '<i class="current-month"></i>'
        currentMonth.addEventListener('click', () => {
            this.currentYear = new Date().getFullYear();
            this.currentMonth = new Date().getMonth();
            monthAndYear.innerHTML = `${this.months[this.currentMonth] + ' ' + this.currentYear}`;
            this.showCalendar();
        })

        let weekDays = document.createElement('div');
        weekDays.classList.add('week-days');
        for (let i = 0; i <= 6; i++) {
            weekDays.innerHTML += `<div>${this.weekDays[i]}</div>`;
        }

        currentMonth.classList.add('control-current-month');

        calendarControl.appendChild(prevMonth)
        calendarControl.appendChild(currentMonth)
        calendarControl.appendChild(nextMonth);
        header.appendChild(monthAndYear)
        header.appendChild(calendarControl);

        this.container.appendChild(header);
        this.container.appendChild(weekDays);
    }
    // Modify the calendarBody function to make past dates unclickable and focus on the current date
    this.calendarBody = (year, month) => {
        year = this.currentYear;
        month = this.currentMonth;
        let date = new Date(year, month, 1);
        let firstDayOfWeek = date.getDay();
        let lastDayOfMonth = new Date(year, month + 1, 0).getDate();
        let calendarBody = document.createElement('div');
        calendarBody.classList.add('calendar-body');

        for (let i = 0; i < firstDayOfWeek; i++) {
            let cell = document.createElement('div');
            cell.classList.add('day', 'not-current', 'unclickable');
            calendarBody.appendChild(cell);
        }

        for (let day = 1; day <= lastDayOfMonth; day++) {
            let cell = document.createElement('div');
            cell.classList.add('day', 'current');
            let daySpan = document.createElement('span');
            daySpan.innerText = day;
            cell.appendChild(daySpan);

            let currentDate = new Date(year, month, day);
            if (currentDate < this.today && !this.isSameDate(currentDate, this.today)) {
                cell.classList.add('not-current', 'unclickable');
            } else {
                cell.addEventListener('click', () => {
                    this.selected = new Date(year, month, day);
                    let selected = document.getElementsByClassName("selected");
                    if (selected.length > 0) {
                        selected[0].className = selected[0].className.replace(" selected", "");
                    }
                    cell.className += " selected";
                });
            }

            if (this.isSameDate(currentDate, this.today)) {
                cell.classList.add('current-date', 'selected'); // Add a class to the current date cell and mark it as selected
            }

            calendarBody.appendChild(cell);
        }

        this.container.appendChild(calendarBody);
    };

    // Add a utility function to compare dates
    this.isSameDate = (date1, date2) => {
        return (
            date1.getDate() === date2.getDate() &&
            date1.getMonth() === date2.getMonth() &&
            date1.getFullYear() === date2.getFullYear()
        );
    };

    // Focus on the current date when showing the calendar
    this.showCalendar = () => {
        this.container.innerHTML = '';
        this.calendarHeader();
        this.calendarBody(this.currentYear, this.currentMonth);

        // Add logic to focus on the current date cell
        const currentDateCell = this.container.querySelector('.current-date');
        if (currentDateCell) {
            currentDateCell.focus();
        }
    };

    this.showCalendar(this.currentYear, this.currentMonth);


}