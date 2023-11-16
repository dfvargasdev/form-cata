document.addEventListener('DOMContentLoaded', function () {
  // Event listener para cuando cambia la selección de categoría
  document.querySelectorAll('.category-radio input').forEach(input => {
    input.addEventListener('change', function() {
      document.getElementById('emailDestino').value = this.value;
      document.getElementById('submitBtn').disabled = false;
    });
  });

  document.querySelector('form').addEventListener('submit', function() {
    document.getElementById('loading').style.display = 'block';
    document.getElementById('submitBtn').disabled = true;
  });
});