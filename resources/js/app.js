import './bootstrap';

import Alpine from 'alpinejs';
import persist from "@alpinejs/persist";
import ApexCharts from "apexcharts";
import flatpickr from "flatpickr";
import jsVectorMap from "jsvectormap";

Alpine.plugin(persist);
window.Alpine = Alpine;
window.ApexCharts = ApexCharts;
window.jsVectorMap = jsVectorMap;

Alpine.start();


flatpickr(".datepicker", {
    mode: "range",
    static: true,
    monthSelectorType: "static",
    dateFormat: "M j, Y",
    defaultDate: [new Date().setDate(new Date().getDate() - 6), new Date()],
    prevArrow:
      '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
    nextArrow:
      '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
    onReady: (selectedDates, dateStr, instance) => {
      // eslint-disable-next-line no-param-reassign
      instance.element.value = dateStr.replace("to", "-");
      const customClass = instance.element.getAttribute("data-class");
      instance.calendarContainer.classList.add(customClass);
    },
    onChange: (selectedDates, dateStr, instance) => {
      // eslint-disable-next-line no-param-reassign
      instance.element.value = dateStr.replace("to", "-");
    },
  });

  flatpickr(".form-datepicker", {
    mode: "single",
    static: true,
    monthSelectorType: "static",
    dateFormat: "Y-m-d",
    prevArrow:
      '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M5.4 10.8l1.4-1.4-4-4 4-4L5.4 0 0 5.4z" /></svg>',
    nextArrow:
      '<svg class="fill-current" width="7" height="11" viewBox="0 0 7 11"><path d="M1.4 10.8L0 9.4l4-4-4-4L1.4 0l5.4 5.4z" /></svg>',
  });


  document.addEventListener('DOMContentLoaded', () => {

    const tables = document.querySelectorAll('.clickable-rows');

    tables.forEach(table => {
        table.addEventListener('click', event => {
            // Find the clicked row
            const row = event.target.closest('tr');

            // If no row was clicked, do nothing
            if (!row) return;

            // Check if the click happened inside the last column
            const lastCell = row.querySelector('td:last-child');
            if (lastCell.contains(event.target)) {
                // Prevent row navigation if the click happened inside the last column
                return;
            }

            // Get the URL from the 'data-url' attribute
            const url = row.getAttribute('data-url');
            if (url) {
                // Navigate to the URL
                window.location.href = url;
            }
        });
    });
});
