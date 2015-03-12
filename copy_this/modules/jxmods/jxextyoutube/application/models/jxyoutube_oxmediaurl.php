<?php

/*
 *    This file is part of the module jxExtYoutube for OXID eShop Community Edition.
 *
 *    The module jxExtYoutube for OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    The module jxExtYoutube for OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      https://github.com/job963/jxExtYoutube
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @copyright (C) Joachim Barthel, 2015
 *
 */

class jxyoutube_oxmediaurl extends jxyoutube_oxmediaurl_parent
{
    
    /**
     * Transforms the link to YouTube object, and returns it.
     *
     * @return string
     * 
     * Extended for a configurable display of embedded YouTube videos
     */
    protected function _getYoutubeHtml()
    {
        $sUrl = $this->oxmediaurls__oxurl->value;
        $sDesc = $this->oxmediaurls__oxdesc->value;
        
        if ( strpos( $sUrl, 'youtube.com' ) ) {
            $sYoutubeUrl = str_replace( "www.youtube.com/watch?v=", "www.youtube.com/embed/", $sUrl );
            $sYoutubeUrl = preg_replace( '/&amp;/', '?', $sYoutubeUrl, 1 );
        }
        if ( strpos( $sUrl, 'youtu.be' ) ) {
            $sYoutubeUrl = str_replace( "youtu.be/", "www.youtube.com/embed/", $sUrl );
        }

        $myConfig = oxRegistry::get("oxConfig");
        $aParams = array();
        
        if ( strpos($sYoutubeUrl,'?') !== FALSE ) {
            $aParams = explode( '&', substr($sYoutubeUrl,strpos($sYoutubeUrl,'?')+1) );
            $sYoutubeUrl = substr( $sYoutubeUrl, 0, strpos($sYoutubeUrl,'?') );
        }
        
        $aSize = explode( 'x', $myConfig->getConfigParam( 'sJxYoutubeVideoSize' ) );
        
        if ( $myConfig->getConfigParam( 'bJxYoutubeRecommendation' ) == FALSE ) {
            $aParams[] = 'rel=0';
        }
        if ( $myConfig->getConfigParam( 'bJxYoutubeAutoPlay' ) == TRUE ) {
            $aParams[] = 'autoplay=1';
        }
        if ( $myConfig->getConfigParam( 'bJxYoutubePlayHD' ) == TRUE ) {
            $aParams[] = 'hd=1';
        }
        if ( $myConfig->getConfigParam( 'bJxYoutubeUseShopLanguage' ) == TRUE ) {
            $oLang = oxRegistry::getLang();
            $iLangId = $oLang->getTplLanguage();
            $sLangCode = $oLang->getLanguageAbbr( $iLangId );
            $aParams[] = 'hl='.$sLangCode;
            $aParams[] = 'cc_lang_pref='.$sLangCode;
        }
        if ( $myConfig->getConfigParam( 'bJxYoutubeVideoTitle' ) == FALSE ) {
            $aParams[] = 'showinfo=0';
        }
        if ( $myConfig->getConfigParam( 'bJxYoutubePlayerControls' ) == FALSE ) {
            $aParams[] = 'controls=0';
        }
        if ( $myConfig->getConfigParam( 'bJxYoutubeSubtitles' ) == TRUE ) {
            $aParams[] = 'cc_load_policy=1';
        }
        if ( $myConfig->getConfigParam( 'bJxYoutubeAnnotations' ) == FALSE ) {
            $aParams[] = 'iv_load_policy=3';
        }
        $aQuality = array( 'small', 'medium', 'large', 'hd720' );
        if ( in_array( $myConfig->getConfigParam( 'sJxYoutubeVideoQuality'), $aQuality ) ) {
            $aParams[] = 'vq=' . $myConfig->getConfigParam( 'sJxYoutubeVideoQuality');
        }
        if ( $myConfig->getConfigParam( 'bJxYoutubeExtendedPrivacy' ) == TRUE ) {
            $sYoutubeUrl = str_replace( "www.youtube.com/", "www.youtube-nocookie.com/", $sYoutubeUrl );
        }
        
        $sParams = '?' . implode( '&', $aParams );
        
        $sYoutubeTemplate = '%s<br><iframe width="%d" height="%d" src="%s%s" frameborder="0" allowfullscreen></iframe>';
        $sYoutubeHtml = sprintf( $sYoutubeTemplate, $sDesc, $aSize[0], $aSize[1], $sYoutubeUrl, $sParams, $sYoutubeUrl );

        return $sYoutubeHtml;
    }
    
}
