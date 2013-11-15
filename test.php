<?php

	require 'lib/class.ponvif.php';

	$test=new ponvif();
	$test->setUsername('HERE-NVT-USERNAME');
	$test->setPassword('HERE-NVT-PASSWORD');
	$test->setIPAddress('HERE-NVT-IPADDRESS');

	$test->initialize();

	print_r($test->media_GetVideoSources());
	print_r($test->media_GetProfiles());
	print_r($test->core_GetCapabilities());

	$sources=$test->getSources();
	print_r($sources);

	echo 'Media url: '.$test->getMediaUri()."\n";
	echo 'Device url: '.$test->getDeviceUri()."\n";
	echo 'Ptz url: '.$test->getPTZUri()."\n";

	print_r($test->getSupportedVersion());

	print_r($test->core_getDeviceInformation());

	print_r($test->media_GetServices());

	$profileToken=$sources[0][0]['profiletoken'];
	$ptzNodeToken=$sources[0][0]['ptz']['nodetoken'];

	echo $test->media_GetStreamUri($profileToken)."\n";

	$presets=$test->ptz_GetPresets($profileToken);

	// get preset token of first preset
	$presetToken=$presets[0]['Token'];
	echo "$presetToken\n";

	print_r($test->ptz_ContinuousMove($profileToken,"0.5","0"));
	print_r($test->ptz_Stop($profileToken,"false","true"));
	print_r($test->ptz_ContinuousMove($profileToken,"-0.5","0"));
	print_r($test->ptz_Stop($profileToken,"false","true"));

	// reset position to preset got previously, example usage of isFault
	if (!$test->isFault($test->ptz_GotoPreset($profileToken,$presetToken,"0","0","0"))) echo "GotoPreset executed successfully\n";

?>
