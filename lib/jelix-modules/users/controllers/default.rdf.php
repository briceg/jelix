<?php
/**
* @package     jelix-modules
* @subpackage  users
* @version     $Id$
* @author      Jouanneau Laurent
* @contributor
* @copyright   2006 Jouanneau laurent
* @link        http://www.jelix.org
* @licence     GNU General Public Licence see LICENCE file or http://www.gnu.org/licenses/gpl.html
*/

class CTdefault extends jController {
    /**
    *
    */
    function userslist() {
        $rep = $this->getResponse('rdf');
        $letter = $this->param('letter');

        if($letter ==''){
            $rep->datas = array();
        }else{
            $rep->datas = jAuth::getUserList($letter.'%');
        }
        $rep->resNs="http://jelix.org/ns/users#";
        $rep->resNsPrefix='user';
        $rep->resUriPrefix = "urn:data:row:";
        $rep->resUriRoot = "urn:data:row";

        return $rep;
    }
}
?>