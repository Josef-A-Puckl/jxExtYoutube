<?php

    /**
     * Metadata version
     */
    $sMetadataVersion = '2.0';

    /**
     * Module information
     */
    $aModule = [
        'id'            => 'jxExtYoutube',
        'title'         => 'jxExtYoutube - Extension Module for embedded Youtube and Vimeo Videos',
        'description'   => [
                            'de' => 'Erweiterung für eine konfigurierbare Anzeige von eingebetten YouTube und Vimeo Videos sowie Vererbung der Mediendateien an Varianten.',
                            'en' => 'Extension for configurable display of embedded YouTube and Vimeo Videos and inheritance of media files to variants.'
                            ],
        'thumbnail'     => 'jxextyoutube.png',
        'version'       => '1.0.0',
        'author'        => 'Joachim Barthel',
        'url'           => 'https://github.com/job963/jxextyoutube',
        'email'         => 'jobarthel@gmail.com',
        'extend' => [
            \OxidEsales\Eshop\Application\Model\Article::class  => Ecs\Jx\jxExtYoutube\Model\Article::class,
            \OxidEsales\Eshop\Application\Model\MediaUrl::class => Ecs\Jx\jxExtYoutube\Model\MediaUrl::class,
        ],
        'settings' => [
            [
                'group' => 'JXYOUTUBE_PLAYSETTINGS',
                'name' => 'sJxYoutubeVideoSize',
                'type' => 'select',
                'value' => '1920x1080',
                'constrains' => '425x340|420x315|480x360|533x400|640x480|960x720|533x300|560x315|640x360|853x480|1280x720|1920x1080',
                'position' => 0
            ],
            [
                'group' => 'JXYOUTUBE_PLAYSETTINGS',
                'name' => 'bJxYoutubeAutoPlay',
                'type' => 'bool',
                'value' => 'false'
            ],
            [
                'group' => 'JXYOUTUBE_CONTROLS',
                'name' => 'bJxYoutubeUseShopLanguage',
                'type' => 'bool',
                'value' => 'true'
            ],
            [
                'group' => 'JXYOUTUBE_CONTROLS',
                'name' => 'bJxYoutubeVideoTitle',
                'type' => 'bool',
                'value' => 'true'
            ],
            [
                'group' => 'JXYOUTUBE_CONTROLS',
                'name' => 'bJxYoutubePlayerControls',
                'type' => 'bool',
                'value' => 'true'
            ],
            [
                'group' => 'JXYOUTUBE_CONTROLS',
                'name' => 'bJxYoutubeAnnotations',
                'type' => 'bool',
                'value' => 'true'
            ],
            [
                'group' => 'JXYOUTUBE_CONTROLS',
                'name' => 'bJxYoutubeSubtitles',
                'type' => 'bool',
                'value' => 'false'
            ],

            [
                'group' => 'JXYOUTUBE_YOUTUBE',
                'name' => 'sJxYoutubeVideoQuality',
                'type' => 'select',
                'value' => 'hd1080',
                'constrains' => 'default|small|medium|large|hd720|hd1080',
                'position' => 0
            ],
            [
                'group' => 'JXYOUTUBE_YOUTUBE',
                'name' => 'bJxYoutubePlayHD',
                'type' => 'bool',
                'value' => 'true'
            ],
            [
                'group' => 'JXYOUTUBE_YOUTUBE',
                'name' => 'bJxYoutubeRecommendation',
                'type' => 'bool',
                'value' => 'false'
            ],
            [
                'group' => 'JXYOUTUBE_YOUTUBE',
                'name' => 'bJxYoutubeExtendedPrivacy',
                'type' => 'bool',
                'value' => 'false'
            ],

            [
                'group' => 'JXYOUTUBE_VIMEO',
                'name' => 'sJxYoutubeControlsColor',
                'type' => 'select',
                'value' => 'blue',
                'constrains' => 'blue|orange|lime|magenta|white',
                'position' => 0
            ],
            [
                'group' => 'JXYOUTUBE_VIMEO',
                'name' => 'bJxYoutubeShowTitle',
                'type' => 'bool',
                'value' => 'true'
            ],
            [
                'group' => 'JXYOUTUBE_VIMEO',
                'name' => 'bJxYoutubeShowAuthor',
                'type' => 'bool',
                'value' => 'true'
            ],
            [
                'group' => 'JXYOUTUBE_VIMEO',
                'name' => 'bJxYoutubeLoopPlay',
                'type' => 'bool',
                'value' => 'false'
            ],
            /*array(
            'group' => 'JXYOUTUBE_VIMEO',
            'name'  => 'bJxYoutubeShowLink',
            'type'  => 'bool',
            'value' => 'true'
            ),
            array(
            'group' => 'JXYOUTUBE_VIMEO',
            'name'  => 'bJxYoutubeShowDescription',
            'type'  => 'bool',
            'value' => 'true'
            ),*/
        ]
];
