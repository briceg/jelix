<?php
/**
* @package      jelix
* @subpackage   jtpl_plugin
* @author       Laurent Jouanneau
* @contributor  Dominique Papin
* @copyright    2007-2008 Laurent Jouanneau, 2007 Dominique Papin
* @link         http://www.jelix.org
* @licence      GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/

/**
 * function plugin :  print the html content of a form control. You should use this plugin inside a formcontrols block
 *
 * @param jTpl $tpl template engine
 * @param string $ctrlname  the name of the control to display (required if it is outside a formcontrols)
 */
function jtpl_function_html_ctrl_control($tpl, $ctrlname='')
{
    if( (!isset($tpl->_privateVars['__ctrlref']) || $tpl->_privateVars['__ctrlref'] == '') && $ctrlname =='') {
        return;
    }

    if($ctrlname =='') {
        if($tpl->_privateVars['__ctrl']->type == 'submit' || $tpl->_privateVars['__ctrl']->type == 'reset' || $tpl->_privateVars['__ctrl']->type == 'hidden') return;
        $tpl->_privateVars['__displayed_ctrl'][$tpl->_privateVars['__ctrlref']] = true;
        $tpl->_privateVars['__formbuilder']->outputControl($tpl->_privateVars['__ctrl']);
    }else{
        $ctrls = $tpl->_privateVars['__form']->getControls();
        if($ctrls[$ctrlname]->type == 'submit' || $ctrls[$ctrlname]->type == 'reset' || $ctrls[$ctrlname]->type == 'hidden') return;
        $tpl->_privateVars['__displayed_ctrl'][$ctrlname] = true;
        $tpl->_privateVars['__formbuilder']->outputControl($ctrls[$ctrlname]);
    }
}

?>