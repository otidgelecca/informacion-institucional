/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */	
	
$( document ).ready(function() {
    $('select[name="community_filter"]').change(function(){
        $(this).parents('form:first').submit();
    });
	if($('#aspect_statistics_MyStatsTransformer_table_tabla-comunidades-items').length != 0){
		var aux_name =$('#aspect_statistics_MyStatsTransformer_table_tabla-comunidades-items .ds-table-row td:nth-child(3)');
		var aux_valor =$('#aspect_statistics_MyStatsTransformer_table_tabla-comunidades-items .ds-table-row td:nth-child(4)');
		var data_comunidad_pub=[];

		for (let i = 0; i < aux_name.length; i++) {
			data_comunidad_pub[i] = {'name': aux_name[i].innerHTML , 'y': aux_valor[i].innerHTML*1, 'drilldown': null}			
		}

		charge_chart_bar_drilldown($('#aspect_statistics_MyStatsTransformer_div_general-statistics h2')[0].innerHTML,
			'', 
			'aspect_statistics_MyStatsTransformer_div_general-statistics-comunidades-items', 
			$('#aspect_statistics_MyStatsTransformer_table_tabla-comunidades-items th:nth-child(4)')[0].innerHTML, 
			'Comunidad', 
			data_comunidad_pub, 
			[])
	}

	if($('#aspect_statistics_MyStatsTransformer_table_tabla-items-by-year').length != 0){
		console.log(" 1");
		var aux_name =$('#aspect_statistics_MyStatsTransformer_table_tabla-items-by-year .ds-table-row td:nth-child(2)');
		var aux_valor =$('#aspect_statistics_MyStatsTransformer_table_tabla-items-by-year .ds-table-row td:nth-child(3)');
		var data_anio_pub=[];

		for (let i = 0; i < aux_name.length; i++) {
			data_anio_pub[i] = [aux_name[i].innerHTML , aux_valor[i].innerHTML*1];
			
		}
		
		charge_chart_bar($('#aspect_statistics_MyStatsTransformer_div_general-comunidades-statistics h2')[1].innerHTML, 
			'',
			'aspect_statistics_MyStatsTransformer_div_general-statistics-items-by-year',
			$('#aspect_statistics_MyStatsTransformer_table_tabla-items-by-year th:nth-child(3)')[0].innerHTML,
			'Publicaciones',
			data_anio_pub);
	}

	if($('#aspect_statistics_MyStatsTransformer_table_tabla-items-by-decade').length != 0){
		var aux_name =$('#aspect_statistics_MyStatsTransformer_table_tabla-items-by-decade .ds-table-row td:nth-child(2)');
		var aux_valor =$('#aspect_statistics_MyStatsTransformer_table_tabla-items-by-decade .ds-table-row td:nth-child(3)');
		var data_decada_pub=[];
		var total_publicaciones=0;
		var sliced = false; 
		var selected = false;
		for (let i = 0; i < aux_valor.length; i++) {
			total_publicaciones+=aux_valor[i].innerHTML*1;
		}
		for (let i = 0; i < aux_name.length; i++) {
			if (i== aux_name.length-1) {sliced = true; selected = true;}
			data_decada_pub[i] = {'name': aux_name[i].innerHTML , 
								'y': Math.round( ((aux_valor[i].innerHTML)*100/total_publicaciones)*100) /100, 
								'cant': aux_valor[i].innerHTML*1, 
								'sliced' : sliced, 
								'selected': selected}			
		}

		charge_chart_cake($('#aspect_statistics_MyStatsTransformer_div_general-comunidades-statistics h2')[2].innerHTML, 
			'',
			'aspect_statistics_MyStatsTransformer_div_general-statistics-items-by-decade',
			'Publicaciones',
			data_decada_pub);
	}
});

function charge_chart_bar_drilldown(title, subtitle, container, textyAxis, nameSerie, data_comunidad, data_drilldown){
// Create the chart
	Highcharts.chart(container, {
	  chart: {
	    type: 'column'
	  },
	  title: {
	    text: ""
	  },
	  subtitle: {
	    text: subtitle
	  },
	  xAxis: {
	    type: 'category'
	  },
	  yAxis: {
	    title: {
	      text: textyAxis
	    }
	  },
	  legend: {
	    enabled: false
	  },
	  plotOptions: {
	    series: {
	      borderWidth: 0,
	      dataLabels: {
	        enabled: true,
	        format: '{point.y:1f}'
	      }
	    }
	  },

	  tooltip: {
	    headerFormat: '<span style="font-size:11px"><b>{series.name}</b></span><br>',
	    pointFormat: '<b><span style="color:{point.color}">{point.name}</span></b>: <b>{point.y:2f}</b> publicaciones<br/>'
	  },

	  "series": [
	    {
	      "name": nameSerie,
	      "colorByPoint": true,
	      "data": data_comunidad
	    }
	  ],
	  "drilldown": {
	    "series": data_drilldown
	  }
	});

}

function charge_chart_bar(title, subtitle, container, textyAxis, nameSerie, data){
	Highcharts.chart(container, {
	    chart: {
	        type: 'column'
	    },
	    title: {
	        text: ""
	    },
	    subtitle: {
	        text: subtitle
	    },
	    xAxis: {
	        type: 'category',
	        labels: {
	            rotation: -45,
	            style: {
	                fontSize: '13px',
	                fontFamily: 'Verdana, sans-serif'
	            }
	        }
	    },
	    yAxis: {
	        min: 0,
	        title: {
	            text: textyAxis
	        }
	    },
	    legend: {
	        enabled: false
	    },
	    tooltip: {
	    	headerFormat: '',
	        pointFormat: '{series.name} en {point.name}: <b>{point.y:1f}</b>'
	    },
	    series: [{
	        name: nameSerie,
	        data: data,
	        dataLabels: {
	            enabled: true,
	            rotation: -90,
	            color: '#FFFFFF',
	            align: 'right',
	            format: '{point.y:.f}', // one decimal
	            y: 10, // 10 pixels down from the top
	            style: {
	                fontSize: '13px',
	                fontFamily: 'Verdana, sans-serif'
	            }
	        }
	    }]
	});
}

function charge_chart_cake(title, subtitle, container, nameSerie, data){
	Highcharts.chart(container, {
		chart: {
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie'
		},
		title: {
			text: "" 
		},
		subtitle: {
		    text: subtitle
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