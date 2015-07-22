<?php
/**
 * DokuWiki Bootstrap3 Template: Translation Plugin
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

if (tpl_getConf('showTranslation') && $translation = plugin_load('helper','translation')) {

    if ($translation->istranslatable($INFO['id'])) {

      $translation->checkage();

      list($lc, $idpart) = $translation->getTransParts($INFO['id']);

      $trans_items = '';
      $trans_label = $translation->getLang('translations');

      foreach ($translation->translations as $trans) {
        $trans_items .= str_replace(array('<div class="li">', '</div>'), '', $translation->getTransItem($trans, $idpart));
      }
?>
<ul class="nav navbar-nav" id="dw__translation">
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="<?php echo $trans_label ?>">
      <i class="glyphicon glyphicon-flag"></i> <span class="hidden-lg hidden-md hidden-sm"><?php echo $trans_label ?></span><span class="caret"></span>
    </a>
  <ul class="dropdown-menu" role="menu">
    <li class="dropdown-header"><i class="glyphicon glyphicon-flag"></i> <?php echo $trans_label ?></li>
    <?php echo $trans_items ?>
  </ul>
</ul>
<?php } } ?>
