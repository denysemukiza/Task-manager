<div class="card">
  <div class="card-body">
    <style>
      :root {
        --card-bg-color:rgb(249, 249, 249);
        --card-accent-color:rgb(201, 202, 204);
      }
      .card-body {
        overflow-x: hidden;
      }

      .dashboard-card {
        display: none;
      }

      .dashboard-card:hover {
        transform: translateY(-5px);
      }

      .dashboard-card1 {
        display: none;
      }

      .welcome-message {
  text-align: center;
  color: var(--text-color);
  font-size: 17px;
  font-weight: 300;
  font-family: Arial, Helvetica, sans-serif;
  align-items: center;
  justify-content: center;
  border-left: 6px solid rgb(70, 139, 204); /* Thick blue border */
  background-color: var(--background-color); /* Background based on theme */
  padding: 10px;
  margin: 10px;
  transition: background-color 0.3s ease, color 0.3s ease;
}

/* Typing effect inside the welcome message */
.typing-effect {
  white-space: nowrap;
  overflow: hidden;
  width: 0;
  border-right: 2px solid var(--text-color); /* Matches text color */
}

/* Keyframes for typing effect */
@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%; /* Adjust width for typing effect */
  }
}

@keyframes blink {
  50% {
    border-color: transparent;
  }
}

      .calendar-container {
        width: 100%;
        background-size: contain;
        background-repeat: no-repeat;
        background-position-y: bottom;
        background-position-x: right;
        background-color: transparent;
        background-image: url('{{ asset('images/calebg.png') }}');
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.4);
      }

      .calendar-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        color: rgb(85, 117, 223);
      }

      .calendar-header button {
        background-color: #f9f9f9;;
        color:rgb(85, 117, 223);
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .calendar-header button:hover {
        background-color: #8da9c4;
      }

      .calendar-table {
        width: 100%;
        text-align: center;
        border-collapse: collapse;
      }

      .calendar-table th,
      .calendar-table td {
        padding: 2px;
      }

      .calendar-table th {
        background-color:rgb(129, 168, 134);;
        color: #fff;
        
      }
      @media screen and (min-width: 768px) {
        .dashboard-card {
        background-color: transparent;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 20px;
        width: 100%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
        transition: transform 0.3s ease;
      }

      .dashboard-card:hover {
        transform: translateY(-5px);
      }

      .dashboard-card1 {
        background-color: transparent;
        border-radius: 10px;
        padding: 10px;
        height: 400px;
        margin-left: 10%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.4);
        transition: transform 0.3s ease;
      }

      .welcome-message {
        text-align: center;
        background-color: var(--background-color);
        font-size: 26px;
        font-weight: 500;
        font-family:Arial, Helvetica, sans-serif;
        padding: 10px;
        margin: 10px;
      }

      @keyframes typing {
        from {
          width: 0;
        }
        to {
          width: 100%;
        }
      }

      @keyframes blink {
        50% {
          border-color: transparent;
        }
      }

      .typing-effect {
        white-space: nowrap;
        overflow: hidden;
        width: 0;
        animation: typing 4s steps(20, end), blink 0.5s step-end infinite;
      }

      .calendar-container {
        width: 40%;
        background-size: contain;
        background-repeat: no-repeat;
        background-position-y: bottom;
        background-color: transparent;
        background-image: url('{{ asset('images/calebg.png') }}');
        padding: 20px;
        margin-left: 10%;
        border-radius: 10px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.4);
      }

      .calendar-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        color: rgb(85, 117, 223);
      }

      .calendar-header button {
        background-color: #f9f9f9;;
        color:rgb(85, 117, 223);
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }

      .calendar-header button:hover {
        background-color: #8da9c4;
      }

      .calendar-table {
        width: 100%;
        text-align: center;
        border-collapse: collapse;
      }

      .calendar-table th,
      .calendar-table td {
        padding: 5px;
      }

      .calendar-table th {
        background-color:rgb(129, 168, 134);;
        color: #fff;
      }
    }
    </style>

    <div class="welcome-message">
      <p class="typing-effect">
        Start by adding clients and tasks to see them here.
      </p>
    </div>

    <!-- Main Content -->
    <div style="display: flex; justify-content: space-between;">
      <!-- Left Content -->
      <div class="left-content">
        <div class="dashboard-card">
          <h3>Clients</h3>
          <p>List of clients based on system data.</p>
        </div>

        <div class="dashboard-card">
          <h3>Tasks</h3>
          <p>List of tasks assigned and their progress.</p>
        </div>
      </div>
      <!-- Right Content -->
      <div class="dashboard-card1">
        <h3>Reminders</h3>
        <p>Important reminders for the day or week.</p>
      </div>
      <!-- Calendar Section -->
    <div class="calendar-container">
      <div class="calendar-header">
        <button onclick="prevMonth()">&#9664;</button>
        <span id="month-year"></span>
        <button onclick="nextMonth()">&#9654;</button>
      </div>
      <table class="calendar-table">
        <thead>
          <tr>
            <th>Sun</th>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
          </tr>
        </thead>
        <tbody id="calendar-body"></tbody>
      </table>
    </div>
    </div>
  </div>
</div>

@push('after_styles')
  @basset('https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/base16/dracula.min.css')
@endpush

@push('after_scripts')
  @basset('https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js')
  <script>
    let currentDate = new Date();
    const today = new Date();

    function renderCalendar() {
      const monthYear = document.getElementById("month-year");
      const calendarBody = document.getElementById("calendar-body");

      const month = currentDate.toLocaleString("default", { month: "long" });
      const year = currentDate.getFullYear();

      monthYear.textContent = `${month} ${year}`;

      const firstDay = new Date(year, currentDate.getMonth(), 1).getDay();
      const lastDate = new Date(year, currentDate.getMonth() + 1, 0).getDate();

      calendarBody.innerHTML = "";

      let row = document.createElement("tr");
      for (let i = 0; i < firstDay; i++) {
        row.appendChild(document.createElement("td"));
      }

      for (let date = 1; date <= lastDate; date++) {
        if ((firstDay + date - 1) % 7 === 0) {
          calendarBody.appendChild(row);
          row = document.createElement("tr");
        }

        const cell = document.createElement("td");
        cell.textContent = date;

        // Highlight today's date
        if (
          year === today.getFullYear() &&
          currentDate.getMonth() === today.getMonth() &&
          date === today.getDate()
        ) {
          cell.style.backgroundColor = "#ff7045"; // Highlight color
          cell.style.color = "#ffffff"; // Text color for contrast
          cell.style.borderRadius = "50%";
          cell.style.fontWeight = "bold";
          cell.style.boxShadow = "0 2px 4px rgba(0, 0, 0, 0.2)";
        }

        row.appendChild(cell);
      }

      calendarBody.appendChild(row);
    }

    function prevMonth() {
      currentDate.setMonth(currentDate.getMonth() - 1);
      renderCalendar();
    }

    function nextMonth() {
      currentDate.setMonth(currentDate.getMonth() + 1);
      renderCalendar();
    }

    renderCalendar();
  </script>
@endpush
