$(function () {
    //Masked Input ============================================================================================================================
    var $MaskedInput = $('.masked-input');

    //Date
    $MaskedInput.find('.masked-date').inputmask('dd/mm/yyyy', { placeholder: '__/__/____' });

    //Time
    $MaskedInput.find('.time12').inputmask('hh:mm t', { placeholder: '__:__ _m', alias: 'time12', hourFormat: '12' });
    $MaskedInput.find('.time24').inputmask('hh:mm', { placeholder: '__:__ _m', alias: 'time24', hourFormat: '24' });

    //Date Time
    $MaskedInput.find('.datetime').inputmask('d/m/y h:s', { placeholder: '__/__/____ __:__', alias: "datetime", hourFormat: '24' });

    //Mobile Phone Number
    MaskedInput.find('.mobile-phone-number').inputmask('+99 (999) 999-99-99', { placeholder: '+__ (___) ___-__-__' });
    //Phone Number
    $MaskedInput.find('.phone-number').inputmask('+99 (999) 999-99-99', { placeholder: '+__ (___) ___-__-__' });

    //Dollar Money
    $MaskedInput.find('.money-dollar').inputmask('99,99 $', { placeholder: '__,__ $' });
    //Euro Money
    $MaskedInput.find('.money-euro').inputmask('99,99 €', { placeholder: '__,__ €' });

    //IP Address
    $MaskedInput.find('.ip').inputmask('999.999.999.999', { placeholder: '___.___.___.___' });

    //Credit Card
    $MaskedInput.find('.credit-card').inputmask('9999 9999 9999 9999', { placeholder: '____ ____ ____ ____' });

    //Email
    $MaskedInput.find('.email').inputmask({ alias: "email" });

    //Serial Key
    $MaskedInput.find('.key').inputmask('****-****-****-****', { placeholder: '____-____-____-____' });
    //===========================================================================================================================================

});