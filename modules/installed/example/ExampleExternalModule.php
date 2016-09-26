<?php
namespace ExternalModules;
require_once dirname(__FILE__) . '/../../../classes/ExternalModules.php';

class ExampleExternalModule extends AbstractExternalModule
{
	function hook_project_home_page($project_id)
	{
		$this->selectData('...');
		$this->updateUserPermissions('...');

		?>
		<script>
			alert("This message came from an External Module hook!  Your project id is <?= $project_id ?>!");
		</script>
		<?php
	}
}
