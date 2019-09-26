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
 * @copyright (C) Joachim Barthel, 2015-2016
 *
 */

namespace Ecs\Jx\jxExtYoutube\Model;

use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\Request;

class Article extends Article_parent
{
    /**
     * Return article media URL
     *
     * @return array
     *
     * Extended for retrieving parent media urls if it is a variant and inheriting them
     */
    public function getMediaUrls()
    {
        if ($this->_aMediaUrls === null) {
            $this->_aMediaUrls = oxNew("oxlist");
            $this->_aMediaUrls->init("oxmediaurl");
            $this->_aMediaUrls->getBaseObject()->setLanguage($this->getLanguage());

            $sViewName = getViewName("oxmediaurls", $this->getLanguage());
            if ($this->getParentId()) {
                $sQ = "select * from {$sViewName} where oxobjectid = '" . $this->getParentId() . "'";
            } else {
                $sQ = "select * from {$sViewName} where oxobjectid = '" . $this->getId() . "'";
            }
            $this->_aMediaUrls->selectString($sQ);
        }
        return $this->_aMediaUrls;
    }
}
