"use strict";if($('.popular-mentors .swiper-container').length>0){var swiper=new Swiper('.popular-mentors .swiper-container',{slidesPerView:2.3,spaceBetween:15,loop:true,speed:1000,autoplay:{delay:3000,},});}
if($('.learing-paths .swiper-container').length>0){var swiper=new Swiper('.learing-paths .swiper-container',{slidesPerView:2.3,spaceBetween:15,loop:true,speed:1000,autoplay:{delay:3000,},});}
if(jQuery('.schedule-timings .swiper-container').length>0){var swiper=new Swiper('.schedule-timings .swiper-container',{slidesPerView:'auto',spaceBetween:15,});}
$('header .left .hamburgar-icon').on('click',function(e){e.preventDefault();$('.side-menu').addClass('show-menu');$('body').addClass('overlay-body');});$('.side-menu .close-btn').on('click',function(e){e.preventDefault();$('.side-menu').removeClass('show-menu');$('body').removeClass('overlay-body');});$(window).scroll(function(){var sticky=$('header'),scroll=$(window).scrollTop();if(scroll>=50)sticky.addClass('fixed');else sticky.removeClass('fixed');});$("#search-chat").on("keyup",function(){var value=$(this).val().toLowerCase();$(".chat-list ul li").filter(function(){$(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)});});$('input[type=checkbox]').change(function(){if($(this).is("input[type=checkbox]:checked")){$(this).parent().closest('.item-content').addClass("menuitemshow");}else{$(this).parent().closest('.item-content').removeClass("menuitemshow");}});if($('.select').length>0){$('.select').select2({minimumResultsForSearch:-1,width:'100%'});}
function readURL(input){if(input.files&&input.files[0]){var reader=new FileReader();reader.onload=function(e){$('#img-upload').attr('src',e.target.result);};reader.readAsDataURL(input.files[0]);}}
if($('.datetimepicker').length>0){$('.datetimepicker').datetimepicker({format:'DD/MM/YYYY',icons:{up:"fas fa-chevron-up",down:"fas fa-chevron-down",next:'fas fa-chevron-right',previous:'fas fa-chevron-left'}});}