$(document).ready( function(){
	initCommunities();
    resizeTags();
    $('li a[href="/community-list"]').parent().remove();
    /* ESTOS BOTONES NO NECESITAN LA CLASE ds-button-field (botones minus y plus de filters)*/
    $('td.filter-controls input').removeClass('ds-button-field');
    /* LAS DISCOVERY DENTRO DE UNA COMUNIDAD NO GENERAN EL ELEMENTO SELECT */
    if( ($('#aspect_discovery_SimpleSearch_list_primary-search ol').children()).length == 2 ){
        $('#aspect_discovery_SimpleSearch_list_primary-search ol').css('grid-template-columns', 'auto 40px');
    }
    	
});
$(window).resize( function(){
    initCommunities();
    resizeTags();
});

function initCommunities(){
    var parentWidth = $('ul.ca-wrapper').width();
    for (var i = 4; i > 0; i--) {
        childWidth = parentWidth / i;
        if( childWidth >= 160 ){
            $('ul.ca-wrapper li').width(childWidth);
            break;
        }
    }
    $('#ca-container').contentcarousel();
}

function resizeTags(){
    var mainContainer = $('div.container.contenido-principal').width();
    var dsOptions = $('body').width() > 992 ? $('#ds-options').width() : 0;
    var thumbnail = $('.thumbnail-wrapper').width();
    var keywords = $('body').width() <= 640 ? 0 : $('.keywords-span').width();
    var cant = $('body').width() > 576 ? 3 : 2;
    var maxwidth = (( mainContainer - dsOptions - thumbnail - keywords - cant*25) / cant );
    $('ul.tags li span').css('max-width', maxwidth);
}

function actionSidebar(){
	if( $('#ds-options').attr('class').includes('active') ) {
        $('#ds-options').removeClass('active');
		$('.sbutton i').removeClass('fa-times');
        $('.sbutton i').addClass('fa-bars');
    } else {
        $('#ds-options').addClass('active');
		$('.sbutton i').removeClass('fa-bars');
        $('.sbutton i').addClass('fa-times');
    }
}

function actionTopbar(){
    if( $('ul.nav-main-li').attr('class').includes('active') ) {
        $('ul.nav-main-li').removeClass('active');
        /*$('.sbuttonaux i').removeClass('fa-times');
        $('.sbuttonaux i').addClass('fa-ellipsis-v');*/
    } else {
        $('ul.nav-main-li').addClass('active');
        /*$('.sbuttonaux i').removeClass('fa-ellipsis-v');
        $('.sbuttonaux i').addClass('fa-times');*/
    }
}

function expandShare(element){
    var classes = element.parentNode.querySelector('ul.sharelist').className;
    if( classes.includes('active') ){
        element.parentNode.querySelector('ul.sharelist').className = classes.replace(" active", "");
    }else{
        classes += " active";
        element.parentNode.querySelector('ul.sharelist').className = classes;
    }
}


function actionResearcherCard(researcher){
    if( $('#'+researcher).attr('class').includes('active') ) {
        $('#'+researcher).removeClass('active');
    } else {
        $('.ficha-investigador').removeClass('active');   
        $('#'+researcher).addClass('active');
    }
    
}

$(document).mouseup(function (e){
    var investigador = $('.ficha-investigador');
    var options = $('#ds-options');
    var nav = $('.nav-main-li');
    if (!options.is(e.target) && options.has(e.target).length === 0 && !$('i.fa-bars').is(e.target) && !$('i.fa-times').is(e.target)) 
    {   options.removeClass('active');
        $('.sbutton i').removeClass('fa-times');
        $('.sbutton i').addClass('fa-bars');
    }
    if (!investigador.is(e.target) && investigador.has(e.target).length === 0 && !$('.fa-address-card').is(e.target)) 
    {   investigador.removeClass('active');
    }
    if (!nav.is(e.target) && nav.has(e.target).length === 0 && !$('.fa-ellipsis-v').is(e.target))
    {   nav.removeClass('active');
    }
});
