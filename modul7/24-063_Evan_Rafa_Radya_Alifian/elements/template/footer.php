  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?= json_encode($_SESSION["terms"]) ?>,
        datasets: [{
          label: '# Rentang waktu',
          data: <?= json_encode($_SESSION["total"]) ?>,
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
  <script>
    const dateForm = document.getElementById("date_form")
    const btnAction = document.getElementById("btn_action") 
    
    const btnPDF = document.getElementById("btn_pdf")
    const btnExcel = document.getElementById("btn_excel")

    btnPDF.addEventListener("click", () => {
      dateForm.style.display = "none";
      btnAction.style.display = "none";
      window.print()
      dateForm.style.display = "block";
      btnAction.style.display = "block";
    })

    btnExcel.addEventListener("click", () => {
      window.location = "report_to_excel.php"
    })
  </script>
</body>
</html>