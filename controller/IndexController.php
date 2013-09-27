<?php
class IndexController extends Controller {
	public function index() {
		$this->getSmarty ();
		
		require_once SERVICE . DS . 'admin' . DS . 'ImgcarouserlService.class.php';
		// START 数据库查询及分页数据
		$imgService = new ImgcarouserlService ( $this->getDB () );
		$items = $imgService->getIndexPage ( 20 );
		$source = "";
		if ($items) {
			
			foreach ( $items as $item ) {
				if (strlen ( $item->desc ) > 100) {
					$desc = substr_replace ( $item->desc, '....', 100 );
				} else {
					$desc = $item->desc;
				}
			    if (strlen ( $item->title ) > 16) {
					$item->title = substr_replace (  $item->title, '....', 16 );
				}  
				$source .= "
 		<LI><A href=\"$item->url\"  target=\"_blank\"><IMG src= \"WEBSITE_URL.$item->imgname\"/></A>
 		<div>
 		<h3>$item->title</h3>
 		<span class=\"time\">$item->product_time</span>
 		
 		<p> $desc
 		</p>
 			<A href=\"$item->url\" class=\"a-but\">View Details</A>
 		</div>
 		</LI>
 		";
			}
			// print($source);
			$this->smarty->assign ( 'imagesources', $source );
		
		}
		
		$this->smarty->display ( "index.tpl" );
	}
	
	public function createItemLI($item) {
		
		return "
 		<LI><A href=\"#\"  target=\"_blank\"><IMG src=\".WEBSITE_URL.'uploads/arousel'.$item->imagename\"/></A>
 		<div>
 		<h3>$item->title</h3>
 		<span class=\"time\">$item->product_time</span>
 		
 		<p> $item->desc
 		</p>
 			<A href=\".$item->url\" class=\"a-but\">View Details</A>
 		</div>
 		</LI>
 		";
		
		// "<div class=\"windbox\" id='windbox'><div class=\"wind\" > <a
		// href=\"#\" class=\"fr\" onclick=\"javascript:closeWin();\"><img
		// src=\"".WEBSITE_URL."public/img/Close-ioc.gif\"/></a><span
		// class=\"Dataerror\">".
		// "<img src=\"".WEBSITE_URL."public/img/Dataerror.gif\" border=\"0\"/>
		// ".
		// "</span> </div> <div class=\"windbg\"></div></div>";
	}
}