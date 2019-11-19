$(function(){
$("#destino").change(function(){ // se activa el script cuando selecciono el select vehiculo
	 destino=$(this).val() // Tomo el valor seleccionado
 
	 //envio a una pagina que hara la consulta sql y me devolvera los datos para poner en el select
 
	 $.get("getfechas2.php?PAQ_ID="+destino,
		 function(data){
			 $("#fecha").html(data); // Tomo el resultado e inserto los datos en el select marca								
		 });															
});
});		
