<?php
/**
 * DokuWiki Bootstrap3 Template: Sidebar
 *
 * @link     http://dokuwiki.org/template:bootstrap3
 * @author   Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

?>
<!-- ********** ASIDE ********** -->
<aside id="<?php echo $sidebar_id ?>" class="dw__sidebar <?php echo $sidebar_class ?> hidden-print">
  <div class="content">
    <div class="toogle hidden-lg hidden-md hidden-sm" data-toggle="collapse" data-target="#<?php echo $sidebar_id ?> .collapse">
      <i class="fa fa-fw fa-th-list"></i> <?php echo $lang['sidebar'] ?>
    </div>
    <div class="collapse in">
      <?php tpl_includeFile($sidebar_header) ?>
      <?php bootstrap3_sidebar(tpl_include_page($sidebar_page, 0, 1)) /* includes the nearest sidebar page */ ?>
      <?php tpl_includeFile($sidebar_footer) ?>
    </div>
  </div>
</aside>
