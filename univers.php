<?php
    require_once 'Page.php';

    $univers = new Page('Univers');
    $univers->start();
    $content = '<table>
                <tr>
                    <th>Personnages importants</th>
                    <th>Histoire</th>
                    <th>Peuple</th>
                </tr>
                <tr>
                    <td>Wallah</td>
                    <td>La bonne histoire</td>
                    <td>Akhab</td>
                </tr>
            </table>';
    if (isset($content)) {
        $univers->addContent($content, 'univers-menu');
    }
    $univers->end();
?>
