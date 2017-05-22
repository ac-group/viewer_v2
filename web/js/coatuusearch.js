/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $('#parcelSidebar').on('click', function () {
        if($(this).hasClass('active')) {
            $('#coatuusearch').css({display:'none'});
        } else {
            $('#coatuusearch').css({display:'block'});
        }
    });

