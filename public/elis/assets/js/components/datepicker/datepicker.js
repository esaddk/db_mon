(function ($) {

    'use strict';

    // ------------------------------------------------------- //
    // Datepicker
    // ------------------------------------------------------ //	
    $(function () {
        //default date range picker
        $('#daterange').daterangepicker({
            autoApply: true
        });

        //date time picker
        $('#datetime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY h:mm A'
            }
        });

        //single date
        $('#start-date').daterangepicker({
            singleDatePicker: true,
        });
        //single date
        $('#end-date').daterangepicker({
            singleDatePicker: true,
        });
    });

})(jQuery);
