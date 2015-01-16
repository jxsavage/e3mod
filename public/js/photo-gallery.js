/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('.image-box').click(function (e) {
    console.log(this.style.backgroundImage.slice(4, -1));
    $('.modal-body img').attr('src', this.style.backgroundImage.slice(4, -1));
    $('#myModal').modal();
});