
    $(document).ready(function(){
        $('#datepicker').datepicker({
            format: 'dd/mm/yyyy', // Formato da data
            autoclose: true, // Fecha automaticamente após a seleção
            todayHighlight: true, // Destaca a data atual
            orientation: 'bottom' // Posição do datepicker (top, bottom, auto)
        });
    });
