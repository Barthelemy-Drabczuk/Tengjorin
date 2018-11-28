<?php
/**
 * Created by PhpStorm.
 * User: d17010509
 * Date: 28/11/18
 * Time: 08:35
 */

require_once 'Page.php';

    $rpg = new Page('JDR');
    $rpg->start();
    $content = '<table>
                <tr>
                    <th>Introduction</th>
                    <th>Classes</th>
                    <th>Nationalités</th>
                    <th>Objets</th>
                    <th>Bestitaire</th>
                </tr>
                <tr>
                    <td>Wallah</td>
                    <td>Forteresse</td>
                    <td>Le pays du feu</td>
                    <td>LA BOULE MAGIQUE</td>
                    <td>La sale bête</td>
                </tr>
            </table>';
    if (isset($content)) {
        $rpg->addContent($content, 'rpg-menu');
    }
    $rpg->end();
?>
