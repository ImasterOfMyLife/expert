
<!--Datepicker initialisation-->
<script type="text/javascript">
	$(function () {
		$('#datetimepicker2').datetimepicker({
			locale: 'ru',
			format: 'YYYY-MM-DD hh:mm:ss'
		});
	});
</script>

<script type="text/javascript">


	$( function() {

		var clients = [];

		$( 'input[name="cliFullName"]' ).click(function(){
			$.ajax({
				type:'POST',
				dataType: 'json',
				url:"{{ url('cases/ajgetcli') }}",
				success:function(clientsdata){
					clients = clientsdata;
					$( 'input[name="cliFullName"]' ).autocomplete({
						minLength: 3,
						source: clients,
						classes: {
							'ui-autocomplete': 'list-group' 
						},
						focus: function( event, ui ) {
							$( 'input[name="cliFullName"]' ).val( ui.item.label );
							return false;
						},
						select: function( event, ui ) {
							$( 'input[name="cliFullName"]' ).val( ui.item.label );
							$( 'input[name="client_id"]' ).val( ui.item.value );
							return false;
						}
					})
					.autocomplete( "instance" )._renderItem = function( ul, item ) {
						return $( '<li class="list-group-item">' )
						.append( "<div>" + 'Клиент: ' + item.label + "<br>" + 'Порядковый номер :' + item.value + "</div>" )
						.appendTo( ul );
					};

				}

			});

		});

	} );









</script>






