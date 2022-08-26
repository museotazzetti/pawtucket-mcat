
<div class="row">
	<div class="col-sm-8 " style='border-right:1px solid #ddd;'>
		<h1>Ricerca avanzata oggetti</h1>

<?php			
print "<p>Inserisci i termini di ricerca nei campi sottostanti.</p>";
?>

{{{form}}}

<div class='advancedContainer'>
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Cerca in tutti i campi nel database.">Parole chiave</span>
			{{{_fulltext%width=200px&height=1}}}
		</div>			
	</div>		
	<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Limita la ricerca al titolo degli oggetti.">Titolo</span>
			{{{ca_objects.preferred_labels.name%width=220px}}}
		</div>
	</div>
	<div class='row'>
		<div class="advancedSearchField col-sm-6">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Cerca l'ientificativo dell'oggetto.">Numero di accessione</span>
			{{{ca_objects.idno%width=210px}}}
		</div>
		<div class="advancedSearchField col-sm-6">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Limita la ricerca ad una tipologia di oggetto.">Tipologia</span>
			{{{ca_objects.type_id%height=30px}}}
		</div>
	</div>
	<!--<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Cerca i record con una specifica data o intervallo di date">Intervallo di date <i>(e.g. 1970-1979)</i></span>
			{{{ca_objects.dates.dates_value%width=200px&height=40px&useDatePicker=0}}}
		</div>
	</div>-->
	<!--<div class='row'>
		<div class="advancedSearchField col-sm-12">
			<span class='formLabel' data-toggle="popover" data-trigger="hover" data-content="Search records within a particular collection.">Collection </span>
			{{{ca_collections.preferred_labels%restrictToTypes=collection%width=200px&height=40px}}}
		</div>
	</div>-->
	<br style="clear: both;"/>
	<div class='advancedFormSubmit'>
		<span class='btn btn-default'>{{{reset%label=Reset}}}</span>
		<span class='btn btn-default' style="margin-left: 20px;">{{{submit%label=Cerca}}}</span>
	</div>
</div>	

{{{/form}}}

	</div>
	<div class="col-sm-4" >
		<h1>Come cercare nell'Archivio</h1>
		<p>Per cercare una termine generico, inserirlo nel campo <strong>Parole Chiave</strong>.</p>
		<p>Usare il campo titolo per cercare <strong>solo</strong> nel nome della fotografia.</p>
		<p>Il campo <strong>Numero di Accessione</strong> permette di ricercare utilizzando il codice identificativo di ciascun record.</p>
	</div><!-- end col -->
</div><!-- end row -->

<script>
	jQuery(document).ready(function() {
		$('.advancedSearchField .formLabel').popover(); 
	});
	
</script>