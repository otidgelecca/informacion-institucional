/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$( document ).ready(function() {
    if($('#aspect_discovery_Navigation_list_discovery').length != 0){

		var aux_name =$("#aspect_discovery_Navigation_list_discovery ul li h2");
		var existeFecha = false, i=aux_name.length-1;

		while (!existeFecha && i >= 0 ) {
			if(aux_name[i].innerHTML === "Fecha"){
				existeFecha = true ;
			}
			i--;
		}
		if(existeFecha){
			var data=[];
			var total_publicaciones = 0;
			var comunidades = '';
			var aux_data = $('#aspect_discovery_Navigation_list_discovery ul.ds-options-list li:nth-child('+(i+2)+') ul li a');
			var aux_comunidades = $('#aspect_artifactbrowser_CommunityBrowser_div_comunity-browser ul li div div span');
			for ( i = aux_data.length - 1; i >= 0; i--) {
				total_publicaciones += aux_data[i].innerHTML.split('(')[1].split(')')[0]*1;
			}

			for ( i = aux_data.length - 1; i >= 0; i--) {
				data[i] = {'name': aux_data[i].innerHTML.split('(')[0] , 'y': Math.round( ((aux_data[i].innerHTML.split('(')[1].split(')')[0])*100/total_publicaciones)*100) /100, 'cant': aux_data[i].innerHTML.split('(')[1].split(')')[0]}
			}

			for (var i = aux_comunidades.length - 1; i >= 0; i--) {
				comunidades += aux_comunidades[i].innerHTML+' - ';
			}
			graficar_pastel_decada('Publicaciones por decada', data , comunidades, 'aspect_artifactbrowser_CommunityBrowser_div_comunity-browser-chart', 'Publicaciones');
		}
	}

    function graficar_pastel_decada(title, data, comunidades, idcontainer, nameSerie){
    		Highcharts.chart(idcontainer, {
			  chart: {
			    plotBackgroundColor: null,
			    plotBorderWidth: null,
			    plotShadow: false,
			    type: 'pie'
			  },
			  title: {
			    text: title 
			  },
				subtitle: {
				    text: '<b>Comunidad(es) :  </b>'+comunidades
				},
			  tooltip: {
			    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b> ({point.cant})'
			  },
			  plotOptions: {
			    pie: {
			      allowPointSelect: true,
			      cursor: 'pointer',
			      dataLabels: {
			        enabled: true,
			        format: '<b>{point.name}</b>: {point.percentage:.1f} % ',
			        style: {
			          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
			        }
			      }
			    }
			  },
			  series: [{
			    name: nameSerie,
			    colorByPoint: true,
			    data: data
			  }],
                          exporting: {
                             url: 'http://export.highcharts.com/index-utf8-encode.php'
                          }
			});
	}
	
	if($('#aspect_statistics_StatisticsSearchTransformer_div_tablewrapper').length != 0){
		var aux_name =$("#aspect_statistics_StatisticsSearchTransformer_div_search-terms:first .ds-table-row td:nth-child(2)");
		var aux_valor =$("#aspect_statistics_StatisticsSearchTransformer_div_search-terms:first .ds-table-row td:nth-child(4)");
		$("#aspect_statistics_StatisticsSearchTransformer_div_search-terms:first .ds-div-head:nth-child(2)").innerHTML='';
		var data=[];
		for (var i = aux_name.length - 1; i >= 0; i--) {
			data[i] = {'name': aux_name[i].innerHTML.split(':')[1] , 'y': aux_valor[i].innerHTML.split('%')[0]*1}			
		}
		$('#aspect_statistics_StatisticsSearchTransformer_div_search-statistics .ds-div-head').html('');
		$('#aspect_statistics_StatisticsSearchTransformer_div_search-total').html('');
		charge_chart('Estadistica de Busquedas', data , 'aspect_statistics_StatisticsSearchTransformer_div_tablewrapper', 'Búsquedas');
	}

    function charge_chart(title, data, idcontainer, nameSerie){
    	
    		Highcharts.chart(idcontainer, {
			  chart: {
			    plotBackgroundColor: null,
			    plotBorderWidth: null,
			    plotShadow: false,
			    type: 'pie'
			  },
			  title: {
			    text: title
			  },
			  tooltip: {
			    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
			  },
			  plotOptions: {
			    pie: {
			      allowPointSelect: true,
			      cursor: 'pointer',
			      dataLabels: {
			        enabled: true,
			        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
			        style: {
			          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
			        }
			      }
			    }
			  },
			  series: [{
			    name: nameSerie,
			    colorByPoint: true,
			    data: data
			  }]
			});
	}

});





