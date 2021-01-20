<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/wavesurfer.js"></script>

<br>
<div class="container">
 <div class="row">
   <div id="produtos"><div>
  <div> 	
<div>	






<script>


var arrayProdutos = [];


arrayProdutos.push({ 
	id: 1, 
	nome: 'Produto 1',
	url: 'https://musicmatters.com.br/wp-content/uploads/woocommerce_uploads/2020/04/a-song-for-you.mp3' 
});


arrayProdutos.push({ 
	id: 2, 
	nome: 'Produto 2',                                                                                                                           
	url: 'https://musicmatters.com.br/wp-content/uploads/woocommerce_uploads/2020/04/a-song-for-you.mp3' 
});


arrayProdutos.push({ 
	id: 3, 
	nome: 'Produto 3',                                                                                                                           
	url: 'https://musicmatters.com.br/wp-content/uploads/woocommerce_uploads/2020/04/a-song-for-you.mp3' 
});
 


var html = '';

html = html + '<table class="table">'
html = html + '<t>'
html = html + '<th>Id<th>'
html = html + '<th>Produto<th>'
html = html + '<th>Música<th>'
html = html + '</tr>'



for(i = 0; i <= arrayProdutos.length -1; i++){ 

	html = html + '<tr>';
	html = html + '<td>' + arrayProdutos[i].id + '<td>';
	html = html + '<td>' + arrayProdutos[i].nome + '<td>';
	html = html + '<td><div id="waveform'+arrayProdutos[i].id+'"></div><td>';
	html = html + '</tr>';


};



html = html + '<table>';

$('#produtos').html(html);




for(cont = 0; cont <= arrayProdutos.length -1; cont++){ 


	var wavesurfer = WaveSurfer.create({
	    container: '#waveform'+arrayProdutos[cont].id,
	    waveColor: 'blue',
	    progressColor: 'purple'
	});


   console.log(arrayProdutos[cont].url);
   wavesurfer.load(arrayProdutos[cont].url);

   console.log(wavesurfer);

  

}




</script>
