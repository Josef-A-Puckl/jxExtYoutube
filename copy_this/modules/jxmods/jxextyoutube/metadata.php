<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'jxExtYoutube',
    'title'        => 'jxExtYoutube - Extension Module for embedded Youtube Videos',
    'description'  => array(
                        'de' => 'Erweiterung für eine konfigurierbare Anzeige von eingebetten YouTube Videos sowie Vererbung der Mediendateien an Varianten.',
                        'en' => 'Extension for configurable Display of embedded YouTube Videos and inheritance of media files to variants.'
                        ),
    'thumbnail'    => 'jxextyoutube.png',
    'version'      => '0.1',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxextyoutube',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        'oxmediaurl' => 'jxmods/jxextyoutube/application/models/jxyoutube_oxmediaurl',
                        'oxarticle'  => 'jxmods/jxextyoutube/application/models/jxyoutube_oxarticle'
                        ),
    'files'        => array(
                        ),
    'templates'    => array(
                        ),
    'blocks'       => array(
                        ),
    'events'       => array(
                        ),
    'settings'     => array(
                            array(
                                    'group' => 'JXYOUTUBE_PLAYSETTINGS', 
                                    'name'  => 'sJxYoutubeVideoSize', 
                                    'type'  => 'select', 
                                    'value' => '425x344',
                                    'constrains' => '425x340|420x315|480x360|533x400|640x480|960x720|533x300|560x315|640x360|853x480|1280x720', 
                                    'position' => 0 
                                    ),
                            array(
                                    'group' => 'JXYOUTUBE_PLAYSETTINGS', 
                                    'name'  => 'sJxYoutubeVideoQuality', 
                                    'type'  => 'select', 
                                    'value' => 'default',
                                    'constrains' => 'default|small|medium|large|hd720', 
                                    'position' => 0 
                                    ),
                            array(
                                    'group' => 'JXYOUTUBE_PLAYSETTINGS', 
                                    'name'  => 'bJxYoutubePlayHD', 
                                    'type'  => 'bool', 
                                    'value' => 'false'
                                ),
                            array(
                                    'group' => 'JXYOUTUBE_PLAYSETTINGS', 
                                    'name'  => 'bJxYoutubeAutoPlay', 
                                    'type'  => 'bool', 
                                    'value' => 'false'
                                ),
                            array(
                                    'group' => 'JXYOUTUBE_PLAYSETTINGS', 
                                    'name'  => 'bJxYoutubeRecommendation', 
                                    'type'  => 'bool', 
                                    'value' => 'false'
                                ),
                            array(
                                    'group' => 'JXYOUTUBE_CONTROLS', 
                                    'name'  => 'bJxYoutubeUseShopLanguage', 
                                    'type'  => 'bool', 
                                    'value' => 'true'
                                ),
                            array(
                                    'group' => 'JXYOUTUBE_CONTROLS', 
                                    'name'  => 'bJxYoutubeVideoTitle', 
                                    'type'  => 'bool', 
                                    'value' => 'true'
                                ),
                            array(
                                    'group' => 'JXYOUTUBE_CONTROLS', 
                                    'name'  => 'bJxYoutubePlayerControls', 
                                    'type'  => 'bool', 
                                    'value' => 'true'
                                ),
                            array(
                                    'group' => 'JXYOUTUBE_CONTROLS', 
                                    'name'  => 'bJxYoutubeAnnotations', 
                                    'type'  => 'bool', 
                                    'value' => 'true'
                                ),
                            array(
                                    'group' => 'JXYOUTUBE_CONTROLS', 
                                    'name'  => 'bJxYoutubeSubtitles', 
                                    'type'  => 'bool', 
                                    'value' => 'false'
                                ),
                            array(
                                    'group' => 'JXYOUTUBE_PRIVACY', 
                                    'name'  => 'bJxYoutubeExtendedPrivacy', 
                                    'type'  => 'bool', 
                                    'value' => 'false'
                                ),
                        )
    );

?>
